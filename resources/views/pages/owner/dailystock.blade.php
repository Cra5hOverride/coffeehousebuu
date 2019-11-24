@extends('templates.main')
@section('title', 'Dailystock')

@section('style')

@endsection

@section('sidebar')
    @include('layouts.sidebar.owner')
@endsection

@section('content')
    <div class="w3-padding-large" id="main">
        <!-- Header/Home -->
        <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
            <h1 class="w3-jumbo">Stockรายวัน</h1>

        </header>
        <div>
            <div style="width:100%;text-align: center;">
                <form action="">
                    Date: <input type="date" name="bday">
                    <button type="submit">Save</button>
                </form>
                <br>
            </div>
            <table style="width:100%;text-align: center;">
                <tr>
                    <th style="width:20%;">date XX/XX/XXXX</th>
                    <th>Detail</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                </tr>
                <tr>
                    <td>Stock in</td>
                    <td>แก้วกาแฟ</td>
                    <td>1</td>
                    <td>10</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>Stock out</td>
                    <td>เค้ก</td>
                    <td>5</td>
                    <td>30</td>
                    <td>150</td>
                </tr>
            </table>
        </div>
    </div>
@endsection