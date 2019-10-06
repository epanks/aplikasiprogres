@extends('layouts.master')
@section('content')
<div class="content">
  <div class="box box-primary">
    <div class="box-body box-profile">
      <img class="profile-user-img img-responsive text-center" src="/img/logopu.jpg" alt="User profile picture">

    <h1 class="profile-username text-center">{{$listsatker->nmsatker}}</h1>

      <p class="text-muted text-center">Pusat Air Tanah dan Air Baku</p>
      <div class="row mt-5">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$listpaket->count()}}</h3>

                <p>Jumah Paket</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">
                More info
                <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><sup style="font-size: 20px">Rp</sup>{{number_format($listpaket->sum('pagurmp'))}}</h3>

                <p>Total Pagu</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">
                More info
                <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44
                <sup style="font-size: 20px">%</sup>
                </h3>

                <p>Progres Keuangan</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">
                More info
                <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>
                65
                <sup style="font-size: 20px">%</sup>
                </h3>

                <p>Progres Fisik</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">
                More info
                <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
        </div>
      <ul class="list-group list-group-unbordered">
          <div class="box">

              <!-- /.box-header -->
              <div class="box-body no-padding">
                <table class="table table-striped">
                  <tbody><tr>
                    <th>No</th>
                    <th>Nama Wilayah</th>
                    <th>Pagu</th>
                    <th>Progres </th>
                  </tr>
                  @foreach ($profilesatker as $no => $str)
                  <tr>
                    <td style="width: 10px"></a>{{++$no}}</td>
                    <td><a href="#">{{$str->nmpaket}}</td>
                    <td></td>
                    <td></td>
                  </tr>
                  @endforeach
                </tbody>
            </table>
            {{$profilesatker->links()}}
        </div>
              <!-- /.box-body -->
        </div>
      </ul>

      <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
    </div>
    <!-- /.box-body -->
  </div>

  <div class="row">
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">CPU Traffic</span>
          <span class="info-box-number">90<small>%</small></span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Likes</span>
          <span class="info-box-number">41,410</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <!-- fix for small devices only -->
    <div class="clearfix visible-sm-block"></div>

    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Sales</span>
          <span class="info-box-number">760</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">New Members</span>
          <span class="info-box-number">2,000</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
      <!-- /.col -->
  </div>
    <!-- Small boxes (Stat box) -->

  </div>
@endsection
