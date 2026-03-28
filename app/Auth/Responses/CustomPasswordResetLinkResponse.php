<?php
namespace App\Auth\Responses;

use Laravel\Fortify\Contracts\SuccessfulPasswordResetLinkRequestResponse as Contract;

class CustomPasswordResetLinkResponse implements Contract
{
    public function toResponse($request)
    {
        return redirect()->route('reset-mail-success');
    }
}
