<!DOCTYPE html>
<? if (!$view) $view="season"; ?>
<!-- comment1: add viewport to metadata -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<head>
 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://d3js.org/d3.v4.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/d3-annotation/2.1.0/d3-annotation.independent.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/d3-annotation/2.1.0/d3-annotation.independent.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/d3-annotation/2.1.0/d3-annotation.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/d3-annotation/2.1.0/d3-annotation.min.js"></script>
       
<link rel="stylesheet" type="text/css" href="http://lorrainesawicki.com/projects/british-baking-technical-challenge/skills.css">
<link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
</head>

<body>
  <a href="">By Theme</a>
  <button id="by-egg" name="by-egg">By Egg</button>
  <a href="">By Episode</a>
  <button id="tester">Tester Button</button>
  <div id="scaling-svg-container">
<!--  <div id="container">
    <svg width="700" height="1000" id="chart-experience" viewBox="0 0 700 1000" preserveAspectRatio="xMidYMid meet"></svg>-->
<? 
  if($view == "season") { 
?>
    <svg width="800" height="1000" class="scaling-svg" viewBox="0 0 900 1000" preserveAspectRatio="xMidYMid meet"></svg>
<?
  elseif ($view == "egg") {
?>
    <svg width="700" height="1000" class="scaling-svg" viewBox="0 0 700 1000" preserveAspectRatio="xMidYMid meet"></svg>
<?
  } else {
?>
    <svg class="scaling-svg" viewBox="0 0 900 1000" preserveAspectRatio="xMidYMid meet"></svg>
<?
  }
?>
  </div>
</body>

<script>
/* works, but not sure where to put it right now*/
$(document).ready(function(){
  $('#by-egg').click(function() {
      d3.selectAll(".link")
          .style("stroke-opacity", "0");

      d3.selectAll(".node--internal")
          .transition()
          .duration(1200)
          .style("opacity", "0")
          .remove();

  //        addToList();

      d3.selectAll(".node--leaf")
          .append("rect")
          .attr("class","shadow")
          .style("fill", function (d) {return d.data.color;})
          .attr("width", 2)
          .attr("height", 4)
          .attr("rx", 2)
          .attr("ry", 2)
          .transition()
              .duration(2500)
              .attr("width", function (d) {return xScale(d.data.numeggs);}); 
      });

  $('#tester').click(function() {

        d3.selectAll(".node--leaf")
          .filter( function(d) { return d.data.numeggs == 0; })
//          .ascending(function(d) { return d.data.numeggs;})
          .append("rect")
          .style("fill", function (d) {return d.data.color;})
          .attr("width", 2)
          .attr("height", 4)
          .attr("rx", 2)
          .attr("ry", 2)
          .transition()
              .duration(2500)
              .attr("width", function (d) {return xScale(d.data.numeggs);}); 
    
   });

});


/*function addToList() {

  for (var egg = 0; egg < numEggs.length; egg++){
    console.log("hi");
    console.log("data egg:" + dataEgg);
    if (dataEgg == egg)
      console.log("we have an egg!" +egg);
  }
}*/


    // main svg
    var svg = d3.select("svg"),
            width = +svg.attr("width"),
            height = +svg.attr("height"),
            g = svg.append("g").attr("transform", "translate(60,0)");       // move right 20px.

    // x-scale and x-axis for measuring something (like number of eggs, which season)
    var numEggs = ["eggs", "1","2","3","4","5","6","7","8","9","10","11","12","13","14"];
    var formatNumEggs = function (d) {
        return numEggs[d % 15];
    }


    var xScale = d3.scaleLinear()
            .domain([0, 15])
            .range([0, 410]);

    var yScale =  d3.scaleLinear()
            .domain([0, 1])
            .range([0, 10]);

    var xAxis = d3.axisTop()
            .scale(xScale)
            .ticks(15)
            .tickFormat(formatNumEggs);


    // Setting up a way to handle the data
    var tree = d3.cluster()                 // This D3 API method setup the Dendrogram datum position.
            .size([height, width - 460])    // Total width - bar chart width = Dendrogram chart width
            .separation(function separate(a, b) {
                return a.parent == b.parent            // 2 levels tree grouping for category
                || a.parent.parent == b.parent
                || a.parent == b.parent.parent ? 0.4 : 0.8;
            });

    var stratify = d3.stratify()            // This D3 API method gives cvs file flat data array dimensions.
            .parentId(function(d) { return d.id.substring(0, d.id.lastIndexOf(".")); });

/* read in the data */
    d3.csv("themedata.csv", row, function(error, data) {
        if (error) throw error;

 //save the info on eggs to use later if needed
        var egg_array = [];
        console.log("data" + data);
        console.log("row" + row);

        var root = stratify(data);
        tree(root);

/* create annotations for the data */
/* begin annotation code */
const type = d3.annotationLabel

const annotations = [{
  note: {
    label: "Longer text to show text wrapping",
    title: "Annotations :)"
  },
  //can use x, y directly instead of data
  //data: { date: "18-Sep-09", close: 185.02 },
  dy: 250,
  dx: 400
}]

const parseTime = d3.timeParse("%d-%b-%y")
const timeFormat = d3.timeFormat("%d-%b-%y")

//Skipping setting domains for sake of example
const x = d3.scaleTime().range([0, 800])
const y = d3.scaleLinear().range([300, 0])

const makeAnnotations = d3.annotation()
  .editMode(true)
  .type(type)
  //accessors & accessorsInverse not needed
  //if using x, y in annotations JSON
  .accessors({
    x: d => x(parseTime(d.date)),
    y: d => y(d.close)
  })
  .accessorsInverse({
     date: d => timeFormat(x.invert(d.x)),
     close: d => y.invert(d.y)
  })
  .annotations(annotations)

        // Draw every datum a line connecting to its parent.
        var link = g.selectAll(".link")
                .data(root.descendants().slice(1))
                .enter().append("path")
                .attr("class", "link")
                .attr("d", function(d) {
                    return "M" + d.y + "," + d.x
                            + "C" + (d.parent.y + 100) + "," + d.x
                            + " " + (d.parent.y + 100) + "," + d.parent.x
                            + " " + d.parent.y + "," + d.parent.x;
                });

        // Setup position for every datum; Applying different css classes to parents and leafs.
        var node = g.selectAll(".node")
                .data(root.descendants())
                .enter().append("g")
                .attr("class", function(d) { return "node" + (d.children ? " node--internal" : " node--leaf"); })
                .attr("transform", function(d) { return "translate(" + d.y + "," + d.x + ")"; });

        // Setup G for every leaf datum.
        var leafNodeG = g.selectAll(".node--leaf")
                .append("circle")
                .attr("class", "recipe-circle")
                .style("fill", function (d) {return d.data.color;})
                .attr("r", 5);

        var leafNodeG = g.selectAll(".node--leaf")
                .append("text")
                .attr("dy", 5)
                .attr("x", 8)
                .style("text-anchor", "start")
                .text(function (d) {
                    return d.data.id.substring(d.data.id.lastIndexOf(".") + 1);
                });

        var leafNodeG = g.selectAll(".node--leaf")
                .append("g")
                .attr("class", "annotation-group")
                .call(makeAnnotations); ///LMS! this makes the annotation show up. Figure out how.


//                .append("g")
//                .attr("class", "node--leaf-g")
//                .attr("transform", "translate(" + 8 + "," + -13 + ")");
//                .style("fill", function (d) {return d.data.color;});

        // Write down text for every parent datum
        var internalNode = g.selectAll(".node--internal");
        internalNode.append("text")
                .attr("y", 2)
                .style("text-anchor", "middle")
                .text(function (d) {
//                    return d.data.id.substring("<a href=" + d.data.id.lastIndexOf(".") + ">Recipe</a>");
                    return d.data.id.substring(d.data.id.lastIndexOf(".") + 1);
                });

        // Attach axis on top of the first leaf datum.
/*
        var firstEndNode = g.select(".node--leaf");
            firstEndNode.insert("g")
                    .attr("class","xAxis")
                    .attr("transform", "translate(" + 7 + "," + -14 + ")")
                    .call(xAxis);

            // tick mark for x-axis
            firstEndNode.insert("g")
                    .attr("class", "grid")
                    .attr("transform", "translate(7," + (height - 15) + ")")
                    .call(d3.axisBottom()
                            .scale(xScale)
                            .ticks(5)
                            .tickSize(-height, 0, 0)
                            .tickFormat("")
                    );

        // Emphasize the y-axis baseline.
        svg.selectAll(".grid").select("line")
                .style("stroke-dasharray","20,1")
                .style("stroke-linecap", "round")
                .style("stroke","black");
*/

        // Animation functions for mouse on and off events.
        d3.selectAll(".node--leaf-g")
                .on("mouseover", handleMouseOver)
                .on("mouseout", handleMouseOut);

        function handleMouseOver(d) {
            var leafG = d3.select(this);

//            leafG.select("rect")
//                    .attr("z-index","1")
//                    .attr("width", 400)
//                    .attr("height", 100);
                leafG.select("annotation-group").call(makeAnnotations);
        }

        function handleMouseOut() {
            var leafG = d3.select(this);

            leafG.select("rect")
                    .attr("stroke-width","0")
                    .attr("width", function (d) {return xScale(d.data.season);})
                    .attr("height",4);
        }

        d3.selectAll(".node--internal")
                .on("mouseover", handleMouseOverTheme)
                .on("mouseout", handleMouseOutTheme);
            
        function handleMouseOverTheme() {

            var link = g.selectAll(".link")
                .data(root.descendants().slice(1))
                .enter().append("path")
                .attr("class", "link")
                .attr("d", function(d) {
                    return "M" + d.y + "," + d.x
                            + "C" + (d.parent.y + 100) + "," + d.x
                            + " " + (d.parent.y + 100) + "," + d.parent.x
                            + " " + d.parent.y + "," + d.parent.x;
                });
        }

        function handleMouseOutTheme() {
//            g.selectAll(".link")
//             .style("stroke-opacity", "0");
        }

    });

    function row(d) {
        return {
            id: d.id,
            season: +d.season,
            numeggs: +d.numeggs,
            color: d.color,
            description: d.description
        };
    }

</script>
