<?php
    include('../model/model_employee.php');
    include('../model/model_office.php');
    session_start();

    if(!isset($_SESSION['employeelist'])){
        $_SESSION['employeelist'] = array();
    }

    function createEmployee(){
        $employee = new employee();
        $employee->setNama($_POST['nama']);
        $employee->setJabatan($_POST['jabatan']);
        $employee->setUsia($_POST['usia']);
        array_push($_SESSION['employeelist'], $employee);
    }

    function getAllEmployee(){
        return $_SESSION['employeelist'];
    }

    function deleteEmployee($employeeIndex){
        unset($_SESSION['employeelist'][$employeeIndex]);
    }

    if(isset($_POST['button_registeremployee'])){
        createEmployee();
        header("Location: ../view/view_employee.php");
    }

    if(isset($_GET['deleteID'])){
        deleteEmployee($_GET['deleteID']);
        header("Location: ../view/view_employee.php");
    }
?>