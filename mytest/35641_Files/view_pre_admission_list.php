<?php
### Purpose : Load Master Data All Sub modules CRUD Operations ###
//////////////////////////////////
//	AUTHOR : Nazim sheikh	//
//	CREATED DATE: 13-14-2023	//
//////////////////////////////////
session_start();
error_reporting(~E_ALL);
$pageTitle = "Pre Admission Details";
include("../common/Db_connections/sampleconstants.php");
include("../common/Db_connections/Database.class.php");
include("../common/validate_session.php");
include("../common/erp_utilities.php");

if(isset($_SESSION['valid_user'])) {
	include("../common/template/admission_header_new.php");
	$usertype = $_SESSION['usertype'];
	
	if ($usertype == "UserType3") {
		$college_reg_id=$_SESSION['Regid'];
	}
	else if($usertype == "HOD"){
		$college_reg_id = $_SESSION['college_id'];
	}
	else if ($usertype == "UserType1") {
		$college_reg_id = $_SESSION['Collegeid'];
	} else {
		$college_reg_id = $_SESSION['college_id'];
	}
	?>
	<link rel="stylesheet" href="../common/styles_erp/custom_style.css" />
<!--<link rel="stylesheet" href="https://referenceglobe.com/common/styles_tpo/tpo_datatables.css" />-->
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.0.2/css/buttons.dataTables.css">
<section class="content">
	<div class="content-header">
		<div class="d-flex align-items-center">
			<div class="mr-auto">
				<h3 class="page-title">View Pre-Admission Details</h3>
 			</div>
 		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<div class="box">
				<div class="box-header with-border">
					<h4 class="box-title">View Pre-Admission Details</h4>
				</div>
				<div class="box-body">
				<section class="hero-section hero-bg-2 ptb-100 full-screen">
	                  <div class="container mt-2">
								<div class="row table-responsive">
									<table class="table table-striped table-light" id="table_view_students">
									  <thead>
									     <th>S.No</th>
									     <th>Application&nbsp;Number</th>
										 <th>Hallticket&nbsp;Number</th>
									 	 <th>Student&nbsp;Name</th>
                                      	 <th>Student&nbsp;Mobile</th>
                                      	   <th>Student&nbsp;Email</th>
                                           <th>Programme</th>
                                           <th>Major</th>

                                           <th>Registration&nbsp;Date</th>
									        <th> Date&nbsp;of&nbsp;Joining </th>
									        <th> Gender  </th>
									         <th>Date&nbsp;of&nbsp;Birth </th>
  											<th>Second&nbsp;Language </th>

									     <th>Father&nbsp;Name</th>
									      <th>Mother&nbsp;Name</th>
									      <th>Father's&nbsp;Mobile</th>
                                          <th>Mother&nbsp;Mobile&nbsp;No </th>
									       
  											 <th>Father&nbsp;Email&nbsp;Id </th>
  											  <th>Mother&nbsp;Email&nbsp;Id </th>
  											  
									           <th>Minor&nbsp;Subject-1 </th>
  											  <th>Minor&nbsp;Subject-2 </th>
  											  
  										    <th>Permanent&nbsp;Address</th>
  											  <th>Pincode  </th>
  											  <th>Mother&nbsp;Tongue </th>
  											  <th>Nationality</th>
  											  <th>Religion </th>
  											 <th>Community</th>
  											  <th>Name&nbsp;of&nbsp;Community</th>
  											  <th>Aadhar&nbsp;Card&nbsp;No  </th>
  											  <th>Parent&nbsp;Occupation </th>
  											  <th>Yearly&nbsp;Income  </th>
  											   <th>Blood&nbsp;Group </th>
											<th> Institution Last attended(Name&Place) </th>
  											  <th>Interrupted&nbsp;state&nbsp;the&nbsp;reason </th>

  											  <th>Health&nbsp;Information </th>
  											  <th>Differently&nbsp;Abled </th>

  											  <th>Qualifying&nbsp;Examination  </th>
  											  <th>Medium&nbsp;Of&nbsp;Instruction </th>

  											  <th>Month&nbsp;|&nbsp;Year&nbsp;of&nbsp;Passing </th>
  										
  											  <th>Reg.No </th>
  											  <th>Certificate&nbsp;No  </th>
  											  
  											  <th>Marks&nbsp;in&nbsp;Intermediate </th>
  											  <th>Percentage </th>
  											  <th>Subject - 1 </th>
  											  <th>Marks </th>
  											  <th>Subject - 2 </th>
  											  <th>Marks </th>
  											  <th>Subject - 3 </th>
  											  <th>Marks </th>
  											  <th>Subject - 4 </th>
  											  <th>Marks </th>

  											  <th>Relation </th>

 




									     <th>Active/Deactive</th><th>View</th><th>&nbsp;&nbsp;Action&nbsp;&nbsp;</th>
									  </thead>
									    <tbody>
									  
									   </tbody>
									   <tfoot>
									
									   </tfoot>
									</table>
								
							</div>
	            	</div>
	         </div>
	</section>      
                        </div>
				</div>
			</div>
		</div>
           <input type="hidden" value="<?php echo $college_reg_id; ?>"  id="college_id">
</section>






<?php include("../common/template/footer_new.php"); 
}
else 
{
	session_destroy();
	header("location:".ERP_LINK_PATH."timeoutpage.php");
}?>
<script type="text/javascript" src="../common/js/admission/view_pre_admisson_list.js"></script>

<script src="https://referenceglobe.com/DataTables-Test/datatables-js/jquery.dataTables.min.js"></script>
<script src="https://referenceglobe.com/DataTables-Test/datatables-js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" language="javascript" src="https://referenceglobe.com/DataTables-Test/datatables-js/dataTables.buttons.min.js"></script>
<script type="text/javascript" language="javascript" src="https://referenceglobe.com/DataTables-Test/datatables-js/jszip.min.js"></script>
<script type="text/javascript" language="javascript" src="https://referenceglobe.com/DataTables-Test/datatables-js/pdfmake.min.js"></script>
<script type="text/javascript" language="javascript" src="https://referenceglobe.com/DataTables-Test/datatables-js/vfs_fonts.js"></script>
<script type="text/javascript" language="javascript" src="https://referenceglobe.com/DataTables-Test/datatables-js/buttons.html5.min.js"></script>
<script type="text/javascript" language="javascript" src="https://referenceglobe.com/DataTables-Test/datatables-js/buttons.print.min.js"></script>
<script type="text/javascript" language="javascript" src="https://referenceglobe.com/DataTables-Test/datatables-js/buttons.colVis.min.js"></script>

<div class="loader-filter" style="display: none;"></div>

