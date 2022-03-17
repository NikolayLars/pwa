<!DOCTYPE html>
<html lang=en>
<head>
<link href="/PWA-2022/style.css" rel="stylesheet" />    
</head>

<body>
<h1>Exam Overview – List</h1>
<div class="row">
	<p>Add a new Exam:</p>
</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<label>Name:</label><input></input>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-8">
				<label>Date:</label><input type="date"></input>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-8">
				<label>Module:</label><input></input>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-8">
				<label>Notes:</label><textarea></textarea>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-8">
				<button class="add-test">+ Add new Exam</button>
			</div>

<div>
	<table id="liste" class="klausurenliste">
		<thead>
			<th>Name</th>
			<th>Date</th>
			<th>Module</th>
			<th>Notes</th>
			<th>Adaptation</th>
		</thead>
		<tr>
			<td>Test</td>
			<td>18.03.2022</td>
			<td>T6 Fortgeschrittene Web-Entwicklung</td>
			<td>-</td>
			<td><button type="button" class="btn btn-primary">Bearbeiten</button> <input type="checkbox" name="" id=""> <button type="button" class="btn btn-primary">Löschen</button></td>
		</tr>
	</table>
</div>
<script type="" src="/PWA-2022/dexie.js"></script>
			<script src="/PWA-2022/listScript.js"></script>
<!-- Sidebar -->
<nav class="main-menu">
<div>
	<a class="logo" href="http://startific.com">
    </a> 
</div> 
<div class="scrollbar" id="style-1">
<ul>	 
	<li>                                   
		<a href="index.php">
			<i class="fa fa-home"></i>
			<span class="nav-text">Home</span>
		</a>
	</li>   
   
	<li>                                 
		<a href="Listenansicht.php">
			<i class="fa fa-list"></i>
			<span class="nav-text">Listenansicht</span>
		</a>
	</li>   

	<li>                                 
		<a href="Kalenderansicht.php">
			<i class="fa fa-calendar"></i>
			<span class="nav-text">Kalenderansicht</span>
		</a>
	</li>   
</nav>
