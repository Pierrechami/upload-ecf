<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerLwiU5wD\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerLwiU5wD/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerLwiU5wD.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerLwiU5wD\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerLwiU5wD\App_KernelDevDebugContainer([
    'container.build_hash' => 'LwiU5wD',
    'container.build_id' => '57f1a081',
    'container.build_time' => 1646073122,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerLwiU5wD');