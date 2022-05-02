<?php
    if (isset($_POST['registreer'])) {

        if ($_POST['password'] === $_POST['passwordRepeat']) {
    
            require_once("../includes/connect.php");

            $sql = "SELECT * FROM users WHERE username = :username OR email = :email";
            $stmt = $connect->prepare($sql);
            $stmt->bindParam(":username", $_POST['username']);
            $stmt->bindParam(":email", $_POST['email']);
            $stmt->execute();
            $result = $stmt->fetch();

            if(!$result) {
                $hashedPW = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $noAdmin = 0;

                $sql = "INSERT INTO users (username, password, email, admin) VALUES (:username,:password,:email, :admin)";
                $stmt = $connect->prepare($sql);
                $stmt->bindParam(":username", $_POST['username']);
                $stmt->bindParam(":password", $hashedPW);
                $stmt->bindParam(":email", $_POST['email']);
                $stmt->bindParam(":admin", $noAdmin);
                $stmt->execute();
    
                // Melding geven dat gebruiker is aangemaakt
                header("Location: ../index.php?bericht=gelukt");
                exit();
            } else {
                // Gebruiker bestaat al met naam of email
                header("Location: ../index.php");
                exit();
            }
        } else {
            // Wachtwoorden niet gelijk
            header("Location: ../index.php");
            exit();
        }
    } else {
        // Mag niet op deze pagina komen
        header("Location: ../index.php");
        exit();
    }
?>