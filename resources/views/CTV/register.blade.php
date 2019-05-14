@extends('index')
@section('title', 'Đăng kí cộng tác viên')
@section('content')
    <section id="login">
        <div class="container">
            <div class="row">
                <div class="form-wrap">
                    <br>
                    <h1>Đăng ký làm Cộng tác viên</h1>
                    <form  action="{{ route('ctv.register') }}" enctype="multipart/form-data"  method="post" id="login-form" autocomplete="off">
                        {{ csrf_field() }}
                        @include('includes.message')
                        <div class="form-group">
                            <label for="id" style="font-weight: bold; color: #777777">Tên đăng nhập: </label>
                            <input type="text" name="name" id="id" class="form-control " value="{{ old('name') }}" placeholder="Tên đăng nhập (*)" required>
                        </div>
                        <div class="form-group">
                            <label for="key" style="font-weight: bold; color: #777777">Mật khẩu: </label>
                            <input type="password" name="password" id="key" class="form-control" placeholder="Mật khẩu (*)" required>
                        </div>
                        <div class="form-group">
                            <label for="key" style="font-weight: bold; color: #777777">Nhập lại mật khẩu: </label>
                            <input type="password" name="password_confirmation" id="key" class="form-control" placeholder="Nhập lại mật khẩu (*)" required>
                        </div>
                        <div class="form-group">
                            <label for="key" style="font-weight: bold; color: #777777">Họ tên: </label>
                            <input type="text" name="username" id="key" class="form-control" value="{{ old('username') }}" placeholder="Họ tên (*)" required>
                        </div>
                        <div class="form-group">
                            <label for="key" style="font-weight: bold; color: #777777">Email: </label>
                            <input type="email" name="email" id="key" class="form-control" value="{{ old('email') }}" placeholder="Email (*)" required>
                        </div>
                        <div class="form-group">
                            <label for="key" style="font-weight: bold; color: #777777">Số điện thoại: </label>
                            <input type="text" name="phone" id="key" class="form-control" value="{{ old('phone') }}" placeholder="Số điện thoại (*)" required>
                        </div>
                        <div class="form-group" >
                            <label for="key" style="font-weight: bold; color: #777777">Ngày sinh: </label>
                            <input type="date" value="{{ old('birthday') }}" name="birthday" onClick="$(this).removeClass('placeholderclass')" class="dateclass placeholderclass form-control" id="ngaysinh" required>
                        </div>
                        <div class="form-group">
                            <label for="key" style="font-weight: bold; color: #777777">Giới tính: </label>
                            <select class="form-control" name="sex" id="sel1" required>
                                <option value="" selected disabled>-- Giới tính (*) --</option>
                                @php
                                    echo App\Apartner::rendListOptionHtml(old('sex'), "sex")
                                @endphp
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="key" style="font-weight: bold; color: #777777">Năm kinh nghiệm - Chứng chỉ: </label>
                            <input type="text" name="experience" value="{{ old('experience') }}" id="key" class="form-control" placeholder="Năm kinh nghiệm" required>
                        </div>
                        <div class="form-group">
                            <label for="key" style="font-weight: bold; color: #777777">Chuyên ngành: </label>
                            <input type="text" name="specialized" value="{{ old('specialized') }}" id="key" class="form-control" placeholder="Chuyên ngành" >
                        </div>
                        <div class="form-group">
                            <label for="sel1" style="font-weight: bold; color: #777777">Thành phố: </label>
                            <select class="form-control" name="city" id="sel1" required>
                                <option value="" selected disabled>-- Thành phố bạn làm việc (*) --</option>
                                @php
                                    echo App\Apartner::rendListOptionHtml(old('city'), "city")
                                @endphp
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="key" style="font-weight: bold; color: #777777">Giới thiệu: </label>
                            <textarea name="description" value="{{ old('description') }}" placeholder="Giới thiệu về bản thân (*)" class="form-control" required></textarea>
                        </div>
                        <div class="loaiCTV">
                            <label style="font-weight: bold; color: #777777">Loại cộng tác viên mà bạn muốn đăng ký:</label>
                            <table>
                                @php
                                    echo App\Apartner::genListWorkHtml();
                                @endphp
                            </table>
                        </div>
                        <div class="avt" align="left">
                            <div class="imageWrapper" style="margin: 10px 0 0 0;">
                                <img class="image" src="" style="width: 200px">
                            </div>
                            <button class="file-upload">
                                <input type="file" name="avatar" class="file-input">Tải ảnh đại diện
                            </button>
                        </div>
                        <input type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Đăng ký">
                    </form>
                    <a href="{{ route('ctv.login.view') }}" class="forget">Đăng nhập nếu bạn đã có tài khoản</a>
                    <br>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
@endsection
