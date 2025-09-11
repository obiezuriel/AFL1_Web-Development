<?php
include_once('../model/model_employee.php');
include_once('../model/model_office.php');
if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['officelist'])) {
    $_SESSION['officelist'] = array();
}

function createOffice()
{
    $office = new office();
    $office->setId(uniqid('office_', true));
    $office->setNama($_POST['nama']);
    $office->setAlamat($_POST['alamat']);
    $office->setKota($_POST['kota']);
    $office->setTelepon($_POST['telepon']);
    array_push($_SESSION['officelist'], $office);
}

function getAllOffice()
{
    return $_SESSION['officelist'];
}
function getOfficeById($officeId)
{
    foreach ($_SESSION['officelist'] as $office) {
        if ($office->getId() === $officeId) {
            return $office;
        }
    }
    return null;
}
function deleteOffice($officeIndex)
{
    unset($_SESSION['officelist'][$officeIndex]);
}

if (isset($_POST['button_registeroffice'])) {
    createOffice();
    header("Location: ../view/view_office.php");
}

if (isset($_GET['deleteID'])) {
    deleteOffice($_GET['deleteID']);
    header("Location: ../view/view_office.php");
}
