<?php


function sinf_s()
{

    include ('db.php');
    $outop ='';
    $db = "Select * from `sinflars` ORDER BY sinflar ";
    $natija = mysqli_query($conn,$db);

    while($row = mysqli_fetch_array($natija))
    {
        $outop .= '<option  value= "'.$row["id"].'" > '.$row["sinflar"].'</option>';
    }
  return $outop;

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test online</title>
    <link rel="icon" href="/img/icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="/css/parsley.css">
    <link rel="stylesheet" href="/css/index.css">
    <script src="/js/parsley.min.js"></script>
</head>
<body>
    <div class="loadin"></div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<div class="container">
    <div class="row justify-content-center">
     <div class="col-sm-8">
         <div class="card mt-5 p-3 ">  
             <h2 align="center" class="h">Online test tizimi</h2>
         <!-- Ma'lumotlar to'plami formasi test boshi -->
<form action="/test.php" method="post" id="form" class="form-control " data-parsley-validate = ''>
    <div class=" mt-3" >
        <label for="Ism kiriting" class="form-label">Ismingizni kiriting</label>
        <input  type="text" title="Ismingizni kiriting va e'tiborli bo'ling belgi raqam ishlatmang" data-parsley-length="[3, 10]"   name="ism" class="form-control  p-2" maxlength = '15' placeholder="Ism kiritishda e'tiborli bo'ling" required = "">
    </div>
<!-- select sinf boshi -->
    <div class="mb-2">
        <label for="Sinfni tanlang" class="form-label">Sinfni tanlang</label>
        <select name="sinf" id="sinf" class="form-control" required = ''>
            <option value="" selected disabled> -- Sinfni tanlang -- </option>
            <?php echo  sinf_s() ; ?>
        </select>
    </div>
<!-- select sinf oxiri -->
<!-- select fan boshi -->
    <div class="mb-2">
    <label for="fanlar" class="form-label">Fanni tanlang</label>
        <select name="fan" id="fan" class="form-control" required>
        <option value="" selected disabled > --Fanni tanlang-- </option>

        </select>
    </div>
<!-- select fan oxiri -->
<div class="mb-2"> 
<input  type="submit" value="Tasdiqlang" class="btn btn-success">
<input type="reset" value="Tozalash" class="btn btn-info">
</div>

</form>

</div>
<!-- Ma'lumotlar to'plami formasi test boshi -->


        </div>
    </div>
</div>
 

</body>
</html>
<script src="/js/jsselect.js"></script>



