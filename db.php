<?php


class Db {

    private $link;

    function __construct()
    {
        $this->connect_to_DB();
        $this->set_encoding("utf8");
        //echo $this->link->client_info;
    }

    public function set_encoding($encoding){

        //Устанавливаем кодировку для коректного отображения
        $query = "SET NAMES '$encoding'";

        if (mysqli_query($this->link,$query) === TRUE) {
        } else {
            printf("Ошибка выполнения запроса на установку кодировки UTF8 для вывода в браузере : %s\n",
                mysqli_error($this->link));
            exit ();

        }
    }

    public function connect_to_DB(){
        $this->link = mysqli_connect('localhost', 'root',
            '', 'redbean');


        if (!$this->link) {
            echo "Ошибка подключения";
            exit;
        }
    }
      // выполняет запрос в базу
    public function execute_query($query){

        $result = mysqli_query($this->link, $query) or die("Ошибка " . mysqli_error($this->link));

        return $result;



    }


}


//session_start();
