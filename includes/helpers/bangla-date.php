<?php
function bangla_publish_date($timestamp) {

    $bn_months = [
        'January'=>'জানুয়ারি','February'=>'ফেব্রুয়ারি','March'=>'মার্চ',
        'April'=>'এপ্রিল','May'=>'মে','June'=>'জুন',
        'July'=>'জুলাই','August'=>'আগস্ট','September'=>'সেপ্টেম্বর',
        'October'=>'অক্টোবর','November'=>'নভেম্বর','December'=>'ডিসেম্বর'
    ];

    $bn_days = [
        'Saturday'=>'শনিবার','Sunday'=>'রবিবার','Monday'=>'সোমবার',
        'Tuesday'=>'মঙ্গলবার','Wednesday'=>'বুধবার',
        'Thursday'=>'বৃহস্পতিবার','Friday'=>'শুক্রবার'
    ];

    // ইংরেজি সংখ্যা → বাংলা সংখ্যা
    $en = ['0','1','2','3','4','5','6','7','8','9'];
    $bn = ['০','১','২','৩','৪','৫','৬','৭','৮','৯'];

    $date = date('l, j F Y', $timestamp);

    // দিন ও মাস বাংলা
    $date = str_replace(array_keys($bn_days), array_values($bn_days), $date);
    $date = str_replace(array_keys($bn_months), array_values($bn_months), $date);

    // সংখ্যা বাংলা
    $date = str_replace($en, $bn, $date);

    return $date;
}

function convert_to_bangla($number){
    $eng = [
        '0',
        '1',
        '2',
        '3',
        '4',
        '5',
        '6',
        '7',
        '8',
        '9'
    ];

    $bng = [
        '০',
        '১',
        '২',
        '৩',
        '৪',
        '৫',
        '৬',
        '৭',
        '৮',
        '৯'
    ];

    return str_replace($eng, $bng, $number);
}