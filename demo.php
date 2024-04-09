<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <style>
        ul {
            text-align: right;
  margin: 10px;
  padding: 12px;
  overflow: hidden;
  background-color: #fff000;
  font-family: Brush Script, cursive;
  font-style: italic;
  font-size: 35px;
  font-weight: bold;
  border-style: solid;
  border-color:#000;
}

li {
  float: left;
}

li a {
  display: inline-block;
  color: #dd1100;
  text-align: center;
  padding: 20px 40px;
  text-decoration: italic;
}

li a:hover:not(.active) {
  background-color: #7e7ef9;
}

.active {
  background-color: #04AA6D;
}
h1 {
	text-align: center;
   text-shadow: 2px 2px white;
  color:#000066;
 font-family: papyrus, fantasy;
  font-size: 45px;
   text-decoration: underline;
  border: 3px solid black;
  padding-top: 30px;
   padding-bottom: 30px;
   background-image: url(Images/border.jpeg);
   background-repeat: no-repeat;
   background-position: center;
   background-size: cover;
}
img {
	display: block;
	margin: auto;
	width: 30%;
    border-radius: 50%;
  border: 3px solid black;
}
.responsive {
  width: 100%;
  height: auto;
}

p {
   font-family: sans-serif;
   font-size: 20px;
   text-shadow: 1px 1px #fdeb16;
   font-weight: bold;
   color: #0a0aa0;
   font-style: oblique;
   padding-left: 30px;
   padding-right: 30px;
}
h2{  
   font-family: Brush Script, cursive;
   font-size: 40px;
   text-shadow: 1px 1px #fdeb16;
   text-align: center;
   text-decoration: underline;
    font-style: italic;
   color: #0a0a60;
   margin: 10px;
   
}
        .wrapper {
            width: 600px;
            margin: 0 auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #ddd;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }
        ul {
            text-align: center;
  margin: 10px;
  padding: 12px;
  overflow: hidden;
  background-color: #b2b2fa;
  font-family: Brush Script, cursive;
  font-style: italic;
  font-size: 35px;
  font-weight: bold;
  border-style: solid;
  border-color:#000066;
        }
        .image-section {
            width: 100%;
            text-align: center;
            margin-top: 50px;
        }

        .image-section img {
            max-width: 100%;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .image-section img:hover {
            transform: scale(1.05);
        }
    </style>
    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</head>

<body>


  <!-- Navigation Section -->
  <nav>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="demo.php">Database</a></li>
      <li><a href="resources.html">Resources</a></li>
      <li><a href="me.php">About me</a></li>
    </ul>
</nav>
  <!-- Index Page -->

  <section id="about">
</section>


</div>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">Pollution Details</h2>
                        <a href="create.php" class="btn btn-fancy pull-right" style="background-color: purple; color: white;">
  <i class="fa fa-plus" style="color: gold;"></i> Add New Details
</a>
 </div>
                    <?php
                    // Include config file
                    require_once "config.php";

                    // Attempt select query execution
                    $sql = "SELECT * FROM pollutions";
                    if ($result = mysqli_query($link, $sql)) {
                        if (mysqli_num_rows($result) > 0) {
                            echo '<table class="table table-bordered table-striped">';
                            echo "<thead>";
                            echo "<tr>";
                            echo "<th>id</th>";
                            echo "<th>Pollutant_type</th>";
                            echo "<th>Pollution_level</th>";
                            echo "<th>Location</th>";
                            echo "<th>Date_or_time</th>";
                            echo "<th>Action</th>";
                            echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<tr>";
                                echo "<td>" . $row['id'] . "</td>";
                                echo "<td>" . $row['Pollutant_type'] . "</td>";
                                echo "<td>" . $row['Pollution_level'] . "</td>";
                                echo "<td>" . $row['Location'] . "</td>";
                                echo "<td>" . $row['Date_or_time'] . "</td>";
                                echo "<td>";
                                echo '<a href="read.php?id=' . $row['id'] . '" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye" style="color: blue; font-size: 20px;"></span></a>';
                                echo '<a href="update.php?id=' . $row['id'] . '" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil" style="color: green; font-size: 20px;"></span></a>';
                                echo '<a href="delete.php?id=' . $row['id'] . '" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash" style="color: red; font-size: 20px;"></span></a>';
                                echo "</td>";
                                echo "</tr>";
                            }
                            echo "</tbody>";
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else {
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else {
                        echo "Oops! Something went wrong. Please try again later.";
                    }
                    // Close connection
                    mysqli_close($link);
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
 <!-- Footer Section -->
 <footer>
     <p>&copy;  All Rights Reserved by Arpanpreet Singh, 202107858.</p>
    </footer>
</html>