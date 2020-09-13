<?php

namespace App\Http\Controllers\Dashboards;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AgentsController extends Controller
{
    public function agents()
    {
        $data = [
            'totalAgents' => 336,
            'improductive' => 13.3,
            'improductiveSummary' => [
                [
                    'agent' => 'Ana',
                    'percent' => rand(1, 99),
                ],
                [
                    'agent' => 'Wjlangsovo',
                    'percent' => rand(1, 99),
                ],
                [
                    'agent' => 'SmartNav',
                    'percent' => rand(1, 99),
                ],
                [
                    'agent' => 'Stc Electric',
                    'percent' => rand(1, 99),
                ],
                [
                    'agent' => 'Viting',
                    'percent' => rand(1, 99),
                ],
                [
                    'agent' => 'Scaffolding',
                    'percent' => rand(1, 99),
                ],
                [
                    'agent' => 'Scsi',
                    'percent' => rand(1, 99),
                ],
                [
                    'agent' => 'Ballygroup',
                    'percent' => rand(1, 99),
                ],
                [
                    'agent' => 'Tellarcom',
                    'percent' => rand(1, 99),
                ],
                [
                    'agent' => 'Wcumberium',
                    'percent' => rand(1, 99),
                ],
                [
                    'agent' => 'The Avon Lounge',
                    'percent' => rand(1, 99),
                ],
                [
                    'agent' => 'Skyguard',
                    'percent' => rand(1, 99),
                ],
                [
                    'agent' => 'Wyrprite',
                    'percent' => rand(1, 99),
                ],
                [
                    'agent' => 'Graco Asia',
                    'percent' => rand(1, 99),
                ],
                [
                    'agent' => 'Ennoot',
                    'percent' => rand(1, 99),
                ],
                [
                    'agent' => 'Judton',
                    'percent' => rand(1, 99),
                ],
                [
                    'agent' => 'Mcdastabri',
                    'percent' => rand(1, 99),
                ],
                [
                    'agent' => 'Lynn Real Estate',
                    'percent' => rand(1, 99),
                ],
                [
                    'agent' => 'Thinovosts',
                    'percent' => rand(1, 99),
                ],
                [
                    'agent' => 'Jamark',
                    'percent' => rand(1, 99),
                ],
            ],
            'productiveSummary' => [
                [
                    'agent' => 'Ana',
                    'percent' => rand(1, 99),
                ],
                [
                    'agent' => 'Wjlangsovo',
                    'percent' => rand(1, 99),
                ],
                [
                    'agent' => 'SmartNav',
                    'percent' => rand(1, 99),
                ],
                [
                    'agent' => 'Stc Electric',
                    'percent' => rand(1, 99),
                ],
                [
                    'agent' => 'Viting',
                    'percent' => rand(1, 99),
                ],
                [
                    'agent' => 'Scaffolding',
                    'percent' => rand(1, 99),
                ],
                [
                    'agent' => 'Scsi',
                    'percent' => rand(1, 99),
                ],
                [
                    'agent' => 'Ballygroup',
                    'percent' => rand(1, 99),
                ],
                [
                    'agent' => 'Tellarcom',
                    'percent' => rand(1, 99),
                ],
                [
                    'agent' => 'Wcumberium',
                    'percent' => rand(1, 99),
                ],
                [
                    'agent' => 'The Avon Lounge',
                    'percent' => rand(1, 99),
                ],
                [
                    'agent' => 'Skyguard',
                    'percent' => rand(1, 99),
                ],
                [
                    'agent' => 'Wyrprite',
                    'percent' => rand(1, 99),
                ],
                [
                    'agent' => 'Graco Asia',
                    'percent' => rand(1, 99),
                ],
                [
                    'agent' => 'Ennoot',
                    'percent' => rand(1, 99),
                ],
                [
                    'agent' => 'Judton',
                    'percent' => rand(1, 99),
                ],
                [
                    'agent' => 'Mcdastabri',
                    'percent' => rand(1, 99),
                ],
                [
                    'agent' => 'Lynn Real Estate',
                    'percent' => rand(1, 99),
                ],
                [
                    'agent' => 'Thinovosts',
                    'percent' => rand(1, 99),
                ],
                [
                    'agent' => 'Jamark',
                    'percent' => rand(1, 99),
                ],
            ],
            'heatMap' => [
                'agents' => [
                    'Wjlangsovo',
                    'SmartNav',
                    'Stc Electric',
                    'Viting',
                    'Scaffolding',
                    'Scsi',
                    'Ballygroup',
                    'Tellarcom',
                    'Wcumberium',
                    'The Avon Lounge',
                    'Skyguard',
                    'Wyrprite',
                    'Graco Asia',
                    'Ennoot',
                    'Judton',
                    'Mcdastabri',
                    'Lynn Real Estate',
                    'Thinovosts',
                    'Jamark',
                ],
                'occurrences' => [
                    'Third-party scheduling',
                    'Message',
                    'Future contact/Broken call',
                    'Payment promise',
                    'Mute call',
                    'Incorrect phone',
                    'Answering machine/Machine voice',
                    'Client scheduling',
                    'Does not confirm data',
                    'Claims payment',
                    'System problems',
                    'Refuse payment',
                    'Unemployment/Disease/Decease',
                    'Operation transfer',
                ],
                'data' => [
                    'Wjlangsovo' => [
                        'Third-party scheduling' => rand(0, 300),
                        'Message' => rand(0, 300),
                        'Future contact/Broken call' => rand(0, 300),
                        'Payment promise' => rand(0, 300),
                        'Mute call' => rand(0, 300),
                        'Incorrect phone' => rand(0, 300),
                        'Answering machine/Machine voice' => rand(0, 300),
                        'Client scheduling' => rand(0, 300),
                        'Does not confirm data' => rand(0, 300),
                        'Claims payment' => rand(0, 300),
                        'System problems' => rand(0, 300),
                        'Refuse payment' => rand(0, 300),
                        'Unemployment/Disease/Decease' => rand(0, 300),
                        'Operation transfer' => rand(0, 300),
                    ],
                    'SmartNav' => [
                        'Third-party scheduling' => rand(0, 300),
                        'Message' => rand(0, 300),
                        'Future contact/Broken call' => rand(0, 300),
                        'Payment promise' => rand(0, 300),
                        'Mute call' => rand(0, 300),
                        'Incorrect phone' => rand(0, 300),
                        'Answering machine/Machine voice' => rand(0, 300),
                        'Client scheduling' => rand(0, 300),
                        'Does not confirm data' => rand(0, 300),
                        'Claims payment' => rand(0, 300),
                        'System problems' => rand(0, 300),
                        'Refuse payment' => rand(0, 300),
                        'Unemployment/Disease/Decease' => rand(0, 300),
                        'Operation transfer' => rand(0, 300),
                    ],
                    'Stc Electric' => [
                        'Third-party scheduling' => rand(0, 300),
                        'Message' => rand(0, 300),
                        'Future contact/Broken call' => rand(0, 300),
                        'Payment promise' => rand(0, 300),
                        'Mute call' => rand(0, 300),
                        'Incorrect phone' => rand(0, 300),
                        'Answering machine/Machine voice' => rand(0, 300),
                        'Client scheduling' => rand(0, 300),
                        'Does not confirm data' => rand(0, 300),
                        'Claims payment' => rand(0, 300),
                        'System problems' => rand(0, 300),
                        'Refuse payment' => rand(0, 300),
                        'Unemployment/Disease/Decease' => rand(0, 300),
                        'Operation transfer' => rand(0, 300),
                    ],
                    'Viting' => [
                        'Third-party scheduling' => rand(0, 300),
                        'Message' => rand(0, 300),
                        'Future contact/Broken call' => rand(0, 300),
                        'Payment promise' => rand(0, 300),
                        'Mute call' => rand(0, 300),
                        'Incorrect phone' => rand(0, 300),
                        'Answering machine/Machine voice' => rand(0, 300),
                        'Client scheduling' => rand(0, 300),
                        'Does not confirm data' => rand(0, 300),
                        'Claims payment' => rand(0, 300),
                        'System problems' => rand(0, 300),
                        'Refuse payment' => rand(0, 300),
                        'Unemployment/Disease/Decease' => rand(0, 300),
                        'Operation transfer' => rand(0, 300),
                    ],
                    'Scaffolding' => [
                        'Third-party scheduling' => rand(0, 300),
                        'Message' => rand(0, 300),
                        'Future contact/Broken call' => rand(0, 300),
                        'Payment promise' => rand(0, 300),
                        'Mute call' => rand(0, 300),
                        'Incorrect phone' => rand(0, 300),
                        'Answering machine/Machine voice' => rand(0, 300),
                        'Client scheduling' => rand(0, 300),
                        'Does not confirm data' => rand(0, 300),
                        'Claims payment' => rand(0, 300),
                        'System problems' => rand(0, 300),
                        'Refuse payment' => rand(0, 300),
                        'Unemployment/Disease/Decease' => rand(0, 300),
                        'Operation transfer' => rand(0, 300),
                    ],
                    'Scsi' => [
                        'Third-party scheduling' => rand(0, 300),
                        'Message' => rand(0, 300),
                        'Future contact/Broken call' => rand(0, 300),
                        'Payment promise' => rand(0, 300),
                        'Mute call' => rand(0, 300),
                        'Incorrect phone' => rand(0, 300),
                        'Answering machine/Machine voice' => rand(0, 300),
                        'Client scheduling' => rand(0, 300),
                        'Does not confirm data' => rand(0, 300),
                        'Claims payment' => rand(0, 300),
                        'System problems' => rand(0, 300),
                        'Refuse payment' => rand(0, 300),
                        'Unemployment/Disease/Decease' => rand(0, 300),
                        'Operation transfer' => rand(0, 300),
                    ],
                    'Ballygroup' => [
                        'Third-party scheduling' => rand(0, 300),
                        'Message' => rand(0, 300),
                        'Future contact/Broken call' => rand(0, 300),
                        'Payment promise' => rand(0, 300),
                        'Mute call' => rand(0, 300),
                        'Incorrect phone' => rand(0, 300),
                        'Answering machine/Machine voice' => rand(0, 300),
                        'Client scheduling' => rand(0, 300),
                        'Does not confirm data' => rand(0, 300),
                        'Claims payment' => rand(0, 300),
                        'System problems' => rand(0, 300),
                        'Refuse payment' => rand(0, 300),
                        'Unemployment/Disease/Decease' => rand(0, 300),
                        'Operation transfer' => rand(0, 300),
                    ],
                    'Tellarcom' => [
                        'Third-party scheduling' => rand(0, 300),
                        'Message' => rand(0, 300),
                        'Future contact/Broken call' => rand(0, 300),
                        'Payment promise' => rand(0, 300),
                        'Mute call' => rand(0, 300),
                        'Incorrect phone' => rand(0, 300),
                        'Answering machine/Machine voice' => rand(0, 300),
                        'Client scheduling' => rand(0, 300),
                        'Does not confirm data' => rand(0, 300),
                        'Claims payment' => rand(0, 300),
                        'System problems' => rand(0, 300),
                        'Refuse payment' => rand(0, 300),
                        'Unemployment/Disease/Decease' => rand(0, 300),
                        'Operation transfer' => rand(0, 300),
                    ],
                    'Wcumberium' => [
                        'Third-party scheduling' => rand(0, 300),
                        'Message' => rand(0, 300),
                        'Future contact/Broken call' => rand(0, 300),
                        'Payment promise' => rand(0, 300),
                        'Mute call' => rand(0, 300),
                        'Incorrect phone' => rand(0, 300),
                        'Answering machine/Machine voice' => rand(0, 300),
                        'Client scheduling' => rand(0, 300),
                        'Does not confirm data' => rand(0, 300),
                        'Claims payment' => rand(0, 300),
                        'System problems' => rand(0, 300),
                        'Refuse payment' => rand(0, 300),
                        'Unemployment/Disease/Decease' => rand(0, 300),
                        'Operation transfer' => rand(0, 300),
                    ],
                    'The Avon Lounge' => [
                        'Third-party scheduling' => rand(0, 300),
                        'Message' => rand(0, 300),
                        'Future contact/Broken call' => rand(0, 300),
                        'Payment promise' => rand(0, 300),
                        'Mute call' => rand(0, 300),
                        'Incorrect phone' => rand(0, 300),
                        'Answering machine/Machine voice' => rand(0, 300),
                        'Client scheduling' => rand(0, 300),
                        'Does not confirm data' => rand(0, 300),
                        'Claims payment' => rand(0, 300),
                        'System problems' => rand(0, 300),
                        'Refuse payment' => rand(0, 300),
                        'Unemployment/Disease/Decease' => rand(0, 300),
                        'Operation transfer' => rand(0, 300),
                    ],
                    'Skyguard' => [
                        'Third-party scheduling' => rand(0, 300),
                        'Message' => rand(0, 300),
                        'Future contact/Broken call' => rand(0, 300),
                        'Payment promise' => rand(0, 300),
                        'Mute call' => rand(0, 300),
                        'Incorrect phone' => rand(0, 300),
                        'Answering machine/Machine voice' => rand(0, 300),
                        'Client scheduling' => rand(0, 300),
                        'Does not confirm data' => rand(0, 300),
                        'Claims payment' => rand(0, 300),
                        'System problems' => rand(0, 300),
                        'Refuse payment' => rand(0, 300),
                        'Unemployment/Disease/Decease' => rand(0, 300),
                        'Operation transfer' => rand(0, 300),
                    ],
                    'Wyrprite' => [
                        'Third-party scheduling' => rand(0, 300),
                        'Message' => rand(0, 300),
                        'Future contact/Broken call' => rand(0, 300),
                        'Payment promise' => rand(0, 300),
                        'Mute call' => rand(0, 300),
                        'Incorrect phone' => rand(0, 300),
                        'Answering machine/Machine voice' => rand(0, 300),
                        'Client scheduling' => rand(0, 300),
                        'Does not confirm data' => rand(0, 300),
                        'Claims payment' => rand(0, 300),
                        'System problems' => rand(0, 300),
                        'Refuse payment' => rand(0, 300),
                        'Unemployment/Disease/Decease' => rand(0, 300),
                        'Operation transfer' => rand(0, 300),
                    ],
                    'Graco Asia' => [
                        'Third-party scheduling' => rand(0, 300),
                        'Message' => rand(0, 300),
                        'Future contact/Broken call' => rand(0, 300),
                        'Payment promise' => rand(0, 300),
                        'Mute call' => rand(0, 300),
                        'Incorrect phone' => rand(0, 300),
                        'Answering machine/Machine voice' => rand(0, 300),
                        'Client scheduling' => rand(0, 300),
                        'Does not confirm data' => rand(0, 300),
                        'Claims payment' => rand(0, 300),
                        'System problems' => rand(0, 300),
                        'Refuse payment' => rand(0, 300),
                        'Unemployment/Disease/Decease' => rand(0, 300),
                        'Operation transfer' => rand(0, 300),
                    ],
                    'Ennoot' => [
                        'Third-party scheduling' => rand(0, 300),
                        'Message' => rand(0, 300),
                        'Future contact/Broken call' => rand(0, 300),
                        'Payment promise' => rand(0, 300),
                        'Mute call' => rand(0, 300),
                        'Incorrect phone' => rand(0, 300),
                        'Answering machine/Machine voice' => rand(0, 300),
                        'Client scheduling' => rand(0, 300),
                        'Does not confirm data' => rand(0, 300),
                        'Claims payment' => rand(0, 300),
                        'System problems' => rand(0, 300),
                        'Refuse payment' => rand(0, 300),
                        'Unemployment/Disease/Decease' => rand(0, 300),
                        'Operation transfer' => rand(0, 300),
                    ],
                    'Judton' => [
                        'Third-party scheduling' => rand(0, 300),
                        'Message' => rand(0, 300),
                        'Future contact/Broken call' => rand(0, 300),
                        'Payment promise' => rand(0, 300),
                        'Mute call' => rand(0, 300),
                        'Incorrect phone' => rand(0, 300),
                        'Answering machine/Machine voice' => rand(0, 300),
                        'Client scheduling' => rand(0, 300),
                        'Does not confirm data' => rand(0, 300),
                        'Claims payment' => rand(0, 300),
                        'System problems' => rand(0, 300),
                        'Refuse payment' => rand(0, 300),
                        'Unemployment/Disease/Decease' => rand(0, 300),
                        'Operation transfer' => rand(0, 300),
                    ],
                    'Mcdastabri' => [
                        'Third-party scheduling' => rand(0, 300),
                        'Message' => rand(0, 300),
                        'Future contact/Broken call' => rand(0, 300),
                        'Payment promise' => rand(0, 300),
                        'Mute call' => rand(0, 300),
                        'Incorrect phone' => rand(0, 300),
                        'Answering machine/Machine voice' => rand(0, 300),
                        'Client scheduling' => rand(0, 300),
                        'Does not confirm data' => rand(0, 300),
                        'Claims payment' => rand(0, 300),
                        'System problems' => rand(0, 300),
                        'Refuse payment' => rand(0, 300),
                        'Unemployment/Disease/Decease' => rand(0, 300),
                        'Operation transfer' => rand(0, 300),
                    ],
                    'Lynn Real Estate' => [
                        'Third-party scheduling' => rand(0, 300),
                        'Message' => rand(0, 300),
                        'Future contact/Broken call' => rand(0, 300),
                        'Payment promise' => rand(0, 300),
                        'Mute call' => rand(0, 300),
                        'Incorrect phone' => rand(0, 300),
                        'Answering machine/Machine voice' => rand(0, 300),
                        'Client scheduling' => rand(0, 300),
                        'Does not confirm data' => rand(0, 300),
                        'Claims payment' => rand(0, 300),
                        'System problems' => rand(0, 300),
                        'Refuse payment' => rand(0, 300),
                        'Unemployment/Disease/Decease' => rand(0, 300),
                        'Operation transfer' => rand(0, 300),
                    ],
                    'Thinovosts' => [
                        'Third-party scheduling' => rand(0, 300),
                        'Message' => rand(0, 300),
                        'Future contact/Broken call' => rand(0, 300),
                        'Payment promise' => rand(0, 300),
                        'Mute call' => rand(0, 300),
                        'Incorrect phone' => rand(0, 300),
                        'Answering machine/Machine voice' => rand(0, 300),
                        'Client scheduling' => rand(0, 300),
                        'Does not confirm data' => rand(0, 300),
                        'Claims payment' => rand(0, 300),
                        'System problems' => rand(0, 300),
                        'Refuse payment' => rand(0, 300),
                        'Unemployment/Disease/Decease' => rand(0, 300),
                        'Operation transfer' => rand(0, 300),
                    ],
                    'Jamark' => [
                        'Third-party scheduling' => rand(0, 300),
                        'Message' => rand(0, 300),
                        'Future contact/Broken call' => rand(0, 300),
                        'Payment promise' => rand(0, 300),
                        'Mute call' => rand(0, 300),
                        'Incorrect phone' => rand(0, 300),
                        'Answering machine/Machine voice' => rand(0, 300),
                        'Client scheduling' => rand(0, 300),
                        'Does not confirm data' => rand(0, 300),
                        'Claims payment' => rand(0, 300),
                        'System problems' => rand(0, 300),
                        'Refuse payment' => rand(0, 300),
                        'Unemployment/Disease/Decease' => rand(0, 300),
                        'Operation transfer' => rand(0, 300),
                    ],
                ]
            ],
            'distributionByAgents' => [
                'indicators' => [
                    'Agent',
                    'Attempts',
                    'Answered',
                    'CPC',
                    '%CPC',
                    'CPCA',
                    '%CPCA',
                    'Deals',
                    '%Deals',
                ],
                'data' => [
                    [
                        'Agent' => rand(1000, 9999),
                        'Attempts' => rand(100, 999),
                        'Answered' => rand(100, 999),
                        'CPC' => rand(100, 999),
                        '%CPC' => rand(1, 99),
                        'CPCA' => rand(100, 999),
                        '%CPCA' => rand(1, 99),
                        'Deals' => rand(100, 999),
                        '%Deals' => rand(1, 99),
                    ],
                    [
                        'Agent' => rand(1000, 9999),
                        'Attempts' => rand(100, 999),
                        'Answered' => rand(100, 999),
                        'CPC' => rand(100, 999),
                        '%CPC' => rand(1, 99),
                        'CPCA' => rand(100, 999),
                        '%CPCA' => rand(1, 99),
                        'Deals' => rand(100, 999),
                        '%Deals' => rand(1, 99),
                    ],
                    [
                        'Agent' => rand(1000, 9999),
                        'Attempts' => rand(100, 999),
                        'Answered' => rand(100, 999),
                        'CPC' => rand(100, 999),
                        '%CPC' => rand(1, 99),
                        'CPCA' => rand(100, 999),
                        '%CPCA' => rand(1, 99),
                        'Deals' => rand(100, 999),
                        '%Deals' => rand(1, 99),
                    ],
                    [
                        'Agent' => rand(1000, 9999),
                        'Attempts' => rand(100, 999),
                        'Answered' => rand(100, 999),
                        'CPC' => rand(100, 999),
                        '%CPC' => rand(1, 99),
                        'CPCA' => rand(100, 999),
                        '%CPCA' => rand(1, 99),
                        'Deals' => rand(100, 999),
                        '%Deals' => rand(1, 99),
                    ],
                    [
                        'Agent' => rand(1000, 9999),
                        'Attempts' => rand(100, 999),
                        'Answered' => rand(100, 999),
                        'CPC' => rand(100, 999),
                        '%CPC' => rand(1, 99),
                        'CPCA' => rand(100, 999),
                        '%CPCA' => rand(1, 99),
                        'Deals' => rand(100, 999),
                        '%Deals' => rand(1, 99),
                    ],
                    [
                        'Agent' => rand(1000, 9999),
                        'Attempts' => rand(100, 999),
                        'Answered' => rand(100, 999),
                        'CPC' => rand(100, 999),
                        '%CPC' => rand(1, 99),
                        'CPCA' => rand(100, 999),
                        '%CPCA' => rand(1, 99),
                        'Deals' => rand(100, 999),
                        '%Deals' => rand(1, 99),
                    ],
                    [
                        'Agent' => rand(1000, 9999),
                        'Attempts' => rand(100, 999),
                        'Answered' => rand(100, 999),
                        'CPC' => rand(100, 999),
                        '%CPC' => rand(1, 99),
                        'CPCA' => rand(100, 999),
                        '%CPCA' => rand(1, 99),
                        'Deals' => rand(100, 999),
                        '%Deals' => rand(1, 99),
                    ],
                    [
                        'Agent' => rand(1000, 9999),
                        'Attempts' => rand(100, 999),
                        'Answered' => rand(100, 999),
                        'CPC' => rand(100, 999),
                        '%CPC' => rand(1, 99),
                        'CPCA' => rand(100, 999),
                        '%CPCA' => rand(1, 99),
                        'Deals' => rand(100, 999),
                        '%Deals' => rand(1, 99),
                    ],
                    [
                        'Agent' => rand(1000, 9999),
                        'Attempts' => rand(100, 999),
                        'Answered' => rand(100, 999),
                        'CPC' => rand(100, 999),
                        '%CPC' => rand(1, 99),
                        'CPCA' => rand(100, 999),
                        '%CPCA' => rand(1, 99),
                        'Deals' => rand(100, 999),
                        '%Deals' => rand(1, 99),
                    ],
                    [
                        'Agent' => rand(1000, 9999),
                        'Attempts' => rand(100, 999),
                        'Answered' => rand(100, 999),
                        'CPC' => rand(100, 999),
                        '%CPC' => rand(1, 99),
                        'CPCA' => rand(100, 999),
                        '%CPCA' => rand(1, 99),
                        'Deals' => rand(100, 999),
                        '%Deals' => rand(1, 99),
                    ],
                    [
                        'Agent' => rand(1000, 9999),
                        'Attempts' => rand(100, 999),
                        'Answered' => rand(100, 999),
                        'CPC' => rand(100, 999),
                        '%CPC' => rand(1, 99),
                        'CPCA' => rand(100, 999),
                        '%CPCA' => rand(1, 99),
                        'Deals' => rand(100, 999),
                        '%Deals' => rand(1, 99),
                    ],
                    [
                        'Agent' => rand(1000, 9999),
                        'Attempts' => rand(100, 999),
                        'Answered' => rand(100, 999),
                        'CPC' => rand(100, 999),
                        '%CPC' => rand(1, 99),
                        'CPCA' => rand(100, 999),
                        '%CPCA' => rand(1, 99),
                        'Deals' => rand(100, 999),
                        '%Deals' => rand(1, 99),
                    ],
                    [
                        'Agent' => rand(1000, 9999),
                        'Attempts' => rand(100, 999),
                        'Answered' => rand(100, 999),
                        'CPC' => rand(100, 999),
                        '%CPC' => rand(1, 99),
                        'CPCA' => rand(100, 999),
                        '%CPCA' => rand(1, 99),
                        'Deals' => rand(100, 999),
                        '%Deals' => rand(1, 99),
                    ],
                    [
                        'Agent' => rand(1000, 9999),
                        'Attempts' => rand(100, 999),
                        'Answered' => rand(100, 999),
                        'CPC' => rand(100, 999),
                        '%CPC' => rand(1, 99),
                        'CPCA' => rand(100, 999),
                        '%CPCA' => rand(1, 99),
                        'Deals' => rand(100, 999),
                        '%Deals' => rand(1, 99),
                    ],
                    [
                        'Agent' => rand(1000, 9999),
                        'Attempts' => rand(100, 999),
                        'Answered' => rand(100, 999),
                        'CPC' => rand(100, 999),
                        '%CPC' => rand(1, 99),
                        'CPCA' => rand(100, 999),
                        '%CPCA' => rand(1, 99),
                        'Deals' => rand(100, 999),
                        '%Deals' => rand(1, 99),
                    ],
                    [
                        'Agent' => rand(1000, 9999),
                        'Attempts' => rand(100, 999),
                        'Answered' => rand(100, 999),
                        'CPC' => rand(100, 999),
                        '%CPC' => rand(1, 99),
                        'CPCA' => rand(100, 999),
                        '%CPCA' => rand(1, 99),
                        'Deals' => rand(100, 999),
                        '%Deals' => rand(1, 99),
                    ],
                    [
                        'Agent' => rand(1000, 9999),
                        'Attempts' => rand(100, 999),
                        'Answered' => rand(100, 999),
                        'CPC' => rand(100, 999),
                        '%CPC' => rand(1, 99),
                        'CPCA' => rand(100, 999),
                        '%CPCA' => rand(1, 99),
                        'Deals' => rand(100, 999),
                        '%Deals' => rand(1, 99),
                    ],
                    [
                        'Agent' => rand(1000, 9999),
                        'Attempts' => rand(100, 999),
                        'Answered' => rand(100, 999),
                        'CPC' => rand(100, 999),
                        '%CPC' => rand(1, 99),
                        'CPCA' => rand(100, 999),
                        '%CPCA' => rand(1, 99),
                        'Deals' => rand(100, 999),
                        '%Deals' => rand(1, 99),
                    ],
                    [
                        'Agent' => rand(1000, 9999),
                        'Attempts' => rand(100, 999),
                        'Answered' => rand(100, 999),
                        'CPC' => rand(100, 999),
                        '%CPC' => rand(1, 99),
                        'CPCA' => rand(100, 999),
                        '%CPCA' => rand(1, 99),
                        'Deals' => rand(100, 999),
                        '%Deals' => rand(1, 99),
                    ],
                    [
                        'Agent' => rand(1000, 9999),
                        'Attempts' => rand(100, 999),
                        'Answered' => rand(100, 999),
                        'CPC' => rand(100, 999),
                        '%CPC' => rand(1, 99),
                        'CPCA' => rand(100, 999),
                        '%CPCA' => rand(1, 99),
                        'Deals' => rand(100, 999),
                        '%Deals' => rand(1, 99),
                    ],
                    [
                        'Agent' => rand(1000, 9999),
                        'Attempts' => rand(100, 999),
                        'Answered' => rand(100, 999),
                        'CPC' => rand(100, 999),
                        '%CPC' => rand(1, 99),
                        'CPCA' => rand(100, 999),
                        '%CPCA' => rand(1, 99),
                        'Deals' => rand(100, 999),
                        '%Deals' => rand(1, 99),
                    ],
                ]
            ],
            'detailsCPC' => [
                [
                    'x' => 100,
                    'y' => 100,
                    'value' => 1000,
                    'company' => 'Flex'
                ],
                [
                    'x' => 90,
                    'y' => 50,
                    'value' => 1200,
                    'company' => 'Paschoalotto'
                ],
                [
                    'x' => 20,
                    'y' => 110,
                    'value' => 800,
                    'company' => 'Syscom'
                ],
                [
                    'x' => 180,
                    'y' => 12,
                    'value' => 550,
                    'company' => 'Zanc'
                ],
            ],
            'detailsDeals' => [
                [
                    'x' => 100,
                    'y' => 100,
                    'value' => 1000,
                    'company' => 'Flex'
                ],
                [
                    'x' => 90,
                    'y' => 50,
                    'value' => 1200,
                    'company' => 'Paschoalotto'
                ],
                [
                    'x' => 20,
                    'y' => 110,
                    'value' => 800,
                    'company' => 'Syscom'
                ],
                [
                    'x' => 180,
                    'y' => 12,
                    'value' => 550,
                    'company' => 'Zanc'
                ],
            ],
            'detailsImproductive' => [
                [
                    'x' => 100,
                    'y' => 100,
                    'value' => 1000,
                    'company' => 'Flex'
                ],
                [
                    'x' => 90,
                    'y' => 50,
                    'value' => 1200,
                    'company' => 'Paschoalotto'
                ],
                [
                    'x' => 20,
                    'y' => 110,
                    'value' => 800,
                    'company' => 'Syscom'
                ],
                [
                    'x' => 180,
                    'y' => 12,
                    'value' => 550,
                    'company' => 'Zanc'
                ],
            ],
            'detailsMute' => [
                [
                    'x' => 100,
                    'y' => 100,
                    'value' => 1000,
                    'company' => 'Flex'
                ],
                [
                    'x' => 90,
                    'y' => 50,
                    'value' => 1200,
                    'company' => 'Paschoalotto'
                ],
                [
                    'x' => 20,
                    'y' => 110,
                    'value' => 800,
                    'company' => 'Syscom'
                ],
                [
                    'x' => 180,
                    'y' => 12,
                    'value' => 550,
                    'company' => 'Zanc'
                ],
            ],
            'detailsMachine' => [
                [
                    'x' => 100,
                    'y' => 100,
                    'value' => 1000,
                    'company' => 'Flex'
                ],
                [
                    'x' => 90,
                    'y' => 50,
                    'value' => 1200,
                    'company' => 'Paschoalotto'
                ],
                [
                    'x' => 20,
                    'y' => 110,
                    'value' => 800,
                    'company' => 'Syscom'
                ],
                [
                    'x' => 180,
                    'y' => 12,
                    'value' => 550,
                    'company' => 'Zanc'
                ],
            ],
        ];


        return response()->json($data);
    }

