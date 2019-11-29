@extends('templates.main')
@section('title', 'Promotion')

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
            width: 25%;
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
            <h1 class="w3-jumbo">โปรโมชั่น</h1>

        </header>
        <div>
            <table style="width:100%;text-align: center;margin-top:30px">
                <tr>
                    <th>รหัสโปรโมชั่น</th>
                    <th>ส่วนลด</th>
                    <th>วันที่เริ่มโปรชั่น</th>
                    <th>วันสิ้นสุดโปรโมชั่น</th>
                    <th>ตัวเลือก</th>
                </tr>
                @forelse ($promotion as $item)
                <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->promotions_detail}}</td>
                <td>{{$item->start}}</td>
                <td>{{$item->end}}</td>
    
                        <td>
                            <button>ลบ</button>
                            {{-- <button type="button" data-toggle="modal" data-target="#editModal">แก้ไข</button> --}}
                        </td>
                    </tr>
                @empty
                    
                @endforelse
                
            </table>
            <center>
                <button type="button" data-toggle="modal" data-target="#myModal" style="width:20%">เพิ่มโปรโมชั่น</button>
            </center>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog" style="color: black;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Promotion</h4>
                    </div>
                    <div class="modal-body">
                    <form action="{{route('manager.addPromotion')}}" class="form-container" style="text-align: center;">


                            <label for="dis"><b>Discount</b></label>
                            <br>
                            <input type="number" placeholder="Enter Discount" name="promotions_detail" required>
                            <br>
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
                        <h4 class="modal-title">Edit Promotion</h4>
                    </div>
                    <div class="modal-body">
                        <form action="" class="form-container" style="text-align: center;">


                            <label for="dis"><b>Discount</b></label>
                            <br>
                            <input type="number" placeholder="Enter Discount" name="dis" required>
                            <br>
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