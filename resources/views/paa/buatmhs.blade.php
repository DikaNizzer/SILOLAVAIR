@extends('paa.main')
@section('container')
<div class="content-wrapper">
<div class="row">
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Masukan Data Diri Mahasiswa</h4>

        <form class="forms-sample">
          <div class="form-group">
            <label for="exampleInputName1">NIM</label>
            <input type="text" class="form-control" id="exampleInputName1" placeholder="NIDN">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Nama</label>
            <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Nama">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword4">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword4">Email</label>
            <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword4">No Telp</label>
            <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Email">
          </div>
          {{-- <div class="form-group">
            <label for="exampleSelectGender">Jenis Kelamin</label>
              <select class="form-control" id="exampleSelectGender">
                <option>Pria</option>
                <option>Wanita</option>
              </select>
            </div> --}}
          <div class="form-group">
            <label for="exampleInputCity1">Angkatan</label>
            <input type="text" class="form-control" id="exampleInputCity1" placeholder="Alamat">
          </div>
          <button type="submit" class="btn btn-primary mr-2">Simpan</button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>



@endsection
