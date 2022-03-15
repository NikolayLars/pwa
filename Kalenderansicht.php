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
    
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/PWA-2022/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="/PWA-2022/css/style.css">    
</head>
<body id="calendar-start">
<h1>Klausurenübersicht als Kalender</h1>
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
				<button class="add-test">+ Add</button>
			</div>

			<div class="content">
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