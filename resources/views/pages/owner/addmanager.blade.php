@extends('templates.main')
@section('title', 'Addmanager')

@section('style')
    <style>
        button {
            background-color: #00396b;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 40%;
        }
        th {
        width: 10%;
        text-align: center;
    }
    </style>
@endsection

@section('sidebar')
    @include('layouts.sidebar.owner')
@endsection

@section('content')
<div class="w3-padding-large" id="main">
        <!-- Header/Home -->
        <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
            <h1 class="w3-jumbo">เพิ่มผู้จัดการ</h1>

        </header>
        <div>
            <table style="width: 100%;text-align: center;margin-top:30px;">
                <tr>
                    <th>ชื่อ</th>
                    <th>สกุล</th>
                    <th>เบอร์โทรศัพท์</th>
                    <th>อีเมล</th>
                    <th>สาขา</th>
                    <th>บัตรประชาชน</th>
                    <th>ตัวเลือก</th>
                </tr>
                @forelse ($menagers as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->surname }}</td>
                    <td>{{ $item->phonenumber }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->getBranchOfUser()->branchs_name }}</td>
                    <td>{{ $item->idcard }}</td>
                    <td>
                    <a href="{{ route('admin.delstaff', ["id" => $item->id]) }}"><button>ลบ</button></a>
                        <!-- <button type="button" data-toggle="modal" data-target="#myModal">แก้ไข</button> -->
                    </td>
                </tr>
                @empty
                    
                @endforelse

                
             
            </table>
            <center>
                <button type="button" data-toggle="modal" data-target="#myModal" style="width:20%">เพิ่มผู้จัดการ</button>
            </center>

        </div>
        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog" style="color: black;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Manager</h4>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('admin.updateposition') }}" method="GET" class="form-container" style="text-align: center;">
                            <label for="branch"><b>Branch</b></label>
                            <br>
                            <select name="branchid">
                                @forelse ($branchs as $item)
                            <option value="{{$item->id}}">{{ $item->branchs_name }}</option>
                                @empty
                                    
                                @endforelse
                            </select>
                            <br>
                            <label for="name"><b>Name</b></label>
                            <br>
                            <select name="userid">
                                @forelse ($staffs as $item)
                                    <option value="{{$item->id}}">{{$item->name}} {{$item->surname}}</option>
                                @empty
                                    
                                @endforelse
            
                            </select>
                            <br>
                            <button type="submit" class="btn-success">Save</button>

                            <button type="button" class="btn-danger" data-dismiss="modal">Close</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>






    </div>
@endsection
