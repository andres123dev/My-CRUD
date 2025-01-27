<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>My CRUD</title>
    <meta name="description" content="CRUD app with frontend (Bootstrap & jQuery) and backend (PHP, SQL, MariaDB).">
    <meta name="author" content="Andrés Fernández Burón">
    <meta name="copyright" content="Copyright 2023 &copy; All rights reserved">
    
    <script  src="https://code.jquery.com/jquery-3.7.1.min.js"  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!--
    <link rel="stylesheet" href="assets/bootstrap-5.2.2-dist/css/bootstrap.min.css">
    <script src="assets/jquery-3.6.1/jquery-3.6.1.min.js"></script>
    <script src="assets/bootstrap-5.2.2-dist/js/bootstrap.min.js"></script>
    -->

    <link rel="stylesheet" href="css/styles.css">
    <script type="module" defer src="js/main.js"></script>
</head>
<body class="h-100 w-100 overflow-hidden">
    <?php require_once 'server/view/parts/nav.php'; ?>
    <!-- THE APPLICATION -->
    <main id="content" class="container">
        <section id="feedback" class="row m-2">
            <div class="col alert alert-primary" role="alert">
                <h4 id="title" class="alert-heading">Connecting to database</h4>
                <p id="message">Wait while connecting to database...</p>
            </div>
        </section>
    </main>
    <?php require_once 'server/view/parts/footer.php'; ?>
</body>
</html>
