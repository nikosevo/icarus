/* Add here all your JS customizations */

(function( $ ) {

	"use strict";
	/*
	Flot: Pie Chart
	*/
	(function() {
		var plot = $.plot('#flotPie', flotPieData, {
			series: {
				pie: {
					show: true,
					combine: {
						color: '#999',
						threshold: 0.1
					}
				}
			},
			legend: {
				show: false
			},
			grid: {
				hoverable: true,
				clickable: true
			}
		});
	})();
	/*
	Morris: Bar
	*/
	Morris.Bar({
		resize: true,
		element: 'morrisBar',
		data: morrisBarData,
		xkey: 'y',
		ykeys: ['a', 'b'],
		labels: ['Series A', 'Series B'],
		hideHover: true,
		barColors: ['#0088cc', '#2baab1']
	});

}).apply( this, [ jQuery ]);


