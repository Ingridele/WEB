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
    <div class="row">
   <form class="col s12" method="post" action="mymonth.php">
     <div class="row">
        <fieldset>
          <legend>Period</legend>
            Start date: <input method="post"type="text" class="datepicker" placeholder="Choose start date" id = "start_date">
            End date: <input type="text" class="datepicker" placeholder="Choose end date" id = "end_date">
        </fieldset>
        <fieldset>
          <legend>Incomes</legend>
          <div class="row">
            <div class="input-field col s6">
              <input  id="monthly_incomes" type="number" class="validate" name="income">
              <label for="monthly_incomes">Set your incomes</label>
            </div>
            <div class="input-field col s6">
              <input  id="monthly_incomes_name" type="text" class="validate" name="income_type">
              <label for="monthly_incomes_name">Set incomes type</label>
            </div>
          </div>

            <button class="btn waves-effect waves-light custom" type="submit" name="action">Ok<i class="material-icons right">send</i>
            </button>

        </fieldset>
        <fieldset>
          <legend>Outcomes</legend>
          <div class="row">
            <div class="input-field col s12 m6">
              <input  id="daily_spendings" type="number" class="validate" name="daily_spendings">
              <label for="daily_spendings">Set your daily spendings</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s6">
              <input  id="other_outcomes" type="number" class="validate" name="other_outcomes">
              <label for="other_outcomes">Set other outcomes (amount)</label>
            </div>
            <div class="input-field col s6">
              <input  id="other_outcomes_name" type="text" class="validate" name= "other_outcomes_name">
              <label for="other_outcomes_name">Set the outcomes name</label>
            </div>
            <div class="fixed-action-btn">


          </div>
          <button id = "add" class="btn waves-effect waves-light custom" type="submit" name="action">Add row<i class="material-icons right">send</i>
          </button>

          <button class="btn waves-effect waves-light custom" type="submit" name="action">Ok<i class="material-icons right">send</i>
          </button>>


        </fieldset>
        <fieldset>
          <legend>Savings</legend>
          <div class="row">
            <div class="input-field col s6">
              <input  id="short_term_savings" type="number" class="validate" name = "short_term_savings">
              <label for="short_term_savings">Set you monthly short-term savings</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s6">
              <input  id="long_term_savings" type="number" class="validate" name = "long_term_savings">
              <label for="long_term_savings">Set you monthly long-term savings</label>
            </div>
          </div>

          <button class="btn waves-effect waves-light custom" type="submit" name="action">Ok<i class="material-icons right">send</i>
          </button>
        </fieldset>
     </div>
   </form>
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
      $('.datepicker').datepicker();
      $('input#input_text, textarea#textarea2').characterCounter();
      $('.dropdown-trigger').dropdown();



    </script>
  </body>
</html>
