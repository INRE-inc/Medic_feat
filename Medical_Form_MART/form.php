<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_n = htmlspecialchars($_POST['first_n']);
    $last_n = htmlspecialchars($_POST['last_n']);
    $gender = htmlspecialchars($_POST['gender']);
    $birth_date = htmlspecialchars($_POST['DOB']);
    $email = htmlspecialchars($_POST['email']);
    $Phone_num = htmlspecialchars($_POST['phone']);

    $fields = [
        'first_n', 'last_n', 'gender', 'DOB', 'number', 'email', 'address', 'height', 'weight',
        'genotype', 'blood-group', 'health-con', 'smoke', 'drink', 'Excercise', 'meditation', 'other-hobbies',
        'test', 'consult', 'ar-tech', 'pg-testing', 'donation', 'hormone-man', 'prev-treat',
        'E-first-name-1', 'E-last-name-1', 'E-relation-1', 'E-address-1', 'E-number-1', 'E-email-1',
        'E-first-name-2', 'E-last-name-2', 'E-relation-2', 'E-address-2', 'E-number-2', 'E-email-2'
    ];

    // Here, save to database or send email (e.g., mail($email, "Contact", $message);)

    "CREATE TABLE users IF NOT EXIST(
    first_name CHAR ,
    last_name CHAR,
    gender CHAR,
    date_of_birth DATE,
    number INT,
    email VARCHAR, 
    address VARCHAR, 
    height INT, 
    weight INT, 
    genotype CHAR, 
    blood_group CHAR, 
    health_con CHAR, 
    smoke BIT 
    drink BIT, 
    Excercise BIT, 
    meditation BIT, 
    other_hobbies VARCHAR, 
    test BIT,
    consult BIT, 
    A_R_T BIT, 
    P_G_T BIT, 
    donation BIT, 
    hormones BIT, 
    Previous_treatment CHAR,
    emergency_contact_1_first_name CHAR, 
    emergency_contact_1_last_name CHAR, 
    emergency_contact_1_relation VARCHAR, 
    emergency_contact_1_address VARCHAR, 
    emergency_contact_1_number INT, 
    emergency_contact_1_email VARCHAR,
    emergency_contact_2_first_name CHAR, 
    emergency_contact_2_last_name CHAR, 
    emergency_contact_2_relation VARCHAR, 
    emergency_contact_2_address VARCHAR, 
    emergency_contact_2_number INT, 
    emergency_contact_2_email VARCHAR )
    ";

    $sql = "INSERT INTO users (
        first_name, last_name, gender, date_of_birth, number, email, address, height, weight, genotype, blood_group, health_con, smoke, drink, Excercise, meditation, other_hobbies, test, consult, A_R_T, P_G_T, donation, hormones, Previous_treatment,
        emergency_contact_1_first_name, emergency_contact_1_last_name, emergency_contact_1_relation, emergency_contact_1_address, emergency_contact_1_number, emergency_contact_1_email,
        emergency_contact_2_first_name, emergency_contact_2_last_name, emergency_contact_2_relation, emergency_contact_2_address, emergency_contact_2_number, emergency_contact_2_email
    ) VALUES ";

    echo "<h2>Thank you, $name!</h2><p>Your message has been received: $message</p><p>From: $email</p>";
    echo '<a href="contact.html">Back to form</a>';
} else {
    echo "Invalid request.";
}
?>

<?php

require __DIR__ . '/vendor/autoload.php';

use Supabase\CreateClient;
use GuzzleHttp\Exception\RequestException;

// Load environment variables (optional but recommended)
$SUPABASE_URL = getenv('SUPABASE_URL') ?: 'https://your-project-id.supabase.co';
$SUPABASE_KEY = getenv('SUPABASE_KEY') ?: 'your-service-role-or-anon-key';

// Validate credentials
if (empty($SUPABASE_URL) || empty($SUPABASE_KEY)) {
    die("Error: SUPABASE_URL and SUPABASE_KEY must be set.\n");
}

try {
    // Create Supabase client
    $supabase = CreateClient::create($SUPABASE_URL, $SUPABASE_KEY);


$insertresponse = $supabase 
    -> from('PT_information') 
    -> insert([
        first_n => $_GET['first_n'], 
        $_GET[ 'last_n'],
        $_GET[ 'gender'],
        $_GET[ 'DOB'],
        $_GET[ 'number'],
        $_GET[ 'email'],
        $_GET[ 'address'],
        $_GET[ 'height'],
        $_GET[ 'weight'],
        $_GET['genotype'],
        $_GET[ 'blood-group'],
        $_GET[ 'health-con'],
        $_GET[ 'smoke'],
        $_GET[ 'drink'],
        $_GET[ 'Excercise'],
        $_GET[ 'meditation'],
        $_GET[ 'other-hobbies'],
        $_GET['test'],
        $_GET[ 'consult'],
        $_GET[ 'ar-tech'],
        $_GET[ 'pg-testing'],
        $_GET[ 'donation'],
        $_GET[ 'hormone-man'],
        $_GET[ 'prev-treat'],
        $_GET['E-first-name-1'],
        $_GET[ 'E-last-name-1'],
        $_GET[ 'E-relation-1'],
        $_GET[ 'E-address-1'],
        $_GET[ 'E-number-1'],
        $_GET[ 'E-email-1'],
        $_GET[ 'E-first-name-2'],
        $_GET[ 'E-last-name-2'],
        $_GET[ 'E-relation-2'],
        $_GET[ 'E-address-2'],
        $_GET[ 'E-number-2'],
        $_GET[ 'E-email-2']
])

?>