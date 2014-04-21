 <?php
   
		//$key = "0Ah2FsDeKOA46dFVtcTFNbU45LXZWbXFPMHdvU2ptQWc";
		$key = "0Ah2FsDeKOA46dDlVWXhMYzhuX0ZpZlNCZWEzTzVGR1E";
		$url = "http://spreadsheets.google.com/feeds/cells/".$key."/od6/public/values?alt=json";
		//echo $url;
		$google_sheet = file_get_contents($url, false);
		
		/*$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		$google_sheet = curl_exec($ch);
		curl_close($ch);
		*/
		
		
		$res = json_decode($google_sheet,true  );
		$cars =$res['feed']['entry'] ;
		$max = sizeof($cars);
	
		$flag=0;
		if(isset($_GET['username'])){
		
		$uns = $_GET['username'];
		}else{
			echo  file_get_contents("homepage.php");
			exit();
			//$uns = 'pasindu';
		}
		for ($i=1;  $i< $max   ;  $i++)
		{ 
			if("2"==$cars[$i]['gs$cell']['col'] ){
				$username_loc = $cars[$i]['content']['$t']  ;
				if( $uns ==	$username_loc){
					$flag=1;
					break;
				}
			}
			if($flag==1){break;}	
		}

		if($flag==0){
			echo file_get_contents("homepage.php");
			exit();
		}	
		/*if($flag==0){
		$uns = 'pasindu';
		$flag 	=1;
				for ($i=1;  $i< $max   ;  $i++)
				{ 
					
					$username_loc = $cars[$i]['content']['$t']  ;
					
					if( $uns   ==	$username_loc){
						$flag 	=1;
						
						break;
					}
						
					$i+=12;
				}
		
		}*/
		
		
		
	if($flag==1){
	
		 $j = $i ;
		for (	$k=$i ; $k<$j+13 ;$k++	)
		{
			if (isset($cars[$k] ['gs$cell']['col'] )) {
			switch(  $cars[$k] ['gs$cell']['col']    ){
				case "2": 
				$username =$cars[$k] ['content']['$t']     ;
				break;
				case "3":
				$name = $cars[$k] ['content']['$t']     ;
				break;
				case "4":
				
				$googleplus = $cars[$k] ['content']['$t']     ;
				break;
				case "5":
				
				$personal = $cars[$k] ['content']['$t']     ;
				break;
				case "6":
				$linkedin = $cars[$k] ['content']['$t']     ;
				break;
				case "7": 
				$twitter = $cars[$k] ['content']['$t']     ;
				break;
				case "8": 
				$facebook = $cars[$k] ['content']['$t']     ;
				break;
				case "9": 
				$location = $cars[$k] ['content']['$t'] ;
				break;
				case "10":
				$description = $cars[$k] ['content']['$t'] ;
				break;
				case "11":
				$background = $cars[$k] ['content']['$t'] ;
				break;
				case "12":
				$university = $cars[$k] ['content']['$t'] ;
				break;
				case "13":
				$pix = $cars[$k] ['content']['$t'] ;
				break;

			}
			
			}
			//console.log(cars[k].content.$t);
		}	
	}
	

	
?>





<html>
   <head>
      <title><?php echo $name;?></title>
      <link rel="stylesheet" href="public/stylesheets/style.css">
      <script src="public/javascripts/assets/jquery/jquery.js"></script>
	  <script src="public/assets/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
      <link rel="stylesheet" href="public/assets/magnific-popup/dist/magnific-popup.css">
      <script src="public/javascripts/pop.js"></script>
	  
	
   </head>
   <body style="">
      <div style="float:right; " class="containter">
         <div class="main">
            <h1 class="full_name">
               <?php echo $name;?>
            </h1>
            <h2 class="h2_about_me">About me</h2>
            <p class="description">
               <?php echo $description;?>
            </p>
            <img src="public/images/location.png" alt="">
            <a class="location"><?php echo $location;?></a>
			</br>
			<img src="public/images/graduation.png" alt="" height="40" >
            <a class="location"><?php echo $university;?></a>
         </div>
         <div class="links">
            <ul>
			  <?php if( isset( $facebook  )  )  {?>
               <li>
                  <a href="<?php echo $facebook ;?>" target="_blank" class="facebook">
                  <img src="public/images/facebook-icon.png" alt=""></a>
               </li>
			     <?php }	?>
				  
				  
			     <?php if( isset( $twitter  )  )  {?>
               <li><a href="<?php echo $twitter ;?>" target="_blank" class="twitter">
                  <img src="public/images/twitter-icon.png" alt=""></a>
               </li>
			   <?php }	?>
			   
               <?php if( isset( $linkedin  )  )  {?>
			   <li><a href="<?php echo $linkedin ;?>" target="_blank" class="linkedin"><img src="public/images/linkedin-icon.png" alt="">
			   </a></li>
               <?php }	?>

			 <?php if( isset( $googleplus  )  )  {?>
			  <li><a href="<?php echo $googleplus ;?>" target="_blank" class="googleplus">
			  <img src="public/images/google-icon.png" alt=""></a></li>
			  <?php }	?>
			
			</ul>
         </div>
     
      </div>
      <style>html 
	  {  background:#000; 
	  width:100%; height:100%; margin:-8px; background-image: url('<?php echo $background ;?>'); background-repeat: no-repeat; float:left; }; 
	  </style>
   </body>
</html>







