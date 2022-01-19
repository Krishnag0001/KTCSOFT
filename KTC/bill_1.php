<?php  
  session_start();
    include 'config.php';
 $_SESSION["id_for_double_2"]=0;
  if(isset($_POST['save_customer_name']))  
{  
$_SESSION["customer_id"]=$_POST['name'];  

  // echo $_SESSION["customer_id"];
  // echo $_SESSION["consignee_id"];
}

if(isset($_POST['save_customer_name_dd']) && $_SESSION['id_for_double']==0)  
{  
//$_SESSION["customer_id"]=$_POST['name'];  
$sql = "INSERT INTO customer (customer_name, customer_address, customer_mobile_no,customer_GST_NO)
          VALUES ('".$_POST["customer_name"]."','".$_POST['customer_address']."','".$_POST['customer_mobile_no']."','".$_POST['customer_gst']."')";


            if (mysqli_query($conn,$sql) === TRUE)
			{
				$_SESSION["customer_id"] = $conn->insert_id;
				$_SESSION['id_for_double']=1;
	      }
      else
				{
						echo "Error: " . $conn->error . "<br>";
				}
  // echo $_SESSION["customer_id"];
  // echo $_SESSION["consignee_id"];
}

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

<SCRIPT language="javascript">
function CalculateTotal()
{
//CalculateTax();

var rate=document.getElementById('rate1').value;

var qty=document.getElementById('qty1').value;
var total=parseFloat(rate)*parseFloat(qty);
document.getElementById("total1").value=total.toFixed(2);
var total1=document.getElementById("total1").value || 0;
var total2=document.getElementById("total2").value || 0;
var total3=document.getElementById("total3").value || 0;
var total4=document.getElementById("total4").value || 0;
var total5=document.getElementById("total5").value || 0;
var total6=document.getElementById("total6").value || 0;
var total7=document.getElementById("total7").value || 0;
var total8=document.getElementById("total8").value || 0;
var total9=document.getElementById("total9").value || 0;
var total10=document.getElementById("total10").value || 0;
var total11=document.getElementById("total11").value || 0;
var total12=document.getElementById("total12").value || 0;
var total13=document.getElementById("total13").value || 0;
var total14=document.getElementById("total14").value || 0;
var total15=document.getElementById("total15").value || 0;


var totalll=parseFloat(total1)+parseFloat(total2)+parseFloat(total3)+parseFloat(total4)+parseFloat(total5)+parseFloat(total6)+parseFloat(total7)+parseFloat(total8)+parseFloat(total9)+parseFloat(total10)+parseFloat(total11)+parseFloat(total12)+parseFloat(total13)+parseFloat(total14)+parseFloat(total15);
document.getElementById("total_t").value=totalll;


//var total=document.getElementById('total1').value;
var cgst_percent=document.getElementById('cgst_per_1').value;
var cgst_percent_int=parseFloat(cgst_percent);
//var igst= total - (total * (100 / (100 + (2*cgst_percent_int)/100 ) ) );
//var igst=( total * (2*cgst_percent_int));
var igst= Math.round((total/(100+(2*cgst_percent_int)))*(2*cgst_percent_int));

//var igstsd=total-100;

//alert/
var cgst=parseFloat(igst/2);
document.getElementById("sgst_per_1").value=cgst_percent_int;
document.getElementById("sgst_amount1").value=cgst.toFixed(2);
document.getElementById("cgst_amount1").value=cgst.toFixed(2);
document.getElementById("taxable_value1").value=(total-parseFloat(igst)).toFixed(2);
document.getElementById("all_total1").value=total.toFixed(2);
var total1=document.getElementById("total1").value || 0;
var total2=document.getElementById("total2").value || 0;
var total3=document.getElementById("total3").value || 0;
var total4=document.getElementById("total4").value || 0;
var total5=document.getElementById("total5").value || 0;
var total6=document.getElementById("total6").value || 0;
var total7=document.getElementById("total7").value || 0;
var total8=document.getElementById("total8").value || 0;
var total9=document.getElementById("total9").value || 0;
var total10=document.getElementById("total10").value || 0;
var total11=document.getElementById("total11").value || 0;
var total12=document.getElementById("total12").value || 0;
var total13=document.getElementById("total13").value || 0;
var total14=document.getElementById("total14").value || 0;
var total15=document.getElementById("total15").value || 0;


var totalll=parseFloat(total1)+parseFloat(total2)+parseFloat(total3)+parseFloat(total4)+parseFloat(total5)+parseFloat(total6)+parseFloat(total7)+parseFloat(total8)+parseFloat(total9)+parseFloat(total10)+parseFloat(total11)+parseFloat(total12)+parseFloat(total13)+parseFloat(total14)+parseFloat(total15);
document.getElementById("all_total_t").value=totalll;


var cgst_amount1=document.getElementById("cgst_amount1").value || 0;
var cgst_amount2=document.getElementById("cgst_amount2").value || 0;
var cgst_amount3=document.getElementById("cgst_amount3").value || 0;
var cgst_amount4=document.getElementById("cgst_amount4").value || 0;
var cgst_amount5=document.getElementById("cgst_amount5").value || 0;
var cgst_amount6=document.getElementById("cgst_amount6").value || 0;
var cgst_amount7=document.getElementById("cgst_amount7").value || 0;
var cgst_amount8=document.getElementById("cgst_amount8").value || 0;
var cgst_amount9=document.getElementById("cgst_amount9").value || 0;
var cgst_amount10=document.getElementById("cgst_amount10").value || 0;
var cgst_amount11=document.getElementById("cgst_amount11").value || 0;
var cgst_amount12=document.getElementById("cgst_amount12").value || 0;
var cgst_amount13=document.getElementById("cgst_amount13").value || 0;
var cgst_amount14=document.getElementById("cgst_amount14").value || 0;
var cgst_amount15=document.getElementById("cgst_amount15").value || 0;

var cgst_amountll=parseFloat(cgst_amount1)+parseFloat(cgst_amount2)+parseFloat(cgst_amount3)+parseFloat(cgst_amount4)+parseFloat(cgst_amount5)+parseFloat(cgst_amount6)+parseFloat(cgst_amount7)+parseFloat(cgst_amount8)+parseFloat(cgst_amount9)+parseFloat(cgst_amount10)+parseFloat(cgst_amount11)+parseFloat(cgst_amount12)+parseFloat(cgst_amount13)+parseFloat(cgst_amount14)+parseFloat(cgst_amount15);
document.getElementById("cgst_amount_t").value=cgst_amountll;
document.getElementById("sgst_amount_t").value=cgst_amountll;


var taxable_value1=document.getElementById("taxable_value1").value || 0;
var taxable_value2=document.getElementById("taxable_value2").value || 0;
var taxable_value3=document.getElementById("taxable_value3").value || 0;
var taxable_value4=document.getElementById("taxable_value4").value || 0;
var taxable_value5=document.getElementById("taxable_value5").value || 0;
var taxable_value6=document.getElementById("taxable_value6").value || 0;
var taxable_value7=document.getElementById("taxable_value7").value || 0;
var taxable_value8=document.getElementById("taxable_value8").value || 0;
var taxable_value9=document.getElementById("taxable_value9").value || 0;
var taxable_value10=document.getElementById("taxable_value10").value || 0;
var taxable_value11=document.getElementById("taxable_value11").value || 0;
var taxable_value12=document.getElementById("taxable_value12").value || 0;
var taxable_value13=document.getElementById("taxable_value13").value || 0;
var taxable_value14=document.getElementById("taxable_value14").value || 0;
var taxable_value15=document.getElementById("taxable_value15").value || 0;

var taxable_valuell=parseFloat(taxable_value1)+parseFloat(taxable_value2)+parseFloat(taxable_value3)+parseFloat(taxable_value4)+parseFloat(taxable_value5)+parseFloat(taxable_value6)+parseFloat(taxable_value7)+parseFloat(taxable_value8)+parseFloat(taxable_value9)+parseFloat(taxable_value10)+parseFloat(taxable_value11)+parseFloat(taxable_value12)+parseFloat(taxable_value13)+parseFloat(taxable_value14)+parseFloat(taxable_value15);
document.getElementById("taxable_value_t").value=taxable_valuell;





//alert(total1);
}
function CalculateTotal2()
{


var rate=document.getElementById('rate2').value;

var qty=document.getElementById('qty2').value;
var total=rate*qty;
document.getElementById("total2").value=total.toFixed(2);;
var total1=document.getElementById("total1").value || 0;
var total2=document.getElementById("total2").value || 0;
var total3=document.getElementById("total3").value || 0;
var total4=document.getElementById("total4").value || 0;
var total5=document.getElementById("total5").value || 0;
var total6=document.getElementById("total6").value || 0;
var total7=document.getElementById("total7").value || 0;
var total8=document.getElementById("total8").value || 0;
var total9=document.getElementById("total9").value || 0;
var total10=document.getElementById("total10").value || 0;
var total11=document.getElementById("total11").value || 0;
var total12=document.getElementById("total12").value || 0;
var total13=document.getElementById("total13").value || 0;
var total14=document.getElementById("total14").value || 0;
var total15=document.getElementById("total15").value || 0;


var totalll=parseFloat(total1)+parseFloat(total2)+parseFloat(total3)+parseFloat(total4)+parseFloat(total5)+parseFloat(total6)+parseFloat(total7)+parseFloat(total8)+parseFloat(total9)+parseFloat(total10)+parseFloat(total11)+parseFloat(total12)+parseFloat(total13)+parseFloat(total14)+parseFloat(total15);
document.getElementById("total_t").value=totalll;

var cgst_percent=document.getElementById('cgst_per_2').value;
var cgst_percent_int=parseFloat(cgst_percent);
//var igst= total - (total * (100 / (100 + (2*cgst_percent_int)/100 ) ) );
//var igst=( total * (2*cgst_percent_int));
var igst= Math.round((total/(100+(2*cgst_percent_int)))*(2*cgst_percent_int));

//var igstsd=total-100;

//alert/
var cgst=parseFloat(igst/2);
document.getElementById("sgst_per_2").value=cgst_percent_int;
document.getElementById("sgst_amount2").value=cgst.toFixed(2);
document.getElementById("cgst_amount2").value=cgst.toFixed(2);
document.getElementById("taxable_value2").value=(total-parseFloat(igst)).toFixed(2);
document.getElementById("all_total2").value=total.toFixed(2);
var total1=document.getElementById("total1").value || 0;
var total2=document.getElementById("total2").value || 0;
var total3=document.getElementById("total3").value || 0;
var total4=document.getElementById("total4").value || 0;
var total5=document.getElementById("total5").value || 0;
var total6=document.getElementById("total6").value || 0;
var total7=document.getElementById("total7").value || 0;
var total8=document.getElementById("total8").value || 0;
var total9=document.getElementById("total9").value || 0;
var total10=document.getElementById("total10").value || 0;

var total11=document.getElementById("total11").value || 0;
var total12=document.getElementById("total12").value || 0;
var total13=document.getElementById("total13").value || 0;
var total14=document.getElementById("total14").value || 0;
var total15=document.getElementById("total15").value || 0;


var totalll=parseFloat(total1)+parseFloat(total2)+parseFloat(total3)+parseFloat(total4)+parseFloat(total5)+parseFloat(total6)+parseFloat(total7)+parseFloat(total8)+parseFloat(total9)+parseFloat(total10)+parseFloat(total11)+parseFloat(total12)+parseFloat(total13)+parseFloat(total14)+parseFloat(total15);
document.getElementById("all_total_t").value=totalll;


var cgst_amount1=document.getElementById("cgst_amount1").value || 0;
var cgst_amount2=document.getElementById("cgst_amount2").value || 0;
var cgst_amount3=document.getElementById("cgst_amount3").value || 0;
var cgst_amount4=document.getElementById("cgst_amount4").value || 0;
var cgst_amount5=document.getElementById("cgst_amount5").value || 0;
var cgst_amount6=document.getElementById("cgst_amount6").value || 0;
var cgst_amount7=document.getElementById("cgst_amount7").value || 0;
var cgst_amount8=document.getElementById("cgst_amount8").value || 0;
var cgst_amount9=document.getElementById("cgst_amount9").value || 0;
var cgst_amount10=document.getElementById("cgst_amount10").value || 0;
var cgst_amount11=document.getElementById("cgst_amount11").value || 0;
var cgst_amount12=document.getElementById("cgst_amount12").value || 0;
var cgst_amount13=document.getElementById("cgst_amount13").value || 0;
var cgst_amount14=document.getElementById("cgst_amount14").value || 0;
var cgst_amount15=document.getElementById("cgst_amount15").value || 0;

var cgst_amountll=parseFloat(cgst_amount1)+parseFloat(cgst_amount2)+parseFloat(cgst_amount3)+parseFloat(cgst_amount4)+parseFloat(cgst_amount5)+parseFloat(cgst_amount6)+parseFloat(cgst_amount7)+parseFloat(cgst_amount8)+parseFloat(cgst_amount9)+parseFloat(cgst_amount10)+parseFloat(cgst_amount11)+parseFloat(cgst_amount12)+parseFloat(cgst_amount13)+parseFloat(cgst_amount14)+parseFloat(cgst_amount15);
document.getElementById("cgst_amount_t").value=cgst_amountll;
document.getElementById("sgst_amount_t").value=cgst_amountll;


var taxable_value1=document.getElementById("taxable_value1").value || 0;
var taxable_value2=document.getElementById("taxable_value2").value || 0;
var taxable_value3=document.getElementById("taxable_value3").value || 0;
var taxable_value4=document.getElementById("taxable_value4").value || 0;
var taxable_value5=document.getElementById("taxable_value5").value || 0;
var taxable_value6=document.getElementById("taxable_value6").value || 0;
var taxable_value7=document.getElementById("taxable_value7").value || 0;
var taxable_value8=document.getElementById("taxable_value8").value || 0;
var taxable_value9=document.getElementById("taxable_value9").value || 0;
var taxable_value10=document.getElementById("taxable_value10").value || 0;
var taxable_value11=document.getElementById("taxable_value11").value || 0;
var taxable_value12=document.getElementById("taxable_value12").value || 0;
var taxable_value13=document.getElementById("taxable_value13").value || 0;
var taxable_value14=document.getElementById("taxable_value14").value || 0;
var taxable_value15=document.getElementById("taxable_value15").value || 0;

var taxable_valuell=parseFloat(taxable_value1)+parseFloat(taxable_value2)+parseFloat(taxable_value3)+parseFloat(taxable_value4)+parseFloat(taxable_value5)+parseFloat(taxable_value6)+parseFloat(taxable_value7)+parseFloat(taxable_value8)+parseFloat(taxable_value9)+parseFloat(taxable_value10)+parseFloat(taxable_value11)+parseFloat(taxable_value12)+parseFloat(taxable_value13)+parseFloat(taxable_value14)+parseFloat(taxable_value15);
document.getElementById("taxable_value_t").value=taxable_valuell;

}
function CalculateTotal3()
{


var rate=document.getElementById('rate3').value;

var qty=document.getElementById('qty3').value;
var total=rate*qty;
document.getElementById("total3").value=total.toFixed(2);;
var total1=document.getElementById("total1").value || 0;
var total2=document.getElementById("total2").value || 0;
var total3=document.getElementById("total3").value || 0;
var total4=document.getElementById("total4").value || 0;
var total5=document.getElementById("total5").value || 0;
var total6=document.getElementById("total6").value || 0;
var total7=document.getElementById("total7").value || 0;
var total8=document.getElementById("total8").value || 0;
var total9=document.getElementById("total9").value || 0;
var total10=document.getElementById("total10").value || 0;
var total11=document.getElementById("total11").value || 0;
var total12=document.getElementById("total12").value || 0;
var total13=document.getElementById("total13").value || 0;
var total14=document.getElementById("total14").value || 0;
var total15=document.getElementById("total15").value || 0;


var totalll=parseFloat(total1)+parseFloat(total2)+parseFloat(total3)+parseFloat(total4)+parseFloat(total5)+parseFloat(total6)+parseFloat(total7)+parseFloat(total8)+parseFloat(total9)+parseFloat(total10)+parseFloat(total11)+parseFloat(total12)+parseFloat(total13)+parseFloat(total14)+parseFloat(total15);
document.getElementById("total_t").value=totalll;
var cgst_percent=document.getElementById('cgst_per_3').value;
var cgst_percent_int=parseFloat(cgst_percent);
//var igst= total - (total * (100 / (100 + (2*cgst_percent_int)/100 ) ) );
//var igst=( total * (2*cgst_percent_int));
var igst= Math.round((total/(100+(2*cgst_percent_int)))*(2*cgst_percent_int));

//var igstsd=total-100;

//alert/
var cgst=parseFloat(igst/2);
document.getElementById("sgst_per_3").value=cgst_percent_int;
document.getElementById("sgst_amount3").value=cgst.toFixed(2);
document.getElementById("cgst_amount3").value=cgst.toFixed(2);
document.getElementById("taxable_value3").value=(total-parseFloat(igst)).toFixed(2);
document.getElementById("all_total3").value=total.toFixed(2);
var total1=document.getElementById("total1").value || 0;
var total2=document.getElementById("total2").value || 0;
var total3=document.getElementById("total3").value || 0;
var total4=document.getElementById("total4").value || 0;
var total5=document.getElementById("total5").value || 0;
var total6=document.getElementById("total6").value || 0;
var total7=document.getElementById("total7").value || 0;
var total8=document.getElementById("total8").value || 0;
var total9=document.getElementById("total9").value || 0;
var total10=document.getElementById("total10").value || 0;
var total11=document.getElementById("total11").value || 0;
var total12=document.getElementById("total12").value || 0;
var total13=document.getElementById("total13").value || 0;
var total14=document.getElementById("total14").value || 0;
var total15=document.getElementById("total15").value || 0;

var totalll=parseFloat(total1)+parseFloat(total2)+parseFloat(total3)+parseFloat(total4)+parseFloat(total5)+parseFloat(total6)+parseFloat(total7)+parseFloat(total8)+parseFloat(total9)+parseFloat(total10)+parseFloat(total11)+parseFloat(total12)+parseFloat(total13)+parseFloat(total14)+parseFloat(total15);
document.getElementById("all_total_t").value=totalll;


var cgst_amount1=document.getElementById("cgst_amount1").value || 0;
var cgst_amount2=document.getElementById("cgst_amount2").value || 0;
var cgst_amount3=document.getElementById("cgst_amount3").value || 0;
var cgst_amount4=document.getElementById("cgst_amount4").value || 0;
var cgst_amount5=document.getElementById("cgst_amount5").value || 0;
var cgst_amount6=document.getElementById("cgst_amount6").value || 0;
var cgst_amount7=document.getElementById("cgst_amount7").value || 0;
var cgst_amount8=document.getElementById("cgst_amount8").value || 0;
var cgst_amount9=document.getElementById("cgst_amount9").value || 0;
var cgst_amount10=document.getElementById("cgst_amount10").value || 0;
var cgst_amount11=document.getElementById("cgst_amount11").value || 0;
var cgst_amount12=document.getElementById("cgst_amount12").value || 0;
var cgst_amount13=document.getElementById("cgst_amount13").value || 0;
var cgst_amount14=document.getElementById("cgst_amount14").value || 0;
var cgst_amount15=document.getElementById("cgst_amount15").value || 0;
var cgst_amountll=parseFloat(cgst_amount1)+parseFloat(cgst_amount2)+parseFloat(cgst_amount3)+parseFloat(cgst_amount4)+parseFloat(cgst_amount5)+parseFloat(cgst_amount6)+parseFloat(cgst_amount7)+parseFloat(cgst_amount8)+parseFloat(cgst_amount9)+parseFloat(cgst_amount10)+parseFloat(cgst_amount11)+parseFloat(cgst_amount12)+parseFloat(cgst_amount13)+parseFloat(cgst_amount14)+parseFloat(cgst_amount15);
document.getElementById("cgst_amount_t").value=cgst_amountll;
document.getElementById("sgst_amount_t").value=cgst_amountll;


var taxable_value1=document.getElementById("taxable_value1").value || 0;
var taxable_value2=document.getElementById("taxable_value2").value || 0;
var taxable_value3=document.getElementById("taxable_value3").value || 0;
var taxable_value4=document.getElementById("taxable_value4").value || 0;
var taxable_value5=document.getElementById("taxable_value5").value || 0;
var taxable_value6=document.getElementById("taxable_value6").value || 0;
var taxable_value7=document.getElementById("taxable_value7").value || 0;
var taxable_value8=document.getElementById("taxable_value8").value || 0;
var taxable_value9=document.getElementById("taxable_value9").value || 0;
var taxable_value10=document.getElementById("taxable_value10").value || 0;
var taxable_value11=document.getElementById("taxable_value11").value || 0;
var taxable_value12=document.getElementById("taxable_value12").value || 0;
var taxable_value13=document.getElementById("taxable_value13").value || 0;
var taxable_value14=document.getElementById("taxable_value14").value || 0;
var taxable_value15=document.getElementById("taxable_value15").value || 0;
var taxable_valuell=parseFloat(taxable_value1)+parseFloat(taxable_value2)+parseFloat(taxable_value3)+parseFloat(taxable_value4)+parseFloat(taxable_value5)+parseFloat(taxable_value6)+parseFloat(taxable_value7)+parseFloat(taxable_value8)+parseFloat(taxable_value9)+parseFloat(taxable_value10)+parseFloat(taxable_value11)+parseFloat(taxable_value12)+parseFloat(taxable_value13)+parseFloat(taxable_value14)+parseFloat(taxable_value15);
document.getElementById("taxable_value_t").value=taxable_valuell;


}
function CalculateTotal4()
{


var rate=document.getElementById('rate4').value;

var qty=document.getElementById('qty4').value;
var total=rate*qty;
document.getElementById("total4").value=total.toFixed(2);;
var total1=document.getElementById("total1").value || 0;
var total2=document.getElementById("total2").value || 0;
var total3=document.getElementById("total3").value || 0;
var total4=document.getElementById("total4").value || 0;
var total5=document.getElementById("total5").value || 0;
var total6=document.getElementById("total6").value || 0;
var total7=document.getElementById("total7").value || 0;
var total8=document.getElementById("total8").value || 0;
var total9=document.getElementById("total9").value || 0;
var total10=document.getElementById("total10").value || 0;
var total11=document.getElementById("total11").value || 0;
var total12=document.getElementById("total12").value || 0;
var total13=document.getElementById("total13").value || 0;
var total14=document.getElementById("total14").value || 0;
var total15=document.getElementById("total15").value || 0;


var totalll=parseFloat(total1)+parseFloat(total2)+parseFloat(total3)+parseFloat(total4)+parseFloat(total5)+parseFloat(total6)+parseFloat(total7)+parseFloat(total8)+parseFloat(total9)+parseFloat(total10)+parseFloat(total11)+parseFloat(total12)+parseFloat(total13)+parseFloat(total14)+parseFloat(total15);
document.getElementById("total_t").value=totalll;

var cgst_percent=document.getElementById('cgst_per_4').value;
var cgst_percent_int=parseFloat(cgst_percent);
//var igst= total - (total * (100 / (100 + (2*cgst_percent_int)/100 ) ) );
//var igst=( total * (2*cgst_percent_int));
var igst= Math.round((total/(100+(2*cgst_percent_int)))*(2*cgst_percent_int));

//var igstsd=total-100;

//alert/
var cgst=parseFloat(igst/2);
document.getElementById("sgst_per_4").value=cgst_percent_int;
document.getElementById("sgst_amount4").value=cgst.toFixed(2);
document.getElementById("cgst_amount4").value=cgst.toFixed(2);
document.getElementById("taxable_value4").value=(total-parseFloat(igst)).toFixed(2);
document.getElementById("all_total4").value=total.toFixed(2);
var total1=document.getElementById("total1").value || 0;
var total2=document.getElementById("total2").value || 0;
var total3=document.getElementById("total3").value || 0;
var total4=document.getElementById("total4").value || 0;
var total5=document.getElementById("total5").value || 0;
var total6=document.getElementById("total6").value || 0;
var total7=document.getElementById("total7").value || 0;
var total8=document.getElementById("total8").value || 0;
var total9=document.getElementById("total9").value || 0;
var total10=document.getElementById("total10").value || 0;
var total11=document.getElementById("total11").value || 0;
var total12=document.getElementById("total12").value || 0;
var total13=document.getElementById("total13").value || 0;
var total14=document.getElementById("total14").value || 0;
var total15=document.getElementById("total15").value || 0;

var totalll=parseFloat(total1)+parseFloat(total2)+parseFloat(total3)+parseFloat(total4)+parseFloat(total5)+parseFloat(total6)+parseFloat(total7)+parseFloat(total8)+parseFloat(total9)+parseFloat(total10)+parseFloat(total11)+parseFloat(total12)+parseFloat(total13)+parseFloat(total14)+parseFloat(total15);
document.getElementById("all_total_t").value=totalll;


var cgst_amount1=document.getElementById("cgst_amount1").value || 0;
var cgst_amount2=document.getElementById("cgst_amount2").value || 0;
var cgst_amount3=document.getElementById("cgst_amount3").value || 0;
var cgst_amount4=document.getElementById("cgst_amount4").value || 0;
var cgst_amount5=document.getElementById("cgst_amount5").value || 0;
var cgst_amount6=document.getElementById("cgst_amount6").value || 0;
var cgst_amount7=document.getElementById("cgst_amount7").value || 0;
var cgst_amount8=document.getElementById("cgst_amount8").value || 0;
var cgst_amount9=document.getElementById("cgst_amount9").value || 0;
var cgst_amount10=document.getElementById("cgst_amount10").value || 0;
var cgst_amount11=document.getElementById("cgst_amount11").value || 0;
var cgst_amount12=document.getElementById("cgst_amount12").value || 0;
var cgst_amount13=document.getElementById("cgst_amount13").value || 0;
var cgst_amount14=document.getElementById("cgst_amount14").value || 0;
var cgst_amount15=document.getElementById("cgst_amount15").value || 0;

var cgst_amountll=parseFloat(cgst_amount1)+parseFloat(cgst_amount2)+parseFloat(cgst_amount3)+parseFloat(cgst_amount4)+parseFloat(cgst_amount5)+parseFloat(cgst_amount6)+parseFloat(cgst_amount7)+parseFloat(cgst_amount8)+parseFloat(cgst_amount9)+parseFloat(cgst_amount10)+parseFloat(cgst_amount11)+parseFloat(cgst_amount12)+parseFloat(cgst_amount13)+parseFloat(cgst_amount14)+parseFloat(cgst_amount15);
document.getElementById("cgst_amount_t").value=cgst_amountll;
document.getElementById("sgst_amount_t").value=cgst_amountll;


var taxable_value1=document.getElementById("taxable_value1").value || 0;
var taxable_value2=document.getElementById("taxable_value2").value || 0;
var taxable_value3=document.getElementById("taxable_value3").value || 0;
var taxable_value4=document.getElementById("taxable_value4").value || 0;
var taxable_value5=document.getElementById("taxable_value5").value || 0;
var taxable_value6=document.getElementById("taxable_value6").value || 0;
var taxable_value7=document.getElementById("taxable_value7").value || 0;
var taxable_value8=document.getElementById("taxable_value8").value || 0;
var taxable_value9=document.getElementById("taxable_value9").value || 0;
var taxable_value10=document.getElementById("taxable_value10").value || 0;
var taxable_value11=document.getElementById("taxable_value11").value || 0;
var taxable_value12=document.getElementById("taxable_value12").value || 0;
var taxable_value13=document.getElementById("taxable_value13").value || 0;
var taxable_value14=document.getElementById("taxable_value14").value || 0;
var taxable_value15=document.getElementById("taxable_value15").value || 0;

var taxable_valuell=parseFloat(taxable_value1)+parseFloat(taxable_value2)+parseFloat(taxable_value3)+parseFloat(taxable_value4)+parseFloat(taxable_value5)+parseFloat(taxable_value6)+parseFloat(taxable_value7)+parseFloat(taxable_value8)+parseFloat(taxable_value9)+parseFloat(taxable_value10)+parseFloat(taxable_value11)+parseFloat(taxable_value12)+parseFloat(taxable_value13)+parseFloat(taxable_value14)+parseFloat(taxable_value15);
document.getElementById("taxable_value_t").value=taxable_valuell;



}
function CalculateTotal5()
{


var rate=document.getElementById('rate5').value;

var qty=document.getElementById('qty5').value;
var total=rate*qty;
document.getElementById("total5").value=total.toFixed(2);;
var total1=document.getElementById("total1").value || 0;
var total2=document.getElementById("total2").value || 0;
var total3=document.getElementById("total3").value || 0;
var total4=document.getElementById("total4").value || 0;
var total5=document.getElementById("total5").value || 0;
var total6=document.getElementById("total6").value || 0;
var total7=document.getElementById("total7").value || 0;
var total8=document.getElementById("total8").value || 0;
var total9=document.getElementById("total9").value || 0;
var total10=document.getElementById("total10").value || 0;
var total11=document.getElementById("total11").value || 0;
var total12=document.getElementById("total12").value || 0;
var total13=document.getElementById("total13").value || 0;
var total14=document.getElementById("total14").value || 0;
var total15=document.getElementById("total15").value || 0;

var totalll=parseFloat(total1)+parseFloat(total2)+parseFloat(total3)+parseFloat(total4)+parseFloat(total5)+parseFloat(total6)+parseFloat(total7)+parseFloat(total8)+parseFloat(total9)+parseFloat(total10)+parseFloat(total11)+parseFloat(total12)+parseFloat(total13)+parseFloat(total14)+parseFloat(total15);
document.getElementById("total_t").value=totalll;

var cgst_percent=document.getElementById('cgst_per_5').value;
var cgst_percent_int=parseFloat(cgst_percent);
//var igst= total - (total * (100 / (100 + (2*cgst_percent_int)/100 ) ) );
//var igst=( total * (2*cgst_percent_int));
var igst= Math.round((total/(100+(2*cgst_percent_int)))*(2*cgst_percent_int));

//var igstsd=total-100;

//alert/
var cgst=parseFloat(igst/2);
document.getElementById("sgst_per_5").value=cgst_percent_int;
document.getElementById("sgst_amount5").value=cgst.toFixed(2);
document.getElementById("cgst_amount5").value=cgst.toFixed(2);
document.getElementById("taxable_value5").value=(total-parseFloat(igst)).toFixed(2);
document.getElementById("all_total5").value=total.toFixed(2);
var total1=document.getElementById("total1").value || 0;
var total2=document.getElementById("total2").value || 0;
var total3=document.getElementById("total3").value || 0;
var total4=document.getElementById("total4").value || 0;
var total5=document.getElementById("total5").value || 0;
var total6=document.getElementById("total6").value || 0;
var total7=document.getElementById("total7").value || 0;
var total8=document.getElementById("total8").value || 0;
var total9=document.getElementById("total9").value || 0;
var total10=document.getElementById("total10").value || 0;
var total11=document.getElementById("total11").value || 0;
var total12=document.getElementById("total12").value || 0;
var total13=document.getElementById("total13").value || 0;
var total14=document.getElementById("total14").value || 0;
var total15=document.getElementById("total15").value || 0;

var totalll=parseFloat(total1)+parseFloat(total2)+parseFloat(total3)+parseFloat(total4)+parseFloat(total5)+parseFloat(total6)+parseFloat(total7)+parseFloat(total8)+parseFloat(total9)+parseFloat(total10)+parseFloat(total11)+parseFloat(total12)+parseFloat(total13)+parseFloat(total14)+parseFloat(total15);
document.getElementById("all_total_t").value=totalll;


var cgst_amount1=document.getElementById("cgst_amount1").value || 0;
var cgst_amount2=document.getElementById("cgst_amount2").value || 0;
var cgst_amount3=document.getElementById("cgst_amount3").value || 0;
var cgst_amount4=document.getElementById("cgst_amount4").value || 0;
var cgst_amount5=document.getElementById("cgst_amount5").value || 0;
var cgst_amount6=document.getElementById("cgst_amount6").value || 0;
var cgst_amount7=document.getElementById("cgst_amount7").value || 0;
var cgst_amount8=document.getElementById("cgst_amount8").value || 0;
var cgst_amount9=document.getElementById("cgst_amount9").value || 0;
var cgst_amount10=document.getElementById("cgst_amount10").value || 0;
var cgst_amount11=document.getElementById("cgst_amount11").value || 0;
var cgst_amount12=document.getElementById("cgst_amount12").value || 0;
var cgst_amount13=document.getElementById("cgst_amount13").value || 0;
var cgst_amount14=document.getElementById("cgst_amount14").value || 0;
var cgst_amount15=document.getElementById("cgst_amount15").value || 0;
var cgst_amountll=parseFloat(cgst_amount1)+parseFloat(cgst_amount2)+parseFloat(cgst_amount3)+parseFloat(cgst_amount4)+parseFloat(cgst_amount5)+parseFloat(cgst_amount6)+parseFloat(cgst_amount7)+parseFloat(cgst_amount8)+parseFloat(cgst_amount9)+parseFloat(cgst_amount10)+parseFloat(cgst_amount11)+parseFloat(cgst_amount12)+parseFloat(cgst_amount13)+parseFloat(cgst_amount14)+parseFloat(cgst_amount15);
document.getElementById("cgst_amount_t").value=cgst_amountll;
document.getElementById("sgst_amount_t").value=cgst_amountll;


var taxable_value1=document.getElementById("taxable_value1").value || 0;
var taxable_value2=document.getElementById("taxable_value2").value || 0;
var taxable_value3=document.getElementById("taxable_value3").value || 0;
var taxable_value4=document.getElementById("taxable_value4").value || 0;
var taxable_value5=document.getElementById("taxable_value5").value || 0;
var taxable_value6=document.getElementById("taxable_value6").value || 0;
var taxable_value7=document.getElementById("taxable_value7").value || 0;
var taxable_value8=document.getElementById("taxable_value8").value || 0;
var taxable_value9=document.getElementById("taxable_value9").value || 0;
var taxable_value10=document.getElementById("taxable_value10").value || 0;
var taxable_value11=document.getElementById("taxable_value11").value || 0;
var taxable_value12=document.getElementById("taxable_value12").value || 0;
var taxable_value13=document.getElementById("taxable_value13").value || 0;
var taxable_value14=document.getElementById("taxable_value14").value || 0;
var taxable_value15=document.getElementById("taxable_value15").value || 0;
var taxable_valuell=parseFloat(taxable_value1)+parseFloat(taxable_value2)+parseFloat(taxable_value3)+parseFloat(taxable_value4)+parseFloat(taxable_value5)+parseFloat(taxable_value6)+parseFloat(taxable_value7)+parseFloat(taxable_value8)+parseFloat(taxable_value9)+parseFloat(taxable_value10)+parseFloat(taxable_value11)+parseFloat(taxable_value12)+parseFloat(taxable_value13)+parseFloat(taxable_value14)+parseFloat(taxable_value15);
document.getElementById("taxable_value_t").value=taxable_valuell;


}
function CalculateTotal6()
{


var rate=document.getElementById('rate6').value;

var qty=document.getElementById('qty6').value;
var total=rate*qty;
document.getElementById("total6").value=total.toFixed(2);;
var total1=document.getElementById("total1").value || 0;
var total2=document.getElementById("total2").value || 0;
var total3=document.getElementById("total3").value || 0;
var total4=document.getElementById("total4").value || 0;
var total5=document.getElementById("total5").value || 0;
var total6=document.getElementById("total6").value || 0;
var total7=document.getElementById("total7").value || 0;
var total8=document.getElementById("total8").value || 0;
var total9=document.getElementById("total9").value || 0;
var total10=document.getElementById("total10").value || 0;
var total11=document.getElementById("total11").value || 0;
var total12=document.getElementById("total12").value || 0;
var total13=document.getElementById("total13").value || 0;
var total14=document.getElementById("total14").value || 0;
var total15=document.getElementById("total15").value || 0;

var totalll=parseFloat(total1)+parseFloat(total2)+parseFloat(total3)+parseFloat(total4)+parseFloat(total5)+parseFloat(total6)+parseFloat(total7)+parseFloat(total8)+parseFloat(total9)+parseFloat(total10)+parseFloat(total11)+parseFloat(total12)+parseFloat(total13)+parseFloat(total14)+parseFloat(total15);
document.getElementById("total_t").value=totalll;
var cgst_percent=document.getElementById('cgst_per_6').value;
var cgst_percent_int=parseFloat(cgst_percent);
//var igst= total - (total * (100 / (100 + (2*cgst_percent_int)/100 ) ) );
//var igst=( total * (2*cgst_percent_int));
var igst= Math.round((total/(100+(2*cgst_percent_int)))*(2*cgst_percent_int));

//var igstsd=total-100;

//alert/
var cgst=parseFloat(igst/2);
document.getElementById("sgst_per_6").value=cgst_percent_int;
document.getElementById("sgst_amount6").value=cgst.toFixed(2);
document.getElementById("cgst_amount6").value=cgst.toFixed(2);
document.getElementById("taxable_value6").value=(total-parseFloat(igst)).toFixed(2);
document.getElementById("all_total6").value=total.toFixed(2);
var total1=document.getElementById("total1").value || 0;
var total2=document.getElementById("total2").value || 0;
var total3=document.getElementById("total3").value || 0;
var total4=document.getElementById("total4").value || 0;
var total5=document.getElementById("total5").value || 0;
var total6=document.getElementById("total6").value || 0;
var total7=document.getElementById("total7").value || 0;
var total8=document.getElementById("total8").value || 0;
var total9=document.getElementById("total9").value || 0;
var total10=document.getElementById("total10").value || 0;
var total11=document.getElementById("total11").value || 0;
var total12=document.getElementById("total12").value || 0;
var total13=document.getElementById("total13").value || 0;
var total14=document.getElementById("total14").value || 0;
var total15=document.getElementById("total15").value || 0;


var totalll=parseFloat(total1)+parseFloat(total2)+parseFloat(total3)+parseFloat(total4)+parseFloat(total5)+parseFloat(total6)+parseFloat(total7)+parseFloat(total8)+parseFloat(total9)+parseFloat(total10)+parseFloat(total11)+parseFloat(total12)+parseFloat(total13)+parseFloat(total14)+parseFloat(total15);
document.getElementById("all_total_t").value=totalll;


var cgst_amount1=document.getElementById("cgst_amount1").value || 0;
var cgst_amount2=document.getElementById("cgst_amount2").value || 0;
var cgst_amount3=document.getElementById("cgst_amount3").value || 0;
var cgst_amount4=document.getElementById("cgst_amount4").value || 0;
var cgst_amount5=document.getElementById("cgst_amount5").value || 0;
var cgst_amount6=document.getElementById("cgst_amount6").value || 0;
var cgst_amount7=document.getElementById("cgst_amount7").value || 0;
var cgst_amount8=document.getElementById("cgst_amount8").value || 0;
var cgst_amount9=document.getElementById("cgst_amount9").value || 0;
var cgst_amount10=document.getElementById("cgst_amount10").value || 0;
var cgst_amount11=document.getElementById("cgst_amount11").value || 0;
var cgst_amount12=document.getElementById("cgst_amount12").value || 0;
var cgst_amount13=document.getElementById("cgst_amount13").value || 0;
var cgst_amount14=document.getElementById("cgst_amount14").value || 0;
var cgst_amount15=document.getElementById("cgst_amount15").value || 0;

var cgst_amountll=parseFloat(cgst_amount1)+parseFloat(cgst_amount2)+parseFloat(cgst_amount3)+parseFloat(cgst_amount4)+parseFloat(cgst_amount5)+parseFloat(cgst_amount6)+parseFloat(cgst_amount7)+parseFloat(cgst_amount8)+parseFloat(cgst_amount9)+parseFloat(cgst_amount10)+parseFloat(cgst_amount11)+parseFloat(cgst_amount12)+parseFloat(cgst_amount13)+parseFloat(cgst_amount14)+parseFloat(cgst_amount15);
document.getElementById("cgst_amount_t").value=cgst_amountll;
document.getElementById("sgst_amount_t").value=cgst_amountll;


var taxable_value1=document.getElementById("taxable_value1").value || 0;
var taxable_value2=document.getElementById("taxable_value2").value || 0;
var taxable_value3=document.getElementById("taxable_value3").value || 0;
var taxable_value4=document.getElementById("taxable_value4").value || 0;
var taxable_value5=document.getElementById("taxable_value5").value || 0;
var taxable_value6=document.getElementById("taxable_value6").value || 0;
var taxable_value7=document.getElementById("taxable_value7").value || 0;
var taxable_value8=document.getElementById("taxable_value8").value || 0;
var taxable_value9=document.getElementById("taxable_value9").value || 0;
var taxable_value10=document.getElementById("taxable_value10").value || 0;
var taxable_value11=document.getElementById("taxable_value11").value || 0;
var taxable_value12=document.getElementById("taxable_value12").value || 0;
var taxable_value13=document.getElementById("taxable_value13").value || 0;
var taxable_value14=document.getElementById("taxable_value14").value || 0;
var taxable_value15=document.getElementById("taxable_value15").value || 0;

var taxable_valuell=parseFloat(taxable_value1)+parseFloat(taxable_value2)+parseFloat(taxable_value3)+parseFloat(taxable_value4)+parseFloat(taxable_value5)+parseFloat(taxable_value6)+parseFloat(taxable_value7)+parseFloat(taxable_value8)+parseFloat(taxable_value9)+parseFloat(taxable_value10)+parseFloat(taxable_value11)+parseFloat(taxable_value12)+parseFloat(taxable_value13)+parseFloat(taxable_value14)+parseFloat(taxable_value15);
document.getElementById("taxable_value_t").value=taxable_valuell;


}
function CalculateTotal7()
{


var rate=document.getElementById('rate7').value;

var qty=document.getElementById('qty7').value;
var total=rate*qty;
document.getElementById("total7").value=total.toFixed(2);;
var total1=document.getElementById("total1").value || 0;
var total2=document.getElementById("total2").value || 0;
var total3=document.getElementById("total3").value || 0;
var total4=document.getElementById("total4").value || 0;
var total5=document.getElementById("total5").value || 0;
var total6=document.getElementById("total6").value || 0;
var total7=document.getElementById("total7").value || 0;
var total8=document.getElementById("total8").value || 0;
var total9=document.getElementById("total9").value || 0;
var total10=document.getElementById("total10").value || 0;

var total11=document.getElementById("total11").value || 0;
var total12=document.getElementById("total12").value || 0;
var total13=document.getElementById("total13").value || 0;
var total14=document.getElementById("total14").value || 0;
var total15=document.getElementById("total15").value || 0;

var totalll=parseFloat(total1)+parseFloat(total2)+parseFloat(total3)+parseFloat(total4)+parseFloat(total5)+parseFloat(total6)+parseFloat(total7)+parseFloat(total8)+parseFloat(total9)+parseFloat(total10)+parseFloat(total11)+parseFloat(total12)+parseFloat(total13)+parseFloat(total14)+parseFloat(total15);
document.getElementById("total_t").value=totalll;

var cgst_percent=document.getElementById('cgst_per_7').value;
var cgst_percent_int=parseFloat(cgst_percent);
//var igst= total - (total * (100 / (100 + (2*cgst_percent_int)/100 ) ) );
//var igst=( total * (2*cgst_percent_int));
var igst= Math.round((total/(100+(2*cgst_percent_int)))*(2*cgst_percent_int));

//var igstsd=total-100;

//alert/
var cgst=parseFloat(igst/2);
document.getElementById("sgst_per_7").value=cgst_percent_int;
document.getElementById("sgst_amount7").value=cgst.toFixed(2);
document.getElementById("cgst_amount7").value=cgst.toFixed(2);
document.getElementById("taxable_value7").value=(total-parseFloat(igst)).toFixed(2);
document.getElementById("all_total7").value=total.toFixed(2);
var total1=document.getElementById("total1").value || 0;
var total2=document.getElementById("total2").value || 0;
var total3=document.getElementById("total3").value || 0;
var total4=document.getElementById("total4").value || 0;
var total5=document.getElementById("total5").value || 0;
var total6=document.getElementById("total6").value || 0;
var total7=document.getElementById("total7").value || 0;
var total8=document.getElementById("total8").value || 0;
var total9=document.getElementById("total9").value || 0;
var total10=document.getElementById("total10").value || 0;
var total11=document.getElementById("total11").value || 0;
var total12=document.getElementById("total12").value || 0;
var total13=document.getElementById("total13").value || 0;
var total14=document.getElementById("total14").value || 0;
var total15=document.getElementById("total15").value || 0;

var totalll=parseFloat(total1)+parseFloat(total2)+parseFloat(total3)+parseFloat(total4)+parseFloat(total5)+parseFloat(total6)+parseFloat(total7)+parseFloat(total8)+parseFloat(total9)+parseFloat(total10)+parseFloat(total11)+parseFloat(total12)+parseFloat(total13)+parseFloat(total14)+parseFloat(total15);
document.getElementById("all_total_t").value=totalll;


var cgst_amount1=document.getElementById("cgst_amount1").value || 0;
var cgst_amount2=document.getElementById("cgst_amount2").value || 0;
var cgst_amount3=document.getElementById("cgst_amount3").value || 0;
var cgst_amount4=document.getElementById("cgst_amount4").value || 0;
var cgst_amount5=document.getElementById("cgst_amount5").value || 0;
var cgst_amount6=document.getElementById("cgst_amount6").value || 0;
var cgst_amount7=document.getElementById("cgst_amount7").value || 0;
var cgst_amount8=document.getElementById("cgst_amount8").value || 0;
var cgst_amount9=document.getElementById("cgst_amount9").value || 0;
var cgst_amount10=document.getElementById("cgst_amount10").value || 0;
var cgst_amount11=document.getElementById("cgst_amount11").value || 0;
var cgst_amount12=document.getElementById("cgst_amount12").value || 0;
var cgst_amount13=document.getElementById("cgst_amount13").value || 0;
var cgst_amount14=document.getElementById("cgst_amount14").value || 0;
var cgst_amount15=document.getElementById("cgst_amount15").value || 0;
var cgst_amountll=parseFloat(cgst_amount1)+parseFloat(cgst_amount2)+parseFloat(cgst_amount3)+parseFloat(cgst_amount4)+parseFloat(cgst_amount5)+parseFloat(cgst_amount6)+parseFloat(cgst_amount7)+parseFloat(cgst_amount8)+parseFloat(cgst_amount9)+parseFloat(cgst_amount10)+parseFloat(cgst_amount11)+parseFloat(cgst_amount12)+parseFloat(cgst_amount13)+parseFloat(cgst_amount14)+parseFloat(cgst_amount15);
document.getElementById("cgst_amount_t").value=cgst_amountll;
document.getElementById("sgst_amount_t").value=cgst_amountll;


var taxable_value1=document.getElementById("taxable_value1").value || 0;
var taxable_value2=document.getElementById("taxable_value2").value || 0;
var taxable_value3=document.getElementById("taxable_value3").value || 0;
var taxable_value4=document.getElementById("taxable_value4").value || 0;
var taxable_value5=document.getElementById("taxable_value5").value || 0;
var taxable_value6=document.getElementById("taxable_value6").value || 0;
var taxable_value7=document.getElementById("taxable_value7").value || 0;
var taxable_value8=document.getElementById("taxable_value8").value || 0;
var taxable_value9=document.getElementById("taxable_value9").value || 0;
var taxable_value10=document.getElementById("taxable_value10").value || 0;
var taxable_value11=document.getElementById("taxable_value11").value || 0;
var taxable_value12=document.getElementById("taxable_value12").value || 0;
var taxable_value13=document.getElementById("taxable_value13").value || 0;
var taxable_value14=document.getElementById("taxable_value14").value || 0;
var taxable_value15=document.getElementById("taxable_value15").value || 0;
var taxable_valuell=parseFloat(taxable_value1)+parseFloat(taxable_value2)+parseFloat(taxable_value3)+parseFloat(taxable_value4)+parseFloat(taxable_value5)+parseFloat(taxable_value6)+parseFloat(taxable_value7)+parseFloat(taxable_value8)+parseFloat(taxable_value9)+parseFloat(taxable_value10)+parseFloat(taxable_value11)+parseFloat(taxable_value12)+parseFloat(taxable_value13)+parseFloat(taxable_value14)+parseFloat(taxable_value15);
document.getElementById("taxable_value_t").value=taxable_valuell;


}
function CalculateTotal8()
{


var rate=document.getElementById('rate8').value;

var qty=document.getElementById('qty8').value;
var total=rate*qty;
document.getElementById("total8").value=total.toFixed(2);;
var total1=document.getElementById("total1").value || 0;
var total2=document.getElementById("total2").value || 0;
var total3=document.getElementById("total3").value || 0;
var total4=document.getElementById("total4").value || 0;
var total5=document.getElementById("total5").value || 0;
var total6=document.getElementById("total6").value || 0;
var total7=document.getElementById("total7").value || 0;
var total8=document.getElementById("total8").value || 0;
var total9=document.getElementById("total9").value || 0;
var total10=document.getElementById("total10").value || 0;
var total11=document.getElementById("total11").value || 0;
var total12=document.getElementById("total12").value || 0;
var total13=document.getElementById("total13").value || 0;
var total14=document.getElementById("total14").value || 0;
var total15=document.getElementById("total15").value || 0;

var totalll=parseFloat(total1)+parseFloat(total2)+parseFloat(total3)+parseFloat(total4)+parseFloat(total5)+parseFloat(total6)+parseFloat(total7)+parseFloat(total8)+parseFloat(total9)+parseFloat(total10)+parseFloat(total11)+parseFloat(total12)+parseFloat(total13)+parseFloat(total14)+parseFloat(total15);
document.getElementById("total_t").value=totalll;

var cgst_percent=document.getElementById('cgst_per_8').value;
var cgst_percent_int=parseFloat(cgst_percent);
//var igst= total - (total * (100 / (100 + (2*cgst_percent_int)/100 ) ) );
//var igst=( total * (2*cgst_percent_int));
var igst= Math.round((total/(100+(2*cgst_percent_int)))*(2*cgst_percent_int));

//var igstsd=total-100;

//alert/
var cgst=parseFloat(igst/2);
document.getElementById("sgst_per_8").value=cgst_percent_int;
document.getElementById("sgst_amount8").value=cgst.toFixed(2);
document.getElementById("cgst_amount8").value=cgst.toFixed(2);
document.getElementById("taxable_value8").value=(total-parseFloat(igst)).toFixed(2);
document.getElementById("all_total8").value=total.toFixed(2);

var total1=document.getElementById("total1").value || 0;
var total2=document.getElementById("total2").value || 0;
var total3=document.getElementById("total3").value || 0;
var total4=document.getElementById("total4").value || 0;
var total5=document.getElementById("total5").value || 0;
var total6=document.getElementById("total6").value || 0;
var total7=document.getElementById("total7").value || 0;
var total8=document.getElementById("total8").value || 0;
var total9=document.getElementById("total9").value || 0;
var total10=document.getElementById("total10").value || 0;
var total11=document.getElementById("total11").value || 0;
var total12=document.getElementById("total12").value || 0;
var total13=document.getElementById("total13").value || 0;
var total14=document.getElementById("total14").value || 0;
var total15=document.getElementById("total15").value || 0;

var totalll=parseFloat(total1)+parseFloat(total2)+parseFloat(total3)+parseFloat(total4)+parseFloat(total5)+parseFloat(total6)+parseFloat(total7)+parseFloat(total8)+parseFloat(total9)+parseFloat(total10)+parseFloat(total11)+parseFloat(total12)+parseFloat(total13)+parseFloat(total14)+parseFloat(total15);
document.getElementById("all_total_t").value=totalll;


var cgst_amount1=document.getElementById("cgst_amount1").value || 0;
var cgst_amount2=document.getElementById("cgst_amount2").value || 0;
var cgst_amount3=document.getElementById("cgst_amount3").value || 0;
var cgst_amount4=document.getElementById("cgst_amount4").value || 0;
var cgst_amount5=document.getElementById("cgst_amount5").value || 0;
var cgst_amount6=document.getElementById("cgst_amount6").value || 0;
var cgst_amount7=document.getElementById("cgst_amount7").value || 0;
var cgst_amount8=document.getElementById("cgst_amount8").value || 0;
var cgst_amount9=document.getElementById("cgst_amount9").value || 0;
var cgst_amount10=document.getElementById("cgst_amount10").value || 0;
var cgst_amount11=document.getElementById("cgst_amount11").value || 0;
var cgst_amount12=document.getElementById("cgst_amount12").value || 0;
var cgst_amount13=document.getElementById("cgst_amount13").value || 0;
var cgst_amount14=document.getElementById("cgst_amount14").value || 0;
var cgst_amount15=document.getElementById("cgst_amount15").value || 0;
var cgst_amountll=parseFloat(cgst_amount1)+parseFloat(cgst_amount2)+parseFloat(cgst_amount3)+parseFloat(cgst_amount4)+parseFloat(cgst_amount5)+parseFloat(cgst_amount6)+parseFloat(cgst_amount7)+parseFloat(cgst_amount8)+parseFloat(cgst_amount9)+parseFloat(cgst_amount10)+parseFloat(cgst_amount11)+parseFloat(cgst_amount12)+parseFloat(cgst_amount13)+parseFloat(cgst_amount14)+parseFloat(cgst_amount15);
document.getElementById("cgst_amount_t").value=cgst_amountll;
document.getElementById("sgst_amount_t").value=cgst_amountll;


var taxable_value1=document.getElementById("taxable_value1").value || 0;
var taxable_value2=document.getElementById("taxable_value2").value || 0;
var taxable_value3=document.getElementById("taxable_value3").value || 0;
var taxable_value4=document.getElementById("taxable_value4").value || 0;
var taxable_value5=document.getElementById("taxable_value5").value || 0;
var taxable_value6=document.getElementById("taxable_value6").value || 0;
var taxable_value7=document.getElementById("taxable_value7").value || 0;
var taxable_value8=document.getElementById("taxable_value8").value || 0;
var taxable_value9=document.getElementById("taxable_value9").value || 0;
var taxable_value10=document.getElementById("taxable_value10").value || 0;
var taxable_value11=document.getElementById("taxable_value11").value || 0;
var taxable_value12=document.getElementById("taxable_value12").value || 0;
var taxable_value13=document.getElementById("taxable_value13").value || 0;
var taxable_value14=document.getElementById("taxable_value14").value || 0;
var taxable_value15=document.getElementById("taxable_value15").value || 0;

var taxable_valuell=parseFloat(taxable_value1)+parseFloat(taxable_value2)+parseFloat(taxable_value3)+parseFloat(taxable_value4)+parseFloat(taxable_value5)+parseFloat(taxable_value6)+parseFloat(taxable_value7)+parseFloat(taxable_value8)+parseFloat(taxable_value9)+parseFloat(taxable_value10)+parseFloat(taxable_value11)+parseFloat(taxable_value12)+parseFloat(taxable_value13)+parseFloat(taxable_value14)+parseFloat(taxable_value15);
document.getElementById("taxable_value_t").value=taxable_valuell;


}
function CalculateTotal9()
{


var rate=document.getElementById('rate9').value;

var qty=document.getElementById('qty9').value;
var total=rate*qty;
document.getElementById("total9").value=total.toFixed(2);;
var total1=document.getElementById("total1").value || 0;
var total2=document.getElementById("total2").value || 0;
var total3=document.getElementById("total3").value || 0;
var total4=document.getElementById("total4").value || 0;
var total5=document.getElementById("total5").value || 0;
var total6=document.getElementById("total6").value || 0;
var total7=document.getElementById("total7").value || 0;
var total8=document.getElementById("total8").value || 0;
var total9=document.getElementById("total9").value || 0;
var total10=document.getElementById("total10").value || 0;
var total11=document.getElementById("total11").value || 0;
var total12=document.getElementById("total12").value || 0;
var total13=document.getElementById("total13").value || 0;
var total14=document.getElementById("total14").value || 0;
var total15=document.getElementById("total15").value || 0;

var totalll=parseFloat(total1)+parseFloat(total2)+parseFloat(total3)+parseFloat(total4)+parseFloat(total5)+parseFloat(total6)+parseFloat(total7)+parseFloat(total8)+parseFloat(total9)+parseFloat(total10)+parseFloat(total11)+parseFloat(total12)+parseFloat(total13)+parseFloat(total14)+parseFloat(total15);

document.getElementById("total_t").value=totalll;

var cgst_percent=document.getElementById('cgst_per_9').value;
var cgst_percent_int=parseFloat(cgst_percent);
//var igst= total - (total * (100 / (100 + (2*cgst_percent_int)/100 ) ) );
//var igst=( total * (2*cgst_percent_int));
var igst= Math.round((total/(100+(2*cgst_percent_int)))*(2*cgst_percent_int));

//var igstsd=total-100;

//alert/
var cgst=parseFloat(igst/2);
document.getElementById("sgst_per_9").value=cgst_percent_int;
document.getElementById("sgst_amount9").value=cgst.toFixed(2);
document.getElementById("cgst_amount9").value=cgst.toFixed(2);
document.getElementById("taxable_value9").value=(total-parseFloat(igst)).toFixed(2);
document.getElementById("all_total9").value=total.toFixed(2);
var total1=document.getElementById("total1").value || 0;
var total2=document.getElementById("total2").value || 0;
var total3=document.getElementById("total3").value || 0;
var total4=document.getElementById("total4").value || 0;
var total5=document.getElementById("total5").value || 0;
var total6=document.getElementById("total6").value || 0;
var total7=document.getElementById("total7").value || 0;
var total8=document.getElementById("total8").value || 0;
var total9=document.getElementById("total9").value || 0;
var total10=document.getElementById("total10").value || 0;
var total11=document.getElementById("total11").value || 0;
var total12=document.getElementById("total12").value || 0;
var total13=document.getElementById("total13").value || 0;
var total14=document.getElementById("total14").value || 0;
var total15=document.getElementById("total15").value || 0;

var totalll=parseFloat(total1)+parseFloat(total2)+parseFloat(total3)+parseFloat(total4)+parseFloat(total5)+parseFloat(total6)+parseFloat(total7)+parseFloat(total8)+parseFloat(total9)+parseFloat(total10)+parseFloat(total11)+parseFloat(total12)+parseFloat(total13)+parseFloat(total14)+parseFloat(total15);
document.getElementById("all_total_t").value=totalll;


var cgst_amount1=document.getElementById("cgst_amount1").value || 0;
var cgst_amount2=document.getElementById("cgst_amount2").value || 0;
var cgst_amount3=document.getElementById("cgst_amount3").value || 0;
var cgst_amount4=document.getElementById("cgst_amount4").value || 0;
var cgst_amount5=document.getElementById("cgst_amount5").value || 0;
var cgst_amount6=document.getElementById("cgst_amount6").value || 0;
var cgst_amount7=document.getElementById("cgst_amount7").value || 0;
var cgst_amount8=document.getElementById("cgst_amount8").value || 0;
var cgst_amount9=document.getElementById("cgst_amount9").value || 0;
var cgst_amount10=document.getElementById("cgst_amount10").value || 0;
var cgst_amount11=document.getElementById("cgst_amount11").value || 0;
var cgst_amount12=document.getElementById("cgst_amount12").value || 0;
var cgst_amount13=document.getElementById("cgst_amount13").value || 0;
var cgst_amount14=document.getElementById("cgst_amount14").value || 0;
var cgst_amount15=document.getElementById("cgst_amount15").value || 0;
var cgst_amountll=parseFloat(cgst_amount1)+parseFloat(cgst_amount2)+parseFloat(cgst_amount3)+parseFloat(cgst_amount4)+parseFloat(cgst_amount5)+parseFloat(cgst_amount6)+parseFloat(cgst_amount7)+parseFloat(cgst_amount8)+parseFloat(cgst_amount9)+parseFloat(cgst_amount10)+parseFloat(cgst_amount11)+parseFloat(cgst_amount12)+parseFloat(cgst_amount13)+parseFloat(cgst_amount14)+parseFloat(cgst_amount15);
document.getElementById("cgst_amount_t").value=cgst_amountll;
document.getElementById("sgst_amount_t").value=cgst_amountll;


var taxable_value1=document.getElementById("taxable_value1").value || 0;
var taxable_value2=document.getElementById("taxable_value2").value || 0;
var taxable_value3=document.getElementById("taxable_value3").value || 0;
var taxable_value4=document.getElementById("taxable_value4").value || 0;
var taxable_value5=document.getElementById("taxable_value5").value || 0;
var taxable_value6=document.getElementById("taxable_value6").value || 0;
var taxable_value7=document.getElementById("taxable_value7").value || 0;
var taxable_value8=document.getElementById("taxable_value8").value || 0;
var taxable_value9=document.getElementById("taxable_value9").value || 0;
var taxable_value10=document.getElementById("taxable_value10").value || 0;
var taxable_value11=document.getElementById("taxable_value11").value || 0;
var taxable_value12=document.getElementById("taxable_value12").value || 0;
var taxable_value13=document.getElementById("taxable_value13").value || 0;
var taxable_value14=document.getElementById("taxable_value14").value || 0;
var taxable_value15=document.getElementById("taxable_value15").value || 0;
var taxable_valuell=parseFloat(taxable_value1)+parseFloat(taxable_value2)+parseFloat(taxable_value3)+parseFloat(taxable_value4)+parseFloat(taxable_value5)+parseFloat(taxable_value6)+parseFloat(taxable_value7)+parseFloat(taxable_value8)+parseFloat(taxable_value9)+parseFloat(taxable_value10)+parseFloat(taxable_value11)+parseFloat(taxable_value12)+parseFloat(taxable_value13)+parseFloat(taxable_value14)+parseFloat(taxable_value15);
document.getElementById("taxable_value_t").value=taxable_valuell;



}
function CalculateTotal10()
{


var rate=document.getElementById('rate10').value;

var qty=document.getElementById('qty10').value;
var total=rate*qty;
document.getElementById("total10").value=total.toFixed(2);;
var total1=document.getElementById("total1").value || 0;
var total2=document.getElementById("total2").value || 0;
var total3=document.getElementById("total3").value || 0;
var total4=document.getElementById("total4").value || 0;
var total5=document.getElementById("total5").value || 0;
var total6=document.getElementById("total6").value || 0;
var total7=document.getElementById("total7").value || 0;
var total8=document.getElementById("total8").value || 0;
var total9=document.getElementById("total9").value || 0;
var total10=document.getElementById("total10").value || 0;
var total11=document.getElementById("total11").value || 0;
var total12=document.getElementById("total12").value || 0;
var total13=document.getElementById("total13").value || 0;
var total14=document.getElementById("total14").value || 0;
var total15=document.getElementById("total15").value || 0;

var totalll=parseFloat(total1)+parseFloat(total2)+parseFloat(total3)+parseFloat(total4)+parseFloat(total5)+parseFloat(total6)+parseFloat(total7)+parseFloat(total8)+parseFloat(total9)+parseFloat(total10)+parseFloat(total11)+parseFloat(total12)+parseFloat(total13)+parseFloat(total14)+parseFloat(total15);

document.getElementById("total_t").value=totalll;

var cgst_percent=document.getElementById('cgst_per_10').value;
var cgst_percent_int=parseFloat(cgst_percent);
//var igst= total - (total * (100 / (100 + (2*cgst_percent_int)/100 ) ) );
//var igst=( total * (2*cgst_percent_int));
var igst= Math.round((total/(100+(2*cgst_percent_int)))*(2*cgst_percent_int));

//var igstsd=total-100;

//alert/
var cgst=parseFloat(igst/2);
document.getElementById("sgst_per_10").value=cgst_percent_int;
document.getElementById("sgst_amount10").value=cgst.toFixed(2);
document.getElementById("cgst_amount10").value=cgst.toFixed(2);
document.getElementById("taxable_value10").value=(total-parseFloat(igst)).toFixed(2);
document.getElementById("all_total10").value=total.toFixed(2);
var total1=document.getElementById("total1").value || 0;
var total2=document.getElementById("total2").value || 0;
var total3=document.getElementById("total3").value || 0;
var total4=document.getElementById("total4").value || 0;
var total5=document.getElementById("total5").value || 0;
var total6=document.getElementById("total6").value || 0;
var total7=document.getElementById("total7").value || 0;
var total8=document.getElementById("total8").value || 0;
var total9=document.getElementById("total9").value || 0;
var total10=document.getElementById("total10").value || 0;
var total11=document.getElementById("total11").value || 0;
var total12=document.getElementById("total12").value || 0;
var total13=document.getElementById("total13").value || 0;
var total14=document.getElementById("total14").value || 0;
var total15=document.getElementById("total15").value || 0;

var totalll=parseFloat(total1)+parseFloat(total2)+parseFloat(total3)+parseFloat(total4)+parseFloat(total5)+parseFloat(total6)+parseFloat(total7)+parseFloat(total8)+parseFloat(total9)+parseFloat(total10)+parseFloat(total11)+parseFloat(total12)+parseFloat(total13)+parseFloat(total14)+parseFloat(total15);
document.getElementById("all_total_t").value=totalll;


var cgst_amount1=document.getElementById("cgst_amount1").value || 0;
var cgst_amount2=document.getElementById("cgst_amount2").value || 0;
var cgst_amount3=document.getElementById("cgst_amount3").value || 0;
var cgst_amount4=document.getElementById("cgst_amount4").value || 0;
var cgst_amount5=document.getElementById("cgst_amount5").value || 0;
var cgst_amount6=document.getElementById("cgst_amount6").value || 0;
var cgst_amount7=document.getElementById("cgst_amount7").value || 0;
var cgst_amount8=document.getElementById("cgst_amount8").value || 0;
var cgst_amount9=document.getElementById("cgst_amount9").value || 0;
var cgst_amount10=document.getElementById("cgst_amount10").value || 0;
var cgst_amount11=document.getElementById("cgst_amount11").value || 0;
var cgst_amount12=document.getElementById("cgst_amount12").value || 0;
var cgst_amount13=document.getElementById("cgst_amount13").value || 0;
var cgst_amount14=document.getElementById("cgst_amount14").value || 0;
var cgst_amount15=document.getElementById("cgst_amount15").value || 0;
var cgst_amountll=parseFloat(cgst_amount1)+parseFloat(cgst_amount2)+parseFloat(cgst_amount3)+parseFloat(cgst_amount4)+parseFloat(cgst_amount5)+parseFloat(cgst_amount6)+parseFloat(cgst_amount7)+parseFloat(cgst_amount8)+parseFloat(cgst_amount9)+parseFloat(cgst_amount10)+parseFloat(cgst_amount11)+parseFloat(cgst_amount12)+parseFloat(cgst_amount13)+parseFloat(cgst_amount14)+parseFloat(cgst_amount15);
document.getElementById("cgst_amount_t").value=cgst_amountll;
document.getElementById("sgst_amount_t").value=cgst_amountll;


var taxable_value1=document.getElementById("taxable_value1").value || 0;
var taxable_value2=document.getElementById("taxable_value2").value || 0;
var taxable_value3=document.getElementById("taxable_value3").value || 0;
var taxable_value4=document.getElementById("taxable_value4").value || 0;
var taxable_value5=document.getElementById("taxable_value5").value || 0;
var taxable_value6=document.getElementById("taxable_value6").value || 0;
var taxable_value7=document.getElementById("taxable_value7").value || 0;
var taxable_value8=document.getElementById("taxable_value8").value || 0;
var taxable_value9=document.getElementById("taxable_value9").value || 0;
var taxable_value10=document.getElementById("taxable_value10").value || 0;
var taxable_value11=document.getElementById("taxable_value11").value || 0;
var taxable_value12=document.getElementById("taxable_value12").value || 0;
var taxable_value13=document.getElementById("taxable_value13").value || 0;
var taxable_value14=document.getElementById("taxable_value14").value || 0;
var taxable_value15=document.getElementById("taxable_value15").value || 0;
var taxable_valuell=parseFloat(taxable_value1)+parseFloat(taxable_value2)+parseFloat(taxable_value3)+parseFloat(taxable_value4)+parseFloat(taxable_value5)+parseFloat(taxable_value6)+parseFloat(taxable_value7)+parseFloat(taxable_value8)+parseFloat(taxable_value9)+parseFloat(taxable_value10)+parseFloat(taxable_value11)+parseFloat(taxable_value12)+parseFloat(taxable_value13)+parseFloat(taxable_value14)+parseFloat(taxable_value15);
document.getElementById("taxable_value_t").value=taxable_valuell;



}


