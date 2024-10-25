

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="assets/css/profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/fontawesome.min.js">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Clinic Management System</title>
</head>
<body>
    <!-- SIDEBAR -->
 <div id="sidenav" class="sidenav">
    <img src="assets/images/bcp.png" alt="img" class="bcp">
    <ul class="nav-link">
        <li class="bell">
        <a href="#" class="active">
            <i class='bx bx-bell'></i>
        </a>
        </li>
        <li class="settings">
        <a href="#">
            <i class='bx bx-cog'></i>
        </a>
        </li>
        <img src="assets/images/changli.jpg" alt="avatar" class="admin-profile">
        <table class="user-profile">
          <tr>
            <td><span class="user-name"><b>admin name</b></span></td>
          </tr>
          <tr>
              <td> <span class="user-gmail">adminid@gmail.com</span></td>    
          </tr>
        </table>        
    </ul>

    <table class="dashboard">
      <tr>
        <td>
          <ul class="nav-links">
          <li>
            <a href="dash.php">
              <i class='bx bx-home' ></i>
              <span class="links_name">Home</span>
            </a>
          </li>
    <div class="dropdownstudent">
    <button class="dropdown-btn"> <i class='bx bx-user' ></i>
      <span class="droplinks_name">Student</span>
      <i class="fa fa-caret-down" id="second"></i>
    </button>
    <div class="dropdown-container1">
      <a class="dropdown-a" href="managestud.php"><span class="droplinks_name">Manage Student</span></a>
    </div>

  </div>

  <div class="dropdownstaff">
    <button class="dropdown-btn"> <i class='bx bx-user' ></i>
      <span class="droplinks_name">Clinic Staff</span>
      <i class="fa fa-caret-down" id="third"></i>
    </button>
    <div class="dropdown-container2">
      <a class="dropdown-a" href="managestaff.php"><span class="droplinks_name">Manage Staff</span></a>
    </div>

  </div>
        </ul>   
        </td>
      </tr>            
    </table>

    <table class="table-module">
      <tr>
        <td>
        <div class="dropdownadmission">
    <span class="main"><b>Admission</b></span><br>
    <span class="subs"><b>Admission history</b></span><br><br>
    <button class="dropdown-btn"> <i class='bx bx-add-to-queue' ></i>
      <span class="droplinks_name">Admission</span>
      <i class="fa fa-caret-down" id="fourth"></i>
    </button>
    <div class="dropdown-container3">
    <a class="dropdown-a" href="admithistory.php"><span class="droplinks_name">Admission History</span></a>
    <a class="dropdown-a" href="manageadmit.php"><span class="droplinks_name">Manage Admission</span></a>
    </div>

  </div><br>
        </td>
      </tr>            
    </table>

    <table class="table-module">
      <tr>
        <td>
    <div class="dropdownmedical">
    <span class="main"><b>Medical</b></span><br>
    <span class="subs"><b>Medical Status</b></span><br><br>
    <button class="dropdown-btn"> <i class='bx bx-plus' ></i>
      <span class="droplinks_name">Medical</span>
      <i class="fa fa-caret-down" id="first"></i>
    </button>
    <div class="dropdown-container3">
    <a class="dropdown-a" href="healthform.php"><span class="droplinks_name">Health Form</span></a>
    <a class="dropdown-a" href="medresult.php"><span class="droplinks_name">Medical Result</span></a>
    </div>

  </div><br>
        </td>
      </tr>            
    </table>

   

    <table class="table-module">
      <tr>
        <td>
    <div class="dropdowninventory">
    <span class="main"><b>Inventory</b></span><br>
    <span class="subs"><b>Inventory Monitoring</b></span><br><br>
    <button class="dropdown-btn"> <i class='bx bx-capsule' ></i>
      <span class="droplinks_name">inventory</span>
      <i class="fa fa-caret-down" id="fifth"></i>
    </button>
    <div class="dropdown-container4">
        <a class="dropdown-a" href="medhealth.php"><span class="droplinks_name">Medication</span></a>
     </div>

          </div><br>
        </td>
      </tr>            
    </table>

    <table class="table-module">
      <tr>
        <td>
        <div class="dropdownreport">
    <span class="main"><b>Report</b></span><br>
    <span class="subs"><b>Report Update</b></span><br><br>
    <button class="dropdown-btn"> <i class='bx bx-edit' ></i>
      <span class="droplinks_name">Report and Analytics</span>
      <i class="fa fa-caret-down" id="sixth"></i>
    </button>
    <div class="dropdown-container5">
      <a class="dropdown-a" href="medhealth.php"><span class="droplinks_name">Admission Report</span></a>
      <a class="dropdown-a" href="medstatus.php"><span class="droplinks_name">Inventory Report</span></a>
    </div>

      </div><br>
        </td>
      </tr>            
    </table>
