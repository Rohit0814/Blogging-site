<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blogger</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('/css/editor.css') }}">
</head>

<body>
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="/"
                class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#bootstrap"></use>
                </svg>
                <span class="fs-4">{{ Auth::guard('blogger')->user()->first_name }}
                    {{ Auth::guard('blogger')->user()->last_name }}</span>
            </a>

            <ul class="nav nav-pills">
                <li class="nav-item"><a href="/users/dashboard" class="nav-link active"
                        aria-current="page">Dashboard</a></li>
                <li class="nav-item"><a href="/users/post" class="nav-link">Post</a></li>
                <li class="nav-item"><a href="/posts/trash" class="nav-link">Trash</a></li>
                <li class="nav-item"><a href="/users/profile" class="nav-link">Profile</a></li>
                <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
                <form action="/users/logout" method="post">
                    @csrf
                    <li class="nav-item"><button type="submit" class="nav-link">Logout</button></li>
                </form>
            </ul>
        </header>
    </div>


    <div>
        {{ $slot }}
    </div>



    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
                    <svg class="bi" width="30" height="24">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                </a>
                <span class="mb-3 mb-md-0 text-body-secondary">© 2024 Company, Inc</span>
            </div>

            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3"><a class="text-body-secondary" href="#"><i
                            class="fa-brands fa-facebook"></i></a></li>
                <li class="ms-3"><a class="text-body-secondary" href="#"><i
                            class="fa-brands fa-square-instagram"></i></a></li>
                <li class="ms-3"><a class="text-body-secondary" href="#"><i
                            class="fa-brands fa-x-twitter"></i></a></li>
            </ul>
        </footer>
    </div>
</body>

</html>
