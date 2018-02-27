<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ Gravatar::get(Auth::user()->email) }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ 'Online' }}</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ 'Search' }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">{{ 'Header' }}</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('/admin') }}"><i class='fa fa-dashboard'></i> <span>{{ 'Dashboard' }}</span></a></li>
            <li><a href="#"><i class='fa fa-link'></i> <span>{{ 'Anotherlink' }}</span></a></li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>{{ 'Multilevel' }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">{{ 'Linklevel2' }}</a></li>
                    <li><a href="#">{{ 'Linklevel2' }}</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-line-chart'></i> <span>{{ 'Analytics' }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/overview') }}">{{ 'Overview' }}</a></li>
                    <li><a href="{{ url('/stock') }}">{{ 'Stock' }}</a></li>
                    <li><a href="{{ url('/expense') }}">{{ 'Expense' }}</a></li>
                    <li class="treeview">
                        <a href="#"><span>{{ 'Summary' }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="{{ url('/summary/stock') }}">{{ 'Stock' }}</a></li>
                            <li><a href="{{ url('/summary/expense') }}">{{ 'Executive' }}</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
