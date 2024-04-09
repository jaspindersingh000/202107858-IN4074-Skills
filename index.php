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

<nav>
    <ul>
      <li><a href="index.php">Air Pollution</a></li>
      <li><a href="about.html">Water Pollution</a></li>
      <li><a href="soil.html">Soil Pollution</a></li>
      <li><a href="noise.html">Noise Pollution</a></li>
      <li><a href="light.html">Light Pollution</a></li>
    </ul>
  </nav>
  <!-- Index Page -->
  <section id="about">
    <h1>Air Pollution</h1>
    <p>Air pollution is a pressing environmental issue that has significant impacts on human health, ecosystems, and the planet's climate. It occurs when harmful substances are released into the atmosphere, either through natural processes or human activities, in concentrations that exceed safe levels. These substances can include pollutants such as carbon monoxide (CO), sulfur dioxide (SO2), nitrogen oxides (NOx), particulate matter (PM), volatile organic compounds (VOCs), and ozone (O3), among others..</p>
    <h2>Primary Resources</h2>
<img src="1.jpg" alt="Air Pollution">
	<p>One of the primary sources of air pollution is the combustion of fossil fuels for energy production, transportation, industrial processes, and residential heating. Vehicles, power plants, factories, and other industrial facilities emit vast quantities of pollutants into the air, contributing to smog, acid rain, and a range of respiratory and cardiovascular diseases in humans. In addition to fossil fuel combustion, other sources of air pollution include agricultural activities, wildfires, construction activities, and natural phenomena such as volcanic eruptions and dust storms.</p>
	<h2>Impacts</h2>
	<p>The impacts of air pollution on human health are profound and wide-ranging. Inhalation of polluted air can lead to respiratory problems such as asthma, bronchitis, and chronic obstructive pulmonary disease (COPD), as well as cardiovascular diseases, lung cancer, and premature death. Vulnerable populations such as children, the elderly, and individuals with pre-existing health conditions are particularly at risk. Moreover, air pollution can have adverse effects on cognitive function, reproductive health, and overall quality of life.</p>
	<h2>Threats</h2>
    <p>In addition to its human health impacts, air pollution also poses significant threats to ecosystems and biodiversity. Pollutants can harm plants, animals, and microorganisms through direct toxicity, habitat degradation, and disruption of ecological processes. For example, acid rain resulting from the deposition of sulfur and nitrogen compounds can acidify soils and water bodies, leading to the decline of sensitive species and the degradation of aquatic ecosystems. Similarly, ground-level ozone can damage vegetation, reduce crop yields, and impair forest growth.</p>
    <h2>Climate change</h2>
	<p>Furthermore, air pollution plays a crucial role in climate change. Certain pollutants, such as carbon dioxide (CO2) and methane (CH4), act as greenhouse gases, trapping heat in the Earth's atmosphere and contributing to global warming and climate disruption. Additionally, aerosols and particulate matter can influence cloud formation, precipitation patterns, and regional climate variability, further exacerbating the impacts of climate change on ecosystems, agriculture, and human societies.</p>
	<h2>Addressing air pollution</h2>
	<p>Addressing air pollution requires concerted efforts at the local, national, and international levels. Strategies for reducing air pollution include implementing emission controls and standards for industrial and vehicular sources, promoting clean and renewable energy technologies, improving public transportation infrastructure, enhancing urban planning and green spaces, and fostering sustainable agricultural practices. Public awareness, education, and advocacy are also essential for promoting behavioral changes and fostering a culture of environmental stewardship. By taking comprehensive and proactive measures to mitigate air pollution, we can safeguard human health, protect ecosystems, and mitigate climate change for present and future generations.</p>
  <img src="2.jpg" alt="">
</section>
   <!-- Footer Section -->
  <footer>
     <p>&copy; 2024 Pollution. All Rights Reserved by Arpanpreet Singh 202107858.</p>
</body>
</html>