<!DOCTYPE html>
<html>
<head>
    <title>HTML5 Calendar with Day/Week/Month Views (JavaScript, PHP)</title>
	<!-- demo stylesheet -->
    	<link type="text/css" rel="stylesheet" href="media/layout.css" />    

	<!-- helper libraries -->
	<script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
	
	<!-- daypilot libraries -->
        <script src="js/daypilot/daypilot-all.min.js" type="text/javascript"></script>
	
        <style>
            .buttons a {
                text-decoration: none;
                color: black;
                display: inline-block;
                margin-right: 5px;
            }
            .selected-button {
                border-bottom: 2px solid orange;
            }
        </style>
</head>
<body>
        <div id="header">
			<div class="bg-help">
				<div class="inBox">
					<h1 id="logo"><a href='http://code.daypilot.org/27988/html5-calendar-with-day-week-month-views-javascript-php'>HTML5 Calendar with Day/Week/Month Views (JavaScript, PHP)</a></h1>
					<p id="claim"><a href="http://javascript.daypilot.org/">DayPilot for JavaScript</a> - AJAX Calendar/Scheduling Widgets for JavaScript/HTML5/jQuery</p>
					<hr class="hidden" />
				</div>
			</div>
        </div>
        <div class="shadow"></div>
        <div class="hideSkipLink">
        </div>
        <div class="main">
            
            <div style="float:left; width: 160px;">
                <div id="nav"></div>
            </div>
            <div style="margin-left: 160px;">
                <div class="space buttons">
                    <a id="buttonDay" href="#">Day</a>
                    <a id="buttonWeek" href="#">Week</a>
                    <a id="buttonMonth" href="#">Month</a>
                </div>
                <div id="dpDay"></div>
                <div id="dpWeek"></div>
                <div id="dpMonth"></div>
            </div>

            <script type="text/javascript">
                
                
                var nav = new DayPilot.Navigator("nav");
                nav.showMonths = 3;
                nav.skipMonths = 3;
                nav.init();
                               
                var day = new DayPilot.Calendar("dpDay");
                day.viewType = "Day";
                addEventHandlers(day);
                day.init();

                var week = new DayPilot.Calendar("dpWeek");
                week.viewType = "Week";
                addEventHandlers(week);
                week.init();

                var month = new DayPilot.Month("dpMonth");
                addEventHandlers(month);
                month.init();

                function addEventHandlers(dp) {
                    dp.onEventMoved = function (args) {
                        $.post("backend_move.php", 
                                {
                                    id: args.e.id(),
                                    newStart: args.newStart.toString(),
                                    newEnd: args.newEnd.toString()
                                }, 
                                function() {
                                    console.log("Moved.");
                                });
                    };

                    dp.onEventResized = function (args) {
                        $.post("backend_resize.php", 
                                {
                                    id: args.e.id(),
                                    newStart: args.newStart.toString(),
                                    newEnd: args.newEnd.toString()
                                }, 
                                function() {
                                    console.log("Resized.");
                                });
                    };

                    // event creating
                    dp.onTimeRangeSelected = function (args) {
                        var name = prompt("New event name:", "Event");
                        dp.clearSelection();
                        if (!name) return;
                        var e = new DayPilot.Event({
                            start: args.start,
                            end: args.end,
                            id: DayPilot.guid(),
                            resource: args.resource,
                            text: name
                        });
                        dp.events.add(e);

                        $.post("backend_create.php", 
                                {
                                    start: args.start.toString(),
                                    end: args.end.toString(),
                                    name: name
                                }, 
                                function() {
                                    console.log("Created.");
                                });

                    };

                    dp.onEventClick = function(args) {
                        alert("clicked: " + args.e.id());
                    };
                }
                                
                var switcher = new DayPilot.Switcher({
                    triggers: [
                        {id: "buttonDay", view: day },
                        {id: "buttonWeek", view: week},
                        {id: "buttonMonth", view: month}
                    ],
                    navigator: nav,
                    selectedClass: "selected-button",
                    onChanged: function(args) {
                        switcher.events.load("backend_events.php");
                    }
                });
                
                switcher.select("buttonWeek");

            </script>
            
        </div>
        <div class="clear">
        </div>
        
</body>
</html>

