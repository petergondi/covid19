            
<style>
#chartdiv1,#chartdiv2 {
  width: 100%;
  height: 250px;
  margin-top:0px;
  background-color:#212327;
}


</style>
<!-- Resources -->
<script src="http://covid19.assets.co.ke/js/core.js"></script>
<script src="http://covid19.assets.co.ke/js/charts.js'"></script>
<script src="http://covid19.assets.co.ke/js/datavitz.js"></script>
<script src="http://covid19.assets.co.ke/js/animated.js"></script>
<div  class="sidebar">
    <div style="background-color:#212327;border-style: double;" class="sidebar-wrapper">
    
            <div class="panel panel-primary">
  <div style="color:white;" class="panel-heading text-center"><strong><u>Gender  Infection</u></strong></div>
  <div id="chartdiv1"></div>
</div>
<div class="panel panel-primary">
  <div style="color:white;" class="panel-heading text-center "><strong><u>Top Counties</u></strong></div>
  <div id="chartdiv2"></div>
</div> 
    </div>
</div>

<!-- Chart code -->
<script>
am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_dataviz);
am4core.useTheme(am4themes_animated);
// Themes end

// Create chart instance
var chart1 = am4core.create("chartdiv1", am4charts.PieChart);

// Add data
chart1.data = [{
  "gender": "Male",
  "total": 168
}, {
  "gender": "Female",
  "total": 128
}];

// Add and configure Series
var pieSeries = chart1.series.push(new am4charts.PieSeries());
pieSeries.dataFields.value = "total";
pieSeries.dataFields.category = "gender";
pieSeries.innerRadius = am4core.percent(50);
pieSeries.ticks.template.disabled = true;
pieSeries.labels.template.disabled = true;

var rgm = new am4core.RadialGradientModifier();
rgm.brightnesses.push(-0.8, -0.8, -0.5, 0, - 0.5);
pieSeries.slices.template.fillModifier = rgm;
pieSeries.slices.template.strokeModifier = rgm;
pieSeries.slices.template.strokeOpacity = 0.4;
pieSeries.slices.template.strokeWidth = 0;

chart1.legend = new am4charts.Legend();
chart1.legend.position = "bottom";

}); // end am4core.ready()

am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end

// Create chart instance
var chart2 = am4core.create("chartdiv2", am4charts.XYChart3D);
//chart2.paddingBottom = 30;
//chart2.angle = 35;

// Add data
chart2.data = [{
  "county": "Nairobi",
  "total": 202
}, {
  "county": "Mombasa",
  "total": 77
}, {
  "county": "Kilifi",
  "total": 8
}, {
  "county": "Mandera",
  "total": 8
}, {
  "county": "Kiambu",
  "total": 5
}, {
  "county": "Kajiado",
  "total": 3
}];

// Create axes
var categoryAxis = chart2.xAxes.push(new am4charts.CategoryAxis());
categoryAxis.dataFields.category = "county";
categoryAxis.renderer.labels.template.rotation = 270;
categoryAxis.renderer.labels.template.hideOversized = false;
categoryAxis.renderer.minGridDistance = 20;
categoryAxis.renderer.labels.template.horizontalCenter = "right";
categoryAxis.renderer.labels.template.verticalCenter = "middle";
categoryAxis.tooltip.label.rotation = 270;
categoryAxis.tooltip.label.horizontalCenter = "right";
categoryAxis.tooltip.label.verticalCenter = "middle";



let labelTemplate = categoryAxis.renderer.labels.template;
labelTemplate.rotation = -90;
labelTemplate.horizontalCenter = "left";
labelTemplate.verticalCenter = "middle";
labelTemplate.dy = 10; // moves it a bit down;
labelTemplate.inside = false; // this is done to avoid settings which are not suitable when label is rotated

var valueAxis = chart2.yAxes.push(new am4charts.ValueAxis());
valueAxis.renderer.grid.template.disabled = true;

var series = chart2.series.push(new am4charts.ColumnSeries3D());
series.dataFields.valueY = "total";
series.dataFields.categoryX = "county";
series.name = "county";
series.tooltipText = "{categoryX}: [bold]{valueY}[/]";
series.columns.template.fillOpacity = .8;

var columnTemplate = series.columns.template;
columnTemplate.strokeWidth = 2;
columnTemplate.strokeOpacity = 1;
columnTemplate.stroke = am4core.color("#FFFFFF");

columnTemplate.adapter.add("fill", function(fill, target) {
  return chart2.colors.getIndex(target.dataItem.index);
})

columnTemplate.adapter.add("stroke", function(stroke, target) {
  return chart2.colors.getIndex(target.dataItem.index);
})

chart2.cursor = new am4charts.XYCursor();
chart2.cursor.lineX.strokeOpacity = 0;
chart2.cursor.lineY.strokeOpacity = 0;
}); // end am4core.ready()
</script>
<!-- HTML -->

           
