
<!--begin::Aside menu-->
<div class="aside-menu flex-column-fluid">
    <!--begin::Aside Menu-->
    <div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
        <!--begin::Menu-->
        <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true">

            <div class="menu-item">
                <a class="menu-link {{menu_item_is_active("home",request()->segment(1))?'active':''}}" href="{{route('home')}}">
                    <span class="menu-icon">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                        <span class="svg-icon svg-icon-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
                                <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
                                <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
                                <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </span>
                    <span class="menu-title">الرئيسية</span>
                </a>
            </div>

            <div class="menu-item">
                <a class="menu-link {{menu_item_is_active("courses",request()->segment(2))?'active':''}}" href="{{route('admin.courses.index')}}">
                    <span class="menu-icon">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                        <span class="svg-icon svg-icon-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
                                <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
                                <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
                                <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </span>
                    <span class="menu-title">الدورات التدريبية</span>
                </a>
            </div>
           
            {{-- <div data-kt-menu-trigger="click" class="menu-item {{menu_item_is_active("stakeholders.index,internals.index,externals.index,timetables.index",request()->segment(1))?'here show':''}} menu-accordion">
                <span class="menu-link">
                    <span class="menu-icon">
                        <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                        <span class="menu-icon">
                            <i class="bi bi-layers fs-3"></i>
                        </span>
                        <!--end::Svg Icon-->
                    </span>
                    <span class="menu-title">تحليل البيئة</span>
                    <span class="menu-arrow"></span>
                </span>
                <div class="menu-sub menu-sub-accordion menu-active-bg" style="" kt-hidden-height="273">
                    <div class="menu-item">
                        <a class="menu-link {{menu_item_is_active("stakeholders.index",request()->segment(1))?'active':''}}" href="{{route('stakeholders.index')}}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">أصحاب العلاقة</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link {{menu_item_is_active("internals.index",request()->segment(1))?'active':''}}" href="{{route('internals.index')}}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">تحليل البيئة الداخلية</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link {{menu_item_is_active("externals.index",request()->segment(1))?'active':''}}" href="{{route('externals.index')}}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">تحليل البيئة الخارجية</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link {{menu_item_is_active("timetables.index",request()->segment(1))?'active':''}}" href="{{route('timetables.index')}}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">الجدول الزمني</span>
                        </a>
                    </div>
                    
                </div>
            </div>
           --}}



           
           
         
           
            
            
            
           
        </div>
        <!--end::Menu-->
    </div>
    <!--end::Aside Menu-->
</div>
<!--end::Aside menu-->