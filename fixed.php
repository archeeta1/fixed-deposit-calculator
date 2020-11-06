<html>
<head>
<meta charset="utf-8">
<title>Fixed Calculator</title>
<link rel="stylesheet" type="text/css" href="fix.css">

</head>
<body style ="display: contents;">


<h1>Welcome to Fixed Deposit Calculator</h1>


<div class="fixed">
<form id="Fixed Deposit calculation" method="post" >
<label for="invest">enter your investment:</label>
<input type="number" min="0" oninput="if(value.length>16)value=value.slice(0,16)" class="form-fixed" name="invest" required value style="color:blue;display: table-header-group;= "<?php if(isset($_POST['invest'])){echo $_POST['invest'];}?>" /> 
<br>
<label for="interest">enter your interest rate:</label>
<input type = "number" min="0" oninput="if(value.length>4)value=value.slice(0,4)" class="form-fixed" step = "0.01" name = "interest" required value style="color:blue;display: table-header-group; = "<?php if(isset($_POST['interest'])){echo $_POST['interest'];}?>" />
<br>
<label for="time">enter your time in years:</label>
<input type = "number" min="0" oninput="if(value.length>4)value=value.slice(0,4)"  step = "0.01" class="form-fixed" name = "time" required value style="color:blue;display: table-header-group; = "<?php if(isset($_POST['time'])){echo $_POST ['time'];}?>" /> 
<br>

<label><h3 style="color:black;">Compounding Frequency  : </h3></label>
<label style="color:black;text-transform: uppercase;">Select timely:</label>

           <select name = 'freq'style="text-transform: uppercase" >
		    <option value="quarterly" <?php if(isset($_POST['freq'])&&($_POST['freq'] == 'quarterly')){ echo ' selected="selected"'; } ?>>Quarterly</option>
			<option value="annually"<?php if(isset($_POST['freq'])&&($_POST['freq'] == 'annually')){ echo ' selected="selected"'; } ?>>Annually</option>
			 <option value="Half-yearly"<?php if(isset($_POST['freq'])&&($_POST['freq'] == 'Half-yearly')){ echo ' selected="selected"'; } ?>>Half-yearly</option>
              
            </select>

 <br><br>
<input type ="submit"  class="form-fixed submit" name ="submit" value = "submit" /><br/>
 <br><br>

 </form>
 
</div>
</body>
</html>

<div class="form-fixed">
<?php
if($_POST)
{
		
		$p = $_POST['invest'];
		$r = $_POST['interest'];
		$t = $_POST['time'];
		$f = $_POST['freq'];
		 
	   
	  
	if($f=='quarterly')
	{
		
		$maturity = $p * (pow(1 +$r/400,4 * $t));
		echo "maturity is " . $maturity ;
		
		
	}
	else if($f=='Half-yearly')
	{
		
		$mature = $p * (pow(1 +$r/200,2 * $t));
		echo "maturity is " . $mature ;
		
	}
	else if($f=='annually')
	{
		
		$maturities = $p * (pow(1 +$r/100,1 * $t));
		echo  "maturity is " . $maturities ;
	}
	else
	{
		echo "invalid";
	}
	
	
}




?>
</div>

<div class ="text-data">
<h1>Frequently Asked Questions</h1>
<hr>
<h3>Fixed Deposit Calculator Online</h3>
<p>A fixed deposit (FD) is a type of term investment offered by several banks and NBFCs. These deposits typically offer a higher rate of interest, subject to certain terms and conditions. The amount you deposit in an FD is locked for a predetermined period which can vary between 7 days and 10 years.
The interest rate for FDs is fixed at the time of opening the deposit and independent of any fluctuations in the market. Some financial institutions even allow one to break their FDs prematurely on paying a certain penalty fee. An FD calculator can be used to determine the interest and the amount that it will accrue at the time of maturity.</p>
<br><br>
<h3>How can an FD calculator help you?</h3>
<p>Calculating the maturity amount of an FD can be a complicated and time-consuming process. An online FD calculator enables one to figure it without breaking a sweat.
<li>FD maturity calculations are complex involving multiple variables. An FD deposit calculator does all the hard work and gives you the accurate figures just at the click of a button.</li>
<li>It helps you save a lot of time on these complex calculations.</li>
<li>A fixed deposit return calculator enables you to compare the maturity amount and interest rates of FDs offered by different financial institutions. You can make an informed decision when you have all the figures at your disposal.</li></p>
<br><br>
<h3>Here’s the FD Calculation Formula:</h3>
<p>A=P(1+r/n)^n*t
Where
<li>A is maturity amount</li>
<li>P is principal amount</li>
<li>r is rate of interest</li>
<li>t is number of years</li>
<li>n is compounded interest frequency</li>
</p>





</div>