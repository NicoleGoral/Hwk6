<?php require_once("header.php"); ?>
<!DOCTYPE html>
<html>
  
<h1 style="background-color:yellow; text-align:center;">Nicole's Homework 6: JavaScript Libraries</h1>
  
<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>

<body>
<div id="myPlot" style="width:100%;max-width:700px"></div>

<script>
data = [
  {
    type: "scatterpolar",
    mode: "lines",
    r: [0, 1.5, 1.5, 0, 2.5, 2.5, 0],
    theta: [0, 10, 25, 0, 205, 215, 0],
    fill: "toself",
    fillcolor: '#709BFF',
    line: {
      color: 'black'
    }
  },
  {
    type: "scatterpolar",
    mode: "lines",
    r: [0, 3.5, 3.5, 0],
    theta: [0, 55, 75, 0],
    fill: "toself",
    fillcolor: '#E4FF87',
    line: {
      color: 'black'
    }
  },
  {
    type: "scatterpolar",
    mode: "lines",
    r: [0, 4.5, 4.5, 0, 4.5, 4.5, 0],
    theta: [0, 100, 120, 0, 305, 320, 0],
    fill: "toself",
    fillcolor: '#FFAA70',
    line: {
      color: 'black'
    }
  },
  {
    type: "scatterpolar",
    mode: "lines",
    r: [0, 4, 4, 0],
    theta: [0, 165, 195, 0],
    fill: "toself",
    fillcolor: '#FFDF70',
    line: {
      color: 'black'
    }
  },
  {
    type: "scatterpolar",
    mode: "lines",
    r: [0, 3, 3, 0],
    theta: [0, 262.5, 277.5, 0],
    fill: "toself",
    fillcolor: '#B6FFB4',
    line: {
      color: 'black'
    }
  }
]

layout = {
  polar: {
    radialaxis: {
      visible: true,
      range: [0, 5]
    }
  },
  showlegend: false
}

Plotly.newPlot('myPlot', data, layout)

</script>

</body>
</html>
