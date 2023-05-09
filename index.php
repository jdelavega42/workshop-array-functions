<?php
include_once __DIR__ . '/program.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dream Team Introduction</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Vue js -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div id="app">
        <div class="mc_wrapper text">
            <header class="d-flex align-items-center d-flex justify-content-between px-5">
                <img src="mobile-logo.png" alt="">
                <h1>Dream Team Presentation</h1>
                <button class="btn btn-success" @click="hello">Start</button>
            </header>
            <main class="container">
                <div class="row row-cols-3">
                    <?php foreach ($array_combination as $key => $item){ ?>
                        <div class="col p-3 text-center">
                            <div class="card">
                                <img src="mobile-logo.png" alt="">
                                <div class="back d-flex flex-column align-items-center justify-content-center">
                                    <h2> <?php echo $key ?></h2>
                                    <p>spiega</p>
                                    <h3> <?php echo $item ?></h3>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                </div>
            </main>
        </div>
    </div>
    
    <script src="js/script.js"></script>
</body>

</html>

