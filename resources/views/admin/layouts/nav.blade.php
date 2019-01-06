
  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
@include('admin.layouts.menue')
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{url('design/Adminlte')}}/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{admin()->user()->name}}</p>
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
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

        <li class=" treeview">

          <li> <a href="{{aurl('')}}">
              <i class="fa fa-dashboard"></i> <span>{{trans('admin.dashboard')}}</span>
              <span class="pull-right-container">
            </span>
            </a>

        </li>


          <li> <a href="{{aurl('settings')}}">
                  <i class="fa fa-cogs"></i> <span>Setting</span>
                  <span class="pull-right-container">
            </span>
              </a>
          </li>

                <li class="treeview {{active_menu('admin')[0]}}">
          <a href="#">
            <i class="fa fa-users"></i> <span>{{trans('admin.admin')}}</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu " style="{{active_menu('admin')[1]}}">
            <li class="active"><a href="{{aurl('admin')}}"><i class="fa fa-users"></i>{{trans('admin.admin')}}</a></li>
          </ul>
        </li>


        <li class="treeview {{active_menu('users')[0]}}">
          <a href="#">
            <i class="fa fa-users"></i> <span>Users Accounts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu"  style="{{active_menu('users')[1]}}">
            <li class="active"><a href="{{aurl('users')}}"><i class="fa fa-users"></i>Users Accounts</a></li>
            <li class=""><a href="{{aurl('users')}}?level=user"><i class="fa fa-users"></i>User</a></li>
            <li class=""><a href="{{aurl('users')}}?level=vendor"><i class="fa fa-users"></i>Vendor</a></li>
            <li class=""><a href="{{aurl('users')}}?level=company"><i class="fa fa-users"></i>Company</a></li>
          </ul>
        </li>


          <li class="treeview {{active_menu('countries')[0]}}">
              <a href="#">
                  <i class="fa fa-flag"></i> <span>Countries</span>
                  <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
              </a>
              <ul class="treeview-menu"  style="{{active_menu('countries')[1]}}">
                  <li class=""><a href="{{aurl('countries')}}"><i class="fa fa-flag"></i>Countries</a></li>
                  <li class=""><a href="{{aurl('countries/create')}}"><i class="fa fa-plus"></i>Add Country</a></li>

              </ul>
          </li>


          <li class="treeview {{active_menu('cities')[0]}}">
              <a href="#">
                  <i class="fa fa-flag"></i> <span>Cities</span>
                  <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
              </a>
              <ul class="treeview-menu"  style="{{active_menu('cities')[1]}}">
                  <li class=""><a href="{{aurl('cities')}}"><i class="fa fa-flag"></i>Cities</a></li>
                  <li class=""><a href="{{aurl('cities/create')}}"><i class="fa fa-plus"></i>Add City</a></li>

              </ul>
          </li>

          <li class="treeview {{active_menu('states')[0]}}">
              <a href="#">
                  <i class="fa fa-flag"></i> <span>States</span>
                  <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
              </a>
              <ul class="treeview-menu"  style="{{active_menu('states')[1]}}">
                  <li class=""><a href="{{aurl('states')}}"><i class="fa fa-flag"></i>States</a></li>
                  <li class=""><a href="{{aurl('states/create')}}"><i class="fa fa-plus"></i>Add State</a></li>

              </ul>
          </li>

          <li class="treeview {{active_menu('departments')[0]}}">
              <a href="#">
                  <i class="fa fa-list"></i> <span>Departments</span>
                  <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
              </a>
              <ul class="treeview-menu"  style="{{active_menu('departments')[1]}}">
                  <li class=""><a href="{{aurl('departments')}}"><i class="fa fa-list"></i>Departments</a></li>
                  <li class=""><a href="{{aurl('departments/create')}}"><i class="fa fa-plus"></i>Add Departments</a></li>

              </ul>
          </li>

          <li class="treeview {{active_menu('trademarks')[0]}}">
              <a href="#">
                  <i class="fa fa-cube"></i> <span>TradeMarks</span>
                  <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
              </a>
              <ul class="treeview-menu"  style="{{active_menu('trademarks')[1]}}">
                  <li class=""><a href="{{aurl('trademarks')}}"><i class="fa fa-cube"></i>TradeMarks</a></li>
                  <li class=""><a href="{{aurl('trademarks/create')}}"><i class="fa fa-plus"></i>Add TradeMarks</a></li>

              </ul>
          </li>

          <li class="treeview {{active_menu('manufacts')[0]}}">
              <a href="#">
                  <i class="fa fa-user"></i> <span>Manufacturers</span>
                  <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
              </a>
              <ul class="treeview-menu"  style="{{active_menu('manufacts')[1]}}">
                  <li class=""><a href="{{aurl('manufacts')}}"><i class="fa fa-users"></i>Manufacturers</a></li>
                  <li class=""><a href="{{aurl('manufacts/create')}}"><i class="fa fa-plus"></i>Add Manufacturer</a></li>

              </ul>
          </li>

          <li class="treeview {{active_menu('shippings')[0]}}">
              <a href="#">
                  <i class="fa fa-truck"></i> <span>Shipping Company</span>
                  <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
              </a>
              <ul class="treeview-menu"  style="{{active_menu('shippings')[1]}}">
                  <li class=""><a href="{{aurl('shippings')}}"><i class="fa fa-truck"></i>Shipping Company</a></li>
                  <li class=""><a href="{{aurl('shippings/create')}}"><i class="fa fa-plus"></i>Add Shipping Company</a></li>

              </ul>
          </li>



          <li class="treeview {{active_menu('malls')[0]}}">
              <a href="#">
                  <i class="fa fa-building"></i> <span>Malls</span>
                  <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
              </a>
              <ul class="treeview-menu"  style="{{active_menu('malls')[1]}}">
                  <li class=""><a href="{{aurl('malls')}}"><i class="fa fa-building"></i>Malls</a></li>
                  <li class=""><a href="{{aurl('malls/create')}}"><i class="fa fa-plus"></i>Add Mall</a></li>

              </ul>
          </li>


          <li class="treeview {{active_menu('colors')[0]}}">
              <a href="#">
                  <i class="fa fa-paint-brush"></i> <span>Colors</span>
                  <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
              </a>
              <ul class="treeview-menu"  style="{{active_menu('colors')[1]}}">
                  <li class=""><a href="{{aurl('colors')}}"><i class="fa fa-paint-brush"></i>Colors</a></li>
                  <li class=""><a href="{{aurl('colors/create')}}"><i class="fa fa-plus"></i>Add Colors</a></li>

              </ul>
          </li>

          <li class="treeview {{active_menu('sizes')[0]}}">
              <a href="#">
                  <i class="fa fa-info-circle"></i> <span>Sizes</span>
                  <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
              </a>
              <ul class="treeview-menu"  style="{{active_menu('sizes')[1]}}">
                  <li class=""><a href="{{aurl('sizes')}}"><i class="fa fa-info-circle"></i>Sizes</a></li>
                  <li class=""><a href="{{aurl('sizes/create')}}"><i class="fa fa-plus"></i>Add Size</a></li>

              </ul>
          </li>

          <li class="treeview {{active_menu('weights')[0]}}">
              <a href="#">
                  <i class="fa fa-info-circle"></i> <span>Weights</span>
                  <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
              </a>
              <ul class="treeview-menu"  style="{{active_menu('weights')[1]}}">
                  <li class=""><a href="{{aurl('weights')}}"><i class="fa fa-info-circle"></i>Weights</a></li>
                  <li class=""><a href="{{aurl('weights/create')}}"><i class="fa fa-plus"></i>Add Weights</a></li>

              </ul>
          </li>

          <li class="treeview {{active_menu('products')[0]}}">
              <a href="#">
                  <i class="fa fa-product-hunt"></i> <span>Products</span>
                  <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
              </a>
              <ul class="treeview-menu"  style="{{active_menu('products')[1]}}">
                  <li class=""><a href="{{aurl('products')}}"><i class="fa fa-product-hunt"></i>Products</a></li>
                  <li class=""><a href="{{aurl('products/create')}}"><i class="fa fa-plus"></i>Add Product</a></li>

              </ul>
          </li>

</ul>
    </section>
    <!-- /.sidebar -->
  </aside>
