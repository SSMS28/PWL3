<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerM5EDpmb\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerM5EDpmb/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerM5EDpmb.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerM5EDpmb\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerM5EDpmb\App_KernelDevDebugContainer([
    'container.build_hash' => 'M5EDpmb',
    'container.build_id' => '6d7fca2d',
    'container.build_time' => 1673260362,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerM5EDpmb');
