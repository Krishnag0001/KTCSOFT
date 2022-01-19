<?php  
  session_start();
  include 'config.php';
 			$query_invoice = "SELECT invoice_number FROM bills order by invoice_number desc limit 1";
      		$result_invoice = mysqli_query($conn,$query_invoice);
			if(mysqli_num_rows($result_invoice) > 0)
			{
    			while($row = mysqli_fetch_assoc($result_invoice))
    			{	
    			$_SESSION["invoice_number"]=$row['invoice_number']+1;
 					//echo $_SESSION["invoice_number"];
				}
 			}	
$date=$_POST['date_id'].' '.date("h:i:sa");
if($_POST['good1']!=0)
{

$sql = "INSERT INTO bills (invoice_number, customer_id, bill_type,goods_id,rate,quantity, qty_type,
  total, cgst_percent,cgst_amount,sgst_percent, sgst_amount,taxable_value, all_total, transport_hamali, round_off, grand_total, created_date)
          VALUES ('".$_SESSION["invoice_number"]."','".$_SESSION["customer_id"]."','".$_POST['bill_type']."','".$_POST['good1']."','".$_POST['rate1']."' ,'".$_POST['qty1']."',
            '".$_POST['qty_type1']."','".$_POST['total1']."','".$_POST['cgst_per_1']."','".$_POST['cgst_amount1']."','".$_POST['sgst_per_1']."','".$_POST['sgst_amount1']."',
            '".$_POST['taxable_value1']."','".$_POST['all_total1']."','".$_POST['hamali']."','".$_POST['round_off']."','".$_POST['all_total_t_alll']."', '".$date."')";


            if (mysqli_query($conn,$sql) === TRUE)
			{
				$query_goods_list = "SELECT * FROM goods_quantity where id_good='".$_POST['good1']."'";
      $result_goods17 = mysqli_query($conn,$query_goods_list);

      //$quantity_old=0;

      if(mysqli_num_rows($result_goods17) > 0)
{
    while($row = mysqli_fetch_assoc($result_goods17))
    {
    	$quantity_new=$row['goods_quantity']-$_POST['qty1'];

    	$sql_up1 = "UPDATE goods_quantity SET goods_quantity='".$quantity_new."' WHERE id_good='".$_POST["good1"]."' ";


            if (mysqli_query($conn,$sql_up1) === TRUE)
			{
				//header('location:add_quantity.php');
	      }
      else
				{
						echo "Error: " . $conn->error . "<br>";
				}


}

    }
				if($_POST['good2']!=0)
					{
						$sql2 = "INSERT INTO bills (invoice_number, customer_id, bill_type,goods_id,rate,quantity, qty_type, total, cgst_percent,cgst_amount,sgst_percent, sgst_amount,taxable_value, all_total, transport_hamali, round_off, grand_total, created_date)
          VALUES ('".$_SESSION["invoice_number"]."','".$_SESSION["customer_id"]."','".$_POST['bill_type']."','".$_POST['good2']."','".$_POST['rate2']."' ,'".$_POST['qty2']."',
            '".$_POST['qty_type2']."','".$_POST['total2']."','".$_POST['cgst_per_2']."','".$_POST['cgst_amount2']."','".$_POST['sgst_per_2']."','".$_POST['sgst_amount2']."',
            '".$_POST['taxable_value2']."','".$_POST['all_total2']."','".$_POST['hamali']."','".$_POST['round_off']."','".$_POST['all_total_t_alll']."','".$date."')";


            if (mysqli_query($conn,$sql2) === TRUE)
			{
				$query_goods_list = "SELECT * FROM goods_quantity where id_good='".$_POST['good2']."'";
      $result_goods17 = mysqli_query($conn,$query_goods_list);

      //$quantity_old=0;

      if(mysqli_num_rows($result_goods17) > 0)
{
    while($row = mysqli_fetch_assoc($result_goods17))
    {
    	$quantity_new=$row['goods_quantity']-$_POST['qty2'];

    	$sql_up1 = "UPDATE goods_quantity SET goods_quantity='".$quantity_new."' WHERE id_good='".$_POST["good2"]."' ";


            if (mysqli_query($conn,$sql_up1) === TRUE)
			{
				//header('location:add_quantity.php');
	      }
      else
				{
						echo "Error: " . $conn->error . "<br>";
				}


}

    }
				if($_POST['good3']!=0)
					{
										$sql3 = "INSERT INTO bills (invoice_number, customer_id, bill_type,goods_id,rate,quantity, qty_type, total, cgst_percent,cgst_amount,sgst_percent, sgst_amount,taxable_value, all_total, transport_hamali, round_off, grand_total, created_date)
          VALUES ('".$_SESSION["invoice_number"]."','".$_SESSION["customer_id"]."','".$_POST['bill_type']."','".$_POST['good3']."','".$_POST['rate3']."' ,'".$_POST['qty3']."',
            '".$_POST['qty_type3']."','".$_POST['total3']."','".$_POST['cgst_per_3']."','".$_POST['cgst_amount3']."','".$_POST['sgst_per_3']."','".$_POST['sgst_amount3']."',
            '".$_POST['taxable_value3']."','".$_POST['all_total3']."','".$_POST['hamali']."','".$_POST['round_off']."','".$_POST['all_total_t_alll']."','".$date."')";


            if (mysqli_query($conn,$sql3) === TRUE)
			{
				$query_goods_list = "SELECT * FROM goods_quantity where id_good='".$_POST['good3']."'";
      $result_goods17 = mysqli_query($conn,$query_goods_list);

      //$quantity_old=0;

      if(mysqli_num_rows($result_goods17) > 0)
{
    while($row = mysqli_fetch_assoc($result_goods17))
    {
    	$quantity_new=$row['goods_quantity']-$_POST['qty3'];

    	$sql_up1 = "UPDATE goods_quantity SET goods_quantity='".$quantity_new."' WHERE id_good='".$_POST["good3"]."' ";


            if (mysqli_query($conn,$sql_up1) === TRUE)
			{
				//header('location:add_quantity.php');
	      }
      else
				{
						echo "Error: " . $conn->error . "<br>";
				}


}

    }
				if($_POST['good4']!=0)
					{
												$sql4 = "INSERT INTO bills (invoice_number, customer_id, bill_type,goods_id,rate,quantity, qty_type, total, cgst_percent,cgst_amount,sgst_percent, sgst_amount,taxable_value, all_total, transport_hamali, round_off, grand_total, created_date)
          VALUES ('".$_SESSION["invoice_number"]."','".$_SESSION["customer_id"]."','".$_POST['bill_type']."','".$_POST['good4']."','".$_POST['rate4']."' ,'".$_POST['qty4']."',
            '".$_POST['qty_type4']."','".$_POST['total4']."','".$_POST['cgst_per_4']."','".$_POST['cgst_amount4']."','".$_POST['sgst_per_4']."','".$_POST['sgst_amount4']."',
            '".$_POST['taxable_value4']."','".$_POST['all_total4']."','".$_POST['hamali']."','".$_POST['round_off']."','".$_POST['all_total_t_alll']."','".$date."')";


            if (mysqli_query($conn,$sql4) === TRUE)
			{
				$query_goods_list = "SELECT * FROM goods_quantity where id_good='".$_POST['good4']."'";
      $result_goods17 = mysqli_query($conn,$query_goods_list);

      //$quantity_old=0;

      if(mysqli_num_rows($result_goods17) > 0)
{
    while($row = mysqli_fetch_assoc($result_goods17))
    {
    	$quantity_new=$row['goods_quantity']-$_POST['qty4'];

    	$sql_up1 = "UPDATE goods_quantity SET goods_quantity='".$quantity_new."' WHERE id_good='".$_POST["good4"]."' ";


            if (mysqli_query($conn,$sql_up1) === TRUE)
			{
				//header('location:add_quantity.php');
	      }
      else
				{
						echo "Error: " . $conn->error . "<br>";
				}


}

    }
				if($_POST['good5']!=0)
					{
												$sql5 = "INSERT INTO bills (invoice_number, customer_id, bill_type,goods_id,rate,quantity, qty_type, total, cgst_percent,cgst_amount,sgst_percent, sgst_amount,taxable_value, all_total, transport_hamali, round_off, grand_total, created_date)
          VALUES ('".$_SESSION["invoice_number"]."','".$_SESSION["customer_id"]."','".$_POST['bill_type']."','".$_POST['good5']."','".$_POST['rate5']."' ,'".$_POST['qty5']."',
            '".$_POST['qty_type5']."','".$_POST['total5']."','".$_POST['cgst_per_5']."','".$_POST['cgst_amount5']."','".$_POST['sgst_per_5']."','".$_POST['sgst_amount5']."',
            '".$_POST['taxable_value5']."','".$_POST['all_total5']."','".$_POST['hamali']."','".$_POST['round_off']."','".$_POST['all_total_t_alll']."','".$date."')";


            if (mysqli_query($conn,$sql5) === TRUE)
			{
				$query_goods_list = "SELECT * FROM goods_quantity where id_good='".$_POST['good5']."'";
      $result_goods17 = mysqli_query($conn,$query_goods_list);

      //$quantity_old=0;

      if(mysqli_num_rows($result_goods17) > 0)
{
    while($row = mysqli_fetch_assoc($result_goods17))
    {
    	$quantity_new=$row['goods_quantity']-$_POST['qty5'];

    	$sql_up1 = "UPDATE goods_quantity SET goods_quantity='".$quantity_new."' WHERE id_good='".$_POST["good5"]."' ";


            if (mysqli_query($conn,$sql_up1) === TRUE)
			{
				//header('location:add_quantity.php');
	      }
      else
				{
						echo "Error: " . $conn->error . "<br>";
				}


}

    }
				if($_POST['good6']!=0)
					{
								$sql6 = "INSERT INTO bills (invoice_number, customer_id, bill_type,goods_id,rate,quantity, qty_type, total, cgst_percent,cgst_amount,sgst_percent, sgst_amount,taxable_value, all_total, transport_hamali, round_off, grand_total, created_date)
          VALUES ('".$_SESSION["invoice_number"]."','".$_SESSION["customer_id"]."','".$_POST['bill_type']."','".$_POST['good6']."','".$_POST['rate6']."' ,'".$_POST['qty6']."',
            '".$_POST['qty_type6']."','".$_POST['total6']."','".$_POST['cgst_per_6']."','".$_POST['cgst_amount6']."','".$_POST['sgst_per_6']."','".$_POST['sgst_amount6']."',
            '".$_POST['taxable_value6']."','".$_POST['all_total6']."','".$_POST['hamali']."','".$_POST['round_off']."','".$_POST['all_total_t_alll']."','".$date."')";


            if (mysqli_query($conn,$sql6) === TRUE)
			{
				$query_goods_list = "SELECT * FROM goods_quantity where id_good='".$_POST['good6']."'";
      $result_goods17 = mysqli_query($conn,$query_goods_list);

      //$quantity_old=0;

      if(mysqli_num_rows($result_goods17) > 0)
{
    while($row = mysqli_fetch_assoc($result_goods17))
    {
    	$quantity_new=$row['goods_quantity']-$_POST['qty6'];

    	$sql_up1 = "UPDATE goods_quantity SET goods_quantity='".$quantity_new."' WHERE id_good='".$_POST["good6"]."' ";


            if (mysqli_query($conn,$sql_up1) === TRUE)
			{
				//header('location:add_quantity.php');
	      }
      else
				{
						echo "Error: " . $conn->error . "<br>";
				}


}

    }
				if($_POST['good7']!=0)
					{
								$sql7 = "INSERT INTO bills (invoice_number, customer_id, bill_type,goods_id,rate,quantity, qty_type, total, cgst_percent,cgst_amount,sgst_percent, sgst_amount,taxable_value, all_total, transport_hamali, round_off, grand_total, created_date)
          VALUES ('".$_SESSION["invoice_number"]."','".$_SESSION["customer_id"]."','".$_POST['bill_type']."','".$_POST['good7']."','".$_POST['rate7']."' ,'".$_POST['qty7']."',
            '".$_POST['qty_type7']."','".$_POST['total7']."','".$_POST['cgst_per_7']."','".$_POST['cgst_amount7']."','".$_POST['sgst_per_7']."','".$_POST['sgst_amount7']."',
            '".$_POST['taxable_value7']."','".$_POST['all_total7']."','".$_POST['hamali']."','".$_POST['round_off']."','".$_POST['all_total_t_alll']."','".$date."')";


            if (mysqli_query($conn,$sql7) === TRUE)
			{
				$query_goods_list = "SELECT * FROM goods_quantity where id_good='".$_POST['good7']."'";
      $result_goods17 = mysqli_query($conn,$query_goods_list);

      //$quantity_old=0;

      if(mysqli_num_rows($result_goods17) > 0)
{
    while($row = mysqli_fetch_assoc($result_goods17))
    {
    	$quantity_new=$row['goods_quantity']-$_POST['qty7'];

    	$sql_up1 = "UPDATE goods_quantity SET goods_quantity='".$quantity_new."' WHERE id_good='".$_POST["good7"]."' ";


            if (mysqli_query($conn,$sql_up1) === TRUE)
			{
				//header('location:add_quantity.php');
	      }
      else
				{
						echo "Error: " . $conn->error . "<br>";
				}


}

    }
				if($_POST['good8']!=0)
					{
								$sql8 = "INSERT INTO bills (invoice_number, customer_id, bill_type,goods_id,rate,quantity, qty_type, total, cgst_percent,cgst_amount,sgst_percent, sgst_amount,taxable_value, all_total, transport_hamali, round_off, grand_total, created_date)
          VALUES ('".$_SESSION["invoice_number"]."','".$_SESSION["customer_id"]."','".$_POST['bill_type']."','".$_POST['good8']."','".$_POST['rate8']."' ,'".$_POST['qty8']."',
            '".$_POST['qty_type8']."','".$_POST['total8']."','".$_POST['cgst_per_8']."','".$_POST['cgst_amount8']."','".$_POST['sgst_per_8']."','".$_POST['sgst_amount8']."',
            '".$_POST['taxable_value8']."','".$_POST['all_total8']."','".$_POST['hamali']."','".$_POST['round_off']."','".$_POST['all_total_t_alll']."','".$date."')";


            if (mysqli_query($conn,$sql8) === TRUE)
			{
				$query_goods_list = "SELECT * FROM goods_quantity where id_good='".$_POST['good8']."'";
      $result_goods17 = mysqli_query($conn,$query_goods_list);

      //$quantity_old=0;

      if(mysqli_num_rows($result_goods17) > 0)
{
    while($row = mysqli_fetch_assoc($result_goods17))
    {
    	$quantity_new=$row['goods_quantity']-$_POST['qty8'];

    	$sql_up1 = "UPDATE goods_quantity SET goods_quantity='".$quantity_new."' WHERE id_good='".$_POST["good8"]."' ";


            if (mysqli_query($conn,$sql_up1) === TRUE)
			{
				//header('location:add_quantity.php');
	      }
      else
				{
						echo "Error: " . $conn->error . "<br>";
				}


}

    }
				if($_POST['good9']!=0)
					{
								$sql9 = "INSERT INTO bills (invoice_number, customer_id, bill_type,goods_id,rate,quantity, qty_type, total, cgst_percent,cgst_amount,sgst_percent, sgst_amount,taxable_value, all_total, transport_hamali, round_off, grand_total, created_date)
          VALUES ('".$_SESSION["invoice_number"]."','".$_SESSION["customer_id"]."','".$_POST['bill_type']."','".$_POST['good9']."','".$_POST['rate9']."' ,'".$_POST['qty9']."',
            '".$_POST['qty_type9']."','".$_POST['total9']."','".$_POST['cgst_per_9']."','".$_POST['cgst_amount9']."','".$_POST['sgst_per_9']."','".$_POST['sgst_amount9']."',
            '".$_POST['taxable_value9']."','".$_POST['all_total9']."','".$_POST['hamali']."','".$_POST['round_off']."','".$_POST['all_total_t_alll']."','".$date."')";


            if (mysqli_query($conn,$sql9) === TRUE)
			{
				$query_goods_list = "SELECT * FROM goods_quantity where id_good='".$_POST['good9']."'";
      $result_goods17 = mysqli_query($conn,$query_goods_list);

      //$quantity_old=0;

      if(mysqli_num_rows($result_goods17) > 0)
{
    while($row = mysqli_fetch_assoc($result_goods17))
    {
    	$quantity_new=$row['goods_quantity']-$_POST['qty9'];

    	$sql_up1 = "UPDATE goods_quantity SET goods_quantity='".$quantity_new."' WHERE id_good='".$_POST["good9"]."' ";


            if (mysqli_query($conn,$sql_up1) === TRUE)
			{
				//header('location:add_quantity.php');
	      }
      else
				{
						echo "Error: " . $conn->error . "<br>";
				}


}

    }
				if($_POST['good10']!=0)
					{
								$sql10 = "INSERT INTO bills (invoice_number, customer_id, bill_type,goods_id,rate,quantity, qty_type, total, cgst_percent,cgst_amount,sgst_percent, sgst_amount,taxable_value, all_total, transport_hamali, round_off, grand_total, created_date)
          VALUES ('".$_SESSION["invoice_number"]."','".$_SESSION["customer_id"]."','".$_POST['bill_type']."','".$_POST['good10']."','".$_POST['rate10']."' ,'".$_POST['qty10']."',
            '".$_POST['qty_type10']."','".$_POST['total10']."','".$_POST['cgst_per_10']."','".$_POST['cgst_amount10']."','".$_POST['sgst_per_10']."','".$_POST['sgst_amount10']."',
            '".$_POST['taxable_value10']."','".$_POST['all_total10']."','".$_POST['hamali']."','".$_POST['round_off']."','".$_POST['all_total_t_alll']."','".$date."')";


            if (mysqli_query($conn,$sql10) === TRUE)
			{
				$query_goods_list = "SELECT * FROM goods_quantity where id_good='".$_POST['good10']."'";
      $result_goods17 = mysqli_query($conn,$query_goods_list);

      //$quantity_old=0;

      if(mysqli_num_rows($result_goods17) > 0)
{
    while($row = mysqli_fetch_assoc($result_goods17))
    {
    	$quantity_new=$row['goods_quantity']-$_POST['qty10'];

    	$sql_up1 = "UPDATE goods_quantity SET goods_quantity='".$quantity_new."' WHERE id_good='".$_POST["good10"]."' ";


            if (mysqli_query($conn,$sql_up1) === TRUE)
			{
				//header('location:add_quantity.php');
	      }
      else
				{
						echo "Error: " . $conn->error . "<br>";
				}


}

    }
				
						if($_POST['good11']!=0)
					{
								$sql11 = "INSERT INTO bills (invoice_number, customer_id, bill_type,goods_id,rate,quantity, qty_type, total, cgst_percent,cgst_amount,sgst_percent, sgst_amount,taxable_value, all_total, transport_hamali, round_off, grand_total, created_date)
          VALUES ('".$_SESSION["invoice_number"]."','".$_SESSION["customer_id"]."','".$_POST['bill_type']."','".$_POST['good11']."','".$_POST['rate11']."' ,'".$_POST['qty11']."',
            '".$_POST['qty_type11']."','".$_POST['total11']."','".$_POST['cgst_per_11']."','".$_POST['cgst_amount11']."','".$_POST['sgst_per_11']."','".$_POST['sgst_amount11']."',
            '".$_POST['taxable_value11']."','".$_POST['all_total11']."','".$_POST['hamali']."','".$_POST['round_off']."','".$_POST['all_total_t_alll']."','".$date."')";


            if (mysqli_query($conn,$sql11) === TRUE)
			{
				$query_goods_list = "SELECT * FROM goods_quantity where id_good='".$_POST['good11']."'";
      $result_goods17 = mysqli_query($conn,$query_goods_list);

      //$quantity_old=0;

      if(mysqli_num_rows($result_goods17) > 0)
{
    while($row = mysqli_fetch_assoc($result_goods17))
    {
    	$quantity_new=$row['goods_quantity']-$_POST['qty11'];

    	$sql_up1 = "UPDATE goods_quantity SET goods_quantity='".$quantity_new."' WHERE id_good='".$_POST["good11"]."' ";


            if (mysqli_query($conn,$sql_up1) === TRUE)
			{
				//header('location:add_quantity.php');
	      }
      else
				{
						echo "Error: " . $conn->error . "<br>";
				}


}

    }

					if($_POST['good12']!=0)
					{
								$sql12 = "INSERT INTO bills (invoice_number, customer_id, bill_type,goods_id,rate,quantity, qty_type, total, cgst_percent,cgst_amount,sgst_percent, sgst_amount,taxable_value, all_total, transport_hamali, round_off, grand_total, created_date)
          VALUES ('".$_SESSION["invoice_number"]."','".$_SESSION["customer_id"]."','".$_POST['bill_type']."','".$_POST['good12']."','".$_POST['rate12']."' ,'".$_POST['qty12']."',
            '".$_POST['qty_type12']."','".$_POST['total12']."','".$_POST['cgst_per_12']."','".$_POST['cgst_amount12']."','".$_POST['sgst_per_12']."','".$_POST['sgst_amount12']."',
            '".$_POST['taxable_value12']."','".$_POST['all_total12']."','".$_POST['hamali']."','".$_POST['round_off']."','".$_POST['all_total_t_alll']."','".$date."')";


            if (mysqli_query($conn,$sql12) === TRUE)
			{
				$query_goods_list = "SELECT * FROM goods_quantity where id_good='".$_POST['good12']."'";
      $result_goods17 = mysqli_query($conn,$query_goods_list);

      //$quantity_old=0;

      if(mysqli_num_rows($result_goods17) > 0)
{
    while($row = mysqli_fetch_assoc($result_goods17))
    {
    	$quantity_new=$row['goods_quantity']-$_POST['qty12'];

    	$sql_up1 = "UPDATE goods_quantity SET goods_quantity='".$quantity_new."' WHERE id_good='".$_POST["good12"]."' ";


            if (mysqli_query($conn,$sql_up1) === TRUE)
			{
				//header('location:add_quantity.php');
	      }
      else
				{
						echo "Error: " . $conn->error . "<br>";
				}


}

    }

					if($_POST['good13']!=0)
					{
								$sql13 = "INSERT INTO bills (invoice_number, customer_id, bill_type,goods_id,rate,quantity, qty_type, total, cgst_percent,cgst_amount,sgst_percent, sgst_amount,taxable_value, all_total, transport_hamali, round_off, grand_total, created_date)
          VALUES ('".$_SESSION["invoice_number"]."','".$_SESSION["customer_id"]."','".$_POST['bill_type']."','".$_POST['good13']."','".$_POST['rate13']."' ,'".$_POST['qty13']."',
            '".$_POST['qty_type13']."','".$_POST['total13']."','".$_POST['cgst_per_13']."','".$_POST['cgst_amount13']."','".$_POST['sgst_per_13']."','".$_POST['sgst_amount13']."',
            '".$_POST['taxable_value13']."','".$_POST['all_total13']."','".$_POST['hamali']."','".$_POST['round_off']."','".$_POST['all_total_t_alll']."','".$date."')";


            if (mysqli_query($conn,$sql13) === TRUE)
			{
				$query_goods_list = "SELECT * FROM goods_quantity where id_good='".$_POST['good13']."'";
      $result_goods17 = mysqli_query($conn,$query_goods_list);

      //$quantity_old=0;

      if(mysqli_num_rows($result_goods17) > 0)
{
    while($row = mysqli_fetch_assoc($result_goods17))
    {
    	$quantity_new=$row['goods_quantity']-$_POST['qty13'];

    	$sql_up1 = "UPDATE goods_quantity SET goods_quantity='".$quantity_new."' WHERE id_good='".$_POST["good13"]."' ";


            if (mysqli_query($conn,$sql_up1) === TRUE)
			{
				//header('location:add_quantity.php');
	      }
      else
				{
						echo "Error: " . $conn->error . "<br>";
				}


}

    }
					if($_POST['good14']!=0)
					{
								$sql14 = "INSERT INTO bills (invoice_number, customer_id, bill_type,goods_id,rate,quantity, qty_type, total, cgst_percent,cgst_amount,sgst_percent, sgst_amount,taxable_value, all_total, transport_hamali, round_off, grand_total, created_date)
          VALUES ('".$_SESSION["invoice_number"]."','".$_SESSION["customer_id"]."','".$_POST['bill_type']."','".$_POST['good14']."','".$_POST['rate14']."' ,'".$_POST['qty14']."',
            '".$_POST['qty_type14']."','".$_POST['total14']."','".$_POST['cgst_per_14']."','".$_POST['cgst_amount14']."','".$_POST['sgst_per_14']."','".$_POST['sgst_amount14']."',
            '".$_POST['taxable_value14']."','".$_POST['all_total14']."','".$_POST['hamali']."','".$_POST['round_off']."','".$_POST['all_total_t_alll']."','".$date."')";


            if (mysqli_query($conn,$sql14) === TRUE)
			{
				$query_goods_list = "SELECT * FROM goods_quantity where id_good='".$_POST['good14']."'";
      $result_goods17 = mysqli_query($conn,$query_goods_list);

      //$quantity_old=0;

      if(mysqli_num_rows($result_goods17) > 0)
{
    while($row = mysqli_fetch_assoc($result_goods17))
    {
    	$quantity_new=$row['goods_quantity']-$_POST['qty14'];

    	$sql_up1 = "UPDATE goods_quantity SET goods_quantity='".$quantity_new."' WHERE id_good='".$_POST["good14"]."' ";


            if (mysqli_query($conn,$sql_up1) === TRUE)
			{
				//header('location:add_quantity.php');
	      }
      else
				{
						echo "Error: " . $conn->error . "<br>";
				}


}

    }

					if($_POST['good15']!=0)
					{
								$sql15 = "INSERT INTO bills (invoice_number, customer_id, bill_type,goods_id,rate,quantity, qty_type, total, cgst_percent,cgst_amount,sgst_percent, sgst_amount,taxable_value, all_total, transport_hamali, round_off, grand_total, created_date)
          VALUES ('".$_SESSION["invoice_number"]."','".$_SESSION["customer_id"]."','".$_POST['bill_type']."','".$_POST['good15']."','".$_POST['rate15']."' ,'".$_POST['qty15']."',
            '".$_POST['qty_type15']."','".$_POST['total15']."','".$_POST['cgst_per_15']."','".$_POST['cgst_amount15']."','".$_POST['sgst_per_15']."','".$_POST['sgst_amount15']."',
            '".$_POST['taxable_value15']."','".$_POST['all_total15']."','".$_POST['hamali']."','".$_POST['round_off']."','".$_POST['all_total_t_alll']."','".$date."')";


            if (mysqli_query($conn,$sql15) === TRUE)
			{
        $query_goods_list = "SELECT * FROM goods_quantity where id_good='".$_POST['good15']."'";
			//	$query_goods_list = "SELECT * FROM goods where id_goods='".$_POST['good15']."'";
      $result_goods17 = mysqli_query($conn,$query_goods_list);

      //$quantity_old=0;

      if(mysqli_num_rows($result_goods17) > 0)
{
    while($row = mysqli_fetch_assoc($result_goods17))
    {
      $quantity_new=$row['goods_quantity']-$_POST['qty15'];
    	//$quantity_new=$row['quantity']-$_POST['qty15'];

      $sql_up1 = "UPDATE goods_quantity SET goods_quantity='".$quantity_new."' WHERE id_good='".$_POST["good15"]."' ";

    	//$sql_up1 = "UPDATE goods SET quantity='".$quantity_new."' WHERE id_goods='".$_POST["good15"]."' ";


            if (mysqli_query($conn,$sql_up1) === TRUE)
			{
			
      	header('location:bill_print.php');
	    
        }
      else
				{
						echo "Error: " . $conn->error . "<br>";
				}


}

    }

					


				//echo "OK";
					
      }
       else
				{
						echo "Error: " . $conn->error . "<br>";
				}
					
					}
					else
					{
						header('location:bill_print.php');
					}

					
      }
      else
				{
						echo "Error: " . $conn->error . "<br>";
				}
					
					}
					else
					{
						header('location:bill_print.php');
					}

					
      }
      else
				{
						echo "Error: " . $conn->error . "<br>";
				}
					
					}
					else
					{
						header('location:bill_print.php');
					}

					
      }
      else
				{
						echo "Error: " . $conn->error . "<br>";
				}
					
					}
					else
					{
						header('location:bill_print.php');
					}

					
      }
      else
				{
						echo "Error: " . $conn->error . "<br>";
				}
					
					}
					else
					{
						header('location:bill_print.php');
					}

					
      }
      else
				{
						echo "Error: " . $conn->error . "<br>";
				}
					
					}
					else
					{
						header('location:bill_print.php');
					}

					
      }
      else
				{
						echo "Error: " . $conn->error . "<br>";
				}
					}
					else
					{
						header('location:bill_print.php');
					}
					
      }
      else
				{
						echo "Error: " . $conn->error . "<br>";
				}
					}

					else
					{
						header('location:bill_print.php');
					}
      }
      else
				{
						echo "Error: " . $conn->error . "<br>";
				}
					}

					else
					{
						header('location:bill_print.php');
					}
      }
      else
				{
						echo "Error: " . $conn->error . "<br>";
				}
					}

					else
					{
						header('location:bill_print.php');
					}
      }
      else
				{
						echo "Error: " . $conn->error . "<br>";
				}
					}

					else
					{
						header('location:bill_print.php');
					}
      }
      else
				{
						echo "Error: " . $conn->error . "<br>";
				}
					}

					else
					{
						header('location:bill_print.php');
					}
      }
      else
				{
						echo "Error: " . $conn->error . "<br>";
				}			
					}

					else
					{
						header('location:bill_print.php');
					}
      }
      else
				{
						echo "Error: " . $conn->error . "<br>";
				}
					}
				else
					{
						header('location:bill_print.php');
					}		

		      }
      else
				{
						echo "Error: " . $conn->error . "<br>";
				}


}





  ?>