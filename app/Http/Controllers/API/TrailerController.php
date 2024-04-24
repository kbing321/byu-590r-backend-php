<?php

namespace App\Http\Controllers\API;

use App\Models\Trailer;


class TrailerController extends BaseController
{
    public function index() {
        $trailers = Trailer::orderBy('movie_trailer')->get();
        return $this->sendResponse($trailers, 'Trailers');
    }
}
