<?php include 'header.php';?>

<link rel="stylesheet" href="CSS/design-form.css">

<script src="JS/login.js"></script>


<br><br><br>

        <form class="form-inline" action="authentification.php" method="POST">


           
<table>
  <tr>
  <td>       
 
            <label>Name:</label>    </td> <td> 
            <input id="name" name="name" type="text" placeholder="Name" style="bgcolor=red">

        
              

</td>    
</tr>
            
<tr>
  <td>   
            
            <label>Password:</label>  </td> 
            <td> 
            <input id="pwd" name="pwd" type="password"  placeholder="Password">
 </td>    
</tr>
               <tr>
  <td >  </td>   <td> 
            <input type="submit" value="Login"/>
             
               
           
              
              </td>    
</tr>

</table>
        </form>


        <?php include 'footer.php';?>

        
