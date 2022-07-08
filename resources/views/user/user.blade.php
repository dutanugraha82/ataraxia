@extends('master')
@section('content')
<div class="container mt-4 mb-5">
    <div class="card card-plain">
        <h3 class="px-3 py-3">User</h3>
    </div>
</div>
<div class="card mx-4">
    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
      <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
        <h6 class="text-white text-capitalize ps-3">List User</h6>
      </div>
    </div>
    <div class="card-body px-0 pb-2">
      <div class="table-responsive p-0">
        <table class="table align-items-center mb-0">
          <thead>
            <tr>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder">Nama</th>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder ps-2">Email</th>
              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">No Hp</th>
              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <div class="d-flex px-2 py-1">
                  <div class="d-flex flex-column justify-content-center opacity-9">
                    <h6 class="mb-0 text-sm">turunnya yajuj majuj</h6>
                  </div>
                </div>
              </td>
              <td>
                <p class="text-xs font-weight-bold mb-0">Manager</p>
                <p class="text-xs text-secondary mb-0">Organization</p>
              </td>
              <td class="align-middle text-center text-sm">
                <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
              </td>
              <td class="align-middle text-center">
                <div class="container">
                <div class="row">
                    <div class="col">
                        <a href="/detail-user" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            Detail
                          </a>
                    </div>
                    <div class="col">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            Edit
                          </a>
                    </div>
                    <div class="col">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            Delete
                          </a>
                    </div>
                </div>
            </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection