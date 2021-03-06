<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="js/jquery.js"></script>
	<?php require 'head.php';?>
	<script>
		$(document).ready(function(){
			$("#left_title").mouseenter(function(){
			 	$("#left_title").css("width","300px");
			 	$("#right_1").css("width","900px");
			 	$("#right_2").css("width","900px");
			 	$("#right_3").css("width","900px");
			});
			$("#left_title").mouseleave(function(){
				// $("#left_title").css("width","100px");
			 // 	$("#right_1").css("width","1100px");
			 // 	$("#right_2").css("width","1100px");
			 // 	$("#right_3").css("width","1100px");
			});

			$("#right_1").mouseenter(function(){
			 	$("#right_1").css("height","auto");
			 	$("#right_2").css("height","100px");
			 	$("#right_3").css("height","100px");

			 	$("#left_title").css("width","100px");
			 	$("#right_1").css("width","1100px");
			 	$("#right_2").css("width","1100px");
			 	$("#right_3").css("width","1100px");
			});
			$("#right_1").mouseleave(function(){
				// $("#right_1").css("height","100px");
			});

			$("#right_2").mouseenter(function(){
				$("#right_1").css("height","100px");
			 	$("#right_2").css("height","auto");
			 	$("#right_3").css("height","100px");

			 	$("#left_title").css("width","100px");
			 	$("#right_1").css("width","1100px");
			 	$("#right_2").css("width","1100px");
			 	$("#right_3").css("width","1100px");
			});
			$("#right_2").mouseleave(function(){
				// $("#right_2").css("height","100px");
			});

			$("#right_3").mouseenter(function(){
			 	$("#right_1").css("height","100px");
			 	$("#right_2").css("height","100px");
			 	$("#right_3").css("height","300px");

			 	$("#left_title").css("width","100px");
			 	$("#right_1").css("width","1100px");
			 	$("#right_2").css("width","1100px");
			 	$("#right_3").css("width","1100px");
			});
			$("#right_3").mouseleave(function(){
				// $("#right_3").css("height","100px");
			});

		});
	</script>
