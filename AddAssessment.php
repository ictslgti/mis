<?php
$title = "Examinations | SLGTI";
 include_once("config.php"); 
 include_once("head.php"); 
 include_once("menu.php"); 
 ?>
<!--END DON'T CHANGE THE ORDER-->

<div class="shadow p-3 mb-5 bg-white rounded">

    <div class="highlight-blue">
        <div class="container">
            <div class="intro">
                <h1 class="display-4 text-center">Asignments Portal</h1>
                <H3 class="display-5 text-center">Add Assessments</H3>
                <p class="text-center">Welcome to examinations portal for lectures or admin. This section to add
                    examinations and assignments/asessments results&nbsp;</p>

            </div>
        </div>
    </div>
</div>

<!-- end header -->

<?php
$course=$assessments=$academic_year= $assessment_date=null;

if (isset($_POST['Add'])) {

    # code...
    if (!empty($_POST['course']))
    // // &&!empty($_POST['assessments'])
    // &&!empty($_POST['academic_year'])
    // &&!empty($_POST['assessment_date']) 
    // {
        # code...
        echo $course=$_POST['course'];
        echo $assessments=$_POST['assessments'];
        echo $academic_year=$_POST['academic_year'];
        echo $assessment_date=$_POST['assessment_date'];

       echo $sql = "INSERT INTO `assessments` (`course_id`,`assessment_type_id`,`academic_year`,`assessment_date`)
        VALUES ('$course','$assessments','$academic_year','$assessment_date')";


if(mysqli_query($con,$sql))
{
  echo '
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>'.$assessments.'</strong> Assessment Type details inserted!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>   
  ';
}
else{
  
  echo '
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>'.$assessments.'</strong> echo "Error".$sql."<br>".mysqli_error($con);
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
  </button>
  </div>
  
  ';
}




    // }
}



?>
<form class="needs-validation" novalidate method="POST" action="#">

    <div class="container">

        <div class="form-row">
            <div class="col-md-3 mb-2">

                <label for="validationCustom02">Course</label>
                <select
                    class="custom-select<?php  if(isset($_POST['Add']) && empty($_POST['course'])){echo ' is-invalid';}if(isset($_POST['Add']) && !empty($_POST['course'])){echo ' is-valid';} ?>"
                    id="course" name="course" onchange="showAssessments(this.value)" required>

                    <option selected>Choose Course...</option>
                    <?php
                  $sql = "SELECT * FROM `assessments_type`";
                  $result = mysqli_query($con, $sql);
                  if (mysqli_num_rows($result) > 0) {
                  while($row = mysqli_fetch_assoc($result)) {
                    echo '<option  value="'.$row["course_id"].'" required>'.$row["course_id"].'</option>';
                  }
                  }else{
                    echo '<option value="null"   selected disabled>-- No Course --</option>';
                  }
                  ?>

                </select>

                <div class="valid-feedback">
                    Looks good!
                </div>

            </div>
            <div class="col-md-3 mb-2">
                <label for="validationCustom02">Assessments</label>
                <select
                    class="custom-select<?php  if(isset($_POST['Add']) && empty($_POST['assessments'])){echo ' is-invalid';}if(isset($_POST['Add']) && !empty($_POST['assessments'])){echo ' is-valid';} ?>"
                    id="assessments" name="assessments">
                    <option selected>Choose...</option>

                </select>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-3 mb-2">
                <label for="validationCustomUsername">Academy Year</label>

                <select
                    class="custom-select<?php  if(isset($_POST['Add']) && empty($_POST['academic_year'])){echo ' is-invalid';}if(isset($_POST['Add']) && !empty($_POST['academic_year'])){echo ' is-valid';} ?>"
                    id="academic_year" name="academic_year">
                    <option selected>Choose...</option>
                    <?php
                  $sql = "SELECT *  FROM `academic`";
                  $result = mysqli_query($con, $sql);
                  if (mysqli_num_rows($result) > 0) {
                  while($row = mysqli_fetch_assoc($result)) {
                    echo '<option  value="'.$row["academic_year"].'" required>'.$row["academic_year"].'</option>';
                  }
                  }else{
                    echo '<option value="null"   selected disabled>-- No Course --</option>';
                  }
                  ?>


                </select>
                <div class="invalid-feedback">
                    Please choose a Academy Year!
                </div>
            </div>

            <div class="col-md-3 mb-2">
                <label for="">Assessment Date</label>
                <input type="date"
                    class="form-control<?php  if(isset($_POST['Add']) && empty($_POST['assessment_date'])){echo ' is-invalid';}if(isset($_POST['Add']) && !empty($_POST['assessment_date'])){echo ' is-valid';} ?>"
                    id="assessment_date" name="assessment_date" value="" placeholder="" required>


            </div>
        </div>

        <div class="row">
            <div class="col-sm">
                
            </div>
            <div class="col-sm">
                
            </div>
            <div class="col-sm">

                <button class="btn btn-success" type="submit" value="Add" name="Add"><i class="fas fa-plus"></i>&nbsp&nbspSave</button>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModalCenter"><i class="fab fa-readme"></i>&nbsp&nbsp
                    View Assessments Types
                </button>

            </div>
        </div>
    </div>
    <br>

</form>
<!--  -->
<div>




    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Assessments Types</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>











</div>












</div>





<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
        'use strict';
        window.addEventListener('load', function () {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function (form) {
                form.addEventListener('submit', function (event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();




    function showAssessments(val) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("assessments").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("POST", "controller/getAssessmentType", true);
        xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlhttp.send("assessmentType=" + val);
    }
</script>












</div>



<!--BLOCK#3 START DON'T CHANGE THE ORDER-->
<?php include_once("footer.php"); ?>