<?php 
require_once("inc/config.php");
require_once("inc/search.php");

//get page number
if (isset($_GET['pg'])){
	$pg = $_GET['pg'];
} else {
	$pg = 1;
}


//$month = "FEBRUARY";
//$stmt_review = $db->prepare("SELECT * FROM reviews WHERE month = :month");
//$stmt_review->bindParam(':month', $month, PDO::PARAM_STR);
//$stmt_review->execute();

$stmt=$db->prepare("SELECT * FROM journals ORDER BY RAND() LIMIT 4");
$stmt->execute();

$stmt1 = $db->prepare("SELECT * FROM publications WHERE pub_journal = 'IJEBM' AND pub_issue = 'CURRENT'");
$stmt1->execute();

$stmt2 = $db->prepare("SELECT * FROM publications WHERE pub_journal = 'JBGR' AND pub_issue = 'CURRENT'");
$stmt2->execute();

$stmt3 = $db->prepare("SELECT * FROM publications WHERE pub_journal = 'IJHPR' AND pub_issue = 'CURRENT'");
$stmt3->execute();

$stmt4 = $db->prepare("SELECT * FROM publications WHERE pub_journal = 'IJAES' AND pub_issue = 'CURRENT'");
$stmt4->execute();

$stmt5 = $db->prepare("SELECT * FROM publications WHERE pub_journal = 'IJASMT' AND pub_issue = 'CURRENT'");
$stmt5->execute();

$stmt6 = $db->prepare("SELECT * FROM publications WHERE pub_journal = 'IJSSMR' AND pub_issue = 'CURRENT'");
$stmt6->execute();

$stmt7 = $db->prepare("SELECT * FROM publications WHERE pub_journal = 'JPSLR' AND pub_issue = 'CURRENT'");
$stmt7->execute();

$stmt8 = $db->prepare("SELECT * FROM publications WHERE pub_journal = 'IJEE' AND pub_issue = 'CURRENT'");
$stmt8->execute();

$stmt9 = $db->prepare("SELECT * FROM publications WHERE pub_journal = 'IJEFM' AND pub_issue = 'CURRENT'");
$stmt9->execute();

$stmt10 = $db->prepare("SELECT * FROM publications WHERE pub_journal = 'IJEMT' AND pub_issue = 'CURRENT'");
$stmt10->execute();

$stmt11 = $db->prepare("SELECT * FROM publications WHERE pub_journal = 'IJELCS' AND pub_issue = 'CURRENT'");
$stmt11->execute();

$stmt12 = $db->prepare("SELECT * FROM publications WHERE pub_journal = 'WJFIR' AND pub_issue = 'CURRENT'");
$stmt12->execute();

$stmt13 = $db->prepare("SELECT * FROM publications WHERE pub_journal = 'JAFM' AND pub_issue = 'CURRENT'");
$stmt13->execute();

$stmt14 = $db->prepare("SELECT * FROM publications WHERE pub_journal = 'IJRCP' AND pub_issue = 'CURRENT'");
$stmt14->execute();

$stmt15 = $db->prepare("SELECT * FROM publications WHERE pub_journal = 'IJBFR' AND pub_issue = 'CURRENT'");
$stmt15->execute();

$stmt16 = $db->prepare("SELECT * FROM publications WHERE pub_journal = 'AJHA' AND pub_issue = 'CURRENT'");
$stmt16->execute();

$stmt17 = $db->prepare("SELECT * FROM publications WHERE pub_journal = 'JBAE' AND pub_issue = 'CURRENT'");
$stmt17->execute();

$stmt18 = $db->prepare("SELECT * FROM publications WHERE pub_journal = 'RJMCIT' AND pub_issue = 'CURRENT'");
$stmt18->execute();

$stmt19 = $db->prepare("SELECT * FROM publications WHERE pub_journal = 'JHSP' AND pub_issue = 'CURRENT'");
$stmt19->execute();

$stmt20 = $db->prepare("SELECT * FROM publications WHERE pub_journal = 'JLGP' AND pub_issue = 'CURRENT'");
$stmt20->execute();

$stmt21 = $db->prepare("SELECT * FROM publications WHERE pub_journal = 'IJCSMT' AND pub_issue = 'CURRENT'");
$stmt21->execute();

$stmt22 = $db->prepare("SELECT * FROM publications WHERE pub_journal = 'JPASWR' AND pub_issue = 'CURRENT'");
$stmt22->execute();

$stmt23 = $db->prepare("SELECT * FROM publications WHERE pub_journal = 'RJFSQC' AND pub_issue = 'CURRENT'");
$stmt23->execute();

$stmt24 = $db->prepare("SELECT * FROM publications WHERE pub_journal = 'JHMATR' AND pub_issue = 'CURRENT'");
$stmt24->execute();

$stmt25 = $db->prepare("SELECT * FROM publications WHERE pub_journal = 'RJHCS' AND pub_issue = 'CURRENT'");
$stmt25->execute();

$stmt26 = $db->prepare("SELECT * FROM publications WHERE pub_journal = 'IJGEM' AND pub_issue = 'CURRENT'");
$stmt26->execute();

$stmt27 = $db->prepare("SELECT * FROM publications WHERE pub_journal = 'RJPST' AND pub_issue = 'CURRENT'");
$stmt27->execute();

$stmt28 = $db->prepare("SELECT * FROM publications WHERE pub_journal = 'WJEDS' AND pub_issue = 'CURRENT'");
$stmt28->execute();

$stmt29 = $db->prepare("SELECT * FROM publications WHERE pub_journal = 'IJMCS' AND pub_issue = 'CURRENT'");
$stmt29->execute();

$stmt30 = $db->prepare("SELECT * FROM publications WHERE pub_journal = 'WJIMT' AND pub_issue = 'CURRENT'");
$stmt30->execute();

$stmt31 = $db->prepare("SELECT * FROM publications WHERE pub_journal = 'IJMEPR' AND pub_issue = 'CURRENT'");
$stmt31->execute();

$stmt32 = $db->prepare("SELECT * FROM publications WHERE pub_journal = 'IJCCP' AND pub_issue = 'CURRENT'");
$stmt32->execute();

// if not empty result if (is_array($row))  

?>
<!DOCTYPE html>
<html>
<head>
<title>IIARD | Home - International Institute of Academic Research and development</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Description" content="IIARD Publications is an independent institution in Africa. It focuses on the developmental issues of the continent, by providing a medium for interaction between researchers in the academic commity. Its main purpose is to foster the relationship between researchers and to create an enabling environment for contributors and academicians to share ideas that relates to developmental issues."> 
<meta name="keyword" content="iiardpub, iiard, research, publication, 'publications', publications, journal, journals, institute, 'publication company', 'online publication', 'academic research and development', 'international institute',iiardpublication, 'academic research', 'international journals', 'international publications', 'international journal','international publication'">

<link rel="icon" type="image/x-icon" href="images/no-bg-logo.png" />
<!--//for-mobile-apps -->
<!--Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css?version=2" rel="stylesheet" type="text/css" media="all" />
<!--<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />-->
<!--//Custom Theme files -->
<!--js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="replaceFile.js"></script>
<!--//js-->
<!--cart-->
<!--cart-->
<!--web-fonts-->
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Pompiere' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Fascinate' rel='stylesheet' type='text/css'>
<!--web-fonts-->
<!--animation-effect-->

<link href="css/animate.min.css" rel="stylesheet"> 

<?php include_once("inc/marquee.php"); ?>
</head>
<style>
/* (A) BLINKING KEYFRAMES by Dumka for small icon near call for paper */
@keyframes blinking {
  0% {
    background-color: transparent;
    border: 1px solid transparent;
  }
  /* ADD MORE KEYFRAMES IF YOU WANT
  50% {
    background-color: #55d66b;
    border: 5px solid #126620;
  } */
  100% {
    background-color: #ff0000;
    border: 3px solid transparent;
  }
}
 
/* (B) ATTACH BLINKING KEYFRAMES TO CONTAINER */
/* animation: name | time | iterations */
#demoz {

 
  animation: blinking 0.5s infinite;
  color:white;
  width:30px;
  height:18px;
  text-align:center;
  margin:0px;
  font-size:12px;
  border-radius:7px;
  

}
</style>

<body>


	<!--header-->
	
	<?php include_once("inc/header.php"); ?>
	<!--//header-->
	
