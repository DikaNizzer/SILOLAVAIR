@extends('dosen.main')
@section('container')

  <!-- <section> begin ============================-->
    <section class="pt-0 mb-20">

        <div class="stretch-card grid-margin">
            <div class="card">
              <div class="card-body">

                <div class="container m-15">
                    <div class="card ">
                        <div class="card-header ">
                          Data Pengajuan Tugas Akhir
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                        <th>
                                            Tanggal Pengajuan
                                        </th>
                                        <th>
                                            Nama
                                        </th>
                                        <th>
                                            Judul
                                        </th>
                                        <th>
                                            Berkas TA
                                        </th>
                                        <th>
                                            lembar Pengesahan
                                        </th>
                                        <th>
                                            Status
                                        </th>
                                        <th>
                                            Opsi
                                        </th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>
                                          29 January
                                      </td>
                                      <td>
                                        Azka Nadia
                                      </td>
                                      <td>
                                            Sistem Pendukung Keputusan Pemilihan Jenis Lampu untuk Pencahayaan Ruangan Menggunakan Metode AHP
                                      </td>
                                      <td>
                                        <button type="button" class="btn btn-danger btn-sm"><i class="mdi mdi-file-check btn-icon-prepend"></i></button>
                                      </td>
                                      <td>
                                        <button type="button" class="btn btn-info btn-sm"><i class="mdi mdi-file-check btn-icon-append"></i>
                                        </td>
                                      <td>
                                        <button type="button" class="btn btn-primary btn-sm">Menunggu Konfirmasi</button>
                                      </td>
                                      <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown">Ubah Status</button>
                                            <div class="dropdown-menu">
                                              <a class="dropdown-item"><button type="button" class="btn btn-primary btn-sm">Menunggu Konfirmasi</button></a>
                                              <a class="dropdown-item"><button type="button" class="btn btn-success  btn-sm">Disetujui</button></a>
                                              <a class="dropdown-item"><button type="button" class="btn btn-danger btn-sm">Berkas Tidak Lengkap</button></a>
                                            </div>
                                          </div>
                                      </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            29 Maret
                                        </td>
                                        <td>
                                          Putri
                                        </td>
                                        <td>
                                            Pemanfaatan Virtual Tour Sebagai Interaksi Manusia dan Komputer
                                        </td>
                                        <td>
                                          <button type="button" class="btn btn-danger btn-sm"><i class="mdi mdi-file-check btn-icon-prepend"></i></button>
                                        </td>
                                        <td>
                                          <button type="button" class="btn btn-info btn-sm"><i class="mdi mdi-file-check btn-icon-append"></i>
                                          </td>
                                        <td>
                                          <button type="button" class="btn btn-danger btn-sm">Berkas Tidak Lengkap</button>
                                        </td>
                                        <td>
                                          <div class="btn-group">
                                              <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown">Ubah Status</button>
                                              <div class="dropdown-menu">
                                                <a class="dropdown-item"><button type="button" class="btn btn-primary btn-sm">Menunggu Konfirmasi</button></a>
                                                <a class="dropdown-item"><button type="button" class="btn btn-success  btn-sm">Disetujui</button></a>
                                                <a class="dropdown-item"><button type="button" class="btn btn-danger btn-sm">Berkas Tidak Lengkap</button></a>
                                              </div>
                                            </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                            28 September
                                        </td>
                                        <td>
                                         Rahman Dilan
                                        </td>
                                        <td>
                                            Perancangan Sistem Informasi Manajemen Rumah Sakit Berbasis Web
                                        </td>
                                        <td>
                                          <button type="button" class="btn btn-danger btn-sm"><i class="mdi mdi-file-check btn-icon-prepend"></i></button>
                                        </td>
                                        <td>
                                          <button type="button" class="btn btn-info btn-sm"><i class="mdi mdi-file-check btn-icon-append"></i>
                                          </td>
                                        <td>
                                          <button type="button" class="btn btn-success btn-sm">Disetujui</button>
                                        </td>
                                        <td>
                                          <div class="btn-group">
                                              <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown">Ubah Status</button>
                                              <div class="dropdown-menu">
                                                <a class="dropdown-item"><button type="button" class="btn btn-primary btn-sm">Menunggu Konfirmasi</button></a>
                                                <a class="dropdown-item"><button type="button" class="btn btn-success  btn-sm">Disetujui</button></a>
                                                <a class="dropdown-item"><button type="button" class="btn btn-danger btn-sm">Berkas Tidak Lengkap</button></a>
                                              </div>
                                            </div>
                                        </td>
                                      </tr>
                                  </tbody>
                                </table>
                              </div>
                        </div>
                      </div>
                </div>




              </div>
            </div>
          </div>

      </section>

@endsection
