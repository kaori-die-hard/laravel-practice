<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;

/**
 * パスワードリセットコントローラクラス
 */
class ResetPasswordController extends Controller
{
    use ResetsPasswords;

    /**
     * パスワードリセット後リダイレクト先
     *
     * @var string
     */
    protected $redirectTo = '/home';
}