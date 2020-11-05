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
         <h1><font color="white"><Center>
         <?php
          include("dbl.php");
          $q=mysql_query("select * from address where Username='$_POST[Username]' and Password='$_POST[password]'");
          if(!mysql_fetch_row ($q))
          {
              exit("Could'nt login");
            
          }
          
        
         ?>
         </h1></font></Center>

           <input type="checkbox" id="check">
          <label for="check">
            <i class="fas fa-bars" id="btn"></i>
            <i class="fas fa-times" id="cancel"></i>
          </label> 
          
            
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
          <div class="slider">
          
          <CENTER><font color="red" size=40><h1><u>Photo</font><font color="grey"size=30>pikky</h1></u></font></tr>
        <?php
          echo "Welcome".$_POST["Username"];
        ?>
        </CENTER>
        <div class="column"><font color="white" size=5.5><b><h5>
        <?php
        echo "Date:".date("y-m-d")
        ?>
        </div></font></h5></b>
            <script src="Main.js"></script>
          </div>
    </body>
</html>

         
