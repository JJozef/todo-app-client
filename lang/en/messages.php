<?php
date_default_timezone_set('America/Santiago');
$days = [
    'Sunday' => 'Sunday',
    'Monday' => 'Monday',
    'Tuesday' => 'Tuesday',
    'Wednesday' => 'Wednesday',
    'Thursday' => 'Thursday',
    'Friday' => 'Friday',
    'Saturday' => 'Saturday'
];


$months = [
    'Jan' => 'Jan',
    'Feb' => 'Feb',
    'Mar' => 'Mar',
    'Apr' => 'Apr',
    'May' => 'May',
    'Jun' => 'Jun',
    'Jul' => 'Jul',
    'Aug' => 'Aug',
    'Sep' => 'Sep',
    'Oct' => 'Oct',
    'Nov' => 'Nov',
    'Dec' => 'Dec'
];

return [
    'app-welcome' => 'Good morning',
    'app-its' => 'Its',
    'app-day' => $days[date('l')],
    'app-date' => $months[date('M')] . date(' d') 
];