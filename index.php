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
    <main>
        <div class="my-container">
            <div class="header">
                <h1>My albums</h1>
                <form>
                    <select name="genre" id="genre">
                        <option disabled>Filtra per genere</option>
                        <?php
                        $filters = [];
                        foreach ($albums as $key => $album) {
                            if(!in_array($album["genre"],$filters)){
                                $filters[] =  $album["genre"];
                                $filter = $album["genre"];
                                echo '<option value="'. $filter .'">'. $album["genre"] .'</option>';
                            }
                        ?>
                        <?php
                        }
                        ?>
                    </select>
                    <button class="btn">Filtra</button>
                </form>
            </div>
            <div class="albums-container">
                <?php foreach ($albums as $album) {
                    if (!empty($_GET)) {
                        if (strtolower($_GET["genre"]) == strtolower($album["genre"])) {
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
                    } else {
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
                }
                ?>
            </div>
        </div>
    </main>
</body>

</html>