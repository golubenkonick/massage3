<?php
require_once "./model/m_anketa.php";

class C_anketa extends  M_anketa{



    //получение анкеты для вывода в личном кабинете
    public function print_anketas_by_metro ()
    {

//        Array ( [metro1] => Автозаводская (Замоскворецкая линия) [metro2] =>
//        Алма-Атинская [metro3] => Алексеевская [name] => Гигиенический массаж [city] =>
//        Москва [age] => 32 [education] => Медицинское [about_me] =>
//        Комфортабельный кабинет в клинике тайского массажа. [tel] => 9032109896 [price_1h_challenge] =>
//        2500 [price_2h_challenge] => 3500 [price_1h_office] => 1500 [price_2h_office] => 2500 [path] =>
//        3.jpg )

        $res=$this->find_by_metro();
        $anketas=[];
        while($row=mysqli_fetch_array($res, MYSQLI_ASSOC)){
//             print_r($row);
            array_push($anketas,$row);
        }
       //print_r($anketas);

        return $anketas;
    }

}


//$id_user= $_GET['id'];

//if ($_POST ) {
//    $controller_anketa = new C_anketa();
//    $controller_anketa->add_anketa_from_form();
//    $anketas=$controller_anketa->print_anketas_by_metro();
//}
$controller_anketa = new C_anketa();
$anketas=$controller_anketa->print_anketas_by_metro();

//echo $_SERVER['DOCUMENT_ROOT'];