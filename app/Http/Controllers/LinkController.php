<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;
use function Psy\debug;

class LinkController extends Controller
{
    private $domen = 'site.ru/';

    public function createShortenedUrl(Request $request)
    {
        $request->validate([
            'url' => 'required|url',
        ]);

        $latest_shortened_url = optional(Link::latest()->first())->shortened_url;

        $link = Link::firstOrCreate([
            'original_url' => $request->url
        ],
            [
                'original_url' => $request->url,
                'shortened_url' => !empty($latest_shortened_url) ?
                    $this->domen . str_increment(str_replace($this->domen, '', $latest_shortened_url)) :
                    $this->domen . 'a'
            ]
        );

        return response()->json(['shortened_url' => $link->shortened_url]);
    }

    public function getRecent()
    {
        $links = Link::orderBy('created_at', 'desc')->take(10)->get();

        return response()->json($links);
    }
}
