<?php
include '../../includes/common.php';
 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $action = $_POST['action'];
    $deptcode = $_POST['deptcode'];
    $deptname = isset($_POST['deptname']) ? $_POST['deptname'] : "";
    $deptlocation = isset($_POST['deptlocation']) ? $_POST['deptlocation'] : ""; 

    if ($action == 'create') {
        $res= $officeHandler->createDepartment($deptcode, $deptname, $deptlocation);
        if($res!=0)
        $_SESSION['alert'] = ['type' => 'success', 'message' => 'Dept added successfully.'];
    else
         $_SESSION['alert'] = ['type' => 'danger', 'message' => 'Error:Dept is not inserted!Try Again.'];
  
    } elseif ($action == 'update') {
        $officeHandler->updateDepartment($deptcode, $deptname, $deptlocation);
        $_SESSION['alert'] = ['type' => 'info', 'message' => 'Dept updated successfully.'];
   
    } elseif ($action == 'delete') {
        $officeHandler->deleteDepartment($deptcode);
        $_SESSION['alert'] = ['type' => 'danger', 'message' => 'Dept deleted successfully.'];

    }
}

$departments = $officeHandler->readDepartments();
include 'views/vw_dept.php';
?>
