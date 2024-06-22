<?php
    $title = "List of students";

    ob_start();
?>
<table style="background-color:orange;margin-right:2%;margin-left:2%;width:85%">
    <tr style="border-bottom: 2px solid">
        <td>ID</td>
        <td>FULL NAME</td>
        <td>EMAIL</td>
        <td>OPERATION</td>
    </tr>
    <?php
        foreach ($students as $row){
    ?>
        <tr style="border-bottom: 1px solid">
            <td><?php echo $row['ID'] ?></td>
            <td><?php echo $row['FULL_NAME'] ?></td>
            <td><?php echo $row['EMAIL'] ?></td>                   
            <td>
                <a href="index.php?action=edit&id=<?php echo $row['ID'] ?>" style="background-color:Green;text-decoration:none;padding:2px;border-radius:5px;margin-right:10px;color:white;">Modifier</a>
                <a href="index.php?action=delete&id=<?php echo $row['ID'] ?>" style="background-color:red;text-decoration:none;padding:2px;border-radius:3px;margin-right:3px;color:white;">Supprimer</a>
            </td>
        </tr>
    <?php
        }
    ?>
</table>
<?php $content = ob_get_clean(); ?>
<?php include_once 'views/layout.php'; ?>
