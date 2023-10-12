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

<body class="bg-dark">
    <div id='app'>
        <header>
            <div class="container">
                <div class="row">
                    <h1 class="text-white">{{title}}</h1>
                </div>
            </div>
        </header>

        <main>

            <div class="container position-relative">
                <div class="row g-5">
                    <div class="col-4 mb-3" v-for="(disc,index) in records">
                        <div @click="selectIndex(index)" class="card bg-secondary text-white text-center p-2 h-100">
                            <div class="card-img-top">
                                <img class="img-fluid" :src="disc.poster" alt="">
                            </div>
                            <div class="card-body  px-0">
                                <h5 class="text-warning">{{disc.title}}</h5>
                                <p>{{disc.author}}</p>
                                <small>{{disc.year}}</small>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div v-show="selected" class="modal" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="card">
                                <div class="card-img-top">
                                    <img class="img-fluid" :src="records[selected].poster" alt="">
                                </div>
                                <div class="card-body  px-0">
                                    <h5 class="text-warning">{{records[selected].title}}</h5>
                                    <p>{{records[selected].author}}</p>
                                    <small>{{records[selected].year}}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

                <div v-if="selected !== null" class="trans-50  row h-100 w-100 position-absolute top-50 start-50 translate-middle">
                    <div class="col-8 m-auto">
                        <div class="card card bg-secondary text-white text-center p-4">
                            <div @click="selected = null" class="close">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                    <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
                                </svg>
                            </div>
                            <div class="card-img-top p-1">
                                <img class="img-fluid rounded-5" :src="records[selected].poster" alt="">
                            </div>
                            <div class="card-body  px-0">
                                <h3 class="text-warning">{{records[selected].title}}</h3>
                                <h6>{{records[selected].author}}</h6>
                                <p>{{records[selected].year}}</p>
                            </div>
                        </div>
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