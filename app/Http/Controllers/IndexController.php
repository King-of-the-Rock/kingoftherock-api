<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class IndexController extends Controller
{
	/**
	 * @return JsonResponse
	 */
	public function index()
	{
		return response()->json([
			'message' => 'Hello, World!',
		]);
	}
}
