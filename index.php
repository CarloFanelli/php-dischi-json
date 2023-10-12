<?php
/* php code */
?>

<!doctype html>
<html lang='en'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>DISCHI</title>
    <link href='./style.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <div id='app'>
        <header>
            <div class="container">
                <div class="row">
                    <h1>{{title}}</h1>
                </div>
            </div>
        </header>

        <main>

            <div class="container">
                <div class="row">
                    <div class="col-4" v-for="disc in records">
                        <div class="card">
                            <div class="card-img-top">
                                <img class="img-fluid" :src="disc.poster" alt="">
                            </div>
                            <div class="card-body text-center">
                                <h5>{{disc.title}}</h5>
                                <p>{{disc.author}}</p>
                                <small>{{disc.year}}</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

    </div>

    <!-- Development only cdn, disable in production -->
    <script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.5.1/axios.min.js" integrity="sha512-emSwuKiMyYedRwflbZB2ghzX8Cw8fmNVgZ6yQNNXXagFzFOaQmbvQ1vmDkddHjm5AITcBIZfC7k4ShQSjgPAmQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src='./main.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>



</body>

</html>