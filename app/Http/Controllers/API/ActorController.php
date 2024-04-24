<?php

namespace App\Http\Controllers\API;

use App\Models\Actor;


class ActorController extends BaseController
{
    public function index() {
        $actors = Actor::orderBy('last_name')->get();
        return $this->sendResponse($actors, 'Actors');
    }
}
