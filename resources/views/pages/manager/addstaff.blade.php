@extends('templates.main')
@section('title', 'Addstaff')

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

        option {
        color: black;
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
        <h1 class="w3-jumbo">เพิ่มพนักงาน</h1>

    </header>
    <div>
        <table style="width:100%;text-align: center;margin-top:30px;">
            <tr>
                <th>ชื่อ</th>
                <th>นามสกุล</th>
                <th>อีเมล</th>
                <th>เบอร์โทรศัพท์</th>
                <th>สาขา</th>
                <th>บัตรประชาชน</th>
                <th>ตัวเลือก</th>
            </tr>
            @forelse ($staffs as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->surname }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->phonenumber }}</td>
                    <td>{{ $item->getBranchOfUser()->branchs_name }}</td>
                    <td>{{ $item->idcard }}</td>
                    <td>
                        <a href="{{ route('admin.delstaff', ["id" => $item->id]) }}"><button>ลบ</button></a>
                    <button type="button" data-toggle="modal" data-target="#editModal{{$item->id}}">แก้ไข</button>
                    </td>
                </tr>
                @empty

                @endforelse
        </table>
        <center>
            <button type="button" data-toggle="modal" data-target="#myModal" style="width:20%">เพิ่มพนักงาน</button>
        </center>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog" style="color: black;">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Staff</h4>
                </div>
                <div class="modal-body">
                <form action="{{ route('manager.addUser') }}" class="form-container" style="text-align: center;">
                        <label for="username"><b>Username</b></label>
                        <br>
                        <input type="text" placeholder="Enter Username" name="username" required>
                        <br>
                        <label for="password"><b>Password</b></label>
                        <br>
                        <input type="password" placeholder="Enter Password" name="password" required>
                        <br>
                        <label for="email"><b>E-mail</b></label>
                        <br>
                        <input type="email" placeholder="Enter E-mail" name="email" required>
                        <br>
                        <label for="phone"><b>Phone number</b></label>
                        <br>
                        <input type="text" placeholder="Enter Phone Number" name="phonenumber" required>
                        <br>
                        <label for="name"><b>Name</b></label>
                        <br>
                        <input type="text" placeholder="Enter Name" name="name" required>
                        <br>
                        <label for="surname"><b>Surname</b></label>
                        <br>
                        <input type="text" placeholder="Enter Surname" name="surname" required>
                        <br>
                        <label for="branch"><b>Branch</b></label>
                        <br>
                        <select name="branch_id">
                                @forelse ($branchs as $item)
                            
                                <option value="{{ $item->id }}">{{ $item->branchs_name }}</option>
                            
                            @empty
                                
                            @endforelse
                        </select>
                        <br>
                        <label for="birthday"><b>Birthday</b></label>
                        <br>
                        <input type="date" placeholder="Enter Birthday" name="birthday" required>
                        <br>
                        <label for="address"><b>Address</b></label>
                        <br>
                        <input type="text" placeholder="Enter Address" name="address" required>
                        <br>
                        <label for="idcard"><b>IDcard</b></label>
                        <br>
                        <input type="text" placeholder="Enter IDcard" name="idcard" required>
                        <br>
                        <label for="salary"><b>Salary</b></label>
                        <br>
                        <input type="text" placeholder="Enter Salary" name="salary" required>
                        <br>
                        <label for="salaryunit"><b>Salary Type</b></label>
                        <br>
                        <select name="salary_type">
                            <option value="Full time">Full time</option>
                            <option value="Part time">Part time</option>

                        </select>
                        <br>
                        <button type="submit" class="btn-success">Save</button>

                        <button type="button" class="btn-danger" data-dismiss="modal">Close</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Modal -->
    @forelse ($staffs as $item)
<div class="modal fade" id="editModal{{$item->id}}" role="dialog">
            <div class="modal-dialog" style="color: black;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Staff</h4>
                    </div>
                    <div class="modal-body">
                    <form action="{{route('admin.updatestaff')}}" class="form-container" style="text-align: center;">
                            <input type="text" name="id" value="{{$item->id}}" hidden>
                            <label for="username"><b>Username</b></label>
                            <br>
                            <input type="text" placeholder="Enter Username" name="username" value="{{$item->username}}" required>
                            <br>
                            <label for="password"><b>Password</b></label>
                            <br>
                            <input type="password" placeholder="Enter Password" name="password" required>
                            <br>
                            <label for="email"><b>E-mail</b></label>
                            <br>
                            <input type="email" placeholder="Enter E-mail" name="email" value="{{$item->email}}" required>
                            <br>
                            <label for="phone"><b>Phone number</b></label>
                            <br>
                            <input type="text" placeholder="Enter Phone Number" name="phonenumber" value="{{$item->phonenumber}}" required>
                            <br>
                            <label for="name"><b>Name</b></label>
                            <br>
                            <input type="text" placeholder="Enter Name" name="name" value="{{$item->name}}" required>
                            <br>
                            <label for="surname"><b>Surname</b></label>
                            <br>
                            <input type="text" placeholder="Enter Surname" name="surname" value="{{$item->surname}}" required>
                            <br>
                            <label for="branch"><b>Branch</b></label>
                            <br>
                            <select name="branch_id">
                                    @forelse ($branchs as $ditem)
                            
                                    <option value="{{ $ditem->id }}">{{ $ditem->branchs_name }}</option>
                                
                                @empty
                                    
                                @endforelse
                            </select>
                            <br>
                            <label for="birthday"><b>Birthday</b></label>
                            <br>
                            <input type="date" placeholder="Enter Birthday" name="birthday" value="{{$item->birthday}}" required>
                            <br>
                            <label for="address"><b>Address</b></label>
                            <br>
                            <input type="text" placeholder="Enter Address" name="address" value="{{$item->address}}" required>
                            <br>
                            <label for="idcard"><b>IDcard</b></label>
                            <br>
                            <input type="text" placeholder="Enter IDcard" name="idcard" value="{{$item->idcard}}" required>
                            <br>
                            <label for="salary"><b>Salary</b></label>
                            <br>
                            <input type="number" placeholder="Enter Salary" name="salary" value="{{$item->salary}}" required>
                            <br>
                            <label for="salaryunit"><b>Salary Type</b></label>
                            <br>
                            <select name="salary_type">
                                <option value="volvo">Full time</option>
                                <option value="saab">Part time</option>
    
                            </select>
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