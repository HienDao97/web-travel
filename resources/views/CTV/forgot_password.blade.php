@extends('index')
@section('title', 'Quên mật khẩu')
@section('content')
    <section id="login">
        <div class="container">
            <div class="row">
                <div class="form-wrap">
                    <br>
                    <h1>Nhập email của bạn để lấy lại mật khẩu</h1>
                    <form role="form" action="javascript:;" method="post" id="login-form" autocomplete="off">
                        <div class="form-group">
                            <label for="email" class="sr-only">Tên đăng nhập</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email của bạn" required>
                            <div class="valid-feedback">Hợp lệ.</div>
                            <div class="invalid-feedback">Điền đầy đủ thông tin.</div>

                        </div>
                        <input type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Lấy lại mật khẩu">
                    </form>
                    <br>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
@endsection
