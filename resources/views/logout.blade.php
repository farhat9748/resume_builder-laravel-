<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Logout - ResumeBuilder</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
          rel="stylesheet">


    <style>

        body {
            min-height: 100vh;
            margin: 0;

            background: #f5f7fb;

            font-family: Arial, sans-serif;

            display: flex;
            align-items: center;
            justify-content: center;
        }

        .logout-card {

            width: 100%;
            max-width: 450px;

            background: white;

            padding: 45px;

            border-radius: 20px;

            text-align: center;

            box-shadow: 0 10px 35px rgba(0,0,0,0.08);
        }

        .logout-icon {

            width: 80px;
            height: 80px;

            margin: 0 auto 20px;

            border-radius: 50%;

            background: #ede9fe;

            color: #4f46e5;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 38px;
        }

        .logout-card h2 {

            font-weight: 700;

            margin-bottom: 10px;

        }

        .logout-card p {

            color: #6b7280;

            line-height: 1.6;

        }

        .btn-logout {

            background: #dc3545;

            color: white;

            border: none;

            padding: 12px 30px;

            border-radius: 10px;

            font-weight: 600;

        }

        .btn-logout:hover {

            background: #bb2d3b;

            color: white;

        }

        .btn-dashboard {

            padding: 12px 25px;

            border-radius: 10px;

            font-weight: 600;

        }

    </style>

</head>


<body>


<div class="container">

    <div class="logout-card">


        <!-- ICON -->

        <div class="logout-icon">

            <i class="bi bi-box-arrow-right"></i>

        </div>


        <!-- TITLE -->

        <h2>

            Logout from ResumeBuilder?

        </h2>


        <p>

            Are you sure you want to logout from your
            ResumeBuilder account?

        </p>


        <!-- LOGOUT FORM -->

        <form method="POST"
              action="{{ route('logout') }}"
              class="mt-4">

            @csrf


            <button type="submit"
                    class="btn btn-logout">

                <i class="bi bi-box-arrow-right"></i>

                Yes, Logout

            </button>


            <a href="{{ url('/dashboard') }}"
               class="btn btn-outline-secondary btn-dashboard ms-2">

                Cancel

            </a>

        </form>


        <!-- HOME -->

        <div class="mt-4">

            <a href="{{ url('/') }}"
               class="text-decoration-none text-muted">

                <i class="bi bi-house"></i>

                Back to Home

            </a>

        </div>


    </div>

</div>


</body>

</html>
