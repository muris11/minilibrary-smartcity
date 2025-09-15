<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Mini Library</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #aee2ff 0%, #e0f2fe 100%);
            min-height: 100vh;
        }

        .smartcity-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .smartcity-header h1 {
            font-size: 2.2rem;
            color: #1565c0;
            font-weight: 700;
            margin-bottom: 0.3rem;
        }

        .smartcity-header .subtitle {
            color: #1976d2;
            font-size: 1.1rem;
            opacity: 0.85;
        }

        .card.smartcity-card {
            border-radius: 18px;
            box-shadow: 0 8px 32px rgba(102, 126, 234, 0.10);
            background: rgba(255, 255, 255, 0.98);
            border: none;
        }

        .form-control:focus {
            border-color: #1565c0;
            box-shadow: 0 0 0 0.2rem rgba(21, 101, 192, 0.15);
        }

        .btn-primary {
            background: linear-gradient(135deg, #1565c0, #64b5f6);
            border: none;
        }

        .btn-success {
            background: linear-gradient(135deg, #22c55e, #90caf9);
            border: none;
            color: #1565c0;
            font-weight: 600;
        }

        .btn-primary:hover,
        .btn-success:hover {
            background: linear-gradient(135deg, #1976d2, #42a5f5);
            color: #fff;
        }

        @media (max-width: 480px) {
            .card.smartcity-card {
                width: 100% !important;
                padding: 1.2rem !important;
            }

            .smartcity-header h1 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>

<body>
    <div class="container d-flex flex-column justify-content-center align-items-center min-vh-100">
        <div class="smartcity-header">
            <h1>🏙️ Smart City Library</h1>
            <div class="subtitle">Interactive Learning Platform</div>
        </div>
        <div class="card smartcity-card p-4" style="width: 350px;">
            <h3 class="mb-4 text-center">Login Mini Library</h3>
            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <form method="POST" action="/login">
                @csrf
                <div class="mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email" required autofocus>
                </div>
                <div class="mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>
            <div class="mt-3 text-center">
                <a href="/register">Don't have an account? Register here</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
