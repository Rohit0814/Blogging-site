<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-body-tertiary">

    <div class="container">
        <center>
            <div class="inner-register">
                <main>
                    <div class="py-5 text-center">
                        <h2>Login</h2>
                    </div>

                    <div class="col-md-7 col-lg-8">
                        <form method="post" action="\create-session">
                            @csrf
                            <div class="row g-3">
                                <x-user-text-input divClassName='col-12' labelFor='Email' inputType='email'
                                    inputName='email' labelName='Email' />
                                <x-user-text-input divClassName='col-12' labelFor='password' inputType='password'
                                    inputName='password' labelName='password' />
                            </div>

                            <hr class="my-4">

                            <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to
                                Login</button><br><br>
                            <h5>New User <a href="{{ url('/register') }}">Register</a></h5>
                        </form>

                        <footer class="my-2 pt-5 text-body-secondary text-center text-small">
                            <p class="mb-1">© 2017–2023 Company Name</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="/">Home</a></li>
                                <li class="list-inline-item"><a href="#">Privacy</a></li>
                                <li class="list-inline-item"><a href="#">Terms</a></li>
                                <li class="list-inline-item"><a href="#">Support</a></li>
                            </ul>
                        </footer>
                    </div>
                </main>
            </div>
</body>

</html>
