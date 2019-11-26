@extends('templates.main')
@section('title', 'Take Leave')

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
    @include('layouts.sidebar.manager')
@endsection

@section('content')
<div class="w3-padding-large" id="main">
        <!-- Header/Home -->
        <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
            <h1 class="w3-jumbo">ประวัติการลางาน</h1>

        </header>
        <div>
            <table style="width:100%;text-align: center; margin-top:30px">
                <tr>
                    <th>ชื่อ</th>
                    <th>ตำแหน่ง</th>
                    <th>วันที่เริ่มการลา</th>
                    <th>วันที่สิ้นสุดการลา</th>
                    <th>ตัวเลือก</th>
                </tr>
                <tr>
                    <td>xxx</td>
                    <td>xxxxxxxxxxx</td>
                    <td>xx-xx-xx</td>
                    <td>xx-xx-xx</td>
           
                    <td>
                        <button type="button" data-toggle="modal" data-target="#editModal">แก้ไข</button>
                    </td>
                </tr>
             
            </table>
            <center>
                <button type="button" data-toggle="modal" data-target="#myModal" style="width:20%">เพิ่มการลางาน</button>
            </center>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog" style="color: black;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Takeleave</h4>
                    </div>
                    <div class="modal-body">
                        <form action="" class="form-container" style="text-align: center;">

                            <label for="name"><b>Name</b></label>
                            <br>
                            <select>
                                <option value="name1">สมถุย สลายดาว</option>
                                <option value="name2">โจ้ กาก</option>
                            </select>
                            </br>
                            <label for="start"><b>Dete Start</b></label>
                            <br>
                            <input type="date" placeholder="Enter Date" name="start" required>
                            <br>
                            <label for="end"><b>Dete End</b></label>
                            <br>
                            <input type="date" placeholder="Enter Date" name="end" required>
                            <br>
                            <button type="submit" class="btn-success">Save</button>

                            <button type="button" class="btn-danger" data-dismiss="modal">Close</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

             <!-- Edit Modal -->
             <div class="modal fade" id="editModal" role="dialog">
            <div class="modal-dialog" style="color: black;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Takeleave</h4>
                    </div>
                    <div class="modal-body">
                        <form action="" class="form-container" style="text-align: center;">

                            <label for="name"><b>Name</b></label>
                            <br>
                            <select>
                                <option value="name1">สมถุย สลายดาว</option>
                                <option value="name2">โจ้ กาก</option>
                            </select>
                            </br>
                            <label for="start"><b>Dete Start</b></label>
                            <br>
                            <input type="date" placeholder="Enter Date" name="start" required>
                            <br>
                            <label for="end"><b>Dete End</b></label>
                            <br>
                            <input type="date" placeholder="Enter Date" name="end" required>
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