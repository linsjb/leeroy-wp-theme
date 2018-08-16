<?php
function phpLog($data) {
  $output = $data;
  if (is_array($output))
    $output = implode( ',', $output);

    echo "<script>console.log('php.log: " . $output . "' );</script>";
}
