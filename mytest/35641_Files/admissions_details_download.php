<?php




error_reporting(~E_ALL);
require_once('../../../common/TCPDF-master/examples/tcpdf_include.php');
require_once('../../../common/TCPDF-master/tcpdf.php');
include("../../common/Db_connections/sampleconstants.php");
include("../../common/Db_connections/Database.class.php");


$erpdbclass= Database::getInstance(DB_MYSQL_ERPDB_HOST, DB_MYSQL_ERPDB_USERNAME, DB_MYSQL_ERPDB_PASSWORD, DB_MYSQL_ERPDB_DATABASE);
$admission_table=ERP_ONLINE_COLLEGE_ADMISSION;

$college_id=$_REQUEST['college_id'];
$application_id=base64_decode($_REQUEST['application_id']);


$output=array();

	  $get_master_data_query = "select * FROM $admission_table where `id`='$application_id' ";
       $get_master_data_result = $erpdbclass->getRows($get_master_data_query);
        

       foreach($get_master_data_result  as $row){

				$application_no=$row['application_no'];
				$student_name=$row['student_name'];
				$mobile1=$row['mobile_no1'];
				$email=$row['email'];
                $registration_date=$row['registration_date'];
				$language=$row['language'];
				$programme=$row['programme'];
				$branch=$row['branch'];
				$date=$row['date'];
				$gender=$row['gender'];
				$dob=$row['dob'];
				$birth_place=$row['birth_place'];
				$nationality=$row['nationality'];
				$mother_tounge=$row['mother_tounge'];
				$religion=$row['religion'];
				$community=$row['community'];
				$community_name=$row['community_name'];
				$student_aadhar_no=$row['student_aadhar_no'];
                $permanent_address=$row['permanent_address'];
				$communication_address=$row['communication_address'];
				$mobile_no2=$row['mobile_no2'];	
				$qualifying_examination=$row['qualifying_examination'];
				$sgroups=$row['sgroups'];
				$marks_obtained=$row['marks_obtained'];
				$percentage_marks=$row['percentage_marks'];
				$grade=$row['grade'];
				$passing_year=$row['passing_year'];
				$location=$row['location'];
				$identification1=$row['identification1'];
				$identification2=$row['identification2'];
				$blood_group=$row['blood_group'];
				$marital_status=$row['marital_status'];
				$father_name=$row['father_name'];
				$father_qualification=$row['father_qualification'];
				$father_occupation=$row['father_occupation'];
				$mother_name=$row['mother_name'];
				$first_generation_learner=$row['first_generation_learner'];
				$recipient_scholarship=$row['recipient_scholarship'];
				$ex_serviceman=$row['ex_serviceman'];
				$distinction_sports=$row['distinction_sports'];
				$staff_name=$row['staff_name'];
				$father_annual_income=$row['father_annual_income'];
				$father_aadhar_no=$row['father_aadhar_no'];
				$mother_qualification=$row['mother_qualification'];
				$mother_occupation=$row['mother_occupation'];
				$mother_annual_income=$row['mother_annual_income'];
				 $mother_aadhar_number=$row['mother_aadhar_number'];
				 $guardian_qualification=$row['guardian_qualification'];
				 $guardian_occupation=$row['guardian_occupation'];
				 $guardian_annual_income=$row['guardian_annual_income'];
				 $guardian_aadhar_number=$row['guardian_aadhar_number'];
				 $relation=$row['relation'];
				 $certificates1 = $row['certificates1'];
				 $certificates2 = $row['certificates2'];
				 $certificates3 = $row['certificates3'];
				 $certificates4 = $row['certificates4'];
				 $passing_year= $row['passing_year'];
			     $anglo_indian= $row['anglo_indian'];
			     $reason_leaving= $row['reason_leaving'];
			     $tc_number= $row['tc_number'];
			  $last_attend_date =$row['last_attend_date'];
			  $student_photo =$row['student_photo'];


			  if($certificates1=='NULL' OR $certificates1==''){
		          $c1 = "No";

	            }else{
		            $c1 = "Yes";
				}

				if($certificates2=='NULL' OR $certificates2==''){
					$c2 = "No";
  
				  }else{
					  $c2 = "Yes";
				  }

				  if($certificates3=='NULL' OR $certificates3==''){
					$c3= "No";
  
				  }else{
					  $c3 = "Yes";
				  }
				  if($certificates4=='NULL' OR $certificates4==''){
					$c4= "No";
  
				  }else{
					  $c4= "Yes";
				  }

				  if($certificates5=='NULL' OR $certificates5==''){
					$c5= "No";
  
				  }else{
					  $c5= "Yes";
				  }

				  
				  if($certificates6=='NULL' OR $certificates6==''){
					$c6= "No";
  
				  }else{
					  $c6= "Yes";
				  }


				
			
     
		}

		$ext = pathinfo($student_photo, PATHINFO_EXTENSION);
		$image='';
   


		
		if(($student_photo!='' OR $student_photo!=NULL) AND ($ext=='jpg' OR $ext=='png' OR $ext=='jpeg'))	{
			$image.="../../userfolders/students/".$student_photo ;
		}else{

			$image.="https://referenceglobe.com/ERP_New/admission/maris_stella_college/image/student.jpg";

			
		}


	 
	
	


                  
	

