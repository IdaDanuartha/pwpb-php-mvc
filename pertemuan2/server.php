<?php 

// koneksi ke database
// $db = mysqli_connect("localhost", "root", "", "db_pwpb1");


// function query($query) {
//     global $db;
    
//     try {
//         $result = mysqli_query($db, $query);
//         $rows = [];

//         while( $row = mysqli_fetch_assoc($result) ) {
//             $rows[] = $row;
//         }
//         return $rows;
//     } catch (Exception $e) {
//         return 'Error: ' . $e->getMessage();
//     }
// }

class Database {
    private $host = 'localhost',
            $user = 'root',
            $pass = '',
            $name = 'db_pwpb1',
            $db, $query;
    

    public function __construct($query = '')
    {
        $this->db = mysqli_connect($this->host, $this->user, $this->pass, $this->name)
                        or die(mysqli_connect_errno());

        if(!empty($query)) {
            $this->query = $this->query($query);
            return $this->query;
        }

        return $this->db;
    }

    public function query($queryString)
    {
        $this->query = mysqli_query($this->db, $queryString) 
                        or die(mysqli_errno($this->db));
        return $this->query;
    }

    public function fetchAll()
    {
        $rows = mysqli_fetch_all($this->query, MYSQLI_ASSOC);
        return $rows;
    }

    public function fetch($queryString)
    {
        $query = $this->query($queryString);
        $data = mysqli_fetch_assoc($query);

        return $data;
    }
}

$db = new Database('SELECT * FROM siswa');
    // foreach($db->fetchAll() as $key => $row) {
    //     print_r($row);  
    // }
?>