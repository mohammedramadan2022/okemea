<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
    <title>Cuba - Premium Admin Template Project Create</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/fontawesome.css')}}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/icofont.css')}}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/themify.css')}}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/flag-icon.css')}}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/feather-icon.css')}}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/date-picker.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/dropzone.css')}}">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.css')}}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <link id="color" rel="stylesheet" href="{{asset('assets/css/color-1.css')}}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">
  </head>
  <body>
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper default-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <div class="page-main-header">
        <div class="main-header-right row m-0">
          <form class="form-inline search-full" action="#" method="get">
            <div class="form-group w-100">
              <div class="Typeahead Typeahead--twitterUsers">
                <div class="u-posRelative">
                  <input class="Typeahead-input form-control-plaintext w-100" id="demo-input" type="text" placeholder="Search Cuba .." name="q" title="" autofocus>
                  <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span></div>
                  <i class="close-search" data-feather="x"></i>
                </div>
                <div class="Typeahead-menu"></div>
              </div>
            </div>
          </form>
          <div class="main-header-left">
            <div class="logo-wrapper"><a href="{{route('/')}}"><img class="img-fluid" src="{{asset('assets/images/logo/logo.png')}}" alt=""></a></div>
            <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="grid" id="sidebar-toggle"> </i></div>
          </div>
          <div class="left-menu-header col horizontal-wrapper">
            <ul class="horizontal-menu">
              <li class="mega-menu">
                <a class="nav-link" href="#"><i data-feather="layers"></i><span>Bonus Ui</span></a>
                <div class="mega-menu-container menu-content" style="display: none;">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col mega-box">
                        <div class="mobile-title d-none">
                          <h5>Mega menu</h5>
                          <i data-feather="x"></i>
                        </div>
                        <div class="link-section icon">
                          <div>
                            <h6>Error Page</h6>
                          </div>
                          <ul>
                            <li><a href="{{route('error-400')}}">Error page 400</a></li>
                            <li><a href="{{route('error-401')}}">Error page 401</a></li>
                            <li><a href="{{route('error-403')}}">Error page 403</a></li>
                            <li><a href="{{route('error-404')}}">Error page 404</a></li>
                            <li><a href="{{route('error-500')}}">Error page 500</a></li>
                            <li><a href="{{route('error-503')}}">Error page 503</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col mega-box">
                        <div class="link-section doted">
                          <div>
                            <h6> Authentication</h6>
                          </div>
                          <ul>
                            <li><a href="{{route('login')}}">Login Simple</a></li>
                            <li><a href="{{route('login-image')}}">Login Bg Image</a></li>
                            <li><a href="{{route('login-video')}}">Login Bg video</a></li>
                            <li><a href="{{route('signup')}}">Register Simple</a></li>
                            <li><a href="{{route('signup-image')}}">Register Bg Image</a></li>
                            <li><a href="{{route('signup-video')}}">Register Bg video</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col mega-box">
                        <div class="link-section dashed">
                          <div>
                            <h6>Usefull Pages</h6>
                          </div>
                          <ul>
                            <li><a href="{{route('search')}}">Search Website</a></li>
                            <li><a href="{{route('search-video')}}">Search Video</a></li>
                            <li><a href="{{route('unlock')}}">Unlock User</a></li>
                            <li><a href="{{route('forget-password')}}">Forget Password</a></li>
                            <li><a href="{{route('reset-password')}}">Reset Password</a></li>
                            <li><a href="{{route('maintenance')}}">Maintenance</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col mega-box">
                        <div class="link-section">
                          <div>
                            <h6>Email templates</h6>
                          </div>
                          <ul>
                            <li><a href="{{route('basic-template')}}">Basic Email</a></li>
                            <li><a href="{{route('email-header')}}">Basic With Header</a></li>
                            <li><a href="{{route('template-email')}}">Ecomerce Template</a></li>
                            <li><a href="{{route('template-email-2')}}">Email Template 2</a></li>
                            <li><a href="{{route('ecommerce-templates')}}">Ecommerce Email</a></li>
                            <li><a href="{{route('email-order-success')}}">Order Success</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col mega-box">
                        <div class="link-section">
                          <div>
                            <h6>Coming Soon</h6>
                          </div>
                          <ul class="svg-icon">
                            <li><a href="{{route('comingsoon')}}"> <i data-feather="file"> </i>Coming-soon</a></li>
                            <li><a href="{{route('comingsoon-bg-video')}}"> <i data-feather="film"> </i>Coming-video</a></li>
                            <li><a href="{{route('comingsoon-bg-img')}}"><i data-feather="image"> </i>Coming-Image</a></li>
                          </ul>
                          <div>
                            <h6>Other Soon</h6>
                          </div>
                          <ul class="svg-icon">
                            <li><a class="txt-primary" href="{{route('landing-page')}}"> <i data-feather="cast"></i>Landing Page</a></li>
                            <li><a class="txt-secondary" href="{{route('sample-page')}}"> <i data-feather="airplay"></i>Sample Page</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="nav-right col-8 pull-right right-menu">
            <ul class="nav-menus">
              <li class="language-nav">
                <div class="translate_wrapper">
                  <div class="current_lang">
                    <div class="lang"><i class="flag-icon flag-icon-us"></i><span class="lang-txt">EN                               </span></div>
                  </div>
                  <div class="more_lang">
                    <div class="lang selected" data-value="en"><i class="flag-icon flag-icon-us"></i><span class="lang-txt">English<span> (US)</span></span></div>
                    <div class="lang" data-value="de"><i class="flag-icon flag-icon-de"></i><span class="lang-txt">Deutsch</span></div>
                    <div class="lang" data-value="es"><i class="flag-icon flag-icon-es"></i><span class="lang-txt">Español</span></div>
                    <div class="lang" data-value="fr"><i class="flag-icon flag-icon-fr"></i><span class="lang-txt">Français</span></div>
                    <div class="lang" data-value="pt"><i class="flag-icon flag-icon-pt"></i><span class="lang-txt">Português<span> (BR)</span></span></div>
                    <div class="lang" data-value="cn"><i class="flag-icon flag-icon-cn"></i><span class="lang-txt">简体中文</span></div>
                    <div class="lang" data-value="ae"><i class="flag-icon flag-icon-ae"></i><span class="lang-txt">لعربية <span> (ae)</span></span></div>
                  </div>
                </div>
              </li>
              <li>                         <span class="header-search"><i data-feather="search"></i></span></li>
              <li class="onhover-dropdown">
                <div class="notification-box"><i data-feather="bell"></i><span class="badge badge-pill badge-secondary">4</span></div>
                <ul class="notification-dropdown onhover-show-div">
                  <li class="bg-primary">
                    <h6 class="f-18 mb-0">Notitication</h6>
                    <p class="mb-0">You have 4 new notification</p>
                  </li>
                  <li>
                    <p class="mb-0"><i class="fa fa-circle-o mr-3 font-primary"> </i>Delivery processing <span class="pull-right">10 min.</span></p>
                  </li>
                  <li>
                    <p class="mb-0"><i class="fa fa-circle-o mr-3 font-success"></i>Order Complete<span class="pull-right">1 hr</span></p>
                  </li>
                  <li>
                    <p class="mb-0"><i class="fa fa-circle-o mr-3 font-info"></i>Tickets Generated<span class="pull-right">3 hr</span></p>
                  </li>
                  <li>
                    <p class="mb-0"><i class="fa fa-circle-o mr-3 font-danger"></i>Delivery Complete<span class="pull-right">6 hr</span></p>
                  </li>
                  <li>
                    <a class="btn btn-primary" href="#">Check all notification</a>
                    <!--a.f-15.f-w-500.txt-dark(href="#") Check all notification-->
                  </li>
                </ul>
              </li>
              <li class="cart-nav onhover-dropdown">
                <div class="cart-box"><i data-feather="shopping-cart"></i><span class="badge badge-pill badge-primary">2</span></div>
                <ul class="cart-dropdown chat-dropdown onhover-show-div">
                  <li class="bg-primary text-center">
                    <h6 class="f-18">Shoping cart</h6>
                    <p class="mb-0">You have 3 items in your cart  </p>
                  </li>
                  <li class="mt-0">
                    <div class="media">
                      <img class="img-fluid rounded-circle mr-3 img-60" src="{{asset('assets/images/ecommerce/01.jpg')}}" alt="">
                      <div class="media-body">
                        <span>Boy's T-shirt</span>
                        <p>It is a long established fact that a reader</p>
                        <h6 class="f-12 light-font">1 x $ 299.00</h6>
                      </div>
                      <div class="close-circle"><a href="#"><i data-feather="x"></i></a></div>
                    </div>
                  </li>
                  <li>
                    <div class="media">
                      <img class="img-fluid rounded-circle mr-3 img-60" src="{{asset('assets/images/ecommerce/02.jpg')}}" alt="">
                      <div class="media-body">
                        <span>Girls's T-shirt</span>
                        <p>It is a long established fact that a reader</p>
                        <h6 class="f-12 light-font">1 x $ 199.00</h6>
                      </div>
                      <div class="close-circle"><a href="#"><i data-feather="x"></i></a></div>
                    </div>
                  </li>
                  <li>
                    <div class="media">
                      <img class="img-fluid rounded-circle mr-3 img-60" src="{{asset('assets/images/ecommerce/08.jpg')}}" alt="">
                      <div class="media-body">
                        <span>Girls's T-shirt</span>
                        <p>It is a long established fact that a reader</p>
                        <h6 class="f-12 light-font">2 x $ 199.00</h6>
                      </div>
                      <div class="close-circle"><a href="#"><i data-feather="x"></i></a></div>
                    </div>
                  </li>
                  <li>
                    <div class="total">
                      <h6 class="mb-0 mt-1">Subtotal : <span class="f-right">$799.00</span></h6>
                    </div>
                  </li>
                  <li>
                    <div class="buttons">
                      <h6 class="mb-0"><a class="view-cart" href="{{route('cart')}}">View Cart</a><a class="checkout f-right" href="#">Checkout</a></h6>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="onhover-dropdown">
                <i data-feather="message-square"></i>
                <ul class="chat-dropdown onhover-show-div">
                  <li class="bg-primary text-center">
                    <h6 class="f-18 mb-0">Message Box</h6>
                    <p class="mb-0">You have 3 new messages </p>
                  </li>
                  <li>
                    <div class="media">
                      <img class="img-fluid rounded-circle mr-3" src="{{asset('assets/images/user/1.jpg')}}" alt="">
                      <div class="status-circle online"></div>
                      <div class="media-body">
                        <span>Erica Hughes</span>
                        <p>Lorem Ipsum is simply dummy...</p>
                      </div>
                      <p class="f-12 font-success">58 mins ago</p>
                    </div>
                  </li>
                  <li>
                    <div class="media">
                      <img class="img-fluid rounded-circle mr-3" src="{{asset('assets/images/user/2.jpg')}}" alt="">
                      <div class="status-circle online"></div>
                      <div class="media-body">
                        <span>Kori Thomas</span>
                        <p>Lorem Ipsum is simply dummy...</p>
                      </div>
                      <p class="f-12 font-success">1 hr ago</p>
                    </div>
                  </li>
                  <li>
                    <div class="media">
                      <img class="img-fluid rounded-circle mr-3" src="{{asset('assets/images/user/4.jpg')}}" alt="">
                      <div class="status-circle offline"></div>
                      <div class="media-body">
                        <span>Ain Chavez</span>
                        <p>Lorem Ipsum is simply dummy...</p>
                      </div>
                      <p class="f-12 font-danger">32 mins ago</p>
                    </div>
                  </li>
                  <li class="text-center"> <a class="btn btn-primary" href="#">View All     </a></li>
                </ul>
              </li>
              <li class="maximize"><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
              <li class="profile-nav onhover-dropdown p-0">
                <div class="media profile-media">
                  <img class="b-r-10" src="{{asset('assets/images/dashboard/profile.jpg')}}" alt="">
                  <div class="media-body">
                    <span>Emay Walter</span>
                    <p class="mb-0 font-roboto">Admin <i class="middle fa fa-angle-down"></i></p>
                  </div>
                </div>
                <ul class="profile-dropdown onhover-show-div">
                  <li><i data-feather="user"></i><span>Account </span></li>
                  <li><i data-feather="mail"></i><span>Inbox</span></li>
                  <li><i data-feather="file-text"></i><span>Taskboard</span></li>
                  <li><i data-feather="settings"></i><span>Settings</span></li>
                  <li><i data-feather="log-in"> </i><span>Log in</span></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper default-menu default-menu">
        <!-- Page Sidebar Start-->
        <header class="main-nav">
          <div class="logo-wrapper">
            <a href="{{route('/')}}"><img class="img-fluid for-light" src="{{asset('assets/images/logo/logo.png')}}" alt=""><img class="img-fluid for-dark" src="{{asset('assets/images/logo/logo_dark.png')}}" alt=""></a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="grid" id="sidebar-toggle"> </i></div>
          </div>
          <div class="logo-icon-wrapper"><a href="{{route('/')}}"><img class="img-fluid" src="{{asset('assets/images/logo/logo-icon.png')}}" alt=""></a></div>
          <nav>
            <div class="main-navbar">
              <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
              <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">
                  <li class="back-btn">
                    <a href="{{route('/')}}"><img class="img-fluid" src="{{asset('assets/images/logo/logo-icon.png')}}" alt=""></a>
                    <div class="mobile-back text-right"><span>Back</span><i class="fa fa-angle-right pl-2" aria-hidden="true"></i></div>
                  </li>
                  <li class="sidebar-title">
                    <div>
                      <h6 class="lan-1">General</h6>
                      <p class="lan-2">Dashboards,widgets & layout.</p>
                    </div>
                  </li>
                  
                  <li class="dropdown">
                    <a class="nav-link menu-title {{request()->route()->getPrefix() == '/dashboard' ? 'active' : '' }}" href="#"><i data-feather="home"></i><span class="lan-3">Dashboard</span>
                      <label class="badge badge-success">2</label>
                      <div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/dashboard' ? 'down' : 'right' }}"></i></div>
                    </a>
                    <ul class="nav-submenu menu-content" style="display: {{ request()->route()->getPrefix() == '/dashboard' ? 'block;' : 'none;' }}">
                      <li><a class="lan-4 {{ Route::currentRouteName()=='index' ? 'active' : '' }}" href="{{route('/')}}" >Def1ault</a></li>
                      <li><a class="lan-5 {{ Route::currentRouteName()=='dashboard-02' ? 'active' : '' }}" href="{{route('dashboard-02')}}">Ecommerce</a></li>
                    </ul>
                  </li>
                  
                  <li class="dropdown">
                    <a class="nav-link menu-title {{request()->route()->getPrefix() == '/widgets' ? 'active' : '' }}" href="#"><i data-feather="airplay"></i><span class="lan-6">Widgets</span>
                      <div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/widgets' ? 'down' : 'right' }}"></i></div>
                    </a>
                    <ul class="nav-submenu menu-content" style="display: {{ request()->route()->getPrefix() == '/widgets' ? 'block;' : 'none;' }}">
                      <li><a href="{{route('general-widget')}}" class="{{ Route::currentRouteName()=='general-widget' ? 'active' : '' }}">General</a></li>
                        <li><a href="{{route('chart-widget')}}" class="{{ Route::currentRouteName()=='chart-widget' ? 'active' : '' }}">Chart</a></li>
                    </ul>
                  </li>
                  
                  <li class="dropdown">
                    <a class="nav-link menu-title {{request()->route()->getPrefix() == '/page-layouts' ? 'active' : '' }}" href="#"><i data-feather="layout"></i><span class="lan-7">Page layout</span>
                      <div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/page-layouts' ? 'down' : 'right' }}"></i></div>
                    </a>
                    <ul class="nav-submenu menu-content" style="display: {{ request()->route()->getPrefix() == '/page-layouts' ? 'block;' : 'none;' }}">
                        <li><a href="{{route('pages-semi-dark')}}" class="{{ Route::currentRouteName()=='pages-semi-dark' ? 'active' : '' }}">Semi Dark</a></li>
                        <li><a href="{{route('pages-layout-light')}}" class="{{ Route::currentRouteName()=='pages-layout-light' ? 'active' : '' }}">Light Layout</a></li>
                        <li><a href="{{route('pages-layout-dark')}}" class="{{ Route::currentRouteName()=='pages-layout-dark' ? 'active' : '' }}">Dark Layout</a></li>
                        <li><a href="{{route('pages-layout-box')}}" class="{{ Route::currentRouteName()=='pages-layout-box' ? 'active' : '' }}">Box Layout</a></li>
                        <li><a href="{{route('pages-layout-rtl')}}" class="{{ Route::currentRouteName()=='pages-layout-rtl' ? 'active' : '' }}">RTL Layout</a></li>
                        <li><a href="{{route('pages-compact-layout')}}" class="{{ Route::currentRouteName()=='pages-compact-layout' ? 'active' : '' }}">Compact Layout</a></li>
                        <li><a href="{{route('pages-vertical-layout')}}" class="{{ Route::currentRouteName()=='pages-vertical-layout' ? 'active' : '' }}">Vertical Layout</a></li>
                        <li><a href="{{route('pages-dark-rtl-layout')}}" class="{{ Route::currentRouteName()=='pages-dark-rtl-layout' ? 'active' : '' }}">Dark & RTL Layout</a></li>
                        <li><a href="{{route('pages-vertical-rtl-layout')}}" class="{{ Route::currentRouteName()=='pages-vertical-rtl-layout' ? 'active' : '' }}">Vertical & RTL Layout</a></li>
                        <li><a href="{{route('pages-compact-rtl-layout')}}" class="{{ Route::currentRouteName()=='pages-compact-rtl-layout' ? 'active' : '' }}">Compact & RTL Layout</a></li>
                        <li><a href="{{route('pages-dark-box-layout')}}" class="{{ Route::currentRouteName()=='pages-dark-box-layout' ? 'active' : '' }}">Dark & box Layout</a></li>
                        <li><a href="{{route('pages-vertical-box-layout')}}" class="{{ Route::currentRouteName()=='pages-vertical-box-layout' ? 'active' : '' }}">Vetical Box Layout</a></li>
                        <li><a href="{{route('pages-compact-dark-layout')}}" class="{{ Route::currentRouteName()=='pages-compact-dark-layout' ? 'active' : '' }}">Compact Dark Layout</a></li>
                    </ul>
                  </li>
                  
                  <li class="sidebar-title">
                    <div>
                      <h6 class="lan-8">Applications</h6>
                      <p class="lan-9">Ready to use Apps</p>
                    </div>
                  </li>

                  <li class="dropdown">
                    <a class="nav-link menu-title {{request()->route()->getPrefix() == '/project' ? 'active' : '' }}" href="#"><i data-feather="box"></i><span>Project
                    <label class="badge badge-danger">New</label></span>
                      <div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/project' ? 'down' : 'right' }}"></i></div>
                    </a>
                    <ul class="nav-submenu menu-content" style="display: {{ request()->route()->getPrefix() == '/project' ? 'block;' : 'none;' }}">
                      <li><a href="{{route('projects')}}" class="{{ Route::currentRouteName()=='projects' ? 'active' : '' }}">Project List</a></li>
                      <li><a href="{{route('projectcreate')}}" class="{{ Route::currentRouteName()=='projectcreate' ? 'active' : '' }}">Create new</a></li>
                    </ul>
                  </li>
                  
                  <li class="dropdown"><a class="nav-link menu-title link-nav {{ Route::currentRouteName()=='file-manager' ? 'active' : '' }}" href="{{route('file-manager')}}"><i data-feather="git-pull-request"> </i><span>File manager</span></a></li>

                  <li class="dropdown"><a class="nav-link menu-title link-nav {{ Route::currentRouteName()=='kanban' ? 'active' : '' }}" href="{{route('kanban')}}"><i data-feather="monitor"> </i><span>kanban Board<label class="badge badge-primary">Latest</label></span></a>
                  </li>
                  
                  <li class="dropdown">
                    <a class="nav-link menu-title {{request()->route()->getPrefix() == '/ecommerce' ? 'active' : '' }}" href="#"><i data-feather="shopping-bag"></i><span>Ecommerce</span>
                        <div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/ecommerce' ? 'down' : 'right' }}"></i></div>
                    </a>
                    <ul class="nav-submenu menu-content" style="display: {{request()->route()->getPrefix() == '/ecommerce' ? 'block' : 'none;' }};">
                      <li><a href="{{route('product')}}" class="{{ Route::currentRouteName()=='product' ? 'active' : '' }}">Product</a></li>
                      <li><a href="{{route('product-page')}}" class="{{ Route::currentRouteName()=='product-page' ? 'active' : '' }}">Product page</a></li>
                      <li><a href="{{route('list-products')}}" class="{{ Route::currentRouteName()=='list-products' ? 'active' : '' }}">Product list</a></li>
                      <li><a href="{{route('payment-details')}}" class="{{ Route::currentRouteName()=='payment-details' ? 'active' : '' }}">Payment Details</a></li>
                      <li><a href="{{route('order-history')}}" class="{{ Route::currentRouteName()=='order-history' ? 'active' : '' }}">Order History</a></li>
                      <li><a href="{{route('invoice-template')}}" class="{{ Route::currentRouteName()=='invoice-template' ? 'active' : '' }}">Invoice</a></li>
                      <li><a href="{{route('cart')}}" class="{{ Route::currentRouteName()=='cart' ? 'active' : '' }}">Cart</a></li>
                      <li><a href="{{route('list-wish')}}" class="{{ Route::currentRouteName()=='list-wish' ? 'active' : '' }}">Wishlist</a></li>
                      <li><a href="{{route('checkout')}}" class="{{ Route::currentRouteName()=='checkout' ? 'active' : '' }}">Checkout</a></li>
                      <li><a href="{{route('pricing')}}" class="{{ Route::currentRouteName()=='pricing' ? 'active' : '' }}">Pricing</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a class="nav-link menu-title {{request()->route()->getPrefix() == '/email' ? 'active' : '' }}" href="#"><i data-feather="mail"></i><span>Email</span>
                      <div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/email' ? 'down' : 'right' }}"></i></div>
                    </a>
                    <ul class="nav-submenu menu-content" style="display: {{request()->route()->getPrefix() == '/email' ? 'block' : 'none;' }};">
                      <li><a href="{{route('email-application')}}" class="{{ Route::currentRouteName()=='email-application' ? 'active' : '' }}">Email App</a></li>
                      <li><a href="{{route('email-compose')}}" class="{{ Route::currentRouteName()=='email-compose' ? 'active' : '' }}">Email Compose</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a class="nav-link menu-title {{request()->route()->getPrefix() == '/chat' ? 'active' : '' }}" href="#"><i data-feather="message-circle"></i><span>Chat</span>
                      <div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/chat' ? 'down' : 'right' }}"></i></div>
                    </a>
                    <ul class="nav-submenu menu-content" style="display: {{request()->route()->getPrefix() == '/chat' ? 'block' : 'none;' }};">
                      <li><a href="{{route('chat')}}" class="{{ Route::currentRouteName()=='chat' ? 'active' : '' }}">Chat App</a></li>
                      <li><a href="{{route('chat-video')}}" class="{{ Route::currentRouteName()=='chat-video' ? 'active' : '' }}">Video chat</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a class="nav-link menu-title {{request()->route()->getPrefix() == '/users' ? 'active' : '' }}" href="#"><i data-feather="users"></i><span>Users</span>
                      <div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/users' ? 'down' : 'right' }}"></i></div>
                    </a>
                    <ul class="nav-submenu menu-content" style="display: {{request()->route()->getPrefix() == '/users' ? 'block' : 'none;' }};">
                      <li><a href="{{route('user-profile')}}" class="{{ Route::currentRouteName()=='user-profile' ? 'active' : '' }}">Users Profile</a></li>
                      <li><a href="{{route('edit-profile')}}" class="{{ Route::currentRouteName()=='edit-profile' ? 'active' : '' }}">Users Edit</a></li>
                      <li><a href="{{route('user-cards')}}" class="{{ Route::currentRouteName()=='user-cards' ? 'active' : '' }}">Users Cards</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="bookmark.html"><i data-feather="heart"> </i><span>Bookmarks</span></a></li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="contacts.html"><i data-feather="list"> </i><span>Contacts</span></a></li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="task.html"><i data-feather="check-square"> </i><span>Tasks</span></a></li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="calendar-basic.html"><i data-feather="calendar"> </i><span>Calendar</span></a></li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="social-app.html"><i data-feather="zap"> </i><span>Social App</span></a></li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="to-do.html"><i data-feather="clock"> </i><span>To-Do</span></a></li>
                  <li class="sidebar-title">
                    <div>
                      <h6>Components</h6>
                      <p>UI Components & Elements </p>
                    </div>
                  </li>
                  <li class="dropdown">
                    <a class="nav-link menu-title" href="#"><i data-feather="box"></i><span>Ui Kits</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="state-color.html">State color</a></li>
                      <li><a href="typography.html">Typography</a></li>
                      <li><a href="avatars.html">Avatars</a></li>
                      <li><a href="helper-classes.html">helper classes</a></li>
                      <li><a href="grid.html">Grid</a></li>
                      <li><a href="tag-pills.html">Tag & pills</a></li>
                      <li><a href="progress-bar.html">Progress</a></li>
                      <li><a href="modal.html">Modal</a></li>
                      <li><a href="alert.html">Alert</a></li>
                      <li><a href="popover.html">Popover</a></li>
                      <li><a href="tooltip.html">Tooltip</a></li>
                      <li><a href="loader.html">Spinners</a></li>
                      <li><a href="dropdown.html">Dropdown</a></li>
                      <li><a href="according.html">Accordion</a></li>
                      <li>
                        <a class="submenu-title" href="#">Tabs<span class="sub-arrow"><i class="fa fa-angle-right"></i></span></a>
                        <ul class="nav-sub-childmenu submenu-content">
                          <li><a href="tab-bootstrap.html">Bootstrap Tabs</a></li>
                          <li><a href="tab-material.html">Line Tabs</a></li>
                        </ul>
                      </li>
                      <li><a href="box-shadow.html">Shadow</a></li>
                      <li><a href="list.html">Lists</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a class="nav-link menu-title" href="#"><i data-feather="folder-plus"></i><span>Bonus Ui</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="scrollable.html">Scrollable</a></li>
                      <li><a href="tree.html">Tree view</a></li>
                      <li><a href="bootstrap-notify.html">Bootstrap Notify</a></li>
                      <li><a href="rating.html">Rating</a></li>
                      <li><a href="dropzone.html">dropzone</a></li>
                      <li><a href="tour.html">Tour</a></li>
                      <li><a href="sweet-alert2.html">SweetAlert2</a></li>
                      <li><a href="modal-animated.html">Animated Modal</a></li>
                      <li><a href="owl-carousel.html">Owl Carousel</a></li>
                      <li><a href="ribbons.html">Ribbons</a></li>
                      <li><a href="pagination.html">Pagination</a></li>
                      <li><a href="steps.html">Steps</a></li>
                      <li><a href="breadcrumb.html">Breadcrumb</a></li>
                      <li><a href="range-slider.html">Range Slider</a></li>
                      <li><a href="image-cropper.html">Image cropper</a></li>
                      <li><a href="sticky.html">Sticky</a></li>
                      <li><a href="basic-card.html">Basic Card</a></li>
                      <li><a href="creative-card.html">Creative Card</a></li>
                      <li><a href="tabbed-card.html">Tabbed Card</a></li>
                      <li><a href="dragable-card.html">Draggable Card</a></li>
                      <li>
                        <a class="submenu-title" href="#">Timeline<span class="sub-arrow"><i class="fa fa-angle-right"></i></span></a>
                        <ul class="nav-sub-childmenu submenu-content">
                          <li><a href="timeline-v-1.html">Timeline 1</a></li>
                          <li><a href="timeline-v-2.html">Timeline 2</a></li>
                          <li><a href="timeline-small.html">Timeline 3</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a class="nav-link menu-title" href="#"><i data-feather="edit-3"></i><span>Builders</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="form-builder-1.html"> Form Builder 1</a></li>
                      <li><a href="form-builder-2.html"> Form Builder 2</a></li>
                      <li><a href="pagebuild.html">Page Builder</a></li>
                      <li><a href="button-builder.html">Button Builder</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a class="nav-link menu-title" href="#"><i data-feather="cloud-drizzle"></i><span>Animation</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="animate.html">Animate</a></li>
                      <li><a href="scroll-reval.html">Scroll Reveal</a></li>
                      <li><a href="AOS.html">AOS animation</a></li>
                      <li><a href="tilt.html">Tilt Animation</a></li>
                      <li><a href="wow.html">Wow Animation</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a class="nav-link menu-title" href="#"><i data-feather="command"></i><span>Icons</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="flag-icon.html">Flag icon</a></li>
                      <li><a href="font-awesome.html">Fontawesome Icon</a></li>
                      <li><a href="ico-icon.html">Ico Icon</a></li>
                      <li><a href="themify-icon.html">Thimify Icon</a></li>
                      <li><a href="feather-icon.html">Feather icon</a></li>
                      <li><a href="whether-icon.html">Whether Icon</a></li>
                      <li><a href="simple-line-icon.html">Simple line Icon</a></li>
                      <li><a href="material-design-icon.html">Material Design Icon</a></li>
                      <li><a href="pe7-icon.html">pe7 icon</a></li>
                      <li><a href="typicons-icon.html">Typicons icon</a></li>
                      <li><a href="ionic-icon.html">Ionic icon</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a class="nav-link menu-title" href="#"><i data-feather="cloud"></i><span>Buttons</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="buttons.html">Default Style</a></li>
                      <li><a href="buttons-flat.html">Flat Style</a></li>
                      <li><a href="buttons-edge.html">Edge Style</a></li>
                      <li><a href="raised-button.html">Raised Style</a></li>
                      <li><a href="button-group.html">Button Group</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a class="nav-link menu-title" href="#"><i data-feather="bar-chart"></i><span>Charts</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="chart-apex.html">Apex Chart</a></li>
                      <li><a href="chart-google.html">Google Chart</a></li>
                      <li><a href="chart-sparkline.html">Sparkline chart</a></li>
                      <li><a href="chart-flot.html">Flot Chart</a></li>
                      <li><a href="chart-knob.html">Knob Chart</a></li>
                      <li><a href="chart-morris.html">Morris Chart</a></li>
                      <li><a href="chartjs.html">Chatjs Chart</a></li>
                      <li><a href="chartist.html">Chartist Chart</a></li>
                      <li><a href="chart-peity.html">Peity Chart</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-title">
                    <div>
                      <h6>Forms & Table</h6>
                      <p>Ready to use froms & tables </p>
                    </div>
                  </li>
                  <li class="dropdown">
                    <a class="nav-link menu-title" href="#"><i data-feather="file-text"></i><span>Forms</span></a>
                    <ul class="nav-submenu menu-content">
                      <li>
                        <a class="submenu-title" href="#">Form Controls<span class="sub-arrow"><i class="fa fa-angle-right"></i></span></a>
                        <ul class="nav-sub-childmenu submenu-content">
                          <li><a href="form-validation.html">Form Validation</a></li>
                          <li><a href="base-input.html">Base Inputs</a></li>
                          <li><a href="radio-checkbox-control.html">Checkbox & Radio</a></li>
                          <li><a href="input-group.html">Input Groups</a></li>
                          <li><a href="megaoptions.html">Mega Options</a></li>
                        </ul>
                      </li>
                      <li>
                        <a class="submenu-title" href="#">Form Widgets<span class="sub-arrow"><i class="fa fa-angle-right"></i></span></a>
                        <ul class="nav-sub-childmenu submenu-content">
                          <li><a href="datepicker.html">Datepicker</a></li>
                          <li><a href="time-picker.html">Timepicker</a></li>
                          <li><a href="datetimepicker.html">Datetimepicker</a></li>
                          <li><a href="daterangepicker.html">Daterangepicker</a></li>
                          <li><a href="touchspin.html">Touchspin</a></li>
                          <li><a href="select2.html">Select2</a></li>
                          <li><a href="switch.html">Switch</a></li>
                          <li><a href="typeahead.html">Typeahead</a></li>
                          <li><a href="clipboard.html">Clipboard</a></li>
                        </ul>
                      </li>
                      <li>
                        <a class="submenu-title" href="#">Form layout<span class="sub-arrow"><i class="fa fa-angle-right"></i></span></a>
                        <ul class="nav-sub-childmenu submenu-content">
                          <li><a href="default-form.html">Default Forms</a></li>
                          <li><a href="form-wizard.html">Form Wizard 1</a></li>
                          <li><a href="form-wizard-two.html">Form Wizard 2</a></li>
                          <li><a href="form-wizard-three.html">Form Wizard 3</a></li>
                          <li><a href="form-wizard-four.html">Form Wizard 4</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a class="nav-link menu-title" href="#"><i data-feather="server"></i><span>Tables</span></a>
                    <ul class="nav-submenu menu-content">
                      <li>
                        <a class="submenu-title" href="#">Bootstrap Tables<span class="sub-arrow"><i class="fa fa-angle-right"></i></span></a>
                        <ul class="nav-sub-childmenu submenu-content">
                          <li><a href="bootstrap-basic-table.html">Basic Tables</a></li>
                          <li><a href="bootstrap-sizing-table.html">Sizing Tables</a></li>
                          <li><a href="bootstrap-border-table.html">Border Tables</a></li>
                          <li><a href="bootstrap-styling-table.html">Styling Tables</a></li>
                          <li><a href="table-components.html">Table components</a></li>
                        </ul>
                      </li>
                      <li>
                        <a class="submenu-title" href="#">Data Tables<span class="sub-arrow"><i class="fa fa-angle-right"></i></span></a>
                        <ul class="nav-sub-childmenu submenu-content">
                          <li><a href="datatable-basic-init.html">Basic Init</a></li>
                          <li><a href="datatable-advance.html">Advance Init</a></li>
                          <li><a href="datatable-styling.html">Styling</a></li>
                          <li><a href="datatable-AJAX.html">AJAX</a></li>
                          <li><a href="datatable-server-side.html">Server Side</a></li>
                          <li><a href="datatable-plugin.html">Plug-in</a></li>
                          <li><a href="datatable-API.html">API</a></li>
                          <li><a href="datatable-data-source.html">Data Sources</a></li>
                        </ul>
                      </li>
                      <li>
                        <a class="submenu-title" href="#">Ex. Data Tables<span class="sub-arrow"><i class="fa fa-angle-right"></i></span></a>
                        <ul class="nav-sub-childmenu submenu-content">
                          <li><a href="datatable-ext-autofill.html">Auto Fill</a></li>
                          <li><a href="datatable-ext-basic-button.html">Basic Button</a></li>
                          <li><a href="datatable-ext-col-reorder.html">Column Reorder</a></li>
                          <li><a href="datatable-ext-fixed-header.html">Fixed Header</a></li>
                          <li><a href="datatable-ext-html-5-data-export.html">HTML 5 Export</a></li>
                          <li><a href="datatable-ext-key-table.html">Key Table</a></li>
                          <li><a href="datatable-ext-responsive.html">Responsive</a></li>
                          <li><a href="datatable-ext-row-reorder.html">Row Reorder</a></li>
                          <li><a href="datatable-ext-scroller.html">Scroller</a></li>
                        </ul>
                      </li>
                      <li><a href="jsgrid-table.html">Js Grid Table</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-title">
                    <div>
                      <h6>Pages</h6>
                      <p>All neccesory pages added</p>
                    </div>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="landing-page.html"><i data-feather="cast"> </i><span>Landing page</span></a></li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="sample-page.html"><i data-feather="file-text"> </i><span>Sample page</span></a></li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="internationalization.html"><i data-feather="globe"> </i><span>Internationalization</span></a></li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="../starter-kit/index.html" target="_blank"><i data-feather="anchor"></i><span>Starter kit</span></a></li>
                  <li class="mega-menu">
                    <a class="nav-link menu-title" href="#"><i data-feather="layers"></i><span>Others</span></a>
                    <div class="mega-menu-container menu-content">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col mega-box">
                            <div class="link-section">
                              <div class="submenu-title">
                                <h5>Search Pages</h5>
                              </div>
                              <ul class="submenu-content opensubmegamenu">
                                <li><a href="search.html">Search Website</a></li>
                                <li><a href="search-images.html">Search Images</a></li>
                                <li><a href="search-video.html">Search Video</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="col mega-box">
                            <div class="link-section">
                              <div class="submenu-title">
                                <h5>Error Page</h5>
                              </div>
                              <ul class="submenu-content opensubmegamenu">
                                <li><a href="error-400.html">Error 400</a></li>
                                <li><a href="error-401.html">Error 401</a></li>
                                <li><a href="error-403.html">Error 403</a></li>
                                <li><a href="error-404.html">Error 404</a></li>
                                <li><a href="error-500.html">Error 500</a></li>
                                <li><a href="error-503.html">Error 503</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="col mega-box">
                            <div class="link-section">
                              <div class="submenu-title">
                                <h5> Authentication</h5>
                              </div>
                              <ul class="submenu-content opensubmegamenu">
                                <li><a href="login.html">Login Simple</a></li>
                                <li><a href="login-image.html">Login with Bg Image</a></li>
                                <li><a href="login-video.html">Login with Bg video</a></li>
                                <li><a href="signup.html">Register Simple</a></li>
                                <li><a href="signup-image.html">Register with Bg Image</a></li>
                                <li><a href="signup-video.html">Register with Bg video</a></li>
                                <li><a href="unlock.html">Unlock User</a></li>
                                <li><a href="forget-password.html">Forget Password</a></li>
                                <li><a href="reset-password.html">Reset Password</a></li>
                                <li><a href="maintenance.html">Maintenance</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="col mega-box">
                            <div class="link-section">
                              <div class="submenu-title">
                                <h5>Coming Soon</h5>
                              </div>
                              <ul class="submenu-content opensubmegamenu">
                                <li><a href="comingsoon.html">Coming Simple</a></li>
                                <li><a href="comingsoon-bg-video.html">Coming with Bg video</a></li>
                                <li><a href="comingsoon-bg-img.html">Coming with Bg Image</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="col mega-box">
                            <div class="link-section">
                              <div class="submenu-title">
                                <h5>Email templates</h5>
                              </div>
                              <ul class="submenu-content opensubmegamenu">
                                <li><a href="basic-template.html">Basic Email</a></li>
                                <li><a href="email-header.html">Basic With Header</a></li>
                                <li><a href="template-email.html">Ecomerce Template</a></li>
                                <li><a href="template-email-2.html">Email Template 2</a></li>
                                <li><a href="ecommerce-templates.html">Ecommerce Email</a></li>
                                <li><a href="email-order-success.html">Order Success</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="sidebar-title">
                    <div>
                      <h6>Miscellaneous</h6>
                      <p>Bouns pages & apps</p>
                    </div>
                  </li>
                  <li class="dropdown">
                    <a class="nav-link menu-title" href="#"><i data-feather="image"></i><span>Gallery</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="gallery.html">Gallery Grid</a></li>
                      <li><a href="gallery-with-description.html">Gallery Grid Desc</a></li>
                      <li><a href="gallery-masonry.html">Masonry Gallery</a></li>
                      <li><a href="masonry-gallery-with-disc.html">Masonry with Desc</a></li>
                      <li><a href="gallery-hover.html">Hover Effects</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a class="nav-link menu-title" href="#"><i data-feather="film"></i><span>Blog</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="blog.html">Blog Details</a></li>
                      <li><a href="blog-single.html">Blog Single</a></li>
                      <li><a href="add-post.html">Add Post</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="faq.html"><i data-feather="help-circle"> </i><span>FAQ</span></a></li>
                  <li class="dropdown">
                    <a class="nav-link menu-title" href="#"><i data-feather="package"></i><span>Job Search</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="job-cards-view.html">Cards view</a></li>
                      <li><a href="job-list-view.html">List View</a></li>
                      <li><a href="job-details.html">Job Details</a></li>
                      <li><a href="job-apply.html">Apply</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a class="nav-link menu-title" href="#"><i data-feather="radio"></i><span>Learning</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="learning-list-view.html">Learning List</a></li>
                      <li><a href="learning-detailed.html">Detailed Course</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a class="nav-link menu-title" href="#"><i data-feather="map"></i><span>Maps</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="map-js.html">Maps JS</a></li>
                      <li><a href="projectcreate.html">Create new</a></li>
                      <li><a href="vector-map.html">Vector Maps</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a class="nav-link menu-title" href="#"><i data-feather="edit"></i><span>Editors</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="summernote.html">Summer Note</a></li>
                      <li><a href="ckeditor.html">CK editor</a></li>
                      <li><a href="simple-MDE.html">MDE editor</a></li>
                      <li><a href="ace-code-editor.html">ACE code editor </a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="knowledgebase.html"><i data-feather="sunrise"> </i><span>Knowledgebase</span></a></li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="support-ticket.html"><i data-feather="users"> </i><span>Support Ticket</span></a></li>
                </ul>
              </div>
              <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </div>
          </nav>
        </header>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-6">
                  <h3>
                     Project Create</h3>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('/')}}"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Apps</li>
                  </ol>
                </div>
                <div class="col-6">
                  <!-- Bookmark Start-->
                  <div class="bookmark pull-right">
                    <ul>
                      <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Chat"><i data-feather="message-square"></i></a></li>
                      <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Icons"><i data-feather="command"></i></a></li>
                      <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Learning"><i data-feather="layers"></i></a></li>
                      <li><a href="#"><i class="bookmark-search" data-feather="star"></i></a>
                        <form class="form-inline search-form">
                          <div class="form-group form-control-search">
                            <input type="text" placeholder="Search..">
                          </div>
                        </form>
                      </li>
                    </ul>
                  </div>
                  <!-- Bookmark Ends-->
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-body">
                    <div class="form theme-form">
                      <div class="row">
                        <div class="col">
                          <div class="form-group">
                            <label>Project Title</label>
                            <input class="form-control" type="text" placeholder="Project name *">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="form-group">
                            <label>Client name</label>
                            <input class="form-control" type="text" placeholder="Name client or company name">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label>Project Rate</label>
                            <input class="form-control" type="text" placeholder="Enter project Rate">
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label>Project Type</label>
                            <select class="form-control digits">
                              <option>Hourly</option>
                              <option>Fix price</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label>Priority</label>
                            <select class="form-control digits">
                              <option>Low</option>
                              <option>Medium</option>
                              <option>High</option>
                              <option>Urgent</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label>Project Size</label>
                            <select class="form-control digits">
                              <option>Small</option>
                              <option>Medium</option>
                              <option>Big</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label>Starting date</label>
                            <input class="datepicker-here form-control" type="text" data-language="en">
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label>Ending date</label>
                            <input class="datepicker-here form-control" type="text" data-language="en">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="form-group">
                            <label>Enter some Details</label>
                            <textarea class="form-control" id="exampleFormControlTextarea4" rows="3"></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="form-group">
                            <label>Upload project file</label>
                            <form class="dropzone digits" id="singleFileUpload" action="/upload.php">
                              <div class="dz-message needsclick"><i class="icon-cloud-up"></i>
                                <h6>Drop files here or click to upload.</h6><span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="form-group mb-0"><a class="btn btn-success mr-3" href="#">Add</a><a class="btn btn-danger" href="#">Cancel</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 footer-copyright">
                <p class="mb-0">Copyright 2020 © Cuba All rights reserved.</p>
              </div>
              <div class="col-md-6">
                <p class="pull-right mb-0">Developed with  <i class="fa fa-heart font-secondary"></i></p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- latest jquery-->
    <script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>
    <!-- Bootstrap js-->
    <script src="{{asset('assets/js/bootstrap/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap/bootstrap.js')}}"></script>
    <!-- feather icon js-->
    <script src="{{asset('assets/js/icons/feather-icon/feather.min.js')}}"></script>
    <script src="{{asset('assets/js/icons/feather-icon/feather-icon.js')}}"></script>
    <!-- Sidebar jquery-->
    <script src="{{asset('assets/js/sidebar-menu.js')}}"></script>
    <script src="{{asset('assets/js/config.js')}}"></script>
    <!-- Plugins JS start-->
    <script src="{{asset('assets/js/datepicker/date-picker/datepicker.js')}}"></script>
    <script src="{{asset('assets/js/datepicker/date-picker/datepicker.en.js')}}"></script>
    <script src="{{asset('assets/js/datepicker/date-picker/datepicker.custom.js')}}"></script>
    <script src="{{asset('assets/js/dropzone/dropzone.js')}}"></script>
    <script src="{{asset('assets/js/dropzone/dropzone-script.js')}}"></script>
    <script src="{{asset('assets/js/typeahead/handlebars.js')}}"></script>
    <script src="{{asset('assets/js/typeahead/typeahead.bundle.js')}}"></script>
    <script src="{{asset('assets/js/typeahead/typeahead.custom.js')}}"></script>
    <script src="{{asset('assets/js/typeahead-search/handlebars.js')}}"></script>
    <script src="{{asset('assets/js/typeahead-search/typeahead-custom.js')}}"></script>
    <script src="{{asset('assets/js/tooltip-init.js')}}"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{asset('assets/js/script.js')}}"></script>
    <script src="{{asset('assets/js/theme-customizer/customizer.js')}}"></script>
    <!-- login js-->
    <!-- Plugin used-->
  </body>
</html>