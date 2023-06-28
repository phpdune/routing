<?php

/*
 * This file is part of Dune Framework.
 *
 * (c) Abhishek B <phpdune@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Dune\Routing;

use Dune\Core\App;
use Illuminate\Container\Container;

trait RouterContainer
{
    /**
     * \DI\Container instance
     *
     * @var ?Container
     */
    protected ?Container $container = null;
    /**
     * setting up the container instance
     */
    public function __setUp(): void
    {
        if(!$this->container) {
            if(class_exists(App::class)) {
                $container = App::container();
            } else {
                $container = new Container();
            }
            $this->container = $container;
        }
    }
}
