<?php

class MyFilter {
  public function filter($route, $request) {
    if (true) {
      return View::make('my/page');
    }
  }
}