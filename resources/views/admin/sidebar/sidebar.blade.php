<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">

            <li>
                <a class="" href="{{route('admin_overview')}}">
                    <i class="icon_document_alt"></i>
                    <span>{{ trans('admin_sidebar.overview') }}</span>
                </a>
            </li>

            <li>
                <a class="" href="{{route('admin_subjects')}}">
                    <i class="icon_ribbon_alt"></i>
                    <span>{{ trans('admin_sidebar.subjects') }}</span>
                </a>
            </li>

            <li>
                <a class="" href="{{route('admin_courses')}}">
                    <i class="icon_documents"></i>
                    <span>{{ trans('admin_sidebar.courses') }}</span>
                </a>
            </li>

            <li>
                <a class="" href="{{route('admin_questions')}}">
                    <i class="icon_question_alt"></i>
                    <span>{{ trans('admin_sidebar.question') }}</span>
                </a>
            </li>

            <li>
                <a class="" href="{{route('admin_users')}}">
                    <i class="icon_contacts_alt"></i>
                    <span>{{ trans('admin_sidebar.users_list') }}</span>
                </a>
            </li>

        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->