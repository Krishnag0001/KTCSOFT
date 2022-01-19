<?php  
  session_start();
  ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    
    <!-- <meta http-equiv="Content-Security-Policy" content="default-src *; script-src 'self' 'unsafe-inline' 'unsafe-eval' *; style-src  'self' 'unsafe-inline' *"> -->

    <title>Utilities</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="css/bootstrap-theme.min.css" crossorigin="anonymous">
<link rel="icon" href="abc.ico">

<!-- Latest compiled and minified JavaScript -->
<script src="js/jquery-2.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>

  <script language="javascript" type="text/javascript">
  function printContent(el){
    //alert("hello");
  var restorepage = document.body.innerHTML;
  var printcontent = document.getElementById("div1").innerHTML;
  document.body.innerHTML = printcontent;
  window.print();
  document.body.innerHTML = restorepage;
}
  </script>

</head>
<body>
	
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><font color="orange">Utilities</font></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li  class="dropdown active">
         <a href="index.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sales <span class="caret"></span></a>
     <ul class="dropdown-menu">
            <li><a href="index.php"> Create Bill</a></li>
            <li><a href="view_bill.php">View Bills</a></li>
            <li><a href="add_expences.php">Add Expences</a></li>
            <li><a href="cash.php">Cash Paid</a></li>

            
                      </ul>   
        </li>
          
               <li><a href="report.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Report <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="report.php">Report</a></li>
                        <li><a href="show_quantity_report.php">Quantity Report</a></li>
             <li><a href="view_expences.php">View Expences</a></li>
                         <li><a href="view_replace.php">View Replacement</a></li>
            <li><a href="backup.php">Backup</a></li>
            </ul>
                  </li>
        <li  class="dropdown"><a href="add_customer.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Create Account <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="add_customer.php">Add Customer</a></li>
            <li><a href="add_party.php">Add Party</a></li>
            <li><a href="add_goods.php">Add Goods</a></li>
            <li><a href="add_quantity.php">Add Goods Quantity</a></li>
            </ul>
                  </li>

                 <li  class="dropdown"><a href="ledger.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ledger Account <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="ledger.php">Ledger Account</a></li>
            <li><a href="add_party_ledger.php">Party Ledger Account</a></li>
            
            </ul>
                  </li>

                <li  class="dropdown"><a href="edit_customer.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Edit Account <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="edit_customer.php">Edit Customer</a></li>
            <li><a href="edit_goods.php">Edit Goods</a></li>
                 <li><a href="edit_party.php">Edit Party</a></li>
            </ul>
                  </li>

        <!-- <li class="dropdown"><a href="retail.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Retail Account <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="retail.php">Retail Account</a></li>
            <li><a href="add_retail.php">Add Retail Customer</a></li>
            <li><a href="view_retail.php">View Retailer Good</a></li>
            
            <li><a href="modify_retail.php">Modify Retailer</a></li>
                      </ul>   
        </li>
 -->
        </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

  
                    
                            <center><h3 class="box-title">Bill Details </h3> 
                      

 </center>

 <?php
include 'config.php';
// $date1=$_POST["date1"].' 00:00:00';
// $date2=$_POST["date2"].' 23:59:59';
// $query_importer = "SELECT * FROM bills where created_date between '".$date1."' and '".$date2."' ORDER BY invoice_number ASC";
//       $result_importer = mysqli_query($conn,$query_importer);
// if(mysqli_num_rows($result_importer) > 0)
// {
//     while($row = mysqli_fetch_assoc($result_importer))
//     {
//     echo  $row["invoice_number"];
    
//     }

// }

echo '<div id="div1">
<br>';

echo '
<center>

<center><table border="1" width="550">

 
  <tr>
    <td height="75px">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
|| Shree ||
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
';
 $query_importer = "SELECT * FROM bills where invoice_number='".$_POST["invoice_number"]."' limit 1";
      $result_importer = mysqli_query($conn,$query_importer);
