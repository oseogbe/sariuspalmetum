<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PalmController extends Controller
{
    public function index(Request $request)
    {
        $query = trim((string) $request->get('q', ''));
        $palms = collect(config('palms'));

        if ($query !== '') {
            $lower = mb_strtolower($query);
            $palms = $palms->filter(function ($palm) use ($lower) {
                $common = mb_strtolower($palm['common_name'] ?? '');
                $scientific = mb_strtolower($palm['scientific_name'] ?? '');
                return str_contains($common, $lower) || str_contains($scientific, $lower);
            })->values();
        }

        return view('palms', [
            'palms' => $palms,
            'q' => $query,
        ]);
    }
}


