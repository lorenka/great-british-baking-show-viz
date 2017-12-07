<!DOCTYPE html<>
<html xmlns="http://www.w3.org/1999/xhtml"
      xmlns:fb="http://ogp.me/ns/fb#">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Love for the Great British Baking Show</title>
        <meta property="og:locale" content="en_US">
        <meta property="og:title" content="Love for the Great British Baking Show">
        <meta property="og:image" content="http://lorrainesawicki.com/images/great-british-baking-show-v1.jpg" />
	<meta name="description" content="Love for the Great British Baking Show. A home cook and baker analyzes the technical challenges for the first four seasons of this much-loved series."> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="http://lorrainesawicki.com/projects/british-baking-technical-challenge/skills.css">
        <link rel="stylesheet" href="/font-awesome-4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
        <script src="https://rawgit.com/susielu/d3-annotation/master/d3-annotation.min.js"></script>
    
	<style>
		/* default / demo page */
		* {
			box-sizing: border-box;
		}
		html,
		body {
			margin: 0;
			padding: 0;
			font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
		}
		body {
			min-height: 1280px;
			font-weight: 300;
			color: #2a2a2a;
		}
		p,
		h1,
		h2,
		h3,
		h4,
                a,
		a:visited,
		a:hover {
			color: #000;
			text-decoration: none;
		}
		a:link {
			margin: 0;
			font-weight: 300;
                        text-decoration:underline;
		}
		#intro {
			max-width: 40rem;
			margin: 1rem auto;
			text-align: center;
		}
		.intro__overline {
			font-size: 1.4rem;
		}
		.intro__hed {
			font-size: 1.6rem;
			margin: 1.5rem auto;
			text-transform: uppercase;
			font-weight: 900;
			letter-spacing: 0.05em;
		}
		.intro__dek {
			font-size: 1.4rem;
		}
		/* demo */
		#intro {
			/*margin-bottom: 320px;*/
			margin-bottom: 40px;
		}
		#outro {
			height: 640px;
		}
		/* scrollama */
		#scroll {
			position: relative;
			border-top: 1px dashed #000;
			border-bottom: 1px dashed #000;
		}
		.scroll__graphic {
			position: absolute;
			top: 0;
			left: 0;
			bottom: auto;
			background-color: #78909e;
			-webkit-transform: translate3d(0, 0, 0);
			-moz-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0);
		}
		.scroll__graphic.is-fixed {
			position: fixed;
		}
		.scroll__graphic.is-bottom {
			bottom: 0;
			top: auto;
		}
		.chart {
			position: absolute;
			right: 1rem;
			top: 50%;
			-moz-transform: translateY(-50%);
			-webkit-transform: translateY(-50%);
			transform: translateY(-50%);
			background-color: #fff;
			border: 1px solid #000;
		}
		.chart p {
			text-align: center;
			padding: 1rem;
			position: absolute;
			top: 50%;
			left: 50%;
			-moz-transform: translate(-50%, -50%);
			-webkit-transform: translate(-50%, -50%);
			transform: translate(-50%, -50%);
			font-size: 8rem;
			font-weight: 900;
			color: #666;
		}
		.scroll__text {
			position: relative;
			padding: 0 1rem;
			max-width: 30rem;
			width: 33%;
		}
		.step {
			margin: 2rem auto;
			border: 1px solid #333;
                        height: auto;
                        background-color:#fff;
		}
		.step.is-active {
			background-color: #efe6c4;
		}
                .step h2 {
			text-align: center;
			padding: 1rem;
			font-size: 1.5rem;
                }
		.step p {
			text-align: center;
			font-size: 1rem;
		}
	</style>

<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="http://lorrainesawicki.com/lorraine.css">

</head>

<body style="background-color:#FFFFFF;">

<div class="content-body">

<div class="introduction">

<a href="http://www.lorrainesawicki.com"><img style="border:0;padding-top:30px;padding-bottom:30px;width:55px;" src="/images/blue-L.png"></a>

</div>

<hr style="color:#000000;">

</div>  <!-- end content body -->


	<section id='intro'>
		<h1 class='intro__hed'>Love for the Great British Baking Show</h1>
		<p class='intro__dek'>
			A home cook and baker analyzes the technical challenges for the first four seasons of this much-loved series.
		</p>
