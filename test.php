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
				$("#left_title").css("width","100px");
			 	$("#right_1").css("width","1100px");
			 	$("#right_2").css("width","1100px");
			 	$("#right_3").css("width","1100px");
			});

			$("#right_1").mouseenter(function(){
			 	$("#right_1").css("height","300px");
			});
			$("#right_1").mouseleave(function(){
				$("#right_1").css("height","100px");
			});

			$("#right_2").mouseenter(function(){
			 	$("#right_2").css("height","300px");
			});
			$("#right_2").mouseleave(function(){
				$("#right_2").css("height","100px");
			});

			$("#right_3").mouseenter(function(){
			 	$("#right_3").css("height","300px");
			});
			$("#right_3").mouseleave(function(){
				$("#right_3").css("height","100px");
			});

		});
	</script>
</head>
<body>
	<div id="wrapper">
		<div id='left_title' style="width:300px;height:1000px;background-color:#eee;float:left">
			
		</div>
		<div id='right_1' style="width:900px;height:300px;background-color:#bee;float:left;overflow-y:scroll">
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
                                            <div class="form-group">
                                                <label>From</label>
                                                <input class="form-control" id="from">
                                            </div>
                                            <div class="form-group">
                                                <label>To</label>
                                                <input class="form-control" id="to">
                                            </div>
                                            <button input="submit" class="btn btn-default">Submit Button</button>
                                            <button type="reset" class="btn btn-default">Reset Button</button>
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
		<div id='right_2' style="width:900px;height:300px;background-color:#aae;float:left"></div>
		<div id='right_3' style="width:900px;height:300px;background-color:#aaa;float:left"></div>
	</div>
</body>
</html>