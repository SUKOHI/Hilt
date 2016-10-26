<?php namespace Sukohi\Hilt;

use Illuminate\Support\Facades\Blade;

class Hilt {

    public static function directive() {

        Blade::directive('error', function($expression) {

            return "<?php echo view('vendor.hilt.error', ['key' => ". $expression ."])->render(); ?>";

        });

    }

}