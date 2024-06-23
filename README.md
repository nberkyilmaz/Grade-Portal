# GradePortal

## Description

GradePortal is a comprehensive Student Information Management System designed to streamline the management of student records, grades, and course enrollments. This system provides functionalities for user registration, secure login, updating student marks, dropping courses, and displaying final grades in an organized manner.

## Key Features

1. **User Registration and Authentication:**
   - Secure user registration with unique username verification.
   - User login with session management for secure access.

2. **Grade Management:**
   - Update student marks for different courses and assessments.
   - Calculate and display final grades based on weighted averages.

3. **Course Management:**
   - Drop courses for students with ease.
   - Maintain accurate records of student enrollments and course completions.

4. **Grade Display:**
   - Generate and display a detailed report of student grades.
   - Provide a user-friendly interface for viewing grades and academic progress.

5. **Security:**
   - Ensure data integrity and security with prepared statements to prevent SQL injection.
   - Manage user sessions to protect sensitive information.

## Technologies Used

- **Backend:** PHP for server-side scripting.
- **Database:** MySQL for managing student, course, and grade data.
- **Frontend:** HTML and CSS for creating a responsive and user-friendly interface.

## Use Cases

- **Administrators:** Can manage student information, update marks, and handle course enrollments and drops.
- **Students:** Can log in to view their grades and academic progress.

## Getting Started

### Prerequisites

- PHP 7.0 or higher
- MySQL 5.6 or higher
- Web server (e.g., Apache)

### Installation

1. Clone the repository:
    ```sh
    git clone https://github.com/yourusername/GradePortal.git
    ```
2. Navigate to the project directory:
    ```sh
    cd GradePortal
    ```
3. Import the database schema:
    ```sh
    mysql -u root -p < database/schema.sql
    ```
4. Configure the database connection in `config.php`:
    ```php
    $conn = mysqli_connect("localhost", "username", "password", "database_name");
    ```

### Usage

1. Open your web browser and navigate to the project directory (e.g., `http://localhost/GradePortal`).
2. Register a new user or log in with an existing account.
3. Use the dashboard to manage student marks, courses, and view grades.

## Contributing

Contributions are welcome! Please fork the repository and submit a pull request for review.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

## Acknowledgements

- Thanks to all contributors and supporters.

