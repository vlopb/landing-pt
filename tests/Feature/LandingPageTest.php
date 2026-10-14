<?php

namespace Tests\Feature;

use Tests\TestCase;

class LandingPageTest extends TestCase
{
    public function test_the_technical_landing_page_is_available(): void
    {
        $response = $this->get('/');

        $response
            ->assertOk()
            ->assertSee('Plataforma de Gestión Digital')
            ->assertSee('Entregable E0')
            ->assertSee('Alpine.js');
    }
}
