<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CtvController extends Controller
{
    /**
     * View register
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function register(){
        //dd(request()->route()->getName());
        return view('CTV.register');
    }

    /**
     * Login view
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function login(){
        return view('CTV.login');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function order(){
        return view('CTV.order');
    }

    /**
     * Login view
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function info(){
        return view('CTV.info');
    }

    /**
     * Login view
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function registerTime(){
        return view('CTV.register_time');
    }

    /**
     * Login view
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function forgotPassword(){
        return view('CTV.forgot_password');
    }

    /**
     * Login view
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function changePassword(){
        return view('CTV.change_password');
    }

    /**
     * Login view
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function home(){
        return view('welcome');
    }
}
