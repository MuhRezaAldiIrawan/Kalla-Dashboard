{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')

<div class="container-fluid">
  <div class="page-titles">
    <h4>Product List</h4>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="javascript:void(0)">Product</a></li>
      <li class="breadcrumb-item active"><a href="javascript:void(0)">List</a></li>
    </ol>
  </div>

  <div class="d-flex justify-content-end mb-4">
    <a  class="btn btn-primary mr-3 text-white" data-toggle="modal" data-target="#add">New Data</a>
  </div>

  <div class="modal fade none-border" id="add">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><strong>Add Promotion</strong></h4>
            </div>
            <div class="modal-body">
              <form action="{!! url('/ecom-product-list'); !!}" method="POST" enctype="multipart/form-data">
                @csrf
                  <div class="card-body">
                      <div class="form-group">
                          <div class="form-label">Nama Promosi</div>
                          <input name="nama" class="form-control" id="nama" cols="30"
                              rows="2" required></input>
                      </div>
                      <div class="form-group">
                        <div class="form-label">Waktu Promosi</div>
                        <input type="date" name="waktu" class="form-control" id="waktu" cols="30"
                            rows="2" required></input>
                      </div>
                      <div class="form-group mt-4">
                          <div class="form-label">Benefit</div>
                          <input type="text" class="form-control" name="benefit" id="benefit" required>
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
                                  <h4><a href="{!! url('/ecom-product-detail'); !!}">{{ $car->nama }}</a></h4>
                                  <div class="comment-review star-rating">
                                    <div class="d-flex justify-content-start">
                                      <p class="price">{{ $car->waktu }}</p>
                                    </div>
                                      
                                  </div>
                                  <p>Availability: <span class="item"> In stock <i class="fa fa-check-circle text-success"></i></span></p>
                                  <p>Benefit: <span class="item">{{ $car->benefit }}</span> </p>
                                  <p class="text-content">{{ $car->detail }}</p>
                              </div>
                          </div>
                          
                      </div>
                  </div>
                  <div class="d-flex mb-2 ml-3">
                    <button type="button" class="btn tp-btn btn-info ">send</button>
                    <a href="{{ url('/ecom-product-list/edit/'. $car->id ) }}" type="button" data-toggle="modal" data-target="#edit" class="btn tp-btn btn-success ">edit</a>
                    <form action="{{ url('/ecom-product-list', $car->id ) }}" method="POST" onsubmit= "return confirm('Apa Kamu Yakin?')">
                      @csrf
                      @method('delete')
                      <button type="submit" class="btn tp-btn btn-danger ">delete</button>
                    </form>
                  </div>   
              </div>
            </div>        
        @endforeach
      </div>
</div>

<div class="modal fade none-border" id="edit">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
      <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title"><strong>Edit Promotion</strong></h4>
          </div>
          <div class="modal-body">
            <form action="{!! url('/ecom-product-list/edit/'. $car->id ) !!}" method="POST" enctype="multipart/form-data">
              @csrf
                <div class="card-body">
                    <div class="form-group">
                        <div class="form-label">Nama Promosi</div>
                        <input name="nama" class="form-control" id="nama" cols="30"
                            rows="2" value="{{ $car->nama }}"></input>
                    </div>
                    <div class="form-group">
                      <div class="form-label">Waktu</div>
                      <input name="waktu" type="datetime-local"  class="form-control" id="waktu" cols="30"
                          rows="2" value="{{ $car->waktu }}"></input>
                  </div>
                    <div class="form-group mt-4">
                        <div class="form-label">benefit</div>
                        <input type="text" class="form-control" name="benefit" id="benefit" value="{{ $car->benefit }}">
                    </div>
                    <div class="form-group mt-4">
                        <div class="form-label">Detail</div>
                        <input type="text" class="form-control" name="detail" id="detail" value="{{ $car->detail }}">
                    </div>
                    <div class="form-group mt-4">
                      <div class="form-label">Upload Foto / Browsur Kegiatan</div>
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
			
@endsection			