{{-- Extends layout --}}
@extends('layout.fullwidth')



{{-- Content --}}
@section('content')
<div class="col-md-6">
        
  <div class="authincation-content">
        <div class="row no-gutters">
            <div class="col-xl-12">
                <div class="auth-form">
                    <div class="text-center mb-3">
                      <a href="{!! url('/index'); !!}"><img src="{{ asset('images/logo-full.png') }}" alt=""></a>
                    </div>
                    <h4 class="text-center mb-4 text-white">Sign up your account</h4>
                    <form action="{!! url('/page-register'); !!}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="mb-1 text-white"><strong>Username</strong></label>
                            <input type="text" name="nama" id="nama" class="form-control" placeholder="username" autofocus>
                        </div>
                        <div class="form-group">
                            <label class="mb-1 text-white"><strong>Email</strong></label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="hello@example.com">
                        </div>
                        <div class="form-group">
                            <label class="mb-1 text-white"><strong>Nomor Hp</strong></label>
                            <input type="text" name="hp" id="hp" class="form-control" placeholder="+62">
                        </div>
                        <div class="form-group">
                            <label class="mb-1 text-white"><strong>Password</strong></label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Min3">
                        </div>
                        <div class="text-center mt-4">
                            <button type="submit" class="btn bg-white text-primary btn-block">Sign me up</button>
                        </div>
                    </form>
                    <div class="new-account mt-3">
                        <p class="text-white">Already have an account? <a class="text-white" href="{!! url('/page-login'); !!}">Sign in</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection