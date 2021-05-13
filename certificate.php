<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="3; url=generate.php">
    <title>Unique Tracking Cert</title>
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="print.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
<!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
</head>
<body>
    <div class="loader_bg">
        <div class="loader"></div>
    </div>
    <header>
        <button onclick="window.print();" class="btn btn-primary" id="print-btn">Print Certs</button>
        <div class="search">
    <!--SEARCH BUTTON-->
            <form action="" method="post">
                <input type="text" name="nam" placeholder="Search Certificate..." id="">
                <input type="submit" name="search" value="SEARCH">
            </form>
        </div>
    </header>
    
    <main>
    <?php
        if(isset($_POST['search'])){
            $nam = $_POST['nam'];
            $search = glob("files/$nam.jpg");
            foreach($search as $ims){
                echo "<img src='$ims'>";
            }
        }
        ?>
        
    </main>
    
    <script src="jquery.js"></script>
    <script>
        setTimeout(function(){
            $('.loader_bg').fadeToggle();
        }, 3000);
    </script>
</body>
</html>