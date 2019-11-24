@extends('templates.main')
@section('title', 'Login')
@section('style')
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        form {
            border: 3px solid #f1f1f1;
        }

        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            background-color: #00396b;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }

        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
        }

        img.avatar {
            width: 40%;
            border-radius: 50%;
        }

        .container {
            padding: 16px;
        }

        span.psw {
            float: right;
            padding-top: 16px;
        }

        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }

            .cancelbtn {
                width: 100%;
            }
        }
    </style>
@endsection
@section('content')
    <form action="{{ route('login') }}" method="post" style="margin-top:5% ; background-color:white ; margin-left:25% ; margin-right:25% ; height:670px">
        @csrf
        <div class="imgcontainer">
            <img src="images/logo.png" alt="Avatar" class="avatar" style="height:250px; width:250px ; margin-top:15px">

            <h2 style="color:#00396b ; font-size:32px ;">Coffee House BUU</h2>

        </div>

        <div class="container" style="margin-right:30% ; margin-top:30px">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>

            <button type="submit" style="margin-top:20px ; font-size:16px">Login</button>

        </div>


    </form>
@endsection