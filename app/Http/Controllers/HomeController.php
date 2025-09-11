<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @api {get} /home
     * @apiName ホーム画面表示
     * @apiGroup Home
     *
     * @apiSuccess {interface} Renderable
     */
    public function index(): Renderable
    {
        return view('home');
    }
}