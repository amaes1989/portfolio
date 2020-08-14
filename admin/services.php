<?php include("includes/header.php"); ?>
<?php include("includes/content-top.php"); ?>
<?php include("includes/sidebar.php"); ?>

<?php
$services = Service::find_all ();
?>
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="d-flex align-items-baseline flex-wrap mt-3">
                        <h2 class="mr-4 mb-0">Services</h2>
                        <div class="d-flex align-items-baseline mt-2 mt-sm-0">
                            <i class="fas fa-home mr-1 text-muted"></i>
                            <i class="fas fa-chevron-right fa-xs mr-1 text-muted"></i>
                            <p class="mb-0 mr-1">Services</p>
                            <i class="fas fa-chevron-right fa-xs mr-1 text-muted"></i>
                            <p class="mb-0">All services</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title">All services</p>
                            <div class="table-responsive">
                                <table id="status-report-listing" class="table">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Icon</th>
                                        <th>Show</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($services as $service): ?>
                                        <tr>
                                        <td><?php echo $service->id; ?></td>
                                       <td><?php echo $service->name; ?></td>
                                       <td><i class="<?php echo $service->icon; ?>"></i></td>
                                         <td><a href="show_service.php?id=<?php echo $service->id; ?>" class="btn btn-danger rounded-0">show service</a></td>
                                         
                                        </tr>
                                    <?php endforeach; ?>

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