<?php
$title = "Department Details | SLGTI";
 include_once("config.php"); 
 include_once("head.php"); 
 include_once("menu.php"); 
 ?>

 <!-- end default code -->

<!-- start my code -->
<form>
            <div class="row ">
            <div class="col-md-12 col-sm-12  form-group  container bg-info">
                <h2  class="pt-2" style="color:white">ADD SUPPLIER</h2>
              </div>
              <div class="w-100"></div>
              <div class="col-md-6 col-sm-12 form-group pl-3 pr-3 pt-2 container">
                      <label class="font-weight-bold" for="">01.SUPPLIER ID</label> <span style="color:red;">*</span></label>
                      <input type="text" class="form-control" id="" aria-describedby="" placeholder="item" required="required">
                      <small id="" class="form-text text-muted"></small>
              </div>
              
              <div class="col-md-6 col-sm-12 form-group pl-3 pr-3 container">
                  <label class="font-weight-bold" for="">02.SUPPLIER NAME</label> <span style="color:red;">*</span></label>
                  <input type="text" class="form-control" id="" aria-describedby="" placeholder=" Name" required="required">
                  <small id="" class="form-text text-muted"></small>
              </div>
              
            
              <div class="col-md-6 col-sm-12 form-group pl-3 pr-3 container">
                  <label class="font-weight-bold" for="">03.SUPPLIER EMAIL</label> <span style="color:red;">*</span></label>
                  <input type="text" class="form-control" id="" aria-describedby="" placeholder="supplier" required="required">
                  <small id="" class="form-text text-muted"></small>
              </div>
              
              <div class="col-md-6 col-sm-12 form-group pl-3 pr-3 container">
                  <label class="font-weight-bold" for="cost">04. SUPPLIER PHONE NUMBER</label> <span style="color:red;">*</span></label>
                  <input type="text" class="form-control" id="" aria-describedby="costHelp" placeholder="supplier phone number" required="required">
                  <small id="" class="form-text text-muted"></small>
          </div>

          
          <div class="col-md-6 col-sm-12 form-group pl-3 pr-3 container">
              
          <input class="btn btn-dark ml-2 mt-3 float-right" type="reset" value="Reset">
                        <button type="submit" class="btn btn-primary ml-2 mt-3 float-right">Add </button>
                        <button type="submit" class="btn btn-primary ml-2 mt-3 float-right"  onclick="location.href='Supplier_view.php'">view </button>
            </div>
            </div>
      </form>




















<!-- end my code\ -->


<!--BLOCK#3 START DON'T CHANGE THE ORDER-->
<?php include_once("footer.php"); ?>