<?php

defined('MOODLE_INTERNAL') || die;

/**
 * Insert a link to index.php on the site front page navigation menu.
 *
 * @param navigation_node $frontpage Node representing the front page in the navigation tree.
 */
function local_helloworld_extend_navigation_frontpage(navigation_node $frontpage) {
    $frontpage->add(
        get_string('pluginname', 'local_helloworld'),
        new moodle_url('/local/helloworld/index.php')
    );
}

/**
 * Add link to index.php into navigation drawer.
 *
 * @param global_navigation $root Node representing the global navigation tree.
 */
function local_helloworld_extend_navigation(global_navigation $root) {

    $node = navigation_node::create(
        get_string('helloworld', 'local_helloworld'),
        new moodle_url('/local/helloworld/index.php'),
        navigation_node::TYPE_CUSTOM,
        null,
        null,
        new pix_icon('t/message', '')
    );
    $show_nav = get_config('local_helloworld', 'showinnavigation');
    $node->showinflatnavigation = $show_nav;

    $root->add_node($node);
}