<!--                <img src="/images/great-british-baking-show-v1.svg" width="65%">-->
<!-- change made -->
                <p style="font-size:1em; margin-top:25px"> Best viewed in Chrome <br/>with resolution greater than 1280x800</p> 
	</section>
	<section id='scroll'>
		<div class='scroll__graphic'>
			<div class='chart'>
                                <svg width="700" height="445" id="circles" viewBox="-300 -220 700 445"> 
                                    <circle r="50" stroke="#BBB" stroke-opacity="0.5" fill="none"></circle>
                                    <text dx="-3" dy="3">1</text>
                                    <circle r="100" stroke="#BBB" stroke-opacity="0.5" fill="none"></circle>
                                    <text dx="-3" dy="-70">2</text>
                                    <circle r="150" stroke="#BBB" stroke-opacity="0.5" fill="none"></circle>
                                    <text dx="-3" dy="-120">3</text>
                                    <circle r="200" stroke="#BBB" stroke-opacity="0.5" fill="none"></circle>
                                    <text dx="-3" dy="-170">4</text>
                                </svg>
                                <svg width="700" height="800" id="dendogram" viewBox="-50 50 850 800" preserveAspectRatio="xMidYMid meet"></svg>
			</div>
		</div>
		<div class='scroll__text'>
			<div class='step' data-step='1'>
				<h2>BAKING IN THE RAIN</h2>
                                <p>I get warm fuzzies from baking. This is especially true once the rainy season starts in Seattle. My 8-year-old daughter also fell in love with mixing ingredients, putting them in the oven and delighting in the warm, comforting sweetness of delicious treats. I rediscovered the <a href="http://www.pbs.org/show/great-british-baking-show/">Great British Baking Show</a> and fell in love with the people of Britain from a wide variety of backgrounds all linked by an obsession with baking. </p>
                                <p>The dots in the concentric circles represent technical challenges by season, detailed in the next steps.</p>
                                <p></p>
			</div>
			<div class='step' data-step='sweet'>
				<h2>SWEET SORTING</h2>
                                <p>While not all of the recipes in this list are sweet enough to be considered desserts, many of them have sugar. The data for this little project was gathered by hand while drooling over the photos. </p>
                                <p>Some of the special themes were moved into the &quot;miscellaneous&quot; category, such as the &quot;Tutor&quot; and &quot;Victorian&quot; categories. I had to remind myself that biscuits are cookies in British parlance.</p>
			</div>
			<div class='step' data-step='3'>
				<h2>SHOW ME THE EGGS</h2>
                                <p>My neighbor recently started plotting with me to start a &quot;chicken share&quot;. Get a few hens, split the responbility of raising the girls as well as the bounty of eggs. I particularly thought that having a few blue eggs would be nice. But in my fantasy of urban chickens, would there acutally be enough eggs for the recipes called for on the Great British Baking Show? </p>
                                <p>Clearly no. There are some crazy outliers like Charlotte Royale that are over the top with 14 eggs.</p>
                                <p></p>
                   
			</div>
			<div class='step' data-step='4'>
				<h2>CHOCOLATE FACTOR</h2>
                                <p>So after looking at the egg factor, I just need to know.. what's going on with one of my favorite flavors, chocolate? Apparently not very much. Out of all the technical challenges, only a few include chocolate.</p>
                                <p>COMING SOON! IT'S TURKEY TIME!</p>
                                <p>Please let me know if you have any feedback!</p>
