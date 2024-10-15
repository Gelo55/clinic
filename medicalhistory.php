<?php

  include 'connect.php';

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="assets/css/medicalhistory.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/fontawesome.min.js">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
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
            <a href="#">
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
      <a class="dropdown-a" href="#"><span class="droplinks_name">Student Information</span></a>
      <a class="dropdown-a" href="#"><span class="droplinks_name">Manage Student</span></a>
    </div>

  </div>

  <div class="dropdownstaff">
    <button class="dropdown-btn"> <i class='bx bx-user' ></i>
      <span class="droplinks_name">Clinic Staff</span>
      <i class="fa fa-caret-down" id="third"></i>
    </button>
    <div class="dropdown-container2">
      <a class="dropdown-a" href="#"><span class="droplinks_name">Manage Staff</span></a>
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
    <button class="dropdown-btn"> <i class='bx bx-plus-medical' ></i>
      <span class="droplinks_name">Admission</span>
      <i class="fa fa-caret-down" id="fourth"></i>
    </button>
    <div class="dropdown-container3">
      <a class="dropdown-a" href="medhealth.php"><span class="droplinks_name">Admission History</span></a>
      <a class="dropdown-a" href="medstatus.php"><span class="droplinks_name">Manage Admission</span></a>
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
    <button class="dropdown-btn"> <i class='bx bx-plus-medical' ></i>
      <span class="droplinks_name">Medical</span>
      <i class="fa fa-caret-down" id="first"></i>
    </button>
    <div class="dropdown-container3">
      <a class="dropdown-a" href="medhealth.php"><span class="droplinks_name">Health Form</span></a>
      <a class="dropdown-a" href="medstatus.php"><span class="droplinks_name">Medical Result</span></a>
      <a class="dropdown-a" href="#"><span class="droplinks_name">Medical History</span></a>
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
    <button class="dropdown-btn"> <i class='bx bx-plus-medical' ></i>
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
    <button class="dropdown-btn"> <i class='bx bx-plus-medical' ></i>
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
<div id="uppernav">
    <div class="upnav">
    <button class="openbtn" onclick="toggleNav()">☰</button>

</div>
<!-- SIDEBAR -->


<div class="container">
    <div class="head-title">
				<div class="left">
					<h1>Student</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Manage</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">information</a>
						</li>
					</ul>
				</div>
    </div> 
</div><br>
<!-- SIDEBAR -->

 
    
<div clas="container">
    <div class="frame">

    <div class="history-container">
        <h1>Medical History</h1>

        <!-- CBC Section -->
        <div>
            <h1 class="section-title"> (CBC)</h1>
            <table>
                <thead>
                    <tr>
                        <th>Test</th>
                        <th>Result</th>
                        <th>Reference Range</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Hemoglobin</td>
                        <td>13.5 g/dL</td>
                        <td>12-16 g/dL</td>
                    </tr>
                    <tr>
                        <td>White Blood Cells (WBC)</td>
                        <td>6,500 /µL</td>
                        <td>4,000-11,000 /µL</td>
                    </tr>
                    <tr>
                        <td>Platelets</td>
                        <td>250,000 /µL</td>
                        <td>150,000-450,000 /µL</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Urine Analysis Section -->
        <div>
            <h2 class="section-title">Urine Analysis</h2>
            <table>
                <thead>
                    <tr>
                        <th>Test</th>
                        <th>Result</th>
                        <th>Reference Range</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Color</td>
                        <td>Yellow</td>
                        <td>Normal</td>
                    </tr>
                    <tr>
                        <td>Specific Gravity</td>
                        <td>1.020</td>
                        <td>1.005-1.030</td>
                    </tr>
                    <tr>
                        <td>Protein</td>
                        <td>Negative</td>
                        <td>Negative</td>
                    </tr>
                    <tr>
                        <td>Glucose</td>
                        <td>Negative</td>
                        <td>Negative</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- X-ray Section -->
        <div>
            <h2 class="section-title">X-ray</h2>
            <table>
                <thead>
                    <tr>
                        <th>Region</th>
                        <th>Findings</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Chest</td>
                        <td>Normal lung fields. No abnormalities detected.</td>
                    </tr>
                    <tr>
                        <td>Abdomen</td>
                        <td>No abnormal masses or signs of obstruction.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <p class="notes">* All values should be confirmed by the attending physician.</p>
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

<script>
    function selectOption(element, dropdownId) {
      var selectedText = element.textContent;
      var dropdownButton = document.getElementById(dropdownId);
      dropdownButton.textContent = selectedText;
      dropdownButton.classList.add('active'); // Optional: Adds a style indicating selection
    }
  </script>

<script src="script.js"></script>

</html>