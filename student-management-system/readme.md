# Student Management System

This is a simple web application for managing student records, including attendance, marks, and performance tracking. It allows users to add, delete, and search for student records.

## Features

- **Manage Attendance Records:** See attendance details of all students.
- **Manage Marks:** Track marks for various subjects.
- **Add New Students:** Add new students to the database.
- **Delete Students:** Remove existing students from the database.
- **Search Functionality:** Search for students by name to find specific records.

## Technologies Used

- **Frontend:** HTML, CSS, JavaScript
- **Backend:** PHP
- **Database:** MySQL

## How to Use

1. **download the zip file**
 
2. **after extracting the zip file** 
 - put the folder student-management-project in  (`xampp/htdocs`) into your MySQL database.

3. **Set Up Database**

   - Import the database schema (`dummy dataset/dummyset.sql`) into your MySQL database.

4. **Configure Database Connection**

   - Update `connectionString.php` with your MySQL database credentials:

     ```php
     <?php
     $host = "localhost"; // Database host
     $user = "root"; // Database username
     $password = ""; // Database password
     $database = "your_database"; // Database name
     
     $con = mysqli_connect($host, $user, $password, $database);
     
     if (mysqli_connect_errno()) {
         die("Failed to connect to MySQL: " . mysqli_connect_error());
     }
     ?>
     ```

5. **Run the Application**

   - Start a local server (e.g., using XAMPP, WAMP, or any other PHP server).
   - Open the application in your web browser:

     ```
     http://localhost/student-management-system/
     ```

6. **Usage**

   - Navigate through the different sections:
     - **Attendance:** View and manage student attendance records.
     - **Marks:** Track marks for subjects.
     - **Add:** Add new students.
     - **Delete:** Remove existing students.
     - **Search:** Search for students by name.

### Notes:

- **Database Schema (`dummy dataset`)**: Include a `dummyset.sql` file in your project that defines the structure of your MySQL database tables (`attendance`, `marks`, `performance`,`admin`.).
- **Creating admin account**: add username password in admin table.
- **Login Credential**: the sql file create an admin user `shrish` and password `1234`