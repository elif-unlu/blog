<div class="dashboard-header">
    <nav class="navbar navbar-expand-lg bg-white fixed-top">
        <a class="navbar-brand" href="index.php" style="justify-content:flex-start;">Blog | Admin Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto navbar-right-top">
                <li class="nav-item dropdown connection">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"> <i class="fas fa-fw fa-th"></i> </a>
                    <ul class="dropdown-menu dropdown-menu-right connection-dropdown">
                        <li>
                            <div class="conntection-footer">Quick Actions</div>
                        </li>
                        <li class="connection-list">
                            <div class="row mr-0 ml-0">
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 quick-item">
                                    <a href="web-settings.php"><i class="fas fa-cog"></i>
                                        <span>Website Settings</span></a>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 quick-item">
                                    <a href="custom-text.php"><i class="fas fa-thumbtack"></i>
                                        <span>Custom Texts</span></a>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 quick-item">
                                    <a href="http://localhost:8888/blog/" target="_blank"><i class="fas fa-link"></i>
                                        <span>Go to Website</span></a>
                                </div>
                            </div>
                        </li>    
                    </ul>
                </li>
                <li class="nav-item dropdown nav-user">
                    <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"><img src="assets/images/avatar-1.jpg" alt=""
                            class="user-avatar-md rounded-circle"></a>
                    <div class="dropdown-menu dropdown-menu-right nav-user-dropdown"
                        aria-labelledby="navbarDropdownMenuLink2">
                        <div class="nav-user-info">
                            <h5 class="mb-0 text-white nav-user-name"><?=$_SESSION['fullname']?></h5>
                        </div>
                        <a class="dropdown-item" href="admin-add.php"><i class="fas fa-user-plus mr-2"></i>Add New
                            Admin</a>
                        <a class="dropdown-item" href="admin-list.php"><i class="fas fa-users mr-2"></i>All Admins</a>
                        <a class="dropdown-item" href="logout.php"><i class="fas fa-power-off mr-2"></i>Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>

<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light" style="justify-content:flex-end;">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <li class="nav-divider"> Menu</li>
                    <li class="nav-item ">
                        <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false"
                            data-target="#submenu-1" aria-controls="submenu-1">
                            <i class="fa fa-fw fa-pencil-alt"></i>Blog
                            <span class="badge badge-success">6</span>
                        </a>
                        <div id="submenu-1" class="collapse submenu">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="blog-add.php">Blog Add</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="blog-list.php">Blog List</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>