<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Promotions in the service</title>
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
          <h3>ගුරු සේවයේ උසස්වීම් නිර්දේශ කිරීමේ සේවාව</h3>

          <div>
              
            <h4 class="bg-primary" style="width: 700px;">
              සම්පූර්ණ කල යුතු මූලික සුදුසුකම්
            </h4>
            
            <ol>
              <li style="width: 600px;">නියමිත සේවා කාලය සම්පූර්ණ කර තිබීම</li>
              <li style="width: 600px;">පුහුණුව/උපාධිය හා අධ්‍යාපන සුදුසුකම් සම්පූර්ණ කර තිබීම</li>
              <li style="width: 600px;">
              ව්‍යවස්ථාව අනුව අවශ්‍ය ලකුණු සම්පූර්ණ කර තිබීම
              </li>
              
              
              
            </ol>
          </div>
          <div>
              
            <h4 class="bg-primary" style="width: 700px;">
              සම්පූර්ණ කල යුතු මූලික ලේඛන
            </h4>
            
            <ol>
              <li style="width: 600px;">අදාල ඉල්ලුම් පත්‍රය</li>
              
              
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
          <div><p>දින 01</p></div>
          <div>
             <form method="post">
              <input type="submit" name="Request" class="button" value="Request" />
            </form>
            <?php
              global $variable;
              $variable = 12;
              include_once('inc/request.php');
            ?>
          </div>
        </div>
      </div>
    </div>
    <?php include_once('inc/foot.php'); ?>
  </body>
</html>
