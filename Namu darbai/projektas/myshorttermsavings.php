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
        <div class="col s12 l12">
          <div class="box">
            <figure>
              <figcaption>{SHORT-TERM-SAVINGS}</figcaption>
              <table>
                <tr>
                  <th>Date</th>
                  <th>Planed</th>
                  <th>Fact</th>
                  <th>Status</th>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </table>
            </figure>
          </article>
          </div>
        </div>

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
