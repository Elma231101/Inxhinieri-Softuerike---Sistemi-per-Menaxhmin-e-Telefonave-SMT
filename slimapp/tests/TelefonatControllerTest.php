<?php
use PHPUnit\Framework\TestCase;
use App\TelefonatController;

class TelefonatControllerTest extends TestCase {
    public function testKalkuloCmiminFinal() {
        $ctrl = new TelefonatController();
        $rez = $ctrl->kalkuloCmiminFinal(500, 50);
        $this->assertEquals(450, $rez);
    }
}
