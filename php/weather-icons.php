<?php
    $weather_icons = (object) [
        'wind'              =>  "weather-icons/wind.svg",
        'tornado'           =>  "weather-icons/tornado.svg",
        'thunderstorms'     =>  "weather-icons/thunderstorms.svg",
        'snow'              =>  "weather-icons/snow.svg",
        'rain'              =>  "weather-icons/rain.svg",
        'partly_cloudy' => (object) [
            'day'   => "weather-icons/partly-cloudy-day.svg",
            'night' => "weather-icons/partly-cloudy-night.svg"
        ],
        'mist'              =>  "weather-icons/mist.svg",
        'cloudy'            =>  "weather-icons/cloudy.svg",
        'clear' => (object) [
            'day'   => "weather-icons/clear-day.svg",
            'night' => "weather-icons/clear-night.svg"
        ]
    ];

    function get_icon_html($icon, $str_desc) {
        return '<img src="' . $icon . '" alt="' . $str_desc . '">';
    }
?>