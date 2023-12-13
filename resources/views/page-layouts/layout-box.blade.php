<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
    <title>Cuba - Premium Admin Template Box Layout</title>
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
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/date-picker.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owlcarousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/prism.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/whether-icon.css')}}">
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.css')}}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <link id="color" rel="stylesheet" href="{{asset('assets/css/color-1.css')}}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">
  </head>
  <body class="light-only" main-theme-layout="box-layout">
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="loader-index"><span></span></div>
      <svg>
        <defs></defs>
        <filter id="goo">
          <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
          <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo">    </fecolormatrix>
        </filter>
      </svg>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper box-layout" id="pageWrapper">
      <!-- Page Header Start-->
      <div class="page-main-header">
        <div class="main-header-right row m-0">
          <form class="form-inline search-full" action="#" method="get">
            <div class="form-group w-100">
              <div class="Typeahead Typeahead--twitterUsers">
                <div class="u-posRelative">
                  <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search Cuba .." name="q" title="" autofocus>
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
          <div class="left-menu-header col horizontal-wrapper pl-0">
            <ul class="horizontal-menu">
              <li class="mega-menu">
                <a class="nav-link" href="#"><i data-feather="layers"></i><span>Bonus Ui</span></a>
                <div class="mega-menu-container menu-content">
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
                    <div class="lang"><i class="flag-icon flag-icon-{{ (App::getLocale() == 'en') ? 'us' : App::getLocale() }}"></i><span class="lang-txt">{{ App::getLocale() }}</span></div>
                  </div>
                  <div class="more_lang">
                    <a href="{{ route('lang', 'en' )}}" class="{{ (App::getLocale()  == 'en') ? 'active' : ''}}">
                      <div class="lang {{ (App::getLocale()  == 'en') ? 'selected' : ''}}" data-value="en"><i class="flag-icon flag-icon-us"></i> <span class="lang-txt">English</span><span> (US)</span></div>
                    </a>
                    <a href="{{ route('lang' , 'de' )}}" class="{{ (App::getLocale()  == 'en') ? 'active' : ''}}">
                      <div class="lang {{ (App::getLocale()  == 'de') ? 'selected' : ''}}" data-value="de"><i class="flag-icon flag-icon-de"></i> <span class="lang-txt">Deutsch</span></div>
                    </a>
                    <a href="{{ route('lang' , 'es' )}}" class="{{ (App::getLocale()  == 'en') ? 'active' : ''}}">
                      <div class="lang {{ (App::getLocale()  == 'es') ? 'selected' : ''}}" data-value="es"><i class="flag-icon flag-icon-es"></i> <span class="lang-txt">Español</span></div>
                    </a>
                    <a href="{{ route('lang' , 'fr' )}}" class="{{ (App::getLocale()  == 'en') ? 'active' : ''}}">
                      <div class="lang {{ (App::getLocale()  == 'fr') ? 'selected' : ''}}" data-value="fr"><i class="flag-icon flag-icon-fr"></i> <span class="lang-txt">Français</span></div>
                    </a>
                    <a href="{{ route('lang' , 'pt' )}}" class="{{ (App::getLocale()  == 'en') ? 'active' : ''}}">
                      <div class="lang {{ (App::getLocale()  == 'pt') ? 'selected' : ''}}" data-value="pt"><i class="flag-icon flag-icon-pt"></i> <span class="lang-txt">Português</span><span> (BR)</span></div>
                    </a>
                    <a href="{{ route('lang' , 'cn' )}}" class="{{ (App::getLocale()  == 'en') ? 'active' : ''}}">
                      <div class="lang {{ (App::getLocale()  == 'cn') ? 'selected' : ''}}" data-value="cn"><i class="flag-icon flag-icon-cn"></i> <span class="lang-txt">简体中文</span></div>
                    </a>
                    <a href="{{ route('lang' , 'ae' )}}" class="{{ (App::getLocale()  == 'en') ? 'active' : ''}}">
                      <div class="lang {{ (App::getLocale()  == 'ae') ? 'selected' : ''}}" data-value="en"><i class="flag-icon flag-icon-ae"></i> <span class="lang-txt">لعربية</span> <span> (ae)</span></div>
                    </a>
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
              <li>
                <div class="mode"><i class="fa fa-moon-o"></i></div>
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
                      <h6 class="mb-0"><a class="view-cart" href="cart.html">View Cart</a><a class="checkout f-right" href="#">Checkout</a></h6>
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
          <script id="result-template" type="text/x-handlebars-template">
            <div class="ProfileCard u-cf">                        
            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
            <div class="ProfileCard-details">
            <div class="ProfileCard-realName">{{@name}}</div>
            </div>
            </div>
          </script>
          <script id="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
        </div>
      </div>   
      <!-- Page Header Ends  -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper sidebar-icon">
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
                      <h6 class="lan-1"> {{ trans('lang.General') }}</h6>
                      <p class="lan-2">{{ trans('lang.Dashboards,widgets & layout.') }}</p>
                    </div>
                  </li>
                  <li class="dropdown">
                    <a class="nav-link menu-title {{request()->route()->getPrefix() == '/dashboard' ? 'active' : '' }}" href="#">
                      <i data-feather="home"></i><span class="lan-3">{{ trans('lang.Dashboards') }}</span>
                      <label class="badge badge-success">2</label>
                      <div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/dashboard' ? 'down' : 'right' }}"></i></div>
                    </a>
                    <ul class="nav-submenu menu-content" style="display: {{ request()->route()->getPrefix() == '/dashboard' ? 'block;' : 'none;' }}">
                      <li><a class="lan-4 {{ Route::currentRouteName()=='index' ? 'active' : '' }}" href="{{route('/')}}" >{{ trans('lang.Default') }}</a></li>
                      <li><a class="lan-5 {{ Route::currentRouteName()=='dashboard-02' ? 'active' : '' }}" href="{{route('dashboard-02')}}">{{ trans('lang.Ecommerce') }}</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a class="nav-link menu-title {{request()->route()->getPrefix() == '/widgets' ? 'active' : '' }}" href="#">
                      <i data-feather="airplay"></i><span class="lan-6">{{ trans('lang.Widgets') }}</span>
                      <div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/widgets' ? 'down' : 'right' }}"></i></div>
                    </a>
                    <ul class="nav-submenu menu-content" style="display: {{ request()->route()->getPrefix() == '/widgets' ? 'block;' : 'none;' }}">
                      <li><a href="{{route('general-widget')}}" class="{{ Route::currentRouteName()=='general-widget' ? 'active' : '' }}">{{ trans('lang.General') }}</a></li>
                      <li><a href="{{route('chart-widget')}}" class="{{ Route::currentRouteName()=='chart-widget' ? 'active' : '' }}">{{ trans('lang.Chart') }}</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a class="nav-link menu-title {{request()->route()->getPrefix() == '/page-layouts' ? 'active' : '' }}" href="#">
                      <i data-feather="layout"></i><span class="lan-7">{{ trans('lang.Page layout') }}</span>
                      <div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/page-layouts' ? 'down' : 'right' }}"></i></div>
                    </a>
                    <ul class="nav-submenu menu-content" style="display: {{ request()->route()->getPrefix() == '/page-layouts' ? 'block;' : 'none;' }}">
                      <li><a href="{{route('pages-layout-light')}}" class="{{ Route::currentRouteName()=='pages-layout-light' ? 'active' : '' }}">Light Layout</a></li>
                      <li><a href="{{route('pages-layout-rtl')}}" class="{{ Route::currentRouteName()=='pages-layout-rtl' ? 'active' : '' }}">RTL Layout</a></li>
                      <li><a href="{{route('pages-layout-dark')}}" class="{{ Route::currentRouteName()=='pages-layout-dark' ? 'active' : '' }}">Dark Layout</a></li>
                      <li><a href="{{route('pages-dark-rtl-layout')}}" class="{{ Route::currentRouteName()=='pages-dark-rtl-layout' ? 'active' : '' }}">Dark & RTL Layout</a></li>
                      <li><a href="{{route('pages-semi-dark')}}" class="{{ Route::currentRouteName()=='pages-semi-dark' ? 'active' : '' }}">Semi Dark</a></li>
                      <li><a href="{{route('pages-semi-dark-rtl')}}" class="{{ Route::currentRouteName()=='pages-semi-dark-rtl' ? 'active' : '' }}">Semi Dark & RTL</a></li>
                      <li><a href="{{route('pages-compact-layout')}}" class="{{ Route::currentRouteName()=='pages-compact-layout' ? 'active' : '' }}">Compact Layout</a></li>
                      <li><a href="{{route('pages-compact-rtl-layout')}}" class="{{ Route::currentRouteName()=='pages-compact-rtl-layout' ? 'active' : '' }}">Compact & RTL Layout</a></li>
                      <li><a href="{{route('pages-layout-box')}}" class="{{ Route::currentRouteName()=='pages-layout-box' ? 'active' : '' }}">Box Layout</a></li>
                      <li><a href="{{route('pages-vertical-layout')}}" class="{{ Route::currentRouteName()=='pages-vertical-layout' ? 'active' : '' }}">Vertical Layout</a></li>
                      <li><a href="{{route('pages-vertical-rtl-layout')}}" class="{{ Route::currentRouteName()=='pages-vertical-rtl-layout' ? 'active' : '' }}">Vertical & RTL Layout</a></li>
                      <li><a href="{{route('pages-dark-box-layout')}}" class="{{ Route::currentRouteName()=='pages-dark-box-layout' ? 'active' : '' }}">Dark & box Layout</a></li>
                      <li><a href="{{route('pages-vertical-box-layout')}}" class="{{ Route::currentRouteName()=='pages-vertical-box-layout' ? 'active' : '' }}">Vetical Box Layout</a></li>
                      <li><a href="{{route('pages-compact-dark-layout')}}" class="{{ Route::currentRouteName()=='pages-compact-dark-layout' ? 'active' : '' }}">Compact Dark Layout</a></li>
                      <li><a href="{{route('pages-compact-dark-rtl-layout')}}" class="{{ Route::currentRouteName()=='pages-compact-dark-rtl-layout' ? 'active' : '' }}">Compact Dark & RTL Layout</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-title">
                    <div>
                      <h6 class="lan-8">{{ trans('lang.Applications') }}</h6>
                      <p class="lan-9">{{ trans('lang.Ready to use Apps') }}</p>
                    </div>
                  </li>
                  <li class="dropdown">
                    <a class="nav-link menu-title {{request()->route()->getPrefix() == '/project' ? 'active' : '' }}" href="#">
                      <i data-feather="box"></i><span>{{ trans('lang.Project') }}
                      <label class="badge badge-danger">New</label></span>
                      <div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/project' ? 'down' : 'right' }}"></i></div>
                    </a>
                    <ul class="nav-submenu menu-content" style="display: {{ request()->route()->getPrefix() == '/project' ? 'block;' : 'none;' }}">
                      <li><a href="{{route('projects')}}" class="{{ Route::currentRouteName()=='projects' ? 'active' : '' }}">{{ trans('lang.Project List') }}</a></li>
                      <li><a href="{{route('projectcreate')}}" class="{{ Route::currentRouteName()=='projectcreate' ? 'active' : '' }}">{{ trans('lang.Create new') }}</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav {{ Route::currentRouteName()=='file-manager' ? 'active' : '' }}" href="{{route('file-manager')}}"><i data-feather="git-pull-request"> </i><span>{{ trans('lang.File manager') }}</span></a></li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav {{ Route::currentRouteName()=='kanban' ? 'active' : '' }}" href="{{route('kanban')}}"><i data-feather="monitor"> </i><span>kanban Board<label class="badge badge-primary">Latest</label></span></a>
                  </li>
                  <li class="dropdown">
                    <a class="nav-link menu-title {{request()->route()->getPrefix() == '/ecommerce' ? 'active' : '' }}" href="#">
                      <i data-feather="shopping-bag"></i><span>Ecommerce</span>
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
                    <a class="nav-link menu-title {{request()->route()->getPrefix() == '/email' ? 'active' : '' }}" href="#">
                      <i data-feather="mail"></i><span>Email</span>
                      <div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/email' ? 'down' : 'right' }}"></i></div>
                    </a>
                    <ul class="nav-submenu menu-content" style="display: {{request()->route()->getPrefix() == '/email' ? 'block' : 'none;' }};">
                      <li><a href="{{route('email-application')}}" class="{{ Route::currentRouteName()=='email-application' ? 'active' : '' }}">Email App</a></li>
                      <li><a href="{{route('email-compose')}}" class="{{ Route::currentRouteName()=='email-compose' ? 'active' : '' }}">Email Compose</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a class="nav-link menu-title {{request()->route()->getPrefix() == '/chat' ? 'active' : '' }}" href="#">
                      <i data-feather="message-circle"></i><span>Chat</span>
                      <div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/chat' ? 'down' : 'right' }}"></i></div>
                    </a>
                    <ul class="nav-submenu menu-content" style="display: {{request()->route()->getPrefix() == '/chat' ? 'block' : 'none;' }};">
                      <li><a href="{{route('chat')}}" class="{{ Route::currentRouteName()=='chat' ? 'active' : '' }}">Chat App</a></li>
                      <li><a href="{{route('chat-video')}}" class="{{ Route::currentRouteName()=='chat-video' ? 'active' : '' }}">Video chat</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a class="nav-link menu-title {{request()->route()->getPrefix() == '/users' ? 'active' : '' }}" href="#">
                      <i data-feather="users"></i><span>Users</span>
                      <div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/users' ? 'down' : 'right' }}"></i></div>
                    </a>
                    <ul class="nav-submenu menu-content" style="display: {{request()->route()->getPrefix() == '/users' ? 'block' : 'none;' }};">
                      <li><a href="{{route('user-profile')}}" class="{{ Route::currentRouteName()=='user-profile' ? 'active' : '' }}">Users Profile</a></li>
                      <li><a href="{{route('edit-profile')}}" class="{{ Route::currentRouteName()=='edit-profile' ? 'active' : '' }}">Users Edit</a></li>
                      <li><a href="{{route('user-cards')}}" class="{{ Route::currentRouteName()=='user-cards' ? 'active' : '' }}">Users Cards</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav {{ Route::currentRouteName()=='bookmark' ? 'active' : '' }}" href="{{route('bookmark')}}"><i data-feather="heart"> </i><span>Bookmarks</span></a></li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav {{ Route::currentRouteName()=='contacts' ? 'active' : '' }}" href="{{route('contacts')}}"><i data-feather="list"> </i><span>Contacts</span></a></li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav {{ Route::currentRouteName()=='task' ? 'active' : '' }}" href="{{route('task')}}"><i data-feather="check-square"> </i><span>Tasks</span></a></li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav {{ Route::currentRouteName()=='calendar-basic' ? 'active' : '' }}" href="{{route('calendar-basic')}}"><i data-feather="calendar"> </i><span>Calendar</span></a></li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav {{ Route::currentRouteName()=='social-app' ? 'active' : '' }}" href="{{route('social-app')}}"><i data-feather="zap"> </i><span>Social App</span></a></li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav {{ Route::currentRouteName()=='to-do' ? 'active' : '' }}" href="{{route('to-do')}}"><i data-feather="clock"> </i><span>To-Do</span></a></li>
                  <li class="sidebar-title">
                    <div>
                      <h6>Components</h6>
                      <p>UI Components & Elements </p>
                    </div>
                  </li>
                  <li class="dropdown">
                    <a class="nav-link menu-title {{request()->route()->getPrefix() == '/ui-kits' ? 'active' : '' }}" href="#">
                      <i data-feather="box"></i><span>Ui Kits</span>
                      <div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/ui-kits' ? 'down' : 'right' }}"></i></div>
                    </a>
                    <ul class="nav-submenu menu-content" style="display: {{ request()->route()->getPrefix() == '/ui-kits' ? 'block;' : 'none;' }}">
                      <li><a href="{{route('state-color')}}" class="{{ Route::currentRouteName()=='state-color' ? 'active' : '' }}">State color</a></li>
                      <li><a href="{{route('typography')}}" class="{{ Route::currentRouteName()=='typography' ? 'active' : '' }}">Typography</a></li>
                      <li><a href="{{route('avatars')}}" class="{{ Route::currentRouteName()=='avatars' ? 'active' : '' }}">Avatars</a></li>
                      <li><a href="{{route('helper-classes')}}" class="{{ Route::currentRouteName()=='helper-classes' ? 'active' : '' }}">helper classes</a></li>
                      <li><a href="{{route('grid')}}" class="{{ Route::currentRouteName()=='grid' ? 'active' : '' }}">Grid</a></li>
                      <li><a href="{{route('tag-pills')}}" class="{{ Route::currentRouteName()=='tag-pills' ? 'active' : '' }}">Tag & pills</a></li>
                      <li><a href="{{route('progress-bar')}}" class="{{ Route::currentRouteName()=='progress-bar' ? 'active' : '' }}">Progress</a></li>
                      <li><a href="{{route('modal')}}" class="{{ Route::currentRouteName()=='modal' ? 'active' : '' }}">Modal</a></li>
                      <li><a href="{{route('alert')}}" class="{{ Route::currentRouteName()=='alert' ? 'active' : '' }}">Alert</a></li>
                      <li><a href="{{route('popover')}}" class="{{ Route::currentRouteName()=='popover' ? 'active' : '' }}">Popover</a></li>
                      <li><a href="{{route('tooltip')}}" class="{{ Route::currentRouteName()=='tooltip' ? 'active' : '' }}">Tooltip</a></li>
                      <li><a href="{{route('loader')}}" class="{{ Route::currentRouteName()=='loader' ? 'active' : '' }}">Spinners</a></li>
                      <li><a href="{{route('dropdown')}}" class="{{ Route::currentRouteName()=='dropdown' ? 'active' : '' }}">Dropdown</a></li>
                      <li><a href="{{route('accordion')}}" class="{{ Route::currentRouteName()=='accordion' ? 'active' : '' }}">Accordion</a></li>
                      <li>
                        <a class="submenu-title {{ in_array(Route::currentRouteName(), ['tab-bootstrap','tab-material']) ? 'active' : '' }}" href="#">
                          Tabs
                          <div class="according-menu"><i class="fa fa-angle-{{ in_array(Route::currentRouteName(), ['tab-bootstrap','tab-material']) ? 'down' : 'right' }}"></i></div>
                        </a>
                        <ul class="nav-sub-childmenu submenu-content" style="display: {{ in_array(Route::currentRouteName(), ['tab-bootstrap','tab-material']) ? 'block' : 'none;' }};">
                          <li><a href="{{route('tab-bootstrap')}}" class="{{ Route::currentRouteName()=='tab-bootstrap' ? 'active' : '' }}">Bootstrap Tabs</a></li>
                          <li><a href="{{route('tab-material')}}" class="{{ Route::currentRouteName()=='tab-material' ? 'active' : '' }}">Line Tabs</a></li>
                        </ul>
                      </li>
                      <li><a href="{{route('box-shadow')}}" class="{{ Route::currentRouteName()=='box-shadow' ? 'active' : '' }}">Shadow</a></li>
                      <li><a href="{{route('list')}}" class="{{ Route::currentRouteName()=='list' ? 'active' : '' }}">Lists</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a class="nav-link menu-title {{request()->route()->getPrefix() == '/bonus-ui' ? 'active' : '' }}" href="#">
                      <i data-feather="folder-plus"></i><span>Bonus Ui</span>
                      <div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/ui-kits' ? 'down' : 'right' }}"></i></div>
                    </a>
                    <ul class="nav-submenu menu-content" style="display: {{ request()->route()->getPrefix() == '/bonus-ui' ? 'block;' : 'none;' }}">
                      <li><a href="{{route('scrollable')}}" class="{{ Route::currentRouteName()=='scrollable' ? 'active' : '' }}">Scrollable</a></li>
                      <li><a href="{{route('tree')}}" class="{{ Route::currentRouteName()=='tree' ? 'active' : '' }}">Tree view</a></li>
                      <li><a href="{{route('bootstrap-notify')}}" class="{{ Route::currentRouteName()=='bootstrap-notify' ? 'active' : '' }}">Bootstrap Notify</a></li>
                      <li><a href="{{route('rating')}}" class="{{ Route::currentRouteName()=='rating' ? 'active' : '' }}">Rating</a></li>
                      <li><a href="{{route('dropzone')}}" class="{{ Route::currentRouteName()=='dropzone' ? 'active' : '' }}">dropzone</a></li>
                      <li><a href="{{route('tour')}}" class="{{ Route::currentRouteName()=='tour' ? 'active' : '' }}">Tour</a></li>
                      <li><a href="{{route('sweet-alert2')}}" class="{{ Route::currentRouteName()=='sweet-alert2' ? 'active' : '' }}">SweetAlert2</a></li>
                      <li><a href="{{route('modal-animated')}}" class="{{ Route::currentRouteName()=='modal-animated' ? 'active' : '' }}">Animated Modal</a></li>
                      <li><a href="{{route('owl-carousel')}}" class="{{ Route::currentRouteName()=='owl-carousel' ? 'active' : '' }}">Owl Carousel</a></li>
                      <li><a href="{{route('ribbons')}}" class="{{ Route::currentRouteName()=='ribbons' ? 'active' : '' }}">Ribbons</a></li>
                      <li><a href="{{route('pagination')}}" class="{{ Route::currentRouteName()=='pagination' ? 'active' : '' }}">Pagination</a></li>
                      <li><a href="{{route('steps')}}" class="{{ Route::currentRouteName()=='steps' ? 'active' : '' }}">Steps</a></li>
                      <li><a href="{{route('breadcrumb')}}" class="{{ Route::currentRouteName()=='breadcrumb' ? 'active' : '' }}">Breadcrumb</a></li>
                      <li><a href="{{route('range-slider')}}" class="{{ Route::currentRouteName()=='range-slider' ? 'active' : '' }}">Range Slider</a></li>
                      <li><a href="{{route('image-cropper')}}" class="{{ Route::currentRouteName()=='image-cropper' ? 'active' : '' }}">Image cropper</a></li>
                      <li><a href="{{route('sticky')}}" class="{{ Route::currentRouteName()=='sticky' ? 'active' : '' }}">Sticky</a></li>
                      <li><a href="{{route('basic-card')}}" class="{{ Route::currentRouteName()=='basic-card' ? 'active' : '' }}">Basic Card</a></li>
                      <li><a href="{{route('creative-card')}}" class="{{ Route::currentRouteName()=='creative-card' ? 'active' : '' }}">Creative Card</a></li>
                      <li><a href="{{route('tabbed-card')}}" class="{{ Route::currentRouteName()=='tabbed-card' ? 'active' : '' }}">Tabbed Card</a></li>
                      <li><a href="{{route('dragable-card')}}" class="{{ Route::currentRouteName()=='dragable-card' ? 'active' : '' }}">Draggable Card</a></li>
                      <li>
                        <a class="submenu-title {{ in_array(Route::currentRouteName(), ['timeline-v-1','timeline-v-2', 'timeline-small']) ? 'active' : '' }}" href="#">
                          Timeline<span class="sub-arrow"><i class="fa fa-angle-right"></i></span>
                          <div class="according-menu"><i class="fa fa-angle-{{ in_array(Route::currentRouteName(), ['timeline-v-1','timeline-v-2', 'timeline-small']) ? 'down' : 'right' }}"></i></div>
                        </a>
                        <ul class="nav-sub-childmenu submenu-content"  style="display: {{ in_array(Route::currentRouteName(), ['timeline-v-1','timeline-v-2', 'timeline-small']) ? 'block' : 'none;' }};">
                          <li><a href="{{route('timeline-v-1')}}" class="{{ Route::currentRouteName()=='timeline-v-1' ? 'active' : '' }}">Timeline 1</a></li>
                          <li><a href="{{route('timeline-v-2')}}" class="{{ Route::currentRouteName()=='timeline-v-2' ? 'active' : '' }}">Timeline 2</a></li>
                          <li><a href="{{route('timeline-small')}}" class="{{ Route::currentRouteName()=='timeline-small' ? 'active' : '' }}">Timeline 3</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a class="nav-link menu-title {{request()->route()->getPrefix() == '/builders' ? 'active' : '' }}" href="#">
                      <i data-feather="edit-3"></i><span>Builders</span>
                      <div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/builders' ? 'down' : 'right' }}"></i></div>
                    </a>
                    <ul class="nav-submenu menu-content" style="display: {{ request()->route()->getPrefix() == '/builders' ? 'block;' : 'none;' }}">
                      <li><a href="{{route('form-builder-1')}}" class="{{ Route::currentRouteName()=='form-builder-1' ? 'active' : '' }}"> Form Builder 1</a></li>
                      <li><a href="{{route('form-builder-2')}}" class="{{ Route::currentRouteName()=='form-builder-2' ? 'active' : '' }}"> Form Builder 2</a></li>
                      <li><a href="{{route('pagebuild')}}" class="{{ Route::currentRouteName()=='pagebuild' ? 'active' : '' }}">Page Builder</a></li>
                      <li><a href="{{route('button-builder')}}" class="{{ Route::currentRouteName()=='button-builder' ? 'active' : '' }}">Button Builder</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a class="nav-link menu-title {{request()->route()->getPrefix() == '/animation' ? 'active' : '' }}" href="#">
                      <i data-feather="cloud-drizzle"></i><span>Animation</span>
                      <div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/animation' ? 'down' : 'right' }}"></i></div>
                    </a>
                    <ul class="nav-submenu menu-content" style="display: {{ request()->route()->getPrefix() == '/animation' ? 'block;' : 'none;' }}">
                      <li><a href="{{route('animate')}}" class="{{ Route::currentRouteName()=='animate' ? 'active' : '' }}">Animate</a></li>
                      <li><a href="{{route('scroll-reval')}}" class="{{ Route::currentRouteName()=='scroll-reval' ? 'active' : '' }}">Scroll Reveal</a></li>
                      <li><a href="{{route('aos')}}" class="{{ Route::currentRouteName()=='aos' ? 'active' : '' }}">AOS animation</a></li>
                      <li><a href="{{route('tilt')}}" class="{{ Route::currentRouteName()=='tilt' ? 'active' : '' }}">Tilt Animation</a></li>
                      <li><a href="{{route('wow')}}" class="{{ Route::currentRouteName()=='wow' ? 'active' : '' }}">Wow Animation</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a class="nav-link menu-title {{request()->route()->getPrefix() == '/icons' ? 'active' : '' }}" href="#">
                      <i data-feather="command"></i><span>Icons</span>
                      <div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/icons' ? 'down' : 'right' }}"></i></div>
                    </a>
                    <ul class="nav-submenu menu-content" style="display: {{ request()->route()->getPrefix() == '/icons' ? 'block;' : 'none;' }}">
                      <li><a href="{{route('flag-icon')}}" class="{{ Route::currentRouteName()=='flag-icon' ? 'active' : '' }}">Flag icon</a></li>
                      <li><a href="{{route('font-awesome')}}" class="{{ Route::currentRouteName()=='font-awesome' ? 'active' : '' }}">Fontawesome Icon</a></li>
                      <li><a href="{{route('ico-icon')}}" class="{{ Route::currentRouteName()=='ico-icon' ? 'active' : '' }}">Ico Icon</a></li>
                      <li><a href="{{route('themify-icon')}}" class="{{ Route::currentRouteName()=='themify-icon' ? 'active' : '' }}">Thimify Icon</a></li>
                      <li><a href="{{route('feather-icon')}}" class="{{ Route::currentRouteName()=='feather-icon' ? 'active' : '' }}">Feather icon</a></li>
                      <li><a href="{{route('whether-icon')}}" class="{{ Route::currentRouteName()=='whether-icon' ? 'active' : '' }}">Whether Icon</a></li>
                      <li><a href="{{route('simple-line-icon')}}" class="{{ Route::currentRouteName()=='simple-line-icon' ? 'active' : '' }}">Simple line Icon</a></li>
                      <li><a href="{{route('material-design-icon')}}" class="{{ Route::currentRouteName()=='material-design-icon' ? 'active' : '' }}">Material Design Icon</a></li>
                      <li><a href="{{route('pe7-icon')}}" class="{{ Route::currentRouteName()=='pe7-icon' ? 'active' : '' }}">pe7 icon</a></li>
                      <li><a href="{{route('typicons-icon')}}" class="{{ Route::currentRouteName()=='typicons-icon' ? 'active' : '' }}">Typicons icon</a></li>
                      <li><a href="{{route('ionic-icon')}}" class="{{ Route::currentRouteName()=='ionic-icon' ? 'active' : '' }}">Ionic icon</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a class="nav-link menu-title {{request()->route()->getPrefix() == '/buttons' ? 'active' : '' }}" href="#">
                      <i data-feather="cloud"></i><span>Buttons</span>
                      <div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/buttons' ? 'down' : 'right' }}"></i></div>
                    </a>
                    <ul class="nav-submenu menu-content" style="display: {{ request()->route()->getPrefix() == '/buttons' ? 'block;' : 'none;' }}">
                      <li><a href="{{route('buttons')}}" class="{{ Route::currentRouteName()=='buttons' ? 'active' : '' }}">Default Style</a></li>
                      <li><a href="{{route('buttons-flat')}}" class="{{ Route::currentRouteName()=='buttons-flat' ? 'active' : '' }}">Flat Style</a></li>
                      <li><a href="{{route('buttons-edge')}}" class="{{ Route::currentRouteName()=='buttons-edge' ? 'active' : '' }}">Edge Style</a></li>
                      <li><a href="{{route('raised-button')}}" class="{{ Route::currentRouteName()=='raised-button' ? 'active' : '' }}">Raised Style</a></li>
                      <li><a href="{{route('button-group')}}" class="{{ Route::currentRouteName()=='button-group' ? 'active' : '' }}">Button Group</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a class="nav-link menu-title {{request()->route()->getPrefix() == '/charts' ? 'active' : '' }}" href="#">
                      <i data-feather="bar-chart"></i><span>Charts</span>
                      <div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/charts' ? 'down' : 'right' }}"></i></div>
                    </a>
                    <ul class="nav-submenu menu-content" style="display: {{ request()->route()->getPrefix() == '/charts' ? 'block;' : 'none;' }}">
                      <li><a href="{{route('chart-apex')}}" class="{{ Route::currentRouteName()=='chart-apex' ? 'active' : '' }}">Apex Chart</a></li>
                      <li><a href="{{route('chart-google')}}" class="{{ Route::currentRouteName()=='chart-google' ? 'active' : '' }}">Google Chart</a></li>
                      <li><a href="{{route('chart-sparkline')}}" class="{{ Route::currentRouteName()=='chart-sparkline' ? 'active' : '' }}">Sparkline chart</a></li>
                      <li><a href="{{route('chart-flot')}}" class="{{ Route::currentRouteName()=='chart-flot' ? 'active' : '' }}">Flot Chart</a></li>
                      <li><a href="{{route('chart-knob')}}" class="{{ Route::currentRouteName()=='chart-knob' ? 'active' : '' }}">Knob Chart</a></li>
                      <li><a href="{{route('chart-morris')}}" class="{{ Route::currentRouteName()=='chart-morris' ? 'active' : '' }}">Morris Chart</a></li>
                      <li><a href="{{route('chartjs')}}" class="{{ Route::currentRouteName()=='chartjs' ? 'active' : '' }}">Chatjs Chart</a></li>
                      <li><a href="{{route('chartist')}}" class="{{ Route::currentRouteName()=='chartist' ? 'active' : '' }}">Chartist Chart</a></li>
                      <li><a href="{{route('chart-peity')}}" class="{{ Route::currentRouteName()=='chart-peity' ? 'active' : '' }}">Peity Chart </a></li>
                    </ul>
                  </li>
                  <li class="sidebar-title">
                    <div>
                      <h6>Forms & Table</h6>
                      <p>Ready to use froms & tables </p>
                    </div>
                  </li>
                  <li class="dropdown">
                    <a class="nav-link menu-title {{request()->route()->getPrefix() == '/forms' ? 'active' : '' }}" href="#">
                      <i data-feather="file-text"></i><span>Forms</span>
                      <div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/forms' ? 'down' : 'right' }}"></i></div>
                    </a>
                    <ul class="nav-submenu menu-content" style="display: {{ request()->route()->getPrefix() == '/forms' ? 'block;' : 'none;' }}">
                      <li>
                        <a class="submenu-title {{ in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : '' }}" href="#">
                          Form Controls
                          <div class="according-menu"><i class="fa fa-angle-{{ in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'down' : 'right' }}"></i></div>
                        </a>
                        <ul class="nav-sub-childmenu submenu-content" style="display: {{ in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'block' : 'none;' }};">
                          <li><a href="{{route('form-validation')}}" class="{{ Route::currentRouteName()=='form-validation' ? 'active' : '' }}">Form Validation</a></li>
                          <li><a href="{{route('base-input')}}" class="{{ Route::currentRouteName()=='base-input' ? 'active' : '' }}">Base Inputs</a></li>
                          <li><a href="{{route('radio-checkbox-control')}}" class="{{ Route::currentRouteName()=='radio-checkbox-control' ? 'active' : '' }}">Checkbox & Radio</a></li>
                          <li><a href="{{route('input-group')}}" class="{{ Route::currentRouteName()=='input-group' ? 'active' : '' }}">Input Groups</a></li>
                          <li><a href="{{route('megaoptions')}}" class="{{ Route::currentRouteName()=='megaoptions' ? 'active' : '' }}">Mega Options</a></li>
                        </ul>
                      </li>
                      <li>
                        <a class="submenu-title {{ in_array(Route::currentRouteName(), ['datepicker', 'time-picker', 'datetimepicker','daterangepicker' ,'touchspin', 'select2', 'switch', 'typeahead', 'clipboard']) ? 'active' : '' }}" href="#">
                          Form Widgets
                          <div class="according-menu"><i class="fa fa-angle-{{ in_array(Route::currentRouteName(), ['datepicker', 'time-picker', 'datetimepicker','daterangepicker' ,'touchspin', 'select2', 'switch', 'typeahead', 'clipboard']) ? 'down' : 'right' }}"></i></div>
                        </a>
                        <ul class="nav-sub-childmenu submenu-content" style="display: {{ in_array(Route::currentRouteName(), ['datepicker', 'time-picker', 'datetimepicker','daterangepicker' ,'touchspin', 'select2', 'switch', 'typeahead', 'clipboard']) ? 'block' : 'none;' }};">
                          <li><a href="{{route('datepicker')}}" class="{{ Route::currentRouteName()=='datepicker' ? 'active' : '' }}">Datepicker</a></li>
                          <li><a href="{{route('time-picker')}}" class="{{ Route::currentRouteName()=='time-picker' ? 'active' : '' }}">Timepicker</a></li>
                          <li><a href="{{route('datetimepicker')}}" class="{{ Route::currentRouteName()=='datetimepicker' ? 'active' : '' }}">Datetimepicker</a></li>
                          <li><a href="{{route('daterangepicker')}}" class="{{ Route::currentRouteName()=='daterangepicker' ? 'active' : '' }}">Daterangepicker</a></li>
                          <li><a href="{{route('touchspin')}}" class="{{ Route::currentRouteName()=='touchspin' ? 'active' : '' }}">Touchspin</a></li>
                          <li><a href="{{route('select2')}}" class="{{ Route::currentRouteName()=='select2' ? 'active' : '' }}">Select2</a></li>
                          <li><a href="{{route('switch')}}" class="{{ Route::currentRouteName()=='switch' ? 'active' : '' }}">Switch</a></li>
                          <li><a href="{{route('typeahead')}}" class="{{ Route::currentRouteName()=='typeahead' ? 'active' : '' }}">Typeahead</a></li>
                          <li><a href="{{route('clipboard')}}" class="{{ Route::currentRouteName()=='clipboard' ? 'active' : '' }}">Clipboard</a></li>
                        </ul>
                      </li>
                      <li>
                        <a class="submenu-title {{ in_array(Route::currentRouteName(), ['default-form', 'form-wizard', 'form-wizard-two', 'form-wizard-three', 'form-wizard-four']) ? 'active' : '' }}" href="#">
                          Form layout
                          <div class="according-menu"><i class="fa fa-angle-{{ in_array(Route::currentRouteName(), ['default-form', 'form-wizard', 'form-wizard-two', 'form-wizard-three', 'form-wizard-four']) ? 'down' : 'right' }}"></i></div>
                        </a>
                        <ul class="nav-sub-childmenu submenu-content" style="display: {{ in_array(Route::currentRouteName(), ['default-form', 'form-wizard', 'form-wizard-two', 'form-wizard-three', 'form-wizard-four']) ? 'block' : 'none;' }};">
                          <li><a href="{{route('default-form')}}" class="{{ Route::currentRouteName()=='default-form' ? 'active' : '' }}">Default Forms</a></li>
                          <li><a href="{{route('form-wizard')}}" class="{{ Route::currentRouteName()=='form-wizard' ? 'active' : '' }}">Form Wizard 1</a></li>
                          <li><a href="{{route('form-wizard-two')}}" class="{{ Route::currentRouteName()=='form-wizard-two' ? 'active' : '' }}">Form Wizard 2</a></li>
                          <li><a href="{{route('form-wizard-three')}}" class="{{ Route::currentRouteName()=='form-wizard-three' ? 'active' : '' }}">Form Wizard 3</a></li>
                          <li><a href="{{route('form-wizard-four')}}" class="{{ Route::currentRouteName()=='form-wizard-four' ? 'active' : '' }}">Form Wizard 4</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a class="nav-link menu-title {{request()->route()->getPrefix() == '/tables' ? 'active' : '' }}" href="#">
                      <i data-feather="server"></i><span>Tables</span>
                      <div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/tables' ? 'down' : 'right' }}"></i></div>
                    </a>
                    <ul class="nav-submenu menu-content" style="display: {{ request()->route()->getPrefix() == '/tables' ? 'block;' : 'none;' }}">
                      <li>
                        <a class="submenu-title {{ in_array(Route::currentRouteName(), ['bootstrap-basic-table', 'bootstrap-sizing-table', 'bootstrap-sizing-table', 'bootstrap-border-table', 'bootstrap-styling-table', 'table-components']) ? 'active' : '' }}" href="#">
                          Bootstrap Tables
                          <div class="according-menu"><i class="fa fa-angle-{{ in_array(Route::currentRouteName(), ['bootstrap-basic-table', 'bootstrap-sizing-table', 'bootstrap-sizing-table', 'bootstrap-border-table', 'bootstrap-styling-table', 'table-components']) ? 'down' : 'right' }}"></i></div>
                        </a>
                        <ul class="nav-sub-childmenu submenu-content" style="display: {{ in_array(Route::currentRouteName(), ['bootstrap-basic-table', 'bootstrap-sizing-table', 'bootstrap-sizing-table', 'bootstrap-border-table', 'bootstrap-styling-table', 'table-components']) ? 'block' : 'none;' }};">
                          <li><a href="{{route('bootstrap-basic-table')}}" class="{{ Route::currentRouteName()=='bootstrap-basic-table' ? 'active' : '' }}">Basic Tables</a></li>
                          <li><a href="{{route('bootstrap-sizing-table')}}" class="{{ Route::currentRouteName()=='bootstrap-sizing-table' ? 'active' : '' }}">Sizing Tables</a></li>
                          <li><a href="{{route('bootstrap-border-table')}}" class="{{ Route::currentRouteName()=='bootstrap-border-table' ? 'active' : '' }}">Border Tables</a></li>
                          <li><a href="{{route('bootstrap-styling-table')}}" class="{{ Route::currentRouteName()=='bootstrap-styling-table' ? 'active' : '' }}">Styling Tables</a></li>
                          <li><a href="{{route('table-components')}}" class="{{ Route::currentRouteName()=='table-components' ? 'active' : '' }}">Table components</a></li>
                        </ul>
                      </li>
                      <li>
                        <a class="submenu-title {{ in_array(Route::currentRouteName(), ['datatable-basic-init', 'datatable-advance', 'datatable-styling', 'datatable-ajax', 'datatable-server-side', 'datatable-plugin', 'datatable-api']) ? 'active' : '' }}" href="#">
                          Data Tables
                          <div class="according-menu"><i class="fa fa-angle-{{ in_array(Route::currentRouteName(), ['datatable-basic-init', 'datatable-advance', 'datatable-styling', 'datatable-ajax', 'datatable-server-side', 'datatable-plugin', 'datatable-api', 'datatable-data-source']) ? 'down' : 'right' }}"></i></div>
                        </a>
                        <ul class="nav-sub-childmenu submenu-content" style="display: {{ in_array(Route::currentRouteName(), ['datatable-basic-init', 'datatable-advance', 'datatable-styling', 'datatable-ajax', 'datatable-server-side', 'datatable-plugin', 'datatable-api', 'datatable-data-source']) ? 'block' : 'none;' }};">
                          <li><a href="{{route('datatable-basic-init')}}" class="{{ Route::currentRouteName()=='datatable-basic-init' ? 'active' : '' }}">Basic Init</a></li>
                          <li><a href="{{route('datatable-advance')}}" class="{{ Route::currentRouteName()=='datatable-advance' ? 'active' : '' }}">Advance Init</a></li>
                          <li><a href="{{route('datatable-styling')}}" class="{{ Route::currentRouteName()=='datatable-styling' ? 'active' : '' }}">Styling</a></li>
                          <li><a href="{{route('datatable-ajax')}}" class="{{ Route::currentRouteName()=='datatable-ajax' ? 'active' : '' }}">AJAX</a></li>
                          <li><a href="{{route('datatable-server-side')}}" class="{{ Route::currentRouteName()=='datatable-server-side' ? 'active' : '' }}">Server Side</a></li>
                          <li><a href="{{route('datatable-plugin')}}" class="{{ Route::currentRouteName()=='datatable-plugin' ? 'active' : '' }}">Plug-in</a></li>
                          <li><a href="{{route('datatable-api')}}" class="{{ Route::currentRouteName()=='datatable-api' ? 'active' : '' }}">API</a></li>
                          <li><a href="{{route('datatable-data-source')}}" class="{{ Route::currentRouteName()=='datatable-data-source' ? 'active' : '' }}">Data Sources</a></li>
                        </ul>
                      </li>
                      <li>
                        <a class="submenu-title {{ in_array(Route::currentRouteName(), ['datatable-ext-autofill', 'datatable-ext-basic-button', 'datatable-ext-col-reorder', 'datatable-ext-fixed-header', 'datatable-ext-html-5-data-export', 'datatable-ext-responsive', 'datatable-ext-row-reorder', 'datatable-ext-scroller']) ? 'active' : '' }}" href="#">
                          Ex. Data Tables
                          <div class="according-menu"><i class="fa fa-angle-{{ in_array(Route::currentRouteName(), ['datatable-ext-autofill', 'datatable-ext-basic-button', 'datatable-ext-col-reorder', 'datatable-ext-fixed-header', 'datatable-ext-html-5-data-export', 'datatable-ext-key-table', 'datatable-ext-responsive', 'datatable-ext-row-reorder', 'datatable-ext-scroller']) ? 'down' : 'right' }}"></i></div>
                        </a>
                        <ul class="nav-sub-childmenu submenu-content" style="display: {{ in_array(Route::currentRouteName(), ['datatable-ext-autofill', 'datatable-ext-basic-button', 'datatable-ext-col-reorder', 'datatable-ext-fixed-header', 'datatable-ext-html-5-data-export', 'datatable-ext-key-table', 'datatable-ext-responsive', 'datatable-ext-row-reorder', 'datatable-ext-scroller']) ? 'block' : 'none;' }};">
                          <li><a href="{{route('datatable-ext-autofill')}}" class="{{ Route::currentRouteName()=='datatable-ext-autofill' ? 'active' : '' }}">Auto Fill</a></li>
                          <li><a href="{{route('datatable-ext-basic-button')}}" class="{{ Route::currentRouteName()=='datatable-ext-basic-button' ? 'active' : '' }}">Basic Button</a></li>
                          <li><a href="{{route('datatable-ext-col-reorder')}}" class="{{ Route::currentRouteName()=='datatable-ext-col-reorder' ? 'active' : '' }}">Column Reorder</a></li>
                          <li><a href="{{route('datatable-ext-fixed-header')}}" class="{{ Route::currentRouteName()=='datatable-ext-fixed-header' ? 'active' : '' }}">Fixed Header</a></li>
                          <li><a href="{{route('datatable-ext-html-5-data-export')}}" class="{{ Route::currentRouteName()=='datatable-ext-html-5-data-export' ? 'active' : '' }}">HTML 5 Export</a></li>
                          <li><a href="{{route('datatable-ext-key-table')}}" class="{{ Route::currentRouteName()=='datatable-ext-key-table' ? 'active' : '' }}">Key Table</a></li>
                          <li><a href="{{route('datatable-ext-responsive')}}" class="{{ Route::currentRouteName()=='datatable-ext-responsive' ? 'active' : '' }}">Responsive</a></li>
                          <li><a href="{{route('datatable-ext-row-reorder')}}" class="{{ Route::currentRouteName()=='datatable-ext-row-reorder' ? 'active' : '' }}">Row Reorder</a></li>
                          <li><a href="{{route('datatable-ext-scroller')}}" class="{{ Route::currentRouteName()=='datatable-ext-scroller' ? 'active' : '' }}">Scroller</a></li>
                        </ul>
                      </li>
                      <li><a href="{{route('jsgrid-table')}}" class="{{ Route::currentRouteName()=='jsgrid-table' ? 'active' : '' }}">Js Grid Table</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-title">
                    <div>
                      <h6>Pages</h6>
                      <p>All neccesory pages added</p>
                    </div>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav {{ Route::currentRouteName()=='landing-page' ? 'active' : '' }}" href="{{route('landing-page')}}"><i data-feather="cast"> </i><span>Landing page</span></a></li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav {{ Route::currentRouteName()=='sample-page' ? 'active' : '' }}" href="{{route('sample-page')}}"><i data-feather="file-text"> </i><span>Sample page</span></a></li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav {{ Route::currentRouteName()=='internationalization' ? 'active' : '' }}" href="{{route('internationalization')}}"><i data-feather="globe"> </i><span>Internationalization</span></a></li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="{{route('layout-light')}}" target="_blank"><i data-feather="anchor"></i><span>Starter kit</span></a></li>
                  <li class="mega-menu">
                    <a class="nav-link menu-title {{request()->route()->getPrefix() == '/others' ? 'active' : '' }}" href="#">
                      <i data-feather="layers"></i><span>Others</span>
                      <div class="according-menu other"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/others' ? 'down' : 'right' }}"></i></div>
                    </a>
                    <div class="mega-menu-container menu-content" style="display: {{request()->route()->getPrefix() == '/others' ? 'block;' : 'none;' }}">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col mega-box">
                            <div class="link-section">
                              <div class="submenu-title">
                                <h5>Search Pages</h5>
                                <div class="according-menu"><i class="fa fa-angle-{{ in_array(Route::currentRouteName(), ['search', 'search-images', 'search-video']) ? 'down' : 'right' }}"></i></div>
                              </div>
                              <ul class="submenu-content opensubmegamenu" style="display: {{ in_array(Route::currentRouteName(), ['search', 'search-images', 'search-video']) ? 'block;' : 'none;' }}">
                                <li><a href="{{route('search')}}" class="{{ Route::currentRouteName()=='search' ? 'active' : '' }}">Search Website</a></li>
                                <li><a href="{{route('search-images')}}" class="{{ Route::currentRouteName()=='search-images' ? 'active' : '' }}">Search Images</a></li>
                                <li><a href="{{route('search-video')}}" class="{{ Route::currentRouteName()=='search-video' ? 'active' : '' }}">Search Video</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="col mega-box">
                            <div class="link-section">
                              <div class="submenu-title">
                                <h5>Error Page</h5>
                                <div class="according-menu"><i class="fa fa-angle-{{ in_array(Route::currentRouteName(), ['error-400', 'error-401', 'error-403', 'error-404', 'error-500', 'error-503']) ? 'down' : 'right' }}"></i></div>
                              </div>
                              <ul class="submenu-content opensubmegamenu" style="display: {{ in_array(Route::currentRouteName(), ['error-400', 'error-401', 'error-403', 'error-404', 'error-500', 'error-503']) ? 'block;' : 'none;' }}">
                                <li><a href="{{route('error-400')}}" class="{{ Route::currentRouteName()=='error-400' ? 'active' : '' }}">Error 400</a></li>
                                <li><a href="{{route('error-401')}}" class="{{ Route::currentRouteName()=='error-401' ? 'active' : '' }}">Error 401</a></li>
                                <li><a href="{{route('error-403')}}" class="{{ Route::currentRouteName()=='error-403' ? 'active' : '' }}">Error 403</a></li>
                                <li><a href="{{route('error-404')}}" class="{{ Route::currentRouteName()=='error-404' ? 'active' : '' }}">Error 404</a></li>
                                <li><a href="{{route('error-500')}}" class="{{ Route::currentRouteName()=='error-500' ? 'active' : '' }}">Error 500</a></li>
                                <li><a href="{{route('error-503')}}" class="{{ Route::currentRouteName()=='error-503' ? 'active' : '' }}">Error 503</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="col mega-box">
                            <div class="link-section">
                              <div class="submenu-title">
                                <h5> Authentication</h5>
                                <div class="according-menu"><i class="fa fa-angle-{{ in_array(Route::currentRouteName(), ['login', 'login-image', 'login-video', 'signup', 'signup-image', 'signup-video', 'unlock', 'forget-password', 'reset-password', 'maintenance']) ? 'down' : 'right' }}"></i></div>
                              </div>
                              <ul class="submenu-content opensubmegamenu" style="display: {{ in_array(Route::currentRouteName(), ['login', 'login-image', 'login-video', 'signup', 'signup-image', 'signup-video', 'unlock', 'forget-password', 'reset-password', 'maintenance']) ? 'block;' : 'none;' }}">
                                <li><a href="{{route('login')}}" class="{{ Route::currentRouteName()=='login' ? 'active' : '' }}">Login Simple</a></li>
                                <li><a href="{{route('login-image')}}" class="{{ Route::currentRouteName()=='login-image' ? 'active' : '' }}">Login with Bg Image</a></li>
                                <li><a href="{{route('login-video')}}" class="{{ Route::currentRouteName()=='login-video' ? 'active' : '' }}">Login with Bg video</a></li>
                                <li><a href="{{route('signup')}}" class="{{ Route::currentRouteName()=='signup' ? 'active' : '' }}">Register Simple</a></li>
                                <li><a href="{{route('signup-image')}}" class="{{ Route::currentRouteName()=='signup-image' ? 'active' : '' }}">Register with Bg Image</a></li>
                                <li><a href="{{route('signup-video')}}" class="{{ Route::currentRouteName()=='signup-video' ? 'active' : '' }}">Register with Bg video</a></li>
                                <li><a href="{{route('unlock')}}" class="{{ Route::currentRouteName()=='unlock' ? 'active' : '' }}">Unlock User</a></li>
                                <li><a href="{{route('forget-password')}}" class="{{ Route::currentRouteName()=='forget-password' ? 'active' : '' }}">Forget Password</a></li>
                                <li><a href="{{route('reset-password')}}" class="{{ Route::currentRouteName()=='reset-password' ? 'active' : '' }}">Reset Password</a></li>
                                <li><a href="{{route('maintenance')}}" class="{{ Route::currentRouteName()=='maintenance' ? 'active' : '' }}">Maintenance</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="col mega-box">
                            <div class="link-section">
                              <div class="submenu-title">
                                <h5>Coming Soon</h5>
                                <div class="according-menu"><i class="fa fa-angle-{{ in_array(Route::currentRouteName(), ['comingsoon', 'comingsoon-bg-video', 'comingsoon-bg-img']) ? 'down' : 'right' }}"></i></div>
                              </div>
                              <ul class="submenu-content opensubmegamenu" style="display: {{ in_array(Route::currentRouteName(), ['comingsoon', 'comingsoon-bg-video', 'comingsoon-bg-img']) ? 'block;' : 'none;' }}">
                                <li><a href="{{route('comingsoon')}}" class="{{ Route::currentRouteName()=='comingsoon' ? 'active' : '' }}">Coming Simple</a></li>
                                <li><a href="{{route('comingsoon-bg-video')}}" class="{{ Route::currentRouteName()=='comingsoon-bg-video' ? 'active' : '' }}">Coming with Bg video</a></li>
                                <li><a href="{{route('comingsoon-bg-img')}}" class="{{ Route::currentRouteName()=='comingsoon-bg-img' ? 'active' : '' }}">Coming with Bg Image</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="col mega-box">
                            <div class="link-section">
                              <div class="submenu-title">
                                <h5>Email templates</h5>
                                <div class="according-menu"><i class="fa fa-angle-{{ in_array(Route::currentRouteName(), ['basic-template', 'email-header', 'template-email', 'ecommerce-templates', 'email-order-success']) ? 'down' : 'right' }}"></i></div>
                              </div>
                              <ul class="submenu-content opensubmegamenu" style="display: {{ in_array(Route::currentRouteName(), ['basic-template', 'email-header', 'template-email', 'ecommerce-templates', 'email-order-success']) ? 'block;' : 'none;' }}">
                                <li><a href="{{route('basic-template')}}" class="{{ Route::currentRouteName()=='basic-template' ? 'active' : '' }}">Basic Email</a></li>
                                <li><a href="{{route('email-header')}}" class="{{ Route::currentRouteName()=='email-header' ? 'active' : '' }}">Basic With Header</a></li>
                                <li><a href="{{route('template-email')}}" class="{{ Route::currentRouteName()=='template-email' ? 'active' : '' }}">Ecomerce Template</a></li>
                                <li><a href="{{route('template-email-2')}}" class="{{ Route::currentRouteName()=='template-email-2' ? 'active' : '' }}">Email Template 2</a></li>
                                <li><a href="{{route('ecommerce-templates')}}" class="{{ Route::currentRouteName()=='ecommerce-templates' ? 'active' : '' }}">Ecommerce Email</a></li>
                                <li><a href="{{route('email-order-success')}}" class="{{ Route::currentRouteName()=='email-order-success' ? 'active' : '' }}">Order Success</a></li>
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
                    <a class="nav-link menu-title {{request()->route()->getPrefix() == '/gallery' ? 'active' : '' }}" href="#">
                      <i data-feather="image"></i><span>Gallery</span>
                      <div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/gallery' ? 'down' : 'right' }}"></i></div>
                    </a>
                    <ul class="nav-submenu menu-content" style="display: {{request()->route()->getPrefix() == '/gallery' ? 'block' : 'none;' }};">
                      <li><a href="{{route('gallery')}}" class="{{ Route::currentRouteName()=='gallery' ? 'active' : '' }}">Gallery Grid</a></li>
                      <li><a href="{{route('gallery-with-description')}}" class="{{ Route::currentRouteName()=='gallery-with-description' ? 'active' : '' }}">Gallery Grid Desc</a></li>
                      <li><a href="{{route('gallery-masonry')}}" class="{{ Route::currentRouteName()=='gallery-masonry' ? 'active' : '' }}">Masonry Gallery</a></li>
                      <li><a href="{{route('masonry-gallery-with-disc')}}" class="{{ Route::currentRouteName()=='masonry-gallery-with-disc' ? 'active' : '' }}">Masonry with Desc</a></li>
                      <li><a href="{{route('gallery-hover')}}" class="{{ Route::currentRouteName()=='gallery-hover' ? 'active' : '' }}">Hover Effects</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a class="nav-link menu-title {{request()->route()->getPrefix() == '/blog' ? 'active' : '' }}" href="#">
                      <i data-feather="film"></i><span>Blog</span>
                      <div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/blog' ? 'down' : 'right' }}"></i></div>
                    </a>
                    <ul class="nav-submenu menu-content" style="display: {{request()->route()->getPrefix() == '/blog' ? 'block' : 'none;' }};">
                      <li><a href="{{route('blog')}}" class="{{ Route::currentRouteName()=='blog' ? 'active' : '' }}">Blog Details</a></li>
                      <li><a href="{{route('blog-single')}}" class="{{ Route::currentRouteName()=='blog-single' ? 'active' : '' }}">Blog Single</a></li>
                      <li><a href="{{route('add-post')}}" class="{{ Route::currentRouteName()=='add-post' ? 'active' : '' }}">Add Post</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav {{ Route::currentRouteName()=='faq' ? 'active' : '' }}" href="{{route('faq')}}"><i data-feather="help-circle"> </i><span>FAQ</span></a></li>
                  <li class="dropdown">
                    <a class="nav-link menu-title {{request()->route()->getPrefix() == '/job-search' ? 'active' : '' }}" href="#">
                      <i data-feather="package"></i><span>Job Search</span>
                      <div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/job-search' ? 'down' : 'right' }}"></i></div>
                    </a>
                    <ul class="nav-submenu menu-content" style="display: {{request()->route()->getPrefix() == '/job-search' ? 'block' : 'none;' }};">
                      <li><a href="{{route('job-cards-view')}}" class="{{ Route::currentRouteName()=='job-cards-view' ? 'active' : '' }}">Cards view</a></li>
                      <li><a href="{{route('job-list-view')}}" class="{{ Route::currentRouteName()=='job-list-view' ? 'active' : '' }}">List View</a></li>
                      <li><a href="{{route('job-details')}}" class="{{ Route::currentRouteName()=='job-details' ? 'active' : '' }}">Job Details</a></li>
                      <li><a href="{{route('job-apply')}}" class="{{ Route::currentRouteName()=='job-apply' ? 'active' : '' }}">Apply</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a class="nav-link menu-title {{request()->route()->getPrefix() == '/learning' ? 'active' : '' }}" href="#">
                      <i data-feather="radio"></i><span>Learning</span>
                      <div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/learning' ? 'down' : 'right' }}"></i></div>
                    </a>
                    <ul class="nav-submenu menu-content" style="display: {{request()->route()->getPrefix() == '/learning' ? 'block' : 'none;' }};">
                      <li><a href="{{route('learning-list-view')}}" class="{{ Route::currentRouteName()=='learning-list-view' ? 'active' : '' }}">Learning List</a></li>
                      <li><a href="{{route('learning-detailed')}}" class="{{ Route::currentRouteName()=='learning-detailed' ? 'active' : '' }}">Detailed Course</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a class="nav-link menu-title {{request()->route()->getPrefix() == '/maps' ? 'active' : '' }}" href="#">
                      <i data-feather="map"></i><span>Maps</span>
                      <div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/maps' ? 'down' : 'right' }}"></i></div>
                    </a>
                    <ul class="nav-submenu menu-content" style="display: {{request()->route()->getPrefix() == '/maps' ? 'block' : 'none;' }};">
                      <li><a href="{{route('map-js')}}" class="{{ Route::currentRouteName()=='map-js' ? 'active' : '' }}">Maps JS</a></li>
                      <li><a href="{{route('vector-map')}}" class="{{ Route::currentRouteName()=='vector-map' ? 'active' : '' }}">Vector Maps</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a class="nav-link menu-title {{request()->route()->getPrefix() == '/editors' ? 'active' : '' }}" href="#">
                      <i data-feather="edit"></i><span>Editors</span>
                      <div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/editors' ? 'down' : 'right' }}"></i></div>
                    </a>
                    <ul class="nav-submenu menu-content" style="display: {{request()->route()->getPrefix() == '/editors' ? 'block' : 'none;' }};">
                      <li><a href="{{route('summernote')}}" class="{{ Route::currentRouteName()=='summernote' ? 'active' : '' }}">Summer Note</a></li>
                      <li><a href="{{route('ckeditor')}}" class="{{ Route::currentRouteName()=='ckeditor' ? 'active' : '' }}">CK editor</a></li>
                      <li><a href="{{route('simple-mde')}}" class="{{ Route::currentRouteName()=='simple-mde' ? 'active' : '' }}">MDE editor</a></li>
                      <li><a href="{{route('ace-code-editor')}}" class="{{ Route::currentRouteName()=='ace-code-editor' ? 'active' : '' }}">ACE code editor</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav {{ Route::currentRouteName()=='knowledgebase' ? 'active' : '' }}" href="{{route('knowledgebase')}}"><i data-feather="sunrise"> </i><span>Knowledgebase</span></a></li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav {{ Route::currentRouteName()=='support-ticket' ? 'active' : '' }}" href="{{route('support-ticket')}}"><i data-feather="users"> </i><span>Support Ticket</span></a></li>
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
                <div class="col-lg-6">
                  <h3>Box Layout</h3>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('/')}}"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Page Layout</li>
                  </ol>
                </div>
                <div class="col-lg-6">
                  <!-- Bookmark Start-->
                  <div class="bookmark pull-right">
                    <ul>
                      <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Chat"><i data-feather="message-square"></i></a></li>
                      <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Icons"><i data-feather="command"></i></a></li>
                      <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Learning"><i data-feather="layers"></i></a></li>
                      <li>
                        <a href="#"><i class="bookmark-search" data-feather="star"></i></a>
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
                  <div class="col-sm-6 col-xl-3 col-lg-6">
                     <div class="card o-hidden">
                        <div class="bg-primary b-r-4 card-body">
                           <div class="media static-top-widget">
                              <div class="align-self-center text-center"><i data-feather="database"></i></div>
                              <div class="media-body">
                                 <span class="m-0">Earnings</span>
                                 <h4 class="mb-0 counter">6659</h4>
                                 <i class="icon-bg" data-feather="database"></i>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6 col-xl-3 col-lg-6">
                     <div class="card o-hidden">
                        <div class="bg-secondary b-r-4 card-body">
                           <div class="media static-top-widget">
                              <div class="align-self-center text-center"><i data-feather="shopping-bag"></i></div>
                              <div class="media-body">
                                 <span class="m-0">Products</span>
                                 <h4 class="mb-0 counter">9856</h4>
                                 <i class="icon-bg" data-feather="shopping-bag"></i>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6 col-xl-3 col-lg-6">
                     <div class="card o-hidden">
                        <div class="bg-primary b-r-4 card-body">
                           <div class="media static-top-widget">
                              <div class="align-self-center text-center"><i data-feather="message-circle"></i></div>
                              <div class="media-body">
                                 <span class="m-0">Messages</span>
                                 <h4 class="mb-0 counter">893</h4>
                                 <i class="icon-bg" data-feather="message-circle"></i>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6 col-xl-3 col-lg-6">
                     <div class="card o-hidden">
                        <div class="bg-primary b-r-4 card-body">
                           <div class="media static-top-widget">
                              <div class="align-self-center text-center"><i data-feather="user-plus"></i></div>
                              <div class="media-body">
                                 <span class="m-0">New User</span>
                                 <h4 class="mb-0 counter">45631</h4>
                                 <i class="icon-bg" data-feather="user-plus"></i>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-6 xl-100 box-col-12">
                     <div class="widget-joins card widget-arrow">
                        <div class="row">
                           <div class="col-sm-6 pr-0">
                              <div class="media border-after-xs">
                                 <div class="align-self-center mr-3 text-left">
                                    <h6 class="mb-1">Sale</h6>
                                    <h4 class="mb-0">Today</h4>
                                 </div>
                                 <div class="media-body align-self-center"><i class="font-primary" data-feather="arrow-down"></i></div>
                                 <div class="media-body">
                                    <h5 class="mb-0">$<span class="counter">25698</span></h5>
                                    <span class="mb-1">-$2658(36%)</span>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-6 pl-0">
                              <div class="media">
                                 <div class="align-self-center mr-3 text-left">
                                    <h6 class="mb-1">Sale</h6>
                                    <h4 class="mb-0">Month</h4>
                                 </div>
                                 <div class="media-body align-self-center"><i class="font-primary" data-feather="arrow-up"></i></div>
                                 <div class="media-body pl-2">
                                    <h5 class="mb-0">$<span class="counter">6954</span></h5>
                                    <span class="mb-1">+$369(15%)</span>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-6 pr-0">
                              <div class="media border-after-xs">
                                 <div class="align-self-center mr-3 text-left">
                                    <h6 class="mb-1">Sale</h6>
                                    <h4 class="mb-0">Week</h4>
                                 </div>
                                 <div class="media-body align-self-center"><i class="font-primary" data-feather="arrow-up"></i></div>
                                 <div class="media-body">
                                    <h5 class="mb-0">$<span class="counter">63147</span></h5>
                                    <span class="mb-1">+$69(65%)</span>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-6 pl-0">
                              <div class="media">
                                 <div class="align-self-center mr-3 text-left">
                                    <h6 class="mb-1">Sale</h6>
                                    <h4 class="mb-0">Year</h4>
                                 </div>
                                 <div class="media-body align-self-center pl-3"><i class="font-primary" data-feather="arrow-up"></i></div>
                                 <div class="media-body pl-2">
                                    <h5 class="mb-0">$<span class="counter">963198</span></h5>
                                    <span class="mb-1">+$3654(90%)          </span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-6 xl-100 box-col-12">
                     <div class="widget-joins card">
                        <div class="row">
                           <div class="col-sm-6 pr-0">
                              <div class="media border-after-xs">
                                 <div class="align-self-center mr-3">68%<i class="fa fa-angle-up ml-2"></i></div>
                                 <div class="media-body details pl-3">
                                    <span class="mb-1">New</span>
                                    <h4 class="mb-0 counter digits">6982</h4>
                                 </div>
                                 <div class="media-body align-self-center"><i class="font-primary float-left ml-2" data-feather="shopping-bag"></i></div>
                              </div>
                           </div>
                           <div class="col-sm-6 pl-0">
                              <div class="media">
                                 <div class="align-self-center mr-3 digits">12%<i class="fa fa-angle-down ml-2"></i></div>
                                 <div class="media-body details pl-3">
                                    <span class="mb-1">Pending</span>
                                    <h4 class="mb-0 counter digits">783</h4>
                                 </div>
                                 <div class="media-body align-self-center"><i class="font-primary float-left ml-3" data-feather="layers"></i></div>
                              </div>
                           </div>
                           <div class="col-sm-6 pr-0">
                              <div class="media border-after-xs">
                                 <div class="align-self-center mr-3">68%<i class="fa fa-angle-up ml-2"></i></div>
                                 <div class="media-body details pl-3 pt-0">
                                    <span class="mb-1">Done</span>
                                    <h4 class="mb-0 counter digits">3674</h4>
                                 </div>
                                 <div class="media-body align-self-center"><i class="font-primary float-left ml-2" data-feather="shopping-cart"></i></div>
                              </div>
                           </div>
                           <div class="col-sm-6 pl-0">
                              <div class="media">
                                 <div class="align-self-center mr-3">68%<i class="fa fa-angle-up ml-2"></i></div>
                                 <div class="media-body details pl-3 pt-0">
                                    <span class="mb-1">Cancel</span>
                                    <h4 class="mb-0 counter digits">069</h4>
                                 </div>
                                 <div class="media-body align-self-center"><i class="font-primary float-left ml-2" data-feather="dollar-sign"></i></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-6 xl-100 box-col-12">
                     <div class="card">
                        <div class="cal-date-widget card-body">
                           <div class="row">
                              <div class="col-xl-6 col-xs-12 col-md-6 col-sm-6">
                                 <div class="cal-info text-center">
                                    <h2>24</h2>
                                    <div class="d-inline-block mt-2"><span class="b-r-dark pr-3">March</span><span class="pl-3">2018</span></div>
                                    <p class="mt-4 f-16 text-muted">There is no minimum donation, any sum is appreciated</p>
                                 </div>
                              </div>
                              <div class="col-xl-6 col-xs-12 col-md-6 col-sm-6">
                                 <div class="cal-datepicker">
                                    <div class="datepicker-here float-sm-right" data-language="en">           </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 xl-50 col-sm-6 box-col-6">
                     <div class="card">
                        <div class="mobile-clock-widget">
                           <div class="bg-svg">
                              <svg class="climacon climacon_cloudLightningMoon" id="cloudLightningMoon" version="1.1" viewBox="15 15 70 70">
                                 <clippath id="moonCloudFillClipfill11">
                                    <path d="M0,0v100h100V0H0z M60.943,46.641c-4.418,0-7.999-3.582-7.999-7.999c0-3.803,2.655-6.979,6.211-7.792c0.903,4.854,4.726,8.676,9.579,9.58C67.922,43.986,64.745,46.641,60.943,46.641z"></path>
                                 </clippath>
                                 <clippath id="cloudFillClipfill19">
                                    <path d="M15,15v70h70V15H15z M59.943,61.639c-3.02,0-12.381,0-15.999,0c-6.626,0-11.998-5.371-11.998-11.998c0-6.627,5.372-11.999,11.998-11.999c5.691,0,10.434,3.974,11.665,9.29c1.252-0.81,2.733-1.291,4.334-1.291c4.418,0,8,3.582,8,8C67.943,58.057,64.361,61.639,59.943,61.639z"></path>
                                 </clippath>
                                 <g class="climacon_iconWrap climacon_iconWrap-cloudLightningMoon">
                                    <g clip-path="url(#cloudFillClip)">
                                       <g class="climacon_wrapperComponent climacon_wrapperComponent-moon climacon_componentWrap-moon_cloud" clip-path="url(#moonCloudFillClip)">
                                          <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" d="M61.023,50.641c-6.627,0-11.999-5.372-11.999-11.998c0-6.627,5.372-11.999,11.999-11.999c0.755,0,1.491,0.078,2.207,0.212c-0.132,0.576-0.208,1.173-0.208,1.788c0,4.418,3.582,7.999,8,7.999c0.614,0,1.212-0.076,1.788-0.208c0.133,0.717,0.211,1.452,0.211,2.208C73.021,45.269,67.649,50.641,61.023,50.641z"></path>
                                       </g>
                                    </g>
                                    <g class="climacon_wrapperComponent climacon_wrapperComponent-lightning">
                                       <polygon class="climacon_component climacon_component-stroke climacon_component-stroke_lightning" points="48.001,51.641 57.999,51.641 52,61.641 58.999,61.641 46.001,77.639 49.601,65.641 43.001,65.641 "></polygon>
                                    </g>
                                    <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud">
                                       <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M59.999,65.641c-0.28,0-0.649,0-1.062,0l3.584-4.412c3.182-1.057,5.478-4.053,5.478-7.588c0-4.417-3.581-7.998-7.999-7.998c-1.602,0-3.083,0.48-4.333,1.29c-1.231-5.316-5.974-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,12c0,5.446,3.632,10.039,8.604,11.503l-1.349,3.777c-6.52-2.021-11.255-8.098-11.255-15.282c0-8.835,7.163-15.999,15.998-15.999c6.004,0,11.229,3.312,13.965,8.204c0.664-0.114,1.338-0.205,2.033-0.205c6.627,0,11.999,5.371,11.999,11.999C71.999,60.268,66.626,65.641,59.999,65.641z"></path>
                                    </g>
                                 </g>
                              </svg>
                           </div>
                           <div>
                              <ul class="clock" id="clock">
                                 <li class="hour" id="hour"></li>
                                 <li class="min" id="min"></li>
                                 <li class="sec" id="sec"></li>
                              </ul>
                              <div class="date f-24 mb-2" id="date"><span id="monthDay"></span><span id="year">, </span></div>
                              <div>
                                 <p class="m-0 f-14 text-light">kolkata, India                                            </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 xl-50 col-sm-6 box-col-6">
                     <div class="card">
                        <div class="weather-widget-two">
                           <div class="card-body">
                              <div class="media">
                                 <svg class="climacon climacon_cloudDrizzleMoonAlt" id="cloudDrizzleMoonAlt" version="1.1" viewBox="15 15 70 70">
                                    <clippath id="cloudFillClip">
                                       <path d="M15,15v70h70V15H15z M59.943,61.639c-3.02,0-12.381,0-15.999,0c-6.626,0-11.998-5.371-11.998-11.998c0-6.627,5.372-11.999,11.998-11.999c5.691,0,10.434,3.974,11.665,9.29c1.252-0.81,2.733-1.291,4.334-1.291c4.418,0,8,3.582,8,8C67.943,58.057,64.361,61.639,59.943,61.639z"></path>
                                    </clippath>
                                    <clippath id="moonCloudFillClip">
                                       <path d="M0,0v100h100V0H0z M60.943,46.641c-4.418,0-7.999-3.582-7.999-7.999c0-3.803,2.655-6.979,6.211-7.792c0.903,4.854,4.726,8.676,9.579,9.58C67.922,43.986,64.745,46.641,60.943,46.641z"></path>
                                    </clippath>
                                    <g class="climacon_iconWrap climacon_iconWrap-cloudDrizzleMoonAlt">
                                       <g clip-path="url(#cloudFillClip)">
                                          <g class="climacon_wrapperComponent climacon_wrapperComponent-moon climacon_componentWrap-moon_cloud" clip-path="url(#moonCloudFillClip)">
                                             <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" d="M61.023,50.641c-6.627,0-11.999-5.372-11.999-11.998c0-6.627,5.372-11.999,11.999-11.999c0.755,0,1.491,0.078,2.207,0.212c-0.132,0.576-0.208,1.173-0.208,1.788c0,4.418,3.582,7.999,8,7.999c0.614,0,1.212-0.076,1.788-0.208c0.133,0.717,0.211,1.452,0.211,2.208C73.021,45.269,67.649,50.641,61.023,50.641z"></path>
                                          </g>
                                       </g>
                                       <g class="climacon_wrapperComponent climacon_wrapperComponent-drizzle">
                                          <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-left" id="Drizzle-Left_1_" d="M56.969,57.672l-2.121,2.121c-1.172,1.172-1.172,3.072,0,4.242c1.17,1.172,3.07,1.172,4.24,0c1.172-1.17,1.172-3.07,0-4.242L56.969,57.672z"></path>
                                          <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-middle" d="M50.088,57.672l-2.119,2.121c-1.174,1.172-1.174,3.07,0,4.242c1.17,1.172,3.068,1.172,4.24,0s1.172-3.07,0-4.242L50.088,57.672z"></path>
                                          <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-right" d="M43.033,57.672l-2.121,2.121c-1.172,1.172-1.172,3.07,0,4.242s3.07,1.172,4.244,0c1.172-1.172,1.172-3.07,0-4.242L43.033,57.672z"></path>
                                       </g>
                                       <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud" clip-path="url(#cloudFillClip)">
                                          <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M59.943,41.642c-0.696,0-1.369,0.092-2.033,0.205c-2.736-4.892-7.961-8.203-13.965-8.203c-8.835,0-15.998,7.162-15.998,15.997c0,5.992,3.3,11.207,8.177,13.947c0.276-1.262,0.892-2.465,1.873-3.445l0.057-0.057c-3.644-2.061-6.106-5.963-6.106-10.445c0-6.626,5.372-11.998,11.998-11.998c5.691,0,10.433,3.974,11.666,9.29c1.25-0.81,2.732-1.291,4.332-1.291c4.418,0,8,3.581,8,7.999c0,3.443-2.182,6.371-5.235,7.498c0.788,1.146,1.194,2.471,1.222,3.807c4.666-1.645,8.014-6.077,8.014-11.305C71.941,47.014,66.57,41.642,59.943,41.642z"></path>
                                       </g>
                                    </g>
                                 </svg>
                                 <!-- cloudDrizzleMoonAlt-->
                                 <div class="media-body align-self-center text-white">
                                    <h4 class="m-0 f-w-600 num">25°C</h4>
                                    <p class="m-0 f-14">Newyork</p>
                                 </div>
                              </div>
                              <div class="media">
                                 <svg class="climacon climacon_cloudRainMoon" id="cloudRainMoon" version="1.1" viewBox="15 15 70 70">
                                    <clippath id="cloudFillClip1">
                                       <path d="M15,15v70h70V15H15z M59.943,61.639c-3.02,0-12.381,0-15.999,0c-6.626,0-11.998-5.371-11.998-11.998c0-6.627,5.372-11.999,11.998-11.999c5.691,0,10.434,3.974,11.665,9.29c1.252-0.81,2.733-1.291,4.334-1.291c4.418,0,8,3.582,8,8C67.943,58.057,64.361,61.639,59.943,61.639z"></path>
                                    </clippath>
                                    <clippath id="moonCloudFillClip1">
                                       <path d="M0,0v100h100V0H0z M60.943,46.641c-4.418,0-7.999-3.582-7.999-7.999c0-3.803,2.655-6.979,6.211-7.792c0.903,4.854,4.726,8.676,9.579,9.58C67.922,43.986,64.745,46.641,60.943,46.641z"></path>
                                    </clippath>
                                    <g class="climacon_iconWrap climacon_iconWrap-cloudRainMoon">
                                       <g clip-path="url(#cloudFillClip1)">
                                          <g class="climacon_wrapperComponent climacon_wrapperComponent-moon climacon_componentWrap-moon_cloud" clip-path="url(#moonCloudFillClip1)">
                                             <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" d="M61.023,50.641c-6.627,0-11.999-5.372-11.999-11.998c0-6.627,5.372-11.999,11.999-11.999c0.755,0,1.491,0.078,2.207,0.212c-0.132,0.576-0.208,1.173-0.208,1.788c0,4.418,3.582,7.999,8,7.999c0.614,0,1.212-0.076,1.788-0.208c0.133,0.717,0.211,1.452,0.211,2.208C73.021,45.269,67.649,50.641,61.023,50.641z"></path>
                                          </g>
                                       </g>
                                       <g class="climacon_wrapperComponent climacon_wrapperComponent-rain">
                                          <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- left" d="M41.946,53.641c1.104,0,1.999,0.896,1.999,2v15.998c0,1.105-0.895,2-1.999,2s-2-0.895-2-2V55.641C39.946,54.537,40.842,53.641,41.946,53.641z"></path>
                                          <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- middle" d="M49.945,57.641c1.104,0,2,0.896,2,2v15.998c0,1.104-0.896,2-2,2s-2-0.896-2-2V59.641C47.945,58.535,48.841,57.641,49.945,57.641z"></path>
                                          <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- right" d="M57.943,53.641c1.104,0,2,0.896,2,2v15.998c0,1.105-0.896,2-2,2c-1.104,0-2-0.895-2-2V55.641C55.943,54.537,56.84,53.641,57.943,53.641z"></path>
                                          <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- left" d="M41.946,53.641c1.104,0,1.999,0.896,1.999,2v15.998c0,1.105-0.895,2-1.999,2s-2-0.895-2-2V55.641C39.946,54.537,40.842,53.641,41.946,53.641z"></path>
                                          <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- middle" d="M49.945,57.641c1.104,0,2,0.896,2,2v15.998c0,1.104-0.896,2-2,2s-2-0.896-2-2V59.641C47.945,58.535,48.841,57.641,49.945,57.641z"></path>
                                          <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- right" d="M57.943,53.641c1.104,0,2,0.896,2,2v15.998c0,1.105-0.896,2-2,2c-1.104,0-2-0.895-2-2V55.641C55.943,54.537,56.84,53.641,57.943,53.641z"></path>
                                       </g>
                                       <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud" clip-path="url(#cloudFillClip1)">
                                          <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M59.943,41.642c-0.696,0-1.369,0.092-2.033,0.205c-2.736-4.892-7.961-8.203-13.965-8.203c-8.835,0-15.998,7.162-15.998,15.997c0,5.992,3.3,11.207,8.177,13.947c0.276-1.262,0.892-2.465,1.873-3.445l0.057-0.057c-3.644-2.061-6.106-5.963-6.106-10.445c0-6.626,5.372-11.998,11.998-11.998c5.691,0,10.433,3.974,11.666,9.29c1.25-0.81,2.732-1.291,4.332-1.291c4.418,0,8,3.581,8,7.999c0,3.443-2.182,6.371-5.235,7.498c0.788,1.146,1.194,2.471,1.222,3.807c4.666-1.645,8.014-6.077,8.014-11.305C71.941,47.014,66.57,41.642,59.943,41.642z"></path>
                                       </g>
                                    </g>
                                 </svg>
                                 <!-- cloudRainMoon-->
                                 <div class="media-body align-self-center text-white">
                                    <h4 class="m-0 f-w-600 num">95°F</h4>
                                    <p class="m-0 f-14">Peris</p>
                                 </div>
                              </div>
                              <div class="media">
                                 <svg class="climacon climacon_cloudDrizzle" id="cloudDrizzle" version="1.1" viewBox="15 15 70 70">
                                    <g class="climacon_iconWrap climacon_iconWrap-cloudDrizzle">
                                       <g class="climacon_wrapperComponent climacon_wrapperComponent-drizzle">
                                          <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-left" d="M42.001,53.644c1.104,0,2,0.896,2,2v3.998c0,1.105-0.896,2-2,2c-1.105,0-2.001-0.895-2.001-2v-3.998C40,54.538,40.896,53.644,42.001,53.644z"></path>
                                          <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-middle" d="M49.999,53.644c1.104,0,2,0.896,2,2v4c0,1.104-0.896,2-2,2s-1.998-0.896-1.998-2v-4C48.001,54.54,48.896,53.644,49.999,53.644z"></path>
                                          <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-right" d="M57.999,53.644c1.104,0,2,0.896,2,2v3.998c0,1.105-0.896,2-2,2c-1.105,0-2-0.895-2-2v-3.998C55.999,54.538,56.894,53.644,57.999,53.644z"></path>
                                       </g>
                                       <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud">
                                          <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M63.999,64.944v-4.381c2.387-1.386,3.998-3.961,3.998-6.92c0-4.418-3.58-8-7.998-8c-1.603,0-3.084,0.481-4.334,1.291c-1.232-5.316-5.973-9.29-11.664-9.29c-6.628,0-11.999,5.372-11.999,12c0,3.549,1.55,6.729,3.998,8.926v4.914c-4.776-2.769-7.998-7.922-7.998-13.84c0-8.836,7.162-15.999,15.999-15.999c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.336-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12C71.997,58.864,68.655,63.296,63.999,64.944z"></path>
                                       </g>
                                    </g>
                                 </svg>
                                 <!-- cloudDrizzle-->
                                 <div class="media-body align-self-center text-white">
                                    <h4 class="m-0 f-w-600 num">50°C</h4>
                                    <p class="m-0 f-14">India</p>
                                 </div>
                              </div>
                              <div class="top-bg-whether">
                                 <svg class="climacon climacon_cloudHailAltFill" id="cloudHailAltFill" version="1.1" viewBox="15 15 70 70">
                                    <g class="climacon_iconWrap climacon_iconWrap-cloudHailAltFill">
                                       <g class="climacon_wrapperComponent climacon_wrapperComponent-hailAlt">
                                          <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-left">
                                             <circle cx="42" cy="65.498" r="2"></circle>
                                          </g>
                                          <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-middle">
                                             <circle cx="49.999" cy="65.498" r="2"></circle>
                                          </g>
                                          <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-right">
                                             <circle cx="57.998" cy="65.498" r="2"></circle>
                                          </g>
                                          <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-left">
                                             <circle cx="42" cy="65.498" r="2"></circle>
                                          </g>
                                          <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-middle">
                                             <circle cx="49.999" cy="65.498" r="2"></circle>
                                          </g>
                                          <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-right">
                                             <circle cx="57.998" cy="65.498" r="2"></circle>
                                          </g>
                                       </g>
                                       <g class="climacon_componentWrap climacon_componentWrap_cloud">
                                          <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M43.945,65.639c-8.835,0-15.998-7.162-15.998-15.998c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,6.625-5.371,11.998-11.998,11.998C57.168,65.639,47.143,65.639,43.945,65.639z"></path>
                                          <path class="climacon_component climacon_component-fill climacon_component-fill_cloud" fill="#FFFFFF" d="M59.943,61.639c4.418,0,8-3.582,8-7.998c0-4.417-3.582-8-8-8c-1.601,0-3.082,0.481-4.334,1.291c-1.23-5.316-5.973-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,11.999c0,6.626,5.372,11.998,11.998,11.998C47.562,61.639,56.924,61.639,59.943,61.639z"></path>
                                       </g>
                                    </g>
                                 </svg>
                              </div>
                              <div class="bottom-whetherinfo">
                                 <div class="row">
                                    <div class="col-6"><i data-feather="cloud-drizzle"></i></div>
                                    <div class="col-6">
                                       <div class="whether-content">
                                          <span>India, Surat</span>
                                          <h4 class="num mb-0">36°F                                    </h4>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4 col-lg-12 box-col-12">
                     <div>
                        <div class="card">
                           <div class="card-header">
                              <h5 class="text-uppercase">Recent Activity</h5>
                              <div class="card-header-right">
                                 <ul class="list-unstyled card-option">
                                    <li><i class="fa fa-spin fa-cog"></i></li>
                                    <li><i class="view-html fa fa-code"></i></li>
                                    <li><i class="icofont icofont-maximize full-card"></i></li>
                                    <li><i class="icofont icofont-minus minimize-card"></i></li>
                                    <li><i class="icofont icofont-refresh reload-card"></i></li>
                                    <li><i class="icofont icofont-error close-card"></i></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="card-body">
                              <ul class="crm-activity">
                                 <li class="media">
                                    <span class="mr-3 font-primary">A</span>
                                    <div class="align-self-center media-body">
                                       <h6 class="mt-0">Any desktop publishing packages and web page editors.</h6>
                                       <ul class="dates">
                                          <li class="digits">25 July 2017</li>
                                          <li class="digits">20 hours ago</li>
                                       </ul>
                                    </div>
                                 </li>
                                 <li class="media">
                                    <span class="mr-3 font-secondary">C</span>
                                    <div class="align-self-center media-body">
                                       <h6 class="mt-0">Contrary to popular belief, Lorem Ipsum is not simply. </h6>
                                       <ul class="dates">
                                          <li class="digits">25 July 2017</li>
                                          <li class="digits">20 hours ago      </li>
                                       </ul>
                                    </div>
                                 </li>
                                 <li class="media">
                                    <span class="mr-3 font-primary">E</span>
                                    <div class="align-self-center media-body">
                                       <h6 class="mt-0">Established fact that a reader will be distracted </h6>
                                       <ul class="dates">
                                          <li class="digits">25 July 2017</li>
                                          <li class="digits">20 hours ago</li>
                                       </ul>
                                    </div>
                                 </li>
                                 <li class="media">
                                    <span class="mr-3 font-secondary">H</span>
                                    <div class="align-self-center media-body">
                                       <h6 class="mt-0">H-Code - A premium portfolio template from ThemeZaa </h6>
                                       <ul class="dates">
                                          <li class="digits">25 July 2017</li>
                                          <li class="digits">20 hours ago      </li>
                                       </ul>
                                    </div>
                                 </li>
                                 <li class="media">
                                    <span class="mr-3 font-primary">T</span>
                                    <div class="align-self-center media-body">
                                       <h6 class="mt-0">There isn't anything embarrassing hidden.</h6>
                                       <ul class="dates">
                                          <li class="digits">25 July 2017</li>
                                          <li class="digits">20 hours ago</li>
                                       </ul>
                                    </div>
                                 </li>
                                 <li class="media">
                                    <div class="align-self-center media-body">
                                       <ul class="dates">
                                          <li class="digits">25 July 2017</li>
                                          <li class="digits">20 hours ago</li>
                                       </ul>
                                    </div>
                                 </li>
                              </ul>
                              <div class="code-box-copy">
                                 <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                 <pre><code class="language-html" id="example-head">&lt;!-- Cod Box Copy begin --&gt;
            &lt;ul class=&quot;crm-activity&quot;&gt;
              &lt;li class=&quot;media&quot;&gt;
                &lt;span class=&quot;mr-3 font-primary&quot;&gt;A&lt;/span&gt;
                &lt;div class=&quot;align-self-center media-body&quot;&gt;
                  &lt;h6 class=&quot;mt-0&quot;&gt;Any desktop publishing packages and web page editors.&lt;/h6&gt;
                  &lt;ul class=&quot;dates&quot;&gt;
                    &lt;li class=&quot;digits&quot;&gt;25 July 2017&lt;/li&gt;
                    &lt;li class=&quot;digits&quot;&gt;20 hours ago&lt;/li&gt;
                  &lt;/ul&gt;
                &lt;/div&gt;
              &lt;/li&gt;
              &lt;li class=&quot;media&quot;&gt;
                &lt;span class=&quot;mr-3 font-secondary&quot;&gt;C&lt;/span&gt;
                &lt;div class=&quot;align-self-center media-body&quot;&gt;
                  &lt;h6 class=&quot;mt-0&quot;&gt;Contrary to popular belief, Lorem Ipsum is not simply.&lt;/h6&gt;
                  &lt;ul class=&quot;dates&quot;&gt;
                    &lt;li class=&quot;digits&quot;&gt;25 July 2017&lt;/li&gt;
                    &lt;li class=&quot;digits&quot;&gt;20 hours ago&lt;/li&gt;
                  &lt;/ul&gt;
                &lt;/div&gt;
              &lt;/li&gt;
              &lt;li class=&quot;media&quot;&gt;
                &lt;span class=&quot;mr-3 font-primary&quot;&gt;E&lt;/span&gt;
                &lt;div class=&quot;align-self-center media-body&quot;&gt;
                  &lt;h6 class=&quot;mt-0&quot;&gt;Established fact that a reader will be distracted&lt;/h6&gt;
                  &lt;ul class=&quot;dates&quot;&gt;
                    &lt;li class=&quot;digits&quot;&gt;25 July 2017&lt;/li&gt;
                    &lt;li class=&quot;digits&quot;&gt;20 hours ago&lt;/li&gt;
                  &lt;/ul&gt;
                &lt;/div&gt;
              &lt;/li&gt;
              &lt;li class=&quot;media&quot;&gt;
                &lt;span class=&quot;mr-3 font-secondary&quot;&gt;H&lt;/span&gt;
                &lt;div class=&quot;align-self-center media-body&quot;&gt;
                  &lt;h6 class=&quot;mt-0&quot;&gt;H-Code - A premium portfolio template from ThemeZaa&lt;/h6&gt;
                  &lt;ul class=&quot;dates&quot;&gt;
                    &lt;li class=&quot;digits&quot;&gt;25 July 2017&lt;/li&gt;
                    &lt;li class=&quot;digits&quot;&gt;20 hours ago&lt;/li&gt;
                  &lt;/ul&gt;
                &lt;/div&gt;
              &lt;/li&gt;
              &lt;li class=&quot;media&quot;&gt;
                &lt;span class=&quot;mr-3 font-primary&quot;&gt;T&lt;/span&gt;
                &lt;div class=&quot;align-self-center media-body&quot;&gt;
                  &lt;h6 class=&quot;mt-0&quot;&gt;There isn't anything embarrassing hidden.&lt;/h6&gt;
                  &lt;ul class=&quot;dates&quot;&gt;
                    &lt;li class=&quot;digits&quot;&gt;25 July 2017&lt;/li&gt;
                    &lt;li class=&quot;digits&quot;&gt;20 hours ago&lt;/li&gt;
                  &lt;/ul&gt;
                &lt;/div&gt;
              &lt;/li&gt;
              &lt;li class=&quot;media&quot;&gt;
                &lt;div class=&quot;align-self-center media-body&quot;&gt;
                  &lt;ul class=&quot;dates&quot;&gt;
                    &lt;li class=&quot;digits&quot;&gt;25 July 2017&lt;/li&gt;
                    &lt;li class=&quot;digits&quot;&gt;20 hours ago&lt;/li&gt;
                  &lt;/ul&gt;
                &lt;/div&gt;
              &lt;/li&gt;
            &lt;/ul&gt;
            &lt;!-- Cod Box Copy end --&gt;</code></pre>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4 box-col-6">
                     <div class="card custom-card">
                        <div class="card-header"><img class="img-fluid" src="{{asset('assets/images/user-card/3.jpg')}}" alt=""></div>
                        <div class="card-profile"><img class="rounded-circle" src="{{asset('assets/images/avtar/3.jpg')}}" alt=""></div>
                        <ul class="card-social">
                           <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                           <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                           <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                           <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                           <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        </ul>
                        <div class="text-center profile-details">
                           <h4>Scarlett john</h4>
                           <h6>Manager</h6>
                        </div>
                        <div class="card-footer row">
                           <div class="col-4 col-sm-4">
                              <h6>Follower</h6>
                              <h3 class="counter">9564</h3>
                           </div>
                           <div class="col-4 col-sm-4">
                              <h6>Following</h6>
                              <h3><span class="counter">49</span>K</h3>
                           </div>
                           <div class="col-4 col-sm-4">
                              <h6>Total Post</h6>
                              <h3><span class="counter">96</span>M</h3>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4 box-col-6">
                     <div class="card testimonial text-center">
                        <div class="card-body">
                           <div class="owl-carousel owl-theme" id="owl-carousel-testimonial">
                              <div class="item">
                                 <i class="icon-quote-left"></i>
                                 <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia</p>
                                 <img class="img-80" src="{{asset('assets/images/dashboard/boy-2.png')}}" alt="">
                                 <h5 class="font-primary">Poio klot</h5>
                                 <span>Developer</span>
                              </div>
                              <div class="item">
                                 <i class="icon-quote-left"></i>
                                 <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia</p>
                                 <img class="img-80" src="{{asset('assets/images/dashboard/boy-2.png')}}" alt="">
                                 <h5 class="font-primary">Poio klot</h5>
                                 <span>Developer</span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="card xl-none">
                        <div class="ecommerce-widget card-body">
                           <div class="row">
                              <div class="col-6">
                                 <span>New Order</span>
                                 <h3 class="total-num counter">25639</h3>
                              </div>
                              <div class="col-6">
                                 <div class="text-md-right">
                                    <ul>
                                       <li>Profit<span class="product-stts font-primary ml-2">8989<i class="icon-angle-up f-12 ml-1"></i></span></li>
                                       <li>Loss<span class="product-stts font-primary ml-2">2560<i class="icon-angle-down f-12 ml-1"></i></span></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="progress-showcase">
                              <div class="progress lg-progress-bar">
                                 <div class="progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">                                               </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6 col-xl-3 xl-50 col-lg-6 box-col-6">
                     <div class="card social-widget-card">
                        <div class="card-body">
                           <div class="redial-social-widget radial-bar-70" data-label="50%"><i class="fa fa-facebook font-primary"></i></div>
                           <h5 class="b-b-light">Facebook</h5>
                           <div class="row">
                              <div class="col text-center b-r-light">
                                 <span>Post</span>
                                 <h4 class="counter mb-0">6589</h4>
                              </div>
                              <div class="col text-center">
                                 <span>Like</span>
                                 <h4 class="counter mb-0">75269</h4>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6 col-xl-3 xl-50 col-lg-6 box-col-6">
                     <div class="card social-widget-card">
                        <div class="card-body">
                           <div class="redial-social-widget radial-bar-70" data-label="50%"><i class="fa fa-twitter font-primary"></i></div>
                           <h5 class="b-b-light">Twitter</h5>
                           <div class="row">
                              <div class="col text-center b-r-light">
                                 <span>Post</span>
                                 <h4 class="counter mb-0">6589</h4>
                              </div>
                              <div class="col text-center">
                                 <span>Follower</span>
                                 <h4 class="counter mb-0">75269</h4>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6 col-xl-3 xl-50 col-lg-6 box-col-6">
                     <div class="card social-widget-card">
                        <div class="card-body">
                           <div class="redial-social-widget radial-bar-70" data-label="50%"><i class="fa fa-linkedin font-primary"></i></div>
                           <h5 class="b-b-light">linkedin</h5>
                           <div class="row">
                              <div class="col text-center b-r-light">
                                 <span>Post</span>
                                 <h4 class="counter mb-0">1234</h4>
                              </div>
                              <div class="col text-center">
                                 <span>linkedin</span>
                                 <h4 class="counter mb-0">4369</h4>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6 col-xl-3 xl-50 col-lg-6 box-col-6">
                     <div class="card social-widget-card">
                        <div class="card-body">
                           <div class="redial-social-widget radial-bar-70" data-label="50%"><i class="fa fa-google-plus font-primary"></i></div>
                           <h5 class="b-b-light">Google +</h5>
                           <div class="row">
                              <div class="col text-center b-r-light">
                                 <span>Post</span>
                                 <h4 class="counter mb-0">369</h4>
                              </div>
                              <div class="col text-center">
                                 <span>Follower</span>
                                 <h4 class="counter mb-0">3458</h4>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-12">
                     <div class="card browser-widget">
                        <div class="media card-body">
                           <div class="media-img"><img src="{{asset('assets/images/dashboard/chrome.png')}}" alt=""></div>
                           <div class="media-body align-self-center">
                              <div>
                                 <p>Daily </p>
                                 <h4><span class="counter">36</span>%</h4>
                              </div>
                              <div>
                                 <p>Month </p>
                                 <h4><span class="counter">96</span>%</h4>
                              </div>
                              <div>
                                 <p>Week </p>
                                 <h4><span class="counter">46</span>%</h4>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-12">
                     <div class="card browser-widget">
                        <div class="media card-body">
                           <div class="media-img"><img src="{{asset('assets/images/dashboard/firefox.png')}}" alt=""></div>
                           <div class="media-body align-self-center">
                              <div>
                                 <p>Daily </p>
                                 <h4><span class="counter">36</span>%</h4>
                              </div>
                              <div>
                                 <p>Month </p>
                                 <h4><span class="counter">96</span>%</h4>
                              </div>
                              <div>
                                 <p>Week </p>
                                 <h4><span class="counter">46</span>%</h4>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-12">
                     <div class="card browser-widget">
                        <div class="media card-body">
                           <div class="media-img"><img src="{{asset('assets/images/dashboard/safari.png')}}" alt=""></div>
                           <div class="media-body align-self-center">
                              <div>
                                 <p>Daily </p>
                                 <h4><span class="counter">36</span>%</h4>
                              </div>
                              <div>
                                 <p>Month </p>
                                 <h4><span class="counter">96</span>%</h4>
                              </div>
                              <div>
                                 <p>Week </p>
                                 <h4><span class="counter">46</span>%</h4>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-6 xl-100 box-col-12">
                     <div class="card">
                        <div class="card-header">
                           <h5>PRODUCTS CART</h5>
                           <div class="card-header-right">
                              <ul class="list-unstyled card-option">
                                 <li><i class="fa fa-spin fa-cog"></i></li>
                                 <li><i class="view-html fa fa-code"></i></li>
                                 <li><i class="icofont icofont-maximize full-card"></i></li>
                                 <li><i class="icofont icofont-minus minimize-card"></i></li>
                                 <li><i class="icofont icofont-refresh reload-card"></i></li>
                                 <li><i class="icofont icofont-error close-card"></i></li>
                              </ul>
                           </div>
                        </div>
                        <div class="card-body">
                           <div class="user-status table-responsive">
                              <table class="table table-bordernone">
                                 <thead>
                                    <tr>
                                       <th scope="col">Details</th>
                                       <th scope="col">Quantity</th>
                                       <th scope="col">Status</th>
                                       <th scope="col">Price</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td class="f-w-600">Simply dummy text of the printing</td>
                                       <td class="digits">1</td>
                                       <td class="font-primary">Pending</td>
                                       <td>
                                          <div class="span badge badge-pill pill-badge-secondary">6523</div>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td class="f-w-600">Long established</td>
                                       <td class="digits">5</td>
                                       <td class="font-secondary">Cancle</td>
                                       <td>
                                          <div class="span badge badge-pill pill-badge-success">6523</div>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td class="f-w-600">sometimes by accident</td>
                                       <td class="digits">10</td>
                                       <td class="font-secondary">Cancle</td>
                                       <td>
                                          <div class="span badge badge-pill pill-badge-warning">6523</div>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td class="f-w-600">Classical Latin literature</td>
                                       <td class="digits">9</td>
                                       <td class="font-primary">Return</td>
                                       <td>
                                          <div class="span badge badge-pill pill-badge-primary">6523</div>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td class="f-w-600">keep the site on the Internet</td>
                                       <td class="digits">8</td>
                                       <td class="font-primary">Pending</td>
                                       <td>
                                          <div class="span badge badge-pill pill-badge-danger">6523</div>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td class="f-w-600">Molestiae consequatur</td>
                                       <td class="digits">3</td>
                                       <td class="font-secondary">Cancle</td>
                                       <td>
                                          <div class="span badge badge-pill pill-badge-info">6523</div>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td class="f-w-600">Pain can procure</td>
                                       <td class="digits">8</td>
                                       <td class="font-primary">Return</td>
                                       <td>
                                          <div class="span badge badge-pill pill-badge-primary">6523</div>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                           <div class="code-box-copy">
                              <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head1" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                              <pre><code class="language-html" id="example-head1">&lt;!-- Cod Box Copy begin --&gt;
            &lt;div class=&quot;user-status table-responsive&quot;&gt;
              &lt;table class=&quot;table table-bordernone&quot;&gt;
                &lt;thead&gt;
                  &lt;tr&gt;
                    &lt;th scope=&quot;col&quot;&gt;Details&lt;/th&gt;
                    &lt;th scope=&quot;col&quot;&gt;Quantity&lt;/th&gt;
                    &lt;th scope=&quot;col&quot;&gt;Status&lt;/th&gt;
                    &lt;th scope=&quot;col&quot;&gt;Price&lt;/th&gt;
                  &lt;/tr&gt;
                &lt;/thead&gt;
                &lt;tbody&gt;
                  &lt;tr&gt;
                    &lt;td&gt;Simply dummy text of the printing&lt;/td&gt;
                    &lt;td class=&quot;digits&quot;&gt;1&lt;/td&gt;
                    &lt;td class=&quot;font-primary&quot;&gt;Pending&lt;/td&gt;
                    &lt;td class=&quot;span badge badge-pill pill-badge-secondary&quot;&gt;6523&lt;/td&gt;
                  &lt;/tr&gt;
                  &lt;tr&gt;
                    &lt;td&gt;Long established&lt;/td&gt;
                    &lt;td class=&quot;digits&quot;&gt;5&lt;/td&gt;
                    &lt;td class=&quot;font-secondary&quot;&gt;cancle&lt;/td&gt;
                    &lt;td class=&quot;span badge badge-pill pill-badge-success&quot;&gt;6523&lt;/td&gt;
                  &lt;/tr&gt;
                  &lt;tr&gt;
                    &lt;td&gt;sometimes by accident&lt;/td&gt;
                    &lt;td class=&quot;digits&quot;&gt;10&lt;/td&gt;
                    &lt;td class=&quot;font-secondary&quot;&gt;cancle&lt;/td&gt;
                    &lt;td class=&quot;span badge badge-pill pill-badge-warning&quot;&gt;6523&lt;/td&gt;
                  &lt;/tr&gt;
                  &lt;tr&gt;
                    &lt;td&gt;Classical Latin literature&lt;/td&gt;
                    &lt;td class=&quot;digits&quot;&gt;9&lt;/td&gt;
                    &lt;td class=&quot;font-primary&quot;&gt;Return&lt;/td&gt;
                    &lt;td class=&quot;span badge badge-pill pill-badge-primary&quot;&gt;6523&lt;/td&gt;
                  &lt;/tr&gt;
                  &lt;tr&gt;
                    &lt;td&gt;keep the site on the Internet&lt;/td&gt;
                    &lt;td class=&quot;digits&quot;&gt;8&lt;/td&gt;
                    &lt;td class=&quot;font-primary&quot;&gt;Pending&lt;/td&gt;
                    &lt;td class=&quot;span badge badge-pill pill-badge-danger&quot;&gt;6523&lt;/td&gt;
                  &lt;/tr&gt;
                  &lt;tr&gt;
                    &lt;td&gt;Molestiae consequatur&lt;/td&gt;
                    &lt;td class=&quot;digits&quot;&gt;3&lt;/td&gt;
                    &lt;td class=&quot;font-secondary&quot;&gt;cancle&lt;/td&gt;
                    &lt;td class=&quot;span badge badge-pill pill-badge-info&quot;&gt;6523&lt;/td&gt;
                  &lt;/tr&gt;
                  &lt;tr&gt;
                    &lt;td&gt;Pain can procure&lt;/td&gt;
                    &lt;td class=&quot;digits&quot;&gt;8&lt;/td&gt;
                    &lt;td class=&quot;font-primary&quot;&gt;Return&lt;/td&gt;
                    &lt;td class=&quot;span badge badge-pill pill-badge-primary&quot;&gt;6523&lt;/td&gt;
                  &lt;/tr&gt;
                &lt;/tbody&gt;
              &lt;/table&gt;
            &lt;/div&gt;
            &lt;!-- Cod Box Copy end --&gt;</code></pre>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-6 xl-100 box-col-12">
                     <div class="card">
                        <div class="card-header">
                           <h5>EMPLOYEE STATUS</h5>
                           <div class="card-header-right">
                              <ul class="list-unstyled card-option">
                                 <li><i class="fa fa-spin fa-cog"></i></li>
                                 <li><i class="view-html fa fa-code"></i></li>
                                 <li><i class="icofont icofont-maximize full-card"></i></li>
                                 <li><i class="icofont icofont-minus minimize-card"></i></li>
                                 <li><i class="icofont icofont-refresh reload-card"></i></li>
                                 <li><i class="icofont icofont-error close-card"></i></li>
                              </ul>
                           </div>
                        </div>
                        <div class="card-body">
                           <div class="user-status table-responsive">
                              <table class="table table-bordernone">
                                 <thead>
                                    <tr>
                                       <th scope="col">Name</th>
                                       <th scope="col">Designation</th>
                                       <th scope="col">Skill Level</th>
                                       <th scope="col">Experience</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td class="bd-t-none u-s-tb">
                                          <div class="align-middle image-sm-size">
                                             <img class="img-radius align-top m-r-15 rounded-circle" src="{{asset('assets/images/user/4.jpg')}}" alt="">
                                             <div class="d-inline-block">
                                                <h6>John Deo <span class="text-muted digits">(14+ Online)</span></h6>
                                             </div>
                                          </div>
                                       </td>
                                       <td>Designer</td>
                                       <td>
                                          <div class="progress-showcase">
                                             <div class="progress" style="height: 8px;">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 30%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                             </div>
                                          </div>
                                       </td>
                                       <td class="digits">2 Year</td>
                                    </tr>
                                    <tr>
                                       <td class="bd-t-none u-s-tb">
                                          <div class="align-middle image-sm-size">
                                             <img class="img-radius align-top m-r-15 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="">
                                             <div class="d-inline-block">
                                                <h6>Holio Mako <span class="text-muted digits">(250+ Online)</span></h6>
                                             </div>
                                          </div>
                                       </td>
                                       <td>Developer</td>
                                       <td>
                                          <div class="progress-showcase">
                                             <div class="progress" style="height: 8px;">
                                                <div class="progress-bar bg-secondary" role="progressbar" style="width: 70%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                             </div>
                                          </div>
                                       </td>
                                       <td class="digits">3 Year</td>
                                    </tr>
                                    <tr>
                                       <td class="bd-t-none u-s-tb">
                                          <div class="align-middle image-sm-size">
                                             <img class="img-radius align-top m-r-15 rounded-circle" src="{{asset('assets/images/user/5.jpg')}}" alt="">
                                             <div class="d-inline-block">
                                                <h6>Mohsib lara<span class="text-muted digits">(99+ Online)</span></h6>
                                             </div>
                                          </div>
                                       </td>
                                       <td>Tester</td>
                                       <td>
                                          <div class="progress-showcase">
                                             <div class="progress" style="height: 8px;">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 60%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                             </div>
                                          </div>
                                       </td>
                                       <td class="digits">5 Month</td>
                                    </tr>
                                    <tr>
                                       <td class="bd-t-none u-s-tb">
                                          <div class="align-middle image-sm-size">
                                             <img class="img-radius align-top m-r-15 rounded-circle" src="{{asset('assets/images/user/6.jpg')}}" alt="">
                                             <div class="d-inline-block">
                                                <h6>Hileri Soli <span class="text-muted digits">(150+ Online)</span></h6>
                                             </div>
                                          </div>
                                       </td>
                                       <td>Designer</td>
                                       <td>
                                          <div class="progress-showcase">
                                             <div class="progress" style="height: 8px;">
                                                <div class="progress-bar bg-secondary" role="progressbar" style="width: 30%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                             </div>
                                          </div>
                                       </td>
                                       <td class="digits">3 Month</td>
                                    </tr>
                                    <tr>
                                       <td class="bd-t-none u-s-tb">
                                          <div class="align-middle image-sm-size">
                                             <img class="img-radius align-top m-r-15 rounded-circle" src="{{asset('assets/images/user/7.jpg')}}" alt="">
                                             <div class="d-inline-block">
                                                <h6>Pusiz bia <span class="text-muted digits">(14+ Online)</span></h6>
                                             </div>
                                          </div>
                                       </td>
                                       <td>Designer</td>
                                       <td>
                                          <div class="progress-showcase">
                                             <div class="progress" style="height: 8px;">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 90%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                             </div>
                                          </div>
                                       </td>
                                       <td class="digits">5 Year</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                           <div class="code-box-copy">
                              <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head2" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                              <pre><code class="language-html" id="example-head2">&lt;!-- Cod Box Copy begin --&gt;
            &lt;div class=&quot;user-status table-responsive&quot;&gt;
              &lt;table class=&quot;table table-bordernone&quot;&gt;
                &lt;thead&gt;
                  &lt;tr&gt;
                    &lt;th scope=&quot;col&quot;&gt;Name&lt;/th&gt;
                    &lt;th scope=&quot;col&quot;&gt;Designation&lt;/th&gt;
                    &lt;th scope=&quot;col&quot;&gt;Skill Level&lt;/th&gt;
                    &lt;th scope=&quot;col&quot;&gt;Experience&lt;/th&gt;
                  &lt;/tr&gt;
                &lt;/thead&gt;
                &lt;tbody&gt;
                  &lt;tr&gt;
                    &lt;td class=&quot;bd-t-none u-s-tb&quot;&gt;
                      &lt;div class=&quot;align-middle image-sm-size&quot;&gt;
                        &lt;img src=&quot;&#123;&#123;asset('assets/images/user/4.jpg')&#125;&#125;&quot; atl=&quot;user&quot; class=&quot;img-radius align-top m-r-15 rounded-circle&quot;&gt;
                        &lt;div class=&quot;d-inline-block&quot;&gt;&gt;
                          &lt;h6&gt;John Deo &lt;span class=&quot;text-muted digits&quot;&gt;(14+ Online)&lt;/span&gt;&lt;/h6&gt;
                        &lt;/div&gt;
                      &lt;/div&gt;
                    &lt;/td&gt;
                    &lt;td&gt;Designer&lt;/td&gt;
                    &lt;td&gt;
                      &lt;div class=&quot;progress-showcase&quot;&gt;
                        &lt;div class=&quot;progress&quot; style=&quot;height:8px;&quot;&gt;
                          &lt;div class=&quot;progress-bar bg-primary&quot; role=&quot;progressbar&quot; style=&quot;width: 30%&quot; aria-valuenow=&quot;50&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
                        &lt;/div&gt;
                      &lt;/div&gt;
                    &lt;/td&gt;
                    &lt;td&gt;class=&quot;digits&quot;&gt;2 Year&lt;/td&gt;
                  &lt;/tr&gt;
                  &lt;tr&gt;
                    &lt;td class=&quot;bd-t-none u-s-tb&quot;&gt;
                      &lt;div class=&quot;align-middle image-sm-size&quot;&gt;
                        &lt;img src=&quot;&#123;&#123;asset('assets/images/user/1.jpg')&#125;&#125;&quot; atl=&quot;user&quot; class=&quot;img-radius align-top m-r-15 rounded-circle&quot;&gt;
                        &lt;div class=&quot;d-inline-block&quot;&gt;&gt;
                          &lt;h6&gt;Holio Mako &lt;span class=&quot;text-muted digits&quot;&gt;(250+ Online)&lt;/span&gt;&lt;/h6&gt;
                        &lt;/div&gt;
                      &lt;/div&gt;
                    &lt;/td&gt;
                    &lt;td&gt;Developer&lt;/td&gt;
                    &lt;td&gt;
                      &lt;div class=&quot;progress-showcase&quot;&gt;
                        &lt;div class=&quot;progress&quot; style=&quot;height:8px;&quot;&gt;
                          &lt;div class=&quot;progress-bar bg-secondary&quot; role=&quot;progressbar&quot; style=&quot;width: 70%&quot; aria-valuenow=&quot;50&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
                        &lt;/div&gt;
                      &lt;/div&gt;
                    &lt;/td&gt;
                    &lt;td&gt;class=&quot;digits&quot;&gt;3 Year&lt;td&gt;
                  &lt;/tr&gt;
                  &lt;tr&gt;
                    &lt;td class=&quot;bd-t-none u-s-tb&quot;&gt;
                      &lt;div class=&quot;align-middle image-sm-size&quot;&gt;
                        &lt;img src=&quot;&#123;&#123;asset('assets/images/user/5.jpg')&#125;&#125;&quot; atl=&quot;user&quot; class=&quot;img-radius align-top m-r-15 rounded-circle&quot;&gt;
                        &lt;div class=&quot;d-inline-block&quot;&gt;&gt;
                          &lt;h6&gt;Mohsib lara&lt;span class=&quot;text-muted digits&quot;&gt;(99+ Online)&lt;/span&gt;&lt;/h6&gt;
                        &lt;/div&gt;
                      &lt;/div&gt;
                    &lt;/td&gt;
                    &lt;td&gt;Tester&lt;/td&gt;
                    &lt;td&gt;
                      &lt;div class=&quot;progress-showcase&quot;&gt;
                        &lt;div class=&quot;progress&quot; style=&quot;height:8px;&quot;&gt;
                          &lt;div class=&quot;progress-bar bg-primary&quot; role=&quot;progressbar&quot; style=&quot;width: 60%&quot; aria-valuenow=&quot;50&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
                        &lt;/div&gt;
                      &lt;/div&gt;
                    &lt;/td&gt;
                    &lt;td&gt;class=&quot;digits&quot;&gt;5 Month&lt;/td&gt;
                  &lt;/tr&gt;
                  &lt;tr&gt;
                    &lt;td class=&quot;bd-t-none u-s-tb&quot;&gt;
                      &lt;div class=&quot;align-middle image-sm-size&quot;&gt;
                        &lt;img src=&quot;&#123;&#123;asset('assets/images/user/6.jpg')&#125;&#125;&quot; atl=&quot;user&quot; class=&quot;img-radius align-top m-r-15 rounded-circle&quot;&gt;
                        &lt;div class=&quot;d-inline-block&quot;&gt;&gt;
                          &lt;h6&gt;Hileri Soli &lt;span class=&quot;text-muted digits&quot;&gt;(150+ Online)&lt;/span&gt;&lt;/h6&gt;
                        &lt;/div&gt;
                      &lt;/div&gt;
                    &lt;/td&gt;
                    &lt;td&gt;Designer&lt;/td&gt;
                    &lt;td&gt;
                      &lt;div class=&quot;progress-showcase&quot;&gt;
                        &lt;div class=&quot;progress&quot; style=&quot;height:8px;&quot;&gt;
                          &lt;div class=&quot;progress-bar bg-secondary&quot; role=&quot;progressbar&quot; style=&quot;width: 30%&quot; aria-valuenow=&quot;50&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
                        &lt;/div&gt;
                      &lt;/div&gt;
                    &lt;/td&gt;
                    &lt;td&gt;class=&quot;digits&quot;&gt;3 Month&lt;/td&gt;
                  &lt;/tr&gt;
                  &lt;tr&gt;
                    &lt;td class=&quot;bd-t-none u-s-tb&quot;&gt;
                      &lt;div class=&quot;align-middle image-sm-size&quot;&gt;
                        &lt;img src=&quot;&#123;&#123;asset('assets/images/user/7.jpg')&#125;&#125;&quot; atl=&quot;user&quot; class=&quot;img-radius align-top m-r-15 rounded-circle&quot;&gt;
                        &lt;div class=&quot;d-inline-block&quot;&gt;&gt;
                          &lt;h6&gt;Pusiz bia &lt;span class=&quot;text-muted digits&quot;&gt;(14+ Online)&lt;/span&gt;&lt;/h6&gt;
                        &lt;/div&gt;
                      &lt;/div&gt;
                    &lt;/td&gt;
                    &lt;td&gt;Designer&lt;/td&gt;
                    &lt;td&gt;
                      &lt;div class=&quot;progress-showcase&quot;&gt;
                        &lt;div class=&quot;progress&quot; style=&quot;height:8px;&quot;&gt;
                          &lt;div class=&quot;progress-bar bg-primary&quot; role=&quot;progressbar&quot; style=&quot;width: 90%&quot; aria-valuenow=&quot;50&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
                        &lt;/div&gt;
                      &lt;/div&gt;
                    &lt;/td&gt;
                    &lt;td&gt;class=&quot;digits&quot;&gt;5 Year&lt;/td&gt;
                  &lt;/tr&gt;
                &lt;/tbody&gt;
              &lt;/table&gt;
            &lt;/div&gt;
            &lt;!-- Cod Box Copy end --&gt;</code></pre>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-12 col-lg-6 col-xl-4 xl-50 col-md-12 box-col-6">
                     <div class="card height-equal">
                        <div class="calender-widget">
                           <div class="cal-img"></div>
                           <div class="cal-date">
                              <h5>25<br>APRIL</h5>
                           </div>
                           <div class="cal-desc text-center card-body">
                              <h6 class="f-w-600">I must explain to you how all this mistaken idea truth</h6>
                              <p class="text-muted mt-3 mb-0">Denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth,Letraset sheets containing Lorem Ipsum passages, and more recently with desktop Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-12 col-lg-6 col-xl-8 xl-50 col-md-12 box-col-6">
                     <div class="card height-equal">
                        <div class="card-header">
                           <h5>Contact Us</h5>
                           <div class="card-header-right">
                              <ul class="list-unstyled card-option">
                                 <li><i class="fa fa-spin fa-cog"></i></li>
                                 <li><i class="view-html fa fa-code"></i></li>
                                 <li><i class="icofont icofont-maximize full-card"></i></li>
                                 <li><i class="icofont icofont-minus minimize-card"></i></li>
                                 <li><i class="icofont icofont-refresh reload-card"></i></li>
                                 <li><i class="icofont icofont-error close-card"></i></li>
                              </ul>
                           </div>
                        </div>
                        <div class="contact-form card-body">
                           <form class="theme-form">
                              <div class="form-icon"><i class="icofont icofont-envelope-open"></i></div>
                              <div class="form-group">
                                 <label for="exampleInputName">Your Name</label>
                                 <input class="form-control" id="exampleInputName" type="text" placeholder="John Dio">
                              </div>
                              <div class="form-group">
                                 <label class="col-form-label" for="exampleInputEmail1">Email</label>
                                 <input class="form-control" id="exampleInputEmail1" type="email" placeholder="Demo@gmail.com">
                              </div>
                              <div class="form-group">
                                 <label class="col-form-label" for="exampleInputEmail1">Message</label>
                                 <textarea class="form-control textarea" rows="3" cols="50" placeholder="Your Message"></textarea>
                              </div>
                              <div class="text-sm-right">
                                 <button class="btn btn-primary-gradien">SEND IT</button>
                              </div>
                           </form>
                           <div class="code-box-copy">
                              <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head3" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                              <pre><code class="language-html" id="example-head3">&lt;!-- Cod Box Copy begin --&gt;
            &lt;div class=&quot;contact-form card-body&quot;&gt;
              &lt;form class=&quot;theme-form&quot;&gt;
                &lt;div class=&quot;form-icon&quot;&gt;
                  &lt;i class=&quot;icofont icofont-envelope-open&quot;&gt;&lt;/i&gt;
                &lt;/div&gt;
                &lt;div class=&quot;form-group&quot;&gt;
                  &lt;label for=&quot;exampleInputName&quot;&gt;Your Name&lt;/label&gt;
                  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;exampleInputName&quot; placeholder=&quot;John Dio&quot;&gt;
                &lt;/div&gt;
                &lt;div class=&quot;form-group&quot;&gt;
                  &lt;label for=&quot;exampleInputEmail1&quot; class=&quot;col-form-label&quot;&gt;Email&lt;/label&gt;
                  &lt;input type=&quot;email&quot; class=&quot;form-control&quot; id=&quot;exampleInputEmail1&quot; placeholder=&quot;Demo@gmail.com&quot;&gt;
                &lt;/div&gt;
                &lt;div class=&quot;form-group&quot;&gt;
                  &lt;label for=&quot;exampleInputEmail1&quot; class=&quot;col-form-label&quot;&gt;Message&lt;/label&gt;
                  &lt;textarea row=&quot;3&quot; cols=&quot;50&quot; class=&quot;form-control textarea&quot; placeholder=&quot;Your Message&quot;&gt;&lt;/textarea&gt;
                &lt;/div&gt;
                &lt;div class=&quot;text-sm-right&quot;&gt;
                  &lt;button class=&quot;btn btn-primary-gradien&quot;&gt;SEND IT&lt;/button&gt;
                &lt;/div&gt;
              &lt;/form&gt;
            &lt;/div&gt;
            &lt;!-- Cod Box Copy end --&gt;</code></pre>
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
                <p class="mb-0">Copyright {{date('Y')}} © Cuba All rights reserved.</p>
              </div>
              <div class="col-md-6">
                <p class="pull-right mb-0">Developed with <i class="fa fa-heart font-secondary"></i></p>
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
    <script src="{{asset('assets/js/prism/prism.min.js')}}"></script>
    <script src="{{asset('assets/js/clipboard/clipboard.min.js')}}"></script>
    <script src="{{asset('assets/js/counter/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('assets/js/counter/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('assets/js/counter/counter-custom.js')}}"></script>
    <script src="{{asset('assets/js/custom-card/custom-card.js')}}"></script>
    <script src="{{asset('assets/js/datepicker/date-picker/datepicker.js')}}"></script>
    <script src="{{asset('assets/js/datepicker/date-picker/datepicker.en.js')}}"></script>
    <script src="{{asset('assets/js/datepicker/date-picker/datepicker.custom.js')}}"></script>
    <script src="{{asset('assets/js/owlcarousel/owl.carousel.js')}}"></script>
    <script src="{{asset('assets/js/general-widget.js')}}"></script>
    <script src="{{asset('assets/js/height-equal.js')}}"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{asset('assets/js/script.js')}}"></script>
    <!-- Plugin used-->
  </body>
</html>