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
$result1 = $conn -> query($sql);
$result = $result1->fetch_assoc();
if($result){
  
  $email = $result['email'];
  $ccname = $result['ccname'];
  $cfname = $result['cfname'];
  $ach = $result['achievements'];
  $pwd = $result['password'];
}
echo "
<html lang='en'>
<head>
  <link rel='icon' href='images/ccc.png'>
  <meta charset='utf-8'>
  <link
    rel='stylesheet'
    href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css'
  />
  <link
    rel='stylesheet'
    href='https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css'
  />
  <link rel='stylesheet' href='Navigation-Clean.css' />
  <link rel='stylesheet' href='footer.css' />
  <link
    rel='stylesheet'
    href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css'
  />
  <title>Profile</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link href='https://netdna.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css' rel='stylesheet'>
 
  <style type='text/css'>
    body {
      margin-top: 20px;
      background: #f8f8f8
    }
  </style>
</head>
<header style='margin-top: -20px'>";
include('navbar.php');
echo"</header>
<body>

  <div class='container'>
    <div class='row flex-lg-nowrap'>
      <div class='col-12 col-lg-auto mb-3' style='width: 200px;'>
      </div>
      <div class='col'>
        <div class='row'>
          <div class='col mb-3'>
            <div class='card'>
              <div class='card-body'>
                <div class='e-profile'>
                  <div class='row'>
                    <div class='col-12 col-sm-auto mb-3'>
                    </div>
                    <div class='col d-flex flex-column flex-sm-row justify-content-between mb-3'>
                      <div class='text-center text-sm-left mb-2 mb-sm-0'>
                      	<h4 class='pt-sm-2 pb-1 mb-0 text-nowrap'>@$user</h4>
                      </div>
                    </div>
                  </div>
                  <ul class='nav nav-tabs' style = 'background-color: white;'>
                    <li class='nav-item'><a href='' class='active nav-link'>Settings</a></li>
                  </ul>
                  <div class='tab-content pt-3'>
                    <div class='tab-pane active'>
                      <form action='update.php' method='POST'>
                        <div class='row'>
                          <div class='col'>
                            <div class='row'>
                              <div class='col'>
                                <div class='form-group'>
                                  <label>Username</label>
                                  <input class='form-control' type='text' name='username' value=$user readonly>
                                </div>
                              </div>
                            </div>
                            <div class='row'>
                              <div class='col'>
                                <div class='form-group'>
                                  <label>Email</label>
                                  <input class='form-control' type='email' name='email' value=$email>
                                </div>
                              </div>
                            </div>
                            <div class='row'>
                              <div class='col'>
                                <div class='form-group'>
                                  <label>Codechef Username</label>
                                  <input class='form-control' type='text' name='ccname' value=$ccname>
                                </div>
                              </div>
                            </div>
                            <div class='row'>
                              <div class='col'>
                                <div class='form-group'>
                                  <label>Codeforces Username</label>
                                  <input class='form-control' type='text' name='cfname' value=$cfname>
                                </div>
                              </div>
                            </div>
                            <div class='row'>
                              <div class='col mb-3'>
                                <div class='form-group'>
                                  <label>Achievements</label>
                                  <input class='form-control' type='text' name='ach' value=$ach>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class='row'>
                          <div class='col-12 col-sm-6 mb-3'>
                            <div class='mb-2'><b>Change Password</b></div>
                            <div class='row'>
                              <div class='col'>
                                <div class='form-group'>
                                  <label>Current Password</label>
                                  <input class='form-control' type='password' name='cpwd' value=$pwd>
                                </div>
                              </div>
                            </div>
                            <div class='row'>
                              <div class='col'>
                                <div class='form-group'>
                                  <label>New Password</label>
                                  <input class='form-control' type='password' name='npwd' value=$pwd>
                                </div>
                              </div>
                            </div>
                            <div class='row'>
                              <div class='col'>
                                <div class='form-group'>
                                  <label>Confirm <span class='d-none d-xl-inline'>Password</span></label>
                                  <input class='form-control' type='password' name='ccpwd' value=$pwd></div>
                              </div>
                            </div>
                          </div>
                          <!-- <div class='col-12 col-sm-5 offset-sm-1 mb-3'>
                            <div class='mb-2'><b>Keeping in Touch</b></div>
                            <div class='row'>
                              <div class='col'>
                                <label>Email Notifications</label>
                                <div class='custom-controls-stacked px-2'>
                                  <div class='custom-control custom-checkbox'>
                                    <input type='checkbox' class='custom-control-input' id='notifications-blog'
                                      checked=''>
                                    <label class='custom-control-label' for='notifications-blog'>Blog posts</label>
                                  </div>
                                  <div class='custom-control custom-checkbox'>
                                    <input type='checkbox' class='custom-control-input' id='notifications-news'
                                      checked=''>
                                    <label class='custom-control-label' for='notifications-news'>Newsletter</label>
                                  </div>
                                  <div class='custom-control custom-checkbox'>
                                    <input type='checkbox' class='custom-control-input' id='notifications-offers'
                                      checked=''>
                                    <label class='custom-control-label' for='notifications-offers'>Personal
                                      Offers</label>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div> -->
                        </div>
                        <div class='row'>
                          <div class='col d-flex justify-content-end'>
                            <button class='btn btn-primary' type='submit' name='update' onclick='return validateForm()'>Save Changes</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class='col-12 col-md-3 mb-3'>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src='https://code.jquery.com/jquery-1.10.2.min.js'></script>
  <script src='https://netdna.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js'></script>
  <script type='text/javascript'>
  </script>
<script>
  function validateForm(){
    var cpwd = document.getElementById('cpwd').value; 
    var npwd = document.getElementById('npwd').value;
    var email = document.getElementById('email').value;
    var ccpwd = document.getElementById('ccpwd').value;
    var opwd = $pwd;
    const re = /^(([^<>()\[\]\\.,;:\s@']+(\.[^<>()\[\]\\.,;:\s@']+)*)|('.+'))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(cpwd != opwd){
      alert('Incorrect Current Password');
      return false;
    }
    else if(npwd != ccpwd){
      alert('Passwords don\'t match');
      return false;
    }
    else if(!re.test(String(email).toLowerCase())){
    	alert('Error: Enter a valid e-mail id');
    	return false;
    }
    
    return true;
  }
</script>";
include('footer.php');
echo "</body>
</html>
";
CloseCon($conn);
?>
