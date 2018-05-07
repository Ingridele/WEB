<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="css/master.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <style media="screen">

        .box{
          /* box-shadow: 0 0 5px; */
          padding: 15px;
          background-color: #b3e5fc;
        }
      </style>
    </head>

    <body>
      <nav class=" light-blue darken-3">
        <div class="nav-wrapper">
          <a href="index.php" class="brand-logo">My finances</a>
          <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="registeroutcomesincomes.php">Register outcomes/incomes</a></li>
            <li><a href="myplans.php">My plans</a></li>
            <li><a href="createmonthlyplan.php"> New monthly plan</a></li>
            <li><a href="createsavingsplan.php">New savings plan</a></li>
          </ul>
        </div>
      </nav>

      <ul class="sidenav" id="mobile-demo">
        <li><a href="registeroutcomesincomes.php">Register outcomes/incomes</a></li>
        <li><a href="myplans.php">My plans</a></li>
        <li><a href="createmonthlyplan.php"> New monthly plan</a></li>
        <li><a href="createsavingsplan.php">New savings plan</a></li>
      </ul>


      <article class="row">
        <div class="col s12 l6">
          <div class="box">
            <h5><a href="mymonth.php">My month</a></h5>
            <ul  >
              <li class="cover">Balance  {reiksme}</li>
              <li class="cover">Money left</li>
              <li class="cover">If I keep it accourding to the plan in the end of the month I will have</li>
            </ul>
          </div>
        </div>
        <div class="col s12 l6">
            <div class="box">
            <h5> <a href="myshorttermsavings.php">My short-term savings</a> </h5>
            <ul  >
              <li class="cover">Balance</li>
              <li class="cover">Money left</li>
              <li class="cover">If I keep it accourding to the plan in the end of the month I will have</li>
            </ul>
          </div>
        </div>
        <div class="col s12 l6">
          <div class="box">
            <h5> <a href="mylongtermsavings.php">My long-term savings</a></h5>
            <ul  >
              <li class="cover">Balance</li>
              <li class="cover">Money left</li>
              <li class="cover">If I keep it accourding to the plan in the end of the month I will have</li>
            </ul>
          </div>
        </div>
        <div class="col s12 l6">
            <div class="box">
            <h5>Income/Outcome history</h5>
            <li class="cover">Balance  {reiksme}</li>
            <li class="cover">Money left</li>
            <li class="cover">If I keep it accourding to the plan in the end of the month I will have</li>
          </div>
        </div>
      </article>

        <footer class="page-footer, light-blue darken-3">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <p class="grey-text text-lighten-4">Money goes to people who LOVE and TAKE CARE of it and the thing that money loves best is... TO BE COUNTED</p>
              </div>
            </div>
          </div>
        </footer>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript"src="js/jquery-3.3.1.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript">
        $('.sidenav').sidenav();
      </script>
    </body>
  </html>
