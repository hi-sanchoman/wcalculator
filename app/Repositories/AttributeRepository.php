<?php

namespace App\Repositories;

use App\Models\Attribute;
use App\Repositories\BaseRepository;

/**
 * Class AttributeRepository
 * @package App\Repositories
 * @version February 24, 2022, 11:10 am UTC
*/

class AttributeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'product_id',
        'name',
        'others',
        'ourselves'
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
        return Attribute::class;
    }
}
