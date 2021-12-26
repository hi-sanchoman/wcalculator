<?php

namespace App\Repositories;

use App\Models\Material;
use App\Repositories\BaseRepository;

/**
 * Class MaterialRepository
 * @package App\Repositories
 * @version December 25, 2021, 9:28 pm UTC
*/

class MaterialRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'category_id',
        'name',
        'slug',
        'from_what'
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
        return Material::class;
    }
}
