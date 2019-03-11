<?php

namespace Tests;

use App\Multiply;
use App\MultiplyBy9Command;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Tester\CommandTester;

/**
 * @group integration
 */
class MultiplyBy9CommandTest extends TestCase
{
  public function testExecute()
  {
     $command = new MultiplyBy9Command(new Multiply());
     $commandTester = new CommandTester($command);

     $commandTester->execute([
         'number' => '9',
     ]);
     $output = $commandTester->getDisplay();
     $this->assertSame("9 * 9 = 81\n", $output);
   }
}
