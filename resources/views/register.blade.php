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
                        <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each
                            required
                            form group has a validation state that can be triggered by attempting to submit the form
                            without
                            completing it.</p>
                    </div>
                    <div class="col-md-7 col-lg-8">
                        <h4 class="mb-3">Registration</h4>
                        <form class="needs-validation" novalidate="" method="post">
                            @csrf
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <label for="firstName" class="form-label">First
                                        name</label>
                                    <input type="text" class="form-control" id="firstName" name="first_name"
                                        placeholder="" value="" required>
                                </div>

                                <div class="col-sm-6">
                                    <label for="lastName" class="form-label">Last name</label>
                                    <input type="text" class="form-control" id="lastName" name="last_name"
                                        placeholder="" value="" required>
                                </div>

                                <div class="col-12">
                                    <label for="username" class="form-label">Username</label>
                                    <div class="input-group has-validation">
                                        <span class="input-group-text">@</span>
                                        <input type="text" class="form-control" name="username" id="username"
                                            placeholder="Username" required>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label for="email" class="form-label">Email <span
                                            class="text-body-secondary">(Optional)</span></label>
                                    <input type="email" class="form-control" id="email"
                                        placeholder="you@example.com" name="email">
                                </div>

                                <div class="col-12">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="address" placeholder="1234 Main St"
                                        required name="address">
                                </div>

                                <div class="col-12">
                                    <label for="address2" class="form-label">Address 2 <span
                                            class="text-body-secondary">(Optional)</span></label>
                                    <input type="text" class="form-control" id="address2"
                                        placeholder="Apartment or suite" name="address2">
                                </div>

                                <div class="col-md-5">
                                    <label for="country" class="form-label">Country</label>
                                    <select class="form-select" id="country" name="country">
                                        <option value="">Choose...</option>
                                        <option value="us">United States</option>
                                        <option value="india">India</option>
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <label for="state" class="form-label">State</label>
                                    <select class="form-select" id="state" name="state">
                                        <option value="">Choose...</option>
                                        <option value="california">California</option>
                                        <option value="jharkhand">Jharkhand</option>
                                    </select>
                                </div>

                                <div class="col-md-3">
                                    <label for="zip" class="form-label">Zip</label>
                                    <input type="text" class="form-control" id="zip" placeholder=""
                                        required="" name="zip">
                                    <div class="invalid-feedback">
                                        Zip code required.
                                    </div>
                                </div>
                            </div>

                            <hr class="my-4">

                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="same-address">
                                <label class="form-check-label" for="same-address">Accept Terms & condition</label>
                            </div>


                            <hr class="my-4">

                            <hr class="my-4">

                            <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
                        </form>
                    </div>
                </main>

                <footer class="my-5 pt-5 text-body-secondary text-center text-small">
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
