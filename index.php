<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="style.min.css">
</head>
<body>

    <?php
    try {

        $ipserver = "localhost";              // Adresse IP VM
        $nomBase = "todolist";                // Nom base
        $loginPrivilege = "todolistuser";     // Username
        $passPrivilege = "root";              // Password

        $GLOBALS["pdo"] = $bdd = new PDO('mysql:host=' . $ipserver . ';dbname=' . $nomBase . '', $loginPrivilege, $passPrivilege);

        if (isset($_POST['sended-content'])) {
            if (!empty($_POST['content-field'])) {
                $content = nl2br(htmlspecialchars(($_POST['content-field']), ENT_QUOTES));
                $status = NULL;

                $insertMsg = $bdd->prepare("INSERT INTO `todolist` (`content`, `status`) VALUES (?,?)");
                $insertMsg->execute(array($content, $status));
            } else {
                echo "Veuillez s'il vous plait saisir une chose a faire...";
            }
        }

    ?>

        <form action="" method="post">
            <input type="text" id="content-field" name="content-field" placeholder="Saisissez une chose que vous voulez faire..." style="width:450px;">
            <input type="submit" id="submit-field" name="sended-content">
        </form>

        <section>
            <div>
                <div>
                    <h2>Voici votre ToDoList :</h2>
                    <?php

                    $getMsg = $bdd->prepare("SELECT * FROM `todolist` ");
                    $getMsg->execute();

                    if ($getMsg->rowCount() > 0) {
                        while ($tab = $getMsg->fetch()) {
                            if ($tab['status']) {
                                echo "<div id='result' class='green-text'><s>" . $tab["content"] . "</s><input class='check-box' type='checkbox' data-id='" . $tab["id"] . "' checked></div>";
                            } else {
                                echo "<div id='result' class='red-text'>" . $tab["content"] . "<input class='check-box' type='checkbox' data-id='" . $tab["id"] . "' ></div>";
                            }
                        }
                    }

                    ?>

                </div>
            </div>
        </section>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                $(".check-box").click(function(e) {
                    const id = $(this).attr('data-id');
                    $.post('check.php', {
                            id: id
                        },
                        (data) => {
                            alert(data);
                            location.reload();
                        })
                });
            });
        </script>

    <?php



    } catch (Exception $error) {
        echo "<h1 style='color:red; font-size:15px'><br>ERREUR D'EXECUTION, le code renvoi l'erreur : " . $error->getMessage() . "</h1><br>";
    }
    ?>
</body>

</html>