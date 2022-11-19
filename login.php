

 <?php 
        session_start();
        if(isset($_SESSION['username']) && $_SESSION['username'] !== ''){
            header('Location: ./index.php');
        }
    ?>

<!DOCTYPE html>
<head>
    <title></title>
    <link rel="stylesheet" href="css/logstyles.css">
<body>

    <div class="main">
    <header>
    <a href="index.php"><h1>TrackU</h1></a>

   
    

    
</header>
        <div class="form-box">
           
            
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>
    

            
            <form method="POST" id="login" action="database/login_data.php" class="input-group">
                <br>
                <br>
                <input type="text" name="user_name" class="input-field" placeholder="Username" required>
                <input type="password" class="input-field" name="pass_word" placeholder="Password" required>
                <input type="checkbox" class="check-box" required>I agree to the terms and conditions.
            <button type="submit" name="login_button" class="submit-btn">Log In</button>
            <br>
            <br>
            <br>
            <br><br>
            <br>
            <br>
            <br>
            <h5>Forgot Your Password?? No worry.</h5><br>
            <a href="forget.php">Click here</a>
            </form>


            <form method="POST" id="register" class="input-group" action="database/register_complete.php">
               
                <input type="text" name="parent_name" class="input-field" placeholder="Your Name" required>
                <input type="email" name="email" class="input-field" placeholder="Email address" required>
                <input type="text" name="child_name" class="input-field" placeholder="Child's Name" required>
                <input type="number" name="child_class" class="input-field" placeholder="Class" required>
                <input type="number" name="child_roll" class="input-field" placeholder="Roll no." required>
                <input type="checkbox" class="check-box" required>I agree to the terms and conditions.
            <button type="submit" name="register_button" class="submit-btn">Register</button>
            <br>
            <br>
            <br>
            <br>
            <h5>Forgot Your Password?? No worry.</h5><br>
            <a href="forget.php">Click here</a>
        </form>
       
     
        

        </div>
       
        <form action="http://localhost/new/employee.php">
        <button type="submit" class="employee-btn">Continue as an employee.</button>
        
    </form>
    
    </div>
    
    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");

        function register(){
            x.style.left="-400px";
            y.style.left="50px";
            z.style.left="110px";
        }

            function login(){
            x.style.left="50px";
            y.style.left="450px";
            z.style.left="0px";


        }
    
    </script>
   
    

</body>
</head>
</html>