function CalculateTotal11()
{


var rate=document.getElementById('rate11').value;

var qty=document.getElementById('qty11').value;
var total=rate*qty;
document.getElementById("total11").value=total.toFixed(2);;
var total1=document.getElementById("total1").value || 0;
var total2=document.getElementById("total2").value || 0;
var total3=document.getElementById("total3").value || 0;
var total4=document.getElementById("total4").value || 0;
var total5=document.getElementById("total5").value || 0;
var total6=document.getElementById("total6").value || 0;
var total7=document.getElementById("total7").value || 0;
var total8=document.getElementById("total8").value || 0;
var total9=document.getElementById("total9").value || 0;
var total10=document.getElementById("total10").value || 0;
var total11=document.getElementById("total11").value || 0;
var total12=document.getElementById("total12").value || 0;
var total13=document.getElementById("total13").value || 0;
var total14=document.getElementById("total14").value || 0;
var total15=document.getElementById("total15").value || 0;


var totalll=parseFloat(total1)+parseFloat(total2)+parseFloat(total3)+parseFloat(total4)+parseFloat(total5)+parseFloat(total6)+parseFloat(total7)+parseFloat(total8)+parseFloat(total9)+parseFloat(total10)+parseFloat(total11)+parseFloat(total12)+parseFloat(total13)+parseFloat(total14)+parseFloat(total15);

document.getElementById("total_t").value=totalll;


var cgst_percent=document.getElementById('cgst_per_11').value;
var cgst_percent_int=parseFloat(cgst_percent);
//var igst= total - (total * (100 / (100 + (2*cgst_percent_int)/100 ) ) );
//var igst=( total * (2*cgst_percent_int));
var igst= Math.round((total/(100+(2*cgst_percent_int)))*(2*cgst_percent_int));

//var igstsd=total-100;

//alert/
var cgst=parseFloat(igst/2);
document.getElementById("sgst_per_11").value=cgst_percent_int;
document.getElementById("sgst_amount11").value=cgst.toFixed(2);
document.getElementById("cgst_amount11").value=cgst.toFixed(2);
document.getElementById("taxable_value11").value=(total-parseFloat(igst)).toFixed(2);
document.getElementById("all_total11").value=total.toFixed(2);

var total1=document.getElementById("total1").value || 0;
var total2=document.getElementById("total2").value || 0;
var total3=document.getElementById("total3").value || 0;
var total4=document.getElementById("total4").value || 0;
var total5=document.getElementById("total5").value || 0;
var total6=document.getElementById("total6").value || 0;
var total7=document.getElementById("total7").value || 0;
var total8=document.getElementById("total8").value || 0;
var total9=document.getElementById("total9").value || 0;
var total10=document.getElementById("total10").value || 0;
var total11=document.getElementById("total11").value || 0;
var total12=document.getElementById("total12").value || 0;
var total13=document.getElementById("total13").value || 0;
var total14=document.getElementById("total14").value || 0;
var total15=document.getElementById("total15").value || 0;


var totalll=parseFloat(total1)+parseFloat(total2)+parseFloat(total3)+parseFloat(total4)+parseFloat(total5)+parseFloat(total6)+parseFloat(total7)+parseFloat(total8)+parseFloat(total9)+parseFloat(total10)+parseFloat(total11)+parseFloat(total12)+parseFloat(total13)+parseFloat(total14)+parseFloat(total15);
document.getElementById("all_total_t").value=totalll;


var cgst_amount1=document.getElementById("cgst_amount1").value || 0;
var cgst_amount2=document.getElementById("cgst_amount2").value || 0;
var cgst_amount3=document.getElementById("cgst_amount3").value || 0;
var cgst_amount4=document.getElementById("cgst_amount4").value || 0;
var cgst_amount5=document.getElementById("cgst_amount5").value || 0;
var cgst_amount6=document.getElementById("cgst_amount6").value || 0;
var cgst_amount7=document.getElementById("cgst_amount7").value || 0;
var cgst_amount8=document.getElementById("cgst_amount8").value || 0;
var cgst_amount9=document.getElementById("cgst_amount9").value || 0;
var cgst_amount10=document.getElementById("cgst_amount10").value || 0;
var cgst_amount11=document.getElementById("cgst_amount11").value || 0;
var cgst_amount12=document.getElementById("cgst_amount12").value || 0;
var cgst_amount13=document.getElementById("cgst_amount13").value || 0;
var cgst_amount14=document.getElementById("cgst_amount14").value || 0;
var cgst_amount15=document.getElementById("cgst_amount15").value || 0;

var cgst_amountll=parseFloat(cgst_amount1)+parseFloat(cgst_amount2)+parseFloat(cgst_amount3)+parseFloat(cgst_amount4)+parseFloat(cgst_amount5)+parseFloat(cgst_amount6)+parseFloat(cgst_amount7)+parseFloat(cgst_amount8)+parseFloat(cgst_amount9)+parseFloat(cgst_amount10)+parseFloat(cgst_amount11)+parseFloat(cgst_amount12)+parseFloat(cgst_amount13)+parseFloat(cgst_amount14)+parseFloat(cgst_amount15);
document.getElementById("cgst_amount_t").value=cgst_amountll;
document.getElementById("sgst_amount_t").value=cgst_amountll;


var taxable_value1=document.getElementById("taxable_value1").value || 0;
var taxable_value2=document.getElementById("taxable_value2").value || 0;
var taxable_value3=document.getElementById("taxable_value3").value || 0;
var taxable_value4=document.getElementById("taxable_value4").value || 0;
var taxable_value5=document.getElementById("taxable_value5").value || 0;
var taxable_value6=document.getElementById("taxable_value6").value || 0;
var taxable_value7=document.getElementById("taxable_value7").value || 0;
var taxable_value8=document.getElementById("taxable_value8").value || 0;
var taxable_value9=document.getElementById("taxable_value9").value || 0;
var taxable_value10=document.getElementById("taxable_value10").value || 0;
var taxable_value11=document.getElementById("taxable_value11").value || 0;
var taxable_value12=document.getElementById("taxable_value12").value || 0;
var taxable_value13=document.getElementById("taxable_value13").value || 0;
var taxable_value14=document.getElementById("taxable_value14").value || 0;
var taxable_value15=document.getElementById("taxable_value15").value || 0;

var taxable_valuell=parseFloat(taxable_value1)+parseFloat(taxable_value2)+parseFloat(taxable_value3)+parseFloat(taxable_value4)+parseFloat(taxable_value5)+parseFloat(taxable_value6)+parseFloat(taxable_value7)+parseFloat(taxable_value8)+parseFloat(taxable_value9)+parseFloat(taxable_value10)+parseFloat(taxable_value11)+parseFloat(taxable_value12)+parseFloat(taxable_value13)+parseFloat(taxable_value14)+parseFloat(taxable_value15);
document.getElementById("taxable_value_t").value=taxable_valuell;


}

