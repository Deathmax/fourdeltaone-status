<div id="header_bg">
	<div id="header">
		<p id="header_title">Status website is down</p>
		<p id="header_text">The website is down for maintenance. Check back later.</p>
	</div>
	<div class="clear"></div>
</div>
		
<div id="content" style="text-align: center; display:none">
	<div style="width: 250px; display: inline-block" id="iw4m">
		<h2>IW4M</h2>
		<? gen_leds(Array("iw4m-np"=>"Network Platform", "iw4m-master"=>"Master Server")); ?>
	</div>
	<div style="width: 250px; display: inline-block" id="iw5m">
		<h2>IW5M</h2>
		<? gen_leds(Array("iw5m-np"=>"Network Platform", "iw5m-master"=>"Master Server")); ?>
	</div>
	<div style="width: 250px; display: inline-block" id="as-if-the-script-would-give-a-fuck-about-this">
		<h2>FourDeltaOne</h2>
		<? gen_leds(Array("4d1-auth"=>"Login Interface", "4d1-auth-internal"=>"Login Internal", "4d1-forum"=>"Forum/Webpage")); ?>
	</div>
	<div style="width: 250px; display: inline-block" id="kmshost">
		<h2>Win8</h2>
		<? gen_leds(Array("kms-host"=>"KMS host")); ?>
	</div>


	<p style="padding-top: 20px">
		This page automatically refreshes in the background every 30 seconds.
	</p>

	<div class="clear"></div>
</div>
