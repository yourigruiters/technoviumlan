<?php
    if (isset($_POST['registreer']) && isset($_POST['agree'])) {
        if ($_POST['password'] === $_POST['passwordRepeat']) {
    
            require_once("../includes/connect.php");

            $sql = "SELECT * FROM users WHERE username = :username";
            $stmt = $connect->prepare($sql);
            $stmt->bindParam(":username", $_POST['username']);
            $stmt->execute();
            $result = $stmt->fetch();

            if(!$result) {
                $hashedPW = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $noAdmin = 0;

                $sql = "INSERT INTO users (fullname, username, password, admin) VALUES (:fullname, :username,:password, :admin)";
                $stmt = $connect->prepare($sql);
                $stmt->bindParam(":fullname", $_POST['fullname']);
                $stmt->bindParam(":username", $_POST['username']);
                $stmt->bindParam(":password", $hashedPW);
                $stmt->bindParam(":admin", $noAdmin);
                $result = $stmt->execute();

                if ($result) {
                    $sql = "SELECT * FROM users WHERE username = :username";
                    $stmt = $connect->prepare($sql);
                    $stmt->bindParam(":username", $_POST['username']);
                    $stmt->execute();
                    $result = $stmt->fetch();

                    session_start();
    
                    $_SESSION['userID'] = $result['userID'];
                    $_SESSION['username'] = $result['username'];
    
                    // Direct ingelogd
                    header("Location: ../inschrijven.php");
                    exit();

                }
            } else {
                // Gebruiker bestaat al met naam
                header("Location: ../inschrijven.php?message=nametaken");
                exit();
            }
        } else {
            // Wachtwoorden niet gelijk
            header("Location: ../inschrijven.php?message=matchingpasswords");
            exit();
        }
    } else {
        // Mag niet op deze pagina komen
        header("Location: ../index.php");
        exit();
    }
?>