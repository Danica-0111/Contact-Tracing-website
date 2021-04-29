<!DOCTYPE html>
<html>
<head>
  <title>Contact Tracing Form</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

  <img class="wave" src="img/wave.svg">
  <div class="container">
    <div class="img">
      <img src="img/destination.svg">
    </div>
    
    <div class="login-content">

        <form action="process.php" method= "POST" id="form">
         
      <h2 class="title">Contact Tracing Form</h2>
        <p><font size="2"> The information I have given is true, correct and complete.</font></p>
        <p><font size="2"> I understand that failure to answer any question or giving false answer can be penalized in accordance with law.</font></p>
              <div class="input-div one">
                 <div class="i">
                    <i class="fas fa-user"></i>
                 </div>
                 <div class="div">
                    <h5>Name</h5>
                    <input type="text" id="name" name="name" class="input" autocomplete="off" required>
                     
                 </div>
              </div>

              <div class="input-div ">
                 <div class="i"> 
                    <i class="fas fa-mobile-alt"></i>
                 </div>
                 <div class="div">
                    <h5>Mobile Number</h5>
                    <input type="text" id="phone" name="phone" autocomplete="off" class="input" onkeyup="numberOnly(this)" required pattern="[0-9]{11}">
                 </div>
              </div>
              <script type="text/javascript">
                function numberOnly(input){
                  var regex = /[^0-9]/g;
                  input.value = input.value.replace(regex,"");
                }
              </script>
              
              <div class="input-div ">
                 <div class="i"> 
                    <i class="fas fa-envelope"></i>
                 </div>
                 <div class="div">
                    <h5>Email</h5>
                    <input type="email" id="email" name="email" class="input" autocomplete="off" required>
                   
                 </div>
              </div>

              <div class="input-div">
                 <div class="i"> 
                    <i class="fas fa-map-marker-alt"></i>
                 </div>
                 <div class="div">
                    <h5>Address</h5>
                    <input type="text" id="address" name="address" class="input" autocomplete="off" required>
                    
                 </div>
              </div>


              <p><font size=2> I hereby authorize CTF, to collect my data indicated here in the purpose of effecting control of the COVID-19 infection. I understand that my personal information is protected by RA 10173, Data Privacy Act of 2012. </font></p>
                <input type= "checkbox" name="IA" id=chk value="agree" tabindex="1" autocomplete="off" required/> I Agree
              <input name="SUBMIT" type="submit" class="btn" id="send" value="SUBMIT">
            </form>
        </div>
    </div>

    <script type="text/javascript" src="js/main.js">
    </script> 
</body>
</html>