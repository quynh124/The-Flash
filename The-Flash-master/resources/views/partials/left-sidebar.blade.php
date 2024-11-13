<div id="left-sidebar" class="sidebar">
    <a href="#" class="menu_toggle"><i class="fa fa-angle-left"></i></a>
    <div class="navbar-brand">
        <a href="index.html"><img src="/images/logo-nobg.png" alt="Mooli Logo" class="img-fluid logo"><span>Soccer Verse</span></a>
        <button type="button" class="btn-toggle-offcanvas btn btn-sm float-right"><i class="fa fa-close"></i></button>
    </div>
    <div class="sidebar-scroll">
        <div class="user-account">
            <div class="user_div">
                <img src="/assets/images/user.png" class="user-photo" alt="User Profile Picture">
            </div>
            <div class="dropdown">
                <span>Account</span>
                <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>
                    @if (Auth::check())
                        {{ Auth::user()->name }}
                    @else
                        Anonymous User
                    @endif
                </strong></a>
                <ul class="dropdown-menu dropdown-menu-right account vivify flipInY">
                    {{-- <li><a href="page-profile.html"><i class="fa fa-user"></i>My Profile</a></li>
                    <li><a href="app-inbox.html"><i class="fa fa-envelope"></i>Messages</a></li>
                    <li><a href="setting.html"><i class="fa fa-gear"></i>Settings</a></li>
                    <li class="divider"></li> --}}
                    <li><a href="/admin/logout"><i class="fa fa-power-off"></i>Logout</a></li>
                </ul>
            </div>
        </div>
        <nav id="left-sidebar-nav" class="sidebar-nav">
            <ul id="main-menu" class="metismenu animation-li-delay">
                {{-- <li class="header">Main</li>
                <li class="active"><a href="index.html"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li> --}}
                <li class="header">Categories</li>
                <li><a href="/admin/users"><img class="svg-icon" src="/svg/users/Profile.svg" alt="SVG Icon"><span>Users</span></a></li>
                <li><a href="/admin/tournaments"><img class="svg-icon" src="/svg/basic-icons/Cup.svg" alt="SVG Icon"><span>Tournaments</span></a></li>
                <li><a href="/admin/players"><img class="svg-icon" src="/svg/people/Anonymous-2.svg" alt="SVG Icon"><span>Players</span> <!-- <span class="badge badge-default mr-0">12</span></a></li> -->
                <li><a href="/admin/clubs"><img class="svg-icon" src="/svg/users/Male-Group-1.svg" alt="SVG Icon"><span>Clubs</span></a></li>
                <li><a href="/admin/matches"><img class="svg-icon" src="/svg/shapes/Rectangle-2.svg" alt="SVG Icon"><span>Matches</span></a></li>
                <li><a href="/admin/goals"><img class="svg-icon" src="/svg/sport/Soccer-Ball.svg" alt="SVG Icon"><span>Goals</span></a></li>
                <li><a href="/admin/position"><img class="svg-icon" src="/svg/maps-and-locations/Street-View.svg" alt="SVG Icon"><span>Position In Match</span></a></li>
                <li><a href="http://127.0.0.1:8000/admin/feedbacks"><img class="svg-icon" src="/svg/email-icons/Compose-Mail1.svg" alt="SVG Icon"><span>Feedbacks</span></a></li>
                <li><a href="http://127.0.0.1:8000/admin/contacts"><img class="svg-icon" src="/svg/phones/Phone-1.svg" alt="SVG Icon"><span>Contacts</span></a></li>
            </ul>
        </nav>
    </div>
</div>
