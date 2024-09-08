<?php
// Define an array of free email providers
$free_email_providers = [
    'gmail.com',
    'yahoo.com',
    'hotmail.com',
    'outlook.com'
];

$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $first_name = trim($_POST['first_name']);
    $last_name = trim($_POST['last_name']);
    $email = trim($_POST['email']);

    // Extract domain from email
    $email_domain = substr(strrchr($email, "@"), 1);

    // Validate email domain
    if (in_array($email_domain, $free_email_providers)) {
        $error = 'Free email providers are not allowed. Please use a professional or company email address.';
    } else {
        // Process the form (e.g., save to the database)
        $success = 'Form submitted successfully!';
        // You can add further processing here, like saving to a database
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Email Validation Form</title>
</head>
<body>
    <h1>Email Validation Form</h1>

    <?php if ($error): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>

    <?php if ($success): ?>
        <p style="color: green;"><?php echo $success; ?></p>
    <?php endif; ?>

    <form action="" method="POST">
        <label for="first_name">First Name:</label><br>
        <input type="text" id="first_name" name="first_name" required><br><br>

        <label for="last_name">Last Name:</label><br>
        <input type="text" id="last_name" name="last_name" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
