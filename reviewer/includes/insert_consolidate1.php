<?php 

if (isset($_POST['submit_consolidate1'])) {
    $formID = $_POST['formid']; 
    $clinician_email = $_POST['clinician_email']; 
    $clinician_name = $_POST['clinician_name']; 
    $comment_to_clinician = $_POST['comment_to_clinician'];
    $reviewer_names = $_POST['reviewer_names'];
    $genotyping = $_POST['genotyping']; 
    $date_reviewed = date('d/m/Y');

    // echo "<br>$comment_to_clinician";
    // echo "<br>clinician_email(insert)consolidate1) is $clinician_email";
    
    // delete if exists already, just-in-case
    mysqli_query($bd, "DELETE FROM expert_review_consolidate1 WHERE $formID = '$formID'");

    $insert_expert_review_consolidate1="INSERT INTO expert_review_consolidate1 (form_id,genotyping,comment_to_clinician, reviewer_names, date_reviewed)
VALUES (
'$formID', '$genotyping', '$comment_to_clinician', '$reviewer_names', '$date_reviewed')";
    mysqli_query($bd, $insert_expert_review_consolidate1);	    
    email_msg('insert_consolidate1_comment', $clinician_email);
}
?>