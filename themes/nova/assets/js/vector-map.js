$(function() {
	'use strict';
	$('#vmap').vectorMap({
		map: 'world_en',
		backgroundColor: 'transparent',
		color: '#ffffff',
		hoverOpacity: 0.7,
		selectedColor: '#666666',
		enableZoom: true,
		showTooltip: true,
		scaleColors: ['#673ab6', '#0a1e63'],
		values: sample_data,
		normalizeFunction: 'polynomial'
	});
	$('#vmap2').vectorMap({
		map: 'usa_en',
		showTooltip: true,
		backgroundColor: 'transparent',
		hoverColor: '#0a1e63',
		color: '#0a1e63',
	});
	$('#vmap3').vectorMap({
		map: 'canada_en',
		color: '#0a1e63',
		borderColor: '#fff',
		backgroundColor: 'transparent',
		hoverColor: '#673ab5',
		showLabels: true
	});
	$('#vmap7').vectorMap({
		map: 'germany_en',
		color: '#0a1e63',
		borderColor: '#fff',
		backgroundColor: 'transparent',
		hoverColor: '#0a1e63',
		showLabels: true
	});

	$('#vmap8').vectorMap({
		map: 'russia_en',
		color: '#0a1e63',
		borderColor: '#fff',
		backgroundColor: 'transparent',
		hoverColor: '#0a1e63',
		showLabels: true
	});

	$('#vmap9').vectorMap({
		map: 'france_fr',
		color: '#0a1e63',
		borderColor: '#fff',
		backgroundColor: 'transparent',
		hoverColor: '#0a1e63',
		showLabels: true
	});
});