<html>
    <head>
      <script src="https://kit.fontawesome.com/a076d05399.js"></script>
      <link rel="stylesheet" href="style2.css">
      <link rel="stylesheet" href="style5.css">
      <title>Photopikky</title></head>
      <style>
          body{
    background: none;
}





        .column2{
            float: top;
            width: 28.99%;
            padding: 5;
        }

        * {
          box-sizing: border-box;
        }
        
        .column {
          float: right;
          width: 10.66%;
          padding: 1;
        }
        
        </style>
         <body>
         <div id=cong>
           <?php
           die("congradulations!!!account created successfully")
           ?>
           </div>
           <script>
         
  setTimeout(
    document.getElementById("cong").style.display="none", 2000
  )
   
  
    
  
</script>
<div class="slider">
                  
<h1><font color="white"><?php
           include("dbl.php");
          
          $q=mysql_query("select * from address where Username='$_POST[USERNAME]' and Password='$_POST[Password]'");
          if(mysql_fetch_row ($q))
          {
              exit("oooppsss!!Sorry you already have an account"); 
          }
              
           $r="insert into address(Username,Email,Password) values ('$_POST[USERNAME]', '$_POST[Email]', '$_POST[Password]')";
           if(mysql_query($r))
            echo "WELCOME ", $_POST["USERNAME"];
         
           ?></h1></font> 
            
         <div class="slidebar">
         
           <header>Menu</header>
         <ul>
      
      <Li><a href="categories.html"><i class="fas fa-qrcode"></i> Categories</a></Li>
      <Li><a href="#"><i class="fas fa-qrcode"></i> Dashboard  </a></Li>
      <Li><a href="#"><i class="fas fa-question-circle"></i> Help</a></Li>
      <Li><a href="http://localhost/photopikky/Profile.php"><i class="fas fa-user-circle"></i> account</a></Li>
      <Li><a href="#"><i class="fas fa-envelope"></i>  Contact </a></Li>     
    </ul>
          </div>
         
          <CENTER><font color="red" size=40><h1><u>Photo</font><font color="grey"size=30>pikky</h1></u></font></tr>
        
          
        
        </CENTER>
        <div class="column"><font color="white" size=5.5><b><h5>
        <?php
        echo "Date:".date("y-m-d")
        ?>
        </div></font></h5></b>
        <input type="checkbox" id="check">
          <label for="check">
            <i class="fas fa-bars" id="btn"></i>
            <i class="fas fa-times" id="cancel"></i>
          </label> 
          
            <script src="Main.js"></script>
          </div>
    </body>
</html>