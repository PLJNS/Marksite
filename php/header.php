<?php

$sitename   = "Paul Jones at Rutgers University";
$short_sitename = "Paul Jones at Rutgers";
$keywords   = "Rutgers,Computer science,Philosophy";
$author     = "Paul Jones";
$description = "Paul Jones is a Computer Science and Philosophy 
undergraduate at Rutgers New Brunswick. He works as a Web Development
Intern for Local Wisdom Inc., where he works primarily with Objective-C
for iOS. He earned an Associate's Degree in Liberal Arts from Mercer 
County Community College. He is interested in enrolling in a graduate 
program centered around neuroscience and philosophy of mind.";

include("JSON.php");
$json       = new Services_JSON();
		
?>

<meta name="keywords" content="<?php echo $keywords; ?>">
<meta name="author" content="<?php echo $author; ?>">
<meta name="description" content= "<?php echo $description; ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="apple-mobile-web-app-capable" content="yes" />

<script src="js/vendor/Markdown.Converter.js" type="text/javascript"></script>
<script src="js/vendor/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="js/vendor/jquery-ui-1.9.2.custom.min.js" type="text/javascript"></script>
<script src="js/vendor/jquery.tocify.js"></script>

<link href="css/main.css" type="text/css" rel="stylesheet">
<link href="css/bootstrap.min.css" media="screen" type="text/css" rel="stylesheet">
<link href="css/bootstrap-responsive.min.css" type = "text/css" rel="stylesheet">
<link href="css/normalize.css" type="text/css" rel="stylesheet">
<link href="css/jquery.tocify.css" type="text/css" rel="stylesheet">
<link href="css/print.css" rel="stylesheet" type="text/css" media="print" >

<style>

body {
    background-color: white;
    /*padding-top: 60px*/
}

#toc.affix {
top:0px;
bottom:60px;
}

#toc a {
padding-left: 12px;
}

.navbar ul, .nav ul {
	padding-left: 0px;
}

.navbar .nav li.dropdown.open > .dropdown-toggle, .navbar .nav li.dropdown.active > .dropdown-toggle, .navbar .nav li.dropdown.open.active > .dropdown-toggle {
text-shadow: 0 2px 0 black;
}

.navbar {
margin-bottom: 19px;
}

.nav-list > li > a:hover {
color:white;
background-color: #5f6a72; 
}

.navbar-inner {
-webkit-border-radius: 0px;
-moz-border-radius: 0px;
border-radius: 0px;
}

.row-fluid [class*="span"]{
	margin-left: 0px;
}

article {
display:block;
font-weight: 300;
border:1px solid #5f6a72;
background-color:#eff0f0;
font-size:15px;
line-height:1.25;
min-height:100%;
padding-left:19px;
padding-right:19px;
padding-top: 4px;
padding-bottom:4px;
}

article h1, article h2, article h3, article h4, article h5, article h6 {
font-weight: 500;
}

h1 small, h2 small, h3 small, h4 small, h5 small, h6 small {
text-shadow: 0px 1px 0px white;
font-size: inherit;
}

article h1 {
margin-top: 5px;
} article h2 {
border-bottom: 1px solid #a0a9b0;
-moz-box-shadow: 0px 1px 0px white; 
-webkit-box-shadow: 0px 1px 0px white; 
box-shadow: 0px 1px 0px white;
line-height: 35px;
} article h4 {
font-variant:small-caps;
font-weight:700;
} article h5 {
font-variant:small-caps;
font-size:1em;
}

article p, article li {
text-shadow: 0px 1px 0px white;
}

article strong {
font-weight: 400;
}

article p {
	text-align: justify;
}

article p {
	font-size:16px;
	line-height: 1.375;
}

article a {
-webkit-transition:color .2s ease-in-out;
-moz-transition: color .2s ease-in-out;
-ms-transition: color .2s ease-in-out;
-o-transition: color .2s ease-in-out;
}

article ul {
	margin: 0px;
}

article ol {
	margin: 0px;
}

article li p {
	margin: 0px;
}

article li {
	font-size: 16px;
	line-height: 1.425em;
}

article code {
    font-size:14px;
    border-color: #a0a9b0;
}

article blockquote {
border-left:1px solid #a0a9b0;
}

@media (max-width: 979px) {
    body {
        padding: 0px;
        background-color: #eff0f0;
    }
    
    article {
        min-width: 100%;
    }
    
    .navbar {
        margin: 0px;
        border-left: 0px;
        border-right: 0px;
        border-top: 0px;
    }
    
    .navbar-inner {
        padding: 0px 0px 0px 14px;
    }
    
    .btn-navbar {
        margin-top: 100px;
    }
    
    .nav-collapse .nav > li > a, .nav-collapse .dropdown-menu a {
        color: white;
    }
    
    article {
        border: 0px;
        margin-bottom: 60px;
    }
    
    #wrap {
        margin:0px;
        padding: 0px;
    }
}

@media (max-width: 767px) {
    article {
        padding-top: 44px;
    } 
    #top {
        position: fixed;
        width: 100%;
        height: 44px;
    }
}

@media screen and (min-width: 767px) {
.navbar-inner .brand {
	padding-left: 30px;
}
}

html,
      body {
        height: 100%;
      }

      #wrap {
        min-height: 100%;
        height: auto !important;
        height: 100%;
        margin: 0px auto 20px;
      }
      
      #push,
      #footer {
        height: 40px;
		display:block;
      }  

</style>

<link rel="shortcut icon" href="http://eden.rutgers.edu/~pmj34/img/favicon.ico" />
<link rel="apple-touch-icon" href="img/apple-touch/icon.png" />
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch/icon-ipad.png" />
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch/icon-iphone-retina.png" />
<link rel="apple-touch-icon" sizes="144x144" href="img/apple-touch/icon-ipad-retina.png" />
<link rel="apple-touch-startup-image" href="img/startup.jpg">
