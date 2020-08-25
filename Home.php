<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>

<body>
<?php include_once("inc/Header.php"); ?>
<link rel="stylesheet" href="css/Home.css">
    <div class="container">
    <div class="row">
        <div class="col-sm-8">
            <div class="left">
                    <div class="container p-3 my-3 bg-trance text-white" onclick="location.href='services/servicesHome.php';" style="cursor: pointer;"> Apply for services</div>
                    <div class="container p-3 my-3 bg-trance text-white" onclick="location.href='applicationDownload.php';" style="cursor: pointer;">Download Application Forms</div>
                    <div class="container p-3 my-3 bg-trance text-white" onclick="location.href='fileAccess.php';" style="cursor: pointer;">View past records</div>
            </div>
        </div>           
        
        <div class="col-sm-4">
            <div class="right">
                <div class="image"> 
                    <img src="img/building.jpg" alt="">
                </div>
                <div>
                        <h1 class="text-header">කලාප අධ්‍යාපන කාර්යාලය නිකවැරටිය</h1>
                        <p class="text-paragragh">නිකවැරටිය අධ්‍යාපන කලාප කාර්යාලයට සාදරයෙන් පිළිගනිමු. මෙම වෙබ් පිටුව මගින් කලාපයේ සියලුම පාසල්වල විදුහල්පතිවරුන්ට, ගුරුවරුන්ට සහ කාර්ය මණ්ඩලයේ සියලුම සාමාජිකයන්ට පහත සදහන් ඕනෑම සේවාවක් ලබා ගත හැක. </p>
                </div>
            </div>
        </div> 
    </div> 
  </div>
  

<?php include_once('inc/Footer.php'); ?>
</body>
</html>