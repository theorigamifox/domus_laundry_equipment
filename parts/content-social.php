<?php
$facebook = get_field('facebook', 'options');
$instagram = get_field('instagram', 'options');
$pinterest = get_field('pinterest', 'options');
$google = get_field('google_plus', 'options');
$youtube = get_field('youtube', 'options');
$twitter = get_field('twitter', 'options');
$linkedin = get_field('linkedin_url', 'options');
?>
<ul class="social-links">
    <?php if ($facebook): ?>
        <li>
            <a href="<?php echo $facebook; ?>" target="_blank">
                <i class="fa fa-facebook"></i>
            </a>
        </li>
    <?php endif; ?>
    <?php if ($instagram): ?>
        <li>
            <a href="<?php echo $instagram; ?>" target="_blank">
                <i class="fa fa-instagram"></i>
            </a>
        </li>
    <?php endif; ?>
    <?php if ($pinterest): ?>
        <li>
            <a href="<?php echo $pinterest; ?>" target="_blank">
                <i class="pinterest"></i>
            </a>
        </li>
    <?php endif; ?>
    <?php if ($google): ?>
        <li>
            <a href="<?php echo $google; ?>" target="_blank">
                <i class="fa fa-google-plus"></i>
            </a>
        </li>
    <?php endif; ?>
    <?php if ($youtube): ?>
        <li>
            <a href="<?php echo $youtube; ?>" target="_blank">
                <i class="youtube"></i>
            </a>
        </li>
    <?php endif; ?>
    <?php if ($twitter): ?>
        <li>
            <a href="<?php echo $twitter; ?>" target="_blank">
                <i class="fa fa-twitter"></i>
            </a>
        </li>
    <?php endif; ?>
    <?php if ($linkedin): ?>
        <li>
            <a href="<?php echo $linkedin; ?>" target="_blank">
                <i class="fa fa-linkedin"></i>
            </a>
        </li>
    <?php endif; ?>        
</ul>