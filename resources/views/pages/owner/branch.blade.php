@extends('templates.main')
@section('title', 'Branch')

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
            <h1 class="w3-jumbo">จัดการสาขา</h1>


        </header>
        <div>
            <table style="width:100%;text-align: center;margin-top:30px;">
                <tr>
                    <th>ชื่อสาขา</th>
                    {{-- <th>ผู้จัดการ</th> --}}
                    <th>ที่อยู่</th>
                    <th>เบอร์โทรศัพทื</th>
                    <th>อีเมล</th>

                    <th>option</th>
                </tr>
                @forelse ($branchs as $item)
                    <tr>
                        <td>{{ $item->branchs_name }}</td>
                        {{-- <td>{{ $item->getManagerOfBranch()->name }}</td> --}}
                        <td>{{ $item->address }}</td>
                        <td>{{ $item->phonenumber }}</td>
                        <td>{{ $item->email }}</td>

                        <td>
                            <a href="{{ route('admin.delbranch', ["id" => $item->id]) }}"><button>ลบ</button></a>
                        <button type="button" data-toggle="modal" data-target="#editModal{{$item->id}}">แก้ไข</button>
                        </td>
                    </tr>
                @empty
                    
                @endforelse
            </table>
            <center>
                <button type="button" data-toggle="modal" data-target="#myModal" style="width:20%">เพิ่มสาขา</button>
            </center>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog" style="color: black;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Branch</h4>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('admin.addbranch') }}" class="form-container" style="text-align: center;">

                            <label for="name"><b>Name</b></label>
                            <br>
                            <input type="text" placeholder="Enter Name" name="branchs_name" required>
                            <br>
                            <label for="address"><b>Address</b></label>
                            <br>
                            <input type="text" placeholder="Enter Address" name="address" required>
                            <br>
                            <label for="phone"><b>Phone Number</b></label>
                            <br>
                            <input type="text" placeholder="Enter Phone Number" name="phonenumber" required>
                            <br>
                            <label for="email"><b>Email</b></label>
                            <br>
                            <input type="email" placeholder="Enter Email" name="email" required>
                            <br>
                            <button type="submit" class="btn-success">Save</button>

                            <button type="button" class="btn-danger" data-dismiss="modal">Close</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


@forelse ($branchs as $item)
    <!-- Edit Modal -->
    <div class="modal fade" id="editModal{{$item->id}}" role="dialog">
        <div class="modal-dialog" style="color: black;">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Branch</h4>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.updatebranch') }}" class="form-container" style="text-align: center;">

                        <input type="text"  name="id" value="{{$item->id}}" hidden>
                        <label for="name"><b>Name</b></label>
                        <br>
                        <input type="text" placeholder="Enter Name" name="branchs_name" value="{{$item->branchs_name}}" required>
                        <br>
                        <label for="address"><b>Address</b></label>
                        <br>
                        <input type="text" placeholder="Enter Address" name="address" value="{{$item->address}}" required>
                        <br>
                        <label for="phone"><b>Phone Number</b></label>
                        <br>
                        <input type="text" placeholder="Enter Phone Number" name="phonenumber" value="{{$item->phonenumber}}" required>
                        <br>
                        <label for="email"><b>Email</b></label>
                        <br>
                        <input type="email" placeholder="Enter Email" name="email" value="{{$item->email}}" required>
                        <br>
                        <button type="submit" class="btn-success">Save</button>

                        <button type="button" class="btn-danger" data-dismiss="modal">Close</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@empty
    
@endforelse
        


    </div>
@endsection