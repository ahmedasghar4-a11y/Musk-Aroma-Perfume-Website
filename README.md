# Musk Aroma Perfume Website

A modern perfume e-commerce website developed to provide a clean and engaging shopping experience for men's and women's fragrances, perfume oils, recommendations, offers, and product browsing.

The project combines a responsive front-end with PHP and MySQL components for user authentication and database connectivity. It was developed as a web development project demonstrating interface design, e-commerce concepts, form handling, database integration, and secure authentication practices.

---

## Overview

Musk Aroma is designed as an online perfume store with separate product categories and supporting pages for browsing fragrances, viewing recommendations and offers, managing a shopping cart, and accessing customer account features.

The project includes both client-side pages and server-side PHP components, making it suitable for further development into a complete full-stack e-commerce application.

---

## Features

- Home page and branded landing experience
- Product/shop browsing
- Men's fragrances
- Women's fragrances
- Perfume oils
- Recommended products
- Special offers
- Shopping cart interface
- User login and registration pages
- PHP/MySQL database connectivity
- Server-side authentication
- Password hashing support
- Responsive web interface
- Search interface
- Footer, contact and social sections

---

## Technologies Used

- HTML5
- CSS3
- JavaScript
- PHP
- MySQL
- MySQLi
- Responsive Web Design
- Git and GitHub

---

## Project Structure

```text
Musk-Aroma-Perfume-Website/
│
├── Web_Development_2/
│   ├── images/
│   ├── About.html
│   ├── Men.html
│   ├── Offers.html
│   ├── Perfume Oils.html
│   ├── Perfumehome.html
│   ├── Recommended.html
│   ├── Women.html
│   ├── products.html
│   ├── cart.html
│   ├── cart-styles.css
│   ├── styles.css
│   ├── perfumestyles.css
│   ├── login.html
│   ├── register.html
│   ├── authentication.php
│   └── connection.php
│
└── README.md
```

---

## Getting Started

### 1. Clone or download the repository

Clone the repository using Git or download the project as a ZIP file from GitHub.

### 2. Open the project

Open the `Web_Development_2` folder in your preferred code editor.

### 3. Front-end pages

The HTML pages can be inspected directly in a browser. For the PHP authentication features, use a PHP-enabled local or hosted server rather than opening the PHP files directly from the file system.

### 4. Database configuration

The PHP application expects database credentials to be supplied through server environment variables rather than stored in the repository.

Set the following variables on the server:

```text
DB_HOST=your-database-host
DB_USERNAME=your-database-username
DB_PASSWORD=your-database-password
DB_NAME=your-database-name
```

### 5. Run with a PHP server

For a local PHP installation, the project can be served with PHP's built-in development server from the project directory, for example:

```bash
php -S localhost:8000
```

Then open the local site in your browser.

> The database must also be available and configured for the authentication features to work.

---

## Security

Security-sensitive configuration should never be committed to GitHub.

The project uses environment variables for database credentials and prepared SQL statements for authentication queries. Password verification is designed to use PHP's secure `password_hash()` / `password_verify()` approach.

Before deploying the project:

- Use a new database password if credentials were previously exposed.
- Configure database credentials through server environment variables.
- Never commit `.env` files, database passwords, API keys, or other secrets.
- Use HTTPS in production.
- Keep PHP and MySQL updated.
- Use secure, hashed passwords for all user accounts.

---

## Learning Outcomes

This project demonstrates and strengthens understanding of:

- HTML and semantic page structure
- CSS styling and responsive layouts
- JavaScript interactions
- E-commerce website structure
- Product categorisation and browsing
- Shopping cart concepts
- PHP server-side programming
- MySQL database connectivity
- Secure authentication practices
- Form validation and handling
- Git and GitHub project management
- Debugging and improving an existing web application

---

## Future Improvements

Potential enhancements include:

- Complete database-backed product catalogue
- Secure server-side registration flow
- Persistent shopping cart storage
- Product search and filtering
- Product detail pages
- Checkout and order management
- Online payment integration
- Customer account dashboard
- Password reset functionality
- Email verification
- Role-based access control
- CSRF protection for state-changing forms
- Automated testing
- Improved accessibility and WCAG compliance
- Production deployment and monitoring

---

## Author

**Ahmed Asghar Mirza**

BSc (Hons) Computer Science

GitHub: https://github.com/ahmedasghar4-a11y

---

## License

This project is intended for educational and portfolio purposes.
