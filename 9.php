<!DOCTYPE>
<html>
<head>
	<h1>Canvas tag demo</h1>
</head>
<body>
	<canvas id="myfirstcanvas" width="200" height="100" style="border:1px solid #d3d3d3;">Silpa</canvas>
	<script>
		var c=document.getElementById('myfirstcanvas');
		ctx=c.getContext("2d");
		ctx.font="30px Arial";
		ctx.strokeText("Hi I am sri siri",10,50);
	</script>
</body>
</html>