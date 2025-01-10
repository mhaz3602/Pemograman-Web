<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menyambut Ramadhan Dengan Keberkahan</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <style>
        /* Fade-in Effect */
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeIn 1s forwards;
        }
        @keyframes fadeIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        /* Hover Effect for Cards */
        .card:hover {
            transform: scale(1.05);
            transition: all 0.3s ease-in-out;
        }
    </style>
</head>
<body data-bs-spy="scroll" data-bs-target="#navbar-example" data-bs-offset="100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <?php include_once 'header.php'; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <?php include_once 'menu.php'; ?>   
            </div>
        </div>
        <br/>
        <div class="row fade-in">
            <div class="col-md-8">
                <?php 
                $req = $_REQUEST['hal'];
                if (!empty($req)) {
                    include_once $req . '.php';
                } else {
                    include_once 'home.php';
                }
                ?>
            </div>
            <div class="col-md-4 fade-in">
                <?php include_once 'sidebar.php'; ?>
            </div>
        </div>
        <br/>
        <div class="row fade-in">
            <div class="col-md-12">
                <?php include_once 'footer.php'; ?>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
