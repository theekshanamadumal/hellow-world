<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Vouchers</title>
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
          			<h3>පාසල් ළමුන්ට දිවා ආහාර සදහා වූ පෝෂණ වවුචර්</h3>
          			<div>
          				<h4 class="bg-primary" style="width: 700px;">පාසල් ළමුන්ට දිවා ආහාර සදහා වූ පෝෂණ වවුචර් සදහා අනුමැතිය</h4>
          				<ul>
          					<li class="bg-success" style="width: 700px;">සම්පූර්ණ කළ යුතු ලිපිලේඛන</li>
          						<ol>
          							<li style="width: 600px;">පෝෂණ කමිටුවේ නිර්දේශය සහිත වාර්තාව</li>
          							<li style="width: 600px;">මූල්‍ය ප්‍රගති වාර්තාව</li>
          							<li style="width: 600px;">ශිෂ්‍ය සංඛ්‍යාව සහිත විදුහල්පතිගේ අනුමැතිය ඇතිව සම්පූර්ණ කරන ලද පොදු 35 ආකෘතිය</li>
          						</ol>
          					<li class="bg-success" style="width: 700px;">සම්පූර්ණ කළ යුතු මූලික සුදුසුකම්</li>
          						<ol>
          							<li style="width: 600px;">ගිවිසුම අත්සන් කර තිබීම</li>
          							<li style="width: 600px;">මහජන සෞඛ්‍ය පරීක්ෂකගේ අධීක්ෂණය තිබීම</li>
          						</ol>
          					<li class="bg-success" style="width: 700px;">අදාල අංශය</li>
          						<div>
									<p style="width: 600px;">අධ්‍යාපන සංවර්ධන ශාඛාව</p>
								</div>
          					<li class="bg-success" style="width: 700px;">සේවාව ලබාදීමට ගතවන කාලය</li>
          						<div>
									<p style="width: 600px;">දින 03</p>
								</div>
          				</ul>
          			</div>
          			<div>
          				<h4 class="bg-primary" style="width: 700px;">පෝෂණ ගෙවීම</h4>
          				<ul>
          					<li class="bg-success" style="width: 700px;">සම්පූර්ණ කළ යුතු මූලික සුදුසුකම්</li>
          						<div>
          							<p style="width: 600px;">ප්‍රතිපාදන තිබේනම්</p>
          						</div>
          					<li class="bg-success" style="width: 700px;">අදාල අංශය</li>
          						<div>
									<p style="width: 600px;">ගිණුම් ශාඛාව</p>
								</div>
          					<li class="bg-success" style="width: 700px;">සේවාව ලබාදීමට ගතවන කාලය</li>
          						<div>
									<p style="width: 600px;">විනාඩි 05</p>
								</div>
          				</ul>
          			</div>
          			<div>
				        <form method="post">
                      <input type="submit" name="Request" class="button" value="Request" />
                  </form>
                  <?php
                      global $variable;
                      $variable = 16;
                      include_once('inc/request.php');
                  ?>
				        </div>
				</div>
			</div>
		</div>
	</body>
	<?php include_once('inc/foot.php'); ?>
</html>