<?php

$serverName = "MART"; // SQL Server host
$username = "root"; // SQL Server username
$password = "Astroinimi.99"; // SQL Server password
$dbname = "MART_PATIENTS"; // Database name

#$connectionOptions = array(
    #"Database" => "MART_PATIENTS",
    #"Uid" => "root"
#);

// Establish connection
$conn = new mysqli($serverName, $username, $password, $dbname);

if ($conn === false) {
    die("Connection failed: " . print_r("Connection failed:" .  true));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize all form fields
    $fields = [
        'first_n', 'last_n', 'gender', 'DOB', 'number', 'email', 'address', 'height', 'weight',
        'genotype', 'blood-group', 'health-con', 'smoke', 'drink', 'Excercise', 'meditation', 'other-hobbies',
        'test', 'consult', 'ar-tech', 'pg-testing', 'donation', 'hormone-man', 'prev-treat',
        'E-first-name-1', 'E-last-name-1', 'E-relation-1', 'E-address-1', 'E-number-1', 'E-email-1',
        'E-first-name-2', 'E-last-name-2', 'E-relation-2', 'E-address-2', 'E-number-2', 'E-email-2'
    ];

    $data = [];
    foreach ($fields as $field) {
        if (!isset($_POST[$field])) {
            die("Error: Missing required field '$field'.");
        }
        $data[$field] = htmlspecialchars(trim($_POST[$field]));
    }

    // Prepare the SQL statement
    $sql = "INSERT INTO users (
        first_name, last_name, gender, date_of_birth, number, email, address, height, weight, genotype, blood_group, health_con, smoke, drink, Excercise, meditation, other_hobbies, test, consult, A_R_T, P_G_T, donation, hormones, Previous_treatment,
        emergency_contact_1_first_name, emergency_contact_1_last_name, emergency_contact_1_relation, emergency_contact_1_address, emergency_contact_1_number, emergency_contact_1_email,
        emergency_contact_2_first_name, emergency_contact_2_last_name, emergency_contact_2_relation, emergency_contact_2_address, emergency_contact_2_number, emergency_contact_2_email
    ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $params = [
        $data['first_n'], $data['last_n'], $data['gender'], $data['DOB'], $data['number'], $data['email'], $data['address'], $data['height'], $data['weight'],
        $data['genotype'], $data['blood-group'], $data['health-con'], $data['smoke'], $data['drink'], $data['Excercise'], $data['meditation'], $data['other-hobbies'],
        $data['test'], $data['consult'], $data['ar-tech'], $data['pg-testing'], $data['donation'], $data['hormone-man'], $data['prev-treat'],
        $data['E-first-name-1'], $data['E-last-name-1'], $data['E-relation-1'], $data['E-address-1'], $data['E-number-1'], $data['E-email-1'],
        $data['E-first-name-2'], $data['E-last-name-2'], $data['E-relation-2'], $data['E-address-2'], $data['E-number-2'], $data['E-email-2']
    ];

    $stmt = sqlsrv_query($conn, $sql, $params);

    if ($stmt) {
        echo "New record created successfully.<br>";
        // Optionally, include a display file or redirect:
        // include('display.php');
    } else {
        echo "Error inserting record:<br>";
        foreach (sqlsrv_errors() as $error) {
            echo "SQLSTATE: " . $error['SQLSTATE'] . "<br>";
            echo "Code: " . $error['code'] . "<br>";
            echo "Message: " . $error['message'] . "<br>";
        }
    }
}

sqlsrv_close($conn);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Here, save to database or send email (e.g., mail($email, "Contact", $message);)
    echo "<h2>Thank you, $name!</h2><p>Your message has been received: $message</p><p>From: $email</p>";
    echo '<a href="contact.html">Back to form</a>';
} else {
    echo "Invalid request.";
}
?>
