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
            <h1 class="w3-jumbo">คลังสินค้า</h1>

        </header>

        <table style="width:100%;text-align: center;margin-bottom: 2%;margin-top:30px">
            <tr>
                <th>รหัสสินค้า</th>
                <th>ชื่อ</th>
                <th>คู่ค้า</th>
                <th>จำนวนทั้งหมด</th>
                <th>หน่วย</th>
                <th>ตัวเลือก</th>

            </tr>
            @forelse ($VP as $item)
            <tr>
                <td>{{$item->getProductOfVP()->id}}</td>
                <td>{{$item->getProductOfVP()->product_name}}</td>
                <td>{{$item->getVerdorOfVP()->store_name}}</td>
                <td>{{$item->getBPOfVP()->qty}}</td>
                <td>{{$item->product_unit}}</td>
                <td>
                    <a href="{{ route('manager.delVP', ["id" => $item->id]) }}"><button>ลบ</button></a>
                    {{-- <button type="button" data-toggle="modal" data-target="#editModal{{$item->id}}">แก้ไข</button> --}}
                </td>
            </tr>
            @empty
                
            @endforelse
            
        </table>


        <center>
            <button type="button" data-toggle="modal" data-target="#myModal" style="width:20%;">เพิ่มสินค้า</button>
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
                    <form action="{{route('manager.addStock')}}" class="form-container" style="text-align: center;">
                            <label for="name"><b>Name Product</b></label>
                            <br>
                            <input type="text" placeholder="Enter Name" name="product_name" required>
                            <br>
                            <label for="vendor"><b>Vendor</b></label>
                            <br>
                            <select name="vendor_id">
                                @forelse ($vendor as $vitem)
                            <option value="{{$vitem->id}}">{{$vitem->store_name}}</option>
                                @empty
                                    
                                @endforelse
                                
                            </select >
                            <br>
                            <label for="branch"><b>Branch</b></label>
                            <br>
                            <select name="branch_id">
                                @forelse ($branch as $bitem)
                            <option value="{{$bitem->id}}">{{$bitem->branchs_name}}</option>
                                @empty
                                    
                                @endforelse
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

        @forelse ($VP as $item)
            <!-- Edit Modal -->
    <div class="modal fade" id="editModal{{$item->id}}" role="dialog">
                <div class="modal-dialog" style="color: black;">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Edit Product</h4>
                        </div>
                        <div class="modal-body">
                        <form action="" class="form-container" style="text-align: center;">

                                <input type="text"  name="id" value="{{$item->id}}" hidden>
                                <input type="text"  name="product_id" value="{{$item->product_id}}" hidden>
                                <label for="name"><b>Name Product</b></label>
                                <br>
                                <input type="text" placeholder="Enter Name" name="product_name" value="{{$item->getProductOfVP()->product_name}}" required>
                                <br>
                                <label for="price"><b>Price</b></label>
                                <br>
                                <input type="text" placeholder="Enter Price" name="price" value="{{$item->product_prices}}" required>
                                <br>
                                <label for="unit"><b>Unit</b></label>
                                <br>
                                <input type="text" placeholder="Enter Unit" name="unit" value="{{$item->product_unit}}" required>
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
        
@endsection