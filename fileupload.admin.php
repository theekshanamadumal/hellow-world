<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Documents</title>
</head>
<body>
<?php include_once("inc/Header.php"); ?>
    <div class="container">
        <form action="fileupload.admin.php">
            <div class="form-group">
                <label for="sel1">Category</label>
                <select class="form-control" id="sel1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>
            </div>

            <div class="form-group">
                <label for="inputdefault">NIC number</label>
                <input class="form-control" id="inputdefault" type="text">
            </div>

            <div class="form-group">
                <label for="inputdefault">Description</label>
                <input class="form-control" id="inputdefault" type="text">
            </div>

            

            <label for="myfile">Select files:</label>
            <input type="file" id="myfile" name="myfile" multiple><br><br>

            <button type="submit" class="btn btn-success">Submit</button>


        </form> 

    </div>
<?php include_once('inc/Footer.php'); ?>
</body>
</html>