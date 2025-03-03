<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MegaPersonals Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEJv7pP1p7RTOC9J3Hb6g9U0+f5p9MSOEL6xT2JmukPEkElshZsre7joX5Ldx" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>

<body class="d-flex justify-content-center align-items-center vh-100">

    <div class="container">
        <!-- Logo Section -->
        <div class="brand-logo">
            <img src="{{asset('img\megapersonals.png')}}" alt="MegaPersonals">
        </div>

        <p class="text-center mb-3">Is this your first time posting?</p>
        <button class="btn btn-primary mb-4">Start Here</button>

        <!-- Login Form -->
        <p class="text-center mb-3">Already have a login?</p>
        <form action="#" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <div class="captcha-container">
                <img src="{{ asset('img/captures.jpg') }}" alt="Captcha">
                <input type="text" name="captcha" class="form-control" placeholder="Enter code from the picture" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <!-- Forgot Password Section -->
        <div class="text-center mt-3">
            <p><a href="#">FORGOT PASSWORD?</a></p>
        </div>

        <!-- Footer Links -->
        <div class="footer-links text-center mt-4">
            <a href="#">Home</a>
            <a href="#">Manage Posts</a>
            <a href="#">Contact Us</a>
            <a href="#">Policies & Terms</a>
        </div>

        <!-- Copyright Section -->
        <div class="text-center mt-4">
            <p>Copyright &copy; 2021 <span>MegaPersonals.eu</span></p>
        </div>

    </div>

 <!-- Bootstrap JS & Popper.js (optional but necessary for some features) -->
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0t5gBz2cs6U5Qd5+KKzlgzNoeFZh7fKREIks2W21Djk1h5lz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0t5gBz2cs6U5Qd5+KKzlgzNoeFZh7fKREIks2W21Djk1h5lz" crossorigin="anonymous"></script>
</body>
</html>