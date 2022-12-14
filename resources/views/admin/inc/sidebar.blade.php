<div class="sidebar-wrapper sidebar-theme">

    <nav id="sidebar"  style="background-color: #FFDEE9;
    background-image: linear-gradient(0deg, #FFDEE9 0%, #B5FFFC 100%);
    " class="sidebar">

        <div class="navbar-nav theme-brand flex-row  text-center ">
            <div class="row text-center">
                <div class="justify-content-center text-center">
                    <nav class="rounded float-center nav-responsive">
                        <a class="navbar-brand" class="text-align-center" href="{{ url('admin/dashboard') }}">
                        <center>  <img src="{{ asset('assets') }}/img/dhlogo.jpg" class="justify-content-end " width="50"
                                height="50" alt="Dhaka Handicraft"></center>
                        </a>

                    </nav>
                    <h6 class="justify-content-center text-primary">DHAKA HANDICRAFT</h6>
                </div>
            </div>
            <div class="nav-item sidebar-toggle">
                <div class="btn-toggle sidebarCollapse">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-left"><polyline points="11 17 6 12 11 7"></polyline><polyline points="18 17 13 12 18 7"></polyline></svg>
                </div>
            </div>
        </div>
        <div class=""></div>
        <ul class="list-unstyled menu-categories " id="accordionExample">


            <li class="menu {{ Route::is('*dashboard.*') ? 'active' : '' }}">
                <a href="{{ url('admin/dashboard') }}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-home">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                    </svg>
                        <span>Dashboard</span>
                    </div>
                </a>
            </li>
            <li class="menu {{ Route::is('admin.users.*') ? 'active' : '' }}">
                <a href="{{ url('admin/users') }}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-users">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75">

                        </svg>
                        <span>USER</span>
                    </div>
                </a>
            </li>



            <li class="menu {{ Route::is('admin.warehouses.*') ? 'active' : '' }}">
                <a href="{{ url('admin/warehouses') }}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-activity">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                        <span>WareHouse</span>
                    </div>
                </a>
            </li>

            <li class="menu {{ Route::is('admin.managers.*') ? 'active' : '' }}">
                <a href="{{ url('admin/managers') }}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-activity">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                        <span>Warehouse Manager</span>
                    </div>
                </a>
            </li>

            <li class="menu {{ Route::is('admin.buyers.*') ? 'active' : '' }}">
                <a href="{{ url('admin/buyers') }}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-edit">
                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                        </svg>
                        <span>Buyers</span>
                    </div>
                </a>
            </li>


            <li
                class="menu {{ Route::is('*product.*') ? 'active' : '' }}{{ Route::is('*unit*') ? 'active' : '' }}{{ Route::is('*category*') ? 'active' : '' }}">
                <a href="#products" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-shopping-cart">
                            <circle cx="9" cy="21" r="1"></circle>
                            <circle cx="20" cy="21" r="1"></circle>
                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                        </svg>
                        <span>Products</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="products" data-bs-parent="#accordionExample">
                    <li class="{{ Route::is('*unit*') ? 'active' : '' }}">
                        <a href="{{ url('admin/unit') }}"> Unit </a>
                    </li>
                    <li class="{{ Route::is('*category*') ? 'active' : '' }}">
                        <a href="{{ url('admin/category') }}"> Category </a>
                    </li>
                    <li class="{{ Route::is('*material_category') ? 'active' : '' }}">
                        <a href="{{ url('admin/material_category') }}">Material Category </a>
                    </li>
                    <li class="{{ Route::is('*product*') ? 'active' : '' }}">
                        <a href="{{ url('admin/product') }}"> Products </a>
                    </li>
                </ul>
            </li>



            <li class="menu {{ Route::is('*main_order*') ? 'active' : '' }}{{ Route::is('*assaign_order*') ? 'active' : '' }}">
                <a href="#order" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-activity">
                            <circle cx="8" cy="21" r="2"></circle>
                            <circle cx="20" cy="21" r="2"></circle>
                            <path
                                d="M5.67 6H23l-1.68 8.39a2 2 0 0 1-2 1.61H8.75a2 2 0 0 1-2-1.74L5.23 2.74A2 2 0 0 0 3.25 1H1">
                            </path>
                        </svg>
                        <span>Orders</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="order" data-bs-parent="#accordionExample">

                    <li class="{{ Route::is('*main_order*') ? 'active' : '' }}">
                        <a href="{{ url('admin/main_order') }}"> Orders </a>
                    </li>
                    <li class="{{ Route::is('*assaign_order*') ? 'active' : '' }}">
                        <a href="{{ url('admin/assaign_order') }}">Assaign Order </a>
                    </li>
                </ul>
            </li>

            <li class="menu {{ Route::is('*payment*') ? 'active' : '' }}">
                <a href="#payment" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-activity">
                            <circle cx="8" cy="21" r="2"></circle>
                            <circle cx="20" cy="21" r="2"></circle>
                            <path
                                d="M5.67 6H23l-1.68 8.39a2 2 0 0 1-2 1.61H8.75a2 2 0 0 1-2-1.74L5.23 2.74A2 2 0 0 0 3.25 1H1">
                            </path>
                        </svg>
                        <span>Payments</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="payment" data-bs-parent="#accordionExample">

                    <li class="{{ Route::is('warehouse_payments*') ? 'active' : '' }}">
                        <a href="{{ url('admin/warehouse_payments') }}"> Warehouse Payment </a>
                    </li>
                    <li class="{{ Route::is('buyers-payments*') ? 'active' : '' }}">
                        <a href="{{ url('admin/buyers-payments') }}">Buyer Payment </a>
                    </li>
                </ul>
            </li>

            <li class="menu {{ Route::is('*pack*') ? 'active' : '' }}">
                <a href="#pack" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-activity">
                            <path
                                d="M12.89 1.45l8 4A2 2 0 0 1 22 7.24v9.53a2 2 0 0 1-1.11 1.79l-8 4a2 2 0 0 1-1.79 0l-8-4a2 2 0 0 1-1.1-1.8V7.24a2 2 0 0 1 1.11-1.79l8-4a2 2 0 0 1 1.78 0z">
                            </path>
                            <polyline points="2.32 6.16 12 11 21.68 6.16"></polyline>
                            <line x1="12" y1="22.76" x2="12" y2="11"></line>
                        </svg>
                        <span>Packgeing</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="pack" data-bs-parent="#accordionExample">
                    <li class="{{ Route::is('admin.packaging_company*') ? 'active' : '' }}">
                        <a href="{{ url('admin/packaging_company') }}"> Packgeing Company </a>
                    </li>
                    <li class="{{ Route::is('admin.pack_size*') ? 'active' : '' }}">
                        <a href="{{ url('admin/pack_size') }}"> Pack Size </a>
                    </li>
                    <li class="{{ Route::is('admin.pack_price*') ? 'active' : '' }}">
                        <a href="{{ url('admin/pack_price') }}"> Pack Price</a>
                    </li>
                    <li class="{{ Route::is('admin.pack_order*') ? 'active' : '' }}">
                        <a href="{{ url('admin/pack_order') }}"> Pack Order </a>
                    </li>

                </ul>
            </li>
            <li class="menu {{ Route::is('*invoice*') ? 'active' : '' }}">
                <a href="#invoice" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-dollar-sign">
                            <line x1="12" y1="1" x2="12" y2="23"></line>
                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                        </svg>
                        <span>Invoice</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="invoice" data-bs-parent="#accordionExample">
                    {{-- <li class="{{ Route::is('admin.terms-condition*') ? 'active' : '' }}">
                        <a href="{{ url('admin/terms-condition') }}">Terms Conditions</a>
                    </li> --}}
                    <li>
                        <a href="{{ url('admin/poroforma-invoice') }}">P.I. Invoice </a>
                    </li>
                    <li>
                        <a href=""> Add </a>
                    </li>
                    <li>
                        <a href=""> Edit </a>
                    </li>
                </ul>
            </li>

            <li class="menu">
                <a href="{{ url('admin/terms-condition') }}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-map">
                            <polygon points="1 6 1 22 8 18 16 22 23 18 23 2 16 6 8 2 1 6"></polygon>
                            <line x1="8" y1="2" x2="8" y2="18"></line>
                            <line x1="16" y1="6" x2="16" y2="22"></line>
                        </svg>
                        <span>Terms and Condition</span>
                    </div>
                </a>
            </li>

            {{-- <li class="menu {{ Route::is('admin.port*') ? 'active' : '' }}">
                <a href="{{ url('admin/port') }}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-pie-chart">
                            <path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path>
                            <path d="M22 12A10 10 0 0 0 12 2v10z"></path>
                        </svg>
                        <span>Port</span>
                    </div>
                </a>
            </li> --}}

            <li class="menu">
                <a href="{{url('admin/bank_benificiary')}}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-airplay">
                            <path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1">
                            </path>
                            <polygon points="12 15 17 21 7 21 12 15"></polygon>
                        </svg>
                        <span>Bank Benificiary</span>
                    </div>
                </a>
            </li>
            <li class="menu {{ Route::is('*report*') ? 'active' : '' }}">
                <a href="#reports" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-activity">
                            <circle cx="8" cy="21" r="2"></circle>
                            <circle cx="20" cy="21" r="2"></circle>
                            <path
                                d="M5.67 6H23l-1.68 8.39a2 2 0 0 1-2 1.61H8.75a2 2 0 0 1-2-1.74L5.23 2.74A2 2 0 0 0 3.25 1H1">
                            </path>
                        </svg>
                        <span>Reports</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ Route::is('*main_order_reports*') ? 'active' : '' }}{{ Route::is('*assaign_order_reports*') ? 'active' : '' }}{{ Route::is('*warehouse_report*') ? 'active' : '' }}{{ Route::is('*buyers_reports*') ? 'active' : '' }} " id="reports" data-bs-parent="#accordionExample">
                    <li>
                        <a href="{{ url('admin/warehouse_report') }}">Warehouse Reports</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/buyers_reports') }}">Buyer Report</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/assaign_order_reports') }}">Assaign Order Report</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/main_order_reports') }}">Main Order Report</a>
                    </li>

                </ul>


            </li>
            <li class="menu {{ Route::is('shiperment_exporter*')? 'active':''  }}">
                <a href="{{ url('admin/shiperment_exporter') }}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-airplay">
                            <path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1">
                            </path>
                            <polygon points="12 15 17 21 7 21 12 15"></polygon>
                        </svg>
                        <span>Shipping and Export</span>
                    </div>
                </a>
            </li>


        </ul>

    </nav>

</div>
