<?php

namespace App\Repositories;

use App\Models\Increment;
use App\Repositories\BaseRepository;

/**
 * Class IncrementRepository
 * @package App\Repositories
 * @version December 25, 2021, 10:36 pm UTC
*/

class IncrementRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'product_id',
        'name',
        'width',
        'price'
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
        return Increment::class;
    }
}
