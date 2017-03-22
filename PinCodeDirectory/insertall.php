<html>
<body>
    
    <form action = "./insertall.php" method ="post">
        
        <input type = "submit" name = "submit" value = "Insert All">
    
    </form>
    
    <?php
    
    require 'connect.php';
    if(isset($_POST['submit']) && !empty($_POST['submit']))
    {
        $fp= fopen("data.txt","r");
     
        while(! feof($fp))
        {
            $line= fgets($fp);
            
            $pos=my_ofset($line);
            $len=strlen($line)-1;
            $city=substr($line, 0, -$len+$pos-1);
            $city= trim($city);
        //    echo "City: $city\t" ;
            
            $pcode=intval(substr($line, $pos, 6));
                    
         //   echo "Pin Code: $pcode\t";            
            $state = substr($line,$pos+7);
            
          //  echo "State: ".$state." <br>";  
            
            
            $query = "INSERT INTO citydb VALUES(NULL, '$city', '$pcode' , '$state' )";
            if($conn->query($query))
            {
                echo "Data inserted.\n";
            }
            else
            {
                echo "Error during inserting data.\n";
            }
        }

    }
   
    
    function my_ofset($text){
        preg_match('/^\D*(?=\d)/', $text, $m);
        return isset($m[0]) ? strlen($m[0]) : false;
    }
    
    ?>
    
    </body>

</html>