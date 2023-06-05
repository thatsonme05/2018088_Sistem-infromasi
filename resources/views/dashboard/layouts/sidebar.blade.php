<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard')? 'active': ''}}" aria-current ="page" href="/dashboard">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/cats')? 'active': ''}}" href="/dashboard/cats">
              <span data-feather="file" class="align-text-bottom"></span>
              Cats
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link{{ Request::is('dashboard/orders')? 'active': ''}}" href="/dashboard/orders">
              <span data-feather="file" class="align-text-bottom"></span>
              Orders
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link{{ Request::is('dashboard/transactions')? 'active': ''}}" href="/dashboard/transactions">
              <span data-feather="file" class="align-text-bottom"></span>
              Transaction
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link{{ Request::is('dashboard/iventory')? 'active': ''}}" href="/dashboard/inventory">
              <span data-feather="file" class="align-text-bottom"></span>
              Inventory
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link{{ Request::is('dashboard/history')? 'active': ''}}" href="/dashboard/history">
              <span data-feather="file" class="align-text-bottom"></span>
              History Transactions
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="layers" class="align-text-bottom"></span>
              Reports
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="layers" class="align-text-bottom"></span>
              Settings
            </a>
          </li>
        </ul>
      </div>
    </nav>