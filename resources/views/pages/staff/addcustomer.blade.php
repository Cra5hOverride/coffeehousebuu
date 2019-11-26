@extends('templates.main')
@section('title', 'Addcustomer')

@section('style')

<style>
        button {
            background-color: #00396b;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 20%;
        }
    
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

@section('sidebar')
    @include('layouts.sidebar.staff')
@endsection

@section('content')
<div class="w3-padding-large" id="main">
        <!-- Header/Home -->
        <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
            <h1 class="w3-jumbo">สมัครสมาชิก</h1>
        </header>
        
        <center style="margin-top: 10px;">
        <form action="{{route('staff.addCustomer')}}">
            <div class="container" style="margin-left:15%; margin-right:15% ;width: 30%;">
                <label for="name"><b>ชื่อ</b></label>
                <input type="text" placeholder="ใส่ชื่อ" name="name" required>

                <label for="surname"><b>นามสกุล</b></label>
                <input type="text" placeholder="ใส่นามสกุล" name="surname" required>

                <label for="address"><b>Email</b></label>
                <input type="text" placeholder="Email" name="email" required>

                <label for="phone"><b>หมายเลขโทรศัพท์</b></label>
                <input type="text" placeholder="หมายเลขโทรศัพท์" name="phone_number" required>

                <label for="address"><b>ที่อยู่</b></label>
                <input type="text" placeholder="ที่อยู่" name="address" required>

            </div>
           
                <button type="submit" class="btn-success">ยืนยัน</button>
            </form>
        </center>
    </form>
    </div>
@endsection