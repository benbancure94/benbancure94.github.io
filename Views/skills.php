<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Portfolio - Software Skills</title>
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
                <h1 class="text-center">Software Skills (Must-View)</h1>
                <div id="skillsAccordion"> 
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center">
                                <a class="card-link" data-toggle="collapse" data-parent="#skillsAccordion" href="#frontEndDev">
                                Front-end and Client Development
                                </a>
                            </h4>
                        </div>
                        <div id="frontEndDev" class="collapse">
                            <div class="card-body">
                                <div class="row">

                                    <!-- HTML -->
                                    <div class="media col-md-6 mb-3">
                                        <img class="mr-3" src="../Content/images/skills/html5.png" alt="HTML">
                                        <div class="media-body">
                                            <h5 class="mt-0">HTML / HTML5</h5>
                                            <p>
                                                Hypertext Markup Language. It is a language used to create the framework or foundation of a web page.
                                            </p>
                                            <p>
                                                Click 
                                                <a href="https://www.w3.org/html/" target="_blank">here</a>, 
                                                <a href="https://html.com/" target="_blank">here</a>, 
                                                and 
                                                <a href="https://developer.mozilla.org/en-US/docs/Web/HTML" target="_blank">here</a> 
                                                to read more.
                                            </p>
                                        </div>
                                    </div>
                                    
                                    <!-- CSS -->
                                    <div class="media col-md-6 mb-3">
                                        <img class="mr-3" src="../Content/images/skills/css3.png" alt="CSS">
                                        <div class="media-body">
                                            <h5>CSS / CSS3</h5>
                                            <p>
                                                Cascading Style Sheets. It is a styling language used to style the framework or foundation of a web page.
                                            </p>
                                            <p>
                                                Click 
                                                <a href="https://www.w3.org/Style/CSS/" target="_blank">here</a>, 
                                                <a href="http://css3.com/" target="_blank">here</a> 
                                                and 
                                                <a href="https://developer.mozilla.org/en-US/docs/Web/CSS" target="_blank">here</a> 
                                                to read more.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Bootstrap -->
                                    <div class="media col-md-6 mb-3">
                                        <img class="mr-3" src="../Content/images/skills/bootstrap.png" alt="Bootstrap">
                                        <div class="media-body">
                                            <h5>Bootstrap</h5>
                                            <p>
                                                The responsive CSS and JavaScript framework and toolkit framework developed by Twitter, Inc.
                                            </p>
                                            <p>
                                                Click 
                                                <a href="http://getbootstrap.com/" target="_blank">here</a> 
                                                to read more.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Materialize -->
                                    <div class="media col-md-6 mb-3">
                                        <img class="mr-3" src="../Content/images/skills/materialize.png" alt="Materialize">
                                        <div class="media-body">
                                            <h5>Materialize</h5>
                                            <p>
                                                The responsive CSS and JavaScript framework and toolkit developed based on Google's Material Design.
                                            </p>
                                            <p>
                                                Click 
                                                <a href="http://materializecss.com/" target="_blank">here</a> 
                                                to read more.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- JavaScript -->
                                    <div class="media col-md-6 mb-3">
                                        <img class="mr-3" src="../Content/images/skills/javascript.png" alt="JavaScript">
                                        <div class="media-body">
                                            <h5>JavaScript</h5>
                                            <p>
                                                JavaScript, in web development usage, is a scripting language used commonly to make web elements interactive. JavaScript is also used in non-browser environments such as Node.js.
                                            </p>
                                            <p>
                                                Click 
                                                <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" target="_blank">here</a> and
                                                <a href="https://www.javascript.com/" target="_blank">here</a> 
                                                to read more.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- jQuery -->
                                    <div class="media col-md-6 mb-3">
                                        <img class="mr-3" src="../Content/images/skills/jquery.png" alt="jQuery">
                                        <div class="media-body">
                                            <h5>jQuery</h5>
                                            <p>
                                                jQuery is a JavaScript framework whose purpose is to simplify and make JavaScript much easier to use in website development.
                                            </p>
                                            <p>Click <a href="http://jquery.com/" target="_blank">here</a> to read more.</p>
                                        </div>
                                    </div>

                                    <!-- AJAX -->
                                    <div class="media col-md-6 mb-3 mb-md-0">
                                        <img class="mr-3" src="../Content/images/skills/ajax.png" alt="AJAX">
                                        <div class="media-body">
                                            <h5>AJAX</h5>
                                            <p>
                                                Asynchronous JavaScript and XML. It is used to asynchronously send request and receive then the response and render them to web user interface without reloading the entire web page.
                                            </p>
                                            <p>
                                                Click 
                                                <a href="https://developer.mozilla.org/en-US/docs/Web/Guide/AJAX" target="_blank">here</a> 
                                                to read more.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Font Awesome -->
                                    <div class="media col-md-6">
                                        <img class="mr-3" src="../Content/images/skills/fontawesome.png" alt="Font Awesome">
                                        <div class="media-body">
                                            <h5>Font Awesome</h5>
                                            <p>
                                                The CSS Toolkit for embedding iconic fonts and logos.
                                            </p>
                                            <p>Click <a href="https://fontawesome.com/" target="_blank">here</a> to read more.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center">
                                <a class="card-link" data-toggle="collapse" data-parent="#skillsAccordion" href="#backEndDev">
                                Back-end and Server Development
                                </a>
                            </h4>
                        </div>
                        <div id="backEndDev" class="collapse">
                            <div class="card-body">
                                <div class="row">

                                    <!-- PHP -->
                                    <div class="media col-md-6 mb-3">
                                        <img class="mr-3" src="../Content/images/skills/php.png" alt="PHP">
                                        <div class="media-body">
                                            <h5>PHP</h5>
                                            <p>
                                                Hypertext Preprocessor is a widely-used open source general-purpose scripting language that is especially suited for web development and can be embedded into HTML.
                                            </p>
                                            <p>
                                                Click 
                                                <a href="http://php.net/" target="_blank">here</a> 
                                                to read more.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Laravel -->
                                    <div class="media col-md-6 mb-3">
                                        <img class="mr-3" src="../Content/images/skills/laravel.png" alt="Laravel">
                                        <div class="media-body">
                                            <h5>Laravel</h5>
                                            <p>
                                                It is a PHP framework that supports Model-View-Controller architecture.
                                            </p>
                                            <p>
                                                Click 
                                                <a href="https://laravel.com/" target="_blank">here</a> 
                                                to read more.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- C# -->
                                    <div class="media col-md-6 mb-3">
                                        <img class="mr-3" src="../Content/images/skills/csharp.png" alt="C#">
                                        <div class="media-body">
                                            <h5>C#</h5>
                                            <p>
                                                C# is a multi-paradigm programming language encompassing strong typing, imperative, declarative, functional, generic, object-oriented, and component-oriented programming disciplines.
                                            </p>
                                            <p>
                                                Click 
                                                <a href="https://docs.microsoft.com/en-us/dotnet/csharp/" target="_blank">here</a> 
                                                to read more.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- VB.NET -->
                                    <div class="media col-md-6 mb-3">
                                        <img class="mr-3" src="../Content/images/skills/vbnet.png" alt="VB.NET">
                                        <div class="media-body">
                                            <h5>VB.NET</h5>
                                            <p>
                                                Visual Basic .NET is a multi-paradigm, object-oriented programming language, implemented on the .NET Framework, and is the successor to its original Visual Basic language.
                                            </p>
                                            <p>
                                                Click 
                                                <a href="https://docs.microsoft.com/en-us/dotnet/visual-basic/" target="_blank">here</a> 
                                                to read more.
                                            </p>
                                        </div>
                                    </div>
                                    
                                    <!-- ASP.NET -->
                                    <div class="media col-md-6 mb-3">
                                        <img class="mr-3" src="../Content/images/skills/aspnet.png" alt="ASP.NET">
                                        <div class="media-body">
                                            <h5>ASP.NET</h5>
                                            <p>
                                                ASP.NET is an open-source server-side web application framework designed for web development to build dynamic web sites, web applications and web services. It also supports Model-View-Controller architecture.
                                            </p>
                                            <p>
                                                Click 
                                                <a href="https://www.asp.net/" target="_blank">here</a> and 
                                                <a href="https://docs.microsoft.com/en-us/aspnet/" target="_blank">here</a> 
                                                to read more.
                                            </p>
                                        </div>
                                    </div>
                                    
                                    <!-- Node.js -->
                                    <div class="media col-md-6 mb-3">
                                        <img class="mr-3" src="../Content/images/skills/nodejs.png" alt="Node.js">
                                        <div class="media-body">
                                            <h5>Node.js</h5>
                                            <p>
                                                Node.js is an open-source, cross-platform JavaScript run-time environment for executing JavaScript code server-side.
                                            </p>
                                            <p>
                                                Click  
                                                <a href="https://nodejs.org/en/" target="_blank">here</a> 
                                                to read more.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- SignalR -->
                                    <div class="media col-md-6 mb-3">
                                        <img class="mr-3" src="../Content/images/skills/signalr.png" alt="SignalR">
                                        <div class="media-body">
                                            <h5>SignalR</h5>
                                            <p>
                                                An ASP.net library used to facilitate the real-time web functionalities.
                                            </p>
                                            <p>
                                                Click 
                                                <a href="http://signalr.net/" target="_blank">here</a> and 
                                                <a href="https://www.asp.net/signalr" target="_blank">here</a> 
                                                to read more.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Microsoft Azure -->
                                    <div class="media col-md-6 mb-3">
                                        <img class="mr-3" src="../Content/images/skills/azure.png" alt="Microsoft Azure">
                                        <div class="media-body">
                                            <h5>Microsoft Azure</h5>
                                            <p>
                                                Microsoft Azure is a cloud computing service created by Microsoft for building, testing, deploying, and managing applications and services through a global network of Microsoft-managed data centers.
                                            </p>
                                            <p>
                                                Click 
                                                <a href="https://azure.microsoft.com" target="_blank">here</a> and
                                                <a href="https://docs.microsoft.com/en-us/azure/" target="_blank">here</a> 
                                                to read more.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- phpMyAdmin -->
                                    <div class="media col-md-6 mb-3">
                                        <img class="mr-3" src="../Content/images/skills/phpmyadmin.png" alt="phpMyAdmin">
                                        <div class="media-body">
                                            <h5>phpMyAdmin</h5>
                                            <p>
                                                phpMyAdmin is a free and open source administration tool for MySQL and MariaDB.
                                            </p>
                                            <p>
                                                Click 
                                                <a href="https://www.phpmyadmin.net/" target="_blank">here</a> 
                                                to read more.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Entity Framework -->
                                    <div class="media col-md-6 mb-3">
                                        <img class="mr-3" src="../Content/images/skills/entityframework.png" alt="Entity Framework">
                                        <div class="media-body">
                                            <h5>Entity Framework</h5>
                                            <p>
                                                Entity Framework (EF) is an object-relational mapper that enables .NET developers to work with relational data using domain-specific objects.
                                            </p>
                                            <p>
                                                Click 
                                                <a href="https://docs.microsoft.com/en-us/ef/" target="_blank">here</a> 
                                                to read more.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Razor -->
                                    <div class="media col-md-6 mb-3">
                                        <img class="mr-3" src="../Content/images/skills/razor.png" alt="Razor">
                                        <div class="media-body">
                                            <h5>Razor</h5>
                                            <p>
                                                Razor is an ASP.net server-side web markup language or syntax for C# and VB.net. It is a part of ASP.net MVC.
                                            </p>
                                            <p>
                                                Read 
                                                <a href="https://docs.microsoft.com/en-us/aspnet/web-pages/overview/getting-started/introducing-razor-syntax-c" target="_blank">Razor for C#</a> and 
                                                <a href="https://docs.microsoft.com/en-us/aspnet/web-pages/overview/getting-started/introducing-razor-syntax-vb" target="_blank">Razor for VB.net</a>   
                                                for more.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- XAMPP -->
                                    <div class="media col-md-6 mb-3">
                                        <img class="mr-3" src="../Content/images/skills/xampp.png" alt="XAMPP">
                                        <div class="media-body">
                                            <h5>XAMPP</h5>
                                            <p>
                                                XAMPP, or Cross-Platform, Apache, MariaDB, PHP, and Perl, is a free and open source cross-platform web server solution stack package developed by Apache Friends.
                                            </p>
                                            <p>
                                                Click 
                                                <a href="https://www.apachefriends.org/index.html" target="_blank">here</a> 
                                                to read more.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Apache -->
                                    <div class="media col-md-6 mb-3">
                                        <img class="mr-3" src="../Content/images/skills/apache.png" alt="Apache">
                                        <div class="media-body">
                                            <h5>Apache</h5>
                                            <p>
                                                The Apache HTTP Server is a free, most widely-used, and open-source cross-platform HTTP web server developed by Apache Software Foundation.
                                            </p>
                                            <p>
                                                Click 
                                                <a href="https://httpd.apache.org/" target="_blank">here</a> 
                                                to read more.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- API Integration -->
                                    <div class="media col-md-6 mb-3">
                                        <img class="mr-3" src="../Content/images/skills/api.png" alt="API">
                                        <div class="media-body">
                                            <h5>API Integration</h5>
                                            <p>
                                                An application program interface is a set of routines, protocols, and tools for building software applications. It specifies how software components should interact. <a href="https://developers.facebook.com/" target="_blank">Facebook API</a>, <a href="https://developers.google.com/" target="_blank">Google API</a>, <a href="https://developer.microsoft.com/en-us/" target="_blank">Microsoft API</a>, <a href="https://api.slack.com/" target="_blank">Slack API</a>, <a href="https://asana.com/developers" target="_blank">Asana API</a>, and <a href="https://help.getharvest.com/api-v2/" target="_blank">Harvest API</a> are the examples of APIs that can be integrated to software applications.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Rest API -->
                                    <div class="media col-md-6 mb-3">
                                        <img class="mr-3" src="../Content/images/skills/rest.png" alt="Rest API">
                                        <div class="media-body">
                                            <h5>Rest API</h5>
                                            <p>
                                                Representational State Transfer is an architectural style that defines a set of constraints and properties based on HTTP.
                                            </p>
                                            <p>
                                                Click 
                                                <a href="http://www.restapitutorial.com/" target="_blank">here</a> 
                                                to read more.
                                            </p>
                                        </div>
                                    </div>
                                    
                                    <!-- Database Management -->
                                    <div class="media col-md-6 mb-3">
                                        <img class="mr-3" src="../Content/images/skills/dbms.png" alt="Database Management">
                                        <div class="media-body">
                                            <h5>Database Management and Administration</h5>
                                            <p>
                                                The management of database through defining, creating, reading, modifying, updating, and deleting of database, particularly using database management system or DBMS, and relational database management system or RDBMS, when managing relational databases. SQL or structured query language is a language used for database management. <a href="https://www.mysql.com/" target="_blank">MySQL</a> and <a href="https://www.microsoft.com/en-us/sql-server/sql-server-2017" target="_blank">SQL Server</a> are the examples of RDBMS. <a href="https://docs.microsoft.com/en-us/sql/t-sql/language-reference" target="_blank">Transact-SQL or T-SQL</a>, an extension of SQL, is used for SQL Server database management.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Stored Procedure -->
                                    <div class="media col-md-6">
                                        <img class="mr-3" src="../Content/images/skills/storedproc.png" alt="Stored Procedure">
                                        <div class="media-body">
                                            <h5>Stored Procedure</h5>
                                            <p>
                                                A subroutine available to applications that access a relational database management system.
                                            </p>
                                            <p>
                                                Click 
                                                <a href="https://dev.mysql.com/doc/connector-net/en/connector-net-tutorials-stored-procedures.html" target="_blank">here</a> and
                                                <a href="https://docs.microsoft.com/en-us/sql/relational-databases/stored-procedures/stored-procedures-database-engine" target="_blank">here</a> 
                                                to read about how to create stored procedures in MySQL and SQL Server respectively.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center">
                                <a class="card-link" data-toggle="collapse" data-parent="#skillsAccordion" href="#desktopDev">
                                Desktop Development
                                </a>
                            </h4>
                        </div>
                        <div id="desktopDev" class="collapse">
                            <div class="card-body">
                                <div class="row">

                                    <!-- C# -->
                                    <div class="media col-md-6 mb-3">
                                        <img class="mr-3" src="../Content/images/skills/csharp.png" alt="C#">
                                        <div class="media-body">
                                            <h5>C#</h5>
                                            <p>
                                                C# is a multi-paradigm programming language encompassing strong typing, imperative, declarative, functional, generic, object-oriented, and component-oriented programming disciplines.
                                            </p>
                                            <p>
                                                Click 
                                                <a href="https://docs.microsoft.com/en-us/dotnet/csharp/" target="_blank">here</a> 
                                                to read more.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- VB.NET -->
                                    <div class="media col-md-6 mb-3">
                                        <img class="mr-3" src="../Content/images/skills/vbnet.png" alt="VB.NET">
                                        <div class="media-body">
                                            <h5>VB.NET</h5>
                                            <p>
                                                Visual Basic .NET is a multi-paradigm, object-oriented programming language, implemented on the .NET Framework, and is the successor to its original Visual Basic language.
                                            </p>
                                            <p>
                                                Click 
                                                <a href="https://docs.microsoft.com/en-us/dotnet/visual-basic/" target="_blank">here</a> 
                                                to read more.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Java -->
                                    <div class="media col-md-6 mb-3 mb-md-0">
                                        <img class="mr-3" src="../Content/images/skills/java.png" alt="Java">
                                        <div class="media-body">
                                            <h5>Java</h5>
                                            <p>
                                                Java is a general-purpose computer-programming language that is concurrent, class-based, object-oriented, and specifically designed to have as few implementation dependencies as possible.
                                            </p>
                                            <p>
                                                Click 
                                                <a href="https://java.com/en/" target="_blank">here</a> 
                                                to read more.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Office AddIn -->
                                    <div class="media col-md-6">
                                        <img class="mr-3" src="../Content/images/skills/office.png" alt="VSTO AddIn">
                                        <div class="media-body">
                                            <h5>Microsoft Office AddIn Development</h5>
                                            <p>
                                                Microsoft Office AddIn is a software extension that is utilized by, and can interact with, Microsoft Office. Its older version is <a href="https://msdn.microsoft.com/en-us/library/jj620922.aspx" target="_blank">Microsoft Office COM or VSTO (Visual Studio Tools for Office) Addin</a>. However, the <a href="https://docs.microsoft.com/en-us/office/dev/add-ins/" target="_blank">newest version of Microsoft Office AddIn</a> can be used by multiple platforms and is web-based.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center">
                                <a class="card-link" data-toggle="collapse" data-parent="#skillsAccordion" href="#otherSkills">
                                Other Software Skills, Experiences, Knowledge, and Accomplishments
                                </a>
                            </h4>
                        </div>
                        <div id="otherSkills" class="collapse">
                            <div class="card-body">
                                <div class="row">

                                    <!-- Adobe Photoshop -->
                                    <div class="media col-md-6 mb-3">
                                        <img class="mr-3" src="../Content/images/skills/photoshop.png" alt="Adobe Photoshop">
                                        <div class="media-body">
                                            <h5>Adobe Photoshop</h5>
                                            <p>
                                                Adobe Photoshop is one of the most widely-used raster graphics editor developed and published by Adobe Systems.
                                            </p>
                                            <p>
                                                Click 
                                                <a href="https://www.adobe.com/Photoshop" target="_blank">here</a> 
                                                to read more.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- SVG -->
                                    <div class="media col-md-6 mb-3">
                                        <img class="mr-3" src="../Content/images/skills/svg.png" alt="SVG">
                                        <div class="media-body">
                                            <h5>SVG</h5>
                                            <p>
                                                Scalable Vector Graphics is a 2-dimensional vector graphics format which is based on XML.
                                            </p>
                                            <p>
                                                Click 
                                                <a href="https://www.w3.org/Graphics/SVG/" target="_blank">here</a> and 
                                                <a href="https://developer.mozilla.org/en-US/docs/Web/SVG" target="_blank">here</a> 
                                                to read more.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- JSON -->
                                    <div class="media col-md-6 mb-3">
                                        <img class="mr-3" src="../Content/images/skills/json.png" alt="JSON">
                                        <div class="media-body">
                                            <h5>JSON</h5>
                                            <p>
                                                JavaScript Object Notation is a file format consisting of text of key-value pair and collection data that is then sent to the server and vice versa. It is based on the subset of JavaScript.
                                            </p>
                                            <p>
                                                Click 
                                                <a href="https://www.json.org/" target="_blank">here</a> 
                                                to read more.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- XML -->
                                    <div class="media col-md-6 mb-3">
                                        <img class="mr-3" src="../Content/images/skills/xml.png" alt="XML">
                                        <div class="media-body">
                                            <h5>XML</h5>
                                            <p>
                                                Extensive Markup Language is a language which is much like HTML, but its tags and attributes are user-defined. XML is designed to carry data, unlike HTML which is designed to display data.
                                            </p>
                                            <p>
                                                Click 
                                                <a href="https://www.w3.org/XML/" target="_blank">here</a> 
                                                to read more.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Lucene.NET -->
                                    <div class="media col-md-6 mb-3">
                                        <img class="mr-3" src="../Content/images/skills/lucene.png" alt="Lucene.NET">
                                        <div class="media-body">
                                            <h5>Full-text Search and Lucene.NET</h5>
                                            <p>
                                                Full-text search is a technique for searching a single computer-stored document or a collection in a full text database. <a href="https://lucenenet.apache.org/" target="_blank">Lucene.NET</a> is a full-text search engine library for .NET derived from <a href="https://lucene.apache.org/" target="_blank">Lucene</a> Java-based Full-text Search Engine library.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- OAuth Integration -->
                                    <div class="media col-md-6 mb-3">
                                        <img class="mr-3" src="../Content/images/skills/oauth.png" alt="OAuth">
                                        <div class="media-body">
                                            <h5>OAuth Integration</h5>
                                            <p>
                                                The OAuth 2.0 authorization framework enables third-party applications to obtain limited access to a web service. Facebook, Google, Microsoft, and Slack are the examples of the third-party applications.
                                            </p>
                                            <p>
                                                Click 
                                                <a href="https://oauth.net/" target="_blank">here</a> 
                                                to read more.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- RegEx -->
                                    <div class="media col-md-6 mb-3">
                                        <img class="mr-3" src="../Content/images/skills/regex.png" alt="RegEx">
                                        <div class="media-body">
                                            <h5>RegEx</h5>
                                            <p>
                                                A regular expression (regex or regexp for short) is a special text string for describing a search pattern.
                                            </p>
                                            <p>
                                                Click 
                                                <a href="https://www.regular-expressions.info/" target="_blank">here</a>  
                                                to read more.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Onion Architecture -->
                                    <div class="media col-md-6 mb-3">
                                        <img class="mr-3" src="../Content/images/skills/onionarchitecture.png" alt="Onion Architecture">
                                        <div class="media-body">
                                            <h5>Onion Architecture</h5>
                                            <p>
                                                Provides a better way to build applications for better testability, maintainability, and dependability on the infrastructures like databases and services. 
                                            </p>
                                            <p>
                                                Click 
                                                <a href="https://social.technet.microsoft.com/wiki/contents/articles/36655.onion-architecture-in-asp-net-core-mvc.aspx" target="_blank">here</a> 
                                                to read about Onion Architecture in ASP.net MVC.
                                            </p>
                                        </div>
                                    </div>
                                    
                                    <!-- Virtual Machine Management -->
                                    <div class="media col-md-6 mb-3">
                                        <img class="mr-3" src="../Content/images/skills/vm.png" alt="Virtual Machine Management">
                                        <div class="media-body">
                                            <h5>Virtual Machine Management</h5>
                                            <p>
                                                Virtual machine is an emulation of a computer system. It is based on computer architectures and provides functionality of a physical computer.
                                            </p>
                                            <p>
                                                Click 
                                                <a href="https://azure.microsoft.com/en-us/services/virtual-machines/" target="_blank">here</a> 
                                                to read about Microsoft Windows virtual machine.
                                            </p>
                                        </div>
                                    </div>
                                    
                                    <!-- Microsoft Office -->
                                    <div class="media col-md-6 mb-3">
                                        <img class="mr-3" src="../Content/images/skills/msoffice.png" alt="Microsoft Office">
                                        <div class="media-body">
                                            <h5>Microsoft Office</h5>
                                            <p>
                                                Microsoft Office is a family of client software, server software, and services developed by Microsoft, such as <a href="https://products.office.com/en/word" target="_blank">Word</a>, <a href="https://products.office.com/en/excel" target="_blank">Excel</a>, <a href="https://products.office.com/en/powerpoint" target="_blank">PowerPoint</a>, and 
                                                <a href="https://products.office.com/en/access" target="_blank">Access</a>.
                                            </p>
                                            <p>
                                                Click 
                                                <a href="https://products.office.com/en/home" target="_blank">here</a> 
                                                to read about Microsoft Office. 
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Office OpenXML --> 
                                    <div class="media col-md-6 mb-3">
                                        <img class="mr-3" src="../Content/images/skills/openxml.png" alt="Office OpenXML">
                                        <div class="media-body">
                                            <h5>Office OpenXML</h5>
                                            <p>
                                                Office Open XML or Microsoft Open XML is a zipped, XML-based file format developed by Microsoft for representing spreadsheets, charts, presentations and word processing documents.
                                            </p>
                                            <p>
                                                Click 
                                                <a href="http://officeopenxml.com/" target="_blank">here</a> and
                                                <a href="https://msdn.microsoft.com/en-us/library/office/gg607163(v=office.14).aspx" target="_blank">here</a> 
                                                to read about Office OpenXML, and 
                                                <a href="https://msdn.microsoft.com/en-us/library/office/bb448854.aspx" target="_blank">here</a> about Office OpenXML SDK.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- MVC Architecture -->
                                    <div class="media col-md-6 mb-3">
                                        <img class="mr-3" src="../Content/images/skills/mvc.png" alt="MVC Architecture">
                                        <div class="media-body">
                                            <h5>MVC Architecture and ASP.NET MVC</h5>
                                            <p>
                                                Model–view–controller is an architectural pattern commonly used for developing user interfaces that divides an application into three interconnected parts, and those are model, view, and controller.
                                            </p>
                                            <p>
                                                Click 
                                                <a href="https://developer.mozilla.org/en-US/Apps/Fundamentals/Modern_web_app_architecture/MVC_architecture" target="_blank">here</a> 
                                                to read more, and 
                                                <a href="https://www.asp.net/mvc" target="_blank">here</a>, 
                                                <a href="https://docs.microsoft.com/en-us/aspnet/mvc/overview/getting-started/introduction/" target="_blank">here</a>, and 
                                                <a href="https://docs.microsoft.com/en-us/aspnet/core/mvc/overview" target="_blank">here</a> 
                                                about ASP.net MVC.

                                            </p>
                                        </div>
                                    </div>

                                    <!-- Object-Oriented Programming -->
                                    <div class="media col-md-6 mb-3">
                                        <img class="mr-3" src="../Content/images/skills/oop.png" alt="Object-Oriented Programming">
                                        <div class="media-body">
                                            <h5>Object-Oriented Programming</h5>
                                            <p>
                                                A programming language model organized around objects rather than "actions" and data rather than logic. <a href="https://docs.microsoft.com/en-us/dotnet/csharp/programming-guide/concepts/object-oriented-programming" target="_blank">C#</a> and <a href="https://docs.microsoft.com/en-us/dotnet/visual-basic/programming-guide/concepts/object-oriented-programming" target="_blank">VB.net</a> are among the examples of object-oriented programming languages.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Package Management -->
                                    <div class="media col-md-6 mb-3">
                                        <img class="mr-3" src="../Content/images/skills/package.png" alt="Package Management">
                                        <div class="media-body">
                                            <h5>Package Management</h5>
                                            <p>
                                                A collection of software tools that automates the process of installing, upgrading, configuring, and removing computer programs for a computer's operating system in a consistent manner. It is also used to install packages to a software project. <a href="https://www.npmjs.com/" target="_blank">NPM</a>, <a href="https://getcomposer.org/" target="_blank">Composer</a>, and <a href="https://www.nuget.org/" target="_blank">NuGet</a> are one of them, which is the package manager of JavaScript, PHP, and .NET, respectively.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- FileZilla -->
                                    <div class="media col-md-6 mb-3">
                                        <img class="mr-3" src="../Content/images/skills/filezilla.png" alt="FileZilla">
                                        <div class="media-body">
                                            <h5>FileZilla</h5>
                                            <p>
                                                FileZilla is a free software, cross-platform FTP application, consisting of FileZilla Client and FileZilla Server. It is a powerful and free software for transferring files over the Internet, especially when uploading a website project.
                                            </p>
                                            <p>
                                                Click 
                                                <a href="https://filezilla-project.org/" target="_blank">here</a> 
                                                to read more.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Source Control -->
                                    <div class="media col-md-6 mb-3">
                                        <img class="mr-3" src="../Content/images/skills/sourcecontrol.png" alt="Source Control">
                                        <div class="media-body">
                                            <h5>Source and Version Control Management</h5>
                                            <p>
                                                Version or source control, manages the changes of documents, computer programs, large web sites, and other collections of information, made especially by different users. <a href="https://git-scm.com/" target="_blank">Git</a> is an example, and <a href="https://github.com/" target="_blank">GitHub</a> and <a href="https://bitbucket.org/" target="_blank">BitBucket</a> are the hosting services for version control that use it. <a href="https://www.visualstudio.com/tfs/" target="_blank">Microsoft Team Foundation Server (TFS)</a> and <a href="https://www.visualstudio.com/team-services/" target="_blank">Visual Studio Team Services (VSTS)</a> provide two models of version control: <a href="https://docs.microsoft.com/en-us/vsts/git/overview?view=vsts" target="_blank">Git</a> and <a href="https://docs.microsoft.com/en-us/vsts/tfvc/overview?view=vsts#team-foundation-version-control" target="_blank">Team Foundation Version Control (TFVC).</a>
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Lambda -->
                                    <div class="media col-md-6 mb-3">
                                        <img class="mr-3" src="../Content/images/skills/lambda.png" alt="Lambda Expression">
                                        <div class="media-body">
                                            <h5>Lambda Expression</h5>
                                            <p>
                                                In computer programming, an anonymous function (function literal, lambda abstraction, or lambda expression) is a function definition that is not bound to an identifier.
                                            </p>
                                            <p>
                                                Read about 
                                                <a href="https://docs.microsoft.com/en-us/dotnet/csharp/programming-guide/statements-expressions-operators/lambda-expressions" target="_blank">Lambda Expressions for C#</a>, 
                                                <a href="https://docs.microsoft.com/en-us/dotnet/visual-basic/programming-guide/language-features/procedures/lambda-expressions" target="_blank">Lambda Expressions for VB.net</a>, 
                                                <a href="https://docs.oracle.com/javase/tutorial/java/javaOO/lambdaexpressions.html" target="_blank">Lambda Expressions for Java</a>, and 
                                                <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Functions/Arrow_functions" target="_blank">Arrow Expressions for JavaScript</a>.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- LINQ -->
                                    <div class="media col-md-6 mb-3">
                                        <img class="mr-3" src="../Content/images/skills/linq.png" alt="LINQ">
                                        <div class="media-body">
                                            <h5>LINQ Expression</h5>
                                            <p>
                                                Language Integrated Query is a Microsoft .NET Framework component that adds native data querying capabilities to .NET languages.
                                            </p>
                                            <p>
                                                Read about 
                                                <a href="https://docs.microsoft.com/en-us/dotnet/csharp/programming-guide/concepts/linq/" target="_blank">LINQ Expressions for C#</a> and 
                                                <a href="https://docs.microsoft.com/en-us/dotnet/visual-basic/programming-guide/concepts/linq/" target="_blank">LINQ Expressions for VB.net</a>.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- HTTP Debugging -->
                                    <div class="media col-md-6">
                                        <img class="mr-3" src="../Content/images/skills/fiddler.png" alt="Fiddler">
                                        <div class="media-body">
                                            <h5>HTTP Debugging</h5>
                                            <p>
                                                Debugging thru sending HTTP requests. <a href="https://www.telerik.com/fiddler" target="_blank">Telerik Fiddler</a> is an example of HTTP debugging tool.
                                            </p>
                                        </div>
                                    </div>
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