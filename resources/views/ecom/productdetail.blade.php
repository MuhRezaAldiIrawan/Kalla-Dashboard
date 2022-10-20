{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')

<div class="container-fluid">
  <div class="page-titles">
    <h4>Event</h4>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="javascript:void(0)">Edit</a></li>
      <li class="breadcrumb-item active"><a href="javascript:void(0)">Event</a></li>
    </ol>
  </div>
  <div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-3 col-lg-6  col-md-6 col-xxl-5  ">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade show active " id="first" >
                                @if ($events->image)
                                <img class="img-thumbnail" src="{{ asset('storage/' . $events->image) }}" alt="">
                                @else
                                <img class="img-fluid" src="{{ asset('images/product/1.jpg') }}" alt="">
                                @endif
                          </div>
                        </div>
                        <div class="tab-slide-content new-arrival-product mb-4 mb-xl-0">
                        </div>
                    </div>
                    <!--Tab slider End-->
                    <div class="col-xl-9 col-lg-6  col-md-6 col-xxl-7 col-sm-12">
                        <div class="product-detail-content">
                            <!--Product details-->
                            <form action="{{ url('/ecom-product-detail/edit/'. $events->id ) }}"  method="POST">
                              @csrf
                              @method('patch')
                                <div class="form-group">
                                  <div class="form-label text-black text-bold width400">Keterangan Kegiatan</div>
                                  <input name="title" class="form-control mt-3 ml-2 text-black" id="title" cols="30"
                                      rows="2" value="{{ $events->title }}" ></input>
                                </div>
                                <div class="form-group">
                                  <div class="form-label text-black text-bold width400">Organizer</div>
                                  <input name="organizer" class="form-control mt-3 ml-2 text-black" id="organizer" cols="30"
                                      rows="2" value="{{ $events->organizer }}"></input>
                                </div>
                                <div class="form-group">
                                  <div class="form-label text-black text-bold width400">Tanggal Mulai Kegiatan</div>
                                  <input name="start" type="datetime-local" class="form-control mt-3 ml-2 text-black" id="start" cols="30"
                                      rows="2" value="{{ $events->start }}"  ></input>
                                </div>
                                <div class="form-group">
                                  <div class="form-label text-black text-bold width400">Tanggal Kegiatan Berakhir</div>
                                  <input name="end" type="datetime-local" class="form-control mt-3 ml-2 text-black" id="end" cols="30"
                                      rows="2" value="{{ $events->end }}"  ></input>
                                </div>
                                <div class="form-group">
                                  <div class="form-label text-black text-bold width400">Tempat</div>
                                  <input name="tempat" class="form-control mt-3 ml-2 text-black" id="tempat" cols="30"
                                      rows="2" value="{{ $events->tempat }}"  ></input>
                                </div>

                                <div class="d-flex ">
                                  <div class="form-group">
                                    <a  href="{{ url('/table-datatable-basic')}}" class="btn btn-success btn-rounded waves-effect waves-light save-category"><span
                                      class="btn-icon-left text-success"><i class="flaticon-381-zoom-out"></i>
                                  </span>Kembali</a>
                                </div>
                                  <div class="form-group ml-4 ">
                                    <button type="submit" class="btn btn-success btn-rounded waves-effect waves-light save-category"><span
                                      class="btn-icon-left text-success"><i class="flaticon-381-notebook"></i>
                                  </span>Update</button>
                                </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <!-- review -->
    <div class="modal fade" id="reviewModal">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Review</h5>
            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="text-center mb-4">
                <img class="img-fluid rounded" width="78" src="{{ asset('images/avatar/1.jpg') }}" alt="DexignZone">
              </div>
              <div class="form-group">
                <div class="rating-widget mb-4 text-center">
                  <!-- Rating Stars Box -->
                  <div class="rating-stars">
                    <ul id="stars">
                      <li class="star" title="Poor" data-value="1">
                        <i class="fa fa-star fa-fw"></i>
                      </li>
                      <li class="star" title="Fair" data-value="2">
                        <i class="fa fa-star fa-fw"></i>
                      </li>
                      <li class="star" title="Good" data-value="3">
                        <i class="fa fa-star fa-fw"></i>
                      </li>
                      <li class="star" title="Excellent" data-value="4">
                        <i class="fa fa-star fa-fw"></i>
                      </li>
                      <li class="star" title="WOW!!!" data-value="5">
                        <i class="fa fa-star fa-fw"></i>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <textarea class="form-control" placeholder="Comment" rows="5"></textarea>
              </div>
              <button class="btn btn-success btn-block">RATE</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
			
@endsection			