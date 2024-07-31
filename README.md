# Simple Contact Form
A simple contact form that sends an email to the site owner using PHP, jQuery, AJAX, Bootstrap, CSS, and MySQL.

**Topics**: PHP, Contact Form, Email, AJAX, jQuery, Bootstrap, CSS, MySQL PDO, Web Development

## Features

- Simple contact form
- Email notification to site owner
- Stores messages in the database

### Installation Process

1. **Clone the Repository**:
   ```sh
   git clone https://github.com/yourusername/simple-contact-form.git
   cd simple-contact-form
   ```

2. **Database Setup**:
    - Create a new MySQL database.
    - Import the provided `database.sql` file to set up the necessary table.
    - Update the database configuration in `config.php`.
    - Import the provided SQL file to set up the necessary tables.
     ```sh
     mysql -u yourusername -p contact_form_db < database.sql
     ```

3. **Configure the Database Connection:**
    - Open the `config.php` file and update the database credentials.
      ```php
        <?php
           define('DB_HOST', 'localhost');
           define('DB_NAME', 'contact_form_db');
           define('DB_USER', 'root');
           define('DB_PASS', 'password');
        ?>
      ```
4. **Set Up Email Services:**
    - Update the `send_email.php` file with your email configuration.

5. **Start a Local PHP Server:**
    - Start the PHP built-in server.
      ```sh
      php -S localhost:8000
      ```

6. **Access the Application:**
    - Open your web browser and navigate to `http://localhost:8000`.

## Usage

1. Open the application in your web browser.
2. Fill out the contact form and submit.
3. The message will be sent to the site owner's email and stored in the database.

### File Structure

Here’s a basic file structure for your simple-contact-form application:

```
simple-contact-form/
├── css/
│   └── styles.css
├── js/
│   └── script.js
├── config.php
├── index.php
├── process_form.php
├── send_email.php
└── README.md

```
