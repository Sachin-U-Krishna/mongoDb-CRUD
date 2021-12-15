<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Mongo CRUD operations</title>
	<style type="text/css">
		body{
			box-sizing: border-box;
			margin: 0;
			padding: 0;
		}
	</style>
</head>
<body>
	<?php include'include.php'; ?>
	<h1 class="pageTitle">Basic Mongo DB Operations</h1>
	<form action="action.php" method="post"> 
		<label for="id">Id</label>
		<input type="number" name="id" id="id" min="1" placeholder="_id"> <br>
		<label for="id">Name</label>
		<input type="text" name="name" id="name" placeholder="Enter Name"> <br>
		<label for="marks">Marks</label>
		<input type="number" name="marks" id="marks" min="0" max="500" placeholder="Enter Marks"> <br>
		
		<input type="submit" value="display" name="display"> 
		<input type="submit" value="insert" name="insert"> 
		<input type="submit" value="delete" name="delete"> 
		<input type="submit" value="replace" name="replace"> 
		<input type="submit" value="update marks" name="update"> 
	</form>
	
</body>
</html>