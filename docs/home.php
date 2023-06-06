<?php 
session_start();
if(!isset($_SESSION['username'])) {
    header('location:login.php');
}
?>

<html>
<head>
    <title>Homepage</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            /* align-items: center; */
            height: 100vh;
            margin: 0;
        }

        .container {
            text-align: center;
            max-width: 400px; /* Adjust the width as needed */
            margin: 0 auto; /* Center the container */
        }

        .logout {
            background-color: darkblue;
            color: white;
            padding: 5px 15px; /* Adjust the padding as needed */
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
            border-radius: 5px;
            margin-bottom: 20px;
            margin-top: 180px;
            display: block;
            font-size: 18px; /* Adjust the font size as needed */
            margin-left: 100px; /* Adjust the margin as needed */
            margin-right: 100px;
            text-decoration: none;
        }

        .logout:hover {
            background-color: gray;
            color: white;
        }

        .resume {
            background-color: #026CD7;
            color: black;
            padding: 20px; /* Adjust the padding as needed */
            border: none;
            cursor: pointer;
            font-size: 24px;
            transition: background-color 0.3s ease;
            border-radius: 5px;
            margin-bottom: 20px;
            display: block;
            margin-left: auto; /* Adjust the margin as needed */
            margin-right: auto;
            text-decoration: none;
            white-space: nowrap; /* Prevent wrapping the text */
            overflow: hidden; /* Hide any overflow */
            text-overflow: ellipsis; /* Display ellipsis (...) for overflow */
        }

        .resume:hover {
            background-color: #93C3FF;
            color: white;
        }
        
        
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome <?php echo $_SESSION['username']; ?></h1>
        <a href="minor project/index.html" class="resume">BUILD YOUR RESUME</a>
        <a href="logout.php" class="logout">LOGOUT</a>
    </div>
</body>
</html>
