<link rel="stylesheet" href="../css/components/header.css">
<header>
    <div class="header_left">
        <a href="/">
            <img src="../images/logo.svg" height="60" width="140" alt="" class="logo">
        </a>
    </div>
    <div id="header_menu_container"  class="header_right">
        <button type="button" id="header_menu_close_btn" class="menu_close_btn"><i class="bi bi-x"></i></button>
        <div id="header_nav_menu" class="header_menu">
            <ul class="nav_links">
                <?php echo $news_header ? "" : "<li class='nav_item'>
                    <a href='/' class='nav_link'>Home</a>
                    </li>
                    <li class='nav_item'>
                        <a href='#' class='nav_link'>Marketing Support</a>
                    </li>"
                ?>
                <li class="nav_item">
                    <a href="#" class="nav_link">
                        News <i class="bi bi-chevron-right normal"></i>
                    </a>
                    <ul class='sub_menu'>
                        <li class='nav_item'><a href='/news.php' class='nav_link'>News</a></li>
                        <li class='nav_item'><a href='/news.php' class='nav_link'>News</a></li>
                    </ul>
                </li>
                <?php echo $news_header ? "" :
                    "<li class='nav_item'>
                    <a href='#' class='nav_link'>
                        Calendar <i class='bi bi-chevron-right normal'></i>
                    </a>
                    <ul class='sub_menu'>
                        <li class='nav_item'><a href='#' class='nav_link'>Future</a></li>
                        <li class='nav_item'><a href='#' class='nav_link'>This Week</a></li>
                        <li class='nav_item'><a href='#' class='nav_link'>Today</a></li>
                        <li class='nav_item'><a href='#' class='nav_link'>Minting Now</a></li>
                        <li class='nav_item'><a href='#' class='nav_link'>Finished</a></li>
                    </ul>
                </li>" ?>
            </ul>
        </div>
        <div class="search_bar_container expanded">
            <button type="button" id="search_bar_expand_btn" class="search_bar_expand_btn"><i class="normal bi bi-search"></i></button>
            <input type="text" class="search_bar" placeholder="Project name, type">
            <button type="button" class="search_btn btn dark">Search</button>
        </div>
        <a href="#" class="btn primary primary_btn">
            <?php echo $primary_btn_title ?>
            <i class="bi bi-chevron-right normal"></i>
        </a>
    </div>
    <button type="button" id="header_menu_expand_btn" class="header_menu_btn"><i class="bi bi-list"></i></button>
</header>
<script src="/scripts/components/header.js"></script>