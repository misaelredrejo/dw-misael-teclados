<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerGQcnMQr\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerGQcnMQr/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerGQcnMQr.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerGQcnMQr\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerGQcnMQr\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'GQcnMQr',
    'container.build_id' => '530c863a',
    'container.build_time' => 1614369390,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerGQcnMQr');
