<?php

namespace App\Repositories;

use App\Models\Inner;
use App\Repositories\BaseRepository;

/**
 * Class InnerRepository
 * @package App\Repositories
 * @version February 24, 2022, 10:50 am UTC
*/

class InnerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'product_id',
        'name',
        'price',
        'status'
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
        return Inner::class;
    }
}
