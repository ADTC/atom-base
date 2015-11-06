<?php

namespace PhpIntegrator;

class ClassListProvider extends Tools implements ProviderInterface
{
    /**
     * {@inheritDoc}
     */
    public function execute(array $args = [])
    {
        $index = json_decode(file_get_contents(Config::get('indexClasses')), true);

        return [
            'success' => true,
            // If it evaluates to false, the class map hasn't been generated yet, don't error out as it can take a while
            // for it to be generated.
            'result' => $index ?: []
        ];
    }
}