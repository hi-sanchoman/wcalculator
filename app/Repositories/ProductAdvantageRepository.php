<?php

namespace App\Repositories;

use App\Models\ProductAdvantage;
use App\Repositories\BaseRepository;

/**
 * Class ProductAdvantageRepository
 * @package App\Repositories
 * @version February 24, 2022, 10:15 am UTC
*/

class ProductAdvantageRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'product_id',
        'name'
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
        return ProductAdvantage::class;
    }
}
