<?php include "conf.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- adnow-verification-code:056ca53f6b7bac52915a1430d2d4fedd -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Първият безплатен български онлайн MD5 енкриптор &amp; декриптор с българска хеш таблица!">
    <meta name="keywords" content="md5, encrypt, decrypt, криптиране, декриптиране, код, хеш, хаш, таблица, мд5, българско, безплатно, онлайн, декриптор, енкриптор, hash, table">
    <meta name="author" content="NGenchev">
	<script src='https://www.google.com/recaptcha/api.js'></script>
    <title>MD5 Криптиране/Декриптиране | Първият безплатен български онлайн MD5 енкриптор &amp; декриптор с българска хеш таблица! </title>
	<script src="http://code.jquery.com/jquery.min.js" type="text/javascript"></script>
	<script type='text/javascript'>
	$(function() {
	  $('a[href*=#]:not([href=#])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		  var target = $(this.hash);
		  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		  if (target.length) {
			$('html,body').animate({
			  scrollTop: target.offset().top
			}, 1000);
			return false;
		  }
		}
	  });
	});
	</script>
	<script type="text/javascript">
	var uid = '70272';
	var wid = '130275';
	</script>
	<script type="text/javascript" src="http://cdn.popcash.net/pop.js"></script>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav" href="index.php">MD5 криптор</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.php">Начало</a>
                    </li>
                    <li>
                         <a href="#crypt">(Де)криптиране</a>
                    </li>
					<li>
						<a href="#hashTable">Хеш таблица</a>
                    </li>
					<li>
						<a href="api.php#md5api">Безплатно API</a>
					</li>
                    <li>
                        <a href="#contact">Контакти</a>
                    </li>
					<li>
                        <a href="/en"><img src='img/lang_uk.png' /></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Header -->
    <a name="about"></a>
    <div class="intro-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
						<img src="img/crypt.jpg" width='350' height='150' alt="MD5 En/De Cryptor" class="img-thumbnail">
                        <h1>MD5 Енкриптор &amp; Декриптор</h1>
                        <h3>Първият безплатен български онлайн MD5 енкриптор &amp; декриптор с българска хеш таблица!</h3>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="#crypt" class="btn btn-default btn-lg">
									<i class="fa fa-lock fa-fw"></i> <span class="network-name">Криптирай</span>
								</a>
                            </li>
                            <li>
                                <a href="#crypt" class="btn btn-default btn-lg">
									<i class="fa fa-unlock fa-fw"></i> <span class="network-name">Декриптирай</span>
								</a>
                            </li>
							 <li>
                                <a href="#hashTable" class="btn btn-default btn-lg">
									<i class="fa fa-list fa-fw"></i> <span class="network-name">Хеш таблица</span>
								</a>
                            </li>
							<BR><BR>
                            <li>
                                <a href="api.php#md5api" class="btn btn-default btn-lg">
									<i class="fa fa-code fa-fw"></i> <span class="network-name">Приложно-програмен интерфейс</span>
								</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->

    <!-- Page Content -->

	<a name='crypt'></a>
    <div class="content-section-a">
		<h1 style='text-align: center; margin:0 auto;'> Безплатно криптиране и декриптиране </h1>
        <BR><BR>
		<div class="container">
            <div class="row" style='text-align: center; margin:0 auto;'>
                <div class="col-md-6">
				    <h4>MD5 Криптиране</h4>
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <form action='#crypt' method="POST">
					Моля въведете текст за криптиране:
					<BR><h6>(абсолютно всякакъв вид текст може да бъде криптиран)</h6>
					<input type='text' name='text'/> <BR>
					<?php 
					$chislo = mt_rand(1,5);
					$chislo2 = mt_rand(1,5);
					$sbor = $chislo + $chislo2;
					echo $chislo." + ".$chislo2." = ?";
					?>
					<BR />
					<input type='text' name='captcha'> <BR />
					<input type='hidden' value='<?= $sbor; ?>' />
					<input type='submit' name='encrypt' value='Криптирай'/><BR>
					<div id='enResult'></div>
					</form>
					<?php 
					if(isset($_POST['encrypt'])):
						$cpt = $_POST['captcha'];
						$cpt = $cpt == $sbor ? false : true;
						if($cpt):
						$txt = $_POST['text'];
						$enTxt = md5($txt);
						$txt = htmlspecialchars($txt);
						$txt = mysqli_real_escape_string($conn, $txt);
						$sql = "select * from hashes where hash_text = '$txt'";
						
						$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
						$num = mysqli_num_rows($query);
						
						if($num < 1){
							$sql = "insert into hashes (`hash_text`, `hash_cont`, `hash_uIP`) values ('$txt', '$enTxt', '$ip')";
							$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
						}
						
						echo "
							<script type='text/javascript'>
								$('#enResult').html('<BR> Криптирано: <BR> ".$enTxt."');
								$('html, body').animate({
									scrollTop: $(\"#crypt\").offset().top
								}, 1000);								
							</script>
						";
						else:
						echo "
							<script type='text/javascript'>
								$('#enResult').html('<BR> Моля потвърдете ,че сте човек!');
								$('html, body').animate({
									scrollTop: $(\"#crypt\").offset().top
								}, 1000);								
							</script>
						";
						endif;
					endif;
					?>
                </div>
				<div class='col-md-6'>
					<h4>MD5 Декриптиране</h4>
					<hr class="section-heading-spacer">
                    <div class="clearfix"></div>
					<form action='#crypt' method="POST">
					Моля въведете текст за декриптиране:
					<BR><h6>(не всички хешове могат да бъдат разпознати)</h6>
					
					<input type='text' name='hashfd'/> 
					<BR><?php 
					$chislo = mt_rand(1,5);
					$chislo2 = mt_rand(1,5);
					$sbor = $chislo + $chislo2;
					echo $chislo." + ".$chislo2." = ?";
					?>
					<BR />
					<input type='text' name='captcha2'> <BR />
					<input type='hidden' value='<?= $sbor; ?>' />
					<input type='submit' name='decript' value='Декриптирай'/><BR>
					<div id='deResult'></div>
					</form>
					<?php 
						if(isset($_POST['decript'])):
						$cpt = $_POST['captcha'];
						$cpt = $cpt == $sbor ? false : true;
							if($cpt):
								$hesh = $_POST['hashfd'];
								$hesh = htmlspecialchars($hesh);
								$hesh = mysqli_real_escape_string($conn, $hesh);
								$sql = "select * from hashes where `hash_cont` = '$hesh'";						
								$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
								$num = mysqli_num_rows($query);
								
								if ($num > 0) {
									$row = mysqli_fetch_assoc($query);
									$txt = "Декриптирано: ".$row['hash_text'];
								}else{
									$txt = "За съжалание не открихме такъв";
									$txt2 = "запис в нашата хеш таблица. :(";
								}
							
							echo "
								<script type='text/javascript'>
									$('#deResult').html();
									$('#deResult').html('<BR> ".$txt."').append('<BR>').append('".$txt2."');
									$('html, body').animate({
										scrollTop: $(\"#crypt\").offset().top
									}, 1000);								
								</script>
							";
							else:
							echo "
								<script type='text/javascript'>
									$('#deResult').html();
									$('#deResult').html('<BR> Моля потвърдете, че не сте робот.');
									$('html, body').animate({
										scrollTop: $(\"#crypt\").offset().top
									}, 1000);								
								</script>
							";
							endif;
						endif;
					?>
				</div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->
	<BR><BR>
	
	<!-- AdSense -->
	<div class="col-md-12">	
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<!-- md5 -->
	<ins class="adsbygoogle"
		 style="display:block"
		 data-ad-client="ca-pub-2540738435572083"
		 data-ad-slot="7487240650"
		 data-ad-format="auto"></ins>
	<script>
	(adsbygoogle = window.adsbygoogle || []).push({});
	</script>
	</div>
	
	<!-- AdSense -->
	<BR><BR>
	<a name='hashTable'></a>
    <div class="content-section-a">
		<h1 style='text-align: center; margin:0 auto;'> MD5 Хеш Таблица</h1>
        <BR><BR>
		<div class="container" onload='init()'>
            <div class="row" style='text-align: center; margin:0 auto;'>
                <div class="col-md-12">					
					<div class="table-responsive">
					<table class="table table-striped">
					<tr>
					  <td>Текст</td>
					  <td>Хеш</td>
					  <td>Дата</td>
					</tr>
						<?php 
							$sql = "select * from hashes order by `hash_added` desc limit 25";
							$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
							
							while($row = mysqli_fetch_assoc($query)):
								$text = $row['hash_text'];
								$hash = $row['hash_cont'];
								$date = $row['hash_added'];
								$mth = date('M', strtotime($date));
								switch($mth){
									case "Jan":
										$mth = "Ян";
										break;
									case "Feb":
										$mth = "Фев";
										break;
									case "Mar":
										$mth = "Март";
										break;
									case "Apr":
										$mth = "Апр";
										break;
									case "May":
										$mth = "Май";
										break;
									case "Jun":
										$mth = "Юни";
										break;
									case "Jul":
										$mth = "Юли";
										break;
									case "Aug":
										$mth = "Авг";
										break;
									case "Sep":
										$mth = "Септ";
										break;
									case "Oct":
										$mth = "Окт";
										break;
									case "Dec":
										$mth = "Дек";
										break;
									default:
										$mth = "Яну";
										break;
								}
								$date = date('j '.$mth.' Y H:i:s'.'ч.', strtotime($date));
								echo "
								<tr>
								  <td>";
								  if(strlen($text)<=50)
									  echo $text;
								  else
									  echo substr($text, 0, 50)."...";
								echo "</td>
								  <td>$hash</td>
								  <td>$date</td>
								</tr>
								";
							endwhile;
						?>
					</table>
					<hr />
					<a href='list.php'>Виж пълната хеш таблица</a>
				</div></div>
            </div>

        </div>
        <!-- /.container -->
    </div>
	<!-- /.content-section-a -->
	
	<BR>
	<div class="col-md-12">	
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<!-- md5_afterht -->
	<ins class="adsbygoogle"
		 style="display:block"
		 data-ad-client="ca-pub-2540738435572083"
		 data-ad-slot="7662037450"
		 data-ad-format="auto"></ins>
	<script>
	(adsbygoogle = window.adsbygoogle || []).push({});
	</script>
	</div>
	<BR><BR>	
	<a  name="contact"></a>
    <div class="banner">

        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <h2>За връзка с нас</h2>
                </div>
                <div class="col-lg-6">
                    <ul class="list-inline banner-social-buttons">
                        <li>
                            <a href="skype:just0nlin3_?add" class="btn btn-default btn-lg"><i class="fa fa-skype fa-fw"></i> <span class="network-name">Skype</span></a>
                        </li>
                        <li>
                            <a href="https://facebook.com/Nicholas.0nlin3.Genchev" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">FaceBook</span></a>
                        </li>
                        <li>
                            <a href="#" class="btn btn-default btn-lg"><i class="fa fa-envelope fa-fw"></i> <span class="network-name">E-mail</span></a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.banner -->

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="index.php">Начало</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#crypt">Криптирай</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#crypt">Декриптирай</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#hashTable">Хеш таблица</a>
                        </li>
						<li class="footer-menu-divider">&sdot;</li>  
						<li>
                            <a href="api.php#md5api">Безплатно API</a>
                        </li>
						<li class="footer-menu-divider">&sdot;</li>
						<li>
                            <a href="#contact">Контакти</a>
                        </li>
                    </ul>
                    <p class="copyright text-muted small">Copyright &copy; MD5 криптор 2015. Всички права са запазени</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
