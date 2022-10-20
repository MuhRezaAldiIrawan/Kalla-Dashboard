{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')
            <!-- row -->
			<div class="container-fluid">
				<div class="form-head page-titles d-flex mb-md-4">
					<div class="mr-auto">
						<h2 class="text-black font-w600">Reviews</h2>
						<ol class="breadcrumb">
							<li class="breadcrumb-item active"><a href="javascript:void(0)">Doctor</a></li>
							<li class="breadcrumb-item"><a href="javascript:void(0)">#P-0616</a></li>
						</ol>
					</div>
					<div class="d-sm-flex d-block mb-0 align-items-end">
						<ul class="nav nav-pills review-tab mr-3 mb-2">
							<li class="nav-item">
								<a href="#navpills-1" class="nav-link active" data-toggle="tab" aria-expanded="false">ALL REVIEW</a>
							</li>
							<li class="nav-item">
								<a href="#navpills-2" class="nav-link" data-toggle="tab" aria-expanded="false">PUBLISHED</a>
							</li>
							<li class="nav-item">
								<a href="#navpills-3" class="nav-link" data-toggle="tab" aria-expanded="true">DELETED</a>
							</li>
						</ul>
						<div class="dropdown d-inline-block mb-2">
							<div class="btn btn-outline-primary dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="false">
								Newest
							</div>
							<div class="dropdown-menu dropdown-menu-left">
								<a class="dropdown-item" href="#">Newest</a>
								<a class="dropdown-item" href="#">Old</a>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-12">
						<div class="tab-content">
							<div id="navpills-1" class="tab-pane active show fade">
								<div class="card review-table">
									<div class="media">
										<div class="custom-control align-self-center custom-checkbox mr-3">
											<input type="checkbox" class="custom-control-input" id="customCheckBox2" required="">
											<label class="custom-control-label" for="customCheckBox2"></label>
										</div>
										<img class="mr-3 img-fluid" width="110" src="{{ asset('images/avatar/1.jpg') }}" alt="DexignZone">
										<div class="media-body">
											<h3 class="fs-20 text-black font-w600 mb-3"><a href="{!! url('/email-read'); !!}" class="text-black">Glee Smiley</a>
												<span class="star-review ml-sm-3 ml-0 d-sm-inline-block d-block">
													<i class="fa fa-star text-orange"></i>
													<i class="fa fa-star text-orange"></i>
													<i class="fa fa-star text-orange"></i>
													<i class="fa fa-star text-orange"></i>
													<i class="fa fa-star text-gray"></i>
												</span>
											</h3>
											<p>When I came with my mother, I was very nervous. But after entering here I felt warmed with smiling</p>
											<span class="fs-15">Sunday, 24 July 2020   04:55 PM</span>
										</div>
										<div class="media-footer d-flex align-self-center">
											<div class="disease mr-5">
												<p class="mb-1 fs-14">Disease</p>
												<h4 class="text-primary">Diabetes</h4>
											</div>
											<div class="edit ml-auto">
												<a href="javascript:void(0);" class="btn btn-outline-danger">DELETE</a>
												<a href="javascript:void(0);" class="btn btn-outline-primary ml-2">PUBLISH</a>
											</div>
										</div>
									</div>
								</div>
								<div class="card review-table">
									<div class="media">
										<div class="custom-control align-self-center custom-checkbox mr-3">
											<input type="checkbox" class="custom-control-input" id="customCheckBox21" required="">
											<label class="custom-control-label" for="customCheckBox21"></label>
										</div>
										<img class="mr-3 img-fluid" width="110" src="{{ asset('images/avatar/2.jpg') }}" alt="DexignZone">
										<div class="media-body">
											<h3 class="fs-20 text-black font-w600 mb-3"><a href="{!! url('/email-read'); !!}" class="text-black">Alexa Keev</a>
												<span class="star-review ml-sm-3 ml-0 d-sm-inline-block d-block">
													<i class="fa fa-star text-orange"></i>
													<i class="fa fa-star text-orange"></i>
													<i class="fa fa-star text-orange"></i>
													<i class="fa fa-star text-orange"></i>
													<i class="fa fa-star text-gray"></i>
												</span>
											</h3>
											<p>Thanks for all the services, no doubt it is the best hospital. My kidney, BP, diabetes problem</p>
											<span class="fs-15">Sunday, 24 July 2020   04:55 PM</span>
										</div>
										<div class="media-footer d-flex align-self-center">
											<div class="disease mr-5">
												<p class="mb-1 fs-14">Disease</p>
												<h4 class="text-primary">Dental Care</h4>
											</div>
											<div class="edit ml-auto">
												<a href="javascript:void(0);" class="btn btn-outline-danger">DELETE</a>
												<a href="javascript:void(0);" class="btn btn-outline-primary ml-2">PUBLISH</a>
											</div>
										</div>
									</div>
								</div>
								<div class="card review-table">
									<div class="media">
										<div class="custom-control align-self-center custom-checkbox mr-3">
											<input type="checkbox" class="custom-control-input" id="customCheckBox22" required="">
											<label class="custom-control-label" for="customCheckBox22"></label>
										</div>
										<img class="mr-3 img-fluid" width="110" src="{{ asset('images/avatar/3.jpg') }}" alt="DexignZone">
										<div class="media-body">
											<h3 class="fs-20 text-black font-w600 mb-3"><a href="{!! url('/email-read'); !!}" class="text-black">Ivankov</a>
												<span class="star-review ml-sm-3 ml-0 d-sm-inline-block d-block">
													<i class="fa fa-star text-orange"></i>
													<i class="fa fa-star text-orange"></i>
													<i class="fa fa-star text-orange"></i>
													<i class="fa fa-star text-orange"></i>
													<i class="fa fa-star text-gray"></i>
												</span>
											</h3>
											<p>I am very much glad to note my feedback and grateful. Thanks to Dr. Chibber and assistants. I got very good guidelines for my patient.</p>
											<span class="fs-15">Sunday, 24 July 2020   04:55 PM</span>
										</div>
										<div class="media-footer d-flex align-self-center">
											<div class="disease mr-5">
												<p class="mb-1 fs-14">Disease</p>
												<h4 class="text-primary">Cold & Flu</h4>
											</div>
											<div class="edit ml-auto">
												<a href="javascript:void(0);" class="btn btn-outline-danger">DELETE</a>
												<a href="javascript:void(0);" class="btn btn-outline-dark ml-2">UNPUBLISH</a>
											</div>
										</div>
									</div>
								</div>
								<div class="card review-table">
									<div class="media">
										<div class="custom-control align-self-center custom-checkbox mr-3">
											<input type="checkbox" class="custom-control-input" id="customCheckBox24" required="">
											<label class="custom-control-label" for="customCheckBox24"></label>
										</div>
										<img class="mr-3 img-fluid" width="110" src="{{ asset('images/avatar/4.jpg') }}" alt="DexignZone">
										<div class="media-body">
											<h3 class="fs-20 text-black font-w600 mb-3"><a href="{!! url('/email-read'); !!}" class="text-black">Axestoria Jr.</a>
												<span class="star-review ml-sm-3 ml-0 d-sm-inline-block d-block">
													<i class="fa fa-star text-orange"></i>
													<i class="fa fa-star text-orange"></i>
													<i class="fa fa-star text-orange"></i>
													<i class="fa fa-star text-orange"></i>
													<i class="fa fa-star text-gray"></i>
												</span>
											</h3>
											<p>When I came with my mother, I was very nervous. But after entering here I felt warmed with smiling</p>
											<span class="fs-15">Sunday, 24 July 2020   04:55 PM</span>
										</div>
										<div class="media-footer d-flex align-self-center">
											<div class="disease mr-5">
												<p class="mb-1 fs-14">Disease</p>
												<h4 class="text-primary">Diabetes</h4>
											</div>
											<div class="edit ml-auto">
												<a href="javascript:void(0);" class="btn btn-outline-danger">DELETE</a>
												<a href="javascript:void(0);" class="btn btn-outline-primary ml-2">PUBLISH</a>
											</div>
										</div>
									</div>
								</div>
								<div class="card review-table">
									<div class="media">
										<div class="custom-control align-self-center custom-checkbox mr-3">
											<input type="checkbox" class="custom-control-input" id="customCheckBox25" required="">
											<label class="custom-control-label" for="customCheckBox25"></label>
										</div>
										<img class="mr-3 img-fluid" width="110" src="{{ asset('images/avatar/5.jpg') }}" alt="DexignZone">
										<div class="media-body">
											<h3 class="fs-20 text-black font-w600 mb-3"><a href="{!! url('/email-read'); !!}" class="text-black">Kevin Heirn</a>
												<span class="star-review ml-sm-3 ml-0 d-sm-inline-block d-block">
													<i class="fa fa-star text-orange"></i>
													<i class="fa fa-star text-orange"></i>
													<i class="fa fa-star text-orange"></i>
													<i class="fa fa-star text-orange"></i>
													<i class="fa fa-star text-gray"></i>
												</span>
											</h3>
											<p>It was never a feeling as if I was in a hospital. I got the best care. The response of each staff, right from security (screening), housekeeping, admission staff, nurses, trainee doctor, Doctor was excellent. </p>
											<span class="fs-15">Sunday, 24 July 2020   04:55 PM</span>
										</div>
										<div class="media-footer d-flex align-self-center">
											<div class="disease mr-5">
												<p class="mb-1 fs-14">Disease</p>
												<h4 class="text-primary">Dental Care</h4>
											</div>
											<div class="edit ml-auto">
												<a href="javascript:void(0);" class="btn btn-outline-danger">DELETE</a>
												<a href="javascript:void(0);" class="btn btn-outline-dark ml-2">UNPUBLISH</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="navpills-2" class="tab-pane  fade">
								<div class="card review-table">
									<div class="media">
										<div class="custom-control align-self-center custom-checkbox mr-3">
											<input type="checkbox" class="custom-control-input" id="customCheckBox26" required="">
											<label class="custom-control-label" for="customCheckBox26"></label>
										</div>
										<img class="mr-3 img-fluid" width="110" src="{{ asset('images/avatar/1.jpg') }}" alt="DexignZone">
										<div class="media-body">
											<h3 class="fs-20 text-black font-w600 mb-3"><a href="{!! url('/email-read'); !!}" class="text-black">Glee Smiley</a>
												<span class="star-review ml-sm-3 ml-0 d-sm-inline-block d-block">
													<i class="fa fa-star text-orange"></i>
													<i class="fa fa-star text-orange"></i>
													<i class="fa fa-star text-orange"></i>
													<i class="fa fa-star text-orange"></i>
													<i class="fa fa-star text-gray"></i>
												</span>
											</h3>
											<p>When I came with my mother, I was very nervous. But after entering here I felt warmed with smiling</p>
											<span class="fs-15">Sunday, 24 July 2020   04:55 PM</span>
										</div>
										<div class="media-footer d-flex align-self-center">
											<div class="disease mr-5">
												<p class="mb-1 fs-14">Disease</p>
												<h4 class="text-primary">Diabetes</h4>
											</div>
											<div class="edit ml-auto">
												<a href="javascript:void(0);" class="btn btn-outline-danger">DELETE</a>
												<a href="javascript:void(0);" class="btn btn-outline-primary ml-2">PUBLISH</a>
											</div>
										</div>
									</div>
								</div>
								<div class="card review-table">
									<div class="media">
										<div class="custom-control align-self-center custom-checkbox mr-3">
											<input type="checkbox" class="custom-control-input" id="customCheckBox27" required="">
											<label class="custom-control-label" for="customCheckBox27"></label>
										</div>
										<img class="mr-3 img-fluid" width="110" src="{{ asset('images/avatar/3.jpg') }}" alt="DexignZone">
										<div class="media-body">
											<h3 class="fs-20 text-black font-w600 mb-3"><a href="{!! url('/email-read'); !!}" class="text-black">Ivankov</a>
												<span class="star-review ml-sm-3 ml-0 d-sm-inline-block d-block">
													<i class="fa fa-star text-orange"></i>
													<i class="fa fa-star text-orange"></i>
													<i class="fa fa-star text-orange"></i>
													<i class="fa fa-star text-orange"></i>
													<i class="fa fa-star text-gray"></i>
												</span>
											</h3>
											<p>I am very much glad to note my feedback and grateful. Thanks to Dr. Chibber and assistants. I got very good guidelines for my patient.</p>
											<span class="fs-15">Sunday, 24 July 2020   04:55 PM</span>
										</div>
										<div class="media-footer d-flex align-self-center">
											<div class="disease mr-5">
												<p class="mb-1 fs-14">Disease</p>
												<h4 class="text-primary">Cold & Flu</h4>
											</div>
											<div class="edit ml-auto">
												<a href="javascript:void(0);" class="btn btn-outline-danger">DELETE</a>
												<a href="javascript:void(0);" class="btn btn-outline-dark ml-2">UNPUBLISH</a>
											</div>
										</div>
									</div>
								</div>
								<div class="card review-table">
									<div class="media">
										<div class="custom-control align-self-center custom-checkbox mr-3">
											<input type="checkbox" class="custom-control-input" id="customCheckBox28" required="">
											<label class="custom-control-label" for="customCheckBox28"></label>
										</div>
										<img class="mr-3 img-fluid" width="110" src="{{ asset('images/avatar/2.jpg') }}" alt="DexignZone">
										<div class="media-body">
											<h3 class="fs-20 text-black font-w600 mb-3"><a href="{!! url('/email-read'); !!}" class="text-black">Alexa Keev</a>
												<span class="star-review ml-sm-3 ml-0 d-sm-inline-block d-block">
													<i class="fa fa-star text-orange"></i>
													<i class="fa fa-star text-orange"></i>
													<i class="fa fa-star text-orange"></i>
													<i class="fa fa-star text-orange"></i>
													<i class="fa fa-star text-gray"></i>
												</span>
											</h3>
											<p>Thanks for all the services, no doubt it is the best hospital. My kidney, BP, diabetes problem</p>
											<span class="fs-15">Sunday, 24 July 2020   04:55 PM</span>
										</div>
										<div class="media-footer d-flex align-self-center">
											<div class="disease mr-5">
												<p class="mb-1 fs-14">Disease</p>
												<h4 class="text-primary">Dental Care</h4>
											</div>
											<div class="edit ml-auto">
												<a href="javascript:void(0);" class="btn btn-outline-danger">DELETE</a>
												<a href="javascript:void(0);" class="btn btn-outline-primary ml-2">PUBLISH</a>
											</div>
										</div>
									</div>
								</div>
								<div class="card review-table">
									<div class="media">
										<div class="custom-control align-self-center custom-checkbox mr-3">
											<input type="checkbox" class="custom-control-input" id="customCheckBox29" required="">
											<label class="custom-control-label" for="customCheckBox29"></label>
										</div>
										<img class="mr-3 img-fluid" width="110" src="{{ asset('images/avatar/4.jpg') }}" alt="DexignZone">
										<div class="media-body">
											<h3 class="fs-20 text-black font-w600 mb-3"><a href="{!! url('/email-read'); !!}" class="text-black">Axestoria Jr.</a>
												<span class="star-review ml-sm-3 ml-0 d-sm-inline-block d-block">
													<i class="fa fa-star text-orange"></i>
													<i class="fa fa-star text-orange"></i>
													<i class="fa fa-star text-orange"></i>
													<i class="fa fa-star text-orange"></i>
													<i class="fa fa-star text-gray"></i>
												</span>
											</h3>
											<p>When I came with my mother, I was very nervous. But after entering here I felt warmed with smiling</p>
											<span class="fs-15">Sunday, 24 July 2020   04:55 PM</span>
										</div>
										<div class="media-footer d-flex align-self-center">
											<div class="disease mr-5">
												<p class="mb-1 fs-14">Disease</p>
												<h4 class="text-primary">Diabetes</h4>
											</div>
											<div class="edit ml-auto">
												<a href="javascript:void(0);" class="btn btn-outline-danger">DELETE</a>
												<a href="javascript:void(0);" class="btn btn-outline-primary ml-2">PUBLISH</a>
											</div>
										</div>
									</div>
								</div>
								<div class="card review-table">
									<div class="media">
										<div class="custom-control align-self-center custom-checkbox mr-3">
											<input type="checkbox" class="custom-control-input" id="customCheckBox222" required="">
											<label class="custom-control-label" for="customCheckBox222"></label>
										</div>
										<img class="mr-3 img-fluid" width="110" src="{{ asset('images/avatar/5.jpg') }}" alt="DexignZone">
										<div class="media-body">
											<h3 class="fs-20 text-black font-w600 mb-3"><a href="{!! url('/email-read'); !!}" class="text-black">Kevin Heirn</a>
												<span class="star-review ml-sm-3 ml-0 d-sm-inline-block d-block">
													<i class="fa fa-star text-orange"></i>
													<i class="fa fa-star text-orange"></i>
													<i class="fa fa-star text-orange"></i>
													<i class="fa fa-star text-orange"></i>
													<i class="fa fa-star text-gray"></i>
												</span>
											</h3>
											<p>It was never a feeling as if I was in a hospital. I got the best care. The response of each staff, right from security (screening), housekeeping, admission staff, nurses, trainee doctor, Doctor was excellent. </p>
											<span class="fs-15">Sunday, 24 July 2020   04:55 PM</span>
										</div>
										<div class="media-footer d-flex align-self-center">
											<div class="disease mr-5">
												<p class="mb-1 fs-14">Disease</p>
												<h4 class="text-primary">Dental Care</h4>
											</div>
											<div class="edit ml-auto">
												<a href="javascript:void(0);" class="btn btn-outline-danger">DELETE</a>
												<a href="javascript:void(0);" class="btn btn-outline-dark ml-2">UNPUBLISH</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="navpills-3" class="tab-pane  fade">
								<div class="card review-table">
									<div class="media">
										<div class="custom-control align-self-center custom-checkbox mr-3">
											<input type="checkbox" class="custom-control-input" id="customCheckBox3" required="">
											<label class="custom-control-label" for="customCheckBox3"></label>
										</div>
										<img class="mr-3 img-fluid" width="110" src="{{ asset('images/avatar/3.jpg') }}" alt="DexignZone">
										<div class="media-body">
											<h3 class="fs-20 text-black font-w600 mb-3"><a href="{!! url('/email-read'); !!}" class="text-black">Ivankov</a>
												<span class="star-review ml-sm-3 ml-0 d-sm-inline-block d-block">
													<i class="fa fa-star text-orange"></i>
													<i class="fa fa-star text-orange"></i>
													<i class="fa fa-star text-orange"></i>
													<i class="fa fa-star text-orange"></i>
													<i class="fa fa-star text-gray"></i>
												</span>
											</h3>
											<p>I am very much glad to note my feedback and grateful. Thanks to Dr. Chibber and assistants. I got very good guidelines for my patient.</p>
											<span class="fs-15">Sunday, 24 July 2020   04:55 PM</span>
										</div>
										<div class="media-footer d-flex align-self-center">
											<div class="disease mr-5">
												<p class="mb-1 fs-14">Disease</p>
												<h4 class="text-primary">Cold & Flu</h4>
											</div>
											<div class="edit ml-auto">
												<a href="javascript:void(0);" class="btn btn-outline-danger">DELETE</a>
												<a href="javascript:void(0);" class="btn btn-outline-dark ml-2">UNPUBLISH</a>
											</div>
										</div>
									</div>
								</div>
								<div class="card review-table">
									<div class="media">
										<div class="custom-control align-self-center custom-checkbox mr-3">
											<input type="checkbox" class="custom-control-input" id="customCheckBox4" required="">
											<label class="custom-control-label" for="customCheckBox4"></label>
										</div>
										<img class="mr-3 img-fluid" width="110" src="{{ asset('images/avatar/4.jpg') }}" alt="DexignZone">
										<div class="media-body">
											<h3 class="fs-20 text-black font-w600 mb-3"><a href="{!! url('/email-read'); !!}" class="text-black">Axestoria Jr.</a>
												<span class="star-review ml-sm-3 ml-0 d-sm-inline-block d-block">
													<i class="fa fa-star text-orange"></i>
													<i class="fa fa-star text-orange"></i>
													<i class="fa fa-star text-orange"></i>
													<i class="fa fa-star text-orange"></i>
													<i class="fa fa-star text-gray"></i>
												</span>
											</h3>
											<p>When I came with my mother, I was very nervous. But after entering here I felt warmed with smiling</p>
											<span class="fs-15">Sunday, 24 July 2020   04:55 PM</span>
										</div>
										<div class="media-footer d-flex align-self-center">
											<div class="disease mr-5">
												<p class="mb-1 fs-14">Disease</p>
												<h4 class="text-primary">Diabetes</h4>
											</div>
											<div class="edit ml-auto">
												<a href="javascript:void(0);" class="btn btn-outline-danger">DELETE</a>
												<a href="javascript:void(0);" class="btn btn-outline-primary ml-2">PUBLISH</a>
											</div>
										</div>
									</div>
								</div>
								<div class="card review-table">
									<div class="media">
										<div class="custom-control align-self-center custom-checkbox mr-3">
											<input type="checkbox" class="custom-control-input" id="customCheckBox5" required="">
											<label class="custom-control-label" for="customCheckBox5"></label>
										</div>
										<img class="mr-3 img-fluid" width="110" src="{{ asset('images/avatar/5.jpg') }}" alt="DexignZone">
										<div class="media-body">
											<h3 class="fs-20 text-black font-w600 mb-3"><a href="{!! url('/email-read'); !!}" class="text-black">Kevin Heirn</a>
												<span class="star-review ml-sm-3 ml-0 d-sm-inline-block d-block">
													<i class="fa fa-star text-orange"></i>
													<i class="fa fa-star text-orange"></i>
													<i class="fa fa-star text-orange"></i>
													<i class="fa fa-star text-orange"></i>
													<i class="fa fa-star text-gray"></i>
												</span>
											</h3>
											<p>It was never a feeling as if I was in a hospital. I got the best care. The response of each staff, right from security (screening), housekeeping, admission staff, nurses, trainee doctor, Doctor was excellent. </p>
											<span class="fs-15">Sunday, 24 July 2020   04:55 PM</span>
										</div>
										<div class="media-footer d-flex align-self-center">
											<div class="disease mr-5">
												<p class="mb-1 fs-14">Disease</p>
												<h4 class="text-primary">Dental Care</h4>
											</div>
											<div class="edit ml-auto">
												<a href="javascript:void(0);" class="btn btn-outline-danger">DELETE</a>
												<a href="javascript:void(0);" class="btn btn-outline-dark ml-2">UNPUBLISH</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-12">
						<div class="d-md-flex d-block align-items-center mt-4">
							<p>Showing 10 from 46 data</p>
							<nav class="ml-auto">
								<ul class="pagination">
									<li class="page-item page-indicator">
										<a class="page-link" href="javascript:void()">
											<i class="la la-angle-left"></i></a>
									</li>
									<li class="page-item active"><a class="page-link" href="javascript:void()">1</a>
									</li>
									<li class="page-item"><a class="page-link" href="javascript:void()">2</a></li>
									<li class="page-item"><a class="page-link" href="javascript:void()">3</a></li>
									<li class="page-item"><a class="page-link" href="javascript:void()">4</a></li>
									<li class="page-item page-indicator">
										<a class="page-link" href="javascript:void()">
											<i class="la la-angle-right"></i></a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
            </div>
			
@endsection			