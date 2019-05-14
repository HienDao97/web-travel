<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;

class HeaderComposer
{
    public $menus = [[]];

    /**
     * Create a movie composer.
     *
     * @return void
     */
    public function __construct()
    {
        $this->menus = [
            [
                'name' => 'Trang chu',
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
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        //$view->with('backendMenus', end($this->menus));
    }
}
