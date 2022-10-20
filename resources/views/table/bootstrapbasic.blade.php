{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')

<div class="container-fluid">
    <div class="form-head align-items-center d-flex mb-sm-4 mb-3">
        <div class="mr-auto">
          <h2 class="text-black font-w600">Data Customers</h2>
          <p class="mb-0">Data Customers Sales Personal</p>
        </div>
        <div>
          <a href="javascript:void(0)" class="btn btn-primary mr-3" data-toggle="modal" data-target="#addOrderModal">+New Data</a>

        </div>
      </div>

      <div class="modal fade" id="addOrderModal">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Add Data</h5>
              <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="{!! url('/table-bootstrap-basic'); !!}" method="POST">
                @csrf
                <div class="form-group">
                  <label class="text-black font-w500">Nama</label>
                  <input type="text" name="nama" id="nama" class="form-control">
                </div>
                <div class="form-group">
                  <label class="text-black font-w500">Jenis Kelamin</label>
                  <select class="form-control default-select" name="gender" id="gender">
                    <option>Pria</option>
                    <option>Wanita</option>
                </select>
                  {{-- <input type="text" class="form-control"> --}}
                </div>
                <div class="form-group">
                  <label class="text-black font-w500">Alamat</label>
                  <input type="text" name="alamat" id="alamat" class="form-control">
                </div>
                <div class="form-group">
                  <label class="text-black font-w500">Sub District</label>
                  <input type="text" name="subdistrict" id="subdistrict" class="form-control">
                </div>
                <div class="form-group">
                  <label class="text-black font-w500">District</label>
                  <input type="text" name="district" id="district"  class="form-control">
                </div>
                <div class="form-group">
                  <label class="text-black font-w500">City</label>
                  <input type="text" name="city" id="city" class="form-control">
                </div>
                <div class="form-group">
                  <label class="text-black font-w500">Provinsi</label>
                  <input type="text" name="provinsi" id="provinsi" class="form-control">
                </div>
                <div class="form-group">
                  <label class="text-black font-w500">No Hp</label>
                  <input type="text" name="hp" id="hp" class="form-control">
                </div>
                <div class="form-group">
                  <label class="text-black font-w500">KTP</label>
                  <input type="text" name="ktp" id="ktp" class="form-control">
                </div>
                <div class="form-group">
                  <label class="text-black font-w500" hidden>Salesman</label>
                  <input type="text" name="salesman" id="salesman" class="form-control" value="{{ auth()->user()->nama }}" hidden >
                </div>
                <button type="submit" class="btn btn-rounded btn-success"><span
                  class="btn-icon-left text-success"><i class="fa fa-upload color-success"></i>
              </span>Create</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
              <div class="card-header">
                  <h4 class="card-title">Customers</h4>
                  <form action="/table-bootstrap-basic">
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" name="search" id="search" placeholder="Search Data" value="{{ request('search') }}">
                      <button class="btn btn-outline-success" type="submit"><i class="flaticon-381-search-2"></i></button>
                    </div>
                  </form>
              </div>
              <div class="card-body">
                  <div class="table-responsive">
                      <table class="table table-hover table-responsive-md">
                          <thead>
                              <tr>
                                  <th>No</th>
                                  <th>Nama</th>
                                  <th>Jenis Kelamin</th>
                                  <th>Alamat</th>
                                  <th>Sub District</th>
                                  <th>Distirct</th>
                                  <th>City</th>
                                  <th>Provinsi</th>
                                  <th>No Hp</th>
                                  <th>KTP</th>
                                  <th>Status</th>
                                  <th>Action</th>
                              </tr>
                          </thead>
                          <tbody>
                            @foreach ($customers as $customer)                
                              <tr>
                                  <td>{{ $loop->iteration }}</td>
                                  <td>{{ $customer->nama }}</td>
                                  <td>{{ $customer->gender }}</td>
                                  <td>{{ $customer->alamat }}</td>
                                  <td>{{ $customer->subdistrict }}</td>
                                  <td>{{ $customer->district }}</td>
                                  <td>{{ $customer->city }}</td>
                                  <td>{{ $customer->provinsi }}</td>
                                  <td>{{ $customer->hp }}</td>
                                  <td>{{ $customer->ktp }}</td>
                                  <td><span class="badge light badge-success">Aktif</span></td>
                                  <td>
                                    <div class="dropdown">
                                      <button type="button" class="btn btn-success light sharp" data-toggle="dropdown">
                                        <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
                                      </button>
                                      <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                      </div>
                                    </div>
                                </td>
                              </tr>
                              @endforeach
                          </tbody>
                      </table>
                  </div>
              </div>
              <div class="d-flex justify-content-center">
              {{ $customers->links() }}
              </div>
          </div>
        </div>
      </div>
</div>

              



			
@endsection