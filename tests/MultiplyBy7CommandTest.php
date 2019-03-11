<?php

namespace Tests;

use App\Multiply;
use App\MultiplyBy5Command;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Tester\CommandTester;

/**
 * @group integration
 */
class MultiplyBy7CommandTest extends TestCase
{
  public function testExecute()
  {
     $command = new MultiplyBy7Command(new Multiply());
     $commandTester = new CommandTester($command);

     $commandTester->execute([
         'number' => '7',
     ]);
     $output = $commandTester->getDisplay();
     $this->assertSame("5 * 7 = 35\n", $output);
   }
}
