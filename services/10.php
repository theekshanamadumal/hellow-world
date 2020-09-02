<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Diploma fees</title>
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
          <h3>පශ්චාත් උපාධි අධ්‍යාපන ඩිප්ලෝමා පාඨමාලා ගාස්තුවෙන් අඩක් ආපසු ගෙවීමේ සේවාව</h3>

          <div>
              
            <h4 class="bg-primary" style="width: 700px;">
              සම්පූර්ණ කල යුතු මූලික ලේඛන
            </h4>
            
            <ol>
              <li style="width: 600px;">ඉල්ලීම් ලිපිය පිටපත් 02</li>
              <li style="width: 600px;">පොදු 35 වවුචර් 02</li>
              <li style="width: 600px;">
                මුදල් ගෙවනලද රිසිට්පතක්(මුල් පිටපත හා ඡායාපිටපතක්)
              </li>
              <li style="width: 600px;">
                ගෙවූ පාඨමාලා ගාස්තුව පිළිබඳව පාඨමාලාව හැදෑරූ ආයතනයේ ලිපිය(මුල් පිටපත සමඟ)
              </li>
              <li style="width: 600px;">
                නව සේවයේ වැඩ භාර ගැනීමේ ලිපිය පිටපත් 03
              </li>
              
            </ol>
          </div>
          <div>
              
            <h4 class="bg-primary" style="width: 700px;">
              සම්පූර්ණ කල යුතු මූලික සුදුසුකම්
            </h4>
            
            <ol>
              <li style="width: 600px;">ඩිප්ලෝමා සහතිකයේ ප්‍රතිඵල සනාථ වී තිබිය යුතුය</li>
              
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
              $variable = 10;
              include_once('inc/request.php');
            ?>
          </div>
        </div>
      </div>
    </div>
    <?php include_once('inc/foot.php'); ?>
  </body>
</html>
