<div class="preloader" id="preloader">
    <div class="preloader">
        <div class="waviy position-relative">
            <span class="d-inline-block">U</span>
            <span class="d-inline-block">N</span>
            <span class="d-inline-block">I</span>
            <span class="d-inline-block">B</span>
            <span class="d-inline-block">A</span>
        </div>
    </div>
</div>

<div class="sidebar-area" id="sidebar-area">
    <div class="logo position-relative">
        <a href="#" class="d-flex align-items-center justify-content-center text-decoration-none">
            <img src="{{ asset('assets/logo.png') }}" alt="logo-icon" width="90" />
        </a>
        <button
            class="sidebar-burger-menu bg-transparent p-0 border-0 opacity-0 z-n1 position-absolute top-50 end-0 translate-middle-y"
            id="sidebar-burger-menu">
            <i data-feather="x"></i>
        </button>
    </div>
    <aside id="layout-menu" class="layout-menu menu-vertical menu active" data-simplebar>
        <ul class="menu-inner">
            <li class="menu-item ">
                <a href="{{ route('dashboard') }}"
                    class="menu-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                    <i data-feather="grid" class="menu-icon tf-icons"></i>
                    <span class="title">Dashboard</span> 
                </a>
            </li>
            <li class="menu-title small text-uppercase">
                <span class="menu-title-text">APPS</span>
            </li>
            <li class="menu-item">
                <a href="javascript:void(0);"
                    class="menu-link menu-toggle {{ request()->is(['kategori', 'info']) ? 'active' : '' }}">
                    <i data-feather="folder-minus" class="menu-icon tf-icons"></i>
                    <span class="title">Berita</span>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item {{ request()->is('kategori*') ? 'active' : '' }}">
                        <a href="/kategori" class="menu-link"> Kategori </a>
                    </li>
                    <li class="menu-item {{ request()->is('info*') ? 'active' : '' }}">
                        <a href="/info" class="menu-link"> Informasi </a>
                    </li>
                </ul>
            </li>
            <li class="menu-item {{ request()->is('info-beasiswa*') ? 'active' : '' }}">
                <a href="{{ url('info-beasiswa') }}" class="menu-link">
                    <i data-feather="monitor" class="menu-icon tf-icons"></i>
                    <span class="title">Beasiswa</span>
                </a>
            </li>
            <li class="menu-item {{ request()->is('jalur-penerimaan*') ? 'active' : '' }}">
                <a href="{{ url('/jalur-penerimaan') }}" class="menu-link">
                    <i data-feather="calendar" class="menu-icon tf-icons"></i>
                    <span class="title">Jalur Penerimaan</span>
                </a>
            </li>

            <li class="menu-item {{ request()->is('team-pmb*') ? 'active' : '' }}">
                <a href="{{ url('/team-pmb') }}" class="menu-link">
                    <i data-feather="file-text" class="menu-icon tf-icons"></i>
                    <span class="title">Tim PMB</span>
                </a>
            </li>
            <li class="menu-title small text-uppercase">
                <span class="menu-title-text">Settings & Others</span>
            </li>
            <li class="menu-item">
                <a href="to-do.html" class="menu-link">
                    <i data-feather="settings" class="menu-icon tf-icons"></i>
                    <span class="title">Settings</span>
                </a>
            </li>
        </ul>
    </aside>
</div>



