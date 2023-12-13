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
    <title>Cuba - Premium Admin Template Dark Layout</title>
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
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/chartist.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/date-picker.css')}}">
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.css')}}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <link id="color" rel="stylesheet" href="{{asset('assets/css/color-1.css')}}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">
  </head>
  <body class="dark-only" main-theme-layout="ltr">
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
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
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
                  <h3>Dark Layout</h3>
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
            <div class="row second-chart-list third-news-update">
              <div class="col-xl-4 col-lg-12 xl-50 morning-sec box-col-12">
                <div class="card o-hidden profile-greeting">
                  <div class="card-body">
                    <div class="media">
                      <div class="badge-groups w-100">
                        <div class="badge f-12"><i class="mr-1" data-feather="clock"></i><span id="txt"></span></div>
                        <div class="badge f-12"><i class="fa fa-spin fa-cog f-14"></i></div>
                      </div>
                    </div>
                    <div class="greeting-user text-center">
                      <div class="profile-vector"><img class="img-fluid" src="{{asset('assets/images/dashboard/welcome.png')}}" alt=""></div>
                      <h4 class="f-w-600"><span id="greeting">Good Morning</span> <span class="right-circle"><i class="fa fa-check-circle f-14 middle"></i></span></h4>
                      <p><span> You have done 57.6% more sales today. Check your new badge in your profile.</span></p>
                      <div class="whatsnew-btn"><a class="btn btn-primary">Whats New !</a></div>
                      <div class="left-icon"><i class="fa fa-bell"> </i></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-8 xl-100 dashboard-sec box-col-12">
                <div class="card earning-card">
                  <div class="card-body p-0">
                    <div class="row m-0">
                      <div class="col-xl-3 earning-content p-0">
                        <div class="row m-0 chart-left">
                          <div class="col-xl-12 p-0 left_side_earning">
                            <h5>Dashboard</h5>
                            <p class="font-roboto">Overview of last month</p>
                          </div>
                          <div class="col-xl-12 p-0 left_side_earning">
                            <h5>$4055.56 </h5>
                            <p class="font-roboto">This Month Earning</p>
                          </div>
                          <div class="col-xl-12 p-0 left_side_earning">
                            <h5>$1004.11</h5>
                            <p class="font-roboto">This Month Profit</p>
                          </div>
                          <div class="col-xl-12 p-0 left_side_earning">
                            <h5>90%</h5>
                            <p class="font-roboto">This Month Sale</p>
                          </div>
                          <div class="col-xl-12 p-0 left-btn"><a class="btn btn-gradient">Summary</a></div>
                        </div>
                      </div>
                      <div class="col-xl-9 p-0">
                        <div class="chart-right">
                          <div class="row m-0 p-tb">
                            <div class="col-xl-8 col-md-8 col-sm-8 col-12 p-0">
                              <div class="inner-top-left">
                                <ul class="d-flex list-unstyled">
                                  <li>Daily</li>
                                  <li class="active">Weekly</li>
                                  <li>Monthly</li>
                                  <li>Yearly</li>
                                </ul>
                              </div>
                            </div>
                            <div class="col-xl-4 col-md-4 col-sm-4 col-12 p-0 justify-content-end">
                              <div class="inner-top-right">
                                <ul class="d-flex list-unstyled justify-content-end">
                                  <li>Online</li>
                                  <li>Store</li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xl-12">
                              <div class="card-body p-0">
                                <div class="current-sale-container">
                                  <div id="chart-currently"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row border-top m-0">
                          <div class="col-xl-4 pl-0 col-md-6 col-sm-6">
                            <div class="media p-0">
                              <div class="media-left"><i class="icofont icofont-crown"></i></div>
                              <div class="media-body">
                                <h6>Referral Earning</h6>
                                <p>$5,000.20</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-4 col-md-6 col-sm-6">
                            <div class="media p-0">
                              <div class="media-left bg-secondary"><i class="icofont icofont-heart-alt"></i></div>
                              <div class="media-body">
                                <h6>Cash Balance</h6>
                                <p>$2,657.21</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-4 col-md-12 pr-0">
                            <div class="media p-0">
                              <div class="media-left"><i class="icofont icofont-cur-dollar"></i></div>
                              <div class="media-body">
                                <h6>Sales forcasting</h6>
                                <p>$9,478.50     </p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-9 xl-100 chart_data_left box-col-12">
                <div class="card">
                  <div class="card-body p-0">
                    <div class="row m-0 chart-main">
                      <div class="col-xl-3 col-md-6 col-sm-6 p-0 box-col-6">
                        <div class="media align-items-center">
                          <div class="hospital-small-chart">
                            <div class="small-bar">
                              <div class="small-chart flot-chart-container"></div>
                            </div>
                          </div>
                          <div class="media-body">
                            <div class="right-chart-content">
                              <h4>1001</h4>
                              <span>purchase </span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-3 col-md-6 col-sm-6 p-0 box-col-6">
                        <div class="media align-items-center">
                          <div class="hospital-small-chart">
                            <div class="small-bar">
                              <div class="small-chart1 flot-chart-container"></div>
                            </div>
                          </div>
                          <div class="media-body">
                            <div class="right-chart-content">
                              <h4>1005</h4>
                              <span>Sales</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-3 col-md-6 col-sm-6 p-0 box-col-6">
                        <div class="media align-items-center">
                          <div class="hospital-small-chart">
                            <div class="small-bar">
                              <div class="small-chart2 flot-chart-container"></div>
                            </div>
                          </div>
                          <div class="media-body">
                            <div class="right-chart-content">
                              <h4>100</h4>
                              <span>Sales return</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-3 col-md-6 col-sm-6 p-0 box-col-6">
                        <div class="media border-none align-items-center">
                          <div class="hospital-small-chart">
                            <div class="small-bar">
                              <div class="small-chart3 flot-chart-container"></div>
                            </div>
                          </div>
                          <div class="media-body">
                            <div class="right-chart-content">
                              <h4>101</h4>
                              <span>Purchase ret</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 xl-50 chart_data_right box-col-12">
                <div class="card">
                  <div class="card-body">
                    <div class="media align-items-center">
                      <div class="media-body right-chart-content">
                        <h4>$95,900<span class="new-box">Hot</span></h4>
                        <span>Purchase Order Value</span>
                      </div>
                      <div class="knob-block text-center">
                        <input class="knob1" data-width="10" data-height="70" data-thickness=".3" data-angleoffset="0" data-linecap="round" data-fgcolor="#7366ff" data-bgcolor="#eef5fb" value="60">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 xl-50 chart_data_right second d-none">
                <div class="card">
                  <div class="card-body">
                    <div class="media align-items-center">
                      <div class="media-body right-chart-content">
                        <h4>$95,000<span class="new-box">New</span></h4>
                        <span>Product Order Value</span>
                      </div>
                      <div class="knob-block text-center">
                        <input class="knob1" data-width="50" data-height="70" data-thickness=".3" data-fgcolor="#7366ff" data-linecap="round" data-angleoffset="0" value="60">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 xl-50 news box-col-6">
                <div class="card">
                  <div class="card-header">
                    <div class="header-top">
                      <h5 class="m-0">News & Update</h5>
                      <div class="card-header-right-icon">
                        <select class="button btn btn-primary">
                          <option>Today</option>
                          <option>Tomorrow</option>
                          <option>Yesterday</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="news-update">
                      <h6>36% off For pixel lights Couslations Types.</h6>
                      <span>Lorem Ipsum is simply dummy...</span>
                    </div>
                    <div class="news-update">
                      <h6>We are produce new product this</h6>
                      <span> Lorem Ipsum is simply text of the printing... </span>
                    </div>
                    <div class="news-update">
                      <h6>50% off For COVID Couslations Types.</h6>
                      <span>Lorem Ipsum is simply dummy...</span>
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="bottom-btn"><a href="#">More...</a></div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 xl-50 appointment-sec box-col-6">
                <div class="row">
                  <div class="col-xl-12 appointment">
                    <div class="card">
                      <div class="card-header card-no-border">
                        <div class="header-top">
                          <h5 class="m-0">appointment</h5>
                          <div class="card-header-right-icon">
                            <select class="button btn btn-primary">
                              <option>Today</option>
                              <option>Tomorrow</option>
                              <option>Yesterday</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="card-body pt-0">
                        <div class="appointment-table table-responsive">
                          <table class="table table-bordernone">
                            <tbody>
                              <tr>
                                <td>
                                  <img class="img-fluid img-40 rounded-circle mb-3" src="{{asset('assets/images/appointment/app-ent.jpg')}}" alt="Image description">
                                  <div class="status-circle bg-primary"></div>
                                </td>
                                <td class="img-content-box"><span class="d-block">Venter Loren</span><span class="font-roboto">Now</span></td>
                                <td>
                                  <p class="m-0 font-primary">28 Sept</p>
                                </td>
                                <td class="text-right">
                                  <div class="button btn btn-primary">Done<i class="fa fa-check-circle ml-2"></i></div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <img class="img-fluid img-40 rounded-circle" src="{{asset('assets/images/appointment/app-ent.jpg')}}" alt="Image description">
                                  <div class="status-circle bg-primary"></div>
                                </td>
                                <td class="img-content-box"><span class="d-block">John Loren</span><span class="font-roboto">11:00</span></td>
                                <td>
                                  <p class="m-0 font-primary">22 Sept</p>
                                </td>
                                <td class="text-right">
                                  <div class="button btn btn-danger">Pending<i class="fa fa-check-circle ml-2"></i></div>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-12 alert-sec">
                    <div class="card bg-img">
                      <div class="card-header">
                        <div class="header-top">
                          <h5 class="m-0">Alert  </h5>
                          <div class="dot-right-icon"><i class="fa fa-ellipsis-h"></i></div>
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="body-bottom">
                          <h6>  10% off For drama lights Couslations...</h6>
                          <span class="font-roboto">Lorem Ipsum is simply dummy...It is a long established fact that a reader will be distracted by  </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 xl-50 notification box-col-6">
                <div class="card">
                  <div class="card-header card-no-border">
                    <div class="header-top">
                      <h5 class="m-0">notification</h5>
                      <div class="card-header-right-icon">
                        <select class="button btn btn-primary">
                          <option>Today</option>
                          <option>Tomorrow</option>
                          <option>Yesterday</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="card-body pt-0">
                    <div class="media">
                      <div class="media-body">
                        <p>20-04-2020 <span>10:10</span></p>
                        <h6>Updated Product<span class="dot-notification"></span></h6>
                        <span>Quisque a consequat ante sit amet magna...</span>
                      </div>
                    </div>
                    <div class="media">
                      <div class="media-body">
                        <p>20-04-2020<span class="pl-1">Today</span><span class="badge badge-secondary">New</span></p>
                        <h6>Tello just like your product<span class="dot-notification"></span></h6>
                        <span>Quisque a consequat ante sit amet magna... </span>
                      </div>
                    </div>
                    <div class="media">
                      <div class="media-body">
                        <div class="d-flex mb-3">
                          <div class="inner-img"><img class="img-fluid" src="{{asset('assets/images/notification/1.jpg')}}" alt="Product-1"></div>
                          <div class="inner-img"><img class="img-fluid" src="{{asset('assets/images/notification/2.jpg')}}" alt="Product-2"></div>
                        </div>
                        <span class="mt-3">Quisque a consequat ante sit amet magna...</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 xl-50 appointment box-col-6">
                <div class="card">
                  <div class="card-header">
                    <div class="header-top">
                      <h5 class="m-0">Market Value</h5>
                      <div class="card-header-right-icon">
                        <select class="button btn btn-primary">
                          <option>Year</option>
                          <option>Month</option>
                          <option>Day</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="card-Body">
                    <div class="radar-chart">
                      <div id="marketchart">       </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 xl-100 chat-sec box-col-6">
                <div class="card chat-default">
                  <div class="card-header card-no-border">
                    <div class="media media-dashboard">
                      <div class="media-body">
                        <h5 class="mb-0">Chat</h5>
                      </div>
                      <div class="icon-box"><i class="fa fa-ellipsis-h"></i></div>
                    </div>
                  </div>
                  <div class="card-body chat-box">
                    <div class="chat">
                      <div class="media left-side-chat">
                        <div class="media-body d-flex">
                          <div class="img-profile"> <img class="img-fluid" src="{{asset('assets/images/user.jpg')}}" alt="Profile"></div>
                          <div class="main-chat">
                            <div class="message-main"><span class="mb-0">Hi deo, Please send me link.</span></div>
                            <div class="sub-message message-main"><span class="mb-0">Right Now</span></div>
                          </div>
                        </div>
                        <p class="f-w-400">7:28 PM</p>
                      </div>
                      <div class="media right-side-chat">
                        <p class="f-w-400">7:28 PM</p>
                        <div class="media-body text-right">
                          <div class="message-main pull-right">
                            <span class="mb-0 text-left">How can do for you</span>
                            <div class="clearfix"></div>
                          </div>
                        </div>
                      </div>
                      <div class="media left-side-chat">
                        <div class="media-body d-flex">
                          <div class="img-profile"> <img class="img-fluid" src="{{asset('assets/images/user.jpg')}}" alt="Profile"></div>
                          <div class="main-chat">
                            <div class="sub-message message-main mt-0"><span>It's argenty</span></div>
                          </div>
                        </div>
                        <p class="f-w-400">7:28 PM</p>
                      </div>
                      <div class="media right-side-chat">
                        <div class="media-body text-right">
                          <div class="message-main pull-right"><span class="loader-span mb-0 text-left" id="wave"><span class="dot"></span><span class="dot"></span><span class="dot"></span></span></div>
                        </div>
                      </div>
                      <div class="input-group">
                        <input class="form-control" id="mail" type="text" placeholder="Type Your Message..." name="text">
                        <div class="send-msg"><i data-feather="send"></i></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-12 xl-50 calendar-sec box-col-6">
                <div class="card gradient-primary o-hidden">
                  <div class="card-body">
                    <div class="setting-dot">
                      <div class="setting-bg-primary date-picker-setting position-set pull-right"><i class="fa fa-spin fa-cog"></i></div>
                    </div>
                    <div class="default-datepicker">
                      <div class="datepicker-here" data-language="en"></div>
                    </div>
                    <span class="default-dots-stay overview-dots full-width-dots"><span class="dots-group"><span class="dots dots1"></span><span class="dots dots2 dot-small"></span><span class="dots dots3 dot-small"></span><span class="dots dots4 dot-medium"></span><span class="dots dots5 dot-small"></span><span class="dots dots6 dot-small"></span><span class="dots dots7 dot-small-semi"></span><span class="dots dots8 dot-small-semi"></span><span class="dots dots9 dot-small">                </span></span></span>
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
    <script src="{{asset('assets/js/chart/chartist/chartist.js')}}"></script>
    <script src="{{asset('assets/js/chart/chartist/chartist-plugin-tooltip.js')}}"></script>
    <script src="{{asset('assets/js/chart/knob/knob.min.js')}}"></script>
    <script src="{{asset('assets/js/chart/knob/knob-chart.js')}}"></script>
    <script src="{{asset('assets/js/chart/apex-chart/apex-chart.js')}}"></script>
    <script src="{{asset('assets/js/chart/apex-chart/stock-prices.js')}}"></script>
    <script src="{{asset('assets/js/notify/bootstrap-notify.min.js')}}"></script>
    <script src="{{asset('assets/js/dashboard/default.js')}}"></script>
    <script src="{{asset('assets/js/notify/index.js')}}"></script>
    <script src="{{asset('assets/js/datepicker/date-picker/datepicker.js')}}"></script>
    <script src="{{asset('assets/js/datepicker/date-picker/datepicker.en.js')}}"></script>
    <script src="{{asset('assets/js/datepicker/date-picker/datepicker.custom.js')}}"></script>
    <script src="{{asset('assets/js/tooltip-init.js')}}"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{asset('assets/js/script.js')}}"></script>
    <!-- Plugin used-->
  </body>
</html>