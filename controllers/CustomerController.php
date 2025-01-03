<?php
class CustomerController {
    private $customerDB;

    public function __construct() {
        $this->customerDB = new CustomerDB();
    }

    # related to /list.php
    public function listCustomers(): void {
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $customers = $this->customerDB->getAllCustomers(page: $page);
        require_once('views/list.php');
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
        } else {
            require_once('views/add.php');
        }
    }
    
    # related to /edit.php
    public function editCustomer($id): void {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') { // Nếu form gửi dữ liệu
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
    # related to /delete.php - maybe run =))))
    public function deleteCustomer($id): void {
        if ($id > 0) {
            $this->customerDB->deleteCustomer(id: $id); // Xóa khách hàng khỏi DB
            header(header: 'Location: index.php?controller=customer&action=list'); // Quay về danh sách khách hàng
        } else {
            echo "ID không hợp lệ!";
        }
    }
}

?>