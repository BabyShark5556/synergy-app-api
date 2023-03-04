<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class IncomeCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'income_date' => $this->income_date,
            'note' => $this->note,
            'amount' => $this->amount,
            'status' => $this->status,
            'company_project_id' => $this->company_project_id
        ];
    }
}
