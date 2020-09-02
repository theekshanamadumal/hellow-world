<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Agrahara Request</title>
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
          <h3>අග්‍රහාර ඉල්ලීම් නිර්දේශ කිරීමේ සේවාව</h3>

          <div>
              
            <h4 class="bg-primary" style="width: 700px;">
              සම්පූර්ණ කල යුතු මූලික ලේඛන
            </h4>
            
            <ol>
              <li style="width: 600px;">පොදු ආකෘති අයදුම් පත්‍රය</li>
              <li style="width: 600px;">මුදල් අයකර යවා ඇති බවට සහතිකය</li>
              <li style="width: 600px;">
                වෛද්‍යවරයාගේ නිර්දේශය
              </li>
              <li style="width: 600px;">
                අදාල බිල්පත්‍ර
              </li>
              
              
            </ol>
          </div>
          
          <div>
            <h4 class="bg-primary" style="width: 700px;">අදාල අංශය</h4>
            <p>
                <mark>ගුරු ආයතන ශාඛාව</mark>
              </p>
              <p>
              <mark>සාමාන්‍ය පාලන ශාඛාව</mark>
                
              </p>
          </div>
          <div>
            <h4 class="bg-primary" style="width: 700px;">
              සේවාව ලබාදීමට ගතවන කාලය
            </h4>
          </div>
          <div><p>දින 01</p></div>
          <div>
             <form method="post">
              <input type="submit" name="Request" class="button" value="Request" />
            </form>
            <?php
              global $variable;
              $variable = 13;
              include_once('inc/request.php');
            ?>
          </div>
        </div>
      </div>
    </div>
    <?php include_once('inc/foot.php'); ?>
  </body>
</html>
