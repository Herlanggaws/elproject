 <!-- Left side column. contains the logo and sidebar -->
 <aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ URL::asset('assets/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Admin</p>
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
        <a href="#">
          <i class="fa fa-dashboard"></i>
          <span>Dashboard</span> 
        </a>

      </li>
      <li class="treeview">
        <a href="{{URL::to('chain')}}">
          <i class="fa fa-male"></i>
          <span>Owner</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{URL::to('chain')}}"><i class="fa fa-circle-o"></i>List</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="{{URL::to('chain')}}">
          <i class="fa fa-user-plus"></i>
          <span>Chain</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{URL::to('chain')}}"><i class="fa fa-circle-o"></i>List</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="{{URL::to('productCategory')}}">
          <i class="fa fa-archive"></i>
          <span>Product</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{URL::to('product')}}"><i class="fa fa-circle-o"></i> List</a></li>
          <li><a href="{{URL::to('productCategory')}}"><i class="fa fa-circle-o"></i>Categories</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-group"></i>
          <span>Customer</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{URL::to('customer')}}"><i class="fa fa-circle-o"></i> List</a></li>
          <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
          <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
          <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
          <li><a href="pages/UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
          <li><a href="pages/UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-usd"></i>
          <span>Transaction</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
          <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
          <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
          <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
          <li><a href="pages/UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
          <li><a href="pages/UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
        </ul>
      </li>


      
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>