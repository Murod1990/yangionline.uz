<!DOCTYPE html>
<html lang="en">
<head>
    <title>Test sahifa</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keyworks" content = "Test javoblari ">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easy-ticker/2.0.0/jquery.easy-ticker.min.js"> </script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- Matematik belgilarni ishlatilish javascript qismi -->
   <script type="text/javascript" src="js/MathJax.js?config=TeX-AMS-MML_HTMLorMML"> </script>
 
 <script type="text/x-mathjax-config">
    MathJax.Hub.Config({
      CommonHTML: {
        styles: {
           ".mjx-test.mjx-test-inline": {
              display: "inline-table!important",
              'margin-right': 0
          },
          ".mjx-test-inline .mjx-left-box": {
              display: "table-cell!important",
              width: "10000em!important",
              "min-width": 0, "max-width": "none",
              padding: 0, border: 0, margin: 0, float: null
              
          }
        }
      }
    });
  </script>
      <!-- Matematik belgilarni ishlatilish javascript qismi oxiri -->  
      <!-- Vaqtning oxiri --> 
 <script language="javascript">
	var Seconds = 1800;
	var Interval = null;
	function StartTimer(){
		Interval = window.setInterval('DownTime()',1000);
		document.getElementById('TimerText').style.display = 'inline';
	}
	function DownTime(){
		var ss = Seconds % 60;
		if (ss<10){
			ss='0' + ss + '';
		}

		var mm = Math.floor(Seconds / 60);

		if (document.getElementById('Timer') == null){
			return;
		}

		document.getElementById('TimerText').innerHTML = 'Qoldiq vaqt - ' + mm + ':' + ss;
		if (Seconds <1){
			Ssubmit();
			window.clearInterval(Interval);
			TimeOver = true;
			TimesUp();
			
		}
		Seconds--;
	}
	function Ssubmit() {
		$("form").submit();
	}
	
</script>
  
  


<script>
var myVar = setInterval(myTimer, 1000);

function myTimer() {
  var d = new Date();
  document.getElementById("demo").innerHTML = d.toLocaleTimeString();
}
</script>
<!-- Vaqtning oxiri --> 


    <link rel="icon" href="/img/icon.png">
    <link rel="stylesheet" href="/css/styletest.css">

</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<?php
      
     
        function index()
        {
           
            include('db.php');
            $i = trim($_POST['ism']) ;
            $s= $_POST['sinf'];
            $f = $_POST['fan'];
            $numer = 1;
            $hammmkichik = strtolower($i);
            $bofa_ism =ucwords($hammmkichik);
            $dbtest = " SELECT *FROM testlars WHERE `sinf`='$s' and `fan`='$f' ORDER BY RAND()
            LIMIT 0 , 20 " ;
            $qury = mysqli_query($conn,$dbtest);
            $sav = mysqli_fetch_array($qury);
            
            echo" <form method='post' id='form' action = ajax_tahlil.php>";
            do
            {

                $array =  array($sav[2],$sav[3],$sav[4],$sav[5]);
                shuffle($array);

               echo " 
               <div class='forma'>
               <div class = 'savol  '> $numer) ".$sav[1]."</div>
               <label > <div  class='variant ' >   A) <input type='radio' class='tanla'    value='".$array["0"]."'   name =wj$e >  ".$array["0"]." </div></label>
               <label>  <div  class='variant ' >   B) <input type='radio' class='tanla'   value='".$array["1"]."'    name =wj$e >  ".$array["1"]." </div></label>
               <label><div   class ='variant '  >   C) <input type='radio' class='tanla'   value='".$array["2"]."'   name =wj$e >  ".$array["2"]." </div></label>
               <label><div  class = 'variant ' >   D) <input type='radio' class='tanla'  value='".$array["3"]."'   name =wj$e >  ".$array["3"]." </div></label></br>
               <input type = 'hidden' name = tj$t id='tj' value = '".$sav[6]."'> 
               <input type = 'hidden' name = s$u id='tj' value = '".$sav[1]."'> </div> ";

               $numer = $numer +1;
               $e = $e + 1;
               $t = $t + 1 ;
               $u = $u + 1 ;
                        

            }
              while($sav=mysqli_fetch_array($qury));

              echo " <div class=''> <input type='submit' id='input' class= 'btn btn-success' title='testni javoblarini tasdiqlash' value='T e s t n i  Y a k u n l a sh'> 
               </div> ";
             
              echo "</form>";

              
        }
        ?>

<div class="container">
    <div class="row">
        <div class="col-sm-1">
        <div id="Timer" style="position:fixed; z-index:500; "><span id="TimerText" style="font-size:25px; color:#FF0000; font-weight:bold; background-color:#FFFFFF"></span></div>	<div class="navigation"> 
         <b> Joriy vaqt </b>
         <b id='demo'></b>    
         </div>
        </div>
         <div class="col-sm-8" >
         
         <h2 class="sarlovha" align="center"> Online test tizimi</h2>
         <div class="centrr"><?php index() ?> </div>       
         </div>
        <div class="col-sm-3">
        <div class="content">
 



        </div>
    </div>
</div>



</body>
</html>


