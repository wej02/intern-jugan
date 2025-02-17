/**
 * Template Name: EON Admin 
 * Author: Spruko Technologies 
 * Email: sprukotechnologies@gmail.com
 * Description: An Admin Bootstrap-4 Dashboard template
 * VectorMap
 */

! function($) {
	"use strict";

	var VectorMap = function() {
	};

	VectorMap.prototype.init = function() {
		//various examples
		$('#world-map-markers').vectorMap({
			map : 'world_mill_en',
			scaleColors : ['#04A8FB', '#871faf'],
			normalizeFunction : 'polynomial',
			hoverOpacity : 0.7,
			hoverColor : false,
			regionStyle : {
				initial : {
					fill : '#e5e9f2'
				}
			},
			 markerStyle: {
                initial: {
                    r: 9,
                    'fill': '#2d66f7',
                    'fill-opacity': 0.9,
                    'stroke': '#fff',
                    'stroke-width' : 9,
                    'stroke-opacity': 0.2
                },

                hover: {
                    'stroke': '#fff',
                    'fill-opacity': 1,
                    'stroke-width': 1.5
                }
            },
			backgroundColor : 'transparent',
			markers : [{
				latLng : [37.0902, -95.7129],
				name : 'United States'
			}, {
				latLng: [12.8797, 121.7740],
        		name: 'Philippines'
			}]
		});


	$('#vmap2').vectorMap({
		map: 'asia_mill',
		showTooltip: true,
		backgroundColor: '#4454c3',
		hoverColor: '#00cccc'
	});
	$('#vmap3').vectorMap({
		map: 'au_mill',
		color: '#212229',
		borderColor: '#fff',
		backgroundColor: '#f72d66',
		hoverColor: '#00cccc',
		showLabels: true
	});
	$('#vmap4').vectorMap({
		map: 'ca_lcc',
		color: '#00cccc',
		borderColor: '#fff',
		backgroundColor: '#2dce89',
		hoverColor: '#00cccc',
		showLabels: true
	});
	
	$('#vmap5').vectorMap({
		map: 'de_mill',
		color: '#3bb001',
		borderColor: '#fff',
		backgroundColor: '#45aaf2',
		hoverColor: '#212229',
		showLabels: true
	});
	
	$('#vmap6').vectorMap({
		map: 'europe_mill_en',
		color: '#dc3545',
		borderColor: '#fff',
		backgroundColor: '#ecb403',
		hoverColor: '#dc3545',
		showLabels: true
	});
	
	$('#vmap7').vectorMap({
		map: 'in_mill',
		color: '#ea614c',
		borderColor: '#fff',
		backgroundColor: '#ff5b51',
		hoverColor: '#ea614c',
		showLabels: true
	});
	
	$('#vmap8').vectorMap({
		map: 'uk_mill_en',
		color: '#3db4ec',
		borderColor: '#fff',
		backgroundColor: '#2bcbba',
		hoverColor: '#3db4ec',
		showLabels: true
	});
	
	$('#vmap9').vectorMap({
		map: 'us_aea_en',
		color: '#f10075',
		borderColor: '#fff',
		backgroundColor: '#1e74a0',
		hoverColor: '#f10075',
		showLabels: true
	});


	},
	//init
	$.VectorMap = new VectorMap, $.VectorMap.Constructor =
	VectorMap
}(window.jQuery),

//initializing
function($) {
	"use strict";
	$.VectorMap.init()
}(window.jQuery);
