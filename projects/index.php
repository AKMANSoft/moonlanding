<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects - MoonLanding Media</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php
    $news_header = false;
    $primary_btn_title = "Submit Project";
    include("../includes/header.php") ?>

    <section class="projects_page home_section">
        <div class="section_left">
            <h1 class="heading">Lorem ipsum dolor sit amet consectetur</h1>
            <p class="description lg">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            <div class="nft_tags_container">
                <p class="head lg"><i class="bi bi-plus normal text-primary"></i> View NFTs</p>
                <div class="nft_tags">
                    <button type="button" class="nft_tag text-light">Most Popular</button>
                    <button type="button" class="nft_tag text-light">Upcoming</button>
                    <button type="button" class="nft_tag text-light">Recently Closed</button>
                    <button type="button" class="nft_tag text-light">Miniting Soon</button>
                </div>
            </div>
        </div>
        <div class="section_right">
            <div class="featured_nft_card">
                <img src="images/nft_2.png" width="260" height="260" alt="Nft Image">
                <div class="account">
                    <h4 class="title">Cat Fight P2E NFT</h4>
                    <img src="/images/icons/verification_badge.svg" width="20" height="20" alt="" class="verification_badge">
                    <img src="/images/icons/verification_badge.svg" width="20" height="20" alt="" class="verification_badge">
                </div>
            </div>
        </div>
    </section>

    <section class="projects_page featured_projects">
        <?php $heading = "Featured Projects";
        $btn_title = "Get Featured";
        include("../includes/nft_projects_grid_component.php") ?>
    </section>

    <?php include("../includes/join_news_letter_component.php") ?>
    <?php include("../includes/footer.php") ?>
</body>

</html>