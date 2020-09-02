<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Recommending and approving school building requirements</title>
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
					<h3>පාසැල් ගොඩනැගිලි අවශ්‍යතා නිර්දේශ කර අනුමැතිය ඉදිරිපත් කිරීම</h3>
					<div>
						<h4 class="bg-primary" style="width: 700px;">සම්පූර්ණ කළ යුතු ලිපිලේඛන</h4>
				        <ol>
				        	<li style="width: 600px;">විදුහල්පතිතුමා විසින් ඉදිරිපත් කරන අවශ්‍යතා ලිපිය</li>
				        </ol>
					</div>
					<div>
						<h4 class="bg-primary" style="width: 700px;">සම්පූර්ණ කළ යුතු මූලික සුදුසුකම්</h4>
				        <ol>
				        	<li style="width: 600px;">එය අවශ්‍යතා ලේඛනයේ ප්‍රමුඛතාවයට පත්වීමට සුදුසුකම් ලැබීම</li>
				        </ol>
					</div>
					<div>
						<h4 class="bg-primary" style="width: 700px;">අදාල අංශය</h4>
						<ul>
							<li style="width: 600px;">සැලසුම් ශාඛාව</li>
						</ul>
					</div>
					<div>
				        <h4 class="bg-primary" style="width: 700px;">සේවාව ලබාදීමට ගතවන කාලය</h4>
				        <ul>
				        	<li style="width: 600px;">දින 04</li>
				        </ul>
				    </div>
				    <div>
				        <form method="post">
              				<input type="submit" name="Request" class="button" value="Request" />
            			</form>
            			<?php
              				global $variable;
              				$variable = 22;
              				include_once('inc/request.php');
            			?>
				    </div>
				</div>
			</div>
		</div>
	</body>
	<?php include_once('inc/foot.php'); ?>
</html>