<div id="mySidenav" class="sidenav bg-main">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    {{-- <h3 class="text-main pl-4"><i class="fa fa-fw fa-menu"></i></h3> --}}
    <div class="mr-auto ml-auto mt-3 mb-3" style="width:80px;"><img id="profile-img" src="{{asset('images/logo1.JPEG')}}" class="image-fluid rounded-circle"></div>
    <a href="/admin/dashboard" class="@isset($db) active @endisset"><i class="fa fa-fw fa-home"></i> Dashboard</a>
    <a href="/adddoctor/create" class="@isset($add) active @endisset"><i class="fa fa-fw fa-plus"></i> Add/View Doctor</a>
    <a href="/admin/view/appointments" class="@isset($appt) active @endisset"><i class="fa fa-fw fa-calendar"></i> Appointments</a>
    <a href="/admin/contacts" class="@isset($contact) active @endisset"><i class="fa fa-fw fa-envelope"></i> Contacts</a>
</div>
