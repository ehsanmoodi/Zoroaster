<?php

    namespace KarimQaderi\Zoroaster\Abstracts;

    use KarimQaderi\Zoroaster\Traits\Authorization;

    abstract class ZoroasterResource
    {
        use Authorization;


        public $model = '';

        /**
         * The single value that should be used to represent the resource when being displayed.
         *
         * @var string
         */
        public $title = 'title';

        public $labels = '';
        public $label = '';

        /**
         * The columns that should be searched.
         *
         * @var array
         */
        public $search = [
            'id' ,
        ];

        abstract public function fields();

        abstract public function filters();

        public function AddingAdditionalConstraintsForViewIndex($eloquent)
        {
            return $eloquent;
        }


    }