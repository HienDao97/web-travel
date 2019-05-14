@extends('index')
@section('title', 'Đăng kí cộng tác viên')
@section('content')
    <section id="login">
        <div class="container">
            <div class="row">
                <div class="form-wrap">
                    <br>
                    <h1>Đăng ký làm Cộng tác viên</h1>
                    <form  action="{{ route('ctv.register') }}"  method="post" id="login-form" autocomplete="off">
                        <div class="form-group">
                            <label for="id" style="font-weight: bold; color: #777777">Tên đăng nhập: </label>
                            <input type="text" name="name" id="id" class="form-control " value="{{ old('username') }}" placeholder="Tên đăng nhập (*)" required>
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
                            <input type="text" name="username" id="key" class="form-control" placeholder="Họ tên (*)" required>
                        </div>
                        <div class="form-group">
                            <label for="key" style="font-weight: bold; color: #777777">Email: </label>
                            <input type="email" name="email" id="key" class="form-control" placeholder="Email (*)" required>
                        </div>
                        <div class="form-group">
                            <label for="key" style="font-weight: bold; color: #777777">Số điện thoại: </label>
                            <input type="text" name="phone" id="key" class="form-control" value="{{ old('phone') }}" placeholder="Số điện thoại (*)" required>
                        </div>
                        <div class="form-group" >
                            <label for="key" style="font-weight: bold; color: #777777">Ngày sinh: </label>
                            <input type="date" placeholder="Ngày-tháng-năm sinh (*)" onClick="$(this).removeClass('placeholderclass')" class="dateclass placeholderclass form-control" id="ngaysinh" name="ngaysinh" required>
                        </div>
                        <div class="form-group">
                            <label for="key" style="font-weight: bold; color: #777777">Giới tính: </label>
                            <select class="form-control" name="datebirth" id="sel1" required>
                                <option value="" selected disabled>-- Giới tính (*) --</option>
                                <option value="1">Nam</option>
                                <option value="0">Nữ</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="key" style="font-weight: bold; color: #777777">Năm kinh nghiệm - Chứng chỉ: </label>
                            <input type="text" name="key" id="key" class="form-control" placeholder="Năm kinh nghiệm" required>
                            <div class="valid-feedback">Hợp lệ.</div>
                            <div class="invalid-feedback">Điền đầy đủ thông tin.</div>
                        </div>
                        <div class="form-group">
                            <label for="key" style="font-weight: bold; color: #777777">Chuyên ngành: </label>
                            <input type="text" name="key" id="key" class="form-control" placeholder="Chuyên ngành" >
                            <div class="valid-feedback">Hợp lệ.</div>
                            <div class="invalid-feedback">Điền đầy đủ thông tin.</div>
                        </div>
                        <div class="form-group">
                            <label for="sel1" style="font-weight: bold; color: #777777">Thành phố: </label>
                            <select class="form-control" id="sel1" required>
                                <option value="" selected disabled>-- Thành phố bạn làm việc (*) --</option>
                                @php
                                    echo App\Customer::rendListCityHtml();
                                @endphp
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="key" style="font-weight: bold; color: #777777">Giới thiệu: </label>
                            <textarea placeholder="Giới thiệu về bản thân (*)" class="form-control" required></textarea>
                        </div>
                        <div class="loaiCTV">
                            <label style="font-weight: bold; color: #777777">Loại cộng tác viên mà bạn muốn đăng ký:</label>
                            <table>
                                {{--<tr>--}}
                                    {{--<td>--}}
                                        {{--<input type="checkbox" name="check-box" /> <span>Phiên dịch viên</span>--}}
                                    {{--</td>--}}
                                    {{--<td>--}}
                                        {{--<input type="checkbox" name="check-box" /> <span>Hướng dẫn viên</span>--}}
                                    {{--</td>--}}
                                    {{--<td>--}}
                                        {{--<input type="checkbox" name="check-box" /> <span>Dịch thương mại</span>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr>--}}
                                    {{--<td>--}}
                                        {{--<input type="checkbox" name="check-box" /> <span>Dịch văn bản</span>--}}
                                    {{--</td>--}}
                                    {{--<td>--}}
                                        {{--<input type="checkbox" name="check-box" /> <span>Đón tiễn bay</span>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                @php
                                    echo App\Customer::genListWorkHtml();
                                @endphp
                            </table>
                        </div>
                        <div class="avt" align="left">
                            <div class="imageWrapper" style="margin: 10px 0 0 0;">
                                <img class="image" src="" style="width: 200px">
                            </div>
                            <button class="file-upload">
                                <input type="file" class="file-input" required>Tải ảnh đại diện
                            </button>
                        </div>
                        <input type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Đăng ký">
                    </form>
                    <a href="#" class="forget">Đăng nhập nếu bạn đã có tài khoản</a>
                    <br>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
@endsection
