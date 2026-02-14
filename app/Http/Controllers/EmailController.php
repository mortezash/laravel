<?php

namespace App\Http\Controllers;

use App\Contracts\EmailServiceInterface;

class EmailController extends Controller
{
	protected $emailService;
	public function __construct(EmailServiceInterface $emailService)
	{
		$this->emailService = $emailService;
	}

	public function send()
	{
		return response()->json([
			'message' => $this->emailService->send()
		]);
	}
}