</head>
<body>
	<div id="wrapper">
		<div id='left_title' style="width:300px;height:1000px;background-color:#eee;float:left;overflow-y:scroll;">
			
		</div>
		<div id='right_1' style="width:900px;height:auto;background-color:#bee;float:left;overflow-y:scroll">
			<div class="row">
			<div class="col-lg-12">
                        <div class="panel panel-default">
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <form role="form" id="myForm" onsubmit="return false;">
                                            <div class="form-group">
                                                <label>Word</label>
                                                <input class="form-control" id="word">
                                            </div>
                                            <label class="checkbox-inline">
                                                    <input type="checkbox" id="enable-time" onchange="enable_time();">&nbsp
                                                </label>
                                                <label><h4>Time</h4></label>
                                            <div class="form-group">
                                                <label>From</label>
                                                <input class="form-control" id="from">
                                            </div>
                                            <div class="form-group">
                                                <label>To</label>
                                                <input class="form-control" id="to">
                                            </div>
                                            <label class="checkbox-inline">
                                                    <input type="checkbox" id="enable-category">&nbsp
                                                </label>
                                                <label><h4>Category</h4></label>
                                            <div class="form-group">
                                                <div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="" checked="true">All
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="" checked="true">News
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="" checked="true">Academic
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="" checked="true">Creative Writing
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="" checked="true">Spoken
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="" checked="true"  >Gezette
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <button input="submit" class="btn btn-default">Search</button>
                                            <button type="reset" class="btn btn-default">Reset</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                </div>
		</div>
		<div id='right_2' style="width:900px;height:100px;background-color:#aae;float:left;overflow-y:scroll">
			<div class="row">
			<div class="row" id="graph-panel-time">
				<div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading" id="panel-heading-time">
                                
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="flot-chart">
                                    <div class="flot-chart-content" id="flot-line-chart"></div>
                                </div>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                <!-- /.row -->
                </div>

                <div class="row" id="graph-panel-category">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading" id="panel-heading-category">
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="flot-chart">
                                    <div class="flot-chart-content" id="flot-bar-chart"></div>
                                </div>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                <!-- /.row -->
                </div>
			</div>
		</div>
		<div id='right_3' style="width:900px;height:100px;background-color:#aaa;float:left;overflow-y:scroll"></div>
	</div>

	<!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>


    <script src="js/plugins/flot/excanvas.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="js/plugins/flot/jquery.flot.categories.js"></script>
    <script src="js/plugins/flot/jquery.flot.time.js"></script>
    <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>

    <script type="text/javascript">
    $(document).ready(function(){
        document.getElementById("graph-panel-time").style.display = "none";
        document.getElementById("graph-panel-category").style.display = "none";
    });
    </script>

    <!--script type="text/javascript">
    
        document.getElementById("from").disabled = true;
    </script-->

    <script type="text/javascript">
        $('#myForm').submit(function() {
            
            var word = document.getElementById("word").value;
            var from = document.getElementById("from").value;
            var to = document.getElementById("to").value;
            var offset = 0;
            plot_line();
            plot_bar();

            document.getElementById("panel-heading-time").innerHTML = "Frequency of '"+word+"' over time";
            document.getElementById("graph-panel-time").style.display = "block";
            
            document.getElementById("panel-heading-category").innerHTML = "Frequency of '"+word+"' over category";
            document.getElementById("graph-panel-category").style.display = "block";

            $("#right_1").css("height","100px");
			 	$("#right_2").css("height","auto");
			 	$("#right_3").css("height","100px");

			 	$("#left_title").css("width","100px");
			 	$("#right_1").css("width","1100px");
			 	$("#right_2").css("width","1100px");
			 	$("#right_3").css("width","1100px");

            function timestamp(date){
                var myDate=date.split("-");
                var newDate=myDate[1]+"/"+myDate[0]+"/"+myDate[2];
                return (new Date(newDate).getTime());
            }

            function plot_line() {
                var data = [
                    [timestamp("01-01-2005"),1000],
                    [timestamp("01-01-2006"),1500],
                    [timestamp("01-01-2007"),1200],
                    [timestamp("01-01-2008"),1800],
                    [timestamp("01-01-2009"),1000],
                    [timestamp("01-01-2010"),1500],
                    [timestamp("01-01-2011"),1200],
                    [timestamp("01-01-2012"),1800],
                    [timestamp("01-01-2013"),1300],
                    [timestamp("01-01-2014"),1600]
                ]
                

                var options = {
                    series: {
                        lines: {
                            show: true
                        },
                        points: {
                            show: true
                        }
                    },
                    grid: {
                        hoverable: true //IMPORTANT! this is needed for tooltip to work
                    },
                    xaxes: [{
                        mode: 'time'
                    }],
                    tooltip: true,
                    tooltipOpts: {
                        content: "'%s' of %x.1 is %y.4",
                        shifts: {
                            x: -60,
                            y: 25
                        }
                    }
                };

                var plotObj = $.plot($("#flot-line-chart"), [{
                        data: data,
                        label: word
                    }],
                    options);
            }

            function plot_bar() {
                var data = [
                    ["News",1000],
                    ["Academic",1500],
                    ["Creative Writing",1200],
                    ["Spoken",1800],
                    ["Gezette",1000]
                ]
                

                var options = {
                    series: {
                        bars: {
					show: true,
					barWidth: 0.6,
					align: "center"
				}
                    },
                    xaxis: {
						mode: "categories",
						tickLength: 0
					},
                    grid: {
                        hoverable: true
                    },
                    legend: {
                        show: false
                    },
                    tooltip: true,
                    tooltipOpts: {
                        content: "year: %x, frequency: %y"
                    }
                };

                var plotObj = $.plot($("#flot-bar-chart"), [data],options);
            }

            function timestamp(date){
                var myDate=date.split("-");
                var newDate=myDate[1]+"/"+myDate[0]+"/"+myDate[2];
                return (new Date(newDate).getTime());
            }
            
            
        });
    </script>
</body>
</html>