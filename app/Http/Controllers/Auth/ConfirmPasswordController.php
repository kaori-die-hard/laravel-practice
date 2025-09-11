<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ConfirmsPasswords;

/**
 * パスワード確認コントローラクラス
 */
class ConfirmPasswordController extends Controller
{
    use ConfirmsPasswords;

    /**
     * 意図したURLが失敗した場合のリダイレクト先
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
}