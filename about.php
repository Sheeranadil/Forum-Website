<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>About - InfoSphere</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
      body {
    
      font-family: cursive;/* Stylish font */
    }
        /* Add custom CSS styles for the About page */
        .jumbotron {
            background-color: #f8f9fa; /* Light gray background */
        }
        .unsplash-credit {
            font-size: 12px;
            color: #666;
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <?php include 'partials/_dbconnect.php';?>
    <?php include 'partials/_header.php';?>

    <div class="container mt-5">
        <!-- Add logo here -->
        <div class="text-center mb-4">
            <img src="img/Infosphere.png" alt="InfoSphere Logo" style="max-width: 200px;">
        </div>

        <!-- Add image of the founder -->
        <div class="row mb-4">
            <div class="col-md-6 offset-md-3 text-center">
                <img src="img/founder3.png" class="img-fluid rounded-circle" alt="Founder Image" style="max-width: 300px;">
                <p class="mt-2">Founder: Sheeran Adil</p>
                <p class="mt-2">Email: sheeranadil123@gmail.com</p>
            </div>
        </div>

        <div class="jumbotron">
        <h1 class="display-8" style="text-align: center;">About InfoSphere</h1>


            <p class="lead">InfoSphere is your ultimate destination for exploring different programming platforms and technologies.</p>
            <hr class="my-4">
            <p>We provide comprehensive information, tutorials, and resources on various programming languages, frameworks, and tools to help you advance your skills and stay updated with the latest trends in the tech industry.</p>
            <p>Whether you're a beginner looking to learn the basics or an experienced developer seeking to master advanced concepts, InfoSphere has something for everyone.</p>
        </div>

        <div class="row">
            <div class="col-md-4">
                <img src="https://source.unsplash.com/900x1400/?code,programming" class="img-fluid rounded" alt="Code">
                
            </div>
            <div class="col-md-4">
                <img src="https://source.unsplash.com/900x1400/?coding,developer" class="img-fluid rounded" alt="Coding">
                
            </div>
            <div class="col-md-4">
                <img src="https://source.unsplash.com/900x1400/?desktop,laptop" class="img-fluid rounded" alt="Programming">
              
            </div>
        </div>
    </div>

    <div class="pt-4">
    <?php include 'partials/_footer.php';?>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7
