<html>
	<head>
		<title>SEA GSA</title>
		<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<script type="text/javascript" src="https://cdn.rawgit.com/jsoma/tabletop/master/src/tabletop.js"></script>
	</head>
	<body>
		<?php
				//$key = "0Ah2FsDeKOA46dFVtcTFNbU45LXZWbXFPMHdvU2ptQWc";
				$key = "0Ah2FsDeKOA46dDlVWXhMYzhuX0ZpZlNCZWEzTzVGR1E";
				$url = "http://spreadsheets.google.com/feeds/cells/".$key."/od6/public/values?alt=json";
		
				$google_sheet = file_get_contents($url, false);
				$res = json_decode($google_sheet,true  );
				$cars =$res['feed']['entry'] ;
				$max = sizeof($cars);

				$flag=0;
						$uns = 'pasindu';
		
						for ($i=1;  $i< $max   ;  $i++)
						{
							
							
							if("2"==$cars[$i]['gs$cell']['col'] ){
								
								$username_loc = $cars[$i]['content']['$t']  ;
								
								if( $uns ==	$username_loc){
									$flag 	=1;
									break;
								}
							}
							
							if($flag==1){break;}
						
							$i++;
						}

					//var_dump($google_sheet);
		
		?>
		<script type="text/javascript">
  window.onload = function() { init() };
  var key ="0Ah2FsDeKOA46dDlVWXhMYzhuX0ZpZlNCZWEzTzVGR1E";
  var public_spreadsheet_url = 'https://docs.google.com/spreadsheet/pub?hl=en_US&hl=en_US&key='+key+'&output=html';

  function init() {
    Tabletop.init( { key: public_spreadsheet_url,
                     callback: showInfo,
                     simpleSheet: true } )
  }

  function showInfo(data, tabletop) {
    //alert("Successfully processed!")
    var s = '<img height="125" width="125" src="public/images/125x125.jpg" class="img-thumbnail" alt="Thumbnail Image">';
	var a;					
   	for (var i = 0; data.length> i; i++) {
   		console.log(data[i].yourname);
   		if (data[i].avatarurl=="") {
   			a="public/images/125x125.jpg";
   		}else{
   			a= data[i].avatarurl;
   		}
   		u= data[i].username;
   		s='<a href="?username='+u+'"><img height="125" width="125" src="'+a+'" class="img-thumbnail" alt=""></a>';
   		document.getElementById("gsas").innerHTML+=s;
   	};

   	
    console.log(data);
  }
</script>
  <style>
	  .img-thumbnail{
	  
		height: 125px;
	  }
	  </style>
		<div class="container">
			<div class="navbar navbar-default" role="navigation">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">GSA HOME</a>
					</div>
					<div class="navbar-collapse collapse">
						</div><!--/.nav-collapse -->
						</div><!--/.container-fluid -->
					</div>
					
					
					<div class="jumbotron">
						<h1>GSA Batch of  2013 - 2014</h1>
						<p>This is the home page of the SEA GSA Batch of 2013 - 2014 and details about them</p>
						<a href="https://docs.google.com/forms/d/1uyqXGBWBW_KFixTEtaeHlGqZ7gSOd6zcZc8MZ8iKbV0/viewform">GSAs Fill your form  here </a>
						<p> </p>
					</div><div class="container">
					<div id="gsas">

					</div>
					</div>
				</div>
			</body>
		</html>
		<?php
		?>