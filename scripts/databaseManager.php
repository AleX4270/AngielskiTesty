<?php 
class DatabaseManager
{
    private $db_host;
    private $db_user;
    private $db_pass;
    private $db_name;
    private $table;
    public $link;

    function __construct($table)
    {
        $this->db_host = 'localhost';
        $this->db_user = 'root';
        $this->db_pass = 'ces';
        $this->db_name = 'angielski';
        $this->table = $table;
    }

    function connectToDatabase()
    {
        $this->mysqli = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
    }

    function fetchAllWords()
    {
        $sql = "SELECT slowo, tlumaczenie FROM " . $this->table;

        $result = $this->mysqli->query($sql);

        if($result != null)
        {
            if($result->num_rows > 0)
            {
                return $result;
            }
            else
            {
                return null;
            }
        }

        $this->mysqli->close();
    }
}
?>