<?php
  

    include('db.php');
    $togri = 0;
    $xato = 0;
    
    $foy_ja = $_POST["wj"];
    $foy_ja1 = $_POST["wj1"];
    $foy_ja2 = $_POST["wj2"];
    $foy_ja3 = $_POST["wj3"];
    $foy_ja4 = $_POST["wj4"];
    $foy_ja5 = $_POST["wj5"];
    $foy_ja6 = $_POST["wj6"];
    $foy_ja7 = $_POST["wj7"];
    $foy_ja8 = $_POST["wj8"];
    $foy_ja9 = $_POST["wj9"];
    $foy_ja10 = $_POST["wj10"];
    $foy_ja11 = $_POST["wj11"];
    $foy_ja12 = $_POST["wj12"];
    $foy_ja13 = $_POST["wj13"];
    $foy_ja14 = $_POST["wj14"];
    $foy_ja15 = $_POST["wj15"];
    $foy_ja16 = $_POST["wj16"];
    $foy_ja17 = $_POST["wj17"];
    $foy_ja18 = $_POST["wj18"];
    $foy_ja19 = $_POST["wj19"];
    $tog_ja = $_POST["tj"];
    $tog_ja1 = $_POST["tj1"];
    $tog_ja2 = $_POST["tj2"];
    $tog_ja3 = $_POST["tj3"];
    $tog_ja4 = $_POST["tj4"];
    $tog_ja5 = $_POST["tj5"];
    $tog_ja6 = $_POST["tj6"];
    $tog_ja7 = $_POST["tj7"];
    $tog_ja8 = $_POST["tj8"];
    $tog_ja9 = $_POST["tj9"];
    $tog_ja10 = $_POST["tj10"];
    $tog_ja11 = $_POST["tj11"];
    $tog_ja12 = $_POST["tj12"];
    $tog_ja13 = $_POST["tj13"];
    $tog_ja14 = $_POST["tj14"];
    $tog_ja15 = $_POST["tj15"];
    $tog_ja16 = $_POST["tj16"];
    $tog_ja17 = $_POST["tj17"];
    $tog_ja18 = $_POST["tj18"];
    $tog_ja19 = $_POST["tj19"];
    $s = $_POST["s"];
    $s1 = $_POST["s1"];
    $s2 = $_POST["s2"];
    $s3 = $_POST["s3"];
    $s4 = $_POST["s4"];
    $s5 = $_POST["s5"];
    $s6 = $_POST["s6"];
    $s7 = $_POST["s7"];
    $s8 = $_POST["s8"];
    $s9 = $_POST["s9"];
    $s10 = $_POST["s10"];
    $s11 = $_POST["s11"];
    $s12 = $_POST["s12"];
    $s13 = $_POST["s13"];
    $s14 = $_POST["s14"];
    $s15 = $_POST["s15"];
    $s16 = $_POST["s16"];
    $s17 = $_POST["s17"];
    $s18 = $_POST["s18"];
    $s19 = $_POST["s19"];
   //// satrda qo'shtirnoq belgilarini ishlatmaslik kerak uni olib tashlash kerak

   //// Birinchi tekshirish///////////////////////////
    if($foy_ja =='' )
    {
     $xato++;
     echo "<style>
     input[id='q']
     {
      background-color: red;
      font-size:20px;
      padding: 8px 14px;
      border:none;
      width:40px;
      color: ivory;
      margin : 5px;0 ;5px;
     }
    </style> ";
    }
    elseif($foy_ja == $tog_ja)
    {
        $togri++; 
        echo "<style>
        input[id='q']
        {
            background-color: mediumblue;
            font-size:20px;
            padding: 8px 14px;
            border:none;
            width:40px;
            color: ivory;
            margin : 5px;0 ;5px;
         }
         
        </style> ";
    }
    else
    {
    $xato++;
    echo "<style>
    input[id='q']
    {
       background-color: red;
       font-size:20px;
       padding: 8px 14px;
       border:none;
       width:40px;
       color: ivory;
       margin : 5px;0 ;5px;
    }
    </style> ";

    }
    ////////////// Ikkinchi tekshitish///////////////////////////
    if($foy_ja1 == '')
    {
        $xato++;
        echo "<style>
        input[id=qw]
        {
           background-color: red;
           font-size:20px;
           padding: 8px 14px;
           border:none;
           width:40px;
           color: ivory;
           margin : 5px;0 ;5px;
        }
        </style> ";
    }
    elseif($foy_ja1 == $tog_ja1)
    {
        $togri++;
        echo "<style>
        input[id=qw]
        {
           background-color: mediumblue;
           font-size:20px;
           padding: 8px 14px;
           border:none;
           width:40px;
           color: ivory;
           margin : 5px;0 ;5px;
        }
        </style> ";
    }
    else
    {
    $xato++;
    echo "<style>
        input[id=qw]
        {
           background-color: red;
           font-size:20px;
           padding: 8px 14px;
           border:none;
           width:40px;
           color: ivory;
           margin : 5px;0 ;5px;
         }
        </style> ";
    }
    ///////////////////////////////ikkinchi tekshirish oxiri
    if($foy_ja2 == '')
    {
       $xato++ ;
       echo "<style>
       input[id=qwe]
       {
         background-color: red;
         font-size:20px;
         padding: 8px 14px;
         border:none;
         width:40px;
         color: ivory;
         margin : 5px;0 ;5px;
       }
       </style> ";


    }
    elseif($foy_ja2 == $tog_ja2)
    {
        $togri++ ;
        echo "<style>
       input[id=qwe]
       {
         background-color: mediumblue;
         font-size:20px;
         padding: 8px 14px;
         border:none;
         width:40px;
         color: ivory;
         margin : 5px;0 ;5px;
       }
       </style> ";
    }
    else
    {
       $xato++ ;
       echo "<style>
       input[id=qwe]
       {
         background-color: red;
         font-size:20px;
         padding: 8px 14px;
         border:none;
         width:40px;
         color: ivory;
         margin : 5px;0 ;5px;
       }
       }
       </style> ";

    }
    /////////////uchni oxiri
    ////////////////to'rtni boshi
    if($foy_ja3 == '')
    {
       $xato++ ;
       echo "<style>
       input[id=q4]{
       background-color: red;
        font-size:20px;
        padding: 8px 14px;
        border:none;
        width:40px;
        color: ivory;
        margin : 5px;0 ;5px;}
       </style> ";


    }
    elseif($foy_ja3 == $tog_ja3)
    {
        $togri++ ;
        echo "<style>
       input[id=q4]
       {
       background-color:mediumblue ;
       font-size:20px;
       padding: 8px 14px;
       border:none;
       width:40px;
       color: ivory;
       margin : 5px;0 ;5px;
       }
       </style> ";
    }
    else
    {
       $xato++ ;
       echo "<style>
       input[id=q4]
       {
         background-color:red ;
         font-size:20px;
         padding: 8px 14px;
         border:none;
         width:40px;
         color: ivory;
         margin : 5px;0 ;5px;
       }
       </style> ";

    }
    ///////////////////////////to'rtni  oxiri
    ////////////////Beshni boshi
    if($foy_ja4 == '')
    {
       $xato++ ;
       echo "<style>
       input[id=q5]{
       background-color: red;
        font-size:20px;
        padding: 8px 14px;
        border:none;
        width:40px;
        color: ivory;
        margin : 5px;0 ;5px;
       }
       </style> ";


    }
    elseif($foy_ja4 == $tog_ja4)
    {
        $togri++ ;
        echo "<style>
       input[id=q5]
       {
       background-color:mediumblue ;
       font-size:20px;
       padding: 8px 14px;
       border:none;
       width:40px;
       color: ivory;
       margin : 5px;0 ;5px;
       }
       </style> ";
    }
    else
    {
       $xato++ ;
       echo "<style>
       input[id=q5]
       {
         background-color:red ;
         font-size:20px;
         padding: 8px 14px;
         border:none;
         width:40px;
         color: ivory;
         margin : 5px;0 ;5px;
       }
       </style> ";

    }
    //////beshni oxiri
   ////////////////oltini boshi
   if($foy_ja5 == '')
   {
      $xato++ ;
      echo "<style>
      input[id=q6]{
      background-color: red;
       font-size:20px;
       padding: 8px 14px;
       border:none;
       width:40px;
       color: ivory;
       margin : 5px;0 ;5px;
      }
      </style> ";


   }
   elseif($foy_ja5 == $tog_ja5)
   {
       $togri++ ;
       echo "<style>
      input[id=q6]
      {
      background-color:mediumblue ;
      font-size:20px;
      padding: 8px 14px;
      border:none;
      width:40px;
      color: ivory;
      margin : 5px;0 ;5px;
      }
      </style> ";
   }
   else
   {
      $xato++ ;
      echo "<style>
      input[id=q6]
      {
        background-color:red ;
        font-size:20px;
        padding: 8px 14px;
        border:none;
        width:40px;
        color: ivory;
        margin : 5px;0 ;5px;
      }
      </style> ";

   }
   //////oltini oxiri
   ////////////////Yetti boshi
   if($foy_ja6 == '')
   {
      $xato++ ;
      echo "<style>
      input[id=q7]
      {
      background-color: red;
       font-size:20px;
       padding: 8px 14px;
       border:none;
       width:40px;
       color: ivory;
       margin : 5px;0 ;5px;
      }
      </style> ";


   }
   elseif($foy_ja6 == $tog_ja6)
   {
       $togri++ ;
       echo "<style>
      input[id=q7]
      {
      background-color:mediumblue ;
      font-size:20px;
      padding: 8px 14px;
      border:none;
      width:40px;
      color: ivory;
      margin : 5px;0 ;5px;
      }
      </style> ";
   }
   else
   {
      $xato++ ;
      echo "<style>
      input[id=q7]
      {
        background-color:red ;
        font-size:20px;
        padding: 8px 14px;
        border:none;
        width:40px;
        color: ivory;
        margin : 5px;0 ;5px;
      }
      </style> ";

   }
   //////Yetti oxiri
  //////////////// 8ni boshi
  if($foy_ja7 == '')
  {
     $xato++ ;
     echo "<style>
     input[id=q8]
     {
     background-color: red;
      font-size:20px;
      padding: 8px 14px;
      border:none;
      width:40px;
      color: ivory;
      margin : 5px;0 ;5px;
     }
     </style> ";


  }
  elseif($foy_ja7 == $tog_ja7)
  {
      $togri++ ;
      echo "<style>
     input[id=q8]
     {
     background-color:mediumblue ;
     font-size:20px;
     padding: 8px 14px;
     border:none;
     width:40px;
     color: ivory;
     margin : 5px;0 ;5px;
     }
     </style> ";
  }
  else
  {
     $xato++ ;
     echo "<style>
     input[id=q8]
     {
       background-color:red ;
       font-size:20px;
       padding: 8px 14px;
       border:none;
       width:40px;
       color: ivory;
       margin : 5px;0 ;5px;
     }
     </style> ";

  }
  //////8ni oxiri
  //////////////// 9ni boshi
  if($foy_ja8 == '')
  {
     $xato++ ;
     echo "<style>
     input[id=q9]{
     background-color: red;
      font-size:20px;
      padding: 8px 14px;
      border:none;
      width:40px;
      color: ivory;
      margin : 5px;0 ;5px;
     }
     </style> ";


  }
  elseif($foy_ja8 == $tog_ja8)
  {
      $togri++ ;
      echo "<style>
     input[id=q9]
     {
     background-color:mediumblue ;
     font-size:20px;
     padding: 8px 14px;
     border:none;
     width:40px;
     color: ivory;
     margin : 5px;0 ;5px;
     }
     </style> ";
  }
  else
  {
     $xato++ ;
     echo "<style>
     input[id=q9]
     {
       background-color:red ;
       font-size:20px;
       padding: 8px 14px;
       border:none;
       width:40px;
       color: ivory;
       margin : 5px;0 ;5px;
     }
     </style> ";

  }
  //////9ni oxiri
    //////////////// 10ni boshi
    if($foy_ja9 == '')
    {
       $xato++ ;
       echo "<style>
       input[id=q10]
       {
       background-color: red;
        font-size:20px;
        padding: 8px 14px;
        border:none;
        width:40px;
        color: ivory;
        margin : 5px;0 ;5px;
       }
       </style> ";
  
  
    }
    elseif($foy_ja9 == $tog_ja9)
    {
        $togri++ ;
        echo "<style>
       input[id=q10]
       {
       background-color:mediumblue ;
       font-size:20px;
       padding: 8px 14px;
       border:none;
       width:40px;
       color: ivory;
       margin : 5px;0 ;5px;
       }
       </style> ";
    }
    else
    {
       $xato++ ;
       echo "<style>
       input[id=q10]
       {
         background-color:red ;
         font-size:20px;
         padding: 8px 14px;
         border:none;
         width:40px;
         color: ivory;
         margin : 5px;0 ;5px;
       }
       </style> ";
  
    }
    //////10ni oxiri
    //////////////// 11ni boshi
    if($foy_ja10 == '')
    {
       $xato++ ;
       echo "<style>
       input[id=q11]
       {
       background-color: red;
        font-size:20px;
        padding: 8px 14px;
        border:none;
        width:40px;
        color: ivory;
        margin : 5px;0 ;5px;
       }
       </style> ";
  
  
    }
    elseif($foy_ja10 == $tog_ja10)
    {
        $togri++ ;
        echo "<style>
       input[id=q11]
       {
       background-color:mediumblue ;
       font-size:20px;
       padding: 8px 14px;
       border:none;
       width:40px;
       color: ivory;
       margin : 5px;0 ;5px;
       }
       </style> ";
    }
    else
    {
       $xato++ ;
       echo "<style>
       input[id=q11]
       {
         background-color:red ;
         font-size:20px;
         padding: 8px 14px;
         border:none;
         width:40px;
         color: ivory;
         margin : 5px;0 ;5px;
       }
       </style> ";
  
    }
    //////11ni oxiri
    //////////////// 12ni boshi
    if($foy_ja11 == '')
    {
       $xato++ ;
       echo "<style>
       input[id=q12]
       {
       background-color: red;
        font-size:20px;
        padding: 8px 14px;
        border:none;
        width:40px;
        color: ivory;
        margin : 5px;0 ;5px;
       }
       </style> ";
  
  
    }
    elseif($foy_ja11 == $tog_ja11)
    {
        $togri++ ;
        echo "<style>
       input[id=q12]
       {
       background-color:mediumblue ;
       font-size:20px;
       padding: 8px 14px;
       border:none;
       width:40px;
       color: ivory;
       margin : 5px;0 ;5px;
       }
       </style> ";
    }
    else
    {
       $xato++ ;
       echo "<style>
       input[id=q12]
       {
         background-color:red ;
         font-size:20px;
         padding: 8px 14px;
         border:none;
         width:40px;
         color: ivory;
         margin : 5px;0 ;5px;
       }
       </style> ";
  
    }
    //////12ni oxiri
    //////////////// 13ni boshi
    if($foy_ja12 == '')
    {
       $xato++ ;
       echo "<style>
       input[id=q13]
       {
       background-color: red;
        font-size:20px;
        padding: 8px 14px;
        border:none;
        width:40px;
        color: ivory;
        margin : 5px;0 ;5px;
       }
       </style> ";
  
  
    }
    elseif($foy_ja12 == $tog_ja12)
    {
        $togri++ ;
        echo "<style>
       input[id=q13]
       {
       background-color:mediumblue ;
       font-size:20px;
       padding: 8px 14px;
       border:none;
       width:40px;
       color: ivory;
       margin : 5px;0 ;5px;
       }
       </style> ";
    }
    else
    {
       $xato++ ;
       echo "<style>
       input[id=q13]
       {
         background-color:red ;
         font-size:20px;
         padding: 8px 14px;
         border:none;
         width:40px;
         color: ivory;
         margin : 5px;0 ;5px;
       }
       </style> ";
  
    }
    //////13ni oxiri
  //////////////// 14ni boshi
  if($foy_ja13 == '')
  {
     $xato++ ;
     echo "<style>
     input[id=q14]
     {
     background-color: red;
      font-size:20px;
      padding: 8px 14px;
      border:none;
      width:40px;
      color: ivory;
      margin : 5px;0 ;5px;
     }
     </style> ";


  }
  elseif($foy_ja13 == $tog_ja13)
  {
      $togri++ ;
      echo "<style>
     input[id=q14]
     {
     background-color:mediumblue ;
     font-size:20px;
     padding: 8px 14px;
     border:none;
     width:40px;
     color: ivory;
     margin : 5px;0 ;5px;
     }
     </style> ";
  }
  else
  {
     $xato++ ;
     echo "<style>
     input[id=q14]
     {
       background-color:red ;
       font-size:20px;
       padding: 8px 14px;
       border:none;
       width:40px;
       color: ivory;
       margin : 5px;0 ;5px;
     }
     </style> ";

  }
  //////14ni oxiri
  //////////////// 15ni boshi
  if($foy_ja14 == '')
  {
     $xato++ ;
     echo "<style>
     input[id=q15]
     {
     background-color: red;
      font-size:20px;
      padding: 8px 14px;
      border:none;
      width:40px;
      color: ivory;
      margin : 5px;0 ;5px;
     }
     </style> ";


  }
  elseif($foy_ja14 == $tog_ja14)
  {
      $togri++ ;
      echo "<style>
     input[id=q15]
     {
     background-color:mediumblue ;
     font-size:20px;
     padding: 8px 14px;
     border:none;
     width:40px;
     color: ivory;
     margin : 5px;0 ;5px;
     }
     </style> ";
  }
  else
  {
     $xato++ ;
     echo "<style>
     input[id=q15]
     {
       background-color:red ;
       font-size:20px;
       padding: 8px 14px;
       border:none;
       width:40px;
       color: ivory;
       margin : 5px;0 ;5px;
     }
     </style> ";

  }
  //////15ni oxiri
    //////////////// 16ni boshi
    if($foy_ja15 == '')
    {
       $xato++ ;
       echo "<style>
       input[id=q16]
       {
       background-color: red;
        font-size:20px;
        padding: 8px 14px;
        border:none;
        width:40px;
        color: ivory;
        margin : 5px;0 ;5px;
       }
       </style> ";
  
  
    }
    elseif($foy_ja15 == $tog_ja15)
    {
        $togri++ ;
        echo "<style>
       input[id=q16]
       {
       background-color:mediumblue ;
       font-size:20px;
       padding: 8px 14px;
       border:none;
       width:40px;
       color: ivory;
       margin : 5px;0 ;5px;
       }
       </style> ";
    }
    else
    {
       $xato++ ;
       echo "<style>
       input[id=q16]
       {
         background-color:red ;
         font-size:20px;
         padding: 8px 14px;
         border:none;
         width:40px;
         color: ivory;
         margin : 5px;0 ;5px;
       }
       </style> ";
  
    }
    //////16ni oxiri
      //////////////// 17ni boshi
      if($foy_ja16 == '')
      {
         $xato++ ;
         echo "<style>
         input[id=q17]
         {
         background-color: red;
          font-size:20px;
          padding: 8px 14px;
          border:none;
          width:40px;
          color: ivory;
          margin : 5px;0 ;5px;
         }
         </style> ";
    
    
      }
      elseif($foy_ja16 == $tog_ja16)
      {
          $togri++ ;
          echo "<style>
         input[id=q17]
         {
         background-color:mediumblue ;
         font-size:20px;
         padding: 8px 14px;
         border:none;
         width:40px;
         color: ivory;
         margin : 5px;0 ;5px;
         }
         </style> ";
      }
      else
      {
         $xato++ ;
         echo "<style>
         input[id=q17]
         {
           background-color:red ;
           font-size:20px;
           padding: 8px 14px;
           border:none;
           width:40px;
           color: ivory;
           margin : 5px;0 ;5px;
         }
         </style> ";
    
      }
      //////17ni oxiri
      //////////////// 18ni boshi
      if($foy_ja17 == '')
      {
         $xato++ ;
         echo "<style>
         input[id=q18]
         {
         background-color: red;
          font-size:20px;
          padding: 8px 14px;
          border:none;
          width:40px;
          color: ivory;
          margin : 5px;0 ;5px;
         }
         </style> ";
    
    
      }
      elseif($foy_ja17 == $tog_ja17)
      {
          $togri++ ;
          echo "<style>
         input[id=q18]
         {
         background-color:mediumblue ;
         font-size:20px;
         padding: 8px 14px;
         border:none;
         width:40px;
         color: ivory;
         margin : 5px;0 ;5px;
         }
         </style> ";
      }
      else
      {
         $xato++ ;
         echo "<style>
         input[id=q18]
         {
           background-color:red ;
           font-size:20px;
           padding: 8px 14px;
           border:none;
           width:40px;
           color: ivory;
           margin : 5px;0 ;5px;
         }
         </style> ";
    
      }
      //////18ni oxiri
       //////////////// 19ni boshi
       if($foy_ja18 == '')
       {
          $xato++ ;
          echo "<style>
          input[id=q19]
          {
          background-color: red;
           font-size:20px;
           padding: 8px 14px;
           border:none;
           width:40px;
           color: ivory;
           margin : 5px;0 ;5px;
          }
          </style> ";
     
     
       }
       elseif($foy_ja18 == $tog_ja18)
       {
           $togri++ ;
           echo "<style>
          input[id=q19]
          {
          background-color:mediumblue ;
          font-size:20px;
          padding: 8px 14px;
          border:none;
          width:40px;
          color: ivory;
          margin : 5px;0 ;5px;
          }
          </style> ";
       }
       else
       {
          $xato++ ;
          echo "<style>
          input[id=q19]
          {
            background-color:red ;
            font-size:20px;
            padding: 8px 14px;
            border:none;
            width:40px;
            color: ivory;
            margin : 5px;0 ;5px;
          }
          </style> ";
     
       }
       //////19ni oxiri
       //////////////// 20ni boshi
       if($foy_ja19 == '')
       {
          $xato++ ;
          echo "<style>
          input[id=q20]
          {
          background-color: red;
           font-size:20px;
           padding: 8px 14px;
           border:none;
           width:40px;
           color: ivory;
           margin : 5px;0 ;5px;
          }
          </style> ";
     
     
       }
       elseif($foy_ja19 == $tog_ja19)
       {
           $togri++ ;
           echo "<style>
          input[id=q20]
          {
          background-color:mediumblue ;
          font-size:20px;
          padding: 8px 14px;
          border:none;
          width:40px;
          color: ivory;
          margin : 5px;0 ;5px;
          }
          </style> ";
       }
       else
       {
          $xato++ ;
          echo "<style>
          input[id=q20]
          {
            background-color:red ;
            font-size:20px;
            padding: 8px 14px;
            border:none;
            width:40px;
            color: ivory;
            margin : 5px;0 ;5px;
          }
          </style> ";
     
       }
       //////20ni oxiri

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="/css/ajaxtahlil.css">
    <link rel="icon" href="/img/icon.png">
    <title>Test javobi</title>
            
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 

