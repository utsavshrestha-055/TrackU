

 <?php 
        session_start();
        if(isset($_SESSION['username']) && $_SESSION['username'] !== ''){
            header('Location: ./employee_home.php');
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
        <button class="employee-btn"> Forget
        </button>
            
            <form method="POST" id="login" action="forget_data.php" class="input-group">
        
      

                <br>
                <br>
                <input type="text" name="user_name" class="input-field" placeholder="email" required>

                <br>
                <br>
                <br>
                <br>
                

                 <button type="submit" name="search-button" class="submit-btn">search</button>
                
            </form>
     
        

        </div>
    
    </div>
    

   
    

</body>
</head>
</html>