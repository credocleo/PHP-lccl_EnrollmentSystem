<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/query-ul.min.css" rel="stylesheet">
    </head>

<body>


<center>
<p>La Consolacion College - Lilo-an</br>
	Pblacion, Liloan, Cebu</br>
	</br><b>Grade Sheet</b></br></p></br></center>
</td>
</tr>
</br></br>

<table class="table table-bordered">

<select name="year">
	<?php for($i=2010; $i<2020;$i++)
	{

	?> <option value="<?php echo $i?>"><?php echo $i?>

	<?php } 
	?>

    </select>

<tr>
<th>Student I.D. Number</th>
<th>Name</th>
<th>Prelim</th>
<th>Mid-Term</th>
<th>Pre-Final</th>
<th>Final Grade</th>
<th>Final Rating</th>
</tr>




</table>
</center>

</div>

<script src="js/jquery.js.js"></script>
<script src="js/bootstrap.min.js"></script>



</body>
</html>