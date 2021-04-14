<!DOCTYPE html>
<html>
<head>
    <title>Admin FAQ Category Menu Interface</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <style>
        .dropbtn {
        background-color: #0275D8;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
        }
        .dropdown {
        position: relative;
        display: inline-block;
        margin-left: 30px;
        }
        .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
        }
        .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        }
        .dropdown-content a:hover {background-color: #ddd;}
        .dropdown:hover .dropdown-content {display: block;}
        .dropdown:hover .dropbtn {background-color: #3e8e41;}
    </style>
    <style>
    
    </style>
</head>
<body>
  
<div class="container">
    @yield('content')
</div>
   
</body>
</html> 
