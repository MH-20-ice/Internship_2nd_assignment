<?php

include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
 
<form action="connect.php method="post">    
<div class="card card-danger">
              <div class="card-test">
             <div style="text-align:center"><h1>REGISTRATION FORM FOR CONVOCATION -2023</h1></div>
             <div class="card-body">
            <div><h4>PERSONAL INFORMATION:</h4></div>
             </div>
              <div class="card-body">
              <div class="form-group">
                    <label for="name">Name:[As per certificate]*</label>
                    <input type="text" class="form-control" name="name" placeholder="Name" required>
              </div>
              
                <div class="row">
                  <div class="col-3">
                  <label for="name">Father's Name:*</label>
                    <input type="text" class="form-control" name="father_name" placeholder="Father's name" required>
                  </div>
                  <div class="col-4">
                  <label for="name">Mother's Name:*</label>
                    <input type="text" class="form-control"name="mother_name" placeholder="Mother's Name">
                  </div>
                  <div class="col-5">
                  <label for="name">Date of Birth*</label>
                    <input type="text" class="form-control" name="birth" placeholder="Date of Birth*">
                  </div>
                </div>
              
              <label for="gender-select">Gender*</label>
              <select class="custom-select rounded-0" id="exampleSelectRounded0" name="gender">
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                    
                  </select>
              <!-- /.card-body -->
  </div>
  </div>
  <br>
<div>
<div class ="card-body">
  <div><h4>DEGREE INFORMATION</h4></div>
  <h6 style="font:bold";>1.Undergraduate:</h6>
  
  <label for="Edu-info">Name of Degree</label>
  <input class="form-control" type="text" name="degree_name" placeholder="Name of Degree">
  <div class="row">
                  <div class="col-3">
                  <label for="name">Admission session:*</label>
                    <input type="number" class="form-control" name="session" placeholder="session">
                  </div>
                  <div class="col-4">
                  <label for="name">Reg. No:*</label>
                    <input type="number" class="form-control" name="reg" placeholder="Reg. No:">
                  </div>
                  <div class="col-5">
                  <label for="name">Batch</label>
                    <input type="number" class="form-control" name="batch" placeholder="Batch">
                  </div>
    </div>
    <div class="row">
                  <div class="col-3">
                  <label for="name">Year of Passing:*</label>
                    <input type="number" class="form-control"name="passing_year" placeholder="Year of Passing:">
                  </div>
                  <div class="col-4">
                  <label for="name">Graduation Session:*</label>
                    <input type="number" class="form-control"name="graduation_session" placeholder="Graduation Session:*">
                  </div>
                  <div class="col-5">
                  <label for="name">CGPA*</label>
                    <input type="number" class="form-control" name="cgpa" placeholder="CGPA">
                  </div>
                </div>
  </div>
                <br>
                <div class="card-body">
                <h6 style="font:bold";>2.Graduate:</h6>
                <label for="Edu-info">Name of Degree</label>
                <input class="form-control" type="text"name="degree_name2" placeholder="Name of Degree">
                <div class="row">
                  <div class="col-3">
                  <label for="name">Admission session:*</label>
                    <input type="number" class="form-control" name="session2"placeholder="session">
                  </div>
                  <div class="col-4">
                  <label for="name">Reg. No:*</label>
                    <input type="number" class="form-control"name="reg2" placeholder="Reg. No:">
                  </div>
                  <div class="col-5">
                  <label for="name">Batch</label>
                    <input type="number" class="form-control" name="batch2" placeholder="Batch">
                  </div>
    </div>
    <div class="row">
                  <div class="col-3">
                  <label for="name">Year of Passing:*</label>
                    <input type="number" class="form-control"name="passing_year2" placeholder="Year of Passing:">
                  </div>
                  <div class="col-4">
                  <label for="name">Graduation Session:*</label>
                    <input type="number" class="form-control" name="graduation_session2" placeholder="Graduation Session:*">
                  </div>
                  <div class="col-5">
                  <label for="name">CGPA:*</label>
                    <input type="number" class="form-control" name="cgpa2"placeholder="cgpa">
                  </div>
                </div>
                </div>
