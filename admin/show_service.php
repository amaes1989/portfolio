<?php include("includes/header.php"); ?>
<?php include("includes/content-top.php"); ?>
<?php include("includes/sidebar.php"); ?>

<?php
if(empty($_GET['id'])){
    redirect ('services.php');
}

$service = Service::find_by_id ($_GET['id']);
?>
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="d-flex align-items-baseline flex-wrap mt-3">
                        <h2 class="mr-4 mb-0">Show service</h2>
                        <div class="d-flex align-items-baseline mt-2 mt-sm-0">
                            <i class="fas fa-home mr-1 text-muted"></i>
                            <i class="fas fa-chevron-right fa-xs mr-1 text-muted"></i>
                            <p class="mb-0 mr-1">service</p>
                            <i class="fas fa-chevron-right fa-xs mr-1 text-muted"></i>
                            <p class="mb-0">Show service</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title">Show service</p>

                            <h3>Id</h3>
                            <p><?php echo $service->id; ?></p>
                            <h3>Name</h3>
                            <p><?php echo $service->name; ?></p>
                            <h3>Icon</h3>
                            <p><i class="<?php echo $service->icon; ?>"></i></p>
                            <h3>about</h3>
                            <p><?php echo $service->about; ?></p>
                            
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
<?php include("includes/footer.php"); ?>