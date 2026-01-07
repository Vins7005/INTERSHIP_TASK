<!DOCTYPE html>

<head>
 
  <title>regestration form </title>
  <style >
    
  </style>
<link rel="stylesheet" href="./style.css">


</head>
<body>
 <header>
  <marquee direction="right">
<P class="smm" align="center" style="color: brown;"><h1>VSPIRE INNOVATION LTD.</h1></P>

</header>
</marquee>
<hr>

</nav><hr>


<div class="container">
  <h2>Register</h2>

     <form method="post" action="process.php">
     <div class="form first">
                <div class="details personal">
                    <span class="title">Personal Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Full Name</label>
                            <input type="text" name="fullname" placeholder="fullname" required >
                        </div>

                        
                         <div class="input-field">
                            <label>Email</label>
                            <input type="email"  name="email" required>
                        </div>

                        <div class="input-field">
                            <label>Contact</label>
                            <input type="number" name="contact" required>
                        </div>
                        
                         <div class="input-field">
                            <label>Address</label>
                            <input type="text"  name="address" required>
                        </div>
                         <div class="input-field">
                            <label>Age</label>
                            <input type="number"  name="age" placeholder="ex.22" required>
                        </div>
                         

                         <div class="input-field">
                            <label>Password</label>
                            <input type="text" name="password" required>
                        </div>
                        <div class="input-field">
                            <label>CODE</label>
                            <input type="number"  name="code" required>
                        </div>

                      </div>
                    </div>
                    <center>
                      <div class="buttons">
                        <div class="backBtn">
                            <i class="uil uil-navigator"></i>
                            <span class="btnText">Reset</span>
                        </div>
                        
                        <button class="sumbit">
                            <input type="submit"name="submit" value="save">
                            
                        </button>
                    </div>
                  </div>
                  </center>

    
    
    
    
  </form>
  </div>
 
  
</div>

  
</body>
</html>