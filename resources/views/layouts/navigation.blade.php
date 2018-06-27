<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ asset('images/avatar.png')}}" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>{{Auth::user()->name}}</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a><br>
                    <small>{{Auth::user()->email}}</small>
    
                </div>
            </div>
            <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                      <input type="text" name="q" class="form-control" placeholder="Search...">
                      <span class="input-group-btn">
                            <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                              <i class="fa fa-search"></i>
                            </button>
                          </span>
                    </div>
                  </form>
            <ul class="sidebar-menu" data-widget="tree" style="">
                <li>
                        <a href="{{URL::to('/home')}}">
                            <i class="fa fa-ravelry"></i> <span>Dashboard</span>
                        </a>
                </li>    

                {{-- /*
                    Include additaional menu here
                */ --}}
               @include('layouts.navigations.admin-menu')

            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>    
    <div class="control-sidebar-bg"></div>