function CalculateTotal12()
{


var rate=document.getElementById('rate12').value;

var qty=document.getElementById('qty12').value;
var total=rate*qty;
document.getElementById("total12").value=total.toFixed(2);;
var total1=document.getElementById("total1").value || 0;
var total2=document.getElementById("total2").value || 0;
var total3=document.getElementById("total3").value || 0;
var total4=document.getElementById("total4").value || 0;
var total5=document.getElementById("total5").value || 0;
var total6=document.getElementById("total6").value || 0;
var total7=document.getElementById("total7").value || 0;
var total8=document.getElementById("total8").value || 0;
var total9=document.getElementById("total9").value || 0;
var total10=document.getElementById("total10").value || 0;
var total11=document.getElementById("total11").value || 0;
var total12=document.getElementById("total12").value || 0;
var total13=document.getElementById("total13").value || 0;
var total14=document.getElementById("total14").value || 0;
var total15=document.getElementById("total15").value || 0;

var totalll=parseFloat(total1)+parseFloat(total2)+parseFloat(total3)+parseFloat(total4)+parseFloat(total5)+parseFloat(total6)+parseFloat(total7)+parseFloat(total8)+parseFloat(total9)+parseFloat(total10)+parseFloat(total11)+parseFloat(total12)+parseFloat(total13)+parseFloat(total14)+parseFloat(total15);

document.getElementById("total_t").value=totalll;
var cgst_percent=document.getElementById('cgst_per_12').value;
var cgst_percent_int=parseFloat(cgst_percent);
//var igst= total - (total * (100 / (100 + (2*cgst_percent_int)/100 ) ) );
//var igst=( total * (2*cgst_percent_int));
var igst= Math.round((total/(100+(2*cgst_percent_int)))*(2*cgst_percent_int));

//var igstsd=total-100;

//alert/
var cgst=parseFloat(igst/2);
document.getElementById("sgst_per_12").value=cgst_percent_int;
document.getElementById("sgst_amount12").value=cgst.toFixed(2);
document.getElementById("cgst_amount12").value=cgst.toFixed(2);
document.getElementById("taxable_value12").value=(total-parseFloat(igst)).toFixed(2);
document.getElementById("all_total12").value=total.toFixed(2);

var total1=document.getElementById("total1").value || 0;
var total2=document.getElementById("total2").value || 0;
var total3=document.getElementById("total3").value || 0;
var total4=document.getElementById("total4").value || 0;
var total5=document.getElementById("total5").value || 0;
var total6=document.getElementById("total6").value || 0;
var total7=document.getElementById("total7").value || 0;
var total8=document.getElementById("total8").value || 0;
var total9=document.getElementById("total9").value || 0;
var total10=document.getElementById("total10").value || 0;
var total11=document.getElementById("total11").value || 0;
var total12=document.getElementById("total12").value || 0;
var total13=document.getElementById("total13").value || 0;
var total14=document.getElementById("total14").value || 0;
var total15=document.getElementById("total15").value || 0;


var totalll=parseFloat(total1)+parseFloat(total2)+parseFloat(total3)+parseFloat(total4)+parseFloat(total5)+parseFloat(total6)+parseFloat(total7)+parseFloat(total8)+parseFloat(total9)+parseFloat(total10)+parseFloat(total11)+parseFloat(total12)+parseFloat(total13)+parseFloat(total14)+parseFloat(total15);
document.getElementById("all_total_t").value=totalll;


var cgst_amount1=document.getElementById("cgst_amount1").value || 0;
var cgst_amount2=document.getElementById("cgst_amount2").value || 0;
var cgst_amount3=document.getElementById("cgst_amount3").value || 0;
var cgst_amount4=document.getElementById("cgst_amount4").value || 0;
var cgst_amount5=document.getElementById("cgst_amount5").value || 0;
var cgst_amount6=document.getElementById("cgst_amount6").value || 0;
var cgst_amount7=document.getElementById("cgst_amount7").value || 0;
var cgst_amount8=document.getElementById("cgst_amount8").value || 0;
var cgst_amount9=document.getElementById("cgst_amount9").value || 0;
var cgst_amount10=document.getElementById("cgst_amount10").value || 0;
var cgst_amount11=document.getElementById("cgst_amount11").value || 0;
var cgst_amount12=document.getElementById("cgst_amount12").value || 0;
var cgst_amount13=document.getElementById("cgst_amount13").value || 0;
var cgst_amount14=document.getElementById("cgst_amount14").value || 0;
var cgst_amount15=document.getElementById("cgst_amount15").value || 0;

var cgst_amountll=parseFloat(cgst_amount1)+parseFloat(cgst_amount2)+parseFloat(cgst_amount3)+parseFloat(cgst_amount4)+parseFloat(cgst_amount5)+parseFloat(cgst_amount6)+parseFloat(cgst_amount7)+parseFloat(cgst_amount8)+parseFloat(cgst_amount9)+parseFloat(cgst_amount10)+parseFloat(cgst_amount11)+parseFloat(cgst_amount12)+parseFloat(cgst_amount13)+parseFloat(cgst_amount14)+parseFloat(cgst_amount15);
document.getElementById("cgst_amount_t").value=cgst_amountll;
document.getElementById("sgst_amount_t").value=cgst_amountll;


var taxable_value1=document.getElementById("taxable_value1").value || 0;
var taxable_value2=document.getElementById("taxable_value2").value || 0;
var taxable_value3=document.getElementById("taxable_value3").value || 0;
var taxable_value4=document.getElementById("taxable_value4").value || 0;
var taxable_value5=document.getElementById("taxable_value5").value || 0;
var taxable_value6=document.getElementById("taxable_value6").value || 0;
var taxable_value7=document.getElementById("taxable_value7").value || 0;
var taxable_value8=document.getElementById("taxable_value8").value || 0;
var taxable_value9=document.getElementById("taxable_value9").value || 0;
var taxable_value10=document.getElementById("taxable_value10").value || 0;
var taxable_value11=document.getElementById("taxable_value11").value || 0;
var taxable_value12=document.getElementById("taxable_value12").value || 0;
var taxable_value13=document.getElementById("taxable_value13").value || 0;
var taxable_value14=document.getElementById("taxable_value14").value || 0;
var taxable_value15=document.getElementById("taxable_value15").value || 0;

var taxable_valuell=parseFloat(taxable_value1)+parseFloat(taxable_value2)+parseFloat(taxable_value3)+parseFloat(taxable_value4)+parseFloat(taxable_value5)+parseFloat(taxable_value6)+parseFloat(taxable_value7)+parseFloat(taxable_value8)+parseFloat(taxable_value9)+parseFloat(taxable_value10)+parseFloat(taxable_value11)+parseFloat(taxable_value12)+parseFloat(taxable_value13)+parseFloat(taxable_value14)+parseFloat(taxable_value15);
document.getElementById("taxable_value_t").value=taxable_valuell;





}

function CalculateTotal13()
{


var rate=document.getElementById('rate13').value;

var qty=document.getElementById('qty13').value;
var total=rate*qty;
document.getElementById("total13").value=total.toFixed(2);;
var total1=document.getElementById("total1").value || 0;
var total2=document.getElementById("total2").value || 0;
var total3=document.getElementById("total3").value || 0;
var total4=document.getElementById("total4").value || 0;
var total5=document.getElementById("total5").value || 0;
var total6=document.getElementById("total6").value || 0;
var total7=document.getElementById("total7").value || 0;
var total8=document.getElementById("total8").value || 0;
var total9=document.getElementById("total9").value || 0;
var total10=document.getElementById("total10").value || 0;
var total11=document.getElementById("total11").value || 0;
var total12=document.getElementById("total12").value || 0;
var total13=document.getElementById("total13").value || 0;
var total14=document.getElementById("total14").value || 0;
var total15=document.getElementById("total15").value || 0;

var totalll=parseFloat(total1)+parseFloat(total2)+parseFloat(total3)+parseFloat(total4)+parseFloat(total5)+parseFloat(total6)+parseFloat(total7)+parseFloat(total8)+parseFloat(total9)+parseFloat(total10)+parseFloat(total11)+parseFloat(total12)+parseFloat(total13)+parseFloat(total14)+parseFloat(total15);

document.getElementById("total_t").value=totalll;


var cgst_percent=document.getElementById('cgst_per_13').value;
var cgst_percent_int=parseFloat(cgst_percent);
//var igst= total - (total * (100 / (100 + (2*cgst_percent_int)/100 ) ) );
//var igst=( total * (2*cgst_percent_int));
var igst= Math.round((total/(100+(2*cgst_percent_int)))*(2*cgst_percent_int));

//var igstsd=total-100;

//alert/
var cgst=parseFloat(igst/2);
document.getElementById("sgst_per_13").value=cgst_percent_int;
document.getElementById("sgst_amount13").value=cgst.toFixed(2);
document.getElementById("cgst_amount13").value=cgst.toFixed(2);
document.getElementById("taxable_value13").value=(total-parseFloat(igst)).toFixed(2);
document.getElementById("all_total13").value=total.toFixed(2);
var total1=document.getElementById("total1").value || 0;
var total2=document.getElementById("total2").value || 0;
var total3=document.getElementById("total3").value || 0;
var total4=document.getElementById("total4").value || 0;
var total5=document.getElementById("total5").value || 0;
var total6=document.getElementById("total6").value || 0;
var total7=document.getElementById("total7").value || 0;
var total8=document.getElementById("total8").value || 0;
var total9=document.getElementById("total9").value || 0;
var total10=document.getElementById("total10").value || 0;
var total11=document.getElementById("total11").value || 0;
var total12=document.getElementById("total12").value || 0;
var total13=document.getElementById("total13").value || 0;
var total14=document.getElementById("total14").value || 0;
var total15=document.getElementById("total15").value || 0;

var totalll=parseFloat(total1)+parseFloat(total2)+parseFloat(total3)+parseFloat(total4)+parseFloat(total5)+parseFloat(total6)+parseFloat(total7)+parseFloat(total8)+parseFloat(total9)+parseFloat(total10)+parseFloat(total11)+parseFloat(total12)+parseFloat(total13)+parseFloat(total14)+parseFloat(total15);
document.getElementById("all_total_t").value=totalll;


var cgst_amount1=document.getElementById("cgst_amount1").value || 0;
var cgst_amount2=document.getElementById("cgst_amount2").value || 0;
var cgst_amount3=document.getElementById("cgst_amount3").value || 0;
var cgst_amount4=document.getElementById("cgst_amount4").value || 0;
var cgst_amount5=document.getElementById("cgst_amount5").value || 0;
var cgst_amount6=document.getElementById("cgst_amount6").value || 0;
var cgst_amount7=document.getElementById("cgst_amount7").value || 0;
var cgst_amount8=document.getElementById("cgst_amount8").value || 0;
var cgst_amount9=document.getElementById("cgst_amount9").value || 0;
var cgst_amount10=document.getElementById("cgst_amount10").value || 0;
var cgst_amount11=document.getElementById("cgst_amount11").value || 0;
var cgst_amount12=document.getElementById("cgst_amount12").value || 0;
var cgst_amount13=document.getElementById("cgst_amount13").value || 0;
var cgst_amount14=document.getElementById("cgst_amount14").value || 0;
var cgst_amount15=document.getElementById("cgst_amount15").value || 0;
var cgst_amountll=parseFloat(cgst_amount1)+parseFloat(cgst_amount2)+parseFloat(cgst_amount3)+parseFloat(cgst_amount4)+parseFloat(cgst_amount5)+parseFloat(cgst_amount6)+parseFloat(cgst_amount7)+parseFloat(cgst_amount8)+parseFloat(cgst_amount9)+parseFloat(cgst_amount10)+parseFloat(cgst_amount11)+parseFloat(cgst_amount12)+parseFloat(cgst_amount13)+parseFloat(cgst_amount14)+parseFloat(cgst_amount15);
document.getElementById("cgst_amount_t").value=cgst_amountll;
document.getElementById("sgst_amount_t").value=cgst_amountll;


var taxable_value1=document.getElementById("taxable_value1").value || 0;
var taxable_value2=document.getElementById("taxable_value2").value || 0;
var taxable_value3=document.getElementById("taxable_value3").value || 0;
var taxable_value4=document.getElementById("taxable_value4").value || 0;
var taxable_value5=document.getElementById("taxable_value5").value || 0;
var taxable_value6=document.getElementById("taxable_value6").value || 0;
var taxable_value7=document.getElementById("taxable_value7").value || 0;
var taxable_value8=document.getElementById("taxable_value8").value || 0;
var taxable_value9=document.getElementById("taxable_value9").value || 0;
var taxable_value10=document.getElementById("taxable_value10").value || 0;
var taxable_value11=document.getElementById("taxable_value11").value || 0;
var taxable_value12=document.getElementById("taxable_value12").value || 0;
var taxable_value13=document.getElementById("taxable_value13").value || 0;
var taxable_value14=document.getElementById("taxable_value14").value || 0;
var taxable_value15=document.getElementById("taxable_value15").value || 0;
var taxable_valuell=parseFloat(taxable_value1)+parseFloat(taxable_value2)+parseFloat(taxable_value3)+parseFloat(taxable_value4)+parseFloat(taxable_value5)+parseFloat(taxable_value6)+parseFloat(taxable_value7)+parseFloat(taxable_value8)+parseFloat(taxable_value9)+parseFloat(taxable_value10)+parseFloat(taxable_value11)+parseFloat(taxable_value12)+parseFloat(taxable_value13)+parseFloat(taxable_value14)+parseFloat(taxable_value15);
document.getElementById("taxable_value_t").value=taxable_valuell;



}

function CalculateTotal14()
{


var rate=document.getElementById('rate14').value;

var qty=document.getElementById('qty14').value;
var total=rate*qty;
document.getElementById("total14").value=total.toFixed(2);;
var total1=document.getElementById("total1").value || 0;
var total2=document.getElementById("total2").value || 0;
var total3=document.getElementById("total3").value || 0;
var total4=document.getElementById("total4").value || 0;
var total5=document.getElementById("total5").value || 0;
var total6=document.getElementById("total6").value || 0;
var total7=document.getElementById("total7").value || 0;
var total8=document.getElementById("total8").value || 0;
var total9=document.getElementById("total9").value || 0;
var total10=document.getElementById("total10").value || 0;
var total11=document.getElementById("total11").value || 0;
var total12=document.getElementById("total12").value || 0;
var total13=document.getElementById("total13").value || 0;
var total14=document.getElementById("total14").value || 0;
var total15=document.getElementById("total15").value || 0;

var totalll=parseFloat(total1)+parseFloat(total2)+parseFloat(total3)+parseFloat(total4)+parseFloat(total5)+parseFloat(total6)+parseFloat(total7)+parseFloat(total8)+parseFloat(total9)+parseFloat(total10)+parseFloat(total11)+parseFloat(total12)+parseFloat(total13)+parseFloat(total14)+parseFloat(total15);

document.getElementById("total_t").value=totalll;


var cgst_percent=document.getElementById('cgst_per_14').value;
var cgst_percent_int=parseFloat(cgst_percent);
//var igst= total - (total * (100 / (100 + (2*cgst_percent_int)/100 ) ) );
//var igst=( total * (2*cgst_percent_int));
var igst= Math.round((total/(100+(2*cgst_percent_int)))*(2*cgst_percent_int));

//var igstsd=total-100;

//alert/
var cgst=parseFloat(igst/2);
document.getElementById("sgst_per_14").value=cgst_percent_int;
document.getElementById("sgst_amount14").value=cgst.toFixed(2);
document.getElementById("cgst_amount14").value=cgst.toFixed(2);
document.getElementById("taxable_value14").value=(total-parseFloat(igst)).toFixed(2);
document.getElementById("all_total14").value=total.toFixed(2);

var total1=document.getElementById("total1").value || 0;
var total2=document.getElementById("total2").value || 0;
var total3=document.getElementById("total3").value || 0;
var total4=document.getElementById("total4").value || 0;
var total5=document.getElementById("total5").value || 0;
var total6=document.getElementById("total6").value || 0;
var total7=document.getElementById("total7").value || 0;
var total8=document.getElementById("total8").value || 0;
var total9=document.getElementById("total9").value || 0;
var total10=document.getElementById("total10").value || 0;
var total11=document.getElementById("total11").value || 0;
var total12=document.getElementById("total12").value || 0;
var total13=document.getElementById("total13").value || 0;
var total14=document.getElementById("total14").value || 0;
var total15=document.getElementById("total15").value || 0;

var totalll=parseFloat(total1)+parseFloat(total2)+parseFloat(total3)+parseFloat(total4)+parseFloat(total5)+parseFloat(total6)+parseFloat(total7)+parseFloat(total8)+parseFloat(total9)+parseFloat(total10)+parseFloat(total11)+parseFloat(total12)+parseFloat(total13)+parseFloat(total14)+parseFloat(total15);
document.getElementById("all_total_t").value=totalll;


var cgst_amount1=document.getElementById("cgst_amount1").value || 0;
var cgst_amount2=document.getElementById("cgst_amount2").value || 0;
var cgst_amount3=document.getElementById("cgst_amount3").value || 0;
var cgst_amount4=document.getElementById("cgst_amount4").value || 0;
var cgst_amount5=document.getElementById("cgst_amount5").value || 0;
var cgst_amount6=document.getElementById("cgst_amount6").value || 0;
var cgst_amount7=document.getElementById("cgst_amount7").value || 0;
var cgst_amount8=document.getElementById("cgst_amount8").value || 0;
var cgst_amount9=document.getElementById("cgst_amount9").value || 0;
var cgst_amount10=document.getElementById("cgst_amount10").value || 0;
var cgst_amount11=document.getElementById("cgst_amount11").value || 0;
var cgst_amount12=document.getElementById("cgst_amount12").value || 0;
var cgst_amount13=document.getElementById("cgst_amount13").value || 0;
var cgst_amount14=document.getElementById("cgst_amount14").value || 0;
var cgst_amount15=document.getElementById("cgst_amount15").value || 0;
var cgst_amountll=parseFloat(cgst_amount1)+parseFloat(cgst_amount2)+parseFloat(cgst_amount3)+parseFloat(cgst_amount4)+parseFloat(cgst_amount5)+parseFloat(cgst_amount6)+parseFloat(cgst_amount7)+parseFloat(cgst_amount8)+parseFloat(cgst_amount9)+parseFloat(cgst_amount10)+parseFloat(cgst_amount11)+parseFloat(cgst_amount12)+parseFloat(cgst_amount13)+parseFloat(cgst_amount14)+parseFloat(cgst_amount15);
document.getElementById("cgst_amount_t").value=cgst_amountll;
document.getElementById("sgst_amount_t").value=cgst_amountll;


var taxable_value1=document.getElementById("taxable_value1").value || 0;
var taxable_value2=document.getElementById("taxable_value2").value || 0;
var taxable_value3=document.getElementById("taxable_value3").value || 0;
var taxable_value4=document.getElementById("taxable_value4").value || 0;
var taxable_value5=document.getElementById("taxable_value5").value || 0;
var taxable_value6=document.getElementById("taxable_value6").value || 0;
var taxable_value7=document.getElementById("taxable_value7").value || 0;
var taxable_value8=document.getElementById("taxable_value8").value || 0;
var taxable_value9=document.getElementById("taxable_value9").value || 0;
var taxable_value10=document.getElementById("taxable_value10").value || 0;
var taxable_value11=document.getElementById("taxable_value11").value || 0;
var taxable_value12=document.getElementById("taxable_value12").value || 0;
var taxable_value13=document.getElementById("taxable_value13").value || 0;
var taxable_value14=document.getElementById("taxable_value14").value || 0;
var taxable_value15=document.getElementById("taxable_value15").value || 0;
var taxable_valuell=parseFloat(taxable_value1)+parseFloat(taxable_value2)+parseFloat(taxable_value3)+parseFloat(taxable_value4)+parseFloat(taxable_value5)+parseFloat(taxable_value6)+parseFloat(taxable_value7)+parseFloat(taxable_value8)+parseFloat(taxable_value9)+parseFloat(taxable_value10)+parseFloat(taxable_value11)+parseFloat(taxable_value12)+parseFloat(taxable_value13)+parseFloat(taxable_value14)+parseFloat(taxable_value15);
document.getElementById("taxable_value_t").value=taxable_valuell;


}

function CalculateTotal15()
{


var rate=document.getElementById('rate15').value;

var qty=document.getElementById('qty15').value;
var total=rate*qty;
document.getElementById("total15").value=total.toFixed(2);;
var total1=document.getElementById("total1").value || 0;
var total2=document.getElementById("total2").value || 0;
var total3=document.getElementById("total3").value || 0;
var total4=document.getElementById("total4").value || 0;
var total5=document.getElementById("total5").value || 0;
var total6=document.getElementById("total6").value || 0;
var total7=document.getElementById("total7").value || 0;
var total8=document.getElementById("total8").value || 0;
var total9=document.getElementById("total9").value || 0;
var total10=document.getElementById("total10").value || 0;
var total11=document.getElementById("total11").value || 0;
var total12=document.getElementById("total12").value || 0;
var total13=document.getElementById("total13").value || 0;
var total14=document.getElementById("total14").value || 0;
var total15=document.getElementById("total15").value || 0;

var totalll=parseFloat(total1)+parseFloat(total2)+parseFloat(total3)+parseFloat(total4)+parseFloat(total5)+parseFloat(total6)+parseFloat(total7)+parseFloat(total8)+parseFloat(total9)+parseFloat(total10)+parseFloat(total11)+parseFloat(total12)+parseFloat(total13)+parseFloat(total14)+parseFloat(total15);

document.getElementById("total_t").value=totalll;

var cgst_percent=document.getElementById('cgst_per_15').value;
var cgst_percent_int=parseFloat(cgst_percent);
//var igst= total - (total * (100 / (100 + (2*cgst_percent_int)/100 ) ) );
//var igst=( total * (2*cgst_percent_int));
var igst= Math.round((total/(100+(2*cgst_percent_int)))*(2*cgst_percent_int));

//var igstsd=total-100;

//alert/
var cgst=parseFloat(igst/2);
document.getElementById("sgst_per_15").value=cgst_percent_int;
document.getElementById("sgst_amount15").value=cgst.toFixed(2);
document.getElementById("cgst_amount15").value=cgst.toFixed(2);
document.getElementById("taxable_value15").value=(total-parseFloat(igst)).toFixed(2);
document.getElementById("all_total15").value=total.toFixed(2);

var total1=document.getElementById("total1").value || 0;
var total2=document.getElementById("total2").value || 0;
var total3=document.getElementById("total3").value || 0;
var total4=document.getElementById("total4").value || 0;
var total5=document.getElementById("total5").value || 0;
var total6=document.getElementById("total6").value || 0;
var total7=document.getElementById("total7").value || 0;
var total8=document.getElementById("total8").value || 0;
var total9=document.getElementById("total9").value || 0;
var total10=document.getElementById("total10").value || 0;
var total11=document.getElementById("total11").value || 0;
var total12=document.getElementById("total12").value || 0;
var total13=document.getElementById("total13").value || 0;
var total14=document.getElementById("total14").value || 0;
var total15=document.getElementById("total15").value || 0;

var totalll=parseFloat(total1)+parseFloat(total2)+parseFloat(total3)+parseFloat(total4)+parseFloat(total5)+parseFloat(total6)+parseFloat(total7)+parseFloat(total8)+parseFloat(total9)+parseFloat(total10)+parseFloat(total11)+parseFloat(total12)+parseFloat(total13)+parseFloat(total14)+parseFloat(total15);
document.getElementById("all_total_t").value=totalll;


var cgst_amount1=document.getElementById("cgst_amount1").value || 0;
var cgst_amount2=document.getElementById("cgst_amount2").value || 0;
var cgst_amount3=document.getElementById("cgst_amount3").value || 0;
var cgst_amount4=document.getElementById("cgst_amount4").value || 0;
var cgst_amount5=document.getElementById("cgst_amount5").value || 0;
var cgst_amount6=document.getElementById("cgst_amount6").value || 0;
var cgst_amount7=document.getElementById("cgst_amount7").value || 0;
var cgst_amount8=document.getElementById("cgst_amount8").value || 0;
var cgst_amount9=document.getElementById("cgst_amount9").value || 0;
var cgst_amount10=document.getElementById("cgst_amount10").value || 0;
var cgst_amount11=document.getElementById("cgst_amount11").value || 0;
var cgst_amount12=document.getElementById("cgst_amount12").value || 0;
var cgst_amount13=document.getElementById("cgst_amount13").value || 0;
var cgst_amount14=document.getElementById("cgst_amount14").value || 0;
var cgst_amount15=document.getElementById("cgst_amount15").value || 0;
var cgst_amountll=parseFloat(cgst_amount1)+parseFloat(cgst_amount2)+parseFloat(cgst_amount3)+parseFloat(cgst_amount4)+parseFloat(cgst_amount5)+parseFloat(cgst_amount6)+parseFloat(cgst_amount7)+parseFloat(cgst_amount8)+parseFloat(cgst_amount9)+parseFloat(cgst_amount10)+parseFloat(cgst_amount11)+parseFloat(cgst_amount12)+parseFloat(cgst_amount13)+parseFloat(cgst_amount14)+parseFloat(cgst_amount15);
document.getElementById("cgst_amount_t").value=cgst_amountll;
document.getElementById("sgst_amount_t").value=cgst_amountll;


var taxable_value1=document.getElementById("taxable_value1").value || 0;
var taxable_value2=document.getElementById("taxable_value2").value || 0;
var taxable_value3=document.getElementById("taxable_value3").value || 0;
var taxable_value4=document.getElementById("taxable_value4").value || 0;
var taxable_value5=document.getElementById("taxable_value5").value || 0;
var taxable_value6=document.getElementById("taxable_value6").value || 0;
var taxable_value7=document.getElementById("taxable_value7").value || 0;
var taxable_value8=document.getElementById("taxable_value8").value || 0;
var taxable_value9=document.getElementById("taxable_value9").value || 0;
var taxable_value10=document.getElementById("taxable_value10").value || 0;
var taxable_value11=document.getElementById("taxable_value11").value || 0;
var taxable_value12=document.getElementById("taxable_value12").value || 0;
var taxable_value13=document.getElementById("taxable_value13").value || 0;
var taxable_value14=document.getElementById("taxable_value14").value || 0;
var taxable_value15=document.getElementById("taxable_value15").value || 0;
var taxable_valuell=parseFloat(taxable_value1)+parseFloat(taxable_value2)+parseFloat(taxable_value3)+parseFloat(taxable_value4)+parseFloat(taxable_value5)+parseFloat(taxable_value6)+parseFloat(taxable_value7)+parseFloat(taxable_value8)+parseFloat(taxable_value9)+parseFloat(taxable_value10)+parseFloat(taxable_value11)+parseFloat(taxable_value12)+parseFloat(taxable_value13)+parseFloat(taxable_value14)+parseFloat(taxable_value15);
document.getElementById("taxable_value_t").value=taxable_valuell;


}

