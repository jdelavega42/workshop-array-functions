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
        <div class="mc_wrapper text text-bg-dark">
            <header class="d-flex align-items-center d-flex justify-content-between px-5">
                <p>Dream Team presents</p>
                <h1>Array Functions</h1>
                <button class="btn btn-success" @click="hello">Start</button>
            </header>
            <main class="container h-100 p-3">
                <div class="row row-cols-3 w-75 mx-auto">
                    <?php foreach ($array_combination as $key => $item) { ?>

                    <div class="col p-3 flip-card">
                        <div class="flip-card-inner" :class="{'animation': start}">
                            <div class="flip-card-front ">
                                <img src="mobile-logo.png" alt="Avatar">
                            </div>
                            <div class="flip-card-back text-bg-success d-flex align-items-center justify-content-center">
                                <div class="mini-container">
                                    <h2> <?php echo $key ?></h2>    
                                    <p class="text-success-emphasis">spiega</p>
                                    <p class="fw-bolder"><?php echo $item ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </main>
        </div>
    </div>
    <div class="text-bg-dark ">

        <table class="table table-light table-striped">
            <thead>
                <th scope="col">Variabile</th>
                <th scope="col">Descrizione</th>
            </thead>
            <tbody>
                <td>$double_team</td>
                <td>Primo array di partenza</td>
            </tbody>
        </table>
        <?php var_dump($double_team) ?>
        <table class="table table-light table-striped">
            <thead>
                <th scope="col">Variabile</th>
                <th scope="col">Descrizione</th>
            </thead>
            <tbody>
                <td>$arguments</td>
                <td>Secondo array di partenza</td>
            </tbody>
        </table>
        <?php var_dump($arguments) ?>
        <table class="table table-light table-striped">
            <thead>
                <th scope="col">Funzione</th>
                <th scope="col">Descrizione</th>
            </thead>
            <tbody>
                <td>array_unique(array)</td>
                <td>Elimina i valori che si ripetono in un array</td>
            </tbody>
        </table>
        <?php var_dump(array_unique($double_team)) ?>
        <table class="table table-light table-striped">
            <thead>
                <th scope="col">Funzione</th>
                <th scope="col">Descrizione</th>
            </thead>
            <tbody>
                <td>array_rand(array, int)</td>
                <td>Pesca casualmente una o più chiavi in un array</td>
            </tbody>
        </table>
        <?php var_dump($index_array) ?>
        <table class="table table-light table-striped">
            <thead>
                <th scope="col">Variabile</th>
                <th scope="col">Descrizione</th>
            </thead>
            <tbody>
                <td>$selected_arguments</td>
                <td>Crea un array con lo stesso numero di elementi di $dream_team</td>
            </tbody>
        </table>
        <?php var_dump($selected_arguments) ?>
        <table class="table table-light table-striped">
            <thead>
                <th scope="col">Funzione</th>
                <th scope="col">Descrizione</th>
            </thead>
            <tbody>
                <td>shuffle(array)</td>
                <td>Mischia la posizione degli elementi in un array</td>
            </tbody>
        </table>
        <?php var_dump($dream_team) ?>
        <table class="table table-light table-striped">
            <thead>
                <th scope="col">Funzione</th>
                <th scope="col">Descrizione</th>
            </thead>
            <tbody>
                <td>$array_combine(array $keys, array $values)</td>
                <td>Dati due array, crea un nuovo array utilizzando il valore delle chiavi del primo array come 'key', e il valore delle chiavi del secondo array come 'value' corrispondente</td>
            </tbody>
        </table>
        <?php var_dump($array_combination) ?>
        <table class="table table-light table-striped">
            <thead>
                <th scope="col">Funzione</th>
                <th scope="col">Descrizione</th>
            </thead>
            <tbody>
                <td>$array_walk(array, function)</td>
                <td>Per ogni elemento in un array eseguo una funzione utilizzando $key e $value di ogni elemento nell'array</td>
            </tbody>
        </table>
        <?php
        function print_result($value, $key)
        {
            echo "$key spiega $value <br>";
        };
        array_walk($array_combination, "print_result") ?>
    </div>
    <script src="js/script.js"></script>
</body>

</html>