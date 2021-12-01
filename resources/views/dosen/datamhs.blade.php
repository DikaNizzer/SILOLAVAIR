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
                          Data Mahasiswa Bimbingan
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
                                            Email
                                        </th>
                                        <th>
                                            No Telephone
                                        </th>
                                        <th>
                                            Detail Data
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
                                          email
                                        </div>
                                      </td>
                                      <td>
                                          0819
                                      </td>
                                      <td>
                                        <button type="button" class="btn btn-inverse-primary btn-fw">Detail</button>
                                      </td>
                                      <td>
                                        <button type="button" class="btn btn-inverse-primary btn-fw">Bimbingan</button>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>   
                        </div>
                      </div>
                </div>
    
                <div class="row mt-30">
                    <button type="button" class="btn btn-primary btn-rounded text-md-right btn-fw mt-20">Ubah Data</button>
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