<!--double line-->
 <div class="trend wow zoomIn animated" data-wow-delay=".5s">
 
 <div class="container">
			
            <!--PAGE ONE-->
            <div class="col-md-9 product-model-sec" <?php if(@$pg != 1){?> style="display: none; <?php } ?>">
				
				<div class="product-grids simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".5s">
				<div class="new-top">
						<a href="journal/?j=IJSSMR"><img src="get/cover/IJSSMR.jpg" class="img-responsive" alt=""/></a>
                        <!-- <span class="star"> </span>-->
						<div class="new-text">
							<ul>
								<li><a href="journal/?j=IJSSMR">View Details </a></li>
								
								
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a href="journal/?j=IJSSMR">IJSSMR</a></h5>
						<div class="rating">
						<p><span style=" text-align:right; color:#FF590F; font-size: 13px;">E-ISSN 2545-5303<br>P-ISSN 2695-2203</span></p>
						</div>
						<div class="ofr"><a href="journal/?j=IJSSMR">
						  <!--style="font-size:10px;"-->
						  <p style="font-size:10px;"><span cl>INTERNATIONAL JOURNAL OF SOCIAL SCIENCES AND MANAGEMENT RESEARCH</span></p>
						  </a>
						</div>
					</div>


                
				</div>
				
				<div class="product-grids product-grids-mdl simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".5s">
					<div class="new-top">
						<a href="journal/?j=IJEBM"><img src="get/cover/IJEBM.jpg" class="img-responsive" alt=""/></a>
						<div class="new-text">
							<ul>
								<li><a href="journal/?j=IJEBM">View Details </a></li>
								
								
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a href="journal/?j=IJEBM">IJEBM</a></h5>
						<div class="rating">
							<p ><span style=" text-align:right; color:#FF590F; font-size: 13px;">E-ISSN 2489-0065 <br> P-ISSN 2695-1878</span></p>
							
						</div>
						<div class="ofr">
						<a href="journal/?j=IJEBM">
							<p style="font-size:13px;"><span cl>INTERNATIONAL JOURNAL OF ECONOMICS AND BUSINESS MANAGEMENT</span></p>
							</a>
						</div>
					</div>
				  </div>
   
                <div class="product-grids simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".5s">
				<div class="new-top">
						<a href="journal/?j=JAFM"><img src="get/cover/JAFM.jpg" class="img-responsive" alt=""/></a>
						<div class="new-text">
							<ul>
								<li><a href="journal/?j=JAFM">View Details </a></li>
								
								
							</ul>
						</div>
		</div>
					<div class="new-bottom">
						<h5><a href="journal/?j=JAFM">JAFM</a></h5>
						<div class="rating">
							<p ><span style=" text-align:right; color:#FF590F; font-size: 13px;">E-ISSN 2504-8856<br>P-ISSN 2695-2211</span></p>
							
						</div>
						<div class="ofr">
						<a href="journal/?j=JAFM">
							<p style="font-size:13px;"><span cl>JOURNAL OF ACCOUNTING AND FINANCIAL MANAGEMENT</span></p>
							</a>
						</div>
					</div>

				</div>
				
				<div class="product-grids simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".5s">
				<div class="new-top">
						<a href="journal/?j=IJEE"><img src="get/cover/IJEE.jpg" class="img-responsive" alt=""/></a>
						<div class="new-text">
							<ul>
								<li><a href="journal/?j=IJEES">View Details </a></li>		
							</ul>
						</div>
				  </div>
					<div class="new-bottom">
						<h5><a href="journal/?j=IJEE">IJEE</a></h5>
						<div class="rating">
							<p><span style=" text-align:right; color:#FF590F; font-size: 13px;">E-ISSN 2489-0073<br>P-ISSN 2695-1940</span></p>
						
						</div>
						<div class="ofr">
						<a href="journal/?j=IJEE">
							<p style="font-size:13px;"><span cl>INTERNATIONAL JOURNAL OF EDUCATION AND EVALUATION</span></p>
							</a>
						</div>
					</div>
				</div>
				
				<div class="product-grids product-grids-mdl simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".5s">
				<div class="new-top">
						<a href="journal/?j=IJEMT"><img src="get/cover/IJEMT.jpg" class="img-responsive" alt=""/></a>
						<div class="new-text">
							<ul>
								<li><a href="journal/?j=IJEMT">View Details </a></li>
								
								
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a href="journal/?j=IJEMT">IJEMT</a></h5>
						<div class="rating">
							<p><span style=" text-align:right; color:#FF590F; font-size: 13px;">E-ISSN 2504-8848<br>P-ISSN 2695-2149</span></p>
						</div>
						<div class="ofr">
						<a href="journal/?j=IJEMT">
							<p style="font-size:14px;"><span cl>INTERNATIONAL JOURNAL OF ENGINEERING AND MODERN TECHNOLOGY</span></p>
						</a>
						</div>
					</div>				
                </div>
                
                <div class="product-grids simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".5s">
					<div class="new-top">
						<a href="journal/?j=IJAES"><img src="get/cover/IJAES.jpg" class="img-responsive" alt=""/></a>
						<div class="new-text">
							<ul>
								<li><a href="journal/?j=IJAES">View Details </a></li>
								
								
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a href="journal/?j=IJAES">IJAES</a></h5>
						<div class="rating">
							<p><span style=" text-align:right; color:#FF590F; font-size: 13px;">E-ISSN 2489-0081 <br>P-ISSN 2695-1894</span></p>
						
						</div>
						<div class="ofr">
						<a href="journal/?j=IJAES">
							<p style="font-size:14px;"><span cl>INTERNATIONAL JOURNAL OF AGRICULTURE AND EARTH SCIENCE</span></p>
						</a>
						</div>
					</div>
				
				</div>
                
				
                <!--Pagination-->
                
					<ul class="pagination pagination-lg">
						<li class="disabled"><a href="#"><i class="fa fa-angle-left">«</i></a></li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="?pg=2">2</a></li>
						<li><a href="?pg=3">3</a></li>
						<li><a href="?pg=4">4</a></li>
						<li><a href="?pg=4"><i class="fa fa-angle-right">»</i></a></li>
					</ul>
                  
                    <!--Pagination-->
			</div>
            <!--PAGE ONE-->
            
            <!--PAGE TWO-->
            <div class="col-md-9 product-model-sec" <?php if(@$pg != 2){?> style="display: none; <?php } ?>">

				<div class="product-grids simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".7s">
					<div class="new-top">
					  <a href="journal/?j=IJBFR"><img src="get/cover/IJBFR.jpg" class="img-responsive" alt=""/></a>
						<div class="new-text">
							<ul>
								<li><a href="journal/?j=IJBFR">View Details </a></li>
								
								
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a href="journal/?j=IJBFR">IJBFR</a></h5>
						<div class="rating">
							<p><span style=" text-align:right; color:#FF590F; font-size: 17px;">E-ISSN 2695-1886<br>P-ISSN 2672-4979</span></p>
						
						</div>
						<div class="ofr">
						<a href="journal/?j=IJBFR">
							<p><span cl>INTERNATIONAL JOURNAL OF BANKING AND FINANCE RESEARCH</span></p>
							</a>
						</div>
					</div>
				</div>
				
				
				

<div class="product-grids product-grids-mdl simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".5s">
				<div class="new-top">
						<a href="journal/?j=IJCSMT"><img src="get/cover/IJCSMT.jpg" class="img-responsive" alt=""/></a>
						<div class="new-text">
							<ul>
								<li><a href="journal/?j=IJCSMT">View Details </a></li>
								
								
							</ul>
						</div>
		</div>
					<div class="new-bottom">
						<h5><a href="journal/?j=IJCSMT">IJCSMT</a></h5>
						<div class="rating">
							<p><span style=" text-align:right; color:#FF590F; font-size: 17px;">E-ISSN 2545-5699<br>P-ISSN 2695-1924</span></p>
						
						</div>
						<div class="ofr">
						<a href="journal/?j=IJCSMT">
							<p><span cl>INTERNATIONAL JOURNAL OF COMPUTER SCIENCE AND MATHEMATICAL THEORY</span></p>
						</a>
						</div>
					</div>
			  </div>
                
                
				<div class="product-grids simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".5s">
					
					<div class="new-top">
						<a href="journal/?j=IJCCP"><img src="get/cover/IJCCP.jpg" class="img-responsive" alt=""/></a>
						<div class="new-text">
							<ul>
								<li><a href="journal/?j=IJCCP">View Details </a></li>
								
								
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a href="journal/?j=IJCCP">IJCCP</a></h5>
						<div class="rating">
							<p><span style=" text-align:right; color:#FF590F; font-size: 17px;">E-ISSN 2545-5265<br>P-ISSN 2695-1916</span></p>
						
						</div>
						<div class="ofr">
						<a href="journal/?j=IJCCP">
							<p><span cl>INTERNATIONAL JOURNAL OF CHEMISTRY AND CHEMICAL PROCESSES</span></p>
						</a>
						</div>
					</div>
				</div>
				
                <div class="product-grids simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".5s">
					<div class="new-top">
					  <a href="journal/?j=IJRCP"><img src="get/cover/IJRCP.jpg" class="img-responsive" alt=""/></a>
						<div class="new-text">
							<ul>
								<li><a href="journal/?j=IJRCP">View Details </a></li>
								
								
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a href="journal/?j=IJRCP">IJRCP</a></h5>
						<div class="rating">
							<p><span style=" text-align:right; color:#FF590F; font-size: 17px;">E-ISSN 2579-0501<br>P-ISSN 2695-219X</span></p>
						
						</div>
						<div class="ofr">
						<a href="journal/?j=IJRCP">
						  <p style="font-size:13px;"><span cl>INTERNATIONAL JOURNAL OF RELIGIOUS AND CULTURAL PRACTICE</span></p>
						</a>
						</div>
					</div>
				</div>
				


<div class="product-grids product-grids-mdl simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".5s">
					<div class="new-top">
						<a href="journal/?j=IJASMT"><img src="get/cover/IJASMT.jpg" class="img-responsive" alt=""/></a>
						<div class="new-text">
							<ul>
								<li><a href="journal/?j=IJASMT">View Details </a></li>
								
								
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a href="journal/?j=IJASMT">IJASMT</a></h5>
						<div class="rating">
							<p><span style=" text-align:right; color:#FF590F; font-size: 17px;">E-ISSN 2489-009X <br> P-ISSN 2695-1908</span></p>
						
						</div>
						<div class="ofr">
						<a href="journal/?j=IJASMT">
							<p><span cl>INTERNATIONAL JOURNAL OF APPLIED SCIENCE AND MATHEMATICAL THEORY</span></p>
							</a>
						</div>
					</div>
			  </div>
				<div class="product-grids simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".5s">
					<div class="new-top">
						<a href="journal/?j=IJELCS"><img src="get/cover/IJELCS.jpg" class="img-responsive" alt=""/></a>
						<div class="new-text">
							<ul>
								<li><a href="journal/?j=IJELCS">View Details </a></li>
								
								
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a href="journal/?j=IJELCS">IJELCS</a></h5>
						<div class="rating">
							<p><span style=" text-align:right; color:#FF590F; font-size: 17px;">E-ISSN 2545-5702 <br>P-ISSN 2695-2157</span></p>
						
						</div>
						<div class="ofr">
						<a href="journal/?j=IJELCS">
							<p><span cl>INTERNATIONAL JOURNAL OF ENGLISH LANGUAGE AND COMMUNICATION STUDIES</span></p>
						</a>
						</div>
					</div>
              </div>
				<div class="product-grids simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".5s">
					<div class="new-top">
						<a href="journal/?j=IJMCS"><img src="get/cover/IJMCS.jpg" class="img-responsive" alt=""/></a>
                        <!-- <span class="star"> </span>-->
						<div class="new-text">
							<ul>
								<li><a href="journal/?j=IJMCS">View Details </a></li>
								
								
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a href="journal/?j=IJMCS">IJMCS</a></h5>
						<div class="rating">
							<p><span style=" text-align:right; color:#FF590F; font-size: 17px;">E-ISSN 2545-5273<br>P-ISSN 2695-2173</span></p>
						
						</div>
                        
						<div class="ofr">
						<a href="journal/?j=IJMCS">
							<p><span cl>INTERNATIONAL JOURNAL OF MARKETING AND COMMUNICATION STUDIES</span></p>
						</a>
						</div>
					</div>
				</div>
				


<div class="product-grids product-grids-mdl simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".5s">
					<div class="new-top">
						<a href="journal/?j=IJMEPR"><img src="get/cover/IJMEPR.jpg" class="img-responsive" alt=""/></a>
						<div class="new-text">
							<ul>
								<li><a href="journal/?j=IJMEPR">View Details </a></li>
								
								
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a href="journal/?j=IJMEPR">IJMEPR</a></h5>
						<div class="rating">
							<p><span style=" text-align:right; color:#FF590F; font-size: 17px;">E-ISSN 2579-0498<br>P-ISSN 2695-2181</span></p>
						
						</div>
						<div class="ofr">
						<a href="journal/?j=IJMEPR">
							<p><span cl>INTERNATIONAL JOURNAL OF MEDICAL EVALUATION AND PHYSICAL REPORT</span></p>
						</a>
						</div>
					</div>
			  </div>
                
				<div class="product-grids simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".9s">
				<div class="new-top">
						<a href="journal/?j=IJGEM"><img src="get/cover/IJGEM.jpg" class="img-responsive" alt=""/></a>
						<div class="new-text">
							<ul>
								<li><a href="journal/?j=IJGEM">View Details </a></li>
								
								
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a href="journal/?j=IJGEM">IJGEM</a></h5>
						<div class="rating">
							<p><span style=" text-align:right; color:#FF590F; font-size: 17px;">E-ISSN 2505-8821<br>P-ISSN 2695-1886</span></p>
						
						</div>
						<div class="ofr">
						<a href="journal/?j=IJGEM">
							<p><span cl>INTERNATIONAL JOURNAL OF GEOGRAPHY AND ENVIRONMENTAL MANAGEMENT</span></p>
						</a>
						</div>
					</div>
                </div>
                
                <!--Pagination-->
                
					<ul class="pagination pagination-lg">
				<li><a href="?pg=1"><i class="fa fa-angle-left">«</i></a></li>
						<li><a href="?pg=1">1</a></li>
						<li class="active"><a href="#">2</a></li>
						<li><a href="?pg=3">3</a></li>
						<li><a href="?pg=4">4</a></li>
						<li><a href="?pg=4"><i class="fa fa-angle-right">»</i></a></li>
					</ul>
              
                    <!--Pagination-->
			</div>
            <!--PAGE TWO-->
            
            <!--PAGE THREE-->
            <div class="col-md-9 product-model-sec" <?php if(@$pg != 3){?> style="display: none; <?php } ?>">
				<div class="product-grids simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".5s">
				<div class="new-top">
						<a href="journal/?j=IJEFM"><img src="get/cover/IJEFM.jpg" class="img-responsive" alt=""/></a>
                        <!-- <span class="star"> </span>-->
						<div class="new-text">
							<ul>
								<li><a href="journal/?j=IJEFM">View Details </a></li>
								
								
							</ul>
						</div>
				  </div>
					<div class="new-bottom">
						<h5><a href="journal/?j=IJEFM">IJEFM</a></h5>
						<div class="rating">
							<p><span style=" text-align:right; color:#FF590F; font-size: 13px;">E-ISSN 2545-5966<br>P-ISSN 2695-1932</span></p>
						
						</div>
						<div class="ofr">
						<a href="journal/?j=IJEFM">
							<p><span cl>INTERNATIONAL JOURNAL OF ECONOMICS AND FINANCE MANAGEMENT</span></p>
						</a>
						</div>
					</div>
				</div>
				


<div class="product-grids product-grids-mdl simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".5s">
<div class="new-top">
						<a href="journal/?j=IJHPR"><img src="get/cover/IJHPR.jpg"  class="img-responsive" alt=""/></a>
                        <!-- <span class="star"> </span>-->
						<div class="new-text">
							<ul>
								<li><a href="journal/?j=IJHPR">View Details </a></li>
								
								
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a href="journal/?j=IJHPR">IJHPR</a></h5>
						<div class="rating">
					
							<p><span style=" text-align:right; color:#FF590F; font-size: 13px;">E-ISSN 2545-5737<br>P-ISSN 2695-2165</span></p>
						
						</div>
						<div class="ofr">
						<a href="journal/?j=IJHPR">
							<p><span cl>INTERNATIONAL JOURNAL OF HEALTH AND PHARMACEUTICAL RESEARCH</span></p>
						</a>
						</div>
					</div>
				
			  </div>
                
                
				<div class="product-grids simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".5s">
					<div class="new-top">
						<a href="journal/?j=JBGR"><img src="get/cover/JBGR.jpg" class="img-responsive" alt=""/></a>
						<div class="new-text">
							<ul>
								<li><a href="journal/?j=JBGR">View Details </a></li>
								
								
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a href="journal/?j=JBGR">JBGR</a></h5>
						<div class="rating">
							<p><span style=" text-align:right; color:#FF590F; font-size: 17px;">E-ISSN 2545-5710<br>P-ISSN 2695-222X</span></p>
						
						</div>
						<div class="ofr">
						<a href="journal/?j=JBGR">
							<p><span cl>JOURNAL OF BIOLOGY AND GENETIC RESEARCH</span></p>
						</a>
						</div>
					</div>
				</div>
				<div class="product-grids simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".5s">
					<div class="new-top">
						<a href="journal/?j=JBAE"><img src="get/cover/JBAE.jpg" class="img-responsive" alt=""/></a>
						<div class="new-text">
							<ul>
								<li><a href="journal/?j=JBAE">View Details </a></li>
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a href="journal/?j=JBAE">JBAE</a></h5>
						<div class="rating">
							<p><span style=" text-align:right; color:#FF590F; font-size: 13px;">E-ISSN 2504-5281<br>P-ISSN 2695-2238</span></p>
						
						</div> 
						<div class="ofr">
						<a href="journal/?j=JBAE">
							<p><span cl>JOURNAL OF BUSINESS AND AFRICAN ECONOMY</span></p>
						</a>
						</div>
					</div>
				</div>
				


<div class="product-grids product-grids-mdl simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".7s">
					<div class="new-top">
						<a href="journal/?j=JHSP"><img src="get/cover/JHSP.jpg" class="img-responsive" alt=""/></a>
						<div class="new-text">
							<ul>
								<li><a href="journal/?j=JHSP">View Details </a></li>
								
								
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a href="journal/?j=JHSP">JHSP</a></h5>
						<div class="rating">
							<p><span style=" text-align:right; color:#FF590F; font-size: 13px;">E-ISSN 2545-5729 <br>P-ISSN 2695-2416</span></p>
						
						</div>
						<div class="ofr">
						<a href="journal/?j=JHSP">
							<p><span cl>JOURNAL OF HUMANITIES AND SOCIAL POLICIES</span></p>
						</a>
						</div>
					</div>
			  </div>
				<div class="product-grids simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".9s">
					<div class="new-top">
						<a href="journal/?j=JLGP"><img src="get/cover/JLGP.jpg" class="img-responsive" alt=""/></a>
						<div class="new-text">
							<ul>
								<li><a href="journal/?j=JLGP">View Details </a></li>
								
								
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a href="journal/?j=JLGP">JLGP</a></h5>
						<div class="rating">
							<p><span style=" text-align:right; color:#FF590F; font-size: 13px;">E-ISSN 2579-051X<br>P-ISSN 2695-2424</span></p>
						
						</div>
						<div class="ofr">
						<a href="journal/?j=JLGP">
							<p><span cl>JOURNAL OF LAW AND GLOBAL POLICIES. &nbsp;</span></p>
						</a>
						</div>
					</div>
              </div>
				<div class="product-grids simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".5s">
					<div class="new-top">
						<a href="journal/?j=JPSLR"><img src="get/cover/JPSLR.jpg" class="img-responsive" alt=""/></a>
						<div class="new-text">
							<ul>
								<li><a href="journal/?j=JPSLR">View Details </a></li>
								
								
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a href="journal/?j=JPSLR">JPSLR</a></h5>
						<div class="rating">
							<p><span style=" text-align:right; color:#FF590F; font-size: 13px;">E-ISSN 2504-883X<br>P-ISSN 2695-2432 </span></p>
						
						</div> 
						<div class="ofr">
						<a href="journal/?j=JPSLR">
							<p><span cl>JOURNAL OF POLITICAL SCIENCE AND LEADERSHIP RESEARCH</span></p>
						</a>
						</div>
					</div>
				</div>
				


<div class="product-grids product-grids-mdl simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".7s">
					<div class="new-top">
						<a href="journal/?j=JPASWR"><img src="get/cover/JPASWR.jpg" class="img-responsive" alt=""/></a>
                        <!-- <span class="star"> </span>-->
						<div class="new-text">
							<ul>
								<li><a href="journal/?j=JPASWR">View Details </a></li>
								
								
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a href="journal/?j=JPASWR">JPASWR</a></h5>
						<div class="rating">
							<p><span style=" text-align:right; color:#FF590F; font-size: 13px;">E-ISSN 2504-3597<br>P-ISSN 2695-2440</span></p>
					
						</div>
						<div class="ofr">
						<a href="journal/?j=JPASWR">
							<p><span cl>JOURNAL OF PUBLIC ADMINISTRATION AND SOCIAL WELFARE RESEARCH</span></p>
							</a>
						</div>
					</div>
			  </div>
                
				<div class="product-grids simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".9s">
					<div class="new-top">
					  <a href="journal/?j=RJFSQC"><img src="get/cover/RJFSQC.jpg" class="img-responsive" alt=""/></a>
                      <!-- <span class="star"> </span>-->
						<div class="new-text">
							<ul>
								<li><a href="journal/?j=RJFSQC">View Details </a></li>
								
								
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a href="journal/?j=RJFSQC">RJFSQC</a></h5>
						<div class="rating">
							<p><span style=" text-align:right; color:#FF590F; font-size: 13px;">E-ISSN 2504-6145<br>P-ISSN 2695-2459</span></p>
						
						</div>
						<div class="ofr">
						<a href="journal/?j=RJFSQC">
							<p><span cl>RESEARCH JOURNAL OF FOOD SCIENCE AND QUALITY CONTROL</span></p>
						</a>
						</div>
					</div>
				</div>
                
                
                <!--Pagination-->
                
					<ul class="pagination pagination-lg">
						<li><a href="?pg=1"><i class="fa fa-angle-left">«</i></a></li>
						<li><a href="?pg=1">1</a></li>
						<li><a href="?pg=2" >2</a></li>
						<li class="active"><a href="#">3</a></li>
						<li><a href="?pg=4">4</a></li>
						<li><a href="?pg=4"><i class="fa fa-angle-right">»</i></a></li>
					</ul>
             
                    <!--Pagination-->
			</div>
            <!--PAGE THREE-->
            
            <!--PAGE FOUR-->
            <div class="col-md-9 product-model-sec" <?php if(@$pg != 4){?> style="display: none; <?php } ?>">
				<div class="product-grids simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".5s">
					<div class="new-top">
                    <!-- <span class="star"> </span>-->
						<a href="journal/?j=JHMTR"><img src="get/cover/JHMTR.jpg" class="img-responsive" alt=""/></a>
						<div class="new-text">
							<ul>
								<li><a href="journal/?j=JHMTR">View Details </a></li>
								
								
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a href="journal/?j=JHMTR">JHMTR</a></h5>
						<div class="rating">
							<p><span style=" text-align:right; color:#FF590F; font-size: 13px;">E- ISSN 2504-6733<br>P-ISSN 2695-2408</span></p>
						
						</div>
						<div class="ofr">
						<a href="journal/?j=JHMTR">
							<p style="font-size: 14.4px;"><span cl>JOURNAL OF HOTEL MANAGEMENT AND TOURISM RESEARCH</span></p>
						</a>
						</div>
					</div>
				</div>
				


<div class="product-grids product-grids-mdl simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".7s">
				<div class="new-top">
						<a href="journal/?j=RJHCS"><img src="get/cover/RJHCS.jpg" class="img-responsive" alt=""/></a>
                        <!-- <span class="star"> </span>-->
						<div class="new-text">
							<ul>
								<li><a href="journal/?j=RJHCS">View Details </a></li>
								
								
							</ul>
						</div>
		</div>
					<div class="new-bottom">
						<h5><a href="journal/?j=RJHCS">RJHCS</a></h5>
						<div class="rating">
							<p><span style=" text-align:right; color:#FF590F; font-size: 17px;">E-ISSN 2579-0528<br>P-ISSN 2695-2467</span></p>
						
						</div>
						<div class="ofr">
						<a href="journal/?j=RJHCS">
							<p><span cl>RESEARCH JOURNAL OF HUMANITIES AND CULTURAL STUDIES</span></p>
						</a>
						</div>
					</div>
			  </div>
                
                
				<div class="product-grids simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".5s">
					<div class="new-top">
						<a href="journal/?j=RJMCIT"><img src="get/cover/RJMCIT.jpg" class="img-responsive" alt=""/></a>
						<div class="new-text">
							<ul>
								<li><a href="journal/?j=RJMCIT">View Details </a></li>
								
								
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a href="journal/?j=RJMCIT">RJMCIT</a></h5>
						<div class="rating">
							<p><span style=" text-align:right; color:#FF590F; font-size: 17px;">E-ISSN 2545-529X<br>P-ISSN 2695-2475</span></p>
						
						</div>
						<div class="ofr">
						<a href="journal/?j=RJMCIT">
							<p><span cl>RESEARCH JOURNAL OF MASS COMMUNICATION AND INFORMATION TECHNOLOGY</span></p>
							</a>
						</div>
					</div>
				</div>
				<div class="product-grids simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".5s">
					<div class="new-top">
						<a href="journal/?j=RJPST"><img src="get/cover/RJPST.jpg" class="img-responsive" alt=""/></a>
                        <!-- <span class="star"> </span>-->
						<div class="new-text">
							<ul>
								<li><a href="journal/?j=RJPST">View Details </a></li>
								
								
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a href="journal/?j=RJPST">RJPST</a></h5>
						<div class="rating">
							<p><span style=" text-align:right; color:#FF590F; font-size: 17px;">E-ISSN 2579-0536<br>P-ISSN 2695-2696</span></p>
						
						</div>
						<div class="ofr">
						<a href="journal/?j=RJPST">
							<p style=" font-size:13px;"><span cl>RESEARCH JOURNAL OF PURE SCIENCE AND TECHNOLOGY</span></p>
						</a>
						</div>
					</div>
				</div>
				


<div class="product-grids product-grids-mdl simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".7s">
					<div class="new-top">
						<a href="journal/?j=WJEDS"><img src="get/cover/WJEDS.jpg" class="img-responsive" alt=""/></a>
                        
                        <!-- <span class="star"> </span>-->
						<div class="new-text">
							<ul>
								<li><a href="journal/?j=WJEDS">View Details </a></li>
								
								
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a href="journal/?j=WJEDS">WJEDS</a></h5>
						<div class="rating">
							<p><span style=" text-align:right; color:#FF590F; font-size: 17px;">E-ISSN 2579-0544<br>P-ISSN 2695-2483</span></p>
							
						</div>
						<div class="ofr">
						<a href="journal/?j=WJEDS">
							<p style=" font-size:11.76px;"><span cl>WORLD JOURNAL OF ENTREPRENEURAL DEVELOPMENT STUDIES</span></p>
						</a>
						</div>
					</div>
			  </div>
				<div class="product-grids simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".9s">
					<div class="new-top">
						<a href="journal/?j=WJFIR"><img src="get/cover/WJFIR.jpg" class="img-responsive" alt=""/></a>
                        <!-- <span class="star"> </span>-->
						<div class="new-text">
							<ul>
								<li><a href="journal/?j=WJFIR">View Details </a></li>
								
								
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a href="journal/?j=WJFIR">WJFIR</a></h5>
						<div class="rating">
							<p><span style=" text-align:right; color:#FF590F; font-size: 17px;">E-ISSN 2550-7125<br>P-ISSN 2682-5902</span></p>
						
						</div>
						<div class="ofr">
						<a href="journal/?j=WJFIR">
							<p><span cl>WORLD JOURNAL OF FINANCE AND INVESTMENT RESEARCH</span></p>
						</a>
						</div>
					</div>
              </div>
				<div class="product-grids simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".5s">
					<div class="new-top">
						<a href="journal/?j=WJIMT"><img src="get/cover/WJIMT.jpg" class="img-responsive" alt=""/></a>
                        <!-- <span class="star"> </span>-->
						<div class="new-text">
							<ul>
								<li><a href="journal/?j=WJIMT">View Details </a></li>
								
								
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a href="journal/?j=WJIMT">WJIMT</a></h5>
						<div class="rating">
							<p><span style=" text-align:right; color:#FF590F; font-size: 17px;">E-ISSN 2504-4766<br>P-ISSN 2682-5910</span></p>
						
						</div>
						<div class="ofr">
						<a href="journal/?j=WJIMT">
							<p><span cl>WORLD JOURNAL OF INOVATION AND MODERN TECHNOLOGY</span></p>
						</a>
						</div>
					</div>
                </div>
                
                <div class="product-grids product-grids-mdl simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".5s">
					<div class="new-top">
						<a href="journal/?j=AJHA"><img src="get/cover/AJHA.jpg" class="img-responsive" alt=""/></a>
				     <!-- <span class="star"> </span>-->
						<div class="new-text">
							<ul>
								<li><a href="journal/?j=AJHA">View Details </a></li>
								
								
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a href="journal/?j=AJHA">AJHA</a></h5>
						<div class="rating">
							<p><span style=" text-align:right; color:#FF590F; font-size: 17px;">E- ISSN 2579-048X<br>P-ISSN 2695-1851</span></p>
						
						</div>
						<div class="ofr">
						<a href="journal/?j=AJHA">
							<br><p style="font-size:14.4px;"><span cl>AFRICAN JOURNAL OF HISTORY AND ARCHAEOLOGY</span></p>
						</a>
						</div>
					</div>
				</div>
                
                <div class="product-grids simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".5s">
					<div class="new-top">
						<a href="journal/?j=JPSLR"><img src="get/cover/JPSLR.jpg" class="img-responsive" alt=""/></a>
						<div class="new-text">
							<ul>
								<li><a href="journal/?j=JPSLR">View Details </a></li>
								
								
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a href="journal/?j=JPSLR">JPSLR</a></h5>
						<div class="rating">
							<p><span style=" text-align:right; color:#FF590F; font-size: 17px;">E-ISSN 2504-883X<br>P-ISSN 2695-2432</span></p>
						
						</div>
						<div class="ofr">
						<a href="journal/?j=JPSLR">
							<p><span cl>JOURNAL OF POLITICAL SCIENCE AND LEADERSHIP RESEARCH</span></p>
							</a>
						</div>
					</div>
				</div>
                
                <!--Pagination-->
                
                
                
					<ul class="pagination pagination-lg">
						<li><a href="?pg=1"><i class="fa fa-angle-left">«</i></a></li>
						<li><a href="?pg=1">1</a></li>
						<li><a href="?pg=2">2</a></li>
						<li><a href="?pg=3">3</a></li>
                        <li class="active"><a href="#">4</a></li>
						<li class="disabled"><a href="?pg=4"><i class="fa fa-angle-right">»</i></a></li>
					</ul>
            
                    <!--Pagination-->
               
			</div>
            <!--PAGE FOUR-->
            
            
			<!--End of all conditions-->
            <div class="col-md-3 rsidebar">
            <div class="rsidebar-top">
            <div class="sidebar-row" style="margin-top: 0px; padding: 0px;">

			<div style="padding-left:150px" >
			<p  id="demoz" > new!</p>
			</div>
					<h4 style="text-align:center">Call for Papers  <p style=" color:black; font-size: 0.7em; font-family:  sans-serif; text-align:center"> JUNE <?php echo date('Y'); ?> EDITION</em></p> </p></h4>
						
			  <div class="sidebar-row" style=" height: 150px; overflow: hidden; " >
			  <marquee behavior="scroll" direction="up" scrollamount="3" width="100%" style="text-align:center;">

			  Scholars and Researchers in the academic community and other institutions are invited to submit their
research articles for publication.<br> An Author wishing to submit a paper should ensure that it has not been
previously published or its being considered for publication in another journal. <br>The manuscript should be the Author's original work. IIARD invites Researchers, Academicians, Professionals, Practitioners, and Students from all over the world to submit high-quality theoretical and empirical original research papers, case studies, review papers, literature reviews, book reviews, conceptual framework, analytical and simulation models, and technical notes for publication.

			  </marquee>
			  <!--
                  <div style=" height: 130px; overflow: hidden;" class="date">
										<div id="news"> 
										
											<div class="date-text">
												<p><span style=" text-align: justify; color:#000"><em>Original research papers written in
                                                 English are invited for publication in 
                                                 <?php echo date('M, Y'); ?> edition.</em></p> 
											</div>
											<hr>
										</div>
										
						</div>
					-->	
				  </div>
				</div>
				</div> 
				<br>
				<div class="rsidebar-top">
                    <div class="sidebar-row" style="margin-top: 0px;">
				        <h4>LATEST UPDATES</h4>
						<ul>
						<li>
						<div class="sidebar-row" >
				<img src="images/secf.png" class="img-responsive"  alt="crossref"/>
					<p style="font-size: 1.0em; text-align: center;"><b> DOI (DIGITAL OBJECT IDENTIFIER) ISSUANCE </b></p>
					<p>We are pleased to inform you that IIARD is now a registered member of <b>Crossref</b>. Henceforth, we will be issuing <b>DOI</b> to every published article.  </p>
					</div>
						</li>
						<hr>
						<li>
						<p style="font-size: 1.0em; text-align: center;" ><b>JOURNAL HARD COPIES ARE READY FOR DISPATCH </b></p>
					<p> All Journal hard copies are ready for dispatch. Corresponding authors are advice to submit their mailing addresses to 
					<a href="mailto:editor@iiardjournals.org"  subject="Subject : Journal hard copies" > editor@iiardjournals.org   </a>	</p>
                    </li>
					<ul>
					</div>
			    </div> 
				<!--
                <br>
				<div class="rsidebar-top">
                    <div class="sidebar-row" style="margin-top: 0px;">
				        <h4></h4>
                    </div>
			    </div> -->
                <br>
                <div class="rsidebar-top">
				  <div class="sidebar-row" style="margin-top: 0px;">
				    <h4>ALL JOURNALS</h4>
						<ul class="faq">
							<li class="item1"><a href="#">Sciences<span class="glyphicon glyphicon-menu-down"></span></a>
								<ul>
									
                                    <li class="subitem1"><a href="journal/?j=IJHPR"><span class="badge badge-primary">&bull;</span> International Journal of Health And Pharmaceutical Research</a></li>										
									<li class="subitem1"><a href="journal/?j=IJGEM"><span class="badge badge-primary">&bull;</span> International journal of geography and environmental management.</a></li>
									<li class="subitem1"><a href="journal/?j=IJMEPR"><span class="badge badge-primary">&bull;</span> International Journal of Medical Evaluation and Physical Report </a></li>										
									<li class="subitem1"><a href="journal/?j=IJAES"><span class="badge badge-primary">&bull;</span>International Journal of Agriculture And Earth Science</a></li>	
                                    <li class="subitem1"><a href="journal/?j=IJASMT"><span class="badge badge-primary">&bull;</span>International Journal of Applied Science And Mathematical Theory</a></li>	
                                    <li class="subitem1"><a href="journal/?j=IJCCP"><span class="badge badge-primary">&bull;</span>International Journal of Chemistry And Chemical Processes</a></li>	
                                    <li class="subitem1"><a href="journal/?j=IJCSMT"><span class="badge badge-primary">&bull;</span>International Journal of Computer Science And Mathematical Theory</a></li>	
                                    <li class="subitem1"><a href="journal/?j=JBGR"><span class="badge badge-primary">&bull;</span>Journal of Biology And Genetic Research</a></li>	
                                    <li class="subitem1"><a href="journal/?j=RJFSQC"><span class="badge badge-primary">&bull;</span>Research Journal of Food Science And Quality Control</a></li>
                                    <li class="subitem1"><a href="journal/?j=RJPST"><span class="badge badge-primary">&bull;</span>Research Journal of Pure Science And Technology</a></li>
                                    <li class="subitem1"><a href="journal/?j=WJIMT"><span class="badge badge-primary">&bull;</span>World Journal Of Innovation And Modern Technology</a></li>	
                       		  </ul>
							</li>
						  <li class="item2"><a href="#">Engineering<span class="glyphicon glyphicon-menu-down"></span></a>
								<ul>
									<li class="subitem1"><a href="journal/?j=IJEMT"><span class="badge badge-primary">&bull;</span>International Journal of Engineering And Modern Technology</a></li>										
															
							</ul>
							</li>
							<li class="item3"><a href="#">Management Sciences <span class="glyphicon glyphicon-menu-down"></span></a>
								<ul>
									<li class="subitem1"><a href="journal/?j=IJEBM"><span class="badge badge-primary">&bull;</span> International Journal of Economics And Business Management</a></li>										
									<li class="subitem1"><a href="journal/?j=IJBFR"><span class="badge badge-primary">&bull;</span>International Journal of Banking and Finance Research</a></li>
                                    <li class="subitem1"><a href="journal/?j=IJEFM"><span class="badge badge-primary">&bull;</span>International Journal of Economics And Financial Management</a></li>										
									<li class="subitem1"><a href="journal/?j=IJMCS"><span class="badge badge-primary">&bull;</span>International Journal of Marketing And Communication Studies</a></li>	
                                    <li class="subitem1"><a href="journal/?j=IJSSMR"><span class="badge badge-primary">&bull;</span>International Journal of Social Sciences And Management Research</a></li>	
                                    <li class="subitem1"><a href="journal/?j=JAFM"><span class="badge badge-primary">&bull;</span>Journal of Accounting And Financial Management</a></li>	
                                    <li class="subitem1"><a href="journal/?j=JBAE"><span class="badge badge-primary">&bull;</span>Journal Of Business And African Economy</a></li>
                                     <li class="subitem1"><a href="journal/?j=IJBFR"><span class="badge badge-primary">&bull;</span>International Journal Of Banking And Finance Research</a></li>	
                                    <li class="subitem1"><a href="journal/?j=WJEDS"><span class="badge badge-primary">&bull;</span>World Journal of Entrepreneurial Development Studies</a></li>	
                                    <li class="subitem1"><a href="journal/?j=WJFIR"><span class="badge badge-primary">&bull;</span>World Journal Of Finance And Investment Research</a></li>										
								</ul>
							</li>
                            <li class="item4"><a href="#">Humanities<span class="glyphicon glyphicon-menu-down"></span></a>
								<ul>
									<li class="subitem1"><a href="journal/?j=AJHA"><span class="badge badge-primary">&bull;</span>African Journal of History And Archaeology</a></li>										
									<li class="subitem1"><a href="journal/?j=IJELCS"><span class="badge badge-primary">&bull;</span>International Journal of English Language And Communication Studies</a></li>										
									<li class="subitem1"><a href="journal/?j=IJRCP"><span class="badge badge-primary">&bull;</span>International Journal of Religious And Cultural Practice</a></li>				
                                    <li class="subitem1"><a href="journal/?j=JHSP"><span class="badge badge-primary">&bull;</span>Journal of Humanities And Social Policy</a></li>										
									<li class="subitem1"><a href="journal/?j=JLGP"><span class="badge badge-primary">&bull;</span>Journal Of Law And Global Policy</a></li>				
                                    <li class="subitem1"><a href="journal/?j=JHMTR"><span class="badge badge-primary">&bull;</span>Journal Of Hotel Management And Tourism Research</a></li>										
									<li class="subitem1"><a href="journal/?j=RJHCS"><span class="badge badge-primary">&bull;</span>Research Journal Of Humanities And Cultural Studies</a></li>										
								</ul>
							</li>
                            <li class="item5"><a href="#">Social Sciences<span class="glyphicon glyphicon-menu-down"></span></a>
								<ul>
									<li class="subitem1"><a href="journal/?j=RJMCIT"><span class="badge badge-primary">&bull;</span>Research Journal Of Mass Communication And Information Technology</a></li>										
									<li class="subitem1"><a href="journal/?j=JPSLR"><span class="badge badge-primary">&bull;</span>Journal Of Political Science And Leadership Research</a></li>
                                    										
									<li class="subitem1"><a href="journal/?j=JPASWR"><span class="badge badge-primary">&bull;</span>Journal of Public Administration And Social Welfare Research</a></li>										
								</ul>
							</li>
                            
                            <li class="item6"><a href="#">Education<span class="glyphicon glyphicon-menu-down"></span></a>
								<ul>
									<li class="subitem1"><a href="journal/?j=IJEE"><span class="badge badge-primary">&bull;</span>International Journal Of Education And Evaluation</a></li>										
													
								</ul>
							</li>
						</ul>
						<!-- script for tabs -->
					<script type="text/javascript">
							$(function() {
							
								var menu_ul = $('.faq > li > ul'),
									   menu_a  = $('.faq > li > a');
								
								menu_ul.hide();
							
								menu_a.click(function(e) {
									e.preventDefault();
									if(!$(this).hasClass('active')) {
										menu_a.removeClass('active');
										menu_ul.filter(':visible').slideUp('normal');
										$(this).addClass('active').next().stop(true,true).slideDown('normal');
									} else {
										$(this).removeClass('active');
										$(this).next().stop(true,true).slideUp('normal');
									}
								});
							
							});
						</script>
						<!-- script for tabs -->
				  </div> 
				  <!-- <div class="sidebar-row">
                  
                  <h4> Articles Under Review</h4>
                  <p style="margin-top: -15px;"><span class="badge badge-danger"><?php// echo date('F, Y'); ?> Edition</span></p>
                  <br>
				  <div id="design" style=" height: 300px; overflow: hidden;" class="date">
				  <div id="cycler"> 
				  
				  <?php //while($row_review = $stmt_review->fetch(PDO::FETCH_ASSOC)){?>  
											<div class="date-text">
											<h5 style="text-align: left"><span class="badge badge-primary">&bull;</span> <?php// echo $row_review['name'];?> </h5>
												<p><span style=" text-align: justify; color:#FF590F"><em> <?php //echo $row_review['author'];?></em></span></p> 
											</div>
											<hr>
									<?php //} ?>
										</div>
										</div>

				  </div>			  -->
				</div>
				
				
			</div>
			<div class="clearfix"> </div>
            
		</div>
	</div>

	<!--new-->
	<div class="new">
		<div class="container">
        
        
			<div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
				<h3 class="title">Recent<span> Publications</span></h3>
                <h3 class="hdg" style="text-transform: uppercase"><?php echo date("F Y", strtotime("first day of previous month")); ?></h3>
				<p>Click <a href="journals/">here</a> to view all journals</p>
                
			</div>
            
						<div style="margin-top:-5%;" class="grid_3 grid_5 wow fadeInDown animated" data-wow-delay=".5s">
				
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<ul id="myTab" class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">IJSSMR</a></li>
						<li role="presentation"><a href="#profile1" role="tab" id="profile-tab1" data-toggle="tab" aria-controls="profile1">JBGR</a></li>
                        <li role="presentation"><a href="#profile2" role="tab" id="profile-tab2" data-toggle="tab" aria-controls="profile2">IJHPR</a></li>
                        <li role="presentation"><a href="#profile3" role="tab" id="profile-tab3" data-toggle="tab" aria-controls="profile3">IJAES</a></li>
                        <li role="presentation"><a href="#profile4" role="tab" id="profile-tab4" data-toggle="tab" aria-controls="profile4">IJASMT</a></li>
                        <li role="presentation"><a href="#profile5" role="tab" id="profile-tab5" data-toggle="tab" aria-controls="profile5">IJCSMT</a></li>
                        <li role="presentation"><a href="#profile6" role="tab" id="profile-tab6" data-toggle="tab" aria-controls="profile6">JPSLR</a></li>
                        <li role="presentation"><a href="#profile7" role="tab" id="profile-tab7" data-toggle="tab" aria-controls="profile7">IJEE</a></li>
                        <li role="presentation"><a href="#profile8" role="tab" id="profile-tab8" data-toggle="tab" aria-controls="profile8">IJEFM</a></li>
                        <li role="presentation"><a href="#profile9" role="tab" id="profile-tab9" data-toggle="tab" aria-controls="profile9">IJEMT</a></li>
                        <li role="presentation"><a href="#profile10" role="tab" id="profile-tab10" data-toggle="tab" aria-controls="profile10">IJELCS</a></li>
                        <li role="presentation"><a href="#profile11" role="tab" id="profile-tab11" data-toggle="tab" aria-controls="profile11">WJFIR</a></li>
                        <li role="presentation"><a href="#profile12" role="tab" id="profile-tab12" data-toggle="tab" aria-controls="profile12">JAFM</a></li>
                        <li role="presentation"><a href="#profile13" role="tab" id="profile-tab13" data-toggle="tab" aria-controls="profile13">IJRCP</a></li>
                        <li role="presentation"><a href="#profile14" role="tab" id="profile-tab14" data-toggle="tab" aria-controls="profile14">IJBFR</a></li>
                        
					<!--dropdown headers-->
                    <li role="presentation" class="dropdown">
							<a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents">More<span class="caret"></span></a>
							<ul class="dropdown-menu scroll-menu" role="menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
								<li><a href="#dropdown1" tabindex="-1" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">AJHA</a></li>
								<li><a href="#dropdown2" tabindex="-1" role="tab" id="dropdown2-tab" data-toggle="tab" aria-controls="dropdown2">JBAE</a></li>
                                <li><a href="#dropdown3" tabindex="-1" role="tab" id="dropdown3-tab" data-toggle="tab" aria-controls="dropdown3">RJMCIT</a></li>
								<li><a href="#dropdown4" tabindex="-1" role="tab" id="dropdown4-tab" data-toggle="tab" aria-controls="dropdown4">JHSP</a></li>
                                <li><a href="#dropdown5" tabindex="-1" role="tab" id="dropdown5-tab" data-toggle="tab" aria-controls="dropdown5">JLGP</a></li>
								<li><a href="#dropdown6" tabindex="-1" role="tab" id="dropdown6-tab" data-toggle="tab" aria-controls="dropdown6">IJEBM</a></li>
                                <li><a href="#dropdown7" tabindex="-1" role="tab" id="dropdown7-tab" data-toggle="tab" aria-controls="dropdown7">JPASWR</a></li>
								<li><a href="#dropdown8" tabindex="-1" role="tab" id="dropdown8-tab" data-toggle="tab" aria-controls="dropdown8">RJFSQC</a></li>
                                <li><a href="#dropdown9" tabindex="-1" role="tab" id="dropdown9-tab" data-toggle="tab" aria-controls="dropdown9">JHMTR</a></li>
								<li><a href="#dropdown10" tabindex="-1" role="tab" id="dropdown10-tab" data-toggle="tab" aria-controls="dropdown10">RJHCS</a></li>
                                <li><a href="#dropdown11" tabindex="-1" role="tab" id="dropdown11-tab" data-toggle="tab" aria-controls="dropdown11">IJGEM</a></li>
								<li><a href="#dropdown12" tabindex="-1" role="tab" id="dropdown12-tab" data-toggle="tab" aria-controls="dropdown12">RJPST</a></li>
                                <li><a href="#dropdown13" tabindex="-1" role="tab" id="dropdown13-tab" data-toggle="tab" aria-controls="dropdown13">WJEDS</a></li>
								<li><a href="#dropdown14" tabindex="-1" role="tab" id="dropdown4-tab" data-toggle="tab" aria-controls="dropdown14">‍IJMCS</a></li>
                                <li><a href="#dropdown15" tabindex="-1" role="tab" id="dropdown15-tab" data-toggle="tab" aria-controls="dropdown15">WJIMT</a></li>
                                <li><a href="#dropdown16" tabindex="-1" role="tab" id="dropdown16-tab" data-toggle="tab" aria-controls="dropdown16">IJMEPR</a></li>
                                <li><a href="#dropdown17" tabindex="-1" role="tab" id="dropdown17-tab" data-toggle="tab" aria-controls="dropdown17">IJCCP</a></li>
						
							</ul>
						</li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<!--IJEE POSITION-->
                        <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                                <div class="alert alert-info" role="alert">
                                    <strong>INTERNATIONAL JOURNAL OF SOCIAL SCIENCES AND MANAGEMENT RESEARCH</strong>
                                </div>
                                <ul class="list-group wow fadeInLeft animated">
                                 <?php while($row6 = $stmt6->fetch(PDO::FETCH_ASSOC)){?>
								  <li class="list-group-item"><a class="items" href="abstract.php?j=<?php echo $row6['pub_journal'];?>&pn=<?php echo $row6['pub_name'];?>&id=<?php echo $row6['id'];?>"><span class="glyphicon glyphicon-download" aria-hidden="true"></span><?php echo $row6['pub_name']; ?></a> <br> <p> <?php echo $row6['pub_volume']; ?>. Author(s): <?php echo $row6['pub_author']; ?></p> </li>
                                  <?php } ?>
                                </ul>
                                    </div>
                                    
                                    <div role="tabpanel" class="tab-pane fade" id="profile1" aria-labelledby="profile-tab1">
                                        <div class="alert alert-info" role="alert">
                                    <strong>JOURNAL OF BIOLOGY AND GENETIC RESEARCH</strong>
                                </div>
                                <ul class="list-group " data-wow-delay=".5s">
                                 <?php while($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)){?>
								  <li class="list-group-item"><a class="items" href="abstract.php?j=<?php echo $row2['pub_journal'];?>&pn=<?php echo $row2['pub_name'];?>&id=<?php echo $row2['id'];?>"><span class="glyphicon glyphicon-download" aria-hidden="true"></span><?php echo $row2['pub_name']; ?></a> <br> <p> <?php echo $row2['pub_volume']; ?>. Author(s): <?php echo $row2['pub_author']; ?></p> </li>
                                  <?php } ?>
                                </ul>
                                    </div>
                                    
                                    <div role="tabpanel" class="tab-pane fade" id="profile2" aria-labelledby="profile-tab2">
                                        <div class="alert alert-info" role="alert">
                                    <strong>INTERNATIONAL JOURNAL OF HEALTH AND PHARMACEUTICAL RESEARCH</strong>
                                </div>
                                <ul class="list-group " data-wow-delay=".5s">
                                 <?php while($row3 = $stmt3->fetch(PDO::FETCH_ASSOC)){?>
								  <li class="list-group-item"><a class="items" href="abstract.php?j=<?php echo $row3['pub_journal'];?>&pn=<?php echo $row3['pub_name'];?>&id=<?php echo $row3['id'];?>"><span class="glyphicon glyphicon-download" aria-hidden="true"></span><?php echo $row3['pub_name']; ?></a> <br> <p> <?php echo $row3['pub_volume']; ?>. Author(s): <?php echo $row3['pub_author']; ?></p> </li>
                                  <?php } ?>
                                </ul>
                                    </div>
                                    
                                    <div role="tabpanel" class="tab-pane fade" id="profile3" aria-labelledby="profile-tab3">
                                     <div class="alert alert-info" role="alert">
                                    <strong>INTERNATIONAL JOURNAL OF AGRICULTURE AND EARTH SCIENCE</strong>
                                </div>
                                <ul class="list-group " data-wow-delay=".5s">
                                 <?php while($row4 = $stmt4->fetch(PDO::FETCH_ASSOC)){?>
								  <li class="list-group-item"><a class="items" href="abstract.php?j=<?php echo $row4['pub_journal'];?>&pn=<?php echo $row4['pub_name'];?>&id=<?php echo $row4['id'];?>"><span class="glyphicon glyphicon-download" aria-hidden="true"></span><?php echo $row4['pub_name']; ?></a> <br> <p> <?php echo $row4['pub_volume']; ?>. Author(s): <?php echo $row4['pub_author']; ?></p> </li>
                                  <?php } ?>
                                </ul>
                                    </div>
                                    
                                    <div role="tabpanel" class="tab-pane fade" id="profile4" aria-labelledby="profile-tab4">
                                     <div class="alert alert-info" role="alert">
                                    <strong>INTERNATIONAL JOURNAL OF APPLIED SCIENCE AND MATHEMATICAL THEORY</strong>
                                </div>
                                <ul class="list-group " data-wow-delay=".5s">
                                 <?php while($row5 = $stmt5->fetch(PDO::FETCH_ASSOC)){?>
								  <li class="list-group-item"><a class="items" href="abstract.php?j=<?php echo $row5['pub_journal'];?>&pn=<?php echo $row5['pub_name'];?>&id=<?php echo $row5['id'];?>"><span class="glyphicon glyphicon-download" aria-hidden="true"></span><?php echo $row5['pub_name']; ?></a> <br> <p> <?php echo $row5['pub_volume']; ?>. Author(s): <?php echo $row5['pub_author']; ?></p> </li>
                                  <?php } ?>
                                </ul>
                                    </div>
                                    
                                    <div role="tabpanel" class="tab-pane fade" id="profile5" aria-labelledby="profile-tab5">
                                        <div class="alert alert-info" role="alert">
                                    <strong>  INTERNATIONAL JOURNAL OF COMPUTER SCIENCE AND MATHEMATICAL THEORY</strong>
                                </div>
                                <ul class="list-group " data-wow-delay=".5s">
                                 <?php while($row21 = $stmt21->fetch(PDO::FETCH_ASSOC)){?>
								  <li class="list-group-item"><a class="items" href="abstract.php?j=<?php echo $row21['pub_journal'];?>&pn=<?php echo $row21['pub_name'];?>&id=<?php echo $row21['id'];?>"><span class="glyphicon glyphicon-download" aria-hidden="true"></span><?php echo $row21['pub_name']; ?></a> <br> <p> <?php echo $row21['pub_volume']; ?>. Author(s): <?php echo $row21['pub_author']; ?></p> </li>
                                  <?php } ?>
                                </ul>
                                    </div>
                                    
                                    <div role="tabpanel" class="tab-pane fade" id="profile6" aria-labelledby="profile-tab6">
                                        <div class="alert alert-info" role="alert">
                                    <strong>JOURNAL OF POLITICAL SCIENCE AND LEADERSHIP RESEARCH </strong>
                                </div>
                                <ul class="list-group " data-wow-delay=".5s">
                                 <?php while($row7 = $stmt7->fetch(PDO::FETCH_ASSOC)){?>
								  <li class="list-group-item"><a class="items" href="abstract.php?j=<?php echo $row7['pub_journal'];?>&pn=<?php echo $row7['pub_name'];?>&id=<?php echo $row7['id'];?>"><span class="glyphicon glyphicon-download" aria-hidden="true"></span><?php echo $row7['pub_name']; ?></a> <br> <p> <?php echo $row7['pub_volume']; ?>. Author(s): <?php echo $row7['pub_author']; ?></p> </li>
                                  <?php } ?>
                                </ul>
                                    </div>
                                    
                                    <div role="tabpanel" class="tab-pane fade" id="profile7" aria-labelledby="profile-tab7">
                                        <div class="alert alert-info" role="alert">
                                    <strong>INTERNATIONAL JOURNAL OF EDUCATION AND EVALUATION</strong>
                                </div>
                                <ul class="list-group " data-wow-delay=".5s">
                                 <?php while($row8 = $stmt8->fetch(PDO::FETCH_ASSOC)){?>
								  <li class="list-group-item"><a class="items" href="abstract.php?j=<?php echo $row8['pub_journal'];?>&pn=<?php echo $row8['pub_name'];?>&id=<?php echo $row8['id'];?>"><span class="glyphicon glyphicon-download" aria-hidden="true"></span><?php echo $row8['pub_name']; ?></a> <br> <p> <?php echo $row8['pub_volume']; ?>. Author(s): <?php echo $row8['pub_author']; ?></p> </li>
                                  <?php } ?>
                                </ul>
                                    </div>
                                    
                                    <div role="tabpanel" class="tab-pane fade" id="profile8" aria-labelledby="profile-tab8">
                                        <div class="alert alert-info" role="alert">
                                    <strong>INTERNATIONAL JOURNAL OF ECONOMICS AND FINANCIAL MANAGEMENT </strong>
                                </div>
                                <ul class="list-group " data-wow-delay=".5s">
                                 <?php while($row9 = $stmt9->fetch(PDO::FETCH_ASSOC)){?>
								  <li class="list-group-item"><a class="items" href="abstract.php?j=<?php echo $row9['pub_journal'];?>&pn=<?php echo $row9['pub_name'];?>&id=<?php echo $row9['id'];?>"><span class="glyphicon glyphicon-download" aria-hidden="true"></span><?php echo $row9['pub_name']; ?></a> <br> <p> <?php echo $row9['pub_volume']; ?>. Author(s): <?php echo $row9['pub_author']; ?></p> </li>
                                  <?php } ?>
                                </ul>
                                    </div>
                                    
                                    <div role="tabpanel" class="tab-pane fade" id="profile9" aria-labelledby="profile-tab9">
                                        <div class="alert alert-info" role="alert">
                                    <strong>INTERNATIONAL JOURNAL OF ENGINEERING AND MODERN TECHNOLOGY </strong>
                                </div>
                                <ul class="list-group " data-wow-delay=".5s">
                                 <?php while($row10 = $stmt10->fetch(PDO::FETCH_ASSOC)){?>
								  <li class="list-group-item"><a class="items" href="abstract.php?j=<?php echo $row10['pub_journal'];?>&pn=<?php echo $row10['pub_name'];?>&id=<?php echo $row10['id']; ?>"><span class="glyphicon glyphicon-download" aria-hidden="true"></span><?php echo $row10['pub_name']; ?></a> <br> <p> <?php echo $row10['pub_volume']; ?>. Author(s): <?php echo $row10['pub_author']; ?></p> </li>
                                  <?php } ?>
                                </ul>
                                    </div>
                                    
                                    <div role="tabpanel" class="tab-pane fade" id="profile10" aria-labelledby="profile-tab10">
                                        <div class="alert alert-info" role="alert">
                                    <strong>INTERNATIONAL JOURNAL OF ENGLISH LANGUAGE AND COMMUNICATION STUDIES</strong>
                                </div>
                                <ul class="list-group " data-wow-delay=".5s">
                                 <?php while($row11 = $stmt11->fetch(PDO::FETCH_ASSOC)){?>
								  <li class="list-group-item"><a class="items" href="abstract.php?j=<?php echo $row11['pub_journal'];?>&pn=<?php echo $row11['pub_name'];?>&id=<?php echo $row11['id']; ?>"><span class="glyphicon glyphicon-download" aria-hidden="true"></span><?php echo $row11['pub_name']; ?></a> <br> <p> <?php echo $row11['pub_volume']; ?>. Author(s): <?php echo $row11['pub_author']; ?></p> </li>
                                  <?php } ?>
                                </ul>
                                    </div>
                                    
                                    <div role="tabpanel" class="tab-pane fade" id="profile11" aria-labelledby="profile-tab11">
                                        <div class="alert alert-info" role="alert">
                                    <strong>WORLD JOURNAL OF FINANCE AND INVESTMENT RESEARCH </strong>
                                </div>
                                <ul class="list-group " data-wow-delay=".5s">
                                 <?php while($row12 = $stmt12->fetch(PDO::FETCH_ASSOC)){?>
								  <li class="list-group-item"><a class="items" href="abstract.php?j=<?php echo $row12['pub_journal'];?>&pn=<?php echo $row12['pub_name'];?>&id=<?php echo $row12['id']; ?>"><span class="glyphicon glyphicon-download" aria-hidden="true"></span><?php echo $row12['pub_name']; ?></a> <br> <p> <?php echo $row12['pub_volume']; ?>. Author(s): <?php echo $row12['pub_author']; ?></p> </li>
                                  <?php } ?>
                                </ul>
                                    </div>
                                    
                                    <div role="tabpanel" class="tab-pane fade" id="profile12" aria-labelledby="profile-tab12">
                                        <div class="alert alert-info" role="alert">
                                    <strong>JOURNAL OF ACCOUNTING AND FINANCIAL MANAGEMENT</strong>
                                </div>
                                <ul class="list-group " data-wow-delay=".5s">
                                 <?php while($row13 = $stmt13->fetch(PDO::FETCH_ASSOC)){?>
								  <li class="list-group-item"><a class="items" href="abstract.php?j=<?php echo $row13['pub_journal'];?>&pn=<?php echo $row13['pub_name'];?>&id=<?php echo $row13['id']; ?>"><span class="glyphicon glyphicon-download" aria-hidden="true"></span><?php echo $row13['pub_name']; ?></a> <br> <p> <?php echo $row13['pub_volume']; ?>. Author(s): <?php echo $row13['pub_author']; ?></p> </li>
                                  <?php } ?>
                                </ul>
                                    </div>
                                    
                                    <div role="tabpanel" class="tab-pane fade" id="profile13" aria-labelledby="profile-tab13">
                                        <div class="alert alert-info" role="alert">
                                    <strong> INTERNATIONAL JOURNAL OF RELIGIOUS AND CULTURAL PRACTICE</strong>
                                </div>
                                <ul class="list-group " data-wow-delay=".5s">
                                 <?php while($row14 = $stmt14->fetch(PDO::FETCH_ASSOC)){?>
								  <li class="list-group-item"><a class="items" href="abstract.php?j=<?php echo $row14['pub_journal'];?>&pn=<?php echo $row14['pub_name'];?>&id=<?php echo $row14['id']; ?>"><span class="glyphicon glyphicon-download" aria-hidden="true"></span><?php echo $row14['pub_name']; ?></a> <br> <p> <?php echo $row14['pub_volume']; ?>. Author(s): <?php echo $row14['pub_author']; ?></p> </li>
                                  <?php } ?>
                                </ul>
                                    </div>
                                    
                                    <div role="tabpanel" class="tab-pane fade" id="profile14" aria-labelledby="profile-tab14">
                                        <div class="alert alert-info" role="alert">
                                    <strong>INTERNATIONAL JOURNAL OF BUSINESS AND FINANCE RESEARCH </strong>
                                </div>
                                <ul class="list-group " data-wow-delay=".5s">
                                 <?php while($row15 = $stmt15->fetch(PDO::FETCH_ASSOC)){?>
								  <li class="list-group-item"><a class="items" href="abstract.php?j=<?php echo $row15['pub_journal'];?>&pn=<?php echo $row15['pub_name'];?>&id=<?php echo $row15['id']; ?>"><span class="glyphicon glyphicon-download" aria-hidden="true"></span><?php echo $row15['pub_name']; ?></a> <br> <p> <?php echo $row15['pub_volume']; ?>. Author(s): <?php echo $row15['pub_author']; ?></p> </li>
                                  <?php } ?>
                                </ul>
                                    </div>
                                    
                                    <!--DROPDOWNS-->
                                    <div role="tabpanel" class="tab-pane fade" id="dropdown1" aria-labelledby="dropdown1-tab">
                                        <div class="alert alert-info" role="alert">
                                    <strong>AFICAN JOURNAL OF HISTORY AND ARCHAELOGY</strong>
                                </div>
                                <ul class="list-group " data-wow-delay=".5s">
                                 <?php while($row16 = $stmt16->fetch(PDO::FETCH_ASSOC)){?>
								  <li class="list-group-item"><a class="items" href="abstract.php?j=<?php echo $row16['pub_journal'];?>&pn=<?php echo $row16['pub_name'];?>&id=<?php echo $row16['id']; ?>"><span class="glyphicon glyphicon-download" aria-hidden="true"></span><?php echo $row16['pub_name']; ?></a> <br> <p> <?php echo $row16['pub_volume']; ?>. Author(s): <?php echo $row16['pub_author']; ?></p> </li>
                                  <?php } ?>
                                </ul>
                                    </div>
                                    
                                    <div role="tabpanel" class="tab-pane fade" id="dropdown2" aria-labelledby="dropdown2-tab">
                                        <div class="alert alert-info" role="alert">
                                    <strong>JOURNAL OF BUSINESS AND AFRICAN ECONOMY</strong>
                                </div>
                                <ul class="list-group " data-wow-delay=".5s">
                                 <?php while($row17 = $stmt17->fetch(PDO::FETCH_ASSOC)){?>
								  <li class="list-group-item"><a class="items" href="abstract.php?j=<?php echo $row17['pub_journal'];?>&pn=<?php echo $row17['pub_name'];?>&id=<?php echo $row17['id']; ?>"><span class="glyphicon glyphicon-download" aria-hidden="true"></span><?php echo $row17['pub_name']; ?></a> <br> <p> <?php echo $row17['pub_volume']; ?>. Author(s): <?php echo $row17['pub_author']; ?></p> </li>
                                  <?php } ?>
                                </ul>
                                    </div>
                                    
                                    <div role="tabpanel" class="tab-pane fade" id="dropdown3" aria-labelledby="dropdown3-tab">
                                        <div class="alert alert-info" role="alert">
                                    <strong>RESEARCH JOURNAL OF MASS COMMUNICATION AND INFORMATION TECHNOLOGY</strong>
                                </div>
                                <ul class="list-group " data-wow-delay=".5s">
                                 <?php while($row18 = $stmt18->fetch(PDO::FETCH_ASSOC)){?>
								  <li class="list-group-item"><a class="items" href="abstract.php?j=<?php echo $row18['pub_journal'];?>&pn=<?php echo $row18['pub_name'];?>&id=<?php echo $row18['id']; ?>"><span class="glyphicon glyphicon-download" aria-hidden="true"></span><?php echo $row18['pub_name']; ?></a> <br> <p> <?php echo $row18['pub_volume']; ?>. Author(s): <?php echo $row18['pub_author']; ?></p> </li>
                                  <?php } ?>
                                </ul>
                                    </div>
                                    
                                    <div role="tabpanel" class="tab-pane fade" id="dropdown4" aria-labelledby="dropdown4-tab">
                                        <div class="alert alert-info" role="alert">
                                    <strong>JOURNAL OF HUMANITIES AND SOCIAL POLICY </strong>
                                </div>
                                <ul class="list-group " data-wow-delay=".5s">
                                 <?php while($row19 = $stmt19->fetch(PDO::FETCH_ASSOC)){?>
								  <li class="list-group-item"><a class="items" href="abstract.php?j=<?php echo $row19['pub_journal'];?>&pn=<?php echo $row19['pub_name'];?>&id=<?php echo $row19['id']; ?>"><span class="glyphicon glyphicon-download" aria-hidden="true"></span><?php echo $row19['pub_name']; ?></a> <br> <p> <?php echo $row19['pub_volume']; ?>. Author(s): <?php echo $row19['pub_author']; ?></p> </li>
                                  <?php } ?>
                                </ul>
                                    </div>
                                    
                                    <div role="tabpanel" class="tab-pane fade" id="dropdown5" aria-labelledby="dropdown5-tab">
                                        <div class="alert alert-info" role="alert">
                                    <strong>  	JOURNAL OF LAW AND GLOBAL POLICY </strong>
                                </div>
                                <ul class="list-group " data-wow-delay=".5s">
                                 <?php while($row20 = $stmt20->fetch(PDO::FETCH_ASSOC)){?>
								  <li class="list-group-item"><a class="items" href="abstract.php?j=<?php echo $row20['pub_journal'];?>&pn=<?php echo $row20['pub_name'];?>&id=<?php echo $row20['id']; ?>"><span class="glyphicon glyphicon-download" aria-hidden="true"></span><?php echo $row20['pub_name']; ?></a> <br> <p> <?php echo $row20['pub_volume']; ?>. Author(s): <?php echo $row20['pub_author']; ?></p> </li>
                                  <?php } ?>
                                </ul>
                                    </div>
                                    
                                    <div role="tabpanel" class="tab-pane fade" id="dropdown6" aria-labelledby="dropdown6-tab">
                                        <div class="alert alert-info" role="alert">
                                    <strong>INTERNATIONAL JOURNAL OF ECONOMICS AND BUSINESS MANAGEMENT </strong>
                                </div>
                                <ul class="list-group " data-wow-delay=".5s">
                                 <?php while($row1 = $stmt1->fetch(PDO::FETCH_ASSOC)){?>
								  <li class="list-group-item"><a class="items" href="abstract.php?j=<?php echo $row1['pub_journal'];?>&pn=<?php echo $row1['pub_name'];?>&id=<?php echo $row1['id']; ?>"><span class="glyphicon glyphicon-download" aria-hidden="true"></span><?php echo $row1['pub_name']; ?></a> <br> <p> <?php echo $row1['pub_volume']; ?>. Author(s): <?php echo $row1['pub_author']; ?></p> </li>
                                  <?php } ?>
                                </ul>
                                    </div>
                                    
                                    <div role="tabpanel" class="tab-pane fade" id="dropdown7" aria-labelledby="dropdown7-tab">
                                        <div class="alert alert-info" role="alert">
                                    <strong> JOURNAL OF PUBLIC ADMINISTRATION AND SOCIAL WELFARE RESEARCH</strong>
                                </div>
                                <ul class="list-group " data-wow-delay=".5s">
                                 <?php while($row22 = $stmt22->fetch(PDO::FETCH_ASSOC)){?>
								  <li class="list-group-item"><a class="items" href="abstract.php?j=<?php echo $row22['pub_journal'];?>&pn=<?php echo $row22['pub_name'];?>&id=<?php echo $row22['id']; ?>"><span class="glyphicon glyphicon-download" aria-hidden="true"></span><?php echo $row22['pub_name']; ?></a> <br> <p> <?php echo $row22['pub_volume']; ?>. Author(s): <?php echo $row22['pub_author']; ?></p> </li>
                                  <?php } ?>
                                </ul>
                                    </div>
                                    
                                    <div role="tabpanel" class="tab-pane fade" id="dropdown8" aria-labelledby="dropdown8-tab">
                                        <div class="alert alert-info" role="alert">
                                    <strong> RESEARCH JOURNAL OF FOOD SCIENCE AND QUALITY CONTROL</strong>
                                </div>
                                <ul class="list-group " data-wow-delay=".5s">
                                 <?php while($row23 = $stmt23->fetch(PDO::FETCH_ASSOC)){?>
								  <li class="list-group-item"><a class="items" href="abstract.php?j=<?php echo $row23['pub_journal'];?>&pn=<?php echo $row23['pub_name'];?>&id=<?php echo $row23['id']; ?>"><span class="glyphicon glyphicon-download" aria-hidden="true"></span><?php echo $row23['pub_name']; ?></a> <br> <p> <?php echo $row23['pub_volume']; ?>. Author(s): <?php echo $row23['pub_author']; ?></p> </li>
                                  <?php } ?>
                                </ul>
                                    </div>
                                    
                                    <div role="tabpanel" class="tab-pane fade" id="dropdown9" aria-labelledby="dropdown9-tab">
                                        <div class="alert alert-info" role="alert">
                                    <strong>JOURNAL OF HOTEL MANAGEMENT AND TOURISM RESEARCH. </strong>
                                </div>
                                <ul class="list-group " data-wow-delay=".5s">
                                 <?php while($row24 = $stmt24->fetch(PDO::FETCH_ASSOC)){?>
								  <li class="list-group-item"><a class="items" href="abstract.php?j=<?php echo $row24['pub_journal'];?>&pn=<?php echo $row24['pub_name'];?>&id=<?php echo $row24['id']; ?>"><span class="glyphicon glyphicon-download" aria-hidden="true"></span><?php echo $row24['pub_name']; ?></a> <br> <p> <?php echo $row24['pub_volume']; ?>. Author(s): <?php echo $row24['pub_author']; ?></p> </li>
                                  <?php } ?>
                                </ul>
                                    </div>
                                    
                                    <div role="tabpanel" class="tab-pane fade" id="dropdown10" aria-labelledby="dropdown10-tab">
                                        <div class="alert alert-info" role="alert">
                                    <strong>RESEARCH JOURNAL OF HUMANITIES AND CULTURAL STUDIES</strong>
                                </div>
                                <ul class="list-group " data-wow-delay=".5s">
                                 <?php while($row25 = $stmt25->fetch(PDO::FETCH_ASSOC)){?>
								  <li class="list-group-item"><a class="items" href="abstract.php?j=<?php echo $row25['pub_journal'];?>&pn=<?php echo $row25['pub_name'];?>&id=<?php echo $row25['id']; ?>"><span class="glyphicon glyphicon-download" aria-hidden="true"></span><?php echo $row25['pub_name']; ?></a> <br> <p> <?php echo $row25['pub_volume']; ?>. Author(s): <?php echo $row25['pub_author']; ?></p> </li>
                                  <?php } ?>
                                </ul>
                                    </div>
                                    
                                    <div role="tabpanel" class="tab-pane fade" id="dropdown11" aria-labelledby="dropdown11-tab">
                                        <div class="alert alert-info" role="alert">
                                    <strong>INTERNATIONAL JOURNAL OF GEOGRAPHY AND ENVIRONMENTAL MANAGEMENT</strong>
                                </div>
                                <ul class="list-group " data-wow-delay=".5s">
                                 <?php while($row26 = $stmt26->fetch(PDO::FETCH_ASSOC)){?>
								  <li class="list-group-item"><a class="items" href="abstract.php?j=<?php echo $row26['pub_journal'];?>&pn=<?php echo $row26['pub_name'];?>&id=<?php echo $row26['id']; ?>"><span class="glyphicon glyphicon-download" aria-hidden="true"></span><?php echo $row26['pub_name']; ?></a> <br> <p> <?php echo $row26['pub_volume']; ?>. Author(s): <?php echo $row26['pub_author']; ?></p> </li>
                                  <?php } ?>
                                </ul>
                                    </div>
                                    
                                    <div role="tabpanel" class="tab-pane fade" id="dropdown12" aria-labelledby="dropdown12-tab">
                                        <div class="alert alert-info" role="alert">
                                    <strong> 	RESEARCH JOURNAL OF PURE SCIENCE AND TECHNOLOGY </strong>
                                </div>
                                <ul class="list-group " data-wow-delay=".5s">
                                 <?php while($row27 = $stmt27->fetch(PDO::FETCH_ASSOC)){?>
								  <li class="list-group-item"><a class="items" href="abstract.php?j=<?php echo $row27['pub_journal'];?>&pn=<?php echo $row27['pub_name'];?>&id=<?php echo $row27['id']; ?>"><span class="glyphicon glyphicon-download" aria-hidden="true"></span><?php echo $row27['pub_name']; ?></a> <br> <p> <?php echo $row27['pub_volume']; ?>. Author(s): <?php echo $row27['pub_author']; ?></p> </li>
                                  <?php } ?>
                                </ul>
                                    </div>
                                    
                                    <div role="tabpanel" class="tab-pane fade" id="dropdown13" aria-labelledby="dropdown13-tab">
                                        <div class="alert alert-info" role="alert">
                                    <strong>WORLD JOURNAL OF ENTREPRENEURIAL DEVELOPMENT STUDIES </strong>
                                </div>
                                <ul class="list-group " data-wow-delay=".5s">
                                 <?php while($row28 = $stmt28->fetch(PDO::FETCH_ASSOC)){?>
								  <li class="list-group-item"><a class="items" href="abstract.php?j=<?php echo $row28['pub_journal'];?>&pn=<?php echo $row28['pub_name'];?>&id=<?php echo $row28['id']; ?>"><span class="glyphicon glyphicon-download" aria-hidden="true"></span><?php echo $row28['pub_name']; ?></a> <br> <p> <?php echo $row28['pub_volume']; ?>. Author(s): <?php echo $row28['pub_author']; ?></p> </li>
                                  <?php } ?>
                                </ul>
                                    </div>
                                    
                                    <div role="tabpanel" class="tab-pane fade" id="dropdown14" aria-labelledby="dropdown14-tab">
                                        <div class="alert alert-info" role="alert">
                                    <strong> INTiERNATIONAL JOURNAL OF MARKETING AND COMMUNICATION RESEARCH  </strong>
                                </div>
                                <ul class="list-group " data-wow-delay=".5s">
                                 <?php while($row29 = $stmt29->fetch(PDO::FETCH_ASSOC)){?>
								  <li class="list-group-item"><a class="items" href="abstract.php?j=<?php echo $row29['pub_journal'];?>&pn=<?php echo $row29['pub_name'];?>&id=<?php echo $row29['id']; ?>"><span class="glyphicon glyphicon-download" aria-hidden="true"></span><?php echo $row29['pub_name']; ?></a> <br> <p> <?php echo $row29['pub_volume']; ?>. Author(s): <?php echo $row29['pub_author']; ?></p> </li>
                                  <?php } ?>
                                </ul>
                                    </div>
                                    
                                    <div role="tabpanel" class="tab-pane fade" id="dropdown15" aria-labelledby="dropdown15-tab">
                                        <div class="alert alert-info" role="alert">
                                    <strong>WORLD JOURNAL OF INNOVATION AND MODERN TECHNOLOGY</strong>
                                </div>
                                <ul class="list-group " data-wow-delay=".5s">
                                 <?php while($row30 = $stmt30->fetch(PDO::FETCH_ASSOC)){?>
								  <li class="list-group-item"><a class="items" href="abstract.php?j=<?php echo $row30['pub_journal'];?>&pn=<?php echo $row30['pub_name'];?>&id=<?php echo $row30['id']; ?>"><span class="glyphicon glyphicon-download" aria-hidden="true"></span><?php echo $row30['pub_name']; ?></a> <br> <p> <?php echo $row30['pub_volume']; ?>. Author(s): <?php echo $row30['pub_author']; ?></p> </li>
                                  <?php } ?>
                                </ul>
                                    </div>
                                    
                                    <div role="tabpanel" class="tab-pane fade" id="dropdown16" aria-labelledby="dropdown16-tab">
                                        <div class="alert alert-info" role="alert">
                                    <strong>INTERNATIONAL JOURNAL OF MEDICAL EVALUATION AND PHYSICAL REPORT </strong>
                                </div>
                                <ul class="list-group " data-wow-delay=".5s">
                                 <?php while($row31 = $stmt31->fetch(PDO::FETCH_ASSOC)){?>
								  <li class="list-group-item"><a class="items" href="abstract.php?j=<?php echo $row31['pub_journal'];?>&pn=<?php echo $row31['pub_name'];?>&id=<?php echo $row31['id']; ?>"><span class="glyphicon glyphicon-download" aria-hidden="true"></span><?php echo $row31['pub_name']; ?></a> <br> <p> <?php echo $row31['pub_volume']; ?>. Author(s): <?php echo $row31['pub_author']; ?></p> </li>
                                  <?php } ?>
                                </ul>
                                    </div>
                                    
                                    <div role="tabpanel" class="tab-pane fade" id="dropdown17" aria-labelledby="dropdown17-tab">
                                        <div class="alert alert-info" role="alert">
                                    <strong>INTERNATIONAL JOURNAL OF CHEMISTRY AND CHEMICAL PROCESSES</strong>
                                </div>
                                <ul class="list-group " data-wow-delay=".5s">
                                 <?php while($row32 = $stmt32->fetch(PDO::FETCH_ASSOC)){?>
								  <li class="list-group-item"><a class="items" href="abstract.php?j=<?php echo $row32['pub_journal'];?>&pn=<?php echo $row32['pub_name'];?>&id=<?php echo $row32['id']; ?>"><span class="glyphicon glyphicon-download" aria-hidden="true"></span><?php echo $row32['pub_name']; ?></a> <br> <p> <?php echo $row32['pub_volume']; ?>. Author(s): <?php echo $row32['pub_author']; ?></p> </li>
                                  <?php } ?>
                                </ul>
                                    </div>
					</div>
				</div>
			</div>
                        
				<div class="clearfix"> </div>
		</div>
	</div>		
	<!--//new-->
	<!--gallery-->
	<div class="gallery">
		<div class="container">
			<div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
				<h3 class="title">Popular<span> Journals</span></h3>
				
			</div>
			<div class="gallery-info">
            
            <?php $i=1;//counter for new-mdl divs
					while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
						
                        if($i == 2){
							$idiv= "gallery-grid1";
						}
						else if($i == 3){
							$idiv= "gallery-grid2";
						}
						else {
							$idiv= "";
						}?>
			  <div class="col-md-3 gallery-grid <?php echo $idiv; ?> wow flipInY animated" data-wow-delay="1.1s"> <a href="journal/?j=<?php echo $row['journal_name']; ?>"><img src="get/cover/<?php echo $row['journal_name']; ?>.jpg" class="img-responsive" alt=""/></a>
              
			    <div class="gallery-text simpleCart_shelfItem">
				    <h5><a class="name" href="journal/?j=<?php echo $row['journal_name']; ?>"><?php echo $row['journal_name']; ?></a></h5>
				    <p><span class="item_price"><?php echo $row['journal_name_full']; ?></span></p>
				    <ul>
				      <li><a href="journal/?j=<?php echo $row['journal_name']; ?>"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span></a></li>
				      <li><a href="journal/?j=<?php echo $row['journal_name']; ?>"><span class="glyphicon glyphicon glyphicon-heart-empty" aria-hidden="true"></span></a></li>
			        </ul>
		        </div>
			  </div> 
			  <?php $i+=1; } ?>
			  <div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--//gallery-->
	
	<!--footer-->
    
	<?php include "inc/footer.php"; ?>
	
    <!--//footer-->		
	<!--search jQuery-->
   
   
	<script src="js/main.js"></script>
	<!--//search jQuery-->
		
		<!-- iosSlider plugin -->
	<script src = "jss/jquery.iosslider-vertical.js"></script>
	<script type="text/javascript">
			$(document).ready(function() {
			
				$('.iosslider-vertical').iosSliderVertical({
					scrollbarMargin: 0,
					scrollbarWidth: 12,
					scrollbarBorderRadius: 0,
					scrollbarContainer: '.scrollbar',
					snapToChildren: true,
					infiniteSlider: true,
					desktopClickDrag: true,
					autoSlide: true
				});
				
			});
</script>
<!--//smooth-scrolling-of-move-up-->
	<!--Bootstrap core JavaScript
    ================================================== -->
    <!--Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
    <script src="js/wow.min.js"></script>
<script>
 new WOW().init();
	</script>
<!--//animation-effect-->
<!--start-smooth-scrolling-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!--//end-smooth-scrolling-->
<script>
function cycle($item, $cycler){
setTimeout(cycle, 3000, $item.next(), $cycler);

$item.slideUp(1000,function(){
	$item.appendTo($cycler).show();        
});
}
cycle($('#cycler div:first'),  $('#cycler'));
cycle($('#news div:first'),  $('#news'));
</script>
</body>
</html>