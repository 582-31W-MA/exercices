<?php

$sections = [
    [
        "nom" => "Omakase",
        "description" => "Menu dégustation au choix du Chef
		(Chaque changement ou demande particulière apportera un supplément)",
        "sous-section" => [
            [
                "nom" => "Menu pour une personne",
                "plats" => [
                    [
                        "nom" => "Omakase 1",
                        "prix" => 33,
                        "favoris" => false,
                        "quantité" => "1 personne",
                        "ingrédients" => [
                            "4 mcx sashimi nouveau style",
                            "4 mcx nigiri",
                            "10 mcx maki"
                        ]
                    ]
                ]
            ],
            [
                "nom" => "Menu à partager",
                "description" => "Un minimum de deux personnes doivent choisir la même option",
                "plats" => [
                    [
                        "nom" => "Option 1",
                        "prix" => 30,
                        "favoris" => false,
                        "quantité" => "11 mcx / personne"
                    ]
                ]
            ]
        ]
    ],
    [
        "nom" => "Spécialités",
        "plats" => [
            [
                "nom" => "L’inattendue - la fameuse pizza sushi",
                "prix" => 24,
                "favoris" => false,
                "choix" => "Choix de saumon, crevette, thon (+2$) ou homard (+3$)"
            ]
        ]
    ]
];
