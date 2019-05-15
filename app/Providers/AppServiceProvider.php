<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $menus = [
            [
                'name' => 'TRANG CHỦ',
                'route_name' =>  'ctv.home.view',
                'sub' => [],
                'show_not_login' => 1,
                'show_login' => 1
                //'param' => ""
            ],
            [
                'name' => 'ĐĂNG KÝ LÀM CỘNG TÁC VIÊN',
                'route_name' => 'ctv.register.view',
                'sub' => [],
                'show_not_login' => 1,
                'show_login' => 0
                //'param' => ""
            ],
            [
                'name' => 'ĐĂNG KÝ THỜI GIAN LÀM VIỆC',
                'route_name' => 'ctv.register_time.view',
                'sub' => [],
                'show_not_login' => 0,
                'show_login' => 1
                //'param' => ""
            ],
            [
                'name' => 'ĐĂNG NHẬP',
                'route_name' => 'ctv.login.view',
                'sub' => [],
                'show_not_login' => 1,
                'show_login' => 0
                //'param' => ""
            ],
            [
                'name' => 'THÔNG TIN CÁ NHÂN',
                'route_name' => 'ctv.info.view',
                'sub' => [],
                'show_not_login' => 0,
                'show_login' => 1
                //'param' => ""
            ],
            [
                'name' => 'THÔNG TIN ĐƠN HÀNG',
                'route_name' => 'ctv.order.view',
                'sub' => [],
                'show_not_login' => 0,
                'show_login' => 1
                //'param' => (!empty(Auth::guard('apartners')->user()->id)) ? Auth::guard('apartners')->user()->id : ""
            ]
        ];
        View::share('backendMenus', $menus);
    }
}
