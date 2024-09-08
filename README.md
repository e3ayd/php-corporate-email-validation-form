# Email Validation Form

This project is a simple PHP form that collects the user's first name, last name, and email address. The form includes validation to ensure that the email address is not from a free email provider such as Gmail, Yahoo, or Hotmail.

## Features

- Collects user information: First Name, Last Name, and Email.
- Validates email addresses to reject free email providers.
- Displays success or error messages based on the validation result.

## Installation

1. Clone the repository to your local machine.
2. Place the `index.php` file in the root directory of your PHP server.

## Usage

To use the form, simply navigate to the `index.php` file in your web browser. Enter your first name, last name, and email address. If you enter an email from a free provider, you'll receive an error message.

### Example Usage

1. **Valid Email:**

   - First Name: John
   - Last Name: Doe
   - Email: john.doe@company.com

   **Result:** "Form submitted successfully!"

2. **Invalid Email:**

   - First Name: John
   - Last Name: Doe
   - Email: john.doe@gmail.com

   **Result:** "Free email providers are not allowed. Please use a professional or company email address."

## Customization

- **Adding/Removing Email Providers:** You can customize the list of free email providers by editing the `$free_email_providers` array in the `index.php` file.
- **Further Processing:** After successful validation, you can add your own logic to process the form data, such as saving it to a database or sending an email.

## Contribution

To contribute, please submit a pull request. We welcome all suggestions and improvements!

## License

This project is licensed under the MIT License. For more information, please see the `LICENSE` file.
