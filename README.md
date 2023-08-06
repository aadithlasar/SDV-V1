# Student Database Viewe

## Table of Contents:-

1. [Introduction](#introduction)
2. [Features](#features)
3. [Requirements](#requirements)
4. [Installation](#installation)
5. [Usage](#usage)
6. [Contributing](#contributing)
7. [License](#license)

## Introduction:-

Student Database Viewer is a lightweight web-based application that allows users to view student information stored in a MySQL database table. The application is built using PHP for server-side scripting and HTML for the user interface. It provides a simple and user-friendly interface to access student records efficiently.

## Features:-

- View student information from the database in a tabular format.
- Database table with the following fields:
  - `rollNo`: Unique identifier for each student (integer or string).
  - `studName`: Name of the student (string).
  - `studDept`: Department in which the student is enrolled (string).
  - `passingYear`: Year in which the student is expected to graduate (integer).
  - `classGrades`: Grades achieved by the student (string), with possible values: "First Class", "Second Class", or "Pass".

## Requirements

Before using the Student Database Viewer, ensure you have the following:

- PHP (version 7.0 or higher) installed.
- MySQL server (version 5.6 or higher) with a database created and configured.
- A web server (e.g., Apache or Nginx) to host the application.
- Web browser to access and interact with the UI.

## Installation

1. Clone this repository to your local machine or web server.
   ```
   git clone https://github.com/your-username/student-database-viewer.git
   ```

2. Import the `database.sql` file into your MySQL database to create the required table and entries.

3. Configure the database connection in the `config.php` file. Provide the appropriate database credentials (hostname, username, password, database name) as per your MySQL setup.

## Usage

1. Ensure your web server is running and configured correctly.

2. Open your web browser and navigate to the location where you placed the application files (e.g., `http://localhost/student-database-viewer`).

3. The main page will display a list of all student records in the database.

4. Use the table to view student information, including roll number, name, department, passing year, and grades.

## Contributing

Contributions are welcome to improve the application's functionality, UI/UX, or to fix any issues. If you want to contribute, follow these steps:

1. Fork the repository.

2. Create a new branch for your feature or bug fix.

3. Make your changes and commit them with descriptive commit messages.

4. Push the changes to your fork.

5. Submit a pull request to the main repository.

## License

This project is open-source and licensed under the [MIT License](LICENSE). You are free to use, modify, and distribute the code for personal or commercial purposes

---

Feel free to explore and use the Student Database Viewer to efficiently access and display student information. If you encounter any issues or have suggestions for improvement, please don't hesitate to reach out. Happy viewing!
