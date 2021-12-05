@extends('paa.main')
@section('container')

<div class="container mt-20">
    <br>
    <a href="#" data-bs-toggle="modal" data-bs-target="#tambahjadwal">
    <button type="button" class="btn btn-success btn-rounded btn-fw position-relative-end">Jadwalkan Sidang</button>
    </a>
    <br><br>
</div>

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Jadwal Sidang</h4>
        {{-- <p class="card-description">
          Add class <code>.table-striped</code>
        </p> --}}
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>
                  No
                </th>
                <th>
                  Waktu Sidang
                </th>
                <th>
                  Nama Mahasiswa
                </th>
                <th>
                  Nama Penguji
                </th>
                <th>
                    Nama Pembimbing
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="py-1">
                  <img src="dashboard//images/faces/face1.jpg" alt="image"/>
                </td>
                <td>
                  Herman Beck
                </td>
                <td>
                  <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
                <td>
                    <button type="button" class="btn btn-inverse-primary btn-fw">Detail</button>
                </td>
                <td>
                  May 15, 2015
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="tambahjadwal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Jadwal Sidang Mahasiswa</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">NIM</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="152011513034">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleFormControlInput1" >
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          <a href=/mahasiswa><button type="button" class="btn btn-primary" >Login</button></a>

        </div>
      </div>
    </div>
  </div>
@endsection
