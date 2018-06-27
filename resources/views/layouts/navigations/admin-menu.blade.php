@role('Admin')
<li class="treeview">
    <a href="#">
        <i class="fa fa-eercast"></i>
        <span>Admin</span>
        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
        <li>
            <a href="{{URL::to('/users')}}">
            <i class="fa fa-user"></i>users</a>
        </li>
        <li><a href="{{URL::to('/roles')}}"><i class="fa fa-snowflake-o"></i>roles</a></li>
    </ul>
</li>
@endrole