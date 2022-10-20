{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')
    <div class="container-fluid">
        <div class="page-titles">
            <h4>Pesan</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Akun</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Tertaut</a></li>
            </ol>  
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
              <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="button" data-toggle="modal" data-target="#edit" class="btn btn-primary ">Add Agent</button>
              </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="right-box-padding">
                                  <div id="app">
                                    <div class="d-flex justify-content-center">
                                      <h1>Whatsapp API</h1>
                                    </div>
                                    <p>Powered by Ngekoding</p>
                                    <div class="d-flex justify-content-center mt-5">
                                      <img src="" alt="QR Code" id="qrcode">
                                    </div>
                                    <div class="d-flex justify-content-center mt-3">
                                      <p>Please Scan Me</p>
                                    </div>
                                    <h4 class=" mt-5 ml-5 ">Logs:</h4>
                                    <ul class="logs"></ul>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade none-border" id="edit">
      <div class="modal-dialog modal-lg modal-dialog-scrollable">
          <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title"><strong>Edit Promotion</strong></h4>
              </div>
              <div class="modal-body">
                <form >
                  @csrf
                    <div class="card-body">
                      <div id="app">
                        <div class="form-group">
                          <label for="client-id">ID</label><br>
                            <input name="nama" class="form-control" id="client-id" placeholder="Masukkan ID" cols="30"
                                rows="2" "></input>
                        </div>
                        <div class="form-group">
                          <div class="form-label">Waktu</div>
                          <input name="text"  class="form-control"  id="client-description" placeholder="Masukkan deskripsi" cols="30"
                              rows="2" ></input>
                      </div>
                        <div class="form-group mt-4">
                            <button type="submit" class="btn btn-success btn-rounded waves-effect waves-light add-client-btn"><span
                              class="btn-icon-left text-success"><i class="fa fa-plus color-success"></i>
                          </span>Simpan</button>
                        </div>
                    </div>
                  </div>
                </form>
              </div>
          </div>
      </div>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.3.0/socket.io.js" crossorigin="anonymous"></script>
	<script>
		$(document).ready(function() {
			var socket = io();

			// Ketika button tambah diklik
			$('.add-client-btn').click(function() {
				var clientId = $('#client-id').val();
				var clientDescription = $('#client-description').val();

        /**
         * Some peoples want to use the phone number as the ID
         * But because we use the ID as the html class attribute value: class="<The ID>"
         * It won't work. Read more on https://www.w3.org/TR/REC-html40/types.html#type-cdata
         * 
         * So, here we add the prefix to solve that problem
         * Each ID will automatically added a 'client-' prefix for the class attribute
         */
        var clientClass = 'client-' + clientId;
				var template = $('.client').first().clone()
										   .removeClass('hide')
										   .addClass(clientClass);

				template.find('.title').html(clientId);
				template.find('.description').html(clientDescription);
				template.find('.logs').append($('<li>').text('Connecting...'));
				$('.client-container').append(template);

				socket.emit('create-session', {
					id: clientId,
					description: clientDescription
				});
			});

			socket.on('init', function(data) {
				$('.client-container .client').not(':first').remove();
				console.log(data);
				for (var i = 0; i < data.length; i++) {
					var session = data[i];

					var clientId = session.id;
					var clientDescription = session.description;

          var clientClass = 'client-' + clientId;
					var template = $('.client').first().clone()
											   .removeClass('hide')
											   .addClass(clientClass);

					template.find('.title').html(clientId);
					template.find('.description').html(clientDescription);
					$('.client-container').append(template);

					if (session.ready) {
						$(`.client.${clientClass} .logs`).prepend($('<li>').text('Whatsapp is ready!'));
					} else {
						$(`.client.${clientClass} .logs`).prepend($('<li>').text('Connecting...'));
					}
				}
			});

			socket.on('remove-session', function(id) {
				$(`.client.client-${id}`).remove();
			});

			socket.on('message', function(data) {
				$(`.client.client-${data.id} .logs`).prepend($('<li>').text(data.text));
			});

			socket.on('qr', function(data) {
				$(`.client.client-${data.id} #qrcode`).attr('src', data.src);
				$(`.client.client-${data.id} #qrcode`).show();
			});

			socket.on('ready', function(data) {
				$(`.client.client-${data.id} #qrcode`).hide();
			});

			socket.on('authenticated', function(data) {
				$(`.client.client-${data.id} #qrcode`).hide();
			});
		});
	</script>
@endsection
