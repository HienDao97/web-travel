<div class="top-header">
    <a href="#"><img class="top-header-logo" src="{{ asset('du_lich/img/logo.png') }}">
    </a>
</div>
<div class="header-menu">
    <div class="container">
        <div class="row">
            <ul class="menu-bar">
                @php
                    $currentRouteName = request()->route()->getName();
                    //dd($backendMenus)
                @endphp
                @foreach($backendMenus as $menu)
                    @if(!empty(Auth::guard('apartners')->user()->id))
                        @if($menu['show_login'] == 1)
                            @if($menu['route_name'] == $currentRouteName)
                                <li class="active">
                                    <a href="{{ route($menu['route_name']) }}"><span>{{ $menu['name'] }}</span></a>
                                </li>
                            @else
                                <li>
                                    <a href="{{ route($menu['route_name']) }}"><span>{{ $menu['name'] }}</span></a>
                                </li>
                            @endif
                        @endif
                    @else
                        @if($menu['show_not_login'] == 1)
                            @if($menu['route_name'] == $currentRouteName)
                                <li class="active">
                                    <a href="{{ route($menu['route_name']) }}"><span>{{ $menu['name'] }}</span></a>
                                </li>
                            @else
                                <li>
                                    <a href="{{ route($menu['route_name']) }}"><span>{{ $menu['name'] }}</span></a>
                                </li>
                            @endif
                        @endif
                    @endif
                @endforeach

            </ul>
            <div class="anti-scroll">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
        </div>
    </div>
</div>
