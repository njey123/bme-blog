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
    <link href="/css/qAndA.css" type="text/css" rel="stylesheet">

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
              Commonly Asked Questions<hr id="horiz-line">
            </p>
          </div>
        </div>
      </section>
      <!-- End of header -->

      <!-- Start of main page content -->
      <section class="main-content-section">
        <div class="container-fluid">
          <div class="jump-menu">
            <div class="row text-center">
              <ul>
                <li><a href="#" target="_blank">Section 1</a></li>
                <li><a href="#" target="_blank">Section 2</a></li>
                <li><a href="#" target="_blank">Section 3</a></li>
              </ul>
            </div>
          </div>
          <div class="row">
            <br><br>
            <h2>Section 1<hr></h2>
            <br>
            <p>
              <i class="questionAnswer" id="question">Question: </i>[insert question here]
            </p>
            <br>
            <p>
              <i class="questionAnswer" id="answer">Answer: </i>[insert answer here]
            </p>
            <br>
            <br>
          </div>
          <div class="row">
            <h2>Section 2<hr></h2>
            <br>
            <p>
              <i class="questionAnswer" id="question">Question: </i>[insert question here]
            </p>
            <br>
            <p>
              <i class="questionAnswer" id="answer">Answer: </i>[insert answer here]
            </p>
            <br>
            <br>
          </div>
          <div class="row">
            <h2>Section 3<hr></h2>
            <br>
            <p>
              <i class="questionAnswer" id="question">Question: </i>[insert question here]
            </p>
            <br>
            <p>
              <i class="questionAnswer" id="answer">Answer: </i>[insert answer here]
            </p>
          </div>
        </div>
      </section>
      <!-- End of main page content -->
  
      <!-- Footer -->
    <?php include_once ("../includes/footer.php"); ?>
    </div> <!-- contact-page-content -->
  </body>
</html>