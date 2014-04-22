<?php
# Loads comment_body.php and Creates Hook

$wgAutoloadClasses['comment'] = $IP. '/extensions/Comment/comment_body.php';
$wgHooks['ParserFirstCallInit'][] = 'comment::onParserInit';
