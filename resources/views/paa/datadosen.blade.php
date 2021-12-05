@extends('paa.main')
@section('container')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Data Dosen</h4>
        {{-- <p class="card-description">
          Add class <code>.table-striped</code>
        </p> --}}
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>
                  NIP
                </th>
                <th>
                  Nama
                </th>
                <th>
                  Email
                </th>
                <th>
                  No telephone
                </th>
                <th>
                    Detail Data
                </th>
              </tr>
            </thead>
            <tbody>
                @foreach ( $dosen as $data )


              <tr>
                <td>
                  {{ $data->NIP }}
                </td>
                <td>
                    {{ $data->NAMA_DOSEN }}
                </td>
                <td>
                    {{ $data->EMAIL_DOSEN }}
                </td>
                <td>
                    {{ $data->NO_TLP_DOSEN }}
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
