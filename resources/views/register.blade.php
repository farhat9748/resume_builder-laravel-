<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Register - ResumeBuilder</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
          rel="stylesheet">


    <style>

        body {
            margin: 0;
            min-height: 100vh;
            font-family: Arial, sans-serif;
            background: #f5f7fb;
        }

        .register-wrapper {
            min-height: 100vh;
        }

        /* LEFT SIDE */

        .register-left {
            background: linear-gradient(135deg, #4f46e5, #7c3aed);
            color: white;

            min-height: 100vh;

            display: flex;
            align-items: center;
            justify-content: center;

            padding: 50px;
        }

        .register-left-content {
            max-width: 500px;
        }

        .register-left h1 {
            font-size: 48px;
            font-weight: 800;
            line-height: 1.2;
        }

        .register-left p {
            font-size: 18px;
            line-height: 1.7;
            opacity: 0.95;
        }

        .benefit {
            display: flex;
            align-items: center;
            margin-top: 20px;
        }

        .benefit i {
            font-size: 24px;
            margin-right: 12px;
        }


        /* RIGHT SIDE */

        .register-right {
            min-height: 100vh;

            display: flex;
            align-items: center;
            justify-content: center;

            padding: 30px;
        }

        .register-card {
            width: 100%;
            max-width: 480px;

            background: white;

            padding: 40px;

            border-radius: 18px;

            box-shadow: 0 10px 35px rgba(0,0,0,0.08);
        }


        /* BRAND */

        .brand {
            text-align: center;
            margin-bottom: 30px;
        }

        .brand-icon {
            width: 65px;
            height: 65px;

            margin: auto;
            margin-bottom: 15px;

            border-radius: 50%;

            background: #ede9fe;
            color: #4f46e5;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 30px;
        }

        .brand h2 {
            font-weight: 700;
        }


        /* FORM */

        .form-label {
            font-weight: 600;
        }

        .form-control {
            padding: 12px 15px;
            border-radius: 10px;
        }

        .form-control:focus {
            border-color: #4f46e5;

            box-shadow:
                0 0 0 0.2rem
                rgba(79,70,229,0.15);
        }


        /* BUTTON */

        .btn-register {
            width: 100%;

            padding: 12px;

            background: #4f46e5;
            color: white;

            border: none;
            border-radius: 10px;

            font-size: 16px;
            font-weight: 600;
        }

        .btn-register:hover {
            background: #4338ca;
            color: white;
        }


        /* LINKS */

        .login-link {
            color: #4f46e5;

            font-weight: 600;

            text-decoration: none;
        }

        .login-link:hover {
            text-decoration: underline;
        }

        .home-link {
            text-decoration: none;
            color: #6b7280;
        }

        .home-link:hover {
            color: #4f46e5;
        }


        /* MOBILE */

        @media (max-width: 991px) {

            .register-left {
                min-height: auto;
                padding: 50px 30px;
            }

            .register-left h1 {
                font-size: 38px;
            }

            .register-right {
                min-height: auto;
                padding: 50px 20px;
            }

        }

    </style>

</head>


<body>


<div class="container-fluid">

    <div class="row register-wrapper">


        <!-- ================================= -->
        <!-- LEFT SECTION -->
        <!-- ================================= -->

        <div class="col-lg-6 register-left">

            <div class="register-left-content">

                <h1>

                    Start Building
                    <br>

                    Your Dream Resume

                </h1>


                <p class="mt-4">

                    Create a professional resume that
                    helps you stand out from the crowd
                    and get closer to your dream job.

                </p>


                <!-- BENEFIT 1 -->

                <div class="benefit">

                    <i class="bi bi-check-circle-fill"></i>

                    <span>

                        Professional resume templates

                    </span>

                </div>


                <!-- BENEFIT 2 -->

                <div class="benefit">

                    <i class="bi bi-check-circle-fill"></i>

                    <span>

                        Easy resume creation

                    </span>

                </div>


                <!-- BENEFIT 3 -->

                <div class="benefit">

                    <i class="bi bi-check-circle-fill"></i>

                    <span>

                        Save multiple resumes

                    </span>

                </div>


                <!-- BENEFIT 4 -->

                <div class="benefit">

                    <i class="bi bi-check-circle-fill"></i>

                    <span>

                        Download professional PDF resumes

                    </span>

                </div>


            </div>

        </div>



        <!-- ================================= -->
        <!-- RIGHT SECTION -->
        <!-- ================================= -->

        <div class="col-lg-6 register-right">


            <div class="register-card">


                <!-- BRAND -->

                <div class="brand">

                    <div class="brand-icon">

                        <i class="bi bi-file-earmark-person"></i>

                    </div>


                    <h2>

                        Create Account

                    </h2>


                    <p class="text-muted">

                        Join ResumeBuilder today

                    </p>

                </div>



                <!-- ================================= -->
                <!-- VALIDATION ERRORS -->
                <!-- ================================= -->

                @if ($errors->any())

                    <div class="alert alert-danger">

                        <strong>
                            Please fix the following errors:
                        </strong>

                        <ul class="mb-0 mt-2">

                            @foreach ($errors->all() as $error)

                                <li>
                                    {{ $error }}
                                </li>

                            @endforeach

                        </ul>

                    </div>

                @endif



                <!-- ================================= -->
                <!-- REGISTER FORM -->
                <!-- ================================= -->

                <form method="POST"
                      action="{{ route('register') }}">

                    @csrf



                    <!-- NAME -->

                    <div class="mb-3">

                        <label for="name"
                               class="form-label">

                            Full Name

                        </label>


                        <div class="input-group">

                            <span class="input-group-text">

                                <i class="bi bi-person"></i>

                            </span>


                            <input type="text"
                                   id="name"
                                   name="name"

                                   value="{{ old('name') }}"

                                   class="form-control"

                                   placeholder="Enter your full name"

                                   required
                                   autofocus
                                   autocomplete="name">

                        </div>

                    </div>



                    <!-- EMAIL -->

                    <div class="mb-3">

                        <label for="email"
                               class="form-label">

                            Email Address

                        </label>


                        <div class="input-group">

                            <span class="input-group-text">

                                <i class="bi bi-envelope"></i>

                            </span>


                            <input type="email"
                                   id="email"
                                   name="email"

                                   value="{{ old('email') }}"

                                   class="form-control"

                                   placeholder="Enter your email address"

                                   required
                                   autocomplete="username">

                        </div>

                    </div>



                    <!-- PASSWORD -->

                    <div class="mb-3">

                        <label for="password"
                               class="form-label">

                            Password

                        </label>


                        <div class="input-group">

                            <span class="input-group-text">

                                <i class="bi bi-lock"></i>

                            </span>


                            <input type="password"
                                   id="password"
                                   name="password"

                                   class="form-control"

                                   placeholder="Create a password"

                                   required
                                   autocomplete="new-password">

                        </div>


                        <small class="text-muted">

                            Use at least 8 characters.

                        </small>

                    </div>



                    <!-- CONFIRM PASSWORD -->

                    <div class="mb-4">

                        <label for="password_confirmation"
                               class="form-label">

                            Confirm Password

                        </label>


                        <div class="input-group">

                            <span class="input-group-text">

                                <i class="bi bi-shield-lock"></i>

                            </span>


                            <input type="password"
                                   id="password_confirmation"
                                   name="password_confirmation"

                                   class="form-control"

                                   placeholder="Confirm your password"

                                   required
                                   autocomplete="new-password">

                        </div>

                    </div>



                    <!-- TERMS -->

                    <div class="form-check mb-4">

                        <input class="form-check-input"
                               type="checkbox"
                               id="terms"
                               required>


                        <label class="form-check-label"
                               for="terms">

                            I agree to the
                            <a href="#"
                               class="login-link">

                                Terms & Conditions

                            </a>

                        </label>

                    </div>



                    <!-- REGISTER BUTTON -->

                    <button type="submit"
                            class="btn-register">

                        <i class="bi bi-person-plus"></i>

                        Create Account

                    </button>


                </form>



                <!-- LOGIN LINK -->

                <div class="text-center mt-4">

                    <span class="text-muted">

                        Already have an account?

                    </span>


                    <a href="{{ route('login') }}"
                       class="login-link">

                        Login

                    </a>

                </div>



                <!-- HOME LINK -->

                <div class="text-center mt-4">

                    <a href="{{ url('/') }}"
                       class="home-link">

                        <i class="bi bi-arrow-left"></i>

                        Back to Home

                    </a>

                </div>


            </div>


        </div>


    </div>

</div>


<!-- Bootstrap JS -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>


</body>

</html>
