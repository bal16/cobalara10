<nav class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
    <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu"
        aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel">Company name</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-3 pt-lg-3 overflow-y-auto">
            <ul class="nav nav-underline flex-column mb-auto ms-3 pe-5">
                {{-- style="height: 82vh" --}}
                <li class="nav-item">
                    <a class="text-body-secondary nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard') ? 'active' : '' }}"
                        aria-current="page" href="/dashboard">
                        <svg class="bi">
                            <use xlink:href="#house-fill" />
                        </svg>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 text-body-secondary {{ Request::is('dashboard/posts*') ? 'active' : '' }}"
                        href="/dashboard/posts">
                        <svg class="bi">
                            <use xlink:href="#file-earmark-text" />
                        </svg>
                        My Posts
                    </a>
                </li>
            </ul>
            @can('admin')
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Administrator</span>
                </h6>
                <ul class="nav nav-underline flex-column mb-auto ms-3 pe-5">
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center gap-2 text-body-secondary {{ Request::is('dashboard/categories*') ? 'active' : '' }}"
                            href="/dashboard/categories">
                            <i class="bi bi-columns-gap my-2 mt-1"></i>
                            Post Categories
                        </a>
                    </li>
                </ul>
            @endcan


            <hr class="my-3">

            <ul class="nav flex-column mb-3">
                <li class="nav-item">
                    {{-- <a class="nav-link text-body-secondary d-flex align-items-center gap-2" href="#">
                        <svg class="bi">
                            <use xlink:href="#gear-wide-connected" /></svg>
                        Settings
                    </a>
                </li> --}}
                <li class="nav-item">
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="nav-link text-body-secondary d-flex align-items-center gap-2">
                            <svg class="bi">
                                <use xlink:href="#log-out" />
                            </svg>
                            Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
