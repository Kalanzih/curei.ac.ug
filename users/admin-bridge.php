<?php include 'header.php';?>

            <!--== BODY INNER CONTAINER ==-->
            <div class="sb2-2">
                <!--== breadcrumbs ==-->
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="admin"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Dashboard</a>
                        </li>
                        <li class="page-back"><a href="index.html"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
                        </li>
                    </ul>
                </div>

                <!--== User Details ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Bridge Courses Details</h4>
                                    <p>All about courses, program structure, fees, best course lists (ranking), syllabus, teaching techniques and other details.</p>
                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Image</th>
                                                    <th>Course Name</th>
													<th>Department</th>
                                                    <th>Durration</th>
													<th>Description</th>
                                                    <th>Requirements</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <!--`cor_id`, `img`, `course_name`, `department`, `durration`, `description`, `requirments`-->
                                                <?php $bridge = $dbh->query("SELECT * FROM bridge ");
                                                        while ($rx = $bridge->fetch(PDO::FETCH_OBJ)) { ?>
                                                            <tr>
                                                           <td><img src="<?=$rx->img; ?>" style="width: 80px;"></td>
                                                           <td><?=$rx->course_name; ?></a></td>
                                                            <td><?=$rx->department; ?></a></td>
                                                            <td><?=$rx->durration; ?></a></td>
                                                            <td><?=$rx->description; ?></a></td>
                                                            <td><?=$rx->requirments; ?></a></td>
                                                            <td><a href="#" class="btn btn-primary btn-sm" onclick="return confirm('Do you want to delete this record?')" style= " background: #29419a; calor:white;"> Delete </a></td>
                                                            </tr>
                                                    <?php } ?>
                                                </tr>
                                             
                                            </tbody>
                                        </table>
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