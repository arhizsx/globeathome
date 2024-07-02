<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
<title>GFP X SAMSUNG</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="style.css">
</head>
<body>
<!-- partial:index.partial.html -->
<div class="wrap">
<form>
<div class="form-header">
<h2>Registration</h2>
</div>
<div class="form-body">
<fieldset>
<legend><i class="fa fa-user"></i> User Information</legend>
<label for="fname">First Name</label>
<input type="text" id="fname" name="fname" required>
<label for="lname">Last Name</label>
<input type="text" id="lname" name="lname" required>
<label for="address">Address</label>
<input type="text" id="address" name="address" required>
<label for="city">City</label>
<input type="text" id="city" name="city" required>
<label for="state">State</label>
<select id="state" name="state" required>
<option value=""></option><option value="AL">Alabama</option><option value="AK">Alaska</option><option value="AZ">Arizona</option><option value="AR">Arkansas</option><option value="CA">California</option><option value="CO">Colorado</option><option value="CT">Connecticut</option><option value="DE">Delaware</option><option value="DC">District of Columbia</option><option value="FL">Florida</option><option value="GA">Georgia</option><option value="HI">Hawaii</option><option value="ID">Idaho</option><option value="IL">Illinois</option><option value="IN">Indiana</option><option value="IA">Iowa</option><option value="KS">Kansas</option><option value="KY">Kentucky</option><option value="LA">Louisiana</option><option value="ME">Maine</option><option value="MD">Maryland</option><option value="MA">Massachusetts</option><option value="MI">Michigan</option><option value="MN">Minnesota</option><option value="MS">Mississippi</option><option value="MO">Missouri</option><option value="MT">Montana</option><option value="NE">Nebraska</option><option value="NV">Nevada</option><option value="NH">New Hampshire</option><option value="NJ">New Jersey</option><option value="NM">New Mexico</option><option value="NY">New York</option><option value="NC">North Carolina</option><option value="ND">North Dakota</option><option value="OH">Ohio</option><option value="OK">Oklahoma</option><option value="OR">Oregon</option><option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option><option value="SD">South Dakota</option><option value="TN">Tennessee</option><option value="TX">Texas</option><option value="UT">Utah</option><option value="VT">Vermont</option><option value="VA">Virginia</option><option value="WA">Washington</option><option value="WV">West Virginia</option><option value="WI">Wisconsin</option><option value="WY">Wyoming</option>
</select>
<label for="zip">Zipcode</label>
<input type="text" id="zip" name="zip" required>
</fieldset>
<fieldset>
<legend><i class="fa fa-lock"></i> Account Login</legend>
<label for="email">Email</label>
<input type="email" id="email" name="email" required>
<label for="cr_password">Create Password</label>
<input type="password" id="cr_password" name="cr_password" required>
<label for="conf_password">Confirm Password</label>
<input type="password" id="conf_password" name="conf_password" required>
</fieldset>
<fieldset class="sub-opts">
<legend><i class="fa fa-tags"></i> Subscription Options</legend>
<input type="radio" name="subscription" value="free" id="free">
<div class="sub-opt">
<label class="sub-label" for="free"><i class="fa fa-check"></i> Free <span class="price">$0/mo.</span></label>
</div>
<input type="radio" name="subscription" value="deluxe" id="deluxe" checked required>
<div class="sub-opt">
<label class="sub-label" for="deluxe"><i class="fa fa-check"></i> Deluxe <span class="price">$5/mo.</span></label>
</div>
<input type="radio" name="subscription" value="premium" id="premium">
<div class="sub-opt">
<label class="sub-label" for="premium"><i class="fa fa-check"></i> Premium <span class="price">$10/mo.</span></label>
</div>
</fieldset>
</div>
<div class="form-footer">
<input type="submit" value="Create Account">
</div>
</form>
</div>
<!-- partial -->
</body>
</html>
