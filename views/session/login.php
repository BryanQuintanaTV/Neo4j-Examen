<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Login Form</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
  <link rel="stylesheet" href="src/css/login_style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<body class="align">

  <div class="login">

    <header class="login__header">
      <h2><svg class="icon">
          <use xlink:href="#icon-lock" />
        </svg>Sign In</h2>
    </header>

    <form class="login__form" role="form" method="post" action="index.php">

      <fieldset>

        <div class="form-group">
          <label for="type">User Type:</label>
          <select name="type" required>
              <option value="3" default>GUESS</option>
              <option value="2">ADMIN</option>
              <option value="1">MASTER</option>
          </select>
        </div>

        <div>
          <label for="email">E-mail address</label>
          <input type="email" id="email" name="user" placeholder="mail@address.com">
        </div>
  
        <div>
          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="password" value="" required>
        </div>
        <br>
        <div>
          <button class="button" type="submit">Login</button>
        </div>

        <div class="text-center">
            <label><?= $data["msn"] ?></label>
        </div>
      </fieldset>

      

    </form>

  </div>

  <svg xmlns="http://www.w3.org/2000/svg" class="icons">

    <symbol id="icon-lock" viewBox="0 0 448 512">
      <path d="M400 224h-24v-72C376 68.2 307.8 0 224 0S72 68.2 72 152v72H48c-26.5 0-48 21.5-48 48v192c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V272c0-26.5-21.5-48-48-48zm-104 0H152v-72c0-39.7 32.3-72 72-72s72 32.3 72 72v72z" />
    </symbol>

  </svg>

</body>

<!-- https://fontawesome.com/icons/lock?style=solid -->
<!-- partial -->
  
</body>
</html>


<!-- <div>
    <img src="src/img/logo.jpg" height="200" alt="Logo">
    <h2>FastFood</h2>
</div>
<div>
    <form role="form" method="post" action="index.php">
        <fieldset>
            <div class="form-group">
                <label for="type">User Type:</label>
                <select name="type" required>
                    <option value="3" default>GUESS</option>
                    <option value="2">ADMIN</option>
                    <option value="1">MASTER</option>
                </select>
            </div>
            <div class="form-group">
                <input class="form-control" placeholder="User" name="user" type="email" autofocus="" required>
            </div>
            <div class="form-group">
                <input class="form-control" placeholder="Password" name="password" type="password" value="" required>
            </div>
            <div class="text-center">
                <button type="submit">Login</button>
            </div>
            <div class="text-center">
                <label><?= $data["msn"] ?></label>
            </div>
        </fieldset>
    </form>
</div> -->