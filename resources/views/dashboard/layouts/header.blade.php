<header class="navbar sticky-top bg-dark flex-md-nowrap p-0 shadow" style="height: 4rem" data-bs-theme="dark">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" style="height: 4rem; padding-top: 2vh;" href="{{ route('home') }}">Balya's Blog</a>

    <ul class="navbar-nav flex-row d-md-flex">
        <li class="nav-item text-nowrap d-md-none">
            <button class="nav-link px-3 text-white" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
                aria-label="Toggle navigation">
                <svg class="bi">
                    <use xlink:href="#list" /></svg>
            </button>
        </li>
        <li class="nav-item text-nowrap">
            <button class="nav-link px-3 text-white" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSearch" aria-controls="navbarSearch" aria-expanded="true"
                aria-label="Toggle search">
                <i class="bi-search"></i>
            </button>
        </li>
    </ul>


    <div id="navbarSearch" class="navbar-search w-100 collapse">
        <input class="form-control w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
    </div>
</header>
