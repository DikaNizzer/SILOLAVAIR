@extends('paa.main')
@section('container')
<div class="content-wrapper">

   <!-- <section> begin ============================-->
  <section class="pt-0 mb-20">

    <div class="container mb-20">
      <div class="row h-76 align-items-center mb-20">
        <div class="col-md-12 col-lg-6 h-70">
          <div class="card card-span text-white h-75"><img class="w-75" src="landing/public/assets/img/gallery/student-feedback.png" alt="..." />
            <div class="card-body px-xl-5 px-md-3 pt-0">
              <div class="d-flex flex-column align-items-center bg-200" style="margin-top:-2.4rem;">
              </div>
            </div>
          </div>
        </div>
        {{-- <div class="card" style="width: 18rem;">
          <img src="landing/public/assets/img/gallery/student-feedback.png" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div> --}}
        <div class="col-md-12 col-lg-6 h-100">
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Nama</li>
            <li class="list-group-item">NIDN </li>
            <li class="list-group-item">Email</li>
          </ul>
          <div class="card-body mb-20">
            <a href="#" class="card-link">Cyber Campus</a>
            <a href="#" class="card-link">Hebat E-Learning</a>
            <a href="#" class="card-link">Edit Data</a>
          </div>
        </div>
      </div>
    </div>
    <!-- end of .container-->

  </section>

@endsection
