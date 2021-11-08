@extends('paa.main')
@section('container')
<div class="content-wrapper">
<div class="row">
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Masukan Data Diri Dosen</h4>

        <form class="forms-sample">
          <div class="form-group">
            <label for="exampleInputName1">NIDN</label>
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
            <label>Upload Foto</label>
            <input type="file" name="img[]" class="file-upload-default">
            <div class="input-group col-xs-12">
              <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
              <span class="input-group-append">
                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
              </span>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleSelectGender">Jenis Kelam</label>
              <select class="form-control" id="exampleSelectGender">
                <option>Pria</option>
                <option>Wanita</option>
              </select>
            </div>
          <div class="form-group">
            <label for="exampleInputCity1">Alamat</label>
            <input type="text" class="form-control" id="exampleInputCity1" placeholder="Alamat">
          </div>
          <div class="form-group">
            <label for="exampleTextarea1">Deskripsi</label>
            <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
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
