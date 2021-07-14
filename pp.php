<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="2">
    <title>try</title>
    
<style>


html,body{
  display: grid;
  height: 100%;
  place-items: center;
 
  background-color:darkslategray;



}


.center{
  
  text-align: center;
  align-items: center;
  justify-content: center;
}
.outer{
  position: relative;
  margin: 0 44px;
 background: linear-gradient(90deg, #00ffb8, #13ce);;
}
.button{
  height: 70px;
  width: 220px;
  border-radius: 50px;
}
.outer button, .outer span{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.outer button{
  background: #1E4747;
  color: #f2f2f2;
  outline: none;
  border: none;
  font-size: 20px;
  font-family:monospace;
  z-index: 9;
  letter-spacing: 1px;
  text-transform: uppercase;
  cursor: pointer;
}
.button button{
  height: 60px;
  width: 210px;
  border-radius: 50px;
  
}

.outer:hover span:nth-child(1){
  filter: blur(7px);
}
.outer:hover span:nth-child(2){
  filter: blur(14px);
}
.outer:hover{
  
  animation: rotate 1.5s linear infinite;
}
@keyframes rotate {
  0%{
    filter: hue-rotate(0deg);
  }
  100%{
    filter: hue-rotate(360deg);
  }
}
@media (max-width: 500px){
  
  .outer{
    margin: 50px 0;
    
  }

}




/*center code*/

.hexagon {
	 width: 96.75px;
	 height: 150px;
	 background-image: linear-gradient(90deg, #00ffb8, #13ce9a);
	 border-radius: 15px;
	 transition: transform 400ms ease;
}
 .hexagon:hover {
	 transform: rotate(30deg);
}
 .hexagon:before, .hexagon:after {
	 content: '';
	 display: block;
	 position: absolute;
	 top: 0;
	 bottom: 0;
	 left: 0;
	 right: 0;
	 width: inherit;
	 height: inherit;
	 background-image: inherit;
	 border-radius: inherit;
}
 .hexagon:before {
	 transform: rotate(60deg);
}
 .hexagon:after {
	 transform: rotate(-60deg);
}
 
 .center {
	 position:relative;
   display:inline-flex;
	 top: 50%;
	 margin-left: 45%;
	 transform: translate(-50%, -50%);
}
 

</style>
</head>
<body>

 <div class="center">
   
        <span></span>
          
          <table style="width:40%">
        
         
                <tr><td></td>
             <td>   <a href="f.html"><div class="center">
               <div class="outer button">
               <button >Forward</button></a>
               <span></span>
               <span></span>
               </div>        </td>
               <td>   </td>
                 </tr> </div>
         
                 <br>
             <td></td>   <a href="l.html"> <div class="outer button">
               <button >Left</button> </a>
               <span></span>
               <span></span>
               </div>
              </div>
             <br>
             <br> <br> <br> <br> <br>
       
             
             </td>
                <td> 
                 <br><br><br><br>
             
                 <a href="s.html">
                 <div  class="center"style="margin-left:27%;margin-top:40%;">
            <div class="hexagon"></div> </a>
          
            </div>
           


                <td>
                  
                 <br>
                  <br>
                  <br>
                  <br>
                  <a href="r.html">
                 <div class="outer button" id="r"> 
                 <button >right</button></a>
                 <span></span>
                 <span></span>
                 </div>  
                  </td>
                   
                </tr>  </div>

       
                 <td></td>
             <td>  
               <br><br><br><br>
           
<a href="b.html">
               <div class="outer button">
               <button >Backward</button>
</a>
               <span></span>
               <span></span>
               </div> 
               
                 <td> 
                </td>
              
       
               

                <?php


$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "control";      

$conn = new mysqli($servername, $username, $password); 
if ($conn->connect_error)
{
    echo "connection error !! " . $conn->connect_error;
}
else
{
echo "";



 }           
?>
       

</body>
</html>
