<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <title>Builds | robtaylor.info</title>
  </head>
  <body>
  <div class="header">
        <h1 class="text-center">RT</h1>
    </div>

    <div class="heading">
        <span>
            <h1>Builds</h1>
        </span>
    </div>

    <div class="container">
    <a class="btn btn-primary" href="http://robtaylor.info" role="button" style="width: 100%;">Return to main website</a>
    <br />
    <br />

    <div class="card text-center">
        <div class="card-header">Testing Build</div>
        <div class="card-body">
            <h5 class="card-title">Latest Testing Build</h5>
            <p class="card-text">This is the latest build ready for test.</p>
            <br />
            <?php
                $files_android = scandir('builds/dissertation/test/android/app/build/outputs/apk/devKernel/release/', SCANDIR_SORT_DESCENDING);
                $files_ios = scandir('builds/dissertation/test/ios/', SCANDIR_SORT_DESCENDING);
                $android_file = "builds/dissertation/test/android/app/build/outputs/apk/devKernel/release/" . $files_android[0];
                $ios_file = "builds/dissertation/test/ios/" . $files_ios[0];

                if (is_dir($android_file)) {
                    echo "<button type='button' class='btn btn-primary' disabled>Android Build Coming Soon</button> <br />";
                } elseif (file_exists($android_file)) {
                    echo "<a href='$android_file' class='btn btn-primary'>Download Android Build</a>";
                    echo "<p class='lead'>Build uploaded: " . date("F d Y H:i:s", filemtime($android_file)) . "</p>";
                }

                echo "<br />";
                if (is_dir($ios_file)) {
                    echo "<button type='button' class='btn btn-primary' disabled>iOS Build Coming Soon</button>";
                } elseif (file_exists($ios_file)) {
                    echo "<a href='$ios_file' class='btn btn-primary'></i>Download iOS Build</a>";
                    echo "<p class='lead'>Build uploaded: " . date("F d Y H:i:s", filemtime($ios_file)) . "</p>";
                }
            ?>
        </div>
    </div>
    <br />
    <br />

    <div class="card text-center">
        <div class="card-header">Latest Build</div>
        <div class="card-body">
            <h5 class="card-title">Latest Build from Jenkins</h5>
            <p class="card-text">This is the latest build from Jenkins. It's likely unstable and should only be used if instructed to.</p>
            <br />
            <?php
                $files_android = scandir('builds/dissertation/all/android/app/build/outputs/apk/devKernel/release/', SCANDIR_SORT_DESCENDING);
                $files_ios = scandir('builds/dissertation/all/ios/', SCANDIR_SORT_DESCENDING);
                $android_file = "builds/dissertation/all/android/app/build/outputs/apk/devKernel/release/" . $files_android[0];
                $ios_file = "builds/dissertation/all/ios/" . $files_ios[0];

                if (is_dir($android_file)) {
                    echo "<button type='button' class='btn btn-primary' disabled>Android Build Coming Soon</button> <br />";
                } elseif (file_exists($android_file)) {
                    echo "<a href='$android_file' class='btn btn-primary'>Download Android Build</a>";
                    echo "<p class='lead'>Build uploaded: " . date("F d Y H:i:s", filemtime($android_file)) . "</p>";
                }

                echo "<br />";
                if (is_dir($ios_file)) {
                    echo "<button type='button' class='btn btn-primary' disabled>iOS Build Coming Soon</button>";
                } elseif (file_exists($ios_file)) {
                    echo "<a href='$ios_file' class='btn btn-primary'></i>Download iOS Build</a>";
                    echo "<p class='lead'>Build uploaded: " . date("F d Y H:i:s", filemtime($ios_file)) . "</p>";
                }
            ?>
        </div>
    </div>
    <br />
    <br />

    <div class="card" style="width: auto;">
        <div class="card-header">Files and Directories</div>
        <ul class="list-group list-group-flush">
    <?php 
        $dir = './builds'; 
        $files = scandir($dir); 
        foreach($files as $ind_file){ 
    ?> 

        <li class="list-group-item"><a href="<?php echo $dir."/".$ind_file;?>"><?php echo $ind_file;?></li>
    <?php 
    } 
    ?> 
    </div>

    </ul>
    <br />
    <br />
</div> 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>