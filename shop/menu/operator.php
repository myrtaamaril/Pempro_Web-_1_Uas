<?php 


$page='';
$page=isset($_GET['page'])?$_GET['page']:null;


?>


<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

               <li class="nav-item menu-open">
            <a href="index.php?page=dashboard" class="nav-link <?= $page == 'dashboard'?'active':''?>">
            <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
           
              </p>
            </a>
          </li>
               <li class="nav-item menu-open">
            <a href="#" class="nav-link ">
            <i class="nav-icon fas fa-th"></i>
              <p>
              Menu Barang
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="index.php?page=data-barang" class="nav-link <?= $page == 'data-barang'?'active':''?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data barang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=stock-data" class="nav-link <?= $page == 'stock-data'?'active':''?> ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Stock Barang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=transaksi-data" class="nav-link <?= $page == 'transaksi-data'?'active':''?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Transaksi</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-open">
            <a href="logout.php" class="nav-link text-red">
            <i class="nav-icon fas fa-power-off"></i>
              <p>
                Logout
              </p>
            </a>
          </li>

        </ul>
      </nav>