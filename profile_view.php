<?php 
require_once 'admin_dbcon.php';
$student_id  =  $_SESSION['student_id'];  
$student_id  = mysqli_query($admin_dbcon, "SELECT * FROM student_admission WHERE `id` ='$student_id'");
$student_admin_data= mysqli_fetch_assoc($student_id);
if(isset($_POST['update_submit'])){
    $student_name = $_POST['student_name'];
	$father_name = $_POST['father_name'];
	$mother_name = $_POST['mother_name'];
	$dob = $_POST['dob'];
	$religion = $_POST['religion'];
	$gender = $_POST['gender'];
    $job_title = $_POST['job_title'];
	$blood_group = $_POST['blood_group'];
	$course_type = $_POST['course_type'];
	$nid_birth_certificate = $_POST['nid_birth_certificate'];


    $student_update=mysqli_query($admin_dbcon,"UPDATE admission_form SET student_name`='$student_name',father_name`='$father_name',`mother_name`='$mother_name',`dob`='$dob',`religion`='$religion',`gender`='$gender',`job_title`='$job_title',`blood_group`='$blood_group',`nid_birth_certificate`='$nid_birth_certificate',`course_type`='$course_type' WHERE `id`='$student_id'");

    if($student_update){
        echo "<script>
          alert('Your Data successfully updated!');
      window.location.href='admin_dashboard.php?page=profile_view'; 
        </script>";
    }else{
        echo "<script>
        alert('Your Data updated failed!');
     window.location.href='admin_index.php?page=profile_view'; 
      </script>";
    }
}


?>
<div class="main_div p-3">
<div class="container-fluid" style="padding-left:0;position:relative;">
<section class="section-content">
	<div class="row d-flex">
				<div class="col-sm-12 col-md-12 col-lg-4 col-xl-3 col-xxl-2">
				<?php require_once ('student_profile_navbar.php');?>	
				</div>
				<div class="col-sm-12 col-md-12 col-lg-8 col-xl-9 col-xxl-10"> 
					<div class="student_profile">
						<h1 style="color:#65BDB6;"><i class="fa-solid fa-user px-2" style="font-size:35px"></i>Student Personal Info<small> Statistics Overview</small></h1>
						<nav style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb">
						<ol style="background-color:#f5f5f5;" class="breadcrumb  px-2 pt-2 py-2">
							<li class="breadcrumb-item"><a style="font-size:18px;color:#65BDB6;" href="admin_index.php?page=admin_dashboard " class="text-decoration-none"><i class="fa-solid fa-gauge px-2" style="font-size:18px;color:#65BDB6;"></i>Dashboard</a></li>
							<li class="breadcrumb-item"><a style="font-size:18px;color:#65BDB6;" href="" class="text-decoration-none"><i class="fa-solid fa-user px-2" style="font-size:18px;color:#65BDB6;"></i>Personal Information</a></li>
						</ol>
						</nav>
			        </div>
<div class="row">
<div class="personal_info col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
<table class="table table-bordered">
<tr>
<th>Student id</th>
<td><?=$student_id_data['id']?></td>
</tr>
<tr>
<th>Student Name</th>
<td><?=$student_admin_data['student_name']?></td>
</tr>
<tr>
<th>Father's Name</th>
<td><?=$student_admin_data['father_name']?></td>
</tr>
<tr>
<th>Mother's Name</th>
<td><?=$student_admin_data['mother_name']?></td>
</tr>
<tr>
<th>Date Of Birth</th>
<td><?=$student_admin_data['dob']?></td>
</tr>

<tr>
<th>Blood Group</th>
<td><?=$student_admin_data['blood_group']?></td>
</tr>
<tr>
	<th>Gender</th>
	<td><?=$student_admin_data['gender'];?></td>
</tr>
<tr>
	<th>Religion</th>
	<td><?=$student_admin_data['religion'];?></td>
</tr>
<tr>
	<th>Nid/Birth Certificate</th>
	<td><?=$student_admin_data['nid_birth_certificate'];?></td>
