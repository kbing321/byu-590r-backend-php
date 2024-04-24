<?php

namespace App\Http\Controllers\API;

use App\Models\Director;


class DirectorController extends BaseController
{
    public function index() {
        $directors = Director::orderBy('last_name')->get();
        return $this->sendResponse($directors, 'Directors');
    }
}
