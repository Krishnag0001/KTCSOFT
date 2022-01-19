<?php  
  session_start();
  include 'config.php';

if($_POST['good_name'])
{
//$date1=$_POST['date1'].' '.date("h:i:sa");
	$gst_rate1=($_POST['our_rate'] * $_POST['gst_per']/100);
	$gst_rate=$gst_rate1+$_POST['our_rate'];
$sql = "UPDATE goods SET goods_name='".$_POST["good_name"]."', HSN_code='".$_POST["hsn_code"]."', our_rate='".$_POST['our_rate']."', gst_in_per='".$_POST['gst_per']."', gst_rate='".round($gst_rate)."' WHERE id_goods='".$_POST["good_id"]."' ";


            if (mysqli_query($conn,$sql) === TRUE)
			{
				header('location:edit_goods.php');
	      }
      else
				{
						echo "Error: " . $conn->error . "<br>";
				}

}


  ?>