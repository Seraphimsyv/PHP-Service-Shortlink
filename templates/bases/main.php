<!DOCTYPE html>
<html lang="en">

    <head>
    
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?=$data['title'];?></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    </head>

    <body>

        <style>
            body {
                min-height: 100vh;
                display: flex;
                flex-direction: column;
            }
            #header {
                min-height: 5vh;
            }
            #header span {
                font-size: 44;
                font-weight: 900;
            }
            #content {
                height: auto;
                margin: auto;
            }
            #footer {
                min-height: 10vh;
            }
        </style>

        <?php include TEMPLATES_BLOCKS . "header.php"; ?>

        <div class="bg-white p-5" id="content">

            <div class="container-fluid m-3 p-3">
                
                <?php include $this->content;?>

            </div>

        </div>

        <?php include TEMPLATES_BLOCKS . "footer.php"; ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    
    </body>

</html>