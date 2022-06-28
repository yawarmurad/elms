<div class="sidebar-menu">
    <div class="sidebar-header">
        <div class="">
            <div class="clearfix">
                <div class="user-profile pull-right">
                    <img class="avatar user-thumb" src="../assets/images/admin.png" alt="avatar">
                    <h4 class="user-name dropdown-toggle" data-toggle="dropdown">
                        <?php
                        $signin = $_SESSION['emplogin'];
                        $sql = "SELECT FirstName, LastName  from tblemployees where EmailId = '$signin'";
                        $query = $dbh->prepare($sql);
                        $query->execute();
                        $results = $query->fetch(PDO::FETCH_OBJ);
                        echo ucwords($results->FirstName . " " . $results->LastName); ?>
                    </h4>
                </div>
            </div>
        </div>
    </div>
    <div class="main-menu">
        <div class="menu-inner">
            <nav>
                <ul class="metismenu" id="menu">

                    <li class="#">
                        <a href="leave.php" aria-expanded="true"><i class="fa fa-plus" aria-hidden="true"></i>
                            <span>Apply Leave
                            </span></a>
                    </li>

                    <li class="#">
                        <a href="leave-history.php" aria-expanded="true"><i class="fa fa-history" aria-hidden="true"></i>
                            <span>Leave History
                            </span></a>
                    </li>
                    <li class="#">
                        <a href="my-profile.php" aria-expanded="true"><i class="fa fa-user" aria-hidden="true"></i>
                            <span>View Profile</span></a>
                        </span></a>
                    </li>
                    <li class="#">
                        <a href="change-password-employee.php" aria-expanded="true"><i class="fa fa-key" aria-hidden="true"></i>
                            <span>Change Password</span></a>
                        </span></a>
                    </li>
                    <li class="#">
                        <a href="logout.php" aria-expanded="true"><i class="fa fa-sign-out" aria-hidden="true"></i>
                            <span>Logout</span></a>
                        </span></a>
                    </li>

                </ul>
            </nav>
        </div>
    </div>
</div>