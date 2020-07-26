<?php
    $weather_icons = (object) [
        'wind'              =>  "icons/wind.svg",
        'tornado'           =>  "icons/tornado.svg",
        'thunderstorms'     =>  "icons/thunderstorms.svg",
        'snow'              =>  "icons/snow.svg",
        'rain'              =>  "icons/rain.svg",
        'partly_cloudy' => (object) [
            'day'   => "icons/partly-cloudy-day.svg",
            'night' => "icons/partly-cloudy-night.svg"
        ],
        'mist'              =>  "icons/mist.svg",
        'cloudy'            =>  "icons/cloudy.svg",
        'clear' => (object) [
            'day'   => "clear-day.svg",
            'night' => "clear-night.svg"
        ]
    ];

    function get_icon_html($icon, $str_desc) {
        return '<img src="' . $icon . '" alt="' . $str_desc . '">';
    }
?>