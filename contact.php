<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="product.css">
    <link rel="icon" href="rr.png" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/41ef6f5113.js" crossorigin="anonymous"></script>
    <title>Saarrthi Design</title>
</head>

<body>


    <!-- Header Baba -->
    <header class="site-header sticky-top py-1">
        <nav class="container d-flex flex-column flex-md-row justify-content-between">
            <a class="py-2" href="#" aria-label="Product">
                <img src="saarrthi logo1.png" class="d-block mx-auto" width="110" height="29" alt="" loading="lazy">
            </a>
            <a class="py-2 d-none d-md-inline-block" href="SaarrthiDesign.html">Home</a>
            <a class="py-2 d-none d-md-inline-block" href="aboutus.html">About</a>
            <a class="py-2 d-none d-md-inline-block" href="product.html">Product</a>
            <a class="py-2 d-none d-md-inline-block" href="gallery.html">Gallery</a>
            <a class="py-2 d-none d-md-inline-block" href="#">Contact</a>
            <a class="py-2 d-none d-md-inline-block" href="Saarrthiinterior.html">Saarrthi Interior</a>
        </nav>
    </header>
    <!-- php baba -->

    <?php
    
        $to = 'saarrthidesign@gmail.com,anshmodi250@gmail.com';

    $subject = 'Contact Us';
    
    $message = '<html><body>';
    $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
    $message .= "<tr style='background: #eee;'><td><strong>Name</strong> </td><td>" . strip_tags($_POST['name']) . "</td></tr>";
    $message .= "<tr><td><strong>Email</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
    $message .= "<tr><td><strong>Massage</strong> </td><td>" . strip_tags($_POST['msg']) . "</td></tr>";
    $message .= "<tr><td><strong>Contact</strong> </td><td>" . strip_tags($_POST['contact']) . "</td></tr>";
    $message .= "</table>";
    $message .= "</body></html>";

    $headers = "From: " . strip_tags($_POST['email']) . "\r\n";
    $headers .= "CC: hasmukhmodi1012@gmail.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $msg = $_POST['msg'];
        $city = $_POST['city'];

        $servername = 'localhost:3306';
        $username = 'Saarrthidesign';
        $password = 'saarrthidesign121@';
        $database = 'Saarrthidesign';

        $con = mysqli_connect($servername, $username, $password, $database);
        if (!$con) {
            die("Sorry we failed to connect: " . mysqli_connect_error());
        } else {
            $sql = "INSERT INTO `info` (`Name`, `Email`, `Contact`, `Msg`,`City`) VALUES ('$name', '$email', '$contact', '$msg','$city')";

            $result = mysqli_query($con, $sql);

            if ($result) {
                echo   '<div class="alert alert-success" role="alert">
        <strong>Thank You!!</strong> We are Contact Soon!<a href="index.html" class="navbar-brand"> Back To Home</a>
      </div>';
            } else {
                echo   '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>We are Sorry!!</strong> Due to Technicle issue We are Not Contact You!<a href="index.html" class="navbar-brand"> Back To Home</a>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            }
        }
    }
    ?>

    <div class="d-flex flex-column bd-highlight mb-3">
        <div class="p-2 bd-highlight mx-auto mt-4">
            <h3 class="text-danger text-center">Contact</h3>
            <ul class="list-unstyled fs-4">
                <li class="my-2"><a class="text-dark" href="tel:942-884-3025"><i class="fas fa-phone-alt">&nbsp;</i>Hasmukh
                        Modi</a></li>
                <li class="my-2"><a class="text-dark" href="tel:982-432-0471"><i class="fas fa-phone-alt">&nbsp;</i>Dipesh
                        Rathod</a></li>
                <li class="my-2"><a class="text-dark" href="https://api.whatsapp.com/send?phone=919428843025"><i class="fab fa-whatsapp fa-lg">&nbsp;</i>Whatsapp</a></li>
                <li class="my-2"><a class="text-dark" href="https://www.facebook.com/saarrthidesign/"><i class="fab fa-facebook fa-lg">&nbsp;</i>Facebook</a>
                </li>
                <li class="my-2"><a class="text-dark" href="https://www.facebook.com/saarrthidesign/"><i class="far fa-envelope-open fa-lg">&nbsp;</i>Gmail</a></li>
            </ul>
        </div>
        <div class="p-2 bd-highlight">
            <hr>
            <h3 class="text-danger text-center">Feedback</h3>
            <form class="" method="post">
                <div class="form-row justify-content-center">
                    <div class="form-group col-md-5">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" id="validationTooltip01" placeholder="Mark" required>
                    </div>
                </div>
                <div class="form-row justify-content-center">
                    <div class="form-group col-md-5">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" id="inputEmail4" required pattern="^(?![\.\-_])((?![\-\._][\-\._])[a-z0-9\-\._]){0,63}[a-z0-9]@(?![\-])((?!--)[a-z0-9\-]){0,63}[a-z0-9]\.(|((?![\-])((?!--)[a-z0-9\-]){0,63}[a-z0-9]\.))(|([a-z]{2,14}\.))[a-z]{2,14}$" placeholder="abc@xyz.com">
                    </div>
                </div>
                <div class="form-row justify-content-center">
                    <div class="form-group col-md-5">
                        <label for="contact">Contact Number</label>
                        <input type="text" name="contact" id="contact" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" class="form-control" id="inputEmail4" placeholder="1234567890">
                    </div>
                </div>
                <div class="form-row justify-content-center">
                    <div class="form-group col-md-5">
                        <label for="msg">Your Massage</label>
                        <textarea class="form-control" name="msg" id="msg" rows="1" placeholder="Type Your Feedback" required></textarea>
                    </div>
                </div>
                <div class="form-row justify-content-center">
                    <div class="form-group col-md-5">
                        <label for="city">City</label>
                        <input type="text" name="city" class="form-control" placeholder="Your City Name" id="city" required>
                    </div>
                </div>
                <div class="form-row justify-content-center">
                    <div class="form-group col-md-5">
                        <button type="submit" class="btn btn-outline-dark">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>




    <!-- footer baba -->

    <footer class="container py-5">
        <div class="row">
            <div class="col-12 col-md">
                <a href="index.html"><img class="d-block mb-2" src="rr.png" alt="" width="80px"></a>
                <small class="d-block mb-3 text-dark">
                    <p>&copy; 2008-
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                    </p>
                </small>
            </div>
            <div class="col-6 col-md">
                <h4 class="text-danger">Contact</h4>
                <ul class="list-unstyled text-small">
                    <li class="my-2"><a class="text-dark" href="tel:942-884-3025"><i class="fas fa-phone-alt">&nbsp;</i>Hasmukh
                            Modi</a></li>
                    <li class="my-2"><a class="text-dark" href="tel:982-432-0471"><i class="fas fa-phone-alt">&nbsp;</i>Dipesh
                            Rathod</a></li>
                    <li class="my-2"><a class="text-dark" href="https://api.whatsapp.com/send?phone=919428843025"><i class="fab fa-whatsapp fa-lg">&nbsp;</i>Whatsapp</a></li>
                    <li class="my-2"><a class="text-dark" href="https://www.facebook.com/saarrthidesign/"><i class="fab fa-facebook fa-lg">&nbsp;</i>Facebook</a>
                    </li>
                    <li class="my-2"><a class="text-dark" href="mailto:saarrthidesign@gmail.com"><i class="far fa-envelope-open fa-lg">&nbsp;</i>Gmail</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h4 class="text-info">Links</h4>
                <ul class="list-unstyled text-small">
                    <li><a class="text-dark" href="aboutus.html">About</a></li>
                    <li><a class="text-dark" href="product.html">Product</a></li>
                    <li><a class="text-dark" href="gallery.html">Gallery</a></li>
                    <li><a class="text-dark" href="contact.php">Contact</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h4 class="text-warning">Other</h4>
                <ul class="list-unstyled text-small">
                    <li><a class="text-dark" href="Saarrthiinterior.html">Saarrthi Interior</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <ul class="list-unstyled text-small">
                    <li>
                        <p class="ml-1"><a href="#" class="text-success">Back to top</a></p>
                    </li>
                </ul>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>
