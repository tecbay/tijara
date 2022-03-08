<?php

namespace App\Domain\Inventory\Requests;

use App\Domain\Inventory\Supports\Enums\ProductStatus;
use App\Support\Enums\Boolean;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Enum;
use Tecbay\Laramedia\Traits\ValidateMedia;

/**
 * @property string $title
 * @property  string|null $description
 * @property  string $category_uuid
 * @property  array $medias
 * @property  string|null $sku
 * @property  string $track_quantity
 * @property  string $status
 * @property  float $price
 * @property  float $compare_at_price
 * @property  float $cost_per_item
 * @property  int $inventory_qty
 * @property  string $physical_product
 * @property  float|null $weight
 */
class ProductCreateRequest extends FormRequest
{
    use ValidateMedia;

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {



        return [
            'uuid'             => ['exclude'],
            'title'            => ['required', 'string', 'max:255'],
            'description'      => ['sometimes', 'string', 'max:255'],
            'category_uuid'    => ['required', 'exists:categories,uuid', 'string', 'max:255'],
            'medias'           => ['sometimes', 'array', 'max:3', $this->images()],
            'sku'              => ['sometimes', 'string', 'max:255'],
            'track_quantity'   => ['required', new Enum(Boolean::class)],
            'status'           => ['required', new Enum(ProductStatus::class)],
            'price'            => ['required', 'numeric', 'min:0'],
            'compare_at_price' => ['sometimes', 'numeric', 'min:0', 'lt:price'],
            'cost_per_item'    => ['sometimes', 'numeric', 'min:0'],
            'inventory_qty'    => [
                // The initial inventory can be Zero(0).
                // Because, maybe we will
                // buy the product later
                'sometimes', 'numeric', 'min:0',
                Rule::requiredIf(fn() => $this->track_quantity == Boolean::YES),
            ],
            'physical_product' => ['required', new Enum(Boolean::class)],
            'weight'           => [
                'sometimes', 'numeric', 'min:0',
                Rule::requiredIf(fn() => $this->physical_product == Boolean::YES),
            ],
        ];
    }
}
