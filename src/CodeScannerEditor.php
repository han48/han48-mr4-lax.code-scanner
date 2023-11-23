<?php

namespace Mr4Lax\CodeScanner;

class CodeScannerEditor extends \Encore\Admin\Form\Field\Text
{
    protected $view = 'mr4-lax::code_scanner';

    protected static $css = [
        'vendor/mr4-lc/code-scanner/css/code-scanner.css',
    ];

    protected static $js = [
        'vendor/mr4-lc/code-scanner/js/zxing.min.js',
        'vendor/mr4-lc/code-scanner/js/code-scanner.js',
    ];

    protected $mode = 'single';

    public function setMode($mode)
    {
        $this->mode = $mode;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function render()
    {
        $this->initPlainInput();

        if (!$this->withoutIcon) {
            $this->prepend('<i class="fa '.$this->icon.' fa-fw"></i>');
        }
        $this->defaultAttribute('type', 'text')
            ->defaultAttribute('id', $this->id)
            ->defaultAttribute('name', $this->elementName ?: $this->formatName($this->column))
            ->defaultAttribute('value', old($this->elementName ?: $this->column, $this->value()))
            ->defaultAttribute('class', 'form-control '.$this->getElementClassString())
            ->defaultAttribute('placeholder', $this->getPlaceholder())
            ->mountPicker()
            ->addVariables([
                'prepend' => $this->prepend,
                'append'  => $this->append,
                'mode'  => $this->mode,
            ]);

        return parent::render();
    }
}
