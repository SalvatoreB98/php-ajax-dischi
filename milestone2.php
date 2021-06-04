<?php
include "data.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <script src="vue.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/app.css">
    <title> PHP albums</title>
</head>

<body>
    <main id="root">
        <div class="my-container">
            <div class="header">
            <h1>My albums</h1>
            </div>
            <div class="albums-container">
              
                    <div v-for="album in albums" class="album">
                        <div class="cover-container">
                            <img :src="album.poster" alt="">
                        </div>
                        <div class="specs">
                            <div class="title">
                                <strong> {{album.title}} </strong>
                            </div>
                            <div class="artist">
                               {{album.author}}
                            </div>
                            <div class="year">
                                {{album.year}}
                            </div>
                        </div>
                    </div>
                <?php

                ?>
            </div>
        </div>
    </main>
</body>

</html>