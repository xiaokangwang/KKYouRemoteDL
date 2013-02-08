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
		<div id="result" class="well well-large">
		</div>
		<div class="footer">
        <p>by Xiaokang Wang.V0.8</p>
      </div>
	</div>
	<script type="text/javascript" data-cfasync="false" src="jquery.js"></script>
	<script type="text/javascript" data-cfasync="false" src="js/bootstrap.js"></script>
	<script type="text/javascript" data-cfasync="false" src="go.js"  ></script>
	<script type="text/javascript">
		kkdl_init();
	</script>
</body>