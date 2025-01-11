<?php
// Initialize variables for error and success messages
$error = $success = "";

// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Connect to the database
$conn = new mysqli('localhost', 'root', '', 'create_database'); // Update with your credentials

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data and sanitize it
    $firstname = htmlspecialchars(trim($_POST['firstname']));
    $lastname = htmlspecialchars(trim($_POST['lastname']));
    $email = htmlspecialchars(trim($_POST['email']));
    $gender = htmlspecialchars(trim($_POST['gender']));
    $age = htmlspecialchars(trim($_POST['age']));
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Check if the email already exists
    $check_email = $conn->prepare("SELECT * FROM users WHERE LOWER(email) = LOWER(?)");
    $check_email->bind_param("s", $email);
    $check_email->execute();
    $result = $check_email->get_result();

    if ($result->num_rows > 0) {
        $error = "This email is already registered. Please login or use a different email.";
    } else {
        // Password validations
        if (!preg_match('/^[a-zA-Z0-9]+$/', $password)) {
            $error = "Password must be alphanumeric (only letters and numbers).";
        } elseif ($password !== $confirm_password) {
            $error = "Passwords do not match!";
        } else {
            // Hash the password for security
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Insert the new user into the database
            $stmt = $conn->prepare("INSERT INTO users (firstname, lastname, email, gender, age, password) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssis", $firstname, $lastname, $email, $gender, $age, $hashed_password);

            if ($stmt->execute()) {
                $success = "Registration successful! You can now log in.";
            } else {
                $error = "Error: " . $stmt->error;
            }

            $stmt->close();
        }
    }

    $check_email->close();
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Register</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body class="bg-dark" style="--bs-bg-opacity: .95;">
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="card shadow-lg border-0 rounded-lg mt-5 bg-dark">
                            <div class="card-header">
                                <h3 class="text-center font-weight-light my-4 text-light">Create Account</h3>
                            </div>
                            <div class="card-body">
                                <!-- Display error or success messages -->
                                <?php if ($error): ?>
                                    <div class="alert alert-danger"><?php echo $error; ?></div>
                                <?php elseif ($success): ?>
                                    <div class="alert alert-success"><?php echo $success; ?></div>
                                <?php endif; ?>
                                <form action="" method="post">
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <h6>Enter your first name</h6>
                                                <input class="form-control" id="inputFirstName" type="text" name="firstname" placeholder="Enter your first name" required />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <h6>Enter your last name</h6>
                                                <input class="form-control" id="inputLastName" type="text" name="lastname" placeholder="Enter your last name" required />
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Gender Selection with Radio Buttons -->
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <h6>Select your gender</h6>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="genderMale" name="gender" value="male" required />
                                                <label class="form-check-label" for="genderMale">Male</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="genderFemale" name="gender" value="female" required />
                                                <label class="form-check-label" for="genderFemale">Female</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="genderOther" name="gender" value="other" required />
                                                <label class="form-check-label" for="genderOther">Other</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h6>Enter your age</h6>
                                            <input class="form-control" id="inputAge" type="number" name="age" placeholder="Enter your age" min="0" max="120" required />
                                        </div>
                                    </div>

                                    <div class="form-floating mb-3">
                                    <h6>Email</h6>
                                        <input class="form-control" id="inputEmail" type="email" name="email" placeholder="name@example.com" required />
                                        <label for="inputEmail"></label>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                        <h6>Password</h6>
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" id="inputPassword" type="password" name="password" placeholder="Create a password" required />
                                                <label for="inputPassword"></label>
                                            </div>
                                            <!-- Show Password Checkbox -->
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="showPassword" onclick="togglePassword()"> 
                                                <label class="form-check-label" for="showPassword">Show Password</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                        <h6>Confirm Password</h6>
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" id="inputPasswordConfirm" type="password" name="confirm_password" placeholder="Confirm password" required />
                                                <label for="inputPasswordConfirm">Confirm Password</label>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Register</button>
                                </form>
                            </div>
                            <div class="card-footer text-center py-3">
                                <div class="small">
                                    <a href="login.php" class="text-muted">Have an account? Go to login</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <div id="layoutAuthentication_footer">
        <footer class="py-4 bg-light mt-auto bg-dark">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Your Website 2023</div>
                    <div>
                        <a href="#" class="text-muted">Privacy Policy</a>
                        &middot;
                        <a href="#" class="text-muted">Terms & Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>

<script>
// Function to toggle password visibility
function togglePassword() {
    var passwordField = document.getElementById('inputPassword');
    var confirmPasswordField = document.getElementById('inputPasswordConfirm');
    
    if (passwordField.type === 'password') {
        passwordField.type = 'text';
        confirmPasswordField.type = 'text';
    } else {
        passwordField.type = 'password';
        confirmPasswordField.type = 'password';
    }
}
</script>
</body>
</html>
