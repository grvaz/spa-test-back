<?php

namespace App\Services;

use App\Models\Log;

class ContactService
{

    public array $contact;
    /** @var Logger  */
    private $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function createContact($fields): bool
    {
        try {
            $this->contact = json_decode(
                Api::http()
                    ->request('post', '/api/v4/contacts', [
                        'json' => [[
                            'name' => $fields['name'],
                            'custom_fields_values' => $this->prepareCustomFields($fields)
                        ]]
                    ])
                    ->getBody()->getContents(),
                true
            )['_embedded']['contacts'][0];
            $this->logger->log(Log::TYPE_CREATE_CONTACT, true);
            return true;
        } catch (\Throwable $e) {
            $this->logger->log(Log::TYPE_CREATE_CONTACT, false);
            report($e);
            return false;
        }
    }

    private function prepareCustomFields($fields): array
    {
        return [
            [
                'field_id' => 2632631,
                'values' => [
                    [
                        'value' => $fields['phone'],
                        'enum_code' => 'WORK'
                    ]
                ]
            ],
            [
                'field_id' => 2663641,
                'values' => [
                    [
                        'value' => $fields['comment'],
                    ]
                ]
            ],
        ];
    }
}
