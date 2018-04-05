<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Portfolio - Home</title>
    <?php include("../Shared/cssstyles.html"); ?>
</head>
<body>
    <?php include("../Shared/jsscripts.html") ?>
    <a name="top"></a>
    <?php include("../Shared/nav.html"); ?>
    <div class="container-fluid">
        <?php include("../Shared/about.html"); ?>
        <div>
            <div class="ben-portfolio-cont ben-portfolio-home-cont">
                <h1 class="text-center">Seminars Attended</h1>
                <div class="card ben-card">
                    <div class="card-body">
                        <div class="row">

                            <!-- DevCon Summit 2016 -->
                            <div class="media col-md-6">
                                <img class="mr-3" src="../Content/images/seminarsattended/devconsummit.png" alt="DevCon Summit">
                                <div class="media-body">
                                    <h5>DevCon Summit 2016</h5>
                                    <p>
                                        The Biggest Developer Conference in the Philippines<br/>
                                        November 5 - 6, 2016<br/>
                                        <a href="https://summit.devcon.ph/" target="_blank">https://summit.devcon.ph/</a>
                                    </p>
                                    <span><a href="../Content/images/seminarsattended/devcon.png" target="_blank">View Certificate</a></span>
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