<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center" style="background-color: #00396B;">

        <a href="{{ route('manager.viewHomeManager') }}" class="w3-bar-item w3-button w3-padding-large perthSelectMenu_1">
            <i class="fa fa-home w3-xxlarge"></i>
            <p>หน้าหลัก</p>
        </a>
        <a href="{{ route('manager.viewAddstaff') }}" class="w3-bar-item w3-button w3-padding-large perthSelectMenu_2">
            <i class="fa fa-plus-square-o w3-xxlarge"></i>
            <p>เพิ่มพนักงาน</p>
        </a>
        <a href="{{ route('manager.viewWork') }}" class="w3-bar-item w3-button w3-padding-large perthSelectMenu_5">
            <i class="fa fa-calendar-check-o w3-xxlarge"></i>
            <p>เข้างาน</p>
        </a>
        <a href="{{ route('manager.viewTakeleave') }}" class="w3-bar-item w3-button w3-padding-large perthSelectMenu_9">
            <i class="fa fa-calendar-times-o w3-xxlarge"></i>
            <p>ลางาน</p>
        </a>
        <a href="{{ route('manager.viewSalary') }}" class="w3-bar-item w3-button w3-padding-large perthSelectMenu_7">
            <i class="fa fa-money w3-xxlarge"></i>
            <p>เงินเดือน</p>
        </a>

        <a href="{{ route('manager.viewMenu') }}" class="w3-bar-item w3-button w3-padding-large perthSelectMenu_8">
            <i class="fa fa-reorder w3-xxlarge"></i>
            <p>เมนู</p>
        </a>
        <a href="{{ route('manager.viewPromotion') }}" class="w3-bar-item w3-button w3-padding-large perthSelectMenu_6">
            <i class="fa fa-gift w3-xxlarge"></i>
            <p>โปรโมชั่น</p>
        </a>
        <a href="{{ route('manager.viewshowstock') }}" class="w3-bar-item w3-button w3-padding-large perthSelectMenu_5">
            <i class="fa fa-eye w3-xxlarge"></i>
            <p>ดูคลังสินค้า</p>
        </a>
        <a href="{{ route('manager.viewDailystock') }}" class="w3-bar-item w3-button w3-padding-large perthSelectMenu_3">
            <i class="fa fa-file-text-o w3-xxlarge"></i>
            <p>สต๊อกรายวัน</p>
        </a>
        <a href="{{ route('manager.viewVendor') }}" class="w3-bar-item w3-button w3-padding-large perthSelectMenu_4">
            <i class="fa fa-handshake-o w3-xxlarge"></i>
            <p>คู่ค้า</p>
        </a>
        <a href="{{ route('logout') }}" class="w3-bar-item w3-button w3-padding-large perthSelectMenu_5" >
                <i class="fa fa-sign-out" style="font-size:48px";></i>
                <p>Logout</p>
            </a>


    </nav>