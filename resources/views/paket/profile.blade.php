@extends('layouts.master')
@section('content')
<div class="content">
  <div class="box box-primary">
    <div class="box-body box-profile">
      <img class="profile-user-img img-responsive text-center" src="/img/logopu.jpg" alt="User profile picture">

    <h1 class="profile-username text-center">{{$profile_paket->nmpaket}}</h1>

    <p class="text-muted text-center">{{$data_balai}}</p>
      <div class="row mt-5">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><sup style="font-size: 20px">Rp</sup>{{number_format($profile_paket->pagurmp)}}</h3>

                <p>Pagu</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
            
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><sup style="font-size: 20px">Rp</sup>{{number_format($profile_paket->progres_keu,2)}}</h3>

                <p>Keuangan</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{number_format($profile_paket->progres_keu,2)}}<sup style="font-size: 20px">%</sup></h3>
                
                </h3>

                <p>Progres Fisik</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>
                  {{number_format($profile_paket->progres_fisik,2)}}
                <sup style="font-size: 20px">%</sup>
                </h3>

                <p>Progres Fisik</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              
            </div>
          </div>
          <!-- ./col -->
        </div>
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Output</span>
                <span class="info-box-number">
                  {{number_format($profile_paket->trgoutput,2)}}
                <small>{{$sat->nmsatoutput}}</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

              <div class="info-box-content">
                <span class="info-box-text"></span>Outcome</span>
                <span class="info-box-number">{{number_format($profile_paket->trgoutcome,2)}}
                    <small>{{$sat2->nmsatoutcome}}</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Sumber Dana</span>
                <span class="info-box-number">760</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Kode Output</span>
                <span class="info-box-number">{{number_format($profile_paket->kdoutput,2)}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <ul class="list-group list-group-unbordered">
          <div class="box">

               <!-- /.box-header -->
               <div class="box-body no-padding">
                 <table class="table table-striped">
                   <tbody><tr>
                     <th>No</th>
                     <th>Masalah</th>
                     <th>Tindak Lanjut</th>
                     <th>Modify</th>
                   </tr>
                   @foreach ($profile_paket as $no => $str)
                   <tr>
                     <td style="width: 10px"></a></td>
                     <td></td>
                     <td>
                       <a href="#">
                         <i class="fa fa-edit blue"></i>
                     </a>
                     /
                     <a href="#">
                         <i class="fa fa-trash red" onclick="return confirm('Yakin data mau dihapus')"></i>
                     </a>
                     </td>
                   </tr>
                   @endforeach
                 </tbody>
             </table>
             {{-- {{$profile_paket->links()}} --}}
         </div>
               <!-- /.box-body -->
        </div>
      </ul>

      {{-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> --}}
    </div>
    <!-- /.box-body -->
  </div>

  
    <!-- Small boxes (Stat box) -->

  </div>
@endsection
