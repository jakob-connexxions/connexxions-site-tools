<?php

// Filter to change default preferences
add_filter('cs_app_preference_defaults', function($defaults) {
  // Workspace defaults to left
  $defaults['dev_toolkit'] = true;

  // Set default of our custom preference
  $defaults['keybindings']['workspace-elements'] = 'mod+shift+e';
  $defaults['keybindings']['open:parameters-elements-json'] = 'mod+option+e';
  $defaults['keybindings']['open:dev-toolkit:tools'] = 'option+shift+d';
  $defaults['keybindings']['open:dev-toolkit:inspector'] = 'option+e';

  return $defaults;
});