<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Jobs Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

  </head>
  <body>
  <?php include_once("inc/Header.php"); ?>
    <?php 
    require_once 'controller/ui.ctrl.php';
    $loginId='971650834v';//$_SESSION['loginID'];
    $uictrll=new uiControl();
    $result=$uictrll-> requestHistory($loginId);
    if ($uictrll->hasJobsSubmitted($result)) {
        ?>
        <table>
			<thead>
                <tr>
                    <th>Request ID</th>
                    <th>Request Type</th>
                    <th>Status</th>
                    <th>Description</th>
                </tr>
			</thead>
			<tbody>       
    <?php
    while ($row=$uictrll->fetchData($result)){
        echo "<tr><td class='column1' >" .$row["requestNo"]."</td><td class='column1'>".$row["details"]."</td><td class='column1'>".$row["status"] . "</td><td class='column1'>".$row["description"]."</td></tr>";
    }?>
            </tbody>
        </table>
    <?php
    }
    else   echo "No Jobs Submitted Yet";
    
    ?>
    <?php include_once('inc/Footer.php'); ?>
  </body>

</html>