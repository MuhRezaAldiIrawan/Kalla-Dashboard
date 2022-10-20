{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')
<div class="container-fluid">
    <div class="form-head d-flex align-items-center mb-sm-4 mb-3">
      <div class="mr-auto">
        <h2 class="text-black font-w600">Dashboard</h2>
        <p class="mb-0">Hospital Admin Dashboard Template</p>
      </div>
      <a href="javascript:void(0)" class="btn btn-outline-primary"><i class="las la-cog scale5 mr-3"></i>Customize Layout</a>
    </div>
    <div class="row">
      <div class="col-xl-3 col-sm-6">
        <div class="card">
          <div class="card-body">
            <div class="media align-items-center">
              <div class="media-body mr-3">
                <h2 class="fs-34 text-black font-w600">76</h2>
                <span>Appointment</span>
              </div>
              <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0)">
                <path d="M32.04 4.08H31.24V2.04C31.24 0.8 30.4 0 29.2 0C28 0 27.16 0.8 27.16 2.04V4.08H13.88V2.04C13.88 0.8 13.08 0 11.84 0C10.6 0 9.80002 0.8 9.80002 2.04V4.08H7.96002C4.08002 4.08 0.800018 7.36 0.800018 11.24V32.88C0.800018 36.76 4.08002 40.04 7.96002 40.04H32.04C35.92 40.04 39.2 36.76 39.2 32.88V11.24C39.2 7.36 35.92 4.08 32.04 4.08ZM7.96002 8.16H32.04C33.68 8.16 35.12 9.6 35.12 11.24V14.08H4.88002V11.24C4.88002 9.6 6.32002 8.16 7.96002 8.16ZM32.04 35.92H7.96002C6.32002 35.92 4.88002 34.48 4.88002 32.84V18.16H35.08V32.84C35.12 34.48 33.68 35.92 32.04 35.92Z" fill="#007A64"/>
                <path d="M16.12 20.6H14.48C13.44 20.6 12.84 21.4 12.84 22.24V24.08C12.84 25.12 13.64 25.72 14.48 25.72H16.12C17.16 25.72 17.76 24.92 17.76 24.08V22.44C17.96 21.44 17.16 20.6 16.12 20.6Z" fill="#007A64"/>
                <path d="M25.52 20.6H23.88C22.84 20.6 22.24 21.4 22.24 22.24V24.08C22.24 25.12 23.04 25.72 23.88 25.72H25.52C26.56 25.72 27.16 24.92 27.16 24.08V22.44C27.16 21.44 26.32 20.6 25.52 20.6Z" fill="#007A64"/>
                <path d="M16.12 28.56H14.48C13.44 28.56 12.84 29.36 12.84 30.2V31.84C12.84 32.88 13.64 33.48 14.48 33.48H16.12C17.16 33.48 17.76 32.68 17.76 31.84V30.2C17.96 29.4 17.16 28.56 16.12 28.56Z" fill="#007A64"/>
                </g>
                <defs>
                <clipPath id="clip0">
                <rect width="40" height="40" fill="white"/>
                </clipPath>
                </defs>
              </svg>
            </div>
          </div>
          <div class="progress  rounded-0" style="height:4px;">
            <div class="progress-bar rounded-0 bg-secondary progress-animated" style="width: 50%; height:4px;" role="progressbar">
              <span class="sr-only">50% Complete</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3  col-sm-6">
        <div class="card">
          <div class="card-body">
            <div class="media align-items-center">
              <div class="media-body mr-3">
                <h2 class="fs-34 text-black font-w600">124,551</h2>
                <span>Total Patient</span>
              </div>
              <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M28.0053 2.00495C25.0652 1.92104 22.2028 2.90688 20.0059 4.76001C17.8089 2.90688 14.9465 1.92104 12.0064 2.00495C10.2879 1.99938 8.58941 2.3549 7.03328 3.04589C5.47716 3.73689 4.10208 4.74618 3.00704 6.00112C1.10117 8.19152 -0.89469 12.1574 0.427219 18.6225C2.53907 28.9417 18.358 37.4115 19.0259 37.7601C19.3237 37.9174 19.659 38 19.9999 38C20.3408 38 20.676 37.9174 20.9738 37.7601C21.6478 37.4058 37.4667 28.936 39.5725 18.6225C40.8944 12.1574 38.9006 8.201 36.9947 6.00112C35.9009 4.74722 34.5275 3.73852 32.9732 3.04756C31.4188 2.35659 29.7222 2.00052 28.0053 2.00495ZM35.6608 17.9006C34.1709 25.1899 23.3456 31.9715 20.0099 33.908C16.6741 31.9715 5.84885 25.1918 4.35895 17.9006C3.33302 12.8869 4.73692 9.97454 6.09683 8.41322C6.81663 7.59033 7.71988 6.92874 8.74167 6.47597C9.76346 6.0232 10.8784 5.79049 12.0064 5.79458C13.2101 5.70905 14.4167 5.9205 15.5084 6.40832C16.6002 6.89614 17.5399 7.64369 18.236 8.57806C18.4065 8.87653 18.6585 9.12614 18.9656 9.3008C19.2727 9.47546 19.6237 9.56876 19.9819 9.57095H20.0059C20.3619 9.56861 20.7109 9.47734 21.0178 9.30634C21.3247 9.13534 21.5786 8.89067 21.7537 8.59701C22.4489 7.65541 23.391 6.90174 24.4873 6.4103C25.5836 5.91887 26.7961 5.70665 28.0053 5.79458C29.1347 5.78937 30.2512 6.02153 31.2744 6.47434C32.2977 6.92716 33.2022 7.58934 33.9229 8.41322C35.2788 9.97454 36.6827 12.8869 35.6568 17.9006H35.6608Z" fill="#007A64"/>
              </svg>
            </div>
          </div>
          <div class="progress  rounded-0" style="height:4px;">
            <div class="progress-bar rounded-0 bg-secondary progress-animated" style="width: 90%; height:4px;" role="progressbar">
              <span class="sr-only">90% Complete</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3  col-sm-6">
        <div class="card">
          <div class="card-body">
            <div class="media align-items-center">
              <div class="media-body mr-3">
                <h2 class="fs-34 text-black font-w600">442</h2>
                <span>Total Doctor</span>
              </div>
              <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M38.3334 16.6667C38.3384 15.7489 38.0907 14.8474 37.6174 14.061C37.1441 13.2746 36.4635 12.6337 35.6501 12.2084C34.8368 11.7832 33.9221 11.59 33.0062 11.6501C32.0904 11.7101 31.2087 12.0211 30.4579 12.5489C29.707 13.0768 29.116 13.8011 28.7494 14.6426C28.3829 15.484 28.2551 16.4101 28.3799 17.3194C28.5047 18.2287 28.8774 19.0861 29.4572 19.7976C30.0369 20.5092 30.8014 21.0474 31.6667 21.3534V26.6667C31.6667 28.8768 30.7887 30.9964 29.2259 32.5592C27.6631 34.122 25.5435 35 23.3334 35C21.1232 35 19.0036 34.122 17.4408 32.5592C15.878 30.9964 15 28.8768 15 26.6667V24.8667C17.7735 24.4643 20.3097 23.0778 22.1456 20.9604C23.9815 18.8429 24.9947 16.1359 25 13.3334V3.33335C25 2.89133 24.8244 2.4674 24.5119 2.15484C24.1993 1.84228 23.7754 1.66669 23.3334 1.66669H18.3334C17.8913 1.66669 17.4674 1.84228 17.1548 2.15484C16.8423 2.4674 16.6667 2.89133 16.6667 3.33335C16.6667 3.77538 16.8423 4.1993 17.1548 4.51186C17.4674 4.82443 17.8913 5.00002 18.3334 5.00002H21.6667V13.3334C21.6667 15.5435 20.7887 17.6631 19.2259 19.2259C17.6631 20.7887 15.5435 21.6667 13.3334 21.6667C11.1232 21.6667 9.0036 20.7887 7.4408 19.2259C5.87799 17.6631 5.00002 15.5435 5.00002 13.3334V5.00002H8.33335C8.77538 5.00002 9.1993 4.82443 9.51186 4.51186C9.82442 4.1993 10 3.77538 10 3.33335C10 2.89133 9.82442 2.4674 9.51186 2.15484C9.1993 1.84228 8.77538 1.66669 8.33335 1.66669H3.33335C2.89133 1.66669 2.4674 1.84228 2.15484 2.15484C1.84228 2.4674 1.66669 2.89133 1.66669 3.33335V13.3334C1.67205 16.1359 2.68517 18.8429 4.52109 20.9604C6.357 23.0778 8.89322 24.4643 11.6667 24.8667V26.6667C11.6667 29.7609 12.8959 32.7283 15.0838 34.9163C17.2717 37.1042 20.2392 38.3334 23.3334 38.3334C26.4275 38.3334 29.395 37.1042 31.5829 34.9163C33.7709 32.7283 35 29.7609 35 26.6667V21.3534C35.9723 21.0132 36.8152 20.3797 37.4122 19.5403C38.0093 18.7008 38.3311 17.6968 38.3334 16.6667Z" fill="#007A64"/>
              </svg>
            </div>
          </div>
          <div class="progress  rounded-0" style="height:4px;">
            <div class="progress-bar rounded-0 bg-secondary progress-animated" style="width: 30%; height:4px;" role="progressbar">
              <span class="sr-only">30% Complete</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3  col-sm-6">
        <div class="card">
          <div class="card-body">
            <div class="media align-items-center">
              <div class="media-body mr-3">
                <h2 class="fs-34 text-black font-w600">$5,034</h2>
                <span>Hospital Earning</span>
              </div>
              <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.7 39.9993C15.8603 40.0123 18.0017 39.5921 20 38.763C21.9962 39.5991 24.139 40.0196 26.3 39.9993C32.861 39.9993 38 36.463 38 31.9467V24.4159C38 19.8996 32.861 16.3633 26.3 16.3633C25.9958 16.3633 25.697 16.3779 25.4 16.3943V7.87804C25.4 3.45448 20.261 0 13.7 0C7.139 0 2 3.45448 2 7.87804V32.1213C2 36.5448 7.139 39.9993 13.7 39.9993ZM34.4 31.9467C34.4 34.0358 31.0736 36.363 26.3 36.363C21.5264 36.363 18.2 34.0358 18.2 31.9467V30.2649C20.6376 31.7624 23.4476 32.5262 26.3 32.4667C29.1524 32.5262 31.9624 31.7624 34.4 30.2649V31.9467ZM26.3 19.9996C31.0736 19.9996 34.4 22.3269 34.4 24.4159C34.4 26.505 31.0736 28.8304 26.3 28.8304C21.5264 28.8304 18.2 26.5032 18.2 24.4159C18.2 22.3287 21.5264 19.9996 26.3 19.9996ZM13.7 3.6363C18.4736 3.6363 21.8 5.87262 21.8 7.87804C21.8 9.88346 18.4736 12.1216 13.7 12.1216C8.9264 12.1216 5.6 9.88528 5.6 7.87804C5.6 5.87081 8.9264 3.6363 13.7 3.6363ZM5.6 13.6034C8.04776 15.0717 10.8538 15.8181 13.7 15.7579C16.5462 15.8181 19.3522 15.0717 21.8 13.6034V16.9633C19.8383 17.4628 18.0392 18.4698 16.58 19.8851C15.6336 20.092 14.6683 20.198 13.7 20.2015C8.9264 20.2015 5.6 17.9651 5.6 15.9597V13.6034ZM5.6 21.6851C8.04828 23.1519 10.854 23.8976 13.7 23.8378C14.0204 23.8378 14.33 23.7978 14.645 23.7814C14.6182 23.9919 14.6032 24.2037 14.6 24.4159V28.2068C14.2976 28.225 14.006 28.2831 13.7 28.2831C8.9264 28.2831 5.6 26.0468 5.6 24.0396V21.6851ZM5.6 29.7649C8.04776 31.2332 10.8538 31.9796 13.7 31.9194C14.0024 31.9194 14.2994 31.8958 14.6 31.8813V31.9467C14.6258 33.4944 15.2146 34.9784 16.2542 36.1157C15.412 36.2763 14.5571 36.3591 13.7 36.363C8.9264 36.363 5.6 34.1267 5.6 32.1213V29.7649Z" fill="#007A64"/>
              </svg>
            </div>
          </div>
          <div class="progress  rounded-0" style="height:4px;">
            <div class="progress-bar rounded-0 bg-secondary progress-animated" style="width: 94%; height:4px;" role="progressbar">
              <span class="sr-only">94% Complete</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

			<div class="container-fluid">
                <div class="page-titles">
					<h4>Customers</h4>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Customers</a></li>
					</ol>
                </div>
                <!-- row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Basic Datatable</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display min-w850">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                            </tr>
                                            <tr>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td>2011/07/25</td>
                                                <td>$170,750</td>
                                            </tr>
                                            <tr>
                                                <td>Ashton Cox</td>
                                                <td>Junior Technical Author</td>
                                                <td>San Francisco</td>
                                                <td>66</td>
                                                <td>2009/01/12</td>
                                                <td>$86,000</td>
                                            </tr>
                                            <tr>
                                                <td>Cedric Kelly</td>
                                                <td>Senior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2012/03/29</td>
                                                <td>$433,060</td>
                                            </tr>
                                            <tr>
                                                <td>Airi Satou</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>33</td>
                                                <td>2008/11/28</td>
                                                <td>$162,700</td>
                                            </tr>
                                            <tr>
                                                <td>Brielle Williamson</td>
                                                <td>Integration Specialist</td>
                                                <td>New York</td>
                                                <td>61</td>
                                                <td>2012/12/02</td>
                                                <td>$372,000</td>
                                            </tr>
                                            <tr>
                                                <td>Herrod Chandler</td>
                                                <td>Sales Assistant</td>
                                                <td>San Francisco</td>
                                                <td>59</td>
                                                <td>2012/08/06</td>
                                                <td>$137,500</td>
                                            </tr>
                                            <tr>
                                                <td>Rhona Davidson</td>
                                                <td>Integration Specialist</td>
                                                <td>Tokyo</td>
                                                <td>55</td>
                                                <td>2010/10/14</td>
                                                <td>$327,900</td>
                                            </tr>
                                            <tr>
                                                <td>Colleen Hurst</td>
                                                <td>Javascript Developer</td>
                                                <td>San Francisco</td>
                                                <td>39</td>
                                                <td>2009/09/15</td>
                                                <td>$205,500</td>
                                            </tr>
                                            <tr>
                                                <td>Sonya Frost</td>
                                                <td>Software Engineer</td>
                                                <td>Edinburgh</td>
                                                <td>23</td>
                                                <td>2008/12/13</td>
                                                <td>$103,600</td>
                                            </tr>
                                            <tr>
                                                <td>Jena Gaines</td>
                                                <td>Office Manager</td>
                                                <td>London</td>
                                                <td>30</td>
                                                <td>2008/12/19</td>
                                                <td>$90,560</td>
                                            </tr>
                                            <tr>
                                                <td>Quinn Flynn</td>
                                                <td>Support Lead</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2013/03/03</td>
                                                <td>$342,000</td>
                                            </tr>
                                            <tr>
                                                <td>Charde Marshall</td>
                                                <td>Regional Director</td>
                                                <td>San Francisco</td>
                                                <td>36</td>
                                                <td>2008/10/16</td>
                                                <td>$470,600</td>
                                            </tr>
                                            <tr>
                                                <td>Haley Kennedy</td>
                                                <td>Senior Marketing Designer</td>
                                                <td>London</td>
                                                <td>43</td>
                                                <td>2012/12/18</td>
                                                <td>$313,500</td>
                                            </tr>
                                            <tr>
                                                <td>Tatyana Fitzpatrick</td>
                                                <td>Regional Director</td>
                                                <td>London</td>
                                                <td>19</td>
                                                <td>2010/03/17</td>
                                                <td>$385,750</td>
                                            </tr>
                                            <tr>
                                                <td>Michael Silva</td>
                                                <td>Marketing Designer</td>
                                                <td>London</td>
                                                <td>66</td>
                                                <td>2012/11/27</td>
                                                <td>$198,500</td>
                                            </tr>
                                            <tr>
                                                <td>Paul Byrd</td>
                                                <td>Chief Financial Officer (CFO)</td>
                                                <td>New York</td>
                                                <td>64</td>
                                                <td>2010/06/09</td>
                                                <td>$725,000</td>
                                            </tr>
                                            <tr>
                                                <td>Gloria Little</td>
                                                <td>Systems Administrator</td>
                                                <td>New York</td>
                                                <td>59</td>
                                                <td>2009/04/10</td>
                                                <td>$237,500</td>
                                            </tr>
                                            <tr>
                                                <td>Bradley Greer</td>
                                                <td>Software Engineer</td>
                                                <td>London</td>
                                                <td>41</td>
                                                <td>2012/10/13</td>
                                                <td>$132,000</td>
                                            </tr>
                                            <tr>
                                                <td>Dai Rios</td>
                                                <td>Personnel Lead</td>
                                                <td>Edinburgh</td>
                                                <td>35</td>
                                                <td>2012/09/26</td>
                                                <td>$217,500</td>
                                            </tr>
                                            <tr>
                                                <td>Jenette Caldwell</td>
                                                <td>Development Lead</td>
                                                <td>New York</td>
                                                <td>30</td>
                                                <td>2011/09/03</td>
                                                <td>$345,000</td>
                                            </tr>
                                            <tr>
                                                <td>Yuri Berry</td>
                                                <td>Chief Marketing Officer (CMO)</td>
                                                <td>New York</td>
                                                <td>40</td>
                                                <td>2009/06/25</td>
                                                <td>$675,000</td>
                                            </tr>
                                            <tr>
                                                <td>Caesar Vance</td>
                                                <td>Pre-Sales Support</td>
                                                <td>New York</td>
                                                <td>21</td>
                                                <td>2011/12/12</td>
                                                <td>$106,450</td>
                                            </tr>
                                            <tr>
                                                <td>Doris Wilder</td>
                                                <td>Sales Assistant</td>
                                                <td>Sidney</td>
                                                <td>23</td>
                                                <td>2010/09/20</td>
                                                <td>$85,600</td>
                                            </tr>
                                            <tr>
                                                <td>Angelica Ramos</td>
                                                <td>Chief Executive Officer (CEO)</td>
                                                <td>London</td>
                                                <td>47</td>
                                                <td>2009/10/09</td>
                                                <td>$1,200,000</td>
                                            </tr>
                                            <tr>
                                                <td>Gavin Joyce</td>
                                                <td>Developer</td>
                                                <td>Edinburgh</td>
                                                <td>42</td>
                                                <td>2010/12/22</td>
                                                <td>$92,575</td>
                                            </tr>
                                            <tr>
                                                <td>Jennifer Chang</td>
                                                <td>Regional Director</td>
                                                <td>Singapore</td>
                                                <td>28</td>
                                                <td>2010/11/14</td>
                                                <td>$357,650</td>
                                            </tr>
                                            <tr>
                                                <td>Brenden Wagner</td>
                                                <td>Software Engineer</td>
                                                <td>San Francisco</td>
                                                <td>28</td>
                                                <td>2011/06/07</td>
                                                <td>$206,850</td>
                                            </tr>
                                            <tr>
                                                <td>Fiona Green</td>
                                                <td>Chief Operating Officer (COO)</td>
                                                <td>San Francisco</td>
                                                <td>48</td>
                                                <td>2010/03/11</td>
                                                <td>$850,000</td>
                                            </tr>
                                            <tr>
                                                <td>Shou Itou</td>
                                                <td>Regional Marketing</td>
                                                <td>Tokyo</td>
                                                <td>20</td>
                                                <td>2011/08/14</td>
                                                <td>$163,000</td>
                                            </tr>
                                            <tr>
                                                <td>Michelle House</td>
                                                <td>Integration Specialist</td>
                                                <td>Sidney</td>
                                                <td>37</td>
                                                <td>2011/06/02</td>
                                                <td>$95,400</td>
                                            </tr>
                                            <tr>
                                                <td>Suki Burks</td>
                                                <td>Developer</td>
                                                <td>London</td>
                                                <td>53</td>
                                                <td>2009/10/22</td>
                                                <td>$114,500</td>
                                            </tr>
                                            <tr>
                                                <td>Prescott Bartlett</td>
                                                <td>Technical Author</td>
                                                <td>London</td>
                                                <td>27</td>
                                                <td>2011/05/07</td>
                                                <td>$145,000</td>
                                            </tr>
                                            <tr>
                                                <td>Gavin Cortez</td>
                                                <td>Team Leader</td>
                                                <td>San Francisco</td>
                                                <td>22</td>
                                                <td>2008/10/26</td>
                                                <td>$235,500</td>
                                            </tr>
                                            <tr>
                                                <td>Martena Mccray</td>
                                                <td>Post-Sales support</td>
                                                <td>Edinburgh</td>
                                                <td>46</td>
                                                <td>2011/03/09</td>
                                                <td>$324,050</td>
                                            </tr>
                                            <tr>
                                                <td>Unity Butler</td>
                                                <td>Marketing Designer</td>
                                                <td>San Francisco</td>
                                                <td>47</td>
                                                <td>2009/12/09</td>
                                                <td>$85,675</td>
                                            </tr>
                                            <tr>
                                                <td>Howard Hatfield</td>
                                                <td>Office Manager</td>
                                                <td>San Francisco</td>
                                                <td>51</td>
                                                <td>2008/12/16</td>
                                                <td>$164,500</td>
                                            </tr>
                                            <tr>
                                                <td>Hope Fuentes</td>
                                                <td>Secretary</td>
                                                <td>San Francisco</td>
                                                <td>41</td>
                                                <td>2010/02/12</td>
                                                <td>$109,850</td>
                                            </tr>
                                            <tr>
                                                <td>Vivian Harrell</td>
                                                <td>Financial Controller</td>
                                                <td>San Francisco</td>
                                                <td>62</td>
                                                <td>2009/02/14</td>
                                                <td>$452,500</td>
                                            </tr>
                                            <tr>
                                                <td>Timothy Mooney</td>
                                                <td>Office Manager</td>
                                                <td>London</td>
                                                <td>37</td>
                                                <td>2008/12/11</td>
                                                <td>$136,200</td>
                                            </tr>
                                            <tr>
                                                <td>Jackson Bradshaw</td>
                                                <td>Director</td>
                                                <td>New York</td>
                                                <td>65</td>
                                                <td>2008/09/26</td>
                                                <td>$645,750</td>
                                            </tr>
                                            <tr>
                                                <td>Olivia Liang</td>
                                                <td>Support Engineer</td>
                                                <td>Singapore</td>
                                                <td>64</td>
                                                <td>2011/02/03</td>
                                                <td>$234,500</td>
                                            </tr>
                                            <tr>
                                                <td>Bruno Nash</td>
                                                <td>Software Engineer</td>
                                                <td>London</td>
                                                <td>38</td>
                                                <td>2011/05/03</td>
                                                <td>$163,500</td>
                                            </tr>
                                            <tr>
                                                <td>Sakura Yamamoto</td>
                                                <td>Support Engineer</td>
                                                <td>Tokyo</td>
                                                <td>37</td>
                                                <td>2009/08/19</td>
                                                <td>$139,575</td>
                                            </tr>
                                            <tr>
                                                <td>Thor Walton</td>
                                                <td>Developer</td>
                                                <td>New York</td>
                                                <td>61</td>
                                                <td>2013/08/11</td>
                                                <td>$98,540</td>
                                            </tr>
                                            <tr>
                                                <td>Finn Camacho</td>
                                                <td>Support Engineer</td>
                                                <td>San Francisco</td>
                                                <td>47</td>
                                                <td>2009/07/07</td>
                                                <td>$87,500</td>
                                            </tr>
                                            <tr>
                                                <td>Serge Baldwin</td>
                                                <td>Data Coordinator</td>
                                                <td>Singapore</td>
                                                <td>64</td>
                                                <td>2012/04/09</td>
                                                <td>$138,575</td>
                                            </tr>
                                            <tr>
                                                <td>Zenaida Frank</td>
                                                <td>Software Engineer</td>
                                                <td>New York</td>
                                                <td>63</td>
                                                <td>2010/01/04</td>
                                                <td>$125,250</td>
                                            </tr>
                                            <tr>
                                                <td>Zorita Serrano</td>
                                                <td>Software Engineer</td>
                                                <td>San Francisco</td>
                                                <td>56</td>
                                                <td>2012/06/01</td>
                                                <td>$115,000</td>
                                            </tr>
                                            <tr>
                                                <td>Jennifer Acosta</td>
                                                <td>Junior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>43</td>
                                                <td>2013/02/01</td>
                                                <td>$75,650</td>
                                            </tr>
                                            <tr>
                                                <td>Cara Stevens</td>
                                                <td>Sales Assistant</td>
                                                <td>New York</td>
                                                <td>46</td>
                                                <td>2011/12/06</td>
                                                <td>$145,600</td>
                                            </tr>
                                            <tr>
                                                <td>Hermione Butler</td>
                                                <td>Regional Director</td>
                                                <td>London</td>
                                                <td>47</td>
                                                <td>2011/03/21</td>
                                                <td>$356,250</td>
                                            </tr>
                                            <tr>
                                                <td>Lael Greer</td>
                                                <td>Systems Administrator</td>
                                                <td>London</td>
                                                <td>21</td>
                                                <td>2009/02/27</td>
                                                <td>$103,500</td>
                                            </tr>
                                            <tr>
                                                <td>Jonas Alexander</td>
                                                <td>Developer</td>
                                                <td>San Francisco</td>
                                                <td>30</td>
                                                <td>2010/07/14</td>
                                                <td>$86,500</td>
                                            </tr>
                                            <tr>
                                                <td>Shad Decker</td>
                                                <td>Regional Director</td>
                                                <td>Edinburgh</td>
                                                <td>51</td>
                                                <td>2008/11/13</td>
                                                <td>$183,000</td>
                                            </tr>
                                            <tr>
                                                <td>Michael Bruce</td>
                                                <td>Javascript Developer</td>
                                                <td>Singapore</td>
                                                <td>29</td>
                                                <td>2011/06/27</td>
                                                <td>$183,000</td>
                                            </tr>
                                            <tr>
                                                <td>Donna Snider</td>
                                                <td>Customer Support</td>
                                                <td>New York</td>
                                                <td>27</td>
                                                <td>2011/01/25</td>
                                                <td>$112,000</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Datatable</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example2" class="display">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                            </tr>
                                            <tr>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td>2011/07/25</td>
                                                <td>$170,750</td>
                                            </tr>
                                            <tr>
                                                <td>Ashton Cox</td>
                                                <td>Junior Technical Author</td>
                                                <td>San Francisco</td>
                                                <td>66</td>
                                                <td>2009/01/12</td>
                                                <td>$86,000</td>
                                            </tr>
                                            <tr>
                                                <td>Cedric Kelly</td>
                                                <td>Senior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2012/03/29</td>
                                                <td>$433,060</td>
                                            </tr>
                                            <tr>
                                                <td>Airi Satou</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>33</td>
                                                <td>2008/11/28</td>
                                                <td>$162,700</td>
                                            </tr>
                                            <tr>
                                                <td>Brielle Williamson</td>
                                                <td>Integration Specialist</td>
                                                <td>New York</td>
                                                <td>61</td>
                                                <td>2012/12/02</td>
                                                <td>$372,000</td>
                                            </tr>
                                            <tr>
                                                <td>Herrod Chandler</td>
                                                <td>Sales Assistant</td>
                                                <td>San Francisco</td>
                                                <td>59</td>
                                                <td>2012/08/06</td>
                                                <td>$137,500</td>
                                            </tr>
                                            <tr>
                                                <td>Rhona Davidson</td>
                                                <td>Integration Specialist</td>
                                                <td>Tokyo</td>
                                                <td>55</td>
                                                <td>2010/10/14</td>
                                                <td>$327,900</td>
                                            </tr>
                                            <tr>
                                                <td>Colleen Hurst</td>
                                                <td>Javascript Developer</td>
                                                <td>San Francisco</td>
                                                <td>39</td>
                                                <td>2009/09/15</td>
                                                <td>$205,500</td>
                                            </tr>
                                            <tr>
                                                <td>Sonya Frost</td>
                                                <td>Software Engineer</td>
                                                <td>Edinburgh</td>
                                                <td>23</td>
                                                <td>2008/12/13</td>
                                                <td>$103,600</td>
                                            </tr>
                                            <tr>
                                                <td>Jena Gaines</td>
                                                <td>Office Manager</td>
                                                <td>London</td>
                                                <td>30</td>
                                                <td>2008/12/19</td>
                                                <td>$90,560</td>
                                            </tr>
                                            <tr>
                                                <td>Quinn Flynn</td>
                                                <td>Support Lead</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2013/03/03</td>
                                                <td>$342,000</td>
                                            </tr>
                                            <tr>
                                                <td>Charde Marshall</td>
                                                <td>Regional Director</td>
                                                <td>San Francisco</td>
                                                <td>36</td>
                                                <td>2008/10/16</td>
                                                <td>$470,600</td>
                                            </tr>
                                            <tr>
                                                <td>Haley Kennedy</td>
                                                <td>Senior Marketing Designer</td>
                                                <td>London</td>
                                                <td>43</td>
                                                <td>2012/12/18</td>
                                                <td>$313,500</td>
                                            </tr>
                                            <tr>
                                                <td>Tatyana Fitzpatrick</td>
                                                <td>Regional Director</td>
                                                <td>London</td>
                                                <td>19</td>
                                                <td>2010/03/17</td>
                                                <td>$385,750</td>
                                            </tr>
                                            <tr>
                                                <td>Michael Silva</td>
                                                <td>Marketing Designer</td>
                                                <td>London</td>
                                                <td>66</td>
                                                <td>2012/11/27</td>
                                                <td>$198,500</td>
                                            </tr>
                                            <tr>
                                                <td>Paul Byrd</td>
                                                <td>Chief Financial Officer (CFO)</td>
                                                <td>New York</td>
                                                <td>64</td>
                                                <td>2010/06/09</td>
                                                <td>$725,000</td>
                                            </tr>
                                            <tr>
                                                <td>Gloria Little</td>
                                                <td>Systems Administrator</td>
                                                <td>New York</td>
                                                <td>59</td>
                                                <td>2009/04/10</td>
                                                <td>$237,500</td>
                                            </tr>
                                            <tr>
                                                <td>Bradley Greer</td>
                                                <td>Software Engineer</td>
                                                <td>London</td>
                                                <td>41</td>
                                                <td>2012/10/13</td>
                                                <td>$132,000</td>
                                            </tr>
                                            <tr>
                                                <td>Dai Rios</td>
                                                <td>Personnel Lead</td>
                                                <td>Edinburgh</td>
                                                <td>35</td>
                                                <td>2012/09/26</td>
                                                <td>$217,500</td>
                                            </tr>
                                            <tr>
                                                <td>Jenette Caldwell</td>
                                                <td>Development Lead</td>
                                                <td>New York</td>
                                                <td>30</td>
                                                <td>2011/09/03</td>
                                                <td>$345,000</td>
                                            </tr>
                                            <tr>
                                                <td>Yuri Berry</td>
                                                <td>Chief Marketing Officer (CMO)</td>
                                                <td>New York</td>
                                                <td>40</td>
                                                <td>2009/06/25</td>
                                                <td>$675,000</td>
                                            </tr>
                                            <tr>
                                                <td>Caesar Vance</td>
                                                <td>Pre-Sales Support</td>
                                                <td>New York</td>
                                                <td>21</td>
                                                <td>2011/12/12</td>
                                                <td>$106,450</td>
                                            </tr>
                                            <tr>
                                                <td>Doris Wilder</td>
                                                <td>Sales Assistant</td>
                                                <td>Sidney</td>
                                                <td>23</td>
                                                <td>2010/09/20</td>
                                                <td>$85,600</td>
                                            </tr>
                                            <tr>
                                                <td>Angelica Ramos</td>
                                                <td>Chief Executive Officer (CEO)</td>
                                                <td>London</td>
                                                <td>47</td>
                                                <td>2009/10/09</td>
                                                <td>$1,200,000</td>
                                            </tr>
                                            <tr>
                                                <td>Gavin Joyce</td>
                                                <td>Developer</td>
                                                <td>Edinburgh</td>
                                                <td>42</td>
                                                <td>2010/12/22</td>
                                                <td>$92,575</td>
                                            </tr>
                                            <tr>
                                                <td>Jennifer Chang</td>
                                                <td>Regional Director</td>
                                                <td>Singapore</td>
                                                <td>28</td>
                                                <td>2010/11/14</td>
                                                <td>$357,650</td>
                                            </tr>
                                            <tr>
                                                <td>Brenden Wagner</td>
                                                <td>Software Engineer</td>
                                                <td>San Francisco</td>
                                                <td>28</td>
                                                <td>2011/06/07</td>
                                                <td>$206,850</td>
                                            </tr>
                                            <tr>
                                                <td>Fiona Green</td>
                                                <td>Chief Operating Officer (COO)</td>
                                                <td>San Francisco</td>
                                                <td>48</td>
                                                <td>2010/03/11</td>
                                                <td>$850,000</td>
                                            </tr>
                                            <tr>
                                                <td>Shou Itou</td>
                                                <td>Regional Marketing</td>
                                                <td>Tokyo</td>
                                                <td>20</td>
                                                <td>2011/08/14</td>
                                                <td>$163,000</td>
                                            </tr>
                                            <tr>
                                                <td>Michelle House</td>
                                                <td>Integration Specialist</td>
                                                <td>Sidney</td>
                                                <td>37</td>
                                                <td>2011/06/02</td>
                                                <td>$95,400</td>
                                            </tr>
                                            <tr>
                                                <td>Suki Burks</td>
                                                <td>Developer</td>
                                                <td>London</td>
                                                <td>53</td>
                                                <td>2009/10/22</td>
                                                <td>$114,500</td>
                                            </tr>
                                            <tr>
                                                <td>Prescott Bartlett</td>
                                                <td>Technical Author</td>
                                                <td>London</td>
                                                <td>27</td>
                                                <td>2011/05/07</td>
                                                <td>$145,000</td>
                                            </tr>
                                            <tr>
                                                <td>Gavin Cortez</td>
                                                <td>Team Leader</td>
                                                <td>San Francisco</td>
                                                <td>22</td>
                                                <td>2008/10/26</td>
                                                <td>$235,500</td>
                                            </tr>
                                            <tr>
                                                <td>Martena Mccray</td>
                                                <td>Post-Sales support</td>
                                                <td>Edinburgh</td>
                                                <td>46</td>
                                                <td>2011/03/09</td>
                                                <td>$324,050</td>
                                            </tr>
                                            <tr>
                                                <td>Unity Butler</td>
                                                <td>Marketing Designer</td>
                                                <td>San Francisco</td>
                                                <td>47</td>
                                                <td>2009/12/09</td>
                                                <td>$85,675</td>
                                            </tr>
                                            <tr>
                                                <td>Howard Hatfield</td>
                                                <td>Office Manager</td>
                                                <td>San Francisco</td>
                                                <td>51</td>
                                                <td>2008/12/16</td>
                                                <td>$164,500</td>
                                            </tr>
                                            <tr>
                                                <td>Hope Fuentes</td>
                                                <td>Secretary</td>
                                                <td>San Francisco</td>
                                                <td>41</td>
                                                <td>2010/02/12</td>
                                                <td>$109,850</td>
                                            </tr>
                                            <tr>
                                                <td>Vivian Harrell</td>
                                                <td>Financial Controller</td>
                                                <td>San Francisco</td>
                                                <td>62</td>
                                                <td>2009/02/14</td>
                                                <td>$452,500</td>
                                            </tr>
                                            <tr>
                                                <td>Timothy Mooney</td>
                                                <td>Office Manager</td>
                                                <td>London</td>
                                                <td>37</td>
                                                <td>2008/12/11</td>
                                                <td>$136,200</td>
                                            </tr>
                                            <tr>
                                                <td>Jackson Bradshaw</td>
                                                <td>Director</td>
                                                <td>New York</td>
                                                <td>65</td>
                                                <td>2008/09/26</td>
                                                <td>$645,750</td>
                                            </tr>
                                            <tr>
                                                <td>Olivia Liang</td>
                                                <td>Support Engineer</td>
                                                <td>Singapore</td>
                                                <td>64</td>
                                                <td>2011/02/03</td>
                                                <td>$234,500</td>
                                            </tr>
                                            <tr>
                                                <td>Bruno Nash</td>
                                                <td>Software Engineer</td>
                                                <td>London</td>
                                                <td>38</td>
                                                <td>2011/05/03</td>
                                                <td>$163,500</td>
                                            </tr>
                                            <tr>
                                                <td>Sakura Yamamoto</td>
                                                <td>Support Engineer</td>
                                                <td>Tokyo</td>
                                                <td>37</td>
                                                <td>2009/08/19</td>
                                                <td>$139,575</td>
                                            </tr>
                                            <tr>
                                                <td>Thor Walton</td>
                                                <td>Developer</td>
                                                <td>New York</td>
                                                <td>61</td>
                                                <td>2013/08/11</td>
                                                <td>$98,540</td>
                                            </tr>
                                            <tr>
                                                <td>Finn Camacho</td>
                                                <td>Support Engineer</td>
                                                <td>San Francisco</td>
                                                <td>47</td>
                                                <td>2009/07/07</td>
                                                <td>$87,500</td>
                                            </tr>
                                            <tr>
                                                <td>Serge Baldwin</td>
                                                <td>Data Coordinator</td>
                                                <td>Singapore</td>
                                                <td>64</td>
                                                <td>2012/04/09</td>
                                                <td>$138,575</td>
                                            </tr>
                                            <tr>
                                                <td>Zenaida Frank</td>
                                                <td>Software Engineer</td>
                                                <td>New York</td>
                                                <td>63</td>
                                                <td>2010/01/04</td>
                                                <td>$125,250</td>
                                            </tr>
                                            <tr>
                                                <td>Zorita Serrano</td>
                                                <td>Software Engineer</td>
                                                <td>San Francisco</td>
                                                <td>56</td>
                                                <td>2012/06/01</td>
                                                <td>$115,000</td>
                                            </tr>
                                            <tr>
                                                <td>Jennifer Acosta</td>
                                                <td>Junior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>43</td>
                                                <td>2013/02/01</td>
                                                <td>$75,650</td>
                                            </tr>
                                            <tr>
                                                <td>Cara Stevens</td>
                                                <td>Sales Assistant</td>
                                                <td>New York</td>
                                                <td>46</td>
                                                <td>2011/12/06</td>
                                                <td>$145,600</td>
                                            </tr>
                                            <tr>
                                                <td>Hermione Butler</td>
                                                <td>Regional Director</td>
                                                <td>London</td>
                                                <td>47</td>
                                                <td>2011/03/21</td>
                                                <td>$356,250</td>
                                            </tr>
                                            <tr>
                                                <td>Lael Greer</td>
                                                <td>Systems Administrator</td>
                                                <td>London</td>
                                                <td>21</td>
                                                <td>2009/02/27</td>
                                                <td>$103,500</td>
                                            </tr>
                                            <tr>
                                                <td>Jonas Alexander</td>
                                                <td>Developer</td>
                                                <td>San Francisco</td>
                                                <td>30</td>
                                                <td>2010/07/14</td>
                                                <td>$86,500</td>
                                            </tr>
                                            <tr>
                                                <td>Shad Decker</td>
                                                <td>Regional Director</td>
                                                <td>Edinburgh</td>
                                                <td>51</td>
                                                <td>2008/11/13</td>
                                                <td>$183,000</td>
                                            </tr>
                                            <tr>
                                                <td>Michael Bruce</td>
                                                <td>Javascript Developer</td>
                                                <td>Singapore</td>
                                                <td>29</td>
                                                <td>2011/06/27</td>
                                                <td>$183,000</td>
                                            </tr>
                                            <tr>
                                                <td>Donna Snider</td>
                                                <td>Customer Support</td>
                                                <td>New York</td>
                                                <td>27</td>
                                                <td>2011/01/25</td>
                                                <td>$112,000</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Profile Datatable</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="display min-w850">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Name</th>
                                                <th>Department</th>
                                                <th>Gender</th>
                                                <th>Education</th>
                                                <th>Mobile</th>
                                                <th>Email</th>
                                                <th>Joining Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><img class="rounded-circle" width="35" src="{{ asset('images/profile/small/pic1.jpg') }}" alt=""></td>
                                                <td>Tiger Nixon</td>
                                                <td>Architect</td>
                                                <td>Male</td>
                                                <td>M.COM., P.H.D.</td>
                                                <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                                <td>2011/04/25</td>
                                                <td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>												
												</td>												
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="{{ asset('images/profile/small/pic2.jpg') }}" alt=""></td>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Female</td>
                                                <td>M.COM., P.H.D.</td>
                                                <td><a href="javascript:void(0);"><strong>987 654 3210</a></strong></td>
												<td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                                <td>2011/07/25</td>
                                                <td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="{{ asset('images/profile/small/pic3.jpg') }}" alt=""></td>
                                                <td>Ashton Cox</td>
                                                <td>Junior Technical</td>
                                                <td>Male</td>
                                                <td>B.COM., M.COM.</td>
                                                <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
												<td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                                <td>2009/01/12</td>
												<td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="{{ asset('images/profile/small/pic4.jpg') }}" alt=""></td>
                                                <td>Cedric Kelly</td>
                                                <td>Developer</td>
                                                <td>Male</td>
												<td>B.COM., M.COM.</td>
                                                <td><a href="javascript:void(0);"><strong>123 456 7890</a></strong></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                                <td>2012/03/29</td>
                                                <td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="{{ asset('images/profile/small/pic5.jpg') }}" alt=""></td>
                                                <td>Airi Satou</td>
                                                <td>Accountant</td>
                                                <td>Female</td>
												<td>B.A, B.C.A</td>
                                                <td><a href="javascript:void(0);"><strong>987 654 3210</a></strong></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                                <td>2008/11/28</td>
                                                <td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="{{ asset('images/profile/small/pic6.jpg') }}" alt=""></td>
                                                <td>Brielle Williamson</td>
                                                <td>Specialist</td>
                                                <td>Male</td>
												<td>B.COM., M.COM.</td>
                                                <td><a href="javascript:void(0);"><strong>123 456 7890</a></strong></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                                <td>2012/12/02</td>
												<td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="{{ asset('images/profile/small/pic7.jpg') }}" alt=""></td>
                                                <td>Herrod Chandler</td>
                                                <td>Sales Assistant</td>
                                                <td>Female</td>
												<td>B.A, B.C.A</td>
                                                <td><a href="javascript:void(0);"><strong>987 654 3210</a></strong></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                                <td>2012/08/06</td>
                                                <td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="{{ asset('images/profile/small/pic8.jpg') }}" alt=""></td>
                                                <td>Rhona Davidson</td>
                                                <td>Integration</td>
                                                <td>Male</td>
												<td>B.TACH, M.TACH</td>
                                                <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                                <td>2010/10/14</td>
                                                <td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="{{ asset('images/profile/small/pic9.jpg') }}" alt=""></td>
                                                <td>Colleen Hurst</td>
                                                <td>Javascript Developer</td>
                                                <td>Female</td>
												<td>B.A, B.C.A</td>
                                                <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                                <td>2009/09/15</td>
                                                <td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="{{ asset('images/profile/small/pic10.jpg') }}" alt=""></td>
                                                <td>Sonya Frost</td>
                                                <td>Software Engineer</td>
                                                <td>Male</td>
												<td>B.COM., M.COM.</td>
                                                <td><a href="javascript:void(0);"><strong>123 456 7890</a></strong></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                                <td>2008/12/13</td>
                                                <td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="{{ asset('images/profile/small/pic1.jpg') }}" alt=""></td>
                                                <td>Jena Gaines</td>
                                                <td>Office Manager</td>
                                                <td>Female</td>
												<td>B.TACH, M.TACH</td>
                                                <td><a href="javascript:void(0);"><strong>987 654 3210</a></strong></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                                <td>2008/12/19</td>
                                                <td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="{{ asset('images/profile/small/pic2.jpg') }}" alt=""></td>
                                                <td>Quinn Flynn</td>
                                                <td>Support Lead</td>
                                                <td>Male</td>
												<td>B.TACH, M.TACH</td>
                                                <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                                <td>2013/03/03</td>
                                                <td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="{{ asset('images/profile/small/pic3.jpg') }}" alt=""></td>
                                                <td>Charde Marshall</td>
                                                <td>Regional Director</td>
                                                <td>Female</td>
												<td>B.A, B.C.A</td>
                                                <td><a href="javascript:void(0);"><strong>123 456 7890</a></strong></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                                <td>2008/10/16</td>
                                                <td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="{{ asset('images/profile/small/pic4.jpg') }}" alt=""></td>
                                                <td>Haley Kennedy</td>
                                                <td>Senior Marketing</td>
                                                <td>Male</td>
												<td>B.COM., M.COM.</td>
                                                <td><a href="javascript:void(0);"><strong>987 654 3210</a></strong></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                                <td>2012/12/18</td>
                                                <td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="{{ asset('images/profile/small/pic5.jpg') }}" alt=""></td>
                                                <td>Tatyana Fitzpatrick</td>
                                                <td>Regional Director</td>
                                                <td>Male</td>
												<td>B.TACH, M.TACH</td>
                                                <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                                <td>2010/03/17</td>
                                                <td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="{{ asset('images/profile/small/pic6.jpg') }}" alt=""></td>
                                                <td>Michael Silva</td>
                                                <td>Marketing Designer</td>
                                                <td>Female</td>
												<td>B.A, B.C.A</td>
                                                <td><a href="javascript:void(0);"><strong>123 456 7890</a></strong></td>
												<td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
												<td>2012/11/27</td>
                                                <td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="{{ asset('images/profile/small/pic7.jpg') }}" alt=""></td>
                                                <td>Paul Byrd</td>
                                                <td>Financial Officer</td>
                                                <td>Male</td>
												<td>B.TACH, M.TACH</td>
                                                <td><a href="javascript:void(0);"><strong>987 654 3210</a></strong></td>
												<td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                                <td>2010/06/09</td>
                                                <td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="{{ asset('images/profile/small/pic8.jpg') }}" alt=""></td>
                                                <td>Gloria Little</td>
                                                <td>Systems Administrator</td>
                                                <td>Female</td>
												<td>B.A, B.C.A</td>
                                                <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                                <td>2009/04/10</td>
                                                <td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="{{ asset('images/profile/small/pic9.jpg') }}" alt=""></td>
                                                <td>Bradley Greer</td>
                                                <td>Software Engineer</td>
                                                <td>Male</td>
												<td>B.COM., M.COM.</td>
                                                <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                                <td>2012/10/13</td>
												<td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="{{ asset('images/profile/small/pic10.jpg') }}" alt=""></td>
                                                <td>Dai Rios</td>
                                                <td>Personnel Lead</td>
                                                <td>Male</td>
												<td>B.TACH, M.TACH</td>
                                                <td><a href="javascript:void(0);"><strong>123 456 7890</a></strong></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                                <td>2012/09/26</td>
                                                <td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="{{ asset('images/profile/small/pic1.jpg') }}" alt=""></td>
                                                <td>Jenette Caldwell</td>
                                                <td>Development Lead</td>
                                                <td>Female</td>
												<td>B.A, B.C.A</td>
                                                <td><a href="javascript:void(0);"><strong>987 654 3210</a></strong></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                                <td>2011/09/03</td>
												<td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="{{ asset('images/profile/small/pic2.jpg') }}" alt=""></td>
                                                <td>Yuri Berry</td>
                                                <td>Marketing Officer</td>
                                                <td>Male</td>
												<td>B.TACH, M.TACH</td>
                                                <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                                <td>2009/06/25</td>
                                                <td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="{{ asset('images/profile/small/pic3.jpg') }}" alt=""></td>
                                                <td>Caesar Vance</td>
                                                <td>Pre-Sales Support</td>
                                                <td>Male</td>
												<td>B.TACH, M.TACH</td>
                                                <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                                <td>2011/12/12</td>
												<td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="{{ asset('images/profile/small/pic4.jpg') }}" alt=""></td>
                                                <td>Doris Wilder</td>
                                                <td>Sales Assistant</td>
                                                <td>Female</td>
												<td>B.A, B.C.A</td>
                                                <td><a href="javascript:void(0);"><strong>123 456 7890</a></strong></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                                <td>2010/09/20</td>
                                                <td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="{{ asset('images/profile/small/pic5.jpg') }}" alt=""></td>
                                                <td>Angelica Ramos</td>
                                                <td>Executive Officer</td>
                                                <td>Male</td>
												<td>B.COM., M.COM.</td>
                                                <td><a href="javascript:void(0);"><strong>987 654 3210</a></strong></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                                <td>2009/10/09</td>
												<td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="{{ asset('images/profile/small/pic6.jpg') }}" alt=""></td>
                                                <td>Gavin Joyce</td>
                                                <td>Developer</td>
                                                <td>Female</td>
												<td>B.TACH, M.TACH</td>
                                                <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                                <td>2010/12/22</td>
                                                <td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="{{ asset('images/profile/small/pic7.jpg') }}" alt=""></td>
                                                <td>Jennifer Chang</td>
                                                <td>Regional Director</td>
                                                <td>Male</td>
												<td>B.A, B.C.A</td>
                                                <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                                <td>2010/11/14</td>
                                                <td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="{{ asset('images/profile/small/pic8.jpg') }}" alt=""></td>
                                                <td>Brenden Wagner</td>
                                                <td>Software Engineer</td>
                                                <td>Female</td>
												<td>B.TACH, M.TACH</td>
                                                <td><a href="javascript:void(0);"><strong>123 456 7890</a></strong></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                                <td>2011/06/07</td>
                                                <td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="{{ asset('images/profile/small/pic9.jpg') }}" alt=""></td>
                                                <td>Fiona Green</td>
                                                <td>Operating Officer</td>
                                                <td>Male</td>
												<td>B.A, B.C.A</td>
                                                <td><a href="javascript:void(0);"><strong>987 654 3210</a></strong></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                                <td>2010/03/11</td>
                                                <td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="{{ asset('images/profile/small/pic10.jpg') }}" alt=""></td>
                                                <td>Shou Itou</td>
                                                <td>Regional Marketing</td>
                                                <td>Female</td>
												<td>B.COM., M.COM.</td>
                                                <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                                <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                                <td>2011/08/14</td>
                                                <td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Fees Collection</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example4" class="display min-w850">
                                        <thead>
                                            <tr>
                                                <th>Roll No</th>
                                                <th>Student Name</th>
                                                <th>Invoice number</th>
                                                <th>Fees Type </th>
												<th>Payment Type </th>
												<th>Status </th>
                                                <th>Date</th>
                                                <th>Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>01</td>
                                                <td>Tiger Nixon</td>
                                                <td>#54605</td>
                                                <td>Library</td>
                                                <td>Cash</td>
                                                <td><span class="badge light badge-success">Paid</span></td>
                                                <td>2011/04/25</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>02</td>
                                                <td>Garrett Winters</td>
                                                <td>#54687</td>
                                                <td>Library</td>
                                                <td>Credit Card</td>
                                                <td><span class="badge light badge-warning">Panding</span></td>
												<td>2011/07/25</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>03</td>
                                                <td>Ashton Cox</td>
                                                <td>#35672</td>
                                                <td>Tuition</td>
                                                <td>Cash</td>
                                                <td><span class="badge light badge-success">Paid</span></td>
                                                <td>2009/01/12</td>
												<td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>04</td>
                                                <td>Cedric Kelly</td>
                                                <td>#57984</td>
                                                <td>Annual</td>
												<td>Credit Card</td>
                                                <td><span class="badge light badge-warning">Panding</span></td>
                                                <td>2012/03/29</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>05</td>
                                                <td>Airi Satou</td>
                                                <td>#12453</td>
                                                <td>Library</td>
												<td>Cheque</td>
                                                <td><span class="badge light badge-warning">Panding</span></td>
                                                <td>2008/11/28</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>06</td>
                                                <td>Brielle Williamson</td>
                                                <td>#59723</td>
                                                <td>Tuition</td>
												<td>Cash</td>
                                                <td><span class="badge light badge-success">Paid</span></td>
                                                <td>2012/12/02</td>
												<td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>07</td>
                                                <td>Herrod Chandler</td>
                                                <td>#98726</td>
                                                <td>Tuition</td>
												<td>Credit Card</td>
                                                <td><span class="badge light badge-danger">Udpaid</span></td>
                                                <td>2012/08/06</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>08</td>
                                                <td>Rhona Davidson</td>
                                                <td>#98721</td>
                                                <td>Library</td>
												<td>Cheque</td>
                                                <td><span class="badge light badge-danger">Udpaid</span></td>
                                                <td>2010/10/14</td>
												<td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>09</td>
                                                <td>Colleen Hurst</td>
                                                <td>#54605</td>
                                                <td>Annual</td>
												<td>Cheque</td>
                                                <td><span class="badge light badge-success">Paid</span></td>
                                                <td>2009/09/15</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>10</td>
                                                <td>Sonya Frost</td>
                                                <td>#98734</td>
                                                <td>Tuition</td>
												<td>Credit Card</td>
                                                <td><span class="badge light badge-danger">Udpaid</span></td>
                                                <td>2008/12/13</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>11</td>
                                                <td>Jena Gaines</td>
                                                <td>#12457</td>
                                                <td>Tuition</td>
												<td>Cash</td>
                                                <td><span class="badge light badge-danger">Udpaid</span></td>
                                                <td>2008/12/19</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>12</td>
                                                <td>Quinn Flynn</td>
                                                <td>#36987</td>
                                                <td>Library</td>
												<td>Cheque</td>
                                                <td><span class="badge light badge-warning">Panding</span></td>
                                                <td>2013/03/03</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>13</td>
                                                <td>Charde Marshall</td>
                                                <td>#98756</td>
                                                <td>Tuition</td>
												<td>Cheque</td>
                                                <td><span class="badge light badge-success">Paid</span></td>
                                                <td>2008/10/16</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>14</td>
                                                <td>Haley Kennedy</td>
                                                <td>#98754</td>
                                                <td>Library</td>
												<td>Cash</td>
                                                <td><span class="badge light badge-danger">Udpaid</span></td>
                                                <td>2012/12/18</td>
												<td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>15</td>
                                                <td>Tatyana Fitzpatrick</td>
                                                <td>#65248</td>
                                                <td>Annual</td>
												<td>Cheque</td>
                                                <td><span class="badge light badge-danger">Udpaid</span></td>
                                                <td>2010/03/17</td>
												<td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>16</td>
                                                <td>Michael Silva</td>
                                                <td>#75943</td>
                                                <td>Tuition</td>
												<td>Credit Card</td>
                                                <td><span class="badge light badge-success">Paid</span></td>
												<td>2012/11/27</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>17</td>
                                                <td>Paul Byrd</td>
                                                <td>#87954</td>
                                                <td>Library</td>
												<td>Cheque</td>
                                                <td><span class="badge light badge-warning">Panding</span></td>
                                                <td>2010/06/09</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>18</td>
                                                <td>Gloria Little</td>
                                                <td>#98746</td>
                                                <td>Tuition</td>
												<td>Cheque</td>
                                                <td><span class="badge light badge-success">Paid</span></td>
                                                <td>2009/04/10</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>19</td>
                                                <td>Bradley Greer</td>
                                                <td>#98674</td>
                                                <td>Annual</td>
												<td>Cash</td>
                                                <td><span class="badge light badge-danger">Udpaid</span></td>
                                                <td>2012/10/13</td>
												<td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>20</td>
                                                <td>Dai Rios</td>
                                                <td>#69875</td>
                                                <td>Tuition</td>
												<td>Cheque</td>
                                                <td><span class="badge light badge-warning">Panding</span></td>
                                                <td>2012/09/26</td>
												<td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>21</td>
                                                <td>Jenette Caldwell</td>
                                                <td>#54678</td>
                                                <td>Library</td>
												<td>Cheque</td>
                                                <td><span class="badge light badge-success">Paid</span></td>
                                                <td>2011/09/03</td>
												<td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>22</td>
                                                <td>Yuri Berry</td>
                                                <td>#98756</td>
                                                <td>Tuition</td>
												<td>Credit Card</td>
                                                <td><span class="badge light badge-danger">Udpaid</span></td>
                                                <td>2009/06/25</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>23</td>
                                                <td>Caesar Vance</td>
                                                <td>#86754</td>
                                                <td>Tuition</td>
												<td>Cheque</td>
                                                <td><span class="badge light badge-success">Paid</span></td>
                                                <td>2011/12/12</td>
												<td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>24</td>
                                                <td>Doris Wilder</td>
                                                <td>#34251</td>
                                                <td>Annual</td>
												<td>Cash</td>
                                                <td><span class="badge light badge-warning">Panding</span></td>
                                                <td>2010/09/20</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>25</td>
                                                <td>Angelica Ramos</td>
                                                <td>#65874</td>
                                                <td>Tuition</td>
												<td>Cheque</td>
                                                <td><span class="badge light badge-danger">Udpaid</span></td>
                                                <td>2009/10/09</td>
												<td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>26</td>
                                                <td>Gavin Joyce</td>
                                                <td>#54605</td>
                                                <td>Female</td>
												<td>Credit Card</td>
                                                <td><span class="badge light badge-success">Paid</span></td>
                                                <td>2010/12/22</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>27</td>
                                                <td>Jennifer Chang</td>
                                                <td>#54605</td>
                                                <td>Tuition</td>
												<td>Cheque</td>
                                                <td><span class="badge light badge-warning">Panding</span></td>
                                                <td>2010/11/14</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>28</td>
                                                <td>Brenden Wagner</td>
                                                <td>#45687</td>
                                                <td>Library</td>
												<td>Cheque</td>
												<td><span class="badge light badge-danger">Udpaid</span></td>
                                                <td>2011/06/07</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>29</td>
                                                <td>Fiona Green</td>
                                                <td>#23456</td>
                                                <td>Tuition</td>
												<td>Cash</td>
                                                <td><span class="badge light badge-success">Paid</span></td>
                                                <td>2010/03/11</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>30</td>
                                                <td>Shou Itou</td>
                                                <td>#54605</td>
                                                <td>Annual</td>
												<td>Credit Card</td>
												<td><span class="badge light badge-warning">Panding</span></td>
                                                <td>2011/08/14</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Patient</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example-5" class="display min-w850">
                                        <thead>
                                            <tr>
                                                <th>
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="checkAll" required="">
														<label class="custom-control-label" for="checkAll"></label>
													</div>
												</th>
                                                <th>Order ID</th>
                                                <th>Date Check in</th>
                                                <th>Name</th>
                                                <th>Assgined</th>
                                                <th>Disease</th>
                                                <th>Status</th>
                                                <th>Table no</th>
                                                <th>Action</th>
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
                                                <td>#P-00001</td>
                                                <td>26/02/2020, 12:42 AM</td>
                                                <td>Tiger Nixon</td>
                                                <td>Dr. Cedric</td>
                                                <td>Cold & Flu</td>
												<td>
													<span class="badge light badge-danger">
														<i class="fa fa-circle text-danger mr-1"></i>
														New Patient
													</span>
												</td>
                                                <td>AB-001</td>
                                                <td>
													<div class="dropdown ml-auto text-right">
														<div class="btn-link" data-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#">Accept Patient</a>
															<a class="dropdown-item" href="#">Reject Order</a>
															<a class="dropdown-item" href="#">View Details</a>
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
                                                <td>#P-00002</td>
                                                <td>28/02/2020, 12:42 AM</td>
												<td>Garrett Winters</td>
                                                <td>Dr. Cedric</td>
												<td>Sleep Problem</td>
                                                <td>
													<span class="badge light badge-warning">
														<i class="fa fa-circle text-warning mr-1"></i>
														In Treatment
													</span>
												</td>
                                                <td>AB-002</td>
                                                <td>
													<div class="dropdown ml-auto text-right">
														<div class="btn-link" data-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#">Accept Patient</a>
															<a class="dropdown-item" href="#">Reject Order</a>
															<a class="dropdown-item" href="#">View Details</a>
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
                                                <td>#P-00003</td>
                                                <td>26/02/2020, 12:42 AM</td>
												<td>Ashton Cox</td>
                                                <td>Dr. Rhona</td>
												<td>Cold & Flu</td>
                                                <td>
													<span class="badge light badge-success">
														<i class="fa fa-circle text-success mr-1"></i>
														Recovered
													</span>
												</td>
                                                <td>AB-003</td>
												<td>
													<div class="dropdown ml-auto text-right">
														<div class="btn-link" data-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#">Accept Patient</a>
															<a class="dropdown-item" href="#">Reject Order</a>
															<a class="dropdown-item" href="#">View Details</a>
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
                                                <td>#P-00004</td>
                                                <td>29/02/2020, 12:42 AM</td>
												<td>Ashton Cox</td>
                                                <td>Dr. Cedric</td>
                                                <td>Cold & Flu</td>
                                                <td>
													<span class="badge light badge-warning">
														<i class="fa fa-circle text-warning mr-1"></i>
														In Treatment
													</span>
												</td>
                                                <td>AB-004</td>
                                                <td>
													<div class="dropdown ml-auto text-right">
														<div class="btn-link" data-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#">Accept Patient</a>
															<a class="dropdown-item" href="#">Reject Order</a>
															<a class="dropdown-item" href="#">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td>
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="customCheckBox6" required="">
														<label class="custom-control-label" for="customCheckBox6"></label>
													</div>
												</td>
                                                <td>#P-00005</td>
                                                <td>28/02/2020, 12:42 AM</td>
												<td>Ashton Cox</td>
                                                <td>Dr. Cedric</td>
                                                <td>Cold & Flu</td>
                                                <td>
													<span class="badge light badge-warning">
														<i class="fa fa-circle text-warning mr-1"></i>
														In Treatment
													</span>
												</td>
                                                <td>AB-005</td>
                                                <td>
													<div class="dropdown ml-auto text-right">
														<div class="btn-link" data-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#">Accept Patient</a>
															<a class="dropdown-item" href="#">Reject Order</a>
															<a class="dropdown-item" href="#">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td>
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="customCheckBox7" required="">
														<label class="custom-control-label" for="customCheckBox7"></label>
													</div>
												</td>
                                                <td>#P-00006</td>
                                                <td>28/02/2020, 12:42 AM</td>
												<td>Ashton Cox</td>
                                                <td>Dr. Rhona</td>
                                                <td>Sleep Problem</td>
												<td>
													<span class="badge light badge-warning">
														<i class="fa fa-circle text-warning mr-1"></i>
														In Treatment
													</span>
												</td>
                                                <td>AB-006</td>
												<td>
													<div class="dropdown ml-auto text-right">
														<div class="btn-link" data-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#">Accept Patient</a>
															<a class="dropdown-item" href="#">Reject Order</a>
															<a class="dropdown-item" href="#">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td>
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="customCheckBox8" required="">
														<label class="custom-control-label" for="customCheckBox8"></label>
													</div>
												</td>
                                                <td>#P-00007</td>
                                                <td>26/02/2020, 12:42 AM</td>
												<td>Airi Satou</td>
                                                <td>Dr. Rhona</td>
                                                <td>Cold & Flu</td>
                                                <td>
													<span class="badge light badge-danger">
														<i class="fa fa-circle text-danger mr-1"></i>
														New Patient
													</span>
												</td>
                                                <td>AB-007</td>
                                                <td>
													<div class="dropdown ml-auto text-right">
														<div class="btn-link" data-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#">Accept Patient</a>
															<a class="dropdown-item" href="#">Reject Order</a>
															<a class="dropdown-item" href="#">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td>
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="customCheckBox9" required="">
														<label class="custom-control-label" for="customCheckBox9"></label>
													</div>
												</td>
                                                <td>#P-00008</td>
                                                <td>29/02/2020, 12:42 AM</td>
												<td>Airi Satou</td>
                                                <td>Dr. Garrett </td>
                                                <td>Sleep Problem</td>
                                                <td>
													<span class="badge light badge-warning">
														<i class="fa fa-circle text-warning mr-1"></i>
														In Treatment
													</span>
												</td>
                                                <td>AB-008</td>
                                                <td>
													<div class="dropdown ml-auto text-right">
														<div class="btn-link" data-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#">Accept Patient</a>
															<a class="dropdown-item" href="#">Reject Order</a>
															<a class="dropdown-item" href="#">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td>
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="customCheckBox10" required="">
														<label class="custom-control-label" for="customCheckBox10"></label>
													</div>
												</td>
                                                <td>#P-00009</td>
                                                <td>25/02/2020, 12:42 AM</td>
												<td>Airi Satou</td>
                                                <td>Dr. Rhona</td>
                                                <td>Cold & Flu</td>
                                                <td>
													<span class="badge light badge-danger">
														<i class="fa fa-circle text-danger mr-1"></i>
														New Patient
													</span>
												</td>
                                                <td>AB-009</td>
                                                <td>
													<div class="dropdown ml-auto text-right">
														<div class="btn-link" data-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#">Accept Patient</a>
															<a class="dropdown-item" href="#">Reject Order</a>
															<a class="dropdown-item" href="#">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td>
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="customCheckBox11" required="">
														<label class="custom-control-label" for="customCheckBox11"></label>
													</div>
												</td>
                                                <td>#P-00010</td>
                                                <td>26/02/2020, 12:42 AM</td>
												<td>Airi Satou</td>
                                                <td>Dr. Rhona</td>
                                                <td>Sleep Problem</td>
                                                <td>
													<span class="badge light badge-danger">
														<i class="fa fa-circle text-danger mr-1"></i>
														New Patient
													</span>
												</td>
                                                <td>AB-010</td>
                                                <td>
													<div class="dropdown ml-auto text-right">
														<div class="btn-link" data-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#">Accept Patient</a>
															<a class="dropdown-item" href="#">Reject Order</a>
															<a class="dropdown-item" href="#">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td>
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="customCheckBox12" required="">
														<label class="custom-control-label" for="customCheckBox12"></label>
													</div>
												</td>
                                                <td>#P-00011</td>
                                                <td>28/02/2020, 12:42 AM</td>
												<td>Airi Satou</td>
                                                <td>Dr. Rhona</td>
                                                <td>Cold & Flu</td>
												<td>
													<span class="badge light badge-warning">
														<i class="fa fa-circle text-warning mr-1"></i>
														In Treatment
													</span>
												</td>
                                                <td>AB-011</td>
                                                <td>
													<div class="dropdown ml-auto text-right">
														<div class="btn-link" data-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#">Accept Patient</a>
															<a class="dropdown-item" href="#">Reject Order</a>
															<a class="dropdown-item" href="#">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td>
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="customCheckBox13" required="">
														<label class="custom-control-label" for="customCheckBox13"></label>
													</div>
												</td>
                                                <td>#P-00012</td>
                                                <td>29/02/2020, 12:42 AM</td>
												<td>Sonya Frost</td>
                                                <td>Dr. Garrett</td>
                                                <td>Sleep Problem</td>
                                                <td>
													<span class="badge light badge-danger">
														<i class="fa fa-circle text-danger mr-1"></i>
														New Patient
													</span>
												</td>
                                                <td>AB-012</td>
                                                <td>
													<div class="dropdown ml-auto text-right">
														<div class="btn-link" data-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#">Accept Patient</a>
															<a class="dropdown-item" href="#">Reject Order</a>
															<a class="dropdown-item" href="#">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td>
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="customCheckBox14" required="">
														<label class="custom-control-label" for="customCheckBox14"></label>
													</div>
												</td>
                                                <td>#P-00013</td>
                                                <td>25/02/2020, 12:42 AM</td>
												<td>Sonya Frost</td>
                                                <td>Dr. Rhona</td>
                                                <td>Cold & Flu</td>
												<td>
													<span class="badge light badge-danger">
														<i class="fa fa-circle text-danger mr-1"></i>
														New Patient
													</span>
												</td>
                                                <td>AB-013</td>
                                                <td>
													<div class="dropdown ml-auto text-right">
														<div class="btn-link" data-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#">Accept Patient</a>
															<a class="dropdown-item" href="#">Reject Order</a>
															<a class="dropdown-item" href="#">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td>
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="customCheckBox15" required="">
														<label class="custom-control-label" for="customCheckBox15"></label>
													</div>
												</td>
                                                <td>#P-00014</td>
                                                <td>26/02/2020, 12:42 AM</td>
												<td>Sonya Frost</td>
                                                <td>Dr. Garrett</td>
                                                <td>Sleep Problem</td>
                                                <td>
													<span class="badge light badge-warning">
														<i class="fa fa-circle text-warning mr-1"></i>
														In Treatment
													</span>
												</td>
                                                <td>AB-014</td>
                                                <td>
													<div class="dropdown ml-auto text-right">
														<div class="btn-link" data-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#">Accept Patient</a>
															<a class="dropdown-item" href="#">Reject Order</a>
															<a class="dropdown-item" href="#">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td>
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="customCheckBox16" required="">
														<label class="custom-control-label" for="customCheckBox16"></label>
													</div>
												</td>
                                                <td>#P-00015</td>
                                                <td>28/02/2020, 12:42 AM</td>
												<td>Sonya Frost</td>
												<td>Dr. Rhona</td>
                                                <td>Cold & Flu</td>
                                                <td>
													<span class="badge light badge-danger">
														<i class="fa fa-circle text-danger mr-1"></i>
														New Patient
													</span>
												</td>
                                                <td>AB-015</td>
                                                <td>
													<div class="dropdown ml-auto text-right">
														<div class="btn-link" data-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#">Accept Patient</a>
															<a class="dropdown-item" href="#">Reject Order</a>
															<a class="dropdown-item" href="#">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td>
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="customCheckBox17" required="">
														<label class="custom-control-label" for="customCheckBox17"></label>
													</div>
												</td>
                                                <td>#P-00016</td>
                                                <td>29/02/2020, 12:42 AM</td>
												<td>Sonya Frost</td>
                                                <td>Dr. Garrett</td>
												<td>Sleep Problem</td>
												<td>
													<span class="badge light badge-danger">
														<i class="fa fa-circle text-danger mr-1"></i>
														New Patient
													</span>
												</td>
                                                <td>AB-016</td>
                                                <td>
													<div class="dropdown ml-auto text-right">
														<div class="btn-link" data-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#">Accept Patient</a>
															<a class="dropdown-item" href="#">Reject Order</a>
															<a class="dropdown-item" href="#">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td>
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="customCheckBox18" required="">
														<label class="custom-control-label" for="customCheckBox18"></label>
													</div>
												</td>
                                                <td>#P-00017</td>
                                                <td>25/02/2020, 12:42 AM</td>
												<td>Sonya Frost</td>
                                                <td>Dr. Rhona</td>
												<td>Cold & Flu</td>
                                                <td>
													<span class="badge light badge-warning">
														<i class="fa fa-circle text-warning mr-1"></i>
														In Treatment
													</span>
												</td>
                                                <td>AB-017</td>
                                                <td>
													<div class="dropdown ml-auto text-right">
														<div class="btn-link" data-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#">Accept Patient</a>
															<a class="dropdown-item" href="#">Reject Order</a>
															<a class="dropdown-item" href="#">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td>
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="customCheckBox19" required="">
														<label class="custom-control-label" for="customCheckBox19"></label>
													</div>
												</td>
                                                <td>#P-00018</td>
                                                <td>26/02/2020, 12:42 AM</td>
												<td>Sonya Frost</td>
                                                <td>Dr. Rhona</td>
                                                <td>Sleep Problem</td>
                                                <td>
													<span class="badge light badge-danger">
														<i class="fa fa-circle text-danger mr-1"></i>
														New Patient
													</span>
												</td>
                                                <td>AB-018</td>
                                                <td>
													<div class="dropdown ml-auto text-right">
														<div class="btn-link" data-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#">Accept Patient</a>
															<a class="dropdown-item" href="#">Reject Order</a>
															<a class="dropdown-item" href="#">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td>
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="customCheckBox20" required="">
														<label class="custom-control-label" for="customCheckBox20"></label>
													</div>
												</td>
                                                <td>#P-00019</td>
                                                <td>28/02/2020, 12:42 AM</td>
												<td>Sonya Frost</td>
                                                <td>Dr. Rhona</td>
                                                <td>Cold & Flu</td>
                                                <td>
													<span class="badge light badge-danger">
														<i class="fa fa-circle text-danger mr-1"></i>
														New Patient
													</span>
												</td>
                                                <td>AB-019</td>
												<td>
													<div class="dropdown ml-auto text-right">
														<div class="btn-link" data-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#">Accept Patient</a>
															<a class="dropdown-item" href="#">Reject Order</a>
															<a class="dropdown-item" href="#">View Details</a>
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
                                                <td>#P-00020</td>
                                                <td>25/02/2020, 12:42 AM</td>
												<td>Sonya Frost</td>
                                                <td>Dr. Garrett</td>
                                                <td>Sleep Problem</td>
                                                <td>
													<span class="badge light badge-warning">
														<i class="fa fa-circle text-warning mr-1"></i>
														In Treatment
													</span>
												</td>
                                                <td>AB-020</td>
                                                <td>
													<div class="dropdown ml-auto text-right">
														<div class="btn-link" data-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#">Accept Patient</a>
															<a class="dropdown-item" href="#">Reject Order</a>
															<a class="dropdown-item" href="#">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div> --}}
				</div>
            </div>
			
@endsection