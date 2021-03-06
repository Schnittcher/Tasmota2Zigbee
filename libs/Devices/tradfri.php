<?php

declare(strict_types=1);

return [
    'TRADFRI on/off switch' => [
        'Power' => [
            'Name'                   => 'State',
            'VariableProfile'        => 'T2M.TogglePower',
            'VariableType'           => VARIABLETYPE_INTEGER,
            'Action'                 => false,
            'ActionCommand'          => '',
            'SearchString'           => 'Power'
        ],
        'DimmerMove' => [
            'Name'                   => 'DimmerMove',
            'VariableProfile'        => 'T2M.IKEA.DimmerMove',
            'VariableType'           => VARIABLETYPE_INTEGER,
            'Action'                 => false,
            'ActionCommand'          => '',
            'SearchString'           => 'DimmerMove'
        ]
    ],
    'TRADFRI remote control' => [
        'Power' => [
            'Name'                   => 'State',
            'VariableProfile'        => 'T2M.TogglePower',
            'VariableType'           => VARIABLETYPE_INTEGER,
            'Action'                 => false,
            'ActionCommand'          => '',
            'SearchString'           => 'Power'
        ],
        'DimmerUp' => [
            'Name'                   => 'DimmerUp',
            'VariableProfile'        => '',
            'VariableType'           => VARIABLETYPE_BOOLEAN,
            'Action'                 => false,
            'ActionCommand'          => '',
            'SearchString'           => 'DimmerUp'
        ],
        'DimmerStepDown' => [
            'Name'                   => 'DimmerStepDown',
            'VariableProfile'        => '',
            'VariableType'           => VARIABLETYPE_INTEGER,
            'Action'                 => false,
            'ActionCommand'          => '',
            'SearchString'           => 'DimmerStepDown'
        ],
        'ArrowClick' => [
            'Name'                   => 'Arrow Click',
            'VariableProfile'        => 'T2M.IKEA.ArrowClick',
            'VariableType'           => VARIABLETYPE_INTEGER,
            'Action'                 => false,
            'ActionCommand'          => '',
            'SearchString'           => 'ArrowClick'
        ],
        'DimmerMove' => [
            'Name'                   => 'DimmerMove',
            'VariableProfile'        => 'T2M.IKEA.DimmerMove',
            'VariableType'           => VARIABLETYPE_INTEGER,
            'Action'                 => false,
            'ActionCommand'          => '',
            'SearchString'           => 'DimmerMove'
        ]
    ],
    'TRADFRI motion sensor' => [
        'Power' => [
            'Name'                   => 'Motion',
            'VariableProfile'        => '~Motion',
            'VariableType'           => VARIABLETYPE_BOOLEAN,
            'Action'                 => false,
            'ActionCommand'          => '',
            'SearchString'           => 'Power'
        ]
    ],
    'TRADFRI transformer 30W' => [
        'Power' => [
            'Name'                   => 'State',
            'VariableProfile'        => '~Switch',
            'VariableType'           => VARIABLETYPE_BOOLEAN,
            'Action'                 => 'tasmota',
            'ActionCommand'          => 'Power',
            'SearchString'           => 'Power'
        ],
        'Dimmer' => [
            'Name'                   => 'Brightness',
            'VariableProfile'        => '~Intensity.255',
            'VariableType'           => VARIABLETYPE_INTEGER,
            'Action'                 => 'tasmota',
            'ActionCommand'          => 'Dimmer',
            'SearchString'           => 'Dimmer'
        ],
    ],
    'TRADFRI Driver 30W' => [
        'Power' => [
            'Name'                   => 'State',
            'VariableProfile'        => '~Switch',
            'VariableType'           => VARIABLETYPE_BOOLEAN,
            'Action'                 => 'tasmota',
            'ActionCommand'          => 'Power',
            'SearchString'           => 'Power'
        ],
        'Dimmer' => [
            'Name'                   => 'Brightness',
            'VariableProfile'        => '~Intensity.255',
            'VariableType'           => VARIABLETYPE_INTEGER,
            'Action'                 => 'tasmota',
            'ActionCommand'          => 'Dimmer',
            'SearchString'           => 'Dimmer'
        ],
    ],
    'TRADFRI transformer 10W' => [
        'Power' => [
            'Name'                   => 'State',
            'VariableProfile'        => '~Switch',
            'VariableType'           => VARIABLETYPE_BOOLEAN,
            'Action'                 => 'tasmota',
            'ActionCommand'          => 'Power',
            'SearchString'           => 'Power'
        ],
        'Dimmer' => [
            'Name'                   => 'Brightness',
            'VariableProfile'        => '~Intensity.255',
            'VariableType'           => VARIABLETYPE_INTEGER,
            'Action'                 => 'tasmota',
            'ActionCommand'          => 'Dimmer',
            'SearchString'           => 'Dimmer'
        ],
    ],
    'TRADFRI Driver 10W' => [
        'Power' => [
            'Name'                   => 'State',
            'VariableProfile'        => '~Switch',
            'VariableType'           => VARIABLETYPE_BOOLEAN,
            'Action'                 => 'tasmota',
            'ActionCommand'          => 'Power',
            'SearchString'           => 'Power'
        ],
        'Dimmer' => [
            'Name'                   => 'Brightness',
            'VariableProfile'        => '~Intensity.255',
            'VariableType'           => VARIABLETYPE_INTEGER,
            'Action'                 => 'tasmota',
            'ActionCommand'          => 'Dimmer',
            'SearchString'           => 'Dimmer'
        ],
    ],
    'TRADFRI bulb E14 WS 470lm'=> [
        'Power' => [
            'Name'                   => 'State',
            'VariableProfile'        => '~Switch',
            'VariableType'           => VARIABLETYPE_BOOLEAN,
            'Action'                 => 'tasmota',
            'ActionCommand'          => 'Power',
            'SearchString'           => 'Power'
        ],
        'Dimmer' => [
            'Name'                   => 'Brightness',
            'VariableProfile'        => '~Intensity.255',
            'VariableType'           => VARIABLETYPE_INTEGER,
            'Action'                 => 'tasmota',
            'ActionCommand'          => 'Dimmer',
            'SearchString'           => 'Dimmer'
        ],
        'CT' => [
            'Name'                   => 'CT',
            'VariableProfile'        => 'T2M.ColorTemperature',
            'VariableType'           => VARIABLETYPE_INTEGER,
            'Action'                 => 'tasmota',
            'ActionCommand'          => 'CT',
            'SearchString'           => 'CT'
        ],
    ],
    'SYMFONISK Sound Controller' => [
        'Power' => [
            'Name'                   => 'State',
            'VariableProfile'        => 'T2M.TogglePower',
            'VariableType'           => VARIABLETYPE_INTEGER,
            'Action'                 => false,
            'ActionCommand'          => '',
            'SearchString'           => 'Power'
        ],
        'DimmerMove' => [
            'Name'                   => 'DimmerMove',
            'VariableProfile'        => 'T2M.IKEA.DimmerMove',
            'VariableType'           => VARIABLETYPE_INTEGER,
            'Action'                 => false,
            'ActionCommand'          => '',
            'SearchString'           => 'DimmerMove'
        ],
        'DimmerStop' => [
            'Name'                   => 'DimmerStop',
            'VariableProfile'        => '',
            'VariableType'           => VARIABLETYPE_BOOLEAN,
            'Action'                 => '',
            'ActionCommand'          => '',
            'SearchString'           => 'DimmerStop'
        ],
    ],
    'TRADFRI bulb E27 CWS opal 600lm' => [
        'Power' => [
            'Name'                   => 'State',
            'VariableProfile'        => '~Switch',
            'VariableType'           => VARIABLETYPE_BOOLEAN,
            'Action'                 => 'tasmota',
            'ActionCommand'          => 'Power',
            'SearchString'           => 'Power'
        ],
        'Dimmer' => [
            'Name'                   => 'Brightness',
            'VariableProfile'        => 'T2M.Intensity.254',
            'VariableType'           => VARIABLETYPE_INTEGER,
            'Action'                 => 'tasmota',
            'ActionCommand'          => 'Dimmer',
            'SearchString'           => 'Dimmer'
        ],
        'CT' => [
            'Name'                   => 'Color Temperature',
            'VariableProfile'        => 'T2M.ColorTemperature',
            'VariableType'           => VARIABLETYPE_INTEGER,
            'Action'                 => 'tasmota',
            'ActionCommand'          => 'CT',
            'SearchString'           => 'CT'
        ],
        'Color' => [
            'Name'                   => 'Color',
            'VariableProfile'        => 'HexColor',
            'VariableType'           => VARIABLETYPE_INTEGER,
            'Action'                 => 'tasmota',
            'ActionCommand'          => 'Color',
            'SearchString'           => 'X'
        ],
    ],
    'TRADFRI bulb E27 WW 806lm'=> [
        'Power' => [
            'Name'                   => 'State',
            'VariableProfile'        => '~Switch',
            'VariableType'           => VARIABLETYPE_BOOLEAN,
            'Action'                 => 'tasmota',
            'ActionCommand'          => 'Power',
            'SearchString'           => 'Power'
        ],
        'Dimmer' => [
            'Name'                   => 'Brightness',
            'VariableProfile'        => '~Intensity.255',
            'VariableType'           => VARIABLETYPE_INTEGER,
            'Action'                 => 'tasmota',
            'ActionCommand'          => 'Dimmer',
            'SearchString'           => 'Dimmer'
        ],
    ],
    'TRADFRI control outlet' => [
        'Power' => [
            'Name'            => 'State',
            'VariableProfile' => '~Switch',
            'VariableType'    => VARIABLETYPE_BOOLEAN,
            'Action'          => 'tasmota',
            'ActionCommand'   => 'Power',
            'SearchString'    => 'Power'
        ]
    ],
    'TRADFRI SHORTCUT Button' => [
        'Power' => [
            'Name'            => 'State',
            'VariableProfile' => '~Switch',
            'VariableType'    => VARIABLETYPE_BOOLEAN,
            'Action'          => 'tasmota',
            'ActionCommand'   => 'Power',
            'SearchString'    => 'Power'
        ]
    ],
    'TRADFRI bulb GU10 W 400lm'=> [
        'Power' => [
            'Name'                   => 'State',
            'VariableProfile'        => '~Switch',
            'VariableType'           => VARIABLETYPE_BOOLEAN,
            'Action'                 => 'tasmota',
            'ActionCommand'          => 'Power',
            'SearchString'           => 'Power'
        ],
        'Dimmer' => [
            'Name'                   => 'Brightness',
            'VariableProfile'        => '~Intensity.255',
            'VariableType'           => VARIABLETYPE_INTEGER,
            'Action'                 => 'tasmota',
            'ActionCommand'          => 'Dimmer',
            'SearchString'           => 'Dimmer'
        ],
    ],
    'TRADFRI bulb E27 W opal 1000lm' => [
        'Power' => [
            'Name'                   => 'State',
            'VariableProfile'        => '~Switch',
            'VariableType'           => VARIABLETYPE_BOOLEAN,
            'Action'                 => 'tasmota',
            'ActionCommand'          => 'Power',
            'SearchString'           => 'Power'
        ],
        'Dimmer' => [
            'Name'                   => 'Brightness',
            'VariableProfile'        => '~Intensity.255',
            'VariableType'           => VARIABLETYPE_INTEGER,
            'Action'                 => 'tasmota',
            'ActionCommand'          => 'Dimmer',
            'SearchString'           => 'Dimmer'
        ],
    ],
];