</tr>
<tr>
	<th>Job Title</th>
	<td><?=$student_admin_data['job_title'];?></td>
</tr>
<tr>
	<th>Course Type</th>
	<td><?=$student_admin_data['course_type'];?></td>
</tr>
<tr>
<th>Admission Date</th>
<td><?=$student_admin_data['admission_time']?></td>
</tr>
<tr>
<th>Admission Form</th>
<td><a target="_blank" href="index.html?u_id=<?php echo base64_encode($student_admin_data['id']);?>">form print</a></td>
</tr>
</table>
<button data-bs-toggle="modal" data-bs-target="#teacherunique<?=$student_admin_data['id']?>" data-bs-whatever="@mdo" class="btn btn-primary" ><i class="fa-solid fa-pencil px-1"></i>Edit Info</button>
<!-- modal section -->
<div id="teacherunique<?=$student_admin_data['id']?>" class="modal fade" role="dialog">
							  <div class="modal-dialog" style="max-width:700px;">
								<div class="modal-content bg-light">
								  <div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Update Personal Information</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									  </div>
									  <div class="modal-body">
									  
										<form method="POST" action=""  enctype="multipart/form-data">
										<div class="row">
											<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
										  <div class="mb-3">
											<label for="student_name" class="form-label">Student Name</label>
											<input type="text" class="form-control"  id="student_name" name="student_name" value="<?php echo $student_admin_data['student_name']?>">
										  </div>
										  <div class="mb-3">
											<label for="father_name" class="form-label">Father Name</label>
											<input type="text" class="form-control"  id="father_name" name="father_name" value="<?php echo $student_admin_data['father_name']?>">
										  </div>
										  <div class="mb-3">
											<label for="mother_name" class="form-label">Mother Name</label>
											<input type="text" class="form-control"  id="mother_name" name="mother_name" value="<?php echo $student_admin_data['mother_name']?>">
										  </div>
                                          <div class="mb-3">
											<label for="dob" class="form-label">Date Of Birth</label>
											<input type="date" class="form-control"  id="dob" name="dob" value="<?php echo $student_admin_data['dob']?>">
										  </div>
										  <div class="mb-3">
											<label for="religion" class="form-label">Religion</label>
											<select class="form-select" name="religion">
											<option>Select Religion</option>											
											<option <?php echo $student_admin_data['religion']=="Islam"? 'selected="Islam"':'';?> value="Islam">Islam</option>											
											<option <?php echo $student_admin_data['religion']=="Hindu"? 'selected="Hindu"':'';?> value="Hindu">Hindu</option>											
											<option <?php echo $student_admin_data['religion']=="Buddh"? 'selected="Buddh"':'';?> value="Buddh">Buddh</option>
											<option <?php echo $student_admin_data['religion']=="Christan"? 'selected="Christan"':'';?> value="Christan">Christan</option>																					
											</select>
										  </div>
	




											</div>
											<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
											<div class="mb-3">
											<label for="gender" class="form-label">Gender</label>
											<select class="form-select" name="gender">											
											<option >Select Gender</option>											
											<option <?php echo $student_admin_data['gender']=="Male"? 'selected="Male"':'';?> value="Male">Male</option>											
											<option <?php echo $student_admin_data['gender']=="Female"? 'selected="Female"':'';?> value="Female">Female</option>
											<option <?php echo $student_admin_data['gender']=="Other"? 'selected="Other"':'';?> value="Other">Other</option>																					
											</select>
										  </div>
											<div class="mb-3">
											<label for="job_title" class="form-label">Job Title</label>
											<select class="form-select" name="job_title">											
											<option >Select Job Title</option>											
											<option <?php echo $student_admin_data['job_title']=="Student"? 'selected="Student"':'';?> value="Student">Student</option>											
											<option <?php echo $student_admin_data['job_title']=="Government Empolyee"? 'selected="Government Empolyee"':'';?> value="Government Empolyee">Government Empolyee</option>
											<option <?php echo $student_admin_data['job_title']=="Private Empolyee"? 'selected="Private Empolyee"':'';?> value="Private Empolyee">Private Empolyee</option>		
											<option <?php echo $student_admin_data['job_title']=="Other"? 'selected="Other"':'';?> value="Other">Other</option>																					
											</select>
										  </div>
											<div class="mb-3">
											<label for="blood_group" class="form-label">Blood Group</label>
											<select class="form-select" name="blood_group">
											<option <?php echo $student_admin_data['blood_group']=="Null"? 'selected="Null"':'';?> value="Null">Unknown</option>											
											<option <?php echo $student_admin_data['blood_group']=="A+"? 'selected="A+"':'';?> value="A+">A+</option>											
											<option <?php echo $student_admin_data['blood_group']=="A-"? 'selected="A-"':'';?> value="A-">A-</option>											
											<option <?php echo $student_admin_data['blood_group']=="AB+"? 'selected="AB+"':'';?> value="AB+">AB+</option>
											<option <?php echo $student_admin_data['blood_group']=="AB-"? 'selected="AB-"':'';?> value="AB-">AB-</option>											
											<option <?php echo $student_admin_data['blood_group']=="B+"? 'selected="B+"':'';?> value="B+">B+</option>											
											<option <?php echo $student_admin_data['blood_group']=="B-"? 'selected="B-"':'';?> value="B-">B-</option>											
											<option <?php echo $student_admin_data['blood_group']=="O+"? 'selected="O+"':'';?> value="O+">O+</option>											
											<option <?php echo $student_admin_data['blood_group']=="O-"? 'selected="O-"':'';?> value="O-">O-</option>											
											</select>
										  </div>
											<div class="mb-3">
											<label for="course_type" class="form-label">Course Type</label>
											<select class="form-select" name="course_type">											
											<option >Course Type</option>											
											<option <?php echo $student_admin_data['course_type']=="Online"? 'selected="Online"':'';?> value="Online">Online</option>											
											<option <?php echo $student_admin_data['course_type']=="Offline"? 'selected="Offline"':'';?> value="Offline">Offline</option>																				
											</select>
										  </div>
                                          <div class="mb-3">
											<label for="nid_birth_certificate" class="form-label">Nid / Birth Certificate</label>
											<input type="text" class="form-control"  id="nid_birth_certificate" name="nid_birth_certificate" value="<?php echo $student_admin_data['nid_birth_certificate']?>">
										  </div>


											</div>  
										</div>
									  </div>
									  <div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
										<button type="submit" class="btn btn-primary" name="update_submit">Update</button>
									  </div>
									  </form>
									</div>
								  </div>
