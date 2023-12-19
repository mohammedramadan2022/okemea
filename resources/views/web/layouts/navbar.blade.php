<header>
    <nav class="navbar navbar-expand-lg bg-secondary">
        <div class="container">
            <a class="navbar-brand" href="/index.html"><img src="{{asset('web-assets/images/Logo.png')}}" height="55px" class="of-contain" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-lg-flex align-items-center justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-acent me-5 font-regular" aria-current="page" href="{{route('/')}}">الرئيسية</a>
                    </li>
                    @auth('web')
                    <li class="nav-item">
                        <a class="nav-link text-acent me-5 font-regular" href="{{route('guarantees')}}">الضمانات</a>
                    </li>
                    @endauth
                    @auth('web')
                         <li class="nav-item">
                      <a class="nav-link text-acent me-5 font-regular" href="#">تسجيل الخروج</a>
                    </li>

                    @else
                        <li class="nav-item">
                            <a class="nav-link text-acent me-5 font-regular" href="{{route('auth.login')}}">تسجيل الدخول</a>
                        </li>

                    @endauth


                </ul>
            </div>
        </div>
    </nav>
</header>
