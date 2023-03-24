<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registration successful</title>
</head>
<body>
    <h2>Thank you, Registration successful</h2>
    <p>Thank you for Registration</p>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>password</th>
                <th>Profile_pic</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                // read user data from csv file
                $file = fopen('user.csv', 'r');

                while (($data = fgetcsv($file)) !== false){
                    echo '<tr>';
                        echo '<td>' . $data[0] . '</td>';
                        echo '<td>' . $data[1] . '</td>';
                        echo '<td>' . $data[2] . '</td>';
                        echo '<td><img src="uploads/' . $data[3] . '"></td>';
                    echo '</tr>';
                }
                fclose($file);
            ?>
        </tbody>
    </table>

</body>
</html>