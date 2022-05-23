<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <div class="container">
            <a class="navbar-brand" href="/home">Pendaftaran Siswa</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    {{-- <li class="nav-item">
                    <a class="nav-link {{ request()->is('home') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
                    </li> --}}
                    <li class="nav-item">
                    <a class="nav-link {{ request()->is('status') ? 'active' : '' }}" href="/status">Status</a>
                    </li>
                    {{-- <li class="nav-item">
                    <a class="nav-link {{ request()->is('posts') ? 'active' : '' }}" href="/posts">Blog</a>
                    </li> --}}
                    {{-- <li class="nav-item">
                    <a class="nav-link {{ request()->is('categories') ? 'active' : '' }}" href="/categories">Categories</a>
                    </li> --}}
                </ul>

                {{-- ul login --}}
                <ul class="navbar-nav ms-auto">
                @auth
                {{-- <li class="nav-item">
                    <a href="/dashboard" class="nav-link">
                        Dashboard(Admin)
                    </a>
                </li>
                <li class="nav-item">
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="nav-link"> Logout</button>
                    </form>
                </li> --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Welcome back, {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @can('admin')
                        <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-window-reverse"></i> My Dashboard</a></li>
                        @endcan
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <form action="/logout" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                        </form>
                    </li>
                </ul>
                </li>
                @else
                    <li class="nav-item">
                        <a href="/login" class="nav-link {{ request()->is('login') ? 'active' : '' }}"><i class="bi bi-box-arrow-right"></i> Login</a>
                    </li>
                    @endauth
                </ul>

            </div>
        </div>
    </nav>
