<?php include("includes/header.php"); ?>
<?php include("includes/content-top.php"); ?>
<?php include("includes/sidebar.php"); ?>

<?php




if(empty($_GET['id'])){
    redirect('services.php');
}

    $service = Service::find_by_id($_GET['id']);
    if (isset($_POST['submit'])) {

        if ($service) {
            $service->name = $_POST['name'];
            $service->icon = $_POST['icon'];
            $service->about = $_POST['about'];
            $service->update();
    
            redirect('services.php');
        }
    }



?>
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="d-flex align-items-baseline flex-wrap mt-3">
                    <h2 class="mr-4 mb-0">Edit service</h2>
                    <div class="d-flex align-items-baseline mt-2 mt-sm-0">
                        <i class="fas fa-home mr-1 text-muted"></i>
                        <i class="fas fa-chevron-right fa-xs mr-1 text-muted"></i>
                        <p class="mb-0 mr-1">Services</p>
                        <i class="fas fa-chevron-right fa-xs mr-1 text-muted"></i>
                        <p class="mb-0">Edit service</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title">Edit service</p>
                        <form action="edit_service.php?id=<?php echo $service->id; ?>" method="post" enctype="">
                        <h3>Id</h3>
                            <p><?php echo $service->id; ?></p>
                            <h3>Name:</h3>
                            <input type="text" name="name" value="<?php echo $service->name; ?>">
                            <h3>Icon: (classes of fontawesome)</h3>
                            <input type="text" name="icon" value="<?php echo $service->icon; ?>">
                            <h3>About</h3>
                            <textarea name="about" id="mytextarea" cols="30" rows="10"><?php echo $service->about; ?></textarea>
                            <input type="submit" value="submit" name="submit" class="btn btn-primary">
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <?php include("includes/footer.php"); ?>