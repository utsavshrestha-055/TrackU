<!DOCTYPE html>
<html>
 
<head>
  <title>Send Mail</title>
  <script src=
    "https://smtpjs.com/v3/smtp.js">
  </script>
 
  <script type="text/javascript">
    
      Email.send({
        Host: "smtp.gmail.com",
        Username: "utsavxtha1000@gmail.com",
        Password: "edxnvbcgrryxtphf",
        To: 'bhattaraisatya.7@gmail.com',
        From: "utsavxtha1000@gmail.com",
        Subject: "Sending Email using javascript",
        Body: "Well that was easy!!",
        //document.getElementbyid("idname").value;
      }).then(
  message => alert("done")
);
    
  </script>
  </head>
  </html>
  
