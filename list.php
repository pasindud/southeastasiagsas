
<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/bootstrap.min.js"></script>
<style>
img {
    display: block;
    margin-left: auto;
    margin-right: auto;
}
</style>
<head> 
<body>

    <div class="container">
  <!-- Static navbar -->
      <div class="navbar navbar-default">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Google Student Ambassadors</a>
        </div>
      </div>

	  
      <!-- Main component for a primary marketing message or call to action -->
        <div class="row">
			<div class="col-md-4">
			
			<?php
			$key = "0Ah2FsDeKOA46dGhOMEpJZ3k1YzVlU2o4ZDRSRE9aUlE";
		$url = "http://spreadsheets.google.com/feeds/cells/".$key."/od6/public/values?alt=json";
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
     
		$google_sheet = curl_exec($ch);
		curl_close($ch);
		
		$res = json_decode($google_sheet,true  );
		$cars =$res['feed']['entry'] ;
		$max = sizeof($cars);
		
		/*for ( $i=1;$i<  $max  ;$i++){
				echo $cars[$i]['content']['$t']  ;
				echo "<br>";
				$i+=11;
		}*/
		$k = 0;
		$l=0;
		$flag=0;
		for ( $i=1;$i<  $max  ;$i++)
		{
			switch(  $cars[$i] ['gs$cell']['col']    ){

				case "2":
						$username = $cars[$i] ['gs$cell']['col']     ;
				break;

				case "3":
						$name =$cars[$i] ['gs$cell']['col']  ;
				break;

				case "13":
						$picurl =  $cars[$i] ['gs$cell']['col'] ;
						$flag = 1 ;
				break;

				default :

			};

				if ( $flag ==1) {
					echo $username.'  --  '.$name.'   --   '.$picurl;
					$flag = 0;
					++$k;
				}
		}		
			?>
			<h3 text-algin="center">Pasindu De Silva</h3>
			<img algin="center" src='https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn2/c0.25.176.176/s160x160/1380130_10151758239882669_1958295065_a.jpg' height="160"  width="160"/>
			<ul>
			<li>Sri Lanka</li>
			<li>ppasindud@gmail.com</li>
			<li>National School Of Business Managment</li>
			</ul>
			
        <p>
		This example is a quic
		k exercise to illustrate how the
		default, static navbar and fixed to t
		op navbar work. It includes the
		responsive CSS and HTML
		, so it also adapts to your 
		viewport and device.</p>
		
			</div>		
			
			
			<div class="col-md-4">
			<h3>Pasindu De Silva</h3>
			<img src='https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn2/c0.25.176.176/s160x160/1380130_10151758239882669_1958295065_a.jpg' height="160"  width="160"/>
			<ul>
			<li>Sri Lanka</li>
			<li>ppasindud@gmail.com</li>
			<li>National School Of Business Managment</li>
			</ul>
			
        <p>
		This example is a quic
		k exercise to illustrate how the
		default, static navbar and fixed to t
		op navbar work. It includes the
		responsive CSS and HTML
		, so it also adapts to your 
		viewport and device.</p>
		
			</div>		<div class="col-md-4">
			<h3>Pasindu De Silva</h3>
			<img src='https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn2/c0.25.176.176/s160x160/1380130_10151758239882669_1958295065_a.jpg' height="160"  width="160"/>
			<ul>
			<li>Sri Lanka</li>
			<li>ppasindud@gmail.com</li>
			<li>National School Of Business Managment</li>
			</ul>
			
        <p>
		This example is a quic
		k exercise to illustrate how the
		default, static navbar and fixed to t
		op navbar work. It includes the
		responsive CSS and HTML
		, so it also adapts to your 
		viewport and device.</p>
		
			</div>
		</div>
	  
      <div class="jumbotron">
        <h1>Navbar example</h1>
        <p>
		This example is a quic
		k exercise to illustrate how the
		default, static navbar and fixed to t
		op navbar work. It includes the
		responsive CSS and HTML
		, so it also adapts to your 
		viewport and device.</p>
        <p>
          <a class="btn btn-lg btn-primary" href="../../components/#navbar" role="button">View navbar docs &raquo;</a>
        </p>
      </div>

    </div> <!-- /container -->


</body>
</html>