if(mysqli_num_rows($result_importer) > 0)
{
    while($row = mysqli_fetch_assoc($result_importer))
    {
      if($row["bill_type"]==1)
    {
    echo '<b style="text-align:right">CREDIT</b>';    
    }
    else
    {
     echo '<b style="text-align:right">CASH</b>';     
    }
    }

}

echo '<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="logo.png" height="40" width="40">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<font style="font-weight:bold; font-size:18px;">KHANDELWAL TRADING COMPANY</font><br>
<center>Shop No. 36, Opp. to Bank of Maharashtra, Old Mondha, Jalna, 431203.
<br> <b>Tel No.</b> (02482) 240999 <b>Mob.</b> 7304017777 <b>Email:-</b> contactktcjalna@gmail.com

</center></td></tr>


<center>
<table border="1" width="550">

  <tr>
<td width="225">
<b>&nbspBILLED TO </b>
</td>

<td>
<b>&nbspBILL DETAIL </b>
</td>
  </tr>
    <tr>
<td width="225">
';


$query_importer = "SELECT * FROM bills where invoice_number='".$_POST["invoice_number"]."' limit 1";
      $result_importer = mysqli_query($conn,$query_importer);
if(mysqli_num_rows($result_importer) > 0)
{
    while($row = mysqli_fetch_assoc($result_importer))
    {
    $query_importer22 = "SELECT * FROM customer where id_customer='".$row["customer_id"]."'";
      $result_importer22 = mysqli_query($conn,$query_importer22);
if(mysqli_num_rows($result_importer22) > 0)
{
    while($row22 = mysqli_fetch_assoc($result_importer22))
    {
        echo '&nbsp'.$row22['customer_name'].','.$row22['customer_address'].','.$row22['customer_mobile_no'];
    }
}
    //echo 'Date:-'.date("d/m/Y", strtotime($row["created_date"]));
    }

}

      

echo '

</td>
<td width="225">
<b>&nbspBill No.:- '.$_POST["invoice_number"].' <br>


';
$query_importer = "SELECT * FROM bills where invoice_number='".$_POST["invoice_number"]."' limit 1";
      $result_importer = mysqli_query($conn,$query_importer);
if(mysqli_num_rows($result_importer) > 0)
{
    while($row = mysqli_fetch_assoc($result_importer))
    {
    echo '&nbspDate:-'.date("d/m/Y", strtotime($row["created_date"]));
    }

}


//Date:-
echo '</b>
</td>
</tr>
  </table>

<table border="1" width="550">
<tr>
<th style="text-align:center">SN</th>
<th style="text-align:center">Particulars</th>

<th style="text-align:center">Qty.</th>
<th style="text-align:center">Rate</th>

<th style="text-align:center">Total</th>


</tr>


';
$i=1;
$ide=1;
          echo '

          <tr height="300px">
<td valign="top" style="text-align:center">';

$query_importer = "SELECT count(*) as no FROM bills where invoice_number='".$_POST["invoice_number"]."'";
      $result_importer = mysqli_query($conn,$query_importer);
if(mysqli_num_rows($result_importer) > 0)
{
    while($row = mysqli_fetch_assoc($result_importer))
    {
        $ide=$row["no"];
    }
}

while($ide>=$i)
{
echo $i.'<br>';
$i++;
}
echo '</td>
<td valign="top">';
 $query_importer = "SELECT * FROM bills where invoice_number='".$_POST["invoice_number"]."'";
      $result_importer = mysqli_query($conn,$query_importer);
if(mysqli_num_rows($result_importer) > 0)
{
    while($row = mysqli_fetch_assoc($result_importer))
    {
      $query_importer1 = "SELECT * FROM goods where id_goods='".$row['goods_id']."'";
      $result_importer1 = mysqli_query($conn,$query_importer1);
     if(mysqli_num_rows($result_importer1) > 0)
    {
    while($row1 = mysqli_fetch_assoc($result_importer1))
    {

        echo $row1['goods_name'].'<br>';
    }
  }

     //   echo $row['goods_id'].'<br>';
    }
}
echo '</td>