$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Pushpa');
$pdf->SetTitle('Employers-feedback');
$pdf->SetSubject('Employers-feedback Pdf');

$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

$pdf->SetFont('dejavusans', '', 10);
$course_name=base64_decode($_REQUEST['cname']);
$username=base64_decode($_REQUEST['username']);
$pdf->AddPage("A4");
 
$pdf->SetHeaderData('', '', '', '', array(0,0,0), array(255,255,255));


//request parameters
$course_id =base64_decode($_REQUEST['cid']);
$student_regid = base64_decode($_REQUEST['regid']);

$output['assessment_report'] = array();



$tbl_header = '
<style>
@import url("https://fonts.googleapis.com/css?family=Lato&family=Montserrat&family=Roboto&display=swap");
 table, th, td {
 
  border-collapse: collapse;
  color:#000; 
}

 
</style>';

			$tbl='
	 <table width="100%" style="width:100%;"> 
		<tr width="100%" align="right">
		<table width="100%" style="width:100%;">
		<tr>
		<th> 

		<table  cellpadding="2" cellspacing="10" width="100%" style="text-align:center;"> 
        <tr> 
        <td style="border:none;text-align: center;
        color: #025464;
        font-size: 28px; 
        font-weight: 600; 
		font-family: Cambria, Georgia, serif;
        line-height: 0px;"> Maris Stella College   </td> 
       </tr> 
		<tr> 
			 <td style="border:none;text-align: center;
			 font-family: Cambria, Georgia, serif;
			 font-size: 18px; 
			 color: #E57C23; 
			 line-height: 22px;"> Registration Details </td> 
		</tr> 
	  </table>
			
	   <table cellpadding="8" cellspacing="0" width="100%" style="border-collapse:collapse; text-align:left;" >
	   <tr>
	   <td style="border:1px solid black;font-size:12px;width:40%;">    Application No  :   <span style=""> '.$application_no.' </span> </td> 
	   <td style="border:1px solid black;font-size:12px;width:40%;">    Registration Date :   <span> '.$registration_date.' </span>  </td> 
	   <td rowspan="4" style="border:1px solid black;font-size:12px;width:20%;">   <img src="'.$image.'"> </td>  
	  </tr>
	  <tr>
	  <td style="border:1px solid black;font-size:12px;width:33.33%;">    Date of Joining   <span> '.$date.' </span> </td> 
	   <td style="border:1px solid black;font-size:12px;width:33.33%;">    Programme  :   <span>'.$programme.'</span> </td>  
	  </tr>

	  <tr>
	  <td style="border:1px solid black;font-size:12px;width:33.33%;">    Major :   <span> '.$branch.' </span>  </td> 
	  <td style="border:1px solid black;font-size:12px;width:33.33%;">    Second Language :   <span> '.$language.' </span> </td>  
	  </tr> 
	  <tr>
		   <td style="border:1px solid black;font-size:12px;width:33.33%;">    Name as in STD X marksheet  :   <span> '.$student_name.' </span> </td>
		   <td style="border:1px solid black;font-size:12px;width:33.33%;">    Gender :   <span> '.$gender.' </span>   </td>
		   </tr>

		   <tr>
		    <td style="border:1px solid black;font-size:12px;width:33.33%;">    Place of Birth  :   <span> '.$birth_place.'</span> </td> 
		    <td style="border:1px solid black;font-size:12px;width:33.33%;">    Nationality :   <span> '.$nationality.' </span>  </td> 
		    <td style="border:1px solid black;font-size:12px;width:33.33%;">    Mother Tongue :   <span> '.$mother_tounge.' </span> </td> 
		   </tr>

		   <tr>
		    <td style="border:1px solid black;font-size:12px;width:33.33%;">    Religion  :   <span> '.$religion.' </span> </td> 
		    <td style="border:1px solid black;font-size:12px;width:33.33%;">    Community :   <span> '.$community.' </span>  </td> 
		    <td style="border:1px solid black;font-size:12px;width:33.33%;">    Name of Community :   <span> '.$community_name.' </span> </td> 
		   </tr>

		   <tr>
		    <td style="border:1px solid black;font-size:12px;width:40%;">    Student Aadhar No  :   <span> '.$student_aadhar_no.'  </span> </td> 
		    <td style="border:1px solid black;font-size:12px;width:60%;">    Permanent Address :   <span>'.$permanent_address.'</span>  </td> 
		    
		   </tr>

		   <tr>
		   <td style="border:1px solid black;font-size:12px;width:50%;">    Address for Communication :   <span> '.$communication_address.'</span> </td> 
		    <td style="border:1px solid black;font-size:12px;width:50%;">    Student Mobile No  :   <span> '.$mobile1.' </span> </td> 
		   
		   </tr>

		   <tr>
		   
		    <td style="border:1px solid black;font-size:12px;width:50%;">    Parent Mobile No :   <span> '.$mobile_no2.' </span>  </td> 
		    <td style="border:1px solid black;font-size:12px;width:50%;">    E-mail ID (Self) :   <span>  '.$email.'</span> </td> 
		   </tr>

		   <tr>
		    <td style="border:1px solid black;font-size:12px;width:40%;">    Qualifying Examination Passed  :   <span> '.$qualifying_examination.' </span> </td> 
		    <td style="border:1px solid black;font-size:12px;width:15%;">    Group :   <span> '.$sgroups.' </span>  </td> 
		    <td style="border:1px solid black;font-size:12px;width:45%;">    Obtained/Total Marks  :   <span>  '.$marks_obtained.' </span> </td> 
		   </tr>

		   <tr>
		   <td style="border:1px solid black;font-size:12px;width:33.33%;">   Percentage Marks  :   <span>'.$percentage_marks.' </span> </td> 
		   <td style="border:1px solid black;font-size:12px;width:33.33%;">   Grade :   <span> '.$grade.' </span>  </td> 
		   <td style="border:1px solid black;font-size:12px;width:33.33%;">   Month & Year of Passing  :   <span>  '.$passing_year.' </span> </td> 
		   </tr> 

		   <tr>
		   <td style="border:1px solid black;font-size:12px;width:50%;">   Name & District of School/college last studied  :   <span> '.$location.'  </span> </td> 
		   <td style="border:1px solid black;font-size:12px;width:50%;">   Marital Status :   <span> '.$marital_status.'  </span>  </td> 
		   </tr>

		   <tr>
		   <td style="border:1px solid black;font-size:12px;width:50%;">    Are you first generation learner ?  :   <span> '.$first_generation_learner.'   </span> </td> 
		   <td style="border:1px solid black;font-size:12px;width:50%;">   Are you the recipient of any Scholarship ? :   <span> '.$recipient_scholarship.' </span>  </td> 
		   </tr>

		   <tr>
		   <td style="border:1px solid black;font-size:12px;width:50%;">    Are you the daughter of an ex-serviceman ?  :   <span> '.$ex_serviceman.'   </span> </td> 
		   <td style="border:1px solid black;font-size:12px;width:50%;">   Are you
		   Anglo-Indian ? :   <span> '.$anglo_indian.'  </span>  </td> 
		   </tr>

		   <tr>
		   <td style="border:1px solid black;font-size:12px;width:100%;">    Distinction in Sports/Games/NCC/ NSS/State,National ,International?  :   <span> '.$distinction_sports.' </span> </td>  
		   </tr>

		   <tr>
		   <td style="border:1px solid black;font-size:12px;width:100%;">   Personal Marks of Identification   </td>  
		   </tr>

		   <tr>
		   <td style="border:1px solid black;font-size:12px;width:33.33%;">    Identification 1  :   <span>'.$identification1.'  </span> </td> 
		   <td style="border:1px solid black;font-size:12px;width:33.33%;">    Identification 2  :   <span> '.$identification2.'   </span> </td> 
		   <td style="border:1px solid black;font-size:12px;width:33.33%;">    Blood Group  :   <span> '.$blood_group.'   </span> </td> 
		   </tr>

		   <tr> 
		   <td style="border:1px solid black;font-size:14px;width:100%;text-align:center;color: #025464;">   Parent Details </td>    
		   </tr>

		   <tr>
		   <td style="border:1px solid black;font-size:13px;width:100%; color: #E57C23;">  Father  </td>  
		   </tr>

		   <tr>
		   <td style="border:1px solid black;font-size:12px;width:33.33%;">   Name  :   <span>  '.$father_name.'   </span> </td> 
		   <td style="border:1px solid black;font-size:12px;width:33.33%;">    Qualification  :   <span> '.$father_qualification.'   </span> </td> 
		   <td style="border:1px solid black;font-size:12px;width:33.33%;">    Occupation  :   <span> '.$father_occupation.'   </span> </td> 
		   </tr>
		   <tr>

		   <td style="border:1px solid black;font-size:12px;width:33.33%;">   Annual Income  :   <span>  '.$father_annual_income.'   </span> </td> 
		   <td style="border:1px solid black;font-size:12px;width:33.33%;">    Aadhar No  :   <span> '.$father_aadhar_no.' </span> </td>  
		   </tr>

		   <tr>
		   <td style="border:1px solid black;font-size:13px;width:100%; color: #E57C23;">   Mother  </td>  
		   </tr>

		   <tr>
		   <td style="border:1px solid black;font-size:12px;width:33.33%;">   Name  :   <span>  '.$mother_name.'   </span> </td> 
		   <td style="border:1px solid black;font-size:12px;width:33.33%;">    Qualification  :   <span> '.$mother_qualification.'   </span> </td> 
		   <td style="border:1px solid black;font-size:12px;width:33.33%;">    Occupation  :   <span> '.$mother_occupation.'   </span> </td> 
		   </tr>
		   <tr>

		   <td style="border:1px solid black;font-size:12px;width:33.33%;">   Annual Income  :   <span>  '.$mother_annual_income.'   </span> </td> 
		   <td style="border:1px solid black;font-size:12px;width:33.33%;">    Aadhar No  :   <span> '.$mother_aadhar_number.'  </span> </td>  
		   </tr>

		   <tr>
		   <td style="border:1px solid black;font-size:13px;width:100%; color: #E57C23;"> Guardians  </td>  
		   </tr>

		   <tr>
		   <td style="border:1px solid black;font-size:12px;width:33.33%;">   Name  :   <span>  '.$father_name.'   </span> </td> 
		   <td style="border:1px solid black;font-size:12px;width:33.33%;">    Qualification  :   <span> '.$guardian_qualification.'   </span> </td> 
		   <td style="border:1px solid black;font-size:12px;width:33.33%;">    Occupation  :   <span> '.$guardian_occupation.'   </span> </td> 
		   </tr>

		   <tr> 
		   <td style="border:1px solid black;font-size:12px;width:33.33%;">   Annual Income  :   <span>  '.$guardian_annual_income.'   </span> </td> 
		   <td style="border:1px solid black;font-size:12px;width:33.33%;">    Aadhar No  :   <span> '.$guardian_aadhar_number.'   </span> </td>  
		   <td style="border:1px solid black;font-size:12px;width:33.33%;">    Relation  :   <span> '.$relation.'   </span> </td>  
		   </tr>

		   <tr> 
		   <td style="border:1px solid black;font-size:12px;width:50%;">   Parent/Guardian Signature  :   <span>    </span> </td> 
		   <td style="border:1px solid black;font-size:12px;width:50%;">    Student Signature  :   <span>     </span> </td>   
		   </tr>

		   <tr> 
		   <td style="border:1px solid black;font-size:14px;width:100%;text-align:center;color: #025464;font-weigt:800;">    For office use only  </td>    
		   </tr>

		   <tr> 
		   <td style="border:1px solid black;font-size:13px;width:100%; color: #E57C23;">   Certificate submitted to office  </td>    
		   </tr>

		   <tr> 
		   <td style="border:1px solid black;font-size:12px;width:33.33%;">   10th Std  :   <span>   '.$c1.'   </span> </td> 
		   <td style="border:1px solid black;font-size:12px;width:33.33%;">    Inter Long Memo  :   <span> '.$c2.'   </span> </td>   
		   <td style="border:1px solid black;font-size:12px;width:33.33%;">    Caste  :   <span> '.$c3.'   </span> </td> 
		   </tr>

		   <tr>  
		   <td style="border:1px solid black;font-size:12px;width:33.33%;">    10th TC  :   <span> '.$c4.'   </span> </td>  
		   <td style="border:1px solid black;font-size:12px;width:33.33%;">    Inter Tc  :   <span> '.$c5.'   </span> </td> 
		   <td style="border:1px solid black;font-size:12px;width:33.33%;">    Migration  :   <span> '.$c6.'   </span> </td> 
		   </tr>

		   <tr> 
		   <td style="border:1px solid black;font-size:12px;width:50%;">   Name of the staff  :   <span>  '.$staff_name.'  </span> </td> 
		   <td style="border:1px solid black;font-size:12px;width:50%;">    Signature of the staff  :   <span>   </span> </td>   
		   </tr>

		   <tr> 
		   <td style="border:1px solid black;font-size:13px;width:100%; color: #E57C23;">  To be filled in by the student ,if she discontinues during the first year   </td>    
		   </tr>

		   <tr> 
		   <td style="border:1px solid black;font-size:12px;width:50%;">   Reason For leaving  :   <span>   '.$reason_leaving.'    </span> </td> 
		   <td style="border:1px solid black;font-size:12px;width:50%;">    Date Last Attended  :   <span> '.$last_attend_date.'  </span> </td>   
		   
		   </tr>

		   <tr> 
		    
		   <td style="border:1px solid black;font-size:12px;width:50%;">    T.C.NO  :   <span> '.$tc_number.'  </span> </td>
		   <td style="border:1px solid black;font-size:12px;width:50%;">    Date  :   <span>   </span> </td>
		   </tr>

		   <tr> 
		   <td style="border:1px solid black;font-size:12px;width:100%;line-height:22px;">  I Declare that all the details furnished above are true and correct I agree to abide by the rules & regulations of the College. <br/> 
		   If the admission sought for is granted, we agree to abide by the Rules & Regulation of the college and the decision of the Principal shall be considered by us as final in all matters pertaining to internal management such as attendance at classes, examinations and other relevant matters affecting discipline, rules and regulations of the college and hostel. <br/> Those who fail to answer all the above questions run the risk of having applications rejected.  </td>    
		   </tr> 

		   <tr> 
		   <td style="border:1px solid black;font-size:12px;width:33.33%; text-center">  
		  <span> ................................</span>
		 <br/>  Parent/Guardian Signature   </td> 
		   <td style="border:1px solid black;font-size:12px;width:33.33%; text-center">  
		   <span> ...........................   </span>
		   <br/> &nbsp;&nbsp;&nbsp;Student Signature  </td>  
		   <td style="border:1px solid black;font-size:12px;width:33.33%; text-center"> 
		    Date : 
		   </td>
		   </tr>

		  
 
	  
	   </table>

	 
	 
		</th> 
 
		</tr> 
		 </table> ';
	
	


$pdf->writeHTML($tbl_header . $tbl, true, false, false, false, '');
$pdf->lastPage();


ob_end_clean();
$pdf->Output('Employers-feedback.pdf', 'I');

?>
