<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header"></li>
        <!-- MENU DASHBOARD -->
        <li class="<?=$active_menu=='dashboard' ? 'active':''; ?>">
          <a href="<?php echo base_url(); ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <!-- MENU SAMPLE -->
        <li class="treeview <?=$active_menu=='form' ? 'active':''; ?>">
          <a href="#">
            <i class="fa fa-laptop"></i> <span>Sample</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu ">
            <li class="<?=$active_sub_menu=='form_general' ? 'active':''; ?>"><a href="<?php echo base_url('sample/form_general'); ?>"><i class="fa fa-circle-o"></i> Form General </a></li>
            <li class="<?=$active_sub_menu=='form_advanced' ? 'active':''; ?>"><a href="<?php echo base_url('sample/form_advanced'); ?>"><i class="fa fa-circle-o"></i> Form Advanced Elements </a></li>
            <li class="<?=$active_sub_menu=='form_editor' ? 'active':''; ?>"><a href="<?php echo base_url('sample/form_editor'); ?>"><i class="fa fa-circle-o"></i> Form Editor </a></li>
          </ul>
        </li>
        <!-- MENU PAGE -->
        <li class="<?=$active_menu=='page' ? 'active':''; ?>">
          <a href="<?php echo base_url('sample/page'); ?>">
            <i class="fa fa-file"></i> <span>Page</span>
          </a>
        </li>
        <!-- MENU MULTI LEVEL -->
        <li class="treeview <?=$active_menu=='multilevel' ? 'active':''; ?>">
          <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?=$active_sub_menu=='menu1' ? 'active':''; ?>"><a href="#"><i class="fa fa-circle-o"></i> Menu 1</a></li>
            <li class="treeview <?=$active_sub_menu=='menu2' ? 'active':''; ?>">
              <a href="#"><i class="fa fa-circle-o"></i> Menu 2
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li class="<?=$active_menu_level=='menu1' ? 'active':''; ?>">
                  <a href="<?php echo base_url('sample/multilevel_menu'); ?>"><i class="fa fa-circle-o"></i> Menu1
                  </a>
                </li>
                <li class="<?=$active_menu_level=='menu2' ? 'active':''; ?>"><a href="#"><i class="fa fa-circle-o"></i> Menu 2</a></li>
              </ul>
            </li>
            <li class="<?=$active_sub_menu=='menu3' ? 'active':''; ?>"><a href="#"><i class="fa fa-circle-o"></i> Menu 3</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>