<div class="container-fluid">

    <div class="row">
    <div class="col-sm-6">
     <button type="button" >Yangi test yechish</button> 
 
      <div class="javob">
        
    <input type="submit"  class="colore" id="q" value="1">
    <input type="submit" class="colore" id="qw" value="2">
    <input type="submit" class="colore" id="qwe" value="3">
    <input type="submit" class="colore" id="q4" value="4">
    <input type="submit" class="colore" id="q5" value="5">
    <input type="submit" class="colore" id="q6" value="6">
    <input type="submit" class="colore" id="q7" value="7">
    <input type="submit" class="colore" id="q8" value="8">
    <input type="submit" class="colore" id="q9" value="9">
    <input type="submit" class="colore" id="q10" value="10">
    <input type="submit" class="colore" id="q11" value="11">
    <input type="submit"  class="colore" id="q12" value="12">
    <input type="submit" class="colore" id="q13" value="13">
    <input type="submit" class="colore" id="q14" value="14">
    <input type="submit" class="colore" id="q15" value="15">
    <input type="submit" class="colore" id="q16" value="16">
    <input type="submit" class="colore" id="q17" value="17">
    <input type="submit" class="colore" id="q18" value="18">
    <input type="submit" class="colore" id="q19" value="19">
    <input type="submit" class="colore" id="q20" value="20">
      
