<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_GET['movieName']; ?></title>
</head>
<body>
    <h1>Information about <?php $_GET['movieName'];?></h1>
    <p>
        Based on the input, here is the information so far: </br>
        <?php echo $_GET['movieStar']; ?> starred in the movie Avengers which was released in year <?php echo $_GET['movieYear']; ?>
    </p>
</body>
</html>