</div>									
<!-- modal section -->
</div>
<div class="personal_info col-sm-12 col-md-12 col-lg-6 col-xxl-6">
<?php 
	if(isset($_POST['photo_update'])){
		$student_photo=$_FILES['photo']['name'];
		  $photo_tmp=$_FILES['photo']['tmp_name'];
		$photo_update = mysqli_query($admin_dbcon,"UPDATE `student_admission` SET `photo`='`photo', WHERE `id`='$student_id'");
		if($photo_update){
		  move_uploaded_file($photo_tmp,'img/'.$student_photo);
		  echo "<script>
		  alert('Your photo successfully updated!');
		  window.location.href='admin_dashboard.php?page=student_admin_index';
		</script>";
		$student_photo=false;
		}
		else{
		  echo "<script>
		  alert('Photo update failed!');
		  window.location.href='admin_index.php?page=student_admin_index';
		</script>";
		}
	  }
	?>
<form action="" method="POST" enctype="multipart/form-data">
    <img class="img-thumbnail" style="width:220px;height:220px;" src="img/<?=$student_admin_data['photo'];?>" alt=""><br>
    <label for="photo" class="form-label">Profile Picture</label>
    <input type="file" class="form-control" name="photo" id="photo" required style="width:30%;" >
    <br>
    <button type="submit" name="photo_update"  class="btn btn-primary">Change Profile</button>
</form>
</div>
</div>
</div>
</div>
</section>
</div>
</div>