<?php $ctr = isset($ctr) ? $ctr : 0; ?>
<link rel="stylesheet" href="<?php echo url::base(FALSE).'media/js/dojo/dojox/calendar/themes/claro/Calendar.css'; ?>">
<script>
var ctr       = '<?php echo $ctr; ?>';

var timesheet        = <?php echo $timesheet; ?>;
var dataTimesheet    = { identifier: 'tim_day',items: timesheet };
var planningData     = <?php echo $shifts; ?>;


require(["dojox/calendar/Calendar","dojo/store/Observable","dojo/store/Memory",
	     "dojo/data/ItemFileReadStore","classes/Data/retrieveData"],

	function(Calendar,Observable,Memory,ItemFileReadStore){

		var storeTimesheet   = new ItemFileReadStore( {data: dataTimesheet });   

		var dayOfWeek        = new Date ().getDay();
		var searchData       = new retrieveData (storeTimesheet,{tim_day : ""+dayOfWeek+""});
		var dataOfFirstDay   = searchData.getData();

		

		var beginHour = dataOfFirstDay[0].tim_day_begin;
		var endHour   = dataOfFirstDay[0].tim_day_end;


		dojo.addOnLoad(function (){

			calendar = new Calendar({
                   dateInterval: "day",
                   style:"width:100%;height:100%",
                   minHours: beginHour,
                   store: new Observable(new Memory({data: planningData})),
				   maxHours: endHour 
                }, "planningToShow"+ctr);
              
          })



		});
</script>
</head>   
<?php i18n::lang(Cache::instance()->get('lang'));?>
<body>


<div  id="planningToShow<?php echo $ctr; ?>">

</div>
</body>
</html>