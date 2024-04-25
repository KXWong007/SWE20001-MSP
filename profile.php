<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="./css/profilestyle.css">
  <title>Profile Page</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <!--Header-->
  <?php include("header.php"); ?>
  
  <!--Code for the body-->
  <div class="container">
    <div class="profile">
      <div class="profile-header">
        <!--Here to put the user pic-->
        <img src="./images/usertest.png" alt="profile" class="profile-img">
        <div class="profile-text-container">
          <h1 class="profile-title">FoodEdge User</h1>
          <div class="borderpage">
            <!--Where we implement the section to click on account and etc-->
            <a href="#" class="borderpage-link" data-section="account"><i class="fa-solid fa-circle-user menu-icon"> Account</i></a>
            <a href="#" class="borderpage-link" data-section="notification"><i class="fa-solid fa-bell menu-icon"> Notification</i></a>
            <a href="#" class="borderpage-link" data-section="settings"><i class="fa-solid fa-gear menu-icon"> Setting</i></a>
            <a href="#" class="borderpage-link" data-section="subscription"><i class="fa-solid fa-dollar menu-icon"> Subscription</i></a>
            <a href="#" class="borderpage-link" data-section="logout"><i class="fa-solid fa-right-from-bracket"> LogOut</i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="section-container">
      <form class="account" id="account-section">
        <!-- Account Edit Section -->
        <div class="account-header">
          <h1 class="account-title">Account Settings</h1>
        </div>
        <div class="account-edit">
          <div class="input-container">
            <label>First Name</label>
            <input type="text" id="first-name" placeholder="First Name">
          </div>
          <div class="input-container">
            <label>Last Name</label>
            <input type="text" id="last-name" placeholder="Last Name">
          </div>
          <div class="input-container">
            <label>Email Address</label>
            <input type="email" id="email" placeholder="Email Address">
          </div>
          <div class="input-container">
            <label>Phone Number</label>
            <input type="text" id="phone-number" placeholder="Phone Number">
          </div>
          <div class="input-container">
            <label>Home Address</label>
            <textarea id="home-address" placeholder="Address"></textarea>
          </div>
        </div>
        <div class="btn-container">
          <button class="btn-cancel" onclick="cancelForm()">Cancel</button>
          <button class="btn-save" type="button" onclick="saveForm()">Save</button>
        </div>
      </form>
      <!-- Notification Section -->
      <form class="account" id="notification-section" style="display: none;">
        <div class="account-header">
          <h1 class="account-title">Notification Settings</h1>
        </div>
        <!-- Add content for notification settings -->
        <div class="account-edit">
          <div class="checkbox-container">
            <input type="checkbox" id="checkbox1">
            <label for="checkbox1">Receive the latest notifications of our deals or updates</label>
          </div>
        </div>
        <div class="account-edit">
          <div class="checkbox-container">
            <input type="checkbox" id="checkbox2">
            <label for="checkbox2">Be informed when FoodEdge will be closed during certain holidays</label>
          </div>
        </div>
      </form>

      <!-- Settings Section--> 
      <form class="account" id="settings-section" style="display: none;">
        <div class="account-header">
          <h1 class="account-title">Settings</h1>
        </div>
        <!-- Add content for general settings -->
        <div class="account-edit">
          <h3>Change Password</h3>
          <br>
          <div class="input-container">
            <label>Enter New Password</label>
            <input type="password" placeholder="New Password">
          </div>
          <br><br>
          <div class="input-container">
            <label>Re-enter New Password</label>
            <input type="password" placeholder="Re-enter">
          </div>
          <button class="btn-logout" onclick="">Change</button>
        </div>
      </form>
      <!-- Subscription Section -->
      <form class="account" id="subscription-section" style="display: none;">
        <div class="account-header">
          <h1 class="account-title">Subscription</h1>
        </div>
        <h4>Would you like to subscribe to become a member?</h4>
        <p>By becoming a member, you will be able to have cheaper offers and faster service!</p>
        <p>Click the button to go to the membership page</p>
        <br>
        <div class="btn-container">
          <a class="btn-membership" href="membership.php">Subscribe for Membership</a>
        </div>
      </form>

      <!-- Logout Section -->
      <form class="account" id="logout-section" style="display: none;">
        <div class="account-header">
          <h1 class="account-title">Logout</h1>
        </div>
        <div class="logout-edit">
          <h3>Click the button to log out of your account</h3>
          <br>
          <button class="btn-logout" onclick="logout()">Logout</button>
        </div>
      </form>
    </div>
  </div>

  <!--Footer-->
  <?php include("footer.php"); ?>
  <script src="./js/profile.js"></script>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const sectionLinks = document.querySelectorAll('.borderpage-link');
      sectionLinks.forEach(link => {
        link.addEventListener('click', function (e) {
          e.preventDefault();
          const sectionName = this.getAttribute('data-section');
          fetchSection(sectionName);
          // Remove the 'active' class from all links
          sectionLinks.forEach(link => {
            link.classList.remove('active');
          });
          // Add the 'active' class to the clicked link
          this.classList.add('active');
        });
      });
    });

    function fetchSection(sectionName) {
      const sections = document.querySelectorAll('.account');
      sections.forEach(section => {
        section.style.display = 'none';
      });
      const selectedSection = document.getElementById(sectionName + '-section');
      if (selectedSection) {
        selectedSection.style.display = 'block';
      }
    }

    function cancelForm() {
      const inputs = document.querySelectorAll('.account input, .account textarea');
      inputs.forEach(input => {
        input.value = '';
      });
    }

    function saveForm() {
      alert("Your information has been saved!");
    }

    function logout() {
      alert("You have been logged out.");
      window.location.href = "index.php"; // Redirect to profile page
    }
  </script>
</body>
</html>

