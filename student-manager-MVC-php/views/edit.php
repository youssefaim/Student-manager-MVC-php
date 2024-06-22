<?php
    $title = "Modify student";

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
<form method="post" action="index.php?action=update" >
        <lable for="name">Full name</lable><br>
        <input type="text" id="name" name="name" value="<?php echo $data[1] ;?>"><br>

        <lable for="email">Email</lable><br>
        <input type="text" id="email" name="email" value="<?php echo $data[2]; ?>"><br>

        <input type="hidden" value="<?php echo $data[0] ?>" name="id">

        <button type="submit" style="background-color:ORANGE;text-decoration:none;padding:2px;border-radius:30px;margin-right:3px;color:white;">MODIFY</button>
</form>
<?php $content = ob_get_clean(); ?>
<?php include_once 'views/layout.php'; ?>
