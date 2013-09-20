<?php

/* 
 * Custom form macros
 */
Form::macro('fullName', function($name) {
  return '<p>Full name: <input type="text" name="'.$name.'" /></p>';
});