<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  @if(setting('logo'))
  <a href="{{url('/')}}" class="brand-link">
    <img src="{{asset('images/'.setting('logo'))}}" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
  </a>
  @endif

  <!-- Sidebar -->
  <div class="sidebar">



    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="#" class="nav-link ">
            <p>
              شهادات شكر (للمعلمات)
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <!-- <a href="{{route('certificates.index')}}" class="nav-link ">
                <i class="far fa-circle nav-icon"></i>
                <p>الكل</p>
              </a> -->
            </li>
            <li class="nav-item">
              <a href="{{route('certificates.create')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>اضافة جديد</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link ">
            <p>
              شهادات شكر(للطلاب)
            </p>
          </a>
          <ul class="nav nav-treeview">
            <!-- <li class="nav-item">
              <a href="{{route('certificate2s.index')}}" class="nav-link ">
                <i class="far fa-circle nav-icon"></i>
                <p>الكل</p>
              </a>
            </li> -->
            <li class="nav-item">
              <a href="{{route('certificate2s.create')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>اضافة جديد</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link ">
            <p>
              (تصميم البرواز الذهبي)
            </p>
          </a>
          <ul class="nav nav-treeview">
            <!-- <li class="nav-item">
              <a href="{{route('golden-certificates.index')}}" class="nav-link ">
                <i class="far fa-circle nav-icon"></i>
                <p>الكل</p>
              </a>
            </li> -->
            <li class="nav-item">
              <a href="{{route('golden-certificates.create')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>اضافة جديد</p>
              </a>
            </li>
          </ul>
        </li>
        <!-- <li class="nav-item">
          <a href="{{route('settings.index')}}" class="nav-link">
            <i class="nav-icon fas fa-sliders-h"></i>
            <p>
              الاعدادات
            </p>
          </a>
        </li> -->
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>