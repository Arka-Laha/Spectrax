<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .landing-page {
            position: relative;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
        }

        .background-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Adjust the opacity by changing the last value */
            z-index: -1;
        }

        .content-container {
            text-align: center;
            z-index: 1; /* Ensure the content appears above the overlay */
        }

        h1 {
            font-size: 3em;
            margin-bottom: 20px;
        }

        .cta-button {
            background-color: #3498db;
            color: white;
            padding: 15px 30px;
            font-size: 1.2em;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .cta-button:hover {
            background-color: #2980b9;
        }
    </style>
    <title>Spectra Admin</title>
</head>
<body>
    <div class="landing-page">
        <img class="background-image" src="images/index/gtx.jpg" alt="Background Image">
        <div class="overlay"></div>
        <div class="content-container">
            <h1>Spectra Admin</h1>
           <a href="admin_login_form.php"> <button class="cta-button">Get Started</button></a>
        </div>
    </div>
</body>
</html>
