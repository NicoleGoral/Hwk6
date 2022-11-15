<!DOCTYPE html>
<?php require_once("header.php"); ?>
<html>
<body>

<h1 style="background-color:yellow; text-align:center;">Nicole's Homework 6: JavaScript Libraries</h1>
	
<html>
<script src="https://d3js.org/d3.v4.js"></script>
<body>
<h2>Scatter-Plot</h2>

<svg id="myPlot" style="width:500px;height:400px"></svg>

<script>
// Set Dimensions
const xSize = 400; 
const ySize = 400;
const margin = 40;
const xMax = xSize - margin*2;
const yMax = ySize - margin*2;

// Create Random Points
const numPoints = 50;
const data = [];
for (let i = 0; i < numPoints; i++) {
  data.push([Math.random() * xMax, Math.random() * yMax]);
}

// Append SVG Object to the Page
const svg = d3.select("#myPlot")
  .append("svg")
  .append("g")
  .attr("transform","translate(" + margin + "," + margin + ")");

// X Axis
const x = d3.scaleLinear()
  .domain([0, 400])
  .range([0, xMax]);

svg.append("g")
  .attr("transform", "translate(0," + yMax + ")")
  .call(d3.axisBottom(x));

// Y Axis
const y = d3.scaleLinear()
  .domain([0, 400])
  .range([ yMax, 0]);

svg.append("g")
  .call(d3.axisLeft(y));

// Dots
svg.append('g')
  .selectAll("dot")
  .data(data).enter()
  .append("circle")
  .attr("cx", function (d) { return d[0] } )
  .attr("cy", function (d) { return d[1] } )
  .attr("r", 3)
  .style("fill", "Purple");
</script>

</body>
</html>
