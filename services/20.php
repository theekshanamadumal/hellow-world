<!DOCTYPE html>
<html lang="en">
	<head>
		<title>trips</title>
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
          			<h3>චාරිකා</h3>
          			<div>
          				<h4 class="bg-primary" style="width: 700px;">පාසල් අධ්‍යාපන චාරිකා</h4>
          				<ul>
          					<li class="bg-success" style="width: 700px;">සම්පූර්ණ කළ යුතු ලිපිලේඛන</li>
          						<ol>
				        			<li style="width: 600px;">සිසුන් සහභාගී කරවීමට දෙමාපිය කැමැත්ත ඇතුළත් ලිපි</li>
				        			<li style="width: 600px;">අනුමත උපරිම දින දෙකක් විය යුතු අතර රාත්‍රී නවාතැන් ගන්නේ නම් අදාළ නවාතැන් සැපයීමට කැමැත්ත සහිත ලිපිය</li>
				        			<li style="width: 600px;">අයවැය ඇස්තමේන්තුව, කාල සටහන, මාර්ග සිතියම</li>
				        			<li style="width: 600px;">විදුහල්පති, කොට්ඨාස අධ්‍යාපන අධ්‍යක්ෂක අත්සන් කළ අයදුම් පත්‍රය</li>
				        		</ol>
          					<li class="bg-success" style="width: 700px;">සම්පූර්ණ කළ යුතු මූලික සුදුසුකම්</li>
          						<ol>
          							<li style="width: 600px;">පාසල් වාර්ෂික සැලැස්මට ඇතුළත් වී තිබිය යුතුය</li>
          							<li style="width: 600px;">ජාතික පාසලක් නම් <mark>අයදුම්පත පිටපත් 04 කින් දින 14 කට පෙරද</mark> <br><br>පළාත් සභා පාසලක් නම් <mark>අයදුම්පත පිටපත් 03 කින් දින හතකට පෙර ඉදිරිපත් කළ යුතුය</mark></li>
          						</ol>
          					<li class="bg-success" style="width: 700px;">අදාල අංශය</li>
          						<div>
									<p style="width: 600px;">අධ්‍යාපන පරිපාලන ශාඛාව</p>
								</div>
          					<li class="bg-success" style="width: 700px;">සේවාව ලබාදීමට ගතවන කාලය</li>
          						<div>
									<p style="width: 600px;">විනාඩි 30</p>
								</div>
          				</ul>
          			</div>
          			<div>
          				<h4 class="bg-primary" style="width: 700px;">ක්ෂේත්‍ර චාරිකා</h4>
          				<ul>
          					<li class="bg-success" style="width: 700px;">සම්පූර්ණ කළ යුතු ලිපිලේඛන</li>
          						<div>
          							<p>ඉහත ලේඛනවලට අමතරව කොට්ඨාස අධ්‍යාපන අධ්‍යක්ෂක/ විෂයභාර අධ්‍යක්ෂක විසින් නිර්දේශ කළ අයදුම්පත</p>
          						</div>
          					<li class="bg-success" style="width: 700px;">අදාල අංශය</li>
          						<div>
									<p style="width: 600px;">අධ්‍යාපන පරිපාලන ශාඛාව</p>
								</div>
          					<li class="bg-success" style="width: 700px;">සේවාව ලබාදීමට ගතවන කාලය</li>
          						<div>
									<p style="width: 600px;">විනාඩි 30</p>
								</div>
          				</ul>
          			</div>
          			<div>
				        <form method="post">
                      <input type="submit" name="Request" class="button" value="Request" />
                  </form>
                  <?php
                      global $variable;
                      $variable = 20;
                      include_once('inc/request.php');
                  ?>
				    </div>
				</div>
			</div>
		</div>
	</body>
	<?php include_once('inc/foot.php'); ?>
</html>