<?php include "conf.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Първият безплатен български онлайн MD5 енкриптор &amp; декриптор с българска хеш таблица!">
    <meta name="keywords" content="md5, encrypt, decrypt, криптиране, декриптиране, код, хеш, хаш, таблица, мд5, българско, безплатно, онлайн, декриптор, енкриптор, hash, table">
    <meta name="author" content="NGenchev">

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
                         <a href="index.php#crypt">(Де)криптиране</a>
                    </li>
					<li>
						<a href="index.php#hashTable">Хеш таблица</a>
                    </li>
					<li>
						<a href="api.php#md5api">Безплатно API</a>
					</li>
                    <li>
                        <a href="index.php#contact">Контакти</a>
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
                        <h3>Първата безплатна българска онлайн MD5 <u>Hash</u> таблица! </h3>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="index.php#crypt" class="btn btn-default btn-lg">
									<i class="fa fa-lock fa-fw"></i> <span class="network-name">Криптирай</span>
								</a>
                            </li>
                            <li>
                                <a href="index.php#crypt" class="btn btn-default btn-lg">
									<i class="fa fa-unlock fa-fw"></i> <span class="network-name">Декриптирай</span>
								</a>
                            </li>
							 <li>
                                <a href="index.php#hashTable" class="btn btn-default btn-lg">
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
			<div class='col-md-12'>
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<!-- md5_list -->
				<ins class="adsbygoogle"
					 style="display:block"
					 data-ad-client="ca-pub-2540738435572083"
					 data-ad-slot="8800693455"
					 data-ad-format="auto"></ins>
				<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
			</div>
    <!-- Page Content -->
	<a name='hashTable'></a>
    <div class="content-section-a">
		<h1 style='text-align: center; margin:0 auto;'> MD5 Пълна Хеш Таблица</h1>
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
							$sql = "select * from hashes order by `hash_added` desc";
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
									  echo substr($text, 0, 100)."...";
								echo "</td>
								  <td>$hash</td>
								  <td>$date</td>
								</tr>
								";
							endwhile;
						?>
					</table>
				</div></div>
            </div>

        </div>
        <!-- /.container -->
    </div>
	<!-- /.content-section-a -->
	
	<BR>
	<div class='col-md-12'>
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<!-- md5_list -->
		<ins class="adsbygoogle"
			 style="display:block"
			 data-ad-client="ca-pub-2540738435572083"
			 data-ad-slot="8800693455"
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
                            <a href="index.php#" class="btn btn-default btn-lg"><i class="fa fa-envelope fa-fw"></i> <span class="network-name">E-mail</span></a>
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
                            <a href="index.php#crypt">Криптирай</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="index.php#crypt">Декриптирай</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="index.php#hashTable">Хеш таблица</a>
                        </li>
						<li class="footer-menu-divider">&sdot;</li>  
						<li>
                            <a href="api.php#md5api">Безплатно API</a>
                        </li>
						<li class="footer-menu-divider">&sdot;</li>
						<li>
                            <a href="index.php#contact">Контакти</a>
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
