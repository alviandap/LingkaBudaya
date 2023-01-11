<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('admin/posts*') ? 'active' : '' }}"  href="/admin/posts">
              <span data-feather="file" class="align-text-bottom"></span>
              Post
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ Request::is('admin/categories*') ? 'active' : '' }}"  href="/admin/categories">
              <span data-feather="file" class="align-text-bottom"></span>
              Category
            </a>
          </li>
        </ul>
      </div>
    </nav>