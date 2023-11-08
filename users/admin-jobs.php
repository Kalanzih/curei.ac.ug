<?php include 'header.php'; ?>

            <!--== BODY INNER CONTAINER ==-->
            <div class="sb2-2">
                <!--== breadcrumbs ==-->
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Jobs</a>
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
                                    <h4>Home Page Jobs</h4>
                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <td>Job Image</td>
                                                    <td>Job Title</td>
                                                    <td>Details and Requirements</td>
                                                    <td>Location</td>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php $job= $dbh->query("SELECT * FROM jobs ");
                                                        while ($rx = $job->fetch(PDO::FETCH_OBJ)) { ?>
                                                            <tr>
                                                            <td><img src="<?=$rx->img; ?>" style="width: 80px;"></td>
                                                            <td><?=$rx->jname ; ?></a></td>
                                                            <td><?=$rx->detail ; ?></a></td>
                                                            <td><?=$rx->location ; ?></a></td>
                                                            <td><a href="#" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this record?')" style= " background: #29419a; calor:white;"> Delete </a></td>
                                                            </tr>
                                                    <?php } ?>
                                               
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