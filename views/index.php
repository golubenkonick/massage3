<!DOCTYPE html>
<html lang="en">

<?php
include "header.php";
?>
<?php
include "../views/v_mayks.php";
?>


<!----------------------------------------------MAIN------------------------------------------------------->

<!--Main-->
<div class="container">

    <div class="col-md-12" >
        <div class=" col-md-9 ">

            <div class="search_info">
                <div class="search">
                    <form name="search" action="#">
                        <div class="row">
                            <div class="col-lg-9 col-md-12 ">
                                <div class="search">
                                    <div class="col-md-3 col-sm-6 ">
                                        <label for="сity">Город</label>
                                        <select id="сity" class="form-control" name="city" >
                                            <option value="">Неважно</option>
                                            <option class="font-weight-bold" value="">Москва</option>
                                            <option class="font-weight-bold" value="">Московская область</option>
                                            <option class="font-weight-bold" value="">Санкт-Петербург</option>
                                            <option value="">Сочи</option>
                                            <option value="">Адлел</option>
                                            <option value="">Ростов</option>
                                            <option value="">Липецк</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!------------------------------------------1-------------------------------------------->
                        <div class="clearfix"></div>
                        <div class="row ">
                            <div class="search2">
                                <div class=" col-md-12 ">

                                    <div class="col-md-4 col-sm-6 ">
                                        <label for="type">Тип</label>
                                        <select id="type" class="form-control" name="type" >
                                            <option value="">Неважно</option>
                                            <option value="man">Частные массажисты</option>
                                            <option  value="women">Частные массажистки</option>
                                            <option  value="salon">Салоны массажа</option>
                                            <option value="spa">SPA салоны</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4 col-sm-6 ">
                                        <label for=" location">Место</label>
                                        <select id=" location" class="form-control" name=" location" >
                                            <option value="">Неважно</option>
                                            <option value="">У себя</option>
                                            <option  value="">Выезд к Вам</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4 col-sm-6 ">
                                        <label for="views">Вид массажа</label>
                                        <select id="views" class="form-control" name="views" >
                                            <option value="">Неважно</option>
                                            <option value="">Оздоровительный </option>
                                            <option  value="">Спортивный</option>
                                            <option  value="">Антицелюлитный</option>
                                            <option value="">Тайский</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class=" col-md-12 ">

                                <div class="search3">
                                    <div class="poisk">
                                        <button  class="btn btn-info"> Поиск</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>

            </div>

            <!--------------------------------------------page-------------------------------------------------------------->
            <div class="row">

                <div class="col-md-12">
                    <div class="page_info">
                        <div class="page">





                        </div>

                    </div>
                </div>
            </div>
            <!------------------------------------------CONTENT-------------------------------------------------------------->
            <div class="row">
                <div class="col-md-12">
                    <div class="content">
                        <div class="anketas">


