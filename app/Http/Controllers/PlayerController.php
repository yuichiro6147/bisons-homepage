<?php

namespace App\Http\Controllers;

class PlayerController extends Controller {
    /**
     * @api {get} /players 1. index
     * @apiGroup Player
     * @apiName index
     * @apiDescription
     * 選手一覧を取得します。
     */
    public function index() {
        return view('players');
    }
}
