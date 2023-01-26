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

    <section class="submit_project_page home_section">
        <div class="content">
            <div class="head">
                <h1 class="heading">Submit a project</h1>
                <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
            </div>
            <div class="input_sections">
                <div class="input_section">
                    <h3 class="sm heading col-1">Project info</h3>
                    <div class="input_group col-3">
                        <label for="name">Project name <span>*</span></label>
                        <input type="text" name="name">
                    </div>
                    <div class="input_group col-3">
                        <label for="chain">Chain <span>*</span></label>
                        <select name="chain" class="pad-right">
                            <option value="">-- Choose your project chain --</option>
                            <option value="">Opt 1</option>
                            <option value="">Opt 2</option>
                        </select>
                        <span class="expand_icon bi bi-chevron-expand"></span>
                    </div>
                    <div class="input_group col-3">
                        <label for="total_supply">Total supply <span>*</span></label>
                        <input type="text" name="total_supply" placeholder="">
                    </div>
                    <div class="input_group col-1">
                        <label for="description">Project description <span>*</span></label>
                        <textarea type="text" rows="8" name="description" placeholder=""></textarea>
                    </div>
                    <div class="input_group col-3">
                        <label for="twitter_link">Twitter Link (Optional)</label>
                        <input type="text" name="twitter_link" placeholder="Enter URL">
                    </div>
                    <div class="input_group col-3">
                        <label for="discord_link">Discord Link (Optional)</label>
                        <input type="text" name="discord_link" placeholder="Enter URL">
                    </div>
                    <div class="input_group col-3">
                        <label for="website_link">Website Link (Optional)</label>
                        <input type="text" name="website_link" placeholder="Enter URL">
                    </div>
                </div>
                <div class="input_section">
                    <h3 class="sm heading col-1">Images</h3>
                    <div class="input_group col-2">
                        <label for="profile_image">Profile Photo <span>*</span> Ideal size: 240px X 240px</label>
                        <file-input name="profile_image" accept="image/*">
                            <img src="./images/icons/upload_icon.svg" width="32" height="32" alt="">
                            <p class="sm">Drag and drop or browse</p>
                        </file-input>
                    </div>
                    <div class="input_group col-2">
                        <label for="profile_image">Banner image (Optional) Ideal size: 1450px X 320px</label>
                        <file-input name="profile_image" accept="image/*">
                            <img src="./images/icons/upload_icon.svg" width="32" height="32" alt="">
                            <p class="sm">Drag and drop or browse</p>
                        </file-input>
                    </div>
                </div>
                <div class="input_section">
                    <h3 class="sm heading col-1">Pre-Sale Mint Details</h3>
                    <div class="input_group col-1">
                        <label for="timezone">Timezone <span>*</span></label>
                        <select name="timezone" class="pad-right" placeholder="-- Choose timezone --">
                            <option value="">-- Choose timezone --</option>
                            <option value="">Opt 1</option>
                            <option value="">Opt 2</option>
                        </select>
                        <span class="expand_icon bi bi-chevron-expand" aria-hidden="true"></span>
                    </div>
                    <div class="input_group col-3">
                        <label for="date">Pre-sale mint date (Optional)</label>
                        <input type="date" name="date" placeholder="Choose date">
                    </div>
                    <div class="input_group col-3">
                        <label for="time">Pre-sale mint time (Optional)</label>
                        <input type="time" name="time" placeholder="Choose time">
                    </div>
                    <div class="input_group col-3">
                        <label for="price">Pre-sale price (Optional)</label>
                        <input type="number" class="pad-right" name="price" placeholder="Enter prrice">
                        <p class="sm text_right">ETH</p>
                    </div>
                </div>
                <div class="input_section">
                    <h3 class="sm heading col-1">Mint Details</h3>
                    <div class="input_group col-3">
                        <label for="date">Mint date <span>*</span></label>
                        <input type="date" name="date" placeholder="Choose date">
                    </div>
                    <div class="input_group col-3">
                        <label for="time">Mint time <span>*</span></label>
                        <input type="time" name="time" placeholder="Choose time">
                    </div>
                    <div class="input_group col-3">
                        <label for="price">Mint price <span>*</span></label>
                        <input type="number" class="pad-right" name="price" placeholder="Enter prrice">
                        <p class="sm text_right">ETH</p>
                    </div>
                </div>
                <div class="input_section">
                    <h3 class="sm heading col-1">Founder Info</h3>
                    <div class="input_group col-3">
                        <label for="founder_name">Full name (Optional)</label>
                        <input type="text" name="founder_name" placeholder="">
                    </div>
                    <div class="input_group col-3">
                        <label for="founder_email">Email <span>*</span></label>
                        <input type="email" name="founder_email" placeholder="">
                    </div>
                    <div class="input_group col-3">
                        <label for="price">Phone no. (Optional)</label>
                        <input type="number" name="price">
                    </div>
                </div>
                <div class="input_section">
                    <div class="head">
                        <h3 class="sm heading col-1">Verification Badge</h3>
                        <p class="sm">To avail the verification badge, we will ask you to DM us on twitter and also add our logo to your website. after you submit your project.</p>
                    </div>
                    <img src="/images/recaptcha.png" width="270" height="88" alt="" style="object-fit: contain; object-position: left;" class="col-1">
                    <button type="button" class="btn primary submit_btn">Submit</button>
                </div>
            </div>
        </div>
    </section>


    <?php include("./includes/footer.php") ?>

    <script src="/scripts/components/file-input.js"></script>
</body>

</html>