<td valign="top" style="text-align:center">
';
$query_importer = "SELECT * FROM bills where invoice_number='".$_POST["invoice_number"]."'";
      $result_importer = mysqli_query($conn,$query_importer);
if(mysqli_num_rows($result_importer) > 0)
{
    while($row = mysqli_fetch_assoc($result_importer))
    {
      echo $row["quantity"].'<br>';
    }
  }


echo '</td>
<td valign="top" style="text-align:center">
';
$query_importer = "SELECT * FROM bills where invoice_number='".$_POST["invoice_number"]."'";
      $result_importer = mysqli_query($conn,$query_importer);
if(mysqli_num_rows($result_importer) > 0)
{
    while($row = mysqli_fetch_assoc($result_importer))
    {
      echo $row["rate"].'<br>';
    }
  }

echo '</td>



<td valign="top" style="text-align:right">';
$query_importer = "SELECT * FROM bills where invoice_number='".$_POST["invoice_number"]."'";
      $result_importer = mysqli_query($conn,$query_importer);
if(mysqli_num_rows($result_importer) > 0)
{
    while($row = mysqli_fetch_assoc($result_importer))
    {
      echo $row["all_total"].'<br>';
    }
  }
echo '</td>
</tr>

';
$i++;

          //$_POST["gat_gram_name"]=
  //        echo "h".$row['id_gat_grampanchayat'];



echo '<tr>
<td></td>
<th style="text-align:center">Total</th>
<td style="text-align:center"></td>
<td style="text-align:center"></td>


<td style="text-align:right">

';

$query_importer = "SELECT sum(all_total) as allTotal FROM bills where invoice_number='".$_POST["invoice_number"]."'";
      $result_importer = mysqli_query($conn,$query_importer);
if(mysqli_num_rows($result_importer) > 0)
{
    while($row = mysqli_fetch_assoc($result_importer))
    {
    echo '<b>'.$row["allTotal"].'</b>';
    }

}

echo '</td></tr>



<tr>
<td></td>
<th style="text-align:center">HAMALI/TRANSPORT</th>


<td style="text-align:center">';


echo '</td>
<td style="text-align:right">

</td>
<td style="text-align:right">

';

$query_importer = "SELECT * FROM bills where invoice_number='".$_POST["invoice_number"]."' limit 1";
      $result_importer = mysqli_query($conn,$query_importer);
if(mysqli_num_rows($result_importer) > 0)
{
    while($row = mysqli_fetch_assoc($result_importer))
    {
    echo '<b>'.$row["transport_hamali"].'</b>';
    }

}

echo '</td></tr>

<tr>
<td></td>
<th style="text-align:center">ROUND-OFF</th>


<td style="text-align:center">';


echo '</td>
<td style="text-align:right">

</td>
<td style="text-align:right">

';

$query_importer = "SELECT * FROM bills where invoice_number='".$_POST["invoice_number"]."' limit 1";
      $result_importer = mysqli_query($conn,$query_importer);
if(mysqli_num_rows($result_importer) > 0)
{
    while($row = mysqli_fetch_assoc($result_importer))
    {
    echo '<b>'.$row["round_off"].'</b>';
    }

}

echo '</td></tr>
<tr>
<td></td>
<th style="text-align:center">GRAND TOTAL</th>

<td style="text-align:right">

</td>
<td style="text-align:center">';


echo '</td>

<td style="text-align:right">

';

$query_importer = "SELECT * FROM bills where invoice_number='".$_POST["invoice_number"]."' limit 1";
      $result_importer = mysqli_query($conn,$query_importer);
if(mysqli_num_rows($result_importer) > 0)
{
    while($row = mysqli_fetch_assoc($result_importer))
    {
    echo '<b>'.$row["grand_total"].'</b>';
    }

}

