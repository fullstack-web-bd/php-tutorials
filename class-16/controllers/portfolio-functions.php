<?php

/**
 * Get portoflio lists.
 *
 * @todo Get this from DB
 *
 * @return array
 */
function get_portfolios()
{
    return [
        [
            'title' => 'Simple Ecommerce Application',
            'image' => 'images/portfolio-1.webp',
            'tags' => ['Laravel', 'ReactJS']
        ],
        [
            'title' => 'ERP Application',
            'image' => 'images/portfolio-2.webp',
            'tags' => ['Laravel']
        ],
        [
            'title' => 'CRM Application',
            'image' => 'images/portfolio-3.jpg',
            'tags' => ['CRM', 'Laravel', 'React Native']
        ],
        [
            'title' => 'Cambridge Dictionary Project',
            'image' => 'https://live-language.com/wp-content/uploads/2021/02/Dictionary.png',
            'tags' => ['Laravel', 'React Native']
        ]
    ];
}
