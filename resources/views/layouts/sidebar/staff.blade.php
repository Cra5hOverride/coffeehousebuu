<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center" style="background-color: #00396B;">

        <a href="{{ route('staff.viewhome') }}" class="w3-bar-item w3-button w3-padding-large perthSelectMenu_1">
            <i class="fa fa-home w3-xxlarge"></i>
            <p>หน้าหลัก</p>
        </a>
        <a href="{{ route('staff.viewcustomer') }}" class="w3-bar-item w3-button w3-padding-large perthSelectMenu_6">
            <i class="fa fa-user-plus w3-xxlarge"></i>
            <p>สมัครสมาชิก</p>
        </a>
        <a href="{{ route('staff.viewmenu') }}" class="w3-bar-item w3-button w3-padding-large perthSelectMenu_2">
            <i class="fa fa-plus-square-o w3-xxlarge"></i>
            <p>เพิ่มเมนู</p>
        </a>
        <a href="{{ route('staff.viewshowstock') }}" class="w3-bar-item w3-button w3-padding-large perthSelectMenu_5">
            <i class="fa fa-eye w3-xxlarge"></i>
            <p>ดูคลังสินค้า</p>
        </a>
        <a href="{{ route('staff.vieworderproduct') }}" class="w3-bar-item w3-button w3-padding-large perthSelectMenu_8">
            <i class="fa fa-cart-plus w3-xxlarge"></i>
            <p>สั่งสินค้า-วัตถุดิบ</p>
        </a>
        <a href="{{ route('staff.viewreceiveproduct') }}" class="w3-bar-item w3-button w3-padding-large perthSelectMenu_3">
            <i class="fa fa-cubes w3-xxlarge"></i>
            <p>รับสินค้า-วัตถุดิบ</p>
        </a>
        <a href="{{ route('staff.viewclaim') }}" class="w3-bar-item w3-button w3-padding-large perthSelectMenu_4">
            <i class="fa fa-truck w3-xxlarge"></i>
            <p>เคลม</p>
        </a>
        <a href="{{ route('staff.viewreceiveclaim') }}" class="w3-bar-item w3-button w3-padding-large perthSelectMenu_7">
            <i class="fa fa-asl-interpreting w3-xxlarge"></i>
            <p>รับของเคลม</p>
        </a>
        <a href="{{ route('logout') }}" class="w3-bar-item w3-button w3-padding-large perthSelectMenu_5" >
                <i class="fa fa-sign-out" style="font-size:48px";></i>
                <p>Logout</p>
            </a>
    </nav>