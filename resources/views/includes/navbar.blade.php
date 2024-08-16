{{--<nav class="navbar navbar-expand-lg navbar-light bg-light">--}}
{{--    <div class="btn btn-primary d-flex justify-content-end ms-auto">--}}
{{--        Register / Log in--}}
{{--    </div>--}}
{{--</nav>--}}
{{--<nav class="navbar navbar-expand-lg navbar-light bg-light">--}}
{{--    <div class="container-fluid">--}}
{{--        <a class="navbar-brand" href="{{ route('products.index') }}">--}}
{{--            <img src="{{ asset('favicon.ico') }}" alt="" width="30" height="30"/>--}}
{{--        </a>--}}
{{--        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"--}}
{{--                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"--}}
{{--                aria-expanded="false" aria-label="Toggle navigation">--}}
{{--            <span class="navbar-toggler-icon"></span>--}}
{{--        </button>--}}
{{--        <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--            <ul class="navbar-nav me-auto mb-2 mb-lg-0">--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link active" aria-current="page" href="{{ route('products.index') }}">--}}
{{--                        Home--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"--}}
{{--                       role="button" data-bs-toggle="dropdown" aria-expanded="false">--}}
{{--                        Products--}}
{{--                    </a>--}}

{{--                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
{{--                        <li><a class="dropdown-item"--}}
{{--                               href="{{ route('products.index', [...request()->query(), 'category' => 'console'])}}">Console</a>--}}
{{--                        </li>--}}
{{--                        <li><a class="dropdown-item"--}}
{{--                               href="{{ route('products.index',[...request()->query(),'category' => 'game'])}}">Games</a></li>--}}
{{--                        <li>--}}
{{--                            <hr class="dropdown-divider">--}}
{{--                        </li>--}}
{{--                        <li><a class="dropdown-item"--}}
{{--                               href="{{ route('products.index',[...request()->query(),'category' => 'accessory'])}}">Accessories</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="#">About us</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="#">Contact us</a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--            <form method="GET" action="{{ route('products.index') }}" class="d-flex  align-item-bottom mt-2">--}}
{{--                <input class="form-control me-2" type="text" name="title" placeholder="Search by title"--}}
{{--                       aria-label="Search"--}}
{{--                       value="{{ request('title') }}"/>--}}
{{--                <input type="hidden" name="filter" value="{{ request('filter') }}"/>--}}
{{--                <button class="btn btn-outline-success" type="submit">Search</button>--}}
{{--                <a href="{{ route('products.index') }}" class="btn btn-outline-primary">Clear</a>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}
{{--<nav class="navbar navbar-expand-lg bg-info">--}}
{{--    <div class="container mb-md-2 d-flex">--}}
{{--        @php--}}
{{--            $filters =[--}}
{{--                '' => 'Latest',--}}
{{--                'popular_last_month' => 'Popular Last Month',--}}
{{--                'popular_last_6months' => 'Popular Last 6 Months',--}}
{{--                'highest_rated_last_month' => 'Highest Rated Last Month',--}}
{{--                'highest_rated_last_6months' => 'Highest Rated Last 6 Months'--}}
{{--];--}}
{{--        @endphp--}}

{{--        @foreach ($filters as $key => $label)--}}
{{--            <a href="{{ route('products.index', [...request()->query,'filter' => $key] )}}"--}}
{{--               class="{{ request('filter') === $key || (request('filter') === null && $key === '') ? 'alert alert-light text-uppercase text-decoration-none' : 'text-decoration-none text-light' }}">--}}
{{--                {{ $label }}--}}
{{--            </a>--}}
{{--        @endforeach--}}
{{--    </div>--}}
{{--</nav>--}}
