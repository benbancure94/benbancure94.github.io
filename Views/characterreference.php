<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Portfolio</title>
    <?php include("../Shared/cssstyles.html"); ?>
</head>
<body>
    <?php include("../Shared/jsscripts.html") ?>
    <a name="top"></a>
    <?php include("../Shared/nav.html"); ?>
    <div class="container-fluid">
        <?php include("../Shared/about.html"); ?>
        <div>
            <div class="ben-portfolio-cont">
                <h1 class="text-center">Character References</h1>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            
                            <!-- Abbey Fajardo -->
                            <div class="media col-md-6 col-lg-4 mb-3">
                                <div class="media-body">
                                    <h4>Abbey Fajardo</h4>
                                    <span>+639988408241</span><br/>
                                    <span>abbey.fajardo@gmail.com</span>
                                </div>
                            </div>

                            <!-- Angel Julagay -->
                            <div class="media col-md-6 col-lg-4 mb-3">
                                <div class="media-body">
                                    <h4>Angel Julagay</h4>
                                    <span>+639164714872</span><br/>
                                    <span>angeljulagay@gmail.com</span>
                                </div>
                            </div>

                            <!-- Marife Delicano -->
                            <div class="media col-md-6 col-lg-4 mb-3">
                                <div class="media-body">
                                    <h4>Marife Delicano</h4>
                                    <span>+639163123986</span><br/>
                                    <span>marife_delicano@yahoo.com</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="ben-tophome-links">
                <a href="#top">Back to Top</a>
                <a href="index.php">Back to Home</a>
            </div>
        </div>
        <?php include("../Shared/footer.html"); ?>
    </div>
</body>
</html>