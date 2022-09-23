<?php
namespace Concrete\Package\Polyforeningen\Theme\Polyforeningen;

use Concrete\Core\Page\Theme\Theme;

class PageTheme extends Theme
{

    public function getThemeName()
    {
        return t('Polyforeningen');
    }

    public function getThemeDescription()
    {
        return t('An adaptation of Neat, ported to Concrete CMS v9');
    }

}

