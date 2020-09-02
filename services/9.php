<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Obtaining Pension Numbers</title>
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
          <h3>වැන්දඹු හා අනත් දරු විශ්‍රාම වැටුප් අංක ලබා ගැනීමේ සේවාව</h3>

          <div>
              
            <h4 class="bg-primary" style="width: 700px;">
              සම්පූර්ණ කල යුතු මූලික ලේඛන
            </h4>
            
            <ol>
              <li style="width: 600px;">පොදු 86 ආකෘති පත් පිටපත් 03</li>
              <li style="width: 600px;">පත්වීම් ලිපියේ පිටපත් 01</li>
              <li style="width: 600px;">
                උප්පැන්න සහතිකයේ මුල් පිටපත
              </li>
              <li style="width: 600px;">
                ජාතික හැදුනුම්පතේ පිටපත
              </li>
              <li style="width: 600px;">
                ඉල්ලීම් ලිපිය(පත්වීම් දින සිට මාස 03ක් ඉක්මවා ඇත්නම් ප්‍රමාදයට හේතු සඳහන් විය යුතුය)
              </li>
              <li style="width: 600px;">
               නමේ වෙනසක් ඇත්නම් දිවුරුම් සහතිකය
              </li>
              <li style="width: 600px;">
                විවාහකනම් විවාහ සහතිකයේ මුල් පිටපත
              </li>
              <li style="width: 600px;">
                කලත්‍රයාගේ උප්පැන්න සහතිකයේ හා ජාතික හැදුනුම්පතේ පිටපත
              </li>
              <li style="width: 600px;">
                දරුවන් සිටීනම් දරුවන්ගේ උප්පැන්න සහතිකවල මුල් පිටපත්
              </li>

            </ol>
          </div>
          
          <div>
            <h4 class="bg-primary" style="width: 700px;">අදාල අංශය</h4>
            <p>
                <mark>ගුරු ආයතන ශාඛාව</mark>
              </p>
          </div>
          <div>
            <h4 class="bg-primary" style="width: 700px;">
              සේවාව ලබාදීමට ගතවන කාලය
            </h4>
          </div>
          <div><p>සති 01</p></div>
          <div>
             <form method="post">
              <input type="submit" name="Request" class="button" value="Request" />
            </form>
            <?php
              global $variable;
              $variable = 9;
              include_once('inc/request.php');
            ?>
          </div>
        </div>
      </div>
    </div>
    <?php include_once('inc/foot.php'); ?>
  </body>
</html>
