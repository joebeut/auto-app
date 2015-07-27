
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

      <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
        <h4 class="sans caps inline"><a href="#"><u>New Work</u></a></h4>
        <h4 class="sans caps inline"><a class="not-active" href="#">Existing Work</a></h4>
        <h4 class="sans caps inline"><a class="not-active" href="#">Vehicle Information</a></h4>
      </div>

    </div>

    <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">

      <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>

      <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
        <table class="table sans">
          <thead>
            <tr>
              <th class="col-lg-8 col-md-8 col-sm-8 col-xs-8"><span class="sans caps light-grey vbottom table-header">Work Items</span></th>
              <th class="col-lg-4 col-md-4 col-sm-4 col-xs-4 right-align">$49.14</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="col-lg-8 col-md-8 col-sm-8 col-xs-8">Air filter</td>
              <td class="col-lg-4 col-md-4 col-sm-4 col-xs-4 right-align">$18.00</td>
            </tr>
            <tr>
              <td class="col-lg-8 col-md-8 col-sm-8 col-xs-8">Cabin air filter</td>
              <td class="col-lg-4 col-md-4 col-sm-4 col-xs-4 right-align">$36.30</td>
            </tr>
            <tr>
              <td class="col-lg-8 col-md-8 col-sm-8 col-xs-8">Engine oil</td>
              <td class="col-lg-4 col-md-4 col-sm-4 col-xs-4 right-align">$36.47</td>
            </tr>
            <tr>
              <td class="col-lg-8 col-md-8 col-sm-8 col-xs-8">Oil filter</td>
              <td class="col-lg-4 col-md-4 col-sm-4 col-xs-4 right-align">$6.20</td>
            </tr>
          </tbody>
          </table>

        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <button class="btn btn-default col-lg-2 col-md-2 col-sm-2 col-xs-2" type="button">+ Add new work item</button> <!--Not entirely sure how this is going to work, I'll throw in a button for now-->
        </div>

        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>

        <table class="table sans">
          <thead>
            <tr>
              <th class="col-lg-8 col-md-8 col-sm-8 col-xs-8"><span class="sans caps light-grey vbottom table-header">Labor Cost</span></th>
              <th class="col-lg-4 col-md-4 col-sm-4 col-xs-4 right-align">$35.00</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="col-lg-8 col-md-8 col-sm-8 col-xs-8">45 min of labor</td>
              <td class="col-lg-4 col-md-4 col-sm-4 col-xs-4 right-align"></td>
            </tr>
          </tbody>
        </table>

        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <span class="sans caps light-grey table-header">Comments</span>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <textarea class="col-lg-12 col-md-12 col-sm-12 col-xs-12" rows="7"></textarea>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <button class="btn btn-default col-lg-2 col-md-2 col-sm-2 col-xs-2" type="button">Save</button> <!--Not entirely sure how this is going to work, I'll throw in a button for now-->

          <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 right-align">
            <h5 class="sans caps light-grey table-header">Total Cost</h5>
            <span class="sans bold">$84.14</span>
          </div>
        </div>

      </div>

    </div>

  </div>

</body>

</html>
