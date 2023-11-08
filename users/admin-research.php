<?php include 'header.php'; ?>

            <!--== BODY INNER CONTAINER ==-->
            <div class="sb2-2">
                <!--== breadcrumbs ==-->
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Our Partners</a>
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
                                    <h4>Our Partners</h4>
                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Images</th>
                                                    <th>Project Name</th>
                                                    <th>Description</th>
                                                   <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                                    <?php $research = $dbh->query("SELECT * FROM research ");
                                                        while ($rx = $research->fetch(PDO::FETCH_OBJ)) { ?>
                                                            <tr>
                                                            <td><img src="<?=$rx->img; ?>" style="width: 80px;"></td>
                                                            <td><?=$rx->project ; ?></a></td>
                                                            <td><?=$rx->description ; ?></a></td>
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