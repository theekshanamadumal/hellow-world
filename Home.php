<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>

<body>
<?php include_once("inc/Header.php"); ?>
<link rel="stylesheet" href="css/home.css?">
    <div class="container">
    <div class="row">
        <div class="col-sm-8">
            <div class="left">
                    <div class="container  bg-trance text-dark" onclick="location.href='servicesHome.php';" style="cursor: pointer;"> Apply for services</div>
                    <div class="container bg-trance text-dark" onclick="location.href='applicationDownload.php';" style="cursor: pointer;">Download Application Forms</div>
                    <div class="container  bg-trance text-dark" onclick="location.href='recordsAccess.user.php';" style="cursor: pointer;">View past records</div>
            </div>
        </div>           
        
        <div class="col-sm-4">
            <div class="right">
                <div class="image"> 
                    <img src="files/img/building.jpg" alt="">
                </div>
                <div>
                        <h4 class="sub-header">කලාප අධ්‍යාපන කාර්යාලය නිකවැරටිය<br></h4>
                        <p class="home-text-paragragh">නිකවැරටිය අධ්‍යාපන කලාප කාර්යාලයට සාදරයෙන් පිළිගනිමු.<br> <br>මෙම වෙබ් පිටුව මගින් කලාපයේ සියලුම පාසල්වල විදුහල්පතිවරුන්ට, ගුරුවරුන්ට සහ කාර්ය මණ්ඩලයේ සියලුම සාමාජිකයන්ට පහත සදහන් ඕනෑම සේවාවක් ලබා ගත හැක.<br><br> </p>
                </div>
            </div>
        </div> 
    </div> 
  </div>
  
<?php include_once('inc/Footer.php'); ?>
</body>
</html>