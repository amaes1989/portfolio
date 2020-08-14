<?php include("includes/header.php"); ?>
<?php include("includes/content-top.php"); ?>
<?php include("includes/sidebar.php"); ?>

<?php
if(empty($_GET['id'])){
    redirect ('users.php');
}

$user = User::find_by_id ($_GET['id']);
?>
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="d-flex align-items-baseline flex-wrap mt-3">
                        <h2 class="mr-4 mb-0">Show user</h2>
                        <div class="d-flex align-items-baseline mt-2 mt-sm-0">
                            <i class="fas fa-home mr-1 text-muted"></i>
                            <i class="fas fa-chevron-right fa-xs mr-1 text-muted"></i>
                            <p class="mb-0 mr-1">Users</p>
                            <i class="fas fa-chevron-right fa-xs mr-1 text-muted"></i>
                            <p class="mb-0">Show user</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title">Show User</p>

                            <h3>Id</h3>
                            <p><?php echo $user->id; ?></p>
                            <h3>Image</h3>
                            <?php $image = Image::find_by_id ($user->image_id); ?>
                            <img src="../img/<?php echo $image->name; ?>" alt="<?php echo $image->alt; ?>" width="150px" height="auto">
                            <p><?php echo $image->name; ?></p>
                            <h3>Username</h3>
                            <p><?php echo $user->username; ?></p>
                            <h3>Password</h3>
                            <p><?php echo $user->password; ?></p>
                            <h3>First name</h3>
                            <p><?php echo $user->first_name; ?></p>
                            <h3>Last name</h3>
                            <p><?php echo $user->last_name; ?></p>
                            <h3>Role</h3>
                            <?php $role = Role::find_by_id ($user->role_id); ?>
                            <p><?php echo $role->role; ?></p>
                            <h3>Title</h3>
                            <p><?php echo $user->title; ?></p>
                            <h3>E-mail</h3>
                            <p><?php echo $user->email; ?></p>
                            <h3>Telephone</h3>
                            <p><?php echo $user->telephone; ?></p>
                            <h3>About</h3>
                            <p><?php echo $user->about; ?></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
<?php include("includes/footer.php"); ?>