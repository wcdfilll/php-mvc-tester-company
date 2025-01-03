<?php
require_once('controllers/CustomerController.php');
require_once('models/Customer.php');
require_once('models/CustomerDB.php');

$controller = new CustomerController();
$action = $_GET['action'] ?? 'list';
$id = $_GET['id'] ?? null;

switch($action) {
    case 'list':
        $controller->listCustomers();
        break;
    case 'view':
        if($id) {
            $controller->viewCustomers(id: $id);
        }
        break;
    case 'add':
        $controller->addCustomer();
        break;
    case 'edit':
        if($id) {
            $controller->editCustomer(id: $id);
        }
        break;
    case 'delete':
        if($id) {
            $controller->deleteCustomer(id: $id);
        }
        break;
    default:
        $controller->listCustomers();
}
?>