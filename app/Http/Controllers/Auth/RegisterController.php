<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\Validation\Validator as ContractsValidator;

/**
 * ユーザ新規登録コントローラクラス
 */
class RegisterController extends Controller
{
    use RegistersUsers;

    /**
     * ユーザ新規登録後リダイレクト先
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
        $this->middleware('guest');
    }

    /**
     * バリデーション
     *
     * @param array<string> $data
     * @return ContractsValidator
     */
    protected function validator(array $data): ContractsValidator
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * ユーザ新規登録処理
     *
     * @param array<string> $data
     * @return mixed
     */
    protected function create(array $data): mixed
    {
        return User::query()->create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}