<?php  
  session_start();
  include 'config.php';

if($_GET['id'])
{


	$query_importer = "SELECT DISTINCT created_date FROM bills where invoice_number='".$_GET["id"]."'";
      $result_importer = mysqli_query($conn,$query_importer);
      if(mysqli_num_rows($result_importer) > 0)
{
    while($row = mysqli_fetch_assoc($result_importer))
    {

//$date1=$_POST['date1'].' '.date("h:i:sa");
$sql = "UPDATE bills SET status=2 WHERE invoice_number='".$_GET["id"]."' ";


            if (mysqli_query($conn,$sql) === TRUE)
			{


					$sql23 = "DELETE FROM ledger_account WHERE created_date ='".$row["created_date"]."' ";


            if (mysqli_query($conn,$sql23) === TRUE)
			{
				header('location:report.php');
	      }
      else
				{
						echo "Error: " . $conn->error . "<br>";
				}



				///header('location:report.php');
	      }
      else
				{
						echo "Error: " . $conn->error . "<br>";
				}













}
}

}


  ?>