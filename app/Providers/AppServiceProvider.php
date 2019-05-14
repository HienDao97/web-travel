<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
                'sub' => []
            ],
            [
                'name' => 'ĐĂNG KÝ LÀM CỘNG TÁC VIÊN',
                'route_name' => 'ctv.register.view',
                'sub' => [],
            ],
            [
                'name' => 'ĐĂNG KÝ THỜI GIAN LÀM VIỆC',
                'route_name' => 'ctv.register_time.view',
                'sub' => []
            ],
            [
                'name' => 'ĐĂNG NHẬP',
                'route_name' => 'ctv.login.view',
                'sub' => []
            ],
            [
                'name' => 'THÔNG TIN CÁ NHÂN',
                'route_name' => 'ctv.info.view',
                'sub' => []
            ],
            [
                'name' => 'THÔNG TIN ĐƠN HÀNG',
                'route_name' => 'ctv.order.view',
                'sub' => []
            ]
        ];
        View::share('backendMenus', $menus);
    }
}
