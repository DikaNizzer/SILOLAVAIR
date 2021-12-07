@extends('paa.main')
@section('container')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Data Bimbingan Mahasiswa</h4>
        {{-- <p class="card-description">
          Add class <code>.table-striped</code>
        </p> --}}
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>
                    NIM
                </th>
                <th>
                    Judul TA
                </th>
                <th>
                    Tgl Pengajuan
                </th>
                <th>
                    Lembar Pengesahan
                </th>
                <th>
                    Jumlah Bimbingan
                </th>
                <th>
                    Detail Bimbingan
                </th>
              </tr>
            </thead>
            <tbody>
                @foreach ($ta as $data )
              <tr>
                <td>
                    {{-- @foreach ( $data->mahasiswa as $mhs ) --}}
                    {{ $data->mahasiswa->NAMA_MHS }}
                    {{-- @endforeach --}}
                </td>
                <td >
                    {{ $data->JUDUL_TA }}
                </td>
                <td>
                    {{ $data->TGL_PENGAJUAN }}
                </td>
                <td>
                        <button type="button" class="btn btn-primary btn-icon-text">
                            <i class="mdi mdi-file-check btn-icon-prepend"></i>
                            Download
                        </button>
                </td>
                <td>
                    {{-- {{ $bimbingan}} --}}
                    3x
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


@endsection
