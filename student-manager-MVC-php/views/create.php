<?php
    $title = "Add student";

    ob_start();
?>
<style>
        form{
            width: 50%;
            height: 100vh;
            display: flex;
            flex-direction: column;
            text-align: center;
            align-items:center;
            padding-top:0%;
            color:black;
        }
        input{
            width: 80%;
        }
        button{
            width: 30%;
        }
</style>
<form method="post" action="index.php?action=store">
        <lable for="name"><b>Full name</b></lable><br>
        <input type="text" id="name" name="name" style="border-radius:10px"><br>

        <lable for="email"><b>Email</b></lable><br>
        <input type="email" id="eamil" name="email" style="border-radius:10px"><br>

        <button type="submit" name="ajouter" style="background-color:ORANGE;text-decoration:none;padding:2px;border-radius:30px;margin-right:3px;color:white;">ADD</button>
</form>
<?php $content = ob_get_clean(); ?>
<?php include_once 'views/layout.php'; ?>
