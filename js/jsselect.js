$(document).ready(function()
    {
$('#sinf').change(function(){
    var sinf_id = $(this).val();
    $.ajax ({
        url:"fan_lar.php",
        method:"POST",
        data: {sin_id:sinf_id},
        dataType:"text",
        success :function (data)
        {
        $('#fan').html(data);
        }

       });
      });
    });
    $(document).ready(function(){
        $('#form').parsley();
    });

