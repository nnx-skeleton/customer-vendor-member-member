<?php

namespace CustomerVendorMember\Member;

$config = [
    Module::CONFIG_KEY => [
        'objectManagerName' => 'doctrine.entitymanager.nnx_skeleton_member_member'
    ],
];

return array_merge_recursive(
    include __DIR__ . '/doctrine.config.php',
    $config
);
