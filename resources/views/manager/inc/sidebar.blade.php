<div class="sidebar-wrapper sidebar-theme">

    <nav id="sidebar"  style="background-color: #FFDEE9;
    background-image: linear-gradient(0deg, #FFDEE9 0%, #B5FFFC 100%);
    ">

        <div class="navbar-nav theme-brand flex-row  text-center ">
            <div class="row text-center">
                <div class="justify-content-center text-center">
                    <nav class="rounded float-center nav-responsive">
                        <a class="navbar-brand" class="" href="{{ url('manager/dashboard') }}">
                        <center>  <img src="{{ asset('assets') }}/img/dhlogo.jpg" class="justify-content-end" width="50"
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
        <ul class="list-unstyled menu-categories" id="accordionExample">


            <li class="menu {{ Route::is('*dashboard.*') ? 'active' : '' }}">
                <a href="{{ url('manager/dashboard') }}" aria-expanded="false" class="dropdown-toggle">
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
            {{-- <li class="menu {{ Route::is('managers.*') ? 'active' : '' }}">
                <a href="{{ url('manager/managers') }}" aria-expanded="false" class="dropdown-toggle">
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
            </li> --}}
            <li class="menu {{ Route::is('payment_info.*') ? 'active' : '' }}">
                <a href="{{ url('manager/payment_info') }}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-activity">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                        <span>Payment</span>
                    </div>
                </a>
            </li>


            {{-- <li class="menu {{ Route::is('*order*') ? 'active' : '' }}">
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
                    <li class="{{ Route::is('order') ? 'active' : '' }}">
                        <a href="{{ url('manager/order') }}">Orders</a>
                    </li>
                </ul>
            </li> --}}
            <li class="menu {{ Route::is('order.*') ? 'active' : '' }}">
                <a href="{{ url('manager/order') }}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-activity">
                            <circle cx="8" cy="21" r="2"></circle>
                            <circle cx="20" cy="21" r="2"></circle>
                            <path
                                d="M5.67 6H23l-1.68 8.39a2 2 0 0 1-2 1.61H8.75a2 2 0 0 1-2-1.74L5.23 2.74A2 2 0 0 0 3.25 1H1">
                            </path>
                        <span>Orders</span>
                    </div>
                </a>
                <li class="menu {{ Route::is('supplier-assign-order.*') ? 'active' : '' }}">
                    <a href="{{ url('manager/supplier-assign-order') }}" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-activity">
                                <circle cx="8" cy="21" r="2"></circle>
                                <circle cx="20" cy="21" r="2"></circle>
                                <path
                                    d="M5.67 6H23l-1.68 8.39a2 2 0 0 1-2 1.61H8.75a2 2 0 0 1-2-1.74L5.23 2.74A2 2 0 0 0 3.25 1H1">
                                </path>
                            <span>Supplier Assign  order</span>
                        </div>
                    </a>
                </li>

            </li>


            {{-- <li class="menu">
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
                    <li>
                        <a href=""> List </a>
                    </li>
                    <li>
                        <a href=""> Preview </a>
                    </li>
                    <li>
                        <a href=""> Add </a>
                    </li>
                    <li>
                        <a href=""> Edit </a>
                    </li>
                </ul>
            </li> --}}
            <li class="menu">
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
                <ul class="collapse submenu list-unstyled" id="reports" data-bs-parent="#accordionExample">
                    <li>
                        <a href=""> Order Type </a>
                    </li>
                    <li>
                        <a href=""> Orders </a>
                    </li>
                </ul>
            </li>

        </ul>

    </nav>

</div>
