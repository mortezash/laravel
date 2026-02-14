<?php

namespace App\Services;
use App\Contracts\EmailServiceInterface;

class EmailService implements EmailServiceInterface
{
	public function send()
	{
		return "ایمیل ارسال شد";
	}
}