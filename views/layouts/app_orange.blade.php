
<html>
<head>
<link rel="stylesheet" type="text/css" href="Styles\app_orange.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="header" style="padding: 20px;">
        <h1>Heading lol</h1></br>
        <button class="btn btn-primary" onclick="location = href='home.php'">Home</button>
        <button class="btn btn-secondary" onclick="location = href='view_table.php'">View Table</button>
        <button class="btn btn-secondary" onclick="location = href='add_row.php'">Add row</button>
        <button class="btn btn-secondary" onclick="location = href='add_row.php'">Add row</button>
        
    </div>
    
    </br>
    <div class="content" style="max-width:85%; margin:auto;">
        @yield('content')
    </div>

    <div class="footer">
        <h4>Greg</h4>
    </div>

   
</body>
</html>