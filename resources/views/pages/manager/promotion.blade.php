@extends('templates.main')
@section('title', 'Promotion')

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
    @include('layouts.sidebar.manager')
@endsection

@section('content')
<div class="w3-padding-large" id="main">
    <!-- Header/Home -->
    <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
        <h1 class="w3-jumbo">โปรโมชั่น</h1>

    </header>
    <div>
        <table style="width:100%;text-align: center;">
            <tr>
                <th>name</th>
                <th>startdate</th>
                <th>enddate</th>
                <th>detail</th>
                <th>option</th>
            </tr>
            <tr>
                <td>xxx</td>
                <td>xx-xx-xx</td>
                <td>xx-xx-xx</td>
                <td>xxxxxxxxxxx</td>
                <td>
                    <button>ลบ</button>
                    <button>แก้ไข</button>
                </td>
            </tr>
            <tr>
                <td>xxx</td>
                <td>xx-xx-xx</td>
                <td>xx-xx-xx</td>
                <td>xxxxxxxxxx</td>
                <td>
                    <button>ลบ</button>
                    <button>แก้ไข</button>
                </td>
            </tr>
        </table>
        <center>
            <button>เพิ่มโปรโมชั่น</button>
        </center>
    </div>
</div>
@endsection