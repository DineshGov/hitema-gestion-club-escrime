<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJWK0yui\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJWK0yui/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerJWK0yui.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerJWK0yui\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerJWK0yui\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'JWK0yui',
    'container.build_id' => 'e2116d7d',
    'container.build_time' => 1562056954,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJWK0yui');
