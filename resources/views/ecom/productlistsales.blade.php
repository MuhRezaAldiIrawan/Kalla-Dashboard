{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')

<div class="container-fluid">
  <div class="page-titles">
    <h4>Product List</h4>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="javascript:void(0)">Layout</a></li>
      <li class="breadcrumb-item active"><a href="javascript:void(0)">Blank</a></li>
    </ol>
  </div>

  <div class="d-flex justify-content-end mb-4">
    <a  class="btn btn-primary mr-3 text-white" data-toggle="modal" data-target="#add">New Data</a>
  </div>

  <div class="modal fade none-border" id="add">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><strong>Add New Car</strong></h4>
            </div>
            <div class="modal-body">
              <form action="{!! url('/ecom-product-list'); !!}" method="POST" enctype="multipart/form-data">
                @csrf
                  <div class="card-body">
                      <div class="form-group">
                          <div class="form-label">Car Name</div>
                          <input name="carname" class="form-control" id="carname" cols="30"
                              rows="2" required></input>
                      </div>
                      <div class="form-group">
                        <div class="form-label">Unit Name</div>
                        <input name="unitname" class="form-control" id="unitname" cols="30"
                            rows="2" required></input>
                      </div>
                      <div class="form-group mt-4">
                          <div class="form-label">Custom Type</div>
                          <input type="text" class="form-control" name="customtype" id="customtype" required>
                      </div>
                      <div class="form-group mt-4">
                          <div class="form-label">Color Type</div>
                          <input type="text" class="form-control" name="colortype" id="colortype" required>
                      </div>
                      <div class="form-group mt-4">
                        <div class="form-label">Price</div>
                        <input type="text"  class="form-control" name="price" id="price" required>
                      </div>
                      <div class="form-group mt-4">
                      <div class="form-label">Branch</div>
                      <input type="text" class="form-control" name="branch" id="branch" required>
                    </div>
                    <div class="form-group mt-4">
                      <div class="form-label">Customer Type</div>
                      <input type="text" class="form-control" name="customertype" id="customertype" required>
                    </div>
                    <div class="form-group mt-4">
                    <div class="form-label">Detail</div>
                    <input id="detail" type="text" name="detail" class="form-control" required>
                    </div>
                    <div class="form-group mt-4">
                        <div class="form-label">Upload Foto</div>
                        <div class="input-group">
                          <div class="custom-file">
                              <input type="file" id="image" name="image" class="custom-file-input" id="foto" name="foto">
                              <label class="custom-file-label" for="image">Choose file</label>
                          </div>
                        </div>       
                    </div>
                      <div class="form-group mt-4">
                          <button type="submit" class="btn btn-success btn-rounded waves-effect waves-light save-category"><span
                            class="btn-icon-left text-success"><i class="fa fa-plus color-success"></i>
                        </span>Simpan</button>
                      </div>
                  </div>
              </form>
            </div>
        </div>
    </div>
  </div>


  <div class="row">
    @foreach ($shopcars as $car)
      <div class="col-lg-12 col-xl-6">
              <div class="card">
                  <div class="card-body">
                      <div class="row m-b-30">
                          <div class="col-md-5 col-xxl-12">
                              <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
                                  <div class="new-arrivals-img-contnent">
                                      <img class="" src="{{ asset('storage/' . $car->image) }}" alt="" style="height: 400px">
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-7 col-xxl-12">
                              <div class="new-arrival-content position-relative">
                                  <h4><a href="{!! url('/ecom-product-detail'); !!}">{{ $car->carname }}</a></h4>
                                  <div class="comment-review star-rating">
                                    <div class="d-flex justify-content-start">
                                      <p class="price">{{ $car->price }}</p>
                                    </div>
                                      
                                  </div>
                                  <p>Availability: <span class="item"> In stock <i class="fa fa-check-circle text-success"></i></span></p>
                                  <p>Unit Name: <span class="item">{{ $car->unitname }}</span> </p>
                                  <p>Custom Type: <span class="item">{{ $car->customtype }}</span></p>
                                  <p class="text-content">{{ $car->detail }}</p>
                              </div>
                          </div>
                          
                      </div>
                  </div>
                  <div class="d-flex mb-2 ml-3">
                    <button type="button" class="btn tp-btn btn-success ">Detail</button>
                  </div>   
              </div>
            </div>        
        @endforeach
      </div>
</div>
			
@endsection			