<?php

function showmetaRobotOption(){
    echo '<option value="INDEX, FOLLOW" selected="selected">INDEX, FOLLOW</option><option value="INDEX, NOFOLLOW">INDEX, NOFOLLOW</option><option value="NOINDEX, FOLLOW">NOINDEX, FOLLOW</option><option value="NOINDEX, NOFOLLOW">NOINDEX, NOFOLLOW</option><option value="INDEX, FOLLOW, NOARCHIVE">INDEX, FOLLOW, NOARCHIVE</option><option value="INDEX, NOFOLLOW, NOARCHIVE">INDEX, NOFOLLOW, NOARCHIVE</option><option value="NOINDEX, NOFOLLOW, NOARCHIVE">NOINDEX, NOFOLLOW, NOARCHIVE</option>';
}