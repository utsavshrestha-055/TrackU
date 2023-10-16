<!DOCTYPE html>
<html>
 
<head>
  <title>Send Mail</title>
  <script src=
    "https://smtpjs.com/v3/smtp.js">
  </script>
 
  <script type="text/javascript">
    function sendEmail() {
      Email.send({
        Host: "smtp.gmail.com",
        Username: "bhattaraisatya.7.com",
        Password: "quwnnfarbmymmcvt",
        To: 'utsavxtha1000@gmail.com',
        From: "bhattaraisatya.7@gmail.com",
        Subject: "Sending Email using javascript",
        Body: "Well that was easy!!",
      })
        .then(function (message) {
          alert("mail sent successfully")
        });
    }
  </script>
  </head>
  </html>
