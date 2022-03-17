<!DOCTYPE html>
<html lang=en>
<head>
<link href="/PWA-2022/style.css" rel="stylesheet" />    
</head>

<body>
<h1>Klausurenübersicht als Liste</h1>
<div class="row">
	<p>Füge eine neue Klausur hinzu:</p>
</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<label>Name:</label><input id="name"></input>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-8">
				<label>Datum:</label><input id="datum"type="date"></input>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-8">
				<label>Modul:</label><input id="modul" ></input>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-8">
				<label>Notizen:</label><textarea id="notitzen"></textarea>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-8">
				<button class="add-test" onclick="add()">Hinzufügen</button>
			</div>

<div>
	<table id="liste" class="klausurenliste">
		<thead>
			<th>Name</th>
			<th>Datum</th>
			<th>Modul</th>
			<th>Notizen</th>
			<th>Bearbeitung</th>
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
