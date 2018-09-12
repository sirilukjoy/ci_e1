<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Calendar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- fullcalendar -->
  <link rel="stylesheet" href="fullcalendar-3.9.0/fullcalendar.css" />
  <script type="text/javascript" src="fullcalendar-3.9.0/lib/jquery.min.js"></script>
  <script type="text/javascript" src="fullcalendar-3.9.0/lib/moment.min.js"></script>
  <script type="text/javascript" src="fullcalendar-3.9.0/fullcalendar.js"></script>
</head>
<body>
<div id="calendar"></div>
<script>
    $(function() {

// page is now ready, initialize the calendar...

$('#calendar').fullCalendar({
  // put your options and callbacks here
  
})
$('#calendar').fullCalendar({
  weekends: false // will hide Saturdays and Sundays
})
$('#calendar').fullCalendar({
  dayClick: function() {
    alert('a day has been clicked!');
  }
})
});
    </script>

</body>
</html>