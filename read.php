<?php
// Check existence of Pollutant_type parameter before processing further
if (isset($_GET["id"]) && !empty(trim($_GET["id"]))) {
    // Include config file
    require_once "config.php";

    // Prepare a select statement
    $sql = "SELECT * FROM pollutions WHERE id = ?";

    if ($stmt = mysqli_prepare($link, $sql)) {
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);

        // Set parameters
        $param_id = trim($_GET["id"]);

        // Attempt to execute the prepared statement
        if (mysqli_stmt_execute($stmt)) {
            $result = mysqli_stmt_get_result($stmt);

            if (mysqli_num_rows($result) == 1) {
                /* Fetch result row as an associative array. Since the result set
                contains only one row, we don't need to use while loop */
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

                // Retrieve individual field value
                $Pollutant_type = $row["Pollutant_type"];
                $Pollution_level = $row["Pollution_level"];
                $Location = $row["Location"];
                $Date_or_time = $row["Date_or_time"];
            } else {
                // URL doesn't contain valid id parameter. Redirect to error page
                header("location: error.php");
                exit();
            }
        } else {
            echo "Oops! Something went wrong. Please try again later.";
        }
    }

    // Close statement
    mysqli_stmt_close($stmt);

    // Close connection
    mysqli_close($link);
} else {
    // URL doesn't contain id parameter. Redirect to error page
    header("location: error.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper {
            width: 600px;
            margin: 50px auto;
            background-color: #f8f9fa; /* Light gray background */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Shadow effect */
        }
        h1 {
            color: #6c5ce7; /* Purple color */
            text-align: center;
            margin-bottom: 30px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1); /* Text shadow effect */
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
            color: #555; /* Dark gray color */
        }
        p {
            margin-bottom: 0;
        }
        p b {
            color: #6c5ce7; /* Purple color */
        }
        .btn-primary {
            background-color: #6c5ce7; /* Purple color */
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #4834d4; /* Darker purple color on hover */
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <h1 class="mt-5 mb-3">View Record</h1>
        <div class="form-group">
            <label>Pollutant Type</label>
            <p><b><?php echo $row["Pollutant_type"]; ?></b></p>
        </div>
        <div class="form-group">
            <label>Pollution Level</label>
            <p><b><?php echo $row["Pollution_level"]; ?></b></p>
        </div>
        <div class="form-group">
            <label>Location</label>
            <p><b><?php echo $row["Location"]; ?></b></p>
        </div>
        <div class="form-group">
            <label>Date or Time</label>
            <p><b><?php echo $row["Date_or_time"]; ?></b></p>
        </div>
        <p><a href="demo.php" class="btn btn-primary">Back</a></p>
    </div>
</body>
</html>
