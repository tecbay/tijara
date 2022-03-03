<?php

namespace App\Domain\Inventory\Aggregates;

use App\Domain\Inventory\Exceptions\InventoryCannotBeNegative;
use App\Domains\Inventory\DataTransferObjects\ProductDTO;
use App\Domains\Inventory\StorableEvents\ProductCreated;
use App\Domains\Inventory\StorableEvents\ProductInventoryAdded;
use App\Domains\Inventory\StorableEvents\ProductInventoryRemoved;
use App\Domains\Inventory\StorableEvents\ProductPhotoAdded;
use App\Domains\Inventory\StorableEvents\ProductPhotoRemoved;
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
            throw new InventoryCannotBeNegative();
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
