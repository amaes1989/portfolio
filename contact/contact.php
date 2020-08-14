<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require(dirname(__FILE__).'/PHPMailer/Exception.php');
require(dirname(__FILE__).'/PHPMailer/PHPMailer.php');
require(dirname(__FILE__).'/PHPMailer/SMTP.php');

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio Annelore</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Font-awesome -->
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <!-- Custom Css -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" href="../css/themes/default_theme.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="container">
        <!-- Start About Section-->
        <div class="row">
            <div id="about" class="section">
                <div class="col-sm-5 col-md-5">
                    <div id="img_profile"> <img src="../img/annelore.JPG" class="img-responsive img-circle" alt="About Image">
                        <h4 class="text-uppercase mrg_top20">Annelore Maes</h4>
                        <p class="color">Web Developer</p>
                    </div>
                </div>
                <div class="col-sm-7 col-md-7">
                    <h3>Over mezelf !</h3>
                    <p class="text-muted mrg_top20">Ik ben een jonge gemotiveerde vrouw, die de stap gezet heeft naar web development. Je kan bij mij terecht voor een volledige website die je zelf kan beheren. Heb je nog vragen contacteer mij gerust!</p>
                    <button class="btn contact_us mrg_top20" data-toggle="modal" data-target="#contact_me">Contacteer mij</button>
                </div>
            </div>
        </div>
<div class="row">
<?php
$url = 'https://www.google.com/recaptcha/api/siteverify';
$data = array('secret' => '6LfKjsIUAAAAAKEoQqtM3lgtqzQ_wxw2X8JHug3K', 'response' => $_POST["g-recaptcha-response"],'remoteip' => $_SERVER['REMOTE_ADDR']);
$recaptchaSuccess = false;
// use key 'http' even if you send the request to https://...
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data)
    )
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
if ($result === FALSE) { echo 'Could not verify the recaptcha!'; }
else
{
	$resultJson = json_decode($result);
	$recaptchaSuccess = $resultJson->{'success'};
}

if($recaptchaSuccess)
{
	//definieer verzendopties 
	$onderwerp = 'Mail van CV website'; 

	//stel bericht op 
	$bericht = 'Naam: '.$_POST['naam'].' 
	Email: '.$_POST['email'].' 

	Bericht: '.$_POST['bericht']; 

	try {
		//Server settings
		//$mail->SMTPDebug = 2;                                       // Enable verbose debug output
		$mail->isSMTP();                                            // Set mailer to use SMTP
		$mail->Host       = 'smtp.gmail.com';			// Specify main and backup SMTP servers
		$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
		$mail->Username   = 'anneloremaes1989@gmail.com';                     // SMTP username
		$mail->Password   = '16Rambo04';                               // SMTP password
		$mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
		$mail->Port       = 587;                                    // TCP port to connect to

		//Recipients
		$mail->setFrom('anneloremaes1989@gmail.com', $_POST['naam'].' <'.$_POST['email'].'>');
		$mail->addAddress('anneloremaes1989@gmail.com', 'Annelore Maes');     // Add a recipient
		$mail->addReplyTo($_POST['email'], $_POST['naam']);

		// Attachments
		//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
		//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

		// Content
		$mail->isHTML(true);                                  // Set email format to HTML
		$mail->Subject = $onderwerp;
		$mail->Body    = str_replace(PHP_EOL,"<br/>",$bericht);
		$mail->AltBody = $bericht;

		$mail->send();
		echo '<p>Bericht is succesvol verzonden.</p>'; 
	} catch (Exception $e) {
		echo '<p>Er is een fout opgetreden bij het verzenden van het bericht. Probeer het later nogmaals.</p>'; 
	}
}
else
{
	echo '<p>Er is een fout opgetreden bij het verifiëren van je recaptcha. Probeer het later nogmaals.</p>'; 	
}

?>
</div>
</div>


</body>

</html>