<?php

namespace App\Livewire;

use Livewire\Component;

class Test extends Component
{
    public $array = [
        [
            'name' => 'Alpha',
            '_id' => '1001',
            'email' => 'alpha@example.com'],
        [
            'name' => 'Bravo',
            '_id' => '1002',
            'email' => 'bravo@example.com'],
        [
            'name' => 'Charlie',
            '_id' => '1003',
            'email' => 'charlie@example.com'],
        [
            'name' => 'Delta',
            '_id' => '1004',
            'email' => 'delta@example.com'],
        [
            'name' => 'Echo',
            '_id' => '1005',
            'email' => 'echo@example.com'],
        [
            'name' => 'Foxtrot',
            '_id' => '1006',
            'email' => 'foxtrot@example.com'],
        [
            'name' => 'Golf',
            '_id' => '1007',
            'email' => 'golf@example.com'],
        [
            'name' => 'Hotel',
            '_id' => '1008',
            'email' => 'hotel@example.com'],
        [
            'name' => 'India',
            '_id' => '1009',
            'email' => 'india@example.com'],
        [
            'name' => 'Juliet',
            '_id' => '1010',
            'email' => 'juliet@example.com'],
        [
            'name' => 'Kilo',
            '_id' => '1011',
            'email' => 'kilo@example.com'],
        [
            'name' => 'Lima',
            '_id' => '1012',
            'email' => 'lima@example.com'],
        [
            'name' => 'Mike',
            '_id' => '1013',
            'email' => 'mike@example.com'],
        [
            'name' => 'November',
            '_id' => '1014',
            'email' => 'november@example.com'],
        [
            'name' => 'Oscar',
            '_id' => '1015',
            'email' => 'oscar@example.com'],
        [
            'name' => 'Papa',
            '_id' => '1016',
            'email' => 'papa@example.com'],
        [
            'name' => 'Quebec',
            '_id' => '1017',
            'email' => 'quebec@example.com'],
        [
            'name' => 'Romeo',
            '_id' => '1018',
            'email' => 'romeo@example.com'],
        [
            'name' => 'Sierra',
            '_id' => '1019',
            'email' => 'sierra@example.com'],
        [
            'name' => 'Tango',
            '_id' => '1020',
            'email' => 'tango@example.com'],
        [
            'name' => 'Uniform',
            '_id' => '1021',
            'email' => 'uniform@example.com'],
        [
            'name' => 'Victor',
            '_id' => '1022',
            'email' => 'victor@example.com'],
        [
            'name' => 'Whiskey',
            '_id' => '1023',
            'email' => 'whiskey@example.com'],
        [
            'name' => 'X-ray',
            '_id' => '1024',
            'email' => 'xray@example.com'],
        [
            'name' => 'Yankee',
            '_id' => '1025',
            'email' => 'yankee@example.com'],
        [
            'name' => 'Zulu',
            '_id' => '1026',
            'email' => 'zulu@example.com'],
        [
            'name' => 'Alpha',
            '_id' => '1027',
            'email' => 'alpha27@example.com'],
        [
            'name' => 'Bravo',
            '_id' => '1028',
            'email' => 'bravo28@example.com'],
        [
            'name' => 'Charlie',
            '_id' => '1029',
            'email' => 'charlie29@example.com'],
    ];

    public function updating()
    {
        //dd('updating');
    }

    public function updated()
    {
        //dd($this->array);
    }

    public function addTop()
    {
        array_unshift($this->array, [
            'name' => 'Top',
            '_id' => '9999',
            'email' => 'test']);
    }

    public function moveDown($key)
    {
        [
            $this->array[$key],
            $this->array[$key + 1]] = [
            $this->array[$key + 1],
            $this->array[$key]];
    }

    public function render()
    {
        return view('livewire.test');
    }
}
