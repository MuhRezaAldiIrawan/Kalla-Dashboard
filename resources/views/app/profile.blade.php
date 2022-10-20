{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')
            <!-- row -->
<div class="container-fluid">
  <div class="page-titles">
    <h4>Profile</h4>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="javascript:void(0)">App</a></li>
      <li class="breadcrumb-item active"><a href="javascript:void(0)">Profile</a></li>
    </ol>
  </div>
  <!-- row -->
  <div class="row">
      <div class="col-lg-12">
          <div class="profile card card-body px-3 pt-3 pb-0">
              <div class="profile-head">
                  <div class="photo-content">
                      <div class="cover-photo"></div>   
                  </div>
                  <div class="profile-info">
                    <div class="profile-photo">
                      <img src="{{ asset('storage/' . auth()->user()->image) }}" class="img-fluid rounded" alt="" style="height: 120px;widht: 150px;">
                    </div>
                    <div class="profile-details">
                      <div class="profile-name px-3 pt-2">
                        <h4 class="text-primary mb-0">{{ auth()->user()->nama }}</h4>
                        <p>SALESMAN KALLA TOYOTA</p>
                      </div>
                      <div class="profile-email px-2 pt-2">
                        <h4 class="text-muted mb-0">{{ auth()->user()->email }}</h4>
                        <p>Email</p>
                      </div>
                    </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="row">
      <div class="col-xl-12">
          <div class="card">
              <div class="card-body">
                  <div class="profile-tab">
                      <div class="custom-tab-1">
                          <ul class="nav nav-tabs">
                              <li class="nav-item"><a href="#my-posts" data-toggle="tab" class="nav-link active show"><i class="la la-home mr-3"></i>Kalla Way</a>
                              </li>
                              <li class="nav-item"><a href="#about-me" data-toggle="tab" class="nav-link"><i class="la la-user mr-3"></i>About Me</a>
                              </li>
                              <li class="nav-item"><a href="#profile-settings" data-toggle="tab" class="nav-link"><i class="las la-user-cog mr-3"></i>Setting</a>
                              </li>
                          </ul>
                          <div class="tab-content">
                              <div id="my-posts" class="tab-pane fade active show">
                                <div class="my-post-content pt-3">
                                  <h4 class="text-primary">Embrace the Future with Jalan KALLA</h4>
                                  <p class="mb-2">Sejak berdiri hingga saat ini, KALLA mampu bertahan dan tumbuh dalam setiap zaman dengan Jalan KALLA yang menjadi Corporate Culture kami. Berasal dari nilai dan filosofi hidup dari para pendiri perusahaan, Jalan KALLA menjadi kompas kami dari dulu, saat ini hingga masa yang akan datang.</p>

                                  <h6 class="text-primary">Kerja Ibadah</h6>
                                  <p>
                                    Dalam menjalankan pekerjaan dan tanggung jawab sehari-hari, kami selalu memberikan hasil yang terbaik sesuai dengan Amanah yang diberikan oleh perusahaan. Budaya ini adalah bentuk nyata dari kami selaku umat beragama dalam beribadah kepadaNya.Kami percaya bahwa setiap pekerjaan akan selalu diawasi olehNya dan bernilai pahala yang berlipat ganda jika dikerjakan dengan dengan budaya integritas dan profesionalitas. 
                                  </p>

                                  <h6 class="text-primary">Apresiasi Pelanggan</h6>
                                  <p>
                                    “Customer is the core of our company”
                                  </p>
                                  <p>
                                    Dalam memberikan yang terbaik bagi pelanggan, kami menjalankan budaya Customer Delight dengan pelayanan dan pengalaman yang melebihi espektasi pelanggan. Dalam prosesnya, Kami mengedepankan nilai “Maju Bersama” dimana seluruh produk dan layanan kami bertujuan untuk membawa kehidupan yang lebih baik bagi pelanggan internal, pelanggan eksternal serta mitra kerja.
                                  </p>
                                  <p>
                                    Kami juga percaya bahwa hubungan dengan pelanggan harus dilandasi dengan nilai “Respect to People” sehingga terjalin rasa saling percaya dan komunikatif antara kami dan pelanggan.  
                                  </p>

                                  <h6 class="text-primary">Lebih Cepat – Lebih Baik</h6>
                                  <p>
                                    Seiring dengan pertumbuhan bisnis yang kian pesat dan espektasi pelanggan, kami terus membangun budaya inovasi bagi setiap kebutuhan pasar. Sebagai fondasi awal, setiap tindakan kami dilandasi oleh budaya Efektif-Efisien agar setiap produk dan layanan kami sesuai kebutuhan dan menjadi solusi terbaik.
                                  </p>
                                  <p>
                                    Tidak hanya itu, budaya inovatif dan solutif menjadi urat nadi kami dalam menjawab setiap tantangan zaman dan dunia bisnis yang kian kompleks dan beragam. Sebagai tujuan akhir, budaya untuk selalu unggul dan terdepan menjadi yang menjadi semangat untuk melangkah lebih cepat dan lebih baik. 
                                  </p>

                                  <h6 class="text-primary">Aktif Bersama</h6>
                                  <p>
                                    Pada akhirnya, kami percaya untuk berjalan lebih jauh, kami harus berjalan bersama masyarakat, pelanggan, mitra dalam meraih kesejahteraan bersama. Kami membangun budaya teamwork, dimana kami membangun hubungan yang produktif dengan setiap pihak yang dilandasi dengan rasa percaya, harmoni, komunikasi dan peduli.
                                  </p>
                                  <p>
                                    Ditengah persaingan yang semakin kuat, budaya kolaborasi dan sinergi kami hadirkan untuk membangkitkan setiap potensi dari Internal kami maupun dari masyarakat untuk membantu kita melangkah lebih jauh bersama.
                                  </p>
                                </div>

                              </div>
                              <div id="about-me" class="tab-pane fade">
                                  <div class="profile-personal-info">
                                    <div class="my-post-content pt-3">
                                      <h4 class="text-primary mb-4">Personal Information</h4>
                                      <div class="row mb-2">
                                          <div class="col-3">
                                              <h5 class="f-w-500">Name <span class="pull-right">:</span>
                                              </h5>
                                          </div>
                                          <div class="col-9"><span>{{ auth()->user()->nama }}</span>
                                          </div>
                                      </div>
                                      <div class="row mb-2">
                                          <div class="col-3">
                                              <h5 class="f-w-500">Email <span class="pull-right">:</span>
                                              </h5>
                                          </div>
                                          <div class="col-9"><span>{{ auth()->user()->email }}</span>
                                          </div>
                                      </div>
                                      <div class="row mb-2">
                                          <div class="col-3">
                                              <h5 class="f-w-500">Pekerjaan<span class="pull-right">:</span></h5>
                                          </div>
                                          <div class="col-9"><span>Salesman</span>
                                          </div>
                                      </div>
                                      <div class="row mb-2">
                                          <div class="col-3">
                                              <h5 class="f-w-500">Cabang<span class="pull-right">:</span>
                                              </h5>
                                          </div>
                                          <div class="col-9"><span>Jl. DR. Ratulangi No.52 · In Burger King · 0852-4179-8688 · In-store shopping
                                            </span>
                                          </div>
                                      </div>
                                      <div class="row mb-2">
                                          <div class="col-3">
                                              <h5 class="f-w-500">Tanggal Mulai<span class="pull-right">:</span></h5>
                                          </div>
                                          <div class="col-9"><span>{{ auth()->user()->created_at }}</span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              </div>
                              <div id="profile-settings" class="tab-pane fade">
                                  <div class="pt-3">
                                      <div class="settings-form">
                                          <h4 class="text-primary">Account Setting</h4>
                                       
                                          <form method="POST" action="{{ url('/app-profile', auth()->user()->id) }}" enctype="multipart/form-data">
                                            @csrf
                                            @method('patch')
                                              <div class="form-row">
                                                <div class="form-group col-md-6">
                                                  <label>Nama</label>
                                                  <input type="text" id="nama" name="nama" placeholder="Email" class="form-control" value="{{ auth()->user()->nama }}">
                                                </div>
                                                  <div class="form-group col-md-6">
                                                      <label>Email</label>
                                                      <input type="email" id="email" name="email" placeholder="Email" class="form-control" value="{{ auth()->user()->email }}">
                                                  </div>
                                                  <div class="form-group col-md-6">
                                                    <label>Nomor Hp</label>
                                                    <input type="text" id="hp" name="hp" placeholder="1234 Main St" class="form-control" value="{{ auth()->user()->hp }}">
                                                  </div>
                                                  <div class="form-group col-md-6">
                                                    <label for="image">Foto Profile</label>
                                                    <div class="input-group">
                                                      <div class="custom-file">
                                                          <input type="file" class="custom-file-input" id="image" name="image">
                                                          <label class="custom-file-label" for="image">Choose file</label>
                                                      </div>
                                                    </div>
                                                  </div>
                                              </div>
                                              <button class="btn btn-primary btn-rounded" type="submit">Update</button>
                                          </form>
                                         
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>

    <!-- Modal -->
    <div class="modal fade" id="replyModal">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Post Reply</h5>
            <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
          </div>
          <div class="modal-body">
            <form>
              <textarea class="form-control" rows="4">Message</textarea>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Reply</button>
          </div>
        </div>
      </div>
    </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection			