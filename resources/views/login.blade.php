<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in | Suno</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.css">
    <!-- Country Select CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <style>
        body {
            background-color: #1F1F1F;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-card {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            width: 400px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .social-btn {
            width: 65px;
            height: 65px;
            border-radius: 0.675em;
            border: 1px solid #eee;
            padding: 10px;
            margin: 0 8px;
            text-align: center;
            background: white;
            transition: all 0.3s;
        }

        .social-btn:hover {
            background: #f8f9fa;
        }

        .divider {
            display: flex;
            align-items: center;
            text-align: center;
            margin: 1.5rem 0;
        }

        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid #eee;
        }

        .divider span {
            padding: 0 1rem;
            color: #6c757d;
        }

        .continue-btn {
            background: #7C4DFF;
            border: none;
            padding: 12px;
        }

        .continue-btn:hover {
            background: #6039FF;
        }

        /* IntlTelInput Custom Styles */
        .iti {
            width: 100%;
        }

        .iti__flag {
            background-image: url("https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/img/flags.png");
        }

        @media (-webkit-min-device-pixel-ratio: 2),
        (min-resolution: 192dpi) {
            .iti__flag {
                background-image: url("https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/img/flags@2x.png");
            }
        }
    </style>
</head>

<body>
    @if (Auth::check())
    {{ dd(  $user = Auth::user())}}
    @endif
    <div class="login-card">
        <!-- Logo -->
        <div class="text-left mb-4">
            <img src="{{ asset('logo.png') }}" alt="Suno" height="40">
        </div>

        <!-- Sign in Text -->
        <div class="text-left mb-4">
            <h2 class="fw-semibold mb-1">Sign in</h2>
            <p class="text-secondary">to continue to Suno</p>
        </div>

        <!-- Social Login Buttons -->
        <div class="d-flex justify-content-center mb-4">
            <a href="{{ env('BACKEND_URL') }}/api/google" class="social-btn">
                <i class="bi bi-apple" style="font-size: 1.5rem;"></i>
            </a>
            <a href="{{ env('BACKEND_URL') }}/api/google" class="social-btn">
                <i class="bi bi-discord" style="font-size: 1.5rem;"></i>
            </a>
            <a href="{{ env('BACKEND_URL') }}/api/google" class="social-btn">
                <i class="bi bi-google" style="font-size: 1.5rem;"></i>
            </a>
            <!-- <a href="{{ env('BACKEND_URL') }}/api/google" class="social-btn">
                <i class="bi bi-microsoft" style="font-size: 1.5rem;"></i>
            </a> -->

        </div>

        <!-- Divider -->
        <div class="divider">
            <span>or</span>
        </div>

        <!-- Phone Input -->
        <div class="mb-4">
            <label class="form-label">Phone number</label>
            <input type="tel" id="phone" class="form-control">
        </div>

        <!-- Continue Button -->
        <button class="btn btn-primary continue-btn w-100 mb-4">
            CONTINUE
        </button>

        <!-- Sign up Link -->
        <div class="text-center">
            <span class="text-secondary">No account?</span>
            <a href="#" class="text-decoration-none ms-1">Sign up</a>
        </div>
    </div>

    <!-- Required Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

    <!-- Initialize Phone Input -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var input = document.querySelector("#phone");
            window.intlTelInput(input, {
                initialCountry: "auto",
                geoIpLookup: function(callback) {
                    fetch("https://ipapi.co/json")
                        .then(function(res) {
                            return res.json();
                        })
                        .then(function(data) {
                            callback(data.country_code);
                        })
                        .catch(function() {
                            callback("us");
                        });
                },
                separateDialCode: true,
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
            });
        });
    </script>
</body>

</html>