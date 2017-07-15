<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    
    <title>BME Q&A</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- CSS -->
    <link href="/css/main.css" type="text/css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light+Two|PT+Sans" rel="stylesheet">  

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="/css/font-awesome/css/font-awesome.min.css">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <!-- JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src='/js/main.js'></script>
  </head>
  <body>
    <!-- Nav bar -->
    <?php include_once ("includes/navBar.php"); ?>

    <!-- Start of jumbotron -->
    <section class="jumbotron">
      <div class="container-fluid">
        <div class="row text-center" id="jumbotron-titles">
          <h2>Biomedical Engineering Q&A</h2>
        </div>
      </div>
    </section>
    <!-- End of jumbotron -->

    <section class="about-me-section">
      <a name="about-me"></a>
      <div class="container-fluid">
        <div class="row text-center">
          <p style="font-size: 38px;">
            Hi there!<hr>
          </p>
          <p>
            My name is Natisa and I am a Biomedical Engineering student at the University of Waterloo. This is a website where I share answers to some commonly asked questions about the Biomedical Engineering program at Waterloo. Feel free to reach out to me <a href="/phpTemplates/contact.php">here</a> if you have any questions that have not been answered!
          </p>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <?php include_once ("includes/footer.php"); ?>
  </body>
</html>