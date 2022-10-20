{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')

<div class="container-fluid">
  <div class="page-titles">
      <h4>CAR</h4>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Add</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">New Car</a></li>
      </ol>
  </div>
    <!-- row -->
    <div class="row">
        <div class="col-xl-12 col-xxl-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Form step</h4>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                      <form action="{!! url('/form-wizard'); !!}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div id="wizard_Service" class="tab-pane" role="tabpanel">
                          <div class="row">
                              <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                  <label class="text-label">Car Name</label>
                                  <input type="text" name="carname" id="carname" class="form-control" placeholder="Parsley" required>
                                </div>
                              </div>
                              <div class="col-lg-6 mb-2">
                                <div class="form-group">
                                  <label class="text-label">Unit Type</label>
                                  <input type="text" name="unitname" id="unitname" class="form-control" placeholder="Montana">
                                </div>
                              </div>
                              <div class="col-lg-6 mb-2">
                                <div class="form-group">
                                  <label class="text-label">Custom Type</label>
                                  <input type="text" class="form-control" id="customtype" name="customtype" aria-describedby="inputGroupPrepend2" >
                                </div>
                              </div>
                              <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                  <label class="text-label">Color Type</label>
                                  <input type="text" name="colortype" id="colortype" class="form-control" placeholder="Retail / Corporate" required>
                                </div>
                              </div>
                              <div class="col-lg-12 mb-3">
                                <div class="form-group">
                                  <label class="text-label">Price</label>
                                  <input type="text" name="place" name="price" id="price" class="form-control" placeholder="Starting From" required>
                                </div>
                              </div>
                              <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                  <label class="text-label">Branch</label>
                                  <input type="text" name="branch" id="branch" class="form-control" placeholder="Cellophane Square" required>
                                </div>
                              </div>
                              <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                  <label class="text-label">Customer Type</label>
                                  <input type="text" class="form-control" id="customertype"  name="customertype" required>
                                </div>
                              </div>
                              <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                  <label class="text-label">Detail</label>
                                  <input type="text" name="detail" id="detail" class="form-control" placeholder="New Car / Oldest" required>
                                </div>
                              </div>
                            </div>
                            <div class="d-flex justify-content-end ml-5 mr-4">
                              <button type="submit" class="btn btn-primary justify-content-end">Tambahkan data <span
                                class="btn-icon-right"><i class="fa fa-car"></i></span>
                              </button>
                            </div>
                          </div>
                        </form>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
			
@endsection