function CalculateHamali()
{


var all_total_t=document.getElementById('all_total_t').value;

var hamali=document.getElementById('hamali').value || 0;
//var round_off=document.getElementById('round_off').value || 0;
var total=parseFloat(all_total_t)+parseFloat(hamali);
document.getElementById("all_total_t_alll").value=total;

document.getElementById("round_off").value=total;
}
function CalculateRoundOff()
{


//var all_total_t=document.getElementById('all_total_t').value;

//var hamali=document.getElementById('hamali').value || 0;
var round_off=document.getElementById('round_off').value || 0;
//var total=parseFloat(hamali)+parseFloat(round_off);
document.getElementById("all_total_t_alll").value=round_off;

}

function CalculateTotal16()
{


var rate=document.getElementById('rate16').value;

var qty=document.getElementById('qty16').value;
var total=rate*qty;
document.getElementById("total16").value=total;
var total1=document.getElementById("total1").value || 0;
var total2=document.getElementById("total2").value || 0;
var total3=document.getElementById("total3").value || 0;
var total4=document.getElementById("total4").value || 0;
var total5=document.getElementById("total5").value || 0;
var total6=document.getElementById("total6").value || 0;
var total7=document.getElementById("total7").value || 0;
var total8=document.getElementById("total8").value || 0;
var total9=document.getElementById("total9").value || 0;
var total10=document.getElementById("total10").value || 0;
var total11=document.getElementById("total11").value || 0;
var total12=document.getElementById("total12").value || 0;
var total13=document.getElementById("total13").value || 0;
var total14=document.getElementById("total14").value || 0;
var total15=document.getElementById("total15").value || 0;

var totalll=parseFloat(total1)+parseFloat(total2)+parseFloat(total3)+parseFloat(total4)+parseFloat(total5)+parseFloat(total6)+parseFloat(total7)+parseFloat(total8)+parseFloat(total9)+parseFloat(total10)+parseFloat(total11)+parseFloat(total12)+parseFloat(total13)+parseFloat(total14)+parseFloat(total15);

document.getElementById("total_t").value=totalll;

}

function CalculateTotal17()
{


var rate=document.getElementById('rate17').value;

var qty=document.getElementById('qty17').value;
var total=rate*qty;
document.getElementById("total17").value=total;
var total1=document.getElementById("total1").value || 0;
var total2=document.getElementById("total2").value || 0;
var total3=document.getElementById("total3").value || 0;
var total4=document.getElementById("total4").value || 0;
var total5=document.getElementById("total5").value || 0;
var total6=document.getElementById("total6").value || 0;
var total7=document.getElementById("total7").value || 0;
var total8=document.getElementById("total8").value || 0;
var total9=document.getElementById("total9").value || 0;
var total10=document.getElementById("total10").value || 0;
var total11=document.getElementById("total11").value || 0;
var total12=document.getElementById("total12").value || 0;
var total13=document.getElementById("total13").value || 0;
var total14=document.getElementById("total14").value || 0;
var total15=document.getElementById("total15").value || 0;

var totalll=parseFloat(total1)+parseFloat(total2)+parseFloat(total3)+parseFloat(total4)+parseFloat(total5)+parseFloat(total6)+parseFloat(total7)+parseFloat(total8)+parseFloat(total9)+parseFloat(total10)+parseFloat(total11)+parseFloat(total12)+parseFloat(total13)+parseFloat(total14)+parseFloat(total15);

document.getElementById("total_t").value=totalll;

}

function CalculateTotal18()
{


var rate=document.getElementById('rate18').value;

var qty=document.getElementById('qty18').value;
var total=rate*qty;
document.getElementById("total18").value=total;
var total1=document.getElementById("total1").value || 0;
var total2=document.getElementById("total2").value || 0;
var total3=document.getElementById("total3").value || 0;
var total4=document.getElementById("total4").value || 0;
var total5=document.getElementById("total5").value || 0;
var total6=document.getElementById("total6").value || 0;
var total7=document.getElementById("total7").value || 0;
var total8=document.getElementById("total8").value || 0;
var total9=document.getElementById("total9").value || 0;
var total10=document.getElementById("total10").value || 0;
var total11=document.getElementById("total11").value || 0;
var total12=document.getElementById("total12").value || 0;
var total13=document.getElementById("total13").value || 0;
var total14=document.getElementById("total14").value || 0;
var total15=document.getElementById("total15").value || 0;

var totalll=parseFloat(total1)+parseFloat(total2)+parseFloat(total3)+parseFloat(total4)+parseFloat(total5)+parseFloat(total6)+parseFloat(total7)+parseFloat(total8)+parseFloat(total9)+parseFloat(total10)+parseFloat(total11)+parseFloat(total12)+parseFloat(total13)+parseFloat(total14)+parseFloat(total15);

document.getElementById("total_t").value=totalll;

}

function CalculateTotal19()
{


var rate=document.getElementById('rate19').value;

var qty=document.getElementById('qty19').value;
var total=rate*qty;
document.getElementById("total19").value=total;
var total1=document.getElementById("total1").value || 0;
var total2=document.getElementById("total2").value || 0;
var total3=document.getElementById("total3").value || 0;
var total4=document.getElementById("total4").value || 0;
var total5=document.getElementById("total5").value || 0;
var total6=document.getElementById("total6").value || 0;
var total7=document.getElementById("total7").value || 0;
var total8=document.getElementById("total8").value || 0;
var total9=document.getElementById("total9").value || 0;
var total10=document.getElementById("total10").value || 0;
var total11=document.getElementById("total11").value || 0;
var total12=document.getElementById("total12").value || 0;
var total13=document.getElementById("total13").value || 0;
var total14=document.getElementById("total14").value || 0;
var total15=document.getElementById("total15").value || 0;

var totalll=parseFloat(total1)+parseFloat(total2)+parseFloat(total3)+parseFloat(total4)+parseFloat(total5)+parseFloat(total6)+parseFloat(total7)+parseFloat(total8)+parseFloat(total9)+parseFloat(total10)+parseFloat(total11)+parseFloat(total12)+parseFloat(total13)+parseFloat(total14)+parseFloat(total15);

document.getElementById("total_t").value=totalll;

}

function CalculateTotal20()
{


var rate=document.getElementById('rate20').value;

var qty=document.getElementById('qty20').value;
var total=rate*qty;
document.getElementById("total20").value=total;
var total1=document.getElementById("total1").value || 0;
var total2=document.getElementById("total2").value || 0;
var total3=document.getElementById("total3").value || 0;
var total4=document.getElementById("total4").value || 0;
var total5=document.getElementById("total5").value || 0;
var total6=document.getElementById("total6").value || 0;
var total7=document.getElementById("total7").value || 0;
var total8=document.getElementById("total8").value || 0;
var total9=document.getElementById("total9").value || 0;
var total10=document.getElementById("total10").value || 0;
var total11=document.getElementById("total11").value || 0;
var total12=document.getElementById("total12").value || 0;
var total13=document.getElementById("total13").value || 0;
var total14=document.getElementById("total14").value || 0;
var total15=document.getElementById("total15").value || 0;

var totalll=parseFloat(total1)+parseFloat(total2)+parseFloat(total3)+parseFloat(total4)+parseFloat(total5)+parseFloat(total6)+parseFloat(total7)+parseFloat(total8)+parseFloat(total9)+parseFloat(total10)+parseFloat(total11)+parseFloat(total12)+parseFloat(total13)+parseFloat(total14)+parseFloat(total15);

document.getElementById("total_t").value=totalll;

}




function CalculateTax()
{
var total=document.getElementById('total1').value;
var cgst_percent=document.getElementById('cgst_per_1').value;
var cgst_percent_int=parseFloat(cgst_percent);
var igst=(total/(100+(2*cgst_percent_int)))*(2*cgst_percent_int);
var cgst=parseFloat(igst/2);
document.getElementById("sgst_per_1").value=cgst_percent_int;
document.getElementById("sgst_amount1").value=Math.round(cgst);
document.getElementById("cgst_amount1").value=Math.round(cgst);
document.getElementById("taxable_value1").value=total-Math.round(parseFloat(igst));
document.getElementById("all_total1").value=total;
var total1=document.getElementById("total1").value || 0;
var total2=document.getElementById("total2").value || 0;
var total3=document.getElementById("total3").value || 0;
var total4=document.getElementById("total4").value || 0;
var total5=document.getElementById("total5").value || 0;
var total6=document.getElementById("total6").value || 0;
var total7=document.getElementById("total7").value || 0;
var total8=document.getElementById("total8").value || 0;
var total9=document.getElementById("total9").value || 0;
var total10=document.getElementById("total10").value || 0;
var total11=document.getElementById("total11").value || 0;
var total12=document.getElementById("total12").value || 0;
var total13=document.getElementById("total13").value || 0;
var total14=document.getElementById("total14").value || 0;
var total15=document.getElementById("total15").value || 0;

var totalll=parseFloat(total1)+parseFloat(total2)+parseFloat(total3)+parseFloat(total4)+parseFloat(total5)+parseFloat(total6)+parseFloat(total7)+parseFloat(total8)+parseFloat(total9)+parseFloat(total10)+parseFloat(total11)+parseFloat(total12)+parseFloat(total13)+parseFloat(total14)+parseFloat(total15);
document.getElementById("all_total_t").value=totalll;


var cgst_amount1=document.getElementById("cgst_amount1").value || 0;
var cgst_amount2=document.getElementById("cgst_amount2").value || 0;
var cgst_amount3=document.getElementById("cgst_amount3").value || 0;
var cgst_amount4=document.getElementById("cgst_amount4").value || 0;
var cgst_amount5=document.getElementById("cgst_amount5").value || 0;
var cgst_amount6=document.getElementById("cgst_amount6").value || 0;
var cgst_amount7=document.getElementById("cgst_amount7").value || 0;
var cgst_amount8=document.getElementById("cgst_amount8").value || 0;
var cgst_amount9=document.getElementById("cgst_amount9").value || 0;
var cgst_amount10=document.getElementById("cgst_amount10").value || 0;
var cgst_amount11=document.getElementById("cgst_amount11").value || 0;
var cgst_amount12=document.getElementById("cgst_amount12").value || 0;
var cgst_amount13=document.getElementById("cgst_amount13").value || 0;
var cgst_amount14=document.getElementById("cgst_amount14").value || 0;
var cgst_amount15=document.getElementById("cgst_amount15").value || 0;

var cgst_amountll=parseFloat(cgst_amount1)+parseFloat(cgst_amount2)+parseFloat(cgst_amount3)+parseFloat(cgst_amount4)+parseFloat(cgst_amount5)+parseFloat(cgst_amount6)+parseFloat(cgst_amount7)+parseFloat(cgst_amount8)+parseFloat(cgst_amount9)+parseFloat(cgst_amount10)+parseFloat(cgst_amount11)+parseFloat(cgst_amount12)+parseFloat(cgst_amount13)+parseFloat(cgst_amount14)+parseFloat(cgst_amount15);
document.getElementById("cgst_amount_t").value=cgst_amountll;
document.getElementById("sgst_amount_t").value=cgst_amountll;


var taxable_value1=document.getElementById("taxable_value1").value || 0;
var taxable_value2=document.getElementById("taxable_value2").value || 0;
var taxable_value3=document.getElementById("taxable_value3").value || 0;
var taxable_value4=document.getElementById("taxable_value4").value || 0;
var taxable_value5=document.getElementById("taxable_value5").value || 0;
var taxable_value6=document.getElementById("taxable_value6").value || 0;
var taxable_value7=document.getElementById("taxable_value7").value || 0;
var taxable_value8=document.getElementById("taxable_value8").value || 0;
var taxable_value9=document.getElementById("taxable_value9").value || 0;
var taxable_value10=document.getElementById("taxable_value10").value || 0;
var taxable_value11=document.getElementById("taxable_value11").value || 0;
var taxable_value12=document.getElementById("taxable_value12").value || 0;
var taxable_value13=document.getElementById("taxable_value13").value || 0;
var taxable_value14=document.getElementById("taxable_value14").value || 0;
var taxable_value15=document.getElementById("taxable_value15").value || 0;
var taxable_valuell=parseFloat(taxable_value1)+parseFloat(taxable_value2)+parseFloat(taxable_value3)+parseFloat(taxable_value4)+parseFloat(taxable_value5)+parseFloat(taxable_value6)+parseFloat(taxable_value7)+parseFloat(taxable_value8)+parseFloat(taxable_value9)+parseFloat(taxable_value10)+parseFloat(taxable_value11)+parseFloat(taxable_value12)+parseFloat(taxable_value13)+parseFloat(taxable_value14)+parseFloat(taxable_value15);
document.getElementById("taxable_value_t").value=taxable_valuell;


}

