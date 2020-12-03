<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../abp/index.html">
        <div>
            <span style="font-size: 35px; font-family: 'Montserrat', sans-serif; letter-spacing: 5px;">ABP</span>
        </div>
    </a>

    <hr class="sidebar-divider my-0">

    <li class="nav-item">
        <a class="nav-link" href="dashboard.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link" href="profile.php">
            <i class="fas fa-id-badge"></i>
            <span>Your Profile</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseRoom1" aria-expanded="true" aria-controls="collapseRoom">
            <i class="fas fa-handshake"></i>
            <span>Inventory Management</span></a>
        <div id="collapseRoom1" class="collapse" aria-labelledby="headingRoom" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="productlist.php">Product List</a>
                <a class="collapse-item" href="addproduct.php">Add Product</a>
                <a class="collapse-item" href="updateproduct.php">Update Product</a>
            </div>
        </div>
    </li>


    <li class="nav-item">
        <a class="nav-link" href="sales.php">
            <i class="fas fa-id-badge"></i>
            <span>Sales</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseRoom2" aria-expanded="true" aria-controls="collapseRoom">
            <i class="fas fa-handshake"></i>
            <span>Meeting Room</span></a>
        <div id="collapseRoom2" class="collapse" aria-labelledby="headingRoom" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="room1.php">Decision Accelerator</a>
                <a class="collapse-item" href="room2.php">Ideation Zone</a>
                <a class="collapse-item" href="room3.php">Creative Arena</a>
                <a class="collapse-item" href="room4.php">Social Sphere</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="employee.php">
            <i class="fas fa-user-friends"></i>
            <span>Employees</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="invoice.php">
            <i class="fas fa-chart-bar"></i>
            <span>Invoice</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="management.php">
            <i class="fas fa-tasks"></i>
            <span>Management</span>
        </a>
    </li>

    <hr class="sidebar-divider">
</ul>
<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown no-arrow">

                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small" style="font-weight: bold; font-size: 20px; text-transform: uppercase;  "> <?php echo ($username); ?></span>
                        <img class="img-profile rounded-circle" style="height: 3rem; width: 3rem;" src="<?php echo $photo; ?>">
                    </a>

                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>