<?php
include "data.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/app.css">
    <title> PHP albums</title>
</head>

<body>
    <main id="vueContainer">
        <div class="my-container">
            <div class="header">
                <h1> <i class="fa fa-music" aria-hidden="true"></i> My albums </h1>
                <div>
                    <select @change="onChangeSort()" name="ordina" v-model='selectedOrder'>
                        <option disabled value="">Ordina per</option>
                        <option value="random"> Casuale / Reset</option>
                        <option value="yearInc"> Dal più recente </option>
                        <option value="yearDec"> Dal meno recente </option>

                    </select>
                    <select @change="onChange()" name="filtra" v-model="selected">
                        <option disabled value="">Filtra per genere</option>
                        <option value="all"> Tutti gli album </option>
                        <option v-for="element in genres" :value="element"> {{element}} </option>
                    </select>
                </div>
            </div>
            <div class="albums-container">
                <?php foreach ($albums as $album) {
                ?>
                    <div class="album">
                        <div class="cover-container">
                            <img src="<?php echo $album["poster"]; ?>" alt="">
                        </div>
                        <div class="specs">
                            <div class="title">
                                <strong> <?php echo $album["title"] ?> </strong>
                            </div>
                            <div class="artist">
                                <?php echo  $album["author"] ?>
                            </div>
                            <div class="year">
                                <?php echo $album["year"] ?>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </main>
</body>

</html>