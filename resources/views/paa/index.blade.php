@extends('paa.main')
@section('container')
<div class="content-wrapper">

   <!-- <section> begin ============================-->
  <section class="pt-0 mb-20">

    <div class="stretch-card grid-margin">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-7 mb-20">
                <h5>PAA Fakultas Vokasi ~ D3 Sistem Informasi</h5>
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
                      Nama
                    </div>
                    <div class="card-body">
                      <blockquote class="blockquote mb-0">
                        <ul class="list-group">
                            <li class="list" >Username</li>
                            <li class="list">Password</li>
                            <li class="list">Nip</li>
                          </ul>
                        <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                      </blockquote>
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
