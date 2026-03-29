<!DOCTYPE html>
<html>
<head>
    <title>Form Data Lebaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #4facfe, #00f2fe);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: white;
            padding: 30px;
            border-radius: 15px;
            width: 350px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border-radius: 8px;
            border: 1px solid #ccc;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #4facfe;
            border: none;
            color: white;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background: #007bff;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Form Lebaran</h2>

    <form action="process.php" method="POST">
        First Name:
        <input type="text" name="first_name" required>

        Last Name:
        <input type="text" name="last_name" required>

        Phone Number:
        <input type="text" name="phone" required>

        Address:
        <input type="text" name="address" required>

        <button type="submit">Submit</button>
    </form>
</div>

</body>
</html>