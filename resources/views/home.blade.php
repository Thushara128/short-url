@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Short-URL App</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active"><a href="/">ShorteURL</a></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <p>Total Registered Admin</p>
              <?php 
              $connection= mysqli_connect('localhost','root','','urlshort');
              $query="SELECT id from users ORDER BY id";
              $query_run=mysqli_query($connection,$query);
              $row=mysqli_num_rows($query_run);
              echo '<h1>'.$row.'</h1>';
              ?>
             
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-md-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <p>Total URL</p>
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <p>Short-URL</p>
            <div class="inner">
              <h3>30<sup style="font-size: 20px">%</sup></h3>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <!-- ./col -->
      
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          

          <!-- DIRECT CHAT -->

          <!-- TO DO List -->
          <!-- /.card -->
        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">
              

          <!-- solid sales graph -->
        
          <!-- /.card -->

          <!-- Calendar -
        /.card -->
        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>

@endsection
