<?php
    include_once('../model/model_employee.php');
    include_once('../model/model_office.php');

    if(!isset($_SESSION)){
        session_start();
    }

    if(!isset($_SESSION['employeelist'])){
        $_SESSION['employeelist'] = array();
    }

    function createEmployee(){
        $employee = new employee();
        $employee->setId(uniqid('employee_', true));
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

    function assignEmployeeToOffice($employeeIndex, $officeId){
        $employeeList = &$_SESSION['employeelist']; 
        if(isset($employeeList[$employeeIndex])){
            $employeeList[$employeeIndex]->setOfficeId($officeId);
        }
    }

    function getCurrentOffice($officeId){
        foreach($_SESSION['officelist'] as $office){
            if($office->getId() === $officeId){
                return $office->getNama();
            }
        }
        return "Unemployed";
    }

    if(isset($_POST['button_registeremployee'])){
        createEmployee();
        header("Location: ../view/view_employee.php");
    }

    if(isset($_GET['deleteID'])){
        deleteEmployee($_GET['deleteID']);
        header("Location: ../view/view_employee.php");
    }
    if(isset($_POST['button_assign_employee'])){
        $employeeIndex = $_POST['employee_index'];
        $officeId = $_POST['office_id'];
        assignEmployeeToOffice($employeeIndex, $officeId);
        header("Location: ../view/view_employee_office.php");
    }
?>