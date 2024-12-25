@extends('home.index')

@section('content')
<div class="login-page" style="height: unset; padding: 60px 0px; background-color:transparent">

    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline">
            <div class="card-header text-center" style="padding:40px 0px 20px">
                <div class="" style="padding: 0px 0px 10px">
                    <img src="" alt="" style="width:80px; height: 100px">
                </div>
                <a href="/" class="h1" style="color:#34ce57">
                    <b>Sidesa</b>
                </a>
                <div class="">
                    <span style="color: #007bff">Sistem Informasi Desa</span>
                </div>
            </div>
            <div class="card-body">
                <div class="" style="padding:10px 0px">
                    <!-- <p class="login-box-msg text-center"> -->
                        <h5 class="text-center" style="color: #888">Silahkan Login!</h5>
                    <!-- </p> -->

                </div>

            <form action="../../index3.html" method="post">
                <div class="input-group mb-3">
                <input type="email" class="form-control" placeholder="Email">
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                    </div>
                </div>
                </div>
                <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Password">
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                    </div>
                </div>
                </div>
                <div class="">   
                <!-- /.col -->
                <div class="" style="padding:15px 0px 0px 0px">
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </div>
                <!-- /.col -->
                </div>
            </form>


            <!-- /.social-auth-links -->

            <p class="mb-1 text-center" style="padding:30px 0px 10px">
                <a href="/">Kembali ke Halaman Utama</a>
            </p>
            </div>
            <!-- /.card-body -->
        </div>
    <!-- /.card -->
    </div>
</div>
@endsection