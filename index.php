
<?php
  /*
    index.php
  */
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include './parts/header.php'; ?>
</head>

<body>
<div id="container">
  <div id="left-bar" class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
    <button class="page-button"></button>
    <button class="page-button"></button>
    <button class="page-button"></button>

  </div>
  
  <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">

    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>

    <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
      <h2 class="sans-title">Customers</h2>
    </div>
  </div>

  <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">

    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>

    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
      <h4 class="sans caps"><a href="index.php"><u>New</u></a></h4>
    </div>
    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
      <h4 class="sans caps"><a class="not-active" href="customers_list.php">Existing</a></h4>
    </div>

  </div>

  <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">

    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>

    <form id="addCustomer" name="addCustomer" method="post" action="queries/add_customer.php">
    
    <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
      <h5 class="sans caps section-header light-grey">Personal Information</h5>
    </div>

  </div>

  <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>

    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
      <p class="sans caps input-header light-grey">Last Name</p>
    </div>
    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
      <p class="sans caps input-header light-grey">First Name</p>
    </div>

    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
  </div>

  <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>

    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
      <input type="text" name="lastName">
    </div>
    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
      <input type="text" name="firstName">
    </div>

    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
  </div>

  <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>

    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
      <p class="sans caps input-header light-grey">Email</p>
    </div>
    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
      <p class="sans caps input-header light-grey">Phone Number</p>
    </div>
    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
  </div>

  <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
      <input type="text" name="email">
    </div>
    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
      <input type="text" name="phone">
    </div>
    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
  </div>

  <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">

    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
      <p class="sans caps input-header light-grey">Driver's License Number</p>
    </div>
    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
      <p class="sans caps input-header light-grey">Insurance Information</p>
    </div>
    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>

  </div>

  <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>

    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
      <input type="text" name="driversLicense">
    </div>
    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
      <input type="text" name="insurance">
    </div>
    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
  </div>

  <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>

    <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
      <h5 class="sans caps section-header light-grey">Vehicle Information</h5>
    </div>
  </div>

  <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>

    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
      <p class="sans caps input-header light-grey">VIN Number</p>
    </div>
    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
      <p class="sans caps input-header light-grey">License Plate Number</p>
    </div>
    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
  </div>

  <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>

    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
      <input type="text" name="vin">
    </div>
    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
      <input type="text" name="licensePlate">
    </div>
    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
  </div>

  <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>

    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
      <p class="sans caps input-header light-grey">Make</p>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
      <p class="sans caps input-header light-grey">Model</p>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
      <p class="sans caps input-header light-grey">Year</p>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
      <p class="sans caps input-header light-grey">Color</p>
    </div>

    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
  </div>

  <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>

    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
      <input type="text" name="make">
    </div>
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
      <input type="text" name="model">
    </div>
    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
      <input type="text" name="year">
    </div>
    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
      <input type="text" name="color">
    </div>

    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
  </div>
    
  <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>

    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
      <input class="submit col-lg-2 col-md-2 col-sm-2 col-xs-2" name="add" id="add" type="submit" value="Submit">
    </div>
  </div>
      
  </form>


    


  </div>
  
</div>
</body>
</html>