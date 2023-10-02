<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap cdn -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    />
    <!-- Bootstrap Icons -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"
    />

    <!-- others in css folder -->
    <link rel="stylesheet" href="./css/boxicons.min.css" />
    <!-- own css -->
    <link rel="stylesheet" href="./css/styles.css" />
    <title>Resources</title>
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar">

@include('layouts/secondary_nav')
<!--MAIN NAVBAR -->
<h1 class="text-center mt-3">Download Resources here</h1>
@livewire('download-resource-component')

<!-- ? FOOTER -->
@include("layouts.contact_footer")
<!-- FOOTER -->

<!-- button -->

<!-- Jquery -->
<script src="./js/jquery.js"></script>
<!-- Bootstrap js -->
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
></script>
<!-- my own js -->
<script src="./js/app.js"></script>
<script>
    // Get the current year
    const currentYear = new Date().getFullYear();

    // Update the content of the HTML element
    const currentYearPlaceholder = document.getElementById('currentYear');
    currentYearPlaceholder.textContent = currentYear;
</script>

</body>
</html>
