<?php
    class components {

        public function header($location, $date) {
            return '<div class="location-and-date">
                        <h1 class="location-and-date__location">' . $location . '</h1>
                        <div>' . $date . '</div>
                    </div>';
        }

        public function current_stat_col($stats) {
            return '<div>
                        <div class="current-stats__value">' . $stats[0]['value'] . '</div>
                        <div class="current-stats__label">' . $stats[0]['label'] . '</div>
                        <div class="current-stats__value">' . $stats[1]['value'] . '</div>
                        <div class="current-stats__label">' . $stats[1]['label'] . '</div>
                    </div>';
        }

        public function current($temp, $weather, $weather_icon, $stats) {
            $html = '<div class="current-temperature">
                        <div class="current-temperature__icon-container">
                            <img src="' . $weather_icon . '" class="current-temperature__icon" alt="' . $weather . '">
                        </div>
                        <div class="current-temperature__content-container">
                            <div class="current-temperature__value">' . $temp . '</div>
                            <div class="current-temperature__summary">' . $weather . '</div>
                        </div>
                    </div>';

            $html .= '<div class="current-stats">';
            
            for($i = 0; $i < count($stats); $i += 2) {
                $html .= $this->current_stat_col([
                    $stats[$i],
                    $stats[$i + 1]
                ]);
            }

            return $html . '</div>';
        }

        public function hour_item($hour) {
            return '<div class="weather-by-hour__item">
                        <div class="weather-by-hour__hour">' . $hour['time'] . '</div>
                        <img src="' . $hour['weather_icon'] . '" alt="' . $hour['weather'] . '">
                        <div>' . $hour['temp'] . '</div>
                    </div>';
        }

        public function hour($hours) {
            $html = '<div class="weather-by-hour__container">';

            foreach ($hours as $hour) {
                $html .= $this->hour_item($hour);
            }
            
            return $html . '</div>';
        }

        public function day_item($stats) {
            $html = '<div class="next-days__row">';

            foreach($stats as $stat) {
                $html .= '<div class="next-days__item">
                            ' . $stat['value'] . '
                            <div class="next-days__label">' . $stat['label'] . '</div>
                        </div>';
            }
                        
    
            return $html . '</div>';
        }

        public function days($days) {
            $html = '<div class="next-days__container">';

            foreach ($days as $day) {
                $html .= $this->day_item($day);
            }
            
            return $html . '</div>';
        }

    }
?>