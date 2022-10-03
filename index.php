

<!DOCTYPE html>
<head>
    <title></title>
    <link rel="stylesheet" href="style.css">
<body>

    <div class="hero">
    <header>
    <a href="index.php"><h1>TrackU</h1></a>

    <?php 
        session_start();
        if(isset($_SESSION['username']) && $_SESSION['username'] !== ''){
            header('Location: ./home.php');
        }
    ?>
    
</header>
        <div class="form-box">
            <img src="logo.webp" alt="Paris" class="logo">
            
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>
    

            
            <form method="POST" id="login" action="login_data.php" class="input-group">
                <br>
                <br>
                <input type="text" name="user_name" class="input-field" placeholder="Username" required>
                <input type="password" class="input-field" name="pass_word" placeholder="Password" required>
                <input type="checkbox" class="check-box"><span>Remember Password</span>
            <button type="submit" name="login_button" class="submit-btn">Log In</button>
            </form>


            <form method="POST" id="register" class="input-group" action="register complete.php">
               
                <input type="text" name="parent_name" class="input-field" placeholder="Your Name" required>
                <input type="email" name="email" class="input-field" placeholder="Email address" required>
                <input type="text" name="child_name" class="input-field" placeholder="Child's Name" required>
                <input type="number" name="child_class" class="input-field" placeholder="Class" required>
                <input type="number" name="child_roll" class="input-field" placeholder="Roll no." required>
                <input type="checkbox" class="check-box" required><span>I agree to the terms and conditions.</span>
            <button type="submit" name="register_button" class="submit-btn">Register</button>
        
        </form>
        

        </div>
        <div class="social">
            <img src="fb.png">
            <img src="tw.png">
            <img src="gp.png">
    
        </div>

    
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