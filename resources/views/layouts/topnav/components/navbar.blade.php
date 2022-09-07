<nav class="main-header navbar navbar-expand navbar-light navbar-white" id="navbar">
    <div class="container">
        <a href="{{ Route('home') }}" class="navbar-brand">
            <span class="brand-text font-weight-light">{{ env('APP_NAME') }}</span>
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" class="nav-link dropdown-toggle">Other Layots</a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                        <li><a href="{{ Route('dashboard') }}" class="dropdown-item">Side nav </a></li>
                        <li><a href="{{ Route('sample.topnavside') }}" class="dropdown-item">Top nav has sidebar</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" class="nav-link dropdown-toggle">Dropdown</a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                        <li><a href="#" class="dropdown-item">Some action </a></li>
                        <li><a href="#" class="dropdown-item">Some other action</a></li>
                    </ul>
                </li>
            </ul>

            <!-- SEARCH FORM -->
            <form class="form-inline ml-0 ml-md-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search"
                        aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>




        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
            @auth
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link d-flex align-items-center" data-toggle="dropdown" style="gap: .3rem;">
                        <div class="bg-image bg-profile"
                            style="width: 30px; background-image: url('{{ Auth::user()->avatar }}')"></div>
                        <div>
                            {{ Auth::user()->name }}
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <div class="dropdown-item">
                            <div class="media">
                                <div class="bg-image bg-profile mr-2"
                                    style="width: 45px; background-image: url('{{ Auth::user()->avatar }}')"></div>
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        {{ Auth::user()->name }}

                                        <a href="" class="float-right" style="cursor: pointer;">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </h3>
                                    <p class="text-sm">{{ Auth::user()->email }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="dropdown-item">
                            <form action="{{ route('logout') }}" method="POST"
                                onsubmit="return confirm('Anda benar-benar ingin logout?')">
                                @csrf
                                <button class="btn btn-block btn-sm btn-danger">
                                    <i class="fas fa-power-off" aria-hidden="true"></i> Logout
                                </button>
                            </form>
                        </div>
                    </div>
                </li>
            @else
                <li class="nav-item">
                    <a href="{{ Route('login.index') }}" class="px-3 btn btn-sm btn-primary">Login</a>
                </li>
            @endauth
        </ul>
    </div>
</nav>
