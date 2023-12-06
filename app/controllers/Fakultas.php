<?php

namespace App\Controllers;

use App\Core\Controller;

class Fakultas extends Controller
{
	public object $model;

	public function __construct()
	{
		parent::cekLogin();

		$this->model = new \App\Models\Fakultas();
	}

	public function index()
	{
		$data['rows'] = $this->model->show();
		$this->dashboard('fakultas/index', $data);
	}

	public function input()
	{
		$this->dashboard('fakultas/input');
	}

	public function save()
	{
		$this->model->save();
		header('location:' . URL . '/fakultas');
	}

	public function edit($id)
	{
		$data['row'] = $this->model->edit($id);
		$this->dashboard('fakultas/edit', $data);
	}

	public function update()
	{
		$this->model->update();
		header('location:' . URL . '/fakultas');
	}

	public function delete($id)
	{
		$this->model->delete($id);
		header('location:' . URL . '/fakultas');
	}
}
