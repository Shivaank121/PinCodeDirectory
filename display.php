<?php

require 'connect.php';
    if(isset($_POST['Submit']) && !empty($_POST['city']))
    {
        $name = $_POST['city'];    
        $query = "SELECT * FROM citydb WHERE cname = '$name' ";
        
        $result = $conn->query($query);
        
        if($result->num_rows > 0)
        {    while( $row = $result->fetch_assoc())
            {
               echo "<b>City :" .$row["cname"]. "  <br>Pincode :" .$row["cpin"]. "  <br>State :" .$row["cstate"]. "<br><br><b>" ; 
            }   
        }
        else
        {
            echo "City Name is either empty or not valid.";
        }
    }
    
    
    
    if(isset($_POST['Submitp']) && !empty($_POST['pin']))
    {
        $pin = $_POST['pin'];    
        $query = "SELECT * FROM citydb WHERE cpin = '$pin' ";
        // $query = "SELECT * FROM citydb WHERE 1";
    
        $result = $conn->query($query);

        if($result->num_rows > 0)
        {  
         //   $row = $result->fetch_all();
               /*  echo '<pre>';
                 print_r($row);
            
                 echo '</pre>';*/
             while( $row = $result->fetch_assoc())
            {
                echo " <b> City : " .$row['cname']. "<br> Pincode : " .$row['cpin']. "<br>  State : " .$row['cstate']. "<br><b>";                 
            }                  
        }
        else
        {
            echo "Pin is either empty or not valid.";
        }
    }
    
    $conn->close();  
    
    ?>