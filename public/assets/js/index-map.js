$(function(e){
  'use strict'

	$('#vmap').vectorMap({
		map: 'kech',
		backgroundColor: 'transparent',
		color: '#9fceff',
		colors: {
			//marrakech index
			5: '#60adff',
			
		},
		hoverOpacity: 0.7,
		selectedColor: '#666666',
		enableZoom: true,
		showTooltip: true,
		scaleColors: ['#00b9ff','#7550f6'],
		values: sample_data,
		normalizeFunction: 'polynomial'
	});

});