<div class="container-fluid">
    <div class="main-content d-flex flex-column">
        <header class="header-area bg-white mb-4 rounded-bottom-10" id="header-area">
            <div class="row align-items-center">
                <div class="col-lg-4 col-sm-6 col-md-4">
                    <div class="left-header-content">
                        <ul
                            class="d-flex align-items-center ps-0 mb-0 list-unstyled justify-content-center justify-content-sm-start">
                            <li>
                                <button class="header-burger-menu bg-transparent p-0 border-0" id="header-burger-menu">
                                    <i data-feather="menu"></i>
                                </button>
                            </li>
                            <li>
                                <form class="src-form position-relative">
                                    <input type="text" class="form-control" placeholder="Search here.." />
                                    <button type="submit"
                                        class="src-btn position-absolute top-50 end-0 translate-middle-y bg-transparent p-0 border-0">
                                        <i data-feather="search"></i>
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-sm-6 col-md-8">
                    <div class="right-header-content mt-2 mt-sm-0">
                        <ul
                            class="d-flex align-items-center justify-content-center justify-content-sm-end ps-0 mb-0 list-unstyled">
                            {{-- <li class="header-right-item">
                                <div class="dropdown notifications language">
                                    <button class="btn btn-secondary border-0 p-0 position-relative" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{ asset('') }}assets/images/united-states.jpg"
                                            class="rounded-circle wh-22" alt="united-states" />
                                    </button>
                                    <div class="dropdown-menu dropdown-lg p-0 border-0 p-4">
                                        <div class="notification-menu">
                                            <a href="notification.html" class="dropdown-item p-0">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <img src="{{ asset('') }}assets/images/united-states.jpg"
                                                            class="wh-22 rounded-circle" alt="united-states" />
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h4>English</h4>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </li> --}}
                            <li class="header-right-item">
                                <div class="dropdown notifications email">
                                    <button class="btn btn-secondary border-0 p-0 position-relative" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i data-feather="mail"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-lg p-0 border-0 p-4">
                                        <h5
                                            class="m-0 p-0 fw-bold d-flex justify-content-between align-items-center border-bottom pb-3 mb-4">
                                            <span>Email </span>
                                            <button class="p-0 m-0 bg-transparent border-0">
                                                Clear All
                                            </button>
                                        </h5>
                                        <div class="notification-menu">
                                            <a href="notification.html" class="dropdown-item p-0">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <img src="{{ asset('') }}assets/images/pdf.svg"
                                                            alt="pdf" />
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h4>Help/Support Desk</h4>
                                                        <span>11:47 PM Wednesday</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="notification-menu">
                                            <a href="notification.html" class="dropdown-item p-0">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <img src="{{ asset('') }}assets/images/notifications-1.jpg"
                                                            alt="notifications" />
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h4>Create a new project for client</h4>
                                                        <span>April, 18</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="notification-menu mb-0">
                                            <a href="notification.html" class="dropdown-item p-0">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <img src="{{ asset('') }}assets/images/notifications-2.jpg"
                                                            alt="notifications" />
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h4>Project Management</h4>
                                                        <span>April, 19</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <a href="notification.html"
                                            class="dropdown-item text-center text-primary d-block view-all pt-3 pb-0 fw-semibold">
                                            View All
                                            <i data-feather="chevron-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="header-right-item">
                                <div class="dropdown notifications noti">
                                    <button class="btn btn-secondary border-0 p-0 position-relative badge"
                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i data-feather="bell"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-lg p-0 border-0 p-4">
                                        <h5
                                            class="m-0 p-0 fw-bold d-flex justify-content-between align-items-center border-bottom pb-3 mb-4">
                                            <span>Notifications </span>
                                            <button class="p-0 m-0 bg-transparent border-0">
                                                Clear All
                                            </button>
                                        </h5>
                                        <div class="notification-menu">
                                            <a href="notification.html" class="dropdown-item p-0">
                                                <h4>8 Invoices have been paid</h4>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <img src="{{ asset('') }}assets/images/pdf.svg"
                                                            alt="pdf" />
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <p>Invoices have been paid to the company.</p>
                                                    </div>
                                                </div>
                                                <span>11:47 PM Wednesday</span>
                                            </a>
                                        </div>
                                        <div class="notification-menu mb-0">
                                            <a href="notification.html" class="dropdown-item p-0">
                                                <h4>Create a new project for client</h4>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <img src="{{ asset('') }}assets/images/notifications-1.jpg"
                                                            alt="notifications" />
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <p>
                                                            Allow users to like products in your
                                                            WooCommerce
                                                        </p>
                                                    </div>
                                                </div>
                                                <span>April, 18</span>
                                            </a>
                                        </div>
                                        <a href="notification.html"
                                            class="dropdown-item text-center text-primary d-block view-all pt-3 pb-0 fw-semibold">
                                            View All
                                            <i data-feather="chevron-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="header-right-item d-none d-md-block">
                                <div class="today-date">
                                    <span id="digitalDate"></span>
                                    <i data-feather="calendar"></i>
                                </div>
                            </li>
                            <li class="header-right-item">
                                <div class="dropdown admin-profile">
                                    <div class="d-xxl-flex align-items-center bg-transparent border-0 text-start p-0 cursor"
                                        data-bs-toggle="dropdown">
                                        <div class="flex-shrink-0">
                                            <img class="rounded-circle wh-54"
                                                src="{{ asset('') }}assets/noprofile.jpg" alt="admin" />
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-none d-xxl-block">
                                                    <span class="degeneration">Admin</span>
                                                    <div class="d-flex align-content-center">
                                                        <h3>Admin</h3>
                                                        <div class="down">
                                                            <i data-feather="chevron-down"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="dropdown-menu border-0 bg-white w-100 admin-link">
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center text-body"
                                                href="profile.html">
                                                <i data-feather="user"></i>
                                                <span class="ms-2">Profile</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center text-body"
                                                href="account.html">
                                                <i data-feather="settings"></i>
                                                <span class="ms-2">Setting</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center text-body"
                                                href="logout.html">
                                                <i data-feather="log-out"></i>
                                                <span class="ms-2">Logout</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
