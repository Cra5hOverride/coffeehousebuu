@extends('templates.main')
@section('title', 'Salary')

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
        <h1 class="w3-jumbo">เงินเดือน</h1>

    </header>
    <div>
        <table style="width:100%;text-align: center;">
            <tr>
                <th>name</th>
                <th>idnumber</th>
                <th>tel</th>
                <th>email</th>
                <th>type</th>
                <th>status</th>
            </tr>
            <tr>
                <td>xxx</td>
                <td>xxxxxxxxxx</td>
                <td>0888888888</td>
                <td>xxxx</td>
                <td>พนักงาน</td>
                <td>ยัง</td>
            </tr>
            <tr>
                <td>xxx</td>
                <td>xxxxxxxxxx</td>
                <td>0999999999</td>
                <td>xxxx</td>
                <td>พนักงาน</td>
                <td>รับแล้ว</td>
            </tr>
        </table>
    </div>
</div>
@endsection