<?php
/**
 * Open Source Social Network
 *
 * @package   (softlab24.com).ossn
 * @author    OSSN Core Team <info@softlab24.com>
 * @copyright 2014-2017 SOFTLAB24 LIMITED
 * @license   Open Source Social Network License (OSSN LICENSE)  http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */
$friends = ossn_loggedin_user()->getFriends();
$have = '';
if ($friends) {
    foreach ($friends as $friend) {
        $vars['entity'] = $friend;
        $vars['icon'] = $friend->iconURL()->small;
		$vars['hide_names'] = true;
        $have = 1;
        echo ossn_plugin_view('chat/friends/friend-item', $vars);
    }
}
if ($have !== 1) {
    echo '<div class="ossn-chat-none">'.ossn_print('ossn:chat:no:friend:online').'</div>';
}