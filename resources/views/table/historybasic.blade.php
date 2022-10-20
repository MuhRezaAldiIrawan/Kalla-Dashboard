{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')

<div class="container-fluid">
  <div class="page-titles">
      <h4>History Transaksi</h4>
      {{-- <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Bootstrap</a></li>
      </ol> --}}
  </div>
    <!-- row -->
    <div class="row">  
        <div class="col-xl-12 col-lg-12 col-xxl-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Riwayat Transaksi</h4>
                    <form action="/table-history-basic">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" name="search" id="search" placeholder="Search Data" value="{{ request('search') }}">
                          <button class="btn btn-outline-success" type="submit"><i class="flaticon-381-search-2"></i></button>
                        </div>
                      </form>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-responsive-md">
                            <thead>
                                <tr>
                                    <th class="width80"><strong>No</strong></th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Alamat</th>
                                    <th>City</th>
                                    <th>>Distirct</th>
                                    <th>Provinsi</th>
                                    <th>Model</th>
                                    <th>No Hp</th>
                                    <th>KTP</th>
                                    <th>Tanggal Transaksi</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($customers as $customer)                
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $customer->nama }}</td>
                                    <td>{{ $customer->gender }}</td>
                                    <td>{{ $customer->alamat }}</td>
                                    <td>{{ $customer->city }}</td>
                                    <td>{{ $customer->district }}</td>
                                    <td>{{ $customer->provinsi }}</td>
                                    <td>{{ $customer->model }}</td>
                                    <td>{{ $customer->hp }}</td>
                                    <td>{{ $customer->ktp }}</td>
                                    <td>{{ $customer->tanggal }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
</div>

{{-- <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Exam Toppers</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-responsive-md">
                            <thead>
                                <tr>
                                    <th class="width50">
              <div class="custom-control custom-checkbox checkbox-success check-lg mr-3">
                <input type="checkbox" class="custom-control-input" id="checkAll" required="">
                <label class="custom-control-label" for="checkAll"></label>
              </div>
            </th>
                                    <th><strong>ROLL NO.</strong></th>
                                    <th><strong>NAME</strong></th>
                                    <th><strong>Email</strong></th>
                                    <th><strong>Date</strong></th>
                                    <th><strong>Status</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
              <div class="custom-control custom-checkbox checkbox-success check-lg mr-3">
                <input type="checkbox" class="custom-control-input" id="customCheckBox2" required="">
                <label class="custom-control-label" for="customCheckBox2"></label>
              </div>
            </td>
                                    <td><strong>542</strong></td>
                                    <td><div class="d-flex align-items-center"><img src="{{ asset('images/avatar/1.jpg') }}" class="rounded-lg mr-2" width="24" alt=""/> <span class="w-space-no">Dr. Jackson</span></div></td>
                                    <td>example@example.com	</td>
                                    <td>01 August 2020</td>
                                    <td><div class="d-flex align-items-center"><i class="fa fa-circle text-success mr-1"></i> Successful</div></td>
                                    <td>
              <div class="d-flex">
                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
              </div>
            </td>
                                </tr>
          <tr>
                                    <td>
              <div class="custom-control custom-checkbox checkbox-success check-lg mr-3">
                <input type="checkbox" class="custom-control-input" id="customCheckBox3" required="">
                <label class="custom-control-label" for="customCheckBox3"></label>
              </div>
            </td>
                                    <td><strong>542</strong></td>
                                    <td><div class="d-flex align-items-center"><img src="{{ asset('images/avatar/2.jpg') }}" class="rounded-lg mr-2" width="24" alt=""/> <span class="w-space-no">Dr. Jackson</span></div></td>
                                    <td>example@example.com	</td>
                                    <td>01 August 2020</td>
                                    <td><div class="d-flex align-items-center"><i class="fa fa-circle text-danger mr-1"></i> Canceled</div></td>
                                    <td>
              <div class="d-flex">
                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
              </div>
            </td>
                                </tr>
          <tr>
                                    <td>
              <div class="custom-control custom-checkbox checkbox-success check-lg mr-3">
                <input type="checkbox" class="custom-control-input" id="customCheckBox4" required="">
                <label class="custom-control-label" for="customCheckBox4"></label>
              </div>
            </td>
                                    <td><strong>542</strong></td>
                                    <td><div class="d-flex align-items-center"><img src="{{ asset('images/avatar/3.jpg') }}" class="rounded-lg mr-2" width="24" alt=""/> <span class="w-space-no">Dr. Jackson</span></div></td>
                                    <td>example@example.com	</td>
                                    <td>01 August 2020</td>
                                    <td><div class="d-flex align-items-center"><i class="fa fa-circle text-warning mr-1"></i> Pending</div></td>
                                    <td>
              <div class="d-flex">
                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
              </div>
            </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
<div class="col-lg-12"> --}}
            {{-- <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Basic</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-responsive-sm">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>1</th>
                                    <td>Kolor Tea Shirt For Man</td>
                                    <td><span class="badge badge-primary light">Sale</span>
                                    </td>
                                    <td>January 22</td>
                                    <td class="color-primary">$21.56</td>
                                </tr>
                                <tr>
                                    <th>2</th>
                                    <td>Kolor Tea Shirt For Women</td>
                                    <td><span class="badge badge-success">Tax</span>
                                    </td>
                                    <td>January 30</td>
                                    <td class="color-success">$55.32</td>
                                </tr>
                                <tr>
                                    <th>3</th>
                                    <td>Blue Backpack For Baby</td>
                                    <td><span class="badge badge-danger">Extended</span>
                                    </td>
                                    <td>January 25</td>
                                    <td class="color-danger">$14.85</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> --}}
        {{-- <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Table Striped</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-responsive-sm">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>1</th>
                                    <td>Kolor Tea Shirt For Man</td>
                                    <td><span class="badge badge-primary">Sale</span>
                                    </td>
                                    <td>January 22</td>
                                    <td class="color-primary">$21.56</td>
                                </tr>
                                <tr>
                                    <th>2</th>
                                    <td>Kolor Tea Shirt For Women</td>
                                    <td><span class="badge badge-success light">Tax</span>
                                    </td>
                                    <td>January 30</td>
                                    <td class="color-success">$55.32</td>
                                </tr>
                                <tr>
                                    <th>3</th>
                                    <td>Blue Backpack For Baby</td>
                                    <td><span class="badge badge-danger">Extended</span>
                                    </td>
                                    <td>January 25</td>
                                    <td class="color-danger">$14.85</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Table Bordered</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-responsive-sm">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>1</th>
                                    <td>Kolor Tea Shirt For Man</td>
                                    <td><span class="badge badge-primary">Sale</span>
                                    </td>
                                    <td>January 22</td>
                                    <td class="color-primary">$21.56</td>
                                </tr>
                                <tr>
                                    <th>2</th>
                                    <td>Kolor Tea Shirt For Women</td>
                                    <td><span class="badge badge-success">Tax</span>
                                    </td>
                                    <td>January 30</td>
                                    <td class="color-success">$55.32</td>
                                </tr>
                                <tr>
                                    <th>3</th>
                                    <td>Blue Backpack For Baby</td>
                                    <td><span class="badge badge-danger">Extended</span>
                                    </td>
                                    <td>January 25</td>
                                    <td class="color-danger">$14.85</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Table Hover</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-responsive-sm">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>1</th>
                                    <td>Kolor Tea Shirt For Man</td>
                                    <td><span class="badge badge-primary light">Sale</span>
                                    </td>
                                    <td>January 22</td>
                                    <td class="color-primary">$21.56</td>
                                </tr>
                                <tr>
                                    <th>2</th>
                                    <td>Kolor Tea Shirt For Women</td>
                                    <td><span class="badge badge-success">Tax</span>
                                    </td>
                                    <td>January 30</td>
                                    <td class="color-success">$55.32</td>
                                </tr>
                                <tr>
                                    <th>3</th>
                                    <td>Blue Backpack For Baby</td>
                                    <td><span class="badge badge-danger light">Extended</span>
                                    </td>
                                    <td>January 25</td>
                                    <td class="color-danger">$14.85</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /# card -->
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Hover Table</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table header-border table-hover verticle-middle">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Product</th>
                                    <th scope="col">Popularity</th>
                                    <th scope="col">Sales</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>1</th>
                                    <td>Air Conditioner</td>
                                    <td>
                                        <div class="progress bgl-primary">
                                            <div class="progress-bar" style="width: 70%;" role="progressbar"><span class="sr-only">70% Complete</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge badge-primary light">70%</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>2</th>
                                    <td>Textiles</td>
                                    <td>
                                        <div class="progress bgl-success">
                                            <div class="progress-bar bg-success" style="width: 70%;" role="progressbar"><span class="sr-only">70% Complete</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge badge-success">70%</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>3</th>
                                    <td>Milk Powder</td>
                                    <td>
                                        <div class="progress bgl-dark">
                                            <div class="progress-bar bg-dark" style="width: 70%;" role="progressbar"><span class="sr-only">70% Complete</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge badge-dark light">70%</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>4</th>
                                    <td>Vehicles</td>
                                    <td>
                                        <div class="progress  bgl-danger">
                                            <div class="progress-bar bg-danger" style="width: 70%;" role="progressbar"><span class="sr-only">70% Complete</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge badge-danger">70%</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>5</th>
                                    <td>Boats</td>
                                    <td>
                                        <div class="progress  bgl-warning">
                                            <div class="progress-bar bg-warning" style="width: 70%;" role="progressbar"><span class="sr-only">70% Complete</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge badge-warning">70%</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Bordered Table</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered verticle-middle table-responsive-sm">
                            <thead>
                                <tr>
                                    <th scope="col">Task</th>
                                    <th scope="col">Progress</th>
                                    <th scope="col">Deadline</th>
                                    <th scope="col">Label</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Air Conditioner</td>
                                    <td>
                                        <div class="progress bgl-primary">
                                            <div class="progress-bar bg-primary" style="width: 70%;" role="progressbar"><span class="sr-only">70% Complete</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Apr 20,2018</td>
                                    <td><span class="badge badge-primary light">70%</span>
                                    </td>
                                    <td>
                                        <span>
                                            <a href="javascript:void()" class="mr-4" data-toggle="tooltip"
                                                data-placement="top" title="Edit"><i
                                                    class="fa fa-pencil color-muted"></i> </a>
                                            <a href="javascript:void()" data-toggle="tooltip"
                                                data-placement="top" title="Close"><i
                                                    class="fa fa-close color-danger"></i></a>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Textiles</td>
                                    <td>
                                        <div class="progress bgl-success">
                                            <div class="progress-bar bg-success" style="width: 70%;" role="progressbar"><span class="sr-only">70% Complete</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>May 27,2018</td>
                                    <td><span class="badge badge-success">70%</span>
                                    </td>
                                    <td><span><a href="javascript:void()" class="mr-4" data-toggle="tooltip"
                                                data-placement="top" title="Edit"><i
                                                    class="fa fa-pencil color-muted"></i> </a><a
                                                href="javascript:void()" data-toggle="tooltip"
                                                data-placement="top" title="Close"><i
                                                    class="fa fa-close color-danger"></i></a></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Milk Powder</td>
                                    <td>
                                        <div class="progress bgl-dark">
                                            <div class="progress-bar bg-dark" style="width: 70%;" role="progressbar"><span class="sr-only">70% Complete</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>May 18,2018</td>
                                    <td><span class="badge badge-dark light">70%</span>
                                    </td>
                                    <td><span><a href="javascript:void()" class="mr-4" data-toggle="tooltip"
                                                data-placement="top" title="Edit"><i
                                                    class="fa fa-pencil color-muted"></i> </a><a
                                                href="javascript:void()" data-toggle="tooltip"
                                                data-placement="top" title="Close"><i
                                                    class="fa fa-close color-danger"></i></a></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Vehicles</td>
                                    <td>
                                        <div class="progress bgl-danger">
                                            <div class="progress-bar bg-danger" style="width: 70%;" role="progressbar"><span class="sr-only">70% Complete</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Mar 27,2018</td>
                                    <td><span class="badge badge-danger">70%</span>
                                    </td>
                                    <td><span><a href="javascript:void()" class="mr-4" data-toggle="tooltip"
                                                data-placement="top" title="Edit"><i
                                                    class="fa fa-pencil color-muted"></i> </a><a
                                                href="javascript:void()" data-toggle="tooltip"
                                                data-placement="top" title="Close"><i
                                                    class="fa fa-close color-danger"></i></a></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Boats</td>
                                    <td>
                                        <div class="progress bgl-warning">
                                            <div class="progress-bar bg-warning" style="width: 70%;" role="progressbar"><span class="sr-only">70% Complete</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Jun 28,2018</td>
                                    <td><span class="badge badge-warning">70%</span>
                                    </td>
                                    <td><span><a href="javascript:void()" class="mr-4" data-toggle="tooltip"
                                                data-placement="top" title="Edit"><i
                                                    class="fa fa-pencil color-muted"></i> </a><a
                                                href="javascript:void()" data-toggle="tooltip"
                                                data-placement="top" title="Close"><i
                                                    class="fa fa-close color-danger"></i></a></span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Table Stripped</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
                            <thead>
                                <tr>
                                    <th scope="col">Task</th>
                                    <th scope="col">Progress</th>
                                    <th scope="col">Deadline</th>
                                    <th scope="col">Label</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Air Conditioner</td>
                                    <td>
                                        <div class="progress bgl-primary">
                                            <div class="progress-bar bg-primary" style="width: 70%;" role="progressbar"><span class="sr-only">70% Complete</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Apr 20,2018</td>
                                    <td><span class="badge badge-primary">70%</span>
                                    </td>
                                    <td><span><a href="javascript:void()" class="mr-4" data-toggle="tooltip"
                                                data-placement="top" title="Edit"><i
                                                    class="fa fa-pencil color-muted"></i> </a><a
                                                href="javascript:void()" data-toggle="tooltip"
                                                data-placement="top" title="Close"><i
                                                    class="fa fa-close color-danger"></i></a></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Textiles</td>
                                    <td>
                                        <div class="progress  bgl-success">
                                            <div class="progress-bar bg-success" style="width: 70%;" role="progressbar"><span class="sr-only">70% Complete</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>May 27,2018</td>
                                    <td><span class="badge badge-success">70%</span>
                                    </td>
                                    <td><span><a href="javascript:void()" class="mr-4" data-toggle="tooltip"
                                                data-placement="top" title="Edit"><i
                                                    class="fa fa-pencil color-muted"></i> </a><a
                                                href="javascript:void()" data-toggle="tooltip"
                                                data-placement="top" title="Close"><i
                                                    class="fa fa-close color-danger"></i></a></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Milk Powder</td>
                                    <td>
                                        <div class="progress bgl-dark">
                                            <div class="progress-bar bg-dark" style="width: 70%;" role="progressbar"><span class="sr-only">70% Complete</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>May 18,2018</td>
                                    <td><span class="badge badge-dark">70%</span>
                                    </td>
                                    <td><span><a href="javascript:void()" class="mr-4" data-toggle="tooltip"
                                                data-placement="top" title="Edit"><i
                                                    class="fa fa-pencil color-muted"></i> </a><a
                                                href="javascript:void()" data-toggle="tooltip"
                                                data-placement="top" title="Close"><i
                                                    class="fa fa-close color-danger"></i></a></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Boats</td>
                                    <td>
                                        <div class="progress bgl-warning">
                                            <div class="progress-bar bg-warning" style="width: 70%;" role="progressbar"><span class="sr-only">70% Complete</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Jun 28,2018</td>
                                    <td><span class="badge badge-warning">70%</span>
                                    </td>
                                    <td><span><a href="javascript:void()" class="mr-4" data-toggle="tooltip"
                                                data-placement="top" title="Edit"><i
                                                    class="fa fa-pencil color-muted"></i> </a><a
                                                href="javascript:void()" data-toggle="tooltip"
                                                data-placement="top" title="Close"><i
                                                    class="fa fa-close color-danger"></i></a></span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Responsive Table</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table header-border table-responsive-sm">
                            <thead>
                                <tr>
                                    <th>Invoice</th>
                                    <th>User</th>
                                    <th>Date</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Country</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="javascript:void(0)">Order #26589</a>
                                    </td>
                                    <td>Herman Beck</td>
                                    <td><span class="text-muted">Oct 16, 2017</span>
                                    </td>
                                    <td>$45.00</td>
                                    <td><span class="badge badge-success">Paid</span>
                                    </td>
                                    <td>EN</td>
                                </tr>
                                <tr>
                                    <td><a href="javascript:void(0)">Order #58746</a>
                                    </td>
                                    <td>Mary Adams</td>
                                    <td><span class="text-muted">Oct 12, 2017</span>
                                    </td>
                                    <td>$245.30</td>
                                    <td><span class="badge badge-info light">Shipped</span>
                                    </td>
                                    <td>CN</td>
                                </tr>
                                <tr>
                                    <td><a href="javascript:void(0)">Order #98458</a>
                                    </td>
                                    <td>Caleb Richards</td>
                                    <td><span class="text-muted">May 18, 2017</span>
                                    </td>
                                    <td>$38.00</td>
                                    <td><span class="badge badge-danger">Shipped</span>
                                    </td>
                                    <td>AU</td>
                                </tr>
                                <tr>
                                    <td><a href="javascript:void(0)">Order #32658</a>
                                    </td>
                                    <td>June Lane</td>
                                    <td><span class="text-muted">Apr 28, 2017</span>
                                    </td>
                                    <td>$77.99</td>
                                    <td><span class="badge badge-success">Paid</span>
                                    </td>
                                    <td>FR</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Heading With Background</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-info">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th>2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th>3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Primary Table</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table primary-table-bordered">
                            <thead class="thead-primary">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th>2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th>3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Primary Table Hover</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table primary-table-bg-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th>2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th>3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                                <tr>
                                    <th>4</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                                <tr>
                                    <th>5</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                                <tr>
                                    <th>5</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12"> --}}
            {{-- <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Contextual Table</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table header-border">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Column heading</th>
                                    <th>Column heading</th>
                                    <th>Column heading</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="table-active">
                                    <td>1</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>
                                <tr class="table-primary">
                                    <td>1</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>
                                <tr class="table-success">
                                    <td>2</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>
                                <tr class="table-info">
                                    <td>3</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>
                                <tr class="table-warning">
                                    <td>4</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>
                                <tr class="table-danger">
                                    <td>5</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>
			
@endsection