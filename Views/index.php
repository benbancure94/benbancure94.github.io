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
            <div class="ben-portfolio-cont">
                <h1 class="text-center">My Portfolio</h1>
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div>
                            <a href="characteristics.php"><img class="img rounded-circle" src="../Content/images/home/personality.jpg"/></a>
                        </div>
                        <h5>Characteristics, Personality, and Attitude</h5>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div>
                            <a href="hobbies.php"><img class="img rounded-circle" src="../Content/images/home/hobbies.jpg"/></a>
                        </div>
                        <h5>Hobbies and Personal Skills</h5>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div>
                            <a href="skills.php"><img class="img rounded-circle" src="../Content/images/home/softwareskills.jpg"/></a>
                        </div>
                        <h5>Software Skills (Must-View)</h5>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div>
                            <a href="employments.php"><img class="img rounded-circle" src="../Content/images/home/employments.jpg"/></a>
                        </div>
                        <h5>Employments</h5>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div>
                            <a href="characterreference.php"><img class="img rounded-circle" src="../Content/images/home/characterreference.jpg"/></a>
                        </div>
                        <h5>Character References</h5>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="ben-tophome-links">
                <a href="#top">Back to Top</a>
            </div>
        </div>
        <?php include("../Shared/footer.html"); ?>
    </div>
</body>
</html>