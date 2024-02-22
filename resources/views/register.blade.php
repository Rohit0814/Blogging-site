<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        .register label {
            text-align: left;
        }
    </style>
</head>

<body class="bg-body-tertiary">
    <div class="container register">
        <center>
            <div class="inner-register">
                <main>
                    <div class="py-5 text-center">
                        <h2>Registration form</h2>
                    </div>
                    <div class="col-md-7 col-lg-8">
                        <form method="post" action="/create-user">
                            @csrf
                            <div class="row g-3">

                                <x-user-text-input divClassName='col-sm-6' labelFor='firstName' inputType='text'
                                    inputName='first_name' labelName='First Name' />
                                <x-user-text-input divClassName='col-sm-6' labelFor='lastName' inputType='text'
                                    inputName='last_name' labelName='Last Name' />
                                <x-user-text-input divClassName='col-sm-6' labelFor='firstName' inputType='password'
                                    inputName='password' labelName='Password' />
                                <x-user-text-input divClassName='col-sm-6' labelFor='lastName' inputType='password'
                                    inputName='confirm_password' labelName='Confirm Password' />
                                <x-user-text-input divClassName='col-12' labelFor='username' inputType='text'
                                    inputName='username' labelName='Username' />
                                <x-user-text-input divClassName='col-12' labelFor='email' inputType='email'
                                    inputName='email' labelName='Email' />
                                <x-user-text-input divClassName='col-12' labelFor='address' inputType='text'
                                    inputName='address' labelName='Address' />
                                <x-user-text-input divClassName='col-12' labelFor='address2' inputType='text'
                                    inputName='address2' labelName='Address 2 (optional)' />

                                <div class="col-md-5">
                                    <select class="form-select" id="country" name="country">
                                        <option value="">Choose...</option>
                                        <option value="us">United States</option>
                                        <option value="india">India</option>
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <select class="form-select" id="state" name="state">
                                        <option value="">Choose...</option>
                                        <option value="california">California</option>
                                        <option value="jharkhand">Jharkhand</option>
                                    </select>
                                </div>

                                <x-user-text-input divClassName='col-md-3' labelFor='zip' inputType='text'
                                    inputName='zip' labelName='Zip' />
                            </div>

                            <hr class="my-4">

                            <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to Register</button>
                        </form>
                    </div>
                </main>

                <footer class="my-2 pt-5 text-body-secondary text-center text-small">
                    <p class="mb-1">© 2017–2023 Company Name</p>
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="#">Privacy</a></li>
                        <li class="list-inline-item"><a href="#">Terms</a></li>
                        <li class="list-inline-item"><a href="#">Support</a></li>
                    </ul>
                </footer>
            </div>
        </center>
    </div>
    <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <script src="checkout.js"></script>

</body>

</html>
