<div class="interaction_card <?php echo $is_large ? "large" : "" ?>">
    <div class="wrapper">
        <div class="inner" style="background-image: url(<?php echo $backgrand_image ?>);">
        <?php echo $is_large ? "<h3 class='heading'>$heading</h3>" : "<h4 class='heading'>$heading</h4>" ?>
            <a href="#" class="btn small light">
                <?php echo $btn_title ?>
                <i class="bi bi-chevron-right normal"></i>
            </a>
        </div>
    </div>
</div>