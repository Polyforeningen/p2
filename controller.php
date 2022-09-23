namespace Concrete\Package\P2;

use Concrete\Core\Package\Package;
use Concrete\Core\Page\Theme\Theme;

defined('C5_EXECUTE') or die("Access Denied.");

class Controller extends Package
{
    protected $pkgHandle = 'polyforeningen';
    protected $appVersionRequired = '9.0.0';
    protected $pkgVersion = '2.0';
	protected $pkgAllowsFullContentSwap = false;

    public function getPackageDescription()
    {
        return t("An adaptation of Neat, ported to Concrete CMS v9.");
    }

    public function getPackageName()
    {
        return t("Polyforeningen");
    }

    public function install()
    {
        $pkg = parent::install();
        Theme::add('polyforeningen', $pkg);
    }
}
