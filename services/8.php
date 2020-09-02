<!DOCTYPE html>
<html lang="en">
  <head>
    <title>intergration of the service time</title>
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
          <h3>ගුරු සේවා කාලය ඒකාබද්ධ කිරීමේ සේවාව</h3>

          <div>
              
            <h4 class="bg-primary" style="width: 700px;">
              සම්පූර්ණ කල යුතු මූලික ලේඛන
            </h4>
            
            <ol>
              <li style="width: 600px;">ඉල්ලීමේ ලිපිය</li>
              <li style="width: 600px;">පෙර සේවයේ පත්වීම් ලිපිය</li>
              <li style="width: 600px;">
                පෙර සේවයේ වැඩ භාර ගැනීමේ ලිපිය
              </li>
              <li style="width: 600px;">
                පෙර සේවයෙන් විධිමත් පරිදි මුදා හැරීමේ ලිපිය
              </li>
              <li style="width: 600px;">
              දැනට දරන සේවයේ පත්වීම් ලිපිය
              </li>
              <li style="width: 600px;">
              වැඩ භාර ගැනීමේ ලිපිය
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
          <div><p>දින 03</p></div>
          <div>
             <form method="post">
              <input type="submit" name="Request" class="button" value="Request" />
            </form>
            <?php
              global $variable;
              $variable = 8;
              include_once('inc/request.php');
            ?>
          </div>
        </div>
      </div>
    </div>
    <?php include_once('inc/foot.php'); ?>
  </body>
</html>
