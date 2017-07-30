<?php
function mytheme_preprocess_page(&$vars, $hook) {
    if (isset($vars['node'])) {
        $vars['theme_hook_suggestions'][] = 'page__'. str_replace('_', '--', $vars['node']->type);
    }
}
?>