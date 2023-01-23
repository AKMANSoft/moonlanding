<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MoonLanding Media</title>
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/components/button.css">
    <link rel="stylesheet" href="./css/components/typography.css">
    <link rel="stylesheet" href="./css/index.css">
</head>

<body>
    <?php 
    $news_header = false;
    $primary_btn_title="Submit Project"; 
    include("./includes/header.php") ?>

    <section class="home_section">
        <div class="nft_news_list row_view">
            <div class="news_item">
                <a href="#">
                    <img src="./images/nft_1.png" width="370" height="382" alt="">
                </a>
                <div class="news_details">
                    <a href="#">
                        <h3 class="title">Ut enim ad minim veniam, quis nostrud exercitation ullamco</h3>
                    </a>
                    <div class="info">
                        <strong class="text-700 uppercase text-primary">Category</strong>
                        <p> - </p>
                        <p>MAY 16, 2022</p>
                    </div>
                    <p class="description"></p>
                </div>
            </div>
            <div class="news_item">
                <a href="#">
                    <img src="./images/nft_2.png" width="370" height="382" alt="">
                </a>
                <div class="news_details">
                    <a href="#">
                        <h3 class="title">Ut enim ad minim veniam, quis nostrud exercitation ullamco</h3>
                    </a>
                    <div class="info">
                        <strong class="text-700 uppercase text-primary">Category</strong>
                        <p> - </p>
                        <p>MAY 16, 2022</p>
                    </div>
                    <p class="description"></p>
                </div>
            </div>
            <div class="news_item">
                <a href="#">
                    <img src="./images/nft_3.png" width="370" height="382" alt="">
                </a>
                <div class="news_details">
                    <a href="#">
                        <h3 class="title">Ut enim ad minim veniam, quis nostrud exercitation ullamco</h3>
                    </a>
                    <div class="info">
                        <strong class="text-700 uppercase text-primary">Category</strong>
                        <p> - </p>
                        <p>MAY 16, 2022</p>
                    </div>
                    <p class="description"></p>
                </div>
            </div>
        </div>
    </section>
    <?php $backgrand_image = "./images/interact_card.png";
    include("./includes/interaction_card.php") ?>

    <section class="latest_news_section">
        <div class="content">
            <h3 class="heading">Latest News</h3>
            <div class="nft_news_list column_view">
                <div class="news_item">
                    <a href="#" class="image_wrapper">
                        <img src="./images/nft_2.png" width="250" height="250" alt="">
                    </a>
                    <div class="news_details">
                        <a href="#" class="h3 title lg">Ut enim ad minim veniam, quis nostrud exercitation ullamco</a>
                        <div class="info">
                            <strong class="text-700 uppercase text-primary">Category</strong>
                            <p> - </p>
                            <p>MAY 16, 2022</p>
                        </div>
                        <p class="description text-light-70">Excepteur sint occaecat cupidatat non proident sunt Aliquip ex ea commodo consequat duis aute irure dolor in Ut enim ad minim veniam, quis nostrud</p>
                    </div>
                </div>
                <div class="news_item">
                    <a href="#" class="image_wrapper">
                        <img src="./images/nft_1.png" width="250" height="250" alt="">
                    </a>
                    <div class="news_details">
                        <a href="#" class="h3 title lg">Ut enim ad minim veniam, quis nostrud exercitation ullamco</a>
                        <div class="info">
                            <strong class="text-700 uppercase text-primary">Category</strong>
                            <p> - </p>
                            <p>MAY 16, 2022</p>
                        </div>
                        <p class="description text-light-70">Excepteur sint occaecat cupidatat non proident sunt Aliquip ex ea commodo consequat duis aute irure dolor in Ut enim ad minim veniam, quis nostrud</p>
                    </div>
                </div>
                <div class="news_item">
                    <a href="#" class="image_wrapper">
                        <img src="./images/nft_1.png" width="250" height="250" alt="">
                    </a>
                    <div class="news_details">
                        <a href="#" class="h3 title lg">Ut enim ad minim veniam, quis nostrud exercitation ullamco</a>
                        <div class="info">
                            <strong class="text-700 uppercase text-primary">Category</strong>
                            <p> - </p>
                            <p>MAY 16, 2022</p>
                        </div>
                        <p class="description text-light-70">Excepteur sint occaecat cupidatat non proident sunt Aliquip ex ea commodo consequat duis aute irure dolor in Ut enim ad minim veniam, quis nostrud</p>
                    </div>
                </div>

                <?php $backgrand_image = "./images/stars_interact_card.png";
                include("./includes/interaction_card.php") ?>
                <div class="news_item">
                    <a href="#" class="image_wrapper">
                        <img src="./images/nft_1.png" width="250" height="250" alt="">
                    </a>
                    <div class="news_details">
                        <a href="#" class="h3 title lg">Ut enim ad minim veniam, quis nostrud exercitation ullamco</a>
                        <div class="info">
                            <strong class="text-700 uppercase text-primary">Category</strong>
                            <p> - </p>
                            <p>MAY 16, 2022</p>
                        </div>
                        <p class="description text-light-70">Excepteur sint occaecat cupidatat non proident sunt Aliquip ex ea commodo consequat duis aute irure dolor in Ut enim ad minim veniam, quis nostrud</p>
                    </div>
                </div>
                <div class="news_item">
                    <a href="#" class="image_wrapper">
                        <img src="./images/nft_1.png" width="250" height="250" alt="">
                    </a>
                    <div class="news_details">
                        <a href="#" class="h3 title lg">Ut enim ad minim veniam, quis nostrud exercitation ullamco</a>
                        <div class="info">
                            <strong class="text-700 uppercase text-primary">Category</strong>
                            <p> - </p>
                            <p>MAY 16, 2022</p>
                        </div>
                        <p class="description text-light-70">Excepteur sint occaecat cupidatat non proident sunt Aliquip ex ea commodo consequat duis aute irure dolor in Ut enim ad minim veniam, quis nostrud</p>
                    </div>
                </div>
                <div class="news_item">
                    <a href="#" class="image_wrapper">
                        <img src="./images/nft_1.png" width="250" height="250" alt="">
                    </a>
                    <div class="news_details">
                        <a href="#" class="h3 title lg">Ut enim ad minim veniam, quis nostrud exercitation ullamco</a>
                        <div class="info">
                            <strong class="text-700 uppercase text-primary">Category</strong>
                            <p> - </p>
                            <p>MAY 16, 2022</p>
                        </div>
                        <p class="description text-light-70">Excepteur sint occaecat cupidatat non proident sunt Aliquip ex ea commodo consequat duis aute irure dolor in Ut enim ad minim veniam, quis nostrud</p>
                    </div>
                </div>
            </div>
            <div class="pagination_controls">
                <div class="pagination_btns">
                    <button type="button" class="active">1</button>
                    <button type="button">2</button>
                    <button type="button">3</button>
                    <button type="button"><i class="bi bi-chevron-right normal"></i></button>
                </div>
                <p class="pagination_page_info text-light-70">Page 1 of 3</p>
            </div>
        </div>
        <div class="pupular_projects_section">
            <h3 class="heading">Popular Projects</h3>
            <div class="nft_projects_list column_view">
                <div class="nft_project">
                    <a href="#" class="image_wrapper">
                        <img src="./images/nft_project.png" width="291" height="291" alt="">
                    </a>
                    <div class="project_info">
                        <strong class="time lg text-light-70 text-600">Future</strong>
                        <div class="account">
                            <h4 class="title text-600">xHamsterNFT</h4>
                            <img src="./images/icons/verification_badge.svg" width="20" height="20" alt="Account Verification Badge" class="verfication_badge">
                        </div>
                        <p class="sale_date lg">Public-sale: 19 Dec 2022</p>
                        <div class="price_line">
                            <img src="./images/icons/price_icon.svg" alt="Price Icon" class="price_icon">
                            <p class="price">1.0 Eth</p>
                        </div>
                    </div>
                </div>

                <div class="nft_project">
                    <a href="#" class="image_wrapper">
                        <img src="./images/nft_project.png" width="291" height="291" alt="">
                    </a>
                    <div class="project_info">
                        <strong class="time lg text-light-70 text-600">Future</strong>
                        <div class="account">
                            <h4 class="title text-600">xHamsterNFT</h4>
                            <img src="./images/icons/verification_badge.svg" width="20" height="20" alt="Account Verification Badge" class="verfication_badge">
                        </div>
                        <p class="sale_date lg">Public-sale: 19 Dec 2022</p>
                        <div class="price_line">
                            <img src="./images/icons/price_icon.svg" alt="Price Icon" class="price_icon">
                            <p class="price">1.0 Eth</p>
                        </div>
                    </div>
                </div>

                <div class="nft_project">
                    <a href="#" class="image_wrapper">
                        <img src="./images/nft_project.png" width="291" height="291" alt="">
                    </a>
                    <div class="project_info">
                        <strong class="time lg text-light-70 text-600">Future</strong>
                        <div class="account">
                            <h4 class="title text-600">xHamsterNFT</h4>
                            <img src="./images/icons/verification_badge.svg" width="20" height="20" alt="Account Verification Badge" class="verfication_badge">
                        </div>
                        <p class="sale_date lg">Public-sale: 19 Dec 2022</p>
                        <div class="price_line">
                            <img src="./images/icons/price_icon.svg" alt="Price Icon" class="price_icon">
                            <p class="price">1.0 Eth</p>
                        </div>
                    </div>
                </div>

                <div class="nft_project">
                    <a href="#" class="image_wrapper">
                        <img src="./images/nft_project.png" width="291" height="291" alt="">
                    </a>
                    <div class="project_info">
                        <strong class="time lg text-light-70 text-600">Future</strong>
                        <div class="account">
                            <h4 class="title text-600">xHamsterNFT</h4>
                            <img src="./images/icons/verification_badge.svg" width="20" height="20" alt="Account Verification Badge" class="verfication_badge">
                        </div>
                        <p class="sale_date lg">Public-sale: 19 Dec 2022</p>
                        <div class="price_line">
                            <img src="./images/icons/price_icon.svg" alt="Price Icon" class="price_icon">
                            <p class="price">1.0 Eth</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="most_popular_projects">
        <?php $heading = "Most Popular Projects";
        $btn_title = "View All";
        include("./includes/nft_projects_grid_component.php") ?>
    </section>

    <?php include("./includes/join_news_letter_component.php") ?>
    <?php include("./includes/footer.php") ?>
</body>

</html>