<?php

use Pecee\SimpleRouter\SimpleRouter;
use App\Controller\PostController;

SimpleRouter::get('/', [PostController::class,'index']);
SimpleRouter::post('store', [PostController::class, 'store']);

SimpleRouter::start();

