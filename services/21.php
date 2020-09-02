<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Photo Certification</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
	</head>
	<body>
	<?php include_once("inc/head.php"); ?>
    <?php include_once("inc/ArticalHead.php"); ?>
		<div class="container-fluid text-left">
	     	<div class="row content">
	        	<div class="col-sm-1 sidenav"></div>
	        	<div class="col-sm-11 sidenav">
					<h3>ඡායාරූප සහතික කිරීම</h3>
					<div>
						<h4 class="bg-primary" style="width: 700px;">සම්පූර්ණ කළ යුතු ලිපිලේඛන</h4>
				        <ol>
				        	<li style="width: 600px;">ළමුන් සහතික කළ ඡායාරූප පිටපත් 02 ක්</li>
				        	<li style="width: 600px;">පෙනී සිටින විභාග ප්‍රවේශ පත්‍රයේ ඡායා පිටපත</li>
				        </ol>
					</div>
					<div>
						<h4 class="bg-primary" style="width: 700px;">අදාල අංශය</h4>
						<ul>
							<li style="width: 600px;">අධ්‍යාපන පරිපාලන ශාඛාව</li>
						</ul>
					</div>
					<div>
				        <h4 class="bg-primary" style="width: 700px;">සේවාව ලබාදීමට ගතවන කාලය</h4>
				        <ul>
				        	<li style="width: 600px;">විනාඩි 10</li>
				        </ul>
				    </div>
				    <div>
				        <form method="post">
              				<input type="submit" name="Request" class="button" value="Request" />
            			</form>
            			<?php
              				global $variable;
              				$variable = 21;
              				include_once('inc/request.php');
            			?>
				    </div>
				</div>
			</div>
		</div>
	</body>
	<?php include_once('inc/foot.php'); ?>
</html>