<?php

it('sends to filament', function () {
    $response = $this->get('/');

    $response->assertStatus(302);
    $response->assertRedirect('/admin');
});
