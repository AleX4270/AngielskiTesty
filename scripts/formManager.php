<?php 
class FormManager
{
    private $data;
    
    private $correctAnswers;
    private $incorrectAnswers;
    private $finalScore;

    private $incorrectWords;

    function __construct($data)
    {
        $this->data = $data;
    }

    function generateForm()
    {
        if(empty($this->data))
        {
            print("<span class='errorMsg'>Brak danych do wypisania!</span>");
        }
        else
        {
            echo "<table id='formTable'>";

            $i = 0;
            while($row = $this->data->fetch_array())
            {
                echo "<tr>";
                echo "<td>" . "<span class='polishWord'>" . $row[0] . "</span>" . "</td>";
                echo "<td><input type='text' name='answer$i' placeholder='Tłumaczenie po angielsku'></td>";
                echo "</tr>";

                $i++;
            }

            echo "</table>";

            echo "<button class='submitButton' type='submit' name='submit'>Sprawdź odpowiedzi!</button>";
        }
    }

    function printSummary()
    {
        echo "<h2>Dane elementarne</h2>";
        echo "<span class='summaryInfo'>Prawidłowe odpowiedzi: <b>" . $this->correctAnswers . "</b></span>";
        echo "<span class='summaryInfo'>Nieprawidłowe odpowiedzi: <b>" . $this->incorrectAnswers . "</b></span>";
        echo "<span class='summaryInfo'><b>Wynik procentowy</b>: <b>" . $this->finalScore . "%</b></span>";
    }

    function checkAnswers()
    {
        $this->correctAnswers = 0;
        $this->incorrectAnswers = 0;
        $this->finalScore = 0;

        $k = 0;
        while($row = $this->data->fetch_array())
        {
          	if(strcmp(trim($_POST['answer' . $k]), trim($row[1])) == 0)
            {
            	$this->correctAnswers++; 
            }
            else
            {
                $this->incorrectAnswers++;
                $this->incorrectWords[$row[0]] = $row[1];
            }
            $k++;
        }

        $this->finalScore = intval(($this->correctAnswers / ($this->correctAnswers + $this->incorrectAnswers)) * 100);

       $this->printSummary();
    }

    function generateCheatSheet()
    {
        if(!empty($this->incorrectWords))
        {
            ksort($this->incorrectWords);
            echo "<span style='margin-bottom: 30px; padding: 0px 70px 0px;'>";
        
            foreach($this->incorrectWords as $word => $value)
            {
                echo "<strong>" . trim($word) . "</strong>-" . $value . ";";
            }     
            
            echo "</span>"; 
        }
        else
        {
            echo "<span class='errorMsg'>Brak słówek do wypisania!</span>";
        }

    }
}
?>