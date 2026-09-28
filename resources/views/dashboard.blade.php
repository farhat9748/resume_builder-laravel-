<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ResumeBuilder - Build Your Professional Resume</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f8f9fa;
            color: #212529;
        }

        .navbar {
            background: #ffffff;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        }

        .navbar-brand {
            font-size: 25px;
            font-weight: 700;
            color: #4f46e5 !important;
        }

        .nav-link {
            font-weight: 500;
            margin-left: 12px;
        }

        .hero {
            background: linear-gradient(135deg, #4f46e5, #7c3aed);
            color: white;
            padding: 100px 0;
        }

        .hero h1 {
            font-size: 52px;
            font-weight: 800;
            line-height: 1.15;
        }

        .hero p {
            font-size: 19px;
            line-height: 1.7;
            opacity: 0.95;
        }

        .hero-image {
            background: white;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.2);
        }

        .resume-preview {
            background: #ffffff;
            color: #333;
            min-height: 360px;
            padding: 25px;
            border-radius: 8px;
        }

        .resume-preview h4 {
            color: #4f46e5;
            font-weight: 700;
        }

        .section-title {
            font-weight: 700;
            font-size: 36px;
        }

        .feature-card {
            background: white;
            padding: 30px;
            border-radius: 15px;
            height: 100%;
            border: 1px solid #eee;
            transition: 0.3s;
        }

        .feature-card:hover {
            transform: translateY(-7px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .feature-icon {
            width: 65px;
            height: 65px;
            border-radius: 50%;
            background: #ede9fe;
            color: #4f46e5;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            margin-bottom: 20px;
        }

        .step-number {
            width: 55px;
            height: 55px;
            background: #4f46e5;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            font-weight: bold;
            margin: auto;
        }

        .template-card {
            background: white;
            border-radius: 12px;
            padding: 15px;
            border: 1px solid #ddd;
            transition: 0.3s;
        }

        .template-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }

        .template-preview {
            height: 250px;
            background: #f1f3f5;
            padding: 20px;
            border-radius: 8px;
        }

        .template-header {
            height: 35px;
            width: 65%;
            background: #4f46e5;
            margin-bottom: 15px;
        }

        .template-line {
            height: 8px;
            background: #dee2e6;
            margin: 10px 0;
            border-radius: 5px;
        }

        .cta {
            background: #111827;
            color: white;
            padding: 70px 0;
        }

        footer {
            background: #0f172a;
            color: #cbd5e1;
            padding: 45px 0 20px;
        }

        footer a {
            color: #cbd5e1;
            text-decoration: none;
        }

        footer a:hover {
            color: white;
        }

        @media (max-width: 768px) {
            .hero {
                padding: 70px 0;
            }

            .hero h1 {
                font-size: 38px;
            }

            .hero-image {
                margin-top: 40px;
            }
        }
    </style>
</head>

<body>

<!-- ================= NAVBAR ================= -->

<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">

        <a class="navbar-brand" href="{{ url('/') }}">
            <i class="bi bi-file-earmark-person"></i>
            ResumeBuilder
        </a>

        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarMenu">

            <ul class="navbar-nav mx-auto">

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#features">
                        Features
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#templates">
                        Templates
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#how-it-works">
                        How It Works
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#contact">
                        Contact
                    </a>
                </li>

            </ul>

            <div class="d-flex gap-2">

                @auth

                    <a href="{{ url('/dashboard') }}"
                       class="btn btn-primary">
                        Dashboard
                    </a>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <button type="submit"
                                class="btn btn-outline-danger">
                            Logout
                        </button>
                    </form>

                @else

                    <a href="{{ route('login') }}"
                       class="btn btn-outline-primary">
                        Login
                    </a>

                    <a href="{{ route('register') }}"
                       class="btn btn-primary">
                        Register
                    </a>

                @endauth

            </div>

        </div>
    </div>
</nav>


<!-- ================= HERO ================= -->

<section class="hero">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-6">

                <span class="badge bg-light text-primary px-3 py-2 mb-3">
                    <i class="bi bi-stars"></i>
                    Build Your Career
                </span>

                <h1>
                    Create a Professional Resume in Minutes
                </h1>

                <p class="mt-4">
                    Build an impressive, professional and
                    ATS-friendly resume without worrying about
                    complicated formatting.
                </p>

                <div class="mt-4">

                    @auth

                        <a href="{{ url('/resume/create') }}"
                           class="btn btn-light btn-lg px-4 me-2">
                            <i class="bi bi-plus-circle"></i>
                            Create My Resume
                        </a>

                    @else

                        <a href="{{ route('register') }}"
                           class="btn btn-light btn-lg px-4 me-2">
                            <i class="bi bi-plus-circle"></i>
                            Create My Resume
                        </a>

                        <a href="#templates"
                           class="btn btn-outline-light btn-lg px-4">
                            View Templates
                        </a>

                    @endauth

                </div>

            </div>


            <div class="col-lg-6">

                <div class="hero-image">

                    <div class="resume-preview">

                        <h4>
                            FARHAT JABEEN
                        </h4>

                        <p class="text-muted">
                            Web Developer | Laravel Developer
                        </p>

                        <hr>

                        <h6>PROFILE</h6>

                        <div class="template-line"></div>
                        <div class="template-line"></div>

                        <h6 class="mt-4">EDUCATION</h6>

                        <div class="template-line"></div>

                        <h6 class="mt-4">SKILLS</h6>

                        <div class="row">
                            <div class="col-6">
                                <div class="template-line"></div>
                            </div>

                            <div class="col-6">
                                <div class="template-line"></div>
                            </div>
                        </div>

                        <h6 class="mt-3">EXPERIENCE</h6>

                        <div class="template-line"></div>
                        <div class="template-line"></div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- ================= FEATURES ================= -->

<section id="features" class="py-5">

    <div class="container py-5">

        <div class="text-center mb-5">

            <p class="text-primary fw-bold">
                FEATURES
            </p>

            <h2 class="section-title">
                Everything You Need to Build Your Resume
            </h2>

            <p class="text-muted mt-3">
                Create a professional resume with our simple
                and powerful resume builder.
            </p>

        </div>


        <div class="row g-4">

            <div class="col-md-4">

                <div class="feature-card">

                    <div class="feature-icon">
                        <i class="bi bi-file-earmark-text"></i>
                    </div>

                    <h4>
                        Professional Templates
                    </h4>

                    <p class="text-muted">
                        Choose from professionally designed
                        resume templates suitable for different
                        industries and careers.
                    </p>

                </div>

            </div>


            <div class="col-md-4">

                <div class="feature-card">

                    <div class="feature-icon">
                        <i class="bi bi-pencil-square"></i>
                    </div>

                    <h4>
                        Easy Resume Builder
                    </h4>

                    <p class="text-muted">
                        Enter your personal information,
                        education, skills and experience using
                        our easy-to-use forms.
                    </p>

                </div>

            </div>


            <div class="col-md-4">

                <div class="feature-card">

                    <div class="feature-icon">
                        <i class="bi bi-download"></i>
                    </div>

                    <h4>
                        Download PDF
                    </h4>

                    <p class="text-muted">
                        Download your completed resume as a
                        professional PDF and use it for your
                        job applications.
                    </p>

                </div>

            </div>


            <div class="col-md-4">

                <div class="feature-card">

                    <div class="feature-icon">
                        <i class="bi bi-phone"></i>
                    </div>

                    <h4>
                        Responsive Design
                    </h4>

                    <p class="text-muted">
                        Create and manage your resumes from
                        desktop, tablet or mobile devices.
                    </p>

                </div>

            </div>


            <div class="col-md-4">

                <div class="feature-card">

                    <div class="feature-icon">
                        <i class="bi bi-cloud-check"></i>
                    </div>

                    <h4>
                        Save Your Resume
                    </h4>

                    <p class="text-muted">
                        Save your resume online and update it
                        whenever you need.
                    </p>

                </div>

            </div>


            <div class="col-md-4">

                <div class="feature-card">

                    <div class="feature-icon">
                        <i class="bi bi-shield-check"></i>
                    </div>

                    <h4>
                        Secure Account
                    </h4>

                    <p class="text-muted">
                        Your account and resume information
                        are protected with secure authentication.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- ================= HOW IT WORKS ================= -->

<section id="how-it-works" class="py-5 bg-white">

    <div class="container py-5">

        <div class="text-center mb-5">

            <p class="text-primary fw-bold">
                HOW IT WORKS
            </p>

            <h2 class="section-title">
                Create Your Resume in 3 Simple Steps
            </h2>

        </div>


        <div class="row text-center g-5">

            <div class="col-md-4">

                <div class="step-number">
                    1
                </div>

                <h4 class="mt-4">
                    Create an Account
                </h4>

                <p class="text-muted">
                    Register for a free account and access
                    your resume dashboard.
                </p>

            </div>


            <div class="col-md-4">

                <div class="step-number">
                    2
                </div>

                <h4 class="mt-4">
                    Enter Your Details
                </h4>

                <p class="text-muted">
                    Add your personal information, education,
                    skills, projects and work experience.
                </p>

            </div>


            <div class="col-md-4">

                <div class="step-number">
                    3
                </div>

                <h4 class="mt-4">
                    Download Resume
                </h4>

                <p class="text-muted">
                    Select your preferred template and
                    download your professional resume.
                </p>

            </div>

        </div>

    </div>

</section>


<!-- ================= TEMPLATES ================= -->

<section id="templates" class="py-5">

    <div class="container py-5">

        <div class="text-center mb-5">

            <p class="text-primary fw-bold">
                RESUME TEMPLATES
            </p>

            <h2 class="section-title">
                Choose Your Resume Style
            </h2>

            <p class="text-muted">
                Select a clean and professional template
                for your career.
            </p>

        </div>


        <div class="row g-4">

            <div class="col-md-4">

                <div class="template-card">

                    <div class="template-preview">

                        <div class="template-header"></div>

                        <div class="template-line"></div>
                        <div class="template-line"></div>
                        <div class="template-line"></div>

                        <br>

                        <div class="template-line"></div>
                        <div class="template-line"></div>
                        <div class="template-line"></div>

                    </div>

                    <h5 class="mt-3">
                        Modern Resume
                    </h5>

                    <p class="text-muted">
                        Clean and modern design.
                    </p>

                    @auth
                        <a href="{{ url('/resume/create') }}"
                           class="btn btn-primary w-100">
                            Use Template
                        </a>
                    @else
                        <a href="{{ route('register') }}"
                           class="btn btn-primary w-100">
                            Use Template
                        </a>
                    @endauth

                </div>

            </div>


            <div class="col-md-4">

                <div class="template-card">

                    <div class="template-preview">

                        <div style="width: 35%; height: 25px; background:#343a40;"></div>

                        <div class="template-line mt-3"></div>

                        <div class="row mt-4">

                            <div class="col-4">

                                <div class="template-line"></div>
                                <div class="template-line"></div>
                                <div class="template-line"></div>

                            </div>

                            <div class="col-8">

                                <div class="template-line"></div>
                                <div class="template-line"></div>
                                <div class="template-line"></div>
                                <div class="template-line"></div>

                            </div>

                        </div>

                    </div>

                    <h5 class="mt-3">
                        Professional Resume
                    </h5>

                    <p class="text-muted">
                        Perfect for corporate jobs.
                    </p>

                    @auth
                        <a href="{{ url('/resume/create') }}"
                           class="btn btn-primary w-100">
                            Use Template
                        </a>
                    @else
                        <a href="{{ route('register') }}"
                           class="btn btn-primary w-100">
                            Use Template
                        </a>
                    @endauth

                </div>

            </div>


            <div class="col-md-4">

                <div class="template-card">

                    <div class="template-preview">

                        <div style="width: 80%; height: 25px; background:#198754;"></div>

                        <div class="template-line mt-3"></div>

                        <h6 class="mt-4">
                            EXPERIENCE
                        </h6>

                        <div class="template-line"></div>
                        <div class="template-line"></div>

                        <h6 class="mt-4">
                            EDUCATION
                        </h6>

                        <div class="template-line"></div>

                    </div>

                    <h5 class="mt-3">
                        Simple Resume
                    </h5>

                    <p class="text-muted">
                        Minimal and ATS-friendly.
                    </p>

                    @auth
                        <a href="{{ url('/resume/create') }}"
                           class="btn btn-primary w-100">
                            Use Template
                        </a>
                    @else
                        <a href="{{ route('register') }}"
                           class="btn btn-primary w-100">
                            Use Template
                        </a>
                    @endauth

                </div>

            </div>

        </div>

    </div>

</section>


<!-- ================= CTA ================= -->

<section class="cta">

    <div class="container text-center">

        <h2 class="display-5 fw-bold">
            Ready to Build Your Professional Resume?
        </h2>

        <p class="lead mt-3">
            Create a professional resume and take the next
            step toward your dream career.
        </p>

        <div class="mt-4">

            @auth

                <a href="{{ url('/resume/create') }}"
                   class="btn btn-light btn-lg px-5">
                    Start Building
                </a>

            @else

                <a href="{{ route('register') }}"
                   class="btn btn-light btn-lg px-5">
                    Get Started Free
                </a>

            @endauth

        </div>

    </div>

</section>


<!-- ================= CONTACT ================= -->

<section id="contact" class="py-5 bg-white">

    <div class="container py-4">

        <div class="text-center">

            <h2 class="section-title">
                Contact Us
            </h2>

            <p class="text-muted">
                Have questions about ResumeBuilder?
                We are here to help.
            </p>

            <a href="mailto:support@resumebuilder.com"
               class="btn btn-outline-primary">
                <i class="bi bi-envelope"></i>
                Contact Support
            </a>

        </div>

    </div>

</section>


<!-- ================= FOOTER ================= -->

<footer>

    <div class="container">

        <div class="row g-4">

            <div class="col-md-5">

                <h4 class="text-white">
                    <i class="bi bi-file-earmark-person"></i>
                    ResumeBuilder
                </h4>

                <p class="mt-3">
                    Create professional resumes easily,
                    quickly and confidently.
                </p>

            </div>


            <div class="col-md-3">

                <h6 class="text-white">
                    Quick Links
                </h6>

                <ul class="list-unstyled">

                    <li class="mb-2">
                        <a href="{{ url('/') }}">Home</a>
                    </li>

                    <li class="mb-2">
                        <a href="#features">Features</a>
                    </li>

                    <li class="mb-2">
                        <a href="#templates">Templates</a>
                    </li>

                    <li class="mb-2">
                        <a href="#how-it-works">
                            How It Works
                        </a>
                    </li>

                </ul>

            </div>


            <div class="col-md-4">

                <h6 class="text-white">
                    Account
                </h6>

                @guest

                    <p>
                        <a href="{{ route('login') }}">
                            Login
                        </a>
                    </p>

                    <p>
                        <a href="{{ route('register') }}">
                            Register
                        </a>
                    </p>

                @else

                    <p>
                        <a href="{{ url('/dashboard') }}">
                            Dashboard
                        </a>
                    </p>

                @endguest

            </div>

        </div>

        <hr class="mt-4">

        <div class="text-center">

            <small>
                © {{ date('Y') }} ResumeBuilder.
                All Rights Reserved.
            </small>

        </div>

    </div>

</footer>


<!-- Bootstrap JS -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
