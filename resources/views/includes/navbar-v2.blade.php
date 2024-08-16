<nav class="navbar navbar-expand navbar-light bg-secondary fixed-top w-100">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('products.index') }}">
            <img src="{{ asset('favicon.ico') }}" alt="" width="30" height="30"/>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('products.index') }}">
                        Home
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                       role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Products
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item"
                               href="{{ route('products.index', [...request()->query(), 'category' => 'console'])}}">Console</a>
                        </li>
                        <li><a class="dropdown-item"
                               href="{{ route('products.index',[...request()->query(),'category' => 'game'])}}">Games</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item"
                               href="{{ route('products.index',[...request()->query(),'category' => 'accessory'])}}">Accessories</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact us</a>
                </li>
            </ul>
        </div>
        <div class="navbar-nav ms-auto d-flex flex-wrap">
            <div class="btn btn-primary d-flex justify-content-end ms-auto">
                Register / Log in
            </div>
        </div>
    </div>
</nav>
