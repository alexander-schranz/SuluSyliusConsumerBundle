<?php

declare(strict_types=1);

/*
 * This file is part of Sulu.
 *
 * (c) Sulu GmbH
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Sulu\Bundle\SyliusConsumerBundle\Tests;

final class MockSyliusData
{
    public const TAXON_MINIMUM = [
        'name' => 'Category',
        'id' => 1,
        'code' => 'MENU_CATEGORY',
        'children' => [],
        'left' => 1,
        'right' => 22,
        'level' => 0,
        'position' => 0,
        'translations' => [
            'en_US' => [
                'locale' => 'en_US',
                'id' => 2,
            ],
        ],
        'images' => [],
    ];

    public const TAXON = [
        'name' => 'Category',
        'id' => 1,
        'code' => 'MENU_CATEGORY',
        'children' => [
            [
                'name' => 'T-shirts',
                'id' => 2,
                'code' => 't_shirts',
                'children' => [
                    [
                        'name' => 'Men',
                        'id' => 3,
                        'code' => 'mens_t_shirts',
                        'children' => [],
                        'left' => 3,
                        'right' => 4,
                        'level' => 2,
                        'parent' => [
                            'name' => 'T-shirts',
                            'id' => 2,
                            'code' => 't_shirts',
                            'children' => [],
                            'left' => 2,
                            'right' => 7,
                            'level' => 1,
                            'parent' => [
                                'name' => 'Category',
                                'id' => 1,
                                'code' => 'MENU_CATEGORY',
                                'left' => 1,
                                'right' => 22,
                                'level' => 0,
                                'position' => 0,
                                'translations' => [
                                    'en_US' => [
                                        'locale' => 'en_US',
                                        'id' => 2,
                                        'name' => 'Category',
                                        'slug' => 'category',
                                        'description' => 'Soluta deleniti dolore tenetur. Odio voluptatibus excepturi quas autem totam odio dolorum. Sed aut at cum quia recusandae. Quos eos iusto sed sed occaecati.',
                                    ],
                                ],
                                'images' => [],
                                'customData' => [
                                    'test' => 1,
                                ],
                            ],
                            'position' => 0,
                            'translations' => [
                                'en_US' => [
                                    'locale' => 'en_US',
                                    'id' => 10,
                                    'name' => 'T-shirts',
                                    'slug' => 't-shirts',
                                    'description' => 'Ea non autem odio. Quasi reprehenderit molestias ab voluptatem impedit eius voluptatem velit. Deserunt impedit asperiores consequuntur error itaque molestias. Modi quia assumenda et est consequuntur commodi.',
                                ],
                            ],
                            'images' => [],
                        ],
                        'position' => 0,
                        'translations' => [
                            'en_US' => [
                                'locale' => 'en_US',
                                'id' => 18,
                                'name' => 'necessitatibus optio labore',
                                'slug' => 't-shirts/necessitatibus-optio-labore',
                                'description' => 'Illo nihil autem id eum. Quisquam nostrum reiciendis et ut deserunt. Facere molestias saepe facere vel. Expedita odio et cum quis alias.',
                            ],
                        ],
                        'images' => [],
                    ],
                ],
                'left' => 2,
                'right' => 7,
                'level' => 1,
                'parent' => [
                    'name' => 'Category',
                    'id' => 1,
                    'code' => 'MENU_CATEGORY',
                    'left' => 1,
                    'right' => 22,
                    'level' => 0,
                    'position' => 0,
                    'translations' => [
                        'en_US' => [
                            'locale' => 'en_US',
                            'id' => 2,
                            'name' => 'Category',
                            'slug' => 'category',
                            'description' => 'Soluta deleniti dolore tenetur. Odio voluptatibus excepturi quas autem totam odio dolorum. Sed aut at cum quia recusandae. Quos eos iusto sed sed occaecati.',
                        ],
                    ],
                    'images' => [],
                    'customData' => [
                        'test' => 1,
                    ],
                ],
                'position' => 0,
                'translations' => [
                    'en_US' => [
                        'locale' => 'en_US',
                        'id' => 10,
                        'name' => 'T-shirts',
                        'slug' => 't-shirts',
                        'description' => 'Ea non autem odio. Quasi reprehenderit molestias ab voluptatem impedit eius voluptatem velit. Deserunt impedit asperiores consequuntur error itaque molestias. Modi quia assumenda et est consequuntur commodi.',
                    ],
                ],
                'images' => [],
            ],
        ],
        'left' => 1,
        'right' => 22,
        'level' => 0,
        'position' => 0,
        'translations' => [
            'en_US' => [
                'locale' => 'en_US',
                'id' => 2,
                'name' => 'Category',
                'slug' => 'category',
                'description' => 'Soluta deleniti dolore tenetur. Odio voluptatibus excepturi quas autem totam odio dolorum. Sed aut at cum quia recusandae. Quos eos iusto sed sed occaecati.',
            ],
        ],
        'images' => [],
        'customData' => [
            'test' => 1,
        ],
    ];

    public const PRODUCT = [
        'id' => 1,
        'code' => 'Everyday_white_basic_T_Shirt',
        'enabled' => true,
        'mainTaxonId' => 4,
        'mainTaxonCode' => 't_shirts',
        'isSimple' => true,
        'productTaxons' => [
            [
                'id' => 1,
                'taxonId' => 2,
                'taxonCode' => 'caps',
                'position' => 0,
                'customData' => [],
            ],
            [
                'id' => 2,
                'taxonId' => 4,
                'taxonCode' => 't_shirts',
                'position' => 1,
                'customData' => [],
            ],
        ],
        'translations' => [
            [
                'locale' => 'en_US',
                'name' => 'Everyday white basic T-Shirt',
                'slug' => 'everyday-white-basic-t-shirt',
                'description' => 'Quia nihil dignissimos expedita quia neque odio qui sunt. Nemo animi maxime rem qui quaerat eos. Eum ipsam aut aliquid cum et in sint.

Est cumque illum saepe aliquam est. Ullam impedit ipsa aut nostrum est sunt nesciunt. Ut sint saepe ullam sed dolorum atque eos accusamus.

Expedita voluptatum magnam est vitae voluptas eos. Maiores voluptatibus quos enim expedita voluptatibus aut. Non ducimus nesciunt voluptas deleniti.',
                'shortDescription' => 'Sequi doloribus minus quis quibusdam. Architecto optio sit inventore quibusdam magni voluptatem. Non sed ex mollitia nisi nemo velit quidem.',
                'metaKeywords' => 'Sequi,Architecto',
                'metaDescription' => 'Sequi doloribus minus quis quibusdam.',
                'customData' => [],
            ],
        ],
        'images' => [
            [
                'id' => 1,
                'type' => 'main',
                'path' => '23/d6/bab23ff05421d888c688112110c5.jpg',
                'filename' => 'Test123',
                'customData' => [
                    'test' => 1,
                ],
            ],
        ],
        'customData' => [
            'test' => 1,
        ],
        'variants' => [
            [
                'id' => 1,
                'code' => 'Everyday_white_basic_T_Shirt-variant-0',
                'position' => 0,
                'translations' => [
                    'en_US' => [
                        'locale' => 'en_US',
                        'id' => 1,
                        'name' => 'S',
                    ],
                ],
                'version' => 1,
                'onHold' => 0,
                'onHand' => 7,
            ],
        ],
        'attributeValues' => [
            [
                'code' => 'material',
                'value' => ['123-123-123'],
                'attribute' => [
                    'id' => 1,
                    'code' => 'material',
                    'type' => 'select',
                    'translations' => [
                        [
                            'locale' => 'de',
                            'name' => 'Material',
                            'customData' => ['test' => 1],
                        ],
                    ],
                    'configuration' => [
                        'choices' => [
                            '123-123-123' => [
                                'de' => 'Carbon',
                            ],
                        ],
                        'multiple' => false,
                    ],
                    'customData' => ['test' => 1],
                ],
                'customData' => ['test' => 1],
            ],
        ],
    ];

    public const PRODUCT_MINIMUM = [
        'id' => 1,
        'code' => 'Everyday_white_basic_T_Shirt',
        'enabled' => true,
        'mainTaxonId' => 4,
        'mainTaxonCode' => 't_shirts',
        'isSimple' => true,
        'productTaxons' => [],
        'translations' => [
            [
                'locale' => 'en_US',
            ],
        ],
        'images' => [],
        'customData' => [],
        'variants' => [],
    ];

    public const PRODUCT_VARIANT = [
        'id' => 1,
        'code' => 'Everyday_white_basic_T_Shirt-variant-0',
        'position' => 0,
        'translations' => [
            'en_US' => [
                'locale' => 'en_US',
                'id' => 1,
                'name' => 'S',
            ],
        ],
        'version' => 1,
        'onHold' => 0,
        'onHand' => 7,
        'customData' => [
            'test' => 1,
        ],
    ];

    public const PRODUCT_VARIANT_MINIMUM = [
        'id' => 1,
        'code' => 'Everyday_white_basic_T_Shirt-variant-0',
        'position' => 0,
        'translations' => [
            'en_US' => [
                'locale' => 'en_US',
                'id' => 1,
            ],
        ],
        'version' => 1,
        'onHold' => 0,
        'onHand' => 7,
        'customData' => [],
    ];
}
