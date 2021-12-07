@extends('paa.main')
@section('container')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Data Mahasiswa Akhir</h4>
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
                    Nama
                </th>
                <th>
                    Email
                </th>
                <th>
                    No Telephone
                </th>
                <th>
                    Pembimbing
                </th>
                <th>
                    Detail Data
                </th>
              </tr>
            </thead>
            <tbody>
                @foreach ( $mahasiswa as $data )


              <tr>
                <td>
                    {{ $data->NIM }}
                </td>
                <td>
                    {{ $data->NAMA_MHS }}
                </td>
                <td>
                    {{ $data->EMAIL_MHS }}
                </td>
                <td>
                    {{ $data->NO_TLP_MHS }}
                </td>
                <td>
                    {{ $data->dosen->NAMA_DOSEN }}
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
