<?php

namespace Inmanturbo\FreestackClient\Commands;

use Illuminate\Console\Command;

class FreestackClientCommand extends Command
{
    public $signature = 'freestack-client';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
