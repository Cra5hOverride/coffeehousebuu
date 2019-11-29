@extends('templates.main')
@section('title', 'Salary')

@section('style')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

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
        th {
        width: 10%;
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
            <h1 class="w3-jumbo">เงินเดือน</h1>

        </header>
        <div style="margin-left: 50px;">
            <table style="width:100%;text-align: center;margin-top:30px">

                <tr>
                    <th>ชื่อ - นามสกุล</th>
                    <th>เบอร์โทรศัพท์</th>
                    <th>อีเมล</th>
                    <th>สาขา</th>
                    <th>สถานะ</th>
                    <th >ตัวเลือก</th>
                </tr>
                @forelse ($staff as $item)
                <tr>
                    <td>{{$item->name}}  {{$item->surname}}</td>
                    <td>{{$item->phonenumber}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->getBranchOfUser()->branchs_name}}</td>
                    <td>{{$item->getSalaryOfUser()}}</td>
                    <td>
                        <a href="{{ route('manager.addSalary', ["id" => $item->id]) }}">
                        <button type="button" class="btn-success" style="width:50%;">จ่ายเงินเดือน</button>
                        </a>
                    </td>
                </tr>
                @empty
                    
                @endforelse
               
            </table>
        </div>

        
@endsection

<script>
        var msg = '{{Session::get('alert')}}';
        var exist = '{{Session::has('alert')}}';
        if(exist){
          alert(msg);
        }
      </script>