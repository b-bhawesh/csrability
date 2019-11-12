<?php
function get_user_type($type)
{
    $types = array(
        '1'=>'Super Admin',
        '2'=>'Administrator',
        '3'=>'Sub Admin',
        '4'=>'user',
        '5'=>'Member'
    );
    
    return $types[$type];
}

function get_organisations()
{
    $organisations = array(
        '1'=>'NGO',
        '2'=>'Corporate',
        '3'=>'Corporate Foundation',
        '4'=>'Liasion/Branch Office',
        '5'=>'Other'
    );
    
    return $organisations;
}

function get_sectors()
{
    return array(
        '1'=>'Administration, IT Management, Office Administration',
        '2'=>'Human Resources',
        '3'=>'Accounting/Finance',
        '4'=>'Agriculture, Livelihoods, Microfinance, Rural, Urban',
        '5'=>'Capacity Building, Training, Advocacy',
        '6'=>'Communications, IT, Media, Knowledge Management',
        '7'=>'Director, CEO, COP, President',
        '8'=>'Disaster, Emergency Relief',
        '9'=>'Environment, Climate, Energy, Water, Sanitation',
        '10'=>'Fundraising, Business Development, Grants Writer',
        '11'=>'Government/Governance, Reforms, Corruption',
        '12'=>'Health, Doctors, Nurses, HIV/AIDS, Nutrition',
        '13'=>'Human Rights, Law, Migration, Conflicts, Justice',
        '14'=>'Infrastructure, Technology, Engineering, Science',
        '15'=>'Monitoring, Evaluation, Policy, Research',
        '16'=>'Private Sector, Corporate Social Responsibility',
        '17'=>'Social, Gender, Education, Youth, Child',
        '18'=>'Trade, Finance, Economics, Cooperation, Global',
    );
}

function get_organisation_type($org)
{
    $organisations = array(
        '1'=>'NGO',
        '2'=>'Corporate',
        '3'=>'Corporate Foundation',
        '4'=>'Liasion/Branch Office',
        '5'=>'Other'
    );
    
    return $organisations[$org];
}

function reset_keys($array) {
    foreach ($array as $k => $val) {
        if (is_array($val))
            $array[$k] = reset_keys($val); //recurse
    }
    return array_values($array);
}