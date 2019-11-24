@extends('templates.main')
@section('title', 'Receiveclaim')

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
            <h1 class="w3-jumbo">รับเคลมสินค้า</h1>

        </header>
        <table style="width:100%;text-align: center;margin-bottom: 2%;">
            <tr>
                <th>Partner</th>
                <th>Product</th>
                <th>Branch</th>
                <th>Date</th>
                <th>QTY</th>
            </tr>
            <tr>
                <td>xxxxxx</td>
                <td>nnnnnn</td>
                <td>ccccc</td>
                <td>1-1-2019</td>
                <td>50</td>
            </tr>
        </table>
        <center>
            <button>เพิ่มสินค้าที่รับเครม</button>
        </center>
    </div>
@endsection