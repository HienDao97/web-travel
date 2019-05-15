@extends('index')
@section('title', 'Thông tin cá nhân')
@section('content')
    <div class="container" id="info">
        <h5>Thông tin cá nhân</h5>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-2">
                <div class="avatar">
                    <img src="{{ asset('du_lich/img/doctor-img2.png') }}">
                </div>
                <div class="row">
                    <div class="rate">
                        <img  src="{{ asset('du_lich/img/star.png') }}">
                    </div>
                    <div class="rate">
                        <img  src="{{ asset('du_lich/img/star.png') }}">
                    </div>
                    <div class="rate">
                        <img  src="{{ asset('du_lich/img/star.png') }}">
                    </div>
                    <div class="rate">
                        <img  src="{{ asset('du_lich/img/star.png') }}">
                    </div>
                    <div class="rate">
                        <img  src="{{ asset('du_lich/img/star.png') }}">
                    </div>
                </div>
                <button class="btn btn-success">Đổi avatar</button>
                <button class="btn btn-success"><a style="color: white" href="{{ route('ctv.change_password.view') }}">Đổi mật khẩu</a></button>
            </div>
            <div class="col-md-8">
                <table>
                    <tr>
                        <th>Họ và tên:</th>
                        <td><input class="form-control" type="text" name="full-name" value="Nguyễn Nhật Lê Trà Mi" disabled></td>
                    </tr>
                    <tr>
                        <th>Email:</th>
                        <td><input class="form-control" type="text" name="email" value="mi@gmail.com" disabled></td>
                    </tr>
                    <tr>
                        <th>Số điện thoại:</th>
                        <td><input class="form-control" type="text" name="phone" value="012345789232" disabled></td>
                    </tr>
                    <tr>
                        <th>Ngày tháng năm sinh:</th>
                        <td><input class="form-control" type="text" name="date-of-birth" value="30/2/2000" disabled></td>
                    </tr>
                    <tr>
                        <th>Giới tính:</th>
                        <td><input class="form-control" type="text" name="sex" value="Nữ" disabled></td>
                    </tr>
                    <tr>
                        <th>Loại cộng tác viên:</th>
                        <td><input class="form-control" type="text" name="type" value="Đón tiễn bay" disabled></td>
                    </tr>
                    <tr>
                        <th>Năm kinh nghiệm:</th>
                        <td><input class="form-control" type="text" name="experience" value="Hơn 5 năm" disabled></td>
                    </tr>
                    <tr>
                        <th>Chuyên ngành - Chứng chỉ:</th>
                        <td><input class="form-control" type="text" name="specialized" value="Du lịch" disabled></td>
                    </tr>
                    <tr>
                        <th>Thành phố:</th>
                        <td><input class="form-control" type="text" name="city" value="Đà Nẵng" disabled></td>
                    </tr>
                    <tr>
                        <th>Giới thiệu:</th>
                        <td><textarea class="form-control" placeholder="Mohamed Salah Ghaly là một cầu thủ bóng đá người Ai Cập hiện đang chơi ở vị trí tiền đạo cánh cho câu lạc bộ Liverpool và là thành viên của đội tuyển Ai Cập. Anh đã từng giành giải cầu thủ trẻ tài năng nhất năm châu Phi của CAF vào năm 2012" disabled></textarea>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
    <div class="container">
        <h5>Phản hồi khách hàng</h5>
        <div class="comment">
            <table>
                <tr>
                    <th>
                        <div class="small-avatar">
                            <img src="img/doctor-img2.png">
                        </div>
                    </th>
                    <th><a href="#"><b>Nguyễn Lê An</b></a></th>
                </tr>
                <tr>
                    <td></td>
                    <td class="form-control">Nhiệt tình, ok</td>
                </tr>
            </table>

            <table>
                <tr>
                    <th>
                        <div class="small-avatar">
                            <img src="img/doctor-img2.png">
                        </div>
                    </th>
                    <th><a href="#"><b>Nguyễn Lê An</b></a></th>
                </tr>
                <tr>
                    <td></td>
                    <td class="form-control">Trình độ chưa ổn</td>
                </tr>
            </table>

            <table>
                <tr>
                    <th>
                        <div class="small-avatar">
                            <img src="img/doctor-img2.png">
                        </div>
                    </th>
                    <th><a href="#"><b>Nguyễn Lê An</b></a></th>
                </tr>
                <tr>
                    <td></td>
                    <td class="form-control">Mohamed Salah Ghaly là một cầu thủ bóng đá người Ai Cập hiện đang chơi ở vị trí tiền đạo cánh cho câu lạc bộ Liverpool và là thành viên của đội tuyển Ai Cập. Anh đã từng giành giải cầu thủ trẻ tài năng nhất năm châu Phi của CAF vào năm 2012</td>
                </tr>
            </table>

            <table>
                <tr>
                    <th>
                        <div class="small-avatar">
                            <img src="img/doctor-img2.png">
                        </div>
                    </th>
                    <th><a href="#"><b>Nguyễn Lê An</b></a></th>
                </tr>
                <tr>
                    <td></td>
                    <td class="form-control">Nhiệt tình, ok</td>
                </tr>
            </table>
        </div>
    </div>
@endsection
