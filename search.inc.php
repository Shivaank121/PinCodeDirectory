<?php
    require 'connect.php';

    if(isset( $_GET['city'])){
        $search_text= $_GET['city'];
    }
    $query ="Select cname FROM citydb WHERE cname LIKE '$search_text%' LIMIT 10";
    $result = $conn->query($query);

    if($result->num_rows > 0 && !empty($search_text))
    {    while( $row = $result->fetch_assoc())
         {
            echo "<li>".$row["cname"]."</li>" ; 
         }
    }
?>