echo '</td></tr>';

// </tr>
// <tr><td></td><td></td><td></td><td></td></tr>


echo '</table>
<table border="1" width="550">
<tr>
<td>
';

$query_importer = "SELECT grand_total FROM bills where invoice_number='".$_POST["invoice_number"]."' limit 1";
      $result_importer = mysqli_query($conn,$query_importer);
if(mysqli_num_rows($result_importer) > 0)
{
    while($row = mysqli_fetch_assoc($result_importer))
    {
      $number = $row["grand_total"];
   $no = round($number);
   $point = round($number - $no, 2) * 100;
   $hundred = null;
   $digits_1 = strlen($no);
   $i = 0;
   $str = array();
   $words = array('0' => '', '1' => 'One', '2' => 'Two',
    '3' => 'Three', '4' => 'Four', '5' => 'Five', '6' => 'Six',
    '7' => 'Seven', '8' => 'Eight', '9' => 'Nine',
    '10' => 'Ten', '11' => 'Eleven', '12' => 'Twelve',
    '13' => 'Thirteen', '14' => 'Fourteen',
    '15' => 'Sifteen', '16' => 'Sixteen', '17' => 'Seventeen',
    '18' => 'Eighteen', '19' =>'Nineteen', '20' => 'Twenty',
    '30' => 'Thirty', '40' => 'Forty', '50' => 'Fifty',
    '60' => 'Sixty', '70' => 'Seventy',
    '80' => 'Eighty', '90' => 'Ninety');
   $digits = array('', 'Hundred', 'Thousand', 'Lakh', 'Crore');
   while ($i < $digits_1) {
     $divider = ($i == 2) ? 10 : 100;
     $number = floor($no % $divider);
     $no = floor($no / $divider);
     $i += ($divider == 10) ? 1 : 2;
     if ($number) {
        $plural = (($counter = count($str)) && $number > 9) ? 's' : null;
        $hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
        $str [] = ($number < 21) ? $words[$number] .
            " " . $digits[$counter] . $plural . " " . $hundred
            :
            $words[floor($number / 10) * 10]
            . " " . $words[$number % 10] . " "
            . $digits[$counter] . $plural . " " . $hundred;
     } else $str[] = null;
  }
  $str = array_reverse($str);
  $result = implode('', $str);
  $points = ($point) ?
    "." . $words[$point / 10] . " " . 
          $words[$point = $point % 10] : '';
  echo '<b>Value in Word:- '.$result . 'Rupees </b>';
  //  echo '<b>Value in Word:-'.getIndianCurrency($row["allTotal"]).'</b>';
    }

}

echo '

</td>
</tr>
</table>
 <table border="1" width="550" height="100">
<tr>
<td width="330">
<font size="1"><b>Terms and Cond.:</b><br> 
<b>1) E and O. E.<br>
2) Goods once sold will not be taken back.<br>
3) Objection (if any) must be raised within 15 days of issue.<br>
4) Payment shall be done within 15 days of purchase.<br>
5) Intrest @24% p.a. will be charged on the bills not paid within 15 days.<br>
6) Subject to Jalna Jurisdiction.</font>
</td>
<td><font size="1">
<b>&nbsp&nbsp&nbsp&nbspFor KHANDELWAL TRADING COMPANY</font><br><br><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<font size="1">(Authorised Singnatory)</b>
<br>
<b>&nbspKhandelwal Trading Company<br> &nbspBank of Maharashtra, Jalna Main Br., Current &nbspA/c. No.: 60293996857, IFSC: MAHB0000033</b><br>
<b>&nbspSUNDAY CLOSED</b></font>
</td>
</tr>
</table>
</center>

</div>';

?>
</div>

<br>
<br>
<center><button onclick="printContent('div1')">Print Bill</button></center>

</body>  
</html>  
