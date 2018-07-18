<?php
require_once "db.php";

class M_anketa extends Db
{
    function find_by_metro()
    {
        $q = $this->execute_query(

           " SELECT m1.name AS metro1, m2.name AS metro2, m3.name AS metro3, anketa.name, city.name AS city,anketa.age, education.name AS education,type.name ,experience.name,anketa.about_me,anketa.tel,service.name , anketa.price_1h_challenge,price_2h_challenge,price_1h_office,price_2h_office,photo.path FROM metro AS m1,metro AS m2,metro AS m3,anketa ,city,education,type,experience,anketa_service,service,photo WHERE anketa.id_city=city.id and id_education=education.id and anketa.id_type=type.id and anketa.id_experience=experience.id and service.id= anketa_service.id_service and anketa.id=anketa_service.id_anketa and anketa.id_metro=m1.id and anketa.id_metro2=m2.id and anketa.id_metro3=m3.id  and (m1.name ='Алексеевская' or m2.name='Алексеевская' or m3.name='Алексеевская') and photo.id_anketa=anketa.id
     ");
        return $q;
    }
}

//$anketa=new M_anketa();
// $result=$anketa->find_by_metro();
//print_r($result);