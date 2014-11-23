<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="js/jquery-1.5.2.min.js"></script>
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
	<div>
		<div id='left_title' style="width:300px;height:1000px;background-color:#eee;float:left"></div>
		<div id='right_1' style="width:900px;height:300px;background-color:#bee;float:left"></div>
		<div id='right_2' style="width:900px;height:300px;background-color:#aae;float:left"></div>
		<div id='right_3' style="width:900px;height:300px;background-color:#aaa;float:left"></div>
	</div>
</body>
</html>