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
        <li  class="dropdown">
         <a href="index.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sales <span class="caret"></span></a>
            <ul class="dropdown-menu">
            <li><a href="index.php"> Create Bill</a></li>
            <li><a href="view_bill.php">View Bills</a></li>
            <li><a href="add_expences.php">Add Expences</a></li>
            <li><a href="cash.php">Cash Paid</a></li>

            
                      </ul>   
        </li>
          
        <li  class="dropdown active"><a href="report.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Report <span class="caret"></span></a>
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
<center><button onclick="printContent('div1')">Print Report</button></center>
      <div id="div1">
                    
                            <center><h3 class="box-title">KHANDELWAL TRADING COMPANY </h3>
                            
Shop No. 36, Opp. to Bank of Maharashtra, Old Mondha, Jalna, 431203.
<br> <b>Tel No.</b> (02482) 240999 <b>Mob.</b> 7304017777 <b>Email:-</b> contactktcjalna@gmail.com

                             </center>
                      
 <?php
 echo '<center><h4>'.$_POST["date1"].' To ' .$_POST["date2"].'</h4></center>';
include 'config.php';
$date1=$_POST["date1"].' 00:00:00';
$date2=$_POST["date2"].' 23:59:59';
$invoiceArray = array();
$indexIn = 0;

$query_importer = "SELECT * FROM expences where created_date between '".$date1."' and '".$date2."'";
      $result_importer = mysqli_query($conn,$query_importer);
      $ro=1;
 echo '<center><table border="1" width="800">
  <tr>

<th style="text-align:center">
  Sr. No
</th>
<th style="text-align:center">
Expence Name
</th>
<th style="text-align:center">
Comment
</th>
<th style="text-align:center">
Date
</th>
<th style="text-align:center">
Amount
</th>


</tr>';
if(mysqli_num_rows($result_importer) > 0)
{
    while($row = mysqli_fetch_assoc($result_importer))
    {
     
//     d:
     
echo '
<tr>
<td style="text-align:center">';
echo $ro;
$ro++;
echo '</td>

<td style="text-align:center">';

        echo $row['expence_name'];
   
echo '</td>

<td style="text-align:center">';

        echo $row['comment'];
  
echo '</td>

<td style="text-align:center">';

    echo date("d/m/Y", strtotime($row["created_date"]));
   
echo '</td>

<td style="text-align:right">';

    echo $row["amount"];
   

echo '</td>

</tr>

';

     //echo  $row["invoice_number"];
    
    }

}
echo '
<tr>
<td>
</td>
<td style="text-align:center">
<b>TOTAL</b>
</td>
<td>
</td>
<td>
</td>


<td style="text-align:right">
';
$query_importer = "SELECT sum(amount) as allTotal FROM expences where created_date between '".$date1."' and '".$date2."'";
      $result_importer = mysqli_query($conn,$query_importer);
      if(mysqli_num_rows($result_importer) > 0)
{
    while($row = mysqli_fetch_assoc($result_importer))
    {
     echo '<b>'.$row["allTotal"].'</b>';
    
    }
}














// $query_importer = "SELECT sum(grand_total) as allTotal FROM bills where created_date between '".$date1."' and '".$date2."' limit 1";
//       $result_importer = mysqli_query($conn,$query_importer);
//       if(mysqli_num_rows($result_importer) > 0)
// {
//     while($row = mysqli_fetch_assoc($result_importer))
//     {
//      echo '<b>'.$row["allTotal"].'</b>';
    
//     }
// }
echo '
</td>
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
</form>  
</body>  
</html>  
