<div class="d-flex flex-column flex-shrink-0 p-3 bg-light" id="sidenav">
    <ul class="nav nav-pills flex-column mb-auto">
        <li>
            <a href="{{route('products.index')}}"
               class="nav-link {{request()->route()->getName() === 'products.index' ? 'active' : 'link-dark'}}">
                <span class="mdi mdi-shopping"></span>
                Products
            </a>
        </li>
        <li>
            <a href="{{route('users.index')}}" class="nav-link {{request()->route()->getName() === 'users.index' ? 'active' : 'link-dark'}}">
                <span class="mdi mdi-account-multiple"></span>
                Users
            </a>
        </li>
    </ul>
    <hr>
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle"
           data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong>mdo</strong>
        </a>
        <ul class="dropdown-menu text-small shadow">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
        </ul>
    </div>
</div>
