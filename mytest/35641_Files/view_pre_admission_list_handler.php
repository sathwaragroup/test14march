<?php
session_start();
//ni_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
error_reporting(~E_ALL);

include("../../common/Db_connections/sampleconstants.php");
include("../../common/Db_connections/Database.class.php");



$college_id=$_REQUEST['college_id'];

  database::deleteobj();
      $edudbclass= Database::getInstance(DB_MYSQL_EDUDB_HOST, DB_MYSQL_EDUDB_USERNAME, DB_MYSQL_EDUDB_PASSWORD, DB_MYSQL_EDU_DATABASE);
      $college_base=EDU_Promote_students;
      $show="SELECT  `Student_hallticket_number`,`Email`,`Mobile` FROM $college_base where College_id ='$college_id'";
      $result1=$edudbclass->getRows($show);
      $totalrec_found1=$edudbclass->numRows($result1);
    
   $student_result=array();


   foreach($result1 as $val){
      $student_result[]=$val;
   }



 database::deleteobj();
   $erpdbclass= Database::getInstance(DB_MYSQL_ERPDB_HOST, DB_MYSQL_ERPDB_USERNAME, DB_MYSQL_ERPDB_PASSWORD, DB_MYSQL_ERPDB_DATABASE);
$admission_table=ERP_ONLINE_COLLEGE_ADMISSION;
$erp_college_admissionform_link=ERP_COLLEGE_ADMISSIONFORM_LINK;

   $output=array();

   $get_master_data_query = "select *  FROM $admission_table  where college_id='$college_id' ORDER BY `id` DESC ";
    $get_master_data_result = $erpdbclass->getRows($get_master_data_query);

      $get_college_admissionform_link = "select id,form_url FROM $erp_college_admissionform_link where college_id='$college_id' ORDER BY `id` DESC LIMIT 1 ";
     $get_from = $erpdbclass->getRows($get_college_admissionform_link);
     
       foreach($get_from as $row2){
             $form_url=$row2['form_url'];
       }

     
    $x = 1;
       $output=array();

       foreach($get_master_data_result as $key => $val2){
         $output[$key]=$val2;
         $output[$key]['hallticket_no'] = 'NA';
       }


// echo "<pre>";
// print_r($output);

//   print_r($student_result);

// die;



       foreach($output as $studkey=> $valresult){
         foreach($student_result as $key1 => $valstud){
        
        
            if(trim($valresult['email']) == trim($valstud['Email']) OR trim($valresult['mobile_no1']) == trim($valstud['Mobile'])){
              
              $output[$studkey]['hallticket_no'] = $valstud['Student_hallticket_number'];
            }
         }
       }
      
// echo "<pre>";
//  print_r($output);

//  print_r($student_result);


    
      
       foreach($output  as $row){
       	     $status=$row['status2'];
   
       	$edit="<a href=".$form_url."&application_id=".base64_encode($row['id'])."  class='fa fa-edit btn-sm btn-info edit_student' value='".base64_encode($row['id'])."' target='_blank' ></a> <i class='fa fa-close  btn-sm btn-danger remove_student' value='".$row['id']."'></i>";
           
               if($status=='0' OR $status==''){
              $active="<select class='form-control ' id=".$row['id']."  onChange='active_deactive(this,".$row['id'].",".$row['application_no'].")'>
                    
                           <option value='0'>Not Approved</option>
                           <option value='1'>Approved</option> 
                              
                       </select>";
                }else{

                    $active="<select class='form-control ' id=".$row['id']."  onChange='active_deactive(this,".$row['id'].",".$row['application_no'].")'>
                           <option value='1'>Approved</option> 
                           <option value='0'>Not Approved</option>
                           
                              
                       </select>";

                }

       	$view="<a href=".$form_url."&application_id=".base64_encode($row['id'])."&view=view  class='fa fa-eye btn-sm btn-success view_student' value='".base64_encode($row['id'])."' target='_blank' ></a>";                                                                                           

          $output['data'][] = array(
		  		$x,
                $row['application_no'],
                $row['hallticket_no'],
                 $row['student_name'],
			        	$row['mobile_no1'],
				        $row['email'],
                $row['programme'],
			        	$row['branch'],
                 $row['registration_date'],
                $row['date'],
                $row['gender'],
                $row['dob'],
                $row['language'],
                $row['father_name'],
                $row['mother_name'],
                $row['mobile_no2'],
                $row['mother_mobile'],
                $row['father_email'],
                $row['mother_email'],
                 $row['minor_subject1'],
                $row['minor_subject2'],
                $row['permanent_address'],
                $row['pincode'],
                $row['mother_tounge'],
                $row['nationality'],
                $row['religion'],
                $row['community'],
                $row['community_name'],
                $row['student_aadhar_no'],
                $row['father_occupation'],
                $row['father_annual_income'],
                $row['blood_group'],
                $row['previous_institution'],
                $row['intrupted_state'],
                $row['health_info'],
                $row['physicial_chalange'],
                $row['previous_academic_type'],
                $row['previous_academic_medium'],
                $row['previous_passing'],
                $row['previous_academic_certificate_no'],
                $row['previous_academic_registration_no'],
                 $row['previous_academic_marks'],
                $row['previous_academic_percentage'],
                 $row['previous_subject_name1'],
                 $row['previous_subject1'],
                 $row['previous_subject_name2'],
                 $row['previous_subject2'],
                 $row['previous_subject_name3'],
                 $row['previous_subject3'],
                 $row['previous_subject_name4'],
                 $row['previous_subject4'],
                 $row['relation'],
                 $active,
			    	 $view,
		    		$edit
 );
  	$x++;
  }
  echo json_encode($output);

  
    
?>