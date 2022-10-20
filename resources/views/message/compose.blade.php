{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')

<div class="container-fluid">
  <div class="page-titles">
    <h4>Pesan</h4>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="javascript:void(0)">Add</a></li>
      <li class="breadcrumb-item active"><a href="javascript:void(0)">Pesan Baru</a></li>
    </ol>
  </div>
  <!-- row -->
  <div class="row">
      <div class="col-lg-12">
          <div class="card">
              <div class="card-body">
                      <div class="compose-content">
                          <form action="#">
                              <div class="form-group">
                                  <input type="text" class="form-control bg-transparent" placeholder=" Sender :">
                              </div>
                              <div class="form-group">
                                  <input type="text" class="form-control bg-transparent" placeholder=" Phone Number :">
                              </div>
                              <div class="form-group">
                                  <textarea id="email-compose-editor" class="textarea_editor form-control bg-transparent" rows="15" placeholder="Message...."></textarea>
                              </div>
                          </form>
                          <h5 class="mb-4"><i class="fa fa-paperclip"></i> Media</h5>
      <form action="#" class="dropzone">
        <div class="fallback">
          <input name="file" type="file" multiple />
        </div>
      </form>
                      </div>
                      <div class="text-left mt-4">
                          <button class="btn btn-primary btn-sl-sm mr-2" type="button"><span class="mr-2"><i class="fa fa-paper-plane"></i></span>Send</button>
                          <button class="btn btn-danger light btn-sl-sm" type="button"><span class="mr-2"><i class="fa fa-times" aria-hidden="true"></i></span>Cancel</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

</div>
			
@endsection