{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')
            <!-- row -->
<div class="container-fluid">
    <div class="form-head d-flex mb-sm-4 mb-3">
      <div class="mr-auto">
        <h2 class="text-black font-w600">Doctors</h2>
        <p class="mb-0">Hospital Admin Dashboard Template</p>
      </div>
      <div>
        <a href="javascript:void(0)" class="btn btn-primary mr-3" data-toggle="modal" data-target="#addOrderModal">+New Doctor</a>
        <a href="{!! url('/index'); !!}" class="btn btn-outline-primary"><i class="las la-calendar-plus scale5 mr-3"></i>Filter Date</a>
      </div>
    </div>
    <!-- Add Order -->
    <div class="modal fade" id="addOrderModal">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Add Contact</h5>
            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label class="text-black font-w500">Doctor Name</label>
                <input type="text" class="form-control">
              </div>
              <div class="form-group">
                <label class="text-black font-w500">Doctor ID</label>
                <input type="text" class="form-control">
              </div>
              <div class="form-group">
                <label class="text-black font-w500">Specialist</label>
                <input type="text" class="form-control">
              </div>
              <div class="form-group">
                <label class="text-black font-w500">Date Check In</label>
                <input type="date" class="form-control">
              </div>
              <div class="form-group">
                <button type="button" class="btn btn-primary">CREATE</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="table-responsive card-table">
          <table id="example5" class="display dataTablesCard table-responsive-xl">
            <thead>
              <tr>
                <th>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="checkAll" required="">
                    <label class="custom-control-label" for="checkAll"></label>
                  </div>
                </th>
                <th></th>
                <th>ID</th>
                <th>Date Join</th>
                <th>Doctor Name</th>
                <th>Specialist</th>
                <th>Schedule</th>
                <th>Contact</th>
                <th>Status</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheckBox2" required="">
                    <label class="custom-control-label" for="customCheckBox2"></label>
                  </div>
                </td>
                <td>
                  <img src="{{ asset('images/users/11.png') }}" alt="" width="43">
                </td>
                <td><span class="text-nowrap">#P-00012</span></td>
                <td>26/02/2020, 12:42 AM</td>
                <td>Dr. Samantha</td>
                <td>Dentist</td>
                <td>
                  <a href="javascript:void(0)" class="btn btn-primary text-nowrap btn-sm light">5 Appointment</a>
                </td>
                <td><span class="text-nowrap">+12 4124 5125</span></td>
                <td><span class="text-dark">Unavailable</span></td>
                <td>
                  <div class="dropdown ml-auto text-right">
                    <div class="btn-link" data-toggle="dropdown">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                    </div>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="#">View Detail</a>
                      <a class="dropdown-item" href="#">Edit</a>
                      <a class="dropdown-item" href="#">Delete</a>
                    </div>
                  </div>
                </td>												
              </tr>
              <tr>
                <td>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheckBox3" required="">
                    <label class="custom-control-label" for="customCheckBox3"></label>
                  </div>
                </td>
                <td>
                  <img src="{{ asset('images/users/12.png') }}" alt="" width="43">
                </td>
                <td><span class="text-nowrap">#P-00016</span></td>
                <td>26/02/2020, 12:42 AM</td>
                <td>Dr. Cindy Anderson</td>
                <td>Physical Therapy</td>
                <td>
                  <a href="javascript:void(0)" class="btn btn-primary text-nowrap btn-sm light">2 Appointment</a>
                </td>
                <td><span class="text-nowrap">+12 4124 5125</span></td>
                <td><span class="text-primary">Available</span></td>
                <td>
                  <div class="dropdown ml-auto text-right">
                    <div class="btn-link" data-toggle="dropdown">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                    </div>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="#">View Detail</a>
                      <a class="dropdown-item" href="#">Edit</a>
                      <a class="dropdown-item" href="#">Delete</a>
                    </div>
                  </div>
                </td>												
              </tr>
              <tr>
                <td>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheckBox4" required="">
                    <label class="custom-control-label" for="customCheckBox4"></label>
                  </div>
                </td>
                <td>
                  <img src="{{ asset('images/users/13.png') }}" alt="" width="43">
                </td>
                <td><span class="text-nowrap">#P-00015</span></td>
                <td>26/02/2020, 12:42 AM</td>
                <td>Dr. Olivia Jean</td>
                <td>Dentist</td>
                <td>
                  <a href="javascript:void(0)" class="btn btn-outline-dark text-nowrap btn-sm">No Schedule</a>
                </td>
                <td><span class="text-nowrap">+12 4156 6675</span></td>
                <td><span class="text-dark">Unavailable</span></td>
                <td>
                  <div class="dropdown ml-auto text-right">
                    <div class="btn-link" data-toggle="dropdown">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                    </div>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="#">View Detail</a>
                      <a class="dropdown-item" href="#">Edit</a>
                      <a class="dropdown-item" href="#">Delete</a>
                    </div>
                  </div>
                </td>												
              </tr>
              <tr>
                <td>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheckBox5" required="">
                    <label class="custom-control-label" for="customCheckBox5"></label>
                  </div>
                </td>
                <td>
                  <img src="{{ asset('images/users/14.png') }}" alt="" width="43">
                </td>
                <td><span class="text-nowrap">#P-00014</span></td>
                <td>26/02/2020, 12:42 AM</td>
                <td>Dr. David Lee</td>
                <td>Nursing</td>
                <td>
                  <a href="javascript:void(0)" class="btn btn-primary text-nowrap btn-sm light">2 Appointment</a>
                </td>
                <td><span class="text-nowrap">+12 4155 7623</span></td>
                <td><span class="text-dark">Unavailable</span></td>
                <td>
                  <div class="dropdown ml-auto text-right">
                    <div class="btn-link" data-toggle="dropdown">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                    </div>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="#">View Detail</a>
                      <a class="dropdown-item" href="#">Edit</a>
                      <a class="dropdown-item" href="#">Delete</a>
                    </div>
                  </div>
                </td>												
              </tr>
              <tr>
                <td>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheckBox21" required="">
                    <label class="custom-control-label" for="customCheckBox21"></label>
                  </div>
                </td>
                <td>
                  <img src="{{ asset('images/users/15.png') }}" alt="" width="43">
                </td>
                <td><span class="text-nowrap">#P-00013</span></td>
                <td>26/02/2020, 12:42 AM</td>
                <td>Dr. Marcus Jr</td>
                <td>Physical Therapy</td>
                <td>
                  <a href="javascript:void(0)" class="btn btn-primary text-nowrap btn-sm light">2 Appointment</a>
                </td>
                <td><span class="text-nowrap">+12 4124 5156</span></td>
                <td><span class="text-primary">Available</span></td>
                <td>
                  <div class="dropdown ml-auto text-right">
                    <div class="btn-link" data-toggle="dropdown">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                    </div>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="#">View Detail</a>
                      <a class="dropdown-item" href="#">Edit</a>
                      <a class="dropdown-item" href="#">Delete</a>
                    </div>
                  </div>
                </td>												
              </tr>
              <tr>
                <td>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheckBox26" required="">
                    <label class="custom-control-label" for="customCheckBox26"></label>
                  </div>
                </td>
                <td>
                  <img src="{{ asset('images/users/16.png') }}" alt="" width="43">
                </td>
                <td><span class="text-nowrap">#P-00017</span></td>
                <td>26/02/2020, 12:42 AM</td>
                <td>Dr. Kevin Zidan</td>
                <td>Nursing</td>
                <td>
                  <a href="javascript:void(0)" class="btn btn-outline-dark text-nowrap btn-sm">No Schedule</a>
                </td>
                <td><span class="text-nowrap">+12 4122 4556</span></td>
                <td><span class="text-dark">Unavailable</span></td>
                <td>
                  <div class="dropdown ml-auto text-right">
                    <div class="btn-link" data-toggle="dropdown">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                    </div>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="#">View Detail</a>
                      <a class="dropdown-item" href="#">Edit</a>
                      <a class="dropdown-item" href="#">Delete</a>
                    </div>
                  </div>
                </td>												
              </tr>
              <tr>
                <td>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheckBox27" required="">
                    <label class="custom-control-label" for="customCheckBox27"></label>
                  </div>
                </td>
                <td>
                  <img src="{{ asset('images/users/17.png') }}" alt="" width="43">
                </td>
                <td><span class="text-nowrap">#P-00018</span></td>
                <td>26/02/2020, 12:42 AM</td>
                <td>Dr. Gustauv Loi</td>
                <td>Dentist</td>
                <td>
                  <a href="javascript:void(0)" class="btn btn-primary text-nowrap btn-sm light">2 Appointment</a>
                </td>
                <td><span class="text-nowrap">+12 2567 8654</span></td>
                <td><span class="text-primary">Available</span></td>
                <td>
                  <div class="dropdown ml-auto text-right">
                    <div class="btn-link" data-toggle="dropdown">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                    </div>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="#">View Detail</a>
                      <a class="dropdown-item" href="#">Edit</a>
                      <a class="dropdown-item" href="#">Delete</a>
                    </div>
                  </div>
                </td>												
              </tr>
              <tr>
                <td>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheckBox28" required="">
                    <label class="custom-control-label" for="customCheckBox28"></label>
                  </div>
                </td>
                <td>
                  <img src="{{ asset('images/users/18.png') }}" alt="" width="43">
                </td>
                <td><span class="text-nowrap">#P-00019</span></td>
                <td>26/02/2020, 12:42 AM</td>
                <td>Dr. Samantha</td>
                <td>Nursing</td>
                <td>
                  <a href="javascript:void(0)" class="btn btn-outline-dark text-nowrap btn-sm">No Schedule</a>
                </td>
                <td><span class="text-nowrap">+12 4125 6211</span></td>
                <td><span class="text-dark">Unavailable</span></td>
                <td>
                  <div class="dropdown ml-auto text-right">
                    <div class="btn-link" data-toggle="dropdown">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                    </div>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="#">View Detail</a>
                      <a class="dropdown-item" href="#">Edit</a>
                      <a class="dropdown-item" href="#">Delete</a>
                    </div>
                  </div>
                </td>												
              </tr>
              <tr>
                <td>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheckBox29" required="">
                    <label class="custom-control-label" for="customCheckBox29"></label>
                  </div>
                </td>
                <td>
                  <img src="{{ asset('images/users/19.png') }}" alt="" width="43">
                </td>
                <td><span class="text-nowrap">#P-00012</span></td>
                <td>26/02/2020, 12:42 AM</td>
                <td>Dr. David Lee</td>
                <td>Physical Therapy</td>
                <td>
                  <a href="javascript:void(0)" class="btn btn-primary text-nowrap btn-sm light">2 Appointment</a>
                </td>
                <td><span class="text-nowrap">+12 6567 1245</span></td>
                <td><span class="text-primary">Available</span></td>
                <td>
                  <div class="dropdown ml-auto text-right">
                    <div class="btn-link" data-toggle="dropdown">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                    </div>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="#">View Detail</a>
                      <a class="dropdown-item" href="#">Edit</a>
                      <a class="dropdown-item" href="#">Delete</a>
                    </div>
                  </div>
                </td>												
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
</div>
			
@endsection