<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerF2yUKLa\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerF2yUKLa/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerF2yUKLa.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerF2yUKLa\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerF2yUKLa\App_KernelProdContainer([
    'container.build_hash' => 'F2yUKLa',
    'container.build_id' => 'aacb15b1',
    'container.build_time' => 1646688502,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerF2yUKLa');