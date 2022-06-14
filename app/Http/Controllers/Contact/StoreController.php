<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Http\Requests\Contact\StoreRequest;
use App\Jobs\SendContactMailJob;
use App\Mail\Contact\ContactMail;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        SendContactMailJob::dispatch($data);
        return redirect()->back()->with(['success' => 'Ваше сообщение успешно доставленно!']);
    }
}
