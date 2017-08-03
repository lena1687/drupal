<?php
function phptemplate_preprocess_page(&$vars) {
  if (isset($vars['node'])) {
    $vars['template_files'][] = 'page-'. str_replace('_', '-', $vars['node']->type);
  }
}

?>
