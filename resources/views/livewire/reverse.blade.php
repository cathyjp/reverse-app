<?php

use function Livewire\Volt\{state, mount};

state(['word']);

mount(function () {
    $this->word_reverse = strrev($this->word);
});

?>

<div>
    <h1>元の値</h1>
    <p>{{ $word }}</p>
    <h1>文字を反転</h1>
    <p>{{ $this->word_reverse }}</p>
</div>
