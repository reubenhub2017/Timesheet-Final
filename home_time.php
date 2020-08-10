
<html>
<head>
	<title>ECHO Timesheet Admin</title>
<link rel="stylesheet" href="style.css"/>
<script src="//code.jquery.com/jquery-1.10.2.js"></script> 
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

 
  



</head>
<script type="text/javascript">
		
		function getdates(value){
			$.post("home_time_get.php",{partialDate:value},function(data) { 
				$("#results").html(data);
});
			}
		

</script>



<body>
<div id="nav">
	
		<h1><a href="home_time.php">ECHO Timesheet Admin</a></h1>

</div>
<div id="sidebar">
					<center><h1>sidebar</h1></center>
										
<ul class="list">

	<li><a href="">Help</a></li>
	<li>
		<?php 
		echo "<a href='http://www.echoperfect10.org' id='logout'>Logout</a>"
	?>
</li>

</ul></div>

	<div id="container-main">
			<div id="inputresbox"><input type="text"  placeholder="Type the week you want " id="inputresbox" onkeyup="getdates(this.value)"/>
		</div>
		<div id="results">
	
						</div>
			
<center><p>Timesheet version 1.2.0</p></center>	

</div>
		

</body>




</html>
