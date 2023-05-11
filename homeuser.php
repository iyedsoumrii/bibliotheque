<?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {

    session_unset();
    session_write_close();
    $url = "./index.php";
    header("Location: $url");
}

require('inc/init.inc.php');


$result = $mysqli->query("SELECT * FROM livre");

?>
<HTML>
<HEAD>
<TITLE>Welcome</TITLE>
<link href="../bibliotheque/css/phppot-style.css" type="text/css"
	rel="stylesheet" />
<link href="../bibliotheque/css/user-registration.css" type="text/css"
	rel="stylesheet" />
</HEAD>
<BODY>
	<div class="phppot-container">
		<div class="page-header">
			<span class="login-signup"><a href="logout.php">Logout</a></span>
		</div>
		<div class="page-content">
            <h2>Les livres disponibles:</h2>
            <table class="table">
                <tr>
                    <th>Auteur</th>
                    <th>Titre</th>
                    <th>image</th>
                </tr>
                <?php
                    while($book = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>".$book['auteur']."</td>";
                        echo "<td>".$book['titre']."</td>";
                        echo "<td>".$book['imagee']."</td>";
                        echo "</tr>";
                    }
                ?>
            </table>
        </div>
	</div>
</BODY>
</HTML>
