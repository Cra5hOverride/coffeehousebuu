@extends('templates.main')
@section('title', 'Add Menu')

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
        <h1 class="w3-jumbo">เพิ่มเมนู</h1>

    </header>
    <table style="width:100%;text-align: center;margin-bottom: 2%;">
        <tr>
            <th>name</th>
            <th>detail</th>
            <th>price</th>
            <th>Status</th>
            <th  style="width:20%;">QTY</th>
           
        </tr>
        <tr>
            <td>xxx</td>
            <td>nnnnnn</td>
            <td>35</td>
            <td>Y</td>
            <td>
                <input type="number" placeholder="Enter number" name="QTY" required  >
            </td>
        </tr>
    </table>

    <center>
        <a href="addpromotion.html" style="margin-right: 2%;">
            <button>ใช้โปรโมชั่น</button>
        </a>
        <a href="bill.html">
            <button>ออกใบเสร็จ</button>
        </a>
    </center>
</div>
@endsection