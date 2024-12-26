@extends('home.index')
@section('content')

<div class="row">
    <div class="col-lg-4">
        <div class="card" style="background-color:#ffeebd">
            <div class="card-body">
                <b class="card-title">Perhatian</b>

            <p class="card-text">
                Some quick example text to build on the card title and make up the bulk of the card's
                content.
            </p>
            <p class="card-text">
                Some quick example text to build on the card title and make up the bulk of the card's
                content.
            </p>
            <ul>
                <li>one</li>
                <li>two</li>
            </ul>
            </div>
        </div>

    </div>
        <!-- /.col-md-6 -->
    <div class="col-lg-8">
        <div class="card card-primary">
            <div class="card-header text-center bg-warning">
                <h3>Kotak Surat</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form style="padding:20px 40px 40px" action="/mail/create" >
                <div class="card-body">
                    <div class="form-group">
                    <label for="name">Nama Lengkap</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Isikan nama lengkap Anda" maxlength="75">
                    </div>
                    <div class="form-group">
                    <label for="phone">No. HP</label>
                    <input type="password" class="form-control numberStatic" id="phone" name="phone" type="text" maxlength="15">
                    </div>
                    <div class="form-group">
                    <label for="type">Jenis Pesan</label>
                    <select class="custom-select rounded-0" id="type" name="type">
                        <option value="-1">Pilih...</option>
                        <option value="1">Value 1</option>
                        <option value="2">Value 2</option>
                        <option value="3">Value 3</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Isi Pesan</label>
                    <textarea class="form-control" rows="3" placeholder="Tuliskan pesan disini..." name="message" maxlength="150"></textarea>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary" style="width:25%">Kirim Pesan</button>
                </div>
                @csrf
            </form>
        </div>
    </div>
<!-- /.col-md-6 -->
</div>

@endsection