<!--                            <div class="list">-->
<!--                                <div class="figure " >-->
<!--                                    <div class="pris"><i class="fa fa-rub" aria-hidden="true"></i>-->
<!--                                        8000</div>-->
<!--                                    <figure><a href="#"><img src="../img/3.jpg" alt="salon"></a></figure>-->
<!---->
<!--                                </div>-->
<!---->
<!--                                <div class="name-panel " >-->
<!--                                    <a href="#" alt="name"><h5>SPA NEW</h5></a>-->
<!---->
<!--                                </div>-->
<!---->
<!---->
<!--                                <div class="geo">-->
<!---->
<!--                                    <b> Москва</b>:-->
<!--                                    <span class="metro_list">Маяковская </span>,-->
<!--                                    <span class="metro_list">Тверская</span>,-->
<!--                                    <span class="metro_list">Белорусская </span>.-->
<!--                                </div>-->
<!--                            </div>-->
<!---->
<!--                            <div class="list">-->
<!--                                <div class="figure " >-->
<!--                                    <div class="pris"><i class="fa fa-rub" aria-hidden="true"></i>-->
<!--                                        8000</div>-->
<!--                                    <figure><a href="#"><img src="../img/3.jpg" alt="salon"></a></figure>-->
<!---->
<!--                                </div>-->
<!---->
<!--                                <div class="name-panel " >-->
<!--                                    <a href="#" alt="name"><h5>SPA NEW</h5></a>-->
<!---->
<!--                                </div>-->
<!---->
<!---->
<!--                                <div class="geo">-->
<!---->
<!--                                    <b> Москва</b>:-->
<!--                                    <span class="metro_list">Маяковская </span>,-->
<!--                                    <span class="metro_list">Тверская</span>,-->
<!--                                    <span class="metro_list">Белорусская </span>.-->
<!--                                </div>-->
<!--                            </div>-->
<!---->
<!--                            <div class="list">-->
<!--                                <div class="figure " >-->
<!--                                    <div class="pris"><i class="fa fa-rub" aria-hidden="true"></i>-->
<!--                                        8000</div>-->
<!--                                    <figure><a href="#"><img src="../img/3.jpg" alt="salon"></a></figure>-->
<!---->
<!--                                </div>-->
<!---->
<!--                                <div class="name-panel " >-->
<!--                                    <a href="#" alt="name"><h5>SPA NEW</h5></a>-->
<!---->
<!--                                </div>-->
<!---->
<!---->
<!--                                <div class="geo">-->
<!---->
<!--                                    <b> Москва</b>:-->
<!--                                    <span class="metro_list">Маяковская </span>,-->
<!--                                    <span class="metro_list">Тверская</span>,-->
<!--                                    <span class="metro_list">Белорусская </span>.-->
<!--                                </div>-->
<!--                            </div>-->
<!---->
<!--                            <div class="list">-->
<!--                                <div class="figure " >-->
<!--                                    <div class="pris"><i class="fa fa-rub" aria-hidden="true"></i>-->
<!--                                        8000</div>-->
<!--                                    <figure><a href="#"><img src="../img/3.jpg" alt="salon"></a></figure>-->
<!---->
<!--                                </div>-->
<!---->
<!--                                <div class="name-panel " >-->
<!--                                    <a href="#" alt="name"><h5>SPA NEW</h5></a>-->
<!---->
<!--                                </div>-->
<!---->
<!---->
<!--                                <div class="geo">-->
<!---->
<!--                                    <b> Москва</b>:-->
<!--                                    <span class="metro_list">Маяковская </span>,-->
<!--                                    <span class="metro_list">Тверская</span>,-->
<!--                                    <span class="metro_list">Белорусская </span>.-->
<!--                                </div>-->
<!--                            </div>-->
<!---->
<!--                            <div class="list">-->
<!--                                <div class="figure " >-->
<!--                                    <div class="pris"><i class="fa fa-rub" aria-hidden="true"></i>-->
<!--                                        8000</div>-->
<!--                                    <figure><a href="#"><img src="../img/3.jpg" alt="salon"></a></figure>-->
<!---->
<!--                                </div>-->
<!---->
<!--                                <div class="name-panel " >-->
<!--                                    <a href="#" alt="name"><h5>SPA NEW</h5></a>-->
<!---->
<!--                                </div>-->
<!---->
<!---->
<!--                                <div class="geo">-->
<!---->
<!--                                    <b> Москва</b>:-->
<!--                                    <span class="metro_list">Маяковская </span>,-->
<!--                                    <span class="metro_list">Тверская</span>,-->
<!--                                    <span class="metro_list">Белорусская </span>.-->
<!--                                </div>-->
<!--                            </div>-->
<!---->
<!--                            <div class="list">-->
<!--                                <div class="figure " >-->
<!--                                    <div class="pris"><i class="fa fa-rub" aria-hidden="true"></i>-->
<!--                                        8000</div>-->
<!--                                    <figure><a href="#"><img src="../img/3.jpg" alt="salon"></a></figure>-->
<!---->
<!--                                </div>-->
<!---->
<!--                                <div class="name-panel " >-->
<!--                                    <a href="#" alt="name"><h5>SPA NEW</h5></a>-->
<!---->
<!--                                </div>-->
<!---->
<!---->
<!--                                <div class="geo">-->
<!---->
<!--                                    <b> Москва</b>:-->
<!--                                    <span class="metro_list">Маяковская </span>,-->
<!--                                    <span class="metro_list">Тверская</span>,-->
<!--                                    <span class="metro_list">Белорусская </span>.-->
<!--                                </div>-->
<!--                            </div>-->
<!---->
<!--                            <div class="list">-->
<!--                                <div class="figure " >-->
<!--                                    <div class="pris"><i class="fa fa-rub" aria-hidden="true"></i>-->
<!--                                        8000</div>-->
<!--                                    <figure><a href="#"><img src="../img/3.jpg" alt="salon"></a></figure>-->
<!---->
<!--                                </div>-->
<!---->
<!--                                <div class="name-panel " >-->
<!--                                    <a href="#" alt="name"><h5>SPA NEW</h5></a>-->
<!---->
<!--                                </div>-->
<!---->
<!---->
<!--                                <div class="geo">-->
<!---->
<!--                                    <b> Москва</b>:-->
<!--                                    <span class="metro_list">Маяковская </span>,-->
<!--                                    <span class="metro_list">Тверская</span>,-->
<!--                                    <span class="metro_list">Белорусская </span>.-->
<!--                                </div>-->
<!--                            </div>-->
<!---->
<!--                            <div class="list">-->
<!--                                <div class="figure " >-->
<!--                                    <div class="pris"><i class="fa fa-rub" aria-hidden="true"></i>-->
<!--                                        8000</div>-->
<!--                                    <figure><a href="#"><img src="../img/3.jpg" alt="salon"></a></figure>-->
<!---->
<!--                                </div>-->
<!---->
<!--                                <div class="name-panel " >-->
<!--                                    <a href="#" alt="name"><h5>SPA NEW</h5></a>-->
<!---->
<!--                                </div>-->
<!---->
<!---->
<!--                                <div class="geo">-->
<!---->
<!--                                    <b> Москва</b>:-->
<!--                                    <span class="metro_list">Маяковская </span>,-->
<!--                                    <span class="metro_list">Тверская</span>,-->
<!--                                    <span class="metro_list">Белорусская </span>.-->
<!--                                </div>-->
<!--                            </div>-->
<!---->
<!--                            <div class="list">-->
<!--                                <div class="figure " >-->
<!--                                    <div class="pris"><i class="fa fa-rub" aria-hidden="true"></i>-->
<!--                                        8000</div>-->
<!--                                    <figure><a href="#"><img src="../img/3.jpg" alt="salon"></a></figure>-->
<!---->
<!--                                </div>-->
<!---->
<!--                                <div class="name-panel " >-->
<!--                                    <a href="#" alt="name"><h5>SPA NEW</h5></a>-->
<!---->
<!--                                </div>-->
<!---->
<!---->
<!--                                <div class="geo">-->
<!---->
<!--                                    <b> Москва</b>:-->
<!--                                    <span class="metro_list">Маяковская </span>,-->
<!--                                    <span class="metro_list">Тверская</span>,-->
<!--                                    <span class="metro_list">Белорусская </span>.-->
<!--                                </div>-->
<!--                            </div>-->
<!---->
<!--                            <div class="list">-->
<!--                                <div class="figure " >-->
<!--                                    <div class="pris"><i class="fa fa-rub" aria-hidden="true"></i>-->
<!--                                        8000</div>-->
<!--                                    <figure><a href="#"><img src="../img/3.jpg" alt="salon"></a></figure>-->
<!---->
<!--                                </div>-->
<!---->
<!--                                <div class="name-panel " >-->
<!--                                    <a href="#" alt="name"><h5>SPA NEW</h5></a>-->
<!---->
<!--                                </div>-->
<!---->
<!---->
<!--                                <div class="geo">-->
<!---->
<!--                                    <b> Москва</b>:-->
<!--                                    <span class="metro_list">Маяковская </span>,-->
<!--                                    <span class="metro_list">Тверская</span>,-->
<!--                                    <span class="metro_list">Белорусская </span>.-->
<!--                                </div>-->
<!--                            </div>-->
<!---->
<!--                            <div class="list">-->
<!--                                <div class="figure " >-->
<!--                                    <div class="pris"><i class="fa fa-rub" aria-hidden="true"></i>-->
<!--                                        8000</div>-->
<!--                                    <figure><a href="#"><img src="../img/3.jpg" alt="salon"></a></figure>-->
<!---->
<!--                                </div>-->
<!---->
<!--                                <div class="name-panel " >-->
<!--                                    <a href="#" alt="name"><h5>SPA NEW</h5></a>-->
<!---->
<!--                                </div>-->
<!---->
<!---->
<!--                                <div class="geo">-->
<!---->
<!--                                    <b> Москва</b>:-->
<!--                                    <span class="metro_list">Маяковская </span>,-->
<!--                                    <span class="metro_list">Тверская</span>,-->
<!--                                    <span class="metro_list">Белорусская </span>.-->
<!--                                </div>-->
<!--                            </div>-->
<!---->
<!--                            <div class="list">-->
<!--                                <div class="figure " >-->
<!--                                    <div class="pris"><i class="fa fa-rub" aria-hidden="true"></i>-->
<!--                                        8000</div>-->
<!--                                    <figure><a href="#"><img src="../img/3.jpg" alt="salon"></a></figure>-->
<!---->
<!--                                </div>-->
<!---->
<!--                                <div class="name-panel " >-->
<!--                                    <a href="#" alt="name"><h5>SPA NEW</h5></a>-->
<!---->
<!--                                </div>-->
<!---->
<!---->
<!--                                <div class="geo">-->
<!---->
<!--                                    <b> Москва</b>:-->
<!--                                    <span class="metro_list">Маяковская </span>,-->
<!--                                    <span class="metro_list">Тверская</span>,-->
<!--                                    <span class="metro_list">Белорусская </span>.-->
<!--                                </div>-->
<!--                            </div>-->

                        </div>

                    </div>
                </div>
            </div>
            <!--------------------------------------pagination-------------------------------------------------------->
            <div class="row">
                <div class="col-md-12">
                    <nav class="stranizy">
                        <div class="straniza">
                            <ul class=" pagination">
                                <li>
                                    <a href="" aria-label="Previous"><span aria-hidden="true">&laquo</span></a>
                                </li>
                                <li><a href="">1</a></li>
                                <li><a href="">2</a></li>
                                <li><a href="">3</a></li>
                                <li><a href="">4</a></li>
                                <li><a href="">5</a></li>
                                <li><a href="">6</a></li>
                                <li><a href="">7</a></li>
                                <li><a href="">8</a></li>
                                <li>
                                    <a href="" aria-label="Previous"><span aria-hidden="true">&raquo</span></a>
                                </li>

                            </ul>
                        </div>
                    </nav>
                </div>
            </div>

        </div>
        <!----------------------------------------------------------------------------------------------------------------->
        <!----------SIDBAR----------------->

        <div class="col-md-3 ">
            <div class="sidbar">
                <div class="cursy">
                    <b>Курсы массажа </b>
                    <ul>
                        <li><a href="index.html"> Москва</a></li>
                        <li><a href="index.html"> Санкт-Петербург</a></li>
                        <li><a href="index.html">Сочи</a></li>
                        <li><a href="index.html">Тайланд</a></li>
                        <li><a href="index.html">Индия</a></li>
                    </ul>
                </div>

                <div class="expendable material">
                    <b>Расходные материалы </b>
                    <ul>
                        <li><a href="index.html"> Москва</a></li>
                        <li><a href="index.html"> Санкт-Петербург</a></li>
                        <li><a href="index.html">Сочи</a></li>
                    </ul>
                </div>

                <div class="cosmo">
                    <b>Услуги косметологов </b>
                    <ul>
                        <li><a href="index.html"> Москва</a></li>
                        <li><a href="index.html"> Санкт-Петербург</a></li>
                        <li><a href="index.html">Сочи</a></li>
                    </ul>

                </div>
            </div>
        </div>

    </div>

    <div class="clearfix"></div>

</div>




<?php
include "footer.php";
?>