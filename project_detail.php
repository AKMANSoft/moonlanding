<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Project - MoonLanding Media</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <?php
    $news_header = false;
    $primary_btn_title = "Submit Project";
    include("./includes/header.php") ?>

    <section class="project_detail_page home_section">
        <img src="/images/project_banner_image.png" height="320" alt="" class="project_banner_image">
        <div class="content">
            <div class="links">
                <p class="text-light"><a href="/" class="p">Home</a> > <a href="/project_detail.php" class="p">Cat Fight P2E NFT</a></p>
            </div>
            <div class="project_info">
                <img src="/images/nft_2.png" width="260" height="260" alt="">
                <div class="details">
                    <h4 class="sm date text-400">Pre sale: 29 Jan</h4>
                    <div class="title">
                        <h3 class="sm">Cat Fight P2E NFT</h3>
                        <img src="/images/icons/verified_badge.svg" height="30" alt="">
                        <img src="/images/icons/kyc_badge.svg" height="30" alt="">
                    </div>
                    <div class="other_info">
                        <button type="button">
                            <custom-svg src="/images/icons/price_icon.svg" width="12" height="20" alt=""></custom-svg>
                            Ethereum
                        </button>
                        <span class="divider"></span>
                        <button type="button" class="total_supply">
                            9999 Total SUPPLY
                        </button>
                    </div>
                </div>
            </div>
            <div class="sale_info">
                <p class="text-center text-light">Pre-sale Date: <br> <strong class="text-600">29 Jan 2023-05:00 am (UTC)</strong></p>
                <p class="text-center text-light">Pre-sale Price: <br> <strong class="text-600">0.05 ETH</strong></p>
                <p class="text-center text-light">Public Mint Date: <br> <strong class="text-600">31 Jan 2023-05:00 am (UTC)</strong></p>
                <p class="text-center text-light">Mint Price: <br> <strong class="text-600">0.15 ETH</strong></p>
            </div>
            <div class="event_info">
                <div class="event_details">
                    <div class="head">
                        <h4 class="sm text-primary text-600">Overview</h4>
                    </div>
                    <div class="detail_blocks">
                        <div class="detail_block">
                            <p>Description</p>
                            <p class="text-light">
                                Welcome to the Cat Fighters family!
                                <br><br>
                                Cat Fight NFT is a 3D fighting and surviving game built with Unreal Engine 5 on the Solana blockchain. You’ll be able to play, gain experience and earn $$$ using the game’s crypto token $CATF.
                                <br>MINT DATE: 28-01-2023
                                <br>PFP SUPPLY: 9,999
                                <br>LAND SUPPLY: 55k
                                <br>BLOCKCHAIN: SOL
                                <br><br>
                                For every 2 PFP NFTs you hold, we will airdrop 1 Plot of Land for FREE.
                                <br><br>
                                ***DETAILS AND BENEFITS***
                                <br>* NFT staking and P2E games..
                                <br>* Holders of CATFIGHT NFT will have access to the $CATF token, which can be used to reward players in-game, as well as mint future collections or swap for USDT to be able to use in the real world.
                                <br>* Players and holders can purchase various clothes and accessories for their avatars..
                                <br>* Citizens of Cat Fight island can purchase land, which opens up additional opportunities
                                <br>* WL spots are still open… 1,000 spots available
                            </p>
                        </div>
                        <div class="detail_block">
                            <p>Social Profiles:</p>
                            <div class="row wrap col-gap-25 row-gap-10">
                                <p class="text-light">
                                    <i class="bi bi-twitter text-primary mr-10"></i>
                                    Twitter (2.4K)
                                </p>
                                <p class="text-light">
                                    <i class="bi bi-discord text-primary mr-10"></i>
                                    Discord (3.2K)
                                </p>
                                <p class="text-light">
                                    <i class="bi bi-globe text-primary mr-10"></i>
                                    Website
                                </p>
                            </div>
                        </div>
                        <div class="detail_block">
                            <p>Event Tags:</p>
                            <div class="row wrap col-gap-30 row-gap-10">
                                <p class="text-light">#FreeMint</p>
                                <p class="text-light">#Metaverse</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="register_for_event">
                    <div class="head">
                        <h4 class="sm text-primary text-600">Register for this event</h4>
                    </div>
                    <div class="register_form">
                        <div class="input_group">
                            <label for="wallet_address">Wallet address <span>*</span></label>
                            <input type="text" name="wallet_address">
                        </div>
                        <div class="input_group">
                            <label for="twitter_username">Twitter username</label>
                            <input type="text" name="twitter_username">
                        </div>
                        <div class="input_group">
                            <label for="email">Email</label>
                            <input type="text" name="email">
                        </div>
                        <button class="mt-10 btn primary p-50">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="mb-90">
        <?php $heading = "Featured Collections";
        $btn_title = "Get Featured";
        include("./includes/nft_projects_grid_component.php") ?>
    </section>


    <section class="mb-80">
        <?php $heading = "Minting Soon";
        $btn_title = "";
        include("./includes/nft_projects_grid_component.php") ?>
    </section>

    <?php
    $is_large = true;
    $btn_title = "Submit Project";
    $heading = "Are you a project founder? Do you want to get listed?";
    $backgrand_image = "/images/interact_card_stars_large.svg";
    include("./includes/interaction_card.php") ?>


    <?php include("./includes/join_news_letter_component.php") ?>
    <?php include("./includes/footer.php") ?>
    <script src="/scripts/components/custom-svg.js"></script>
</body>

</html>