<html>
<head>
    <h1> Insert a city's information</h1><br> <hr>   
    </head>
    
    <body>
        <form method="post">
        <table>
          <tr><td> City Name : </td>
       <td> <input type="text" name="city"></td><br></tr> 
            
      <tr> <td> Pincode :  </td>
        <td> <input type="text" name="Pincode"><br></td></tr> 
       <tr><td> State :</td>
       <td>  <input type="text" name="state"><br></td></tr>  
        
        </table><br>
        
        <input type="submit" name="submit">
    </form>
        
        <?php
        require 'connect.php';
        
        if(isset($_POST['submit']))
        {
            $city = $_POST['city'];
            $pcode= $_POST['Pincode'];
            $state= $_POST['state'];
           // $scap=  $_POST['capital'];
            
            $query = "INSERT INTO citydb VALUES(NULL, '$city', '$pcode' , '$state')";
            if($conn->query($query))
            {
                echo "Data inserted.\n";
            }
            else
            {
                echo "Error during inserting data.\n";
            }
            
            
        }
       
        
        
        ?>
    
    </body>
    
</html>