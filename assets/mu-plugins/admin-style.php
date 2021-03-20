<?php
/* Hide Stuffs from School Admins */
add_action('admin_head', 'my_custom_classes');
function my_custom_classes() {
  echo "<style>
  body.post-type-post div#postimagediv
  {
    display: none;
  }
  </style>";
}