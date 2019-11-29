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

    <form action="{{route('staff.addBill')}}">
        <div>
        <center>
            <table id="myTable" style="width:30%;text-align: center;margin-bottom: 2%;margin-top:30px">
                                 <tr>
                                    <th>รหัสเมนู</th>
                                    <th>จำนวน</th>
                                    <th>ตัวเลือก</th>
                                </tr>
            </table>  
            </center>  
        </div>


        <div style="width:100%;text-align: center;">
                <label for="promotion"><b>เลือกเพิ่มเมนู</b></label>
                <br>
                <select id="menu">
                    @forelse ($menu as $item)
                    <option value="{{$item->id}}">{{$item->menus_name}}</option>
                    @empty    
                    @endforelse
                        
                </select>
                <input id="qty" type="number">
                <br>
                <button type="button" onclick="myCreateFunction()" style="width:10%;" class="btn-success">เพิ่ม</button>
                {{-- <button onclick="myDeleteFunction()" style="width:10%;" class="btn-danger">ลบ</button> --}}
                <br>
                <label for="promotion" style="width:30%;text-align: center;margin-top:10px"><b>โปรโมชั่น</b></label>
                <br>
                <input type="number" placeholder="กรอกโปรชั่น" name="promotion" >
                <button type="button"  style="width:10%; margin-left:10px" class="btn-warning" >ตรวจสอบโปรโมชั่น</button>
                <br>
             
                <label for="phone" style="width:30%;text-align: center;margin-top:10px"><b>กรอกเบอร์โทรศัพท์ลูกค้าที่เป็นสมาชิก</b></label>
                <br>
                <input type="text" placeholder="กรอกเบอร์โทรศัพท์" name="phone" >
                <br>
                <button type="submit"  style="text-align: center;margin-top:20px">ออกใบเสร็จ</button>
                


               </div>
            </form>
        </div>


        
@endsection
<script>
function myCreateFunction() {

            var menu = document.getElementById("menu");
            var qty = document.getElementById("qty");

            console.log(menu.value);

            var table = document.getElementById("myTable");
            var row = table.insertRow(1);
            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            var cell3 = row.insertCell(2);

            if (menu.value != "" && qty.value != "") {

            
            cell1.innerHTML = menu.value+'<input type="hidden" name="menu[]" value="' + menu.value + '">';
            cell2.innerHTML = qty.value+'<input type="hidden" name="qty[]" value="' + qty.value + '">';
            cell3.innerHTML ='<button type="button" value="Delete" onclick="deleteRow(this)" style="width: 140px;">ลบ</button>';


            }
            menu.value="";
            qty.value="";
        }

        function myDeleteFunction() {
        document.getElementById("myTable").deleteRow(1);
        }

        function deleteRow(row) {
            var d = row.parentNode.parentNode.rowIndex;
            document.getElementById('myTable').deleteRow(d);

        }
</script>