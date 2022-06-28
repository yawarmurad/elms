<div class="sidebar-menu">
    <div class="sidebar-header">
        <div class="">
            <div class="clearfix">
                <div class="user-profile pull-right">
                    <img class="avatar user-thumb" src="../assets/images/admin.png" alt="avatar">
                    <h4 class="user-name dropdown-toggle" data-toggle="dropdown">
                        <?php
                        $alogin = $_SESSION['alogin'];
                        $sql = "SELECT fullname  from admin where UserName = '$alogin'";
                        $query = $dbh->prepare($sql);
                        $query->execute();
                        $results = $query->fetch(PDO::FETCH_OBJ);
                        echo ucwords($results->fullname); ?>
                    </h4>

                </div>
            </div>
        </div>
    </div>
    <nav>
        <ul class="metismenu" id="menu">
            <li class="<?php if ($page == 'dashboard') {
                            echo 'active';
                        } ?>"><a href="dashboard.php"><i class="ti-dashboard"></i> <span>Dashboard</span></a></li>

            <li class="<?php if ($page == 'employee') {
                            echo 'active';
                        } ?>"><a href="employees.php"><i class="ti-id-badge"></i> <span>Employee</span></a></li>

            <li class="<?php if ($page == 'department') {
                            echo 'active';
                        } ?>"><a href="department.php"><i class="fa fa-th-large"></i> <span>Department</span></a></li>

            <li class="<?php if ($page == 'leave') {
                            echo 'active';
                        } ?>"><a href="leave-section.php"><i class="fa fa-sign-out"></i> <span>Leave Types</span></a></li>

            <li class="<?php if ($page == 'manage-leave') {
                            echo 'active';
                        } ?>">
                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-briefcase"></i><span>Manage Leave</span></a>
                <ul class="collapse">
                    <li><a href="pending-history.php"><i class="fa fa-spinner"></i> Pending</a></li>
                    <li><a href="approved-history.php"><i class="fa fa-check"></i> Approved</a></li>
                    <li><a href="declined-history.php"><i class="fa fa-times-circle"></i> Declined</a></li>
                    <li><a href="leave-history.php"><i class="fa fa-history"></i> All Leaves</a></li>
                </ul>
            </li>
            <li class="<?php if ($page == 'manage-admin') {
                            echo 'active';
                        } ?>"><a href="manage-admin.php"><i class="fa fa-lock"></i> <span>Manage Admin</span></a></li>
            <li>
                <a class="dropdown-item" href="logout.php">Log Out</a>
            </li>

        </ul>
    </nav>
</div>