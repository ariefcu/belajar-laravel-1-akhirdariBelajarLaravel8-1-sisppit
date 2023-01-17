<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <div class="position-sticky pt-3 sidebar-sticky">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
          <span data-feather="home"></span>
          Dashboard
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
          <span data-feather="file-text"></span>
          My Posts
        </a>
      </li>
    </ul>

    @can('admin')
      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
        <span>DATA SANTRI :</span>
      </h6>
      <ul class="nav flex-column">
        {{-- <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}" href="/dashboard/categories">
            <span data-feather="grid"></span>
            Post Categories
          </a>
        </li> --}}
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/santris*') ? 'active' : '' }}" href="/dashboard/rekapsantri">
            <span data-feather="codepen"></span>
            Rekap Santri
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/santris*') ? 'active' : '' }}" href="/dashboard/santris">
            <span data-feather="slack"></span>
            Semua Santri
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/santris*') ? 'active' : '' }}" href="/dashboard/santrima">
            <span data-feather="codesandbox"></span>
            Santri MA
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/santris*') ? 'active' : '' }}" href="/dashboard/santrimts">
            <span data-feather="life-buoy"></span>
            Santri MTs
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/santris*') ? 'active' : '' }}" href="/dashboard/santrimi">
            <span data-feather="feather"></span>
            Santri MI
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/santris*') ? 'active' : '' }}" href="/dashboard/santrira">
            <span data-feather="figma"></span>
            Santri RA
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/santris*') ? 'active' : '' }}" href="/dashboard/santriyatim">
            <span data-feather="aperture"></span>
            Santri Yatim
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/santris*') ? 'active' : '' }}" href="/dashboard/santriasrama">
            <span data-feather="chrome"></span>
            Santri Asrama
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/santris*') ? 'active' : '' }}" href="/dashboard/santriagk">
            <span data-feather="command"></span>
            Santri AGK
          </a>
        </li>
      </ul>
    @endcan
  </div>
</nav>