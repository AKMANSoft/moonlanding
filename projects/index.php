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
            <?php include("../includes/featured_nft_card_slider.php") ?>
        </div>
    </section>

    <section class="mb-80">
        <?php $heading = "Featured Projects";
        $btn_title = "Get Featured";
        include("../includes/nft_projects_grid_component.php") ?>
    </section>

    <?php
    $is_large = true;
    $btn_title = "Submit Project";
    $heading = "Are you a project founder? Do you want to get listed?";
    $backgrand_image = "/images/interact_card_stars_large.svg";
    include("../includes/interaction_card.php") ?>

    <div class="projects_page browse_by_category_section">
        <h4 class="heading">Browse by category</h4>
        <div class="categories_list">
            <button type="button" class="category_btn">Free Mint</button>
            <button type="button" class="category_btn">Metaverse</button>
            <button type="button" class="category_btn">PFP</button>
            <button type="button" class="category_btn">Free Mint</button>
            <button type="button" class="category_btn">Free Mint</button>
            <button type="button" class="category_btn">Free Mint</button>
            <button type="button" class="category_btn">Free Mint</button>
            <button type="button" class="category_btn">Free Mint</button>
            <button type="button" class="category_btn">Free Mint</button>
            <button type="button" class="category_btn">Free Mint</button>
        </div>
    </div>


    <section class="mt-90">
        <?php $heading = "Most Popular";
        $btn_title = "View All";
        include("../includes/nft_projects_grid_component.php") ?>
    </section>

    <section class="mt-90 mb-80">
        <?php $heading = "Upcoming";
        $btn_title = "View All";
        include("../includes/nft_projects_grid_component.php") ?>
    </section>

    <?php
    $is_large = true;
    $btn_title = "Learn More";
    $heading = "Founders: Sellout Your Project";
    $backgrand_image = "/images/interact_card_large.svg";
    include("../includes/interaction_card.php") ?>

    <section class="mt-90 mb-90">
        <?php $heading = "Veerified";
        $btn_title = "View All";
        include("../includes/nft_projects_grid_component.php") ?>
    </section>

    <?php
    $is_large = true;
    $btn_title = "Submit Project";
    $heading = "Are you a project founder? Do you want to get listed?";
    $backgrand_image = "/images/interact_card_stars_large.svg";
    include("../includes/interaction_card.php") ?>

    <section class="projects_page latest_news_section">
        <h3 class="heading">Latest News</h3>
        <div class="news_list">
            <div class="news_item">
                <img src="/images/nft_2.png" width="300" height="300" alt="">
                <h4 class="sm title">Ut enim ad minim veniam, quis nostrud exercitation ullamco</h4>
            </div>
            <div class="news_item">
                <img src="/images/nft_2.png" width="300" height="300" alt="">
                <h4 class="sm title">Ut enim ad minim veniam, quis nostrud exercitation ullamco</h4>
            </div>
            <div class="news_item">
                <img src="/images/nft_2.png" width="300" height="300" alt="">
                <h4 class="sm title">Ut enim ad minim veniam, quis nostrud exercitation ullamco</h4>
            </div>
            <div class="news_item">
                <img src="/images/nft_2.png" width="300" height="300" alt="">
                <h4 class="sm title">Ut enim ad minim veniam, quis nostrud exercitation ullamco</h4>
            </div>
        </div>
    </section>


    <?php include("../includes/join_news_letter_component.php") ?>
    <?php include("../includes/footer.php") ?>

    <script src="/scripts/components/custom-svg.js"></script>
</body>

</html>