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
            <form style="padding:20px 40px 40px">
                <div class="card-body">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                    <label for="exampleSelectRounded0">Flat <code>.rounded-0</code></label>
                    <select class="custom-select rounded-0" id="exampleSelectRounded0">
                    <option>Value 1</option>
                    <option>Value 2</option>
                    <option>Value 3</option>
                    </select>
                </div>

                <div class="form-group">
                        <label>Textarea</label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                        </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary" style="width:25%">Submit</button>
                </div>
            </form>
        </div>
    </div>å
<!-- /.col-md-6 -->
</div>

@endsection