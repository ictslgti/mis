<?php
include_once("../config.php");
if(isset($_POST['course'])){
    $id = $_POST['course'];
    echo '<option value="null"  selected disabled>--Select Module--</option>';
    $sql = "SELECT * FROM `module`  WHERE `course_id` = '$id'";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
        echo '<option  value="'.$row["module_id"].'" required>'.$row["module_name"].'</option>';
        }
    }else{
        echo '<option value="null"   selected disabled>-- No Courses --</option>';
    }

}

// if(isset($_POST['module'])){
//     $id = $_POST['module'];
//     $sql = "SELECT * FROM `module`  WHERE `module.course_id` = `course.course_id`";
//     $result = mysqli_query($con, $sql);
//     if (mysqli_num_rows($result) > 0) {
//         while($row = mysqli_fetch_assoc($result)) {
//         echo '<option  value="'.$row["module_id"].'" required>'.$row["module_name"].'</option>';
//         }
//     }else{
//         echo '<option value="null"   selected disabled>-- No Module --</option>';
//     }

// }



?>