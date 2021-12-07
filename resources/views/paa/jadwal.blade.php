@extends('paa.main')
@section('container')

<div class="container mt-20">
        {{-- KAlo Nerhasil Buat AKun --}}
        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    {{-- KAlo gagal Buat AKun --}}
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <b>Gagal Membuat Jadwal Karena :</b>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
            <b>Silahkan Coba Lagi</b>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

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
                  Nama Pembimbing
                </th>
                <th>
                    Nama Penguji
                </th>
                <th>
                    Detail
                </th>
              </tr>
            </thead>
            <tbody>
                @foreach ( $jadwal as $data )

              <tr>
                <td>
                    {{ $loop->iteration }}
                </td>
                <td>
                  {{ $data->WAKTU_SIDANG }}
                </td>
                <td>
                  <div >
                    {{ $data->mahasiswa->NAMA_MHS }}
                  </div>
                </td>
                <td>
                    {{ $data->mahasiswa->dosen->NAMA_DOSEN }}
                </td>
                <td>
                    {{ $data->DOSEN_PENGUJI }}
                </td>
                <td>
                    <button type="button" class="btn btn-inverse-primary btn-fw">Detail</button>
                </td>
              </tr>
              @endforeach
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
            <form action="/buatjadwal" method="post" role="form" class="form-horizontal">
                @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">ID Sidang</label>
                <input type="number" name="ID_SIDANG" class="form-control" id="exampleFormControlInput1" placeholder="01 dst" required>
            </div>
            <div class=" mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Nama Mahasiswa</label>
                <select class="form-select" id="inputGroupSelect01" name="mahasiswa_NIM">
                  <option selected>Pilih Nama Mahasiswa Yang Akan Dibuatkan Jadwal...</option>
                  @foreach ($mhs as $maha )
                  <option value="{{ $maha->NIM }}" name="mahasiswa_NIM">{{ $maha->NAMA_MHS }}</option>
                  @endforeach
                </select>
              </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Waktu Sidang</label>
                <input type="datetime-local" name="WAKTU_SIDANG" class="form-control" id="exampleFormControlInput1" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Status Sidang</label>
                <input type="number" name="STATUS_SIDANG" class="form-control" id="exampleFormControlInput1" placeholder=" 0=belum terlaksana / 1=sudah"required>
            </div>
            <div class=" mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Penguji</label>
                <select class="form-select" id="inputGroupSelect01" name="DOSEN_PENGUJI">
                  <option selected>Pilih Nama Penguji Yang Akan Dibuatkan Jadwal...</option>
                  @foreach ($dosen as $penguji )
                  <option value="{{ $penguji->NAMA_DOSEN }}" name="DOSEN_PENGUJI">{{ $penguji->NAMA_DOSEN }}</option>
                  @endforeach
                </select>
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
@endsection
