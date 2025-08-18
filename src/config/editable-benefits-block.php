<?php

use GIS\EditableBenefitsBlock\Templates\BenefitRecord;

return [
    "availableTypes" => [
        "benefits" => [
            "title" => "Преимущества",
            "admin" => "ebb-benefits",
            "render" => "ebb::types.benefits",
        ],
    ],
    "perCol" => 3, // 3,4
    // Admin
    "customBenefitsComponent" => null,
    // Templates
    "templates" => [
        "benefit-record" => BenefitRecord::class,
    ],
];
