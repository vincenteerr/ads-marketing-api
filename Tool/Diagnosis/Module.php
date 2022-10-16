<?php

namespace Tool\Diagnosis;

use core\Profile\BaseModule;

class Module extends BaseModule
{
    public function adGetV2()
    {
        return new AdGetV2($this->client);
    }

    public function suggestionGet()
    {
        return new SuggestionGet($this->client);
    }

    public function suggestionAccept()
    {
        return new SuggestionAccept($this->client);
    }

}
