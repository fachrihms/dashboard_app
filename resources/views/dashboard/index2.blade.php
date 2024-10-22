<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
  <title>NQ Dashboard</title>
  <link rel="icon" type="image/x-icon" href="./src/assets/img/favicon.ico" />
  <link href="{{asset('layouts/vertical-dark-menu/css/light/loader.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('layouts/vertical-dark-menu/css/dark/loader.css')}}" rel="stylesheet" type="text/css" />
  <script src="{{asset('layouts/vertical-dark-menu/loader.js')}}"></script>
  <!-- BEGIN GLOBAL MANDATORY STYLES -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
  <link href="src/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="{{asset('layouts/vertical-dark-menu/css/light/plugins.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('layouts/vertical-dark-menu/css/dark/plugins.css')}}" rel="stylesheet" type="text/css" />
  <!-- END GLOBAL MANDATORY STYLES -->

  <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
  <link href="{{asset('src/plugins/src/apex/apexcharts.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('src/assets/css/light/components/list-group.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('src/assets/css/light/dashboard/dash_2.css')}}" rel="stylesheet" type="text/css" />

  <link href="{{asset('src/assets/css/dark/components/list-group.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('src/assets/css/dark/dashboard/dash_2.css')}}" rel="stylesheet" type="text/css" />
  <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

</head>

<body class=" layout-boxed">
  <!-- BEGIN LOADER -->
  <div id="load_screen">
    <div class="loader">
      <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
      </div>
    </div>
  </div>
  <!--  END LOADER -->

  <!--  BEGIN NAVBAR  -->
  <div class="header-container container-xxl">
    <header class="header navbar navbar-expand-sm expand-header">

      <a href="javascript:void(0);" class="sidebarCollapse">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
          class="feather feather-menu">
          <line x1="3" y1="12" x2="21" y2="12"></line>
          <line x1="3" y1="6" x2="21" y2="6"></line>
          <line x1="3" y1="18" x2="21" y2="18"></line>
        </svg>
      </a>

      <div class="search-animated toggle-search">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
          class="feather feather-search">
          <circle cx="11" cy="11" r="8"></circle>
          <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
        </svg>
        <form class="form-inline search-full form-inline search" role="search">
          <div class="search-bar">
            <input type="text" class="form-control search-form-control  ml-lg-auto" placeholder="Search...">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="feather feather-x search-close">
              <line x1="18" y1="6" x2="6" y2="18"></line>
              <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
          </div>
        </form>
        <span class="badge badge-secondary">Ctrl + /</span>
      </div>

      <ul class="navbar-item flex-row ms-lg-auto ms-0">

        
        <li class="nav-item dropdown language-dropdown">  <!-- Bendera Bahasa -->
          <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="language-dropdown"
            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="./src/assets/img/1x1/id.svg" class="flag-width" alt="flag">
          </a>
          <div class="dropdown-menu position-absolute" aria-labelledby="language-dropdown">
            <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="./src/assets/img/1x1/id.svg"
                class="flag-width" alt="flag"> <span class="align-self-center">&nbsp;Indonesia</span></a>
            <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="./src/assets/img/1x1/sa.webp"
                class="flag-width" alt="flag"> <span class="align-self-center">&nbsp;Arab</span></a>
            <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="./src/assets/img/1x1/us.svg"
                class="flag-width" alt="flag"> <span class="align-self-center">&nbsp;English</span></a>            
          </div>
        </li>

        <li class="nav-item theme-toggle-item">
          <a href="javascript:void(0);" class="nav-link theme-toggle">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="feather feather-moon dark-mode">
              <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="feather feather-sun light-mode">
              <circle cx="12" cy="12" r="5"></circle>
              <line x1="12" y1="1" x2="12" y2="3"></line>
              <line x1="12" y1="21" x2="12" y2="23"></line>
              <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
              <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
              <line x1="1" y1="12" x2="3" y2="12"></line>
              <line x1="21" y1="12" x2="23" y2="12"></line>
              <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
              <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
            </svg>
          </a>
        </li>

        <li class="nav-item dropdown notification-dropdown">
          <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="notificationDropdown"
            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="feather feather-bell">
              <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
              <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
            </svg><span class="badge badge-success"></span>
          </a>

          <div class="dropdown-menu position-absolute" aria-labelledby="notificationDropdown">
            <div class="drodpown-title message">
              <h6 class="d-flex justify-content-between"><span class="align-self-center">Messages</span> <span
                  class="badge badge-primary">9 Unread</span></h6>
            </div>
            <div class="notification-scroll">
              <div class="dropdown-item">
                <div class="media server-log">
                  <img src="./src/assets/img/profile-16.jpeg" class="img-fluid me-2" alt="avatar">
                  <div class="media-body">
                    <div class="data-info">
                      <h6 class="">Kara Young</h6>
                      <p class="">1 hr ago</p>
                    </div>

                    <div class="icon-status">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-x">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                      </svg>
                    </div>
                  </div>
                </div>
              </div>

              <div class="dropdown-item">
                <div class="media ">
                  <img src="./src/assets/img/profile-15.jpeg" class="img-fluid me-2" alt="avatar">
                  <div class="media-body">
                    <div class="data-info">
                      <h6 class="">Daisy Anderson</h6>
                      <p class="">8 hrs ago</p>
                    </div>

                    <div class="icon-status">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-x">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                      </svg>
                    </div>
                  </div>
                </div>
              </div>

              <div class="dropdown-item">
                <div class="media file-upload">
                  <img src="./src/assets/img/profile-21.jpeg" class="img-fluid me-2" alt="avatar">
                  <div class="media-body">
                    <div class="data-info">
                      <h6 class="">Oscar Garner</h6>
                      <p class="">14 hrs ago</p>
                    </div>

                    <div class="icon-status">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-x">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                      </svg>
                    </div>
                  </div>
                </div>
              </div>

              <div class="drodpown-title notification mt-2">
                <h6 class="d-flex justify-content-between"><span class="align-self-center">Notifications</span> <span
                    class="badge badge-secondary">16 New</span></h6>
              </div>

              <div class="dropdown-item">
                <div class="media server-log">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-server">
                    <rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect>
                    <rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect>
                    <line x1="6" y1="6" x2="6" y2="6"></line>
                    <line x1="6" y1="18" x2="6" y2="18"></line>
                  </svg>
                  <div class="media-body">
                    <div class="data-info">
                      <h6 class="">Server Rebooted</h6>
                      <p class="">45 min ago</p>
                    </div>

                    <div class="icon-status">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-x">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                      </svg>
                    </div>
                  </div>
                </div>
              </div>

              <div class="dropdown-item">
                <div class="media file-upload">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-file-text">
                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                    <polyline points="14 2 14 8 20 8"></polyline>
                    <line x1="16" y1="13" x2="8" y2="13"></line>
                    <line x1="16" y1="17" x2="8" y2="17"></line>
                    <polyline points="10 9 9 9 8 9"></polyline>
                  </svg>
                  <div class="media-body">
                    <div class="data-info">
                      <h6 class="">Kelly Portfolio.pdf</h6>
                      <p class="">670 kb</p>
                    </div>

                    <div class="icon-status">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-x">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                      </svg>
                    </div>
                  </div>
                </div>
              </div>

              <div class="dropdown-item">
                <div class="media ">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-heart">
                    <path
                      d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                    </path>
                  </svg>
                  <div class="media-body">
                    <div class="data-info">
                      <h6 class="">Licence Expiring Soon</h6>
                      <p class="">8 hrs ago</p>
                    </div>

                    <div class="icon-status">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-x">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                      </svg>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>

        </li>

        <li class="nav-item dropdown user-profile-dropdown  order-lg-0 order-1">
          <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown"
            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="avatar-container">
              <div class="avatar avatar-sm avatar-indicators avatar-online">
                <img alt="avatar" src="./src/assets/img/profile-30.png" class="rounded-circle">
              </div>
            </div>
          </a>

          <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
            <div class="user-profile-section">
              <div class="media mx-auto">
                <div class="emoji me-2">
                  &#x1F44B;
                </div>
                <div class="media-body">
                  <h5>Shaun Park</h5>
                  <p>Project Leader</p>
                </div>
              </div>
            </div>
            <div class="dropdown-item">
              <a href="user-profile.html">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="feather feather-user">
                  <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                  <circle cx="12" cy="7" r="4"></circle>
                </svg> <span>Profile</span>
              </a>
            </div>
            <div class="dropdown-item">
              <a href="app-mailbox.html">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="feather feather-inbox">
                  <polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline>
                  <path
                    d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z">
                  </path>
                </svg> <span>Inbox</span>
              </a>
            </div>
            <div class="dropdown-item">
              <a href="auth-boxed-lockscreen.html">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="feather feather-lock">
                  <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                  <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                </svg> <span>Lock Screen</span>
              </a>
            </div>
            <div class="dropdown-item">
              <a href="index.html">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="feather feather-log-out">
                  <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                  <polyline points="16 17 21 12 16 7"></polyline>
                  <line x1="21" y1="12" x2="9" y2="12"></line>
                </svg> <span>Log Out</span>
              </a>
            </div>
          </div>

        </li>
      </ul>
    </header>
  </div>
  <!--  END NAVBAR  -->

  <!--  BEGIN MAIN CONTAINER  -->
  <div class="main-container " id="container">

    <div class="overlay"></div>
    <div class="search-overlay"></div>

    <!--  BEGIN SIDEBAR  -->
    <div class="sidebar-wrapper sidebar-theme">

      <nav id="sidebar">

        <div class="navbar-nav theme-brand flex-row  text-center">
          <div class="nav-logo">
            <div class="nav-item theme-logo">
              <a href="./index.html">
                <img src="./src/assets/img/Logo-NQ-3D-1.png">
              </a>
            </div>
            <div class="nav-item theme-text">
              <a href="./index.html" class="nav-link"> NQ </a>
            </div>
          </div>
          <div class="nav-item sidebar-toggle">
            <div class="btn-toggle sidebarCollapse">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-chevrons-left">
                <polyline points="11 17 6 12 11 7"></polyline>
                <polyline points="18 17 13 12 18 7"></polyline>
              </svg>
            </div>
          </div>
        </div>        
        <div class="shadow-bottom"></div>
        
        <ul class="list-unstyled menu-categories" id="accordionExample">  <!-- MENU BAR SEBELAH KIRI -->
          <li class="menu active">
            <a href="#dashboard" data-bs-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
              <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="feather feather-home">
                  <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                  <polyline points="9 22 9 12 15 12 15 22"></polyline>
                </svg>
                <span>NQ Dashboard</span>
              </div>
              <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="feather feather-chevron-right">
                  <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
              </div>
            </a>
            <ul class="collapse submenu list-unstyled show" id="dashboard" data-bs-parent="#accordionExample">
              <li>
                <a href="{{ route('user') }}"> User </a>
              </li>
              <li>
                <a href="{{ route('paket') }}"> Paket </a>
              </li>
              <li>
                <a href="{{route('produk')}}"> Produk </a>
              </li>
              <li>
                <a href="{{route('artikel')}}"> Artikel </a>
              </li>
            </ul>
          </li>
        </ul>

      </nav>

    </div>
    <!--  END SIDEBAR  -->

    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
      <div class="layout-px-spacing">

          <div class="middle-content container-xxl p-0">
              <div class="row">
              
                  <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                      <div class="statbox widget box box-shadow">
                          <div class="widget-content widget-content-area">
                              <table id="html5-extension" class="table dt-table-hover" style="width:100%">
                                  <thead>
                                      <tr>
                                          <th>Nama</th>
                                          <th>Email</th>
                                          <th>Tanggal lahir</th>
                                          <th>Kode voucher</th>
                                          <th>Expired</th>
                                          <th>Salary</th>
                                          <th>Extn.</th>
                                          <th>Image</th>
                                          <th>Action</th>
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
                                          <td>5421</td>
                                          <td>
                                              <div class="d-flex">
                                                  <div class="usr-img-frame mr-2 rounded-circle">
                                                      <img alt="avatar" class="img-fluid rounded-circle" src="./src/assets/img/boy.png">
                                                  </div>
                                              </div>
                                          </td>
                                          <td>
                                              <div class="btn-group">
                                                  <button type="button" class="btn btn-dark btn-sm">Open</button>
                                                  <button type="button" class="btn btn-dark btn-sm dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                                  </button>
                                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuReference1">
                                                      <a class="dropdown-item" href="#">Action</a>
                                                      <a class="dropdown-item" href="#">Another action</a>
                                                      <a class="dropdown-item" href="#">Something else here</a>
                                                      <div class="dropdown-divider"></div>
                                                      <a class="dropdown-item" href="#">Separated link</a>
                                                  </div>
                                              </div>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>Garrett Winters</td>
                                          <td>Accountant</td>
                                          <td>Tokyo</td>
                                          <td>63</td>
                                          <td>2011/07/25</td>
                                          <td>$170,750</td>
                                          <td>8422</td>
                                          <td>
                                              <div class="d-flex">
                                                  <div class="usr-img-frame mr-2 rounded-circle">
                                                      <img alt="avatar" class="img-fluid rounded-circle" src="./src/assets/img/boy.png">
                                                  </div>
                                              </div>
                                          </td>
                                          <td>
                                              <div class="btn-group">
                                                  <button type="button" class="btn btn-dark btn-sm">Open</button>
                                                  <button type="button" class="btn btn-dark btn-sm dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                                  </button>
                                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuReference2">
                                                      <a class="dropdown-item" href="#">Action</a>
                                                      <a class="dropdown-item" href="#">Another action</a>
                                                      <a class="dropdown-item" href="#">Something else here</a>
                                                      <div class="dropdown-divider"></div>
                                                      <a class="dropdown-item" href="#">Separated link</a>
                                                  </div>
                                                  </div>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>Ashton Cox</td>
                                          <td>Junior Technical Author</td>
                                          <td>San Francisco</td>
                                          <td>66</td>
                                          <td>2009/01/12</td>
                                          <td>$86,000</td>
                                          <td>1562</td>
                                          <td>
                                              <div class="d-flex">
                                                  <div class="usr-img-frame mr-2 rounded-circle">
                                                      <img alt="avatar" class="img-fluid rounded-circle" src="./src/assets/img/boy-2.png">
                                                  </div>
                                              </div>
                                          </td>
                                          <td>
                                              <div class="btn-group">
                                                  <button type="button" class="btn btn-dark btn-sm">Open</button>
                                                  <button type="button" class="btn btn-dark btn-sm dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                                  </button>
                                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuReference3">
                                                      <a class="dropdown-item" href="#">Action</a>
                                                      <a class="dropdown-item" href="#">Another action</a>
                                                      <a class="dropdown-item" href="#">Something else here</a>
                                                      <div class="dropdown-divider"></div>
                                                      <a class="dropdown-item" href="#">Separated link</a>
                                                  </div>
                                                  </div>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>Cedric Kelly</td>
                                          <td>Senior Javascript Developer</td>
                                          <td>Edinburgh</td>
                                          <td>22</td>
                                          <td>2012/03/29</td>
                                          <td>$433,060</td>
                                          <td>6224</td>
                                          <td>
                                              <div class="d-flex">
                                                  <div class="usr-img-frame mr-2 rounded-circle">
                                                      <img alt="avatar" class="img-fluid rounded-circle" src="./src/assets/img/boy.png">
                                                  </div>
                                              </div>
                                          </td>
                                          <td>
                                              <div class="btn-group">
                                                  <button type="button" class="btn btn-dark btn-sm">Open</button>
                                                  <button type="button" class="btn btn-dark btn-sm dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference4" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                                  </button>
                                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuReference4">
                                                      <a class="dropdown-item" href="#">Action</a>
                                                      <a class="dropdown-item" href="#">Another action</a>
                                                      <a class="dropdown-item" href="#">Something else here</a>
                                                      <div class="dropdown-divider"></div>
                                                      <a class="dropdown-item" href="#">Separated link</a>
                                                  </div>
                                                  </div>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>Airi Satou</td>
                                          <td>Accountant</td>
                                          <td>Tokyo</td>
                                          <td>33</td>
                                          <td>2008/11/28</td>
                                          <td>$162,700</td>
                                          <td>5407</td>
                                          <td>
                                              <div class="d-flex">
                                                  <div class="usr-img-frame mr-2 rounded-circle">
                                                      <img alt="avatar" class="img-fluid rounded-circle" src="./src/assets/img/girl-1.png">
                                                  </div>
                                              </div>
                                          </td>
                                          <td>
                                              <div class="btn-group">
                                                  <button type="button" class="btn btn-dark btn-sm">Open</button>
                                                  <button type="button" class="btn btn-dark btn-sm dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference5" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                                  </button>
                                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuReference5">
                                                      <a class="dropdown-item" href="#">Action</a>
                                                      <a class="dropdown-item" href="#">Another action</a>
                                                      <a class="dropdown-item" href="#">Something else here</a>
                                                      <div class="dropdown-divider"></div>
                                                      <a class="dropdown-item" href="#">Separated link</a>
                                                  </div>
                                                  </div>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>Brielle Williamson</td>
                                          <td>Integration Specialist</td>
                                          <td>New York</td>
                                          <td>61</td>
                                          <td>2012/12/02</td>
                                          <td>$372,000</td>
                                          <td>4804</td>
                                          <td>
                                              <div class="d-flex">
                                                  <div class="usr-img-frame mr-2 rounded-circle">
                                                      <img alt="avatar" class="img-fluid rounded-circle" src="./src/assets/img/boy.png">
                                                  </div>
                                              </div>
                                          </td>
                                          <td>
                                              <div class="btn-group">
                                                  <button type="button" class="btn btn-dark btn-sm">Open</button>
                                                  <button type="button" class="btn btn-dark btn-sm dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                                  </button>
                                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuReference6">
                                                      <a class="dropdown-item" href="#">Action</a>
                                                      <a class="dropdown-item" href="#">Another action</a>
                                                      <a class="dropdown-item" href="#">Something else here</a>
                                                      <div class="dropdown-divider"></div>
                                                      <a class="dropdown-item" href="#">Separated link</a>
                                                  </div>
                                                  </div>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>Herrod Chandler</td>
                                          <td>Sales Assistant</td>
                                          <td>San Francisco</td>
                                          <td>59</td>
                                          <td>2012/08/06</td>
                                          <td>$137,500</td>
                                          <td>9608</td>
                                          <td>
                                              <div class="d-flex">
                                                  <div class="usr-img-frame mr-2 rounded-circle">
                                                      <img alt="avatar" class="img-fluid rounded-circle" src="./src/assets/img/boy.png">
                                                  </div>
                                              </div>
                                          </td>
                                          <td>
                                              <div class="btn-group">
                                                  <button type="button" class="btn btn-dark btn-sm">Open</button>
                                                  <button type="button" class="btn btn-dark btn-sm dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference7" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                                  </button>
                                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuReference7">
                                                      <a class="dropdown-item" href="#">Action</a>
                                                      <a class="dropdown-item" href="#">Another action</a>
                                                      <a class="dropdown-item" href="#">Something else here</a>
                                                      <div class="dropdown-divider"></div>
                                                      <a class="dropdown-item" href="#">Separated link</a>
                                                  </div>
                                                  </div>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>Rhona Davidson</td>
                                          <td>Integration Specialist</td>
                                          <td>Tokyo</td>
                                          <td>55</td>
                                          <td>2010/10/14</td>
                                          <td>$327,900</td>
                                          <td>6200</td>
                                          <td>
                                              <div class="d-flex">
                                                  <div class="usr-img-frame mr-2 rounded-circle">
                                                      <img alt="avatar" class="img-fluid rounded-circle" src="./src/assets/img/girl-3.png">
                                                  </div>
                                              </div>
                                          </td>
                                          <td>
                                              <div class="btn-group">
                                                  <button type="button" class="btn btn-dark btn-sm">Open</button>
                                                  <button type="button" class="btn btn-dark btn-sm dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference8" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                                  </button>
                                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuReference8">
                                                      <a class="dropdown-item" href="#">Action</a>
                                                      <a class="dropdown-item" href="#">Another action</a>
                                                      <a class="dropdown-item" href="#">Something else here</a>
                                                      <div class="dropdown-divider"></div>
                                                      <a class="dropdown-item" href="#">Separated link</a>
                                                  </div>
                                                  </div>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>Colleen Hurst</td>
                                          <td>Javascript Developer</td>
                                          <td>San Francisco</td>
                                          <td>39</td>
                                          <td>2009/09/15</td>
                                          <td>$205,500</td>
                                          <td>2360</td>
                                          <td>
                                              <div class="d-flex">
                                                  <div class="usr-img-frame mr-2 rounded-circle">
                                                      <img alt="avatar" class="img-fluid rounded-circle" src="./src/assets/img/boy.png">
                                                  </div>
                                              </div>
                                          </td>
                                          <td>
                                              <div class="btn-group">
                                                  <button type="button" class="btn btn-dark btn-sm">Open</button>
                                                  <button type="button" class="btn btn-dark btn-sm dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference9" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                                  </button>
                                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuReference9">
                                                      <a class="dropdown-item" href="#">Action</a>
                                                      <a class="dropdown-item" href="#">Another action</a>
                                                      <a class="dropdown-item" href="#">Something else here</a>
                                                      <div class="dropdown-divider"></div>
                                                      <a class="dropdown-item" href="#">Separated link</a>
                                                  </div>
                                                  </div>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>Sonya Frost</td>
                                          <td>Software Engineer</td>
                                          <td>Edinburgh</td>
                                          <td>23</td>
                                          <td>2008/12/13</td>
                                          <td>$103,600</td>
                                          <td>1667</td>
                                          <td>
                                              <div class="d-flex">
                                                  <div class="usr-img-frame mr-2 rounded-circle">
                                                      <img alt="avatar" class="img-fluid rounded-circle" src="./src/assets/img/girl-2.png">
                                                  </div>
                                              </div>
                                          </td>
                                          <td>
                                              <div class="btn-group">
                                                  <button type="button" class="btn btn-dark btn-sm">Open</button>
                                                  <button type="button" class="btn btn-dark btn-sm dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference10" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                                  </button>
                                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuReference10">
                                                      <a class="dropdown-item" href="#">Action</a>
                                                      <a class="dropdown-item" href="#">Another action</a>
                                                      <a class="dropdown-item" href="#">Something else here</a>
                                                      <div class="dropdown-divider"></div>
                                                      <a class="dropdown-item" href="#">Separated link</a>
                                                  </div>
                                                  </div>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>Jena Gaines</td>
                                          <td>Office Manager</td>
                                          <td>London</td>
                                          <td>30</td>
                                          <td>2008/12/19</td>
                                          <td>$90,560</td>
                                          <td>3814</td>
                                          <td>
                                              <div class="d-flex">
                                                  <div class="usr-img-frame mr-2 rounded-circle">
                                                      <img alt="avatar" class="img-fluid rounded-circle" src="./src/assets/img/girl-3.png">
                                                  </div>
                                              </div>
                                          </td>
                                          <td>
                                              <div class="btn-group">
                                                  <button type="button" class="btn btn-dark btn-sm">Open</button>
                                                  <button type="button" class="btn btn-dark btn-sm dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference11" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                                  </button>
                                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuReference11">
                                                      <a class="dropdown-item" href="#">Action</a>
                                                      <a class="dropdown-item" href="#">Another action</a>
                                                      <a class="dropdown-item" href="#">Something else here</a>
                                                      <div class="dropdown-divider"></div>
                                                      <a class="dropdown-item" href="#">Separated link</a>
                                                  </div>
                                                  </div>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>Quinn Flynn</td>
                                          <td>Support Lead</td>
                                          <td>Edinburgh</td>
                                          <td>22</td>
                                          <td>2013/03/03</td>
                                          <td>$342,000</td>
                                          <td>9497</td>
                                          <td>
                                              <div class="d-flex">
                                                  <div class="usr-img-frame mr-2 rounded-circle">
                                                      <img alt="avatar" class="img-fluid rounded-circle" src="./src/assets/img/boy.png">
                                                  </div>
                                              </div>
                                          </td>
                                          <td>
                                              <div class="btn-group">
                                                  <button type="button" class="btn btn-dark btn-sm">Open</button>
                                                  <button type="button" class="btn btn-dark btn-sm dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference12" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                                  </button>
                                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuReference12">
                                                      <a class="dropdown-item" href="#">Action</a>
                                                      <a class="dropdown-item" href="#">Another action</a>
                                                      <a class="dropdown-item" href="#">Something else here</a>
                                                      <div class="dropdown-divider"></div>
                                                      <a class="dropdown-item" href="#">Separated link</a>
                                                  </div>
                                                  </div>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>Charde Marshall</td>
                                          <td>Regional Director</td>
                                          <td>San Francisco</td>
                                          <td>36</td>
                                          <td>2008/10/16</td>
                                          <td>$470,600</td>
                                          <td>6741</td>
                                          <td>
                                              <div class="d-flex">
                                                  <div class="usr-img-frame mr-2 rounded-circle">
                                                      <img alt="avatar" class="img-fluid rounded-circle" src="./src/assets/img/boy-2.png">
                                                  </div>
                                              </div>
                                          </td>
                                          <td>
                                              <div class="btn-group">
                                                  <button type="button" class="btn btn-dark btn-sm">Open</button>
                                                  <button type="button" class="btn btn-dark btn-sm dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference13" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                                  </button>
                                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuReference13">
                                                      <a class="dropdown-item" href="#">Action</a>
                                                      <a class="dropdown-item" href="#">Another action</a>
                                                      <a class="dropdown-item" href="#">Something else here</a>
                                                      <div class="dropdown-divider"></div>
                                                      <a class="dropdown-item" href="#">Separated link</a>
                                                  </div>
                                                  </div>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>Haley Kennedy</td>
                                          <td>Senior Marketing Designer</td>
                                          <td>London</td>
                                          <td>43</td>
                                          <td>2012/12/18</td>
                                          <td>$313,500</td>
                                          <td>3597</td>
                                          <td>
                                              <div class="d-flex">
                                                  <div class="usr-img-frame mr-2 rounded-circle">
                                                      <img alt="avatar" class="img-fluid rounded-circle" src="./src/assets/img/girl-1.png">
                                                  </div>
                                              </div>
                                          </td>
                                          <td>
                                              <div class="btn-group">
                                                  <button type="button" class="btn btn-dark btn-sm">Open</button>
                                                  <button type="button" class="btn btn-dark btn-sm dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference14" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                                  </button>
                                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuReference14">
                                                      <a class="dropdown-item" href="#">Action</a>
                                                      <a class="dropdown-item" href="#">Another action</a>
                                                      <a class="dropdown-item" href="#">Something else here</a>
                                                      <div class="dropdown-divider"></div>
                                                      <a class="dropdown-item" href="#">Separated link</a>
                                                  </div>
                                                  </div>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>Tatyana Fitzpatrick</td>
                                          <td>Regional Director</td>
                                          <td>London</td>
                                          <td>19</td>
                                          <td>2010/03/17</td>
                                          <td>$385,750</td>
                                          <td>1965</td>
                                          <td>
                                              <div class="d-flex">
                                                  <div class="usr-img-frame mr-2 rounded-circle">
                                                      <img alt="avatar" class="img-fluid rounded-circle" src="./src/assets/img/girl-4.png">
                                                  </div>
                                              </div>
                                          </td>
                                          <td>
                                              <div class="btn-group">
                                                  <button type="button" class="btn btn-dark btn-sm">Open</button>
                                                  <button type="button" class="btn btn-dark btn-sm dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference15" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                                  </button>
                                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuReference15">
                                                      <a class="dropdown-item" href="#">Action</a>
                                                      <a class="dropdown-item" href="#">Another action</a>
                                                      <a class="dropdown-item" href="#">Something else here</a>
                                                      <div class="dropdown-divider"></div>
                                                      <a class="dropdown-item" href="#">Separated link</a>
                                                  </div>
                                                  </div>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>Michael Silva</td>
                                          <td>Marketing Designer</td>
                                          <td>London</td>
                                          <td>66</td>
                                          <td>2012/11/27</td>
                                          <td>$198,500</td>
                                          <td>1581</td>
                                          <td>
                                              <div class="d-flex">
                                                  <div class="usr-img-frame mr-2 rounded-circle">
                                                      <img alt="avatar" class="img-fluid rounded-circle" src="./src/assets/img/boy.png">
                                                  </div>
                                              </div>
                                          </td>
                                          <td>
                                              <div class="btn-group">
                                                  <button type="button" class="btn btn-dark btn-sm">Open</button>
                                                  <button type="button" class="btn btn-dark btn-sm dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference16" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                                  </button>
                                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuReference16">
                                                      <a class="dropdown-item" href="#">Action</a>
                                                      <a class="dropdown-item" href="#">Another action</a>
                                                      <a class="dropdown-item" href="#">Something else here</a>
                                                      <div class="dropdown-divider"></div>
                                                      <a class="dropdown-item" href="#">Separated link</a>
                                                  </div>
                                                  </div>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>Paul Byrd</td>
                                          <td>Chief Financial Officer (CFO)</td>
                                          <td>New York</td>
                                          <td>64</td>
                                          <td>2010/06/09</td>
                                          <td>$725,000</td>
                                          <td>3059</td>
                                          <td>
                                              <div class="d-flex">
                                                  <div class="usr-img-frame mr-2 rounded-circle">
                                                      <img alt="avatar" class="img-fluid rounded-circle" src="./src/assets/img/boy-2.png">
                                                  </div>
                                              </div>
                                          </td>
                                          <td>
                                              <div class="btn-group">
                                                  <button type="button" class="btn btn-dark btn-sm">Open</button>
                                                  <button type="button" class="btn btn-dark btn-sm dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference17" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                                  </button>
                                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuReference17">
                                                      <a class="dropdown-item" href="#">Action</a>
                                                      <a class="dropdown-item" href="#">Another action</a>
                                                      <a class="dropdown-item" href="#">Something else here</a>
                                                      <div class="dropdown-divider"></div>
                                                      <a class="dropdown-item" href="#">Separated link</a>
                                                  </div>
                                                  </div>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>Gloria Little</td>
                                          <td>Systems Administrator</td>
                                          <td>New York</td>
                                          <td>59</td>
                                          <td>2009/04/10</td>
                                          <td>$237,500</td>
                                          <td>1721</td>
                                          <td>
                                              <div class="d-flex">
                                                  <div class="usr-img-frame mr-2 rounded-circle">
                                                      <img alt="avatar" class="img-fluid rounded-circle" src="./src/assets/img/girl-2.png">
                                                  </div>
                                              </div>
                                          </td>
                                          <td>
                                              <div class="btn-group">
                                                  <button type="button" class="btn btn-dark btn-sm">Open</button>
                                                  <button type="button" class="btn btn-dark btn-sm dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference18" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                                  </button>
                                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuReference18">
                                                      <a class="dropdown-item" href="#">Action</a>
                                                      <a class="dropdown-item" href="#">Another action</a>
                                                      <a class="dropdown-item" href="#">Something else here</a>
                                                      <div class="dropdown-divider"></div>
                                                      <a class="dropdown-item" href="#">Separated link</a>
                                                  </div>
                                                  </div>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>Bradley Greer</td>
                                          <td>Software Engineer</td>
                                          <td>London</td>
                                          <td>41</td>
                                          <td>2012/10/13</td>
                                          <td>$132,000</td>
                                          <td>2558</td>
                                          <td>
                                              <div class="d-flex">
                                                  <div class="usr-img-frame mr-2 rounded-circle">
                                                      <img alt="avatar" class="img-fluid rounded-circle" src="./src/assets/img/boy.png">
                                                  </div>
                                              </div>
                                          </td>
                                          <td>
                                              <div class="btn-group">
                                                  <button type="button" class="btn btn-dark btn-sm">Open</button>
                                                  <button type="button" class="btn btn-dark btn-sm dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference19" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                                  </button>
                                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuReference19">
                                                      <a class="dropdown-item" href="#">Action</a>
                                                      <a class="dropdown-item" href="#">Another action</a>
                                                      <a class="dropdown-item" href="#">Something else here</a>
                                                      <div class="dropdown-divider"></div>
                                                      <a class="dropdown-item" href="#">Separated link</a>
                                                  </div>
                                                  </div>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>Dai Rios</td>
                                          <td>Personnel Lead</td>
                                          <td>Edinburgh</td>
                                          <td>35</td>
                                          <td>2012/09/26</td>
                                          <td>$217,500</td>
                                          <td>2290</td>
                                          <td>
                                              <div class="d-flex">
                                                  <div class="usr-img-frame mr-2 rounded-circle">
                                                      <img alt="avatar" class="img-fluid rounded-circle" src="./src/assets/img/boy.png">
                                                  </div>
                                              </div>
                                          </td>
                                          <td>
                                              <div class="btn-group">
                                                  <button type="button" class="btn btn-dark btn-sm">Open</button>
                                                  <button type="button" class="btn btn-dark btn-sm dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference20" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                                  </button>
                                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuReference20">
                                                      <a class="dropdown-item" href="#">Action</a>
                                                      <a class="dropdown-item" href="#">Another action</a>
                                                      <a class="dropdown-item" href="#">Something else here</a>
                                                      <div class="dropdown-divider"></div>
                                                      <a class="dropdown-item" href="#">Separated link</a>
                                                  </div>
                                                  </div>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>Jenette Caldwell</td>
                                          <td>Development Lead</td>
                                          <td>New York</td>
                                          <td>30</td>
                                          <td>2011/09/03</td>
                                          <td>$345,000</td>
                                          <td>1937</td>
                                          <td>
                                              <div class="d-flex">
                                                  <div class="usr-img-frame mr-2 rounded-circle">
                                                      <img alt="avatar" class="img-fluid rounded-circle" src="./src/assets/img/girl-1.png">
                                                  </div>
                                              </div>
                                          </td>
                                          <td>
                                              <div class="btn-group">
                                                  <button type="button" class="btn btn-dark btn-sm">Open</button>
                                                  <button type="button" class="btn btn-dark btn-sm dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference21" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                                  </button>
                                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuReference21">
                                                      <a class="dropdown-item" href="#">Action</a>
                                                      <a class="dropdown-item" href="#">Another action</a>
                                                      <a class="dropdown-item" href="#">Something else here</a>
                                                      <div class="dropdown-divider"></div>
                                                      <a class="dropdown-item" href="#">Separated link</a>
                                                  </div>
                                                  </div>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>Yuri Berry</td>
                                          <td>Chief Marketing Officer (CMO)</td>
                                          <td>New York</td>
                                          <td>40</td>
                                          <td>2009/06/25</td>
                                          <td>$675,000</td>
                                          <td>6154</td>
                                          <td>
                                              <div class="d-flex">
                                                  <div class="usr-img-frame mr-2 rounded-circle">
                                                      <img alt="avatar" class="img-fluid rounded-circle" src="./src/assets/img/boy-2.png">
                                                  </div>
                                              </div>
                                          </td>
                                          <td>
                                              <div class="btn-group">
                                                  <button type="button" class="btn btn-dark btn-sm">Open</button>
                                                  <button type="button" class="btn btn-dark btn-sm dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference22" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                                  </button>
                                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuReference22">
                                                      <a class="dropdown-item" href="#">Action</a>
                                                      <a class="dropdown-item" href="#">Another action</a>
                                                      <a class="dropdown-item" href="#">Something else here</a>
                                                      <div class="dropdown-divider"></div>
                                                      <a class="dropdown-item" href="#">Separated link</a>
                                                  </div>
                                                  </div>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>Caesar Vance</td>
                                          <td>Pre-Sales Support</td>
                                          <td>New York</td>
                                          <td>21</td>
                                          <td>2011/12/12</td>
                                          <td>$106,450</td>
                                          <td>8330</td>
                                          <td>
                                              <div class="d-flex">
                                                  <div class="usr-img-frame mr-2 rounded-circle">
                                                      <img alt="avatar" class="img-fluid rounded-circle" src="./src/assets/img/boy-2.png">
                                                  </div>
                                              </div>
                                          </td>
                                          <td>
                                              <div class="btn-group">
                                                  <button type="button" class="btn btn-dark btn-sm">Open</button>
                                                  <button type="button" class="btn btn-dark btn-sm dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference23" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                                  </button>
                                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuReference23">
                                                      <a class="dropdown-item" href="#">Action</a>
                                                      <a class="dropdown-item" href="#">Another action</a>
                                                      <a class="dropdown-item" href="#">Something else here</a>
                                                      <div class="dropdown-divider"></div>
                                                      <a class="dropdown-item" href="#">Separated link</a>
                                                  </div>
                                                  </div>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>Doris Wilder</td>
                                          <td>Sales Assistant</td>
                                          <td>Sidney</td>
                                          <td>23</td>
                                          <td>2010/09/20</td>
                                          <td>$85,600</td>
                                          <td>3023</td>
                                          <td>
                                              <div class="d-flex">
                                                  <div class="usr-img-frame mr-2 rounded-circle">
                                                      <img alt="avatar" class="img-fluid rounded-circle" src="./src/assets/img/boy-2.png">
                                                  </div>
                                              </div>
                                          </td>
                                          <td>
                                              <div class="btn-group">
                                                  <button type="button" class="btn btn-dark btn-sm">Open</button>
                                                  <button type="button" class="btn btn-dark btn-sm dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference24" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                                  </button>
                                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuReference24">
                                                      <a class="dropdown-item" href="#">Action</a>
                                                      <a class="dropdown-item" href="#">Another action</a>
                                                      <a class="dropdown-item" href="#">Something else here</a>
                                                      <div class="dropdown-divider"></div>
                                                      <a class="dropdown-item" href="#">Separated link</a>
                                                  </div>
                                                  </div>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>Angelica Ramos</td>
                                          <td>Chief Executive Officer (CEO)</td>
                                          <td>London</td>
                                          <td>47</td>
                                          <td>2009/10/09</td>
                                          <td>$1,200,000</td>
                                          <td>5797</td>
                                          <td>
                                              <div class="d-flex">
                                                  <div class="usr-img-frame mr-2 rounded-circle">
                                                      <img alt="avatar" class="img-fluid rounded-circle" src="./src/assets/img/girl-4.png">
                                                  </div>
                                              </div>
                                          </td>
                                          <td>
                                              <div class="btn-group">
                                                  <button type="button" class="btn btn-dark btn-sm">Open</button>
                                                  <button type="button" class="btn btn-dark btn-sm dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference25" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                                  </button>
                                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuReference25">
                                                      <a class="dropdown-item" href="#">Action</a>
                                                      <a class="dropdown-item" href="#">Another action</a>
                                                      <a class="dropdown-item" href="#">Something else here</a>
                                                      <div class="dropdown-divider"></div>
                                                      <a class="dropdown-item" href="#">Separated link</a>
                                                  </div>
                                                  </div>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>Gavin Joyce</td>
                                          <td>Developer</td>
                                          <td>Edinburgh</td>
                                          <td>42</td>
                                          <td>2010/12/22</td>
                                          <td>$92,575</td>
                                          <td>8822</td>
                                          <td>
                                              <div class="d-flex">
                                                  <div class="usr-img-frame mr-2 rounded-circle">
                                                      <img alt="avatar" class="img-fluid rounded-circle" src="./src/assets/img/boy-2.png">
                                                  </div>
                                              </div>
                                          </td>
                                          <td>
                                              <div class="btn-group">
                                                  <button type="button" class="btn btn-dark btn-sm">Open</button>
                                                  <button type="button" class="btn btn-dark btn-sm dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference26" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                                  </button>
                                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuReference26">
                                                      <a class="dropdown-item" href="#">Action</a>
                                                      <a class="dropdown-item" href="#">Another action</a>
                                                      <a class="dropdown-item" href="#">Something else here</a>
                                                      <div class="dropdown-divider"></div>
                                                      <a class="dropdown-item" href="#">Separated link</a>
                                                  </div>
                                                  </div>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>Jennifer Chang</td>
                                          <td>Regional Director</td>
                                          <td>Singapore</td>
                                          <td>28</td>
                                          <td>2010/11/14</td>
                                          <td>$357,650</td>
                                          <td>9239</td>
                                          <td>
                                              <div class="d-flex">
                                                  <div class="usr-img-frame mr-2 rounded-circle">
                                                      <img alt="avatar" class="img-fluid rounded-circle" src="./src/assets/img/girl-2.png">
                                                  </div>
                                              </div>
                                          </td>
                                          <td>
                                              <div class="btn-group">
                                                  <button type="button" class="btn btn-dark btn-sm">Open</button>
                                                  <button type="button" class="btn btn-dark btn-sm dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference27" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                                  </button>
                                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuReference27">
                                                      <a class="dropdown-item" href="#">Action</a>
                                                      <a class="dropdown-item" href="#">Another action</a>
                                                      <a class="dropdown-item" href="#">Something else here</a>
                                                      <div class="dropdown-divider"></div>
                                                      <a class="dropdown-item" href="#">Separated link</a>
                                                  </div>
                                                  </div>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>Brenden Wagner</td>
                                          <td>Software Engineer</td>
                                          <td>San Francisco</td>
                                          <td>28</td>
                                          <td>2011/06/07</td>
                                          <td>$206,850</td>
                                          <td>1314</td>
                                          <td>
                                              <div class="d-flex">
                                                  <div class="usr-img-frame mr-2 rounded-circle">
                                                      <img alt="avatar" class="img-fluid rounded-circle" src="./src/assets/img/boy-2.png">
                                                  </div>
                                              </div>
                                          </td>
                                          <td>
                                              <div class="btn-group">
                                                  <button type="button" class="btn btn-dark btn-sm">Open</button>
                                                  <button type="button" class="btn btn-dark btn-sm dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference28" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                                  </button>
                                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuReference28">
                                                      <a class="dropdown-item" href="#">Action</a>
                                                      <a class="dropdown-item" href="#">Another action</a>
                                                      <a class="dropdown-item" href="#">Something else here</a>
                                                      <div class="dropdown-divider"></div>
                                                      <a class="dropdown-item" href="#">Separated link</a>
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

              
          </div>
          
      </div>
      
      <!--  BEGIN FOOTER  -->
      <div class="footer-wrapper">
          <div class="footer-section f-section-1">
              <p class="">Copyright © <span class="dynamic-year">2024</span> <a>Name Quotient</a>, All rights reserved.</p>
          </div>
      </div>
      <!--  END CONTENT AREA  -->
  </div>
    <!--  END CONTENT AREA  -->

  </div>
  <!-- END MAIN CONTAINER -->

  <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
  <script src="./src/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="./src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js"></script>
  <script src="./src/plugins/src/mousetrap/mousetrap.min.js"></script>
  <script src="./layouts/vertical-dark-menu/app.js"></script>
  <!-- END GLOBAL MANDATORY SCRIPTS -->

  <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
  <script src="./src/plugins/src/apex/apexcharts.min.js"></script>
  <script src="./src/assets/js/dashboard/dash_2.js"></script>
  <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

</body>

</html>