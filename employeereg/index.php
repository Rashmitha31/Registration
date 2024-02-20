<?php
require_once('config.php');

$displayMessage = '';
$enteredData = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $employeeName = $_POST['employeeName'];
    $employeeId = $_POST['employeeId'];
    $department = $_POST['department'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $designation = $_POST['designation'];
    $salary = $_POST['salary'];

    // Validate data (you may add more validation as needed)

    // Insert data into database
    $conn = new mysqli("localhost:3008", "root", "chat", "application");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO employee (employee_name, employee_id, department, dob, gender, designation, salary) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssd", $employeeName, $employeeId, $department, $dob, $gender, $designation, $salary);

    if ($stmt->execute()) {
        $displayMessage = 'Employee record inserted successfully.';
        // Clear form fields
        $enteredData = [];
    } else {
        $displayMessage = 'Error: ' . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Employee Registration </title>
</head>
<body>
<div>
    <?php echo $displayMessage; ?>
</div>
<h2>Employee Management Application</h2>
<form id="employeeForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <div class="form-group">
        <label for="employeeName">Employee Name:</label>
        <input type="text" id="employeeName" name="employeeName" maxlength="30" required>
    </div>
    <div class="form-group">
        <label for="employeeId">Employee ID:</label>
        <input type="text" id="employeeId" name="employeeId" required>
    </div>
    <div class="form-group">
        <label for="department">Department:</label>
        <select id="department" name="department" required>
            <option value="">Select Department</option>
            <option value="HR">HR</option>
            <option value="Finance">Finance</option>
            <option value="IT">IT</option>
            <!-- Add more departments if needed -->
        </select>
    </div>
    <div class="form-group">
        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" required>
    </div>
    <div class="form-group">
        <label>Gender:</label>
        <input type="radio" id="male" name="gender" value="male" required>
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="female" required>
        <label for="female">Female</label>
    </div>
    <div class="form-group">
        <label for="designation">Designation:</label>
        <input type="text" id="designation" name="designation" required>
    </div>
    <div class="form-group">
        <label for="salary">Salary:</label>
        <input type="number" id="salary" name="salary" maxlength="8" required>
        <small>Max 8 digits</small>
    </div>
    <button type="submit" name="create">Submit</button>
</form>
<script src="index.js"></script>
</body>
</html>   