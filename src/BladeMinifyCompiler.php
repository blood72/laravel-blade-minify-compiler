<?php

namespace Blood72\Minify\Compilers;

use Blood72\Minify\Blade;
use Illuminate\View\Compilers\BladeCompiler as BaseCompiler;

class BladeMinifyCompiler extends BaseCompiler
{
    /**
     * Compile the given Blade template contents.
     *
     * @param  string  $value
     * @return string
     */
    public function compileString($value)
    {
        $contents = parent::compileString($value);

        if (config('blade-minify.enabled')) {
            $contents = $this->minifyString($contents);
        }

        return $contents;
    }

    /**
     * Minify the compiled Blade template contents.
     *
     * @param  string  $value
     * @return string
     */
    protected function minifyString($value)
    {
        return Blade::minify($value, config('blade-minify.options', []));
    }
}
