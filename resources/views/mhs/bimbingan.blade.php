@extends('mhs.main')
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
                                            No
                                        </th>
                                        <th>
                                            Judul TA
                                        </th>
                                        <th>
                                            Jumlah Bimbingan
                                        </th>
                                        <th>
                                            Kartu Kendali
                                        </th>
                                        <th>
                                            Tanggal
                                        </th>
                                        <th>
                                            Keterangan
                                        </th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                      @foreach ($bim as $bimbingan )


                                    <tr>
                                      <td>
                                          {{ $bimbingan->ID_BIMBNIGAN }}
                                      </td>
                                      <td>
                                        {{ $bimbingan->ta->JUDUL_TA }}
                                      </td>
                                      <td>
                                        <div >
                                            {{ $bimbingan->JUMLAH_BIMBINGAN }}
                                        </div>
                                      </td>
                                      <td>
                                        <a href="riwayatbim">
                                            <button type="button" class="btn btn-inverse-primary btn-fw">Lihat</button>
                                        </a>
                                      </td>
                                      <td>
                                        {{ $bimbingan->TGL_BIMBINGAN }}
                                      </td>
                                      <td>
                                        {{ $bimbingan->KETERANGAN }}
                                      </td>

                                    </tr>
                                    @endforeach
                                  </tbody>
                                </table>
                              </div>
                        </div>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#tambahjadwal">
                            <button type="button" class="btn btn-success btn-rounded btn-fw position-relative-end">Tambah</button>
                            </a>
                      </div>
                </div>



                <div class="row">
                  <div class="col-sm-8">
                    {{-- <p class="text-muted mb-0"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore. <b>Learn More</b> --}}
                    </p>
                  </div>

                </div>
              </div>
            </div>
          </div>

      </section>

      <div class="modal fade" id="tambahjadwal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tambah Data Bimbingan</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/buatjadwal" method="post" role="form" class="form-horizontal">
                    @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">ID Bimbingan</label>
                    <input type="number" name="ID_SIDANG" class="form-control" id="exampleFormControlInput1" placeholder="01 dst" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Waktu Bimbingan</label>
                    <input type="datetime-local" name="WAKTU_SIDANG" class="form-control" id="exampleFormControlInput1" required>
                </div>
                <div class="form-group">
                      <label>File Kartu Kendali</label>
                      <input type="file" name="img[]" class="file-upload-default">
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                      </div>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Keterangan</label>
                    <input type="number" name="STATUS_SIDANG" class="form-control" id="exampleFormControlInput1" placeholder=" 0=belum terlaksana / 1=sudah"required>
                </div>
                {{-- <div class=" mb-3">
                    <label class="input-group-text" for="inputGroupSelect01">Penguji</label>
                    <select class="form-select" id="inputGroupSelect01" name="DOSEN_PENGUJI">
                      <option selected>Pilih Nama Penguji Yang Akan Dibuatkan Jadwal...</option>
                      {{-- @foreach ($dosen as $penguji )
                      <option value="{{ $penguji->NAMA_DOSEN }}" name="DOSEN_PENGUJI">{{ $penguji->NAMA_DOSEN }}</option>
                      @endforeach --}}
                    {{-- </select>
                </div> --}} --}}

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
