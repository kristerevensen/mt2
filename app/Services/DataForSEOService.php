<?php

namespace App\Services;

use Jovix\DataForSEO;
use DFSClientV3\DFSClient;
use DFSClientV3\Services\EntityCreator\EntityCreator;
use DFSClientV3\Models\CommonApi\User;
use DFSClientV3\Services\Logger\Logger;
use Illuminate\Support\Facades\Http;

class DataForSEOService
{
    private $apiUrl = 'https://api.dataforseo.com/';


    public function postKeywordData($postArray)
    {
        $response = Http::withOptions([
            'verify' => false  // Disable SSL certificate verification
         ])
         ->withBasicAuth(env('DATAFORSEO_LOGIN'), env('DATAFORSEO_PASSWORD'))
         ->post("{$this->apiUrl}/v3/keywords_data/google_ads/search_volume/task_post", $postArray);

        if ($response->successful()) {
            return $response->json();
        } else {
            // Handle errors, maybe throw an exception
            throw new \Exception("DataForSEO API request failed: " . $response->body());
        }
    }

    public function getIDList($postArray)
    {
        $response = Http::withOptions([
            'verify' => false  // Disable SSL certificate verification
         ])
         ->withBasicAuth(env('DATAFORSEO_LOGIN'), env('DATAFORSEO_PASSWORD'))
         ->post("{$this->apiUrl}//v3/keywords_data/id_list", $postArray);
         if ($response->successful()) {
            return $response->json();
            } else {
                // Handle errors, maybe throw an exception
                throw new \Exception("DataForSEO API request failed: " . $response->body());
            }
    }

    public function get_locations()
    {
        //https://api.dataforseo.com/v3/keywords_data/google_ads/locations
        $response = Http::withOptions([
            'verify' => false  // Disable SSL certificate verification
         ])
         ->withBasicAuth(env('DATAFORSEO_LOGIN'), env('DATAFORSEO_PASSWORD'))
         ->post("{$this->apiUrl}/v3/keywords_data/google_ads/locations");
         if ($response->successful()) {
            return $response->json();
            } else {
                // Handle errors, maybe throw an exception
                throw new \Exception("DataForSEO API request failed: " . $response->body());
            }
    }


    // Other methods as needed
}
