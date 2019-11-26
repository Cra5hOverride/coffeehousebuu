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
        <div>
            <table style="width:100%;text-align: center;margin-top:30px">

                <tr>
                    <th>ชื่อ</th>
                    <th>นามสกุล</th>
                    <th>เบอร์โทรศัพท์</th>
                    <th>อีเมล</th>
                    <th>สาขา</th>
                    <th>สถานะ</th>
                </tr>
                <tr>
                    <td>xxx</td>
                    <td>xxx</td>
                    <td>0999999999</td>
                    <td>xxxx</td>
                    <td>xxxx</td>
                    <td>xxxx</td>
                </tr>
                <tr>
                    <td>xxx</td>
                    <td>xxx</td>
                    <td>0999999999</td>
                    <td>xxxx</td>
                    <td>xxxx</td>
                    <td>xxxx</td>
                </tr>
            </table>
        </div>

        <center>
            <button type="button" data-toggle="modal" data-target="#myModal" style="margin-top:30px">เพิ่มการจ่ายเงินเดือน</button>
        </center>
        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog" style="color: black;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Salary</h4>
                    </div>
                    <div class="modal-body">
                        <form action="" class="form-container" style="text-align: center;">

                            <label for="name"><b>Name</b></label>
                            <br>
                            <select>
                                <option value="name1">สมถุย สลายดาว</option>
                                <option value="name2">โจ้ กาก</option>
                            </select>
                            <br>
                            <label for="status"><b>Status</b></label>
                            <br>
                            <select>
                                <option value="name1">ยัง</option>
                                <option value="name2">รับแล้ว</option>
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