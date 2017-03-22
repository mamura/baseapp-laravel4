<?php
class dashboardController extends Controller {
	
	public function index() {
		return View::make('dashboard/index');
	}
}