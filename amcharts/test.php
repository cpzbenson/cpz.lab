<script src="http://www.amcharts.com/lib/amcharts.js" type="text/javascript"></script>
<div id="chartdiv" style="width: 700px; height: 362px;"></div>

<script>
	var chart;

var chartData = [
{
    values: 99,
    value: 7},
{
    values: 100,
    value: 8},
{
    values: 101,
    value: 12},
{
    values: 99,
    value: 7},
{
    values: 102,
    value: 8},
{
    values: 103,
    value: 12},
	{
    values: 104,
    value: 7},
{
    values: 105,
    value: 8},
{
    values: 106,
    value: 12}
	];


AmCharts.ready(function() {
    // SERIAL CHART        
    chart = new AmCharts.AmSerialChart();
    chart.pathToImages = "http://www.amcharts.com/lib/images/";
    chart.dataProvider = chartData;
	chart.fontSize=16;
    chart.marginTop = 0;
    chart.marginRight = 10;
    chart.autoMarginOffser = 0;
    chart.categoryField = "values";


    // AXES
    // category
    var categoryAxis = chart.categoryAxis;
    categoryAxis.parseDates = false; // as our data is date-based, we set parseDates to true
    categoryAxis.minPeriod = "DD"; // our data is daily, so we set minPeriod to DD                 
    categoryAxis.gridAlpha = 0.10;
    categoryAxis.axisAlpha = 0;
    categoryAxis.inside = true;

    // value
    var valueAxis = new AmCharts.ValueAxis();
    valueAxis.tickLength = 0;
    valueAxis.axisAlpha = 0;
    valueAxis.gridAlpha = 0;
    valueAxis.showFirstLabel = false;
    valueAxis.showLastLabel = false;
    chart.addValueAxis(valueAxis);

    // GRAPH
    var graph = new AmCharts.AmGraph();
    graph.dashLength = 3;
    graph.lineColor = "#5475d3";
    graph.valueField = "value";
    graph.dashLength = 3;
    graph.bullet = "round";
    chart.addGraph(graph);

    // CURSOR
    var chartCursor = new AmCharts.ChartCursor();
    chart.addChartCursor(chartCursor);

    // SCROLLBAR
    var chartScrollbar = new AmCharts.ChartScrollbar();
    chart.addChartScrollbar(chartScrollbar);



    // WRITE
    chart.write("chartdiv");
});
</script>