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
        <?php echo '<h1 class="text-center text-primary" >Family Register</h1>'; ?>
        <p class="text-primary"><b>Family Details</b></p>
        <?php $selectedGender="Male"; ?>  
        <form action="insert_family_data.php" method="post">
            <label for="first_name" class="form-label">First Name</label>
            <input type="text" class="form-control form-control-sm" id="first_name" name="first_name" placeholder="Enter First Name" required>
            <label for="last_name" class="form-label"><?php echo "Last Name:" ?></label>
            <input type="text" class="form-control form-control-sm" id="last_name" name="last_name" placeholder="Enter Last Name" required>
            
            <?php echo '<label for="gender" class="form-label">Gender</label>'; ?>
            <select name="gender">
                <option value="M" <?php if ($selectedGender=="Male") echo "selected"; ?>>Male</option>
                <option value="F" <?php if($selectedGender=="Female") echo "selected"; ?>>Female</option>
                <option value="T" <?php if($selectedGender=="Trandsgender") echo "selected"; ?>>Trandsgender</option>
            </select><br>
            <label for="dob" class="form-label">Date of Birth:</label>
            <input type="date" class="form-control form-control-sm" id="dob" name="dob" required>
            <label for="dobap" class="form-label">Date of Baptism:</label>
            <input type="date" class="form-control form-control-sm" id="dobap" name="dobap" required>
            <label for="docom" class="form-label">Date of Communion:</label>
            <input type="date" class="form-control form-control-sm" id="docom" name="docom">
            <label for="door_no" class="form-label">Door No:</label>
            <input type="text" class="form-control form-control-sm" id="door_no" name="door_no" placeholder="Enter Door No" required>
            <label for="house_name" class="form-label">House Name:</label>
            <input type="text" class="form-control form-control-sm" id="house_name" name="house_name" placeholder="Enter House Name" required>

            <label for="street" class="form-label">Street Name:</label>
            <input type="text" class="form-control form-control-sm" id="street" name="street" placeholder="Enter Street Name" required>
            <label for="post" class="form-label">Post:</label>
            <input type="text" class="form-control form-control-sm" id="post" name="post" placeholder="Enter Post" required>
            <label for="pincode" class="form-label">PIN  Code:</label>
            <input type="number" class="form-control form-control-sm" id="pincode" name="pincode" placeholder="Enter PIN Code" required>
            <label for="phone1" class="form-label">Phone Number:</label>
            <input type="number" class="form-control form-control-sm" id="phone1" name="phone1" placeholder="Enter Phone Number" required>
            <label for="phone2" class="form-label">Additional Phone Number:</label>
            <input type="number" class="form-control form-control-sm" id="phone2" name="phone2" placeholder="Enter Additional Phone Number">


            <input class="btn btn-primary" type="submit" value="Save Details">
            <?php echo '<input class="btn btn-secondary" type="reset" value="Reset">'; ?>
            <input class="btn btn-info" type="button" value="Dash" onclick="window.location.href='index.php'">
        </form>
</div>
</body></html>
