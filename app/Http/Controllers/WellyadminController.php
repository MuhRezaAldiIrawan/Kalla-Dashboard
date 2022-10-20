<?php

namespace App\Http\Controllers;

use App\Models\sales;

use App\Models\customers;
use Illuminate\Support\Str;
use App\Models\noncustomers;
use App\Models\events;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\shopcar;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class WellyadminController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
	
    public function __construct()
    {
        $this->customers = new customers();
        $this->noncustomers = new noncustomers();
        $this->sales = new sales();
        $this->events = new events();
        $this->shopcar = new shopcar();
    }



	    // Dashboard
    public function dashboard_1()
    {
      
     
        $page_title = 'Dashboard';
        $page_description = 'Some description for the page';
        $logo = "images/logo.png";
        $logoText = "images/logo-text.png";
        $active="active";
        $event_class="schedule-event";
        $button_class="btn-primary";
        $action = __FUNCTION__;
		
        return view('dashboard.index', compact('page_title', 'page_description','action','logo','logoText','active','event_class','button_class'));
    }
    
	   // Page Analytics
    public function patient()
    {
        
        $page_title = 'Patient';
        $page_description = 'Some description for the page';
        $logo = "images/logo.png";
        $logoText = "images/logo-text.png";
		
        $action = __FUNCTION__;

        return view('dashboard.patient', compact('page_title', 'page_description','action','logo','logoText'));
    }
	
	     // Patient Details
    public function patient_details()
    {
        $page_title = 'Patient Details';
        $page_description = 'Some description for the page';
        $logo = "images/logo.png";
        $logoText = "images/logo-text.png";
		
        $action = __FUNCTION__;

        return view('dashboard.patient_details', compact('page_title', 'page_description','action','logo','logoText'));
    }

	    // Doctor
    public function doctor()
    {
        $page_title = 'Doctor';
        $page_description = 'Some description for the page';
        $logo = "images/logo.png";
        $logoText = "images/logo-text.png";
		
        $action = __FUNCTION__;

        return view('dashboard.doctor', compact('page_title', 'page_description','action','logo','logoText'));
    }
	    // Doctor Details
    public function doctor_details()
    {
        $page_title = 'Doctor Details';
        $page_description = 'Some description for the page';
        $logo = "images/logo.png";
        $logoText = "images/logo-text.png";
		
        $action = __FUNCTION__;

        return view('dashboard.doctor_details', compact('page_title', 'page_description','action','logo','logoText'));
    }
	    // Review
    public function reviews()
    {
        $page_title = 'Review';
        $page_description = 'Some description for the page';
        $logo = "images/logo.png";
        $logoText = "images/logo-text.png";
		
        $action = __FUNCTION__;

        return view('dashboard.reviews', compact('page_title', 'page_description','action','logo','logoText'));
    }
	    // Calender
    public function app_calender()
    {
        $page_title = 'Calender';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('app.calender', compact('page_title', 'page_description','action'));
    }
    
	    // Profile
    public function app_profile()
    {
        $page_title = 'Profile';
        $page_description = 'Some description for the page';
		
        $action = __FUNCTION__;

        $data = [
            'sales' => $this->sales->getalldata(),

        ];

        $sales = sales::get();

        return view('app.profile', compact('page_title', 'page_description','action'),$data);
    }

    // public function editprofile(Request $request, sales $sales)
    // {
    //     // return $request->file('image')->store('event-image');

    //     $rules = [
    //         'nama' => 'required|max:255',
    //         'email' => 'required|max:255',
    //         'hp' => 'required',
    //         'image' => 'image|file|max:5000'
        
    //     ];

    //     $validatedData = $request->validate($rules);

    //     sales::where('id', $sales->id)->update($validatedData);


        
    //     // sales::update($editprofile);

    //     return redirect('/table-datatable-basic');
    // }

    public function editprofile(Request $request, $id)
    {
 
        // dd($request);
        // return $request->file('image')->store('sales-image');

        $editpro = $request->validate([
            'nama' => 'required|max:255',
            'email' => 'required|max:255',
            'hp' => 'required',
            'image' => 'image|file|max:5000'
        ]);

        if($request->file('image'))
        {
            $editpro['image'] = $request->file('image')->store('sales-image');
            
        }

        sales::where('id', $request->id)->update($editpro);



        // DB::table('sales')->where('id', $id)->update([
        //     'nama' => $request->nama,
        //     'email' => $request->email,
        //     'hp' => $request->hp,
        //     'image' =>$request->image
        //     // 'password' => $request->password
        // ]);

        // if($request->file('image'))
        // {
        //     $addnew['image'] = $request->file('image')->store('event-image');
        //     // $this->image->store('sales-image');
            
        // }

        return redirect('/app-profile')->with('event', 'Event Telah berhasil dihapus');

    }


	    // Post Details
    public function post_details()
    {
        $page_title = 'Post Details';
        $page_description = 'Some description for the page';
		
        $action = __FUNCTION__;

        return view('app.post_details', compact('page_title', 'page_description','action'));
    }
	
	    // Chart Chartist
    public function chart_chartist()
    {
        $page_title = 'Chart Chartist';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;

        return view('chart.chartist', compact('page_title', 'page_description','action'));
    }
	
	    // Chart Chartjs
    public function chart_chartjs()
    {
        $page_title = 'Chart Chartjs';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('chart.chartjs', compact('page_title', 'page_description','action'));
    }
	
	    // Chart Flot
    public function chart_flot()
    {
        $page_title = 'Chart Flot';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('chart.flot', compact('page_title', 'page_description','action'));
    }
	
	    // Chart Morris
    public function chart_morris()
    {
        $page_title = 'Chart Morris';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('chart.morris', compact('page_title', 'page_description','action'));
    }
	
	    // Chart Peity
    public function chart_peity()
    {
        $page_title = 'Chart Peity';
        $page_description = 'Some description for the page';
		
        $action = __FUNCTION__;

        return view('chart.peity', compact('page_title', 'page_description','action'));
    }
	
	    // Chart Sparkline
    public function chart_sparkline()
    {
        $page_title = 'Chart Sparkline';
        $page_description = 'Some description for the page';
		
        $action = __FUNCTION__;

        return view('chart.sparkline', compact('page_title', 'page_description','action'));
    }
	
	    // Ecommerce Checkout
    public function ecom_checkout()
    {
        $page_title = 'Checkout';
        $page_description = 'Some description for the page';
		
        $action = __FUNCTION__;

        return view('ecom.checkout', compact('page_title', 'page_description','action'));
    }
	
	    // Ecommerce Customers
    public function ecom_customers()
    {
        $page_title = 'Ecom Customers';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('ecom.customers', compact('page_title', 'page_description','action'));
    }
	
	    // Ecommerce Invoice
    public function ecom_invoice()
    {
        $page_title = 'Invoice';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('ecom.invoice', compact('page_title', 'page_description','action'));
    }
	
	    // Ecommerce Product Detail
    public function ecom_product_detail($id)
    {
        $page_title = 'Product Detail';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        $events = DB::table('events')->where('id', $id)->first();

        return view('ecom.productdetail', compact('page_title', 'page_description','action', 'events'));
    }
	
	    // Ecommerce Product Grid
    public function ecom_product_grid()
    {
        $page_title = 'Product Grid';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('ecom.productgrid', compact('page_title', 'page_description','action'));
    }
	
	    // Ecommerce Product List
    public function ecom_product_list()
    {
        $page_title = 'Product List';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        $data = [
            'shopcar' => $this->shopcar->alldata(),
            

        ];

        $shopcars = DB::table('shopcars')->get();

        return view('ecom.productlist', compact('page_title', 'page_description','action'),$data)->with('shopcars', $shopcars);
    }

    public function editpromo(Request $request, $id)
    {
        // dd($request);
        // return $request->file('image')->store('shopcar-image');

        $editpromo = $request->validate([
            'nama' => 'required|max:255',
            'waktu' => 'required|max:255',
            'benefit' => 'required',
            'detail' => 'required',
            'image' => 'image|file|max:5000'
        ]);

        if($request->file('image'))
        {
            $editpromo['image'] = $request->file('image')->store('car-image');
            
        }

        shopcar::where('id', $request->id)->update($editpromo);

        return redirect('/table-datatable-basic')->with('editpromo', 'Edit Promo Telah berhasil dihapus');

    }

    
    public function ecom_product_sales()
    {
        $page_title = 'Product List';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        $data = [
            'shopcar' => $this->shopcar->alldata(),
            

        ];



        $shopcars = DB::table('shopcars')->get();

        return view('ecom.productlistsales', compact('page_title', 'page_description','action'),$data)->with('shopcars', $shopcars);
    }
	
	    // Ecommerce Product Order
    public function ecom_product_order()
    {
        $page_title = 'Product Order';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('ecom.productorder', compact('page_title', 'page_description','action'));
    }
	
	    // Email Compose
    public function email_compose()
    {
        $page_title = 'Compose';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('message.compose', compact('page_title', 'page_description','action'));
    }
	
	    // Email Inbox
    public function email_inbox()
    {
        $page_title = 'Inbox';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('message.inbox', compact('page_title', 'page_description','action'));
    }
	
	    // Email Read
    public function akun()
    {
        $page_title = 'Read';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('message.akun', compact('page_title', 'page_description','action'));
    }
	
	    // Form Editor Summernote
    public function form_editor_summernote()
    {
        $page_title = 'Summernote Editor';
        $page_description = 'Some description for the page';
		
        $action = __FUNCTION__;

        return view('form.editorsummernote', compact('page_title', 'page_description','action'));
	}
	
	    // Form Element
    public function form_element()
    {
        $page_title = 'Form Element';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('form.element', compact('page_title', 'page_description','action'));
    }
	
	    // Form Pickers
    public function form_pickers()
    {
        $page_title = 'Form Pickers';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('form.pickers', compact('page_title', 'page_description','action'));
    }
	
	    // Form Validation Jquery
    public function form_validation_jquery()
    {
        $page_title = 'Form Validation';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('form.validationjquery', compact('page_title', 'page_description','action'));
    }
	
	    // Form Wizard
    public function form_wizard()
    {
        $page_title = 'Form Wizard';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('form.wizard', compact('page_title', 'page_description','action'));
    }

    public function addcar(Request $request)
    {

        // return $request->file('image')->store('car-image');
        // ddd($request);
        $carnew = $request->validate([
            'nama' => 'required',
            'waktu' => 'required|max:255',
            'benefit' => 'required|max:255',
            'detail' => 'required',
            'image' => 'image|file|max:5000' 
            
            
        ]);

        if($request->file('image'))
        {
            $carnew['image'] = $request->file('image')->store('car-image');
            
        }
        

        shopcar::create($carnew);

        return redirect('/table-datatable-basic');
    }

	    // Map Jqvmap
    public function map_jqvmap()
    {
        $page_title = 'Map Jqvmap';
        $page_description = 'Some description for the page';
		
        $action = __FUNCTION__;

        return view('map.jqvmap', compact('page_title', 'page_description','action'));
    }
	
	    // Page Error 400
    public function page_error_400()
    {
        $page_title = 'Page Error 400';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('page.error400', compact('page_title', 'page_description','action'));
    }
	
	    // Page Error 403
    public function page_error_403()
    {
        $page_title = 'Page Error 403';
        $page_description = 'Some description for the page';
		
        $action = __FUNCTION__;

        return view('page.error403', compact('page_title', 'page_description','action'));
    }
	
	    // Page Error 404
    public function page_error_404()
    {
        $page_title = 'Page Error 404';
        $page_description = 'Some description for the page';
		
        $action = __FUNCTION__;

        return view('page.error404', compact('page_title', 'page_description','action'));
    }
	
	    // Page Error 500
    public function page_error_500()
    {
        $page_title = 'Page Error 500';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('page.error500', compact('page_title', 'page_description','action'));
    }
	
	    // Page Error 503
    public function page_error_503()
    {
        $page_title = 'Page Error 503';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('page.error503', compact('page_title', 'page_description','action'));
    }
	
	    // Page Forgot Password
    public function page_forgot_password()
    {
        $page_title = 'Page Forgot Password';
        $page_description = 'Some description for the page';
        
        $action = __FUNCTION__;

        return view('page.forgot_password', compact('page_title', 'page_description','action'));
    }
	
	    // Page Lock Screen
    public function page_lock_screen()
    {
        $page_title = 'Page Lock Screen';
        $page_description = 'Some description for the page';
		
        $action = __FUNCTION__;

        return view('page.lockscreen', compact('page_title', 'page_description','action'));
    }
	
	    // Page Login
    public function page_login()
    {
        $page_title = 'Page Login';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('auth.login', compact('page_title', 'page_description','action'));
    }

    public function logout()
    {
        Auth::logout();
     
        request()->session()->invalidate();
     
        request()->session()->regenerateToken();
     
        return redirect('/page-login');
    }


    public function authenticate(Request $request)
    {
        $login = $request->validate([
            'nama' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($login)){
            $request->session()->regenerate();
            return redirect()->intended('/index');
        }
        return back()->with('loginError', 'Login Failed');

    }
	
	    // Page Register
    public function page_register()
    {
        $page_title = 'Page Register';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('page.register', compact('page_title', 'page_description','action'));
    }

    public function store(Request $request)
    {
        // return $request->all();
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'hp' =>'required',
            'password' => 'required|min:3|max:255',
            // 'foto' => 'image|file',
            
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);

        // if($request->hasFile('foto')){
        //     $request->file('foto')->move('fotosales/', $request->file('foto')->getClientOriginalName());
        //     $foto = $request->file('foto')->getClientOriginalName();
            
        // }
        
        sales::create($validatedData);

        return redirect('/page-login');
       
    }
	    // Table Bootstrap Basic
    public function table_bootstrap_basic()
    {
        $page_title = 'Customers Data';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;

        $customers = customers::latest();


        return view('table.bootstrapbasic', compact('page_title', 'page_description','action'), 
        [
            'customers' =>  customers::where('salesman', auth()->user()->nama)->filter(request(['search']))->paginate(10),
            // 'customers' =>  customers::latest('salesman', auth()->user()->nama)->filter(request(['search']))->paginate(10);

        ]);
            
    }

    public function addcustomers(Request $request)
    {
        $addnew = $request->validate([
            'nama' => 'required|max:255',
            'gender' => 'required',
            'alamat' =>'required',
            'subdistrict' => 'required|max:255',
            'district' => 'required',
            'city' =>'required',
            'provinsi' => 'required|max:255',
            'hp' => 'required',
            'ktp' =>'required',
            'salesman' =>'required'
          
        ]);
        
        customers::create($addnew);

        return redirect('/table-bootstrap-basic');
    }
     // Table Bootstrap Basic
    public function table_history_basic()
    {
            $page_title = 'Table history';
            $page_description = 'Some description for the page';
            $action = __FUNCTION__;

            $customers = customers::latest();


            return view('table.historybasic', compact('page_title', 'page_description','action'), 
            [
                'customers' =>  customers::where('salesman', auth()->user()->nama)->filter(request(['search']))->paginate(10),
                // 'customers' =>  customers::latest('salesman', auth()->user()->nama)->filter(request(['search']))->paginate(10);
    
            ]);
            
    }

    public function event()
    {
            $page_title = 'Event';
            $page_description = 'Some description for the page';
            $action = __FUNCTION__;

            $event = [
                'events' => $this->events->alldata(),
                
    
            ];

            return view('table.event', compact('page_title', 'page_description','action'),$event);
    }

	
	    // Table Datatable Basic
    public function table_datatable_basic(Request $request)
    {
        $page_title = 'Dashboard';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        $data = [
            'noncustomers' => $this->noncustomers->alldata(),
            'events' => $this->events->alldata(),
            

        ];

        // $event = events::where('id', $id)->firts();

        $jumlah_customers = customers::all()->count();
        $jumlah_sales = sales::all()->count();

        return view('table.datatablebasic', compact('page_title', 'page_description','action'),$data)->with('jumlah_customers', $jumlah_customers)->with('jumlah_sales',$jumlah_sales);
    }

    public function editproses(Request $request, $id)
    {
        DB::table('events')->where('id', $id)->update([
            'title' => $request->title,
            'organizer' => $request->organizer,
            'start' => $request->start,
            'end' => $request->end,
            'tempat' => $request->tempat
            
        ]);
        return redirect('/table-datatable-basic')->with('events', 'Event Telah berhasil dihapus');

    }



    public function destroy($id)
    {
        
        DB::table('events')->where('id', $id)->delete();
        return redirect('/event')->with('event', 'Event Telah berhasil dihapus');

    }

    public function hapusevent($id)
    {
        
        DB::table('shopcars')->where('id', $id)->delete();
        return redirect('/table-datatable-basic')->with('event', 'Event Telah berhasil dihapus');

    }


    public function kalender(Request $request)
    {
        // return $request->file('image')->store('event-image');

        $addnew = $request->validate([
            'title' => 'required|max:255',
            'organizer' => 'required|max:255',
            'start' => 'required',
            'end' =>'required',
            'tempat' => 'required',
            'image' => 'image|file|max:5000'
        ]);

        if($request->file('image'))
        {
            $addnew['image'] = $request->file('image')->store('event-image');
            
        }
        
        events::create($addnew);

        return redirect('/event');
    }

    public function uc_nestable()
    {
        $page_title = 'Nestable';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('uc.nestable', compact('page_title', 'page_description','action'));
    }
	    // UC Lightgallery.
    public function uc_lightgallery()
    {
        $page_title = 'Lightgallery';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('uc.lightgallery', compact('page_title', 'page_description','action'));
    }
	
	    // UC NoUi Slider
    public function uc_noui_slider()
    {
        $page_title = 'Noui Slider';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('uc.nouislider', compact('page_title', 'page_description','action'));
    }
	
	    // UC Select2
    public function uc_select2()
    {
        $page_title = 'Select2';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('uc.select2', compact('page_title', 'page_description','action'));
    }
	
	    // UC Sweetalert
    public function uc_sweetalert()
    {
        $page_title = 'Sweetalert';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('uc.sweetalert', compact('page_title', 'page_description','action'));
    }
	
	    // UC Toastr
    public function uc_toastr()
    {
        $page_title = 'Toastr';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('uc.toastr', compact('page_title', 'page_description','action'));
    }
	
	    // Ui Accordion
    public function ui_accordion()
    {
        $page_title = 'Accordion';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('ui.accordion', compact('page_title', 'page_description','action'));
    }
	
	    // Ui Alert
    public function ui_alert()
    {
        $page_title = 'Alert';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('ui.alert', compact('page_title', 'page_description','action'));
    }
	
	    // Ui Badge
    public function ui_badge()
    {
        $page_title = 'Badge';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('ui.badge', compact('page_title', 'page_description','action'));
    }
	
	    // Ui Button
    public function ui_button()
    {
        $page_title = 'Button';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('ui.button', compact('page_title', 'page_description','action'));
    }
	
	    // Ui Button Group
    public function ui_button_group()
    {
        $page_title = 'Button Group';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('ui.buttongroup', compact('page_title', 'page_description','action'));
    }
	
	    // Ui Card
    public function ui_card()
    {
        $page_title = 'Card';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('ui.card', compact('page_title', 'page_description','action'));
    }
	
	    // Ui Carousel
    public function ui_carousel()
    {
        $page_title = 'Carousel';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('ui.carousel', compact('page_title', 'page_description','action'));
    }
	
	    // Ui Dropdown
    public function ui_dropdown()
    {
        $page_title = 'Dropdown';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('ui.dropdown', compact('page_title', 'page_description','action'));
    }
	
	    // Ui Grid
    public function ui_grid()
    {
        $page_title = 'Grid';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('ui.grid', compact('page_title', 'page_description','action'));
    }
	
	    // Ui List Group
    public function ui_list_group()
    {
        $page_title = 'List Group';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('ui.listgroup', compact('page_title', 'page_description','action'));
    }
	
	    // Ui Media Object
    public function ui_media_object()
    {
        $page_title = 'Media Object';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('ui.mediaobject', compact('page_title', 'page_description','action'));
    }
	
	    // Ui Modal
    public function ui_modal()
    {
        $page_title = 'Modal';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('ui.modal', compact('page_title', 'page_description','action'));
    }
	
	    // Ui Pagination
    public function ui_pagination()
    {
        $page_title = 'Pagination';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('ui.pagination', compact('page_title', 'page_description','action'));
    }
	
	    // Ui Popover
    public function ui_popover()
    {
        $page_title = 'Popover';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('ui.popover', compact('page_title', 'page_description','action'));
    }
	
	    // Ui Progressbar
    public function ui_progressbar()
    {
        $page_title = 'Progressbar';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('ui.progressbar', compact('page_title', 'page_description','action'));
    }
	
	    // Ui Tab
    public function ui_tab()
    {
        $page_title = 'Tab';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('ui.tab', compact('page_title', 'page_description','action'));
    }
	

	    // Ui Typography
    public function ui_typography()
    {
        $page_title = 'Typography';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('ui.typography', compact('page_title', 'page_description','action'));
    }
	
	    // Widget Basic
    public function widget_basic()
    {
        $page_title = 'Widget';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('widget.widget_basic', compact('page_title', 'page_description','action'));
    }

    //calender
    // public function ajax(Request $request)
    // {
 
    //     switch ($request->type) {
    //        case 'add':
    //           $event = events::create([
    //               'title' => $request->title,
    //               'start' => $request->start,
    //               'end' => $request->end,
    //           ]);
 
    //           return response()->json($event);
    //          break;
  
    //        case 'update':
    //           $event = events::find($request->id)->update([
    //               'title' => $request->title,
    //               'start' => $request->start,
    //               'end' => $request->end,
    //           ]);
 
    //           return response()->json($event);
    //          break;
  
    //        case 'delete':
    //           $event = events::find($request->id)->delete();
  
    //           return response()->json($event);
    //          break;
             
    //        default:
    //          # code...
    //          break;
    //     }
    // }



}
