<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Log in - ResumeBuilder</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<style>
		body { min-height: 100vh; background: #f5f7fb; font-family: Arial, sans-serif; }
		.login-panel { max-width: 460px; }
		.brand-mark { width: 64px; height: 64px; border-radius: 16px; background: #4f46e5; color: white; display: grid; place-items: center; font-size: 28px; font-weight: 800; }
		.login-card { border: 0; border-radius: 18px; box-shadow: 0 16px 40px rgba(15, 23, 42, .10); }
		.form-control { padding: .75rem .9rem; }
		.btn-primary { background: #4f46e5; border-color: #4f46e5; padding: .75rem; }
		.btn-primary:hover { background: #4338ca; border-color: #4338ca; }
	</style>
</head>
<body class="d-flex align-items-center justify-content-center p-3">
	<main class="login-panel w-100">
		<div class="text-center mb-4">
			<div class="brand-mark mx-auto mb-3">R</div>
			<h1 class="h3 fw-bold mb-1">Welcome back</h1>
			<p class="text-secondary mb-0">Sign in to continue building your resume.</p>
		</div>
		<div class="card login-card">
			<div class="card-body p-4 p-md-5">
				@if ($errors->any())
					<div class="alert alert-danger" role="alert">{{ $errors->first() }}</div>
				@endif
				<form method="POST" action="{{ route('login') }}">
					@csrf
					<div class="mb-3">
						<label class="form-label fw-semibold" for="email">Email address</label>
						<input class="form-control @error('email') is-invalid @enderror" id="email" name="email" type="email" value="{{ old('email') }}" required autofocus autocomplete="username">
					</div>
					<div class="mb-3">
						<label class="form-label fw-semibold" for="password">Password</label>
						<input class="form-control @error('password') is-invalid @enderror" id="password" name="password" type="password" required autocomplete="current-password">
					</div>
					<div class="form-check mb-4">
						<input class="form-check-input" id="remember" name="remember" type="checkbox" value="1">
						<label class="form-check-label" for="remember">Remember me</label>
					</div>
					<button class="btn btn-primary w-100" type="submit">Log in</button>
				</form>
				<p class="text-center text-secondary mt-4 mb-0">New here? <a href="{{ route('register') }}">Create an account</a></p>
				<p class="text-center mt-3 mb-0"><a class="text-secondary small" href="{{ route('home') }}">Back to home</a></p>
			</div>
		</div>
	</main>
</body>
</html>
