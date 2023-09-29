<?php

namespace App\Services;

use App\Models\Log;

class LeadService
{
    /** @var array */
    public array $leads = [];
    /** @var Logger  */
    private $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function getLeadList(): bool
    {
        try {
            $this->leads = json_decode(
                Api::http()
                    ->request('get', '/api/v4/leads?with=contacts&order[created_at]=desc')
                    ->getBody()->getContents(),
                true
            )['_embedded']['leads'];
            return true;
        } catch (\Throwable $e) {
            report($e);
            return false;
        }
    }

    public function attachContact($leadId, $contactId): bool
    {
        try {
            Api::http()
                ->request('post', "/api/v4/leads/$leadId/link", [
                    'json' => [[
                        'to_entity_id' => $contactId,
                        'to_entity_type' => 'contacts'
                    ]]
                ])
                ->getBody()->getContents();
            $this->logger->log(Log::TYPE_ATTACH_CONTACT, true);
            return true;
        } catch (\Throwable $e) {
            $this->logger->log(Log::TYPE_ATTACH_CONTACT, false);
            report($e);
            return false;
        }
    }
}
