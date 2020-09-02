<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Grade 5 scholarship payment</title>
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
					<h3>5 ශ්‍රෙණියේ ශිෂ්‍යාධාර ගෙවීම</h3>
					<div>
						<h4 class="bg-primary" style="width: 700px;">සම්පූර්ණ කළ යුතු මූලික සුදුසුකම්</h4>
				        <ol>
				        	<li style="width: 600px;">ශිෂ්‍යත්ව හිමි අඩු ආදායම් ලාභියෙකු වීම</li>
				        	<li style="width: 600px;">විදුහල්පතිතුමාගේ නිර්දේශය සහිත වවුචර්</li>
				        	<li style="width: 600px;">අනුමත රජයේ බැංකුවක බැංකු ගිණුමක් තිබීම</li>
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
				        	<li style="width: 600px;">දින 01</li>
				        </ul>
				    </div>
				    <div>
				        <form method="post">
              				<input type="submit" name="Request" class="button" value="Request" />
            			</form>
            			<?php
              				global $variable;
              				$variable = 15;
              				include_once('inc/request.php');
            			?>
				    </div>
				</div>
			</div>
		</div>
	</body>
	<?php include_once('inc/foot.php'); ?>
</html>