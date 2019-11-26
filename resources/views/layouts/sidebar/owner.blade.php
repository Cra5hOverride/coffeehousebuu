<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center" style="background-color: #00396B;">

        <a href="{{ route('admin.viewhome') }}" class="w3-bar-item w3-button w3-padding-large perthSelectMenu_1">
            <i class="fa fa-home w3-xxlarge"></i>
            <p>หน้าหลัก</p>
        </a>
        <a href="{{ route('admin.viewbranch') }}" class="w3-bar-item w3-button w3-padding-large perthSelectMenu_3">
            <i class="fa fa-group w3-xxlarge"></i>
            <p>จัดการสาขา</p>
        </a>
        <a href="{{ route('admin.viewmanager') }}" class="w3-bar-item w3-button w3-padding-large perthSelectMenu_2">
            <i class="fa fa-plus-square-o w3-xxlarge"></i>
            <p>เพิ่มผู้จัดการ</p>
        </a>
        <a href="{{ route('admin.viewstaff') }}" class="w3-bar-item w3-button w3-padding-large perthSelectMenu_4">
            <i class="fa fa-envelope w3-xxlarge"></i>
            <p>เพิ่มพนักงาน</p>
        </a>
        <a href="{{ route('admin.viewpartner') }}" class="w3-bar-item w3-button w3-padding-large perthSelectMenu_6">
            <i class="fa fa-handshake-o w3-xxlarge"></i>
            <p>คู่ค้า</p>
        </a>
        <a href="{{ route('admin.viewdailystock') }}" class="w3-bar-item w3-button w3-padding-large perthSelectMenu_5">
            <i class="fa fa-file-text w3-xxlarge"></i>
            <p>สต็อกรายวัน</p>
        </a>
        <a href="{{ route('logout') }}" class="w3-bar-item w3-button w3-padding-large perthSelectMenu_5" >
                <i class="fa fa-sign-out" style="font-size:48px";></i>
                <p>Logout</p>
            </a>
    </nav>