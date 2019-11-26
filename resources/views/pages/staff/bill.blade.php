@extends('templates.main')
@section('title', 'Bill')

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
    th{
        width:10%;
        text-align: center;
    }
</style>
@endsection


@section('content')
<div class="w3-padding-large" id="main">
      

        <div>
        <center>
            <h1>Coffee House BUU</h1>
            <h4>ยินดีต้อนรับสู่ COFFEE HOUSE BUU</h4>
            <p>(000) 000-000</p>
            <br>
            <h4>รายการที่ #01456</h4>
            <p><b>รายการเมนู</b></p>
            <table id="myTable" style="width:20%;">
                <tr>
                    <td>กาแฟต้ม</td>
                    <td>19</td>
                </tr>
                <tr>
                    <td>เค้กกล้วยหอมจอมซน</td>
                    <td>3</td>
                </tr>
            </table>
            <br>
            <p><b>ราคารวม 3000 บาท</b></p>
            <br>
            <p><b>วันที่ xx/xx/xxxx  01:23PM</b></p>
        </center>  
        </div>


        <center>
            <a href="{{ route('staff.viewmenu') }}">

                <button>ทำการเสร็จสิ้น</button>
            </a>
        </center>
    </div>

@endsection