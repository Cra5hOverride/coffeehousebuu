@extends('templates.main')
@section('title', 'Orderproduct')

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
    </style>
@endsection

@section('sidebar')
    @include('layouts.sidebar.staff')
@endsection

@section('content')
    <div class="w3-padding-large" id="main">
        <!-- Header/Home -->
        <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
            <h1 class="w3-jumbo">สั่งสินค้า/วัตถุดิบ</h1>

        </header>
        <table style="width:100%;text-align: center;margin-bottom: 2%;">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Surname</th>
                <th>Branch</th>
                <th>Partner Name</th>
                <th>Date</th>
                <th>QYT</th>
                <th>Unit</th>
            </tr>
            <tr>
                <td>0000</td>
                <td>nnnnnn</td>
                <td>ssssss</td>
                <td>bbbbbb</td>
                <td>pppppp</td>
                <td>1-1-2019</td>
                <td>5000</td>
                <td>ลิตร</td>
            </tr>
        </table>
        <center>
            <button style="margin-right: 2%;">เพิ่มการสั่งซื้อ</button>
            <a href="showstock.html">
                <button>ย้อนกลับ</button>
            </a>
        </center>
    </div>
@endsection