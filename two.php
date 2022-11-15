<?php require_once("header.php"); ?>
<!DOCTYPE html>
<html>
         
<h1 style="background-color:yellow; text-align:center;">Nicole's Homework 6: JavaScript Libraries</h1>
         
<script src="https://plotly.com/javascript/box-plots/"></script>

<body>
<div id="myPlot" style="width:100%;max-width:700px"></div>

<script>
var trace1 = {
  x: [1, 2, 3, 4, 4, 4, 8, 9, 10],
  type: 'box',
  name: 'Set 1'
};

var trace2 = {
  x: [2, 3, 3, 3, 3, 5, 6, 6, 7],
  type: 'box',
  name: 'Set 2'
};

var data = [trace1, trace2];

var layout = {
  title: 'Horizontal Box Plot'
};

Plotly.newPlot('myPlot', data, layout);
</script>

</body>
</html>
