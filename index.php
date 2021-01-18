<?php
    require_once('./includes/bdd.inc.php');
?>


<!DOCTYPE html>

<html lang="fr">

    
    <head>
        <?php
            // <head>
            require('./templates/head.inc.html');
        ?>
    </head>

    <body class="d-flex flex-column min-vh-100">

        <header>
            <?php
                require('./templates/header.html');
            ?>
        </header>
        
        <main class="container-fluid">
            <div class="row">
                <div class="col-3">
                    <?php
                        require('./templates/nav.html');
                    ?>
                </div>
                <div class="col-9">
                    <?php
                        if(isset($_GET['read'])){
                            include('./includes/read.inc.php');
                        } else if(isset($_GET['create'])){
                            include('./includes/create.inc.php');
                        } else if(isset($_GET['update'])){
                            include('./includes/update.inc.php');
                        } else {
                            echo '<h2 class="m-0 p-5">Bienvenue&nbsp;!</h2>';
                        }
                    ?>
                </div>
            </div>
        </main>

        <footer class="w-100 mt-auto p-3 bg-dark">
        <!-- <footer class="w-100 mt-3 p-3 bg-dark position-absolute bottom-0 start-50 translate-middle-x"> -->
            <?php
                require('./templates/footer.html');
            ?>
        </footer>
    </body>

</html>