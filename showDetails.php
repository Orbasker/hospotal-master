<!DOCTYPE html>
<html>
  <head>
    <script src="js/components/navbar-menu.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Patient Details - Hospital Master</title>
  </head>
  <body>
    <navbar-menu>
      <section class="p-4 sm:ml-64 m-16">
        <h1>Patient Details</h1>
        <h2><strong>Patient ID:</strong> <span id="patient_id"></span></h2>
        <h2><strong>Patient Name:</strong> <span id="patient_name"></span></h2>
        <h2><strong>Doctor:</strong> <span id="patient_doctor"></span></h2>
        <h2><strong>Status:</strong> <span id="patient_status"></span></h2>
      </section>
    </navbar-menu>
    <script src="js/components/showDetails.js"></script>
    <script src="js/validate_user.js"></script>
    <!-- <script src="js/js/index.js"></script> -->
  </body>
</html>