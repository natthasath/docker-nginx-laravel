<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('dashboard') }}" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
        <i class="nav-icon fas fa-chart-pie"></i>
        <p>ภาพรวม</p>
    </a>
</li>
{{-- <li class="nav-item">
    <a href="" class="nav-link ">
        <i class="nav-icon fas fa-book"></i>
        <p>บทความ</p>
    </a>
</li> --}}
<li class="nav-item">
    <a href="{{ route('project_index') }}" class="nav-link {{ Request::is('project_index') ? 'active' : '' }}">
        <i class="nav-icon fas fa-list"></i>
        <p>รายการโครงการ</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('car_index') }}" class="nav-link {{ Request::is('car_index') ? 'active' : '' }}">
        <i class="nav-icon far fa-calendar-alt"></i>
        <p>รายการปฏิทิน</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('update_form') }}" class="nav-link {{ Request::is('update_form') ? 'active' : '' }}">
        <i class="nav-icon fas fa-file"></i>
        <p>อัพเดทไฟล์แบบฟอร์ม</p>
    </a>
</li>
