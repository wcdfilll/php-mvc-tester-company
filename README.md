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
├── models/                    # Business logic and database interaction
│   ├── Customer.php           # Defines the Customer class
│   └── CustomerDB.php         # Contains methods to interact with the database
├── views/                     # User interface files
│   ├── list.php               # Displays a paginated list of customers
│   ├── add.php                # Form to add a new customer
│   ├── edit.php               # Form to edit customer details
│   ├── delete.php             # Form to delete a customer
│   └── view.php               # Displays detailed customer information
├── controllers/               # Handles user input and orchestrates the workflow
│   └── CustomerController.php # Controller class for managing customers
└── index.php                  # Application entry point

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
