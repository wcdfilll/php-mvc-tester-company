# PHP MVC Tester Company

A demo repository for a company system built with **PHP**, **MVC (Model-View-Controller)** architecture, and **SQL** to manage customers efficiently.

---

## 📋 Features
This project includes the following functionalities:
- **Class `Customer`**: Represents a customer.
- **Class `CustomerDB`**: Provides methods to interact with the database.

### Pages
- **`list.php`**: Displays a paginated list of customers (6 customers per page) with their name, email, and address.
- **`add.php`**: Provides a form to add a new customer.
- **`edit.php`**: Contains a form to update customer details.
- **`delete.php`**: Contains a form to delete a customer.
- **`view.php`**: Displays detailed information about a customer.

- **Class `CustomerController`**: Handles user actions and coordinates the workflow.

---

## 📂 Project Structure
The project is organized as follows:

php-mvc-tester-company/
├── models/
│   ├── Customer.php
│   └── CustomerDB.php
├── views/
│   ├── list.php
│   ├── add.php
│   ├── edit.php
│   ├── delete.php
│   └── view.php
├── controllers/
│   └── CustomerController.php
├── index.php
└── customers.sql (sql export from PHPMyAdmin)
---

## 🚀 Environment Setup for Testing
To test this project, ensure you have the following environment configured:

1. **Local Development Environment**:  
   [Laragon](https://laragon.org/) (Recommended for a lightweight and flexible local server setup)

2. **PHP Version**:  
   `PHP 8.1+`

3. **Database**:  
   **MariaDB/MySQL** Server  
   - Username: `root`  
   - Password: *(leave empty)*

---

## 💡 How to Run
1. Clone this repository:
   ```bash
   git clone https://github.com/your-username/php-mvc-tester-company.git
