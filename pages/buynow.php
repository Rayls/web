<?php include("../common/header.html") ?>

<!-- services.php -->

<body>
	<div id="outer">
<?php 
include("../common/banner.php");
include("../common/menu.html");
?>

		<div class="body">
			<script type="text/javascript" src="scripts/order.js"></script>
  			<form action="" onsubmit="return processOrder();">
<h2> Select the Products You Wish to Purchase</h2>
<div>
		 			 <p>Firearms: 
					 			<select id="gun">
								<option>---NONE---</option>
									 <option>Baker Rifle ($690.00)</option>
									 <option>Early English Trade Gun ($683.75)</option>
									 <option>Doglock Blunderbuss ($710.00)</option>
								</select>
								Qty: <input type="text" id="numGuns" size="2" value="1" />
					 </p>
</div>
<div>					 
					 <p>Swords: 
					 			<select id="sword">
								<option>---NONE---</option>
									<option>British Light Cavalry Saber	($144.00)</option>
									<option>French Briquette Saber ($123.00)</option>
									<option>US Naval Cutlass ($133.27)</option>
								</select>
							Qty: <input type="text" id="numSwords" size="2" value="1" />	
					 </p>
</div>
<div>					 				
			<p>Armor: <br />
			<input type="checkbox" name="Armor" id=
      "Greek" /><label for="Greek">Greek (contact for pricing)</label>
			Qty: <input type="text" id="numGreek" size="2" value="1" /><br /> 
			<input type="checkbox" name=
      "Armor" id="Roman" /><label for="Roman">Roman (contact for pricing)</label>
			Qty: <input type="text" id="numRoman" size="2" value="1" /></p>		
			<p><input type="submit" value="Submit" /><input type="reset" value="Reset" /></p>			
</div>	
</form>
</div>
      	
       
		</div>
		<?php include("../common/footer.html"); ?>
		
	