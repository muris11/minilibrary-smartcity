<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password - Mini Library Smart City</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/lg.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
            position: relative;
            overflow: hidden;
            background: url('{{ asset('images/bg1.png') }}') center center/cover no-repeat;
            font-family: 'Segoe UI', 'Roboto', Arial, sans-serif;
        }

        .container {
            position: relative;
            z-index: 2;
        }

        .card.smartcity-card {
            border-radius: 22px;
            background: rgba(255, 255, 255, 0.38);
            box-shadow: 0 8px 32px rgba(102, 126, 234, 0.13);
            border: 1px solid rgba(255, 255, 255, 0.22);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            width: 370px;
            padding: 2.2rem 2rem 1.5rem 2rem;
            margin-top: 2rem;
        }

        .smartcity-header {
            text-align: center;
            margin-bottom: 1.2rem;
        }

        .smartcity-header h1 {
            font-size: 2.1rem;
            color: #1565c0;
            font-weight: 700;
            margin-bottom: 0.2rem;
            letter-spacing: 1px;
        }

        .smartcity-header .subtitle {
            color: #1976d2;
            font-size: 1.08rem;
            opacity: 0.85;
        }

        .login-title {
            font-size: 1.3rem;
            font-weight: 600;
            color: #1976d2;
            text-align: center;
            margin-bottom: 1.1rem;
        }

        .custom-login-form {
            display: flex;
            flex-direction: column;
            gap: 1.1rem;
        }

        .custom-input {
            padding: 13px 16px;
            border-radius: 12px;
            border: 1px solid #b3c2d6;
            background: rgba(255, 255, 255, 0.82);
            font-size: 1rem;
            transition: border-color 0.2s, box-shadow 0.2s;
        }

        .custom-input:focus {
            border-color: #1976d2;
            box-shadow: 0 0 0 2px #e3f2fd;
            outline: none;
        }

        .custom-btn {
            padding: 13px 0;
            border-radius: 14px;
            background: linear-gradient(90deg, #1976d2 60%, #42a5f5 100%);
            color: #fff;
            font-size: 1.08rem;
            font-weight: 600;
            border: none;
            cursor: pointer;
            transition: background 0.2s, box-shadow 0.2s;
            box-shadow: 0 2px 8px rgba(25, 118, 210, 0.10);
        }

        .custom-btn:hover {
            background: linear-gradient(90deg, #1565c0 60%, #1976d2 100%);
            box-shadow: 0 4px 12px rgba(25, 118, 210, 0.18);
        }

        .custom-link {
            color: #1976d2;
            text-decoration: underline;
            font-size: 0.98rem;
            transition: color 0.2s;
        }

        .custom-link:hover {
            color: #1565c0;
        }

        .alert {
            border-radius: 10px;
            font-size: 0.98rem;
            margin-bottom: 1rem;
        }

        @media (max-width: 768px) {
            .card.smartcity-card {
                width: 95vw !important;
                padding: 1.2rem !important;
                margin-top: 1.2rem;
            }

            .smartcity-header h1 {
                font-size: 1.5rem;
            }

            .login-title {
                font-size: 1.05rem;
            }

            .custom-input {
                font-size: 0.98rem;
                padding: 11px 12px;
            }

            .custom-btn {
                font-size: 1rem;
                padding: 11px 0;
            }
        }

        @media (max-width: 480px) {
            .card.smartcity-card {
                width: 100% !important;
                padding: 0.7rem !important;
            }

            .smartcity-header h1 {
                font-size: 1.1rem;
            }

            .smartcity-header .subtitle {
                font-size: 0.92rem;
            }

            .login-title {
                font-size: 0.95rem;
            }

            .custom-input {
                font-size: 0.92rem;
                padding: 9px 8px;
            }

            .custom-btn {
                font-size: 0.95rem;
                padding: 9px 0;
            }
        }
    </style>
</head>

<body>
    <div class="container d-flex flex-column justify-content-center align-items-center min-vh-100">
        <div class="card smartcity-card">
            <div class="smartcity-header">
                <h1>🏙️ Smart City Library</h1>
                <div class="subtitle">Interactive Learning Platform</div>
            </div>
            <div class="login-title">Change Password</div>
            @if (session('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('status') }}
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
            <form method="POST" action="/forgot" class="custom-login-form">
                @csrf
                <input type="email" name="email" id="forgotEmail" class="custom-input" placeholder="Email" required
                    autofocus>
                <input type="password" name="password" id="forgotPassword" class="custom-input"
                    placeholder="New Password" required>
                <input type="password" name="password_confirmation" id="forgotPasswordConfirm" class="custom-input"
                    placeholder="Confirm New Password" required>
                <button type="submit" class="custom-btn">Change Password</button>
            </form>
            <div class="mt-3 text-center">
                <a href="/login" class="custom-link">Back to Login</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
