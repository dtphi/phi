<?php
namespace Phi\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;
use Imagine\Gd\Imagine;

/**
 * Image component
 */
class ImageComponent extends Component
{

    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];
    
    public function resize() {
        $image = new Imagine();
        
        return $image;
    }
}
