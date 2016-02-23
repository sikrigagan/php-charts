<?php
	 // step 1: including fusioncharts php wrapper
	 include("fusioncharts/fusioncharts.php");
	 ?>
  <html>

  <head>
    <title>Create Cool Charts using PHP & FusionCharts</title>

    
    <!-- step 1: including fusioncharts js file -->
    <script type="text/javascript" src="fusioncharts/js/fusioncharts.js"></script>
  </head>

  <body>
    <?php
   // step 2: creating chart object 
			$coolChart = new FusionCharts("bar2d", "myCoolPHPChart" , "100%", "600", "barchart-container", "json",
						'{
								"chart": {
										"caption": "Monthly revenue for Q4 - 2015",
										"xAxisName": "Month",
										"yAxisName": "Revenues (In USD)",
										"yAxisNameFontBold": "0",
										"yAxisNameFontSize": "18",
										"captionFontSize": "25",
										"captionFontColor": "#e9e9e9",
										"captionFontBold": "0",
										"captionPadding": "20",
										"numberPrefix": "$",
										"paletteColors": "#259c5e",
										"bgColor": "#26292B",
										"canvasBgColor": "#26292B",
										"canvasBgAlpha": "100",
										"bgAlpha": "100",
										"borderAlpha": "10",
										"canvasBorderAlpha": "0",
										"usePlotGradientColor": "0",
										"plotBorderAlpha": "10",
										"placeValuesInside": "0",
										"rotatevalues": "1",
										"valueFontColor": "#DDDDDD",
										"baseFontColor": "#DDDDDD",
										"showXAxisLine": "1",
										"baseFontSize": "15",
										"xAxisNameFontBold": "0",
										"xAxisNameFontSize": "18",
										"xAxisLineColor": "#999999",
										"divlineColor": "#999999",
										"divLineIsDashed": "1",
										"showAlternateHGridColor": "0",
										"plotSpacePercent": "10",
										"showHoverEffect": "1",
										"plotFillHoverColor": "#1c7748",
										"plotFillHoverAlpha": "70",
										"toolTipColor": "#DDDDDD",
										"toolTipBorderThickness": "1",
										"toolTipBorderRadius": "3",
										"toolTipPadding": "13",
										"showToolTipShadow": "1",
										"toolTipBgColor": "#000000",
										"toolTipBorderColor": "#DDDDDD",
										"toolTipBorderAlpha": "60",
										"tooltipborderradius": "3",
										"tooltipbgalpha": "50"
								},
								"data": [{
										"label": "Oct",
										"value": "490000"
								}, {
										"label": "Nov",
										"value": "900000"
								}, {
										"label": "Dec",
										"value": "730000"
								}]
						}'
		);

			// step 3: rendering the chart using render method
			$coolChart->render();
		?>
      <center>
        <div id="barchart-container">Cool Chart on its way!</div>
      </center>
  </body>

  </html>