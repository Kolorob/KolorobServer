<?php
 
 if($_SERVER['REQUEST_METHOD']=='POST'){
 $username = $_POST['username'];
 $userage = $_POST['userage'];
 $usercontact = $_POST['usercontact'];
$issuetype = $_POST['issuetype'];
 $issuedetails = $_POST['issuedetails'];
 $categoryname = $_POST['categoryname'];
 $subcategoryname = $_POST['subcategoryname'];
 require_once('connect.php');
 
$result2 = pg_query($dbconn,"INSERT INTO kolorob.user_feedback (username,contactno,issuetype,issuedetails,categoryname,subcategoryname,feedback_time,userage) VALUES ('$username','$usercontact','$issuetype','$issuedetails','$categoryname','$subcategoryname',now(),'$userage' );");
 
 
 if($result2!=null) {
 echo "Successfully submitted feedback";
 }else{
 echo "Please enter information carefully!";
 
 }
 }else{
echo 'error';
}
