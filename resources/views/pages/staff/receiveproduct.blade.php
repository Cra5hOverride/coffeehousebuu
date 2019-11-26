@extends('templates.main')
@section('title', 'Receiveproduct')

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
            <h1 class="w3-jumbo">รับสินค้า/วัตถุดิบ</h1>

        </header>

        <table style="width:100%;text-align: center;margin-bottom: 2%;margin-top:30px">
            <tr>
                <th>รายการที่</th>
                <th>รายละเอียด</th>
                <th>คู่ค้า</th>
                <th>สาขา</th>
                <th>วันที่สั่งสินค้า/วัตถุดิบ</th>
                <th>วันที่รับสินค้า/วัตถุดิบ</th>
                <th>ราคารวม</th>
                <th>สถานะ</th>
                <th>ตัวเลือก</th>
            </tr>
            <tr>
                <td>1</td>
                <td>เค้ก 10 ชิ้น , เมล็ดทานตะวัน 3 ถุง</td>
                <td>สมชาย</td>
                <td>โจโจ้สาขา2</td>
                <td>1-1-2019</td>
                <td>X-X-XXXX</td>
                <td>6000</td>
                <td>ยังไม่สมบูรณ์</td>
                <td>

                    <select style="text-align: center; color: black;">
                        <option value="yes" type="submit">รับของแล้ว</option>
                        <option value="no" type="submit">ยังไม่ได้รับ</option>
                    </select>

                </td>
            </tr>
        </table>

        <center>
            <form action="" style="text-align: center;">
                <button type="submit" class="btn-success">บันทึก</button>
            </form>
        </center>



    </div>
@endsection