<div class="row">
   <div class="col-sm-3">
   <?php
   $foiz = 100;
   $soni = 20 ;
   $izoh = $foiz*$togri;
   $natijai = round($izoh/$soni);
   $natijaxato = $foiz - $natijai;

   
   echo"<p class='togri'>To'g'ri javob soni : $togri </p>
    <p>Xato javob soni : $xato  </p>";
    ?>
   </div>
   <div class="col-sm-3">
   <?php 
   echo " <p class='foiz'> Foizda ko'rsatgichi xato javob $natijai %</p> ";
   echo" <p class='foiz'> Foiz ko'rsatgichi to'g'ri javob $natijaxato % </p> "; 
   ?>

   </div>
    </div>
  
 </div>
 
 

<div class="succes">
   <?php   
   if($togri >= 15 )
   {
      echo "<img src ='/img/succ.gif' class='rasm_togri' width='250' height='250' >";
   }
   else{
     echo "<img src ='/img/lose.gif' class='rasm_xato' width='250' height='250' >"; 
   } 
   ?>
</div>


      

        </div>
        
        <div class="col-sm-6 mt-4 " >
           <!-- Savollarni chiqarish boshi -->
           
        <div class="savol">               
           <?php  echo " 1) $s"; ?>
        
        <div class="siz_jav">
         <?php  
         if($foy_ja == '')
         {echo"Siz birinchi savolga javob bermadingiz";}
         else{
            echo"Sizning javobingiz : $foy_ja";
         }
         ?>
        </div>
        <div class="togri_jav">
           <?php  
           echo "To'g'ri javob: $tog_ja" ;
           ?>
        </div>
        </div>
        
        <!-- Ikkinchi savol boshi-->
           <div class="savol">
           <?php  echo " 2) $s1"; ?>
           
           <div class="siz_jav">
              <?php 
              
              if($foy_ja1 == '')
              {
                 echo "Siz Ikkinchi savolga javob bermadingiz ";
              }
              else
              {
                 echo "Sizning javobingiz :$foy_ja1 ";
              }


              ?>
           </div>
           <div class="togri_jav">
              <?php 
              echo " To'g'ri javob: $tog_ja1 ";
              ?>
           </div>
           </div>
           <!-- Ikkinchi savol oxiri-->
       <!-- uchunchi savol boshi-->
         <div class="savol">
            <?php  echo"3) $s2" ;  ?>
         
         <div class="siz_jav">
            <?php
            if($foy_ja2 == '')
            {
               echo " Siz uchunchi savolga javob bermadingiz ";
            }
            else{
               echo " Sizning javobingiz: $foy_ja2 " ;
            }
            ?>
            
         </div>
         <div class="togri_jav">
               <?php echo " To'g'ri javob: $tog_ja2"; ?>
            </div>
            </div>
            <!-- uchunchi savol oxiri-->

      <!-- to'rtinchi savol oxiri-->
      
         <div class="savol">
            <?php echo " 4) $s3"; ?>
        
         <div class="siz_jav">
            <?php 
            if($foy_ja3 =='')
            {
               echo "Siz to'rtinchi savolga javob bermadingiz";
            }
            else{
               echo " Sizning javobingiz :$foy_ja3";
            }
            ?>
            
         </div>
         <div class="togri_jav">
               <?php echo " To'g'ri javob: $tog_ja3"; ?>
         </div>
         </div>
         <!-- to'rtinchi savol oxiri-->
         <!-- Beshinchi savol boshi-->
         
         <div class="savol">
            <?php echo " 5) $s4"; ?>
         
         <div class="siz_jav">
            <?php 
            if($foy_ja4 =='')
            {
               echo "Siz beshinchi savolga javob bermadingiz";
            }
            else{
               echo " Sizning javobingiz :$foy_ja4";
            }
            ?>
            
         </div>
         <div class="togri_jav">
               <?php echo " To'g'ri javob: $tog_ja4"; ?>
         </div>
         </div>
         <!-- Beshinchi savol oxiri-->
         
         <div class="savol">
            <?php echo " 6) $s5"; ?>
         
         <div class="siz_jav">
            <?php 
            if($foy_ja5 =='')
            {
               echo "Siz Oltinchi savolga javob bermadingiz";
            }
            else{
               echo " Sizning javobingiz :$foy_ja5";
            }
            ?>
            
         </div>
         <div class="togri_jav">
               <?php echo " To'g'ri javob: $tog_ja5"; ?>
         </div>
         </div>
         <!-- Oltinchi savol oxiri-->

        <!-- Sakkiz savol boshi-->
        
         <div class="savol">
            <?php echo " 7) $s6"; ?>
         
         <div class="siz_jav">
            <?php 
            if($foy_ja6 =='')
            {
               echo "Siz yettinchi savolga javob bermadingiz";
            }
            else{
               echo " Sizning javobingiz :$foy_ja6";
            }
            ?>
            
         </div>
         <div class="togri_jav">
               <?php echo " To'g'ri javob: $tog_ja6"; ?>
         </div>
         </div>
         <!-- Sakkiz savol oxiri-->
        <!-- To'qqiz savol boshi-->
         
         <div class="savol">
            <?php echo " 8) $s7"; ?>
         
         <div class="siz_jav">
            <?php 
            if($foy_ja7 =='')
            {
               echo "Siz yettinchi savolga javob bermadingiz";
            }
            else{
               echo " Sizning javobingiz :$foy_ja7";
            }
            ?>
            
         </div>
         <div class="togri_jav">
               <?php echo " To'g'ri javob: $tog_ja7"; ?>
         </div>
         </div>
         <!-- To'qqiz savol oxiri-->
         
         <div class="savol">
            <?php echo " 9) $s8"; ?>
      
         <div class="siz_jav">
            <?php 
            if($foy_ja8 =='')
            {
               echo "Siz sakkiz savolga javob bermadingiz";
            }
            else{
               echo " Sizning javobingiz :$foy_ja8";
            }
            ?>
            
         </div>
         <div class="togri_jav">
               <?php echo " To'g'ri javob: $tog_ja8"; ?>
         </div>
         </div>
       <!-- -->
         
         <div class="savol">
            <?php echo " 10) $s9"; ?>
         
         <div class="siz_jav">
            <?php 
            if($foy_ja9 =='')
            {
               echo "Siz to'qizinchi savolga javob bermadingiz";
            }
            else{
               echo " Sizning javobingiz :$foy_ja9";
            }
            ?>
            
         </div>
         <div class="togri_jav">
               <?php echo " To'g'ri javob: $tog_ja9"; ?>
         </div>
         </div>
         <!-- -->
         
         <div class="savol">
            <?php echo " 11) $s10"; ?>
         
         <div class="siz_jav">
            <?php 
            if($foy_ja10 =='')
            {
               echo "Siz o'n birinchi savolga javob bermadingiz";
            }
            else{
               echo " Sizning javobingiz :$foy_ja10";
            }
            ?>
            
         </div>
         <div class="togri_jav">
               <?php echo " To'g'ri javob: $tog_ja10"; ?>
         </div>
         </div>
            <!-- -->
         
         <div class="savol">
            <?php echo " 12) $s11"; ?>
         
         <div class="siz_jav">
            <?php 
            if($foy_ja11 =='')
            {
               echo "Siz o'n ikkinchi savolga javob bermadingiz";
            }
            else{
               echo " Sizning javobingiz :$foy_ja11";
            }
            ?>
            
         </div>
         <div class="togri_jav">
               <?php echo " To'g'ri javob: $tog_ja11"; ?>
         </div>
         </div>
         <!-- -->
       
         <div class="savol">
            <?php echo " 13) $s12"; ?>
      
         <div class="siz_jav">
            <?php 
            if($foy_ja12 =='')
            {
               echo "Siz o'n uchinchi savolga javob bermadingiz";
            }
            else{
               echo " Sizning javobingiz :$foy_ja12";
            }
            ?>
            
         </div>
         <div class="togri_jav">
               <?php echo " To'g'ri javob: $tog_ja12"; ?>
         </div>
         </div>
          <!-- -->
         
         <div class="savol">
            <?php echo " 14) $s13"; ?>
         
         <div class="siz_jav">
            <?php 
            if($foy_ja13 =='')
            {
               echo "Siz o'n uchinchi savolga javob bermadingiz";
            }
            else{
               echo " Sizning javobingiz :$foy_ja13";
            }
            ?>
            
         </div>
         <div class="togri_jav">
               <?php echo " To'g'ri javob: $tog_ja13"; ?>
         </div>
        </div>
         <!-- -->
         
         <div class="savol">
            <?php echo " 15) $s14"; ?>
        
         <div class="siz_jav">
            <?php 
            if($foy_ja14 =='')
            {
               echo "Siz o'n beshinchi savolga javob bermadingiz";
            }
            else{
               echo " Sizning javobingiz :$foy_ja14";
            }
            ?>
            
         </div>
         <div class="togri_jav">
               <?php echo " To'g'ri javob: $tog_ja14"; ?>
         </div>
         </div>
         <!-- -->
        
         <div class="savol">
            <?php echo " 16) $s15"; ?>
         
         <div class="siz_jav">
            <?php 
            if($foy_ja15 =='')
            {
               echo "Siz o'n olti savolga javob bermadingiz";
            }
            else{
               echo " Sizning javobingiz :$foy_ja15";
            }
            ?>
            
         </div>
         <div class="togri_jav">
               <?php echo " To'g'ri javob: $tog_ja15"; ?>
         </div>
         </div>
            <!-- -->
        
         <div class="savol">
            <?php echo " 17) $s16"; ?>
         
         <div class="siz_jav">
            <?php 
            if($foy_ja16 =='')
            {
               echo "Siz o'n oltinchi savolga javob bermadingiz";
            }
            else{
               echo " Sizning javobingiz :$foy_ja16";
            }
            ?>
            
         </div>
         <div class="togri_jav">
               <?php echo " To'g'ri javob: $tog_ja16"; ?>
         </div>
         </div>
 <!-- -->
        
         <div class="savol">
            <?php echo " 18) $s17"; ?>
         
         <div class="siz_jav">
            <?php 
            if($foy_ja17 =='')
            {
               echo "Siz o'n sakkizinchi savolga javob bermadingiz";
            }
            else{
               echo " Sizning javobingiz :$foy_ja17";
            }
            ?>
            
         </div>
         <div class="togri_jav">
               <?php echo " To'g'ri javob: $tog_ja17"; ?>
         </div>
         </div>
          <!-- -->

       
         <div class="savol">
            <?php echo " 19) $s18"; ?>
        
         <div class="siz_jav">
            <?php 
            if($foy_ja18 =='')
            {
               echo "Siz o'n to'qqizinchi savolga javob bermadingiz";
            }
            else{
               echo " Sizning javobingiz :$foy_ja18";
            }
            ?>
            
         </div>
         <div class="togri_jav">
               <?php echo " To'g'ri javob: $tog_ja18"; ?>
         </div>
         </div>
         <!-- -->
        
         <div class="savol">
            <?php echo " 20) $s19"; ?>
        
         <div class="siz_jav">
            <?php 
            if($foy_ja19 =='')
            {
               echo "Siz o'n olti savolga javob bermadingiz";
            }
            else{
               echo " Sizning javobingiz :$foy_ja19";
            }
            ?>
            
         </div>
         <div class="togri_jav">
               <?php echo " To'g'ri javob: $tog_ja19"; ?>
         </div>
         </div>
      <!-- -->
         </div>


       <!-- Savollarni chiqarish oxiri -->
        </div>
       </div>
    </div>
    
</div>
</body>
</html>

