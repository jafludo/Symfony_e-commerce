<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container5x0lqsP\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container5x0lqsP/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container5x0lqsP.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container5x0lqsP\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container5x0lqsP\App_KernelDevDebugContainer([
    'container.build_hash' => '5x0lqsP',
    'container.build_id' => '66a0f46b',
    'container.build_time' => 1593338057,
], __DIR__.\DIRECTORY_SEPARATOR.'Container5x0lqsP');
