<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema</title>
</head>
<body>

    <form method="post" action="cinemaPost.php">

        <label for="age">Select your age:</label><br>
        <select name="age" id="age">
            <option value="child">Child</option>
            <option value="adult">Adult</option>
            <option value="senior">Senior</option>
        </select>
        
        <br><br>

        <label for="qtt">Ticket quantity:</label><br>
        <input type="number" name="qtt" id="qtt" min="1" required><br><br>
        <input type="submit" value="Send Data">
    </form>
    
</body>
</html>