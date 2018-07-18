
<?php
echo'
<!------------------------------------------CONTENT-------------------------------------------------------------->

<!--  <div class="row">   -->
	<!-- <div class="col-md-12">  -->
		<div class="content">
			<div class="anketas">
';
for ($i=0;$i<57;$i++){
	echo'
				<div class="list">
					<div class="figure">
						<div class="pris"><i class="fa fa-rub" aria-hidden="true"></i>'.
						   $anketas[$i]['price_1h_challenge'].' 
						</div>
						<figure><a href="#"><img src="../img/3.jpg" alt="salon"></a></figure>
					</div>
					<div class="name-panel" >
						<a href="#" alt="name"><h5>SPA NEW</h5></a>
					</div>
					<div class="geo">
						<b> Москва</b>:
						<span class="metro_list">Маяковская </span>,
						<span class="metro_list">Тверская</span>,
						<span class="metro_list">Белорусская </span>.
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

