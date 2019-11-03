<?php
require 'db_conn.php';
require 'template.php';

session_start();
$_SESSION["booked"]=$_POST["selected"];
$_SESSION["final"]=$_POST["final"];
$amount=$_SESSION["amount"]=$_POST["amount"];

?>
<html>
<body>

<div class="container">
  <form class="form-horizontal" role="form" action="key.php" method="POST">
	<fieldset>
	 <legend>Your details</legend>
	  <div class="form-group">
        <label class="col-sm-3 control-label" for="cvv">First name</label>
        <div class="col-sm-3">
          <input type="text" class="form-control" name="fname" id="cvv"  required>
		</div>
	  </div>
	  <div class="form-group">
        <label class="col-sm-3 control-label" for="cvv">Last name</label>
        <div class="col-sm-3">
          <input type="text" class="form-control" name="lname" id="cvv"  required>
      </div>
      </div>
	 <div class="form-group">
        <label class="col-sm-3 control-label" for="cvv">Email</label>
        <div class="col-sm-3">
          <input type="email"  name="email" class="form-control" id="cvv" required>
      </div>
	  </div>
	 </fieldset>
    <fieldset>
      <legend>Payment details</legend>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="card-holder-name">Name on Card</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="cardName" id="card-holder-name" placeholder="Card Holder's Name" required>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="card-number">Card Number</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="cardNo" id="card-number" placeholder="Debit/Credit Card Number" required>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="expiry-month">Expiration Date</label>
        <div class="col-sm-9">
          <div class="row">
            <div class="col-xs-3">
              <select class="form-control col-sm-2" name="expiryMonth" id="expiry-month" required>
                <option value="01">Jan (01)</option>
                <option value="02">Feb (02)</option>
                <option value="03">Mar (03)</option>
                <option value="04">Apr (04)</option>
                <option value="05">May (05)</option>
                <option value="06">June (06)</option>
                <option value="07">July (07)</option>
                <option value="08">Aug (08)</option>
                <option value="09">Sep (09)</option>
                <option value="10">Oct (10)</option>
                <option value="11">Nov (11)</option>
                <option value="12">Dec (12)</option>
              </select>
            </div>
            <div class="col-xs-3">
              <select class="form-control" name="expiryYear" required>
                <option value="13">2013</option>
                <option value="14">2014</option>
                <option value="15">2015</option>
                <option value="16">2016</option>
                <option value="17">2017</option>
                <option value="18">2018</option>
                <option value="19">2019</option>
                <option value="20">2020</option>
                <option value="21">2021</option>
                <option value="22">2022</option>
                <option value="23">2023</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="cvv">Card CVV</label>
        <div class="col-sm-3">
          <input type="password" class="form-control" name="cvv" id="cvv" placeholder="Security Code" required>
        </div>
      </div>
	  <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
			<span style='font: bold 24px Georgia, serif;color:red;'>Amount to be paid is Rs.<?php echo $amount; ?> </span><br>
          <span style='font: 24px Verdana, Geneva, sans-serif;color:black;'><input type="submit" class="btn btn-success" value="Pay / Book"></span>
        </div>
      </div>
    </fieldset>

  </form>
</div>
</body>
</html>