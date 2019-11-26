@extends('templates.main')
@section('title', 'Showstock')

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
            <h1 class="w3-jumbo">คลังสินค้า</h1>

        </header>

        <table style="width:100%;text-align: center;margin-bottom: 2%;margin-top:30px">
            <tr>
                <th>รหัสสินค้า</th>
                <th>ชื่อ</th>
                <th>คู่ค้า</th>
                <th>จำนวนทั้งหมด</th>
                <th>หน่วย</th>

            </tr>
            <tr>
                <td>0000</td>
                <td>nnnnnn</td>
                <td>สมชาย</td>
                <td>500</td>
                <td>ชิ้น</td>
            </tr>
        </table>


        <center>
            <button type="button" data-toggle="modal" data-target="#myModal">เพิ่มสินค้า</button>
        </center>
    </div>

    
        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog" style="color: black;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Product</h4>
                    </div>
                    <div class="modal-body">
                        <form action="" class="form-container" style="text-align: center;">
                            <label for="name"><b>Name Product</b></label>
                            <br>
                            <input type="text" placeholder="Enter Name" name="name" required>
                            <br>
                            <label for="vendor"><b>Vendor</b></label>
                            <br>
                            <select>
                                <option value="vendor1">คุณชะโบ</option>
                                <option value="vendor2">เพื่อนคุณชะโบ</option>
                            </select>
                            <br>
                            <label for="branch"><b>Branch</b></label>
                            <br>
                            <select>
                                <option value="branch1">โจ้โจ้สาขา1</option>
                                <option value="branch2">ไอปลั๊กสาขา1</option>
                            </select>
                            <br>
                            <label for="price"><b>Price</b></label>
                            <br>
                            <input type="text" placeholder="Enter Price" name="price" required>
                            <br>
                            <label for="unit"><b>Unit</b></label>
                            <br>
                            <input type="text" placeholder="Enter Unit" name="unit" required>
                            <br>
                            <button type="submit" class="btn-success">Save</button>
    
                            <button type="button" class="btn-danger" data-dismiss="modal">Close</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection