<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            background-color: #f3f4f6; /* Light gray background */
            font-family: Arial, sans-serif; /* Default font */
            margin: 0; /* Remove default margin */
            padding: 0; /* Remove default padding */
        }
      
        .card {
            width: 300px;
            height: 200px;
            padding: 15px;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            gap: 12px;
            background: #fff;
            border-radius: 20px;
            margin: auto;
            position: absolute;
            top: 0; bottom: 0; left: 0; right: 0;
        }

        .card > * {
            margin: 0;
        }

        .card__title {
            font-size: 23px;
            font-weight: 900;
            color: #333;
        }

        .card__content {
            font-size: 13px;
            line-height: 18px;
            color: #333;
        }

        .card__form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .card__form input {
            margin-top: 10px;
            outline: 0;
            background: rgb(255, 255, 255);
            box-shadow: transparent 0px 0px 0px 1px inset;
            padding: 0.6em;
            border-radius: 14px;
            border: 1px solid #333;
            color: black;
        }

        .card__form button {
            border: 0;
            background: #111;
            color: #fff;
            padding: 0.68em;
            border-radius: 14px;
            font-weight: bold;
            cursor: pointer;
        }

        .sign-up:hover {
            opacity: 0.8;
        } 
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <h1>Hello, {{ Auth::user()->name }}!</h1>
                        <p>Welcome to your dashboard.</p>

                        <a href="{{ route('logout') }}" class="btn btn-danger"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
