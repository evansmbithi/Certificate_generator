<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unique Tracking Ltd.</title>
    <link rel="icon" href="../alogo.png" sizes="32x32" type="image/png">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">  
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="..\style.css">
    <link rel="stylesheet" href="../animate.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
    <div class="loader_bg">
        <div class="loader"></div>
    </div>

    <input type="checkbox" name="" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span><img src="../white_logo.png" alt=""></span><span>Unique Tracking</span></h2>         
        </div>

        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="..\index.html"><span class="las la-igloo"></span><span>Dashboard</span></a>
                </li>
                <li>
                    <a href="..\without_chasis\index.php"><span><img src="https://img.icons8.com/ios-glyphs/30/ffffff/2x6-vehicle.png"/></span><span>Without chasis</span></a>
                </li>
                <li>
                    <a href="..\with_chasis\index.php"><span class="las la-radiation"></span><span>Chassis with engine</span></a>
                </li>
                <li>
                    <a href="..\private\index.php" class="active"><span class="las la-car"></span><span>Private</span></a>
                </li>                
            </ul>
        </div>
    </div>

    <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label>

                Private
            </h2>

            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="Search here" name="" id="">
            </div>

            <!--
            <div class="user-wrapper">
                <img src="" width="40px" height="40px" alt="">
                <div>
                    <h4>Lucy</h4>
                    <small>Admin</small>
                </div>
            </div>
            -->
        </header>

        <main class="private">
            <iframe src="frame.html" frameborder="0"></iframe>
            <!--
        <div class="container">
        
        <div id="dvMain" class="header">
            
            <input type="text" value = "1" id="txtNoOfRec" placeholder="Enter no. of rows">
            <input type="button" value="Rows" id="btnCreate" class="btn btn-warning">
            <input type="button" value="Add Row" id="btnAdd" class="btn btn-warning">
            <input type="button" value="Clear" id="btnClear" class="btn btn-warning">
            
        </div>
        <br>
        <form action="insert.php" method="post">
            <div id="AddControl">

            </div>
        </form>
    </div>   

    <script src="jquery.js"></script>
    <script src="dynamo.js"></script>
-->
        </main>
    </div>

    <script src="jquery.js"></script>
    <script>
        setTimeout(function(){
            $('.loader_bg').fadeToggle();
        }, 3000);
    </script> 
</body>
</html>


