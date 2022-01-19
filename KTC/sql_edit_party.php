<?php  
  session_start();
  include 'config.php';

if($_POST['party_name'])
{
//$date1=$_POST['date1'].' '.date("h:i:sa");
$sql = "UPDATE party SET party_name='".$_POST["party_name"]."', party_address='".$_POST["party_address"]."', party_mobile_no='".$_POST["party_mobile_no"]."',party_GST_NO='".$_POST["party_gst"]."' WHERE id_party='".$_POST["party_id"]."' ";


            if (mysqli_query($conn,$sql) === TRUE)
			{
				header('location:edit_party.php');
	      }
      else
				{
						echo "Error: " . $conn->error . "<br>";
				}


}


  ?>