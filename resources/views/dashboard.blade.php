@extends('master')
@section('content')
<div class="container my-5">
    <h4>Dashboard</h4>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-sm-6">
            <div class="card mb-5">
                <div class="card-header p-3 pt-2">

                  <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary shadow text-center border-radius-xl mt-n4 position-absolute">
                    <i class="material-icons opacity-10">system_update_alt</i>
                  </div>

                  <div class="text-end pt-1">
                    <p class="text-sm mb-0 text-capitalize">Laporan</p>
                    <h4 class="mb-0">281</h4>
                  </div>

                </div>

                    <hr class="dark horizontal my-0">

                  <div class="card-footer p-3">
                    <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55% </span>than last week</p>
                  </div>
            </div>
      </div>

      <div class="col-lg-6 col-sm-6 mt-sm-0">

        <div class="card ">
          <div class="card-header p-3 pt-2 bg-transparent">

            <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
              <i class="material-icons opacity-10">person</i>
            </div>

            <div class="text-end pt-1">
              <p class="text-sm mb-0 text-capitalize ">User</p>
              <h4 class="mb-0 ">2000</h4>
            </div>

          </div>

          <hr class="horizontal my-0 dark">

          <div class="card-footer p-3">
            <p class="mb-0 ">Just updated</p>
          </div>

        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="card w-50 mx-auto">
        <div class="card-header p-3 pt-2">
          <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-xl mt-n4 position-absolute">
            <i class="material-icons opacity-10">web</i>
          </div>

            <div class="text-end pt-1">
              <p class="text-sm mb-0 text-capitalize">Artikel</p>
              <h4 class="mb-0">2,300</h4>
            </div>

          </div>

          <hr class="dark horizontal my-0">

          <div class="card-footer p-3">
            <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>than last month</p>
          </div>

      </div>
    </div>
  </div>  
@endsection