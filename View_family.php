<html>
<head>
    <title>SM CSI Church</title>
    <link rel="stylesheet" type="text/css" href="styles/indexstyle.css">
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center text-primary">Welcome to CSI Church</h1>
        <h1 class="text-center text-primary" >View Family</h1>
        <p class="text-primary"><b>View Family Details</b></p>  
        <form action="show_family_details.php" method="post">
            <label for="family_no" class="form-label">Family No:</label>
            <input type="text" class="form-control form-control-sm" id="family_no" name="family_no" placeholder="Enter Family No" required>
            <!--<br>
            <label for="family_name" class="form-label">Family Name:</label>
            <input type="text" class="form-control form-control-sm" id="family_name" name="family_name" placeholder="Enter Family Name" required>
            <br>
            <label for="head_of_family" class="form-label">Head of Family:</label>
            <input type="text" id="head_of_family" class="form-control form-control-sm" name="head_of_family" placeholder="Enter Family Head" required>
            <br>-->
            <input class="btn btn-primary" type="submit" value="Show Details">
            <input class="btn btn-secondary" type="reset" value="Reset">
            <input class="btn btn-info" type="button" value="Dash" onclick="window.location.href='index.php'">
        </form>
</div>
</body></html>