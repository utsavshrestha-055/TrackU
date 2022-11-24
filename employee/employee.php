

 <?php 
        session_start();
        if(isset($_SESSION['username']) && $_SESSION['username'] !== ''){
            header('Location: employee_home.php');
        }
    ?>

<!DOCTYPE html>
<head>
    <title></title>
    <link rel="stylesheet" href="../css/logstyles.css">
<body>

    <div class="main">
    <header>
    <a href="index.php"><h1>TrackU</h1></a>

   
    

    
</header>
        <div class="form-box">
        <button class="employee-btn"> LogIn 
        </button>
            
            <form method="POST" id="login" action="../database/employee_login_data.php" class="input-group">
        
      

                <br>
                <br>
                <input type="text" name="user_name" class="input-field" placeholder="Username" required>
                <input type="password" class="input-field" name="pass_word" placeholder="Password" required>
                <input type="checkbox" class="check-box" required><span>I agree to the terms and conditions.</span>
            <button type="submit" name="login_button" class="submit-btn">Log In</button>
            
            </form>
     
        

        </div>
    
    </div>
    

   
    

</body>
</head>
</html>