</div>
<div id="uppernav" >
  <div class="upnav">
  <button class="openbtn" onclick="toggleNav()">☰</button>


</div>
<!-- SIDEBAR -->

     <!-- main -->
     <div class="container">
    <div class="head-title">
				<div class="left">
					<h1>Student</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Student</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Information</a>
						</li>
					</ul>
				</div>
    </div> 
</div>
<!-- main -->
    


<div clas="container">
    <div class="frame">
    <div class="settings-container">
    <div class="account-section">
        <h1 id="acc">Account</h1>
        <div class="avatar-section">
            <div class="avatar-placeholder">
                <i class="fas fa-camera"></i>
            </div>
        </div>

        <div class="profile-section">
            <h2 class="info">Profile Information</h2>
          <br>
            <div class="profile-info">
                <div class="form-group1">
                    <label for="firstName">First Name</label>
                    <div class="input-wrapper">
                        <i class="fas fa-user"></i>
                        <input type="text" id="firstName" >
                    </div>
                </div>
                <div class="form-group2">
                    <label for="middleName">Middle Name</label>
                    <div class="input-wrapper">
                        <i class="fas fa-user"></i>
                        <input type="text" id="middleName" >
                    </div>
                </div>
                <div class="form-group3">
                    <label for="lastName">Last Name</label>
                    <div class="input-wrapper">
                        <i class="fas fa-user"></i>
                        <input type="text" id="lastName"  >
                    </div>
                </div>
                <div class="form-group4">
                    <label for="suffix">Suffix</label>
                    <div class="input-wrapper">
                        <i class="fas fa-user"></i>
                        <input type="text" id="suffix" >
                    </div> 
                </div>
                
                <h2 id="second-info">Personal Information</h2>
                <br>
                
                <div class="form-group5">
                    <label for="Email">Email</label>
                    <div class="input-wrapper">
                        <i class="fas fa-envelope"></i>
                        <input type="email" id="e" >
                    </div> 
                </div>  

                <div class="form-group6">
                    <label for="pe">Personal Email</label>
                    <div class="input-wrapper">
                        <i class="fas fa-envelope"></i>
                        <input type="email" id="pe" >
                    </div> 
                </div>

                <div class="form-group7">
                    <label for="pn">Phone Number</label>
                    <div class="input-wrapper">
                        <i class="fas fa-phone"></i>
                        <input type="number" id="phone" >
                    </div> 
                </div>

                <div class="form-group8">
                    <label for="dob">Date of Birth</label>
                    <div class="input-wrapper">
                        <i class="fas fa-calendar"></i>
                        <input type="date" id="birth" >
                    </div> 
                </div>

                
                <div class="form-group9">
                    <label for="add">Address</label>
                    <div class="input-wrapper">
                        <i class="fas fa-location-arrow"></i>
                        <input type="text" id="address" >
                    </div> 
                </div>

                <div class="form-group10">
                    <label for="cs">Civil Status</label>
                    <div class="input-wrapper">
                        <i class="fas fa-user-friends"></i>
                        <input type="text" id="status" >
                    </div> 
                </div>

                <h2 class="security">Secutity</h2>
                <br>
                <h3 class="change">Change your password</h3>

            </div>

            <div class="form-group11">
                <label for="cp"><br>Current Passowrd *</label>
                <div class="input-wrapper">
                  <i class="fas fa-lock icon"></i>
                    <input type="password" id="current" >
                </div> 
            </div>

            <div class="form-group12">
                <label for="np"><br>New password *</label>
                <div class="input-wrapper">
                  <i class="fas fa-lock icon"></i>
                    <input type="password" id="new" >
                </div> 
            </div>

            <div class="form-group13">
              <label for="conf"><br>Confirm password *</label>
              <div class="input-wrapper">
                <i class="fas fa-lock icon"></i>
                  <input type="password" id="confirm" >
              </div> 
          </div>

        </div> 
    </div>
</div>


    </div>
    </div>
</body>

        
<script type="text/javascript">
    function toggleNav() {
    const sidenav = document.getElementById("sidenav");
    const uppernav = document.getElementById("uppernav");

    if (sidenav.style.left === "0px") {
        sidenav.style.left = "-280px";
        uppernav.style.marginLeft = "0";
    } else {
        sidenav.style.left = "0";
        uppernav.style.marginLeft = "280px";
    }
}

var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
    </script>
    

</html>