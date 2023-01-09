<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a  class="nav-link {{ Request::is('/admin') ? 'active' : '' }}"  href="/admin" aria-current="page">
              <span data-feather="home" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('admin/posts*') ? 'active' : '' }}"  href="/admin/posts">
              <span data-feather="file" class="align-text-bottom"></span>
              My Post
            </a>
          </li>
        </ul>
      </div>
    </nav>