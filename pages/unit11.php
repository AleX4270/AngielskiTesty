<?php 
    session_start();

    $_SESSION['unit'] = "unit11";

    require("../scripts/databaseManager.php");
    require("../scripts/formManager.php");

    $link = new DatabaseManager($_SESSION['unit']);
    $link->connectToDatabase();

    $fMan = new FormManager($link->fetchAllWords());
?>

<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8"/>
        <meta content="viewport" content="width=device-width, initial-scale=1"/>
        <meta author="author" content="Quantum Dev"/>
        <title>Angielski Testy</title>

        <link rel="stylesheet" href="../styles/style.css"/>

    </head>

    <body>
        <main>
            <header>
                <h1>Angielski Testy</h1>
            </header>

            <nav>
                <ul>
                    <li><a href="main.php">Strona Główna</a></li>
                    <li><a href="test.php">Test</a></li>
                    <li><a href="unit11.php">Unit 11</a></li>
                  	<li class="disabledMenuItem">Unit 12</li>
                </ul>

                <hr>
            </nav>

            <section>
                <h1>Unit 11 - Zdrowie</h1>
              <h3 style='color: green; margin-top: -20px;'><u>Potwierdzona poprawność tłumaczeń</u></h3>
              <p style="font-size: 16px; color: #403F3C; padding: 0px 300px 0px;"><b>Uwaga!</b>: W tym dziale występuje kilka rodzajów tłumaczeń danego słówka. Tj. jedno słówko/wyrażenie może mieć 2 tłumaczenia. Na dzień dzisiejszy z powodu nie przystosowania bazy danych dostępne jest tylko jedno, 	wybrane przeze mnie tłumaczenie. W związku z tym proszę się nie zdziwić, jeśli poprawne tłumaczenie zostanie uznane jako błędne!</p>
                <hr>

                <form action="summary.php" method="POST">
                    <?php 
                        $fMan->generateForm();
                    ?>
                </form>
                
            </section>

            <footer>
                <?php 
                    include "../templates/footer.php";
                ?>
            </footer>
        </main>
    </body>
</html>