<?php
// Database Connection
$user = 'admin';
$password = 'admin1234';
$database = 'college';
$servername = 'localhost:3306';

$mysqli = new mysqli($servername, $user, $password, $database);

// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

// SQL query to select data from database
$sql = "SELECT * FROM students ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Students</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        header {
            background-color: #3498db;
            color: #fff;
            text-align: center;
            padding: 1em 0;
            border-bottom: 2px solid #2980b9;
        }

        section {
            max-width: 800px;
            margin: 20px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #3498db;
            color: #fff;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        h1 {
            text-align: center;
            color: #3498db;
            margin-bottom: 20px;
        }

        /* Responsive Design */
        @media only screen and (max-width: 600px) {
            body {
                padding: 10px;
            }

            section {
                margin: 10px;
            }

            table {
                font-size: 14px;
            }
        }
    </style>
</head>

<body>
    <header>
        <h1>College Students Information</h1>
    </header>
    <section>
        <!-- TABLE CONSTRUCTION-->
        <table>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Email</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php while ($rows = $result->fetch_assoc()) { ?>
                <tr>
                    <!--FETCHING DATA FROM EACH ROW OF EVERY COLUMN-->
                    <td><?php echo $rows['name']; ?></td>
                    <td><?php echo $rows['age']; ?></td>
                    <td><?php echo $rows['email']; ?></td>
                </tr>
            <?php } ?>
        </table>
    </section>
</body>

</html>
