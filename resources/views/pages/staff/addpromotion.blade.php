@extends('templates.main')
@section('title', 'Add Promotion')

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
    th{
        width:10%;
        text-align: center;
    }
</style>
@endsection



@section('content')
<div class="w3-padding-large" id="main">
        <!-- Header/Home -->
        <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
            <h1 class="w3-jumbo">เลือกโปรโมชั่น</h1>

        </header>
        <table style="width:100%;text-align: center;margin-bottom: 2%;">
            <tr>
                <th>ชื่อโปรโมชั่น</th>
                <th>ชนิดของโปรโมชั่น</th>
                <th> </th>
            </tr>
            <tr>
                <td>ppppppp</td>
                <td>Member</td>
                <td><button>เลือก</button></td>
            </tr>
        </table>
        <center>
            <a href="{{ route('staff.viewbill') }}" style="margin-right: 2%;">
                <button>ออกใบเสร็จ</button></a>
            <a href="{{ route('staff.viewmenu') }}">
                <button>ย้อนกลับ</button>
            </a>
        </center>

    </div>
@endsection