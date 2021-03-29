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
  <title>Profile</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
 
  <style type='text/css'>
    body {
      margin-top: 20px;
      background: #f8f8f8
    }
    .form-group {
      position: relative;
      width: 100%;
      margin: 1rem 0;
    }

    .form-group i {
      position: absolute;
      top: 50%;
      left: 1rem;
      transform: translateY(-50%);
      font-size: 1.4rem;
      color: var(--gray-2);
    }

    .form-group input {
      width: 100%;
      font-size: 1rem;
      border-radius: 0.5rem;
      border: 0.125rem solid var(--white);
      outline: none;
    }
  </style>
</head>
<header style='margin-top: -20px'>";
include('navbar.php');
echo"</header>
<body style='background-image: linear-gradient(to bottom, #1f1f1f, #212121, #242424, #262626, #292929, #292929, #2a2a2a, #2a2a2a, #292929, #272727, #262626, #252525);
}'>
  <div class='container' style='margin-top: 20px;'>
    <div class='row flex-lg-nowrap'>
      <div class='col-12 col-lg-auto mb-3' style='width: 200px;'>
      </div>
      <div class='col'>
        <div class='row'>
          <div class='col mb-3'>
            <div class='card' style='background-image: linear-gradient(to bottom, #686566, #6b6869, #6e6b6c, #716f70, #747273, #767475, #777678, #79787a, #7a7a7c, #7a7c7e, #7b7e7f, #7d8080);box-shadow: 0 0 25px #000;border-radius: 10px;background-image: linear-gradient(rgb(31, 31, 31), rgb(33, 33, 33), rgb(36, 36, 36), rgb(38, 38, 38), rgb(41, 41, 41), rgb(41, 41, 41), rgb(42, 42, 42), rgb(42, 42, 42), rgb(41, 41, 41), rgb(39, 39, 39), rgb(38, 38, 38), rgb(37, 37, 37));color: white;box-shadow: 0 0 25px #000;border-radius: 10px;'>
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
                                  <input class='form-control' type='password' name='cpwd' id='pass' value=$pwd>
				  <i class='icon ion-eye' id='togglePassword' style='margin-left: 255px; margin-top: 15px; color: gray; cursor: pointer'></i>
                                </div>
                              </div>
                            </div>
                            <div class='row'>
                              <div class='col'>
                                <div class='form-group'>
                                  <label>New Password</label>
                                  <input class='form-control' type='password' name='npwd' id='pass1' value=$pwd>
				  <i class='icon ion-eye' id='togglePassword1' style='margin-left: 255px; margin-top: 15px; color: gray; cursor: pointer'></i>
                                </div>
                              </div>
                            </div>
                            <div class='row'>
                              <div class='col'>
                                <div class='form-group'>
                                  <label>Confirm <span class='d-none d-xl-inline'>Password</span></label>
                                  <input class='form-control' type='password' name='ccpwd' id='pass2' value=$pwd>
				  <i class='icon ion-eye' id='togglePassword2' style='margin-left: 255px; margin-top: 15px; color: gray; cursor: pointer'></i>
				 </div>
                              </div>
                            </div>
                          </div>
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
  const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#pass');
  togglePassword.addEventListener('click', function (e) {
     const type =
        password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        this.classList.toggle('ion-eye-disabled');
  });
  const togglePassword1 = document.querySelector('#togglePassword1');
  const password1 = document.querySelector('#pass1');
  togglePassword1.addEventListener('click', function (e) {
     const type =
        password1.getAttribute('type') === 'password' ? 'text' : 'password';
        password1.setAttribute('type', type);
        this.classList.toggle('ion-eye-disabled');
  });
  const togglePassword2 = document.querySelector('#togglePassword2');
  const password2 = document.querySelector('#pass2');
  togglePassword2.addEventListener('click', function (e) {
     const type =
        password2.getAttribute('type') === 'password' ? 'text' : 'password';
        password2.setAttribute('type', type);
        this.classList.toggle('ion-eye-disabled');
  });
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
echo "<script src='https://unpkg.com/ionicons@5.4.0/dist/ionicons.js'></script>
</body>
</html>
";
CloseCon($conn);
?>
