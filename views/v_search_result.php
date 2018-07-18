
<?php
echo'
<!------------------------------------------CONTENT-------------------------------------------------------------->

<!--  <div class="row">   -->
	<!-- <div class="col-md-12">  -->
		<div class="content">
			<div class="anketas">
';
/*

Array ( [0] => Array ( 
[metro1] => Автозаводская (Замоскворецкая линия) 
[metro2] => Алма-Атинская 
[metro3] => Алексеевская 
[name] => Гигиенический массаж 
[city] => Москва 
[age] => 32 
[education] => Медицинское 
[about_me] => Комфортабельный кабинет в клинике тайского массажа. 
[tel] => 9032109896 
[price_1h_challenge] => 2500 
[price_2h_challenge] => 3500
 [price_1h_office] => 1500
  [price_2h_office] => 2500 
  [path] => 3.jpg ) 

*/
for ($i=0;$i<count($anketas);$i++){
	echo'
				<div class="list">
					<div class="figure">
						<div class="pris"><i class="fa fa-rub" aria-hidden="true"></i>'.
						   $anketas[$i]['price_1h_challenge'].' 
						</div>
						<figure><a href="#"><img src="./img/' .  $anketas[$i]['path'] . '" alt="salon"></a></figure>
					</div>
					<div class="name-panel" >
						<a href="#" alt="name"><h5>' . $anketas[$i]['name'] . '</h5></a>
					</div>
					<div class="geo">
						<b>' .  $anketas[$i]['city'] . '</b>:
						<span class="metro_list">' .  $anketas[$i]['metro1'] . '</span>,
						<span class="metro_list">' .  $anketas[$i]['metro2'] . '</span>,
						<span class="metro_list">' .  $anketas[$i]['metro3'] . '</span>.
					</div>
				</div> 
				';
}
echo'
			</div>
		</div>
	<!--  </div> -->
<!-- </div> -->

<!--------------------------------------END----CONTENT-------------------------------------------------------------->
';

