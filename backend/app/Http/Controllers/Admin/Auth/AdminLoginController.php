<?php


namespace App\Http\Controllers\Admin\Auth;


use App\Http\Controllers\Controller;

class AdminLoginController extends Controller
{
    /**
     * ダッシュボード
     *
     * @return mixed
     */
    public function __invoke()
    {
        return view('admin.auth.login');
    }
}