function CalculateTax2()
{
var total=document.getElementById('total2').value;
var cgst_percent=document.getElementById('cgst_per_2').value;
var cgst_percent_int=parseFloat(cgst_percent);
var igst=(total/(100+(2*cgst_percent_int)))*(2*cgst_percent_int);
var cgst=parseFloat(igst/2);
document.getElementById("sgst_per_2").value=cgst_percent_int;
document.getElementById("sgst_amount2").value=Math.round(cgst);
document.getElementById("cgst_amount2").value=Math.round(cgst);
document.getElementById("taxable_value2").value=total-Math.round(parseFloat(igst));
document.getElementById("all_total2").value=total;
var total1=document.getElementById("total1").value || 0;
var total2=document.getElementById("total2").value || 0;
var total3=document.getElementById("total3").value || 0;
var total4=document.getElementById("total4").value || 0;
var total5=document.getElementById("total5").value || 0;
var total6=document.getElementById("total6").value || 0;
var total7=document.getElementById("total7").value || 0;
var total8=document.getElementById("total8").value || 0;
var total9=document.getElementById("total9").value || 0;
var total10=document.getElementById("total10").value || 0;

var total11=document.getElementById("total11").value || 0;
var total12=document.getElementById("total12").value || 0;
var total13=document.getElementById("total13").value || 0;
var total14=document.getElementById("total14").value || 0;
var total15=document.getElementById("total15").value || 0;

var totalll=parseFloat(total1)+parseFloat(total2)+parseFloat(total3)+parseFloat(total4)+parseFloat(total5)+parseFloat(total6)+parseFloat(total7)+parseFloat(total8)+parseFloat(total9)+parseFloat(total10)+parseFloat(total11)+parseFloat(total12)+parseFloat(total13)+parseFloat(total14)+parseFloat(total15);
document.getElementById("all_total_t").value=totalll;


var cgst_amount1=document.getElementById("cgst_amount1").value || 0;
var cgst_amount2=document.getElementById("cgst_amount2").value || 0;
var cgst_amount3=document.getElementById("cgst_amount3").value || 0;
var cgst_amount4=document.getElementById("cgst_amount4").value || 0;
var cgst_amount5=document.getElementById("cgst_amount5").value || 0;
var cgst_amount6=document.getElementById("cgst_amount6").value || 0;
var cgst_amount7=document.getElementById("cgst_amount7").value || 0;
var cgst_amount8=document.getElementById("cgst_amount8").value || 0;
var cgst_amount9=document.getElementById("cgst_amount9").value || 0;
var cgst_amount10=document.getElementById("cgst_amount10").value || 0;
var cgst_amount11=document.getElementById("cgst_amount11").value || 0;
var cgst_amount12=document.getElementById("cgst_amount12").value || 0;
var cgst_amount13=document.getElementById("cgst_amount13").value || 0;
var cgst_amount14=document.getElementById("cgst_amount14").value || 0;
var cgst_amount15=document.getElementById("cgst_amount15").value || 0;

var cgst_amountll=parseFloat(cgst_amount1)+parseFloat(cgst_amount2)+parseFloat(cgst_amount3)+parseFloat(cgst_amount4)+parseFloat(cgst_amount5)+parseFloat(cgst_amount6)+parseFloat(cgst_amount7)+parseFloat(cgst_amount8)+parseFloat(cgst_amount9)+parseFloat(cgst_amount10)+parseFloat(cgst_amount11)+parseFloat(cgst_amount12)+parseFloat(cgst_amount13)+parseFloat(cgst_amount14)+parseFloat(cgst_amount15);
document.getElementById("cgst_amount_t").value=cgst_amountll;
document.getElementById("sgst_amount_t").value=cgst_amountll;


var taxable_value1=document.getElementById("taxable_value1").value || 0;
var taxable_value2=document.getElementById("taxable_value2").value || 0;
var taxable_value3=document.getElementById("taxable_value3").value || 0;
var taxable_value4=document.getElementById("taxable_value4").value || 0;
var taxable_value5=document.getElementById("taxable_value5").value || 0;
var taxable_value6=document.getElementById("taxable_value6").value || 0;
var taxable_value7=document.getElementById("taxable_value7").value || 0;
var taxable_value8=document.getElementById("taxable_value8").value || 0;
var taxable_value9=document.getElementById("taxable_value9").value || 0;
var taxable_value10=document.getElementById("taxable_value10").value || 0;
var taxable_value11=document.getElementById("taxable_value11").value || 0;
var taxable_value12=document.getElementById("taxable_value12").value || 0;
var taxable_value13=document.getElementById("taxable_value13").value || 0;
var taxable_value14=document.getElementById("taxable_value14").value || 0;
var taxable_value15=document.getElementById("taxable_value15").value || 0;
var taxable_valuell=parseFloat(taxable_value1)+parseFloat(taxable_value2)+parseFloat(taxable_value3)+parseFloat(taxable_value4)+parseFloat(taxable_value5)+parseFloat(taxable_value6)+parseFloat(taxable_value7)+parseFloat(taxable_value8)+parseFloat(taxable_value9)+parseFloat(taxable_value10)+parseFloat(taxable_value11)+parseFloat(taxable_value12)+parseFloat(taxable_value13)+parseFloat(taxable_value14)+parseFloat(taxable_value15);
document.getElementById("taxable_value_t").value=taxable_valuell;



}
function CalculateTax3()
{
var total=document.getElementById('total3').value;
var cgst_percent=document.getElementById('cgst_per_3').value;
var cgst_percent_int=parseFloat(cgst_percent);
var igst=(total/(100+(2*cgst_percent_int)))*(2*cgst_percent_int);
var cgst=parseFloat(igst/2);
document.getElementById("sgst_per_3").value=cgst_percent_int;
document.getElementById("sgst_amount3").value=Math.round(cgst);
document.getElementById("cgst_amount3").value=Math.round(cgst);
document.getElementById("taxable_value3").value=total-Math.round(parseFloat(igst));
document.getElementById("all_total3").value=total;
var total1=document.getElementById("total1").value || 0;
var total2=document.getElementById("total2").value || 0;
var total3=document.getElementById("total3").value || 0;
var total4=document.getElementById("total4").value || 0;
var total5=document.getElementById("total5").value || 0;
var total6=document.getElementById("total6").value || 0;
var total7=document.getElementById("total7").value || 0;
var total8=document.getElementById("total8").value || 0;
var total9=document.getElementById("total9").value || 0;
var total10=document.getElementById("total10").value || 0;
var total11=document.getElementById("total11").value || 0;
var total12=document.getElementById("total12").value || 0;
var total13=document.getElementById("total13").value || 0;
var total14=document.getElementById("total14").value || 0;
var total15=document.getElementById("total15").value || 0;

var totalll=parseFloat(total1)+parseFloat(total2)+parseFloat(total3)+parseFloat(total4)+parseFloat(total5)+parseFloat(total6)+parseFloat(total7)+parseFloat(total8)+parseFloat(total9)+parseFloat(total10)+parseFloat(total11)+parseFloat(total12)+parseFloat(total13)+parseFloat(total14)+parseFloat(total15);
document.getElementById("all_total_t").value=totalll;


var cgst_amount1=document.getElementById("cgst_amount1").value || 0;
var cgst_amount2=document.getElementById("cgst_amount2").value || 0;
var cgst_amount3=document.getElementById("cgst_amount3").value || 0;
var cgst_amount4=document.getElementById("cgst_amount4").value || 0;
var cgst_amount5=document.getElementById("cgst_amount5").value || 0;
var cgst_amount6=document.getElementById("cgst_amount6").value || 0;
var cgst_amount7=document.getElementById("cgst_amount7").value || 0;
var cgst_amount8=document.getElementById("cgst_amount8").value || 0;
var cgst_amount9=document.getElementById("cgst_amount9").value || 0;
var cgst_amount10=document.getElementById("cgst_amount10").value || 0;
var cgst_amount11=document.getElementById("cgst_amount11").value || 0;
var cgst_amount12=document.getElementById("cgst_amount12").value || 0;
var cgst_amount13=document.getElementById("cgst_amount13").value || 0;
var cgst_amount14=document.getElementById("cgst_amount14").value || 0;
var cgst_amount15=document.getElementById("cgst_amount15").value || 0;

var cgst_amountll=parseFloat(cgst_amount1)+parseFloat(cgst_amount2)+parseFloat(cgst_amount3)+parseFloat(cgst_amount4)+parseFloat(cgst_amount5)+parseFloat(cgst_amount6)+parseFloat(cgst_amount7)+parseFloat(cgst_amount8)+parseFloat(cgst_amount9)+parseFloat(cgst_amount10)+parseFloat(cgst_amount11)+parseFloat(cgst_amount12)+parseFloat(cgst_amount13)+parseFloat(cgst_amount14)+parseFloat(cgst_amount15);
document.getElementById("cgst_amount_t").value=cgst_amountll;
document.getElementById("sgst_amount_t").value=cgst_amountll;


var taxable_value1=document.getElementById("taxable_value1").value || 0;
var taxable_value2=document.getElementById("taxable_value2").value || 0;
var taxable_value3=document.getElementById("taxable_value3").value || 0;
var taxable_value4=document.getElementById("taxable_value4").value || 0;
var taxable_value5=document.getElementById("taxable_value5").value || 0;
var taxable_value6=document.getElementById("taxable_value6").value || 0;
var taxable_value7=document.getElementById("taxable_value7").value || 0;
var taxable_value8=document.getElementById("taxable_value8").value || 0;
var taxable_value9=document.getElementById("taxable_value9").value || 0;
var taxable_value10=document.getElementById("taxable_value10").value || 0;
var taxable_value11=document.getElementById("taxable_value11").value || 0;
var taxable_value12=document.getElementById("taxable_value12").value || 0;
var taxable_value13=document.getElementById("taxable_value13").value || 0;
var taxable_value14=document.getElementById("taxable_value14").value || 0;
var taxable_value15=document.getElementById("taxable_value15").value || 0;
var taxable_valuell=parseFloat(taxable_value1)+parseFloat(taxable_value2)+parseFloat(taxable_value3)+parseFloat(taxable_value4)+parseFloat(taxable_value5)+parseFloat(taxable_value6)+parseFloat(taxable_value7)+parseFloat(taxable_value8)+parseFloat(taxable_value9)+parseFloat(taxable_value10)+parseFloat(taxable_value11)+parseFloat(taxable_value12)+parseFloat(taxable_value13)+parseFloat(taxable_value14)+parseFloat(taxable_value15);
document.getElementById("taxable_value_t").value=taxable_valuell;


}
function CalculateTax4()
{
var total=document.getElementById('total4').value;
var cgst_percent=document.getElementById('cgst_per_4').value;
var cgst_percent_int=parseFloat(cgst_percent);
var igst=(total/(100+(2*cgst_percent_int)))*(2*cgst_percent_int);
var cgst=parseFloat(igst/2);
document.getElementById("sgst_per_4").value=cgst_percent_int;
document.getElementById("sgst_amount4").value=Math.round(cgst);
document.getElementById("cgst_amount4").value=Math.round(cgst);
document.getElementById("taxable_value4").value=total-Math.round(parseFloat(igst));
document.getElementById("all_total4").value=total;
var total1=document.getElementById("total1").value || 0;
var total2=document.getElementById("total2").value || 0;
var total3=document.getElementById("total3").value || 0;
var total4=document.getElementById("total4").value || 0;
var total5=document.getElementById("total5").value || 0;
var total6=document.getElementById("total6").value || 0;
var total7=document.getElementById("total7").value || 0;
var total8=document.getElementById("total8").value || 0;
var total9=document.getElementById("total9").value || 0;
var total10=document.getElementById("total10").value || 0;
var total11=document.getElementById("total11").value || 0;
var total12=document.getElementById("total12").value || 0;
var total13=document.getElementById("total13").value || 0;
var total14=document.getElementById("total14").value || 0;
var total15=document.getElementById("total15").value || 0;

var totalll=parseFloat(total1)+parseFloat(total2)+parseFloat(total3)+parseFloat(total4)+parseFloat(total5)+parseFloat(total6)+parseFloat(total7)+parseFloat(total8)+parseFloat(total9)+parseFloat(total10)+parseFloat(total11)+parseFloat(total12)+parseFloat(total13)+parseFloat(total14)+parseFloat(total15);
document.getElementById("all_total_t").value=totalll;


var cgst_amount1=document.getElementById("cgst_amount1").value || 0;
var cgst_amount2=document.getElementById("cgst_amount2").value || 0;
var cgst_amount3=document.getElementById("cgst_amount3").value || 0;
var cgst_amount4=document.getElementById("cgst_amount4").value || 0;
var cgst_amount5=document.getElementById("cgst_amount5").value || 0;
var cgst_amount6=document.getElementById("cgst_amount6").value || 0;
var cgst_amount7=document.getElementById("cgst_amount7").value || 0;
var cgst_amount8=document.getElementById("cgst_amount8").value || 0;
var cgst_amount9=document.getElementById("cgst_amount9").value || 0;
var cgst_amount10=document.getElementById("cgst_amount10").value || 0;
var cgst_amount11=document.getElementById("cgst_amount11").value || 0;
var cgst_amount12=document.getElementById("cgst_amount12").value || 0;
var cgst_amount13=document.getElementById("cgst_amount13").value || 0;
var cgst_amount14=document.getElementById("cgst_amount14").value || 0;
var cgst_amount15=document.getElementById("cgst_amount15").value || 0;

var cgst_amountll=parseFloat(cgst_amount1)+parseFloat(cgst_amount2)+parseFloat(cgst_amount3)+parseFloat(cgst_amount4)+parseFloat(cgst_amount5)+parseFloat(cgst_amount6)+parseFloat(cgst_amount7)+parseFloat(cgst_amount8)+parseFloat(cgst_amount9)+parseFloat(cgst_amount10)+parseFloat(cgst_amount11)+parseFloat(cgst_amount12)+parseFloat(cgst_amount13)+parseFloat(cgst_amount14)+parseFloat(cgst_amount15);
document.getElementById("cgst_amount_t").value=cgst_amountll;
document.getElementById("sgst_amount_t").value=cgst_amountll;


var taxable_value1=document.getElementById("taxable_value1").value || 0;
var taxable_value2=document.getElementById("taxable_value2").value || 0;
var taxable_value3=document.getElementById("taxable_value3").value || 0;
var taxable_value4=document.getElementById("taxable_value4").value || 0;
var taxable_value5=document.getElementById("taxable_value5").value || 0;
var taxable_value6=document.getElementById("taxable_value6").value || 0;
var taxable_value7=document.getElementById("taxable_value7").value || 0;
var taxable_value8=document.getElementById("taxable_value8").value || 0;
var taxable_value9=document.getElementById("taxable_value9").value || 0;
var taxable_value10=document.getElementById("taxable_value10").value || 0;
var taxable_value11=document.getElementById("taxable_value11").value || 0;
var taxable_value12=document.getElementById("taxable_value12").value || 0;
var taxable_value13=document.getElementById("taxable_value13").value || 0;
var taxable_value14=document.getElementById("taxable_value14").value || 0;
var taxable_value15=document.getElementById("taxable_value15").value || 0;
var taxable_valuell=parseFloat(taxable_value1)+parseFloat(taxable_value2)+parseFloat(taxable_value3)+parseFloat(taxable_value4)+parseFloat(taxable_value5)+parseFloat(taxable_value6)+parseFloat(taxable_value7)+parseFloat(taxable_value8)+parseFloat(taxable_value9)+parseFloat(taxable_value10)+parseFloat(taxable_value11)+parseFloat(taxable_value12)+parseFloat(taxable_value13)+parseFloat(taxable_value14)+parseFloat(taxable_value15);
document.getElementById("taxable_value_t").value=taxable_valuell;



}
function CalculateTax5()
{
var total=document.getElementById('total5').value;
var cgst_percent=document.getElementById('cgst_per_5').value;
var cgst_percent_int=parseFloat(cgst_percent);
var igst=(total/(100+(2*cgst_percent_int)))*(2*cgst_percent_int);
var cgst=parseFloat(igst/2);
document.getElementById("sgst_per_5").value=cgst_percent_int;
document.getElementById("sgst_amount5").value=Math.round(cgst);
document.getElementById("cgst_amount5").value=Math.round(cgst);
document.getElementById("taxable_value5").value=total-Math.round(parseFloat(igst));
document.getElementById("all_total5").value=total;
var total1=document.getElementById("total1").value || 0;
var total2=document.getElementById("total2").value || 0;
var total3=document.getElementById("total3").value || 0;
var total4=document.getElementById("total4").value || 0;
var total5=document.getElementById("total5").value || 0;
var total6=document.getElementById("total6").value || 0;
var total7=document.getElementById("total7").value || 0;
var total8=document.getElementById("total8").value || 0;
var total9=document.getElementById("total9").value || 0;
var total10=document.getElementById("total10").value || 0;
var total11=document.getElementById("total11").value || 0;
var total12=document.getElementById("total12").value || 0;
var total13=document.getElementById("total13").value || 0;
var total14=document.getElementById("total14").value || 0;
var total15=document.getElementById("total15").value || 0;

var totalll=parseFloat(total1)+parseFloat(total2)+parseFloat(total3)+parseFloat(total4)+parseFloat(total5)+parseFloat(total6)+parseFloat(total7)+parseFloat(total8)+parseFloat(total9)+parseFloat(total10)+parseFloat(total11)+parseFloat(total12)+parseFloat(total13)+parseFloat(total14)+parseFloat(total15);
document.getElementById("all_total_t").value=totalll;


var cgst_amount1=document.getElementById("cgst_amount1").value || 0;
var cgst_amount2=document.getElementById("cgst_amount2").value || 0;
var cgst_amount3=document.getElementById("cgst_amount3").value || 0;
var cgst_amount4=document.getElementById("cgst_amount4").value || 0;
var cgst_amount5=document.getElementById("cgst_amount5").value || 0;
var cgst_amount6=document.getElementById("cgst_amount6").value || 0;
var cgst_amount7=document.getElementById("cgst_amount7").value || 0;
var cgst_amount8=document.getElementById("cgst_amount8").value || 0;
var cgst_amount9=document.getElementById("cgst_amount9").value || 0;
var cgst_amount10=document.getElementById("cgst_amount10").value || 0;
var cgst_amount11=document.getElementById("cgst_amount11").value || 0;
var cgst_amount12=document.getElementById("cgst_amount12").value || 0;
var cgst_amount13=document.getElementById("cgst_amount13").value || 0;
var cgst_amount14=document.getElementById("cgst_amount14").value || 0;
var cgst_amount15=document.getElementById("cgst_amount15").value || 0;

var cgst_amountll=parseFloat(cgst_amount1)+parseFloat(cgst_amount2)+parseFloat(cgst_amount3)+parseFloat(cgst_amount4)+parseFloat(cgst_amount5)+parseFloat(cgst_amount6)+parseFloat(cgst_amount7)+parseFloat(cgst_amount8)+parseFloat(cgst_amount9)+parseFloat(cgst_amount10)+parseFloat(cgst_amount11)+parseFloat(cgst_amount12)+parseFloat(cgst_amount13)+parseFloat(cgst_amount14)+parseFloat(cgst_amount15);
document.getElementById("cgst_amount_t").value=cgst_amountll;
document.getElementById("sgst_amount_t").value=cgst_amountll;


var taxable_value1=document.getElementById("taxable_value1").value || 0;
var taxable_value2=document.getElementById("taxable_value2").value || 0;
var taxable_value3=document.getElementById("taxable_value3").value || 0;
var taxable_value4=document.getElementById("taxable_value4").value || 0;
var taxable_value5=document.getElementById("taxable_value5").value || 0;
var taxable_value6=document.getElementById("taxable_value6").value || 0;
var taxable_value7=document.getElementById("taxable_value7").value || 0;
var taxable_value8=document.getElementById("taxable_value8").value || 0;
var taxable_value9=document.getElementById("taxable_value9").value || 0;
var taxable_value10=document.getElementById("taxable_value10").value || 0;
var taxable_value11=document.getElementById("taxable_value11").value || 0;
var taxable_value12=document.getElementById("taxable_value12").value || 0;
var taxable_value13=document.getElementById("taxable_value13").value || 0;
var taxable_value14=document.getElementById("taxable_value14").value || 0;
var taxable_value15=document.getElementById("taxable_value15").value || 0;
var taxable_valuell=parseFloat(taxable_value1)+parseFloat(taxable_value2)+parseFloat(taxable_value3)+parseFloat(taxable_value4)+parseFloat(taxable_value5)+parseFloat(taxable_value6)+parseFloat(taxable_value7)+parseFloat(taxable_value8)+parseFloat(taxable_value9)+parseFloat(taxable_value10)+parseFloat(taxable_value11)+parseFloat(taxable_value12)+parseFloat(taxable_value13)+parseFloat(taxable_value14)+parseFloat(taxable_value15);
document.getElementById("taxable_value_t").value=taxable_valuell;


}
function CalculateTax6()
{
var total=document.getElementById('total6').value;
var cgst_percent=document.getElementById('cgst_per_6').value;
var cgst_percent_int=parseFloat(cgst_percent);
var igst=(total/(100+(2*cgst_percent_int)))*(2*cgst_percent_int);
var cgst=parseFloat(igst/2);
document.getElementById("sgst_per_6").value=cgst_percent_int;
document.getElementById("sgst_amount6").value=Math.round(cgst);
document.getElementById("cgst_amount6").value=Math.round(cgst);
document.getElementById("taxable_value6").value=total-Math.round(parseFloat(igst));
document.getElementById("all_total6").value=total;

var total1=document.getElementById("total1").value || 0;
var total2=document.getElementById("total2").value || 0;
var total3=document.getElementById("total3").value || 0;
var total4=document.getElementById("total4").value || 0;
var total5=document.getElementById("total5").value || 0;
var total6=document.getElementById("total6").value || 0;
var total7=document.getElementById("total7").value || 0;
var total8=document.getElementById("total8").value || 0;
var total9=document.getElementById("total9").value || 0;
var total10=document.getElementById("total10").value || 0;
var total11=document.getElementById("total11").value || 0;
var total12=document.getElementById("total12").value || 0;
var total13=document.getElementById("total13").value || 0;
var total14=document.getElementById("total14").value || 0;
var total15=document.getElementById("total15").value || 0;

var totalll=parseFloat(total1)+parseFloat(total2)+parseFloat(total3)+parseFloat(total4)+parseFloat(total5)+parseFloat(total6)+parseFloat(total7)+parseFloat(total8)+parseFloat(total9)+parseFloat(total10)+parseFloat(total11)+parseFloat(total12)+parseFloat(total13)+parseFloat(total14)+parseFloat(total15);
document.getElementById("all_total_t").value=totalll;


var cgst_amount1=document.getElementById("cgst_amount1").value || 0;
var cgst_amount2=document.getElementById("cgst_amount2").value || 0;
var cgst_amount3=document.getElementById("cgst_amount3").value || 0;
var cgst_amount4=document.getElementById("cgst_amount4").value || 0;
var cgst_amount5=document.getElementById("cgst_amount5").value || 0;
var cgst_amount6=document.getElementById("cgst_amount6").value || 0;
var cgst_amount7=document.getElementById("cgst_amount7").value || 0;
var cgst_amount8=document.getElementById("cgst_amount8").value || 0;
var cgst_amount9=document.getElementById("cgst_amount9").value || 0;
var cgst_amount10=document.getElementById("cgst_amount10").value || 0;
var cgst_amount11=document.getElementById("cgst_amount11").value || 0;
var cgst_amount12=document.getElementById("cgst_amount12").value || 0;
var cgst_amount13=document.getElementById("cgst_amount13").value || 0;
var cgst_amount14=document.getElementById("cgst_amount14").value || 0;
var cgst_amount15=document.getElementById("cgst_amount15").value || 0;

var cgst_amountll=parseFloat(cgst_amount1)+parseFloat(cgst_amount2)+parseFloat(cgst_amount3)+parseFloat(cgst_amount4)+parseFloat(cgst_amount5)+parseFloat(cgst_amount6)+parseFloat(cgst_amount7)+parseFloat(cgst_amount8)+parseFloat(cgst_amount9)+parseFloat(cgst_amount10)+parseFloat(cgst_amount11)+parseFloat(cgst_amount12)+parseFloat(cgst_amount13)+parseFloat(cgst_amount14)+parseFloat(cgst_amount15);
document.getElementById("cgst_amount_t").value=cgst_amountll;
document.getElementById("sgst_amount_t").value=cgst_amountll;


var taxable_value1=document.getElementById("taxable_value1").value || 0;
var taxable_value2=document.getElementById("taxable_value2").value || 0;
var taxable_value3=document.getElementById("taxable_value3").value || 0;
var taxable_value4=document.getElementById("taxable_value4").value || 0;
var taxable_value5=document.getElementById("taxable_value5").value || 0;
var taxable_value6=document.getElementById("taxable_value6").value || 0;
var taxable_value7=document.getElementById("taxable_value7").value || 0;
var taxable_value8=document.getElementById("taxable_value8").value || 0;
var taxable_value9=document.getElementById("taxable_value9").value || 0;
var taxable_value10=document.getElementById("taxable_value10").value || 0;
var taxable_value11=document.getElementById("taxable_value11").value || 0;
var taxable_value12=document.getElementById("taxable_value12").value || 0;
var taxable_value13=document.getElementById("taxable_value13").value || 0;
var taxable_value14=document.getElementById("taxable_value14").value || 0;
var taxable_value15=document.getElementById("taxable_value15").value || 0;
var taxable_valuell=parseFloat(taxable_value1)+parseFloat(taxable_value2)+parseFloat(taxable_value3)+parseFloat(taxable_value4)+parseFloat(taxable_value5)+parseFloat(taxable_value6)+parseFloat(taxable_value7)+parseFloat(taxable_value8)+parseFloat(taxable_value9)+parseFloat(taxable_value10)+parseFloat(taxable_value11)+parseFloat(taxable_value12)+parseFloat(taxable_value13)+parseFloat(taxable_value14)+parseFloat(taxable_value15);
document.getElementById("taxable_value_t").value=taxable_valuell;



}
function CalculateTax7()
{
var total=document.getElementById('total7').value;
var cgst_percent=document.getElementById('cgst_per_7').value;
var cgst_percent_int=parseFloat(cgst_percent);
var igst=(total/(100+(2*cgst_percent_int)))*(2*cgst_percent_int);
var cgst=parseFloat(igst/2);
document.getElementById("sgst_per_7").value=cgst_percent_int;
document.getElementById("sgst_amount7").value=Math.round(cgst);
document.getElementById("cgst_amount7").value=Math.round(cgst);
document.getElementById("taxable_value7").value=total-Math.round(parseFloat(igst));
document.getElementById("all_total7").value=total;

var total1=document.getElementById("total1").value || 0;
var total2=document.getElementById("total2").value || 0;
var total3=document.getElementById("total3").value || 0;
var total4=document.getElementById("total4").value || 0;
var total5=document.getElementById("total5").value || 0;
var total6=document.getElementById("total6").value || 0;
var total7=document.getElementById("total7").value || 0;
var total8=document.getElementById("total8").value || 0;
var total9=document.getElementById("total9").value || 0;
var total10=document.getElementById("total10").value || 0;
var total11=document.getElementById("total11").value || 0;
var total12=document.getElementById("total12").value || 0;
var total13=document.getElementById("total13").value || 0;
var total14=document.getElementById("total14").value || 0;
var total15=document.getElementById("total15").value || 0;

var totalll=parseFloat(total1)+parseFloat(total2)+parseFloat(total3)+parseFloat(total4)+parseFloat(total5)+parseFloat(total6)+parseFloat(total7)+parseFloat(total8)+parseFloat(total9)+parseFloat(total10)+parseFloat(total11)+parseFloat(total12)+parseFloat(total13)+parseFloat(total14)+parseFloat(total15);
document.getElementById("all_total_t").value=totalll;


var cgst_amount1=document.getElementById("cgst_amount1").value || 0;
var cgst_amount2=document.getElementById("cgst_amount2").value || 0;
var cgst_amount3=document.getElementById("cgst_amount3").value || 0;
var cgst_amount4=document.getElementById("cgst_amount4").value || 0;
var cgst_amount5=document.getElementById("cgst_amount5").value || 0;
var cgst_amount6=document.getElementById("cgst_amount6").value || 0;
var cgst_amount7=document.getElementById("cgst_amount7").value || 0;
var cgst_amount8=document.getElementById("cgst_amount8").value || 0;
var cgst_amount9=document.getElementById("cgst_amount9").value || 0;
var cgst_amount10=document.getElementById("cgst_amount10").value || 0;
var cgst_amount11=document.getElementById("cgst_amount11").value || 0;
var cgst_amount12=document.getElementById("cgst_amount12").value || 0;
var cgst_amount13=document.getElementById("cgst_amount13").value || 0;
var cgst_amount14=document.getElementById("cgst_amount14").value || 0;
var cgst_amount15=document.getElementById("cgst_amount15").value || 0;

var cgst_amountll=parseFloat(cgst_amount1)+parseFloat(cgst_amount2)+parseFloat(cgst_amount3)+parseFloat(cgst_amount4)+parseFloat(cgst_amount5)+parseFloat(cgst_amount6)+parseFloat(cgst_amount7)+parseFloat(cgst_amount8)+parseFloat(cgst_amount9)+parseFloat(cgst_amount10)+parseFloat(cgst_amount11)+parseFloat(cgst_amount12)+parseFloat(cgst_amount13)+parseFloat(cgst_amount14)+parseFloat(cgst_amount15);
document.getElementById("cgst_amount_t").value=cgst_amountll;
document.getElementById("sgst_amount_t").value=cgst_amountll;


var taxable_value1=document.getElementById("taxable_value1").value || 0;
var taxable_value2=document.getElementById("taxable_value2").value || 0;
var taxable_value3=document.getElementById("taxable_value3").value || 0;
var taxable_value4=document.getElementById("taxable_value4").value || 0;
var taxable_value5=document.getElementById("taxable_value5").value || 0;
var taxable_value6=document.getElementById("taxable_value6").value || 0;
var taxable_value7=document.getElementById("taxable_value7").value || 0;
var taxable_value8=document.getElementById("taxable_value8").value || 0;
var taxable_value9=document.getElementById("taxable_value9").value || 0;
var taxable_value10=document.getElementById("taxable_value10").value || 0;
var taxable_value11=document.getElementById("taxable_value11").value || 0;
var taxable_value12=document.getElementById("taxable_value12").value || 0;
var taxable_value13=document.getElementById("taxable_value13").value || 0;
var taxable_value14=document.getElementById("taxable_value14").value || 0;
var taxable_value15=document.getElementById("taxable_value15").value || 0;
var taxable_valuell=parseFloat(taxable_value1)+parseFloat(taxable_value2)+parseFloat(taxable_value3)+parseFloat(taxable_value4)+parseFloat(taxable_value5)+parseFloat(taxable_value6)+parseFloat(taxable_value7)+parseFloat(taxable_value8)+parseFloat(taxable_value9)+parseFloat(taxable_value10)+parseFloat(taxable_value11)+parseFloat(taxable_value12)+parseFloat(taxable_value13)+parseFloat(taxable_value14)+parseFloat(taxable_value15);
document.getElementById("taxable_value_t").value=taxable_valuell;

}
function CalculateTax8()
{
var total=document.getElementById('total8').value;
var cgst_percent=document.getElementById('cgst_per_8').value;
var cgst_percent_int=parseFloat(cgst_percent);
var igst=(total/(100+(2*cgst_percent_int)))*(2*cgst_percent_int);
var cgst=parseFloat(igst/2);
document.getElementById("sgst_per_8").value=cgst_percent_int;
document.getElementById("sgst_amount8").value=Math.round(cgst);
document.getElementById("cgst_amount8").value=Math.round(cgst);
document.getElementById("taxable_value8").value=total-Math.round(parseFloat(igst));
document.getElementById("all_total8").value=total;

var total1=document.getElementById("total1").value || 0;
var total2=document.getElementById("total2").value || 0;
var total3=document.getElementById("total3").value || 0;
var total4=document.getElementById("total4").value || 0;
var total5=document.getElementById("total5").value || 0;
var total6=document.getElementById("total6").value || 0;
var total7=document.getElementById("total7").value || 0;
var total8=document.getElementById("total8").value || 0;
var total9=document.getElementById("total9").value || 0;
var total10=document.getElementById("total10").value || 0;
var total11=document.getElementById("total11").value || 0;
var total12=document.getElementById("total12").value || 0;
var total13=document.getElementById("total13").value || 0;
var total14=document.getElementById("total14").value || 0;
var total15=document.getElementById("total15").value || 0;

var totalll=parseFloat(total1)+parseFloat(total2)+parseFloat(total3)+parseFloat(total4)+parseFloat(total5)+parseFloat(total6)+parseFloat(total7)+parseFloat(total8)+parseFloat(total9)+parseFloat(total10)+parseFloat(total11)+parseFloat(total12)+parseFloat(total13)+parseFloat(total14)+parseFloat(total15);
document.getElementById("all_total_t").value=totalll;


var cgst_amount1=document.getElementById("cgst_amount1").value || 0;
var cgst_amount2=document.getElementById("cgst_amount2").value || 0;
var cgst_amount3=document.getElementById("cgst_amount3").value || 0;
var cgst_amount4=document.getElementById("cgst_amount4").value || 0;
var cgst_amount5=document.getElementById("cgst_amount5").value || 0;
var cgst_amount6=document.getElementById("cgst_amount6").value || 0;
var cgst_amount7=document.getElementById("cgst_amount7").value || 0;
var cgst_amount8=document.getElementById("cgst_amount8").value || 0;
var cgst_amount9=document.getElementById("cgst_amount9").value || 0;
var cgst_amount10=document.getElementById("cgst_amount10").value || 0;
var cgst_amount11=document.getElementById("cgst_amount11").value || 0;
var cgst_amount12=document.getElementById("cgst_amount12").value || 0;
var cgst_amount13=document.getElementById("cgst_amount13").value || 0;
var cgst_amount14=document.getElementById("cgst_amount14").value || 0;
var cgst_amount15=document.getElementById("cgst_amount15").value || 0;

var cgst_amountll=parseFloat(cgst_amount1)+parseFloat(cgst_amount2)+parseFloat(cgst_amount3)+parseFloat(cgst_amount4)+parseFloat(cgst_amount5)+parseFloat(cgst_amount6)+parseFloat(cgst_amount7)+parseFloat(cgst_amount8)+parseFloat(cgst_amount9)+parseFloat(cgst_amount10)+parseFloat(cgst_amount11)+parseFloat(cgst_amount12)+parseFloat(cgst_amount13)+parseFloat(cgst_amount14)+parseFloat(cgst_amount15);
document.getElementById("cgst_amount_t").value=cgst_amountll;
document.getElementById("sgst_amount_t").value=cgst_amountll;


var taxable_value1=document.getElementById("taxable_value1").value || 0;
var taxable_value2=document.getElementById("taxable_value2").value || 0;
var taxable_value3=document.getElementById("taxable_value3").value || 0;
var taxable_value4=document.getElementById("taxable_value4").value || 0;
var taxable_value5=document.getElementById("taxable_value5").value || 0;
var taxable_value6=document.getElementById("taxable_value6").value || 0;
var taxable_value7=document.getElementById("taxable_value7").value || 0;
var taxable_value8=document.getElementById("taxable_value8").value || 0;
var taxable_value9=document.getElementById("taxable_value9").value || 0;
var taxable_value10=document.getElementById("taxable_value10").value || 0;
var taxable_value11=document.getElementById("taxable_value11").value || 0;
var taxable_value12=document.getElementById("taxable_value12").value || 0;
var taxable_value13=document.getElementById("taxable_value13").value || 0;
var taxable_value14=document.getElementById("taxable_value14").value || 0;
var taxable_value15=document.getElementById("taxable_value15").value || 0;
var taxable_valuell=parseFloat(taxable_value1)+parseFloat(taxable_value2)+parseFloat(taxable_value3)+parseFloat(taxable_value4)+parseFloat(taxable_value5)+parseFloat(taxable_value6)+parseFloat(taxable_value7)+parseFloat(taxable_value8)+parseFloat(taxable_value9)+parseFloat(taxable_value10)+parseFloat(taxable_value11)+parseFloat(taxable_value12)+parseFloat(taxable_value13)+parseFloat(taxable_value14)+parseFloat(taxable_value15);
document.getElementById("taxable_value_t").value=taxable_valuell;

}
function CalculateTax9()
{
var total=document.getElementById('total9').value;
var cgst_percent=document.getElementById('cgst_per_9').value;
var cgst_percent_int=parseFloat(cgst_percent);
var igst=(total/(100+(2*cgst_percent_int)))*(2*cgst_percent_int);
var cgst=parseFloat(igst/2);
document.getElementById("sgst_per_9").value=cgst_percent_int;
document.getElementById("sgst_amount9").value=Math.round(cgst);
document.getElementById("cgst_amount9").value=Math.round(cgst);
document.getElementById("taxable_value9").value=total-Math.round(parseFloat(igst));
document.getElementById("all_total9").value=total;

var total1=document.getElementById("total1").value || 0;
var total2=document.getElementById("total2").value || 0;
var total3=document.getElementById("total3").value || 0;
var total4=document.getElementById("total4").value || 0;
var total5=document.getElementById("total5").value || 0;
var total6=document.getElementById("total6").value || 0;
var total7=document.getElementById("total7").value || 0;
var total8=document.getElementById("total8").value || 0;
var total9=document.getElementById("total9").value || 0;
var total10=document.getElementById("total10").value || 0;
var total11=document.getElementById("total11").value || 0;
var total12=document.getElementById("total12").value || 0;
var total13=document.getElementById("total13").value || 0;
var total14=document.getElementById("total14").value || 0;
var total15=document.getElementById("total15").value || 0;

var totalll=parseFloat(total1)+parseFloat(total2)+parseFloat(total3)+parseFloat(total4)+parseFloat(total5)+parseFloat(total6)+parseFloat(total7)+parseFloat(total8)+parseFloat(total9)+parseFloat(total10)+parseFloat(total11)+parseFloat(total12)+parseFloat(total13)+parseFloat(total14)+parseFloat(total15);
document.getElementById("all_total_t").value=totalll;


var cgst_amount1=document.getElementById("cgst_amount1").value || 0;
var cgst_amount2=document.getElementById("cgst_amount2").value || 0;
var cgst_amount3=document.getElementById("cgst_amount3").value || 0;
var cgst_amount4=document.getElementById("cgst_amount4").value || 0;
var cgst_amount5=document.getElementById("cgst_amount5").value || 0;
var cgst_amount6=document.getElementById("cgst_amount6").value || 0;
var cgst_amount7=document.getElementById("cgst_amount7").value || 0;
var cgst_amount8=document.getElementById("cgst_amount8").value || 0;
var cgst_amount9=document.getElementById("cgst_amount9").value || 0;
var cgst_amount10=document.getElementById("cgst_amount10").value || 0;
var cgst_amount11=document.getElementById("cgst_amount11").value || 0;
var cgst_amount12=document.getElementById("cgst_amount12").value || 0;
var cgst_amount13=document.getElementById("cgst_amount13").value || 0;
var cgst_amount14=document.getElementById("cgst_amount14").value || 0;
var cgst_amount15=document.getElementById("cgst_amount15").value || 0;

var cgst_amountll=parseFloat(cgst_amount1)+parseFloat(cgst_amount2)+parseFloat(cgst_amount3)+parseFloat(cgst_amount4)+parseFloat(cgst_amount5)+parseFloat(cgst_amount6)+parseFloat(cgst_amount7)+parseFloat(cgst_amount8)+parseFloat(cgst_amount9)+parseFloat(cgst_amount10)+parseFloat(cgst_amount11)+parseFloat(cgst_amount12)+parseFloat(cgst_amount13)+parseFloat(cgst_amount14)+parseFloat(cgst_amount15);
document.getElementById("cgst_amount_t").value=cgst_amountll;
document.getElementById("sgst_amount_t").value=cgst_amountll;


var taxable_value1=document.getElementById("taxable_value1").value || 0;
var taxable_value2=document.getElementById("taxable_value2").value || 0;
var taxable_value3=document.getElementById("taxable_value3").value || 0;
var taxable_value4=document.getElementById("taxable_value4").value || 0;
var taxable_value5=document.getElementById("taxable_value5").value || 0;
var taxable_value6=document.getElementById("taxable_value6").value || 0;
var taxable_value7=document.getElementById("taxable_value7").value || 0;
var taxable_value8=document.getElementById("taxable_value8").value || 0;
var taxable_value9=document.getElementById("taxable_value9").value || 0;
var taxable_value10=document.getElementById("taxable_value10").value || 0;
var taxable_value11=document.getElementById("taxable_value11").value || 0;
var taxable_value12=document.getElementById("taxable_value12").value || 0;
var taxable_value13=document.getElementById("taxable_value13").value || 0;
var taxable_value14=document.getElementById("taxable_value14").value || 0;
var taxable_value15=document.getElementById("taxable_value15").value || 0;
var taxable_valuell=parseFloat(taxable_value1)+parseFloat(taxable_value2)+parseFloat(taxable_value3)+parseFloat(taxable_value4)+parseFloat(taxable_value5)+parseFloat(taxable_value6)+parseFloat(taxable_value7)+parseFloat(taxable_value8)+parseFloat(taxable_value9)+parseFloat(taxable_value10)+parseFloat(taxable_value11)+parseFloat(taxable_value12)+parseFloat(taxable_value13)+parseFloat(taxable_value14)+parseFloat(taxable_value15);
document.getElementById("taxable_value_t").value=taxable_valuell;


}
function CalculateTax10()
{
var total=document.getElementById('total10').value;
var cgst_percent=document.getElementById('cgst_per_10').value;
var cgst_percent_int=parseFloat(cgst_percent);
var igst=(total/(100+(2*cgst_percent_int)))*(2*cgst_percent_int);
var cgst=parseFloat(igst/2);
document.getElementById("sgst_per_10").value=cgst_percent_int;
document.getElementById("sgst_amount10").value=Math.round(cgst);
document.getElementById("cgst_amount10").value=Math.round(cgst);
document.getElementById("taxable_value10").value=total-Math.round(parseFloat(igst));
document.getElementById("all_total10").value=total;

var total1=document.getElementById("total1").value || 0;
var total2=document.getElementById("total2").value || 0;
var total3=document.getElementById("total3").value || 0;
var total4=document.getElementById("total4").value || 0;
var total5=document.getElementById("total5").value || 0;
var total6=document.getElementById("total6").value || 0;
var total7=document.getElementById("total7").value || 0;
var total8=document.getElementById("total8").value || 0;
var total9=document.getElementById("total9").value || 0;
var total10=document.getElementById("total10").value || 0;
var total11=document.getElementById("total11").value || 0;
var total12=document.getElementById("total12").value || 0;
var total13=document.getElementById("total13").value || 0;
var total14=document.getElementById("total14").value || 0;
var total15=document.getElementById("total15").value || 0;

var totalll=parseFloat(total1)+parseFloat(total2)+parseFloat(total3)+parseFloat(total4)+parseFloat(total5)+parseFloat(total6)+parseFloat(total7)+parseFloat(total8)+parseFloat(total9)+parseFloat(total10)+parseFloat(total11)+parseFloat(total12)+parseFloat(total13)+parseFloat(total14)+parseFloat(total15);
document.getElementById("all_total_t").value=totalll;


var cgst_amount1=document.getElementById("cgst_amount1").value || 0;
var cgst_amount2=document.getElementById("cgst_amount2").value || 0;
var cgst_amount3=document.getElementById("cgst_amount3").value || 0;
var cgst_amount4=document.getElementById("cgst_amount4").value || 0;
var cgst_amount5=document.getElementById("cgst_amount5").value || 0;
var cgst_amount6=document.getElementById("cgst_amount6").value || 0;
var cgst_amount7=document.getElementById("cgst_amount7").value || 0;
var cgst_amount8=document.getElementById("cgst_amount8").value || 0;
var cgst_amount9=document.getElementById("cgst_amount9").value || 0;
var cgst_amount10=document.getElementById("cgst_amount10").value || 0;
var cgst_amount11=document.getElementById("cgst_amount11").value || 0;
var cgst_amount12=document.getElementById("cgst_amount12").value || 0;
var cgst_amount13=document.getElementById("cgst_amount13").value || 0;
var cgst_amount14=document.getElementById("cgst_amount14").value || 0;
var cgst_amount15=document.getElementById("cgst_amount15").value || 0;

var cgst_amountll=parseFloat(cgst_amount1)+parseFloat(cgst_amount2)+parseFloat(cgst_amount3)+parseFloat(cgst_amount4)+parseFloat(cgst_amount5)+parseFloat(cgst_amount6)+parseFloat(cgst_amount7)+parseFloat(cgst_amount8)+parseFloat(cgst_amount9)+parseFloat(cgst_amount10)+parseFloat(cgst_amount11)+parseFloat(cgst_amount12)+parseFloat(cgst_amount13)+parseFloat(cgst_amount14)+parseFloat(cgst_amount15);
document.getElementById("cgst_amount_t").value=cgst_amountll;
document.getElementById("sgst_amount_t").value=cgst_amountll;


var taxable_value1=document.getElementById("taxable_value1").value || 0;
var taxable_value2=document.getElementById("taxable_value2").value || 0;
var taxable_value3=document.getElementById("taxable_value3").value || 0;
var taxable_value4=document.getElementById("taxable_value4").value || 0;
var taxable_value5=document.getElementById("taxable_value5").value || 0;
var taxable_value6=document.getElementById("taxable_value6").value || 0;
var taxable_value7=document.getElementById("taxable_value7").value || 0;
var taxable_value8=document.getElementById("taxable_value8").value || 0;
var taxable_value9=document.getElementById("taxable_value9").value || 0;
var taxable_value10=document.getElementById("taxable_value10").value || 0;
var taxable_value11=document.getElementById("taxable_value11").value || 0;
var taxable_value12=document.getElementById("taxable_value12").value || 0;
var taxable_value13=document.getElementById("taxable_value13").value || 0;
var taxable_value14=document.getElementById("taxable_value14").value || 0;
var taxable_value15=document.getElementById("taxable_value15").value || 0;
var taxable_valuell=parseFloat(taxable_value1)+parseFloat(taxable_value2)+parseFloat(taxable_value3)+parseFloat(taxable_value4)+parseFloat(taxable_value5)+parseFloat(taxable_value6)+parseFloat(taxable_value7)+parseFloat(taxable_value8)+parseFloat(taxable_value9)+parseFloat(taxable_value10)+parseFloat(taxable_value11)+parseFloat(taxable_value12)+parseFloat(taxable_value13)+parseFloat(taxable_value14)+parseFloat(taxable_value15);
document.getElementById("taxable_value_t").value=taxable_valuell;


}

function CalculateTax11()
{
var total=document.getElementById('total11').value;
var cgst_percent=document.getElementById('cgst_per_11').value;
var cgst_percent_int=parseFloat(cgst_percent);
var igst=(total/(100+(2*cgst_percent_int)))*(2*cgst_percent_int);
var cgst=parseFloat(igst/2);
document.getElementById("sgst_per_11").value=cgst_percent_int;
document.getElementById("sgst_amount11").value=Math.round(cgst);
document.getElementById("cgst_amount11").value=Math.round(cgst);
document.getElementById("taxable_value11").value=total-Math.round(parseFloat(igst));
document.getElementById("all_total11").value=total;

var total1=document.getElementById("total1").value || 0;
var total2=document.getElementById("total2").value || 0;
var total3=document.getElementById("total3").value || 0;
var total4=document.getElementById("total4").value || 0;
var total5=document.getElementById("total5").value || 0;
var total6=document.getElementById("total6").value || 0;
var total7=document.getElementById("total7").value || 0;
var total8=document.getElementById("total8").value || 0;
var total9=document.getElementById("total9").value || 0;
var total10=document.getElementById("total10").value || 0;
var total11=document.getElementById("total11").value || 0;
var total12=document.getElementById("total12").value || 0;
var total13=document.getElementById("total13").value || 0;
var total14=document.getElementById("total14").value || 0;
var total15=document.getElementById("total15").value || 0;

var totalll=parseFloat(total1)+parseFloat(total2)+parseFloat(total3)+parseFloat(total4)+parseFloat(total5)+parseFloat(total6)+parseFloat(total7)+parseFloat(total8)+parseFloat(total9)+parseFloat(total10)+parseFloat(total11)+parseFloat(total12)+parseFloat(total13)+parseFloat(total14)+parseFloat(total15);
document.getElementById("all_total_t").value=totalll;


var cgst_amount1=document.getElementById("cgst_amount1").value || 0;
var cgst_amount2=document.getElementById("cgst_amount2").value || 0;
var cgst_amount3=document.getElementById("cgst_amount3").value || 0;
var cgst_amount4=document.getElementById("cgst_amount4").value || 0;
var cgst_amount5=document.getElementById("cgst_amount5").value || 0;
var cgst_amount6=document.getElementById("cgst_amount6").value || 0;
var cgst_amount7=document.getElementById("cgst_amount7").value || 0;
var cgst_amount8=document.getElementById("cgst_amount8").value || 0;
var cgst_amount9=document.getElementById("cgst_amount9").value || 0;
var cgst_amount10=document.getElementById("cgst_amount10").value || 0;
var cgst_amount11=document.getElementById("cgst_amount11").value || 0;
var cgst_amount12=document.getElementById("cgst_amount12").value || 0;
var cgst_amount13=document.getElementById("cgst_amount13").value || 0;
var cgst_amount14=document.getElementById("cgst_amount14").value || 0;
var cgst_amount15=document.getElementById("cgst_amount15").value || 0;

var cgst_amountll=parseFloat(cgst_amount1)+parseFloat(cgst_amount2)+parseFloat(cgst_amount3)+parseFloat(cgst_amount4)+parseFloat(cgst_amount5)+parseFloat(cgst_amount6)+parseFloat(cgst_amount7)+parseFloat(cgst_amount8)+parseFloat(cgst_amount9)+parseFloat(cgst_amount10)+parseFloat(cgst_amount11)+parseFloat(cgst_amount12)+parseFloat(cgst_amount13)+parseFloat(cgst_amount14)+parseFloat(cgst_amount15);
document.getElementById("cgst_amount_t").value=cgst_amountll;
document.getElementById("sgst_amount_t").value=cgst_amountll;


var taxable_value1=document.getElementById("taxable_value1").value || 0;
var taxable_value2=document.getElementById("taxable_value2").value || 0;
var taxable_value3=document.getElementById("taxable_value3").value || 0;
var taxable_value4=document.getElementById("taxable_value4").value || 0;
var taxable_value5=document.getElementById("taxable_value5").value || 0;
var taxable_value6=document.getElementById("taxable_value6").value || 0;
var taxable_value7=document.getElementById("taxable_value7").value || 0;
var taxable_value8=document.getElementById("taxable_value8").value || 0;
var taxable_value9=document.getElementById("taxable_value9").value || 0;
var taxable_value10=document.getElementById("taxable_value10").value || 0;
var taxable_value11=document.getElementById("taxable_value11").value || 0;
var taxable_value12=document.getElementById("taxable_value12").value || 0;
var taxable_value13=document.getElementById("taxable_value13").value || 0;
var taxable_value14=document.getElementById("taxable_value14").value || 0;
var taxable_value15=document.getElementById("taxable_value15").value || 0;
var taxable_valuell=parseFloat(taxable_value1)+parseFloat(taxable_value2)+parseFloat(taxable_value3)+parseFloat(taxable_value4)+parseFloat(taxable_value5)+parseFloat(taxable_value6)+parseFloat(taxable_value7)+parseFloat(taxable_value8)+parseFloat(taxable_value9)+parseFloat(taxable_value10)+parseFloat(taxable_value11)+parseFloat(taxable_value12)+parseFloat(taxable_value13)+parseFloat(taxable_value14)+parseFloat(taxable_value15);
document.getElementById("taxable_value_t").value=taxable_valuell;


}

function CalculateTax12()
{
var total=document.getElementById('total12').value;
var cgst_percent=document.getElementById('cgst_per_12').value;
var cgst_percent_int=parseFloat(cgst_percent);
var igst=(total/(100+(2*cgst_percent_int)))*(2*cgst_percent_int);
var cgst=parseFloat(igst/2);
document.getElementById("sgst_per_12").value=cgst_percent_int;
document.getElementById("sgst_amount12").value=Math.round(cgst);
document.getElementById("cgst_amount12").value=Math.round(cgst);
document.getElementById("taxable_value12").value=total-Math.round(parseFloat(igst));
document.getElementById("all_total12").value=total;

var total1=document.getElementById("total1").value || 0;
var total2=document.getElementById("total2").value || 0;
var total3=document.getElementById("total3").value || 0;
var total4=document.getElementById("total4").value || 0;
var total5=document.getElementById("total5").value || 0;
var total6=document.getElementById("total6").value || 0;
var total7=document.getElementById("total7").value || 0;
var total8=document.getElementById("total8").value || 0;
var total9=document.getElementById("total9").value || 0;
var total10=document.getElementById("total10").value || 0;
var total11=document.getElementById("total11").value || 0;
var total12=document.getElementById("total12").value || 0;
var total13=document.getElementById("total13").value || 0;
var total14=document.getElementById("total14").value || 0;
var total15=document.getElementById("total15").value || 0;

var totalll=parseFloat(total1)+parseFloat(total2)+parseFloat(total3)+parseFloat(total4)+parseFloat(total5)+parseFloat(total6)+parseFloat(total7)+parseFloat(total8)+parseFloat(total9)+parseFloat(total10)+parseFloat(total11)+parseFloat(total12)+parseFloat(total13)+parseFloat(total14)+parseFloat(total15);
document.getElementById("all_total_t").value=totalll;


var cgst_amount1=document.getElementById("cgst_amount1").value || 0;
var cgst_amount2=document.getElementById("cgst_amount2").value || 0;
var cgst_amount3=document.getElementById("cgst_amount3").value || 0;
var cgst_amount4=document.getElementById("cgst_amount4").value || 0;
var cgst_amount5=document.getElementById("cgst_amount5").value || 0;
var cgst_amount6=document.getElementById("cgst_amount6").value || 0;
var cgst_amount7=document.getElementById("cgst_amount7").value || 0;
var cgst_amount8=document.getElementById("cgst_amount8").value || 0;
var cgst_amount9=document.getElementById("cgst_amount9").value || 0;
var cgst_amount10=document.getElementById("cgst_amount10").value || 0;
var cgst_amount11=document.getElementById("cgst_amount11").value || 0;
var cgst_amount12=document.getElementById("cgst_amount12").value || 0;
var cgst_amount13=document.getElementById("cgst_amount13").value || 0;
var cgst_amount14=document.getElementById("cgst_amount14").value || 0;
var cgst_amount15=document.getElementById("cgst_amount15").value || 0;

var cgst_amountll=parseFloat(cgst_amount1)+parseFloat(cgst_amount2)+parseFloat(cgst_amount3)+parseFloat(cgst_amount4)+parseFloat(cgst_amount5)+parseFloat(cgst_amount6)+parseFloat(cgst_amount7)+parseFloat(cgst_amount8)+parseFloat(cgst_amount9)+parseFloat(cgst_amount10)+parseFloat(cgst_amount11)+parseFloat(cgst_amount12)+parseFloat(cgst_amount13)+parseFloat(cgst_amount14)+parseFloat(cgst_amount15);
document.getElementById("cgst_amount_t").value=cgst_amountll;
document.getElementById("sgst_amount_t").value=cgst_amountll;


var taxable_value1=document.getElementById("taxable_value1").value || 0;
var taxable_value2=document.getElementById("taxable_value2").value || 0;
var taxable_value3=document.getElementById("taxable_value3").value || 0;
var taxable_value4=document.getElementById("taxable_value4").value || 0;
var taxable_value5=document.getElementById("taxable_value5").value || 0;
var taxable_value6=document.getElementById("taxable_value6").value || 0;
var taxable_value7=document.getElementById("taxable_value7").value || 0;
var taxable_value8=document.getElementById("taxable_value8").value || 0;
var taxable_value9=document.getElementById("taxable_value9").value || 0;
var taxable_value10=document.getElementById("taxable_value10").value || 0;
var taxable_value11=document.getElementById("taxable_value11").value || 0;
var taxable_value12=document.getElementById("taxable_value12").value || 0;
var taxable_value13=document.getElementById("taxable_value13").value || 0;
var taxable_value14=document.getElementById("taxable_value14").value || 0;
var taxable_value15=document.getElementById("taxable_value15").value || 0;
var taxable_valuell=parseFloat(taxable_value1)+parseFloat(taxable_value2)+parseFloat(taxable_value3)+parseFloat(taxable_value4)+parseFloat(taxable_value5)+parseFloat(taxable_value6)+parseFloat(taxable_value7)+parseFloat(taxable_value8)+parseFloat(taxable_value9)+parseFloat(taxable_value10)+parseFloat(taxable_value11)+parseFloat(taxable_value12)+parseFloat(taxable_value13)+parseFloat(taxable_value14)+parseFloat(taxable_value15);
document.getElementById("taxable_value_t").value=taxable_valuell;


}


