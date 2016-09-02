<?php
/**
 * @package    agitation/common
 * @link       http://github.com/agitation/AgitBaseBundle
 * @author     Alex Günsche <http://www.agitsol.com/>
 * @copyright  2012-2015 AGITsol GmbH
 * @license    http://opensource.org/licenses/MIT
 */

namespace Agit\BaseBundle\Tests\Pluggable;

use Symfony\Component\EventDispatcher\EventDispatcher;
use Doctrine\Common\Cache\ArrayCache;
use Agit\BaseBundle\Pluggable\AbstractPluggableService;
use Agit\BaseBundle\Pluggable\RegistrationData;

class AbstractCacheAwarePluggableServiceTest extends \PHPUnit_Framework_TestCase
{
    public function testWarmUpValues()
    {
//         $cacheProvider = new ArrayCache();
//         $eventDispatcher = new EventDispatcher();
//         $pluggableService = $this->createMockPluggableService($eventDispatcher, $cacheProvider);
//
//         // as we can't interact with the EventDispatcher during the warm-up,
//         // we simply set the extension manually and call warmUp afterwards.
//         $pluggableService->register($this->createRegistrationData());
//         $pluggableService->warmUp('/we/dont/care');
//
//         $this->assertEquals(
//             [(object)['foo' => 'bar']],
//             $cacheProvider->fetch('agit.test.pluggable'));
    }

    private function createMockPluggableService($eventDispatcher, $cacheProvider)
    {
//         $pluggableService = $this->getMockBuilder('\Agit\BaseBundle\Pluggable\AbstractCacheAwarePluggableService')
//             ->setMethods(['getServiceTag'])
//             ->getMock();
//
//         $pluggableService->expects($this->any())
//             ->method('getServiceTag')
//             ->will($this->returnValue('agit.test.pluggable'));
//
//         $pluggableService->setEventDispatcher($eventDispatcher);
//         $pluggableService->setCacheProvider($cacheProvider);
//
//         return $pluggableService;
    }

    private function createRegistrationData()
    {
//         $registrationData = new RegistrationData();
//         $registrationData->set('foo', 'bar');
//
//         return $registrationData;
    }
}
