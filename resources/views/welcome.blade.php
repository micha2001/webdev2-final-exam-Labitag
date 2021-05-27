<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial;
  background-image:url("/images/Bible-Study.jpg");
  background-size: cover;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 5px;
  background-color: white;
  text-align: center;
  width: 47%;
  margin-left: 27%;
  margin-top: 9%;
  opacity: 0.9;
}


/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #07A1FF;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}

#ourmanna-verse{
  background-image:url("/images/omega.png");
  background-color: #003556;
  text-align: center;
  font-weight: bold;
  background-size: cover;
  background-repeat:no-repeat;
  background-position: center;
  color: white;
  position: fixed;
  width: 100%;
  overflow: hidden;
  top: 0;
  z-index: 12;
}

a{
  color: white;
}

</style>
</head>
<body>

<form action="/register" method="post">
@csrf

<div id="ourmanna-verse">Loading...</div>
    <script src="http://www.ourmanna.com/verses/api/js?order=random" type="text/javascript"></script>

  <div class="container">
  
    

    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    {{ session('message') }}

    <br>
    <br>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <label for="psw_repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw_repeat" id="psw_repeat" required>
    <hr>
    <br>

    <button type="submit" class="registerbtn"><a href="/bible-study-request-form">SIGN UP</a></button>
  </div>
</form>

</body>
</html>

