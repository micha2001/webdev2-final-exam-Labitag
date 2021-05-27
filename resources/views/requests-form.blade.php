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


.container {
  padding: 5px;
  background-color: white;
  text-align: center;
  width: 47%;
  margin-left: 27%;
  margin-top: 11%;
  opacity: 0.9;
  border-radius: 20px;
}


td {
  padding: 4%;
  border-radius: 20px;
}


hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}


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

</style>
</head>
<body>



<div id="ourmanna-verse">Loading...</div>
    <script src="http://www.ourmanna.com/verses/api/js?order=random" type="text/javascript"></script>

  <div class="container">
  
    
  <form action="/bible-study-form-create" method="POST" class="">
  @csrf                         

    <h1>Register</h1>
    <p>Please fill in this form to approved your request.</p>
    <hr>
    {{ session('message') }}

    <br>
    <br>
    
    <input type="hidden" value="{{ $registrations->id }}" name="id" >
    
    <table>

    <tr>
    <td><label for="fullname"><b>Complete Name</b></label></td>
    <td><input type="text" value="{{ $registrations->fullname }}" placeholder="Complete Name" name="fullname" id="fullname" required></td>
    </tr>
    <tr>
    <td><label for="email"><b>Email Address</b></label></td>
    <td><input type="email" value="{{ $registrations->email }}" placeholder="Email Address" name="email" id="email" required></td>
    </tr>

    <tr>
    <td><label for="contactnumber"><b>Contact Number</b></label></td>
    <td><input type="number" value="{{ $registrations->contactnumber }}" placeholder="Contact Number" name="contactnumber" id="contactnumber" required><td>
    </tr>

    <tr>
    <td><label for="birthdate"><b>Birthdate</b></label></td>
    <td><input type="date" value="{{ $registrations->birthdate }}" placeholder="Birthdate" name="birthdate" id="birthdate" required></td>
    </tr>

    <tr>
    <td><label for="religion"><b>Religious Affiliation</b></label></td>
    <td><input type="text" value="{{ $registrations->religion }}" placeholder="Religious Affiliation" name="religion" id="religion" required></td>
    </tr>

    <tr>
    <td><label for="bsdate"><b>Bible Study Date</b></label></td>
    <td><input type="date" value="{{ $registrations->bsdate }}" placeholder="Bible Study Date" name="bsdate" id="bsdate" required></td>
    </tr>

    <tr>
    <td><label for="bstime"><b>Bible Study Time</b></label></td>
    <td><input type="time" value="{{ $registrations->bstime }}" placeholder="Bible Study Time" name="bstime" id="bstime" required></td>
    </tr>

    <tr>
    <td><label for="address"><b>Bible Study Location / Address</b></label></td>
    <td><input type="text" value="{{ $registrations->address }}" placeholder="Bible Study Location / Address" name="address" id="address" required></td>
    </tr>
    </table>
    <hr>
    <br>
    

    <button type="submit" value="saved" class="registerbtn">Submit</button>
  
</form>
</div>
  </div>
</body>
</html>

