<nav class="main-header navbar navbar-expand navbar-white navbar-light" id="navbar">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        {{-- <li class="nav-item d-none d-sm-inline-block">
            <a href="" class="nav-link">Home</a>
        </li> --}}
    </ul>


    <ul class="navbar-nav ml-auto">
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
                <span class="nav-link">
                    <a href="{{ Route('login.show', 'admin') }}" class="px-3 btn btn-sm btn-primary">Login</a>
                </span>
            </li>
        @endauth
    </ul>
</nav>
