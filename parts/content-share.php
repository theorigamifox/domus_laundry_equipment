<?php
/**
 * Share Post/Page/Job
 *
 * @package Jobify
 * @since Jobify 1.0
 */
global $post;

$message = apply_filters('jobify_share_message', sprintf(_x('Check out %1$s on %2$s! %3$s', '1: Article title 2: Site Name 3: Site URL', 'jobify'), get_the_title(), get_bloginfo('name'), get_permalink()));
?>
<div class="entry-share">
    <script>
        function fbs_click() {
            u = location.href;
            t = document.title;
            window.open('http://www.facebook.com/sharer.php?u=' + encodeURIComponent(u) + '&t=' + encodeURIComponent(t), 'sharer', 'toolbar=0,status=0,width=626,height=436');
            return false;
        }</script>
<h4>Share Us</h4>
    <ul>
<?php do_action('jobify_share_before', $message); ?>
        <li class="twitter-share"><a target="_blank" href="<?php echo esc_url(sprintf('http://www.twitter.com?status=%s', urlencode($message))); ?>"
                                     onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');
                                             return false;"><i class="fa fa-twitter"></i></a></li>
        <li class="facebook-share"><a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" onclick="return fbs_click()"><i class="fa fa-facebook"></i></a></li>
        <li class="gplus-share"><a target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>"
                                   onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');
                                           return false;"><i class="fa fa-google-plus"></i></a></li>
        <li class="linkedin-share"><a target="_blank" href="http://www.linkedin.com/shareArticle?url=<?php the_permalink(); ?>"
                                      onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');
                                              return false;"><i class="fa fa-linkedin"></i></a></li>	
<?php do_action('jobify_share_after', $message); ?>
    </ul>
</div>