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

    <!-- Core CSS -->
    <link href="/css/main.css" type="text/css" rel="stylesheet">
    <!-- Specific CSS -->
    <link href="/css/header-section.css" type="text/css" rel="stylesheet">
    <link href="/css/contact.css" type="text/css" rel="stylesheet">

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
    <?php include_once ("../includes/navBar.php"); ?>

    <div class="page-content">
      <!-- Start of header -->
      <section class="header-section">
        <div class="container-fluid">
          <div class="row text-center">
            <p>
              Contact<hr id="horiz-line">
            </p>
          </div>
        </div>
      </section>
      <!-- End of header -->

      <!-- Start of main page content -->
      <section class="contact-info-section">
        <div class="container-fluid">
          <div class="row">
            <p>
              Feel free to contact me if you have any further questions!
            </p>
            <br>
            <div class="contact-info-section-form">
              <form>
                <p>Name <i class="contact-info-section-form-asterisk">*</i></p>
                <input type="text" name="user-name">
              </form>
              <br>
              <form>
                <p>Email <i class="contact-info-section-form-asterisk">*</i></p>
                <input type="text" name="user-email">
              </form>
              <br>
              <form>
                <p>Message <i class="contact-info-section-form-asterisk">*</i></p>
                <textarea style="height: 250px";></textarea>
              </form>
              <br>
              <button type="button" class="contact-send-button">Send</button>
            </div>
          </div>
        </div>
      </section>
      <!-- End of main page content -->
  
      <!-- Footer -->
    <?php include_once ("../includes/footer.php"); ?>
    </div> <!-- contact-page-content -->
  </body>
</html>