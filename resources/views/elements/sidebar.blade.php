<div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
                    <li><a  href="{!! url('/index'); !!}"  href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-networking"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                    </li>
                    <li><a   href="{!! url('/event'); !!}"  href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-calendar"></i>
                        <span class="nav-text">Event</span>
                    </a>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-promotion"></i>
							<span class="nav-text">Customers</span>
						</a>
                        <ul aria-expanded="false"> 
                            <li><a href="{!! url('/table-bootstrap-basic'); !!}">Data Customers</a></li>                         
                            <li><a href="{!! url('/table-history-basic'); !!}">History Transaksi</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-phone-call"></i>
                        <span class="nav-text">Pesan</span></a>
                        <ul aria-expanded="false">
                            <li><a href="{!! url('/akun'); !!}">Akun</a></li>
                            <li><a href="{!! url('/email-compose'); !!}">Tulis Pesan</a></li>
                            <li><a href="{!! url('/ecom-product-list'); !!}">Pesan Masuk</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-share"></i>
                        <span class="nav-text">Product</span></a>
                        <ul aria-expanded="false">
                            <li><a href="{!! url('/ecom-product-list'); !!}">Product List</a></li>
                            <li><a href="{!! url('/ecom-product-sales'); !!}">Custome List</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="{!! url('/app-profile'); !!}" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-television"></i>
                        <span class="nav-text">Profile</span>
                    </a>
                </li>
                    @auth
                    
                    @else
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-layer-1"></i>
							<span class="nav-text">Pages</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{!! url('/page-register'); !!}">Register</a></li>
                            <li><a href="{!! url('/page-login'); !!}">Login</a></li>
                        </ul>
                    </li>
                    @endauth
                </ul>
			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->