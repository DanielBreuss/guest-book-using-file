<?php

function save_comm() {
   $str = $_POST['name'] . '|' . $_POST['comment'] . '|' . date('Y-m-d H:i:s') . "\n***\n";
   file_put_contents (COMMENTS, $str, FILE_APPEND);
}

function get_comm() {
   return file_get_contents(COMMENTS);
}

function arr_comm($comments) {
   $comments = explode("\n***\n", $comments);
   array_pop($comments);
   return array_reverse($comments);
}

function get_format_comm($comment){
   return explode('|', $comment);
}

?>
