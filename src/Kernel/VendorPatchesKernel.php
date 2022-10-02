<?php

declare (strict_types=1);
namespace Symplify\VendorPatches\Kernel;

use VendorPatches202210\Psr\Container\ContainerInterface;
use VendorPatches202210\Symplify\ComposerJsonManipulator\ValueObject\ComposerJsonManipulatorConfig;
use VendorPatches202210\Symplify\SymplifyKernel\HttpKernel\AbstractSymplifyKernel;
final class VendorPatchesKernel extends AbstractSymplifyKernel
{
    /**
     * @param string[] $configFiles
     */
    public function createFromConfigs(array $configFiles) : ContainerInterface
    {
        $configFiles[] = __DIR__ . '/../../config/config.php';
        $configFiles[] = ComposerJsonManipulatorConfig::FILE_PATH;
        return $this->create($configFiles);
    }
}
