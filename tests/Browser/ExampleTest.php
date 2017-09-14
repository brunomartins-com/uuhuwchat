<?php

namespace Tests\Browser;

use App\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ExampleTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $user1 = factory(User::class)->create([
            'name' => 'Bruno Martins',
            'email' => 'hello@brunomartins.com',
            'password' => bcrypt('123456')
        ]);

        $user2 = factory(User::class)->create([
            'name' => 'Santos',
            'email' => 'falecom@brunomartins.com',
            'password' => bcrypt('secret')
        ]);

        $this->browse(function ($first, $second) use($user1, $user2) {
            $first->loginAs($user1)
                ->visit('/chat')
                ->waitFor('.chat-composer');

            $second->loginAs($user2)
                ->visit('/chat')
                ->waitFor('.chat-composer')
                ->type('#message', 'Hey Bruno')
                ->press('Send');

            $first->waitForText('Hey Bruno')
                ->assertSee('Santos');
        });
    }
}