    public function bestTime()
    {
        $data = '{"filters":[{"name":"Company","field":"Company","options":["A1","Crc","Paschoalotto","System"]},{"name":"Hour","field":"Hour","options":["8","9","10","11"]}],"data":{"distributionByHour":{"hours":["TOTAL","00","01","02","03","04","05","06","07","08","09","10","11","12","13","14","15","16","17","18","19","20","21","22","23"],"indicators":["Best time","Attempts","Answered","%Hit\/Rate","%CPC","%CPCA","Deals","%Deals"],"data":{"TOTAL":{"Best time":"","Attempts":501233,"Answered":14803,"%Hit\/Rate":3,"%CPC":22.3,"%CPCA":100,"Deals":226,"%Deals":60.27},"00":{"Best time":4,"Attempts":16881,"Answered":477,"%Hit\/Rate":2.8,"%CPC":19.5,"%CPCA":100,"Deals":226,"%Deals":60.27},"01":{"Best time":4,"Attempts":16881,"Answered":477,"%Hit\/Rate":2.8,"%CPC":19.5,"%CPCA":100,"Deals":226,"%Deals":60.27},"02":{"Best time":4,"Attempts":16881,"Answered":477,"%Hit\/Rate":2.8,"%CPC":19.5,"%CPCA":100,"Deals":226,"%Deals":60.27},"03":{"Best time":4,"Attempts":16881,"Answered":477,"%Hit\/Rate":2.8,"%CPC":19.5,"%CPCA":100,"Deals":226,"%Deals":60.27},"04":{"Best time":4,"Attempts":16881,"Answered":477,"%Hit\/Rate":2.8,"%CPC":19.5,"%CPCA":100,"Deals":226,"%Deals":60.27},"05":{"Best time":4,"Attempts":16881,"Answered":477,"%Hit\/Rate":2.8,"%CPC":19.5,"%CPCA":100,"Deals":226,"%Deals":60.27},"06":{"Best time":4,"Attempts":16881,"Answered":477,"%Hit\/Rate":2.8,"%CPC":19.5,"%CPCA":100,"Deals":226,"%Deals":60.27},"07":{"Best time":4,"Attempts":16881,"Answered":477,"%Hit\/Rate":2.8,"%CPC":19.5,"%CPCA":100,"Deals":226,"%Deals":60.27},"08":{"Best time":3,"Attempts":55629,"Answered":2067,"%Hit\/Rate":3.7,"%CPC":24.1,"%CPCA":100,"Deals":226,"%Deals":60.27},"09":{"Best time":1,"Attempts":50979,"Answered":1900,"%Hit\/Rate":3.7,"%CPC":24.1,"%CPCA":100,"Deals":226,"%Deals":60.27},"10":{"Best time":2,"Attempts":42308,"Answered":1506,"%Hit\/Rate":3.6,"%CPC":24.9,"%CPCA":100,"Deals":226,"%Deals":60.27},"11":{"Best time":2,"Attempts":42308,"Answered":1506,"%Hit\/Rate":3.6,"%CPC":24.9,"%CPCA":100,"Deals":226,"%Deals":60.27},"12":{"Best time":2,"Attempts":42308,"Answered":1506,"%Hit\/Rate":3.6,"%CPC":24.9,"%CPCA":100,"Deals":226,"%Deals":60.27},"13":{"Best time":2,"Attempts":42308,"Answered":1506,"%Hit\/Rate":3.6,"%CPC":24.9,"%CPCA":100,"Deals":226,"%Deals":60.27},"14":{"Best time":2,"Attempts":42308,"Answered":1506,"%Hit\/Rate":3.6,"%CPC":24.9,"%CPCA":100,"Deals":226,"%Deals":60.27},"15":{"Best time":2,"Attempts":42308,"Answered":1506,"%Hit\/Rate":3.6,"%CPC":24.9,"%CPCA":100,"Deals":226,"%Deals":60.27},"16":{"Best time":2,"Attempts":42308,"Answered":1506,"%Hit\/Rate":3.6,"%CPC":24.9,"%CPCA":100,"Deals":226,"%Deals":60.27},"17":{"Best time":2,"Attempts":42308,"Answered":1506,"%Hit\/Rate":3.6,"%CPC":24.9,"%CPCA":100,"Deals":226,"%Deals":60.27},"18":{"Best time":2,"Attempts":42308,"Answered":1506,"%Hit\/Rate":3.6,"%CPC":24.9,"%CPCA":100,"Deals":226,"%Deals":60.27},"19":{"Best time":2,"Attempts":42308,"Answered":1506,"%Hit\/Rate":3.6,"%CPC":24.9,"%CPCA":100,"Deals":226,"%Deals":60.27},"20":{"Best time":2,"Attempts":42308,"Answered":1506,"%Hit\/Rate":3.6,"%CPC":24.9,"%CPCA":100,"Deals":226,"%Deals":60.27},"21":{"Best time":2,"Attempts":42308,"Answered":1506,"%Hit\/Rate":3.6,"%CPC":24.9,"%CPCA":100,"Deals":226,"%Deals":60.27},"22":{"Best time":2,"Attempts":42308,"Answered":1506,"%Hit\/Rate":3.6,"%CPC":24.9,"%CPCA":100,"Deals":226,"%Deals":60.27},"23":{"Best time":2,"Attempts":42308,"Answered":1506,"%Hit\/Rate":3.6,"%CPC":24.9,"%CPCA":100,"Deals":226,"%Deals":60.27}}},"attemptsByHour":[{"hour":0,"value":85108},{"hour":1,"value":42472},{"hour":2,"value":49011},{"hour":3,"value":20581},{"hour":4,"value":25277},{"hour":5,"value":82902},{"hour":6,"value":23030},{"hour":7,"value":48686},{"hour":8,"value":36755},{"hour":9,"value":29070},{"hour":10,"value":70021},{"hour":11,"value":98289},{"hour":12,"value":84938},{"hour":13,"value":90488},{"hour":14,"value":99821},{"hour":15,"value":15788},{"hour":16,"value":96094},{"hour":17,"value":78156},{"hour":18,"value":58145},{"hour":19,"value":37467},{"hour":20,"value":45617},{"hour":21,"value":49303},{"hour":22,"value":91356},{"hour":23,"value":45280}],"answeredByHour":[{"hour":0,"value":76239},{"hour":1,"value":50435},{"hour":2,"value":69129},{"hour":3,"value":33153},{"hour":4,"value":57603},{"hour":5,"value":46916},{"hour":6,"value":97612},{"hour":7,"value":34752},{"hour":8,"value":53797},{"hour":9,"value":58793},{"hour":10,"value":11525},{"hour":11,"value":21278},{"hour":12,"value":63830},{"hour":13,"value":84562},{"hour":14,"value":25849},{"hour":15,"value":53795},{"hour":16,"value":88418},{"hour":17,"value":21660},{"hour":18,"value":96978},{"hour":19,"value":30062},{"hour":20,"value":46670},{"hour":21,"value":74825},{"hour":22,"value":92256},{"hour":23,"value":17713}],"cpcByHour":[{"hour":0,"value":97802},{"hour":1,"value":93843},{"hour":2,"value":83058},{"hour":3,"value":13841},{"hour":4,"value":71120},{"hour":5,"value":43781},{"hour":6,"value":23859},{"hour":7,"value":89848},{"hour":8,"value":41013},{"hour":9,"value":15517},{"hour":10,"value":67127},{"hour":11,"value":45669},{"hour":12,"value":31099},{"hour":13,"value":85558},{"hour":14,"value":86579},{"hour":15,"value":72830},{"hour":16,"value":89697},{"hour":17,"value":67074},{"hour":18,"value":16068},{"hour":19,"value":43507},{"hour":20,"value":70100},{"hour":21,"value":28205},{"hour":22,"value":42139},{"hour":23,"value":13342}],"cpcaByHour":[{"hour":0,"value":43449},{"hour":1,"value":17958},{"hour":2,"value":29734},{"hour":3,"value":72498},{"hour":4,"value":74868},{"hour":5,"value":45493},{"hour":6,"value":53927},{"hour":7,"value":99291},{"hour":8,"value":37522},{"hour":9,"value":29666},{"hour":10,"value":38125},{"hour":11,"value":55824},{"hour":12,"value":14231},{"hour":13,"value":43175},{"hour":14,"value":28436},{"hour":15,"value":30723},{"hour":16,"value":78969},{"hour":17,"value":73722},{"hour":18,"value":32325},{"hour":19,"value":30549},{"hour":20,"value":29038},{"hour":21,"value":98853},{"hour":22,"value":98321},{"hour":23,"value":65988}],"dealsByHour":[{"hour":0,"value":74004},{"hour":1,"value":68091},{"hour":2,"value":15114},{"hour":3,"value":64838},{"hour":4,"value":99201},{"hour":5,"value":98026},{"hour":6,"value":73632},{"hour":7,"value":62848},{"hour":8,"value":76925},{"hour":9,"value":51916},{"hour":10,"value":47831},{"hour":11,"value":18006},{"hour":12,"value":21501},{"hour":13,"value":41017},{"hour":14,"value":93629},{"hour":15,"value":89399},{"hour":16,"value":52854},{"hour":17,"value":29851},{"hour":18,"value":66951},{"hour":19,"value":61312},{"hour":20,"value":59046},{"hour":21,"value":30730},{"hour":22,"value":33615},{"hour":23,"value":13858}],"improductiveByHour":[{"hour":0,"value":78768},{"hour":1,"value":87709},{"hour":2,"value":32161},{"hour":3,"value":93449},{"hour":4,"value":24453},{"hour":5,"value":68446},{"hour":6,"value":72309},{"hour":7,"value":92589},{"hour":8,"value":98446},{"hour":9,"value":21020},{"hour":10,"value":53833},{"hour":11,"value":49437},{"hour":12,"value":43484},{"hour":13,"value":10592},{"hour":14,"value":51786},{"hour":15,"value":61827},{"hour":16,"value":33089},{"hour":17,"value":84527},{"hour":18,"value":50225},{"hour":19,"value":84054},{"hour":20,"value":83564},{"hour":21,"value":46989},{"hour":22,"value":34414},{"hour":23,"value":68251}],"incorrectByHour":[{"hour":0,"value":38021},{"hour":1,"value":23108},{"hour":2,"value":97600},{"hour":3,"value":44824},{"hour":4,"value":46287},{"hour":5,"value":76224},{"hour":6,"value":93367},{"hour":7,"value":70204},{"hour":8,"value":50695},{"hour":9,"value":83258},{"hour":10,"value":41624},{"hour":11,"value":84282},{"hour":12,"value":52820},{"hour":13,"value":57103},{"hour":14,"value":37656},{"hour":15,"value":10032},{"hour":16,"value":91924},{"hour":17,"value":39288},{"hour":18,"value":98611},{"hour":19,"value":71253},{"hour":20,"value":25495},{"hour":21,"value":50602},{"hour":22,"value":41604},{"hour":23,"value":65224}],"tmaByHour":[{"hour":0,"value":64369},{"hour":1,"value":17320},{"hour":2,"value":60983},{"hour":3,"value":13617},{"hour":4,"value":32479},{"hour":5,"value":45159},{"hour":6,"value":50962},{"hour":7,"value":49870},{"hour":8,"value":37506},{"hour":9,"value":18920},{"hour":10,"value":54341},{"hour":11,"value":48939},{"hour":12,"value":56439},{"hour":13,"value":37859},{"hour":14,"value":60098},{"hour":15,"value":50042},{"hour":16,"value":99572},{"hour":17,"value":17093},{"hour":18,"value":56611},{"hour":19,"value":68333},{"hour":20,"value":21364},{"hour":21,"value":96900},{"hour":22,"value":72806},{"hour":23,"value":98320}]}}';

        return response($data);
    }

