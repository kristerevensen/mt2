<?php

namespace App\Http\Controllers;

use App\Services\DataForSEOService;

class KeywordDataController extends Controller
{
    protected $dataForSEOService;

    public function __construct(DataForSEOService $dataForSEOService)
    {
        $this->dataForSEOService = $dataForSEOService;
    }

    public function postKeywordData()
    {
        $postArray = [
            [
                "location_name" => "United States",
                "keywords" => ["buy laptop", "cheap laptops for sale", "purchase laptop"]
            ],
            // Add other tasks as needed
        ];

        try {
            $result = $this->dataForSEOService->postKeywordData($postArray);
            return response()->json($result);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function getID() {
        $post_array[] = array(
            "datetime_from" => "2023-01-31 00:00:00 +02:00",
            "datetime_to" => "2024-02-01 00:00:00 +02:00",
            "limit" => 100,
            "offset" => 0,
            "sort" => "desc",
            "include_metadata" => true
         );
         try {
            $result = $this->dataForSEOService->postKeywordData($post_array);
            return response()->json($result);
            } catch (\Exception $e) {
                return response()->json(['error' => $e->getMessage()], 500);
            }

    }

    public function getLocations()
    {

        try {
            $result = $this->dataForSEOService->get_locations();
            return response()->json($result);
            } catch (\Exception $e) {
                return response()->json(['error' => $e->getMessage()], 500);
            }

    }
}
