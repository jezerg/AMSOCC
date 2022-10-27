<?php

// AssetFilter.php

namespace App\Filters;

use App\Filters\AbstractFilter;
use Illuminate\Database\Eloquent\Builder;

class AssetFilter extends AbstractFilter
{
    protected $filters = [
        'type' => TypeFilter::class
    ];
}
