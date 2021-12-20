@extends('mhs.main')
@section('container')
<div class="content-wrapper">

   <!-- <section> begin ============================-->
  <section class="pt-0 mb-20">

    <div class="stretch-card grid-margin">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-7 mb-20">
                <h5>Detail Pengajuan Sidang</h5>
                {{-- <p class="text-muted"> Show overview jan 2018 - Dec 2019 <a class="text-muted font-weight-medium pl-2" href="#"><u>See Details</u></a> --}}
                {{-- </p> --}}
              </div>
              <div class="col-sm-5 text-md-right mb-16">
                <button type="button" class="btn btn-icon-text mb-20 mb-sm-0 btn-inverse-primary font-weight-normal ">
                  <i class="mdi mdi-email btn-icon-prepend"></i> Cyber Campus </button>
              </div>
            </div>

            <div class="container m-30">
                <div class="card ">
                    <div class="card-header ">
                      Azka Nadia
                    </div>
                    <div class="card-body">
                      <blockquote class="blockquote mb-0">
                        <ul class="list-group">
                            <li class="list" >Tanggal Pengajuan : 28 September </li>
                            <br>
                            <li class="list">Judul TA : Sistem Pendukung Keputusan Pemilihan Jenis Lampu untuk Pencahayaan Ruangan Menggunakan Metode AHP </li>
                            <br>
                            <li class="list">Status :  <button type="button" class="btn btn-primary btn-sm">Menunggu Konfirmasi</button></li>
                            <br>
                            <li class="list">Laporan Final TA :  <button type="button" class="btn btn-danger btn-sm"><i class="mdi mdi-file-check btn-icon-prepend"></i></button></li>
                            <br>
                            <li class="list">Lembar Pengesahan :  <button type="button" class="btn btn-info btn-sm"><i class="mdi mdi-file-check btn-icon-append"></i> </button></li>
                        </ul>
                        {{-- <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer> --}}
                      </blockquote>

                      <a href="#" data-bs-toggle="modal" data-bs-target="#ajukan">
                      <button type="button" class="btn btn-info  btn-md"> Ajukan Sidang</button>
                      </a>
                    </div>
                  </div>
            </div>

            <br><br><br><br><br>
            <div class="btn-group">
                <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown">Jenis Status</button>
                <div class="dropdown-menu">
                  <a class="dropdown-item"><button type="button" class="btn btn-primary btn-sm">Menunggu Konfirmasi</button></a>
                  <a class="dropdown-item"><button type="button" class="btn btn-success  btn-sm">Disetujui</button></a>
                  <a class="dropdown-item"><button type="button" class="btn btn-danger btn-sm">Berkas Tidak Lengkap</button></a>
                </div>
              </div>

              <br><br><br><br><br>


            <div class="row">


            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="ajukan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Ajukan Sidang</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/buatjadwal" method="post" role="form" class="form-horizontal">
                    @csrf
                <div class="form-group">
                    <label>Upload Laporan Final TA</label>
                    <input type="file" name="img[]" class="file-upload-default">
                    <div class="input-group col-xs-12">
                      <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                      <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                      </span>
                    </div>
                </div>
                <div class="form-group">
                    <label>Upload Lembar Pengesahan</label>
                    <input type="file" name="img[]" class="file-upload-default">
                    <div class="input-group col-xs-12">
                      <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                      <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                      </span>
                    </div>
                </div>


            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
              {{-- <button type="submit" class="btn btn-primary" >Buat</button> --}}
              <input type="submit" class="btn btn-primary"  value="Tambah Data"/>

            </div>
        </form>
          </div>
        </div>
      </div>
  </section>

@endsection
