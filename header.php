
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title; ?></title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="icon" type="image/png" href="./assets/img/icons/Brel_Logo.webp">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="./assets/js/main.js"></script>

</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" aria-label="Offcanvas navbar large">
      <div class="container-fluid">
        <a href="index.php"><img src="./assets/img/icons/Catalog BREL LOGO.webp" alt="" width="172px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2"
          aria-controls="offcanvasNavbar2">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end text-bg-light" tabindex="-1" id="offcanvasNavbar2"
          aria-labelledby="offcanvasNavbar2Label">
          <div class="offcanvas-header">
            <img class="offcanvas-title" src="./assets/img/icons/Catalog BREL LOGO.webp" alt="" width="172px">
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 d-flex justify-content-center align">
             
                <a class="nav-link" aria-current="page" href="index.php">Home</a>
                <a class="nav-link" aria-current="page" href="About.php">About us</a>
                <a class="nav-link" aria-current="page" href="service.php">Services</a>
                <a class="nav-link" aria-current="page" href="OurProducts.php">Our Products</a>

                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Brel Resco</a>
                                    <div class="dropdown-menu m-0 bg-secondary rounded-0">
                                        <a href="BrelRescoCashflow.php" class="dropdown-item">Brel Resco Cash flow</a>
                                        <a href="RenawableEnergyServiceCompany.php" class="dropdown-item">Renawable Energy Service Company</a>
                                    
                                    </div>
                                </div>
              
              <li class="nav-item nav_item">
                <a class="nav-link" aria-current="page" href="Contactus.php">Contact us</a>
              </li>

              <li class="nav-item nav_item">
                <a class="nav-link" aria-current="page" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" href="SolarCalculater.php">Solar Calculator</a>
              </li>
            </ul>
            <div class="middle">
              <a target="_blank" href="./assets/img/bg-images/home/Brouchers/BREL Brochure.pdf" download="BREL Broucher"
                class="bg_background btn1 rounded-0 py-3 px-lg-2 d-none d-lg-block">Get Broucher<i
                  class="bi bi-arrow-right m-2"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>



  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="p-4">
          <div class="mb-3">
          <label for="userName">Name</label>
          <input type="text" class="form-control" id="userName" placeholder="Enter your name" required>
          </div>
          <div class="mb-3">
          <label for="userEmail">Email</label>
           <input type="email" class="form-control" id="userEmail" placeholder="Enter your email" required>
          </div>
          <div class="mb-3">
          <label for="userPhone">Phone</label>
          <input type="tel" class="form-control" id="userPhone" placeholder="Enter your phone number" required>
          </div>
          <div class="mb-3">
          <label for="userAddress">Address</label>
                        <input type="text" class="form-control" id="userAddress" placeholder="Enter your address" required>
          </div>
          <div class="mb-3">
          <label for="userCity">City</label>
          <input type="text" class="form-control" id="userCity" placeholder="Enter your city" required>
          </div>
          <div class="mb-3">
          <label for="consumption">Electricity Consumption (kWh):</label>
          <input type="number" class="form-control" id="consumption" placeholder="Enter your consumption" required>
          </div>
          <div class="mb-3">
           <label for="rate">Rate (per kWh in $):</label>
          <input type="number" class="form-control" id="rate" placeholder="Enter the rate" required>
          </div>
        </form>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-primary" id="sendMessageBtn">Send message</button>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="resultModal" tabindex="-1" aria-labelledby="resultModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="resultModalLabel">Form Submission Result</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="resultContent">
                <!-- Form submission result will be displayed here -->
            </div>
        </div>
    </div>
</div>



<script>
document.getElementById('sendMessageBtn').addEventListener('click', function() {
    // Get form data
    var userName = document.getElementById('userName').value;
    var userEmail = document.getElementById('userEmail').value;
    var userPhone = document.getElementById('userPhone').value;
    var userAddress = document.getElementById('userAddress').value;
    var userCity = document.getElementById('userCity').value;
    var consumption = parseFloat(document.getElementById('consumption').value);
    var rate = parseFloat(document.getElementById('rate').value);

    // Calculate yearly cost
    var yearlyCost = consumption * rate * 365; // Assuming 365 days in a year

    // Prepare result message
    var resultMessage = '<strong style="padding: 15px;">Name: </strong>' + userName + '<br>' +
                        '<strong style="padding: 15px;">Email: </strong>' + userEmail + '<br>' +
                        '<strong style="padding: 15px;">Phone: </strong>' + userPhone + '<br>' +
                        '<strong style="padding: 15px;">Address: </strong>' + userAddress + '<br>' +
                        '<strong style="padding: 15px;">City: </strong>' + userCity + '<br>' +
                        '<strong style="padding: 15px;">Electricity Consumption (kWh): </strong>' + consumption + '<br>' +
                        '<strong style="padding: 15px;">Rate (per kWh in $): </strong>' + rate + '<br>' +
                        '<strong style="padding: 15px;">Yearly Cost: </strong>$' + yearlyCost.toFixed(2);

    // Display result in result modal
    document.getElementById('resultContent').innerHTML = resultMessage;
    var resultModal = new bootstrap.Modal(document.getElementById('resultModal'));
    resultModal.show();
});

document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('sendMessageBtn').addEventListener('click', function () {
        // Get form inputs
        var userName = document.getElementById('userName').value.trim();
        var userEmail = document.getElementById('userEmail').value.trim();
        var userPhone = document.getElementById('userPhone').value.trim();
        var userAddress = document.getElementById('userAddress').value.trim();
        var userCity = document.getElementById('userCity').value.trim();
        var consumption = document.getElementById('consumption').value.trim();
        var rate = document.getElementById('rate').value.trim();
        

        // Validation checks
        if (userName === '' || userEmail === '' || userPhone === '' || userAddress === '' || userCity === '' || consumption === '' || rate === '') {
    var alertDiv = document.createElement('div');
    alertDiv.classList.add('alert', 'alert-danger');
    alertDiv.textContent = 'Please fill out all fields.';

    // Append the alert to a container div with id "alertContainer" if you have one
    var alertContainer = document.getElementById('alertContainer');
    if (alertContainer) {
        alertContainer.appendChild(alertDiv);
    } else {
        // If you don't have a container div, append the alert to the body
        document.body.appendChild(alertDiv);
    }
    
    return false; // Prevent form submission
}
        // Additional validation checks (e.g., email format, phone number format)

        // If all checks pass, submit the form
        document.getElementById('exampleModal').submit();
    });
});
</script>