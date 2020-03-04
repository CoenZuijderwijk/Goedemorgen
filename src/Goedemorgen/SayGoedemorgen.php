<?php
namespace Goedemorgen;
class SayGoedemorgen {
    public function speak($naam, $datum) {
        return "Goedemorgen van " . $naam . ". Vandaag is het " . $datum;
    }
}
?>