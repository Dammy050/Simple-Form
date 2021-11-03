<?php include "includes/db.php" ?>
<?php include "includes/function.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=], initial-scale=1.0">

    <!-- CSS only -->
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Open+Sans&display=swap" rel="stylesheet">

    <title>Bayard</title>
</head>

<body>
    <main>
        <?php include "includes/header.php" ?>

        <!-- Left side with image  -->
        <div class="row align-items-md-stretch">
            <div class="col-md-6 leftMain">
                <h1 class="p-3 pt-5 leftMainText">Geofencing: Location-based Technology for Recruitment Strategies.</h1>
            </div>


            <!-- Right side with form -->
            <div class="col-md-6">
                <div class="h-100 p-5">
                    <div class="mb-3">
                        <h4 class="fontMon">Connect with one of our
                            experts to learn more!</h4>
                    </div>
                    <form action="./" method="post">
                        <div class="mb-3">
                            <label for="name" class="form-label lh-lg fw-bold smallFont">NAME *</label>
                            <input type="text" name="name" class="form-control form-control-lg rounded-0 border border-2" id="name" aria-describedby="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label lh-lg fw-bold smallFont">EMAIL *</label>
                            <input type="email" name="email" class="form-control form-control-lg rounded-0 border border-2" id="email" aria-describedby="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="phoneNumber" class="form-label lh-lg fw-bold smallFont">PHONE NUMBER *</label>
                            <input type="tel" name="tel" class="form-control form-control-lg rounded-0 border border-2" id="phoneNumber" aria-describedby="phoneNumber" required>
                        </div>
                        <div class="mb-3">
                            <label for="industry" class="form-label lh-lg fw-bold smallFont">INDUSTRY *</label>
                            <input type="text" name="industry" class="form-control form-control-lg rounded-0 border border-2" id="industry" aria-describedby="industry" required>
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="submit" class=" fontMon w-100 p-3 btn btn-primary rounded-pill">SEND AWAY!</button>
                        </div>
                    </form>
                    <?php if (isset($_POST['submit'])) { ?>
                        <div class="alert text-center alert-success" role="alert">
                            <?php
                            if ($error) {
                                echo $error;
                            } ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>


        <?php include "includes/footer.php" ?>
    </main>

</body>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>