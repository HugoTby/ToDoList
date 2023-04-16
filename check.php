<?php
    try {

        $ipserver = "localhost";              // Adresse IP VM
        $nomBase = "todolist";                // Nom base
        $loginPrivilege = "todolistuser";     // Username
        $passPrivilege = "root";              // Password

        $bdd = new PDO('mysql:host=' . $ipserver . ';dbname=' . $nomBase . '', $loginPrivilege, $passPrivilege);

        if (isset($_POST['id'])) {
            $id = $_POST['id'];

            $updateMsg = $bdd->prepare("UPDATE `todolist` SET `status`= 1 WHERE `id`=?");
            $updateMsg->execute(array($id));

            echo "Tâche marquée comme terminée !";
        } else {
            echo "Erreur: aucun ID n'a été transmis.";
        }

    } catch (Exception $error) {
        echo "Erreur lors de la mise à jour de la tâche: " . $error->getMessage();
    }
?>
