<?php

namespace App\Http\Controllers;

use App\Models\Analytics;
use App\Models\Page;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public $url;
    /**
     * Display a listing of the resource.
     */
    public function index($url_code)
    {
        $this->url = Analytics::select('url',
        DB::raw('MAX(title) as title'),
        DB::raw('MAX(created_at) as created_at'),
        DB::raw('count(url) as count'),
        DB::raw('count(distinct(session_id)) as sessions'))
        ->where('project_code', $this->currentProjectCode())
        ->groupBy('url')
        ->orderBy('count','desc')
        ->get();
        return view('pages.view');
    }

    public function currentProjectCode()
    {
        $Project = Project::where('team_id', Auth::user()->currentTeam->id)->first();
        return $Project->project_code;
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Page $page)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Page $page)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Page $page)
    {
        //
    }
}
