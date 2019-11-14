<?php
 $val = $json->$userID;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="https://cecieee.org/wp-content/uploads/2018/12/cropped-favicon-32x32.png" sizes="32x32" />
  <link rel="icon" href="https://cecieee.org/wp-content/uploads/2018/12/cropped-favicon-192x192.png" sizes="192x192" />
</head>
<body>
<style>
@charset "UTF-8";
@import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,700);

body {
  font-family: 'Open Sans', sans-serif;
  font-weight: 300;
  line-height: 1.42em;
  color:#A7A1AE;
  background-color:#1F2739;
}

h1 {
  font-size:3em; 
  font-weight: 300;
  line-height:1em;
  text-align: center;
  color: #4DC3FA;
}

h2 {
  font-size:1em; 
  font-weight: 300;
  text-align: center;
  display: block;
  line-height:1em;
  padding-bottom: 2em;
  color: #FB667A;
}

h2 a {
  font-weight: 700;
  text-transform: uppercase;
  color: #FB667A;
  text-decoration: none;
}

.blue { color: #185875; }
.yellow { color: #FFF842; }

.container th h1 {
	  font-weight: bold;
	  font-size: 1em;
  text-align: left;
  color: #185875;
}

.container td {
	  font-weight: normal;
	  font-size: 1em;
  -webkit-box-shadow: 0 2px 2px -2px #0E1119;
	   -moz-box-shadow: 0 2px 2px -2px #0E1119;
	        box-shadow: 0 2px 2px -2px #0E1119;
}

.container {
	  text-align: left;
	  overflow: hidden;
	  width: 80%;
	  margin: 0 auto;
  display: table;
  padding: 0 0 8em 0;
}

.container td, .container th {
	  padding-bottom: 2%;
	  padding-top: 2%;
  padding-left:2%;  
}

/* Background-color of the odd rows */
.container tr:nth-child(odd) {
	  background-color: #323C50;
}

/* Background-color of the even rows */
.container tr:nth-child(even) {
	  background-color: #2C3446;
}

.container th {
	  background-color: #1F2739;
}

.container td:first-child { color: #FB667A; }

.container tr:hover {
   background-color: #464A52;
-webkit-box-shadow: 0 6px 6px -6px #0E1119;
	   -moz-box-shadow: 0 6px 6px -6px #0E1119;
	        box-shadow: 0 6px 6px -6px #0E1119;
}



@media (max-width: 800px) {
.container td:nth-child(4),
.container th:nth-child(4) { display: none; }
}

</style>
<div class="app">
  <main>
    <h1><span class="blue"></span>Certificate<span class="blue"></span> <span class="yellow">Validator</pan></h1>
<table class="container">
	<tbody>
		<tr>
			<td>Name</td>
			<td><?php echo $val[0] ?></td>
		</tr>
		<tr>
			<td>Issued By</td>
			<td>IEEE Students Branch College of Engineering Chengannur</td>
		</tr>
		<tr>
			<td>Role</td>
			
			<td><?php echo $val[1] ?></td>
		</tr>
    <tr>
			<td>Event</td>
			
			<td><?php echo $val[2] ?></td>
		</tr>
	</tbody>
</table>
<h2>Created with love by <a href="" target="_blank">DEVCOM</a></h2>
  </main>
</div>
</body>
</html>