<a style="padding:0 5px 0 5px;" href="https://twitter.com/lorenka"><i class="fa fa-twitter" style="font-size:2em;" aria-hidden="true"></i></a>
			</div>
		</div>
	</section>
        <section id='outro' style="height:auto;">
				<h2>THANKS</h2>
                                <p>This story was put together rapidly because I wanted to get it out before Thanksgiving. Thank you to <a href="">Amber Thomas</a> from <a href="">The Pudding</a> for telling me about <a href="https://github.com/russellgoldenberg/scrollama">Scrollama</a> just days after it was released by <a href="">Russell Goldenburg</a>.

        </section>

	<div class='debug'></div>
	<script src='d3.v4.min.js'></script>
	<script src='scrollama.js'></script>
	<script>
		// using d3 for convenience
		var container = d3.select('#scroll');
		var graphic = container.select('.scroll__graphic');
		var chart = graphic.select('.chart');
		var text = container.select('.scroll__text');
		var step = text.selectAll('.step');
		// initialize the scrollama
		var scroller = scrollama();
		// generic window resize listener event
		function handleResize() {
			// 1. update height of step elements
			var stepHeight = Math.floor(window.innerHeight * 0.75);
			step.style('height', stepHeight + 'px');
			// 2. update width/height of graphic element
			var bodyWidth = d3.select('body').node().offsetWidth;
			graphic
				.style('width', bodyWidth + 'px')
				.style('height', window.innerHeight + 'px');
			var chartMargin = 32;
			var textWidth = text.node().offsetWidth;
			var chartWidth = graphic.node().offsetWidth - textWidth - chartMargin;
			chart
				.style('width', chartWidth + 'px')
//				.style('height', Math.floor(window.innerHeight / 2) + 'px'); //LMS DEBUG the SVG doesn't fit in here otherwise...
				.style('height', Math.floor(window.innerHeight) + 'px'); //LMS DEBUG the SVG doesn't fit in here otherwise...
			// 3. tell scrollama to update new element dimensions
			scroller.resize();
		}
		// scrollama event handlers
		function handleStepEnter(response) {
			// response = { element, direction, index }
			// add color to current step only
			step.classed('is-active', function (d, i) {
				return i === response.index;
			})
			// DEBUG update graphic based on step
			chart.select('p').text(response.index + 1)

                        //SETUP THE DATA IN D3

                        // dendogram svg
                        var svg = d3.select("#dendogram"),
                        width = +svg.attr("width"),
                        height = +svg.attr("height"),
                        g = svg.append("g").attr("transform", "translate(40,0)");       // move right a bit.

                             //okay, let's set this up from the beginning but set opacity until the egg chart is revealed
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

                          // organize the data read in the from csv for dendogram
                          function row(d) {
                              return {
                                  id: d.id,
                                  season: +d.season,
                                  numeggs: +d.numeggs,
                                  color: d.color,
                                  haschocolate: +d.haschocolate,
                                  description: d.recipeurl
                              };
                          }

                        if (response.index === 0) {

                           // initial circles svg
                           var circleSvg = d3.select("#circles"),
                           width = +circleSvg.attr("width"),
                           height = +circleSvg.attr("height"),
                           circleG = circleSvg.append("g").attr("transform", "translate(40,0)"); // move right a bit.

                          function seasonrow(d) {
                              return {
                                  id: d.id,
                                  season: +d.season,
                                  color: d.color,
                              };
                          }

                          /* read in the data */
                          d3.csv("seasondata.csv", seasonrow, function(error, data) {
                             if (error) throw error;

                             var node = d3.select("#circles")
                             .append("g")
                             .selectAll("circle")
                             .data(data)
                             .enter().append("circle")
                               .attr("r",function(d) {
                                  if (d.season === 1) { return 6; }
                                  else if (d.season === 2) { return 9; }
                                  else if (d.season === 3) { return 12; }
                                  else if (d.season === 4) { return 15; }
                               })
                               .attr("fill",function(d) { 
                                    return d.color;
                               })
                              // .append("text",d.

                              var simulation = d3.forceSimulation(data)
                              .force("charge", d3.forceCollide().radius(5))
                              .force("r", d3.forceRadial(function(d) { 
                                  if (d.season === 1) { return 50; } 
                                  else if (d.season === 2) { return 100; } 
                                  else if (d.season === 3) { return 150; } 
                                  else if (d.season === 4) { return 200; } 
                              }))
                              .on("tick", ticked);

                              function ticked() {
                                node
                                  .attr("cx", function(d) { return d.x; })
                                  //.attr("cy", function(d) { return d.y; });
                                  .attr("cy", function(d) { return d.y; })
                                  .append("text", "lorraine");
                              } 

                          });
                    
                              
                        }// end INTRODUCTION

                        //CATEGORY DENDOGRAM
                        if (response.index === 1) {

//this should really be in an exit clause...
                            d3.select("#circles").transition()
                            .duration(1500)
                            .style("opacity", "0")
                            .remove();

                           //this graphic is big; make it sticky until we're ready to go to the next step. LMS DEBUG
			   graphic.classed('is-fixed', true);
 
                           // Setting up a way to handle the data
                           var tree = d3.cluster()                 // This D3 API method setup the Dendrogram datum position.
                           .size([height, width - 460])    // Total width - bar chart width = Dendrogram chart width
                           .separation(function separate(a, b) {
                           return a.parent == b.parent            // 2 levels tree grouping for category
                           || a.parent.parent == b.parent
//                           || a.parent == b.parent.parent ? 0.4 : 0.8;
                           || a.parent == b.parent.parent ? 0.2 : 0.4;
                           });
                 
                           var stratify = d3.stratify()            // This D3 API method gives cvs file flat data array dimensions.
                          .parentId(function(d) { return d.id.substring(0, d.id.lastIndexOf(".")); });

                          /* read in the data */
                          d3 .csv("themedata.csv", row, function(error, data) {
                             if (error) throw error;

                             var root = stratify(data);
                             tree(root);

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
                             .enter()
                             .append("g")
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
                             .attr("class", "recipe-name")
                             .style("text-anchor", "start")
                             .text(function (d) {
                               return d.data.id.substring(d.data.id.lastIndexOf(".") + 1);
                             });

                            // Attach axis on top of the first leaf datum.
                            var firstEndNode = g.select(".node--leaf");
                            firstEndNode.insert("g")
                            .attr("class","xAxis")
                            .style("opacity","0")
                            .attr("transform", "translate(" + 7 + "," + -14 + ")")
                            .call(xAxis);

                            // tick mark for x-axis
                            firstEndNode.insert("g")
                            .attr("class", "grid")
                            .style("opacity","0")
                            .attr("transform", "translate(7," + (height - 15) + ")")
                            .call(d3.axisBottom()
                              .scale(xScale)
                              .ticks(5)
                              .tickSize(-height, 0, 0)
                              .tickFormat("")
                            );

                             // Write down text for every parent datum
                             var internalNode = g.selectAll(".node--internal");
                             internalNode.append("text")
                             .attr("y", 2)
                             .style("text-anchor", "middle")
                             .text(function (d) {
                               return d.data.id.substring(d.data.id.lastIndexOf(".") + 1);
                             });

                          }); //end "read in the data"


                        } //end setup dendogram

                        // REVEAL EGG DATA!
                        if (response.index === 2) {

                            d3.selectAll(".link")
                            .style("stroke-opacity", "0");

                            // turn on xAxis for chart
                            d3.selectAll(".xAxis").style("opacity","1");
                            //turn on the grid
                            d3.selectAll(".grid").style("opacity","1");
       
                            d3.selectAll(".node--internal")
                            .transition()
                            .duration(1500)
                            .style("opacity", "0")
                            .remove();

                            d3.selectAll("#dendogram").transition().duration(2500).style("opacity","0");
                            d3.selectAll("#dendogram").attr("transform", "translate(-120,0)");
                            d3.selectAll("#dendogram").transition().duration(2500).style("opacity","1");


                            // Emphasize the y-axis baseline.
                            svg.selectAll(".grid").select("line")
                            .style("stroke-dasharray","20,1")
                            .style("stroke-linecap", "round")
                            .style("stroke","black");

                            d3.selectAll(".node--leaf")
                            .selectAll("circle").style("opacity","0");

                            d3.selectAll(".node--leaf")
                            .selectAll(".recipe-name")
                            .attr("x","-220");

                            d3.selectAll(".node--leaf")
                            .append("rect")
                            .style("fill", function (d) {return d.data.color;})
                            .attr("height", 12)
                            .attr("x", 8)
                            .attr("rx", 2)
                            .attr("ry", 2)
                            .transition()
                            .duration(2500)
                            .attr("width", function (d) {return xScale(d.data.numeggs);}); 

                          } //end setup for EGGS!
                        if (response.index === 3) {
                            d3.select("#dendogram").remove();
                        }
                } //end handleStepEnter

		function handleContainerEnter(response) {
			// response = { direction }
			// sticky the graphic (old school)
			graphic.classed('is-fixed', true);
			graphic.classed('is-bottom', false);
		}
		function handleContainerExit(response) {
			// response = { direction }
			// un-sticky the graphic, and pin to top/bottom of container
			graphic.classed('is-fixed', false);
			graphic.classed('is-bottom', response.direction === 'down');
		}
		function init() {
			// 1. force a resize on load to ensure proper dimensions are sent to scrollama
			handleResize();
			// 2. setup the scroller passing options
			// this will also initialize trigger observations
			// 3. bind scrollama event handlers (this can be chained like below)
			scroller.setup({
				container: '#scroll',
				graphic: '.scroll__graphic',
				text: '.scroll__text',
				step: '.scroll__text .step',
				debug: false,
			})
				.onStepEnter(handleStepEnter)
				.onContainerEnter(handleContainerEnter)
				.onContainerExit(handleContainerExit);
			// setup resize event
			window.addEventListener('resize', handleResize);
		}
		// kick things off
		init();
                
	</script>
<?php include('../../footer.php'); ?>
