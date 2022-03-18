<!doctype html>
<html lang="en">
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
	<div class="container">
		<div class="col-m-6">
			<h1>Exam Overview</h1>
			<p>Welcome to your individual exam overview! Here you will never miss a deadline again and always have your exams in view. Have fun using it!</p>
			<button class="button-sytle" id="install">Install this app</button>
			<br>
			<img class="start-picture mx-auto d-block" src="/PWA-2022/image/undraw_Online_calendar.png">
		</div>
	</div>
</body>

<!--Sidebar-->
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

<div>
<button id="enable">Enable the PWA</button>
</div>

<script type="" src="/PWA-2022/dexie.js"></script>
<script src="/PWA-2022/script.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
