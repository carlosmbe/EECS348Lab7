<!DOCTYPE html>
<html>
<head>
    <title>OwO P4 Lab - Multiplication Table</title>
    <style>
         body {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0;
            padding: 0;
          }

        table {
            border-collapse: collapse;
            width: 75%;
            margin: 10px auto;
        }
        th, td {
            border: 5px solid #AAAAAA;
            text-align: center;
            padding: 10px;
        }

    </style>
</head>
<body>
    <h1 style="color:purple;">Super Cool and Awesome Multiplication Table</h2>

    <form method="post" action="">
        Enter a number (Any Positive Integer, Like really, 100% Legit): <input type="number" name="number" NEEDED>
        <input type="submit" value="Spawn Multiplication Table">
    </form>

 <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];
        echo "<table border='1'>";
        echo "<tr><th>*</th>";
        for ($i = 1; $i <= $number; $i++) {
            echo "<th>$i</th>";
        }
        echo "</tr>";
        for ($j = 1; $j <= $number; $j++) {
            echo "<tr><th>$j</th>";
            for ($k = 1; $k <= $number; $k++) {
                echo "<td>" . $j * $k . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>