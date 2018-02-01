<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="js/jquery.js"></script>
    <script src="js/jquery.form.js"></script>
</head>
<body>
        <form id="ajaxForm" action="file.php" enctype="multipart/form-data" method="post">
        <table><tr>
            <td><input type="text" value="0" name="num"></td>
            <td><input type="file" name="file" id="file1"></td>
            <td><input type="submit" class="btn btn-info" value="保存"></td>
           </tr> 
          </table>  
        </form>
        <script>
        $(":submit").click(function(){
    
            var options={
                         
                        target : ".dis",
                        type : "POST",  
                        beforeSubmit : function(){

                            return true;
                        },  
                        success : function(responseText,statusText){
                            console.log(statusText);
                            console.log(responseText);
                            vm.dd=responseText;
                            alert(0);
                        }    // 提交后的回调函数   
                    }
            if($("#file1").val()!=''){
                $("#ajaxForm").ajaxForm(options);
                $("#ajaxForm").ajaxSubmit(options);

            }
            
        })
        
        </script>
</body>
</html>