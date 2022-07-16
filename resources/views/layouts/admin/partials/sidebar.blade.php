<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <!-- <li class="app-sidebar__heading">Dashboards</li> -->
                <li>
                    <a href="{{ route('admin.dashboard') }}" class="mm-active">
                        <i class="metismenu-icon pe-7s-rocket"></i> Dashboard
                    </a>
                </li>
                
                <!-- <li class="app-sidebar__heading">User & Roles</li> -->
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-diamond"></i> User & Roles <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('admin.role.index') }}">
                                <i class="metismenu-icon"></i>Roles
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.user.index') }}">
                                <i class="metismenu-icon"></i>Users
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-diamond"></i> Catalog <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('admin.event.index') }}">
                                <i class="metismenu-icon"></i> Events
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.meeting.index') }}">
                                <i class="metismenu-icon"></i> Meetings
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.project.index') }}">
                                <i class="metismenu-icon"></i> Projects
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.report.index') }}">
                                <i class="metismenu-icon"></i> Reports
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('admin.setting.index') }}">
                        <i class="metismenu-icon pe-7s-rocket"></i> Settings
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.contact.index') }}">
                        <i class="metismenu-icon pe-7s-rocket"></i> Enquiries
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
