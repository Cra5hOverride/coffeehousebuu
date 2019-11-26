@extends('templates.main')
@section('title', 'Menu')

@section('style')

    <style>
        button {
            background-color: #00396b;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 30%;
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
        <h1 class="w3-jumbo">เมนู</h1>

    </header>
    <div>
        <table style="width:100%;text-align: center;margin-top:30px">
            <tr>
                <th>ชื่อ</th>
                <th>ราคา</th>
                <th>ราบละเอียด</th>
                <th>สถานะ</th>
                <th>ตัวเลือก</th>
            </tr>
            <tr>
                <td>xxx</td>
                <td>1000000</td>
                <td>xxxxxxxxxx</td>
                <td>มี</td>
                <td>
                    <button>ลบ</button>
                    <button type="button" data-toggle="modal" data-target="#editModal">แก้ไข</button>
                </td>
            </tr>
           
        </table>
        <center>
            <button type="button" data-toggle="modal" data-target="#myModal" style="width:20%">เพิ่มเมนู</button>
        </center>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog" style="color: black;">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Menu</h4>
                </div>
                <div class="modal-body">
                <div>
                    <center>
                    <label for="product"><b>Product</b></label>
                        <table id="myTable" style="text-align: center;">
                            <tr>
                                 <th>สินค้า/วัตถุดิบ</th>
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

                        <label for="menu"><b>Menu Name</b></label>
                        <br>
                        <input type="text" placeholder="Enter Menu Name" name="menu" required>
                        <br>
                        <label for="price"><b>Price</b></label>
                        <br>
                        <input type="text" placeholder="Enter Price" name="price" required>
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
                    <h4 class="modal-title">Edit Menu</h4>
                </div>
                <div class="modal-body">
                <div>
                    <center>
                    <label for="product"><b>Product</b></label>
                        <table id="myTable" style="text-align: center;">
                            <tr>
                                 <th>สินค้า/วัตถุดิบ</th>
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

                        <label for="menu"><b>Menu Name</b></label>
                        <br>
                        <input type="text" placeholder="Enter Menu Name" name="menu" required>
                        <br>
                        <label for="price"><b>Price</b></label>
                        <br>
                        <input type="text" placeholder="Enter Price" name="price" required>
                        <br>
                        <label for="status"><b>Status</b></label>
                        <br>
                        <select for="status">
                            <option value="yes">มี</option>
                            <option value="no">ไม่มี</option>
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

<script>
function myCreateFunction() {
  var table = document.getElementById("myTable");
  var row = table.insertRow(1);
  var cell1 = row.insertCell(0);
  var cell2 = row.insertCell(1);

  cell1.innerHTML = '<select> <option value="product1" >เค้ก</option> <option value="product2">กาแฟต้ม</option></select>';

  cell2.innerHTML = '<input type="number">';
}
function myDeleteFunction() {
  document.getElementById("myTable").deleteRow(1);
}
</script>