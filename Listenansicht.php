<!DOCTYPE html>
<html lang=en>
<head>
	<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Exam-Overview</title>
		<link rel="manifest" href="/PWA-2022/manifest.json" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link href="/PWA-2022/style.css" rel="stylesheet" />
		<link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
</head>

<body>
	<div class="box">
	<div class="row">
		<h1>Exam Overview – List</h1>
	</div>
<div class="row">
	<p class="add-test">Add a new Exam:</p>
</div>
<form>
	<div class="form-group row">
		<label for="inputName" class="col-sm-2 col-form-label">Name:</label>
		<div class="col-sm-8">
		<input type="text" class="form-control" id="inputEmail3" placeholder="Exam name">
		</div>
	</div>
	<div class="form-group row">
		<label for="inputDate" class="col-sm-2 col-form-label">Date:</label>
		<div class="col-sm-8">
		<input type="date" class="form-control" id="inputDate"></input>
		</div>
	</div>
	<div class="form-group row">
		<label for="inputSubject" class="col-sm-2 col-form-label">Subject:</label>
		<div class="col-sm-8">
		<input type="text" class="form-control" id="inputSubject"></input>
		</div>
	</div>
	<div class="form-group row">
		<label for="inputNotes" class="col-sm-2 col-form-label">Notes:</label>
		<div class="col-sm-8">
		<textarea type="text" class="form-control" id="inputNotes"></textarea>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-sm-8">
		<button type="submit" class="button-sytle">+ Add a new Exam</button>
		</div>
	</div>
</form>


<div class="col-sm-10">
<table id="liste" class=" table klausurenliste">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Date</th>
      <th scope="col">Subject</th>
      <th scope="col">Notes</th>
	  <th scope="col">Editing</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
	  <td><button type="button" class="button-sytle">Bearbeiten</button> <input type="checkbox" name="" id=""> <button type="button" class="button-sytle">Löschen</button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
	  <td>srth</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
	  <td>srth</td>
    </tr>
  </tbody>
</table>
</div>
</div>
</body>

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
