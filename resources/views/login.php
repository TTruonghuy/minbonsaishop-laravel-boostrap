<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding: 0;
        }
        
        .vh-100 {
            min-height: 100vh;
        }

        .container {
            height: 1300px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .row {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .loginform {
            background-color: red; /* Đỏ */
            width: 400px;
        }

        .form-outline {
            margin-bottom: 2rem;

        }

        .form-control-lg {
            font-size: 1.1rem;
            padding: 0.75rem 1.2rem;
            border-radius: 0.5rem;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .form-label {
            font-size: 0.9rem;
            color: #555;
            margin-bottom: 0.5rem;
        }

        .btn {
            font-size: 1.2rem;
            padding: 0.75rem;
            border-radius: 0.5rem;
            width: 100%;
            margin: 1rem 0;
            transition: all 0.3s ease;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .form-check-input {
            margin-top: 0.25rem;
        }

        .divider {
            position: relative;
            margin: 2rem 0;
            text-align: center;
        }

        .divider:before, .divider:after {
            content: "";
            position: absolute;
            top: 50%;
            width: 40%;
            border-top: 1px solid #ddd;
        }

        .divider:before {
            left: 0;
        }

        .divider:after {
            right: 0;
        }

        .divider p {
            font-weight: bold;
            margin: 0;
            padding: 0 1rem;
            background-color: #f4f6f9;
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .col-md-8, .col-lg-7, .col-xl-6 {
                display: none;
            }
            .col-md-7, .col-lg-5, .col-xl-5 {
                width: 100%;
            }
        }
    </style>
</head>
<body>
<section class="vh-100">
    <div class="container py-5 h-100">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-md-8 col-lg-7 col-xl-6">
                <img src="/images/imagelogin.jpg"
                     class="img-fluid" alt="Phone image">
            </div>
            <div class = "111 ">
  smafamfk
            </div>
            <div class="loginform col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                <form>
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email" id="form1Example13" class="form-control form-control-lg" required />
                        <label class="form-label" for="form1Example13">Email address</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <input type="password" id="form1Example23" class="form-control form-control-lg" required />
                        <label class="form-label" for="form1Example23">Password</label>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <!-- Checkbox -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                            <label class="form-check-label" for="form1Example3"> Remember me </label>
                        </div>
                        <a href="#!">Forgot password?</a>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
                </form>
            </div>
        </div>
    </div>
</section>
</body>
</html>
