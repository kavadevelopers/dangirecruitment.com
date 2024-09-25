<style type="text/css">
    .new-mainmenu{
        float: left;
        width: 240px;
        scrollbar-width: none;
        -ms-overflow-style: none;
    }
    .new-mainmenu::-webkit-scrollbar {
    display: none;
    }
    .pcoded-inner-navbar {
        height: calc(100% - 80px);
    }
</style>

<script type="text/javascript">
    $(document).ready(function($) {
        target = $('.pcoded-inner-navbar .kava-active');
        $('.pcoded-inner-navbar').stop().animate({
                scrollTop: $(target).offset().top - 100
        }, 600, function() {
                //location.hash = target;
        });
    });
</script>

<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <nav class="pcoded-navbar">
            <div class="pcoded-inner-navbar new-mainmenu" style="overflow-y: scroll;">
                <div class="pcoded-navigatio-lavel">Navigation</div>
                <ul class="pcoded-item pcoded-left-item">

                    <li class="{{ CommonHelper::menu(2,['dashboard'])[2] }}">
                        <a href="{{ CommonHelper::admin('dashboard') }}">
                            <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                            <span class="pcoded-mtext">Dashboard</span>
                        </a>
                    </li>
                    {{-- <li class="{{ CommonHelper::menu(2,['pages'])[2] }}">
                        <a href="{{ CommonHelper::admin('pages') }}">
                            <span class="pcoded-micon"><i class="fa fa-file"></i></span>
                            <span class="pcoded-mtext">Pages</span>
                        </a>
                    </li> --}}
                    <li class="{{ CommonHelper::menu(2,['blogs'])[2] }}">
                        <a href="{{ CommonHelper::admin('blogs') }}">
                            <span class="pcoded-micon"><i class="fa fa-list"></i></span>
                            <span class="pcoded-mtext">Blogs</span>
                        </a>
                    </li>
                    {{-- <ul class="pcoded-item pcoded-left-item">
                        <li class="pcoded-hasmenu {{ CommonHelper::menu(2,['cms'])[2] }}">
                            <a href="javascript:void(0)">
                                <span class="pcoded-micon"><i class="fa fa-book"></i></span>
                                <span class="pcoded-mtext">CMS</span>
                            </a>
                            <ul class="pcoded-submenu">
                                <li class="{{ CommonHelper::menu(3,['home-sliders'],'cms')[1] }}">
                                    <a href="{{ CommonHelper::admin('cms/home-sliders') }}">
                                        <span class="pcoded-micon"><i class="fa fa-list"></i></span>
                                        <span class="pcoded-mtext">Home Sliders</span>
                                    </a>
                                </li>
                                {{-- <li class="{{ CommonHelper::menu(3,['menus'],'cms')[1] }}">
                                    <a href="{{ CommonHelper::admin('cms/menus') }}">
                                        <span class="pcoded-micon"><i class="fa fa-list"></i></span>
                                        <span class="pcoded-mtext">Menus</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul> --}}
                    <li class="{{ CommonHelper::menu(2,['enquiries'])[2] }}">
                        <a href="{{ CommonHelper::admin('enquiries') }}">
                            <span class="pcoded-micon"><i class="fa fa-cog fa-spin"></i></span>
                            <span class="pcoded-mtext">Enquiries</span>
                        </a>
                    </li>
                    <li class="{{ CommonHelper::menu(2,['settings'])[2] }}">
                        <a href="{{ CommonHelper::admin('settings') }}">
                            <span class="pcoded-micon"><i class="fa fa-cog fa-spin"></i></span>
                            <span class="pcoded-mtext">Settings</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{ CommonHelper::admin('logout') }}">
                            <span class="pcoded-micon"><i class="fa fa-sign-out"></i></span>
                            <span class="pcoded-mtext">Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <div class="main-body">
                    <div class="page-wrapper">
