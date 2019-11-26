@extends('templates.main')
@section('title', 'Add Menu')

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
<div class="w3-padding-large" id="main">
        <!-- Header/Home -->
        <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
            <h1 class="w3-jumbo">เพิ่มเมนู</h1>

        </header>
        <!-- <table style="width:100%;text-align: center;margin-bottom: 2%;margin-top:30px">
            <tr>
                <th>ชื่อเมนู</th>
                <th>รายละเอียด</th>
                <th>ราคา</th>
                <th>สถานะ</th>
                <th>จำนวน</th>

            </tr>
            <tr>
                <td>กาแฟต้มอร่อย</td>
                <td>เม็ดกาแฟ 10 กรัม,น้ำเปล่า 2 ลิตร</td>
                <td>35</td>
                <td>พร้อมขาย</td>
                <td>19</td>
            </tr>
        </table> -->


        <div>
        <center>
            <table id="myTable" style="width:30%;text-align: center;margin-bottom: 2%;margin-top:30px">
                                 <tr>
                                    <th>เมนู</th>
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
            </center>  
        </div>


        <div style="width:100%;text-align: center;">
                <label for="promotion"><b>เลือกเพิ่มเมนู</b></label>
                <br>
                <button onclick="myCreateFunction()" style="width:10%;" class="btn-success">เพิ่ม</button>
                <button onclick="myDeleteFunction()" style="width:10%;" class="btn-danger">ลบ</button>
                <br>
                <label for="promotion" style="width:30%;text-align: center;margin-top:10px"><b>โปรโมชั่น</b></label>
                <br>
                <input type="number" placeholder="กรอกโปรชั่น" name="promotion" required>
                <br>
                <label for="phone" style="width:30%;text-align: center;margin-top:10px"><b>กรอกเบอร์โทรศัพท์ลูกค้าที่เป็นสมาชิก</b></label>
                <br>
                <input type="text" placeholder="กรอกเบอร์โทรศัพท์" name="phone" required>
                <br>
                <a href="{{ route('staff.viewbill') }}" >
                    <button  style="text-align: center;margin-top:10px">ออกใบเสร็จ</button>
                </a>
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