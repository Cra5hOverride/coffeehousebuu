@extends('templates.main')
@section('title', 'Dailystock')

@section('style')

    <style>
        button {
            background-color: #00396b;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 8%;
        }
        th {
        text-align: center;
    }
    </style>
@endsection

@section('sidebar')
    @include('layouts.sidebar.manager')
@endsection

@section('content')
<div class="w3-padding-large" id="main">
    <!-- Header/Home -->
    <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
        <h1 class="w3-jumbo">สต๊อกรายวัน</h1>

    </header>
    <div>
        <div style="width:100%;text-align: center;margin-top:30px">
            <form action="">
                วันที่ : <input type="date" name="bday" style="color: black;">
                <button type="submit">ค้นหา</button>
            </form>
            <br>
        </div>
        <table style="width:100%;text-align: center;">
            <tr>
                <th style="width:20%;">วันที่ XX/XX/XXXX</th>
                <th>รายละเอียด</th>
                <th>จำนวน</th>
                <th>ราคา</th>
                <th>ยอดรวม</th>
            </tr>
            <tr>
                <td>Stock in</td>
                <td>แก้วกาแฟ</td>
                <td>1</td>
                <td>10</td>
                <td>10</td>
            </tr>
            <tr>
                <td>Stock out</td>
                <td>เค้ก</td>
                <td>5</td>
                <td>30</td>
                <td>150</td>
            </tr>
        </table>
    </div>
</div>
@endsection