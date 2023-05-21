<header>
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#bootstrap" />
                </svg>
                <span class="fs-4">IDEIA INOVADORA</span>
            </a>
            <ul class="nav nav-pills">
                @guest
                <li class="nav-item"><a class="nav-link" aria-current="page" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('blog') }}">Blog</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">Sobre</a>
                <li class="nav-item"><a class="nav-link" href="{{ route('pricing') }}">Planos</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('faqs') }}">FAQs</a></li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('registration') }}">Registrar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                @else

                <li class="nav-item">
                    <b class="nav-link"><i class="fa-solid fa-user" style="color: #0080ff;"></i> Olá, {{ auth()->user()->name }}!</b>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}">Sair <i class="fa-solid fa-right-from-bracket" style="color: #0080ff;"></i></a>
                </li>
                @endguest
            </ul>
        </header>
    </div>
</header>