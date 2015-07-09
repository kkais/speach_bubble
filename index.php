<!DOCTYPE html>
<html>
<head>
	<title>Arrows</title>
</head>
<style type="text/css">
	.wrapper {
		width: 50%; border: 1px dashed black;  margin: 20px; padding: 10px;
	}
	.before, .after {
		border: solid transparent;
		position: absolute;
		content: ' ';
	}
	.before {
		border-left-color: black;
		border-width: 30px;
		margin-left: -29px;
		position: absolute;
	}
	.after {
		border-left-color: pink;
		border-width: 30px;
		margin-left: -30px;
		position: absolute;
	}
	.content {
		background-color: pink;
		padding: 5px;
		width: 94%;
		border: 1px solid black;
	}
	.arrows_wrapper{
		position: relative;
		left: 100%;
	}
	.arrows{
		top: 45px;
		height: 150px;
		position: absolute;
	}
</style>
<body>
<div class="wrapper">
	<div class="arrows_wrapper">
		<div class="arrows">
			<span class="before"></span>
			<span class="after"></span>
		</div>	
	</div>
	<div class="content">
		<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a purus vulputate nulla aliquet pellentesque sit amet eleifend risus. Fusce vel nisi ac lorem porta ornare a et sapien. Suspendisse laoreet pretium elit, ut convallis turpis laoreet at. Mauris finibus felis vel pretium molestie. Vivamus gravida metus eu justo consequat finibus. Cras interdum dolor ligula, eu tincidunt augue laoreet sit amet. Mauris gravida libero nisl, vestibulum dignissim libero malesuada placerat. Suspendisse vitae ligula eget lacus mollis dictum. Nam in lorem eu diam consectetur convallis rutrum id dolor. </div>
	</div>
</div>
</body>
</html>