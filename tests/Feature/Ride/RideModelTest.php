<?php

use App\Models\Ride;

it('has a working factory', function () {
    $ride = Ride::factory()->create();
    expect($ride)->toBeInstanceOf(Ride::class)
        ->and($ride->external_id)->toBeString()
        ->and($ride->recorded_at)->toBeInstanceOf(DateTime::class);
});
