<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Additional CSS */
        .nav {
            display: flex;
            justify-content: center;
        }
        .nav li {
            margin: 0 10px;
        }
        .nav a {
            display: inline-block;
            padding: 10px 30px;
            background-color: #6c63ff;
            border-radius: 5px;
            color: #fff;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        .nav a:hover {
            background-color: #524bcf;
        }
    </style>
</head>
<body>
  
    <div class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <!-- Button for smallest screens -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav mainNav">
                    <li class="active">
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="../index.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
