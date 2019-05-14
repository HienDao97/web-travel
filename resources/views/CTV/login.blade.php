@extends('index')
@section('title', 'Đăng nhập')
@section('content')
    <section id="login">
        <div class="container">
            <div class="row">
                <div class="form-wrap">
                    <br>
                    <h1>Đăng nhập với tư cách là Cộng tác viên</h1>
                    <form role="form" action="javascript:;" method="post" id="login-form" autocomplete="off">
                        <div class="form-group">
                            <label for="id" class="sr-only">Tên đăng nhập</label>
                            <input type="text" name="id" id="id" class="form-control" placeholder="Tên đăng nhập" required>
                            <div class="valid-feedback">Hợp lệ.</div>
                            <div class="invalid-feedback">Điền đầy đủ thông tin.</div>

                        </div>
                        <div class="form-group">
                            <label for="key" class="sr-only">Mật khẩu</label>
                            <input type="password" name="key" id="key" class="form-control" placeholder="Mật khẩu" required>
                            <div class="valid-feedback">Hợp lệ.</div>
                            <div class="invalid-feedback">Điền đầy đủ thông tin.</div>
                        </div>
                        <div class="checkbox">
                            <span class="character-checkbox" onclick="showPassword()"></span>
                            <span class="label">Hiện mật khẩu</span>
                        </div>
                        <input type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Đăng nhập">
                    </form>
                    <a href="javascript:;" class="forget" data-toggle="modal" data-target=".forget-modal">Quên mật khẩu?</a>
                    <br>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
@endsection

