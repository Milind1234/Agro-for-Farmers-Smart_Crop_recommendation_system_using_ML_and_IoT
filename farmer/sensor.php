<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sensor</title>
  <style>
    body {
    font: 16px Arial, sans-serif;
    margin: 0;
    padding: 0;
    background: url('../assets/img/backgroundimg1.webp') no-repeat center center fixed;
    background-size: cover;
    color: #333;
}


#wrapper {
    width: 90%;
    max-width: 1200px;
    margin: 50px auto;
    background: rgba(255, 255, 255, 0.9);
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    border-radius: 10px;
    overflow: hidden;
}

#header {
    text-align: center;
    background: linear-gradient(135deg, #4caf50, #8bc34a);
    color: white;
    padding: 20px;
}

#header h1 {
    font-size: 40px;
    font-weight: bold;
    text-transform: uppercase;
    margin: 0;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
}

#menu {
    background: #333;
    padding: 10px 0;
}

#menu ul {
    list-style: none;
    padding: 0;
    margin: 0;
    text-align: center;
}

#menu ul li {
    display: inline-block;
    margin: 0 15px;
}

#menu ul li a {
    color: #fff;
    text-decoration: none;
    font-size: 18px;
    text-transform: uppercase;
    padding: 10px 15px;
    border-radius: 5px;
    transition: background 0.3s;
}

#menu ul li a:hover {
    background: #4caf50;
}

#main-content {
    padding: 30px;
    text-align: center;
    background: rgba(255, 255, 255, 0.95);
    border-radius: 10px;
}

#main-content h2 {
    font-size: 28px;
    margin-bottom: 20px;
    color: #4caf50;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
}

#main-content table {
    width: 80%;
    margin: 20px auto;
    border-collapse: collapse;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

#main-content table th, 
#main-content table td {
    border: 1px solid #ddd;
    padding: 12px;
    text-align: center;
}

#main-content table th {
    background: #4caf50;
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
}

#main-content table td {
    background: #f9f9f9;
}

#main-content table td a {
    font-size: 14px;
    padding: 5px 10px;
    color: #fff;
    background: #ff5722;
    text-decoration: none;
    border-radius: 3px;
    transition: background 0.3s;
}

#main-content table td a:hover {
    background: #e64a19;
}

#main-content .post-form {
    background: #f5f5f5;
    padding: 20px;
    margin: 20px auto;
    width: 60%;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

#main-content .post-form .form-group {
    margin-bottom: 15px;
}

#main-content .post-form .form-group label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}

#main-content .post-form .form-group input, 
#main-content .post-form .form-group select {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 5px;
    outline: none;
}

#main-content .post-form .submit {
    background: #4caf50;
    color: #fff;
    font-size: 18px;
    font-weight: bold;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background 0.3s;
}

#main-content .post-form .submit:hover {
    background: #45a049;
}

#main-content .pagination {
    list-style: none;
    padding: 0;
    text-align: center;
    margin: 20px 0;
}

#main-content .pagination li {
    display: inline-block;
    margin: 0 5px;
}

#main-content .pagination li a {
    display: inline-block;
    padding: 8px 12px;
    background: #4caf50;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    transition: background 0.3s;
}

#main-content .pagination li a:hover {
    background: #45a049;
}

  </style>
</head>
<body>
    <div id="wrapper">
        <div id="header">
            <h1> Weather Monitoring </h1>
        </div>
            <div id="menu">
            <ul>
                
            </ul>
        </div>
        <div id="main-content">
          <h2>Temperature and Humidity</h2>
            
        </div>
      </div>
</body>
</html>

<script>
function loadXMLDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("main-content").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "server.php", true);
  xhttp.send();
}
setInterval(function() {
  loadXMLDoc();
}, 5000);

window.onload = loadXMLDoc;

</script>
