<?php

class User {
    public $firstName;
    public $lastName;
    public $phone;
    public $address;

    public function __construct($firstName, $lastName, $phone, $address) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->phone = $phone;
        $this->address = $address;
    }

    public function tampilkan() {
        return "
        <div class='result'>
            <h2>Hasil Input</h2>
            <p><b>First Name:</b> $this->firstName</p>
            <p><b>Last Name:</b> $this->lastName</p>
            <p><b>Phone:</b> $this->phone</p>
            <p><b>Address:</b> $this->address</p>
        </div>
        ";
    }
}

// ambil data
$user = new User(
    $_POST['first_name'],
    $_POST['last_name'],
    $_POST['phone'],
    $_POST['address']
);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Hasil</title>
    <style>
        body {
            font-family: Arial;
            background: #f4f6f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .result {
            background: white;
            padding: 30px;
            border-radius: 15px;
            width: 350px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }

        h2 {
            text-align: center;
        }
    </style>
</head>
<body>

<?php
echo $user->tampilkan();
?>

</body>
</html>