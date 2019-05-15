@extends('index')
@section('title', 'Đổi mật khẩu')
@section('content')
    <section id="login">
        <div class="container">
            <div class="row">
                <div class="form-wrap">
                    <br>
                    <h1>Đổi mật khẩu</h1>
                    <form action="{{ route('ctv.update_password') }}" method="post" id="login-form" autocomplete="off">
                        {{ csrf_field() }}
                        @include('includes.message')
                        <div class="form-group">
                            <label for="email" class="sr-only">Mật khẩu cũ</label>
                            <input type="password" name="old_password" id="pass" class="form-control" placeholder="Nhập mật khẩu cũ" required>
                        </div>
                        <div class="form-group">
                            <label for="email" class="sr-only">Mật khẩu mới</label>
                            <input type="password" name="password" id="pass" class="form-control" placeholder="Mật khẩu mới" required>
                        </div>
                        <div class="form-group">
                            <label for="email" class="sr-only">Nhập lại mật khẩu mới</label>
                            <input type="password" name="password_confirmation" id="pass" class="form-control" placeholder="Nhập lại mật khẩu mới" required>
                        </div>
                        <input type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Đổi mật khẩu">
                    </form>
                    <br>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
@endsection

