<div id="mySidenav" class="sidenav bg-main">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    {{-- <h3 class="text-main pl-4"><i class="fa fa-fw fa-menu"></i></h3> --}}
    <div class="mr-auto ml-auto mt-3 mb-3" style="width:80px;"><img id="profile-img" src="{{asset('images/logoavatar.jpg')}}" class="image-fluid rounded-circle"></div>
    <a href="/patientdashboard" class="@isset($db) active @endisset"><i class="fa fa-fw fa-home"></i> Dashboard</a>
    <a href="/patient/profile" class="@isset($add) active @endisset"><i class="fa fa-fw fa-user"></i>Profile</a>
    <a href="/patient/view/appointments" class="@isset($appt) active @endisset"><i class="fa fa-fw fa-calendar"></i> Appointments</a>
    <a href="/patient/view/health/record" class="@isset($add) active @endisset"><i class="fa fa-fw fa-plus"></i>Health Record</a>
</div>
