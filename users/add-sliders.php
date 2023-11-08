<?php include 'header.php'; ?>


            <!--== BODY INNER CONTAINER ==-->
            <div class="sb2-2">
                <!--== breadcrumbs ==-->
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="Admin"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Add New Slider</a>
                        </li>
                        <li class="page-back"><a href="Admin"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
                        </li>
                    </ul>
                </div>

                <!--== User Details ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp admin-form">
				<div class="sb2-2-add-blog sb2-2-1">
                    <h2>Add New Slider</h2>
                

                    <div class="tab-content">
                        <div id="home" class="tab-pane fade active in">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Course Details</h4>
                                    </div>
                                 <div class="modal-body">
                                    <form action="" method="POST" enctype="multipart/form-data">
                                        <div class="row">
                                        <?php 
                                                if (isset($_SESSION['status'])) {
                                                    echo $_SESSION['status'];
                                                    unset($_SESSION['status']);
                                        } ?>
                                            <div class="modal-body">
                                                <div class="form-group">
                                                <label>Header: </label>
                                                    <input type="text" class="form-control" name="heading" placeholder="Enter Heading. " required>
                                                </div>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group">
                                                <label>Statement: </label>
                                                    <input type="text" class="form-control" name="statement" placeholder="Enter Statement. " required>
                                                </div>
                                            </div>
                                              <div class="form-group">
                                                <label class="text-black font-w500">Image</label>
                                                <input class="form-control" type="file" name="picture" />

                                            </div>

                                                                                            
                                            <div class="row">
                                            <div class="form-group">
                                        <button class="btn btn-primary" type="submit"  name="submit_upload_add_barner_btn" style="width:50%;">UPLOAD</button>
                                    </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
<?php include 'footer.php'; ?>