<?php
    require_once 'controller/student_controller.php';
    if(isset ($_GET['action'])){
        $action = $_GET['action'];
        switch($action){
            case'create' : 
                createAction();
            break;
            case 'list' : 
                listStudentAction();
            break;
            case 'edit' : 
                editAction();
            break;
            case 'delete' : 
                destroyAction();
            break;
            case 'store' : 
                storeAction();
            break;
            case 'update' : 
                updateAction();
            break;
    

            
        }
    }
    else 
                listStudentAction();
?>
