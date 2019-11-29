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
                <th>สถานะ</th>
                <th>ตัวเลือก</th>
            </tr>
            @forelse ($menu as $item)
            <tr>
                    <td>{{$item->menus_name}}</td>
                    <td>{{$item->prices}}</td>
                    <td>{{$item->StatusById($item->id)}}</td>
                    <td>
                            <a href="{{ route('manager.delMenu', ["id" => $item->id]) }}"><button>ลบ</button></a>
                    </td>
    
                </tr>
            @empty
                
            @endforelse
            
           
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
                <form action="{{route('manager.addMenu')}}" class="form-container" style="text-align: center;">
                <div>
                    <center>
                    <label for="product"><b>Product</b></label>
                        <table id="myTable" style="text-align: center;">
                            <tr>
                                 <th>สินค้า/วัตถุดิบ</th>
                                 <th>จำนวน</th>
                                 <th>ตัวเลือก</th>
                            </tr>
                          </table>
                          <br>
                          <select id="product_name"> 

                                @forelse ($BP as $item)
  
                                <option value="{{$item->getProductOfBranch()->product_name}}">{{$item->getProductOfBranch()->product_name}}</option>
                                
                                @empty
  
                                @endforelse
  
                             </select>
                             <input id="product_qty" type="number" >
                             <br>
                          <button type="button" onclick="myCreateFunction()">เพิ่ม</button>
                          {{-- <button type="button" onclick="myDeleteFunction()">ลบ</button> --}}
                    </center>
                </div>
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
                <form action="" class="form-container" style="text-align: center;">
                <div>
                    <center>
                    <label for="product"><b>Product</b></label>
                        <table id="myTable" style="text-align: center;">
                            <tr>
                                 <th>สินค้า/วัตถุดิบ</th>
                                 <th>จำนวน</th>
                            </tr>
                             
                          </table>
                          <br>
                          <button type="button" onclick="myCreateFunction()">เพิ่ม</button>
                          <button type="button" onclick="myDeleteFunction()">ลบ</button>
                    </center>
                </div>
                    

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

@section('js')
    <script>

        function myCreateFunction() {

            var name = document.getElementById("product_name");
            var qty = document.getElementById("product_qty");

            var table = document.getElementById("myTable");
            var row = table.insertRow(1);
            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            var cell3 = row.insertCell(2);

            if (name.value != "" && qty.value != "") {

            
            // cell1.innerHTML = name.value;
            // cell2.innerHTML = qty.value;
            cell1.innerHTML = name.value+'<input type="hidden" name="product_name[]" value="' + name.value + '">';
            cell2.innerHTML = qty.value+'<input type="hidden" name="product_qty[]" value="' + qty.value + '">';
            cell3.innerHTML ='<button type="button" value="Delete" onclick="deleteRow(this)">ลบ</button>';


            }

            name.value="";
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
@endsection