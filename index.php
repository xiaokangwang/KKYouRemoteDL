<!DOCTYPE html>
<head>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<h1>KKYoutubeRemoteDL</h1>
		<p class="text-center">Tell us the url you wants to download and samplely click "GO"</p>
			<div class="input-append">
				<input class="input-xxlarge" id="urltodl" type="text" placeholder="URL" >
				<button id="subbtn" class="btn btn-primary" type="button"><i class="icon-play"></i>Go!</button>
			</div>
		<div id="result">
		</div>
	</div>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="go.js"></script>
	<script type="text/javascript">
		kkdl_init();
	</script>
</body>