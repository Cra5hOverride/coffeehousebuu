@extends('templates.main')
@section('title', 'Receiveproduct')

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
            <h1 class="w3-jumbo">รับสินค้า/วัตถุดิบ</h1>

        </header>

        <table style="width:100%;text-align: center;margin-bottom: 2%;">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>QTY All</th>
                <th>Unit</th>

            </tr>
            <tr>
                <td>0000</td>
                <td>nnnnnn</td>
                <td>500</td>
                <td>ชิ้น</td>
            </tr>
        </table>

        <center>
            <button style="margin-right: 2%;">เพิ่มการรับสินค้า</button>
            <a href="showstock.html">
                <button>ย้อนกลับ</button>
            </a>
        </center>


    </div>
@endsection