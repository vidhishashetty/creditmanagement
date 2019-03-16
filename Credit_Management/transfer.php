 <?php
if(isset($_POST['new']))
 {
   include_once 'include/dbh.cm.php';     //connect to database
   $luname=$_POST['se'];
   $lpsw=$_POST['re'];
   $amnt=$_POST['pt'];
   if((empty($luname)||empty($lpsw)||empty($amnt)))
   {
    header("Location:transfer.html?error=empty_fields");
        exit();
    } 
     // $ab="SELECT `current_credit` FROM `user` WHERE `user_id`=?";
$ab="SELECT * FROM `user` WHERE `user_id`=$luname";
 $at="SELECT * FROM `user` WHERE `user_id`=$lpsw";

 $retval=mysqli_query($conn,$ab);
 $hw=mysqli_query($conn,$at);

 $row = mysqli_fetch_assoc($retval);
  $ac  =  $row['current_credit'];

 $rr=mysqli_fetch_assoc($hw);
   $am  =  $rr['current_credit'];

     $nf=$ac-$amnt; 
     $rf=$amnt+$am;
     if($nf>0){
   
   
    mysqli_query($conn,"UPDATE `user` SET `current_credit`=$nf WHERE `user_id`=$luname");
    mysqli_query($conn,"UPDATE `user` SET `current_credit`=$rf WHERE `user_id`=$lpsw");
  
      //TRANSFER TABLE/
   $sql= "INSERT INTO `transfers`( `From_id`, `To_id`, `Credit Pts`) VALUES (?,?,?)";
  $stmt=mysqli_stmt_init($conn);
      if(!mysqli_stmt_prepare($stmt,$sql)){
        exit();
      }
      mysqli_stmt_bind_param($stmt,"iii",$luname,$lpsw,$amnt);
      mysqli_stmt_execute($stmt);
      header("Location:transfer.html?result=Successful_Transaction");

}
}
  else{
    header("Location:transfer.php?error=sender does not have enough credit");
  }
 