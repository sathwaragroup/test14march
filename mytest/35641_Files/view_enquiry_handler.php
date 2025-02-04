<?php
session_start();
/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);*/
error_reporting(~E_ALL);

include("../../common/Db_connections/sampleconstants.php");
include("../../common/Db_connections/Database.class.php");
include("../../common/validate_session.php");
$erpdbclass= Database::getInstance(DB_MYSQL_ERPDB_HOST, DB_MYSQL_ERPDB_USERNAME, DB_MYSQL_ERPDB_PASSWORD, DB_MYSQL_ERPDB_DATABASE);
$preadmission_table=ERP_ENQUIRY_TRANSACTIONAL_DETAILS;


$college_id=$_SESSION['college_id'];



$get_master_data_query = "select *  FROM $preadmission_table WHERE `college_id`='$college_id' ORDER BY `paid_date` DESC   ";
 $get_master_data_result = $erpdbclass->getRows($get_master_data_query);

 $x=1;
$output=array(); 
foreach($get_master_data_result as $row) {

  $date=  date('d-m-Y',strtotime( $row['paid_date']));

$output['data'][] = array(
    $x,
  $date,
  $row['name_student'],
  $row['email'],
  $row['father_name'],
  $row['programme'],
  $row['transactionid'],
   $row['transaction_status'],
  $row['amount'],
  $row['payment_method_type']
  );
$x++;
}
echo json_encode($output);

?>