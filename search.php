<html>
    
   
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
    <head>
        <div>
         <h1 class='heading' > WELCOME</h1>
        </div>
      <link rel ="stylesheet" href = "style1.css">  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script >  
            function findmatch(){
                document.getElementById("display").innerHTML='';
                document.getElementById("display").style.backgroundColor='white';
                if(window.XMLHttpRequest){
                    xmlhttp = new XMLHttpRequest();
                }
                else{
                    xmlhttp= new ActiveXObject('Microsoft.XMLHTTP');
                }

                xmlhttp.onreadystatechange = function()
                {
                    if(xmlhttp.readyState ==4 && xmlhttp.status == 200 ){
                      document.getElementById("id").innerHTML = xmlhttp.responseText;
                       $('.result li').click(function(){
                           var result_value = $(this).text();
                            
                            $('.autosuggest').val(result_value);
                            $('.result').html('');
                        });
                         
                    }
                }
                xmlhttp.open('GET', 'search.inc.php?city='+document.search.city.value, true);
                xmlhttp.send();
            }
          
        </script> 
        
    </head>
<body onclick = "$('.result').html('');">  
    <div>
    <div style="float: left; width: 49.5%" class="boxes">
   <h1> Search by City. <br> </h1>
   <hr>
    <form action="./search.php" method ="post" name="search" id= "search">
            City name:<br><br>
            <input type='text' class="autosuggest"  name="city" onkeyup ="findmatch();" >
            <input type='submit' name='Submit' value='Search' >
            <br>
         <div id ="adiv" class ="dropdown" >  
            <ul id="id" class = "result">             
            </ul>        
         </div>
    </form>
   </div>
    
    <div   style="float: right; width:49.5%" class="boxes">
     <h1>  Search by Pincode.<br>   </h1>
     <hr>
     <form action="./search.php" method ="post" >
            Pincode:  <br><br>
            <input type='text' name="pin"  class='inputp' >
            <input type='submit' value='Search' name='Submitp' >
            <br>
    </form>
    </div>
    </div>
   
      <div  id="display"  >
    <?php   require 'display.php';   ?> 
       
    </div>
  
  
</body>
    
</html>