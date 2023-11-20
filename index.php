<html>

<head>
    <title>My Docker Microservices Project</title>
</head>

<body>

    <?php
    // Enable display of errors
    ini_set("display_errors", 1);
    // Set the content type and character set
    header('Content-Type: text/html; charset=iso-8859-1');

    // Print the current PHP version
    echo 'Versao Atual do PHP: ' . phpversion() . '<br>';

    // Database connection details
    $servername = "xx.xxx.xxx.xx";
    $username = "root";
    $password = "password";
    $database = "mydb";

    // Create a new MySQLi connection
    $link = new mysqli($servername, $username, $password, $database);

    // Check the connection
    if ($link->connect_error) {
        die("Connection failed: " . $link->connect_error);
    }

    // Generate random data
    $valor_rand1 =  rand(1, 999);
    $valor_rand2 = strtoupper(substr(bin2hex(random_bytes(4)), 1));
    $host_name = gethostname();

    // Construct the SQL query
    $query = "INSERT INTO dados (AlunoID, Nome, Sobrenome, Endereco, Cidade, Host) VALUES ('$valor_rand1' , '$valor_rand2', '$valor_rand2', '$valor_rand2', '$valor_rand2','$host_name')";

    // Execute the query
    if ($link->query($query) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $link->error;
    }

    // Close the connection
    $link->close();
    ?>

</body>

</html>