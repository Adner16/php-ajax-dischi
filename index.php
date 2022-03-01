
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Disc</title>
</head>
<body>
    <header class='d-flex align-items-center'>
        <div class='container-fluid d-flex align-items-center'>
            <div class='logo-container'>
                <img class='img-fluid logo' src="https://upload.wikimedia.org/wikipedia/commons/7/75/Spotify_icon.png" alt="">
            </div>
        </div>
    </header>
    <main>
        <div class='container'>
            <div class='card'>
                <div class='image'>
                    <img src="<?php $disc['poster']?>" alt="figure">
                </div>    
                    <h3 class='title'><?php echo $disc['title'] ?></h3>
                    <span class='artist grey'><?php echo $disc['author'] ?></span><br>
                    <span class='year grey'><?php echo $disc['year'] ?></span> 
            </div>
        </div>
        
    </main>
<?php
    include 'data.php';

    // array_keys($database);

    // foreach($database as $disc){
    //     echo $disc['title'] . '<br>';
    //     echo $disc['author'] . '<br>';
    //     echo $disc['year'] . '<br>';
    //     echo '<img src="' . $disc['poster'] . '" > <br>';
    //     echo $disc['genre'] . '<br>';
        
    // }
?>
</body>
</html>



