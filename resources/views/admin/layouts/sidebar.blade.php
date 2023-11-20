<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
    <!-- Sidebar users panel -->
    <div class="user-panel">
        <div class="pull-left image">
            <img src="{{asset('admins/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
            <p>{{ucfirst(auth()->user()->name)}}</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
  <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
     <li class="active treeview">
              <li class=""><a href="{{route('customers.index')}}"><i class="fa fa-circle-o"></i> Customers</a></li>

    </li>
    <li class="active treeview">
              <li   onclick="event.preventDefault();
              document.getElementById('logout-form').submit();" class=""><a href=""><i class="fa fa-circle-o"></i> Logout</a></li>


       <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
           @csrf
       </form>
    </li>
  </ul>
</section>
<!-- /.sidebar -->
