<?php  
  session_start();
  ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    
    <!-- <meta http-equiv="Content-Security-Policy" content="default-src *; script-src 'self' 'unsafe-inline' 'unsafe-eval' *; style-src  'self' 'unsafe-inline' *"> -->

    <title>KTC</title>
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
       <a class="navbar-brand" href="index.php"><font color="orange">KTC</font></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li  class="dropdown">
         <a href="index.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sales <span class="caret"></span></a>
            <ul class="dropdown-menu">
            <li><a href="index.php"> Create Bill</a></li>
            <li><a href="view_bill.php">View Bills</a></li>
            <li><a href="add_expences.php">Add Expences</a></li>
            <li><a href="cash.php">Cash Paid</a></li>

            
                      </ul>   
        </li>
          
        <li  class="dropdown"><a href="report.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Report <span class="caret"></span></a>
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

                 <li  class="dropdown active"><a href="ledger.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ledger Account <span class="caret"></span></a>
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

       <!--  <li class="dropdown"><a href="retail.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Retail Account <span class="caret"></span></a>
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
<center><button onclick="printContent('div1')">Print Report</button>
      <div id="div1" style="width:800px;">
 <?php
include 'config.php';
                    echo '
                            <center><h3 class="box-title">KHANDELWAL TRADING COMPANY </h3>
                            <h4 class="box-title">Party Ledger Account</h3>
                            
<b>Party Name:-</b> ';

    $query_importer22 = "SELECT * FROM party where id_party='".$_POST['party_name']."'";
      $result_importer22 = mysqli_query($conn,$query_importer22);
if(mysqli_num_rows($result_importer22) > 0)
{
    while($row22 = mysqli_fetch_assoc($result_importer22))
    {
        echo $row22['party_name'].', '.$row22['party_address'].', Mo.No: '.$row22['party_mobile_no'].', GST/PAN/Adhar: '.$row22['party_GST_NO'];
         
    }
}
 

                        echo '     </center><br>';
 
// $date1=$_POST["date1"].' 00:00:00';
// $date2=$_POST["date2"].' 23:59:59';
// $invoiceArray = array();
// $indexIn = 0;

// $query_importer = "SELECT DISTINCT invoice_number FROM bills where customer_id between '".$date1."' and '".$date2."' ORDER BY invoice_number ASC";
//       $result_importer = mysqli_query($conn,$query_importer);
//       $ro=1;
 echo '<center><table border="1" width="800">

  <tr>

<th style="text-align:center">
  Date
</th>
<th style="text-align:center">
Invoice/Receipt Number
</th>
<th style="text-align:center">
Debit Amount
</th>
<th style="text-align:center">
Credit Amount
</th>

</tr>';
$query_importer = "SELECT * FROM party_ledger where party_id='".$_POST['party_name']."'";
      $result_importer = mysqli_query($conn,$query_importer);
if(mysqli_num_rows($result_importer) > 0)
{
    while($row = mysqli_fetch_assoc($result_importer))
    {


     
//     d:
     
echo '
<tr>

';
        echo '<td style="text-align:center">'.$row['created_date'].'</td>
        <td style="text-align:center">'.$row['invoice_no'].'</td>
        <td style="text-align:center">'.$row['debit_amount'].'</td>
        <td style="text-align:center">'.$row['credit_amount'].'</td>';
echo '</tr>

';


    }
}
//echo '</td>


     //echo  $row["invoice_number"];
    

echo '
<tr>
<td>
</td>
<td style="text-align:center">
<b>TOTAL</b>
</td>
<td style="text-align:center">
';
$query_importer = "SELECT sum(debit_amount) as debitTotal FROM party_ledger where party_id='".$_POST['party_name']."'";
      $result_importer = mysqli_query($conn,$query_importer);
if(mysqli_num_rows($result_importer) > 0)
{
    while($row = mysqli_fetch_assoc($result_importer))
    {

      echo '<b>'.$row['debitTotal'].'</b>';
      
    }
  }

echo '
</td>
<td style="text-align:center">
';

$query_importer = "SELECT sum(credit_amount) as creditTotal FROM party_ledger where party_id='".$_POST['party_name']."'";
      $result_importer = mysqli_query($conn,$query_importer);
if(mysqli_num_rows($result_importer) > 0)
{
    while($row = mysqli_fetch_assoc($result_importer))
    {

      echo '<b>'.$row['creditTotal'].'</b>';
      
    }
  }
echo '
</td>
</tr>
<tr>
<td>
</td>
<td style="text-align:center">
<b>BALANCE</b>
</td>
<td colspan="2" style="text-align:center">';
$query_importer = "SELECT sum(debit_amount) as debitTotal,sum(credit_amount) as creditTotal FROM party_ledger where party_id='".$_POST['party_name']."'";
      $result_importer = mysqli_query($conn,$query_importer);
if(mysqli_num_rows($result_importer) > 0)
{
    while($row = mysqli_fetch_assoc($result_importer))
    {

        $balance=$row['debitTotal']-$row['creditTotal'];
      echo '<b>'.$balance.'</b>';
      
    }
  }


echo '</td>

</tr>
</table></div>';
// $resultArry = array_unique($invoiceArray);
// //print_r($resultArry);
// for($i=0;$i<sizeof($resultArry);$i++)
// {
// echo $resultArry[$i];
// }
?>
 </center>
</center>
</form>  
</body>  
</html>  
