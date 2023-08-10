<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <style>
        * {
            font-family: 'Inter';
        }

        .container-fluids {
            position: fixed;
            width: 100%;
            min-height: 780px;
            background-color: #F5F7FF;
        }

        #board {
            width: 600px;
            height: 400px;
            filter: drop-shadow(0px -5px 5px rgba(0, 0, 0, 0.25)) drop-shadow(0px 5px 4px rgba(0, 0, 0, 0.25)) drop-shadow(5px 0px 5px rgba(0, 0, 0, 0.25)) drop-shadow(-5px 0px 5px rgba(0, 0, 0, 0.25));
        }

        .logo {
            background-color: black;
            width: 55px;
            height: 55px;
        }

        .input {
            background-color: #D9D9D9;
            width: 200px;
            height: 30px;
            margin: 5px;
            border: none;
            border-radius: 5px;
        }

        .btn {
            width: 212px;
            height: 39px;
            background-color: #1B5170;
            border-radius: 15px;
            margin-top: 10px;
        }

        a {
            color: #C9EAD0;
        }

        .circle {
            width: 35px;
            height: 35px;
            background-color: #D9D9D9;
            border-radius: 45px;
            margin: 0px 15px 0px 15px;
        }

        .line {
            width: 2px;
            height: 35px;
            background-color: #D9D9D9;
            margin: 0px 15px 0px 15px;
        }
    </style>
</head>

<body>
    <div class="container-fluids d-flex justify-content-center align-items-center">
        @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        <div class="row" id="board">
            <div class="col-6">
                <img src="peternakan_ayam.jpeg" alt="peternakan_ayam" width="300px" height="400px"
                    style="border-radius: 10px 0px 0px 10px;">
            </div>
            <div class="col-6" style="background-color: #265E7D; border-radius: 0px 10px 10px 0px;">
                <div class="row-2 d-flex justify-content-center align-items-center" style="margin:10px">
                    <div class="logo">
                    </div>
                </div>
                <div class="row-2 d-flex justify-content-center align-items-center" style="margin:5px">
                    <h2 class="fs-3" style="color:#C9EAD0">welcome back!</h2>
                </div>
                <div class="row-4">

                    <form action="/login" method="post" class="row d-flex justify-content-center align-items-center">
                        @csrf
                        <input type="email" class="input" name="email" placeholder="email" required>
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror

                        <input type="text" class="input is-invalid" name="password" placeholder="password" required>
                        <button  type="submit" class="btn btn-outline-primary">Login</button>
                    </form>
                </div>
                <div class="row-1 d-flex justify-content-end" style="margin:2px 30px 0px 0px;">
                    <h3 class="fs-6"><a href="#">lupa password?</a></h3>
                </div>
                <div class="row-3 d-inline-flex justify-content-center align-items-center" style="margin:10px">
                    <div class="circle"></div>
                    <div class="line"></div>
                    <div class="circle"></div>
                    <div class="line"></div>
                    <div class="circle"></div>
                </div>
                <div class="row-2 d-flex justify-content-center align-items-center" style="margin:10px 5px 5px 5px">
                    <h4 class="fs-6" style="color:#C9EAD0">Don't have account? Sign up Now</h4>
                </div>
            </div>
        </div>
    </div>
</body>

</html>