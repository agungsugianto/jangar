<div class="sidebar">
      <!-- Sidebar user panel (optional) -->
        <div class="image">
         <img src="{{asset ('assetsss/dist/img/we.png')}}" width="160" height="160"  class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <li class="nav-item dropdown"><a href="http://www.instagram.com/zon_frim/" class="d-block">Agung Sugiyanto
          
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li></a></div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>Aksesoris Handphone
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('barang.index')}}" class="nav-link active">
                  <i class="nav-icon fa fa-mobile-phone" style="font-size:36px"></i>
                  <b><p>Barang</p></b>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('kategori.index')}}" class="nav-link active">
                  <i class="fa fa-newspaper-o nav-icon"></i>
                  <b><p>Kategori</p></b>
                </a>
              </li>
            </ul>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>