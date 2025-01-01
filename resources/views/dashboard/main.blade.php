@extends('dashboard.index')
@section('content')
    <div class="content-wrapper">
        
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">

                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div>


                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>

        <!-- /.content-header -->

        <!-- Main content -->

        <div class="content">

            <div class="container-fluid">

                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                        <div class="inner">
                            <h3>150</h3>
                            <p>Jumlah Penduduk</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-stalker"></i>
                        </div>
                        <a href="#" class="small-box-footer">Visit <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                        <div class="inner">
                            <h3>53</h3>

                            <p>Total Dusun</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">Visit <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>44</h3>

                            <p>Total Keluarga</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-stalker"></i>
                        </div>
                        <a href="#" class="small-box-footer">Visit <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>65</h3>

                            <p>Pesan Masuk</p>
                        </div>
                        <div class="icon">
                            <i class="far fa-envelope"></i>
                        </div>
                        <a href="#" class="small-box-footer">Visit <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>

                <!-- /.row -->
                <div class="row">

                    <div class="col-lg-6">
                        <!-- STATISTIK GENDER -->
                        <div class="card">
                            <div class="card-header border-0">
                                <div class="d-flex justify-content-between">
                                <h3 class="card-title">
                                    <i class="far fa-chart-bar"></i>
                                    Statistik Gender</h3>
                                    <!-- <a href="javascript:void(0);">View Report</a> -->
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex">
                                <!-- <p class="d-flex flex-column">
                                    <span class="text-bold text-lg">$18,230.00</span>
                                    <span>Sales Over Time</span>
                                </p>
                                <p class="ml-auto d-flex flex-column text-right">
                                    <span class="text-success">
                                    <i class="fas fa-arrow-up"></i> 33.1%
                                    </span>
                                    <span class="text-muted">Since last month</span>
                                </p> -->
                                </div>
                                <!-- /.d-flex -->

                                <div class="position-relative mb-4">
                                <canvas id="sales-chart" height="200"></canvas>
                                </div>

                                <div class="d-flex flex-row justify-content-end">
                                    <!-- <span class="mr-2">
                                        <i class="fas fa-square text-primary"></i> Laki-Laki
                                    </span>

                                    <span>
                                        <i class="fas fa-square text-pink"></i> Perempuan
                                    </span> -->
                                </div>
                            </div>
                        </div>
                        <!-- /.card -->
                         <!-- STATISTIK PEKERJAAN -->
                        <div class="card">
                            <div class="card-header border-0">
                                <div class="d-flex justify-content-between">
                                <h3 class="card-title">
                                    <i class="far fa-chart-bar"></i>
                                    Statistik Pekerjaan</h3>
                                    <!-- <a href="javascript:void(0);">View Report</a> -->
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex">
                                <!-- <p class="d-flex flex-column">
                                    <span class="text-bold text-lg">$18,230.00</span>
                                    <span>Sales Over Time</span>
                                </p>
                                <p class="ml-auto d-flex flex-column text-right">
                                    <span class="text-success">
                                    <i class="fas fa-arrow-up"></i> 33.1%
                                    </span>
                                    <span class="text-muted">Since last month</span>
                                </p> -->
                                </div>
                                <!-- /.d-flex -->

                                <div class="position-relative mb-4">
                                <canvas id="jobs-chart" height="200"></canvas>
                                </div>

                                <div class="d-flex flex-row justify-content-end">
                                    <!-- <span class="mr-2">
                                        <i class="fas fa-square text-primary"></i> ASN
                                    </span>

                                    <span>
                                        <i class="fas fa-square text-pink"></i> Buruh
                                    </span>

                                    <span>
                                        <i class="fas fa-square text-grey"></i> Petani
                                    </span> -->

                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- /.col-md-6 -->
                    <div class="col-lg-6">
                        <!-- STATISTIK GENDER -->
                        <div class="card">
                            <div class="card-header border-0">
                                <div class="d-flex justify-content-between">
                                <h3 class="card-title">
                                    <i class="far fa-chart-bar"></i>
                                    Statistik Agama</h3>
                                    <!-- <a href="javascript:void(0);">View Report</a> -->
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex">
                                <!-- <p class="d-flex flex-column">
                                    <span class="text-bold text-lg">$18,230.00</span>
                                    <span>Sales Over Time</span>
                                </p>
                                <p class="ml-auto d-flex flex-column text-right">
                                    <span class="text-success">
                                    <i class="fas fa-arrow-up"></i> 33.1%
                                    </span>
                                    <span class="text-muted">Since last month</span>
                                </p> -->
                                </div>
                                <!-- /.d-flex -->

                                <div class="position-relative mb-4">
                                <canvas id="religion-chart" height="200"></canvas>
                                </div>

                                <div class="d-flex flex-row justify-content-end">
                                    <!-- <span class="mr-2">
                                        <i class="fas fa-square text-primary"></i> Islam
                                    </span>

                                    <span>
                                        <i class="fas fa-square text-pink"></i> Katholik
                                    </span>

                                    <span>
                                        <i class="fas fa-square text-pink"></i> Protestan
                                    </span>

                                    <span>
                                        <i class="fas fa-square text-pink"></i> Hindu
                                    </span>
                                    <span>
                                        <i class="fas fa-square text-pink"></i> Budha
                                    </span> -->
                                </div>
                            </div>
                        </div>
                        <!-- /.card -->
                         <!-- STATISTIK PENDIDIKAN -->
                        <div class="card">
                            <div class="card-header border-0">
                                <div class="d-flex justify-content-between">
                                <h3 class="card-title">
                                    <i class="far fa-chart-bar"></i>
                                    Statistik Pendidikan</h3>
                                    <!-- <a href="javascript:void(0);">View Report</a> -->
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex">
                                <!-- <p class="d-flex flex-column">
                                    <span class="text-bold text-lg">$18,230.00</span>
                                    <span>Sales Over Time</span>
                                </p>
                                <p class="ml-auto d-flex flex-column text-right">
                                    <span class="text-success">
                                    <i class="fas fa-arrow-up"></i> 33.1%
                                    </span>
                                    <span class="text-muted">Since last month</span>
                                </p> -->
                                </div>
                                <!-- /.d-flex -->

                                <div class="position-relative mb-4">
                                <canvas id="edu-chart" height="200"></canvas>
                                </div>

                                <div class="d-flex flex-row justify-content-end">
                                    <!-- <span class="mr-2">
                                        <i class="fas fa-square text-primary"></i> SD
                                    </span>

                                    <span>
                                        <i class="fas fa-square text-pink"></i> SMP
                                    </span>
                                    <span>
                                        <i class="fas fa-square text-pink"></i> SMA
                                    </span>
                                    <span>
                                        <i class="fas fa-square text-pink"></i> Diploma
                                    </span>
                                    <span>
                                        <i class="fas fa-square text-pink"></i> Strata
                                    </span> -->
                                </div>
                            </div>
                        </div>

                    </div>

                <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>

        <!-- /.content -->

    </div>
@endsection