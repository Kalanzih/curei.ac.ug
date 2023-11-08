<?php 
$errors = array();
foreach ($errors as $error) {
	echo $errors;
}

if (isset($_POST['submit_upload_add_barner_btn'])) {
    //``sl_id`, `heading`, `statement`, `img`
    trim(extract($_POST));
    if (isset($_FILES['picture']) && $_FILES['picture']['error'] === UPLOAD_ERR_OK) {
    $filename = trim($_FILES['picture']['name']);
    $chk = rand(1111111111111,9999999999999);
    $ext = strrchr($filename, ".");
    $img = $chk.$ext;
    $target_img = "../uploads/".$img;
    $url = SITE_URL.'/uploads/'.$img;
    $result = dbCreate("INSERT INTO slider VALUES(NULL,'$heading', '$statement', '$url')");
    if (move_uploaded_file($_FILES['picture']['tmp_name'], $target_img)) {
        $msg = "Image uploaded Successfully";
		
    } else {
        $msg = "There was a problem uploading the image";
	}
	if($result == 1){
        $_SESSION['status'] = '<div class=" card card-body alert alert-success text-center">
       Slider uplaoded successfully.....</div>';
        $_SESSION['loader'] = '<center><div class="spinner-border text-center text-success"></div></center>';
        header("refresh:2; url=".HOME_URL.'/users/admin-slider');
    }else{
            echo "<script>
            alert('Error in uploading banner');
            window.location = '".HOME_URL."/users/add-sliders';
            </script>";
    }
    // The rest of your code...
} else {
    $msg = "Error: File upload failed or the 'picture' field is not set.";
    echo "<script>alert('$msg');</script>";
    // You can also redirect the user or perform other actions here.
}

        
 }elseif (isset($_POST['submit_upload_add_course_btn'])) {
    //``cor_id`, `img`, `course_name`, `department`, `durration`, `description`, `requirments`
    trim(extract($_POST));
    if (isset($_FILES['img']) && $_FILES['img']['error'] === UPLOAD_ERR_OK) {
    $filename = trim($_FILES['img']['name']);
    $chk = rand(1111111111111,9999999999999);
    $ext = strrchr($filename, ".");
    $img = $chk.$ext;
    $target_img = "../uploads/".$img;
    $url = SITE_URL.'/uploads/'.$img;
    $result = dbCreate("INSERT INTO courses VALUES(NULL,'$url', '$course_name', '$department', '$durration', '$description', '$requirments')");
    if (move_uploaded_file($_FILES['img']['tmp_name'], $target_img)) {
        $msg = "Image uploaded Successfully";
		
    } else {
        $msg = "There was a problem uploading the image";
	}
	if($result == 1){
        $_SESSION['status'] = '<div class=" card card-body alert alert-success text-center">
       Course uplaoded successfully.....</div>';
        $_SESSION['loader'] = '<center><div class="spinner-border text-center text-success"></div></center>';
        header("refresh:2; url=".HOME_URL.'/users/admin-master');
    }else{
            echo "<script>
            alert('Error in uploading course');
            window.location = '".HOME_URL."/users/add-master';
            </script>";
    }
    // The rest of your code...
} else {
    $msg = "Error: File upload failed or the 'picture' field is not set.";
    echo "<script>alert('$msg');</script>";
    // You can also redirect the user or perform other actions here.
}

        
 }elseif (isset($_POST['submit_upload_add_management_btn'])) {
    //``mg_id`, `img`, `name`, `possition`
    trim(extract($_POST));
    if (isset($_FILES['img']) && $_FILES['img']['error'] === UPLOAD_ERR_OK) {
    $filename = trim($_FILES['img']['name']);
    $chk = rand(1111111111111,9999999999999);
    $ext = strrchr($filename, ".");
    $img = $chk.$ext;
    $target_img = "../uploads/".$img;
    $url = SITE_URL.'/uploads/'.$img;
    $result = dbCreate("INSERT INTO management VALUES(NULL,'$url', '$name', '$possition')");
    if (move_uploaded_file($_FILES['img']['tmp_name'], $target_img)) {
        $msg = "Image uploaded Successfully";
		
    } else {
        $msg = "There was a problem uploading the image";
	}
	if($result == 1){
        $_SESSION['status'] = '<div class=" card card-body alert alert-success text-center">
       Member uplaoded successfully.....</div>';
        $_SESSION['loader'] = '<center><div class="spinner-border text-center text-success"></div></center>';
        header("refresh:2; url=".HOME_URL.'/users/admin-management');
    }else{
            echo "<script>
            alert('Error in uploading course');
            window.location = '".HOME_URL."/users/add-management';
            </script>";
    }
    // The rest of your code...
} else {
    $msg = "Error: File upload failed or the 'picture' field is not set.";
    echo "<script>alert('$msg');</script>";
    // You can also redirect the user or perform other actions here.
}

        
 }elseif (isset($_POST['submit_upload_add_governance_btn'])) {
    //``mg_id`, `img`, `name`, `possition`
    trim(extract($_POST));
    if (isset($_FILES['img']) && $_FILES['img']['error'] === UPLOAD_ERR_OK) {
    $filename = trim($_FILES['img']['name']);
    $chk = rand(1111111111111,9999999999999);
    $ext = strrchr($filename, ".");
    $img = $chk.$ext;
    $target_img = "../uploads/".$img;
    $url = SITE_URL.'/uploads/'.$img;
    $result = dbCreate("INSERT INTO governance VALUES(NULL,'$url', '$name', '$possition')");
    if (move_uploaded_file($_FILES['img']['tmp_name'], $target_img)) {
        $msg = "Image uploaded Successfully";
		
    } else {
        $msg = "There was a problem uploading the image";
	}
	if($result == 1){
        $_SESSION['status'] = '<div class=" card card-body alert alert-success text-center">
       Member uplaoded successfully.....</div>';
        $_SESSION['loader'] = '<center><div class="spinner-border text-center text-success"></div></center>';
        header("refresh:2; url=".HOME_URL.'/users/admin-governance');
    }else{
            echo "<script>
            alert('Error in uploading course');
            window.location = '".HOME_URL."/users/add-governance';
            </script>";
    }
    // The rest of your code...
} else {
    $msg = "Error: File upload failed or the 'picture' field is not set.";
    echo "<script>alert('$msg');</script>";
    // You can also redirect the user or perform other actions here.
}

        
 }elseif (isset($_POST['submit_upload_add_board_btn'])) {
    //``mg_id`, `img`, `name`, `possition`
    trim(extract($_POST));
    if (isset($_FILES['img']) && $_FILES['img']['error'] === UPLOAD_ERR_OK) {
    $filename = trim($_FILES['img']['name']);
    $chk = rand(1111111111111,9999999999999);
    $ext = strrchr($filename, ".");
    $img = $chk.$ext;
    $target_img = "../uploads/".$img;
    $url = SITE_URL.'/uploads/'.$img;
    $result = dbCreate("INSERT INTO boardmember VALUES(NULL,'$url', '$name', '$possition')");
    if (move_uploaded_file($_FILES['img']['tmp_name'], $target_img)) {
        $msg = "Image uploaded Successfully";
		
    } else {
        $msg = "There was a problem uploading the image";
	}
	if($result == 1){
        $_SESSION['status'] = '<div class=" card card-body alert alert-success text-center">
       Member uplaoded successfully.....</div>';
        $_SESSION['loader'] = '<center><div class="spinner-border text-center text-success"></div></center>';
        header("refresh:2; url=".HOME_URL.'/users/admin-boardmember');
    }else{
            echo "<script>
            alert('Error in uploading course');
            window.location = '".HOME_URL."/users/add-board';
            </script>";
    }
    // The rest of your code...
} else {
    $msg = "Error: File upload failed or the 'picture' field is not set.";
    echo "<script>alert('$msg');</script>";
    // You can also redirect the user or perform other actions here.
}

        
 }elseif (isset($_POST['submit_upload_add_blogs_btn'])) {
    //``mg_id`, `img`, `header`, `body`
    trim(extract($_POST));
    if (isset($_FILES['img']) && $_FILES['img']['error'] === UPLOAD_ERR_OK) {
    $filename = trim($_FILES['img']['name']);
    $chk = rand(1111111111111,9999999999999);
    $ext = strrchr($filename, ".");
    $img = $chk.$ext;
    $target_img = "../uploads/".$img;
    $url = SITE_URL.'/uploads/'.$img;
    $result = dbCreate("INSERT INTO blog VALUES(NULL,'$header', '$url', '$body')");
    if (move_uploaded_file($_FILES['img']['tmp_name'], $target_img)) {
        $msg = "Image uploaded Successfully";
		
    } else {
        $msg = "There was a problem uploading the image";
	}
	if($result == 1){
        $_SESSION['status'] = '<div class=" card card-body alert alert-success text-center">
       Story uplaoded successfully.....</div>';
        $_SESSION['loader'] = '<center><div class="spinner-border text-center text-success"></div></center>';
        header("refresh:2; url=".HOME_URL.'/users/admin-blogs');
    }else{
            echo "<script>
            alert('Error in uploading Story');
            window.location = '".HOME_URL."/users/add-blog;
            </script>";
    }
    // The rest of your code...
} else {
    $msg = "Error: File upload failed or the 'picture' field is not set.";
    echo "<script>alert('$msg');</script>";
    // You can also redirect the user or perform other actions here.
}

        
 }elseif (isset($_POST['submit_upload_add_gallery_btn'])) {
    //``gal_id`, `img`, `event`, `breif`
    trim(extract($_POST));
    if (isset($_FILES['img']) && $_FILES['img']['error'] === UPLOAD_ERR_OK) {
    $filename = trim($_FILES['img']['name']);
    $chk = rand(1111111111111,9999999999999);
    $ext = strrchr($filename, ".");
    $img = $chk.$ext;
    $target_img = "../uploads/".$img;
    $url = SITE_URL.'/uploads/'.$img;
    $result = dbCreate("INSERT INTO gallery VALUES(NULL, '$url',  '$event', '$breif')");
    if (move_uploaded_file($_FILES['img']['tmp_name'], $target_img)) {
        $msg = "Image uploaded Successfully";
		
    } else {
        $msg = "There was a problem uploading the image";
	}
	if($result == 1){
        $_SESSION['status'] = '<div class=" card card-body alert alert-success text-center">
       Story uplaoded successfully.....</div>';
        $_SESSION['loader'] = '<center><div class="spinner-border text-center text-success"></div></center>';
        header("refresh:2; url=".HOME_URL.'/users/admin-gallery');
    }else{
            echo "<script>
            alert('Error in uploading Story');
            window.location = '".HOME_URL."/users/add-gallery;
            </script>";
    }
    // The rest of your code...
} else {
    $msg = "Error: File upload failed or the 'picture' field is not set.";
    echo "<script>alert('$msg');</script>";
    // You can also redirect the user or perform other actions here.
}

        
 }elseif (isset($_POST['submit_upload_add_partners_btn'])) {
    //``gal_id`, `img`, `event`, `breif`
    trim(extract($_POST));
    if (isset($_FILES['img']) && $_FILES['img']['error'] === UPLOAD_ERR_OK) {
    $filename = trim($_FILES['img']['name']);
    $chk = rand(1111111111111,9999999999999);
    $ext = strrchr($filename, ".");
    $img = $chk.$ext;
    $target_img = "../uploads/".$img;
    $url = SITE_URL.'/uploads/'.$img;
    $result = dbCreate("INSERT INTO partners VALUES(NULL, '$header',  '$url')");
    if (move_uploaded_file($_FILES['img']['tmp_name'], $target_img)) {
        $msg = "Image uploaded Successfully";
		
    } else {
        $msg = "There was a problem uploading the image";
	}
	if($result == 1){
        $_SESSION['status'] = '<div class=" card card-body alert alert-success text-center">
       Story uplaoded successfully.....</div>';
        $_SESSION['loader'] = '<center><div class="spinner-border text-center text-success"></div></center>';
        header("refresh:2; url=".HOME_URL.'/users/admin-partners');
    }else{
            echo "<script>
            alert('Error in uploading Story');
            window.location = '".HOME_URL."/users/add-partners;
            </script>";
    }
    // The rest of your code...
} else {
    $msg = "Error: File upload failed or the 'picture' field is not set.";
    echo "<script>alert('$msg');</script>";
    // You can also redirect the user or perform other actions here.
}

        
 }elseif (isset($_POST['submit_upload_add_research_btn'])) {
    //``gal_id`, `img`, `project`, `description`
    trim(extract($_POST));
    if (isset($_FILES['img']) && $_FILES['img']['error'] === UPLOAD_ERR_OK) {
    $filename = trim($_FILES['img']['name']);
    $chk = rand(1111111111111,9999999999999);
    $ext = strrchr($filename, ".");
    $img = $chk.$ext;
    $target_img = "../uploads/".$img;
    $url = SITE_URL.'/uploads/'.$img;
    $result = dbCreate("INSERT INTO research VALUES(NULL, '$url',  '$project', '$description')");
    if (move_uploaded_file($_FILES['img']['tmp_name'], $target_img)) {
        $msg = "Image uploaded Successfully";
		
    } else {
        $msg = "There was a problem uploading the image";
	}
	if($result == 1){
        $_SESSION['status'] = '<div class=" card card-body alert alert-success text-center">
       Project uplaoded successfully.....</div>';
        $_SESSION['loader'] = '<center><div class="spinner-border text-center text-success"></div></center>';
        header("refresh:2; url=".HOME_URL.'/users/admin-research');
    }else{
            echo "<script>
            alert('Error in uploading Story');
            window.location = '".HOME_URL."/users/add-research;
            </script>";
    }
    // The rest of your code...
} else {
    $msg = "Error: File upload failed or the 'picture' field is not set.";
    echo "<script>alert('$msg');</script>";
    // You can also redirect the user or perform other actions here.
}

        
 }elseif (isset($_POST['submit_upload_add_events_btn'])) {
    //`ev_id`, `evname`, `evdate`, `evtime`, `img`, `evtime`
    trim(extract($_POST));
    if (isset($_FILES['img']) && $_FILES['img']['error'] === UPLOAD_ERR_OK) {
    $filename = trim($_FILES['img']['name']);
    $chk = rand(1111111111111,9999999999999);
    $ext = strrchr($filename, ".");
    $img = $chk.$ext;
    $target_img = "../uploads/".$img;
    $url = SITE_URL.'/uploads/'.$img;
    $result = dbCreate("INSERT INTO  events VALUES(NULL, '$evname', '$evdate', '$evtime', '$url',  '$description')");
    if (move_uploaded_file($_FILES['img']['tmp_name'], $target_img)) {
        $msg = "Image uploaded Successfully";
		
    } else {
        $msg = "There was a problem uploading the image";
	}
	if($result == 1){
        $_SESSION['status'] = '<div class=" card card-body alert alert-success text-center">
       Project uplaoded successfully.....</div>';
        $_SESSION['loader'] = '<center><div class="spinner-border text-center text-success"></div></center>';
        header("refresh:2; url=".HOME_URL.'/users/admin-events');
    }else{
            echo "<script>
            alert('Error in uploading Story');
            window.location = '".HOME_URL."/users/add-events;
            </script>";
    }
    // The rest of your code...
} else {
    $msg = "Error: File upload failed or the 'picture' field is not set.";
    echo "<script>alert('$msg');</script>";
    // You can also redirect the user or perform other actions here.
}

        
 }elseif (isset($_POST['submit_upload_add_job_btn'])) {
	// `job_id`, `jname`, `detail`, `location`
	trim(extract($_POST));
	$check = $dbh->query("SELECT * FROM  jobs WHERE jname='$jname'")->fetch();
      if(!$check){
	  	$insert = dbCreate("INSERT INTO  jobs ( `job_id`, `jname`, `detail`, `location`) VALUES (NULL, '$jname', '$detail', '$location')");
	  	if ($insert) {
			$_SESSION['loader'] = '<center><div class="spinner-border text-success"></div></center>';
			$_SESSION['status'] = '<div class="card card-body alert alert-success text-center">Job Added Successfully!</div>';
			header("refresh:3; url=".SITE_URL.'/users/admin-jobs');
	  	}else{
			$_SESSION['loader'] = '<center><div class="spinner-border text-danger"></div></center>';
			$_SESSION['status'] = '<div class="card card-body alert alert-danger text-center">Failed to add!</div>';
			header("refresh:2; url=".SITE_URL.'/users/add-jobs');
	  	}
	  }else{
			$_SESSION['loader'] = '<center><div class="spinner-border text-danger"></div></center>';
			$_SESSION['status'] = '<div class="card card-body alert alert-danger text-center">Branch Already exists!</div>';
			header("refresh:3; url=".SITE_URL.'/users/badd-jobs');
		  }
}elseif (isset($_POST['submit_upload_add_jobs_btn'])) {
    //``job_id`, `img`, `jname`, `detail`, `location`
    trim(extract($_POST));
    if (isset($_FILES['img']) && $_FILES['img']['error'] === UPLOAD_ERR_OK) {
    $filename = trim($_FILES['img']['name']);
    $chk = rand(1111111111111,9999999999999);
    $ext = strrchr($filename, ".");
    $img = $chk.$ext;
    $target_img = "../uploads/".$img;
    $url = SITE_URL.'/uploads/'.$img;
    $result = dbCreate("INSERT INTO  jobs VALUES(NULL, '$url', '$jname', '$detail', '$location')");
    if (move_uploaded_file($_FILES['img']['tmp_name'], $target_img)) {
        $msg = "Image uploaded Successfully";
		
    } else {
        $msg = "There was a problem uploading the image";
	}
	if($result == 1){
        $_SESSION['status'] = '<div class=" card card-body alert alert-success text-center">
       Job uplaoded successfully.....</div>';
        $_SESSION['loader'] = '<center><div class="spinner-border text-center text-success"></div></center>';
        header("refresh:2; url=".HOME_URL.'/users/admin-jobs');
    }else{
            echo "<script>
            alert('Error in uploading Story');
            window.location = '".HOME_URL."/users/add-jobs;
            </script>";
    }
    // The rest of your code...
} else {
    $msg = "Error: File upload failed or the 'picture' field is not set.";
    echo "<script>alert('$msg');</script>";
    // You can also redirect the user or perform other actions here.
}

        
 }elseif (isset($_POST['submit_upload_add_bachelors_btn'])) {
    //``cor_id`, `img`, `course_name`, `department`, `durration`, `description`, `requirments`
    trim(extract($_POST));
    if (isset($_FILES['img']) && $_FILES['img']['error'] === UPLOAD_ERR_OK) {
    $filename = trim($_FILES['img']['name']);
    $chk = rand(1111111111111,9999999999999);
    $ext = strrchr($filename, ".");
    $img = $chk.$ext;
    $target_img = "../uploads/".$img;
    $url = SITE_URL.'/uploads/'.$img;
    $result = dbCreate("INSERT INTO bachelors VALUES(NULL,'$url', '$course_name', '$department', '$durration', '$description', '$requirments')");
    if (move_uploaded_file($_FILES['img']['tmp_name'], $target_img)) {
        $msg = "Image uploaded Successfully";
        
    } else {
        $msg = "There was a problem uploading the image";
    }
    if($result == 1){
        $_SESSION['status'] = '<div class=" card card-body alert alert-success text-center">
       Course uplaoded successfully.....</div>';
        $_SESSION['loader'] = '<center><div class="spinner-border text-center text-success"></div></center>';
        header("refresh:2; url=".HOME_URL.'/users/admin-bachelor');
    }else{
            echo "<script>
            alert('Error in uploading course');
            window.location = '".HOME_URL."/users/add-bachelor';
            </script>";
    }
    // The rest of your code...
} else {
    $msg = "Error: File upload failed or the 'picture' field is not set.";
    echo "<script>alert('$msg');</script>";
    // You can also redirect the user or perform other actions here.
}

        
 }elseif (isset($_POST['submit_upload_add_diplomas_btn'])) {
    //``cor_id`, `img`, `course_name`, `department`, `durration`, `description`, `requirments`
    trim(extract($_POST));
    if (isset($_FILES['img']) && $_FILES['img']['error'] === UPLOAD_ERR_OK) {
    $filename = trim($_FILES['img']['name']);
    $chk = rand(1111111111111,9999999999999);
    $ext = strrchr($filename, ".");
    $img = $chk.$ext;
    $target_img = "../uploads/".$img;
    $url = SITE_URL.'/uploads/'.$img;
    $result = dbCreate("INSERT INTO diploma VALUES(NULL,'$url', '$course_name', '$department', '$durration', '$description', '$requirments')");
    if (move_uploaded_file($_FILES['img']['tmp_name'], $target_img)) {
        $msg = "Image uploaded Successfully";
        
    } else {
        $msg = "There was a problem uploading the image";
    }
    if($result == 1){
        $_SESSION['status'] = '<div class=" card card-body alert alert-success text-center">
       Course uplaoded successfully.....</div>';
        $_SESSION['loader'] = '<center><div class="spinner-border text-center text-success"></div></center>';
        header("refresh:2; url=".HOME_URL.'/users/admin-diploma');
    }else{
            echo "<script>
            alert('Error in uploading course');
            window.location = '".HOME_URL."/users/add-diploma';
            </script>";
    }
    // The rest of your code...
} else {
    $msg = "Error: File upload failed or the 'picture' field is not set.";
    echo "<script>alert('$msg');</script>";
    // You can also redirect the user or perform other actions here.
}

        
 }elseif (isset($_POST['submit_upload_add_brigde_btn'])) {
    //``cor_id`, `img`, `course_name`, `department`, `durration`, `description`, `requirments`
    trim(extract($_POST));
    if (isset($_FILES['img']) && $_FILES['img']['error'] === UPLOAD_ERR_OK) {
    $filename = trim($_FILES['img']['name']);
    $chk = rand(1111111111111,9999999999999);
    $ext = strrchr($filename, ".");
    $img = $chk.$ext;
    $target_img = "../uploads/".$img;
    $url = SITE_URL.'/uploads/'.$img;
    $result = dbCreate("INSERT INTO bridge VALUES(NULL,'$url', '$course_name', '$department', '$durration', '$description', '$requirments')");
    if (move_uploaded_file($_FILES['img']['tmp_name'], $target_img)) {
        $msg = "Image uploaded Successfully";
        
    } else {
        $msg = "There was a problem uploading the image";
    }
    if($result == 1){
        $_SESSION['status'] = '<div class=" card card-body alert alert-success text-center">
       Course uplaoded successfully.....</div>';
        $_SESSION['loader'] = '<center><div class="spinner-border text-center text-success"></div></center>';
        header("refresh:2; url=".HOME_URL.'/users/admin-bridge');
    }else{
            echo "<script>
            alert('Error in uploading course');
            window.location = '".HOME_URL."/users/add-bridge';
            </script>";
    }
    // The rest of your code...
} else {
    $msg = "Error: File upload failed or the 'picture' field is not set.";
    echo "<script>alert('$msg');</script>";
    // You can also redirect the user or perform other actions here.
}

        
 }