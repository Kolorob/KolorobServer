<?php

session_start();
	if(isset($_SESSION['username']) && isset($_SESSION['password']) ){

$username=$_SESSION['username'];

		if(isset($_POST['identifier_id'])) 				$identifier_id = $_POST['identifier_id'];
		if(isset($_POST['node_type'])) 				$node_type = $_POST['node_type'];
		if(isset($_POST['edu_name_eng'])) 					$edu_name_eng = $_POST['edu_name_eng'];
		if(isset($_POST['edu_name_ban'])) 					$edu_name_ban = $_POST['edu_name_ban'];
		if(isset($_POST['edu_subcategory'])) 			$edu_subcategory_name = $_POST['edu_subcategory'];
		if(isset($_POST['contact_person_designation'])) $contact_person_designation = $_POST['contact_person_designation'];
		if(isset($_POST['contact_no'])) 				$contact_no = $_POST['contact_no'];
		if(isset($_POST['email_address'])) 				$email_address = $_POST['email_address'];
		 if(isset($_POST['edtype']))                                     $edtype = $_POST['edtype'];
		if(isset($_POST['shift'])) 						$shift = $_POST['shift'];
		if(isset($_POST['hostel_facility'])) 			$hostel_facility = $_POST['hostel_facility'];
		if(isset($_POST['transport_facility'])) 		$transport_facility = $_POST['transport_facility'];
		if(isset($_POST['canteen_facility'])) 			$canteen_facility = $_POST['canteen_facility'];
		if(isset($_POST['Playground'])) 				$playground = $_POST['Playground'];
		if(isset($_POST['website_link'])) 				$website_link = $_POST['website_link'];
		if(isset($_POST['fb_link'])) 					$fb_link = $_POST['fb_link'];
		if(isset($_POST['registered_with'])) 			$registered_with = $_POST['registered_with'];
		if(isset($_POST['registration_no'])) 			$registration_no = $_POST['registration_no'];
		if(isset($_POST['data_collector_name'])) 		$data_collector_name = $_POST['data_collector_name'];
		if(isset($_POST['date'])) 						$date = $_POST['date'];
		//if(isset($_POST['course_check_list'])) 		$course_check_list[] = $_POST['course_check_list'];
		if(isset($_POST['check_list1'])) 				$check_list1[] = $_POST['check_list1'];
		if(isset($_POST['total_students'])) 			$total_students = $_POST['total_students'];
		if(isset($_POST['total_teachers'])) 			$total_teachers = $_POST['total_teachers'];
		if(isset($_POST['total_classes'])) 				$total_classes = $_POST['total_classes'];
		if(isset($_POST['additional_info'])) 			$additional_info = $_POST['additional_info'];
		//if(isset($_POST['course_quantity'])) 			$course_quantity = $_POST['course_quantity'];
                 if(isset($_POST['area']))                                     $area = $_POST['area'];
                if(isset($_POST['address']))                                     $address = $_POST['address'];
if(isset($_POST['road']))                                     $road = $_POST['road'];
if(isset($_POST['block']))                                     $block = $_POST['block'];
                if(isset($_POST['lattitude']))                                     $lattitude = $_POST['lattitude'];
                 if(isset($_POST['longitude']))                                     $longitude = $_POST['longitude'];
   
                if(isset($_POST['otime']))                                     
 $otime= $_POST['otime'];
                 if(isset($_POST['btime1']))                                     
$btime1 = $_POST['btime1'];
if(isset($_POST['btime2']))                                     
$btime2 = $_POST['btime2'];
if(isset($_POST['ctime']))                                    
 $ctime = $_POST['ctime'];
if(isset($_POST['adtime']))                                     
$adtime = $_POST['adtime'];
if(isset($_POST['landmark']))                                     
$landmark = $_POST['landmark'];



if(isset($_POST['pre_school_free'])) 					$pre_school_free = $_POST['pre_school_free'];
if(isset($_POST['pre_school_stipend_speciality'])) 		$pre_school_stipend_speciality = $_POST['pre_school_stipend_speciality'];
if(isset($_POST['pre_school_stipend_type'])) 			$pre_school_stipend_type = $_POST['pre_school_stipend_type'];
if(isset($_POST['pre_school_stipend_details'])) 		$pre_school_stipend_details = $_POST['pre_school_stipend_details'];
if(isset($_POST['pre_school_max_fee'])) 				$pre_school_max_fee = $_POST['pre_school_max_fee'];
if(isset($_POST['pre_school_min_fee'])) 				$pre_school_min_fee = $_POST['pre_school_min_fee'];
if(isset($_POST['pre_school_coaching_fee'])) 			$pre_school_coaching_fee = $_POST['pre_school_coaching_fee'];
if(isset($_POST['pre_school_additional_fee'])) 			$pre_school_additional_fee = $_POST['pre_school_additional_fee'];

		if(isset($_POST['i_v_free'])) 					$i_v_free = $_POST['i_v_free'];
		if(isset($_POST['i_v_stipend_speciality'])) 	$i_v_stipend_speciality = $_POST['i_v_stipend_speciality'];
		if(isset($_POST['i_v_stipend_type'])) 			$i_v_stipend_type = $_POST['i_v_stipend_type'];
		if(isset($_POST['i_v_stipend_details'])) 		$i_v_stipend_details = $_POST['i_v_stipend_details'];
		if(isset($_POST['i_v_max_fee'])) 				$i_v_max_fee = $_POST['i_v_max_fee'];
		if(isset($_POST['i_v_min_fee'])) 				$i_v_min_fee = $_POST['i_v_min_fee'];
		if(isset($_POST['i_v_coaching_fee'])) 			$i_v_coaching_fee = $_POST['i_v_coaching_fee'];
		if(isset($_POST['i_v_additional_fee'])) 		$i_v_additional_fee = $_POST['i_v_additional_fee'];

		if(isset($_POST['vi_x_free'])) 					$vi_x_free = $_POST['vi_x_free'];
		if(isset($_POST['vi_x_stipend_speciality'])) 	$vi_x_stipend_speciality = $_POST['vi_x_stipend_speciality'];
		if(isset($_POST['vi_x_stipend_type'])) 			$vi_x_stipend_type = $_POST['vi_x_stipend_type'];
		if(isset($_POST['vi_x_stipend_details'])) 		$vi_x_stipend_details = $_POST['vi_x_stipend_details'];
		if(isset($_POST['vi_x_max_fee'])) 				$vi_x_max_fee = $_POST['vi_x_max_fee'];
		if(isset($_POST['vi_x_min_fee'])) 				$vi_x_min_fee = $_POST['vi_x_min_fee'];
		if(isset($_POST['vi_x_coaching_fee'])) 			$vi_x_coaching_fee = $_POST['vi_x_coaching_fee'];
		if(isset($_POST['vi_x_additional_fee'])) 		$vi_x_additional_fee = $_POST['vi_x_additional_fee'];

	if(isset($_POST['xi_xii_free'])) 					$xi_xii_free = $_POST['xi_xii_free'];
	if(isset($_POST['xi_xii_stipend_speciality'])) 		$xi_xii_stipend_speciality = $_POST['xi_xii_stipend_speciality'];
	if(isset($_POST['xi_xii_stipend_type'])) 			$xi_xii_stipend_type = $_POST['xi_xii_stipend_type'];
	if(isset($_POST['xi_xii_stipend_details'])) 		$xi_xii_stipend_details = $_POST['xi_xii_stipend_details'];
	if(isset($_POST['xi_xii_max_fee'])) 				$xi_xii_max_fee = $_POST['xi_xii_max_fee'];
	if(isset($_POST['xi_xii_min_fee'])) 				$xi_xii_min_fee = $_POST['xi_xii_min_fee'];
	if(isset($_POST['xi_xii_coaching_fee'])) 			$xi_xii_coaching_fee = $_POST['xi_xii_coaching_fee'];
	if(isset($_POST['xi_xii_additional_fee'])) 			$xi_xii_additional_fee = $_POST['xi_xii_additional_fee'];

		if(isset($_POST['uni_free'])) 					$uni_free = $_POST['uni_free'];
		if(isset($_POST['uni_stipend_speciality'])) 	$uni_stipend_speciality = $_POST['uni_stipend_speciality'];
		if(isset($_POST['uni_stipend_type'])) 			$uni_stipend_type = $_POST['uni_stipend_type'];
		if(isset($_POST['uni_stipend_details'])) 	    $uni_stipend_details = $_POST['uni_stipend_details'];
		if(isset($_POST['uni_max_fee'])) 				$uni_max_fee = $_POST['uni_max_fee'];
		if(isset($_POST['uni_min_fee'])) 				$uni_min_fee = $_POST['uni_min_fee'];
		if(isset($_POST['uni_coaching_fee'])) 			$uni_coaching_fee = $_POST['uni_coaching_fee'];
		if(isset($_POST['uni_additional_fee'])) 		$uni_additional_fee = $_POST['uni_additional_fee'];


			if(isset($_POST['pec_students'])) 			$pec_students = $_POST['pec_students'];
			if(isset($_POST['pec_passed'])) 			$pec_passed = $_POST['pec_passed'];
			if(isset($_POST['pec_golden'])) 			$pec_golden = $_POST['pec_golden'];
			if(isset($_POST['pec_normal'])) 			$pec_normal = $_POST['pec_normal'];

			if(isset($_POST['JSC_students'])) 			$jsc_students = $_POST['JSC_students'];
			if(isset($_POST['JSC_passed'])) 			$jsc_passed = $_POST['JSC_passed'];
			if(isset($_POST['JSC_golden'])) 			$jsc_golden = $_POST['JSC_golden'];
			if(isset($_POST['JSC_normal'])) 			$jsc_normal = $_POST['JSC_normal'];

			if(isset($_POST['SSC_students'])) 			$ssc_students = $_POST['SSC_students'];
			if(isset($_POST['SSC_passed'])) 			$ssc_passed = $_POST['SSC_passed'];
			if(isset($_POST['SSC_golden'])) 			$ssc_golden = $_POST['SSC_golden'];
			if(isset($_POST['SSC_normal'])) 			$ssc_normal = $_POST['SSC_normal'];

			if(isset($_POST['HSC_students'])) 			$hsc_students = $_POST['HSC_students'];
			if(isset($_POST['HSC_passed'])) 			$hsc_passed = $_POST['HSC_passed'];
			if(isset($_POST['HSC_golden'])) 			$hsc_golden = $_POST['HSC_golden'];
			if(isset($_POST['HSC_normal'])) 			$hsc_normal = $_POST['HSC_normal'];

			if(isset($_POST['SSC_v_students'])) 		$ssc_v_students = $_POST['SSC_v_students'];
			if(isset($_POST['SSC_v_passed'])) 			$ssc_v_passed = $_POST['SSC_v_passed'];
			if(isset($_POST['SSC_v_golden'])) 			$ssc_v_golden = $_POST['SSC_v_golden'];
			if(isset($_POST['SSC_v_normal'])) 			$ssc_v_normal = $_POST['SSC_v_normal'];

			if(isset($_POST['HSC_v_students'])) 		$hsc_v_students = $_POST['HSC_v_students'];
			if(isset($_POST['HSC_v_passed'])) 			$hsc_v_passed = $_POST['HSC_v_passed'];
			if(isset($_POST['HSC_v_golden'])) 			$hsc_v_golden = $_POST['HSC_v_golden'];
			if(isset($_POST['HSC_v_normal'])) 			$hsc_v_normal = $_POST['HSC_v_normal'];

			if(isset($_POST['Alim_students'])) 			$alim_students = $_POST['Alim_students'];
			if(isset($_POST['Alim_passed'])) 			$alim_passed = $_POST['Alim_passed'];
			if(isset($_POST['Alim_golden'])) 			$alim_golden = $_POST['Alim_golden'];
			if(isset($_POST['Alim_normal'])) 			$alim_normal = $_POST['Alim_normal'];

			if(isset($_POST['Fazil_students'])) 		$fazil_students = $_POST['Fazil_students'];
			if(isset($_POST['Fazil_passed'])) 			$fazil_passed = $_POST['Fazil_passed'];
			if(isset($_POST['Fazil_golden'])) 			$fazil_golden = $_POST['Fazil_golden'];
			if(isset($_POST['Fazil_normal'])) 			$fazil_normal = $_POST['Fazil_normal'];

			if(isset($_POST['Kamil_students'])) 		$kamil_students = $_POST['Kamil_students'];
			if(isset($_POST['Kamil_passed'])) 			$kamil_passed = $_POST['Kamil_passed'];
			if(isset($_POST['Kamil_golden'])) 			$kamil_golden = $_POST['Kamil_golden'];
			if(isset($_POST['Kamil_normal'])) 			$kamil_normal = $_POST['Kamil_normal'];

		if(isset($_POST['a_level_students'])) 			$a_level_students = $_POST['a_level_students'];
		if(isset($_POST['a_level_passed'])) 			$a_level_passed = $_POST['a_level_passed'];
		if(isset($_POST['a_level_golden'])) 			$a_level_golden = $_POST['a_level_golden'];
		if(isset($_POST['a_level_normal'])) 			$a_level_normal = $_POST['a_level_normal'];

		if(isset($_POST['o_level_students'])) 			$o_level_students = $_POST['o_level_students'];
		if(isset($_POST['o_level_passed'])) 			$o_level_passed = $_POST['o_level_passed'];
		if(isset($_POST['o_level_golden'])) 			$o_level_golden = $_POST['o_level_golden'];
		if(isset($_POST['o_level_normal'])) 			$o_level_normal = $_POST['o_level_normal'];
?>
<!DOCTYPE html>   
<head>  
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"  />
</head>
</html>

<?php

require_once('connect.php');

$query_id = "select count(fee_id) from kolorob.education_service_provider_exam_fees_details";
$result_id = pg_query($query_id);
$id_row = pg_fetch_assoc($result_id);
$value = reset($id_row);
$current_id = $identifier_id.++$value;
$result2 = pg_query($dbconn,"insert into kolorob.education_service_provider_exam_fees_details values ('$current_id','$identifier_id','$pre_school_free','$pre_school_stipend_speciality','$pre_school_stipend_type','$pre_school_stipend_details','$pre_school_max_fee','$pre_school_min_fee','$pre_school_coaching_fee','$pre_school_additional_fee','$i_v_free','$i_v_stipend_speciality','$i_v_stipend_type','$i_v_stipend_details','$i_v_max_fee','$i_v_min_fee','$i_v_coaching_fee','$i_v_additional_fee','$vi_x_free','$vi_x_stipend_speciality','$vi_x_stipend_type','$vi_x_stipend_details','$vi_x_max_fee','$vi_x_min_fee','$vi_x_coaching_fee','$vi_x_additional_fee','$xi_xii_free','$xi_xii_stipend_speciality','$xi_xii_stipend_type','$xi_xii_stipend_details','$xi_xii_max_fee','$xi_xii_min_fee','$xi_xii_coaching_fee','$xi_xii_additional_fee','$uni_free','$uni_stipend_speciality','$uni_stipend_type','$uni_stipend_details','$uni_max_fee','$uni_min_fee','$uni_coaching_fee','$uni_additional_fee');");

$query_id = "select count(result_id) from kolorob.education_service_provider_result";
$result_id = pg_query($query_id);
$id_row = pg_fetch_assoc($result_id);
$value = reset($id_row);
$current_id = $identifier_id.++$value;
$result3 = pg_query($dbconn,"insert into kolorob.education_service_provider_result values ('$identifier_id','$current_id','$pec_students','$pec_passed','$pec_golden','$pec_normal','$jsc_students','$jsc_passed','$jsc_golden','$jsc_normal','$ssc_students','$ssc_passed','$ssc_golden','$ssc_normal','$hsc_students','$hsc_passed','$hsc_golden','$hsc_normal','$ssc_v_students','$ssc_v_passed','$ssc_v_golden','$ssc_v_normal','$hsc_v_students','$hsc_v_passed','$hsc_v_golden','$hsc_v_normal','$alim_students','$alim_passed','$alim_golden','$alim_normal','$fazil_students','$fazil_passed','$fazil_golden','$fazil_normal','$kamil_students','$kamil_passed','$kamil_golden','$kamil_normal','$a_level_students','$a_level_passed','$a_level_golden','$a_level_normal','$o_level_students','$o_level_passed','$o_level_golden','$o_level_normal');"); 
							
//insert into education_service_provider table which is common for all

/*$query_id = "select count(serviceprovider_id) from kolorob.education_service_provider";
$result_id = pg_query($query_id);
$id_row = pg_fetch_assoc($result_id);
$value = reset($id_row);
$current_id = $identifier_id.++$value;
$query_id_1 = "select edu_subcategory_id from kolorob.education_subcategory where edu_subcategory_name='$edu_subcategory_name'";
//$result = pg_query("insert into kolorob.education_service_provider VALUES ($identifier_id,1,$edu_subcategory_id,1,$edu_name,$edtype,$hostel_facility,$transport_facility,$playground,$contact_person_designation,$contact_no,$email_address,$website_link,$fb_link,$registered_with,$registration_no,$total_students,$total_classes,$total_teachers,$course_provided,$shift,$canteen_facility,$data_collector_name,$date);");
$result_id_1 = pg_query($query_id_1);
$id_row_1 = pg_fetch_assoc($result_id_1);
$value_1 = reset($id_row_1);
$result1 = pg_query($dbconn,"insert into kolorob.education_service_provider values ('$identifier_id','$current_id',$value_1,1,'$edu_name_eng','$edu_name_ban','$edtype','$hostel_facility','$transport_facility','$playground','$contact_person_designation','$contact_no','$email_address','$website_link','$fb_link','$registered_with','$registration_no',$total_students,$total_classes,$total_teachers,'course_provided','$shift','$canteen_facility','$data_collector_name','$date','$username',now(),'$additional_info');");
//dump the result object
//var_dump($result1); 


//insert into education_service_provider_exam_fees_details table 

$query_id = "select count(fee_id) from kolorob.education_service_provider_exam_fees_details";
$result_id = pg_query($query_id);
$id_row = pg_fetch_assoc($result_id);
$value = reset($id_row);
$current_id = $identifier_id.++$value;
$result2 = pg_query($dbconn,"insert into kolorob.education_service_provider_exam_fees_details values ('$current_id','$identifier_id','$pre_school_free','$pre_school_stipend_facility','$pre_school_max_fee','$pre_school_min_fee','$pre_school_coaching_fee','$pre_school_additional_fee','$i_v_free','$i_v_stipend_facility','$i_v_max_fee','$i_v_min_fee','$i_v_coaching_fee','$i_v_additional_fee','$vi_x_free','$vi_x_stipend_facility','$vi_x_max_fee','$vi_x_min_fee','$vi_x_coaching_fee','$vi_x_additional_fee','$xi_xii_free','$xi_xii_stipend_facility','$xi_xii_max_fee','$xi_xii_min_fee','$xi_xii_coaching_fee','$xi_xii_additional_fee','$uni_free','$uni_stipend_facility','$uni_max_fee','$uni_min_fee','$uni_coaching_fee','$uni_additional_fee');");
//dump the result object
//var_dump($result2); 

//insert into education_service_provider_result table 

$query_id = "select count(result_id) from kolorob.education_service_provider_result";
$result_id = pg_query($query_id);
$id_row = pg_fetch_assoc($result_id);
$value = reset($id_row);
$current_id = $identifier_id.++$value;
$result3 = pg_query($dbconn,"insert into kolorob.education_service_provider_result values ('$identifier_id','$current_id','$pec_students','$pec_passed','$pec_golden','$pec_normal','$jsc_students','$jsc_passed','$jsc_golden','$jsc_normal','$ssc_students','$ssc_passed','$ssc_golden','$ssc_normal','$hsc_students','$hsc_passed','$hsc_golden','$hsc_normal','$ssc_v_students','$ssc_v_passed','$ssc_v_golden','$ssc_v_normal','$hsc_v_students','$hsc_v_passed','$hsc_v_golden','$hsc_v_normal','$alim_students','$alim_passed','$alim_golden','$alim_normal','$fazil_students','$fazil_passed','$fazil_golden','$fazil_normal','$kamil_students','$kamil_passed','$kamil_golden','$kamil_normal','$a_level_students','$a_level_passed','$a_level_golden','$a_level_normal','$o_level_students','$o_level_passed','$o_level_golden','$o_level_normal');");
//dump the result object
//var_dump($result3); 
//echo 'Successfully entered into Education table.';
//course table input 
if(isset($_POST['course_name'])){
  foreach ($_POST['course_name'] as $key => $value) 
        {
            $course_name = $_POST["course_name"][$key];
            $duration = $_POST["duration"][$key];
            $admission_time = $_POST["admission_time"][$key];
			$cost = $_POST["cost"][$key];
			$course_type=$_POST["course_type"][$key];

			//echo $course_name;
			//echo $duration; 
			//echo $admission_time;
			//echo $cost;
			//echo $course_type;
			//if($course_type=='')

			$query_id = "select count(course_id) from kolorob.education_service_provider_course";
			$result_id = pg_query($query_id);
			$id_row = pg_fetch_assoc($result_id);
			$value = reset($id_row);
			$current_id = $identifier_id.++$value;

			$query_id_1 = "select edu_subcategory_id from kolorob.education_subcategory where edu_subcategory_name='$edu_subcategory_name'";
			$result_id_1 = pg_query($query_id_1);
			$id_row_1 = pg_fetch_assoc($result_id_1);
			$value_1 = reset($id_row_1);
			$result2 = pg_query($dbconn,"insert into kolorob.education_service_provider_course values ('$current_id','$identifier_id',$value_1,'$course_name','$duration','$admission_time','$cost','$course_type');");

		 }
}*/

		 if(isset($_POST['reference_number']))
			{
				foreach ($_POST['reference_number'] as $key => $value) 
					{
            
							$reference_number = $_POST["reference_number"][$key];
							$query_id = "select count(serviceprovider_id) from kolorob.education_service_provider";
							$result_id = pg_query($query_id);
							$id_row = pg_fetch_assoc($result_id);
							$value = reset($id_row);
							$current_id = $identifier_id.++$value;
							$result1 = pg_query($dbconn,"insert into kolorob.education_service_provider(identifier_id ,
  serviceprovider_id ,
  edu_subcategory_id,
  category_id ,
  edu_name_eng ,
  edu_name_ban ,
  edtype ,
  hostel_facility ,
  transport_facility ,
  playground ,
  contact_person_designation ,
  contact_no ,
  email_address ,
  website_link ,
  fb_link ,
  registered_with ,
  registration_no ,
  total_students ,
  total_classes ,
  total_teachers ,
  course_provided ,
  shift ,
  canteen_facility ,
  data_collector_name ,
  date ,
  edited_by ,
  uploading_time ,
  additional_info ,
  node_type ,
  area ,
  address ,
  latitude ,
  longitude,opening_time,break_time,closing_time,road,block,landmark,breaktime2,additional_time ) values ($identifier_id,'$current_id','$reference_number',1,'$edu_name_eng','$edu_name_ban','$edtype','$hostel_facility','$transport_facility','$playground','$contact_person_designation','$contact_no','$email_address','$website_link','$fb_link','$registered_with','$registration_no',$total_students,$total_classes,$total_teachers,'$course_provided','$shift','$canteen_facility','$data_collector_name','$date','$username',now(),'$additional_info','$node_type','$area','$address','$lattitude','$longitude','$otime','$btime1','$ctime','$road','$block','$landmark','$btime2','$adtime');");
						if(isset($_POST['course_name']))
							{
							  foreach ($_POST['course_name'] as $key => $value) 
									{
										$course_name = $_POST["course_name"][$key];
										$duration = $_POST["duration"][$key];
										$admission_time = $_POST["admission_time"][$key];
										$cost = $_POST["cost"][$key];
										$course_type=$_POST["course_type"][$key];

										//echo $course_name;
										//echo $duration; 
										//echo $admission_time;
										//echo $cost;
										//echo $course_type;
										//if($course_type=='')

										$query_id = "select count(course_id) from kolorob.education_service_provider_course";
										$result_id = pg_query($query_id);
										$id_row = pg_fetch_assoc($result_id);
										$value = reset($id_row);
										$current_id = $identifier_id.++$value;

										//$query_id_1 = "select edu_subcategory_id from kolorob.education_subcategory where edu_subcategory_name='$edu_subcategory_name'";
										//$result_id_1 = pg_query($query_id_1);
										//$id_row_1 = pg_fetch_assoc($result_id_1);
										//$value_1 = reset($id_row_1);
										$result2 = pg_query($dbconn,"insert into kolorob.education_service_provider_course values ('$current_id','$identifier_id','$reference_number','$course_name','$duration','$admission_time','$cost','$course_type');");

									 }
							}
					}
			}

  if($result1!=null) 
  {
    echo "<script type='text/javascript'> 
	alert('Data Successfully Added into Education table for node_id= $identifier_id and Institution= $edu_name_eng and $edu_name_ban!')
	</script>";
	
	echo '<script type="text/javascript">document.location="education.php";</script>';

  }
  else
  {
		echo "<script type='text/javascript'> alert('Wrong Input!') </script>";
		echo '<script type="text/javascript"> document.location="education.php";</script>';
  }

pg_close($dbconn); 
}
else{
		echo "<script type='text/javascript'> location.href = 'login_form.php'</script>";
	}

?>

