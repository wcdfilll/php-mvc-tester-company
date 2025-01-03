<?php
class CustomerController {
    private $customerDB;

    public function __construct() {
        $this->customerDB = new CustomerDB();
    }

    # related to /list.php
    public function listCustomers(): void {
        $customers = $this->customerDB->getAllCustomers();
        require_once('views/list.php'); # require_once() help defined once
    }

    # releated to /view.php
    public function viewCustomers($id): void {
        $customer = $this->customerDB->getCustomerById(id: $id);
        require_once('views/view.php');
    }

    # related to /add.php
    public function addCustomer(): void {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // form
            $name = $_POST['name'];
            $email = $_POST['email'];
            $address = $_POST['address'];
    
            $customer = new Customer(id: null, name: $name, email: $email, address: $address);
            
            $this->customerDB->insertCustomer(customer: $customer);
            header(header: 'Location: index.php?controller=customer&action=list');
        } else {
            require_once('views/add.php');
        }
    }
    
    # related to /edit.php
    public function editCustomer($id): void {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // form
            $name = $_POST['name'];
            $email = $_POST['email'];
            $address = $_POST['address'];
    
            $customer = new Customer(id: $id, name: $name, email: $email, address: $address);
    
            $this->customerDB->updateCustomer(customer: $customer);
            header(header: 'Location: index.php?controller=customer&action=list');
        } else {
            $customer = $this->customerDB->getCustomerById(id: $id);
            require_once('views/edit.php');
        }
    }

    # related to /delete.php
    public function deleteCustomer($id): void {
    if ($id > 0) {
        if (isset($_GET['confirm']) && $_GET['confirm'] === 'yes') {
            // Thực hiện xóa khi đã xác nhận
            $this->customerDB->deleteCustomer(id: $id);
            header(header: 'Location: index.php?controller=customer&action=list');
        } else {
            // Hiển thị form xác nhận
            $customer = $this->customerDB->getCustomerById(id: $id);
            if ($customer) {
                require_once('views/delete.php');
            } else {
                echo "Không tìm thấy khách hàng!";
            }
        }
    } else {
        echo "ID không hợp lệ!";
    }
}
}

?>