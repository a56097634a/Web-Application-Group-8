{"filter":false,"title":"2016_05_02_203314_create_diet_programs_table.php.php","tooltip":"/database/migrations/2016_05_02_203314_create_diet_programs_table.php.php","undoManager":{"mark":3,"position":3,"stack":[[{"start":{"row":14,"column":10},"end":{"row":15,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":15,"column":0},"end":{"row":15,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":15,"column":8},"end":{"row":30,"column":11},"action":"insert","lines":["Schema::create('diet_programs', function (Blueprint $table) {","            $table->increments('DPId');","            $table->string('DPName');","            $table->string('DPImpact');","            $table->string('DPDescritption');","            $table->integer('DPSection');","            $table->integer('DPLength');","            $table->integer('DPCalMax');","            $table->integer('DPCalAvg');","            $table->integer('DPProteinAvg');","            $table->integer('DPFiberAvg');","            $table->integer('DPSugarMax');","            $table->integer('DPFatMax');","            $table->timestamps();","","        });"],"id":3}],[{"start":{"row":40,"column":10},"end":{"row":41,"column":0},"action":"insert","lines":["",""],"id":4},{"start":{"row":41,"column":0},"end":{"row":41,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":41,"column":8},"end":{"row":42,"column":0},"action":"insert","lines":["Schema::drop('diet_programs');",""],"id":5}]]},"ace":{"folds":[],"scrolltop":171.5,"scrollleft":0,"selection":{"start":{"row":43,"column":5},"end":{"row":43,"column":5},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":9,"state":"php-doc-start","mode":"ace/mode/php"}},"timestamp":1462221899255,"hash":"d763566119594fe901f5a1ac546a5174a4fbfa23"}