function CalculateTax13()
{
var total=document.getElementById('total13').value;
var cgst_percent=document.getElementById('cgst_per_13').value;
var cgst_percent_int=parseFloat(cgst_percent);
var igst=(total/(100+(2*cgst_percent_int)))*(2*cgst_percent_int);
var cgst=parseFloat(igst/2);
document.getElementById("sgst_per_13").value=cgst_percent_int;
document.getElementById("sgst_amount13").value=Math.round(cgst);
document.getElementById("cgst_amount13").value=Math.round(cgst);
document.getElementById("taxable_value13").value=total-Math.round(parseFloat(igst));
document.getElementById("all_total13").value=total;

var total1=document.getElementById("total1").value || 0;
var total2=document.getElementById("total2").value || 0;
var total3=document.getElementById("total3").value || 0;
var total4=document.getElementById("total4").value || 0;
var total5=document.getElementById("total5").value || 0;
var total6=document.getElementById("total6").value || 0;
var total7=document.getElementById("total7").value || 0;
var total8=document.getElementById("total8").value || 0;
var total9=document.getElementById("total9").value || 0;
var total10=document.getElementById("total10").value || 0;
var total11=document.getElementById("total11").value || 0;
var total12=document.getElementById("total12").value || 0;
var total13=document.getElementById("total13").value || 0;
var total14=document.getElementById("total14").value || 0;
var total15=document.getElementById("total15").value || 0;

var totalll=parseFloat(total1)+parseFloat(total2)+parseFloat(total3)+parseFloat(total4)+parseFloat(total5)+parseFloat(total6)+parseFloat(total7)+parseFloat(total8)+parseFloat(total9)+parseFloat(total10)+parseFloat(total11)+parseFloat(total12)+parseFloat(total13)+parseFloat(total14)+parseFloat(total15);
document.getElementById("all_total_t").value=totalll;


var cgst_amount1=document.getElementById("cgst_amount1").value || 0;
var cgst_amount2=document.getElementById("cgst_amount2").value || 0;
var cgst_amount3=document.getElementById("cgst_amount3").value || 0;
var cgst_amount4=document.getElementById("cgst_amount4").value || 0;
var cgst_amount5=document.getElementById("cgst_amount5").value || 0;
var cgst_amount6=document.getElementById("cgst_amount6").value || 0;
var cgst_amount7=document.getElementById("cgst_amount7").value || 0;
var cgst_amount8=document.getElementById("cgst_amount8").value || 0;
var cgst_amount9=document.getElementById("cgst_amount9").value || 0;
var cgst_amount10=document.getElementById("cgst_amount10").value || 0;
var cgst_amount11=document.getElementById("cgst_amount11").value || 0;
var cgst_amount12=document.getElementById("cgst_amount12").value || 0;
var cgst_amount13=document.getElementById("cgst_amount13").value || 0;
var cgst_amount14=document.getElementById("cgst_amount14").value || 0;
var cgst_amount15=document.getElementById("cgst_amount15").value || 0;

var cgst_amountll=parseFloat(cgst_amount1)+parseFloat(cgst_amount2)+parseFloat(cgst_amount3)+parseFloat(cgst_amount4)+parseFloat(cgst_amount5)+parseFloat(cgst_amount6)+parseFloat(cgst_amount7)+parseFloat(cgst_amount8)+parseFloat(cgst_amount9)+parseFloat(cgst_amount10)+parseFloat(cgst_amount11)+parseFloat(cgst_amount12)+parseFloat(cgst_amount13)+parseFloat(cgst_amount14)+parseFloat(cgst_amount15);
document.getElementById("cgst_amount_t").value=cgst_amountll;
document.getElementById("sgst_amount_t").value=cgst_amountll;


var taxable_value1=document.getElementById("taxable_value1").value || 0;
var taxable_value2=document.getElementById("taxable_value2").value || 0;
var taxable_value3=document.getElementById("taxable_value3").value || 0;
var taxable_value4=document.getElementById("taxable_value4").value || 0;
var taxable_value5=document.getElementById("taxable_value5").value || 0;
var taxable_value6=document.getElementById("taxable_value6").value || 0;
var taxable_value7=document.getElementById("taxable_value7").value || 0;
var taxable_value8=document.getElementById("taxable_value8").value || 0;
var taxable_value9=document.getElementById("taxable_value9").value || 0;
var taxable_value10=document.getElementById("taxable_value10").value || 0;
var taxable_value11=document.getElementById("taxable_value11").value || 0;
var taxable_value12=document.getElementById("taxable_value12").value || 0;
var taxable_value13=document.getElementById("taxable_value13").value || 0;
var taxable_value14=document.getElementById("taxable_value14").value || 0;
var taxable_value15=document.getElementById("taxable_value15").value || 0;
var taxable_valuell=parseFloat(taxable_value1)+parseFloat(taxable_value2)+parseFloat(taxable_value3)+parseFloat(taxable_value4)+parseFloat(taxable_value5)+parseFloat(taxable_value6)+parseFloat(taxable_value7)+parseFloat(taxable_value8)+parseFloat(taxable_value9)+parseFloat(taxable_value10)+parseFloat(taxable_value11)+parseFloat(taxable_value12)+parseFloat(taxable_value13)+parseFloat(taxable_value14)+parseFloat(taxable_value15);
document.getElementById("taxable_value_t").value=taxable_valuell;


}


function CalculateTax14()
{
var total=document.getElementById('total14').value;
var cgst_percent=document.getElementById('cgst_per_14').value;
var cgst_percent_int=parseFloat(cgst_percent);
var igst=(total/(100+(2*cgst_percent_int)))*(2*cgst_percent_int);
var cgst=parseFloat(igst/2);
document.getElementById("sgst_per_14").value=cgst_percent_int;
document.getElementById("sgst_amount14").value=Math.round(cgst);
document.getElementById("cgst_amount14").value=Math.round(cgst);
document.getElementById("taxable_value14").value=total-Math.round(parseFloat(igst));
document.getElementById("all_total14").value=total;

var total1=document.getElementById("total1").value || 0;
var total2=document.getElementById("total2").value || 0;
var total3=document.getElementById("total3").value || 0;
var total4=document.getElementById("total4").value || 0;
var total5=document.getElementById("total5").value || 0;
var total6=document.getElementById("total6").value || 0;
var total7=document.getElementById("total7").value || 0;
var total8=document.getElementById("total8").value || 0;
var total9=document.getElementById("total9").value || 0;
var total10=document.getElementById("total10").value || 0;
var total11=document.getElementById("total11").value || 0;
var total12=document.getElementById("total12").value || 0;
var total13=document.getElementById("total13").value || 0;
var total14=document.getElementById("total14").value || 0;
var total15=document.getElementById("total15").value || 0;

var totalll=parseFloat(total1)+parseFloat(total2)+parseFloat(total3)+parseFloat(total4)+parseFloat(total5)+parseFloat(total6)+parseFloat(total7)+parseFloat(total8)+parseFloat(total9)+parseFloat(total10)+parseFloat(total11)+parseFloat(total12)+parseFloat(total13)+parseFloat(total14)+parseFloat(total15);
document.getElementById("all_total_t").value=totalll;


var cgst_amount1=document.getElementById("cgst_amount1").value || 0;
var cgst_amount2=document.getElementById("cgst_amount2").value || 0;
var cgst_amount3=document.getElementById("cgst_amount3").value || 0;
var cgst_amount4=document.getElementById("cgst_amount4").value || 0;
var cgst_amount5=document.getElementById("cgst_amount5").value || 0;
var cgst_amount6=document.getElementById("cgst_amount6").value || 0;
var cgst_amount7=document.getElementById("cgst_amount7").value || 0;
var cgst_amount8=document.getElementById("cgst_amount8").value || 0;
var cgst_amount9=document.getElementById("cgst_amount9").value || 0;
var cgst_amount10=document.getElementById("cgst_amount10").value || 0;
var cgst_amount11=document.getElementById("cgst_amount11").value || 0;
var cgst_amount12=document.getElementById("cgst_amount12").value || 0;
var cgst_amount13=document.getElementById("cgst_amount13").value || 0;
var cgst_amount14=document.getElementById("cgst_amount14").value || 0;
var cgst_amount15=document.getElementById("cgst_amount15").value || 0;

var cgst_amountll=parseFloat(cgst_amount1)+parseFloat(cgst_amount2)+parseFloat(cgst_amount3)+parseFloat(cgst_amount4)+parseFloat(cgst_amount5)+parseFloat(cgst_amount6)+parseFloat(cgst_amount7)+parseFloat(cgst_amount8)+parseFloat(cgst_amount9)+parseFloat(cgst_amount10)+parseFloat(cgst_amount11)+parseFloat(cgst_amount12)+parseFloat(cgst_amount13)+parseFloat(cgst_amount14)+parseFloat(cgst_amount15);
document.getElementById("cgst_amount_t").value=cgst_amountll;
document.getElementById("sgst_amount_t").value=cgst_amountll;


var taxable_value1=document.getElementById("taxable_value1").value || 0;
var taxable_value2=document.getElementById("taxable_value2").value || 0;
var taxable_value3=document.getElementById("taxable_value3").value || 0;
var taxable_value4=document.getElementById("taxable_value4").value || 0;
var taxable_value5=document.getElementById("taxable_value5").value || 0;
var taxable_value6=document.getElementById("taxable_value6").value || 0;
var taxable_value7=document.getElementById("taxable_value7").value || 0;
var taxable_value8=document.getElementById("taxable_value8").value || 0;
var taxable_value9=document.getElementById("taxable_value9").value || 0;
var taxable_value10=document.getElementById("taxable_value10").value || 0;
var taxable_value11=document.getElementById("taxable_value11").value || 0;
var taxable_value12=document.getElementById("taxable_value12").value || 0;
var taxable_value13=document.getElementById("taxable_value13").value || 0;
var taxable_value14=document.getElementById("taxable_value14").value || 0;
var taxable_value15=document.getElementById("taxable_value15").value || 0;
var taxable_valuell=parseFloat(taxable_value1)+parseFloat(taxable_value2)+parseFloat(taxable_value3)+parseFloat(taxable_value4)+parseFloat(taxable_value5)+parseFloat(taxable_value6)+parseFloat(taxable_value7)+parseFloat(taxable_value8)+parseFloat(taxable_value9)+parseFloat(taxable_value10)+parseFloat(taxable_value11)+parseFloat(taxable_value12)+parseFloat(taxable_value13)+parseFloat(taxable_value14)+parseFloat(taxable_value15);
document.getElementById("taxable_value_t").value=taxable_valuell;


}


function CalculateTax15()
{
var total=document.getElementById('total15').value;
var cgst_percent=document.getElementById('cgst_per_15').value;
var cgst_percent_int=parseFloat(cgst_percent);
var igst=(total/(100+(2*cgst_percent_int)))*(2*cgst_percent_int);
var cgst=parseFloat(igst/2);
document.getElementById("sgst_per_15").value=cgst_percent_int;
document.getElementById("sgst_amount15").value=Math.round(cgst);
document.getElementById("cgst_amount15").value=Math.round(cgst);
document.getElementById("taxable_value15").value=total-Math.round(parseFloat(igst));
document.getElementById("all_total15").value=total;

var total1=document.getElementById("total1").value || 0;
var total2=document.getElementById("total2").value || 0;
var total3=document.getElementById("total3").value || 0;
var total4=document.getElementById("total4").value || 0;
var total5=document.getElementById("total5").value || 0;
var total6=document.getElementById("total6").value || 0;
var total7=document.getElementById("total7").value || 0;
var total8=document.getElementById("total8").value || 0;
var total9=document.getElementById("total9").value || 0;
var total10=document.getElementById("total10").value || 0;
var total11=document.getElementById("total11").value || 0;
var total12=document.getElementById("total12").value || 0;
var total13=document.getElementById("total13").value || 0;
var total14=document.getElementById("total14").value || 0;
var total15=document.getElementById("total15").value || 0;

var totalll=parseFloat(total1)+parseFloat(total2)+parseFloat(total3)+parseFloat(total4)+parseFloat(total5)+parseFloat(total6)+parseFloat(total7)+parseFloat(total8)+parseFloat(total9)+parseFloat(total10)+parseFloat(total11)+parseFloat(total12)+parseFloat(total13)+parseFloat(total14)+parseFloat(total15);
document.getElementById("all_total_t").value=totalll;


var cgst_amount1=document.getElementById("cgst_amount1").value || 0;
var cgst_amount2=document.getElementById("cgst_amount2").value || 0;
var cgst_amount3=document.getElementById("cgst_amount3").value || 0;
var cgst_amount4=document.getElementById("cgst_amount4").value || 0;
var cgst_amount5=document.getElementById("cgst_amount5").value || 0;
var cgst_amount6=document.getElementById("cgst_amount6").value || 0;
var cgst_amount7=document.getElementById("cgst_amount7").value || 0;
var cgst_amount8=document.getElementById("cgst_amount8").value || 0;
var cgst_amount9=document.getElementById("cgst_amount9").value || 0;
var cgst_amount10=document.getElementById("cgst_amount10").value || 0;
var cgst_amount11=document.getElementById("cgst_amount11").value || 0;
var cgst_amount12=document.getElementById("cgst_amount12").value || 0;
var cgst_amount13=document.getElementById("cgst_amount13").value || 0;
var cgst_amount14=document.getElementById("cgst_amount14").value || 0;
var cgst_amount15=document.getElementById("cgst_amount15").value || 0;

var cgst_amountll=parseFloat(cgst_amount1)+parseFloat(cgst_amount2)+parseFloat(cgst_amount3)+parseFloat(cgst_amount4)+parseFloat(cgst_amount5)+parseFloat(cgst_amount6)+parseFloat(cgst_amount7)+parseFloat(cgst_amount8)+parseFloat(cgst_amount9)+parseFloat(cgst_amount10)+parseFloat(cgst_amount11)+parseFloat(cgst_amount12)+parseFloat(cgst_amount13)+parseFloat(cgst_amount14)+parseFloat(cgst_amount15);
document.getElementById("cgst_amount_t").value=cgst_amountll;
document.getElementById("sgst_amount_t").value=cgst_amountll;


var taxable_value1=document.getElementById("taxable_value1").value || 0;
var taxable_value2=document.getElementById("taxable_value2").value || 0;
var taxable_value3=document.getElementById("taxable_value3").value || 0;
var taxable_value4=document.getElementById("taxable_value4").value || 0;
var taxable_value5=document.getElementById("taxable_value5").value || 0;
var taxable_value6=document.getElementById("taxable_value6").value || 0;
var taxable_value7=document.getElementById("taxable_value7").value || 0;
var taxable_value8=document.getElementById("taxable_value8").value || 0;
var taxable_value9=document.getElementById("taxable_value9").value || 0;
var taxable_value10=document.getElementById("taxable_value10").value || 0;
var taxable_value11=document.getElementById("taxable_value11").value || 0;
var taxable_value12=document.getElementById("taxable_value12").value || 0;
var taxable_value13=document.getElementById("taxable_value13").value || 0;
var taxable_value14=document.getElementById("taxable_value14").value || 0;
var taxable_value15=document.getElementById("taxable_value15").value || 0;
var taxable_valuell=parseFloat(taxable_value1)+parseFloat(taxable_value2)+parseFloat(taxable_value3)+parseFloat(taxable_value4)+parseFloat(taxable_value5)+parseFloat(taxable_value6)+parseFloat(taxable_value7)+parseFloat(taxable_value8)+parseFloat(taxable_value9)+parseFloat(taxable_value10)+parseFloat(taxable_value11)+parseFloat(taxable_value12)+parseFloat(taxable_value13)+parseFloat(taxable_value14)+parseFloat(taxable_value15);
document.getElementById("taxable_value_t").value=taxable_valuell;


}


function CalculateTax16()
{
var total=document.getElementById('total16').value;
var cgst_percent=document.getElementById('cgst_per_16').value;
var cgst_percent_int=parseFloat(cgst_percent);
var igst=(total/(100+(2*cgst_percent_int)))*(2*cgst_percent_int);
var cgst=parseFloat(igst/2);
document.getElementById("sgst_per_16").value=cgst_percent_int;
document.getElementById("sgst_amount16").value=Math.round(cgst);
document.getElementById("cgst_amount16").value=Math.round(cgst);
document.getElementById("taxable_value16").value=total-Math.round(parseFloat(igst));
document.getElementById("all_total16").value=total;

var total1=document.getElementById("total1").value || 0;
var total2=document.getElementById("total2").value || 0;
var total3=document.getElementById("total3").value || 0;
var total4=document.getElementById("total4").value || 0;
var total5=document.getElementById("total5").value || 0;
var total6=document.getElementById("total6").value || 0;
var total7=document.getElementById("total7").value || 0;
var total8=document.getElementById("total8").value || 0;
var total9=document.getElementById("total9").value || 0;
var total10=document.getElementById("total10").value || 0;
var total11=document.getElementById("total11").value || 0;
var total12=document.getElementById("total12").value || 0;
var total13=document.getElementById("total13").value || 0;
var total14=document.getElementById("total14").value || 0;
var total15=document.getElementById("total15").value || 0;

var totalll=parseFloat(total1)+parseFloat(total2)+parseFloat(total3)+parseFloat(total4)+parseFloat(total5)+parseFloat(total6)+parseFloat(total7)+parseFloat(total8)+parseFloat(total9)+parseFloat(total10)+parseFloat(total11)+parseFloat(total12)+parseFloat(total13)+parseFloat(total14)+parseFloat(total15);
document.getElementById("all_total_t").value=totalll;


var cgst_amount1=document.getElementById("cgst_amount1").value || 0;
var cgst_amount2=document.getElementById("cgst_amount2").value || 0;
var cgst_amount3=document.getElementById("cgst_amount3").value || 0;
var cgst_amount4=document.getElementById("cgst_amount4").value || 0;
var cgst_amount5=document.getElementById("cgst_amount5").value || 0;
var cgst_amount6=document.getElementById("cgst_amount6").value || 0;
var cgst_amount7=document.getElementById("cgst_amount7").value || 0;
var cgst_amount8=document.getElementById("cgst_amount8").value || 0;
var cgst_amount9=document.getElementById("cgst_amount9").value || 0;
var cgst_amount10=document.getElementById("cgst_amount10").value || 0;
var cgst_amount11=document.getElementById("cgst_amount11").value || 0;
var cgst_amount12=document.getElementById("cgst_amount12").value || 0;
var cgst_amount13=document.getElementById("cgst_amount13").value || 0;
var cgst_amount14=document.getElementById("cgst_amount14").value || 0;
var cgst_amount15=document.getElementById("cgst_amount15").value || 0;

var cgst_amountll=parseFloat(cgst_amount1)+parseFloat(cgst_amount2)+parseFloat(cgst_amount3)+parseFloat(cgst_amount4)+parseFloat(cgst_amount5)+parseFloat(cgst_amount6)+parseFloat(cgst_amount7)+parseFloat(cgst_amount8)+parseFloat(cgst_amount9)+parseFloat(cgst_amount10)+parseFloat(cgst_amount11)+parseFloat(cgst_amount12)+parseFloat(cgst_amount13)+parseFloat(cgst_amount14)+parseFloat(cgst_amount15);
document.getElementById("cgst_amount_t").value=cgst_amountll;
document.getElementById("sgst_amount_t").value=cgst_amountll;


var taxable_value1=document.getElementById("taxable_value1").value || 0;
var taxable_value2=document.getElementById("taxable_value2").value || 0;
var taxable_value3=document.getElementById("taxable_value3").value || 0;
var taxable_value4=document.getElementById("taxable_value4").value || 0;
var taxable_value5=document.getElementById("taxable_value5").value || 0;
var taxable_value6=document.getElementById("taxable_value6").value || 0;
var taxable_value7=document.getElementById("taxable_value7").value || 0;
var taxable_value8=document.getElementById("taxable_value8").value || 0;
var taxable_value9=document.getElementById("taxable_value9").value || 0;
var taxable_value10=document.getElementById("taxable_value10").value || 0;
var taxable_value11=document.getElementById("taxable_value11").value || 0;
var taxable_value12=document.getElementById("taxable_value12").value || 0;
var taxable_value13=document.getElementById("taxable_value13").value || 0;
var taxable_value14=document.getElementById("taxable_value14").value || 0;
var taxable_value15=document.getElementById("taxable_value15").value || 0;
var taxable_valuell=parseFloat(taxable_value1)+parseFloat(taxable_value2)+parseFloat(taxable_value3)+parseFloat(taxable_value4)+parseFloat(taxable_value5)+parseFloat(taxable_value6)+parseFloat(taxable_value7)+parseFloat(taxable_value8)+parseFloat(taxable_value9)+parseFloat(taxable_value10)+parseFloat(taxable_value11)+parseFloat(taxable_value12)+parseFloat(taxable_value13)+parseFloat(taxable_value14)+parseFloat(taxable_value15);
document.getElementById("taxable_value_t").value=taxable_valuell;


}


function CalculateTax17()
{
var total=document.getElementById('total17').value;
var cgst_percent=document.getElementById('cgst_per_17').value;
var cgst_percent_int=parseFloat(cgst_percent);
var igst=(total/(100+(2*cgst_percent_int)))*(2*cgst_percent_int);
var cgst=parseFloat(igst/2);
document.getElementById("sgst_per_17").value=cgst_percent_int;
document.getElementById("sgst_amount17").value=Math.round(cgst);
document.getElementById("cgst_amount17").value=Math.round(cgst);
document.getElementById("taxable_value17").value=total-Math.round(parseFloat(igst));
document.getElementById("all_total17").value=total;

var total1=document.getElementById("total1").value || 0;
var total2=document.getElementById("total2").value || 0;
var total3=document.getElementById("total3").value || 0;
var total4=document.getElementById("total4").value || 0;
var total5=document.getElementById("total5").value || 0;
var total6=document.getElementById("total6").value || 0;
var total7=document.getElementById("total7").value || 0;
var total8=document.getElementById("total8").value || 0;
var total9=document.getElementById("total9").value || 0;
var total10=document.getElementById("total10").value || 0;
var total11=document.getElementById("total11").value || 0;
var total12=document.getElementById("total12").value || 0;
var total13=document.getElementById("total13").value || 0;
var total14=document.getElementById("total14").value || 0;
var total15=document.getElementById("total15").value || 0;

var totalll=parseFloat(total1)+parseFloat(total2)+parseFloat(total3)+parseFloat(total4)+parseFloat(total5)+parseFloat(total6)+parseFloat(total7)+parseFloat(total8)+parseFloat(total9)+parseFloat(total10)+parseFloat(total11)+parseFloat(total12)+parseFloat(total13)+parseFloat(total14)+parseFloat(total15);
document.getElementById("all_total_t").value=totalll;


var cgst_amount1=document.getElementById("cgst_amount1").value || 0;
var cgst_amount2=document.getElementById("cgst_amount2").value || 0;
var cgst_amount3=document.getElementById("cgst_amount3").value || 0;
var cgst_amount4=document.getElementById("cgst_amount4").value || 0;
var cgst_amount5=document.getElementById("cgst_amount5").value || 0;
var cgst_amount6=document.getElementById("cgst_amount6").value || 0;
var cgst_amount7=document.getElementById("cgst_amount7").value || 0;
var cgst_amount8=document.getElementById("cgst_amount8").value || 0;
var cgst_amount9=document.getElementById("cgst_amount9").value || 0;
var cgst_amount10=document.getElementById("cgst_amount10").value || 0;
var cgst_amount11=document.getElementById("cgst_amount11").value || 0;
var cgst_amount12=document.getElementById("cgst_amount12").value || 0;
var cgst_amount13=document.getElementById("cgst_amount13").value || 0;
var cgst_amount14=document.getElementById("cgst_amount14").value || 0;
var cgst_amount15=document.getElementById("cgst_amount15").value || 0;

var cgst_amountll=parseFloat(cgst_amount1)+parseFloat(cgst_amount2)+parseFloat(cgst_amount3)+parseFloat(cgst_amount4)+parseFloat(cgst_amount5)+parseFloat(cgst_amount6)+parseFloat(cgst_amount7)+parseFloat(cgst_amount8)+parseFloat(cgst_amount9)+parseFloat(cgst_amount10)+parseFloat(cgst_amount11)+parseFloat(cgst_amount12)+parseFloat(cgst_amount13)+parseFloat(cgst_amount14)+parseFloat(cgst_amount15);
document.getElementById("cgst_amount_t").value=cgst_amountll;
document.getElementById("sgst_amount_t").value=cgst_amountll;


var taxable_value1=document.getElementById("taxable_value1").value || 0;
var taxable_value2=document.getElementById("taxable_value2").value || 0;
var taxable_value3=document.getElementById("taxable_value3").value || 0;
var taxable_value4=document.getElementById("taxable_value4").value || 0;
var taxable_value5=document.getElementById("taxable_value5").value || 0;
var taxable_value6=document.getElementById("taxable_value6").value || 0;
var taxable_value7=document.getElementById("taxable_value7").value || 0;
var taxable_value8=document.getElementById("taxable_value8").value || 0;
var taxable_value9=document.getElementById("taxable_value9").value || 0;
var taxable_value10=document.getElementById("taxable_value10").value || 0;
var taxable_value11=document.getElementById("taxable_value11").value || 0;
var taxable_value12=document.getElementById("taxable_value12").value || 0;
var taxable_value13=document.getElementById("taxable_value13").value || 0;
var taxable_value14=document.getElementById("taxable_value14").value || 0;
var taxable_value15=document.getElementById("taxable_value15").value || 0;
var taxable_valuell=parseFloat(taxable_value1)+parseFloat(taxable_value2)+parseFloat(taxable_value3)+parseFloat(taxable_value4)+parseFloat(taxable_value5)+parseFloat(taxable_value6)+parseFloat(taxable_value7)+parseFloat(taxable_value8)+parseFloat(taxable_value9)+parseFloat(taxable_value10)+parseFloat(taxable_value11)+parseFloat(taxable_value12)+parseFloat(taxable_value13)+parseFloat(taxable_value14)+parseFloat(taxable_value15);
document.getElementById("taxable_value_t").value=taxable_valuell;


}


function CalculateTax18()
{
var total=document.getElementById('total18').value;
var cgst_percent=document.getElementById('cgst_per_18').value;
var cgst_percent_int=parseFloat(cgst_percent);
var igst=(total/(100+(2*cgst_percent_int)))*(2*cgst_percent_int);
var cgst=parseFloat(igst/2);
document.getElementById("sgst_per_18").value=cgst_percent_int;
document.getElementById("sgst_amount18").value=Math.round(cgst);
document.getElementById("cgst_amount18").value=Math.round(cgst);
document.getElementById("taxable_value18").value=total-Math.round(parseFloat(igst));
document.getElementById("all_total18").value=total;

var total1=document.getElementById("total1").value || 0;
var total2=document.getElementById("total2").value || 0;
var total3=document.getElementById("total3").value || 0;
var total4=document.getElementById("total4").value || 0;
var total5=document.getElementById("total5").value || 0;
var total6=document.getElementById("total6").value || 0;
var total7=document.getElementById("total7").value || 0;
var total8=document.getElementById("total8").value || 0;
var total9=document.getElementById("total9").value || 0;
var total10=document.getElementById("total10").value || 0;
var total11=document.getElementById("total11").value || 0;
var total12=document.getElementById("total12").value || 0;
var total13=document.getElementById("total13").value || 0;
var total14=document.getElementById("total14").value || 0;
var total15=document.getElementById("total15").value || 0;

var totalll=parseFloat(total1)+parseFloat(total2)+parseFloat(total3)+parseFloat(total4)+parseFloat(total5)+parseFloat(total6)+parseFloat(total7)+parseFloat(total8)+parseFloat(total9)+parseFloat(total10)+parseFloat(total11)+parseFloat(total12)+parseFloat(total13)+parseFloat(total14)+parseFloat(total15);
document.getElementById("all_total_t").value=totalll;


var cgst_amount1=document.getElementById("cgst_amount1").value || 0;
var cgst_amount2=document.getElementById("cgst_amount2").value || 0;
var cgst_amount3=document.getElementById("cgst_amount3").value || 0;
var cgst_amount4=document.getElementById("cgst_amount4").value || 0;
var cgst_amount5=document.getElementById("cgst_amount5").value || 0;
var cgst_amount6=document.getElementById("cgst_amount6").value || 0;
var cgst_amount7=document.getElementById("cgst_amount7").value || 0;
var cgst_amount8=document.getElementById("cgst_amount8").value || 0;
var cgst_amount9=document.getElementById("cgst_amount9").value || 0;
var cgst_amount10=document.getElementById("cgst_amount10").value || 0;
var cgst_amount11=document.getElementById("cgst_amount11").value || 0;
var cgst_amount12=document.getElementById("cgst_amount12").value || 0;
var cgst_amount13=document.getElementById("cgst_amount13").value || 0;
var cgst_amount14=document.getElementById("cgst_amount14").value || 0;
var cgst_amount15=document.getElementById("cgst_amount15").value || 0;

var cgst_amountll=parseFloat(cgst_amount1)+parseFloat(cgst_amount2)+parseFloat(cgst_amount3)+parseFloat(cgst_amount4)+parseFloat(cgst_amount5)+parseFloat(cgst_amount6)+parseFloat(cgst_amount7)+parseFloat(cgst_amount8)+parseFloat(cgst_amount9)+parseFloat(cgst_amount10)+parseFloat(cgst_amount11)+parseFloat(cgst_amount12)+parseFloat(cgst_amount13)+parseFloat(cgst_amount14)+parseFloat(cgst_amount15);
document.getElementById("cgst_amount_t").value=cgst_amountll;
document.getElementById("sgst_amount_t").value=cgst_amountll;


var taxable_value1=document.getElementById("taxable_value1").value || 0;
var taxable_value2=document.getElementById("taxable_value2").value || 0;
var taxable_value3=document.getElementById("taxable_value3").value || 0;
var taxable_value4=document.getElementById("taxable_value4").value || 0;
var taxable_value5=document.getElementById("taxable_value5").value || 0;
var taxable_value6=document.getElementById("taxable_value6").value || 0;
var taxable_value7=document.getElementById("taxable_value7").value || 0;
var taxable_value8=document.getElementById("taxable_value8").value || 0;
var taxable_value9=document.getElementById("taxable_value9").value || 0;
var taxable_value10=document.getElementById("taxable_value10").value || 0;
var taxable_value11=document.getElementById("taxable_value11").value || 0;
var taxable_value12=document.getElementById("taxable_value12").value || 0;
var taxable_value13=document.getElementById("taxable_value13").value || 0;
var taxable_value14=document.getElementById("taxable_value14").value || 0;
var taxable_value15=document.getElementById("taxable_value15").value || 0;
var taxable_valuell=parseFloat(taxable_value1)+parseFloat(taxable_value2)+parseFloat(taxable_value3)+parseFloat(taxable_value4)+parseFloat(taxable_value5)+parseFloat(taxable_value6)+parseFloat(taxable_value7)+parseFloat(taxable_value8)+parseFloat(taxable_value9)+parseFloat(taxable_value10)+parseFloat(taxable_value11)+parseFloat(taxable_value12)+parseFloat(taxable_value13)+parseFloat(taxable_value14)+parseFloat(taxable_value15);
document.getElementById("taxable_value_t").value=taxable_valuell;


}


