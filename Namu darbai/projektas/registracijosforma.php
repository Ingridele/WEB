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
      <div class="row">
        <form class="col s12">
          <div class="row">
            <div class="input-field col s6">
              <input  id="user_name" type="text" class="validate">
              <label for="user_name">User name</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <input  id="password" type="text" class="validate">
              <label for="password">Password</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <input  id="repeat_password" type="text" class="validate">
              <label for="repeat_password">Repeat password</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <input  id="user_name" type="text" class="validate">
              <label for="user_name">E-mail adress</label>
            </div>
          </div>
          <button class="btn waves-effect waves-light custom" type="submit" name="action">Submit<i class="material-icons right">send</i>
          </button>
        </form>
      </div>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>
