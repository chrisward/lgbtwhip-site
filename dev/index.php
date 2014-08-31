<html>
  <head>
    <title>thelgbtwhip</title>
    <link href='http://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css' />
    <script src='jquery-2.1.1.min.js'></script>
    <style>
      body {
        background: #ffffff;
        font-family: 'Josefin Sans', sans-serif;
        color: #555555;
      }
    
      #content {
        background: #f5f5f5;
        width: 700px;
        min-height: 600px;
        border: 1px solid #cccccc;
        margin: auto;
        margin-top: 30px;
        padding: 0 20px 20px 10px;
        line-height: 1.5;
      }
      
      h1 {
        text-align: center;
      }
      
      #hackathonDesc {
        font-weight: bold;
      }
    </style>
    
    <script>
    /*
* Basic Count Down to Date and Time
* Author: @mrwigster / trulycode.com
*/
(function (e) {
	e.fn.countdown = function (t, n) {
	function i() {
		eventDate = Date.parse(r.date) / 1e3;
		currentDate = Math.floor(e.now() / 1e3);
		if (eventDate <= currentDate) {
			n.call(this);
			clearInterval(interval)
		}
		seconds = eventDate - currentDate;
		days = Math.floor(seconds / 86400);
		seconds -= days * 60 * 60 * 24;
		hours = Math.floor(seconds / 3600);
		seconds -= hours * 60 * 60;
		minutes = Math.floor(seconds / 60);
		seconds -= minutes * 60;
		days == 1 ? thisEl.find(".timeRefDays").text("day") : thisEl.find(".timeRefDays").text("days");
		hours == 1 ? thisEl.find(".timeRefHours").text("hour") : thisEl.find(".timeRefHours").text("hours");
		minutes == 1 ? thisEl.find(".timeRefMinutes").text("minute") : thisEl.find(".timeRefMinutes").text("minutes");
		seconds == 1 ? thisEl.find(".timeRefSeconds").text("second") : thisEl.find(".timeRefSeconds").text("seconds");
		if (r["format"] == "on") {
			days = String(days).length >= 2 ? days : "0" + days;
			hours = String(hours).length >= 2 ? hours : "0" + hours;
			minutes = String(minutes).length >= 2 ? minutes : "0" + minutes;
			seconds = String(seconds).length >= 2 ? seconds : "0" + seconds
		}
		if (!isNaN(eventDate)) {
			thisEl.find(".days").text(days);
			thisEl.find(".hours").text(hours);
			thisEl.find(".minutes").text(minutes);
			thisEl.find(".seconds").text(seconds)
		} else {
			alert("Invalid date. Example: 30 Tuesday 2013 15:50:00");
			clearInterval(interval)
		}
	}
	thisEl = e(this);
	var r = {
		date: null,
		format: null
	};
	t && e.extend(r, t);
	i();
	interval = setInterval(i, 1e3)
	}
	})(jQuery);
	$(document).ready(function () {
	function e() {
		var e = new Date;
		e.setDate(e.getDate() + 60);
		dd = e.getDate();
		mm = e.getMonth() + 1;
		y = e.getFullYear();
		futureFormattedDate = mm + "/" + dd + "/" + y;
		return futureFormattedDate
	}
  
  var hackathonBegins = new Date("August 30, 2014 13:00:00"); 
  var hackathonEnds = new Date("August 31, 2014 13:00:00"); 
  
    $("#countdown").countdown({
      date: "31 August 2014 13:00:00", // Change this to your desired date to countdown to
      format: "on"
    });
    
});
    </script>
  </head>
  
  <body>
    <div id="content">
      <h1>the lgbt whip</h1>      
      
      <div id="countdown">
        <span id="hackathonDesc">Hackathon ends in:</span>
        <span class="hours">00</span>
        <span class="timeRefHours">hours</span>
        <span class="minutes">00</span>
        <span class="timeRefMinutes">minutes</span>
        <span class="seconds">00</span>
        <span class="timeRefSeconds">seconds</span>
      </div>
      
      <p>
      Hello there! This doesn't exist yet, but it should certainly do by 1pm tomorrow (Sunday 31st August). It's being developed at <a href="http://www.twitter.com/IntertechLGBT" target="_blank">@IntertechLGBT</a>'s Hackathon at Facebook London later today by <a href="http://www.twitter.com/christopherward" target="_blank">@christopherward</a>, <a href="http://www.twitter.com/mdjward">@mdjward</a>, <a href="http://www.twitter.com/adrianavecc">@adrianavecc</a>, <a href="http://www.twitter.com/pburjanec">@pburjanec</a>, <a href="http://www.twitter.com/chimeren">@chimeren</a> and <a href="http://www.twitter.com/thehereward">@thehereward</a>.
      </p>
      <img src="hackathonteam.jpg" />
      <p>
      In next year's General Election we have a risk of candidates being elected who would vote against LGBT rights or repeal those already hard-won. Whilst those who opposed equal marriage boasted a strong network and focused campaign via established churches across the country, outside of metropolitan areas, the LGBT community is often invisible, fragmented and silent. We want to bring them together for 2015.
      </p>
      
      <p>
      <h3>Primary goal</h3>
      <ul>
        <li>Web app documenting declared candidates, their views on LGBT rights, ways you can contact them, and how they've voted before if an incumbent/past MP.</li>
      </ul>
      
      <h3>Secondary goal</h3>
      <ul>
        <li>Means for candidates to sign in and respond to questions.</li>
        <li>Means for users to sign in and comment/ask questions to candidates.</li>
        <li>Notifications via email to either users or candidates if one or the other comments/responds.</li>
        <li>Details of events in your constituency, e.g. LGBT hustings. Collaboration encouraged between users to organise one.
        <li>Android app, providing the following extra possible functionality...
          <ul>
            <li>Push notifications to candidates/users.</li>
            <li>Utilisation of geo-functionality to find others in your area who are politically active.</li>
          </ul>
        </li>
      </ul>
      
      <h3>Tertiary goal</h3>
      <ul>
        <li>Extend the above to council candidates. Vastly ambitious and certainly won't be achieved by the end of the hackathon.</li>
      </ul>
      
      <p>We intend to have the primary and secondary goals completed by tomorrow. We'll need test users and current Parliamentary candidates to test if you find yourselves at a loose end within the next 24 hours. Please do let us know.</p>
    </div>
  
  
  
  </body>
</html>