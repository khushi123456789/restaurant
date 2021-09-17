<?php 

    if(isset($_POST['btn-send']))
    {
       $UserName = $_POST['UName'];
       $Email = $_POST['Email'];
       
       $Msg = $_POST['msg'];

       if(empty($UserName) || empty($Email)  || empty($Msg))
       {
           header('location:web.php?error');
       }
       else
       {
           $to = "abc@gmail.com";
           if(mail($to,$Msg,$Email))
           {
               header("location:web.php?success");
           }
       }
    }
    else
    {
        header("location:web.php");
    }
?>