function CalculateTax19()
{
var total=document.getElementById('total19').value;
var cgst_percent=document.getElementById('cgst_per_19').value;
var cgst_percent_int=parseFloat(cgst_percent);
var igst=(total/(100+(2*cgst_percent_int)))*(2*cgst_percent_int);
var cgst=parseFloat(igst/2);
document.getElementById("sgst_per_19").value=cgst_percent_int;
document.getElementById("sgst_amount19").value=Math.round(cgst);
document.getElementById("cgst_amount19").value=Math.round(cgst);
document.getElementById("taxable_value19").value=total-Math.round(parseFloat(igst));
document.getElementById("all_total19").value=total;

var total1=document.getElementById("total1").value || 0;
var total2=document.getElementById("total2").value || 0;
var total3=document.getElementById("total3").value || 0;
var total4=document.getElementById("total4").value || 0;
var total5=document.getElementById("total5").value || 0;
var total6=document.getElementById("total6").value || 0;
var total7=document.getElementById("total7").value || 0;
var total8=document.getElementById("total8").value || 0;
var total9=document.getElementById("total9").value || 0;
var total10=document.getElementById("total10").value || 0;
var total11=document.getElementById("total11").value || 0;
var total12=document.getElementById("total12").value || 0;
var total13=document.getElementById("total13").value || 0;
var total14=document.getElementById("total14").value || 0;
var total15=document.getElementById("total15").value || 0;

var totalll=parseFloat(total1)+parseFloat(total2)+parseFloat(total3)+parseFloat(total4)+parseFloat(total5)+parseFloat(total6)+parseFloat(total7)+parseFloat(total8)+parseFloat(total9)+parseFloat(total10)+parseFloat(total11)+parseFloat(total12)+parseFloat(total13)+parseFloat(total14)+parseFloat(total15);
document.getElementById("all_total_t").value=totalll;


var cgst_amount1=document.getElementById("cgst_amount1").value || 0;
var cgst_amount2=document.getElementById("cgst_amount2").value || 0;
var cgst_amount3=document.getElementById("cgst_amount3").value || 0;
var cgst_amount4=document.getElementById("cgst_amount4").value || 0;
var cgst_amount5=document.getElementById("cgst_amount5").value || 0;
var cgst_amount6=document.getElementById("cgst_amount6").value || 0;
var cgst_amount7=document.getElementById("cgst_amount7").value || 0;
var cgst_amount8=document.getElementById("cgst_amount8").value || 0;
var cgst_amount9=document.getElementById("cgst_amount9").value || 0;
var cgst_amount10=document.getElementById("cgst_amount10").value || 0;
var cgst_amount11=document.getElementById("cgst_amount11").value || 0;
var cgst_amount12=document.getElementById("cgst_amount12").value || 0;
var cgst_amount13=document.getElementById("cgst_amount13").value || 0;
var cgst_amount14=document.getElementById("cgst_amount14").value || 0;
var cgst_amount15=document.getElementById("cgst_amount15").value || 0;

var cgst_amountll=parseFloat(cgst_amount1)+parseFloat(cgst_amount2)+parseFloat(cgst_amount3)+parseFloat(cgst_amount4)+parseFloat(cgst_amount5)+parseFloat(cgst_amount6)+parseFloat(cgst_amount7)+parseFloat(cgst_amount8)+parseFloat(cgst_amount9)+parseFloat(cgst_amount10)+parseFloat(cgst_amount11)+parseFloat(cgst_amount12)+parseFloat(cgst_amount13)+parseFloat(cgst_amount14)+parseFloat(cgst_amount15);
document.getElementById("cgst_amount_t").value=cgst_amountll;
document.getElementById("sgst_amount_t").value=cgst_amountll;


var taxable_value1=document.getElementById("taxable_value1").value || 0;
var taxable_value2=document.getElementById("taxable_value2").value || 0;
var taxable_value3=document.getElementById("taxable_value3").value || 0;
var taxable_value4=document.getElementById("taxable_value4").value || 0;
var taxable_value5=document.getElementById("taxable_value5").value || 0;
var taxable_value6=document.getElementById("taxable_value6").value || 0;
var taxable_value7=document.getElementById("taxable_value7").value || 0;
var taxable_value8=document.getElementById("taxable_value8").value || 0;
var taxable_value9=document.getElementById("taxable_value9").value || 0;
var taxable_value10=document.getElementById("taxable_value10").value || 0;
var taxable_value11=document.getElementById("taxable_value11").value || 0;
var taxable_value12=document.getElementById("taxable_value12").value || 0;
var taxable_value13=document.getElementById("taxable_value13").value || 0;
var taxable_value14=document.getElementById("taxable_value14").value || 0;
var taxable_value15=document.getElementById("taxable_value15").value || 0;
var taxable_valuell=parseFloat(taxable_value1)+parseFloat(taxable_value2)+parseFloat(taxable_value3)+parseFloat(taxable_value4)+parseFloat(taxable_value5)+parseFloat(taxable_value6)+parseFloat(taxable_value7)+parseFloat(taxable_value8)+parseFloat(taxable_value9)+parseFloat(taxable_value10)+parseFloat(taxable_value11)+parseFloat(taxable_value12)+parseFloat(taxable_value13)+parseFloat(taxable_value14)+parseFloat(taxable_value15);
document.getElementById("taxable_value_t").value=taxable_valuell;


}



function CalculateTax20()
{
var total=document.getElementById('total20').value;
var cgst_percent=document.getElementById('cgst_per_20').value;
var cgst_percent_int=parseFloat(cgst_percent);
var igst=(total/(100+(2*cgst_percent_int)))*(2*cgst_percent_int);
var cgst=parseFloat(igst/2);
document.getElementById("sgst_per_20").value=cgst_percent_int;
document.getElementById("sgst_amount20").value=Math.round(cgst);
document.getElementById("cgst_amount20").value=Math.round(cgst);
document.getElementById("taxable_value20").value=total-Math.round(parseFloat(igst));
document.getElementById("all_total20").value=total;

var total1=document.getElementById("total1").value || 0;
var total2=document.getElementById("total2").value || 0;
var total3=document.getElementById("total3").value || 0;
var total4=document.getElementById("total4").value || 0;
var total5=document.getElementById("total5").value || 0;
var total6=document.getElementById("total6").value || 0;
var total7=document.getElementById("total7").value || 0;
var total8=document.getElementById("total8").value || 0;
var total9=document.getElementById("total9").value || 0;
var total10=document.getElementById("total10").value || 0;
var total11=document.getElementById("total11").value || 0;
var total12=document.getElementById("total12").value || 0;
var total13=document.getElementById("total13").value || 0;
var total14=document.getElementById("total14").value || 0;
var total15=document.getElementById("total15").value || 0;

var totalll=parseFloat(total1)+parseFloat(total2)+parseFloat(total3)+parseFloat(total4)+parseFloat(total5)+parseFloat(total6)+parseFloat(total7)+parseFloat(total8)+parseFloat(total9)+parseFloat(total10)+parseFloat(total11)+parseFloat(total12)+parseFloat(total13)+parseFloat(total14)+parseFloat(total15);
document.getElementById("all_total_t").value=totalll;


var cgst_amount1=document.getElementById("cgst_amount1").value || 0;
var cgst_amount2=document.getElementById("cgst_amount2").value || 0;
var cgst_amount3=document.getElementById("cgst_amount3").value || 0;
var cgst_amount4=document.getElementById("cgst_amount4").value || 0;
var cgst_amount5=document.getElementById("cgst_amount5").value || 0;
var cgst_amount6=document.getElementById("cgst_amount6").value || 0;
var cgst_amount7=document.getElementById("cgst_amount7").value || 0;
var cgst_amount8=document.getElementById("cgst_amount8").value || 0;
var cgst_amount9=document.getElementById("cgst_amount9").value || 0;
var cgst_amount10=document.getElementById("cgst_amount10").value || 0;
var cgst_amount11=document.getElementById("cgst_amount11").value || 0;
var cgst_amount12=document.getElementById("cgst_amount12").value || 0;
var cgst_amount13=document.getElementById("cgst_amount13").value || 0;
var cgst_amount14=document.getElementById("cgst_amount14").value || 0;
var cgst_amount15=document.getElementById("cgst_amount15").value || 0;

var cgst_amountll=parseFloat(cgst_amount1)+parseFloat(cgst_amount2)+parseFloat(cgst_amount3)+parseFloat(cgst_amount4)+parseFloat(cgst_amount5)+parseFloat(cgst_amount6)+parseFloat(cgst_amount7)+parseFloat(cgst_amount8)+parseFloat(cgst_amount9)+parseFloat(cgst_amount10)+parseFloat(cgst_amount11)+parseFloat(cgst_amount12)+parseFloat(cgst_amount13)+parseFloat(cgst_amount14)+parseFloat(cgst_amount15);
document.getElementById("cgst_amount_t").value=cgst_amountll;
document.getElementById("sgst_amount_t").value=cgst_amountll;


var taxable_value1=document.getElementById("taxable_value1").value || 0;
var taxable_value2=document.getElementById("taxable_value2").value || 0;
var taxable_value3=document.getElementById("taxable_value3").value || 0;
var taxable_value4=document.getElementById("taxable_value4").value || 0;
var taxable_value5=document.getElementById("taxable_value5").value || 0;
var taxable_value6=document.getElementById("taxable_value6").value || 0;
var taxable_value7=document.getElementById("taxable_value7").value || 0;
var taxable_value8=document.getElementById("taxable_value8").value || 0;
var taxable_value9=document.getElementById("taxable_value9").value || 0;
var taxable_value10=document.getElementById("taxable_value10").value || 0;
var taxable_value11=document.getElementById("taxable_value11").value || 0;
var taxable_value12=document.getElementById("taxable_value12").value || 0;
var taxable_value13=document.getElementById("taxable_value13").value || 0;
var taxable_value14=document.getElementById("taxable_value14").value || 0;
var taxable_value15=document.getElementById("taxable_value15").value || 0;
var taxable_valuell=parseFloat(taxable_value1)+parseFloat(taxable_value2)+parseFloat(taxable_value3)+parseFloat(taxable_value4)+parseFloat(taxable_value5)+parseFloat(taxable_value6)+parseFloat(taxable_value7)+parseFloat(taxable_value8)+parseFloat(taxable_value9)+parseFloat(taxable_value10)+parseFloat(taxable_value11)+parseFloat(taxable_value12)+parseFloat(taxable_value13)+parseFloat(taxable_value14)+parseFloat(taxable_value15);
document.getElementById("taxable_value_t").value=taxable_valuell;


}

function FetchValues(str){
	//
	// $district_id=document.getElementById("maalmatta_id").value;
	//
	//alert(str);
//var panipatti_rate;
			if (window.XMLHttpRequest)
			{
						// code for IE7+, Firefox, Chrome, Opera, Safari
						xmlhttp = new XMLHttpRequest();
				}
				else
				{
						// code for IE6, IE5
						xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				}
				xmlhttp.onreadystatechange = function()
				{
						if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
						{
							//alert(xmlhttp.responseText);

							// var json=JSON.parse(xmlhttp.responseText);
							// var rate=json.DATA;

								//document.getElementById("value2").value = xmlhttp.responseText;
								//alert(xmlhttp.responseText);
								var values=xmlhttp.responseText;
								var spl= values.split(",");
								//alert(spl[0]);
								//alert(spl[1]/2);
								document.getElementById("rate1").value=spl[0];
									document.getElementById("cgst_per_1").value=spl[1]/2;
									document.getElementById("sgst_per_1").value=spl[1]/2;
                  document.getElementById("qty_type1").value=spl[2];
								// var panipatti_rate=document.getElementById("value2").value;
								// //alert(panipatti_rate);
								// var ghar=document.getElementById("gharpatti_kar").value;
								// 	var arogya=document.getElementById("arogya_kar").value;
								// 	var divabatti=document.getElementById("divabatti_kar").value;

								// var total = parseFloat(panipatti_rate) + parseFloat(ghar) + parseFloat(arogya) + parseFloat(divabatti);
								// document.getElementById("akun_kar").value=total
								//alert(total);
								//alert(rate);


						}
				};
				xmlhttp.open("GET","ajaxAll.php?id_goods="+str,true);
				xmlhttp.send();




}

function FetchValues2(str){
	//
	// $district_id=document.getElementById("maalmatta_id").value;
	//
	//alert(str);
//var panipatti_rate;
			if (window.XMLHttpRequest)
			{
						// code for IE7+, Firefox, Chrome, Opera, Safari
						xmlhttp = new XMLHttpRequest();
				}
				else
				{
						// code for IE6, IE5
						xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				}
				xmlhttp.onreadystatechange = function()
				{
						if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
						{
							//alert(xmlhttp.responseText);

							// var json=JSON.parse(xmlhttp.responseText);
							// var rate=json.DATA;

								//document.getElementById("value2").value = xmlhttp.responseText;
								//alert(xmlhttp.responseText);
								var values=xmlhttp.responseText;
								var spl= values.split(",");
								//alert(spl[0]);
								//alert(spl[1]/2);
								document.getElementById("rate2").value=spl[0];
									document.getElementById("cgst_per_2").value=spl[1]/2;
									document.getElementById("sgst_per_2").value=spl[1]/2;
                  document.getElementById("qty_type2").value=spl[2];
								// var panipatti_rate=document.getElementById("value2").value;
								// //alert(panipatti_rate);
								// var ghar=document.getElementById("gharpatti_kar").value;
								// 	var arogya=document.getElementById("arogya_kar").value;
								// 	var divabatti=document.getElementById("divabatti_kar").value;

								// var total = parseFloat(panipatti_rate) + parseFloat(ghar) + parseFloat(arogya) + parseFloat(divabatti);
								// document.getElementById("akun_kar").value=total
								//alert(total);
								//alert(rate);


						}
				};
				xmlhttp.open("GET","ajaxAll.php?id_goods="+str,true);
				xmlhttp.send();




}
function FetchValues3(str){
	//
	// $district_id=document.getElementById("maalmatta_id").value;
	//
	//alert(str);
//var panipatti_rate;
			if (window.XMLHttpRequest)
			{
						// code for IE7+, Firefox, Chrome, Opera, Safari
						xmlhttp = new XMLHttpRequest();
				}
				else
				{
						// code for IE6, IE5
						xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				}
				xmlhttp.onreadystatechange = function()
				{
						if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
						{
							//alert(xmlhttp.responseText);

							// var json=JSON.parse(xmlhttp.responseText);
							// var rate=json.DATA;

								//document.getElementById("value2").value = xmlhttp.responseText;
								//alert(xmlhttp.responseText);
								var values=xmlhttp.responseText;
								var spl= values.split(",");
								//alert(spl[0]);
								//alert(spl[1]/2);
								document.getElementById("rate3").value=spl[0];
									document.getElementById("cgst_per_3").value=spl[1]/2;
									document.getElementById("sgst_per_3").value=spl[1]/2;
                  document.getElementById("qty_type3").value=spl[2];
								// var panipatti_rate=document.getElementById("value2").value;
								// //alert(panipatti_rate);
								// var ghar=document.getElementById("gharpatti_kar").value;
								// 	var arogya=document.getElementById("arogya_kar").value;
								// 	var divabatti=document.getElementById("divabatti_kar").value;

								// var total = parseFloat(panipatti_rate) + parseFloat(ghar) + parseFloat(arogya) + parseFloat(divabatti);
								// document.getElementById("akun_kar").value=total
								//alert(total);
								//alert(rate);


						}
				};
				xmlhttp.open("GET","ajaxAll.php?id_goods="+str,true);
				xmlhttp.send();




}
function FetchValues4(str){
	//
	// $district_id=document.getElementById("maalmatta_id").value;
	//
	//alert(str);
//var panipatti_rate;
			if (window.XMLHttpRequest)
			{
						// code for IE7+, Firefox, Chrome, Opera, Safari
						xmlhttp = new XMLHttpRequest();
				}
				else
				{
						// code for IE6, IE5
						xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				}
				xmlhttp.onreadystatechange = function()
				{
						if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
						{
							//alert(xmlhttp.responseText);

							// var json=JSON.parse(xmlhttp.responseText);
							// var rate=json.DATA;

								//document.getElementById("value2").value = xmlhttp.responseText;
								//alert(xmlhttp.responseText);
								var values=xmlhttp.responseText;
								var spl= values.split(",");
								//alert(spl[0]);
								//alert(spl[1]/2);
								document.getElementById("rate4").value=spl[0];
									document.getElementById("cgst_per_4").value=spl[1]/2;
									document.getElementById("sgst_per_4").value=spl[1]/2;
                  document.getElementById("qty_type4").value=spl[2];
								// var panipatti_rate=document.getElementById("value2").value;
								// //alert(panipatti_rate);
								// var ghar=document.getElementById("gharpatti_kar").value;
								// 	var arogya=document.getElementById("arogya_kar").value;
								// 	var divabatti=document.getElementById("divabatti_kar").value;

								// var total = parseFloat(panipatti_rate) + parseFloat(ghar) + parseFloat(arogya) + parseFloat(divabatti);
								// document.getElementById("akun_kar").value=total
								//alert(total);
								//alert(rate);


						}
				};
				xmlhttp.open("GET","ajaxAll.php?id_goods="+str,true);
				xmlhttp.send();




}
function FetchValues5(str){
	//
	// $district_id=document.getElementById("maalmatta_id").value;
	//
	//alert(str);
//var panipatti_rate;
			if (window.XMLHttpRequest)
			{
						// code for IE7+, Firefox, Chrome, Opera, Safari
						xmlhttp = new XMLHttpRequest();
				}
				else
				{
						// code for IE6, IE5
						xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				}
				xmlhttp.onreadystatechange = function()
				{
						if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
						{
							//alert(xmlhttp.responseText);

							// var json=JSON.parse(xmlhttp.responseText);
							// var rate=json.DATA;

								//document.getElementById("value2").value = xmlhttp.responseText;
								//alert(xmlhttp.responseText);
								var values=xmlhttp.responseText;
								var spl= values.split(",");
								//alert(spl[0]);
								//alert(spl[1]/2);
								document.getElementById("rate5").value=spl[0];
									document.getElementById("cgst_per_5").value=spl[1]/2;
									document.getElementById("sgst_per_5").value=spl[1]/2;
                  document.getElementById("qty_type5").value=spl[2];
								// var panipatti_rate=document.getElementById("value2").value;
								// //alert(panipatti_rate);
								// var ghar=document.getElementById("gharpatti_kar").value;
								// 	var arogya=document.getElementById("arogya_kar").value;
								// 	var divabatti=document.getElementById("divabatti_kar").value;

								// var total = parseFloat(panipatti_rate) + parseFloat(ghar) + parseFloat(arogya) + parseFloat(divabatti);
								// document.getElementById("akun_kar").value=total
								//alert(total);
								//alert(rate);


						}
				};
				xmlhttp.open("GET","ajaxAll.php?id_goods="+str,true);
				xmlhttp.send();




}
function FetchValues6(str){
	//
	// $district_id=document.getElementById("maalmatta_id").value;
	//
	//alert(str);
//var panipatti_rate;
			if (window.XMLHttpRequest)
			{
						// code for IE7+, Firefox, Chrome, Opera, Safari
						xmlhttp = new XMLHttpRequest();
				}
				else
				{
						// code for IE6, IE5
						xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				}
				xmlhttp.onreadystatechange = function()
				{
						if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
						{
							//alert(xmlhttp.responseText);

							// var json=JSON.parse(xmlhttp.responseText);
							// var rate=json.DATA;

								//document.getElementById("value2").value = xmlhttp.responseText;
								//alert(xmlhttp.responseText);
								var values=xmlhttp.responseText;
								var spl= values.split(",");
								//alert(spl[0]);
								//alert(spl[1]/2);
								document.getElementById("rate6").value=spl[0];
									document.getElementById("cgst_per_6").value=spl[1]/2;
									document.getElementById("sgst_per_6").value=spl[1]/2;
                  document.getElementById("qty_type6").value=spl[2];
								// var panipatti_rate=document.getElementById("value2").value;
								// //alert(panipatti_rate);
								// var ghar=document.getElementById("gharpatti_kar").value;
								// 	var arogya=document.getElementById("arogya_kar").value;
								// 	var divabatti=document.getElementById("divabatti_kar").value;

								// var total = parseFloat(panipatti_rate) + parseFloat(ghar) + parseFloat(arogya) + parseFloat(divabatti);
								// document.getElementById("akun_kar").value=total
								//alert(total);
								//alert(rate);


						}
				};
				xmlhttp.open("GET","ajaxAll.php?id_goods="+str,true);
				xmlhttp.send();




}
function FetchValues7(str){
	//
	// $district_id=document.getElementById("maalmatta_id").value;
	//
	//alert(str);
//var panipatti_rate;
			if (window.XMLHttpRequest)
			{
						// code for IE7+, Firefox, Chrome, Opera, Safari
						xmlhttp = new XMLHttpRequest();
				}
				else
				{
						// code for IE6, IE5
						xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				}
				xmlhttp.onreadystatechange = function()
				{
						if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
						{
							//alert(xmlhttp.responseText);

							// var json=JSON.parse(xmlhttp.responseText);
							// var rate=json.DATA;

								//document.getElementById("value2").value = xmlhttp.responseText;
								//alert(xmlhttp.responseText);
								var values=xmlhttp.responseText;
								var spl= values.split(",");
								//alert(spl[0]);
								//alert(spl[1]/2);
								document.getElementById("rate7").value=spl[0];
									document.getElementById("cgst_per_7").value=spl[1]/2;
									document.getElementById("sgst_per_7").value=spl[1]/2;
                  document.getElementById("qty_type7").value=spl[2];
								// var panipatti_rate=document.getElementById("value2").value;
								// //alert(panipatti_rate);
								// var ghar=document.getElementById("gharpatti_kar").value;
								// 	var arogya=document.getElementById("arogya_kar").value;
								// 	var divabatti=document.getElementById("divabatti_kar").value;

								// var total = parseFloat(panipatti_rate) + parseFloat(ghar) + parseFloat(arogya) + parseFloat(divabatti);
								// document.getElementById("akun_kar").value=total
								//alert(total);
								//alert(rate);


						}
				};
				xmlhttp.open("GET","ajaxAll.php?id_goods="+str,true);
				xmlhttp.send();




}
function FetchValues8(str){
	//
	// $district_id=document.getElementById("maalmatta_id").value;
	//
	//alert(str);
//var panipatti_rate;
			if (window.XMLHttpRequest)
			{
						// code for IE7+, Firefox, Chrome, Opera, Safari
						xmlhttp = new XMLHttpRequest();
				}
				else
				{
						// code for IE6, IE5
						xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				}
				xmlhttp.onreadystatechange = function()
				{
						if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
						{
							//alert(xmlhttp.responseText);

							// var json=JSON.parse(xmlhttp.responseText);
							// var rate=json.DATA;

								//document.getElementById("value2").value = xmlhttp.responseText;
								//alert(xmlhttp.responseText);
								var values=xmlhttp.responseText;
								var spl= values.split(",");
								//alert(spl[0]);
								//alert(spl[1]/2);
								document.getElementById("rate8").value=spl[0];
									document.getElementById("cgst_per_8").value=spl[1]/2;
									document.getElementById("sgst_per_8").value=spl[1]/2;
                  document.getElementById("qty_type8").value=spl[2];
								// var panipatti_rate=document.getElementById("value2").value;
								// //alert(panipatti_rate);
								// var ghar=document.getElementById("gharpatti_kar").value;
								// 	var arogya=document.getElementById("arogya_kar").value;
								// 	var divabatti=document.getElementById("divabatti_kar").value;

								// var total = parseFloat(panipatti_rate) + parseFloat(ghar) + parseFloat(arogya) + parseFloat(divabatti);
								// document.getElementById("akun_kar").value=total
								//alert(total);
								//alert(rate);


						}
				};
				xmlhttp.open("GET","ajaxAll.php?id_goods="+str,true);
				xmlhttp.send();




}
function FetchValues9(str){
	//
	// $district_id=document.getElementById("maalmatta_id").value;
	//
	//alert(str);
//var panipatti_rate;
			if (window.XMLHttpRequest)
			{
						// code for IE7+, Firefox, Chrome, Opera, Safari
						xmlhttp = new XMLHttpRequest();
				}
				else
				{
						// code for IE6, IE5
						xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				}
				xmlhttp.onreadystatechange = function()
				{
						if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
						{
							//alert(xmlhttp.responseText);

							// var json=JSON.parse(xmlhttp.responseText);
							// var rate=json.DATA;

								//document.getElementById("value2").value = xmlhttp.responseText;
								//alert(xmlhttp.responseText);
								var values=xmlhttp.responseText;
								var spl= values.split(",");
								//alert(spl[0]);
								//alert(spl[1]/2);
								document.getElementById("rate9").value=spl[0];
									document.getElementById("cgst_per_9").value=spl[1]/2;
									document.getElementById("sgst_per_9").value=spl[1]/2;
                  document.getElementById("qty_type9").value=spl[2];
								// var panipatti_rate=document.getElementById("value2").value;
								// //alert(panipatti_rate);
								// var ghar=document.getElementById("gharpatti_kar").value;
								// 	var arogya=document.getElementById("arogya_kar").value;
								// 	var divabatti=document.getElementById("divabatti_kar").value;

								// var total = parseFloat(panipatti_rate) + parseFloat(ghar) + parseFloat(arogya) + parseFloat(divabatti);
								// document.getElementById("akun_kar").value=total
								//alert(total);
								//alert(rate);


						}
				};
				xmlhttp.open("GET","ajaxAll.php?id_goods="+str,true);
				xmlhttp.send();




}
function FetchValues10(str){
	//
	// $district_id=document.getElementById("maalmatta_id").value;
	//
	//alert(str);
//var panipatti_rate;
			if (window.XMLHttpRequest)
			{
						// code for IE7+, Firefox, Chrome, Opera, Safari
						xmlhttp = new XMLHttpRequest();
				}
				else
				{
						// code for IE6, IE5
						xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				}
				xmlhttp.onreadystatechange = function()
				{
						if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
						{
							//alert(xmlhttp.responseText);

							// var json=JSON.parse(xmlhttp.responseText);
							// var rate=json.DATA;

								//document.getElementById("value2").value = xmlhttp.responseText;
								//alert(xmlhttp.responseText);
								var values=xmlhttp.responseText;
								var spl= values.split(",");
								//alert(spl[0]);
								//alert(spl[1]/2);
								document.getElementById("rate10").value=spl[0];
									document.getElementById("cgst_per_10").value=spl[1]/2;
									document.getElementById("sgst_per_10").value=spl[1]/2;
                  document.getElementById("qty_type10").value=spl[2];
								// var panipatti_rate=document.getElementById("value2").value;
								// //alert(panipatti_rate);
								// var ghar=document.getElementById("gharpatti_kar").value;
								// 	var arogya=document.getElementById("arogya_kar").value;
								// 	var divabatti=document.getElementById("divabatti_kar").value;

								// var total = parseFloat(panipatti_rate) + parseFloat(ghar) + parseFloat(arogya) + parseFloat(divabatti);
								// document.getElementById("akun_kar").value=total
								//alert(total);
								//alert(rate);


						}
				};
				xmlhttp.open("GET","ajaxAll.php?id_goods="+str,true);
				xmlhttp.send();




}
function FetchValues11(str){
	//
	// $district_id=document.getElementById("maalmatta_id").value;
	//
	//alert(str);
//var panipatti_rate;
			if (window.XMLHttpRequest)
			{
						// code for IE7+, Firefox, Chrome, Opera, Safari
						xmlhttp = new XMLHttpRequest();
				}
				else
				{
						// code for IE6, IE5
						xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				}
				xmlhttp.onreadystatechange = function()
				{
						if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
						{
							//alert(xmlhttp.responseText);

							// var json=JSON.parse(xmlhttp.responseText);
							// var rate=json.DATA;

								//document.getElementById("value2").value = xmlhttp.responseText;
								//alert(xmlhttp.responseText);
								var values=xmlhttp.responseText;
								var spl= values.split(",");
								//alert(spl[0]);
								//alert(spl[1]/2);
								document.getElementById("rate11").value=spl[0];
									document.getElementById("cgst_per_11").value=spl[1]/2;
									document.getElementById("sgst_per_11").value=spl[1]/2;
                  document.getElementById("qty_type11").value=spl[2];
								// var panipatti_rate=document.getElementById("value2").value;
								// //alert(panipatti_rate);
								// var ghar=document.getElementById("gharpatti_kar").value;
								// 	var arogya=document.getElementById("arogya_kar").value;
								// 	var divabatti=document.getElementById("divabatti_kar").value;

								// var total = parseFloat(panipatti_rate) + parseFloat(ghar) + parseFloat(arogya) + parseFloat(divabatti);
								// document.getElementById("akun_kar").value=total
								//alert(total);
								//alert(rate);


						}
				};
				xmlhttp.open("GET","ajaxAll.php?id_goods="+str,true);
				xmlhttp.send();




}
function FetchValues12(str){
	//
	// $district_id=document.getElementById("maalmatta_id").value;
	//
	//alert(str);
//var panipatti_rate;
			if (window.XMLHttpRequest)
			{
						// code for IE7+, Firefox, Chrome, Opera, Safari
						xmlhttp = new XMLHttpRequest();
				}
				else
				{
						// code for IE6, IE5
						xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				}
				xmlhttp.onreadystatechange = function()
				{
						if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
						{
							//alert(xmlhttp.responseText);

							// var json=JSON.parse(xmlhttp.responseText);
							// var rate=json.DATA;

								//document.getElementById("value2").value = xmlhttp.responseText;
								//alert(xmlhttp.responseText);
								var values=xmlhttp.responseText;
								var spl= values.split(",");
								//alert(spl[0]);
								//alert(spl[1]/2);
								document.getElementById("rate12").value=spl[0];
									document.getElementById("cgst_per_12").value=spl[1]/2;
									document.getElementById("sgst_per_12").value=spl[1]/2;
                  document.getElementById("qty_type12").value=spl[2];
								// var panipatti_rate=document.getElementById("value2").value;
								// //alert(panipatti_rate);
								// var ghar=document.getElementById("gharpatti_kar").value;
								// 	var arogya=document.getElementById("arogya_kar").value;
								// 	var divabatti=document.getElementById("divabatti_kar").value;

								// var total = parseFloat(panipatti_rate) + parseFloat(ghar) + parseFloat(arogya) + parseFloat(divabatti);
								// document.getElementById("akun_kar").value=total
								//alert(total);
								//alert(rate);


						}
				};
				xmlhttp.open("GET","ajaxAll.php?id_goods="+str,true);
				xmlhttp.send();




}
function FetchValues13(str){
	//
	// $district_id=document.getElementById("maalmatta_id").value;
	//
	//alert(str);
//var panipatti_rate;
			if (window.XMLHttpRequest)
			{
						// code for IE7+, Firefox, Chrome, Opera, Safari
						xmlhttp = new XMLHttpRequest();
				}
				else
				{
						// code for IE6, IE5
						xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				}
				xmlhttp.onreadystatechange = function()
				{
						if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
						{
							//alert(xmlhttp.responseText);

							// var json=JSON.parse(xmlhttp.responseText);
							// var rate=json.DATA;

								//document.getElementById("value2").value = xmlhttp.responseText;
								//alert(xmlhttp.responseText);
								var values=xmlhttp.responseText;
								var spl= values.split(",");
								//alert(spl[0]);
								//alert(spl[1]/2);
								document.getElementById("rate13").value=spl[0];
									document.getElementById("cgst_per_13").value=spl[1]/2;
									document.getElementById("sgst_per_13").value=spl[1]/2;
                  document.getElementById("qty_type13").value=spl[2];
								// var panipatti_rate=document.getElementById("value2").value;
								// //alert(panipatti_rate);
								// var ghar=document.getElementById("gharpatti_kar").value;
								// 	var arogya=document.getElementById("arogya_kar").value;
								// 	var divabatti=document.getElementById("divabatti_kar").value;

								// var total = parseFloat(panipatti_rate) + parseFloat(ghar) + parseFloat(arogya) + parseFloat(divabatti);
								// document.getElementById("akun_kar").value=total
								//alert(total);
								//alert(rate);


						}
				};
				xmlhttp.open("GET","ajaxAll.php?id_goods="+str,true);
				xmlhttp.send();




}
function FetchValues14(str){
	//
	// $district_id=document.getElementById("maalmatta_id").value;
	//
	//alert(str);
//var panipatti_rate;
			if (window.XMLHttpRequest)
			{
						// code for IE7+, Firefox, Chrome, Opera, Safari
						xmlhttp = new XMLHttpRequest();
				}
				else
				{
						// code for IE6, IE5
						xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				}
				xmlhttp.onreadystatechange = function()
				{
						if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
						{
							//alert(xmlhttp.responseText);

							// var json=JSON.parse(xmlhttp.responseText);
							// var rate=json.DATA;

								//document.getElementById("value2").value = xmlhttp.responseText;
								//alert(xmlhttp.responseText);
								var values=xmlhttp.responseText;
								var spl= values.split(",");
								//alert(spl[0]);
								//alert(spl[1]/2);
								document.getElementById("rate14").value=spl[0];
									document.getElementById("cgst_per_14").value=spl[1]/2;
									document.getElementById("sgst_per_14").value=spl[1]/2;
                  document.getElementById("qty_type14").value=spl[2];
								// var panipatti_rate=document.getElementById("value2").value;
								// //alert(panipatti_rate);
								// var ghar=document.getElementById("gharpatti_kar").value;
								// 	var arogya=document.getElementById("arogya_kar").value;
								// 	var divabatti=document.getElementById("divabatti_kar").value;

								// var total = parseFloat(panipatti_rate) + parseFloat(ghar) + parseFloat(arogya) + parseFloat(divabatti);
								// document.getElementById("akun_kar").value=total
								//alert(total);
								//alert(rate);


						}
				};
				xmlhttp.open("GET","ajaxAll.php?id_goods="+str,true);
				xmlhttp.send();




}
function FetchValues15(str){
	//
	// $district_id=document.getElementById("maalmatta_id").value;
	//
	//alert(str);
//var panipatti_rate;
			if (window.XMLHttpRequest)
			{
						// code for IE7+, Firefox, Chrome, Opera, Safari
						xmlhttp = new XMLHttpRequest();
				}
				else
				{
						// code for IE6, IE5
						xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				}
				xmlhttp.onreadystatechange = function()
				{
						if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
						{
							//alert(xmlhttp.responseText);

							// var json=JSON.parse(xmlhttp.responseText);
							// var rate=json.DATA;

								//document.getElementById("value2").value = xmlhttp.responseText;
								//alert(xmlhttp.responseText);
								var values=xmlhttp.responseText;
								var spl= values.split(",");
								//alert(spl[0]);
								//alert(spl[1]/2);
								document.getElementById("rate15").value=spl[0];
									document.getElementById("cgst_per_15").value=spl[1]/2;
									document.getElementById("sgst_per_15").value=spl[1]/2;
                  document.getElementById("qty_type15").value=spl[2];
								// var panipatti_rate=document.getElementById("value2").value;
								// //alert(panipatti_rate);
								// var ghar=document.getElementById("gharpatti_kar").value;
								// 	var arogya=document.getElementById("arogya_kar").value;
								// 	var divabatti=document.getElementById("divabatti_kar").value;

								// var total = parseFloat(panipatti_rate) + parseFloat(ghar) + parseFloat(arogya) + parseFloat(divabatti);
								// document.getElementById("akun_kar").value=total
								//alert(total);
								//alert(rate);


						}
				};
				xmlhttp.open("GET","ajaxAll.php?id_goods="+str,true);
				xmlhttp.send();




}



