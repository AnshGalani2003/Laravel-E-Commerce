<?php
use App\Http\Controllers\ProductController;
$total = 0;
if (Session::has('user')) {
    $total = ProductController::cartItem();
}
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="#">E Comm</a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Orders</a>
                </li>
            </ul>
            <form action="/search" class="form-inline search-form d-flex gap-4">
                <input class="form-control mr-sm-2 search-box" type="search" name="search-query" placeholder="Search"
                    aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>

            <div class="d-flex">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item list-none">
                        <a class="nav-link active" aria-current="page" href="/cartlist">Cart Item
                            ({{ $total }})</a>
                    </li>
                    @if (Session::has('user'))
                        <li class="nav-item list-none">
                            <a class="nav-link active" aria-current="page"
                                href="#">{{ Session::get('user')['name'] }}</a>
                        </li>
                        <li class="nav-item list-none">
                            <a class="nav-link active" aria-current="page" href="/logout">Logout</a>
                        </li>
                    @else
                        <li class="nav-item list-none">
                            <a class="nav-link active" aria-current="page" href="/login">Login</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</nav>
