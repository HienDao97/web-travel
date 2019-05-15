@if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
            {!! $error !!}<br/>
        @endforeach
    </div>
@endif
@if(session()->has('message_sucess'))
    <div class="alert alert-success">{{ session('message_sucess') }}</div>
@endif
@if(session()->has('login_error'))
    <div class="alert alert-danger">{{ session('login_error') }}</div>
@endif
