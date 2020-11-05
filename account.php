<html>
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css"><title>Sign in</title></head>
<FORM ACTION="http://localhost/photopikky/main.php"METHOD="POST" id="ggrg" class="box" enctype="multipart/form-data">
    
    <style>
        #loading{
            display: none;
        }
        .error {color: #FF0000;}
    </style>
   
 <body>
 
 <?php
        include("dbl.php");
          $q=mysql_query("select * from address where Username='$_POST[USERNAME]' and Password='$_POST[Password]'");
          if(mysql_fetch_row ($q))
          {
              exit("you already have an account"); 
          }
              ?>

 <table cellpadding=10 cellspacing=10>
              <tr><h1><FONT COLOR="red">Sign in to continue</h1></FONT></tr>
              
    
<td>

<center><div id="grfg"><input type="text"Name="USERNAME"Size="20"minlength="4"  placeholder="Username"oninvalid="this.setCustomValidity('Please type minimum 8 characters')"
    oninput="setCustomValidity('')" title="Please type atleast 8 characters"></FONT></div></center></tr><span class="error">* <?php echo $USERNAMEErr;?></span>
  <br><br>

<Td>
<center><input type="password"Name="Password"Size="25" id="password"  placeholder="Password" required ></FONT>
</Tr></center></Tr>


<Td>

<div ><Input type="email" id="hello" Name="Email"Size="35"title="Please include @gmail or yahoo.com" required placeholder="Email address"
    oninvalid="this.setCustomValidity('Please type your valid email address')"
    oninput="setCustomValidity('')"></input></FONT></div></center></Td>
    </table> 
<table cellpadding=5 cellspacing=5>

    
<script src="Main.js"></script>
</div>




                                                        
<a href="http://localhost/photopikky/forlogin.php" class=login>Click here</a> to login

    <Tr>
        <center><input type="submit" name="" value="Sign in"></center>
        </Tr>
        
    </div>
    <script src=app.js></script>
    
</table>
</FORM>
</FONT>
<div class="back"><a style="text-decoration: none"  href="Sumedh.html">Back</a></div>

</body>
</html>