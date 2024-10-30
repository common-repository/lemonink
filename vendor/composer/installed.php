<?php return array(
    'root' => array(
        'pretty_version' => 'dev-master',
        'version' => 'dev-master',
        'type' => 'library',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'reference' => '604b803b0bce11452377f2e46df4e4e872267c04',
        'name' => 'lemonink/lemonink-woocommerce',
        'dev' => true,
    ),
    'versions' => array(
        'composer/installers' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'type' => 'composer-plugin',
            'install_path' => __DIR__ . '/./installers',
            'aliases' => array(
                0 => '2.x-dev',
            ),
            'reference' => 'a241e78aaeb09781f5f5b92ac01ffd13ab43e5e8',
            'dev_requirement' => false,
        ),
        'lemonink/lemonink-php' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'type' => 'library',
            'install_path' => __DIR__ . '/../lemonink/lemonink-php',
            'aliases' => array(
                0 => '9999999-dev',
            ),
            'reference' => '1dbd691bde67dac87af13ac34772104d785b31b7',
            'dev_requirement' => false,
        ),
        'lemonink/lemonink-woocommerce' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'type' => 'library',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'reference' => '604b803b0bce11452377f2e46df4e4e872267c04',
            'dev_requirement' => false,
        ),
        'wpackagist-plugin/woocommerce' => array(
            'pretty_version' => 'dev-trunk',
            'version' => 'dev-trunk',
            'type' => 'wordpress-plugin',
            'install_path' => __DIR__ . '/../../wp-content/plugins/woocommerce',
            'aliases' => array(),
            'reference' => 'trunk',
            'dev_requirement' => false,
        ),
    ),
);
