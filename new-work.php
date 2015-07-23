
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
    <div id="left-bar" class="col-lg-1 col-md-1 col-sm-1 col xs-1">
      <button class="page-button"></button>
      <button class="page-button"></button>
      <button class="page-button"></button>
    </div>

    <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">

      <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>

      <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
        <h2 class="sans-title">Lastname Firstname</h2>
      </div>

    </div>

    <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">

      <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>

      <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
        <h4 class="sans caps"><a href="#"><u>New Work</u></a></h4>
      </div>
      <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
        <h4 class="sans caps"><a class="not-active" href="#">Existing Work</a></h4>
      </div>
      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
        <h4 class="sans caps"><a class="not-active" href="#">Vehicle Information</a></h4>
      </div>

    </div>

    <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">

      <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>

      <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
        <table class="table">
          <th>
            <td class="col-lg-8 col-md-8 col-sm-8 col-xs-8"><h5 class="sans caps light-grey">Work Items</h5></td>
            <td class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><h5 class="sans caps right-align">$49.14</h5></td>
          </th>
          <tr>
            <td class="col-lg-8 col-md-8 col-sm-8 col-xs-8"><span class="sans">Air filter</span></td>
            <td class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><span class="sans right-align">$18.00</span></td>
          </tr>
          <tr>
            <td class="col-lg-8 col-md-8 col-sm-8 col-xs-8"><span class="sans">Cabin air filter</span></td>
            <td class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><span class="sans right-align">$36.30</span></td>
          </tr>
          <tr>
            <td class="col-lg-8 col-md-8 col-sm-8 col-xs-8"><span class="sans">Engine oil</span></td>
            <td class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><span class="sans right-align">$36.47</span></td>
          </tr>
          <tr>
            <td class="col-lg-8 col-md-8 col-sm-8 col-xs-8"><span class="sans">Oil filter</span></td>
            <td class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><span class="sans right-align">$6.20</span></td>
          </tr>
        </table>

        <button class="btn btn-default" type="button">+ Add new work item</button> <!--Not entirely sure how this is going to work, I'll throw in a button for now-->

        
        
      </div>

    </div>

  </div>

</body>

</html>
