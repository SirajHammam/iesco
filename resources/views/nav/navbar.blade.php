<nav class="navbar navbar-expand-md navbar-dark  fixed-top bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">
            {{-- <img src="/assets/img/logos.png" width="30" height="30" class="d-inline-block align-top" alt=""> --}}
            <b>IESCO</b>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
               
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Event</a>
                </li>
                
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                @endguest
                
                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="#">Dasboard</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle " href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-circle"></i>
                        {{ Auth::user()->username }}    
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/profile">
                            <i class="bi bi-person-circle"></i>
                            My Profile
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="bi bi-tools"></i>
                            Account Settings
                        </a>
                        <a class="dropdown-item" href="#">
                        <i class="bi bi-journal-text"></i>
                            Need Help
                        </a>
                        <form action="/logout" method="post">
                            @csrf
                            <button class="dropdown-item" href="#">
                                <i class="bi bi-box-arrow-right"></i>
                                Logout
                            </button>
                        </form>
                        </div>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>