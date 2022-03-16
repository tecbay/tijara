<?php

namespace App\Domain\Inventory;

use App\Domain\Inventory\DataTransferObjects\ProductDTO;
use App\Domain\Inventory\Events\ProductCreated;
use App\Domain\Inventory\Events\ProductInventoryAdded;
use App\Domain\Inventory\Events\ProductInventoryRemoved;
use App\Domain\Inventory\Events\ProductPhotoAdded;
use App\Domain\Inventory\Events\ProductPhotoRemoved;
use App\Domain\Inventory\Exceptions\InventoryCannotBeNegative;
use Spatie\EventSourcing\AggregateRoots\AggregateRoot;

class ProductAggregateRoot extends AggregateRoot
{

    protected int $inventory = 0;

    public function create(ProductDTO $productDTO): self
    {
        $this->recordThat(new ProductCreated(
            title: $productDTO->title,
            description: $productDTO->description,
            categoryUuid: $productDTO->category->uuid,
            medias: $productDTO->medias,
            sku: $productDTO->sku,
            trackQuantity: $productDTO->track_quantity,
            status: $productDTO->status,
            price: $productDTO->price,
            compareAtPrice: $productDTO->compareAtPrice,
            costPerItem: $productDTO->costPerItem,
            physicalProduct: $productDTO->physicalProduct,
            weight: $productDTO->weight
        ));

        return $this;
    }

    public function addInventory(int $qty): self
    {

        $this->recordThat(new ProductInventoryAdded($qty));

        return $this;
    }

    /**
     * @throws InventoryCannotBeNegative
     */
    public function removeInventory(int $qty): self
    {
        if (($this->inventory - $qty) < 0) {
            throw InventoryCannotBeNegative::withMessages([
                'invalidInput' => 'Inventory can\'t be negative.',
            ]);
        }

        $this->recordThat(new ProductInventoryRemoved($qty));

        return $this;
    }

    public function addPhoto(string $temporaryMediaUuid): static
    {
        $this->recordThat(new ProductPhotoAdded(
            temporaryMediaUuid: $temporaryMediaUuid
        ));

        return $this;
    }

    public function addRemove(string $temporaryMediaUuid)
    {
        $this->recordThat(new ProductPhotoRemoved(
            temporaryMediaUuid: $temporaryMediaUuid
        ));

        return $this;
    }

    protected function applyProductInventoryAdded(ProductInventoryAdded $event)
    {
        $this->inventory += $event->qty;
    }

    protected function applyProductInventoryRemoved(ProductInventoryRemoved $event)
    {
        $this->inventory -= $event->qty;
    }

}
