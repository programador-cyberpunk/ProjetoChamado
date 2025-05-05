    <?php

    class Conexao{
    private $server = "localhost";
    private $user = "root";
    private $pass = "";
    private $banco = "CrudProjeto";
    public $conn;

    public function __construct(){
        $this->conn = new mysqli($this->server, $this->user, $this->pass, $this->banco);{
        if($this->conn->connect_error){
            die("Deu boxta: ". $this->conn->connect_error);
        }
        }
    }
    }
    ?>