    public function comparative()
    {
        return response()->json([]);
    }

    public function daily()
    {
        $month = '2020-06';
        $start = Carbon::parse($month)->startOfMonth();
        $end = Carbon::parse($month)->endOfMonth();

        $data = [];

        $columnsDailySummary = [
            'Data',
            '%Spin rate',
            '%Atendida/trabalhadas',
            '%Hit rate',
            '%Sucesso/Tentativas',
            '%Efetivas/Atendidas',
            '%Sucesso/Atendidas',
            '%Sucesso/Efetivas',
            'Atendidas/Sucesso',
            'Tentativas/Hora',
            'Atentididas/Hora',
            'Efetivas/Hora',
            'Sucesso/Hora'
        ];

        $data['dailySummary'] = [];
        $data['dailySummary'][] = $columnsDailySummary;

        while ($start->lte($end)) {
            $column = [];
            $column[] = $start->format('d/m');

            foreach ($columnsDailySummary as $index => $c) {
                if ($index == 0) continue;

                $column[] = rand(0, 100);
            }

            $data['dailySummary'][] = $column;
            $start->addDay();
        }

        return response($data);
    }

    public function funnel()
    {
        return response()->json([]);
    }

    public function multiChannel()
    {
        return response()->json([]);
    }

    public function portfolio()
    {
        $data = [];

        for ($i=0; $i<=10; $i++) {
            $data[$i] = (object) [
                'Indicador' =>  mt_rand(100000, 999999),
                'Contratos' => mt_rand(100000, 999999),
//                'Agnt logados' => mt_rand(100000, 999999),
                'Tentativas' => mt_rand(100000, 999999),
                'Tent/ Agnt' => mt_rand(100000, 999999),
                '%Hit rate' => mt_rand(0, 99)."%",
                'Atendidas' => mt_rand(100000, 999999),
                'CPC' => mt_rand(100000, 999999),
                'CPC/ Agnt' => mt_rand(100000, 999999),
                'CPC/ Atend' => mt_rand(0, 100)."%",
                'CPCA' => mt_rand(100000, 999999),
                'CPCA /Agnt' => mt_rand(0, 100)."%",
                'CPCA /Atend' => mt_rand(100000, 999999),
                'Negociações' => mt_rand(100000, 999999),
                'Negoc /Agnt' => mt_rand(0, 100)."%",
                'Negoc /Tent' => mt_rand(0, 100)."%",
                'Negoc /Atend' => mt_rand(0, 100)."%",
                'Negoc /CPC' => mt_rand(0, 100)."%",
                'Negoc /CPCA' => mt_rand(0, 100)."%",
                '%Improd' => mt_rand(0, 100)."%",
                '%Linha muda' => mt_rand(0, 100)."%",
                '%Voz máquina' => mt_rand(0, 100)."%",
                'Spin rate' => mt_rand(100000, 999999),
                '%Incorreto' => mt_rand(0, 100)."%",
            ];
        }

        return response()->json([
            'data' => $data,
            'page' => 1,
            'total' => 100,
            'per_page' => 10,
            'last_page' => 10
        ]);
    }

    public function region()
    {
        return response()->json([]);
    }
}
