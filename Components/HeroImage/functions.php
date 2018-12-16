<?php

namespace Flynt\Components\HeroImage;

use Flynt\Utils\Component;
use Flynt;

add_filter('Flynt/addComponentData?name=HeroImage', function ($data) {
    Component::enqueueAssets('HeroImage', [
        [
            'name' => 'lazysizes',
            'type' => 'script',
            'path' => 'vendor/lazysizes.js'
        ],
        [
            'name' => 'lazysizes-respimg',
            'type' => 'script',
            'path' => 'vendor/lazysizes-respimg.js'
        ],
        [
            'name' => 'lazysizes-object-fit',
            'type' => 'script',
            'path' => 'vendor/lazysizes-object-fit.js'
        ],
        [
            'name' => 'lazysizes-parent-fit',
            'type' => 'script',
            'path' => 'vendor/lazysizes-parent-fit.js'
        ],
    ]);

    return $data;
});

Flynt\registerFields('HeroImage', [
    'layout' => [
        'name' => 'heroImage',
        'label' => 'Hero: Image',
        'sub_fields' => [
            [
                'name' => 'contentTab',
                'label' => 'Content',
                'type' => 'tab'
            ],
            [
                'label' => 'Boxed',
                'name' => 'boxed',
                'type' => 'true_false',
                'default_value' => 0,
                'ui' => 1
            ],
            [
                'label' => 'Bild links',
                'name' => 'imagePosition',
                'type' => 'true_false',
                'default_value' => 0,
                'ui' => 1
            ],
            [
                'label' => 'Background Color',
                'name' => 'backgroundColor',
                'type' => 'text'
            ],
            [
                'label' => 'Desktop Image',
                'name' => 'image',
                'type' => 'image',
                'return_format' => 'array',
                'preview_size' => 'thumbnail',
                'library' => 'all',
                'mime_types' => 'jpg,jpeg',
                'required' => 1,
                'instructions' => 'Recommended resolution greater than 2000 x 1125 px.'
            ],
            [
                'label' => 'Mobile Image',
                'name' => 'mobileImage',
                'type' => 'image',
                'return_format' => 'array',
                'preview_size' => 'thumbnail',
                'library' => 'all',
                'mime_types' => 'jpg,jpeg',
                'required' => 1,
                'instructions' => 'Recommended resolution greater than 380 x 570 px.'
            ],
            [
                'label' => 'Dark Overlay',
                'name' => 'overlay',
                'type' => 'true_false',
                'default_value' => 0,
                'ui' => 1
            ],
            [
                'label' => 'White Font Color',
                'name' => 'fontColor',
                'type' => 'true_false',
                'default_value' => 0,
                'ui' => 1
            ],
            [
                'name' => 'contentHtml',
                'label' => 'Content',
                'type' => 'wysiwyg',
                'tabs' => 'visual,text',
                'toolbar' => 'full',
                'media_upload' => 0,
                'delay' => 1,
                'wrapper' => [
                    'class' => 'autosize',
                ],
                'instructions' => 'The content that sits over the image. Character Recommendations: Title : 30-100, Content: 80-250.'
            ]
        ]
    ]
]);
