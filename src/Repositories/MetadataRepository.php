<?php


namespace CwsDigital\TwillMetadata\Repositories;

use A17\Twill\Repositories\ModuleRepository;
use A17\Twill\Repositories\Behaviors\HandleTranslations;
use CwsDigital\TwillMetadata\Models\Metadata;


class MetadataRepository extends ModuleRepository
{
    use HandleTranslations;

    public function __construct(Metadata $model)
    {
        $this->model = $model;
    }
}