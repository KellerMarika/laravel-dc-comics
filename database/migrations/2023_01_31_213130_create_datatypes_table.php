<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datatypes', function (Blueprint $table) {

            /**************** FUNZIONALI ************************************/

            $table->id()->comment('alias of the bigIncrements method. create an id column. you may pass a different column name'); //---disponibili altre versioni
            $table->timestamps()->comment('Adds created_at and updated_at columns'); //---disponibili altre versioni

            $table->rememberToken()->comment('creates a nullable, VARCHAR(100)that is intended to store the current "remember me" authentication token');

            /* softDelete */
            $table->softDeletes()->comment('Adds deleted_at column for soft deletes');
            $table->softDeletesTz($column = 'deleted_at', $precision = 0)->comment('adds a nullable deleted_at TIMESTAMP (with timezone) with an optional precision (total digits).intended to store the deleted_at timestamp needed for Eloquent\'s "soft delete" functionality');

            /* foreignId */
            $table->foreignIdFor(User::class)->comment('foreignIdFor method adds a {column}_id UNSIGNED BIGINT for a given model class');
            $table->foreignId('foreignId__id')->comment('creates an UNSIGNED BIGINT ');
            $table->foreignUuid('foreignUuid__id')->comment('creates a UUID ');



            /**************** NUMERICI ************************************/

            /* incrementali */

            //$table->id()->comment('alias of the bigIncrements method. create an id column. you may pass a different column name');--- LARAVEL default migration
            $table->bigIncrements('bigIncrements__id')->comment('auto-incrementing UNSIGNED BIGINT (primary key) // ');
            $table->increments('increments__id')->comment('auto-incrementing UNSIGNED INTEGER as a primary key');
            $table->mediumIncrements('mediumIncrements__id')->comment('auto-incrementing UNSIGNED MEDIUMINT as a primary key');
            $table->smallIncrements('smallIncrements__id')->comment('auto-incrementing UNSIGNED SMALLINT as a primary key');
            $table->tinyIncrements('tinyIncrements__id')->comment('auto-incrementing UNSIGNED TINYINT as a primary key');


            /* interi */
            $table->bigInteger('bigInteger__votes')->comment('BIGINT ');
            $table->integer('integer__votes')->comment('INTEGER');
            $table->mediumInteger('mediumInteger__numbers')->comment('MEDIUMINT');
            $table->smallInteger('smallInteger__votes')->comment('SMALLINT');
            $table->tinyInteger('tinyInteger__numbers')->comment('TINYINT');

            /* floats */
            $table->double('double__column', 15, 4)->comment('DOUBLE with the given precision (total digits=15) and scale (decimal digits=4)');
            $table->decimal('decimal__amount', 5, 2)->comment('DECIMAL with the given precision (total digits=5) and scale (decimal digits=2)');
            $table->float('float__amount', 8, 2)->comment('FLOAT with the given precision (total digits=8) and scale (decimal digits=2)');


            /**************** CHECBOX ************************************/

            /* boleani */
            $table->binary('binary__data')->comment('BLOB equivalent');
            $table->boolean('boolean__confirmed')->comment('BOOLEAN equivalent');

            /**************** RADIO / SELECT ************************************/

            $table->enum('enum__choices', array('option1', 'option2', 'option3', 'option4'))->comment('ENUM with the given valid values');
            $table->set('set__choices', ['option1', 'option2', 'option3'])->comment('SET column with the given list of valid values');


            /**************** DATE ************************************/

            /* date */
            $table->date('date__created_at')->comment('	DATE');
            $table->dateTime('dateTime__created_at')->comment('DATETIME');
            $table->dateTimeTz('dateTimeTz__created_at', $precision = 0)->comment('DATETIME (with timezone) with an optional precision (total digits)');
            $table->time('time__sunrise')->comment('TIME');
            $table->timeTz('sunrise', $precision = 0)->comment('TIME (with timezone) with an optional precision (total digits)');
            $table->timestamp('timestamp__added_on')->comment('	TIMESTAMP');
            $table->timestampTz('added_at', $precision = 0)->comment('TIMESTAMP (with timezone)  with an optional precision (total digits)');
            //$table->timestamps()->comment('Adds created_at and updated_at columns'); LARAVEL default migration
            $table->timestampsTz($precision = 0)->comment('Adds created_at and updated_at columns (with timezone) with an optional precision (total digits)');
            $table->nullableTimestamps(0)->comment('alias of the timestamps method');


            /* space */
            $table->geometryCollection('geometryCollection__positions')->comment('geometryCollection method creates a GEOMETRYCOLLECTION');
            $table->geometry('geometry__positions')->comment('The geometry method creates a GEOMETRY');


            /**************** TEXT ************************************/

            /* char */
            $table->char('char__name', 4)->comment('CHAR with a length');

            /* text */

           
            $table->string('stringAddingLength100__name', 100)->comment('VARCHAR with length');
            $table->ipAddress('ipAddress__visitor')->comment('VARCHAR');

            /**************** TEXTAREA ************************************/

            $table->text('text__description')->comment('TEXT');
            $table->longText('longText__description')->comment('LONGTEXT');
            $table->mediumText('mediumText__description')->comment('MEDIUMTEXT');




            /* boh */
            $table->json('json__options')->comment('JSON');
            $table->jsonb('jsonb__options')->comment('JSONB');


            $table->lineString('lineString__positions')->comment('LINESTRING');
            $table->multiLineString('positions')->comment('MULTILINESTRING');

            $table->point('position')->comment('POINT');
            $table->multiPoint('positions')->comment('MULTIPOINT');

            $table->polygon('position')->comment('POLYGON');
            $table->multiPolygon('positions')->comment('MULTIPOLYGON');



            $table->macAddress('macAddress__device')->comment('creates a column that is intended to hold a MAC address. Some database systems, such as PostgreSQL, have a dedicated column type for this type of data. Other database systems will use a string equivalent column');

            $table->morphs('morphs__taggable')->comment('adds a {column}_id UNSIGNED BIGINT and a {column}_type VARCHAR. This method is intended to be used when defining the columns necessary for a polymorphic Eloquent relationship. (In the example, taggable_id and taggable_type columns would be created)');

            $table->nullableMorphs('taggable')->comment('similar to the morphs method; however, the columns that are created will be "nullable"');

            $table->nullableUlidMorphs('taggable')->comment(' similar to the ulidMorphs method; however, the columns that are created will be "nullable');

            $table->nullableUuidMorphs('taggable')->comment('similar to the uuidMorphs method; however, the columns that are created will be "nullable');






















        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datatypes');
    }
};