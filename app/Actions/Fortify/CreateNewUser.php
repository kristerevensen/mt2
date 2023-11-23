<?php

namespace App\Actions\Fortify;

use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Str;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'domain' => ['required', 'string'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        return DB::transaction(function () use ($input) {
            return tap(User::create([
                'name' => $input['name'],
                'email' => $input['email'],
                'user_code' => $this->generateUniqueId(),
                'domain' => $this->extractDomain($input['domain']),
                'password' => Hash::make($input['password']),
            ]), function (User $user) {
                $this->createTeam($user);
            });
        });
    }

    /**
     * Create a personal team for the user.
     */
    protected function createTeam(User $user): void
    {
        $user->ownedTeams()->save(Team::forceCreate([
            'user_id' => $user->id,
            'name' => ucfirst(strtolower($this->extractDomain($user->domain))),
            'personal_team' => true,
            'domain' => $this->extractDomain($user->domain),
            'team_code' => $this->generateUniqueId()
        ]));
    }

    public function extractDomain($url)
    {
       // Prepend 'http://' if no scheme is present
        if (!preg_match("~^(?:f|ht)tps?://~i", $url)) {
            $url = "http://" . $url;
        }

        $parsedUrl = parse_url($url);
        $domain = $parsedUrl['host'] ?? '';

        // Optionally remove 'www.' from the domain
        $domain = str_replace('www.', '', $domain);

        // Remove trailing slashes
        return rtrim($domain, '/');
    }

    public function generateUniqueId($length = 10)
    {
        return Str::random($length);
    }
}
