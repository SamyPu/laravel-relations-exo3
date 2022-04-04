<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="{{ route("back.index") }}">Relations-Exercice-3</a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item {{ request()->routeIs("back.index") ? "active" : "" }}">
                    <a href="{{ route("back.index") }}" class="sidebar-link">
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-title">Page</li>
                
                <li class="sidebar-item  has-sub {{ request()->routeIs("equipe.index")||request()->routeIs("equipe.create") ? "active" : "" }}">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-stack"></i>
                        <span>Equipe</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="{{ route("equipe.create") }}">Create Equipe</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="{{ route("equipe.index") }}">All Equipe</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item  has-sub {{ request()->routeIs("joueur.index")||request()->routeIs("joueur.create") ? "active" : "" }}">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-stack"></i>
                        <span>Joueur</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="{{ route("joueur.create") }}">Create Joueur</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="{{ route("joueur.index") }}">All Joueur</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item  has-sub {{ request()->routeIs("photo.index")||request()->routeIs("photo.create") ? "active" : "" }}">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-stack"></i>
                        <span>Photo</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="{{ route("photo.create") }}">Create Photo</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="{{ route("photo.index") }}">All Photo</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item  {{-- has-sub --}} {{ request()->routeIs("role.index") ? "active" : "" }}">
                    <a href="{{ route("role.index") }}" class="sidebar-link">
                        <i class="bi bi-stack"></i>
                        <span>Role</span>
                    </a>
                    {{-- <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="{{ route("role.index") }}">All Role</a>
                        </li>
                    </ul> --}}
                </li>
            </ul>  {{-- anchor_navbar --}}
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
