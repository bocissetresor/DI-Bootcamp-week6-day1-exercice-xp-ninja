<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="page2.php">
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom"> <br><br>
        <label for="colors">colors</label>
        <select name="colors" id="colors">
            <option value="white">White</option>
            <option value="blue">Blue</option>
            <option value="orange">Orange</option>
        </select> <br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>