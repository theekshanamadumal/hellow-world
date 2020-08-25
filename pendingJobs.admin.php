<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pending Jobs</title>
</head>
<body>
<?php include_once("inc/Header.php"); ?>
<link rel="stylesheet" href="css/pendingJobs.css">


<!-- Search Bar -->

    <div class="row">
        <div class="col-sm-8"> </div>
        <div class="col-sm-4"> 
            <div class="search-bar"><input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search..."></div>
        </div>
    </div>
<!-- Table-->
<div>
    <div class='table-responsive'>
        <table id="tablePreview" class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>Request #</th>
                    <th>Request ID</th>
                    <th>Request Type</th>
                    <th>User ID</th>
                    <th>Description </th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <th>1</th>
                    <td>2</td>
                    <td>2</td>
                    <td>2</td>
                    <td>2</td>
                    <td>2</td>

                    
                
                
                </tr>


            </tbody>
        </table>
    
    </div>
</div>




<?php include_once('inc/Footer.php'); ?> 
</body>


</html>