</SCRIPT>
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

  
                    
                            <center><h3 class="box-title">Invoice </h3> 
                      
<?php

      //$_SESSION["last_id"] = 0;
      //DB Config
      include 'config.php';
      $query_importer = "SELECT * FROM customer where id_customer='".$_SESSION["customer_id"]."'";
      $result_importer = mysqli_query($conn,$query_importer);
                                
                               echo '
<center>
                               <table width="200px" border=1>
                               <tr>
                               <td><b>BILLED TO</b></td>
                               </tr>
                              <tr>
                              <td>';
if(mysqli_num_rows($result_importer) > 0)
{
    while($row = mysqli_fetch_assoc($result_importer))
    {
        echo $row['customer_name'].',<br>'.$row['customer_address'].',<br>'.$row['customer_mobile_no'].',<br>GST No.:'.$row['customer_GST_NO'];
    }
}
echo '</td></tr></table>
<br>
<form action="bill_2.php" method="POST">
<table><tr><td>
Bill Type :- </td><td><select name="bill_type" id="bill_type" class="form-control" style="width:200px;" required>
 <option value="">---Select Bill Type---</option>
  <option value="1">Credit</option>
   <option value="2">Cash</option>
</select></td>
<td>
&nbsp&nbsp&nbspInvoice Date :-</td><td><input type="date" class="form-control" id="date_id" name="date_id" value="'.date("Y-m-d").'"> </td>
</tr></table>
</center>';


      $query_goods_list = "SELECT * FROM goods ORDER BY goods_name ASC";
      $result_goods = mysqli_query($conn,$query_goods_list);
      $result_goods2 = mysqli_query($conn,$query_goods_list);
      $result_goods3 = mysqli_query($conn,$query_goods_list);
      $result_goods4 = mysqli_query($conn,$query_goods_list);
      $result_goods5 = mysqli_query($conn,$query_goods_list);
      $result_goods6 = mysqli_query($conn,$query_goods_list);
      $result_goods7 = mysqli_query($conn,$query_goods_list);
      $result_goods8 = mysqli_query($conn,$query_goods_list);
      $result_goods9 = mysqli_query($conn,$query_goods_list);
      $result_goods10 = mysqli_query($conn,$query_goods_list);
       $result_goods11 = mysqli_query($conn,$query_goods_list);
      $result_goods12 = mysqli_query($conn,$query_goods_list);
      $result_goods13 = mysqli_query($conn,$query_goods_list);
      $result_goods14 = mysqli_query($conn,$query_goods_list);
      $result_goods15 = mysqli_query($conn,$query_goods_list);
      $result_goods16 = mysqli_query($conn,$query_goods_list);
      $result_goods17 = mysqli_query($conn,$query_goods_list);
      $result_goods18 = mysqli_query($conn,$query_goods_list);
      $result_goods19 = mysqli_query($conn,$query_goods_list);
      $result_goods20 = mysqli_query($conn,$query_goods_list);


echo '<br>

<table border="1"><tr><th rowspan="2">Sr. No</th><th rowspan="2">Goods</th><th rowspan="2">Rate</th><th rowspan="2">Qty.</th><th rowspan="2">Unit</th><th rowspan="2">Total</th><th colspan="2">CGST</th><th colspan="2">SGST</th><th rowspan="2">Taxable Value</th><th rowspan="2">Total</th></tr>
<tr><th>%</th><th>Amount</th><th>%</th><th>Amount</th></tr>


<tr>
<td>1</td>
<td><select name="good1" id="good1" class="form-control" style="width:400px;" onchange="FetchValues(this.value);">
 <option value="0">---Select Goods---</option>';
if(mysqli_num_rows($result_goods) > 0)
{
    while($row = mysqli_fetch_assoc($result_goods))
    {
        echo '<option value="'.$row['id_goods'].'">'.$row['goods_name'].'('.$row['HSN_code'].')</option>';
    }
}
echo '</select></td>

<td><input type="number" step="any" class="form-control" id="rate1" name="rate1"></td>
<td><input type="number" step="any" class="form-control" id="qty1" name="qty1" onkeyup="return CalculateTotal();"></td>
<td><input type="text" class="form-control" id="qty_type1" name="qty_type1"></td>
<td><input type="number" step="any" class="form-control" id="total1" name="total1"></td>
<td><input type="number" step="any" class="form-control" id="cgst_per_1" name="cgst_per_1" onkeyup="return CalculateTax();"></td>
<td><input type="number" step="any" class="form-control" id="cgst_amount1" name="cgst_amount1"></td>
<td><input type="number" step="any" class="form-control" id="sgst_per_1" name="sgst_per_1"></td>
<td><input type="number" step="any" class="form-control" id="sgst_amount1" name="sgst_amount1"></td>
<td><input type="number" step="any" class="form-control" id="taxable_value1" name="taxable_value1"></td>
<td><input type="number" step="any" class="form-control" id="all_total1" name="all_total1"></td>
</tr>

<tr>
<td>2</td>
<td><select name="good2" id="good2" class="form-control" style="width:400px;" onchange="FetchValues2(this.value);">
 <option value="0">---Select Goods---</option>';
if(mysqli_num_rows($result_goods2) > 0)
{
    while($row = mysqli_fetch_assoc($result_goods2))
    {
        echo '<option value="'.$row['id_goods'].'">'.$row['goods_name'].'('.$row['HSN_code'].')</option>';
    }
}
echo '</select></td>

<td><input type="number" step="any" class="form-control" id="rate2" name="rate2"></td>
<td><input type="number" step="any" class="form-control" id="qty2" name="qty2" onkeyup="return CalculateTotal2();"></td>

<td><input type="text" class="form-control" id="qty_type2" name="qty_type2"></td>
<td><input type="number" step="any" class="form-control" id="total2" name="total2"></td>
<td><input type="number" step="any" class="form-control" id="cgst_per_2" name="cgst_per_2" onkeyup="return CalculateTax2();"></td>
<td><input type="number" step="any" class="form-control" id="cgst_amount2" name="cgst_amount2"></td>
<td><input type="number" step="any" class="form-control" id="sgst_per_2" name="sgst_per_2"></td>
<td><input type="number" step="any" class="form-control" id="sgst_amount2" name="sgst_amount2"></td>
<td><input type="number" step="any" class="form-control" id="taxable_value2" name="taxable_value2"></td>
<td><input type="number" step="any" class="form-control" id="all_total2" name="all_total2"></td>
</tr>


<tr>
<td>3</td>
<td><select name="good3" id="good3" class="form-control" style="width:400px;" onchange="FetchValues3(this.value);">
 <option value="0">---Select Goods---</option>';
if(mysqli_num_rows($result_goods3) > 0)
{
    while($row = mysqli_fetch_assoc($result_goods3))
    {
        echo '<option value="'.$row['id_goods'].'">'.$row['goods_name'].'('.$row['HSN_code'].')</option>';
    }
}
echo '</select></td>

<td><input type="number" step="any" class="form-control" id="rate3" name="rate3"></td>
<td><input type="number" step="any" class="form-control" id="qty3" name="qty3" onkeyup="return CalculateTotal3();"></td>
<td><input type="text" class="form-control" id="qty_type3" name="qty_type3"></td>
<td><input type="number" step="any" class="form-control" id="total3" name="total3"></td>
<td><input type="number" step="any" class="form-control" id="cgst_per_3" name="cgst_per_3" onkeyup="return CalculateTax3();"></td>
<td><input type="number" step="any" class="form-control" id="cgst_amount3" name="cgst_amount3"></td>
<td><input type="number" step="any" class="form-control" id="sgst_per_3" name="sgst_per_3"></td>
<td><input type="number" step="any" class="form-control" id="sgst_amount3" name="sgst_amount3"></td>
<td><input type="number" step="any" class="form-control" id="taxable_value3" name="taxable_value3"></td>
<td><input type="number" step="any" class="form-control" id="all_total3" name="all_total3"></td>
</tr>

<tr>
<td>4</td>
<td><select name="good4" id="good4" class="form-control" style="width:400px;" onchange="FetchValues4(this.value);">
 <option value="0">---Select Goods---</option>';
if(mysqli_num_rows($result_goods4) > 0)
{
    while($row = mysqli_fetch_assoc($result_goods4))
    {
        echo '<option value="'.$row['id_goods'].'">'.$row['goods_name'].'('.$row['HSN_code'].')</option>';
    }
}
echo '</select></td>

<td><input type="number" step="any" class="form-control" id="rate4" name="rate4"></td>
<td><input type="number" step="any" class="form-control" id="qty4" name="qty4" onkeyup="return CalculateTotal4();"></td>
<td><input type="text" class="form-control" id="qty_type4" name="qty_type4"></td>
<td><input type="number" step="any" class="form-control" id="total4" name="total4"></td>
<td><input type="number" step="any" class="form-control" id="cgst_per_4" name="cgst_per_4" onkeyup="return CalculateTax4();"></td>
<td><input type="number" step="any" class="form-control" id="cgst_amount4" name="cgst_amount4"></td>
<td><input type="number" step="any" class="form-control" id="sgst_per_4" name="sgst_per_4"></td>
<td><input type="number" step="any" class="form-control" id="sgst_amount4" name="sgst_amount4"></td>
<td><input type="number" step="any" class="form-control" id="taxable_value4" name="taxable_value4"></td>
<td><input type="number" step="any" class="form-control" id="all_total4" name="all_total4"></td>
</tr>


<tr>
<td>5</td>
<td><select name="good5" id="good5" class="form-control" style="width:400px;" onchange="FetchValues5(this.value);">
 <option value="0">---Select Goods---</option>';
if(mysqli_num_rows($result_goods5) > 0)
{
    while($row = mysqli_fetch_assoc($result_goods5))
    {
        echo '<option value="'.$row['id_goods'].'">'.$row['goods_name'].'('.$row['HSN_code'].')</option>';
    }
}
echo '</select></td>

<td><input type="number" step="any" class="form-control" id="rate5" name="rate5"></td>
<td><input type="number" step="any" class="form-control" id="qty5" name="qty5" onkeyup="return CalculateTotal5();"></td>
<td><input type="text" class="form-control" id="qty_type5" name="qty_type5"></td>
<td><input type="number" step="any" class="form-control" id="total5" name="total5"></td>
<td><input type="number" step="any" class="form-control" id="cgst_per_5" name="cgst_per_5" onkeyup="return CalculateTax5();"></td>
<td><input type="number" step="any" class="form-control" id="cgst_amount5" name="cgst_amount5"></td>
<td><input type="number" step="any" class="form-control" id="sgst_per_5" name="sgst_per_5"></td>
<td><input type="number" step="any" class="form-control" id="sgst_amount5" name="sgst_amount5"></td>
<td><input type="number" step="any" class="form-control" id="taxable_value5" name="taxable_value5"></td>
<td><input type="number" step="any" class="form-control" id="all_total5" name="all_total5"></td>
</tr>


<tr>
<td>6</td>
<td><select name="good6" id="good6" class="form-control" style="width:400px;" onchange="FetchValues6(this.value);">
 <option value="0">---Select Goods---</option>';
if(mysqli_num_rows($result_goods6) > 0)
{
    while($row = mysqli_fetch_assoc($result_goods6))
    {
        echo '<option value="'.$row['id_goods'].'">'.$row['goods_name'].'('.$row['HSN_code'].')</option>';
    }
}
echo '</select></td>

<td><input type="number" step="any" class="form-control" id="rate6" name="rate6"></td>
<td><input type="number" step="any" class="form-control" id="qty6" name="qty6" onkeyup="return CalculateTotal6();"></td>
<td><input type="text" class="form-control" id="qty_type6" name="qty_type6"></td>
<td><input type="number" step="any" class="form-control" id="total6" name="total6"></td>
<td><input type="number" step="any" class="form-control" id="cgst_per_6" name="cgst_per_6" onkeyup="return CalculateTax6();"></td>
<td><input type="number" step="any" class="form-control" id="cgst_amount6" name="cgst_amount6"></td>
<td><input type="number" step="any" class="form-control" id="sgst_per_6" name="sgst_per_6"></td>
<td><input type="number" step="any" class="form-control" id="sgst_amount6" name="sgst_amount6"></td>
<td><input type="number" step="any" class="form-control" id="taxable_value6" name="taxable_value6"></td>
<td><input type="number" step="any" class="form-control" id="all_total6" name="all_total6"></td>
</tr>


<tr>
<td>7</td>
<td><select name="good7" id="good7" class="form-control" style="width:400px;" onchange="FetchValues7(this.value);">
 <option value="0">---Select Goods---</option>';
if(mysqli_num_rows($result_goods7) > 0)
{
    while($row = mysqli_fetch_assoc($result_goods7))
    {
        echo '<option value="'.$row['id_goods'].'">'.$row['goods_name'].'('.$row['HSN_code'].')</option>';
    }
}
echo '</select></td>

<td><input type="number" step="any" class="form-control" id="rate7" name="rate7"></td>
<td><input type="number" step="any" class="form-control" id="qty7" name="qty7" onkeyup="return CalculateTotal7();"></td>
<td><input type="text" class="form-control" id="qty_type7" name="qty_type7"></td>
<td><input type="number" step="any" class="form-control" id="total7" name="total7"></td>
<td><input type="number" step="any" class="form-control" id="cgst_per_7" name="cgst_per_7" onkeyup="return CalculateTax7();"></td>
<td><input type="number" step="any" class="form-control" id="cgst_amount7" name="cgst_amount7"></td>
<td><input type="number" step="any" class="form-control" id="sgst_per_7" name="sgst_per_7"></td>
<td><input type="number" step="any" class="form-control" id="sgst_amount7" name="sgst_amount7"></td>
<td><input type="number" step="any" class="form-control" id="taxable_value7" name="taxable_value7"></td>
<td><input type="number" step="any" class="form-control" id="all_total7" name="all_total7"></td>
</tr>


<tr>
<td>8</td>
<td><select name="good8" id="good8" class="form-control" style="width:400px;" onchange="FetchValues8(this.value);">
 <option value="0">---Select Goods---</option>';
if(mysqli_num_rows($result_goods8) > 0)
{
    while($row = mysqli_fetch_assoc($result_goods8))
    {
        echo '<option value="'.$row['id_goods'].'">'.$row['goods_name'].'('.$row['HSN_code'].')</option>';
    }
}
echo '</select></td>

<td><input type="number" step="any" class="form-control" id="rate8" name="rate8"></td>
<td><input type="number" step="any" class="form-control" id="qty8" name="qty8" onkeyup="return CalculateTotal8();"></td>
<td><input type="text" class="form-control" id="qty_type8" name="qty_type8"></td>
<td><input type="number" step="any" class="form-control" id="total8" name="total8"></td>
<td><input type="number" step="any" class="form-control" id="cgst_per_8" name="cgst_per_8" onkeyup="return CalculateTax8();"></td>
<td><input type="number" step="any" class="form-control" id="cgst_amount8" name="cgst_amount8"></td>
<td><input type="number" step="any" class="form-control" id="sgst_per_8" name="sgst_per_8"></td>
<td><input type="number" step="any" class="form-control" id="sgst_amount8" name="sgst_amount8"></td>
<td><input type="number" step="any" class="form-control" id="taxable_value8" name="taxable_value8"></td>
<td><input type="number" step="any" class="form-control" id="all_total8" name="all_total8"></td>
</tr>


<tr>
<td>9</td>
<td><select name="good9" id="good9" class="form-control" style="width:400px;" onchange="FetchValues9(this.value);">
 <option value="0">---Select Goods---</option>';
if(mysqli_num_rows($result_goods9) > 0)
{
    while($row = mysqli_fetch_assoc($result_goods9))
    {
        echo '<option value="'.$row['id_goods'].'">'.$row['goods_name'].'('.$row['HSN_code'].')</option>';
    }
}
echo '</select></td>

<td><input type="number" step="any" class="form-control" id="rate9" name="rate9"></td>
<td><input type="number" step="any" class="form-control" id="qty9" name="qty9" onkeyup="return CalculateTotal9();"></td>
<td><input type="text" class="form-control" id="qty_type9" name="qty_type9"></td>
<td><input type="number" step="any" class="form-control" id="total9" name="total9"></td>
<td><input type="number" step="any" class="form-control" id="cgst_per_9" name="cgst_per_9" onkeyup="return CalculateTax9();"></td>
<td><input type="number" step="any" class="form-control" id="cgst_amount9" name="cgst_amount9"></td>
<td><input type="number" step="any" class="form-control" id="sgst_per_9" name="sgst_per_9"></td>
<td><input type="number" step="any" class="form-control" id="sgst_amount9" name="sgst_amount9"></td>
<td><input type="number" step="any" class="form-control" id="taxable_value9" name="taxable_value9"></td>
<td><input type="number" step="any" class="form-control" id="all_total9" name="all_total9"></td>
</tr>


<tr>
<td>10</td>
<td><select name="good10" id="good10" class="form-control" style="width:400px;" onchange="FetchValues10(this.value);">
 <option value="0">---Select Goods---</option>';
if(mysqli_num_rows($result_goods10) > 0)
{
    while($row = mysqli_fetch_assoc($result_goods10))
    {
        echo '<option value="'.$row['id_goods'].'">'.$row['goods_name'].'('.$row['HSN_code'].')</option>';
    }
}
echo '</select></td>

<td><input type="number" step="any" class="form-control" id="rate10" name="rate10"></td>
<td><input type="number" step="any" class="form-control" id="qty10" name="qty10" onkeyup="return CalculateTotal10();"></td>
<td><input type="text" class="form-control" id="qty_type10" name="qty_type10"></td>
<td><input type="number" step="any" class="form-control" id="total10" name="total10"></td>
<td><input type="number" step="any" class="form-control" id="cgst_per_10" name="cgst_per_10" onkeyup="return CalculateTax10();"></td>
<td><input type="number" step="any" class="form-control" id="cgst_amount10" name="cgst_amount10"></td>
<td><input type="number" step="any" class="form-control" id="sgst_per_10" name="sgst_per_10"></td>
<td><input type="number" step="any" class="form-control" id="sgst_amount10" name="sgst_amount10"></td>
<td><input type="number" step="any" class="form-control" id="taxable_value10" name="taxable_value10"></td>
<td><input type="number" step="any" class="form-control" id="all_total10" name="all_total10"></td>
</tr>


<tr>
<td>11</td>
<td><select name="good11" id="good11" class="form-control" style="width:400px;" onchange="FetchValues11(this.value);">
 <option value="0">---Select Goods---</option>';
if(mysqli_num_rows($result_goods11) > 0)
{
    while($row = mysqli_fetch_assoc($result_goods11))
    {
        echo '<option value="'.$row['id_goods'].'">'.$row['goods_name'].'('.$row['HSN_code'].')</option>';
    }
}
echo '</select></td>

<td><input type="number" step="any" class="form-control" id="rate11" name="rate11"></td>
<td><input type="number" step="any" class="form-control" id="qty11" name="qty11" onkeyup="return CalculateTotal11();"></td>
<td><input type="text" class="form-control" id="qty_type11" name="qty_type11"></td>
<td><input type="number" step="any" class="form-control" id="total11" name="total11"></td>
<td><input type="number" step="any" class="form-control" id="cgst_per_11" name="cgst_per_11" onkeyup="return CalculateTax11();"></td>
<td><input type="number" step="any" class="form-control" id="cgst_amount11" name="cgst_amount11"></td>
<td><input type="number" step="any" class="form-control" id="sgst_per_11" name="sgst_per_11"></td>
<td><input type="number" step="any" class="form-control" id="sgst_amount11" name="sgst_amount11"></td>
<td><input type="number" step="any" class="form-control" id="taxable_value11" name="taxable_value11"></td>
<td><input type="number" step="any" class="form-control" id="all_total11" name="all_total11"></td>
</tr>

<tr>
<td>12</td>
<td><select name="good12" id="good12" class="form-control" style="width:400px;" onchange="FetchValues12(this.value);">
 <option value="0">---Select Goods---</option>';
if(mysqli_num_rows($result_goods12) > 0)
{
    while($row = mysqli_fetch_assoc($result_goods12))
    {
        echo '<option value="'.$row['id_goods'].'">'.$row['goods_name'].'('.$row['HSN_code'].')</option>';
    }
}
echo '</select></td>

<td><input type="number" step="any" class="form-control" id="rate12" name="rate12"></td>
<td><input type="number" step="any" class="form-control" id="qty12" name="qty12" onkeyup="return CalculateTotal12();"></td>
<td><input type="text" class="form-control" id="qty_type12" name="qty_type12"></td>
<td><input type="number" step="any" class="form-control" id="total12" name="total12"></td>
<td><input type="number" step="any" class="form-control" id="cgst_per_12" name="cgst_per_12" onkeyup="return CalculateTax12();"></td>
<td><input type="number" step="any" class="form-control" id="cgst_amount12" name="cgst_amount12"></td>
<td><input type="number" step="any" class="form-control" id="sgst_per_12" name="sgst_per_12"></td>
<td><input type="number" step="any" class="form-control" id="sgst_amount12" name="sgst_amount12"></td>
<td><input type="number" step="any" class="form-control" id="taxable_value12" name="taxable_value12"></td>
<td><input type="number" step="any" class="form-control" id="all_total12" name="all_total12"></td>
</tr>


<tr>
<td>13</td>
<td><select name="good13" id="good13" class="form-control" style="width:400px;" onchange="FetchValues13(this.value);">
 <option value="0">---Select Goods---</option>';
if(mysqli_num_rows($result_goods13) > 0)
{
    while($row = mysqli_fetch_assoc($result_goods13))
    {
        echo '<option value="'.$row['id_goods'].'">'.$row['goods_name'].'('.$row['HSN_code'].')</option>';
    }
}
echo '</select></td>

<td><input type="number" step="any" class="form-control" id="rate13" name="rate13"></td>
<td><input type="number" step="any" class="form-control" id="qty13" name="qty13" onkeyup="return CalculateTotal13();"></td>
<td><input type="text" class="form-control" id="qty_type13" name="qty_type13"></td>
<td><input type="number" step="any" class="form-control" id="total13" name="total13"></td>
<td><input type="number" step="any" class="form-control" id="cgst_per_13" name="cgst_per_13" onkeyup="return CalculateTax13();"></td>
<td><input type="number" step="any" class="form-control" id="cgst_amount13" name="cgst_amount13"></td>
<td><input type="number" step="any" class="form-control" id="sgst_per_13" name="sgst_per_13"></td>
<td><input type="number" step="any" class="form-control" id="sgst_amount13" name="sgst_amount13"></td>
<td><input type="number" step="any" class="form-control" id="taxable_value13" name="taxable_value13"></td>
<td><input type="number" step="any" class="form-control" id="all_total13" name="all_total13"></td>
</tr>


<tr>
<td>14</td>
<td><select name="good14" id="good14" class="form-control" style="width:400px;" onchange="FetchValues14(this.value);">
 <option value="0">---Select Goods---</option>';
if(mysqli_num_rows($result_goods14) > 0)
{
    while($row = mysqli_fetch_assoc($result_goods14))
    {
        echo '<option value="'.$row['id_goods'].'">'.$row['goods_name'].'('.$row['HSN_code'].')</option>';
    }
}
echo '</select></td>

<td><input type="number" step="any" class="form-control" id="rate14" name="rate14"></td>
<td><input type="number" step="any" class="form-control" id="qty14" name="qty14" onkeyup="return CalculateTotal14();"></td>
<td><input type="text" class="form-control" id="qty_type14" name="qty_type14"></td>
<td><input type="number" step="any" class="form-control" id="total14" name="total14"></td>
<td><input type="number" step="any" class="form-control" id="cgst_per_14" name="cgst_per_14" onkeyup="return CalculateTax14();"></td>
<td><input type="number" step="any" class="form-control" id="cgst_amount14" name="cgst_amount14"></td>
<td><input type="number" step="any" class="form-control" id="sgst_per_14" name="sgst_per_14"></td>
<td><input type="number" step="any" class="form-control" id="sgst_amount14" name="sgst_amount14"></td>
<td><input type="number" step="any" class="form-control" id="taxable_value14" name="taxable_value14"></td>
<td><input type="number" step="any" class="form-control" id="all_total14" name="all_total14"></td>
</tr>


<tr>
<td>15</td>
<td><select name="good15" id="good15" class="form-control" style="width:400px;" onchange="FetchValues15(this.value);">
 <option value="0">---Select Goods---</option>';
if(mysqli_num_rows($result_goods15) > 0)
{
    while($row = mysqli_fetch_assoc($result_goods15))
    {
        echo '<option value="'.$row['id_goods'].'">'.$row['goods_name'].'('.$row['HSN_code'].')</option>';
    }
}
echo '</select></td>

<td><input type="number" step="any" class="form-control" id="rate15" name="rate15"></td>
<td><input type="number" step="any" class="form-control" id="qty15" name="qty15" onkeyup="return CalculateTotal15();"></td>
<td><input type="text" class="form-control" id="qty_type15" name="qty_type15"></td>
<td><input type="number" step="any" class="form-control" id="total15" name="total15"></td>
<td><input type="number" step="any" class="form-control" id="cgst_per_15" name="cgst_per_15" onkeyup="return CalculateTax15();"></td>
<td><input type="number" step="any" class="form-control" id="cgst_amount15" name="cgst_amount15"></td>
<td><input type="number" step="any" class="form-control" id="sgst_per_15" name="sgst_per_15"></td>
<td><input type="number" step="any" class="form-control" id="sgst_amount15" name="sgst_amount15"></td>
<td><input type="number" step="any" class="form-control" id="taxable_value15" name="taxable_value15"></td>
<td><input type="number" step="any" class="form-control" id="all_total15" name="all_total15"></td>
</tr>';


// <tr>
// <td>16</td>
// <td><select name="good16" id="good16" class="form-control" style="width:400px;">
//  <option value="0">---Select Goods---</option>';
// if(mysqli_num_rows($result_goods16) > 0)
// {
//     while($row = mysqli_fetch_assoc($result_goods16))
//     {
//         echo '<option value="'.$row['id_goods'].'">'.$row['goods_name'].'('.$row['HSN_code'].')</option>';
//     }
// }
// echo '</select></td>

// <td><input type="number" class="form-control" id="rate16" name="rate16"></td>
// <td><input type="number" class="form-control" id="qty16" name="qty16" onkeyup="return CalculateTotal16();"></td>
// <td><input type="number" class="form-control" id="total16" name="total16"></td>
// <td><input type="number" class="form-control" id="cgst_per_16" name="cgst_per_16" onkeyup="return CalculateTax16();"></td>
// <td><input type="number" class="form-control" id="cgst_amount16" name="cgst_amount16"></td>
// <td><input type="number" class="form-control" id="sgst_per_16" name="sgst_per_16"></td>
// <td><input type="number" class="form-control" id="sgst_amount16" name="sgst_amount16"></td>
// <td><input type="number" class="form-control" id="taxable_value16" name="taxable_value16"></td>
// <td><input type="number" class="form-control" id="all_total16" name="all_total16"></td>
// </tr>


// <tr>
// <td>17</td>
// <td><select name="good17" id="good17" class="form-control" style="width:400px;">
//  <option value="0">---Select Goods---</option>';
// if(mysqli_num_rows($result_goods17) > 0)
// {
//     while($row = mysqli_fetch_assoc($result_goods17))
//     {
//         echo '<option value="'.$row['id_goods'].'">'.$row['goods_name'].'('.$row['HSN_code'].')</option>';
//     }
// }
// echo '</select></td>

// <td><input type="number" class="form-control" id="rate17" name="rate17"></td>
// <td><input type="number" class="form-control" id="qty17" name="qty17" onkeyup="return CalculateTotal17();"></td>
// <td><input type="number" class="form-control" id="total17" name="total17"></td>
// <td><input type="number" class="form-control" id="cgst_per_17" name="cgst_per_17" onkeyup="return CalculateTax17();"></td>
// <td><input type="number" class="form-control" id="cgst_amount17" name="cgst_amount17"></td>
// <td><input type="number" class="form-control" id="sgst_per_17" name="sgst_per_17"></td>
// <td><input type="number" class="form-control" id="sgst_amount17" name="sgst_amount17"></td>
// <td><input type="number" class="form-control" id="taxable_value17" name="taxable_value17"></td>
// <td><input type="number" class="form-control" id="all_total17" name="all_total17"></td>
// </tr>



// <tr>
// <td>18</td>
// <td><select name="good18" id="good18" class="form-control" style="width:400px;">
//  <option value="0">---Select Goods---</option>';
// if(mysqli_num_rows($result_goods18) > 0)
// {
//     while($row = mysqli_fetch_assoc($result_goods18))
//     {
//         echo '<option value="'.$row['id_goods'].'">'.$row['goods_name'].'('.$row['HSN_code'].')</option>';
//     }
// }
// echo '</select></td>

// <td><input type="number" class="form-control" id="rate18" name="rate18"></td>
// <td><input type="number" class="form-control" id="qty18" name="qty18" onkeyup="return CalculateTotal18();"></td>
// <td><input type="number" class="form-control" id="total18" name="total18"></td>
// <td><input type="number" class="form-control" id="cgst_per_18" name="cgst_per_18" onkeyup="return CalculateTax18();"></td>
// <td><input type="number" class="form-control" id="cgst_amount18" name="cgst_amount18"></td>
// <td><input type="number" class="form-control" id="sgst_per_18" name="sgst_per_18"></td>
// <td><input type="number" class="form-control" id="sgst_amount18" name="sgst_amount18"></td>
// <td><input type="number" class="form-control" id="taxable_value18" name="taxable_value18"></td>
// <td><input type="number" class="form-control" id="all_total18" name="all_total18"></td>
// </tr>


// <tr>
// <td>19</td>
// <td><select name="good19" id="good19" class="form-control" style="width:400px;">
//  <option value="0">---Select Goods---</option>';
// if(mysqli_num_rows($result_goods19) > 0)
// {
//     while($row = mysqli_fetch_assoc($result_goods19))
//     {
//         echo '<option value="'.$row['id_goods'].'">'.$row['goods_name'].'('.$row['HSN_code'].')</option>';
//     }
// }
// echo '</select></td>

// <td><input type="number" class="form-control" id="rate19" name="rate19"></td>
// <td><input type="number" class="form-control" id="qty19" name="qty19" onkeyup="return CalculateTotal19();"></td>
// <td><input type="number" class="form-control" id="total19" name="total19"></td>
// <td><input type="number" class="form-control" id="cgst_per_19" name="cgst_per_19" onkeyup="return CalculateTax19();"></td>
// <td><input type="number" class="form-control" id="cgst_amount19" name="cgst_amount19"></td>
// <td><input type="number" class="form-control" id="sgst_per_19" name="sgst_per_19"></td>
// <td><input type="number" class="form-control" id="sgst_amount19" name="sgst_amount19"></td>
// <td><input type="number" class="form-control" id="taxable_value19" name="taxable_value19"></td>
// <td><input type="number" class="form-control" id="all_total19" name="all_total19"></td>
// </tr>



// <tr>
// <td>20</td>
// <td><select name="good20" id="good20" class="form-control" style="width:400px;">
//  <option value="0">---Select Goods---</option>';
// if(mysqli_num_rows($result_goods20) > 0)
// {
//     while($row = mysqli_fetch_assoc($result_goods20))
//     {
//         echo '<option value="'.$row['id_goods'].'">'.$row['goods_name'].'('.$row['HSN_code'].')</option>';
//     }
// }
// echo '</select></td>

// <td><input type="number" class="form-control" id="rate20" name="rate20"></td>
// <td><input type="number" class="form-control" id="qty20" name="qty20" onkeyup="return CalculateTotal20();"></td>
// <td><input type="number" class="form-control" id="total20" name="total20"></td>
// <td><input type="number" class="form-control" id="cgst_per_20" name="cgst_per_20" onkeyup="return CalculateTax20();"></td>
// <td><input type="number" class="form-control" id="cgst_amount20" name="cgst_amount20"></td>
// <td><input type="number" class="form-control" id="sgst_per_20" name="sgst_per_20"></td>
// <td><input type="number" class="form-control" id="sgst_amount20" name="sgst_amount20"></td>
// <td><input type="number" class="form-control" id="taxable_value20" name="taxable_value20"></td>
// <td><input type="number" class="form-control" id="all_total20" name="all_total20"></td>
// </tr>



echo '
<tr>
<td></td>
<td style="text-align:center"><b>TOTAL</b></td>
<td></td>
<td></td>
<td></td>
<td><input type="number" step="any" class="form-control" id="total_t" name="total_t"></td>
<td></td>
<td><input type="number" step="any" class="form-control" id="cgst_amount_t" name="cgst_amount_t"></td>
<td></td>
<td><input type="number" step="any" class="form-control" id="sgst_amount_t" name="sgst_amount_t"></td>
<td><input type="number" step="any" class="form-control" id="taxable_value_t" name="taxable_value_t"></td>
<td><input type="number" step="any" class="form-control" id="all_total_t" name="all_total_t"></td>

</tr>
<tr>
<td></td>
<td style="text-align:center"><b>HAMALI/TRANSPORT</b></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><input type="number" step="any" class="form-control" id="hamali" name="hamali" onkeyup="return CalculateHamali();" required></td>

</tr>

<tr>
<td></td>
<td style="text-align:center"><b>ROUND-OFF</b></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><input type="number" step="any" class="form-control" id="round_off" name="round_off" onkeyup="return CalculateRoundOff();" required></td>

</tr>
<tr>
<td></td>
<td style="text-align:center"><b>GRAND TOTAL</b></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><input type="number" step="any" class="form-control" id="all_total_t_alll" name="all_total_t_alll" required></td>

</tr>

</table>
<br><br>
<input type="submit" value="Generate Bill" id="generate_bill" name="generate_bill" class="btn btn-primary">
<br>
</form>';
?>

 </center>

</body>  
</html>  
