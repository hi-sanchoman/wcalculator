<?php

namespace App\Repositories;

use App\Models\Addon;
use App\Repositories\BaseRepository;

/**
 * Class AddonRepository
 * @package App\Repositories
 * @version December 25, 2021, 9:49 pm UTC
*/

class AddonRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'category_id',
        'slug',
        'name',
        'price',
        'type'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Addon::class;
    }
}
