<?php include("../common/header.html") ?>

<!--feedback.php-->

<body>
	
<?php 
include("../common/banner.php");
include("../common/menu.html");
?>
<div id="outer">
	<script type="text/javascript" src="scripts/validateFeedback.js"></script>
<div class="body">
<h2>Customer Feedback</h2>
<form action="scripts/processFeedback.php" method="post" onsubmit="return validateFeedback();">
	
	<p>Subject: <input type="text" name="subject"></input></p>
	<p>If Regarding a product, please specify which: 
		<?php include("../scripts/listProducts.php"); ?>
	</p>

<div class="comments"> 
<textarea name="message" rows="12" cols="55">Comments...</textarea>
<br />
<hr />
</div>

<h4>Please enter your personal information: <br /></h4>

<table>
	<tr>
		<td><select name="salute">
			<option>Mr</option>
			<option>Mrs</option>
			<option>Ms</option>
			</select>
		</td>
		<td>
			First Name: <input name="firstName" type="text" />
		</td>
		<td>
			Last Name: <input name="lastName" type="text" />
		</td>
	</tr>
	<tr>
		<td> </td>
		<td>
			Email: <input id="email" name="email" type="text" />
		</td>
		<td>
			Phone: <input id="phone" name="phone" type="text" />
		</td>
	</tr>
</table>
<div>		
<p><input type="submit" value="Submit" /><input type="reset" value="Reset" /></p>
</div>
</form>
</div>
</div>
<?php include("../common/footer.html"); ?>


