<!DOCTYPE html>
<html lang=en>
<head>
	<link href="/PWA-2022/style.css" rel="stylesheet" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">    
    <link href="/PWA-2022/fonts/icomoon/style.css" rel="stylesheet">
    <link href="/PWA-2022/fullcalendar/packages/core/main.css" rel="stylesheet">
    <link href="/PWA-2022/fullcalendar/packages/daygrid/main.css" rel="stylesheet">
	<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Exam-Overview</title>
		<link rel="manifest" href="/PWA-2022/manifest.json" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link href="/PWA-2022/style.css" rel="stylesheet" />
		<link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    
</head>
<body id="calendar-start">
<div class="box">
	<div class="row">
		<h1>Exam Overview – Calendar</h1>
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
		<button onclick="add()" class="button-sytle">+ Add a new Exam</button>
		</div>
	</div>
</form>

<div class="content col-sm-10">
    <div id='calendar'></div>
</div>
    
    

    <script src="/PWA-2022/js/jquery-3.3.1.min.js"></script>
    <script src="/PWA-2022/js/popper.min.js"></script>
    <script src="/PWA-2022/js/bootstrap.min.js"></script>

    <script src='/PWA-2022/fullcalendar/packages/core/main.js'></script>
    <script src='/PWA-2022/fullcalendar/packages/interaction/main.js'></script>
    <script src='/PWA-2022/fullcalendar/packages/daygrid/main.js'></script>

    <script>
      document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      plugins: [ 'interaction', 'dayGrid' ],
      defaultDate: '2022-03-12',
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      events: [
        
      ]
    });

    calendar.render();
  });

    </script>

    <script src="/PWA-2022/js/main.js"></script>
</body>

<!-- Sidebar -->
<div id="sidebar">
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
			<span class="nav-text">List View</span>
		</a>
	</li>   

	<li>                                 
		<a href="Kalenderansicht.php">
			<i class="fa fa-calendar"></i>
			<span class="nav-text">Calendar View</span>
		</a>
	</li>   
</nav>
</div>
<script type="" src="/PWA-2022/dexie.js"></script>
<script src="/PWA-2022/kalenderDx.js?t"> </script>