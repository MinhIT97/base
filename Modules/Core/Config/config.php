<?php

return [
    'name'  => 'Core',
    'stubs' => [
        'repository_interface' => base_path() . '/Modules/Core/Console/stubs/Repository.stub',
        'repository_eloquent'  => base_path() . '/Modules/Core/Console/stubs/RepositoryEloquent.stub',
        'service'              => base_path() . '/Modules/Core/Console/stubs/Service.stub',
        'trait'                => base_path() . '/Modules/Core/Console/stubs/Trait.stub',
        'presenter'            => base_path() . '/Modules/Core/Console/stubs/Presenter.stub',
    ],
];
