<?php

use function Livewire\Volt\{state, mount};

state(['mode', 'word']);

mount(function () {
    $this->disp_mode = '';
    $this->word_converted = '';

    switch ($this->mode) {
        case 'upper':
            $this->disp_mode = '大文字に変換';
            $this->word_converted = strtoupper($this->word);
            break;
        case 'lower':
            $this->disp_mode = '小文字に変換';
            $this->word_converted = strtolower($this->word);
            break;
    }
});

?>

<div>
    <h1>元の値</h1>
    <p>{{ $word }}</p>
    <h1>文字変換：{{ $this->disp_mode }}</h1>
    <p>{{ $this->word_converted }}</p>
</div>
