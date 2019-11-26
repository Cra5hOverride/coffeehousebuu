@extends('templates.main')
@section('title', 'Orderproduct')

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
    @include('layouts.sidebar.staff')
@endsection

@section('content')
    <!-- Page Content -->
    <div class="w3-padding-large" id="main">
            <!-- Header/Home -->
            <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
                <h1 class="w3-jumbo">สั่งสินค้า/วัตถุดิบ</h1>
    
            </header>
            <table style="width:100%;text-align: center;margin-bottom: 2%;margin-top:30px">
                <tr>
                    <th>รายการที่</th>
                    <th>รายละเอียด</th>
                    <th>คู่ค้า</th>
                    <th>สาขา</th>
                    <th>วันที่สั่งสินค้า/วัตถุดิบ</th>
                    <!-- <th>วันที่รับสินค้า/วัตถุดิบ</th> -->
                    <th>ราคารวม</th>
                    <th>สถานะ</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>เค้ก 10 ชิ้น,เมล็ดทานตะวัน 3 ถุง</td>
                    <td>สมชาย</td>
                    <td>โจโจ้สาขา2</td>

                    <td>1-1-2019</td>
                    <!-- <td>2-1-2019</td> -->
                    <td>6000</td>
                    <td>ยังไม่สมบูรณ์</td>
    
                </tr>
            </table>
            <center>
                <button type="button" data-toggle="modal" data-target="#myModal">เพิ่มการสั่งซื้อ</button>
            </center>
            
        </div>
    
        
        

        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog" style="color: black;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Order</h4>
                    </div>
                <div class="modal-body">
            <div>
            <center>
                <table id="myTable" >
                <tr>
                <th>สินค้า/วัตถุดิบ</th>
                <th>คู่ค้า</th>
                <th>จำนวน</th>
                    </tr>
                    <tr>
                        <td>
                        <select>
                                <option value="product1">เค้ก</option>
                                <option value="product2">กาแฟต้ม</option>
                        </select>
                        </td>
                        <td>
                        <select>
                                <option value="vendor1">คู่ค้า1</option>
                                <option value="vendor1">คู่ค้า2</option>
                        </select>
                        </td>
                        <td>
                        <input type="number">
                        </td>
                    </tr>
                </table>
                <br>
                <button onclick="myCreateFunction()">เพิ่ม</button>
                <button onclick="myDeleteFunction()">ลบ</button>
            </center>
            </div>


                        <form action="" class="form-container" style="text-align: center;">
                            <label for="branch"><b>Branch</b></label>
                            <br>
                            <select>
                                <option value="branch1">สาขา1</option>
                                <option value="branch2">สาขา2</option>
                            </select>
                            <br>
                            
                            <!-- new row -->
                            

                            <button type="submit" class="btn-success">Save</button>
                            <button type="button" class="btn-danger" data-dismiss="modal">Close</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection

<script>
function myCreateFunction() {
  var table = document.getElementById("myTable");
  var row = table.insertRow(1);
  var cell1 = row.insertCell(0);
  var cell2 = row.insertCell(1);
  var cell3 = row.insertCell(2);
  cell1.innerHTML = '<select> <option value="product1" >เค้ก</option> <option value="product2">กาแฟต้ม</option></select>';
  cell2.innerHTML = '<select><option value="vendor1">คู่ค้า1</option><option value="vendor1">คู่ค้า2</option></select>';
  cell3.innerHTML = '<input type="number">';
}
function myDeleteFunction() {
  document.getElementById("myTable").deleteRow(1);
}
</script>