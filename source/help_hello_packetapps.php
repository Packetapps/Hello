<?php
set_time_limit(900);
ini_set('max_execution_time', 900);

require("guiconfig.inc");
require_once("/etc/inc/functions.inc");



include("head.inc");
include("fbegin.inc"); ?>

<div>
		<center>
				<h1 style='color:#50659E'>Hello PacketApps.com</h1>
				<button id='hello' style='background-color:green;color:white'>Say Hello!</button>
				<p id='text' style='background-color:red;border-radius:5px;color:white;'></p>
		</center>
		<script>
				var btn = document.getElementById('hello');
				btn.onclick = function(){
					var text = document.getElementById('text')
					text.innerHTML = 'Hello <?php echo file_get_contents('/usr/local/hello');?> and Welcome PacketApps creators and developers!';	
				};
		</script>
</div>

<?php include("fend.inc"); ?>
