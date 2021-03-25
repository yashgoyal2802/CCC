<!DOCTYPE html>
<?php

$user = $_COOKIE['username'];

function OpenCon()
{
	$dbhost = "sql6.freesqldatabase.com";
	$dbuser = "sql6400897";
	$dbpass = "gcysFbCvd9";
	$db = "sql6400897";
	$conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
 	return $conn;
}

function CloseCon($conn)
{
    $conn -> close();
} 

$conn = OpenCon();
if($conn === false){
  die("ERROR: Could not connect." . $conn->connect_error);
  echo "<br>";
}

$sql = "SELECT * FROM persons WHERE username='$user'";
$result = $conn -> query($sql);

if($result){
  
  $email = $result['email'];
  $ccname = $result['ccname'];
  $cfname = $result['cfname'];
  $ach = $result['achievements'];
  $pwd = $result['password'];
}
?>

<html lang="en">

<head>
  <link rel="icon" href="images/ccc.png">
  <meta charset="utf-8">
  <title>Profile</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="http://netdna.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
  <style type="text/css">
    body {
      margin-top: 20px;
      background: #f8f8f8
    }
  </style>
</head>

<body>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
  <div class="container">
    <div class="row flex-lg-nowrap">
      <div class="col-12 col-lg-auto mb-3" style="width: 200px;">
      </div>

      <div class="col">
        <div class="row">
          <div class="col mb-3">
            <div class="card">
              <div class="card-body">
                <div class="e-profile">
                  <div class="row">
                    <div class="col-12 col-sm-auto mb-3">
                    </div>
                    <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                      <div class="text-center text-sm-left mb-2 mb-sm-0">
                        <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap">
                          <?php
                            echo "<h4 class="pt-sm-2 pb-1 mb-0 text-nowrap">@". $user ."</h4>";
                          ?>
                        </h4>
                      </div>
                    </div>
                  </div>
                  <ul class="nav nav-tabs">
                    <li class="nav-item"><a href="" class="active nav-link">Settings</a></li>
                  </ul>
                  <div class="tab-content pt-3">
                    <div class="tab-pane active">
                      <form action="update.php" method="POST">
                        <div class="row">
                          <div class="col">
                            <div class="row">
                              <div class="col">
                                <div class="form-group">
                                  <label>Username</label>
                                  <input class="form-control" type="text" name="usernname" value="<?php echo htmlspecialchars($user); ?>" readonly>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <div class="form-group">
                                  <label>Email</label>
                                  <input class="form-control" type="email" name="email" value="<?php echo htmlspecialchars($email); ?>">
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <div class="form-group">
                                  <label>Codechef Username</label>
                                  <input class="form-control" type="text" name="ccname" value="<?php echo htmlspecialchars($ccname); ?>">
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <div class="form-group">
                                  <label>Codeforces Username</label>
                                  <input class="form-control" type="text" name="cfname" value="<?php echo htmlspecialchars($cfname); ?>">
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col mb-3">
                                <div class="form-group">
                                  <label>Achievements</label>
                                  <textarea class="form-control" rows="5" name="ach" value="<?php echo htmlspecialchars($ach); ?>"></textarea>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-12 col-sm-6 mb-3">
                            <div class="mb-2"><b>Change Password</b></div>
                            <div class="row">
                              <div class="col">
                                <div class="form-group">
                                  <label>Current Password</label>
                                  <input class="form-control" type="password" name="cpwd" value="<?php echo htmlspecialchars($pwd); ?>">
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <div class="form-group">
                                  <label>New Password</label>
                                  <input class="form-control" type="password" name="npwd" value="<?php echo htmlspecialchars($pwd); ?>">
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <div class="form-group">
                                  <label>Confirm <span class="d-none d-xl-inline">Password</span></label>
                                  <input class="form-control" type="password" name="ccpwd" value="<?php echo htmlspecialchars($pwd);?>"></div>
                              </div>
                            </div>
                          </div>
                          <!-- <div class="col-12 col-sm-5 offset-sm-1 mb-3">
                            <div class="mb-2"><b>Keeping in Touch</b></div>
                            <div class="row">
                              <div class="col">
                                <label>Email Notifications</label>
                                <div class="custom-controls-stacked px-2">
                                  <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="notifications-blog"
                                      checked="">
                                    <label class="custom-control-label" for="notifications-blog">Blog posts</label>
                                  </div>
                                  <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="notifications-news"
                                      checked="">
                                    <label class="custom-control-label" for="notifications-news">Newsletter</label>
                                  </div>
                                  <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="notifications-offers"
                                      checked="">
                                    <label class="custom-control-label" for="notifications-offers">Personal
                                      Offers</label>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div> -->
                        </div>
                        <div class="row">
                          <div class="col d-flex justify-content-end">
                            <button class="btn btn-primary" type="submit" onclick="return validateForm()">Save Changes</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-3 mb-3">
          </div>
        </div>

      </div>
    </div>
  </div>
  <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script type="text/javascript">
  </script>
</body>
</html>

<script>
  function validateForm(){

    var cpwd = document.getElementById("cpwd").value; 
    var npwd = document.getElementById("npwd").value;
    var email = document.getElementById("email").value;
    var ccpwd = document.getElementById("ccpwd").value;
    var opwd = '<?php echo $pwd; ?>';

    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    if(cpwd != opwd){
      alert("Incorrect Current Password");
      return false;
    }
    else if(npwd != ccpwd){
      alert("Passwords don't match");
      return false;
    }
    else if(!re.test(String(email).toLowerCase())){
    	alert("Error: Enter a valid e-mail id");
    	return false;
    }
    
    return true;
  }
</script>