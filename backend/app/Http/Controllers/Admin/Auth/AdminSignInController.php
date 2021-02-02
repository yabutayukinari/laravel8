<?php


namespace App\Http\Controllers\Admin\Auth;


use App\Http\Controllers\Controller;

class AdminSignInController extends Controller
{
    /**
     * ダッシュボード
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function __invoke()
    {
        return view('admin.auth.sign-in');
    }
}
