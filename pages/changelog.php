<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8"/>
        <meta content="viewport" content="width=device-width, initial-scale=1"/>
        <meta author="author" content="Quantum Dev"/>
        <title>Angielski Testy</title>

        <link rel="stylesheet" href="../styles/style.css"/>

        <style>
            .verHeadersList
            {
                list-style-type: square;

                width: 50vw;

                padding: 0;

                text-align: left;
            }

            .verHeader
            {
                font-weight: bold;
                font-size: 22px;
            }

            .verInfoList > li
            {
                margin-bottom: 3px;
                font-size: 18px;
            }

        </style>

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
                <h1>Changelog</h1>
                <hr>
                <article>
                    <h2><u>v1.0.1</u></h2>
                    <ul class="verHeadersList">
                        <li>
                            <span class="verHeader">Funkcjonalność</span>
                            <ul class="verInfoList">
                                <li>Dodano dziennik zmian</li>
                            </ul>
                        </li>

                        <li>
                            <span class="verHeader">UI</span>
                            <ul class="verInfoList">
                                <li>Dodano numer wersji w stopce,</li>
                                <li>Dodano odnośnik do dziennika zmian w stopce,</li>
                                <li>Zwiększono rozmiar czcionki w menu</li>
                            </ul>
                        </li>

                        <li>
                            <span class="verHeader">Błędy</span>
                            <ul class="verInfoList">
                                <li>Każde połączenie z bazą danych jest teraz zamykane w poprawny sposób,</li>
                                <li>Naprawiono błąd, który powodował niewyświetlanie się odpowiedniego komunikatu
                                    na stronie podsumowania w przypadku uzupełnienia wszystkich słówek w poprawny sposób</li>
                            </ul>
                        </li>
                    </ul>
                </article>
                <hr>
            </section>

            <footer>
                <?php 
                    require "../templates/footer.php";
                ?>
            </footer>
        </main>
    </body>
</html>