<?php

namespace Mr4Lax\CodeScanner;

use Encore\Admin\Extension;

class CodeScanner extends Extension
{
    public $name = 'code-scanner';

    public $views = __DIR__ . '/../resources/views';

    public $assets = __DIR__ . '/../resources/assets';

    public $lang = __DIR__ . '/../resources/lang';
}
