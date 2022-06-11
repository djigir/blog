<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="{{ route('personal.main.index') }}" class="brand-link">
        <img src="{{ asset('dist/img/admin-logo.png') }}" alt="admin-logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Edica AdminPanel</span>
    </a>

    <div class="user-panel mt-3 pb-3 mb-3 d-flex justify-content-center">
        <div class="info">
            <span class="brand-text font-weight-light" style="color: white">Пользователь: <b>{{ auth()->user()->name }}</b></span>
        </div>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
        <ul class="pt-3 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->

            <li class="nav-item">
                <a href="{{ route('post.index') }}" class="nav-link">
                    <i class="nav-icon fa-solid fa-house"></i>
                    <p>
                        На сайт
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('personal.liked.index') }}" class="nav-link">
                    <i class="nav-icon fa-solid fa-thumbs-up"></i>
                    <p>
                        Понравившиеся посты
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('personal.comment.index') }}" class="nav-link">
                    <i class="nav-icon fa-solid fa-comments"></i>
                    <p>
                        Коментарии
                    </p>
                </a>
            </li>


        </ul>
    </div>
    <!-- /.sidebar -->
</aside>
