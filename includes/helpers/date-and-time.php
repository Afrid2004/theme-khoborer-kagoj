<?php
function simple_bangla_date() {

    // English → Bangla numbers
    function bn_number($num) {
        return str_replace(
            ['0','1','2','3','4','5','6','7','8','9'],
            ['০','১','২','৩','৪','৫','৬','৭','৮','৯'],
            $num
        );
    }

    $bn_days = [
        'Sunday'=>'রবিবার','Monday'=>'সোমবার','Tuesday'=>'মঙ্গলবার',
        'Wednesday'=>'বুধবার','Thursday'=>'বৃহস্পতিবার',
        'Friday'=>'শুক্রবার','Saturday'=>'শনিবার'
    ];

    // Bangla months (বাংলা সাল)
    $bn_months = [
        '01'=>'পৌষ','02'=>'মাঘ','03'=>'ফাল্গুন','04'=>'চৈত্র',
        '05'=>'বৈশাখ','06'=>'জ্যৈষ্ঠ','07'=>'আষাঢ়','08'=>'শ্রাবণ',
        '09'=>'ভাদ্র','10'=>'আশ্বিন','11'=>'কার্তিক','12'=>'অগ্রহায়ণ'
    ];

    // English months → Bangla text
    $en_months_bn = [
        'January'=>'জানুয়ারি','February'=>'ফেব্রুয়ারি','March'=>'মার্চ',
        'April'=>'এপ্রিল','May'=>'মে','June'=>'জুন','July'=>'জুলাই',
        'August'=>'আগস্ট','September'=>'সেপ্টেম্বর',
        'October'=>'অক্টোবর','November'=>'নভেম্বর','December'=>'ডিসেম্বর'
    ];

    $day        = date('d');
    $month      = date('m');
    $year_bn    = date('Y') - 593;

    $en_day     = date('d');
    $en_month   = $en_months_bn[date('F')];
    $en_year    = date('Y');

    return
        bn_number($day).' '.$bn_months[$month].' '.bn_number($year_bn)
        .', '.$bn_days[date('l')]
        .', '.bn_number($en_day).' '.$en_month.' '.bn_number($en_year);
}