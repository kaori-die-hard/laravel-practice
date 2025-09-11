<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

/**
 * パスワード再設定コントローラクラス
 */
class ForgotPasswordController extends Controller
{
    use SendsPasswordResetEmails;
}