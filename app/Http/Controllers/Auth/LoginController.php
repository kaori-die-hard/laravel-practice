<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

/**
 * ログインコントローラクラス
 */
class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * ログイン後リダイレクト先
     *
     * @var string
     */
    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }
}