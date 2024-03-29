<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <header class="p-3 text-bg-dark">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="/" class="nav-link px-2 text-secondary">Home</a></li>
                    <li><a href="/about" class="nav-link px-2 text-white">About</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Contact Us</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Services</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
                </ul>

                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                    <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..."
                        aria-label="Search">
                </form>

                @if (Auth::guard('blogger')->check())
                    <div class="text-end d-flex">
                        <a href="/users/dashboard"><button type="button"
                                class="btn btn-success me-2">Dashboard</button></a>
                        <form action="/users/logout" method="post">
                            @csrf
                            <li style="list-style: none"><button class="btn btn-danger" type="submit">Logout</button>
                            </li>
                        </form>
                    </div>
                @else
                    <div class="text-end">
                        <a href="/login"><button type="button" class="btn btn-outline-light me-2">Login</button></a>
                        <a href="/register"><button type="button" class="btn btn-warning">Sign-up</button></a>
                    </div>
                @endif

            </div>
        </div>
    </header>
