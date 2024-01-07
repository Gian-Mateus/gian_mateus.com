<?php
    const URL_SITE = "http://localhost/php-avancado/php/gian_mateus.com/";
    require_once "mobile_device_detect.php";
    require_once "conectadb.php";

    $isMobile = mobile_device_detect();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URL_SITE ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo URL_SITE ?>bootstrapIcons/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?php echo URL_SITE ?>css/app.css">
    <title>Dev Gian Mateus - Full Stack PHP</title>
</head>
<body>
        <?php
            require_once "components/nav.php"
        ?>
    <main class="d-flex flex-column min-vh-100">
        <div class="container">
            <div class="row">
                <?php
                    require_once "views/{$page}.php";
                ?>
            </div>
        </div>
    </main>
        <?php
            require_once "components/footer.php";
        ?>
<script>
    const URL = '<?php echo URL_SITE?>'
</script>
<script src="<?php echo URL_SITE ?>js/bootstrap.bundle.min.js"></script>
<script src="<?php echo URL_SITE ?>js/jquery.js"></script>
<script src="<?php echo URL_SITE ?>js/app.js"></script>
</body>
</html>