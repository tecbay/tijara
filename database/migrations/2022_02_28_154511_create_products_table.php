<?php

use App\Domain\Inventory\Supports\Enums\ProductStatus;
use App\Support\Enums\Boolean;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
//            $table->id();
            $table->uuid()->primary()->index();
            $table->string('title', 128);
            $table->text('description')->nullable()->invisible();
            $table->text('category_uuid');
            $table->text('sku');
            $table->enum('track_quantity', Arr::pluck(Boolean::cases(), 'value'))->index();
            $table->enum('status', Arr::pluck(ProductStatus::cases(), 'value'))->index();
            $table->enum('physical_product', Arr::pluck(Boolean::cases(), 'value'))->index();
            $table->decimal('price');
            $table->decimal('compare_at_price');
            $table->decimal('cost_per_item');
            $table->decimal('weight');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
