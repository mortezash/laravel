<?php

namespace App\Http\Controllers;

use App\Services\EmailService;

class EmailController extends Controller
{
	protected $emailService;
	public function __construct(EmailService $emailService)
	{
		$this->emailService = $emailService;
	}

	public function send()
	{
		print $this->emailService->send();
	}
}
