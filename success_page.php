<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Submitted Successfully - MoonLanding Media</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <?php
    $news_header = false;
    $primary_btn_title = "Submit Project";
    include("./includes/header.php") ?>

    <section class="success_page home_section">
        <h1 class="heading">Project submitted successfuly!</h1>
        <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
        <div class="verification_cards">
            <div class="verification_card">
                <div class="head">
                    <p class="title text-light">Free low level verification</p>
                    <img src="/images/icons/verified_icon.svg" width="20" height="20" alt="" class="verification_icon">
                </div>
                <h3 class="sm text-primary price">Free</h3>
                <ul>
                    <li class="p text-light">Please provide text to be written here.
                        the process the avail this verification</li>
                </ul>
            </div>
            <div class="verification_card">
                <div class="head">
                    <p class="title text-light">KYC Verified</p>
                    <img src="/images/icons/kyc_badge.svg" height="30" alt="" class="verification_icon">
                </div>
                <h3 class="sm text-primary price">1.0 ETH</h3>
                <ul>
                    <li class="p text-light">Please provide text to be written here.
                        the process the avail this verification</li>
                </ul>
                <a href="#" class="btn primary">Get KYC Verified</a>
            </div>
        </div>
    </section>


    <?php include("./includes/footer.php") ?>

    <script src="/scripts/components/custom-svg.js"></script>
    <script src="/scripts/upcoming_projects.js"></script>
</body>

</html>