<?php

use App\Models\RideStat;

it('has a working factory', function () {
    $stat = RideStat::factory()->create();
    expect($stat)->toBeInstanceOf(RideStat::class);
});
