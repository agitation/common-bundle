<?php
/**
 * @package    agitation/intl
 * @link       http://github.com/agitation/AgitIntlBundle
 * @author     Alex Günsche <http://www.agitsol.com/>
 * @copyright  2012-2015 AGITsol GmbH
 * @license    http://opensource.org/licenses/MIT
 */

namespace Agit\IntlBundle\Event;

use Symfony\Component\EventDispatcher\Event;
use Agit\IntlBundle\Service\TranslationCatalogService;

/**
 * This event is triggered before the files for generating a global catalog are
 * collected and merged with the global catalog. Listeners can generate files in
 * a temporary location and pass them to the registerCatalogFile method.
 *
 * To remove temporary files, listen to the BundleFilesCleanupEvent.
 */
class CatalogRegistrationEvent extends Event
{
    private $TranslationCatalogService;

    public function __construct(TranslationCatalogService $TranslationCatalogService)
    {
        $this->TranslationCatalogService = $TranslationCatalogService;
    }

    public function registerCatalogFile($locale, $filePath)
    {
        return $this->TranslationCatalogService->registerCatalogFile($locale, $filePath);
    }
}
