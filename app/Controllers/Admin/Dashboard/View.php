<?php

namespace App\Controllers\Admin\Dashboard;

use App\Controllers\BaseController;

class View extends BaseController {

    public function index(): string {
        return view('Admin/Dashboard/index');
    }
}
