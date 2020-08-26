<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Abroad Holiday Service</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
      
    
  </head>
  <body>
    <?php include_once("../inc/Header.php");
        //include_once 'inc/Header.php';
     ?>
    <?php include_once("../inc/ArticalHead.php"); ?>
    <?php //require_once('inc/connection.php');?>

    
    <div class="container-fluid text-left">
      <div class="row content">
        <div class="col-sm-1 sidenav"></div>
        <div class="col-sm-11 sidenav">
          <h3>විදේශ නිවාඩු සේවාව</h3>

          <div>
            <h4 class="bg-primary" style="width: 700px;">
              සම්පුරණ කල යුතු මූලික සුදුසකම් හා ලේකන
            </h4>
            <ol>
              <li style="width: 600px;">තනතුරේ ස්ථිර කර තිබිය යුතුය.</li>
              <li style="width: 600px;">විනය ක්‍රියාමාර්ග නොමැති වීම.</li>
              <li style="width: 600px;">
                රජයට ගෙවිය යුතු මුදල් ගෙවා අවසන් කිරිම.
              </li>
              <li style="width: 600px;">
                වයස අවු. 55 ඉක්‌මවා යාමට පෙර අනීවාර්ය සේවා කාලය සම්පුර්ණ කල හැකි
                වීම.
              </li>
              <li style="width: 600px;">
                වැඩ කරන දින 21කට පෙර අයදුම් පත් ඉදිරිපත් කල යුතුය.
              </li>
              <li style="width: 600px;">
                රාජකාරි ආවරණය නිසි පරිදි සිදුකළ යුතු අතර විදුහල්පති විසින් ම
                නිර්දේශ කල යුතුය.
              </li>
            </ol>
          </div>
          <div>
            <h4 class="bg-primary" style="width: 700px;">අදාල අංශය</h4>
            <p>ඔබ,</p>
            <p>
              ගුරුවරයෙක් , විදුහල්පතිවරයෙක් නම්
              <mark>ගුරු ආයතන ශාකාව</mark>
            </p>
            <p>
              අනද්‍යයන කාර්ය මණ්ඩලයේ නම්.
              <mark>සාමාන්‍ය පාලන ශාකාව </mark>
            </p>
          </div>
          <div>
            <h4 class="bg-primary" style="width: 700px;">
              සේවාව ලබාදීමට ගතවන කාලය
            </h4>
          </div>
          <div><p>කිව නොහැක</p></div>
          <div>
            <!--<button type="button" class="btn btn-default">Resquest</button>-->
            <form method="post">
            <input type="submit" name="Request" class="button" value="Request" />
            </form>
            <?php
              global $variable;
              $variable = 1;
              include_once("../services/request.php");
              //echo $_SESSION['loginID'];
            ?>
          </div>
        </div>
      </div>
    </div>

    <?php include_once('../inc/Footer.php'); ?>
  </body>
</html>
