<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewContactRequest;
use App\Services\ContactService;
use App\Services\LeadService;

class LeadController extends Controller

{
    /**
     * @param LeadService $leadService
     * @return array
     */
    public function index(LeadService $leadService): array
    {
        if (!$leadService->getLeadList()) {
            abort('500', 'Ошибка загрузки данных из AmoCRM');
        }
        return $leadService->leads;
    }

    /**
     * @param $id
     * @param ContactService $contactService
     * @param LeadService $leadService
     * @return array
     */
    public function attachContact(
        $id, ContactService $contactService, LeadService $leadService, NewContactRequest $request
    ): array
    {
        if (
            !$contactService->createContact($request->only(['name', 'phone', 'comment'])) ||
            !$leadService->attachContact($id, $contactService->contact['id'])
        ) {
            abort('500', 'Ошибка создания или привязки контакта');
        }
        return $contactService->contact;
    }
}