</div>
<br>
<div class="card-body">
<div><h4>CONTACT INFORMATION</h4></div>
<div class="form-group">
                    <label for="name">Permanent Address*</label>
                    <input type="text" class="form-control" name="per_address" placeholder="Permanent Address" required>
</div>
<div class="form-group">
                    <label for="name">Present Address*</label>
                    <input type="text" class="form-control" name="pre_address" placeholder="Present Address" required>
</div>
<div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Email*</label>
                        <input type="text" class="form-control" name="gmail" placeholder="abc@gmail.com" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Mobile No*</label>
                        <input type="Default" class="form-control" name="mobile" placeholder="+8801xxxxxxxx" required>
                      </div>
                    </div>
                  </div>
<div >
                <div><h4>GRADUATE'S PRESENT STATUS</h4></div>
                <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Employer</label>
                        <input type="text" class="form-control" placeholder="Employer" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Destination</label>
                        <input type="Default" class="form-control" placeholder="Destination" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="name">Official Address*</label>
                    <input type="text" class="form-control" name="off_address" placeholder="Official Address" required>

                  </div>
                  <div>
                  <div><h4>PAYMENT INFORMATION</h4></div> 
                  <div>
                    <p>ØConvocation fee: Tk. 5,000 (For Registration)<br>Ø Original Certificate fee (for undergraduate program): Tk. 1,500 <br>Ø Original Certificate fee (for graduate program): Tk. 1,500</p>
                  <p style="font:500">Note: In case of two degrees registration fee will have to be paid once only</p>
                </div>

                  </div>
                  <div>
                  <div><h4>PAYMENT PROCEDURE</h4></div> 
                  <div>
                 <P> Pay fee to the following bank account:<br>
                 Name of Bank:United Commercial Bank Limited<br>Account Title: BGC TRUST UNIVERSITY BANGLADESH<br>
                 Account Number: 0581301000000010<br>Note: Money can be deposited online from any branch.</P>
                </div>
                <br>

                  </div>
                  
<div><h4>FEES PAID</h4>
<div class="row">
                  <div class="col-3">
                  <label for="name">Total amount paid Tk.: *</label>
                    <input type="number" class="form-control" name="amount" placeholder="Total amount paid Tk">
                  </div>
                  <div class="col-4">
                  <label for="name">Deposited Bank Name/bKash:*</label>
                    <input type="number" class="form-control" name="bkash"placeholder="Deposited Bank Name">
                  </div>
                  <div class="col-5">
                  <label for="name">Branch: *</label>
                    <input type="text" class="form-control" name="branch"placeholder="Branch">
                  </div>
                </div>   
                <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Bank Receipt No/bKash Transaction ID: *</label>
                        <input type="number" class="form-control" name="tid" placeholder=" Receipt No" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Payment Date: *</label>
                        <input type="Date" class="form-control" name="date" placeholder="Payment Date" required>
                      </div>
                    </div>
                  </div> 
                <div><h4>Transportation required:*</h4></div> 
                  <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="radio1">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="radio1" checked="">
                          <label class="form-check-label">No</label>
                        </div>
                        
                      </div>  
                      <div class="form-group">
                        <label>Select pickup point:</label>
                        <select class="form-control">
                          <option  >select pickup point</option>
                          <option>Gulistan</option>
                          <option>Pollobi</option>
                          <option>Gulshan</option>
                          <option>Banali</option>
                        </select>
                      </div>  
                      <div><h4>Upload Documents:*</h4>
                      <div class="form-group">
                    <!-- <label for="customFile">Custom File</label> -->
                    <p>Passport sized photograph [413px X 531px and size less than 100KB] *</p>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFile" name="file">
                      <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <!-- <label for="customFile">Custom File</label> -->
                    <p>Copy of Bank Receipt/Screenshot of bKash digital bill receipt [650px X 250px and size less than 100KB]*</p>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFile" name="file2">
                      <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                  </div>
                  <div class="center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
</div>
</form>
                <footer class="main-footer">
               <div class="float-right d-none d-sm-block">
                
                </div >
                <center>
               <strong>Copyright © 2023-24 <a href="https://adminlte.io">MD MEHEDI HASAN</a>.</strong> All rights reserved.
               </center>
               </footer>



<?php
    include('includes/footer.php');

?>