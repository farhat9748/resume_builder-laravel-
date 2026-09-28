<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home - ResumeBuilder</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
	<nav class="navbar navbar-light bg-white border-bottom">
		<div class="container py-2">
			<a class="navbar-brand fw-bold text-primary" href="{{ route('home') }}">ResumeBuilder</a>
			<div class="d-flex gap-2">
				@auth
					<a class="btn btn-primary" href="{{ route('dashboard') }}">Dashboard</a>
				@else
					<a class="btn btn-outline-primary" href="{{ route('login') }}">Log in</a>
					<a class="btn btn-primary" href="{{ route('register') }}">Get started</a>
				@endauth
			</div>
		</div>
	</nav>
	<main class="container py-5">
		<div class="row align-items-center g-5 py-5">
			<div class="col-lg-7">
				<p class="text-primary fw-semibold mb-2">Your next opportunity starts here</p>
				<h1 class="display-4 fw-bold">Build a resume that gets noticed.</h1>
				<p class="lead text-secondary my-4">Create a polished, professional resume with a simple workflow that keeps your experience in focus.</p>
				<a class="btn btn-primary btn-lg" href="{{ route('register') }}">Create your resume</a>
			</div>
			<div class="col-lg-5">
				<div class="bg-white border rounded-4 shadow-sm p-4">
					<div class="border-bottom pb-3 mb-3"><div class="h4 mb-1">Your Name</div><div class="text-secondary">Product Designer</div></div>
					<div class="placeholder-glow"><span class="placeholder col-8"></span><span class="placeholder col-12"></span><span class="placeholder col-10"></span></div>
				</div>
			</div>
		</div>
	</main>
</body>
</html>
