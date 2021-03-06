<!DOCTYPE html>
<html>
<head>
    <title>Foxtrot Search</title>
    <meta charset="UTF-8">
    <meta name="description" content="Search the web for links and images">
    <meta name="keywords" content="Search engine, images, websites">
    <meta name="author" content="Abhishek Rai">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class="wrapper indexPage">

        <div class="mainSection">
            <div class="logoContainer">
                <img src="assets/images/logo1.png" title="Logo" alt="Site Logo">
            </div>
            <div class="searchContainer">
                <form action="search.php" method="GET">
                    <input class="searchBox" type="text" name="term" placeholder="" autocomplete="off">
                    <input class="searchButton" type="submit" value="Search"> 
                </form>
            </div>
        </div>

    </div>
</body>
</html>