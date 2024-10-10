<?php

use App\Models\User;
use Database\Factories\UserFactory;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Query\Builder;
use Illuminate\Notifications\Notifiable;

it('has proper fillable', function () {
    $user = new User();
    expect($user->getFillable())->toBe(['name', 'email', 'password']);
});

it('has proper hidden', function () {
    $user = new User();
    expect($user->getHidden())->toBe(['password', 'remember_token']);
});

it('has proper casts', function () {
    $user = new User();
    expect($user->getCasts())->toBe(['id' => 'int', 'email_verified_at' => 'datetime', 'password' => 'hashed']);
});

it('can find its factory', function () {
     $user = new User();
     expect($user->factory())->toBeInstanceOf(UserFactory::class);
});

it('extends Authenticatable', function () {
    $user = new User();
    expect($user)->toBeInstanceOf(Authenticatable::class);
});

it('has notification trait', function () {
    $user = new User();
    expect(in_array(Notifiable::class, class_uses_recursive($user)))->toBeTrue();
});
