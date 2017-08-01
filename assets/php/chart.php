<?php
require 'chartdata.php';

?>

<script type="text/javascript">

	/**
	 * Created by Johan on 6/21/2017.
	 */

	/** email statistics pie chart  **/
	google.charts.load('current', {'packages':['corechart']});
	google.charts.load('current', {'packages':['bar']});
	google.charts.setOnLoadCallback(drawChart);

	function drawChart() {
		//Statistics pie chart
		var data = google.visualization.arrayToDataTable([
			['Task', 'Hours per Day'],
			['Open',     <?php echo (int)$open; ?>],
			['Bounce',      <?php echo (int)$bounce; ?>],
			['Unsubscribe',  <?php echo (int)$unsubscribe; ?>]

		]);

		var options = {
			legend: {position: 'none'}
		};

		var chart1 = new google.visualization.PieChart(document.getElementById('piechart'));

		chart1.draw(data, options);

		//behaviours area chart
		var data = google.visualization.arrayToDataTable([
			['Time', 'Open', 'Click', 'Click Second Time'],
			['9:00AM',  <?php echo (int)$Open_9AM; ?>,      <?php echo (int)$Click_9AM; ?>, <?php echo (int)$Uclick_9AM; ?>],
			['10:00AM',  <?php echo (int)$Open_10AM; ?>,      <?php echo (int)$Click_10AM; ?>, <?php echo (int)$Uclick_10AM; ?>],
			['11:00AM',   <?php echo (int)$Open_11AM; ?>,      <?php echo (int)$Click_11AM; ?>, <?php echo (int)$Uclick_11AM; ?>],
			['12:00PM',  <?php echo (int)$Open_12PM; ?>,      <?php echo (int)$Click_12PM; ?>, <?php echo (int)$Uclick_12PM; ?>],
			['1:00PM',   <?php echo (int)$Open_1PM; ?>,      <?php echo (int)$Click_1PM; ?>, <?php echo (int)$Uclick_1PM; ?>],
			['2:00PM',   <?php echo (int)$Open_2PM; ?>,      <?php echo (int)$Click_2PM; ?>, <?php echo (int)$Uclick_2PM; ?>],
			['3:00PM',   <?php echo (int)$Open_3PM; ?>,      <?php echo (int)$Click_3PM; ?>, <?php echo (int)$Uclick_3PM; ?>],
			['4:00PM',   <?php echo (int)$Open_4PM; ?>,      <?php echo (int)$Click_4PM; ?>, <?php echo (int)$Uclick_4PM; ?>]
		]);

		var options = {
			hAxis: {title: ' ',  titleTextStyle: {color: '#fff'}},
			vAxis: {minValue: 0,
				ticks: [0, 100, 200, 300, 400, 500, 1000, 2000]},
			legend: {position: 'none'}
		};

		var chart2 = new google.visualization.AreaChart(document.getElementById('chart_div'));
		chart2.draw(data, options);

		//volume bar chart
		var data = google.visualization.arrayToDataTable([
			['Month', 'Forgot Password', 'Profile Changes', 'Smartcard', 'Verification', 'Welcome'],
			['Jan', <?php echo (int)$jan_sent_password; ?>, <?php echo (int)$jan_sent_changes; ?>,<?php echo (int)$jan_sent_smartcard; ?>,<?php echo (int)$jan_sent_registering; ?>,<?php echo (int)$jan_sent_welcome; ?>],
			['Feb', <?php echo (int)$feb_sent_password; ?>, <?php echo (int)$feb_sent_changes; ?>,<?php echo (int)$feb_sent_smartcard; ?>,<?php echo (int)$feb_sent_registering; ?>,<?php echo (int)$feb_sent_welcome; ?>],
			['Mar', <?php echo (int)$march_sent_password; ?>, <?php echo (int)$march_sent_changes; ?>,<?php echo (int)$march_sent_smartcard; ?>,<?php echo (int)$march_sent_registering; ?>,<?php echo (int)$march_sent_welcome; ?>],
			['Apr', <?php echo (int)$april_sent_password; ?>, <?php echo (int)$april_sent_changes; ?>,<?php echo (int)$april_sent_smartcard; ?>,<?php echo (int)$april_sent_registering; ?>,<?php echo (int)$april_sent_welcome; ?>],
			['Mai', <?php echo (int)$may_sent_password; ?>, <?php echo (int)$may_sent_changes; ?>,<?php echo (int)$may_sent_smartcard; ?>,<?php echo (int)$may_sent_registering; ?>,<?php echo (int)$may_sent_welcome; ?>],
			['Jun', <?php echo (int)$june_sent_password; ?>, <?php echo (int)$june_sent_changes; ?>,<?php echo (int)$june_sent_smartcard; ?>,<?php echo (int)$june_sent_registering; ?>,<?php echo (int)$june_sent_welcome; ?>],
			['Jul', <?php echo (int)$july_sent_password; ?>, <?php echo (int)$july_sent_changes; ?>,<?php echo (int)$july_sent_smartcard; ?>,<?php echo (int)$july_sent_registering; ?>,<?php echo (int)$july_sent_welcome; ?>],
			['Aug', <?php echo (int)$august_sent_password; ?>, <?php echo (int)$august_sent_changes; ?>,<?php echo (int)$august_sent_smartcard; ?>,<?php echo (int)$august_sent_registering; ?>,<?php echo (int)$august_sent_welcome; ?>],
			['Sep', <?php echo (int)$september_sent_password; ?>, <?php echo (int)$september_sent_changes; ?>,<?php echo (int)$september_sent_smartcard; ?>,<?php echo (int)$september_sent_registering; ?>,<?php echo (int)$september_sent_welcome; ?>],
			['Oct', <?php echo (int)$october_sent_password; ?>, <?php echo (int)$october_sent_changes; ?>,<?php echo (int)$october_sent_smartcard; ?>,<?php echo (int)$october_sent_registering; ?>,<?php echo (int)$october_sent_welcome; ?>],
			['Nov', <?php echo (int)$november_sent_password; ?>, <?php echo (int)$november_sent_changes; ?>,<?php echo (int)$november_sent_smartcard; ?>,<?php echo (int)$november_sent_registering; ?>,<?php echo (int)$november_sent_welcome; ?>],
			['Dev', <?php echo (int)$december_sent_password; ?>, <?php echo (int)$december_sent_changes; ?>,<?php echo (int)$december_sent_smartcard; ?>,<?php echo (int)$december_sent_registering; ?>,<?php echo (int)$december_sent_welcome; ?>]
		]);

		var options = {
			hAxis: {title: ' ',  titleTextStyle: {color: '#fff'}},



		};

		var chart3 = new google.charts.Bar(document.getElementById('columnchart_material'));

		chart3.draw(data, google.charts.Bar.convertOptions(options));
	}

</script>
