<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- favicon -->

        <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}" type="image/x-icon">
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- icons -->
        <link rel="stylesheet" href="{{ '/vendor/themify-icons/themify-icons.css' }}">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/feather/feather.css') }}">
        <link rel="stylesheet" href="{{ asset('css/mdi/css/materialdesignicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/ti-icons/css/themify-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('css/typicons/src/font/typicons.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/simple-line-icons.css') }}">
    </head>

    <body>
        <div id="app">
            <div class="container-scroller">
                <!-- partial:partials/_navbar.html -->
                <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
                    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
                        <div class="me-3">
                            <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                                data-bs-toggle="minimize">
                                <span class="icon-menu"></span>
                            </button>
                        </div>
                        <div>
                            <a class="navbar-brand brand-logo" href="{{ route('home') }}">
                                <img src="{{ asset('assets/images/logo.png') }}" alt="logo" />
                            </a>
                            <a class="navbar-brand brand-logo-mini" href="{{ route('home') }}">
                                <img src="{{ asset('assets/images/logo.png') }}" alt="logo" />
                            </a>
                        </div>
                    </div>
                    <div class="navbar-menu-wrapper d-flex align-items-top">
                        <ul class="navbar-nav">
                            <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
                                <h1 class="welcome-text">Hello, <span
                                        class="text-black fw-bold">{{ Auth::user()->name }}</span>
                                </h1>
                            </li>
                        </ul>
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item dropdown d-none d-lg-block user-dropdown">
                                <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <img class="img-xs rounded-circle" src="{{ asset('assets/images/profile.png') }}"
                                        alt="Profile image">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                                    aria-labelledby="UserDropdown">
                                    <div class="dropdown-header text-center">
                                        <img class="img-md rounded-circle"
                                            src="{{ asset('assets/images/profile.png') }}" alt="Profile image">
                                        <p class="mb-1 mt-3 font-weight-semibold">{{ Auth::user()->name }}</p>
                                        <p class="fw-light text-muted mb-0">{{ Auth::user()->email }}</p>
                                    </div>
                                    <a class="dropdown-item"><i
                                            class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My
                                        Profile
                                        <span class="badge badge-pill badge-danger">1</span></a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                        <i class="dropdown-item-icon mdi mdi-power text-primary me-2">
                                        </i>Sign Out
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid page-body-wrapper">
                    <!-- partial:../../partials/_settings-panel.html -->
                    <div class="theme-setting-wrapper">
                        <div id="settings-trigger"><i class="ti-settings"></i></div>
                        <div id="theme-settings" class="settings-panel">
                            <i class="settings-close ti-close"></i>
                            <p class="settings-heading">SIDEBAR SKINS</p>
                            <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                                <div class="img-ss rounded-circle bg-light border me-3"></div>Light
                            </div>
                            <div class="sidebar-bg-options" id="sidebar-dark-theme">
                                <div class="img-ss rounded-circle bg-dark border me-3"></div>Dark
                            </div>
                            <p class="settings-heading mt-2">HEADER SKINS</p>
                            <div class="color-tiles mx-0 px-4">
                                <div class="tiles success"></div>
                                <div class="tiles warning"></div>
                                <div class="tiles danger"></div>
                                <div class="tiles info"></div>
                                <div class="tiles dark"></div>
                                <div class="tiles default"></div>
                            </div>
                        </div>
                    </div>
                    <div id="right-sidebar" class="settings-panel">
                        <i class="settings-close ti-close"></i>
                        <div class="tab-content" id="setting-content">
                            <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel"
                                aria-labelledby="todo-section">
                                <div class="add-items d-flex px-3 mb-0">
                                    <form class="form w-100">
                                        <div class="form-group d-flex">
                                            <input type="text" class="form-control todo-list-input"
                                                placeholder="Add To-do">
                                            <button type="submit" class="add btn btn-primary todo-list-add-btn"
                                                id="add-task">Add</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="list-wrapper px-3">
                                    <ul class="d-flex flex-column-reverse todo-list">
                                        <li>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="checkbox" type="checkbox">
                                                    Team review meeting at 3.00 PM
                                                </label>
                                            </div>
                                            <i class="remove ti-close"></i>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="checkbox" type="checkbox">
                                                    Prepare for presentation
                                                </label>
                                            </div>
                                            <i class="remove ti-close"></i>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="checkbox" type="checkbox">
                                                    Resolve all the low priority tickets due today
                                                </label>
                                            </div>
                                            <i class="remove ti-close"></i>
                                        </li>
                                        <li class="completed">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="checkbox" type="checkbox" checked>
                                                    Schedule meeting for next week
                                                </label>
                                            </div>
                                            <i class="remove ti-close"></i>
                                        </li>
                                        <li class="completed">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="checkbox" type="checkbox" checked>
                                                    Project review
                                                </label>
                                            </div>
                                            <i class="remove ti-close"></i>
                                        </li>
                                    </ul>
                                </div>
                                <h4 class="px-3 text-muted mt-5 fw-light mb-0">Events</h4>
                                <div class="events pt-4 px-3">
                                    <div class="wrapper d-flex mb-2">
                                        <i class="ti-control-record text-primary me-2"></i>
                                        <span>Feb 11 2018</span>
                                    </div>
                                    <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
                                    <p class="text-gray mb-0">The total number of sessions</p>
                                </div>
                                <div class="events pt-4 px-3">
                                    <div class="wrapper d-flex mb-2">
                                        <i class="ti-control-record text-primary me-2"></i>
                                        <span>Feb 7 2018</span>
                                    </div>
                                    <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
                                    <p class="text-gray mb-0 ">Call Sarah Graves</p>
                                </div>
                            </div>
                            <!-- To do section tab ends -->
                            <div class="tab-pane fade" id="chats-section" role="tabpanel"
                                aria-labelledby="chats-section">
                                <div class="d-flex align-items-center justify-content-between border-bottom">
                                    <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends
                                    </p>
                                    <small
                                        class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 fw-normal">See
                                        All</small>
                                </div>
                                <ul class="chat-list">
                                    <li class="list active">
                                        <div class="profile"><img src="../../images/faces/face1.jpg" alt="image"><span
                                                class="online"></span></div>
                                        <div class="info">
                                            <p>Thomas Douglas</p>
                                            <p>Available</p>
                                        </div>
                                        <small class="text-muted my-auto">19 min</small>
                                    </li>
                                    <li class="list">
                                        <div class="profile"><img src="../../images/faces/face2.jpg" alt="image"><span
                                                class="offline"></span></div>
                                        <div class="info">
                                            <div class="wrapper d-flex">
                                                <p>Catherine</p>
                                            </div>
                                            <p>Away</p>
                                        </div>
                                        <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                                        <small class="text-muted my-auto">23 min</small>
                                    </li>
                                    <li class="list">
                                        <div class="profile"><img src="../../images/faces/face3.jpg" alt="image"><span
                                                class="online"></span></div>
                                        <div class="info">
                                            <p>Daniel Russell</p>
                                            <p>Available</p>
                                        </div>
                                        <small class="text-muted my-auto">14 min</small>
                                    </li>
                                    <li class="list">
                                        <div class="profile"><img src="../../images/faces/face4.jpg" alt="image"><span
                                                class="offline"></span></div>
                                        <div class="info">
                                            <p>James Richardson</p>
                                            <p>Away</p>
                                        </div>
                                        <small class="text-muted my-auto">2 min</small>
                                    </li>
                                    <li class="list">
                                        <div class="profile"><img src="../../images/faces/face5.jpg" alt="image"><span
                                                class="online"></span></div>
                                        <div class="info">
                                            <p>Madeline Kennedy</p>
                                            <p>Available</p>
                                        </div>
                                        <small class="text-muted my-auto">5 min</small>
                                    </li>
                                    <li class="list">
                                        <div class="profile"><img src="../../images/faces/face6.jpg" alt="image"><span
                                                class="online"></span></div>
                                        <div class="info">
                                            <p>Sarah Graves</p>
                                            <p>Available</p>
                                        </div>
                                        <small class="text-muted my-auto">47 min</small>
                                    </li>
                                </ul>
                            </div>
                            <!-- chat tab ends -->
                        </div>
                    </div>
                    <!-- partial -->
                    <!-- left sidebar -->
                    <nav class="sidebar sidebar-offcanvas" id="sidebar">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}">
                                    <i class="mdi mdi-grid-large menu-icon"></i>
                                    <span class="menu-title">Dashboard</span>
                                </a>
                            </li>
                            <li class="nav-item nav-category">UI Elements</li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
                                    aria-controls="ui-basic">
                                    <i class="menu-icon mdi mdi-floor-plan"></i>
                                    <span class="menu-title">UI Elements</span>
                                    <i class="menu-arrow"></i>
                                </a>
                                <div class="collapse" id="ui-basic">
                                    <ul class="nav flex-column sub-menu">
                                        <li class="nav-item"> <a class="nav-link"
                                                href="../../pages/ui-features/buttons.html">Buttons</a></li>
                                        <li class="nav-item"> <a class="nav-link"
                                                href="../../pages/ui-features/dropdowns.html">Dropdowns</a></li>
                                        <li class="nav-item"> <a class="nav-link"
                                                href="../../pages/ui-features/typography.html">Typography</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item nav-category">Forms and Datas</li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="collapse" href="#form-elements"
                                    aria-expanded="false" aria-controls="form-elements">
                                    <i class="menu-icon mdi mdi-card-text-outline"></i>
                                    <span class="menu-title">Form elements</span>
                                    <i class="menu-arrow"></i>
                                </a>
                                <div class="collapse" id="form-elements">
                                    <ul class="nav flex-column sub-menu">
                                        <li class="nav-item"><a class="nav-link"
                                                href="../../pages/forms/basic_elements.html">Basic
                                                Elements</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false"
                                    aria-controls="charts">
                                    <i class="menu-icon mdi mdi-chart-line"></i>
                                    <span class="menu-title">Charts</span>
                                    <i class="menu-arrow"></i>
                                </a>
                                <div class="collapse" id="charts">
                                    <ul class="nav flex-column sub-menu">
                                        <li class="nav-item"> <a class="nav-link"
                                                href="../../pages/charts/chartjs.html">ChartJs</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false"
                                    aria-controls="tables">
                                    <i class="menu-icon mdi mdi-table"></i>
                                    <span class="menu-title">Tables</span>
                                    <i class="menu-arrow"></i>
                                </a>
                                <div class="collapse" id="tables">
                                    <ul class="nav flex-column sub-menu">
                                        <li class="nav-item"> <a class="nav-link"
                                                href="../../pages/tables/basic-table.html">Basic
                                                table</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false"
                                    aria-controls="icons">
                                    <i class="menu-icon mdi mdi-layers-outline"></i>
                                    <span class="menu-title">Icons</span>
                                    <i class="menu-arrow"></i>
                                </a>
                                <div class="collapse" id="icons">
                                    <ul class="nav flex-column sub-menu">
                                        <li class="nav-item"> <a class="nav-link" href="../../pages/icons/mdi.html">Mdi
                                                icons</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item nav-category">pages</li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false"
                                    aria-controls="auth">
                                    <i class="menu-icon mdi mdi-account-circle-outline"></i>
                                    <span class="menu-title">User Pages</span>
                                    <i class="menu-arrow"></i>
                                </a>
                                <div class="collapse" id="auth">
                                    <ul class="nav flex-column sub-menu">
                                        <li class="nav-item"> <a class="nav-link" href="../../pages/samples/login.html">
                                                Login </a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item nav-category">help</li>
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="http://bootstrapdash.com/demo/star-admin2-free/docs/documentation.html">
                                    <i class="menu-icon mdi mdi-file-document"></i>
                                    <span class="menu-title">Documentation</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- partial -->
                    <div class="main-panel">
                        <div class="content-wrapper">
                            <div class="row">
                                <main>
                                    @yield('content')
                                </main>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block"><a
                        href="{{ route('home') }}">SISPRES</a></span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">
                    Copyright ?? {{ date('Y') }}.</span>
            </div>
        </footer>
        <!-- partial -->
        </div>
        <!-- main-panel ends -->
        <script src="{{ asset('app.js') }}"></script>
        <script src="{{ asset('js/jquery-3.6.1.min.js') }}"></script>
        <script src="{{ asset('js/chart.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
        <script src="{{ asset('js/perfect-scrollbar/dist/perfect-scrollbar.min.js') }}"></script>

        <script src="{{ asset('js/off-canvas.js') }}"></script>
        <script src="{{ asset('js/hoverable-collapse.js') }}"></script>
        <script src="{{ asset('js/template.js') }}"></script>
        <script src="{{ asset('js/settings.js') }}"></script>
        <script src="{{ asset('js/todolist.js') }}"></script>

        <script src="{{ asset('js/jquery.cookie.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/dashboard.js') }}"></script>
        <script src="{{ asset('js/Chart.roundedBarCharts.js') }}"></script>
    </body>

</html>
