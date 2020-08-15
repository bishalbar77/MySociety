{{-- Aside --}}

@php
    $kt_logo_image = 'logo-light.png';
@endphp

@if (config('layout.brand.self.theme') === 'light')
    @php $kt_logo_image = 'logo-dark.png' @endphp
@elseif (config('layout.brand.self.theme') === 'dark')
    @php $kt_logo_image = 'logo-light.png' @endphp
@endif

<div class="aside aside-left {{ Metronic::printClasses('aside', false) }} d-flex flex-column flex-row-auto" id="kt_aside">

    {{-- Brand --}}
    <div class="brand flex-column-auto {{ Metronic::printClasses('brand', false) }}" id="kt_brand">
        <div class="brand-logo">
            <a href="{{ url('/') }}">
                <img alt="{{ config('app.name') }}" src="{{ asset('media/logos/'.$kt_logo_image) }}"/>
            </a>
        </div>

        @if (config('layout.aside.self.minimize.toggle'))
            <button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
                {{ Metronic::getSVG("media/svg/icons/Navigation/Angle-double-left.svg", "svg-icon-xl") }}
            </button>
        @endif

    </div>

    {{-- Aside menu --}}
    <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">

        @if (config('layout.aside.self.display') === false)
            <div class="header-logo">
                <a href="{{ url('/') }}">
                    <img alt="{{ config('app.name') }}" src="{{ asset('media/logos/'.$kt_logo_image) }}"/>
                </a>
            </div>
        @endif

        <div
            id="kt_aside_menu"
            class="nav flex-column aside-menu my-4 {{ Metronic::printClasses('aside_menu', false) }}"
            data-menu-vertical="1" 
            {{ Metronic::printAttrs('aside_menu') }}>

            <ul class="menu-nav">
                <li class="menu-item menu-item-active" aria-haspopup="true">
                    <a href="/" class="menu-link">
                        <span class="svg-icon menu-icon">
                            <i class="fa fa-bars text-primary"></i>
                        </span>
                        <span class="menu-text">Dashboard</span>
                    </a>
                </li>
                <li class="menu-item" aria-haspopup="true">
                    <a href="/admin/users" class="menu-link">
                        <span class="svg-icon menu-icon">
                            <i class="fas fa-user-tie text-info"></i>
                        </span>
                        <span class="menu-text">User Management</span>
                    </a>
                </li> 
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon">
                        <i class="fas fa-user-tie text-success"></i>
                        </span>
                        <span class="menu-text">Residents</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item" aria-haspopup="true">
                                <a href="/residents" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">List Residents</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="/addowner" class="menu-link" >
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Add New Owners</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="/agentscreate" class="menu-link" >
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Add New Tenant</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li> 
                <li class="menu-item" aria-haspopup="true">
                    <a href="/visitor" class="menu-link">
                        <span class="svg-icon menu-icon">
                            <i class="fas fa-users text-danger"></i>
                        </span>
                        <span class="menu-text">Visitors</span>
                    </a>
                </li> 
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon">
                        <i class="fas fa-ticket-alt text-warning"></i>
                        </span>
                        <span class="menu-text">Tickets</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item" aria-haspopup="true">
                                <a href="/ticket" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">List Complaints</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="/addticket" class="menu-link" >
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Raise a Ticket</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon">
                        <i class="fas fa-tools text-info"></i>
                        </span>
                        <span class="menu-text">Staffs</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item" aria-haspopup="true">
                                <a href="/staff" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">List Staff</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="/securitycreate" class="menu-link" >
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Add New Staff</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li> 
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon">
                        <i class="fa fa-cart-arrow-down text-primary"></i>
                        </span>
                        <span class="menu-text">Multi-vendor</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item" aria-haspopup="true">
                                <a href="/Items" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">List Vendors</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="/additem" class="menu-link" >
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Add Vendors</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li> 
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon">
                        <i class="fa fa-shopping-bag text-success"></i>
                        </span>
                        <span class="menu-text">My Market Place</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item" aria-haspopup="true">
                                <a href="/Items" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">My Domains</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="/additem" class="menu-link" >
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Dashboard</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li> 
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon">
                        <i class="fas fa-money-check-alt text-warning"></i>
                        </span>
                        <span class="menu-text">Reports</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item" aria-haspopup="true">
                                <a href="/rent" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Rent Payment</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="/balance" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Balance Sheet</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="/receipts" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Payment Receipts</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="/transactions" class="menu-link" >
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Society Expense</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon">
                        <i class="fas fa-wrench text-info"></i>
                        </span>
                        <span class="menu-text">Settings</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item" aria-haspopup="true">
                                <a href="/changePassword" class="menu-link" >
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Change Password</span>
                                </a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="{{ route('logout') }}" class="menu-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Logout</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li> 
            </ul>
        </div>
    </div>

</div>
