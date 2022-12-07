<?php
function pdo_connect_mysql() {
    // Update the details below with your MySQL details
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'bookstore';
    try {
    	return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
    	// If there is an error with the connection, stop the script and display the error.
    	exit('Failed to connect to database!');
    }
}



// Template header, feel free to customize this
function template_header_admin($title) {
echo <<<EOT
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>$title</title>
		<link href="style1.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body>
        <header>
            <div class="content-wrapper">
                <h1>Foundation Books</h1>
                <nav>
                    <a href="UserTablePage.php">Home</a>
                    <a href="BookTablePage.php">Books</a>
                    <a href="InsertBooks.php">Add Books</a>
                    <a href="LoginPageAdmin.php">Log-Out</a>
                </nav>
            </div>
        </header>
        <main>
EOT;
}
// Template footer
function template_footer_admin() {
$year = date('Y');
echo <<<EOT
        </main>
        <footer>
            <div class="content-wrapper">
                <p>&copy; $year, Foundation Books</p>
            </div>
        </footer>
    </body>
</html>
EOT;
}
?>