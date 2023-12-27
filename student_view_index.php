<?php
	require_once 'admin_dbcon.php';
	session_start();
    $student_id=base64_decode($_GET['student_id']);
    
    if($student_id){
        $_SESSION['student_id']=$student_id;
        header('location:admin_dashbord.php?page=profile_view');
    }
?>