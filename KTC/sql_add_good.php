<?php  
  session_start();
  include 'config.php';

if($_POST['good_name'])
{
	$gst_rate1=($_POST['our_rate'] * $_POST['gst_per']/100);
	$gst_rate=$gst_rate1+$_POST['our_rate'];
$date1=$_POST['purchase_date'].' '.date("h:i:sa");
$sql = "INSERT INTO goods (goods_name, HSN_code, party_id, purchasing_rate, purchase_date, our_rate, qty_type, gst_in_per, gst_rate)
          VALUES ('".$_POST["good_name"]."','".$_POST['hsn_code']."','".$_POST['party_name']."','".$_POST['purchasing_rate']."', '".$date1."','".$_POST['our_rate']."','".$_POST['qty_type']."', '".$_POST['gst_per']."','".round($gst_rate)."')";


            if (mysqli_query($conn,$sql) === TRUE)
			{
				$_SESSION["last_id_good"] = $conn->insert_id;


				$sql22 = "INSERT INTO goods_quantity (id_good, goods_quantity)
          VALUES ('".$_SESSION["last_id_good"]."','".$_POST['quantity']."')";


            if (mysqli_query($conn,$sql22) === TRUE)
			{	





				header('location:add_goods.php');


				  }
      else
				{
						echo "Error: " . $conn->error . "<br>";
				}
	      }
      else
				{
						echo "Error: " . $conn->error . "<br>";
				}


}


  ?>