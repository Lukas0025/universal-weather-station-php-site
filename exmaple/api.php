<?php
    include 'php/weather-icons.php';

    class example_api {

        public function lastUpdateStr() {
            return "10:12 29.10.2020";
        }

        public function current() {
            return [
                'weather'      => 'clear',
                'weather_icon' => $GLOBALS['weather_icons']->clear->day,
                'temp'         => '10&deg;',
                'stats' => [
                    [
                        'label' => "low",
                        'value' => '0&deg;'
                    ],

                    [
                        'label' => 'high',
                        'value' => '11&deg;'
                    ],

                    [
                        'label' => 'wind',
                        'value' => '7.5kph'
                    ],

                    [
                        'label' => 'rain',
                        'value' => '0mm'
                    ],

                    [
                        'label' => 'direction',
                        'value' => 'NW'
                    ],

                    [
                        'label' => 'humidity',
                        'value' => '80%'
                    ],

                ]
            ];
        }

        public function hours() {
            return [
                [
                    'time'         => "+1h",
                    'weather'      => "clear",
                    'weather_icon' => $GLOBALS['weather_icons']->clear->day,
                    'temp'         => '10&deg;'
                ],

                [
                    'time'         => "+2h",
                    'weather'      => "clear",
                    'weather_icon' => $GLOBALS['weather_icons']->clear->day,
                    'temp'         => '10&deg;'
                ],

                [
                    'time'         => "+3h",
                    'weather'      => "clear",
                    'weather_icon' => $GLOBALS['weather_icons']->clear->day,
                    'temp'         => '10&deg;'
                ],

                [
                    'time'         => "+4h",
                    'weather'      => "clear",
                    'weather_icon' => $GLOBALS['weather_icons']->clear->day,
                    'temp'         => '10&deg;'
                ],

                [
                    'time'         => "+5h",
                    'weather'      => "clear",
                    'weather_icon' => $GLOBALS['weather_icons']->clear->day,
                    'temp'         => '10&deg;'
                ],

                [
                    'time'         => "+6h",
                    'weather'      => "clear",
                    'weather_icon' => $GLOBALS['weather_icons']->clear->day,
                    'temp'         => '10&deg;'
                ]
            ];
        }

        public function days() {
            return [
                [
                    [
                        'label'  => '30/10',
                        'value'  => 'MO'
                    ],

                    [
                        'label'  => '',
                        'value'  => get_icon_html($GLOBALS['weather_icons']->partly_cloudy->day, 'partly cloudy')
                    ],

                    [
                        'label'  => 'low',
                        'value'  => '10&deg;'
                    ],

                    [
                        'label'  => 'high',
                        'value'  => '20&deg;'
                    ],

                    [
                        'label'  => 'wind',
                        'value'  => '10kph'
                    ],

                    [
                        'label'  => 'rain',
                        'value'  => '10%'
                    ]
                ],

                [
                    [
                        'label'  => '30/10',
                        'value'  => 'MO'
                    ],

                    [
                        'label'  => '',
                        'value'  => get_icon_html($GLOBALS['weather_icons']->partly_cloudy->day, 'partly cloudy')
                    ],

                    [
                        'label'  => 'low',
                        'value'  => '10&deg;'
                    ],

                    [
                        'label'  => 'high',
                        'value'  => '20&deg;'
                    ],

                    [
                        'label'  => 'wind',
                        'value'  => '10kph'
                    ],

                    [
                        'label'  => 'rain',
                        'value'  => '10%'
                    ]
                ]
            ];
        }

    }
?>