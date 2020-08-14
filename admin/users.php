<?php include("includes/header.php"); ?>
<?php include("includes/content-top.php"); ?>
<?php include("includes/sidebar.php"); ?>

<?php
$users = User::find_all ();
?>
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="d-flex align-items-baseline flex-wrap mt-3">
                        <h2 class="mr-4 mb-0">Users</h2>
                        <div class="d-flex align-items-baseline mt-2 mt-sm-0">
                            <i class="fas fa-home mr-1 text-muted"></i>
                            <i class="fas fa-chevron-right fa-xs mr-1 text-muted"></i>
                            <p class="mb-0 mr-1">Users</p>
                            <i class="fas fa-chevron-right fa-xs mr-1 text-muted"></i>
                            <p class="mb-0">All users</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title">All users</p>
                            <div class="table-responsive">
                                <table id="status-report-listing" class="table">
                                    <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Username</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Role</th>
                                        <th>Title</th>
                                        <th>Show</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    foreach ($users as $user){
                                        echo '<tr>';
                                            $image = Image::find_by_id($user->image_id);
                                        echo '<td><img src="../img/' . $image->name . '"></td>';
                                        echo '<td>' . $user->username . '</td>';
                                        echo '<td>' . $user->first_name . '</td>';
                                        echo '<td>' . $user->last_name . '</td>';

                                        $role = Role::find_by_id ($user->role_id);
                                        echo '<td>' . $role->role . '</td>';
                                        echo '<td>' . $user->title . '</td>';
                                        ?>
                                         <td><a href="show_user.php?id=<?php echo $user->id; ?>" class="btn btn-danger rounded-0">show user</a></td>
                                         <?php
                                        echo '</tr>';
                                     }
                                    ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
<?php include("includes/footer.php"); ?>