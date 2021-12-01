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
                          Data Tugas AKhir Mahasiswa 
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                        <th>
                                            NIM
                                        </th>
                                        <th>
                                            Nama
                                        </th>
                                        <th>
                                            Judul
                                        </th>
                                        <th>
                                            Jumlah Bimbingan
                                        </th>
                                        <th>
                                            Status TA
                                        </th>
                                        <th>
                                            Riwayat Bimbingan
                                        </th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>
                                          152011513034
                                      </td>
                                      <td>
                                        Herman Beck
                                      </td>
                                      <td>
                                        <div >
                                          Sistem Informasi Pengambilan Keputusan
                                        </div>
                                      </td>
                                      <td>
                                          3 x
                                      </td>
                                      <td>
                                        <button type="button" class="btn btn-inverse-primary btn-fw">Detail</button>
                                      </td>
                                      <td>
                                            <a href="riwayatbim">
                                                <button type="button" class="btn btn-inverse-primary btn-fw">Detail Bimbingan</button>
                                            </a>
                                            </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>   
                        </div>
                      </div>
                </div>
    
    
    
                <div class="row">
                  <div class="col-sm-8">
                    <p class="text-muted mb-0"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore. <b>Learn More</b>
                    </p>
                  </div>
    
                </div>
              </div>
            </div>
          </div>
    
      </section>
    
@endsection
