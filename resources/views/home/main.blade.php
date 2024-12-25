@extends('home.index')
@section('content')

<div class="row">
    <div class="col-lg-8">
        <div class="card-body" style="padding-top:0px">
            <img class="img-fluid pad" src="{{ asset('adminlte/dist/img/photo2.png') }}" alt="Photo">

            <p><span style="color:#869099">Credit by:</span> Sidesa</p>
        </div>

    </div>
    <!-- /.col-md-6 -->
    <div class="col-lg-4">
    <div class="card">

        <div class="card-body">
            <h2>Selamat Datang di SiDesa</h2>

            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam unde numquam exercitationem corrupti. Temporibus similique commodi cum, saepe consequuntur non illum aliquid, accusantium voluptatibus harum omnis dolorum dolorem molestiae dolor.</p>
            <a href="/mail" class="btn btn-primary">Hubungi Kami</a>
        </div>
    </div>

    </div>
    </div>
    <!-- /.col-md-6 -->
</div>

@endsection