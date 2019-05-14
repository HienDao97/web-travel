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
                @endphp
                @foreach($backendMenus as $menu)
                    @if(!empty(Auth::guard('apartners')->user()->id))
                        @if(isset($menu['hidden']))
                            @if($menu['hidden'] == 1)
                                @php
                                    $menu['hidden'] = 0;
                                @endphp
                            @else
                                @php
                                    $menu['hidden'] = 1;
                                @endphp
                            @endif
                        @endif
                    @endif
                    @if($menu['hidden'] == 1 || $menu['hidden'] == "")
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
                @endforeach
            </ul>
            <div class="anti-scroll">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
        </div>
    </div>
</div>
