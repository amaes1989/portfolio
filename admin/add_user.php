<?php include("includes/header.php"); ?>
<?php include("includes/content-top.php"); ?>
<?php include("includes/sidebar.php"); ?>

<?php


$user = new User;

if (isset($_POST['submit'])) {

    if ($user) {
        $user->username = $_POST['username'];
        $user->first_name = $_POST['first_name'];
        $user->last_name = $_POST['last_name'];
        $user->password = $_POST['password'];
        $user->email = $_POST['email'];
        $user->telephone = $_POST['telephone'];
        $user->about = $_POST['about'];
        $user->create();
        //role en image nog opslaan

        redirect('users.php');
    }
}
?>
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="d-flex align-items-baseline flex-wrap mt-3">
                    <h2 class="mr-4 mb-0">Add user</h2>
                    <div class="d-flex align-items-baseline mt-2 mt-sm-0">
                        <i class="fas fa-home mr-1 text-muted"></i>
                        <i class="fas fa-chevron-right fa-xs mr-1 text-muted"></i>
                        <p class="mb-0 mr-1">Users</p>
                        <i class="fas fa-chevron-right fa-xs mr-1 text-muted"></i>
                        <p class="mb-0">Add user</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title">Add User</p>
                        <form action="add_user.php" method="post" enctype="">
                            <h3>Username</h3>
                            <input type="text" name="username" >
                            <h3>Password</h3>
                            <input type="password" name="password" >
                            <h3>First name</h3>
                            <input type="text" name="first_name" >
                            <h3>Last name</h3>
                            <input type="text" name="last_name" >                            
                            <h3>E-mail</h3>
                            <input type="email" name="email">
                            <h3>Telephone</h3>
                            <input type="text" name="telephone" >
                            <h3>About</h3>
                            <textarea name="about" id="mytextarea" cols="30" rows="10"></textarea>
                            <input type="submit" value="submit" name="submit" class="btn btn-primary">
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <?php include("includes/footer.php"); ?>