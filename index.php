<?php

?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <link rel='shortcut icon' href='upload/icon.png' type='image/x-icon'>
    <link rel='stylesheet' href='css/all.min.css'>
    <link rel='stylesheet' href='css/bootstrap_2.min.css'>
    <link rel='stylesheet' href='css/style.css'>
    <title>API</title>
</head>

<body>

    <div class='container'>
        <h1 class="text-center p-5">API
            <i class="serverIcon fad fa-server"></i>
        </h1>
    </div>

    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-6">
                <h3>Data Finder</h3>
                <p class="message card card-body"> The message will go here </p>
                <p><button class="btn btn-info" id="getMessage"> Get Message </button></p>
            </div>


            <div class="col-6">
                <h3>Data Sender</h3>
                <form id="apiform">
                    <input class="form-control" type="text" name="title" placeholder="title" autocomplete="on"><br>
                    <textarea class="form-control" name="body" id="" cols="30" rows="10" placeholder="body"
                        autocomplete="on"></textarea><br>
                    <input class="form-control" type="text" name="author" placeholder="author" autocomplete="on"><br>
                    <input class="form-control" type="text" name="category_id" placeholder="category_id"
                        autocomplete="on"><br><br>
                    <button class="btn btn-info" id="postMessage"> Post Message </button>
                </form>
            </div>

        </div>
    </div>

    <script src='js/jquery.js'></script>
    <script src='js/bootstrap.min.js'></script>
    <script src='js/app.js'></script>

    <script src="jquery.serialize-object.js"></script>
    <script src="ajaxCall.js"></script>
</body>

</html>