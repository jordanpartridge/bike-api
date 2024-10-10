<?php

use function Pest\Laravel\get;

it('redirects unauthenticated users to login page', function () {
    $response = get('/admin');

    $response->assertStatus(302);
    $response->assertRedirect('/admin/login');
});
