<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);

        /**
         * Uncomment to return first name and last name only
         */
        //return [
        //    'first_name' => $this->first_name,
        //    'last_name' => $this->last_name
        //];
    }
}
