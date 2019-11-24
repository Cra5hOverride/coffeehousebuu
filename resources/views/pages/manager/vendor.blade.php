@extends('templates.main')
@section('title', 'Vendor')

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
        <h1 class="w3-jumbo">คู่ค้า</h1>

    </header>
    <div>
        <table style="width:100%;text-align: center;">
            <tr>
                <th>name</th>
                <th>address</th>
                <th>tel</th>
                <th>email</th>
                <th>status</th>
                <th>option</th>
            </tr>
            <tr>
                <td>xxx</td>
                <td>33/33</td>
                <td>0999999999</td>
                <td>xx</td>
                <td>xxxx</td>
                <td>
                    <button>ลบ</button>
                    <button>แก้ไข</button>
                </td>
            </tr>
            <tr>
                <td>xxx</td>
                <td>11/11</td>
                <td>0888888888</td>
                <td>xx</td>
                <td>xxxx</td>
                <td>
                    <button>ลบ</button>
                    <button>แก้ไข</button>
                </td>
            </tr>
        </table>
        <center>
            <button>เพิ่มคู่ค้า</button>
        </center>
    </div>
</div>
@endsection