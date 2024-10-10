<?php

use App\Models\User;

it('has a working factory', function () {
    $user = User::factory()->create();
    expect($user)->toBeInstanceOf(User::class);
});
