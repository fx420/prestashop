<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDngiew7\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDngiew7/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerDngiew7.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerDngiew7\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerDngiew7\appProdProjectContainer([
    'container.build_hash' => 'Dngiew7',
    'container.build_id' => '26178161',
    'container.build_time' => 1693295435,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDngiew7');
