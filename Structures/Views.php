<?php

class View
{

    public $components = [];

    public function __construct($name)
    {
        $this->name = $name;
    }
    static function head()
    {
        require("{$_SERVER['DOCUMENT_ROOT']}/views/extra/header.php");
    }
    public function component(string $name, array $slots, bool $hasMore = false)
    {
        if (!array_key_exists($name, $this->components) || (array_keys($slots) === range(0, count($slots) - 1))) {
            return;
        }

        $component = $this->components[$name];

        foreach ($slots as $name => $value) {
            $component = str_replace('{' . $name . '}', htmlspecialchars($value), $component);
        }

        echo $component;
    }
    public function addComponent($name, $html)
    {
        $this->components[$name] = $html;
    }
    private static function _404()
    {
        die("File not found.");
    }
}


$Sakusen = new View('Sex');

$Sakusen->addComponent('post', `
<div class="bg-indigo-400 p-2 m-2 shadow rounded md:w-max md:mx-auto">
<p class="text-white font-bold text-2xl border-b p-1 text-center">{title}</p>

<img class="w-2/4 md:w-3/6 mx-auto" src="{imageUrl}" alt="" />
<p class="italic"><b class="text-blue-800">By:</b> {poster}</p>
<div class="space-x-2">
  <div class="inline-block text-indigo-900 font-bold">Comment</div>
  <div class="inline-block font-bold text-green-700">Like</div>
  <div class="inline-block font-bold text-red-600">Report</div>
</div>
</div>
`)