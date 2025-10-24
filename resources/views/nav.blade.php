<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">Laravel Mentor</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link @active('home')" href="{{ url('/') }}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link @active('about')" href="{{ url('about') }}">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link @active('contact')" href="{{ url('contact') }}">Contact</a>
                </li>



                @auth

                <li class="nav-item">
                        <a class="nav-link @active('dashboard')" href="{{ route('dashboard') }}">Dashboard</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link @active('blog')" href="{{ route('blog') }}">Blog</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link @active('blog.create')" href="{{ route('blog.create') }}">Create post</a>
                    </li>

                    {{-- categories --}}
                    <li class="nav-item">
                        <a class="nav-link @active('categories*')" href="{{ route('categories.index') }}">Categories</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link @active('auth.logout')" href="{{ route('auth.logout') }}">Logout</a>
                    </li>

                @endauth

                @guest

                    <li class="nav-item">
                        <a class="nav-link @active('auth.register')" href="{{ route('auth.register') }}">Register</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link @active('auth.login')" href="{{ route('auth.login') }}">Login</a>
                    </li>

                @endguest

            </ul>

        </div>
    </div>
</nav>
