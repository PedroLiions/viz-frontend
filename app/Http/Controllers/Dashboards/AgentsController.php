<?php

namespace App\Http\Controllers\Dashboards;

use App\Http\Controllers\Controller;
use App\Services\NumberService;
use App\Services\PermissionService;
use Carbon\Carbon;

class AgentsController extends Controller
{
    private PermissionService $permissionService;
    private NumberService $numberService;

    public function __construct(
        PermissionService $permissionService,
        NumberService $numberService
    )
    {
        $this->permissionService = $permissionService;
        $this->numberService = $numberService;
    }

    public function agents()
    {
        $this->permissionService->hasPermission('Agents', 'read');

        $data = [];

        $ocurrence = [
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
        ];

        for ($i = 0; $i < count($ocurrence); $i++) {
            $data[$i] = (object)[
                'Occurrence' => $ocurrence[$i],
                'Agend' => mt_rand(00, 400),
                'Recado' => mt_rand(00, 400),
                'Contato futuro /Lig interrompida' => mt_rand(00, 400),
                'Promessa pagto' => mt_rand(00, 400),
                'Lig muda' => mt_rand(00, 400),
                'Tel incorreto' => mt_rand(00, 400),
                'Sec eletrônica /Voz máquina' => mt_rand(00, 400),
                'Agend do cliente' => mt_rand(00, 400),
                'Não conf dados' => mt_rand(00, 400),
                'Alega pagto' => mt_rand(00, 400),
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

    public function distribution() {
        $this->permissionService->hasPermission('Agents', 'read');

        $data = [];

        $ocurrence = [
            'Agentes',
            'Tentativas',
            'Atendidas',
            'CPC',
            '%CPC',
            'CPCA',
            '%CPCA',
            'Negociações',
            '%Negc'
        ];

        for ($i = 0; $i < count($ocurrence); $i++) {
            $data[$i] = (object) [
                'Agentes' => mt_rand(000, 1000),
                'Tentativas' => mt_rand(000, 1000),
                'Atendidas' => mt_rand(000, 1000),
                'CPC' => mt_rand(000, 1000),
                '%CPC' => mt_rand(000, 1000),
                'CPCA' => mt_rand(000, 1000),
                '%CPCA' => mt_rand(000, 1000),
                'Negociações' => mt_rand(000, 1000),
                '%Negc' => mt_rand(000, 1000),
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

    public function distributionByHour() {
//        $data = [];
//
//        $colunas = [
//            'TOTAL',
//            '00h',
//            '01h',
//            '02h',
//            '03h',
//            '04h',
//            '05h',
//            '06h',
//            '07h',
//            '08h',
//            '09h',
//            '10h',
//            '11h',
//            '12h',
//            '13h',
//            '14h',
//            '15h',
//            '16h',
//            '17h',
//            '18h',
//            '19h',
//            '20h',
//            '21h',
//            '22h',
//            '23h',
//        ];
//
//        for ($i = 0; $i < count($colunas); $i++) {
//
//            $data[$i] = (object) [
//                'Hora' => $colunas[$i],
//                'Tentativas' => mt_rand(00, 100),
//                'Atendidas' => mt_rand(00, 100),
//                '%Hit rate' => mt_rand(00, 100),
//                '%CPC' => mt_rand(00, 100),
//                '%CPCA' => mt_rand(00, 100),
//                'Negociações' => mt_rand(00, 100),
//                '%Negc' => mt_rand(00, 100),
//                'Best time' => mt_rand(00, 100),
//            ];
//
//        }
    }

    public function bestTime()
    {
        $data = '{

    "answeredByHour": [
      {
        "hour": 0,
        "value": 76239
      },
      {
        "hour": 1,
        "value": 50435
      },
      {
        "hour": 2,
        "value": 69129
      },
      {
        "hour": 3,
        "value": 33153
      },
      {
        "hour": 4,
        "value": 57603
      },
      {
        "hour": 5,
        "value": 46916
      },
      {
        "hour": 6,
        "value": 97612
      },
      {
        "hour": 7,
        "value": 34752
      },
      {
        "hour": 8,
        "value": 53797
      },
      {
        "hour": 9,
        "value": 58793
      },
      {
        "hour": 10,
        "value": 11525
      },
      {
        "hour": 11,
        "value": 21278
      },
      {
        "hour": 12,
        "value": 63830
      },
      {
        "hour": 13,
        "value": 84562
      },
      {
        "hour": 14,
        "value": 25849
      },
      {
        "hour": 15,
        "value": 53795
      },
      {
        "hour": 16,
        "value": 88418
      },
      {
        "hour": 17,
        "value": 21660
      },
      {
        "hour": 18,
        "value": 96978
      },
      {
        "hour": 19,
        "value": 30062
      },
      {
        "hour": 20,
        "value": 46670
      },
      {
        "hour": 21,
        "value": 74825
      },
      {
        "hour": 22,
        "value": 92256
      },
      {
        "hour": 23,
        "value": 17713
      }
    ],
    "cpcByHour": [
      {
        "hour": 0,
        "value": 97802
      },
      {
        "hour": 1,
        "value": 93843
      },
      {
        "hour": 2,
        "value": 83058
      },
      {
        "hour": 3,
        "value": 13841
      },
      {
        "hour": 4,
        "value": 71120
      },
      {
        "hour": 5,
        "value": 43781
      },
      {
        "hour": 6,
        "value": 23859
      },
      {
        "hour": 7,
        "value": 89848
      },
      {
        "hour": 8,
        "value": 41013
      },
      {
        "hour": 9,
        "value": 15517
      },
      {
        "hour": 10,
        "value": 67127
      },
      {
        "hour": 11,
        "value": 45669
      },
      {
        "hour": 12,
        "value": 31099
      },
      {
        "hour": 13,
        "value": 85558
      },
      {
        "hour": 14,
        "value": 86579
      },
      {
        "hour": 15,
        "value": 72830
      },
      {
        "hour": 16,
        "value": 89697
      },
      {
        "hour": 17,
        "value": 67074
      },
      {
        "hour": 18,
        "value": 16068
      },
      {
        "hour": 19,
        "value": 43507
      },
      {
        "hour": 20,
        "value": 70100
      },
      {
        "hour": 21,
        "value": 28205
      },
      {
        "hour": 22,
        "value": 42139
      },
      {
        "hour": 23,
        "value": 13342
      }
    ],
    "cpcaByHour": [
      {
        "hour": 0,
        "value": 43449
      },
      {
        "hour": 1,
        "value": 17958
      },
      {
        "hour": 2,
        "value": 29734
      },
      {
        "hour": 3,
        "value": 72498
      },
      {
        "hour": 4,
        "value": 74868
      },
      {
        "hour": 5,
        "value": 45493
      },
      {
        "hour": 6,
        "value": 53927
      },
      {
        "hour": 7,
        "value": 99291
      },
      {
        "hour": 8,
        "value": 37522
      },
      {
        "hour": 9,
        "value": 29666
      },
      {
        "hour": 10,
        "value": 38125
      },
      {
        "hour": 11,
        "value": 55824
      },
      {
        "hour": 12,
        "value": 14231
      },
      {
        "hour": 13,
        "value": 43175
      },
      {
        "hour": 14,
        "value": 28436
      },
      {
        "hour": 15,
        "value": 30723
      },
      {
        "hour": 16,
        "value": 78969
      },
      {
        "hour": 17,
        "value": 73722
      },
      {
        "hour": 18,
        "value": 32325
      },
      {
        "hour": 19,
        "value": 30549
      },
      {
        "hour": 20,
        "value": 29038
      },
      {
        "hour": 21,
        "value": 98853
      },
      {
        "hour": 22,
        "value": 98321
      },
      {
        "hour": 23,
        "value": 65988
      }
    ],
    "dealsByHour": [
      {
        "hour": 0,
        "value": 74004
      },
      {
        "hour": 1,
        "value": 68091
      },
      {
        "hour": 2,
        "value": 15114
      },
      {
        "hour": 3,
        "value": 64838
      },
      {
        "hour": 4,
        "value": 99201
      },
      {
        "hour": 5,
        "value": 98026
      },
      {
        "hour": 6,
        "value": 73632
      },
      {
        "hour": 7,
        "value": 62848
      },
      {
        "hour": 8,
        "value": 76925
      },
      {
        "hour": 9,
        "value": 51916
      },
      {
        "hour": 10,
        "value": 47831
      },
      {
        "hour": 11,
        "value": 18006
      },
      {
        "hour": 12,
        "value": 21501
      },
      {
        "hour": 13,
        "value": 41017
      },
      {
        "hour": 14,
        "value": 93629
      },
      {
        "hour": 15,
        "value": 89399
      },
      {
        "hour": 16,
        "value": 52854
      },
      {
        "hour": 17,
        "value": 29851
      },
      {
        "hour": 18,
        "value": 66951
      },
      {
        "hour": 19,
        "value": 61312
      },
      {
        "hour": 20,
        "value": 59046
      },
      {
        "hour": 21,
        "value": 30730
      },
      {
        "hour": 22,
        "value": 33615
      },
      {
        "hour": 23,
        "value": 13858
      }
    ],
    "improductiveByHour": [
      {
        "hour": 0,
        "value": 78768
      },
      {
        "hour": 1,
        "value": 87709
      },
      {
        "hour": 2,
        "value": 32161
      },
      {
        "hour": 3,
        "value": 93449
      },
      {
        "hour": 4,
        "value": 24453
      },
      {
        "hour": 5,
        "value": 68446
      },
      {
        "hour": 6,
        "value": 72309
      },
      {
        "hour": 7,
        "value": 92589
      },
      {
        "hour": 8,
        "value": 98446
      },
      {
        "hour": 9,
        "value": 21020
      },
      {
        "hour": 10,
        "value": 53833
      },
      {
        "hour": 11,
        "value": 49437
      },
      {
        "hour": 12,
        "value": 43484
      },
      {
        "hour": 13,
        "value": 10592
      },
      {
        "hour": 14,
        "value": 51786
      },
      {
        "hour": 15,
        "value": 61827
      },
      {
        "hour": 16,
        "value": 33089
      },
      {
        "hour": 17,
        "value": 84527
      },
      {
        "hour": 18,
        "value": 50225
      },
      {
        "hour": 19,
        "value": 84054
      },
      {
        "hour": 20,
        "value": 83564
      },
      {
        "hour": 21,
        "value": 46989
      },
      {
        "hour": 22,
        "value": 34414
      },
      {
        "hour": 23,
        "value": 68251
      }
    ],
    "incorrectByHour": [
      {
        "hour": 0,
        "value": 38021
      },
      {
        "hour": 1,
        "value": 23108
      },
      {
        "hour": 2,
        "value": 97600
      },
      {
        "hour": 3,
        "value": 44824
      },
      {
        "hour": 4,
        "value": 46287
      },
      {
        "hour": 5,
        "value": 76224
      },
      {
        "hour": 6,
        "value": 93367
      },
      {
        "hour": 7,
        "value": 70204
      },
      {
        "hour": 8,
        "value": 50695
      },
      {
        "hour": 9,
        "value": 83258
      },
      {
        "hour": 10,
        "value": 41624
      },
      {
        "hour": 11,
        "value": 84282
      },
      {
        "hour": 12,
        "value": 52820
      },
      {
        "hour": 13,
        "value": 57103
      },
      {
        "hour": 14,
        "value": 37656
      },
      {
        "hour": 15,
        "value": 10032
      },
      {
        "hour": 16,
        "value": 91924
      },
      {
        "hour": 17,
        "value": 39288
      },
      {
        "hour": 18,
        "value": 98611
      },
      {
        "hour": 19,
        "value": 71253
      },
      {
        "hour": 20,
        "value": 25495
      },
      {
        "hour": 21,
        "value": 50602
      },
      {
        "hour": 22,
        "value": 41604
      },
      {
        "hour": 23,
        "value": 65224
      }
    ],
    "tmaByHour": [
      {
        "hour": 0,
        "value": 64369
      },
      {
        "hour": 1,
        "value": 17320
      },
      {
        "hour": 2,
        "value": 60983
      },
      {
        "hour": 3,
        "value": 13617
      },
      {
        "hour": 4,
        "value": 32479
      },
      {
        "hour": 5,
        "value": 45159
      },
      {
        "hour": 6,
        "value": 50962
      },
      {
        "hour": 7,
        "value": 49870
      },
      {
        "hour": 8,
        "value": 37506
      },
      {
        "hour": 9,
        "value": 18920
      },
      {
        "hour": 10,
        "value": 54341
      },
      {
        "hour": 11,
        "value": 48939
      },
      {
        "hour": 12,
        "value": 56439
      },
      {
        "hour": 13,
        "value": 37859
      },
      {
        "hour": 14,
        "value": 60098
      },
      {
        "hour": 15,
        "value": 50042
      },
      {
        "hour": 16,
        "value": 99572
      },
      {
        "hour": 17,
        "value": 17093
      },
      {
        "hour": 18,
        "value": 56611
      },
      {
        "hour": 19,
        "value": 68333
      },
      {
        "hour": 20,
        "value": 21364
      },
      {
        "hour": 21,
        "value": 96900
      },
      {
        "hour": 22,
        "value": 72806
      },
      {
        "hour": 23,
        "value": 98320
      }
    ]
}
';

        return response($data);
    }

    public function grapichs()
    {
        return '{"filters":[{"name":"Company","field":"Company","options":["A1","Crc","Paschoalotto","System"]},{"name":"Hour","field":"Hour","options":["8","9","10","11"]}],"data":{"totalAgents":336,"improductive":13.3,"improductiveSummary":[{"agent":"Ana","percent":17},{"agent":"Wjlangsovo","percent":65},{"agent":"SmartNav","percent":48},{"agent":"Stc Electric","percent":71},{"agent":"Viting","percent":96},{"agent":"Scaffolding","percent":32},{"agent":"Scsi","percent":77},{"agent":"Ballygroup","percent":24},{"agent":"Tellarcom","percent":95},{"agent":"Wcumberium","percent":75},{"agent":"The Avon Lounge","percent":19},{"agent":"Skyguard","percent":2},{"agent":"Wyrprite","percent":61},{"agent":"Graco Asia","percent":92},{"agent":"Ennoot","percent":35},{"agent":"Judton","percent":38},{"agent":"Mcdastabri","percent":29},{"agent":"Lynn Real Estate","percent":49},{"agent":"Thinovosts","percent":93},{"agent":"Jamark","percent":43}],"productiveSummary":[{"agent":"Ana","percent":58},{"agent":"Wjlangsovo","percent":75},{"agent":"SmartNav","percent":84},{"agent":"Stc Electric","percent":65},{"agent":"Viting","percent":87},{"agent":"Scaffolding","percent":53},{"agent":"Scsi","percent":86},{"agent":"Ballygroup","percent":46},{"agent":"Tellarcom","percent":21},{"agent":"Wcumberium","percent":48},{"agent":"The Avon Lounge","percent":93},{"agent":"Skyguard","percent":2},{"agent":"Wyrprite","percent":97},{"agent":"Graco Asia","percent":94},{"agent":"Ennoot","percent":66},{"agent":"Judton","percent":32},{"agent":"Mcdastabri","percent":5},{"agent":"Lynn Real Estate","percent":37},{"agent":"Thinovosts","percent":43},{"agent":"Jamark","percent":79}],"heatMap":{"agents":["Wjlangsovo","SmartNav","Stc Electric","Viting","Scaffolding","Scsi","Ballygroup","Tellarcom","Wcumberium","The Avon Lounge","Skyguard","Wyrprite","Graco Asia","Ennoot","Judton","Mcdastabri","Lynn Real Estate","Thinovosts","Jamark"],"occurrences":["Third-party scheduling","Message","Future contact\/Broken call","Payment promise","Mute call","Incorrect phone","Answering machine\/Machine voice","Client scheduling","Does not confirm data","Claims payment","System problems","Refuse payment","Unemployment\/Disease\/Decease","Operation transfer"],"data":{"Wjlangsovo":{"Third-party scheduling":220,"Message":92,"Future contact\/Broken call":295,"Payment promise":281,"Mute call":1,"Incorrect phone":132,"Answering machine\/Machine voice":287,"Client scheduling":211,"Does not confirm data":140,"Claims payment":288,"System problems":243,"Refuse payment":268,"Unemployment\/Disease\/Decease":269,"Operation transfer":41},"SmartNav":{"Third-party scheduling":236,"Message":61,"Future contact\/Broken call":214,"Payment promise":287,"Mute call":261,"Incorrect phone":118,"Answering machine\/Machine voice":128,"Client scheduling":218,"Does not confirm data":166,"Claims payment":255,"System problems":182,"Refuse payment":217,"Unemployment\/Disease\/Decease":18,"Operation transfer":133},"Stc Electric":{"Third-party scheduling":161,"Message":190,"Future contact\/Broken call":111,"Payment promise":48,"Mute call":224,"Incorrect phone":203,"Answering machine\/Machine voice":3,"Client scheduling":225,"Does not confirm data":135,"Claims payment":50,"System problems":163,"Refuse payment":264,"Unemployment\/Disease\/Decease":58,"Operation transfer":35},"Viting":{"Third-party scheduling":239,"Message":167,"Future contact\/Broken call":216,"Payment promise":28,"Mute call":151,"Incorrect phone":254,"Answering machine\/Machine voice":36,"Client scheduling":69,"Does not confirm data":134,"Claims payment":219,"System problems":300,"Refuse payment":112,"Unemployment\/Disease\/Decease":233,"Operation transfer":97},"Scaffolding":{"Third-party scheduling":214,"Message":287,"Future contact\/Broken call":272,"Payment promise":125,"Mute call":88,"Incorrect phone":256,"Answering machine\/Machine voice":286,"Client scheduling":213,"Does not confirm data":89,"Claims payment":274,"System problems":207,"Refuse payment":88,"Unemployment\/Disease\/Decease":254,"Operation transfer":211},"Scsi":{"Third-party scheduling":237,"Message":139,"Future contact\/Broken call":188,"Payment promise":104,"Mute call":125,"Incorrect phone":268,"Answering machine\/Machine voice":199,"Client scheduling":99,"Does not confirm data":121,"Claims payment":32,"System problems":193,"Refuse payment":107,"Unemployment\/Disease\/Decease":218,"Operation transfer":217},"Ballygroup":{"Third-party scheduling":165,"Message":201,"Future contact\/Broken call":297,"Payment promise":282,"Mute call":54,"Incorrect phone":42,"Answering machine\/Machine voice":290,"Client scheduling":23,"Does not confirm data":61,"Claims payment":201,"System problems":215,"Refuse payment":129,"Unemployment\/Disease\/Decease":214,"Operation transfer":132},"Tellarcom":{"Third-party scheduling":172,"Message":117,"Future contact\/Broken call":50,"Payment promise":255,"Mute call":243,"Incorrect phone":217,"Answering machine\/Machine voice":230,"Client scheduling":239,"Does not confirm data":17,"Claims payment":154,"System problems":205,"Refuse payment":273,"Unemployment\/Disease\/Decease":102,"Operation transfer":64},"Wcumberium":{"Third-party scheduling":99,"Message":212,"Future contact\/Broken call":172,"Payment promise":30,"Mute call":131,"Incorrect phone":286,"Answering machine\/Machine voice":124,"Client scheduling":182,"Does not confirm data":289,"Claims payment":84,"System problems":3,"Refuse payment":260,"Unemployment\/Disease\/Decease":204,"Operation transfer":77},"The Avon Lounge":{"Third-party scheduling":267,"Message":189,"Future contact\/Broken call":219,"Payment promise":163,"Mute call":19,"Incorrect phone":135,"Answering machine\/Machine voice":0,"Client scheduling":114,"Does not confirm data":243,"Claims payment":90,"System problems":86,"Refuse payment":105,"Unemployment\/Disease\/Decease":205,"Operation transfer":107},"Skyguard":{"Third-party scheduling":300,"Message":291,"Future contact\/Broken call":5,"Payment promise":79,"Mute call":144,"Incorrect phone":159,"Answering machine\/Machine voice":249,"Client scheduling":121,"Does not confirm data":10,"Claims payment":179,"System problems":265,"Refuse payment":170,"Unemployment\/Disease\/Decease":49,"Operation transfer":161},"Wyrprite":{"Third-party scheduling":52,"Message":167,"Future contact\/Broken call":278,"Payment promise":160,"Mute call":265,"Incorrect phone":51,"Answering machine\/Machine voice":204,"Client scheduling":117,"Does not confirm data":191,"Claims payment":187,"System problems":209,"Refuse payment":239,"Unemployment\/Disease\/Decease":59,"Operation transfer":247},"Graco Asia":{"Third-party scheduling":146,"Message":47,"Future contact\/Broken call":101,"Payment promise":227,"Mute call":202,"Incorrect phone":153,"Answering machine\/Machine voice":131,"Client scheduling":100,"Does not confirm data":17,"Claims payment":64,"System problems":100,"Refuse payment":85,"Unemployment\/Disease\/Decease":96,"Operation transfer":167},"Ennoot":{"Third-party scheduling":100,"Message":82,"Future contact\/Broken call":277,"Payment promise":20,"Mute call":288,"Incorrect phone":277,"Answering machine\/Machine voice":158,"Client scheduling":112,"Does not confirm data":185,"Claims payment":142,"System problems":214,"Refuse payment":183,"Unemployment\/Disease\/Decease":246,"Operation transfer":79},"Judton":{"Third-party scheduling":297,"Message":198,"Future contact\/Broken call":79,"Payment promise":201,"Mute call":157,"Incorrect phone":20,"Answering machine\/Machine voice":115,"Client scheduling":68,"Does not confirm data":36,"Claims payment":152,"System problems":18,"Refuse payment":170,"Unemployment\/Disease\/Decease":159,"Operation transfer":255},"Mcdastabri":{"Third-party scheduling":265,"Message":30,"Future contact\/Broken call":289,"Payment promise":7,"Mute call":47,"Incorrect phone":227,"Answering machine\/Machine voice":283,"Client scheduling":53,"Does not confirm data":278,"Claims payment":140,"System problems":130,"Refuse payment":135,"Unemployment\/Disease\/Decease":100,"Operation transfer":96},"Lynn Real Estate":{"Third-party scheduling":218,"Message":12,"Future contact\/Broken call":123,"Payment promise":158,"Mute call":187,"Incorrect phone":286,"Answering machine\/Machine voice":3,"Client scheduling":8,"Does not confirm data":9,"Claims payment":222,"System problems":36,"Refuse payment":165,"Unemployment\/Disease\/Decease":150,"Operation transfer":46},"Thinovosts":{"Third-party scheduling":50,"Message":19,"Future contact\/Broken call":157,"Payment promise":79,"Mute call":218,"Incorrect phone":266,"Answering machine\/Machine voice":286,"Client scheduling":113,"Does not confirm data":59,"Claims payment":146,"System problems":172,"Refuse payment":142,"Unemployment\/Disease\/Decease":222,"Operation transfer":109},"Jamark":{"Third-party scheduling":189,"Message":97,"Future contact\/Broken call":38,"Payment promise":37,"Mute call":123,"Incorrect phone":17,"Answering machine\/Machine voice":197,"Client scheduling":160,"Does not confirm data":251,"Claims payment":14,"System problems":165,"Refuse payment":106,"Unemployment\/Disease\/Decease":116,"Operation transfer":186}}},"distributionByAgents":{"indicators":["Agent","Attempts","Answered","CPC","%CPC","CPCA","%CPCA","Deals","%Deals"],"data":[{"Agent":2167,"Attempts":223,"Answered":883,"CPC":163,"%CPC":41,"CPCA":967,"%CPCA":5,"Deals":884,"%Deals":10},{"Agent":3145,"Attempts":308,"Answered":698,"CPC":556,"%CPC":22,"CPCA":538,"%CPCA":97,"Deals":172,"%Deals":54},{"Agent":3462,"Attempts":851,"Answered":200,"CPC":424,"%CPC":25,"CPCA":651,"%CPCA":89,"Deals":627,"%Deals":58},{"Agent":5889,"Attempts":392,"Answered":367,"CPC":239,"%CPC":36,"CPCA":138,"%CPCA":43,"Deals":876,"%Deals":58},{"Agent":7669,"Attempts":537,"Answered":554,"CPC":475,"%CPC":66,"CPCA":504,"%CPCA":2,"Deals":233,"%Deals":74},{"Agent":9989,"Attempts":172,"Answered":574,"CPC":308,"%CPC":15,"CPCA":226,"%CPCA":24,"Deals":885,"%Deals":86},{"Agent":1753,"Attempts":606,"Answered":597,"CPC":279,"%CPC":82,"CPCA":428,"%CPCA":36,"Deals":865,"%Deals":2},{"Agent":1189,"Attempts":188,"Answered":680,"CPC":433,"%CPC":70,"CPCA":551,"%CPCA":3,"Deals":260,"%Deals":52},{"Agent":5033,"Attempts":742,"Answered":688,"CPC":292,"%CPC":81,"CPCA":888,"%CPCA":88,"Deals":802,"%Deals":92},{"Agent":4828,"Attempts":392,"Answered":428,"CPC":166,"%CPC":91,"CPCA":738,"%CPCA":28,"Deals":189,"%Deals":15},{"Agent":9263,"Attempts":501,"Answered":593,"CPC":993,"%CPC":56,"CPCA":358,"%CPCA":39,"Deals":862,"%Deals":67},{"Agent":2831,"Attempts":838,"Answered":361,"CPC":976,"%CPC":1,"CPCA":984,"%CPCA":52,"Deals":496,"%Deals":55},{"Agent":8393,"Attempts":640,"Answered":749,"CPC":700,"%CPC":69,"CPCA":722,"%CPCA":88,"Deals":680,"%Deals":14},{"Agent":9444,"Attempts":187,"Answered":835,"CPC":299,"%CPC":43,"CPCA":101,"%CPCA":21,"Deals":890,"%Deals":83},{"Agent":8142,"Attempts":796,"Answered":334,"CPC":665,"%CPC":27,"CPCA":490,"%CPCA":55,"Deals":702,"%Deals":69},{"Agent":7360,"Attempts":116,"Answered":291,"CPC":230,"%CPC":81,"CPCA":353,"%CPCA":29,"Deals":937,"%Deals":89},{"Agent":4996,"Attempts":864,"Answered":872,"CPC":111,"%CPC":50,"CPCA":308,"%CPCA":82,"Deals":231,"%Deals":5},{"Agent":6927,"Attempts":742,"Answered":681,"CPC":857,"%CPC":14,"CPCA":946,"%CPCA":29,"Deals":511,"%Deals":46},{"Agent":6456,"Attempts":998,"Answered":703,"CPC":265,"%CPC":52,"CPCA":325,"%CPCA":38,"Deals":398,"%Deals":45},{"Agent":3612,"Attempts":945,"Answered":848,"CPC":108,"%CPC":1,"CPCA":355,"%CPCA":56,"Deals":312,"%Deals":50},{"Agent":2734,"Attempts":990,"Answered":714,"CPC":678,"%CPC":97,"CPCA":294,"%CPCA":98,"Deals":158,"%Deals":62}]},"detailsCPC":[{"x":100,"y":100,"value":1000,"company":"Flex"},{"x":90,"y":50,"value":1200,"company":"Paschoalotto"},{"x":20,"y":110,"value":800,"company":"Syscom"},{"x":180,"y":12,"value":550,"company":"Zanc"}],"detailsDeals":[{"x":100,"y":100,"value":1000,"company":"Flex"},{"x":90,"y":50,"value":1200,"company":"Paschoalotto"},{"x":20,"y":110,"value":800,"company":"Syscom"},{"x":180,"y":12,"value":550,"company":"Zanc"}],"detailsImproductive":[{"x":100,"y":100,"value":1000,"company":"Flex"},{"x":90,"y":50,"value":1200,"company":"Paschoalotto"},{"x":20,"y":110,"value":800,"company":"Syscom"},{"x":180,"y":12,"value":550,"company":"Zanc"}],"detailsMute":[{"x":100,"y":100,"value":1000,"company":"Flex"},{"x":90,"y":50,"value":1200,"company":"Paschoalotto"},{"x":20,"y":110,"value":800,"company":"Syscom"},{"x":180,"y":12,"value":550,"company":"Zanc"}],"detailsMachine":[{"x":100,"y":100,"value":1000,"company":"Flex"},{"x":90,"y":50,"value":1200,"company":"Paschoalotto"},{"x":20,"y":110,"value":800,"company":"Syscom"},{"x":180,"y":12,"value":550,"company":"Zanc"}]}}';
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
            '%Negc /Tent',
            '%Efetivas/Atendidas',
            '%Sucesso/Atendidas',
            '%Negc /CPC',
            'Atendidas/Sucesso',
            'Tent /Hora',
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
        $data = '{"filters":[{"name":"Company","field":"Company","options":["A1","Crc","Paschoalotto","System"]},{"name":"Hour","field":"Hour","options":["8","9","10","11"]}],"data":{"summary":{"portfolioAmount":115952370,"netAmount":114360037.05,"amountRecovered":2169193.85,"amountToRecover":112190843.2},"summaryFinance":{"intendedCPC":1234567.89,"indicators":["Ranking","Portfolio amount","Net amount","Amount paid","%Recovered","%Original CPC","%Intended CPC","Intended amount","Protif","Deals","%Deals","Average amount"],"companies":["TOTAL","Siscom","Paschoalotto","Flex","Zanc","System","A1","Crn"],"data":{"Ranking":{"TOTAL":228463,"Siscom":726082,"Paschoalotto":913314,"Flex":224253,"Zanc":757332,"System":642252,"A1":296202,"Crn":717034},"Portfolio amount":{"TOTAL":985545,"Siscom":527760,"Paschoalotto":172589,"Flex":828174,"Zanc":644929,"System":261347,"A1":858383,"Crn":464892},"Net amount":{"TOTAL":255871,"Siscom":762945,"Paschoalotto":588247,"Flex":419124,"Zanc":451451,"System":345289,"A1":439451,"Crn":257208},"Amount paid":{"TOTAL":348476,"Siscom":903404,"Paschoalotto":151867,"Flex":251669,"Zanc":355658},"%Recovered":{"TOTAL":43,"Siscom":17,"Paschoalotto":57,"Flex":75,"Zanc":61,"System":34,"A1":86,"Crn":28},"%Original CPC":{"TOTAL":87,"Siscom":92,"Paschoalotto":66,"Flex":31,"Zanc":70,"System":34,"A1":63,"Crn":39},"%Intended CPC":{"TOTAL":100,"Siscom":63,"Paschoalotto":8,"Flex":70,"Zanc":12,"System":9,"A1":11,"Crn":86},"Intended amount":{"TOTAL":990927,"Siscom":872965,"Paschoalotto":195395,"Flex":454897,"Zanc":719705,"System":730339,"A1":596434,"Crn":706730},"Protif":{"TOTAL":306222,"Siscom":285484,"Paschoalotto":274788,"Flex":787649,"Zanc":451700,"System":485457,"A1":667555,"Crn":333978},"%Deals":{"TOTAL":40,"Siscom":12,"Paschoalotto":59,"Flex":20,"Zanc":14,"System":10,"A1":82,"Crn":88},"Deals":{"TOTAL":151221,"Siscom":471597,"Paschoalotto":338795,"Flex":808729,"Zanc":863200,"System":863502,"A1":136472,"Crn":661885},"Average amount":{"TOTAL":842139,"Siscom":369824,"Paschoalotto":567152,"Flex":381669,"Zanc":207318,"System":564230,"A1":278315,"Crn":870236}}},"summaryContracts":{"indicators":["Contract","Delay range","Segment","Occurrence","Portfolio amount","%Discount","Net amount","Amount paid"],"data":[{"Contract":"TOTAL","Delay range":"","Segment":"","Occurrence":"","Portfolio amount":702232,"%Discount":1,"Net amount":311984,"Amount paid":352622},{"Contract":677505,"Delay range":"61-90","Segment":"No","Occurrence":"Zoombeat","Portfolio amount":702232,"%Discount":1,"Net amount":311984,"Amount paid":352622},{"Contract":533949,"Delay range":"15-60","Segment":"No","Occurrence":"Skyble","Portfolio amount":445278,"%Discount":99,"Net amount":491982,"Amount paid":633281},{"Contract":450855,"Delay range":"15-60","Segment":"Yes","Occurrence":"Buzzdog","Portfolio amount":245021,"%Discount":47,"Net amount":257193,"Amount paid":327101},{"Contract":139975,"Delay range":"91-360","Segment":"No","Occurrence":"Aimbu","Portfolio amount":228874,"%Discount":39,"Net amount":381226,"Amount paid":929920},{"Contract":684954,"Delay range":"91-360","Segment":"Yes","Occurrence":"Skaboo","Portfolio amount":248342,"%Discount":19,"Net amount":553647,"Amount paid":319526},{"Contract":569039,"Delay range":"91-360","Segment":"No","Occurrence":"Lazzy","Portfolio amount":513664,"%Discount":60,"Net amount":707347,"Amount paid":227794},{"Contract":469948,"Delay range":"61-90","Segment":"Yes","Occurrence":"Fiveclub","Portfolio amount":292492,"%Discount":2,"Net amount":236288,"Amount paid":117826},{"Contract":394877,"Delay range":"15-60","Segment":"No","Occurrence":"Tavu","Portfolio amount":345204,"%Discount":37,"Net amount":424968,"Amount paid":725398},{"Contract":998508,"Delay range":"61-90","Segment":"Yes","Occurrence":"Edgeblab","Portfolio amount":682765,"%Discount":19,"Net amount":492116,"Amount paid":431937},{"Contract":299207,"Delay range":"61-90","Segment":"No","Occurrence":"Dabshots","Portfolio amount":178186,"%Discount":12,"Net amount":385141,"Amount paid":241483},{"Contract":295738,"Delay range":"91-360","Segment":"Yes","Occurrence":"Ooba","Portfolio amount":371072,"%Discount":10,"Net amount":165499,"Amount paid":704377},{"Contract":803116,"Delay range":"61-90","Segment":"Yes","Occurrence":"Tavu","Portfolio amount":610794,"%Discount":17,"Net amount":502556,"Amount paid":669255},{"Contract":830441,"Delay range":"61-90","Segment":"No","Occurrence":"Skyble","Portfolio amount":479781,"%Discount":36,"Net amount":517639,"Amount paid":392459},{"Contract":102309,"Delay range":"61-90","Segment":"No","Occurrence":"Katz","Portfolio amount":141858,"%Discount":62,"Net amount":923669,"Amount paid":750678},{"Contract":822323,"Delay range":"61-90","Segment":"Yes","Occurrence":"Skinte","Portfolio amount":372994,"%Discount":26,"Net amount":917602,"Amount paid":357446},{"Contract":883191,"Delay range":"15-60","Segment":"No","Occurrence":"Wikizz","Portfolio amount":252091,"%Discount":58,"Net amount":785262,"Amount paid":728188},{"Contract":660503,"Delay range":"91-360","Segment":"No","Occurrence":"Wordtune","Portfolio amount":894688,"%Discount":27,"Net amount":543946,"Amount paid":629072},{"Contract":696454,"Delay range":"61-90","Segment":"Yes","Occurrence":"Photospace","Portfolio amount":426186,"%Discount":28,"Net amount":139736,"Amount paid":772409},{"Contract":444672,"Delay range":"15-60","Segment":"Yes","Occurrence":"Aivee","Portfolio amount":549023,"%Discount":89,"Net amount":585294,"Amount paid":539990},{"Contract":609124,"Delay range":"61-90","Segment":"No","Occurrence":"Babbleblab","Portfolio amount":800818,"%Discount":78,"Net amount":655090,"Amount paid":926417},{"Contract":663064,"Delay range":"15-60","Segment":"Yes","Occurrence":"Kazu","Portfolio amount":812849,"%Discount":83,"Net amount":659673,"Amount paid":463370},{"Contract":823814,"Delay range":"61-90","Segment":"Yes","Occurrence":"Topicshots","Portfolio amount":655402,"%Discount":83,"Net amount":158076,"Amount paid":300493},{"Contract":846652,"Delay range":"61-90","Segment":"No","Occurrence":"Talane","Portfolio amount":448676,"%Discount":84,"Net amount":820761,"Amount paid":791574},{"Contract":121716,"Delay range":"15-60","Segment":"Yes","Occurrence":"Ainyx","Portfolio amount":991512,"%Discount":36,"Net amount":910631,"Amount paid":542724},{"Contract":589091,"Delay range":"61-90","Segment":"No","Occurrence":"Yabox","Portfolio amount":505105,"%Discount":81,"Net amount":101772,"Amount paid":564701},{"Contract":584926,"Delay range":"91-360","Segment":"Yes","Occurrence":"Fivechat","Portfolio amount":810303,"%Discount":12,"Net amount":220313,"Amount paid":960850},{"Contract":518374,"Delay range":"61-90","Segment":"Yes","Occurrence":"Aimbo","Portfolio amount":629518,"%Discount":17,"Net amount":635484,"Amount paid":462698},{"Contract":154221,"Delay range":"15-60","Segment":"No","Occurrence":"Zoonoodle","Portfolio amount":506849,"%Discount":77,"Net amount":919164,"Amount paid":278511},{"Contract":572949,"Delay range":"61-90","Segment":"Yes","Occurrence":"Voolia","Portfolio amount":838298,"%Discount":86,"Net amount":493994,"Amount paid":430781},{"Contract":205995,"Delay range":"15-60","Segment":"No","Occurrence":"Buzzster","Portfolio amount":802242,"%Discount":12,"Net amount":895249,"Amount paid":823697},{"Contract":131062,"Delay range":"61-90","Segment":"Yes","Occurrence":"Skivee","Portfolio amount":949106,"%Discount":30,"Net amount":275517,"Amount paid":882768},{"Contract":890830,"Delay range":"15-60","Segment":"Yes","Occurrence":"Skyndu","Portfolio amount":433539,"%Discount":27,"Net amount":143317,"Amount paid":142979},{"Contract":189160,"Delay range":"91-360","Segment":"Yes","Occurrence":"Reallinks","Portfolio amount":134007,"%Discount":57,"Net amount":659537,"Amount paid":752988},{"Contract":574325,"Delay range":"15-60","Segment":"Yes","Occurrence":"Centidel","Portfolio amount":175578,"%Discount":16,"Net amount":485594,"Amount paid":689320},{"Contract":687937,"Delay range":"61-90","Segment":"Yes","Occurrence":"Voonyx","Portfolio amount":242842,"%Discount":14,"Net amount":853937,"Amount paid":327354},{"Contract":312877,"Delay range":"15-60","Segment":"No","Occurrence":"Babbleset","Portfolio amount":896230,"%Discount":58,"Net amount":446016,"Amount paid":843528},{"Contract":828617,"Delay range":"61-90","Segment":"No","Occurrence":"Photolist","Portfolio amount":846115,"%Discount":21,"Net amount":423177,"Amount paid":410341},{"Contract":519719,"Delay range":"61-90","Segment":"No","Occurrence":"Twimbo","Portfolio amount":288401,"%Discount":69,"Net amount":659113,"Amount paid":141848},{"Contract":658254,"Delay range":"61-90","Segment":"Yes","Occurrence":"Edgeify","Portfolio amount":502182,"%Discount":5,"Net amount":200466,"Amount paid":857210},{"Contract":296180,"Delay range":"61-90","Segment":"No","Occurrence":"Trudoo","Portfolio amount":330182,"%Discount":77,"Net amount":720151,"Amount paid":994559},{"Contract":315356,"Delay range":"91-360","Segment":"Yes","Occurrence":"Tagfeed","Portfolio amount":684252,"%Discount":17,"Net amount":112036,"Amount paid":999290},{"Contract":720782,"Delay range":"15-60","Segment":"Yes","Occurrence":"Dazzlesphere","Portfolio amount":422623,"%Discount":41,"Net amount":746599,"Amount paid":207872},{"Contract":994517,"Delay range":"61-90","Segment":"No","Occurrence":"Rhyloo","Portfolio amount":791767,"%Discount":94,"Net amount":121685,"Amount paid":745521},{"Contract":847898,"Delay range":"15-60","Segment":"No","Occurrence":"Jabbersphere","Portfolio amount":987441,"%Discount":56,"Net amount":865690,"Amount paid":462793},{"Contract":627885,"Delay range":"91-360","Segment":"Yes","Occurrence":"Dabfeed","Portfolio amount":826192,"%Discount":46,"Net amount":636103,"Amount paid":898114},{"Contract":133787,"Delay range":"15-60","Segment":"No","Occurrence":"Topicshots","Portfolio amount":828943,"%Discount":100,"Net amount":383024,"Amount paid":321433},{"Contract":990878,"Delay range":"15-60","Segment":"Yes","Occurrence":"Twitterbridge","Portfolio amount":895238,"%Discount":71,"Net amount":614660,"Amount paid":245916},{"Contract":825950,"Delay range":"61-90","Segment":"Yes","Occurrence":"Leenti","Portfolio amount":981645,"%Discount":49,"Net amount":822668,"Amount paid":792064},{"Contract":488318,"Delay range":"61-90","Segment":"Yes","Occurrence":"Skibox","Portfolio amount":733335,"%Discount":1,"Net amount":311542,"Amount paid":763524},{"Contract":225008,"Delay range":"91-360","Segment":"No","Occurrence":"Tagopia","Portfolio amount":603455,"%Discount":10,"Net amount":295551,"Amount paid":665638}]},"delayRange":[{"range":"15 - 60","amount":1088289},{"range":"61 - 90","amount":873799},{"range":"91 - 360","amount":207126}],"ageRange":[{"range":"18 a 26","amount":476708},{"range":"27 a 40","amount":953388},{"range":"41 a 65","amount":739098}],"civilStatus":[{"status":"Married","amount":1618017},{"status":"Single","amount":551177}],"genre":[{"genre":"Female","amount":866330},{"genre":"Male","amount":1302564}],"miniAttempts":[{"date":"2020-01-01","total":6236},{"date":"2020-01-02","total":5023},{"date":"2020-01-03","total":6829},{"date":"2020-01-04","total":9417},{"date":"2020-01-05","total":2728},{"date":"2020-01-06","total":5201},{"date":"2020-01-07","total":3387},{"date":"2020-01-08","total":5987},{"date":"2020-01-09","total":8018},{"date":"2020-01-09","total":2524},{"date":"2020-01-10","total":8638},{"date":"2020-01-11","total":4737},{"date":"2020-01-12","total":2836},{"date":"2020-01-13","total":1176},{"date":"2020-01-14","total":1576}],"miniMobile":[{"date":"2020-01-01","total":6236},{"date":"2020-01-02","total":5023},{"date":"2020-01-03","total":6829},{"date":"2020-01-04","total":9417},{"date":"2020-01-05","total":2728},{"date":"2020-01-06","total":5201},{"date":"2020-01-07","total":3387},{"date":"2020-01-08","total":5987},{"date":"2020-01-09","total":8018},{"date":"2020-01-09","total":2524},{"date":"2020-01-10","total":8638},{"date":"2020-01-11","total":4737},{"date":"2020-01-12","total":2836},{"date":"2020-01-13","total":1176},{"date":"2020-01-14","total":1576}],"miniCPC":[{"date":"2020-01-01","total":6236},{"date":"2020-01-02","total":5023},{"date":"2020-01-03","total":6829},{"date":"2020-01-04","total":9417},{"date":"2020-01-05","total":2728},{"date":"2020-01-06","total":5201},{"date":"2020-01-07","total":3387},{"date":"2020-01-08","total":5987},{"date":"2020-01-09","total":8018},{"date":"2020-01-09","total":2524},{"date":"2020-01-10","total":8638},{"date":"2020-01-11","total":4737},{"date":"2020-01-12","total":2836},{"date":"2020-01-13","total":1176},{"date":"2020-01-14","total":1576}],"miniDeals":[{"date":"2020-01-01","total":6236},{"date":"2020-01-02","total":5023},{"date":"2020-01-03","total":6829},{"date":"2020-01-04","total":9417},{"date":"2020-01-05","total":2728},{"date":"2020-01-06","total":5201},{"date":"2020-01-07","total":3387},{"date":"2020-01-08","total":5987},{"date":"2020-01-09","total":8018},{"date":"2020-01-09","total":2524},{"date":"2020-01-10","total":8638},{"date":"2020-01-11","total":4737},{"date":"2020-01-12","total":2836},{"date":"2020-01-13","total":1176},{"date":"2020-01-14","total":1576}],"miniHitRate":[{"date":"2020-01-01","total":6236},{"date":"2020-01-02","total":5023},{"date":"2020-01-03","total":6829},{"date":"2020-01-04","total":9417},{"date":"2020-01-05","total":2728},{"date":"2020-01-06","total":5201},{"date":"2020-01-07","total":3387},{"date":"2020-01-08","total":5987},{"date":"2020-01-09","total":8018},{"date":"2020-01-09","total":2524},{"date":"2020-01-10","total":8638},{"date":"2020-01-11","total":4737},{"date":"2020-01-12","total":2836},{"date":"2020-01-13","total":1176},{"date":"2020-01-14","total":1576}],"miniNotFound":[{"date":"2020-01-01","total":6236},{"date":"2020-01-02","total":5023},{"date":"2020-01-03","total":6829},{"date":"2020-01-04","total":9417},{"date":"2020-01-05","total":2728},{"date":"2020-01-06","total":5201},{"date":"2020-01-07","total":3387},{"date":"2020-01-08","total":5987},{"date":"2020-01-09","total":8018},{"date":"2020-01-09","total":2524},{"date":"2020-01-10","total":8638},{"date":"2020-01-11","total":4737},{"date":"2020-01-12","total":2836},{"date":"2020-01-13","total":1176},{"date":"2020-01-14","total":1576}],"miniImproductive":[{"date":"2020-01-01","total":6236},{"date":"2020-01-02","total":5023},{"date":"2020-01-03","total":6829},{"date":"2020-01-04","total":9417},{"date":"2020-01-05","total":2728},{"date":"2020-01-06","total":5201},{"date":"2020-01-07","total":3387},{"date":"2020-01-08","total":5987},{"date":"2020-01-09","total":8018},{"date":"2020-01-09","total":2524},{"date":"2020-01-10","total":8638},{"date":"2020-01-11","total":4737},{"date":"2020-01-12","total":2836},{"date":"2020-01-13","total":1176},{"date":"2020-01-14","total":1576}],"miniLogged":[{"date":"2020-01-01","total":6236},{"date":"2020-01-02","total":5023},{"date":"2020-01-03","total":6829},{"date":"2020-01-04","total":9417},{"date":"2020-01-05","total":2728},{"date":"2020-01-06","total":5201},{"date":"2020-01-07","total":3387},{"date":"2020-01-08","total":5987},{"date":"2020-01-09","total":8018},{"date":"2020-01-09","total":2524},{"date":"2020-01-10","total":8638},{"date":"2020-01-11","total":4737},{"date":"2020-01-12","total":2836},{"date":"2020-01-13","total":1176},{"date":"2020-01-14","total":1576}]}}';

        return response($data);
    }

    public function region()
    {
        $data = '{"filters":[],"data":{"distributionByState":[{"state":"AC","total":1029,"percent":12},{"state":"AL","total":545,"percent":4},{"state":"AM","total":436,"percent":23},{"state":"AP","total":958,"percent":50},{"state":"BA","total":724,"percent":35},{"state":"CE","total":866,"percent":65},{"state":"DF","total":352,"percent":22},{"state":"ES","total":352,"percent":22},{"state":"GO","total":352,"percent":22},{"state":"MA","total":352,"percent":22},{"state":"MG","total":352,"percent":22},{"state":"MS","total":352,"percent":22},{"state":"MT","total":352,"percent":22},{"state":"PA","total":1029,"percent":12},{"state":"PB","total":545,"percent":4},{"state":"PE","total":436,"percent":23},{"state":"PI","total":958,"percent":50},{"state":"PR","total":724,"percent":35},{"state":"RJ","total":866,"percent":65},{"state":"RN","total":352,"percent":22},{"state":"RO","total":352,"percent":22},{"state":"RR","total":352,"percent":22},{"state":"RS","total":352,"percent":22},{"state":"SC","total":352,"percent":22},{"state":"SE","total":352,"percent":22},{"state":"SP","total":352,"percent":22},{"state":"TO","total":352,"percent":22}],"geographicRegion":{"regions":["TOTAL","Southeast","South","Midwest","North","Northeast"],"indicators":["Attempts","Answered","%Hit\/Rate","%CPC","Deals","%Deals","%Improductive","%Mute","%Machine","%Incorrect","TMA"],"data":{"TOTAL":{"Attempts":148643,"Answered":860559,"%Hit\/Rate":31,"%CPC":79,"%Mute":89,"%Machine":19,"%Incorrect":77,"%Improductive":87,"Deals":431431,"%Deals":93,"TMA":1},"Southeast":{"Attempts":312036,"Answered":532649,"%Hit\/Rate":59,"%CPC":97,"%Mute":9,"%Machine":67,"%Incorrect":78,"%Improductive":30,"Deals":267844,"%Deals":68,"TMA":19},"Midwest":{"Attempts":645619,"Answered":671320,"%Hit\/Rate":41,"%CPC":95,"%Mute":61,"%Machine":73,"%Incorrect":3,"%Improductive":49,"Deals":187100,"%Deals":11,"TMA":4},"South":{"Attempts":254450,"Answered":948414,"%Hit\/Rate":28,"%CPC":7,"%Mute":22,"%Machine":16,"%Incorrect":92,"%Improductive":45,"Deals":290342,"%Deals":63,"TMA":66},"North":{"Attempts":211675,"Answered":371340,"%Hit\/Rate":34,"%CPC":94,"%Mute":20,"%Machine":93,"%Incorrect":45,"%Improductive":13,"Deals":986347,"%Deals":42,"TMA":17},"Northeast":{"Attempts":742918,"Answered":252770,"%Hit\/Rate":84,"%CPC":87,"%Mute":1,"%Machine":7,"%Incorrect":19,"%Improductive":59,"Deals":390473,"%Deals":24,"TMA":55}}},"telecomRegion":{"regions":["TOTAL","Region I","Region II","Region III"],"indicators":["Attempts","Answered","%Hit\/Rate","%CPC","Deals","%Deals","%Improductive","%Mute","%Machine","%Incorrect","TMA"],"data":{"TOTAL":{"Attempts":479050,"Answered":706311,"%Hit\/Rate":96,"%CPC":26,"%Mute":51,"%Machine":21,"%Incorrect":92,"%Improductive":56,"Deals":701312,"%Deals":62,"TMA":49},"Region I":{"Attempts":374036,"Answered":495866,"%Hit\/Rate":93,"%CPC":88,"%Mute":80,"%Machine":83,"%Incorrect":66,"%Improductive":14,"Deals":980476,"%Deals":28,"TMA":8},"Region II":{"Attempts":306565,"Answered":847281,"%Hit\/Rate":87,"%CPC":99,"%Mute":34,"%Machine":35,"%Incorrect":33,"%Improductive":64,"Deals":230305,"%Deals":78,"TMA":39},"Region III":{"Attempts":518719,"Answered":821472,"%Hit\/Rate":98,"%CPC":12,"%Mute":79,"%Machine":99,"%Incorrect":84,"%Improductive":40,"Deals":880143,"%Deals":10,"TMA":1}}},"states":{"states":["TOTAL","AC","AL","AP","AM","BA","CE","DF","ES","GO","MA","MT","MS","MG","PA","PB","PR","PE","PI","RJ","RN","RS","RO","RR","SC","SP","SE","TO"],"indicators":["Attempts","Answered","%Hit\/Rate","%CPC","Deals","%Deals","%Improductive","%Mute","%Machine","%Incorrect","TMA"],"data":{"TOTAL":{"Attempts":395188,"Answered":700950,"%Hit\/Rate":52,"%CPC":60,"%Mute":83,"%Machine":87,"%Incorrect":11,"%Improductive":64,"Deals":573767,"%Deals":18,"TMA":74},"AC":{"Attempts":805018,"Answered":297660,"%Hit\/Rate":33,"%CPC":17,"%Mute":8,"%Machine":9,"%Incorrect":47,"%Improductive":23,"Deals":986992,"%Deals":46,"TMA":32},"AL":{"Attempts":800772,"Answered":950789,"%Hit\/Rate":35,"%CPC":19,"%Mute":79,"%Machine":59,"%Incorrect":19,"%Improductive":86,"Deals":776930,"%Deals":61,"TMA":100},"AP":{"Attempts":761746,"Answered":354590,"%Hit\/Rate":30,"%CPC":13,"%Mute":95,"%Machine":46,"%Incorrect":19,"%Improductive":44,"Deals":724236,"%Deals":51,"TMA":10},"AM":{"Attempts":843211,"Answered":606144,"%Hit\/Rate":12,"%CPC":44,"%Mute":77,"%Machine":41,"%Incorrect":17,"%Improductive":14,"Deals":210377,"%Deals":95,"TMA":28},"BA":{"Attempts":109406,"Answered":561794,"%Hit\/Rate":21,"%CPC":83,"%Mute":14,"%Machine":69,"%Incorrect":69,"%Improductive":50,"Deals":488700,"%Deals":56,"TMA":92},"CE":{"Attempts":555210,"Answered":868697,"%Hit\/Rate":22,"%CPC":98,"%Mute":29,"%Machine":2,"%Incorrect":27,"%Improductive":88,"Deals":120512,"%Deals":95,"TMA":41},"DF":{"Attempts":628338,"Answered":480042,"%Hit\/Rate":66,"%CPC":51,"%Mute":43,"%Machine":97,"%Incorrect":22,"%Improductive":1,"Deals":152196,"%Deals":42,"TMA":33},"ES":{"Attempts":640545,"Answered":856287,"%Hit\/Rate":22,"%CPC":41,"%Mute":32,"%Machine":24,"%Incorrect":76,"%Improductive":31,"Deals":838598,"%Deals":82,"TMA":34},"GO":{"Attempts":324928,"Answered":333743,"%Hit\/Rate":4,"%CPC":91,"%Mute":15,"%Machine":71,"%Incorrect":69,"%Improductive":96,"Deals":424936,"%Deals":61,"TMA":55},"MA":{"Attempts":865805,"Answered":945656,"%Hit\/Rate":96,"%CPC":50,"%Mute":68,"%Machine":90,"%Incorrect":100,"%Improductive":13,"Deals":857745,"%Deals":31,"TMA":20},"MT":{"Attempts":789003,"Answered":578009,"%Hit\/Rate":76,"%CPC":11,"%Mute":57,"%Machine":46,"%Incorrect":99,"%Improductive":42,"Deals":782940,"%Deals":22,"TMA":22},"MS":{"Attempts":632233,"Answered":908435,"%Hit\/Rate":8,"%CPC":79,"%Mute":85,"%Machine":88,"%Incorrect":45,"%Improductive":30,"Deals":315529,"%Deals":80,"TMA":91},"MG":{"Attempts":744765,"Answered":502370,"%Hit\/Rate":1,"%CPC":60,"%Mute":38,"%Machine":78,"%Incorrect":25,"%Improductive":97,"Deals":540771,"%Deals":41,"TMA":45},"PA":{"Attempts":177487,"Answered":920612,"%Hit\/Rate":81,"%CPC":28,"%Mute":46,"%Machine":6,"%Incorrect":14,"%Improductive":98,"Deals":601814,"%Deals":22,"TMA":72},"PB":{"Attempts":579745,"Answered":725634,"%Hit\/Rate":42,"%CPC":59,"%Mute":11,"%Machine":7,"%Incorrect":41,"%Improductive":4,"Deals":263813,"%Deals":40,"TMA":87},"PR":{"Attempts":666324,"Answered":486562,"%Hit\/Rate":13,"%CPC":10,"%Mute":67,"%Machine":93,"%Incorrect":98,"%Improductive":94,"Deals":981008,"%Deals":14,"TMA":55},"PE":{"Attempts":347164,"Answered":421404,"%Hit\/Rate":10,"%CPC":17,"%Mute":94,"%Machine":60,"%Incorrect":42,"%Improductive":58,"Deals":722930,"%Deals":67,"TMA":49},"PI":{"Attempts":664234,"Answered":440860,"%Hit\/Rate":26,"%CPC":53,"%Mute":1,"%Machine":41,"%Incorrect":86,"%Improductive":7,"Deals":224927,"%Deals":72,"TMA":11},"RJ":{"Attempts":586661,"Answered":535312,"%Hit\/Rate":83,"%CPC":36,"%Mute":50,"%Machine":8,"%Incorrect":18,"%Improductive":34,"Deals":792778,"%Deals":49,"TMA":22},"RN":{"Attempts":441086,"Answered":883896,"%Hit\/Rate":98,"%CPC":14,"%Mute":93,"%Machine":90,"%Incorrect":78,"%Improductive":47,"Deals":631168,"%Deals":25,"TMA":63},"RS":{"Attempts":969292,"Answered":486482,"%Hit\/Rate":97,"%CPC":71,"%Mute":18,"%Machine":100,"%Incorrect":18,"%Improductive":61,"Deals":828762,"%Deals":1,"TMA":72},"RO":{"Attempts":128216,"Answered":128090,"%Hit\/Rate":55,"%CPC":37,"%Mute":43,"%Machine":27,"%Incorrect":56,"%Improductive":82,"Deals":121939,"%Deals":68,"TMA":90},"RR":{"Attempts":900209,"Answered":242063,"%Hit\/Rate":31,"%CPC":75,"%Mute":3,"%Machine":37,"%Incorrect":50,"%Improductive":94,"Deals":857855,"%Deals":80,"TMA":72},"SC":{"Attempts":791409,"Answered":923840,"%Hit\/Rate":64,"%CPC":38,"%Mute":23,"%Machine":80,"%Incorrect":15,"%Improductive":5,"Deals":971818,"%Deals":74,"TMA":68},"SP":{"Attempts":713950,"Answered":902014,"%Hit\/Rate":33,"%CPC":8,"%Mute":4,"%Machine":81,"%Incorrect":46,"%Improductive":34,"Deals":712747,"%Deals":69,"TMA":24},"SE":{"Attempts":447931,"Answered":561408,"%Hit\/Rate":79,"%CPC":5,"%Mute":13,"%Machine":91,"%Incorrect":12,"%Improductive":85,"Deals":603695,"%Deals":57,"TMA":55},"TO":{"Attempts":989631,"Answered":440461,"%Hit\/Rate":100,"%CPC":27,"%Mute":31,"%Machine":26,"%Incorrect":19,"%Improductive":71,"Deals":215014,"%Deals":11,"TMA":46}}},"cities":{"cities":["TOTAL","Canudos do Vale","Agudo","Pirajuba","Barbacena","Po\u00e7\u00f5es","Presidente Sarney","Joinville","Janda\u00edra","Sem-Peixe","Pedra Bonita","Jari","Campo do Tenente","Vera Cruz","Cambori\u00fa","Crato","Pinheiro","Alto Long\u00e1","Riversul","Domingos Martins","Santa Filomena","Paula Freitas","Muitos Cap\u00f5es","Cuit\u00e9 de Mamanguape","Marituba","Ribeir\u00e3o"],"indicators":["Attempts","Answered","%Hit\/Rate","%CPC","Deals","%Deals","%Improductive","%Mute","%Machine","%Incorrect","TMA"],"data":{"TOTAL":{"Attempts":863478,"Answered":623765,"%Hit\/Rate":20,"%CPC":82,"%Mute":88,"%Machine":32,"%Incorrect":91,"%Improductive":69,"Deals":346344,"%Deals":88,"TMA":28},"Canudos do Vale":{"Attempts":354408,"Answered":357799,"%Hit\/Rate":26,"%CPC":57,"%Mute":94,"%Machine":6,"%Incorrect":90,"%Improductive":76,"Deals":422183,"%Deals":89,"TMA":32},"Agudo":{"Attempts":113047,"Answered":226620,"%Hit\/Rate":37,"%CPC":22,"%Mute":66,"%Machine":44,"%Incorrect":53,"%Improductive":67,"Deals":353752,"%Deals":82,"TMA":35},"Pirajuba":{"Attempts":895221,"Answered":258006,"%Hit\/Rate":65,"%CPC":42,"%Mute":72,"%Machine":71,"%Incorrect":74,"%Improductive":55,"Deals":764534,"%Deals":77,"TMA":67},"Barbacena":{"Attempts":479336,"Answered":634316,"%Hit\/Rate":23,"%CPC":42,"%Mute":50,"%Machine":13,"%Incorrect":99,"%Improductive":53,"Deals":820604,"%Deals":97,"TMA":75},"Po\u00e7\u00f5es":{"Attempts":803756,"Answered":621068,"%Hit\/Rate":75,"%CPC":3,"%Mute":23,"%Machine":22,"%Incorrect":93,"%Improductive":66,"Deals":766286,"%Deals":51,"TMA":50},"Presidente Sarney":{"Attempts":981262,"Answered":830695,"%Hit\/Rate":51,"%CPC":96,"%Mute":84,"%Machine":97,"%Incorrect":55,"%Improductive":58,"Deals":137300,"%Deals":35,"TMA":32},"Joinville":{"Attempts":680552,"Answered":325660,"%Hit\/Rate":6,"%CPC":52,"%Mute":78,"%Machine":45,"%Incorrect":53,"%Improductive":79,"Deals":964508,"%Deals":80,"TMA":35},"Janda\u00edra":{"Attempts":252123,"Answered":609792,"%Hit\/Rate":100,"%CPC":95,"%Mute":67,"%Machine":82,"%Incorrect":22,"%Improductive":92,"Deals":891581,"%Deals":65,"TMA":99},"Sem-Peixe":{"Attempts":134672,"Answered":582415,"%Hit\/Rate":80,"%CPC":76,"%Mute":6,"%Machine":47,"%Incorrect":39,"%Improductive":38,"Deals":829555,"%Deals":60,"TMA":2},"Pedra Bonita":{"Attempts":138396,"Answered":447356,"%Hit\/Rate":63,"%CPC":5,"%Mute":74,"%Machine":73,"%Incorrect":34,"%Improductive":93,"Deals":746562,"%Deals":26,"TMA":66},"Jari":{"Attempts":100820,"Answered":129310,"%Hit\/Rate":90,"%CPC":21,"%Mute":90,"%Machine":42,"%Incorrect":3,"%Improductive":13,"Deals":525733,"%Deals":25,"TMA":33},"Campo do Tenente":{"Attempts":883333,"Answered":281289,"%Hit\/Rate":96,"%CPC":81,"%Mute":42,"%Machine":96,"%Incorrect":50,"%Improductive":36,"Deals":147803,"%Deals":77,"TMA":2},"Vera Cruz":{"Attempts":211818,"Answered":486154,"%Hit\/Rate":62,"%CPC":37,"%Mute":100,"%Machine":31,"%Incorrect":12,"%Improductive":56,"Deals":307104,"%Deals":28,"TMA":4},"Cambori\u00fa":{"Attempts":741024,"Answered":794596,"%Hit\/Rate":43,"%CPC":5,"%Mute":63,"%Machine":45,"%Incorrect":33,"%Improductive":86,"Deals":821181,"%Deals":78,"TMA":84},"Crato":{"Attempts":238087,"Answered":209475,"%Hit\/Rate":47,"%CPC":53,"%Mute":18,"%Machine":87,"%Incorrect":40,"%Improductive":60,"Deals":911162,"%Deals":84,"TMA":49},"Pinheiro":{"Attempts":994581,"Answered":418577,"%Hit\/Rate":55,"%CPC":3,"%Mute":69,"%Machine":52,"%Incorrect":65,"%Improductive":3,"Deals":968867,"%Deals":86,"TMA":57},"Alto Long\u00e1":{"Attempts":550860,"Answered":227531,"%Hit\/Rate":92,"%CPC":94,"%Mute":49,"%Machine":41,"%Incorrect":52,"%Improductive":77,"Deals":372160,"%Deals":9,"TMA":42},"Riversul":{"Attempts":278892,"Answered":411732,"%Hit\/Rate":76,"%CPC":59,"%Mute":85,"%Machine":4,"%Incorrect":79,"%Improductive":25,"Deals":690892,"%Deals":36,"TMA":24},"Domingos Martins":{"Attempts":499433,"Answered":399615,"%Hit\/Rate":47,"%CPC":76,"%Mute":14,"%Machine":69,"%Incorrect":64,"%Improductive":76,"Deals":395271,"%Deals":12,"TMA":93},"Santa Filomena":{"Attempts":401607,"Answered":384715,"%Hit\/Rate":22,"%CPC":64,"%Mute":6,"%Machine":38,"%Incorrect":44,"%Improductive":50,"Deals":418144,"%Deals":31,"TMA":85},"Paula Freitas":{"Attempts":958856,"Answered":325723,"%Hit\/Rate":8,"%CPC":70,"%Mute":6,"%Machine":42,"%Incorrect":29,"%Improductive":69,"Deals":280936,"%Deals":100,"TMA":6},"Muitos Cap\u00f5es":{"Attempts":406819,"Answered":272102,"%Hit\/Rate":94,"%CPC":8,"%Mute":96,"%Machine":20,"%Incorrect":81,"%Improductive":13,"Deals":126249,"%Deals":30,"TMA":57},"Cuit\u00e9 de Mamanguape":{"Attempts":856467,"Answered":645752,"%Hit\/Rate":1,"%CPC":61,"%Mute":29,"%Machine":53,"%Incorrect":76,"%Improductive":9,"Deals":892896,"%Deals":57,"TMA":10},"Marituba":{"Attempts":379217,"Answered":136294,"%Hit\/Rate":91,"%CPC":46,"%Mute":47,"%Machine":62,"%Incorrect":48,"%Improductive":41,"Deals":737806,"%Deals":54,"TMA":30},"Ribeir\u00e3o":{"Attempts":666545,"Answered":900618,"%Hit\/Rate":86,"%CPC":61,"%Mute":74,"%Machine":67,"%Incorrect":42,"%Improductive":51,"Deals":336491,"%Deals":23,"TMA":32}}},"totalTriggers":[{"city":"S\u00e3o Paulo","total":2500,"latitude":-23.5505,"longitude":-46.6333},{"city":"Bras\u00edlia","total":150,"latitude":-15.8267,"longitude":-47.9218},{"city":"Curitiba","total":3215,"latitude":-25.4809,"longitude":-49.3044}],"distributionByStep":{"steps":["TOTAL","Inter-LDN","Intra-LDN","Local","VC1","VC2","VC3"],"indicators":["Attempts","Answered","%Hit\/Rate","%CPC","%CPCA","%Deals"],"data":{"TOTAL":{"Attempts":184674,"Answered":273707,"%Hit\/Rate":42,"%CPC":60,"%CPCA":39,"%Deals":99},"Inter-LDN":{"Attempts":669741,"Answered":490645,"%Hit\/Rate":8,"%CPC":37,"%CPCA":68,"%Deals":17},"Intra-LDN":{"Attempts":325665,"Answered":398644,"%Hit\/Rate":22,"%CPC":40,"%CPCA":21,"%Deals":26},"Local":{"Attempts":203789,"Answered":980369,"%Hit\/Rate":8,"%CPC":65,"%CPCA":78,"%Deals":3},"VC1":{"Attempts":229849,"Answered":394274,"%Hit\/Rate":73,"%CPC":9,"%CPCA":69,"%Deals":21},"VC2":{"Attempts":638179,"Answered":665336,"%Hit\/Rate":7,"%CPC":24,"%CPCA":23,"%Deals":59},"VC3":{"Attempts":387523,"Answered":300029,"%Hit\/Rate":38,"%CPC":16,"%CPCA":72,"%Deals":12}}},"perfilMobileFixed":[{"step":"Inter-LDN","percent":12.6},{"step":"Intra-LDN","percent":12.3},{"step":"Local","percent":12.8},{"step":"VC1","percent":19},{"step":"VC2","percent":31.6},{"step":"VC3","percent":29.7}],"bestCPCFixedMobile":[{"step":"Inter-LDN","percent":12.6},{"step":"Intra-LDN","percent":12.3},{"step":"Local","percent":12.8},{"step":"VC1","percent":19},{"step":"VC2","percent":31.6},{"step":"VC3","percent":29.7}],"holidays":{"info":["Date","Day","Description","Local"],"data":[{"Date":"2020-01-01","Day":"Wednesday","Description":"New year","Local":"National"},{"Date":"2020-04-10","Day":"Friday","Description":"Good Friday","Local":"National"},{"Date":"2020-04-21","Day":"Tuesday","Description":"Tiradentes","Local":"National"},{"Date":"2020-05-01","Day":"Friday","Description":"Labor day","Local":"National"},{"Date":"2020-09-07","Day":"Monday","Description":"Brazil independency","Local":"National"},{"Date":"2020-10-12","Day":"Monday","Description":"Children day","Local":"National"},{"Date":"2020-11-02","Day":"Monday","Description":"All Souls\' day","Local":"National"},{"Date":"2020-11-15","Day":"Sunday","Description":"Proclamation of the Republic","Local":"National"},{"Date":"2020-12-25","Day":"Monday","Description":"Christmas","Local":"National"}]}}}';

        return response($data);
    }
}
