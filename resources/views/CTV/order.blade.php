@extends('index')
@section('title', 'Đơn hàng')
@section('content')
    <section id="login">
        <div class="container">
            <div class="row">
                <div class="form-wrap" style="width: 90%">
                    <br>
                    <h1>Đơn hàng hiện tại</h1>
                    <div>
                        <table class="table table-bordered table-dark">
                            <thead>
                            <tr>
                                <th scope="col">STT</th>
                                <th scope="col">Khách hàng</th>
                                <th scope="col">Thời gian</th>
                                <th scope="col">Loại công việc</th>
                                <th scope="col">Trạng thái</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>15/4/2019 - 16/4/2019</td>
                                <td>Hướng dẫn viên</td>
                                <td>Sắp tới</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>15/4/2019 - 16/4/2019</td>
                                <td>Hướng dẫn viên</td>
                                <td>Sắp tới</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td >Larry the Bird</td>
                                <td>15/4/2019 - 16/4/2019</td>
                                <td >Hướng dẫn viên</td>
                                <td>Đang diễn ra</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td >Larry the Bird</td>
                                <td>15/4/2019 - 16/4/2019</td>
                                <td >Hướng dẫn viên</td>
                                <td>Chờ chuyển tiền</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <br>
                    <br>
                    <h1>Lịch sử đơn hàng</h1>
                    <div>
                        <table class="table table-bordered table-dark">
                            <thead>
                            <tr>
                                <th scope="col">STT</th>
                                <th scope="col">Khách hàng</th>
                                <th scope="col">Thời gian</th>
                                <th scope="col">Loại công việc</th>
                                <th scope="col">Trạng thái</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>15/4/2019 - 16/4/2019</td>
                                <td>Hướng dẫn viên</td>
                                <td>Đã chuyển tiền</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>15/4/2019 - 16/4/2019</td>
                                <td>Hướng dẫn viên</td>
                                <td>Đã chuyển tiền</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td >Larry the Bird</td>
                                <td>15/4/2019 - 16/4/2019</td>
                                <td >Hướng dẫn viên</td>
                                <td>Đã chuyển tiền</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td >Larry the Bird</td>
                                <td>15/4/2019 - 16/4/2019</td>
                                <td >Hướng dẫn viên</td>
                                <td>Đã chuyển tiền</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <br>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
@endsection
