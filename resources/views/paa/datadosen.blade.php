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
                  Foto
                </th>
                <th>
                  Nama
                </th>
                <th>
                  Progres TA
                </th>
                <th>
                  Detail Data
                </th>
                <th>
                  Mahasiswa
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="py-1">
                  <img src="dashboard//images/faces/face1.jpg" alt="image"/>
                </td>
                <td>
                  Herman Beck
                </td>
                <td>
                  <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
                <td>
                    <button type="button" class="btn btn-inverse-primary btn-fw">Detail</button>
                </td>
                <td>
                  May 15, 2015
                </td>
              </tr>
              <tr>
                <td class="py-1">
                  <img src="dashboard/images/faces/face2.jpg" alt="image"/>
                </td>
                <td>
                  Messsy Adam
                </td>
                <td>
                  <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
                <td>
                    <button type="button" class="btn btn-inverse-primary btn-fw">Detail</button>
                </td>
                <td>
                  July 1, 2015
                </td>
              </tr>
              <tr>
                <td class="py-1">
                  <img src="dashboard/images/faces/face3.jpg" alt="image"/>
                </td>
                <td>
                  John Richards
                </td>
                <td>
                  <div class="progress">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
                <td>
                  $138.00
                </td>
                <td>
                  Apr 12, 2015
                </td>
              </tr>
              <tr>
                <td class="py-1">
                  <img src="../../images/faces/face4.jpg" alt="image"/>
                </td>
                <td>
                  Peter Meggik
                </td>
                <td>
                  <div class="progress">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
                <td>
                  $ 77.99
                </td>
                <td>
                  May 15, 2015
                </td>
              </tr>
              <tr>
                <td class="py-1">
                  <img src="../../images/faces/face5.jpg" alt="image"/>
                </td>
                <td>
                  Edward
                </td>
                <td>
                  <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
                <td>
                  $ 160.25
                </td>
                <td>
                  May 03, 2015
                </td>
              </tr>
              <tr>
                <td class="py-1">
                  <img src="../../images/faces/face6.jpg" alt="image"/>
                </td>
                <td>
                  John Doe
                </td>
                <td>
                  <div class="progress">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
                <td>
                  $ 123.21
                </td>
                <td>
                  April 05, 2015
                </td>
              </tr>
              <tr>
                <td class="py-1">
                  <img src="../../images/faces/face7.jpg" alt="image"/>
                </td>
                <td>
                  Henry Tom
                </td>
                <td>
                  <div class="progress">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
                <td>
                  $ 150.00
                </td>
                <td>
                  June 16, 2015
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>


@endsection
