<!DOCTYPE html>
<html lang="en" class="content">

<head>
    <meta charset="utf-8" />
    <meta charset="utf-8" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css"
    />
    <link rel="stylesheet" href="Navigation-Clean.css" />
    <link rel="stylesheet" href="footer.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />  
    <style>

        .content {
            text-align: center;
            align-self: center;
            font-family: Charcoal, sans-serif;
            font-size: 130%;
            margin: 0;
            padding: 0;
            max-width: 100%;
            overflow-x: hidden;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #262626;
            font-size: 20px;
            display: block;
        }

        li a {
            float: right;
            color: white;
            text-align: center;
            padding: 12px 16px;
            text-decoration: none;
        }

        li a:hover {
            background-color: #111;
        }

        header {
            text-align: center;
            /* background-color: #F7F7FF; */
            /* background-color: #F0EFEB; */
            background-color: #F4F1DE;
            /* background-image: linear-gradient(blue, pink); */
            width: 100%;
            margin: 0;
            padding: 0;
        }

        body {
            background-image: linear-gradient(white, white);
            margin: 0;
            width: 100%;
            padding: 0;
            background-repeat: no-repeat;
        }

    </style>
    <title>Competitive Coding Club</title>
</head>
<body>
    <header>
    <?php include('navbar.php')?>
    </header>
    <div style="margin: 20px">
    <!--<iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=Asia%2FKolkata&amp;src=OGE0a281MG5xNTVtYTVzbWh1aGRwNXJwbWFlazQ1bGdAaW1wb3J0LmNhbGVuZGFyLmdvb2dsZS5jb20&amp;color=%23616161&amp;title=Coding%20Contests" style="border:solid 1px #777" width="98%" height="600" frameborder="0" scrolling="no"></iframe>
    -->
    <link href='https://www.planyo.com/libs/fullcalendar-scheduler/lib/fullcalendar.min.css' rel='stylesheet' /><link href='https://www.planyo.com/libs/fullcalendar-scheduler/scheduler.min.css' rel='stylesheet' /><div id='cpcal_planyonet' class='cp_calendar cp_units_30 ' ></div><a title='Calendar powered by Planyo' alt='Calendar powered by Planyo' href='http://www.planyo.net' target='_blank' class='cp_pb'>calendar </a><div id='cp_fetch_cpcal_planyonet' class='cp_fetching' style='position:absolute;left:200px;top:10px;display:none;z-index:999;'><img src='https://www.planyo.com/images/hourglass.gif' /></div><script>
      if(!document.cp_instances) document.cp_instances = new Array(); document.cp_instances.push({'all_views':'custWeek1Res,cust3Week,custMonth', 'def_view':'custMonth', 'time_unit':1440, 'resources':[{"id":"Coding_Contests","title":"Coding Contests","granulation":"1440","click_url":null}], 'resource_id': "Coding_Contests", 'jsonp_url':{url:"https://www.planyo.net/fetch-calendar.php?eh=a21715fc9e0f7cb4296a5a665c91000ef7aee7b7&ih=0d1d5845b0c17b29fb540c8add8cb4b2056e17b9&callback=?", cache: false}, 'timezone':'site', 'tz_offset': 0, 'min_hour':'8:00:00', 'max_hour':'20:00:00', 'open_frame':"_top", 'element_id':'cpcal_planyonet', 'fetching_id':'cp_fetch_cpcal_planyonet', 'lng': 'en'}); document.cp_time_format='HH:mm'; document.cp_title_format='dddd, MMMM Do, YYYY'; document.cp_title_format_short='ddd, MMM Do'; document.cp_s_day="day"; document.cp_s_days="days"; document.cp_s_vert_day="vertical day"; document.cp_s_month="month"; document.cp_s_week="week"; document.cp_s_weeks="weeks"; document.cp_s_agenda="agenda";

      var scr0 = document.createElement('script'); scr0.onload = function () { var scr1 = document.createElement('script'); scr1.onload = function () {var scr2 = document.createElement('script'); scr2.onload = function() {var scr3 = document.createElement('script'); scr3.src = "https://www.planyo.com/embed-schedule.js"; document.head.appendChild(scr3);}; scr2.src = "https://www.planyo.com/libs/fullcalendar/locale/en.js"; document.head.appendChild(scr2);}; scr1.src = "https://www.planyo.com/libs/planyonet-fc.js"; document.head.appendChild(scr1); }; scr0.src = "https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"; document.head.appendChild(scr0); 
    var ele = document.getElementsByClassName('fc-day-grid-event fc-h-event fc-event fc-not-start fc-not-end ev_all ev_resResource_1');
    for (var i = 0; i < ele.length; i++ ) {
        ele[i].style.color = "black";
    }
    </script>
    <link rel='stylesheet' href='https://www.planyo.com/planyonet/planyo.net.css' type='text/css' />
      
    </div>
    <br><br>
    <footer>
    <?php include('footer.php')?>
    </footer>
</body>
</html>
